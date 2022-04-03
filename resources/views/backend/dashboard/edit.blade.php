@extends("layouts.admin")

@section('tittle', 'Update Product')

@section('mainContent')
    <br />
    <h2 class="col-md-6 text-danger">
        <b>UPDATE PRODUCT</b>
    </h2>

    <form action=" {{ route('product.update' , ['id' => $list->masanpham]) }} " method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-horizontal">
            <hr />

            <div class="form-group">
                <label class="control-label col-md-2" for="">Tên Sản Phẩm</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="tensanpham" value="{{ old('tensanpham',$list->tensanpham) }}" id="tensanpham" placeholder="Nhập tên sản phẩm" >
                </div>
                @if ($errors->has('tensanpham'))
                    <span class="text-danger col-md-10"> {{ $errors->first('tensanpham') }} </span>
                @endif
            </div>

            <div class="form-group">
                <label class="control-label col-md-2">Loại Hàng</label>
                <div class="col-md-10">
                    <select name="maloaihang" id="maloaihang" class="form-control">
                        <option value="">[Chọn Loại Hàng]</option>
                        @foreach ($productType as $row)
                            @if ($row->id == $list->maloaihang)
                                <option selected value="{{ $row->id }}">{{ $row->tenloaihang }}</option>
                            @else
                                <option value="{{ $row->id }}">{{ $row->tenloaihang }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                @if ($errors->has('maloaihang'))
                    <span class="text-danger col-md-10">{{ $errors->first('maloaihang') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label class="control-label col-md-2">Giá Bán</label>
                <div class="col-md-10">
                    <input type="number" class="form-control" name="giaban" value="{{ old('giaban',$list->giaban) }}" id="giaban" placeholder="Nhập giá sản phẩm" >
                </div>
                @if ($errors->has('giaban'))
                    <span class="text-danger col-md-10">{{ $errors->first('giaban') }}</span>
                @endif
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        <b>{{ session('success') }}</b>
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label class="control-label col-md-2">Giá Khuyến Mãi</label>
                <div class="col-md-10">
                    <input type="number" class="form-control" name="giagiam" value="{{ old('giagiam',$list->giagiam) }}" id="giagiam" placeholder="Nhập giá khuyến mãi" >
                </div>
                @if ($errors->has('giagiam'))
                    <span class="text-danger col-md-10">{{ $errors->first('giagiam') }}</span>
                @endif
            </div>

            <div>
                <label class="control-label col-md-2">Hình Ảnh Cũ</label>
                <img src="{{ asset($list->hinhanh) }}" style="height: 70px; width: 70px;">
            </div><br>

            <div class="form-group">
                <label class="control-label col-md-5">Cập Nhật Ảnh Mới (Không bắt buộc)</label>
                <div class="col-md-10">
                    <input type="file" name="hinhanh" id="hinhanh" placeholder="Chọn Hình Ảnh" >
                </div>
                @if (session('error'))
                <div class="col-md-10 text-danger">
                        {{ session('error') }}
                </div>
                @endif
            </div>


            <div class="form-group">
                <label class="control-label col-md-2">Số Lượng Tồn</label>
                <div class="col-md-10">
                    <input type="number" class="form-control" name="soluongton" value="{{ old('soluongton',$list->soluongton) }}" id="soluongton" placeholder="Nhập số lượng tồn" >
                </div>
                @if ($errors->has('soluongton'))
                    <span class="text-danger col-md-10">{{ $errors->first('soluongton') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label class="control-label col-md-2">Mô tả chi tiết</label>
                <div class="col-md-10">
                    <textarea name="mota" id="mota" rows="4" class="form-control" placeholder="Mô tả chi tiết">{{ old('mota',$list->mota) }}</textarea>
                </div>
                @if ($errors->has('mota'))
                    <span class="text-danger col-md-10">{{ $errors->first('mota') }}</span>
                @endif
            </div>

            <div class="form-group">
                <div class="col-md-10">
                    <a class="btn btn-sm btn-info" href="{{ route('dashboard')}}">
                        <i class="fas fa-backward"></i> <b>Back to List</b>
                    </a>
                    <button type="submit" class="btn btn-success btn-sm">
                        <i class="fas fa-save"></i> <b>Save</b>
                    </button>
                </div>
            </div>
        </div>

    </form>
@endsection
