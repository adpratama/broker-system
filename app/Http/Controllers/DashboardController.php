<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Placing;


class DashboardController extends Controller
{
    // 
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $placing = Placing::count();
        return view('pages.dashboard.index');
    }
}
