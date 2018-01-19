<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
// use App\Items;


class HomepageController extends Controller
{
    public function home() {
        $categories = Category::get();
        return view('front.home', ['categories'=>$categories]);
    }

    public function changeLocale($locale = null) {
        if($locale != null) {
            // if($locale != 'mk' && $locale != 'en') {
            //     $locale = 'mk';
            // }
            cookie()->forever('locale', $locale);
        }
        return redirect()->back()->withCookie('locale', $locale);
    }


}
