<form action="{{ route('cart.update') }}" method="POST" name="form">
    @csrf
    <div class="account-panel-content__cart hidden cart-table">
        <div class="empty-cart">
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
                                        <img src="{{ asset('/resources/images/'.$attribute['img']) }}" style="height: 30px; width: 30px;">
                                    </td>

                                    <td>
                                        {{ $row->name }}
                                    </td>

                                    <td valign="middle">
                                        $ {{ number_format($row->price,0,'','.') }}
                                    </td>

                                    <td>
                                        <input type="number" value="{{ $row->quantity }}" name="quantity[]">
                                    </td>

                                    <td>
                                        $ {{ number_format($row->price * $row->quantity ,0,'','.') }}
                                    </td>

                                    <td style="align: center">
                                        <a class="btn" href="{{ route('cart.delcart',['id'=>$row->id]) }}">
                                            <i class="fas fa-times"></i>
                                        </a>
                                    </td>
                                </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>
                                <?php
                                    $totalPrice = \Cart::getTotal();
                                ?>
                                <p>Total:</p> $ {{ number_format($totalPrice) }}
                            </td>
                        </tr>
                    </tfoot>
                </table>

            <button class="button empty-cart-button text-uppercase border-black background-color-white" type="submit">
                <span class="button-link-content">
                    <span class="button-link__title"><b>UPDATE CART</b></span>
                </span>
            </button>
        </div>
    </div>
</form>
