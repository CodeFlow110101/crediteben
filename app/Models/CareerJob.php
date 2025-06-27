<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CareerJob extends Model
{
    protected $table = "career_jobs";
    protected $fillable = ['title_en', 'title_fr', 'description_en', 'description_fr'];
}
