<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends TranslatableModel
{
    protected $fillable = ['title_en', 'title_mk', 'description_en', 'description_mk', 'category_id', 'pictures'];

    public function category() {
        return $this->hasOne('App\Category', 'id', 'category_id');
    }

    public function getCoverPhoto() {
        $pictures = unserialize($this->pictures);
        return $pictures[0];
    }

    public function getPictures() {
        return unserialize($this->pictures);
    }
}
