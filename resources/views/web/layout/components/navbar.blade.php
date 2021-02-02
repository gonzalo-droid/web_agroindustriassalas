<div class="container" id="navbar-container">
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="{{ route('home') }}">
                <figure class="image">
                    <img style="width: 40%" src="{{ asset('/assets/web/images/logotipo.png') }}" />
                </figure>
            </a>
            <a
                role="button"
                class="navbar-burger"
                aria-label="menu"
                aria-expanded="false"
                data-target="navMenu"
            >
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
        <div id="navMenu" class="navbar-menu">
            <div class="navbar-start"></div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <a class="navbar-item has-text-centered link-active" href="{{ route('home') }}"> {{ __('HOME') }} </a>
                    <a class="navbar-item has-text-centered" href="{{ route('products') }}"> {{ __('PRODUCTS') }} </a>
                    <a class="navbar-item has-text-centered" href="{{ route('about-us') }}"> {{ __('ABOUT US') }} </a>
                    <div class="navbar-item is-flex is-justify-content-center is-align-items-center">
                        <a class="button ml-2 mr-1 is-secondary" href="#"> ES </a>
                        <a class="button mr-2 ml-1 has-background-grey-dark has-text-light" href="#"> EN </a>
                    </div>
                    <div class="navbar-item is-flex is-justify-content-center">
                        <a class="button is-primary" href="{{ route('contact-us') }}">
                            <strong> {{ __('CONTACT US') }} </strong>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>
