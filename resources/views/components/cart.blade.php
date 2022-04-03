<form action="{{ route('cart.update') }}" method="POST" name="form">
    @csrf
    <div class="account-panel-content__cart hidden">
        <div class="empty-cart">
            {{-- $list_cart->count() --}}
            @if ( $list_cart->count() == 0) 
                <tr>
                    <div class="text">You do not have any products in your basket</div>
                </tr>               
            @else
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
                                Price
                            </th>

                            <th>
                                Quantity
                            </th>
                            <th>
                                Total Price
                            </th>
                            <th></th>
                        </tr>    
                    </thead>

                    <tbody>
                        @foreach ($list_cart as $row)
                            <?php $attribute = $row->attributes ?>
                                <tr>
                                    <td>
                                        <img src="{{ $attribute['img'] }}" style="height: 30px; width: 30px;">
                                    </td>

                                    <td>
                                        {{ $row->name }}
                                    </td>

                                    <td>
                                        {{ number_format($row->price,0,'','.') }} 
                                    </td>

                                    <td>
                                        <input type="number" value="{{ $row->quantity }}" name="quantity">
                                    </td>

                                    <td>
                                        {{ number_format($row->price * $row->quantity ,0,'','.') }} 
                                    </td>

                                    <td style="align: center">
                                        <a class="btn btn-sm btn-danger" href="{{ route('cart.delcart',['id'=>$row->id]) }}">
                                            <i class="fas fa-times"></i>
                                        </a>
                                    </td>
                                </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="3">
                            </th>

                            <th colspan="2">
                                <?php 
                                    $totalPrice = \Cart::getTotal();     
                                ?>
                                Total: {{ number_format($totalPrice) }}
                            </th>
                        </tr>
                    </tfoot>
                </table>
            @endif

            <button class="button empty-cart-button text-uppercase border-black background-color-white" type="submit">
                <span class="button-link-content">
                    <span class="button-link__title">UPDATE</span>
                </span>
            </button>
        </div>
    </div>
</form>