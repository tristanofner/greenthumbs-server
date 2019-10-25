<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Plant;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $myPlants = Plant::where('userID','=',Auth::user()->id)->get();
        return view('home');
    }
}
