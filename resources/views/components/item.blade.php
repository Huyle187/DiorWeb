@foreach ($list as $row)
    <li class="grid-view-element">
        <div class="product">
                <a href="product-details" class="product-wrapper">
                    <div class="product-image">
                        <img src="{{asset($row->hinhanh) }}" alt="{{$row->tensanpham}}">
                    </div>
                    <div class="product-legend">
                        <span class="product-title">
                            <span class="multiline-text">{{$row->tensanpham}}</span>
                        </span>
                        <p class="product-subtitle">Blue Dior Oblique Jacquard</p>
                        <span class="price-line">
                            $ {{ number_format($row->giaban,0,'',',') }}
                        </span>
                    </div>
                </a>

                <div class="popin-openers">
                    <div class="popin-openers__content">
                        <button class="quick-buy">
                            <span aria-hidden="true" class="icon quick-buy__icon css-f86pio">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.9 6.95L4 17.5h12l-.9-10.55H4.9z" fill="currentColor"></path>
                                    <path d="M16.63 17.47l-.6-11a.51.51 0 00-.5-.47h-2v-.43a3.5 3.5 0 00-7 0V6h-2a.51.51 0 00-.5.47l-.62 11a.49.49 0 00.49.53h12.3a.49.49 0 00.43-.53zm-12.31-.42L4.9 7h10.2l.56 10.1-11.34-.05zM7.5 5.57a2.5 2.5 0 115 0V6h-5v-.43z" fill="currentColor"></path>
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>
        </div>
    </li>
@endforeach


