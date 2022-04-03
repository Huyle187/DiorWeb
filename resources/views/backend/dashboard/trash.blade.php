@extends('layouts.admin')

@section('tittle', 'Trash')

@section('mainContent')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6 text-danger text-uppercase">
                    <b><strong>RECYCLE BIN</strong></b>
                </div>
                <div class="col-md-6 text-right">
                    <a class="btn btn-sm btn-info" href="{{ route('dashboard') }}">
                        <i class="fas fa-backward"></i> Back to List
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            {{-- Alert add Product --}}
            @if (session('error'))
            <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
            </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            {{-- End Alert --}}

            <table class="table table-bordered table-striped text-center">
                <thead class="btn-info">
                    <tr>
                        <th>
                            Hình Ảnh
                        </th>
                        <th>
                            Tên Hàng
                        </th>
                        <th>
                            Tên Loại Hàng
                        </th>
                        <th>
                            Giá Bán
                        </th>
                        <th>
                            Ngày Tạo
                        </th>
                        <th>
                            Ngày Cập Nhật
                        </th>
                        <th>
                            Số Lượng Tồn
                        </th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($list as $row)

                        <tr>
                            <td>
                                <img src="{{ asset($row->hinhanh) }}" style="height: 70px; width: 70px;">
                            </td>
                            <td>
                                {{$row->tensanpham}}
                            </td>
                            <td>
                                {{$row->product_type->tenloaihang}}
                            </td>
                            <td>
                                {{ number_format($row->giaban,0,'','.') }} VNĐ
                            </td>
                            <td>
                                {{$row->created_at}}
                            </td>
                            <td>
                                {{$row->updated_at}}
                            </td>
                            <td>
                                {{$row->soluongton}}
                            </td>

                            <td style="align: center">
                                <a class="btn btn-sm btn-info" href="{{ route('product.retrash', ['id' => $row->masanpham]) }}">
                                    <i class="fas fa-recycle"></i>
                                </a>
                                <a class="btn btn-sm btn-danger" href="{{ route('product.delete', ['id' => $row->masanpham]) }}">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- End of Content -->
@endsection

