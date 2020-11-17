<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\News;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Auth;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('id', 'DESC')->paginate(PAGINATION);
        return view('admin.new.index',['news' => $news]);
    }

    public function showCreate(){
        return view('admin.new.create');
    }
    
    public function create(NewsRequest $request)
    {
        $data = $request->except('_token');
        if($data['id']){
            try {
                if($data['remove_image'] == 1){
                    $data['image'] = '';
                }
                $data['updated_by'] = Auth::user()->id;
                News::findOrFail($request->id)->update($data);
                $files = $request->file('image');
                if(!empty($files) && $data['remove_image'] == 0){
                    $file_name = $files->getClientOriginalName();
                    $files->storeAs('/public/images/news/' . $request->id, $file_name);
                    News::findOrFail($request->id)->update(['image' => '/storage/images/news/' . $request->id . '/' . $file_name]);
                }
                Session::flash('message', 'Update SuccessFully!');
                Session::flash('alert-class', 'alert-success');
                return redirect()->route('news');
            }catch (\Exception $error){
                Session::flash('message', 'Đã sẩy ra lỗi xin vui lòng thử lại!');
                Session::flash('alert-class', 'alert-danger');
                return redirect()->back();
            }
        }else{
            try{
                $data['created_by'] = Auth::user()->id;
                $data['updated_by'] = Auth::user()->id;
                $new = News::create($data);
                $files = $request->file('image');
                if(!empty($files) && $data['remove_image'] == 0){
                    $file_name = $files->getClientOriginalName();
                    $files->storeAs('/public/images/news/' . $new->id, $file_name);
                    News::findOrFail($new->id)->update(['image' => '/storage/images/news/' . $new->id . '/' . $file_name]);
                }
                Session::flash('message', 'Add SuccessFully!');
                Session::flash('alert-class', 'alert-success');
                return redirect()->route('news');
            }catch (\Exception $error){
                Session::flash('message', 'Đã sẩy ra lỗi xin vui lòng thử lại!');
                Session::flash('alert-class', 'alert-danger');
                return redirect()->back();
            }
        }
    }

    public function showEdit($id)
    {
        $data = News::findOrFail($id);
        return view('admin.new.create', ['data' => $data]);
    }
    
    public function destroy($id){
        try{
            $delete = News::where([
                'id' => $id,
                'status' => News::NOTACTIVE
            ])->delete();
            if($delete){
                Session::flash('message', 'Xóa bài viết thành công!');
                Session::flash('alert-class', 'alert-success');
                return redirect()->back();
            }
            else{
                Session::flash('message', 'Đã sẩy ra lỗi xin vui lòng thử lại!');
                Session::flash('alert-class', 'alert-danger');
                return redirect()->back();
            }
        }catch (\Exception $error){
            Session::flash('message', 'Đã sẩy ra lỗi xin vui lòng thử lại!');
            Session::flash('alert-class', 'alert-danger');
            return redirect()->back();
        }
    }
}
