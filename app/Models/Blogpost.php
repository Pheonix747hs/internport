<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogpost extends Model
{
     // Explicitly specify the table name if it differs from the conventional plural model name
     protected $table = 'blog_posts';

     // Specify fillable fields if you want to restrict mass assignment
     protected $fillable = ['title', 'date', 'description'];
}
