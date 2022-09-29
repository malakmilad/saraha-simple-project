<?php

namespace App\Http\Controllers;

use App\Models\Massage;
use App\Models\Visits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $massages = Massage::where('user_id',Auth::id())->latest()->paginate(10);
        $visits = Visits::where('user_id',Auth::id())->count();
        return view('home',compact('massages','visits'));
    }
    public function lastvisit(){
        $visits = Visits::where('user_id',Auth::id())->latest()->take(10)->get();
        $visits_number = Visits::where('user_id',Auth::id())->count();
        return view('last-ten-visits',compact('visits','visits_number'));

    }
}
