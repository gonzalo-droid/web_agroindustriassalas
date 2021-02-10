<footer class="footer-secondary">
    <div class="columns">
        <div class="column">
            <div class="is-3 is-flex is-justify-content-center">
                <figure class="image is-128x128">
                    <img src="{{ asset('/assets/web/images/logotipo.png') }}" />
                </figure>
            </div>
            <p class="has-text-justified">
                {{ __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto consequuntur ad minima impedit nemo dolorem quae at, ipsum iste ex.') }}
            </p>
        </div>
        <div class="column">
            <h4 class="title has-text-centered-desktop is-3"> {{ __('Map website') }} </h4>
            <div class="content is-flex-desktop is-flex-column is-justify-content-center">
                <ul class="footer-list">
                    <li>
                        <a href="#" class="navbar-item pl-0">
                            <span class="icon is-small has-text-grey-light"><i class="fas fa-arrow-right"></i></span>
                            <span class="pl-3"> {{ __('Inicio') }} </span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="navbar-item pl-0">
                            <span class="icon is-small has-text-grey-light"><i class="fas fa-arrow-right"></i></span>
                            <span class="pl-3"> {{ __('Nosotros') }} </span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="navbar-item pl-0">
                            <span class="icon is-small has-text-grey-light"><i class="fas fa-arrow-right"></i></span>
                            <span class="pl-3"> {{ __('Contacto') }} </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="column">
            <h4 class="title has-text-centered-desktop is-3"> {{ __('Products') }} </h4>
            <div class="content is-flex-desktop is-flex-column is-justify-content-center">
                <ul class="footer-list">
                    <li>
                        <a href="#" class="navbar-item pl-0">
                            <span class="icon is-small has-text-grey-light"><i class="fas fa-arrow-right"></i></span>
                            <span class="pl-3"> {{ __('Fresh') }} </span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="navbar-item pl-0">
                            <span class="icon is-small has-text-grey-light"><i class="fas fa-arrow-right"></i></span>
                            <span class="pl-3"> {{ __('Dehydrated') }} </span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="navbar-item pl-0">
                            <span class="icon is-small has-text-grey-light"><i class="fas fa-arrow-right"></i></span>
                            <span class="pl-3"> {{ __('Preserves') }} </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="column">
            <h4 class="title has-text-centered-desktop is-3"> {{ __('Follow Us') }} </h4>
            <div class="is-flex-desktop is-justify-content-center">
                <a href="#" class="button mx-1 is-medium is-facebook is-primary-social">
                    <span class="icon">
                        <i class="fab fa-facebook fa-lg"></i>
                    </span>
                </a>
                <a href="#" class="button mx-1 is-medium is-instagram is-primary-social">
                    <span class="icon">
                        <i class="fab fa-instagram fa-lg"></i>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="content has-text-centered mt-6">
        <p class="has-text-dark">
            {{ __('Copyright © 2021 | AgroIndustrias Salas | By') }}
            <strong>
                <a href="https://codecix.com" target="_blank" class="link-active has-text-grey-light"> Codecix </a>
            </strong>
        </p>
    </div>
</footer>
