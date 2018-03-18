<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\News;
use App\Item;
use App\CarouselOrder;


class HomepageController extends Controller
{
    public function home() {
        $categories = Category::where('active', 1)->get();
        $news = News::where('active', 1)->get();
        $order = CarouselOrder::all()->take(1);
        if(!$order->isEmpty()){
            $pictures = unserialize($order[0]->order);
        } else {
            $pictures = null;
        }
        return view('front.home', ['categories'=>$categories, 'news'=>$news, 'pictures'=>$pictures]);
    }

    public function catalogue() {
        $categories = Category::where('active', 1)->get();
        return view('front.catalogue', ['categories'=>$categories]);
    }

    public function category($id) {
        $category = Category::find($id);
        return view('front.single-category', ['category'=>$category]);        
    }

    public function item($id) {
        $item = Item::find($id);
        return view('front.single-item', ['item'=>$item, 'pictures'=>$item->getPictures()]);
    }

    public function changeLocale($locale = null) {
        if($locale != null) {
            cookie()->forever('locale', $locale);
        }
        return redirect()->back()->withCookie('locale', $locale);
    }

    public function news($id) {
        $news = News::find($id);
        return view ('front.single-news', ['news'=>$news]);
    }


}
