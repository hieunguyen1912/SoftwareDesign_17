<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class BlogCategory extends Model
{
    //
    use HasFactory, Notifiable;

    public function posts() {
        return $this->hasMany(Post::class);
    }
}
