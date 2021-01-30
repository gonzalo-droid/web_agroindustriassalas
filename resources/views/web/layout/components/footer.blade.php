<section class="section">
    <div class="container">
        <div class="footer-main">
            <div class="columns">
                <div class="column">
                    <figure class="image is-128x128">
                        <img src="{{ asset('/assets/web/images/logotipo.png') }}" />
                    </figure>
                </div>
                <div class="column">
                    <h4 class="title is-4"> {{ __('Products') }} </h4>
                    <div class="content">
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
                    <h4 class="title is-4"> {{ __('About Us') }} </h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto consequuntur ad minima impedit nemo dolorem quae at, ipsum iste ex.
                    </p>
                </div>
                <div class="column">
                    <h4 class="title is-4"> {{ __('Follow Us') }} </h4>
                    <div class="buttons">
                        <a class="button is-medium is-facebook is-primary-social">
                            <span class="icon">
                                <i class="fab fa-facebook fa-lg"></i>
                            </span>
                        </a>
                        <a class="button is-medium is-instagram is-primary-social">
                            <span class="icon">
                                <i class="fab fa-instagram fa-lg"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer-secondary has-background-grey-dark">
    <div class="content has-text-centered">
        <p class="has-text-light">
            {{ __('Copyright © 2021 | AgroIndustrias Salas | By') }}
            <strong>
                <a href="https://codecix.com" target="_blank" class="link-active has-text-grey-light"> {{ __('Codecix') }} </a>
            </strong>
        </p>
    </div>
</footer>