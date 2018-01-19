<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function items() {
        return $this->hasMany('App\Item');
    }

    public function translateTitle() {
        if(app()->getLocale() == 'en')
            return $this->title_en;
        else
            return $this->title_mk;
    }

    public function translateDescription() {
        if(app()->getLocale() == 'en')
            return $this->description_en;
        else
            return $this->description_mk;
    }
}
