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
        if($request->car_img != null) {
            $image = $request->car_img;
            $imageName = uniqid('car_') . '.' . $image->getClientOriginalExtension();
            Storage::disk('local')->put('/public/carousel/'.$imageName, file_get_contents($image));
            CarouselPic::create([
                'name' => $imageName
            ]);
            return redirect()->back()->with('message', 'Сликата е успешно додадена!');
        } else {
            return redirect()->back()->with('message', 'Мора да се додаде слика!');
        }

    }

    public function update(Request $request) {
        if($request->order != null) {
            $allPictures = $request->order;
            $newOrder = [];
            foreach($allPictures as $picture) {
                array_push($newOrder, $picture);
            }
            $currentOrder = CarouselOrder::all()->take(1);
            $currentOrder[0]->order = serialize($newOrder);
            $currentOrder[0]->save();
            return redirect()->back()->with('message', 'Успешно променет распоред');
        } else {
            return redirect()->back()->with('message', 'Проблем при промена. (мора да има барем една слика во распоредот)');
        }
    }
}
