<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends TranslatableModel
{
    public function items() {
        return $this->hasMany('App\Item');
    }
}
