<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPage extends Model
{
    protected $table = "blog_page";
    protected $fillable = ["key", "en", "fr"];
}
