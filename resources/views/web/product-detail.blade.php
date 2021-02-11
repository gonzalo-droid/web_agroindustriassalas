@extends('web.layout.app')

@section('web.content')
    
    <div class="has-text-centered hero-products"></div>

    @include('web.products.detail')

    @include('web.products.modal')

    @include('web.products.extra')

@endsection

@section('scripts')
    
    <script src="{{ asset('/js/web/product.js') }}"></script>

@endsection