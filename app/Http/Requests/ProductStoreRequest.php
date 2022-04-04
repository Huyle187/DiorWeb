<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'tensanpham' => 'required|unique:products',
            'giaban' => 'required',
            'giagiam' => 'required',
            'soluongton' => 'required',
            'mota' => 'required',
            'subtitle' => 'required',
            'maloaihang' => 'required',
            'collectionID' => 'required',
            'hinhanh' => 'required|image|mimes:png,jpg,jpeg,gif|max:2048'
        ];
    }
    public function messages()
    {
        return [
            'tensanpham.required' => '* Tên sản phẩm không được để trống',
            'tensanpham.unique' => '* Tên sản phẩm đã tồn tại',
            'giaban.required' => '* Giá bán không được để trống',
            'giagiam.required' => '* Giá giảm không được để trống',
            'soluongton.required' => '* Số lượng không được để trống',
            'maloaihang.required' => '* Loại hàng không được để trống',
            'mota.required' => '* Mô tả không được để trống',
            'subtitle.required' => '* Không được để trống',
            'hinhanh.required' => '* Vui lòng chọn hình ảnh',
            'collectionID.required' => '* Vui lòng chọn bộ sưu tập',
        ];
    }
}
