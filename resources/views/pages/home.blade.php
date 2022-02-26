@extends("layout")

@section('title', 'Dior informal website | DIOR')

@section("styles")
    <link rel="stylesheet" type="text/css" href="{{ ('public/frontend/css/home.css') }}">
@stop

@section("responsive")
    {{--custom css item suggest search--}}
@stop

@section('content')
    <section class="home">
        <div class="page-content news-landing-page">
            <a class="dispatch-element" aria-label="" href="/fashion">
                <div class="dispatch-element__content">
                    <div class="dispatch-element__content__background">
                        <div class="image dispatch-element__content__background__image">
                            <img src="https://www.dior.com/couture/var/dior/storage/images/29894864/33-eng-US/cdc-dispatch3_1440_1200.jpg" alt="" style="max-width: 100%;">
                        </div>
                    </div>
                    <h1 id="fashion-accessories" class="title-with-level dispatch-element__title">
                        <span class="multiline-text text-uppercase">FASHION &amp; ACCESSORIES</span>
                    </h1>
                </div>
            </a>
            <a class="dispatch-element" aria-label="" href="/beauty">
                <div class="dispatch-element__content">
                    <div class="dispatch-element__content__background">
                        <div class="image dispatch-element__content__background__image">
                            <img src="https://www.dior.com/couture/var/dior/storage/images/horizon/home-one-dior/dispatch-odd/pcd-dispatch/29893265-13-eng-US/pcd-dispatch3_1440_1200.jpg" alt="" style="max-width: 100%;">
                        </div>
                    </div>
                    <h1 id="fragrance-beauty" class="title-with-level dispatch-element__title">
                        <span class="multiline-text text-uppercase">FRAGRANCE &amp; BEAUTY </span>
                    </h1>
                </div>
            </a>
        </div>
    </section>
@stop

@section('scripts')
    <script src="{{ ('public/frontend/js/home.js') }}" crossorigin="anonymous"></script>
@stop
