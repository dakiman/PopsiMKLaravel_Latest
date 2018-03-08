<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\CarouselPic;
use App\CarouselOrder;

class GalleryController extends Controller
{
    public function edit() {
        $order = CarouselOrder::all()->take(1);        
        $activePictures = unserialize($order[0]->order);
        $allPictures = CarouselPic::all();
        return view('admin.gallery-edit', ['activePictures'=>$activePictures, 'allPictures'=>$allPictures]);
    }

    public function create() {
        return view('admin.gallery-add');
    }

    public function store(Request $request) {
        $image = $request->car_img;
        $imageName = uniqid('carousel_') . '.' . $image->getClientOriginalExtension();
        Storage::disk('local')->put('/public/carousel/'.$imageName, file_get_contents($image));
        CarouselPic::create([
            'name' => $imageName
        ]);
        return redirect()->back()->with('message', 'Сликата е успешно додадена!');
    }
}
