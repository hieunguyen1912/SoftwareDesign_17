<?php

namespace App\Http\Controllers;

use App\Mail\Websitemail;
use App\Models\BlogCategory;
use App\Models\Destination;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class FrontController extends Controller
{
    public function home() {

        $posts = Post::with('blog_category')->orderBy('id','desc')->get()->take(3);
        $destinations = Destination::orderBy('view_count', 'desc')->get()->take(8);
        return view('front.home', compact('posts', 'destinations'));
    }

    public function about() {
        return view('front.about');
    }

    public function registration() {
        return view('front.registration');
    }

    public function login() {
        return view('front.login');
    }

    public function forget_password() {
        return view('front.forget_password');
    }

    public function registration_submit(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'retype_password' => 'required|same:password'
        ]);

        $token = hash('sha256', time());

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->token = $token;
        $user->save();

        $verification_link = route('registration_verify_email', ['email' => $request->email, 'token' => $token]);
        $subject = 'User Account Verification';
        $message = 'Please click the following link to verify your email:<br> <a href="'.$verification_link.'">Verify Email</a>';
        Mail::to($request->email)->send(new Websitemail($subject,$message));

        return redirect()->back()->with('success', 'Registration is Successfull, but you have to verify your email. Please check your email');
    }

    public function registration_verify_email($email, $token) {
        $user = User::where('token',$token)->where('email',$email)->first();
        if(!$user) {
            return redirect()->route('login');
        }
        $user->token = '';
        $user->status = 1;
        $user->update();

        return redirect()->route('login')->with('success', 'Your email is verified. You can login now.');
    }

    public function login_submit(Request $request) {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $check = $request->all();
        $data = [
            'email' => $check['email'],
            'password' => $check['password'],
            'status' => 1
        ];


        if(Auth::guard('web')->attempt($data)) {
            return redirect()->route('user_dashboard')->with('success', 'Login successfully');
        } else {
            return redirect()->route('login')->with('error', 'Invalid email or password');
        }
    }

    public function forget_password_submit(Request $request) {
        $request->validate([
            'email' => ['required', 'email'],
        ]);
    
        $user = User::where('email',$request->email)->first();
        if(!$user) {
            return redirect()->back()->with('error','Email is not found');
        }
    
        $token = hash('sha256',time());
        $user->token = $token;
        $user->update();
        
        $reset_link = route('reset_password', ['token' => $token, 'email' => $request->email]);
        $subject = "Password Reset";
        $message = "To reset password, please click on the link below:<br>";
        $message .= "<a href='".$reset_link."'>Click Here</a>";
    
        Mail::to($request->email)->send(new Websitemail($subject,$message));
    
        return redirect()->back()->with('success','We have sent a password reset link to your email. Please check your email. If you do not find the email in your inbox, please check your spam folder.');
    }

    public function reset_password($token,$email) {
        $user = User::where('email',$email)->where('token',$token)->first();
        if(!$user) {
            return redirect()->route('login')->with('error','Token or email is not correct');
        }
        return view('front.reset_password', compact('token','email'));
    }

    public function reset_password_submit(Request $request, $token, $email) {
        $request->validate([
            'password' => ['required'],
            'retype_password' => ['required', 'same:password']
        ]);

        $user = User::where('email',$request->email)->where('token',$request->token)->first();
        $user->password = Hash::make($request->password);
        $user->token = "";
        $user->update();

        return redirect()->route('login')->with('success','Password reset successfully');
    }


    public function blog() {

        $posts = Post::with('blog_category')->paginate(3);
        return view('front.blog', compact('posts'));
    }

    public function post($slug) {
        $categories = BlogCategory::get();
        $post = Post::with('blog_category')->where('slug', $slug)->first();
        $latest_posts = Post::with('blog_category')->orderBy('id', 'desc')->get()->take(5);
        return view('front.post', compact('post', 'categories', 'latest_posts'));
    }

    public function category($slug) {

        $category = BlogCategory::where('slug', $slug)->first();
        $posts = Post::with('blog_category')->where('blog_category_id', $category->id)->orderBy('id', 'desc')->paginate(9);  
        return view('front.category', compact('posts','category'));
    }


    public function destinations() {
        $destinations = Destination::orderBy('id', 'desc')->paginate(9);
        return view('front.destinations', ['destinations'=>$destinations]);
    }

    public function destination($slug) {
        $destination = Destination::where('slug', $slug)->first();
        $destination->view_count = $destination->view_count + 1;
        $destination->update();
        return view('front.destination', compact('destination'));
    }
}
