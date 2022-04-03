@extends('layouts.admin')

@section('tittle', 'ADMIN | DIOR')

@section('mainContent')
    <!-- Content -->
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6 text-danger text-uppercase">
                    <b><strong>Product List</strong></b>
                </div>
                <div class="col-md-6 text-right">
                    <a class="btn btn-sm btn-success" href="{{ route('product.create') }}">
                        <i class="fas fa-plus"></i> New Product
                    </a>
                    <a class="btn btn-sm btn-danger" href="{{ route('product.trash') }}">
                        <i class="fas fa-trash-alt"></i> Recycle Bin
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
                            Image
                        </th>
                        <th>
                            Product Name
                        </th>
                        <th>
                            Type
                        </th>
                        <th>
                            Price
                        </th>
                        <th>
                            Created at
                        </th>
                        <th>
                            Updated at
                        </th>
                        <th>
                            Quantity
                        </th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @if ($list->count() == 0)
                        <tr>
                            <td colspan='8'>Don't have Product to show on Page!</td>
                        </tr>
                    @else
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
                                    $ {{ number_format($row->giaban,0,'','.') }}
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
                                    <a class="btn btn-sm btn-success" href="#">
                                        <i class="fas fa-info-circle"></i>
                                    </a>
                                    <a class="btn btn-sm btn-info" href="{{ route('product.edit', ['id' => $row->masanpham]) }}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a class="btn btn-sm btn-danger" href="{{ route('product.deltrash', ['id' => $row->masanpham]) }}">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                        @endforeach

                    @endif

                </tbody>
            </table>

            <div class="paging-center">
                <div class="pagination">
                    {!! $list->appends(request()->all())->links() !!}
                </div>
            </div>
            <p>
                Displaying {{$list->count()}} of {{ $list->total() }} product(s).
            </p>
        </div>
    </div>

    <!-- End of Content -->
@endsection
<style>
    .paging-center {
        width: 14%;
        margin: auto;
        text-align: center;
    }

    .pagination a {
        color: black;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
    }
    /*set the style for the active class*/
    .pagination .active {
        background-color: #0094ff;
        color: black;
    }

    /*add background color when user hovers on inactive class*/
    .pagination a:hover:not(.active) {
        background-color: gray;
    }
</style>
