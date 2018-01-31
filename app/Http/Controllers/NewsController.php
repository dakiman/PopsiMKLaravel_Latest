<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view('admin.news-display', ['news' => $news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news = News::create($request->all());
        $imageName = time() . '.' . $request->cat_img->getClientOriginalExtension();
        Storage::disk('local')->put('/public/news/'.$imageName, file_get_contents($request->cat_img));
        $news->pictures = $imageName;
        if($news->save()){
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.news-edit', ['news' => $news]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        if($news->fill($request->all()) && $news->save()){
            $message = "Податоците се подесени.";
        } else {
            $message = "Проблем при промени.";
        }
        return redirect()->back()->with([
            'message' => $message,
        ]);
    }


    public function delete(News $news) {
        $news->delete();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function toggle(News $news) {
        try{
            $news->active = !$news->active;
            $news->save();
            return $news->active ? 1 : 0 ;
        } catch( \Exception $e ) {
            return $e->getMessage();
        }
    }
}
