<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\Technologies;

class TechnologyController extends Controller
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


    public function index()
    {
        $categories = Categories::where([
            'code' => Categories::CATEGORY_CN,
            'status' => Categories::ACTIVE,
        ])->take(6)->select('id', 'name')->get();
        foreach ($categories as $cate){
            $cate->total = Technologies::where([
                'status' => Technologies::ACTIVE,
                'category_id' => $cate->id,
            ])->count();
        }
        $technologies = [];
        foreach ($categories as $category){
            $technologies[$category->id] = Technologies::where([
                'category_id' => $category->id,
                'status' => Technologies::ACTIVE,
            ])->latest()->take(8)->get();
        }
        return view('web.technology',['technologies' => $technologies, 'categories' => $categories] );
    }
    public function show($url)
    {
        $categories = Categories::where([
            'code' => Categories::CATEGORY_CN,
            'status' => Categories::ACTIVE,
        ])->take(6)->select('id', 'name')->get();
        $technology = Technologies::where([
            'status' => Technologies::ACTIVE,
            'url' => $url
        ])->first();
        $cn_lienquan = Technologies::where([
            'status' => Technologies::ACTIVE,
            'category_id' => $technology->category_id
        ])->where('id','!=',$technology->id)->take(6)->get();
        return view('web.techlonogy-detail', ['technology' => $technology, 'categories' => $categories, 'dv_lienquan' => $cn_lienquan]);
    }


}
