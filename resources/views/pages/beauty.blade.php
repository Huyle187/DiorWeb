@extends("layout")

@section('title', 'DIOR Beauty: Cosmetics, Fragrances, Skincare & Gifts | DIOR')

@section("styles")
    <link rel="stylesheet" type="text/css" href="{{ ('public/frontend/css/beauty.css') }}">
@stop

@section("responsive")
    {{--custom css item suggest search--}}
@stop

@section('content')
    <section class="beauty">
        beauty
    </section>
@stop

@section('scripts')
    <script src="{{ ('public/frontend/js/beauty.js') }}" crossorigin="anonymous"></script>
@stop
