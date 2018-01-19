<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends TranslatableModel
{
    public function category() {
        return $this->hasOne('App\Category');
    }
}
