<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequests;
use App\Models\Categories;
use Session;

class CategoryProductsController extends Controller
{
    public function index()
    {
        $cate_products = Categories::where('code', Categories::CATEGORY_SP)->orderBy('id', 'DESC')->paginate(PAGINATION);
        return view('admin.categoryProducts.index',['categoryProducts' => $cate_products]);
    }
    
    public function indexService()
    {
        $cate_products = Categories::where('code', Categories::CATEGORY_DV)->orderBy('id', 'DESC')->paginate(PAGINATION);
        return view('admin.categoryServices.index',['categoryProducts' => $cate_products]);
    }
    
    public function indexTechnology()
    {
        $cate_products = Categories::where('code', Categories::CATEGORY_CN)->orderBy('id', 'DESC')->paginate(PAGINATION);
        return view('admin.categoryTechnologies.index',['categoryProducts' => $cate_products]);
    }
    
    public function indexFertilizer()
    {
        $cate_products = Categories::where('code', Categories::CATEGORY_PB)->orderBy('id', 'DESC')->paginate(PAGINATION);
        return view('admin.categoryFertilizers.index',['categoryProducts' => $cate_products]);
    }

    public function create(CategoryRequests $request)
    {
        $data = $request->all();
        if(!isset($data['id'])){
            try{
                $category = $request->except('_token');
                Categories::create($category);
                Session::flash('message', 'Thêm danh mục sản phẩm thành công!');
                Session::flash('alert-class', 'alert-success');
                return response()->json(['status' => '200']);
            }catch (\Exception $error){
                Session::flash('message', 'Đã sẩy ra lỗi! Xin vui lòng thử lại.');
                Session::flash('alert-class', 'alert-danger');
                return response()->json(['status' => '500']);
            }
        }else{
            try{
                $dataEdit =  $request->except('_token', 'id');
                Categories::where('id', $data['id'])->update($dataEdit);
                Session::flash('message', 'Xửa danh mục sản phẩm thành công!');
                Session::flash('alert-class', 'alert-success');
                return response()->json(['status' => '200']);
            }catch (\Exception $error){
                Session::flash('message', 'Đã sẩy ra lỗi! Xin vui lòng thử lại.');
                Session::flash('alert-class', 'alert-danger');
                return response()->json(['status' => '500']);
            }
        }
    }
    
    public function destroy($id)
    {
        try{
            $delete = Categories::where([
                'id' => $id,
                'status' => Categories::NOTACTIVE
            ])->delete();
            if($delete){
                Session::flash('message', 'Xóa danh mục sản phẩm thành công!');
                Session::flash('alert-class', 'alert-success');
                return redirect()->back();
            }
            Session::flash('message', 'Không thể xóa danh mục đang hoạt động!');
            Session::flash('alert-class', 'alert-warning');
            return redirect()->back();
        }catch (\Exception $error){
            Session::flash('message', 'Đã sẩy ra lỗi! Xin vui lòng thử lại.');
            Session::flash('alert-class', 'alert-danger');
            return redirect()->back();
        }
    }
}
