<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductType;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use Illuminate\Support\Str;


class ProductController extends Controller
{

    //View Page "Add New Product"
    public function Create()
    {
        $list = Product::orderby('maloaihang')->get();
        $productType = ProductType::orderby('id')->get();
        return view('backend.dashboard.create',compact('list','productType'));
    }

    /**
     * POST: admin/product/create
     */
    public function Store(ProductStoreRequest $request)
    {
        $product = new Product();
        $product->tensanpham = $request->tensanpham;
        $product->giaban = $request->giaban;
        $product->giagiam = $request->giagiam;
        $product->mota = $request->mota;
        $product->soluongton = $request->soluongton;
        $product->maloaihang = $request->maloaihang;
        $product->trangthai = 1;
        $product->hinhanh = $request->hinhanh;
        
        if($product->hinhanh)
        {
            try {
             $filePath = $this->ImageUpload($product->hinhanh); //Passing $data->image as parameter to our created method
             $product->hinhanh = $filePath;  
            } 
            catch (Exception $e) 
            {
                return redirect()->back()->with('error', 'Upload image failed!');
            }
        }

        $product->save();

        // Kiểm tra Insert để trả về một thông báo
        if (!$product) {
            return redirect()->route('dashboard')->with('error', 'Thêm thất bại!');
        }
        return redirect()->route('dashboard')->with('success', 'Thêm mới sản phẩm thành công!');
    }

    //Update Product
    public function Edit($id){
        $list = Product::find($id);
        $productType = ProductType::orderby('id')->get();
        return view('backend.dashboard.edit',compact('list','productType'));
    }

    public function Update(ProductUpdateRequest $request, $id)
    {
        $product = Product::find($id);
        if($request->hinhanh != null)
        {
            $product->hinhanh = $request->hinhanh;
            try {
                $filePath = $this->ImageUpload($product->hinhanh); //Passing $data->image as parameter to our created method
                $product->hinhanh = $filePath;  
               } 
               catch (Exception $e) 
               {
                   return redirect()->back()->with('error', 'Upload image failed!');
               }
        }
        if($product->hinhanh == null)
        {
            return redirect()->back()->with('error', '* Vui lòng chọn hình ảnh');
        }
        $product->tensanpham = $request->tensanpham;
        $product->giaban = $request->giaban;
        $product->giagiam = $request->giagiam;
        $product->mota = $request->mota;
        $product->soluongton = $request->soluongton;
        $product->maloaihang = $request->maloaihang;
        $product->trangthai = 1;

        $product->save();

        // Kiểm tra Insert để trả về một thông báo
        if (!$product) {
            return redirect()->route('dashboard')->with('error', 'Cập nhật thất bại!');
        }
        return redirect()->route('dashboard')->with('success', 'Cập nhật sản phẩm thành công!');
    }

    //Delete Product
    public function Trash()
    {
        $list = Product::where('trangthai','=',0)->orderby('updated_at')->get();
        return view('backend.dashboard.trash',compact('list'));
    }

    public function Deltrash($id)
    {
        $product = Product::find($id);

        if($product == null)
        {
            return redirect()->route('dashboard')->with('error', ('Sản phẩm không tồn tại'));
        }

        $product->trangthai = 0;
        $product->save();
        return redirect()->route('dashboard')->with('success', ('Xóa vào thùng rác thành công'));
    }

    public function Retrash($id)
    {
        $product = Product::find($id);

        if($product == null)
        {
            return redirect()->route('dashboard')->with('error', ('Sản phẩm không tồn tại'));
        }

        $product->trangthai = 1;
        $product->save();
        return redirect()->route('dashboard')->with('success', ('Hồi phục sản phẩm thành công'));
    }

    public function Delete($id)
    {
        $product = Product::find($id);

        if($product == null)
        {
            return redirect()->route('dashboard')->with('error', ('Sản phẩm không tồn tại'));
        }

        $product->delete();
        return redirect()->route('product.trash')->with('success', ('Xóa sản phẩm thành công'));
    }

    // Upload Image
    public function ImageUpload($query) // Taking input image as parameter
    {
        // $image_name = str_random(20);
        //$ext = strtolower($query->getClientOriginalName()); // You can use also getClientOriginalName()
        $image_full_name = $query->getClientOriginalName();
        $upload_path = '/resources/images/';    //Creating Sub directory in Public folder to put image
        $image_url = $upload_path.$image_full_name;
        $query->move(resource_path('images'),$image_full_name);

        return $image_url; // Just return image
    }
}


