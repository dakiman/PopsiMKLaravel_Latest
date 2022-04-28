<?php

namespace App\Http\Controllers;

use App\CarouselOrder;
use App\Category;
use App\Item;
use App\Mail\ContactUs;
use App\News;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Log;
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

    public function sendContactMessage(Request $request)
    {
        if(!env('CONTACT_ENABLED')){
            Log::info("Message received", $request->toArray());
            return redirect()->back()->with('message', 'Sent!');
        }

        if($request->faxonly) {
            Log::info("Spam prevented", $request->toArray());
            return redirect()->back()->with('message', 'Sent!');
        }

        try {
            Mail::to(['dvancov@hotmail.com', 'info@lageri.mk'])
                ->send(new ContactUs($request->all()));
            return redirect()->back()->with('message', 'Sent!');
        } catch (Exception $e) {
            return redirect()->back()->with('message', 'Failed.');
        }
    }

    public function item(Item $item)
    {
        if(!$item->category()->exists())
            return redirect()->home();
        return view('front-new.single-product', ['item' => $item, 'pictures' => $item->getPictures()]);
    }

    public function changeLocale($locale)
    {
        cookie()->forever('locale', $locale);

        return redirect()->back()->withCookie('locale', $locale);
    }

    public function news($id)
    {
        $news = News::find($id);
        return view('front.single-news', ['news' => $news]);
    }

}
