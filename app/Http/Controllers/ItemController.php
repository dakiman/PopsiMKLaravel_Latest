<?php

namespace App\Http\Controllers;

use App\Item;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $items = Item::where('category_id', request()->cat ? request()->cat : $categories[0]->id)->get();
        return view('admin.item-display', ['items' => $items, 'categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.item-add', ['categories' => $categories]);        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = Item::create($request->all());
        $pictures = array();
        $i = 0;
        foreach($request->cat_img as $image)
        {
            $imageName = uniqid('img_') . '.' . $image->getClientOriginalExtension();
            Storage::disk('local')->put('/public/items/'.$imageName, file_get_contents($image));
            array_push($pictures, $imageName);
        }
        $item->pictures = serialize($pictures);
        if($item->save()){
            $message = "Успешно додадено.";
        } else {
            $message = "Имаше проблем при додавање.";
        }
        return redirect()->back()->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        return view('admin.item-edit', ['item' => $item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        if(isset($request->cat_img)) {
            $pictures = array();
            foreach($request->cat_img as $image)
            {
                $imageName = uniqid('img_') . '.' . $image->getClientOriginalExtension();
                Storage::disk('local')->put('/public/items/'.$imageName, file_get_contents($image));
                array_push($pictures, $imageName);
            }
            $item->pictures = serialize($pictures);
        }
        if($item->fill($request->all()) && $item->save()){
            $message = "Податоците се подесени.";
        } else {
            $message = "Проблем при промени.";
        }
        return redirect()->back()->with([
            'message' => $message,
        ]);
    }

    public function delete(Item $item) {
        $item->delete();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //
    }

    public function toggle(Item $item) {
        try{
            $item->active = !$item->active;
            $item->save();
            return $item->active ? 1 : 0;
        } catch( \Exception $e ) {
            return $e->getMessage();
        }
    }
}