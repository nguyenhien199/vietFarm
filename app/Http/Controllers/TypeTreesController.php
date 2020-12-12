<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\Typetrees;

class TypeTreesController extends Controller
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
            'code' => Categories::CATEGORY_GC,
            'status' => Categories::ACTIVE,
        ])->take(6)->select('id', 'name')->get();
        $typetrees = [];
        foreach ($categories as $category){
            $typetrees[$category->id] = Typetrees::where([
                'category_id' => $category->id,
                'status' => Typetrees::ACTIVE,
            ])->latest()->take(8)->get();
        }
//        return $typetrees;
        return view('web.typetrees',['typetrees' => $typetrees, 'categories' => $categories] );
    }
    public function show($url)
    {
        $categories = Categories::where([
            'code' => Categories::CATEGORY_GC,
            'status' => Categories::ACTIVE,
        ])->take(6)->select('id', 'name')->get();
        foreach ($categories as $cate){
            $cate->total = Typetrees::where([
                'status' => Typetrees::ACTIVE,
                'category_id' => $cate->id,
            ])->count();
        }
        $typetrees = Typetrees::where([
            'status' => Typetrees::ACTIVE,
            'url' => $url
        ])->first();
        $dv_lienquan = Typetrees::where([
            'status' => Typetrees::ACTIVE,
            'category_id' => $typetrees->category_id
        ])->where('id','!=',$typetrees->id)->take(6)->get();
        return view('web.typetrees-detail', ['typetrees' => $typetrees, 'categories' => $categories, 'dv_lienquan' => $dv_lienquan]);
    }


}
