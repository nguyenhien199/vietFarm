<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        $newPost = News::where('status', 1)->latest()->take(2)->get();
        return view('web.home',['newPost' => $newPost]);
    }

}