@extends('layouts.admin')

@section('tittle', 'Add New Product')

@section('mainContent')
    <br />
    <h2 class="col-md-6 text-danger">
        <b>ADD NEW PRODUCTS</b>
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
                <label class="control-label col-md-2" for="">Product Name</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="tensanpham" value="{{ old('tensanpham') }}" id="tensanpham" placeholder="Enter Name of Product" >
                </div>
                @if ($errors->has('tensanpham'))
                    <span class="text-danger col-md-10"> {{ $errors->first('tensanpham') }} </span>
                @endif
            </div>

            <div class="form-group">
                <label class="control-label col-md-2" for="">Sub Title</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="subtitle" value="{{ old('subtitle') }}" id="subtitle" placeholder="Enter Sub Title" >
                </div>
                @if ($errors->has('subtitle'))
                    <span class="text-danger col-md-10"> {{ $errors->first('subtitle') }} </span>
                @endif
            </div>

            <div class="form-group">
                <label class="control-label col-md-2">Type</label>
                <div class="col-md-10">
                    <select name="maloaihang" id="maloaihang" class="form-control">
                        <option value="">[Chosse Type]</option>
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
                <label class="control-label col-md-2">Collection</label>
                <div class="col-md-10">
                    <select name="collectionID" id="collectionID" class="form-control">
                        <option value="">[Chosse Collection]</option>
                        @foreach ($collection as $collect)
                            <option value="{{ $collect->id }}">{{ $collect->nameCol }}</option>
                        @endforeach
                    </select>
                </div>
                @if ($errors->has('collectionID'))
                    <span class="text-danger col-md-10">{{ $errors->first('collectionID') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label class="control-label col-md-2">Price</label>
                <div class="col-md-10">
                    <input type="number" class="form-control" name="giaban" value="{{ old('giaban') }}" id="giaban" placeholder="Enter Price" >
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
                <label class="control-label col-md-2">Price Sale</label>
                <div class="col-md-10">
                    <input type="number" class="form-control" name="giagiam" value="{{ old('giagiam') }}" id="giagiam" placeholder="Enter Price Sales" >
                </div>
                @if ($errors->has('giagiam'))
                    <span class="text-danger col-md-10">{{ $errors->first('giagiam') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label class="control-label col-md-2">Image</label>
                <div class="col-md-10">
                    <input type="file" name="hinhanh" id="hinhanh" placeholder="" >
                </div>
                @if ($errors->has('hinhanh'))
                    <span class="text-danger col-md-10">{{ $errors->first('hinhanh') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label class="control-label col-md-2">Quantity</label>
                <div class="col-md-10">
                    <input type="number" class="form-control" name="soluongton" value="{{ old('soluongton') }}" id="soluongton" placeholder="Enter quantity" >
                </div>
                @if ($errors->has('soluongton'))
                    <span class="text-danger col-md-10">{{ $errors->first('soluongton') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label class="control-label col-md-2">Description</label>
                <div class="col-md-10">
                    <textarea name="mota" id="mota" rows="4" class="form-control" placeholder="Enter Description">{{ old('mota') }}</textarea>
                </div>
                @if ($errors->has('mota'))
                    <span class="text-danger col-md-10">{{ $errors->first('mota') }}</span>
                @endif
            </div>
            <br>
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
