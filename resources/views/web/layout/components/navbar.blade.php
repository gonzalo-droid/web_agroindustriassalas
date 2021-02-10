<div class="navbar-sticky" id="navbar-container">
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand is-hidden-desktop">
            <a class="navbar-item" href="{{ route('home') }}">
                <figure class="image is-logo is-flex is-justify-content-center is-align-items-center">
                    <img class="logo" src="{{ asset('/assets/web/images/logotipo.png') }}" />
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
            <div class="navbar-start">
                <div class="mega-menu-control navbar-item has-dropdown is-hoverable has-text-centered has-text-weight-semibold">
                    <a class="navbar-link has-text-centered is-arrowless has-text-weight-semibold" href="{{ route('products') }}"> {{ __('PRODUCTS') }} </a>
                    <div class="navbar-dropdown is-hidden mega-menu">
                        <figure class="mx-6 image is-96x96">
                            <a class="mega-menu-item" href="{{ route('product.detail') }}">
                                <img class="is-rounded mega-menu-image" src="https://bulma.io/images/placeholders/96x96.png">
                            </a>
                            <span class="is-inline-block pt-2 has-text-grey"> {{ __('Name') }}</span>
                        </figure>
                        <figure class="mx-6 image is-96x96">
                            <a class="mega-menu-item" href="{{ route('product.detail') }}">
                                <img class="is-rounded mega-menu-image" src="https://bulma.io/images/placeholders/96x96.png">
                            </a>
                            <span class="is-inline-block pt-2 has-text-grey"> {{ __('Name') }}</span>
                        </figure>
                        <figure class="mx-6 image is-96x96">
                            <a class="mega-menu-item" href="{{ route('product.detail') }}">
                                <img class="is-rounded mega-menu-image" src="https://bulma.io/images/placeholders/96x96.png">
                            </a>
                            <span class="is-inline-block pt-2 has-text-grey"> {{ __('Name') }}</span>
                        </figure>
                        <figure class="mx-6 image is-96x96">
                            <a class="mega-menu-item" href="{{ route('product.detail') }}">
                                <img class="is-rounded mega-menu-image" src="https://bulma.io/images/placeholders/96x96.png">
                            </a>
                            <span class="is-inline-block pt-2 has-text-grey"> {{ __('Name') }}</span>
                        </figure>
                        <figure class="mx-6 image is-96x96">
                            <a class="mega-menu-item" href="{{ route('product.detail') }}">
                                <img class="is-rounded mega-menu-image" src="https://bulma.io/images/placeholders/96x96.png">
                            </a>
                            <span class="is-inline-block pt-2 has-text-grey"> {{ __('Name') }}</span>
                        </figure>
                    </div>
                </div>
                <a class="navbar-item has-text-centered has-text-weight-semibold" href="{{ route('about-us') }}"> {{ __('ABOUT US') }} </a>
            </div>

            <div class="navbar-brand is-hidden-mobile is-hidden-tablet-only">
                <a class="navbar-item" href="{{ route('home') }}">
                    <figure class="image is-logo is-flex is-justify-content-center is-align-items-center">
                        <img class="logo" src="{{ asset('/assets/web/images/logotipo.png') }}" />
                    </figure>
                </a>
            </div>

            <div class="navbar-end">
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
    </nav>
</div>
