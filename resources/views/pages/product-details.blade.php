@extends("layout")

@section('title', 'Product Details | DIOR')

@section("styles")
    <link rel="stylesheet" type="text/css" href="{{ ('public/frontend/css/home.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ ('public/frontend/css/product-details.css') }}">
@stop

@section("responsive")
    {{--custom css item suggest search--}}
@stop

@section('content')
    <section class="product-details">
        <div class="product-details__wrapper">
            <div class="product-details__top-content">
                <div class="product-details__top-content-left">
                    <ul class="product-medias-grid">
                        <li class="product-medias-grid-image">
                            <button class="product-media">
                                <div class="image product-media__image">
                                    <img src="https://wwws.dior.com/couture/ecommerce/media/catalog/product/cache/1/cover_image_1/870x580/17f82f742ffe127f42dca9de82fb58b1/z/I/1645805259_221B92A3683_X4874_E01_ZHC.jpg?imwidth=870">
                                </div>
                            </button>
                        </li>
                        <li class="product-medias-grid-image">
                            <button class="product-media">
                                <div class="image product-media__image">
                                    <video autoplay muted loop controls>
                                        <source src="https://assets.christiandior.com/is/content/diorprod/CDC/women/women-looks/22e/ecommerce/VL_F_22_2_LOOK_164_E01-0x1080-5000k.mp4#t=0.1" type="video/mp4">
                                    </video>
                                </div>
                            </button>
                        </li>
                        <li class="product-medias-grid-image">
                            <button class="product-media">
                                <div class="image product-media__image">
                                    <img src="https://wwws.dior.com/couture/ecommerce/media/catalog/product/cache/1/cover_image_1/870x580/17f82f742ffe127f42dca9de82fb58b1/z/I/1645805259_221B92A3683_X4874_E01_ZHC.jpg?imwidth=870">
                                </div>
                            </button>
                        </li>
                        <li class="product-medias-grid-image">
                            <button class="product-media">
                                <div class="image product-media__image">
                                    <img src="https://wwws.dior.com/couture/ecommerce/media/catalog/product/cache/1/cover_image_1/870x580/17f82f742ffe127f42dca9de82fb58b1/z/I/1645805259_221B92A3683_X4874_E01_ZHC.jpg?imwidth=870">
                                </div>
                            </button>
                        </li>
                        <li class="product-medias-grid-image">
                            <button class="product-media">
                                <div class="image product-media__image">
                                    <img src="https://wwws.dior.com/couture/ecommerce/media/catalog/product/cache/1/cover_image_1/870x580/17f82f742ffe127f42dca9de82fb58b1/z/I/1645805259_221B92A3683_X4874_E01_ZHC.jpg?imwidth=870">
                                </div>
                            </button>
                        </li>
                        <li class="product-medias-grid-image">
                            <button class="product-media">
                                <div class="image product-media__image">
                                    <img src="https://wwws.dior.com/couture/ecommerce/media/catalog/product/cache/1/cover_image_1/870x580/17f82f742ffe127f42dca9de82fb58b1/z/I/1645805259_221B92A3683_X4874_E01_ZHC.jpg?imwidth=870">
                                </div>
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="product-details__top-content-right">
                    <div class="top-content">
                        <div class="product-titles">
                            <div class="product-titles-tags">
                                <div class="tag">#New</div>
                            </div>
                            <h1>
                                <span class="multiline-text product-titles">Short-Sleeved Blouse</span>
                                <span class="multiline-text product-titles-subtitle">Pink Cotton Poplin with Multicolor D-Tiger Pop Motif</span>
                            </h1>
                            <div class="code">Reference: 221B92A3683_X4874</div>
                        </div>
                        <div class="product-actions">
                            <div class="product-actions__price">
                                <span class="price-line">40.180.000 ₫</span>
                            </div>
                            <div class="product-actions__button">
                                <span class="button">
                                    <span class="button-content">
                                        <span class="button__title">Add to cart</span>
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="services-block">
                            <div class="services-block__row">
                                <div class="services-block__row__icon">
                                    <span aria-hidden="true" class="icon css-1itvdnv" color="black" height="20" width="20">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.5 17.28c-1.63 0-3.73-.83-6.34-3.44-5.08-5.08-3.43-8.24-2-9.68A3.89 3.89 0 016.46 3a.46.46 0 01.37.13l2 2a.47.47 0 01.06.6L7.11 8.44l4.45 4.45 2.67-1.79a.48.48 0 01.6.06l2 2a.49.49 0 01.14.38 3.94 3.94 0 01-1.14 2.3 4.68 4.68 0 01-3.33 1.44zM6.33 4a3.12 3.12 0 00-1.5.83c-2.61 2.61-.35 6 2 8.32 2.35 2.32 5.72 4.62 8.33 2a3.12 3.12 0 00.83-1.5l-1.55-1.55-2.68 1.8a.48.48 0 01-.6-.06l-5-5a.48.48 0 01-.06-.6l1.79-2.68L6.33 4z" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="services-block__row__value">
                                    <div class="services-block__row__value__link">
                                        <a href="#">
                                            <span>Contact us</span>
                                            <span class="services-block__row__value__link__phone-link">
                                                (+) 852 800 969 886
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="services-block__row">
                                <div class="services-block__row__icon">
                                    <span aria-hidden="true" class="icon css-1itvdnv" height="20" width="20">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.5 5H14V3.5a.5.5 0 00-1 0V5H7V3.5a.5.5 0 10-1 0V5H3.5a.5.5 0 00-.5.5v11a.5.5 0 00.5.5h13a.5.5 0 00.5-.5v-11a.5.5 0 00-.5-.5zm-.45 11.05H4V6h12.1l-.05 10.05z" fill="currentColor"></path>
                                            <path d="M13.5 9h-7a.5.5 0 100 1h7a.5.5 0 000-1zM13.5 12h-7a.5.5 0 000 1h7a.5.5 0 000-1z" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="services-block__row__value">
                                    <button class="booxi-button services-block__row__value__link">
                                        <span>Book your appointment in boutique</span>
                                    </button>
                                </div>
                            </div>
                            <div class="services-block__row">
                                <div class="services-block__row__icon">
                                    <span aria-hidden="true" class="icon css-1itvdnv">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 45"  height="20" width="20">
                                            <path d="M15.1 44.3c-1.1 0-2-.6-2.5-1.6L2.1 20.6C1.4 18.9 1 17.1 1 15.1v-.7C1.4 6.9 7.6 1 15.1 1s13.7 5.9 14.1 13.3v.8c0 1.9-.4 3.7-1.1 5.5l-10.5 22c-.4 1-1.4 1.7-2.5 1.7zm0-41.3C8.7 3 3.4 8 3 14.5v.6c0 1.8.3 3.3.9 4.7l10.5 22.1c.1.3.4.4.7.4.4 0 .6-.3.7-.5l10.5-22c.6-1.5.9-3 .9-4.7v-.7C26.8 8 21.5 3 15.1 3zm0 19.8c-4.2 0-7.7-3.5-7.7-7.7s3.5-7.7 7.7-7.7 7.7 3.5 7.7 7.7-3.5 7.7-7.7 7.7zm0-13.4c-3.1 0-5.7 2.6-5.7 5.7s2.6 5.7 5.7 5.7 5.7-2.6 5.7-5.7-2.6-5.7-5.7-5.7z"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="services-block__row__value">
                                    <a href="#" class="services-block__row__value__link">
                                        Find a boutique
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-description">
                            <div class="product-description-item">
                                <div class="product-description-item__title">
                                    <span class="product-description-item__title__value">
                                        Description
                                    </span>
                                </div>
                                <div class="product-description-item__content">
                                    <div class="product-description-item__content__block">
                                        A staple of the Dior silhouette, the blouse is adorned with the D-Tiger Pop print that embodies the collection's colorful pop universe. Crafted in pink cotton poplin, it features a cropped, regular fit with a front button closure. The short-sleeved blouse can be worn with the matching skirt to complete the look.

                                        <br>
                                        <br>

                                        <ul>
                                            <li>Embroidered bee emblem</li>
                                            <li>Front button closure</li>
                                            <li>Mother-of-pearl buttons</li>
                                            <li>Unlined</li>
                                            <li>100% cotton</li>
                                            <li>Made in France</li>
                                        </ul>

                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                    </div>
                                </div>
                            </div>

                            <div class="product-description-item">
                                <div class="product-description-item__title">
                                    <span class="product-description-item__title__value">
                                        Description
                                    </span>
                                </div>
                                <div class="product-description-item__content">
                                    <div class="product-description-item__content__block">
                                        A staple of the Dior silhouette, the blouse is adorned with the D-Tiger Pop print that embodies the collection's colorful pop universe. Crafted in pink cotton poplin, it features a cropped, regular fit with a front button closure. The short-sleeved blouse can be worn with the matching skirt to complete the look.

                                        <br>
                                        <br>

                                        <ul>
                                            <li>Embroidered bee emblem</li>
                                            <li>Front button closure</li>
                                            <li>Mother-of-pearl buttons</li>
                                            <li>Unlined</li>
                                            <li>100% cotton</li>
                                            <li>Made in France</li>
                                        </ul>

                                        <br>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-details__bottom-content">
                <div class="product-details__bottom-content-title">TO COMPLETE THE SILHOUETTe</div>
                <div class="product-cross-sells-look-content">
                    <div class="product-cross-sells-look product-cross-sells-look-image">
                        <div class="image">
                            <img src="https://www.dior.com/couture/var/dior/storage/images/folder-media/folder-productpage/folder-crossselllook/folder-femme/folder-summer-22/block-f_22_2_look_164/30791871-1-eng-GB/f_22_2_look_164_1440_1200.jpg">
                        </div>
                    </div>
                    <div class="product-cross-sells-look product-cross-sells-look-look">
                        <div class="product-cross-sells-look-products">
                            <div class="product-legend-bottom">
                                <a href="#" class="product-wrapper">
                                    <div class="product-image">
                                        <div class="image">
                                            <img src="https://wwws.dior.com/couture/ecommerce/media/catalog/product/cache/1/grid_image/460x497/17f82f742ffe127f42dca9de82fb58b1/n/k/1643104881_B0262WWPO_M939_E01_GH.jpg?imwidth=460">
                                        </div>
                                    </div>
                                    <div class="product-legend">
                                        <span class="title-with-level product-title">Dior Caro Belt</span>
                                        <p class="multiline-text product-subtitle">Black Smooth Calfskin and Fluorescent Pink Transparent Resin, 12 MM</p>
                                        <span class="price-line">15.680.000 ₫</span>
                                    </div>
                                </a>
                            </div>
                            <div class="product-legend-bottom">
                                <a href="#" class="product-wrapper">
                                    <div class="product-image">
                                        <div class="image">
                                            <img src="https://wwws.dior.com/couture/ecommerce/media/catalog/product/cache/1/grid_image/460x497/17f82f742ffe127f42dca9de82fb58b1/n/k/1643104881_B0262WWPO_M939_E01_GH.jpg?imwidth=460">
                                        </div>
                                    </div>
                                    <div class="product-legend">
                                        <span class="title-with-level product-title">Dior Caro Belt</span>
                                        <p class="multiline-text product-subtitle">Black Smooth Calfskin and Fluorescent Pink Transparent Resin, 12 MM</p>
                                        <span class="price-line">15.680.000 ₫</span>
                                    </div>
                                </a>
                            </div>
                            <div class="product-legend-bottom">
                                <a href="#" class="product-wrapper">
                                    <div class="product-image">
                                        <div class="image">
                                            <img src="https://wwws.dior.com/couture/ecommerce/media/catalog/product/cache/1/grid_image/460x497/17f82f742ffe127f42dca9de82fb58b1/n/k/1643104881_B0262WWPO_M939_E01_GH.jpg?imwidth=460">
                                        </div>
                                    </div>
                                    <div class="product-legend">
                                        <span class="title-with-level product-title">Dior Caro Belt</span>
                                        <p class="multiline-text product-subtitle">Black Smooth Calfskin and Fluorescent Pink Transparent Resin, 12 MM</p>
                                        <span class="price-line">15.680.000 ₫</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-cross-sells">
                <div class="product-cross-sells-title">Suggestions</div>
                <ul class="slide-container">
                    <li class="slider-content">
                        <div class="product-legend-bottom">
                            <a href="#" class="product-wrapper">
                                <div class="product-image">
                                    <div class="image">
                                        <img src="https://wwws.dior.com/couture/ecommerce/media/catalog/product/cache/1/grid_image/460x497/17f82f742ffe127f42dca9de82fb58b1/B/E/1645805328_22ANP304I004_C431_E12_GH.jpg?imwidth=460" alt="D-Tiger Pop Stole Worn view cropped">
                                    </div>
                                </div>
                                <div class="product-legend">
                                    <span class="title-with-level product-title">Dior Caro Belt</span>
                                    <p class="multiline-text product-subtitle">Black Smooth Calfskin and Fluorescent Pink Transparent Resin, 12 MM</p>
                                    <span class="price-line">15.680.000 ₫</span>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="slider-content">
                        <div class="product-legend-bottom">
                            <a href="#" class="product-wrapper">
                                <div class="product-image">
                                    <div class="image">
                                        <img src="https://wwws.dior.com/couture/ecommerce/media/catalog/product/cache/1/grid_image/460x497/17f82f742ffe127f42dca9de82fb58b1/B/E/1645805328_22ANP304I004_C431_E12_GH.jpg?imwidth=460" alt="D-Tiger Pop Stole Worn view cropped">
                                    </div>
                                </div>
                                <div class="product-legend">
                                    <span class="title-with-level product-title">Dior Caro Belt</span>
                                    <p class="multiline-text product-subtitle">Black Smooth Calfskin and Fluorescent Pink Transparent Resin, 12 MM</p>
                                    <span class="price-line">15.680.000 ₫</span>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="slider-content">
                        <div class="product-legend-bottom">
                            <a href="#" class="product-wrapper">
                                <div class="product-image">
                                    <div class="image">
                                        <img src="https://wwws.dior.com/couture/ecommerce/media/catalog/product/cache/1/grid_image/460x497/17f82f742ffe127f42dca9de82fb58b1/B/E/1645805328_22ANP304I004_C431_E12_GH.jpg?imwidth=460" alt="D-Tiger Pop Stole Worn view cropped">
                                    </div>
                                </div>
                                <div class="product-legend">
                                    <span class="title-with-level product-title">Dior Caro Belt</span>
                                    <p class="multiline-text product-subtitle">Black Smooth Calfskin and Fluorescent Pink Transparent Resin, 12 MM</p>
                                    <span class="price-line">15.680.000 ₫</span>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="slider-content">
                        <div class="product-legend-bottom">
                            <a href="#" class="product-wrapper">
                                <div class="product-image">
                                    <div class="image">
                                        <img src="https://wwws.dior.com/couture/ecommerce/media/catalog/product/cache/1/grid_image/460x497/17f82f742ffe127f42dca9de82fb58b1/B/E/1645805328_22ANP304I004_C431_E12_GH.jpg?imwidth=460" alt="D-Tiger Pop Stole Worn view cropped">
                                    </div>
                                </div>
                                <div class="product-legend">
                                    <span class="title-with-level product-title">Dior Caro Belt</span>
                                    <p class="multiline-text product-subtitle">Black Smooth Calfskin and Fluorescent Pink Transparent Resin, 12 MM</p>
                                    <span class="price-line">15.680.000 ₫</span>
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@stop

@section('scripts')
    <script src="{{ ('public/frontend/js/home.js') }}" crossorigin="anonymous"></script>
    <script src="{{ ('public/frontend/js/product-details.js') }}" crossorigin="anonymous"></script>
@stop
