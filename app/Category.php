<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends TranslatableModel
{
    // protected $guarded = ['picture'];
    protected $fillable = ['title_en', 'title_mk', 'description_en', 'description_mk'];

    public function items() {
        return $this->hasMany('App\Item');
    }

    public function activeItems() {
        return $this->items->where('active', 1);
    }
}
