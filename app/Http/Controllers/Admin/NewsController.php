<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::where('status', 1)->get();
        return view('admin.new.index',['news' => $news]);
    }

    public function create(Request $request)
    {
        $dataNew = $request->all();
        try{
            $dataNew['status'] = 1;
            News::create($dataNew);
            return response()->json([
                'status' => 'success',
            ]);
        }catch (\Exception $error){
            return false;
        }
    }
}
