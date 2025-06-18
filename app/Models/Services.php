<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $table = "services";

    protected $fillable = ["title", "description", "title_fr", "description_fr"];
}
