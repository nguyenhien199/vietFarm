<?php

namespace App\Http\Controllers;

use App\Models\Certifications;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function contact()
    {
        return view('web.contact');
    }

    public function chungnhan()
    {
        return view('web.certification');
    }
    public function getNewDetail()
    {
        return view('web.news-detail');
    }

    public function certifivationDetail($url){
        $certification = Certifications::where('status', 1)->where('url', $url)->first();
        return view('web.certification-detail', compact('certification'));
    }
}
