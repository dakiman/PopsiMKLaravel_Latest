<?php

namespace App\Http\Controllers;

use App\CarouselOrder;
use App\CarouselPic;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function __construct()
    {
        Cache::forget('carouselOrder');
    }

    public function edit()
    {
        $carouselOrder = CarouselOrder::first();
        $activePictures = unserialize($carouselOrder->order);
        $allPictures = CarouselPic::all();
        return view('admin.gallery-edit', ['activePictures' => $activePictures, 'allPictures' => $allPictures]);
    }

    public function create()
    {
        return view('admin.gallery-add');
    }

    public function store(Request $request)
    {
        if ($request->car_img == null) {
            return redirect()->back()->with('message', 'Мора да се додаде слика!');
        }

        $image = $request->car_img;
        $imageName = uniqid('car_') . '.' . $image->getClientOriginalExtension();
        Storage::disk('local')->put("/public/carousel/$imageName", file_get_contents($image));

        CarouselPic::create([
            'name' => $imageName
        ]);

        return redirect()->back()->with('message', 'Сликата е успешно додадена!');
    }

    public function update(Request $request)
    {
        if ($request->order == null) {
            return redirect()->back()->with('message', 'Мора да има барем една слика во распоредот!');
        }

        $allPictures = $request->order;
        $newOrder = [];
        foreach ($allPictures as $picture) {
            array_push($newOrder, $picture);
        }
        $currentOrder = CarouselOrder::all()->take(1);
        $currentOrder[0]->order = serialize($newOrder);
        $currentOrder[0]->save();
        return redirect()->back()->with('message', 'Успешно променет распоред');
    }

    public function delete(CarouselPic $carouselPic)
    {
        try {
            $carouselPic->delete();
            return response(['message' => 'Item was deleted'], 200);
        } catch (Exception $e) {
            return response(['message' => 'Item couldnt be deleted'], 400);
        }
    }
}
