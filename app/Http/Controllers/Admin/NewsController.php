<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('id', 'DESC')->paginate(10);
        return view('admin.new.index',['news' => $news]);
    }

    public function showCreate(){
        return view('admin.new.create');
    }
    
    public function create(NewsRequest $request)
{
        $data = $request->all();
        if(!isset($data['id'])){
            try{
                $data['status'] = 1;
                News::create($data);
                Session::flash('message', 'Add SuccessFully!');
                Session::flash('alert-class', 'alert-success');
                return redirect()->route('news');
            }catch (\Exception $error){
                Session::flash('message', 'Add Error!');
                Session::flash('alert-class', 'alert-danger');
                return redirect()->back();
            }
        }
        else{
            $dataEdit =  $request->except('_token', 'id');
            try {
                News::where('id', $data['id'])->update($dataEdit);
                Session::flash('message', 'Edit SuccessFully!');
                Session::flash('alert-class', 'alert-success');
                return redirect()->route('news');
            } catch (\Exception $error){
                Session::flash('message', 'Edit Error!');
                Session::flash('alert-class', 'alert-danger');
                return redirect()->back();
            }
        }
    }

    public function destroy($id){
        try{
            $item = News::where('id', $id)->delete();
            Session::flash('message', 'Delete SuccessFully!');
            Session::flash('alert-class', 'alert-success');
            return redirect()->route('news');
        }catch (\Exception $error){
            Session::flash('message', 'Delete Error!');
            Session::flash('alert-class', 'alert-danger');
            return redirect()->back();
        }
    }
}
