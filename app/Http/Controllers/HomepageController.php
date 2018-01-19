<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
// use App\Items;


class HomepageController extends Controller
{
    public function home() {
        $categories = Category::get();
        return view('home', ['categories'=>$categories]);
    }
}
