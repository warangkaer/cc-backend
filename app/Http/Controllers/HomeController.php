<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\News;
use App\Models\Event;
use App\Models\Region;
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
        $this->middleware('cekrole');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $news    = News::count();
        $event   = Event::count();
        $user    = User::count();
        $region  = Region::all();

        // dd(Auth::user());

        
        return view('admin.Dashboard', compact('news', 'event', 'user', 'region'));
    }
}
