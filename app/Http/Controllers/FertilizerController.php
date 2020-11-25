<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\Fertilizers;

class FertilizerController extends Controller
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
            'code' => Categories::CATEGORY_PB,
            'status' => Categories::ACTIVE,
        ])->take(6)->select('id', 'name')->get();
        $fertilizers = [];
        foreach ($categories as $category){
            $fertilizers[$category->id] = Fertilizers::where([
                'category_id' => $category->id,
                'status' => Fertilizers::ACTIVE,
            ])->latest()->take(8)->get();
        }
        return view('web.fertilizer',['fertilizers' => $fertilizers, 'categories' => $categories] );
    }
    public function show($url)
    {
        $categories = Categories::where([
            'code' => Categories::CATEGORY_PB,
            'status' => Categories::ACTIVE,
        ])->take(6)->select('id', 'name')->get();
        foreach ($categories as $cate){
            $cate->total = Fertilizers::where([
                'status' => Fertilizers::ACTIVE,
                'category_id' => $cate->id,
            ])->count();
        }
        $fertilizers = Fertilizers::where([
            'status' => Fertilizers::ACTIVE,
            'url' => $url
        ])->first();
        $dv_lienquan = Fertilizers::where([
            'status' => Fertilizers::ACTIVE,
            'category_id' => $fertilizers->category_id
        ])->where('id','!=',$fertilizers->id)->take(6)->get();
        return view('web.fertiizer-detail', ['fertilizers' => $fertilizers, 'categories' => $categories, 'dv_lienquan' => $dv_lienquan]);
    }


}
