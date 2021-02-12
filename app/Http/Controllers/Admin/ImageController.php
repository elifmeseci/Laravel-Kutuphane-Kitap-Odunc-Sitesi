<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param $book_id
     * @return \Illuminate\Http\Response
     */
    public function create($book_id)
    {
        $data = Book::find($book_id);
        $images = DB::table('images')->where('book_id','=',$book_id)->get();
        return view('admin.image_add',['data'=>$data, 'images'=>$images]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param $book_id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $book_id)
    {
        $data = new Image;
        $data->title = $request->input('title');
        $data->book_id= $book_id;
        $data->image= Storage::putFile('images', $request->file('image'));
        $data->save();
        return redirect()->route('admin_image_add',['book_id'=>$book_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Image $image
     * @param $id
     * @param $book_id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image, $id, $book_id)
    {
        $data = Image::find($id);
        $data->delete();
        return redirect()->route('admin_image_add',['book_id'=>$book_id]);
    }
}
