<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::where('status', 1)->orderBy('id', 'DESC')->paginate(10);
        return view('admin.new.index',['news' => $news]);
    }

    public function create(Request $request)
    {
        $dataNew = $request->all();
        try{
            $dataNew['status'] = 1;
            News::create($dataNew);
            Session::flash('message', 'Add SuccessFully!');
            Session::flash('alert-class', 'alert-success');
            return redirect()->back()->with('');
        }catch (\Exception $error){
            return false;
        }
    }
}
