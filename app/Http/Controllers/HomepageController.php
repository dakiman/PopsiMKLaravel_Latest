<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
// use App\Items;


class HomepageController extends Controller
{
    public function home() {
        $categories = Category::where('active', 1)->get();
        return view('front.home', ['categories'=>$categories]);
    }

    public function catalogue() {
        $categories = Category::where('active', 1)->get();
        return view('front.catalogue', ['categories'=>$categories]);
    }

    public function changeLocale($locale = null) {
        if($locale != null) {
            cookie()->forever('locale', $locale);
        }
        return redirect()->back()->withCookie('locale', $locale);
    }


}