<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TranslatableModel extends Model
{
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
