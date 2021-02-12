<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\CategoryController;

use App\Models\Book;
use App\Models\Category;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Message;
use App\Models\Review;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public static function categorylist()
    {
        return Category::where('parent_id','=',0)->with('children')->get();
    }


    public static function getsetting()
    {
        return Setting::first();
    }

    public static function countreview($id)
    {
        return Review::where('book_id', $id)->count();
    }

    public static function avrgreview($id)
    {
        return Review::where('book_id', $id)->average('rate');
    }

    public function book($id)
    {
        $data = Book::find($id);
        $datalist = Image::where('book_id',$id)->get();
        $reviews = \App\Models\Review::where('book_id',$id)->get();
        #print_r($data);
        #exit();
        return view('home.book_detail',['data'=>$data, 'datalist'=>$datalist,'reviews'=>$reviews] );
    }

    public function getbook(Request $request)
    {
        $search = $request->input('search');
        $count = Book::where('title','like','%'.$search.'%')->get()->count();
        if ($count == 1)
        {
            $data = Book::where('title','like','%'.$search.'%')->first();
            return redirect()->route('book',['id'=>$data->id]);
        }
        else
        {
            return redirect()->route('booklist',['search'=>$search]);
        }

    }

    public function booklist($search)
    {
        $datalist = Book::where('title','like','%'.$search.'%')->get();

        return view('home.search_books',['search'=>$search, 'datalist'=>$datalist] );
    }

    public function makereservation($id)
    {
        echo "make a reservation <br>";
        $data = Book::find($id);
        print_r($data);
        exit();
    }

    public function categorybooks($id)
    {
        $datalist = Book::where('category_id',$id)->get();
        $data = Category::find($id);
        return view('home.category_books',['data'=>$data , 'datalist'=>$datalist] );
    }
    public function index()
    {
        $setting = Setting::first();
        $slider = Book::select('id','title','image','type')->limit(10)->get();
        $daily = Book::select('id','title','image','type')->limit(5)->inRandomOrder()->get();
        $last = Book::select('id','title','image','type')->limit(5)->orderByDesc('id')->get();
        $best = Book::select('id','title','image','type')->limit(5)->orderByDesc('type')->get();
        $data = ['setting'=>$setting,
                'slider'=>$slider,
                'daily'=>$daily,
                'last'=>$last,
                'best'=>$best,
                'page'=>'home'
        ];
        return view('home.index',$data );
    }


    public function aboutus()
    {
        $setting = Setting::first();
        return view('home.about',['setting'=>$setting]);
    }

    public function sendmessage(Request $request)
    {
        $data = new Message;
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->save();
        return redirect()->route('contact')->with('success','Your message has been successfully delivered ');
    }

    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact',['setting'=>$setting]);
    }

    public function faq()
    {
        $datalist = Faq::all();
        return view('home.faq',['datalist'=>$datalist]);
    }

    public function references()
    {
        $setting = Setting::first();
        return view('home.references',['setting'=>$setting]);
    }
    public function login()
    {
        $setting = Setting::first();
        return view('admin.login');
    }

    public function logincheck(Request $request)
    {

        if( $request->isMethod('post'))
        {
            $credentials = $request->only('email','password');
            if (Auth::attempt($credentials)){
                return redirect()->intended('home');
            }
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
        else
        {
            return view('admin.login');
        }
    }
    public function logout(Request $request){

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
