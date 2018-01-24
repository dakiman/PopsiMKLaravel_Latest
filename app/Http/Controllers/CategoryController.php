<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.category-display', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category-add');        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = Category::create($request->all());
        $imageName = $request->title_en . '.' . $request->cat_img->getClientOriginalExtension();
        Storage::disk('local')->put('/public/categories/'.$imageName, file_get_contents($request->cat_img));
        $category->picture = $imageName;
        if($category->save()){
            $message = "Успешно додадено.";
        } else {
            $message = "Имаше проблем при додавање.";
        }
        return redirect()->back()->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.category-edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        if($category->fill($request->all()) && $category->save()){
            $message = "Податоците се подесени.";
        } else {
            $message = "Проблем при промени.";
        }
        return redirect()->back()->with([
            'message' => $message,
        ]);
    }

    public function delete(Category $category) {
        $category->delete();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }

    public function toggle(Category $category) {
        try{
            $category->active = !$category->active;
            $category->save();
            return $category->active ? 1 : 0 ;
        } catch( \Exception $e ) {
            return $e->getMessage();
        }
    }
}
