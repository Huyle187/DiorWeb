@extends("layout")

@section('title', 'MODE & ACCESSOIRES | DIOR')

@section("styles")
    <link rel="stylesheet" type="text/css" href="{{ ('public/frontend/css/fashion.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ ('public/frontend/css/collections.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ ('public/frontend/css/footer-explore-more.css') }}">
@stop

@section("responsive")
    {{--custom css item suggest search--}}
@stop

@section('content')
    <section class="fashion">
        @include("components.collections")
        @include("components.collections")
        @include("components.collections")
        @include("components.collections")
        @include("components.collections")
    </section>

    @include("components.footer-explore-more")
@stop

@section('scripts')
    <script src="{{ ('public/frontend/js/fashion.js') }}" crossorigin="anonymous"></script>
@stop
