<script src="{{ asset('/js/web/layout.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.3/dist/js/bulma-carousel.min.js"></script>
<script>
    bulmaCarousel.attach('#carousel-demo', {
        initialSlide: 0,
        slidesToScroll: 1,
        slidesToShow: 1,
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