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
        $myPlants = Plant::getPlants();
        return view('home');
    }

    public function create(Request $request)
    {
        $data = $request->all();
        Plant::create([
            'speciesID' => $data->speciesID,
            'userID' => Auth::user()->id,
            'plantName' => $data->name]);
        return redirect('home');
    }
}
