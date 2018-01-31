<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends TranslatableModel
{
    // protected $guarded = [];
    protected $fillable = ['title_en', 'title_mk', 'description_en', 'description_mk'];

}
