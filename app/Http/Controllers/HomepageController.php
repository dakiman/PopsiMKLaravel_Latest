<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\News;
use App\Item;
use App\User;
use App\CarouselOrder;

// use Mail;
use App\Mail\ContactMessage;
use App\Mail\ContactUs;
use Mail;

class HomepageController extends Controller
{
    public function home()
    {
        $categories = Category::where('active', 1)->get();
        $news = News::where('active', 1)->get();
        $order = CarouselOrder::all()->take(1);
        if (!$order->isEmpty()) {
            $pictures = unserialize($order[0]->order);
        } else {
            $pictures = null;
        }
        return view('front-new.home', ['categories' => $categories, 'news' => $news, 'pictures' => $pictures]);
    }

    public function products()
    {
        $categories = Category::where('active', 1)->get();
        return view('front-new.products', ['categories' => $categories]);
    }

    public function about()
    {
        return view('front-new.about');
    }

    public function contact()
    {
        return view('front-new.contact');
    }

    public function sendContactMessage()
    {
        $data = request()->all();
        try {
            Mail::to(['dvancov@hotmail.com', 'info@lageri.mk'])
                ->send(new ContactUs($data));
            return redirect()->back()->with('message', 'Sent!');
        } catch (Exception $e) {
            return redirect()->back()->with('message', 'Failed.');
        }
    }

    public function item(Item $item)
    {
        return view('front-new.single-product', ['item' => $item, 'pictures' => $item->getPictures()]);
    }

    public function changeLocale($locale = null)
    {
        if ($locale != null) {
            cookie()->forever('locale', $locale);
        }
        return redirect()->back()->withCookie('locale', $locale);
    }

    public function news($id)
    {
        $news = News::find($id);
        return view('front.single-news', ['news' => $news]);
    }

}
