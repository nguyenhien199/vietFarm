<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Products;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        $newPost = News::where('status', 1)->latest()->take(2)->get();
        $product = Products::where('status', 1)->latest()->take(2)->get();
        return view('web.home',
            [
                'newPost' => $newPost,
                'product' => $product
            ]);
    }

    public function getDetailNew($url)
    {
        $new = News::where('url',$url)->first();
        dd($new->user);
        return view('web.news-detail',compact('new'));
    }

}
