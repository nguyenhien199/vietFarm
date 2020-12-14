<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Http\Requests\ProductsRequest;
use App\Models\Categories;
use App\Models\News;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Session;
use Auth;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::orderBy('id', 'DESC')->paginate(PAGINATION);
        return view('admin.products.index',['products' => $products]);
    }

    public function showGet()
    {
        $categories = Categories::where([
            'status' => Categories::ACTIVE,
            'code' => Categories::CATEGORY_SP
        ])->select('id', 'name')->get();
        return view('admin.products.create', ['categories' => $categories]);
    }

    public function create(ProductsRequest $request)
    {
        $data = $request->all();
        if(empty($data['id'])){
            $product = $request->except('_token');
            try{
                $product['created_by'] = Auth::user()->id;
                $product['updated_by'] = Auth::user()->id;
                $create = Products::create($product);
                $files = $request->file('image');
                if(!empty($files) && $data['remove_image'] == 0){
                    $file_name = $files->getClientOriginalName();
                    $files->storeAs('/public/images/products/' . $create->id, $file_name);
                    Products::findOrFail($create->id)->update(['image' => '/storage/images/products/' . $create->id . '/' . $file_name]);
                }
                Session::flash('message', 'Thêm sản phẩm thành công!');
                Session::flash('alert-class', 'alert-success');
                return redirect()->route('products');
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
                Products::findOrFail($data['id'])->update($data);
                $files = $request->file('image');
                if(!empty($files) && $data['remove_image'] == 0){
                    $file_name = $files->getClientOriginalName();
                    Storage::deleteDirectory('/public/images/products/' . $data['id']);
                    $files->storeAs('/public/images/products/' . $data['id'], $file_name);
                    Products::findOrFail($data['id'])->update(['image' => '/storage/images/products/' . $data['id'] . '/' . $file_name]);
                }
                Session::flash('message', 'Sửa sản phẩm thành công!');
                Session::flash('alert-class', 'alert-success');
                return redirect()->route('products');
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
            'code' => Categories::CATEGORY_SP
        ])->select('id', 'name')->get();
        $product = Products::where('id', $id)->firstOrFail();
        return view('admin.products.create', ['data' => $product, 'categories' => $categories]);
    }

    public function destroy($id)
    {
        try{
            $delete = Products::where([
                'status' => Products::NOTACTIVE,
                'id' => $id
            ])->delete();
            if($delete){
                Storage::deleteDirectory('/public/images/products/' . $id);
                Session::flash('message', 'Xóa sản phẩm thành công!');
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
