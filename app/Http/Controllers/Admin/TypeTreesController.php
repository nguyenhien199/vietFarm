<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Http\Requests\ProductsRequest;
use App\Models\Categories;
use App\Models\News;
use App\Models\Typetrees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\TypetreesRequest;
use Session;
use Auth;

class TypeTreesController extends Controller
{
    public function index()
    {
        $typeTrees = Typetrees::orderBy('id', 'DESC')->paginate(PAGINATION);
        return view('admin.typeTrees.index',['typeTrees' => $typeTrees]);
    }

    public function showGet()
    {
        $categories = Categories::where([
            'status' => Categories::ACTIVE,
            'code' => Categories::CATEGORY_GC
        ])->select('id', 'name')->get();
        return view('admin.typeTrees.create', ['categories' => $categories]);
    }

    public function create(TypetreesRequest $request)
    {
        $data = $request->all();
        if(empty($data['id'])){
            $typeTrees = $request->except('_token');
            try{
                $typeTrees['created_by'] = Auth::user()->id;
                $typeTrees['updated_by'] = Auth::user()->id;
                $create = Typetrees::create($typeTrees);
                $files = $request->file('image');
                if(!empty($files) && $data['remove_image'] == 0){
                    $file_name = $files->getClientOriginalName();
                    $files->storeAs('/public/images/typetrees/' . $create->id, $file_name);
                    Typetrees::findOrFail($create->id)->update(['image' => '/storage/images/typetrees/' . $create->id . '/' . $file_name]);
                }
                Session::flash('message', 'Thêm giống thành công!');
                Session::flash('alert-class', 'alert-success');
                return redirect()->route('typeTrees');
            }catch (\Exception $error){
                Session::flash('message', 'Đã xảy ra lỗi! Xin vui lòng thử lại');
                Session::flash('alert-class', 'alert-danger');
                return redirect()->back();
            }
        }else{
            try{
                $data = $request->except('_token');
                $data['updated_by'] = Auth::user()->id;
                if($data['remove_image'] == 1){
                    $data['image'] = '';
                }
                Typetrees::findOrFail($data['id'])->update($data);
                $files = $request->file('image');
                if(!empty($files) && $data['remove_image'] == 0){
                    $file_name = $files->getClientOriginalName();
                    $files->storeAs('/public/images/typetrees/' . $data['id'], $file_name);
                    Typetrees::findOrFail($data['id'])->update(['image' => '/storage/images/typetrees/' . $data['id'] . '/' . $file_name]);
                }
                Session::flash('message', 'Sửa giống thành công!');
                Session::flash('alert-class', 'alert-success');
                return redirect()->route('typeTrees');
            }catch (\Exception $error){
                Session::flash('message', 'Đã xảy ra lỗi! Xin vui lòng thử lại');
                Session::flash('alert-class', 'alert-danger');
                return redirect()->back();
            }
        }
    }

    public function edit($id)
    {
        $categories = Categories::where([
            'status' => Categories::ACTIVE,
            'code' => Categories::CATEGORY_GC
        ])->select('id', 'name')->get();
        $typeTrees = Typetrees::where('id', $id)->firstOrFail();
        return view('admin.typeTrees.create', ['data' => $typeTrees, 'categories' => $categories]);
    }

    public function destroy($id)
    {
        try{
            $delete = Typetrees::where([
                'status' => Typetrees::NOTACTIVE,
                'id' => $id
            ])->delete();
            if($delete){
                Session::flash('message', 'Xóa giống thành công!');
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
