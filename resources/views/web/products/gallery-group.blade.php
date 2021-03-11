<div class="has-background-contrast">
    <div class="has-text-centered py-6">

        <div class="columns">
            <div class="column">
                <h1 class="title is-2">
                    {{ __('Products') }}
                </h1>
                <h2 class="subtitle is-4">
                    {{ __('Lorem ipsum dolor sit amet.') }}
                </h2>
                <br>
                <div class=" grid-cols-3 gap-4 flex space-x-4">
                    
                    <div class="card flex-1">
                        <div class="card-content">
                          <div class="is-flex is-justify-content-center">
                            <i class="fab fa-pagelines" style="font-size: 50px"></i>
                          </div>
                          <h5 class="title is-4 has-text-centered" id="card-product-description"> {{ __('Fresh') }} </h5>                          
                        </div>
                      </div>
                    <div class="card flex-1">
                      <div class="card-content">
                        <div class="is-flex is-justify-content-center">
                          <i class="fab fa-pagelines" style="font-size: 50px"></i>
                        </div>
                        <h5 class="title is-4 has-text-centered" id="card-product-description"> {{ __('Fresh') }} </h5>
                        
                      </div>
                    </div>
                  
                 
                    <div class="card flex-1 ">
                      <div class="card-content">
                        <div class="is-flex is-justify-content-center">
                          <i class="fab fa-pagelines" style="font-size: 50px"></i>
                        </div>
                        <h5 class="title is-4 has-text-centered" id="card-product-description"> {{ __('Fresh') }} </h5>
                        
                      </div>
                    </div>
                    <div class="card flex-1">
                        <div class="card-content">
                          <div class="is-flex is-justify-content-center">
                            <i class="fab fa-pagelines" style="font-size: 50px"></i>
                          </div>
                          <h5 class="title is-4 has-text-centered" id="card-product-description"> {{ __('Fresh') }} </h5>
                          
                        </div>
                      </div>
                  
                </div>
            </div>
        </div>

        
        <div class="columns ">
            
            <div class="column ">
                <div class="grid-gallery">
                    <a class="grid-gallery__item" href="#">
                        <img class="grid-gallery__image" src="{{ asset('/assets/img/product-grid/artichoke.jpg') }}">
                        <span class="grid-gallery__text"> {{ __('Product Name') }} </span>
                    </a>
                    <a class="grid-gallery__item" href="#">
                        <img class="grid-gallery__image" src="{{ asset('/assets/img/product-grid/asparagus.jpg') }}">
                        <span class="grid-gallery__text"> {{ __('Product Name') }} </span>
                    </a>
                    <a class="grid-gallery__item" href="#">
                        <img class="grid-gallery__image" src="{{ asset('/assets/img/product-grid/mango.jpg') }}">
                        <span class="grid-gallery__text"> {{ __('Product Name') }} </span>
                    </a>
                    <a class="grid-gallery__item" href="#">
                        <img class="grid-gallery__image" src="{{ asset('/assets/img/product-grid/pepper.jpg') }}">
                        <span class="grid-gallery__text"> {{ __('Product Name') }} </span>
                    </a>
                    <a class="grid-gallery__item" href="#">
                        <img class="grid-gallery__image" src="{{ asset('/assets/img/product-grid/pinnaple.jpg') }}">
                        <span class="grid-gallery__text"> {{ __('Product Name') }} </span>
                    </a>
                    <a class="grid-gallery__item" href="#">
                        <img class="grid-gallery__image" src="{{ asset('/assets/img/product-grid/artichoke.jpg') }}">
                        <span class="grid-gallery__text"> {{ __('Product Name') }} </span>
                    </a>
                </div>


            </div>
            
        </div>
    </div>
</div>