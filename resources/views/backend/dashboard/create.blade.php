@extends('layouts.admin')

@section('tittle', 'Add New Product')

@section('mainContent')
    <br />
    <h2 class="col-md-6 text-danger">
        <b>THÊM MỚI SẢN PHẨM</b>
    </h2>
    {{-- @if ( Session::has('success') )
        <div class="alert alert-success alert-dismissible" role="alert">
            <strong>{{ Session::get('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
        </div>
    @endif

    <?php //Hiển thị thông báo lỗi?>
    @if ( Session::has('error') )
        <div class="alert alert-danger alert-dismissible" role="alert">
            <strong>{{ Session::get('error') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
        </div>
    @endif --}}
    
    <form action=" {{route('product.store')}} " method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-horizontal">
            <hr />
    
            <div class="form-group">
                <label class="control-label col-md-2" for="">Tên Sản Phẩm</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="tensanpham" value="{{ old('tensanpham') }}" id="tensanpham" placeholder="Nhập tên sản phẩm" >
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
                            <option value="{{ $row->id }}">{{ $row->tenloaihang }}</option>
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
                    <input type="number" class="form-control" name="giaban" value="{{ old('giaban') }}" id="giaban" placeholder="Nhập giá sản phẩm" >
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
                    <input type="number" class="form-control" name="giagiam" value="{{ old('giagiam') }}" id="giagiam" placeholder="Nhập giá khuyến mãi" >
                </div>
                @if ($errors->has('giagiam'))
                    <span class="text-danger col-md-10">{{ $errors->first('giagiam') }}</span>
                @endif
            </div>
    
            <div class="form-group">
                <label class="control-label col-md-2">Hình Ảnh</label>
                <div class="col-md-10">
                    <input type="file" name="hinhanh" id="hinhanh" placeholder="Chọn Hình Ảnh" >
                </div>
                @if ($errors->has('hinhanh'))
                    <span class="text-danger col-md-10">{{ $errors->first('hinhanh') }}</span>
                @endif
            </div>
    
            <div class="form-group">
                <label class="control-label col-md-2">Số Lượng Tồn</label>
                <div class="col-md-10">
                    <input type="number" class="form-control" name="soluongton" value="{{ old('soluongton') }}" id="soluongton" placeholder="Nhập số lượng tồn" >
                </div>
                @if ($errors->has('soluongton'))
                    <span class="text-danger col-md-10">{{ $errors->first('soluongton') }}</span>
                @endif
            </div>
    
            <div class="form-group">
                <label class="control-label col-md-2">Mô tả chi tiết</label>
                <div class="col-md-10">
                    <textarea name="mota" id="mota" rows="4" class="form-control" placeholder="Mô tả chi tiết">{{ old('mota') }}</textarea>
                </div>
                @if ($errors->has('mota'))
                    <span class="text-danger col-md-10">{{ $errors->first('mota') }}</span>
                @endif
            </div>
    
            <div class="form-group">
                <div class="col-md-10">
                    <a class="btn btn-sm btn-info" href="{{ route('dashboard') }}">
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