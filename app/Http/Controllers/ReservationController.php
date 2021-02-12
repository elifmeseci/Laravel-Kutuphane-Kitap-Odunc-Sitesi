<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Book::where('user_id',Auth::id())->get();
        return view('home.user_reservation', ['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,Reservation $reservation)
    {
        $data = new Reservation;
        $data->user_id = Auth::id();
        $data->book_id = $request->input('book_id');
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->bookdate = $request->input('bookdate');
        $data->returndate= $request->input('returndate');
        $data->days= $request->input('days');
        $data->IP= $_SERVER['REMOTE_ADDR'];
        $data->note= $request->input('note');
        $data->status= $request->input('status');
        $data->save();
        return redirect()->back()->with('success','Reservation Received Successfully');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Reservation;
        $data->user_id = Auth::id();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->bookdate = $request->input('bookdate');
        $data->returndate= $request->input('returndate');
        $data->days= $request->input('days');
        $data->IP= $_SERVER['REMOTE_ADDR'];
 //       $data->note= $request->input('note');
   //     $data->status= $request->input('status');
        $data->save();
        return redirect()->route('user_books')->with('success','Reservation Received Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
