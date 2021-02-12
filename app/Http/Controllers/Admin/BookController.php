<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\File;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Book::all();
        return view('admin.book', ['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /** @var TYPE_NAME $datalist */
        $datalist = Category::with('children')->get();
        return view('admin.book_add',['datalist'=>$datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Book;
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->status = $request->input('status');
        $data->category_id= $request->input('category_id');
        $data->user_id= Auth::id();
        $data->detail= $request->input('detail');
        $data->type= $request->input('type');
        $data->available= $request->input('available');
        $data->image= Storage::putFile('images', $request->file('image'));
        $data->save();
        return redirect()->route('admin_books');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Book $book
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book,$id)
    {
        $data = Book::find($id);
        $datalist = Category::all();
        return view('admin.book_edit',['data'=>$data, 'datalist'=>$datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Book $book
     * @param $id
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book,$id, User $user)
    {
        $data = Book::find($id);
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->status = $request->input('status');
        $data->category_id = $request->input('category_id');
        $data->user_id = Auth::id();
        $data->detail = $request->input('detail');
        $data->type = $request->input('type');
        $data->available = $request->input('available');
        if ($request->file('image')!=null)
        {
            $data->image= Storage::putFile('images', $request->file('image'));
        }
        $data->save();
        return redirect()->route('admin_books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Book $book
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book,$id)
    {
        DB::table('books')->where('id', '=', $id)->delete();
        return redirect()->route('admin_books');
    }
}
