@extends('web.layout.app')

@section('styles')
    
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.3/dist/css/bulma-carousel.min.css" />

@endsection

@section('web.content')
    
  @include('web.products.hero')

  @include('web.products.slider')

  @include('web.products.detail')

@endsection

@section('scripts')
    
  <script src="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.3/dist/js/bulma-carousel.min.js"></script>
  <script>
      bulmaCarousel.attach('#categories', {
          initialSlide: 0,
          slidesToScroll: 1,
          slidesToShow: 3,
          autoplay: true,
          infinite: true,
          effect: "translate",
          duration: 2000,
          autoplaySpeed: 6000,
          timing: "ease",
          pauseOnHover: true,
          breakpoints: [
              { changePoint: 480, slidesToShow: 1, slidesToScroll: 1 }, 
              { changePoint: 640, slidesToShow: 1, slidesToScroll: 1 }, 
              { changePoint: 768, slidesToShow: 1, slidesToScroll: 1 } ]
      });
  </script>

@endsection