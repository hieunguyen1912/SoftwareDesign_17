<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Traveloka</title>

    <link rel="icon" type="image/png" href="{{ asset('uploads/logo.png') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('dist/css/iziToast.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('user/style.css') }}">
    <script src="{{ asset('dist/js/iziToast.min.js') }}"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="bg-primary text-white text-sm py-2">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <div class="d-flex align-items-center mr-4">
                    <i class="fas fa-phone-alt mr-2"></i>
                    <span>111-222-3333</span>
                </div>
                <div class="d-flex align-items-center">
                    <i class="fas fa-envelope mr-2"></i>
                    <span>contact@example.com</span>
                </div>
            </div>
            <div class="d-flex align-items-center">
                <div class="d-flex align-items-center mr-4">
                    <i class="fas fa-sign-in-alt mr-2"></i>
                    <a href="{{ route('login') }}" class="text-white">Login</a>
                </div>
                <div class="d-flex align-items-center">
                    <i class="fas fa-user mr-2"></i>
                    <a href="{{ route('registration') }}" class="text-white">Sign Up</a>
                </div>
            </div>
        </div>
    </div>

    @include('front.layout.nav')

    @yield('main_content')
    
    
    <div class="footer">
        <div class="container">
            <div class="row">
            <!-- Column 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="item pb_50">
                <h2 class="heading">Important Pages</h2>
                <ul class="useful-links">
                    <li>
                    <a href="index.html"><i class="fas fa-angle-right"></i> Home</a>
                    </li>
                    <li>
                    <a href="destinations.html"><i class="fas fa-angle-right"></i> Destinations</a>
                    </li>
                    <li>
                    <a href="packages.html"><i class="fas fa-angle-right"></i> Packages</a>
                    </li>
                    <li>
                    <a href="blog.html"><i class="fas fa-angle-right"></i> Blog</a>
                    </li>
                </ul>
                </div>
            </div>
            <!-- Column 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="item pb_50">
                <h2 class="heading">Useful Links</h2>
                <ul class="useful-links">
                    <li>
                    <a href="faq.html"><i class="fas fa-angle-right"></i> FAQ</a>
                    </li>
                    <li>
                    <a href="terms.html"><i class="fas fa-angle-right"></i> Terms of Use</a>
                    </li>
                    <li>
                    <a href="privacy.html"><i class="fas fa-angle-right"></i> Privacy Policy</a>
                    </li>
                    <li>
                    <a href="contact.html"><i class="fas fa-angle-right"></i> Contact</a>
                    </li>
                </ul>
                </div>
            </div>
            <!-- Column 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="item pb_50">
                <h2 class="heading">Contact</h2>
                <div class="list-item">
                    <div class="left">
                    <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="right">
                    Ha Noi
                    </div>
                </div>
                <div class="list-item">
                    <div class="left">
                    <i class="fas fa-phone"></i>
                    </div>
                    <div class="right">contact@example.com</div>
                </div>
                <div class="list-item">
                    <div class="left">
                    <i class="fas fa-envelope"></i>
                    </div>
                    <div class="right">122-222-1212</div>
                </div>
                <ul class="social">
                    <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                    <li><a href=""><i class="fab fa-youtube"></i></a></li>
                    <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href=""><i class="fab fa-instagram"></i></a></li>
                </ul>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Footer Bottom Start -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
            <div class="col-12">
                <div class="copyright">
                &copy; 2025, All Rights Reserved.
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom End -->

    <!-- Scroll Top Button -->
    <div class="scroll-top">
        <i class="fas fa-angle-up"></i>
    </div>

    @if($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                iziToast.show({
                    message: '{{$error}}',
                    color: 'red',
                    position: 'topRight'
                });
            </script>
        @endforeach
    @endif
    @if(session('success'))
        <script>
            iziToast.show({
                message: '{{ session("success") }}',
                color: 'green',
                position: 'topRight'
            });
        </script>
    @endif

    @if(session('error'))
        <script>
            iziToast.show({
                message: '{{ session("error") }}',
                color: 'red',
                position: 'topRight'
            });
        </script>
    @endif
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</body>
</html>
