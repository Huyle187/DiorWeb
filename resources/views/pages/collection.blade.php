@extends("layout")

@section('title', " | DIOR")

@section("styles")
    <link rel="stylesheet" type="text/css" href="{{ ('public/frontend/css/service-messaging.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ ('public/frontend/css/footer-explore-more.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ ('public/frontend/css/collection.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ ('public/frontend/css/item.css') }}">
@stop

@section("responsive")
    {{--custom css item suggest search--}}
@stop

@section('content')
    <section class="collection">
        <div class="collection__page-content">
            <h1 class="title-with-level page-title text-uppercase">
                <div class="multiline-text"> Spring-Summer 2022 Collection
                </div>
            </h1>
            <div class="page-cover">
                <div class="page-cover-wrapper">
                    <div class="page-cover__description">
                        <p>
                            At the crossing of bright, bold colors, the power of black and the elegance of nude, the Dior spring-summer 2022 ready-to-wear collection imagined by Maria Grazia Chiuri instills a new way to play with fashion. An ode to freedom and light-hearted self-confidence.
                        </p>
                    </div>
                </div>
            </div>
            <div class="merchandisingFilters">
                <div class="filters-bar-expanded">
                    <div class="filters-bar-expanded__content">
                        <div class="filters-bar-expanded__content__slider">
                            <div class="filters-bar-expanded__content__slider__wrapper">
                                <div class="filter-bar-items">
                                    <div class="filter-bar-slider-wrapper">
                                        <div class="smooth-slider">
                                            <div class="smooth-slider__slider__content__children">
                                                <span class="selectCell__cell__title">
                                                    Category
                                                </span>
                                                <div class="selectCell__cell__icon">
                                                    <span class="icon selectCell__cell__icon__arrow css-f86pio">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M15.39 7.6a.54.54 0 00-.78 0L10 12.21 5.39 7.6a.54.54 0 00-.78 0 .55.55 0 000 .77L10 13.76l5.39-5.39a.55.55 0 000-.77z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="smooth-slider__slider__content__children">
                                                <span class="selectCell__cell__title">
                                                    Color
                                                </span>
                                                <div class="selectCell__cell__icon">
                                                    <span class="icon selectCell__cell__icon__arrow css-f86pio">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M15.39 7.6a.54.54 0 00-.78 0L10 12.21 5.39 7.6a.54.54 0 00-.78 0 .55.55 0 000 .77L10 13.76l5.39-5.39a.55.55 0 000-.77z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="smooth-slider__slider__content__children">
                                                <div class="box">
                                                    <span class="icon css-f86pio">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M16.1 3.9v12.2H3.9V3.9h12.2zm.4-.9h-13c-.3 0-.5.2-.5.5v13c0 .3.2.5.5.5h13c.3 0 .5-.2.5-.5v-13c0-.3-.2-.5-.5-.5z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <span class="selectCell__cell__title">
                                                    Available Online 
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="filters-bar-expanded__content__right">
                            <div class="filters-bar-expanded__content__right__products-count">
                                @if ($list->total() < 10)
                                    0{{ $list->total() }}
                                @else
                                    {{ $list->total() }}
                                @endif
                                Articles
                            </div>
                            <div class="selectCell">
                                <span class="selectCell__cell__title">
                                    Sort by
                                </span>
                                <div class="selectCell__cell__icon">
                                    <span class="icon selectCell__cell__icon__arrow css-f86pio">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.39 7.6a.54.54 0 00-.78 0L10 12.21 5.39 7.6a.54.54 0 00-.78 0 .55.55 0 000 .77L10 13.76l5.39-5.39a.55.55 0 000-.77z" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @if ($list->count() == 0)
                    <div class="empty">
                        Sorry – there are no results for your search <span>"{{ $search }}"</span>. Please try again
                    </div>
                @else
            <ul class="grid-view-content">
                    @include("components.item")
                @endif
            </ul>
        </div>
    </section>

    @include("components.service-messaging")
    @include("components.footer-explore-more")
@stop

@section('scripts')
    <script src="{{ ('public/frontend/js/service-messaging.js') }}" crossorigin="anonymous"></script>
    <script src="{{ ('public/frontend/js/collection.js') }}" crossorigin="anonymous"></script>
    <script src="{{ ('public/frontend/js/item.js') }}" crossorigin="anonymous"></script>
@stop
