<section class="hero has-background-contrast" id="contact-us">
  <div class="hero-body">
    <div class="container">
      <div>
        <div class="content">
          <h4 class="title is-4"> {{ __('Contact Us') }} </h4>
        </div>
        <h6 class="subtitle is-6"> {{ __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, neque.') }} </h6>
        <div class="columns box">
          <form class="column" action="#">
            <div class="field">
              <label class="label"> {{ __('Name and Lastname') }} </label>
              <div class="control">
                <input class="input" type="text" placeholder=" {{ __('Name and Lastname') }} " required />
              </div>
            </div>
            <div class="field columns">
              <div class="column">
                <div class="field">
                  <label class="label"> {{ __('Company') }} </label>
                  <div class="control">
                    <input class="input" type="text" placeholder=" {{ __('Company') }} " required />
                  </div>
                </div>
              </div>
              <div class="column">
                <div class="field">
                  <label class="label"> {{ __('Phone Number') }} </label>
                  <div class="control">
                    <input class="input" type="tel" placeholder=" {{ __('Phone Number') }} " required />
                  </div>
                </div>
              </div>
            </div>
            <div class="field">
              <label class="label"> {{ __('Email') }} </label>
              <div class="control has-icons-left has-icons-right">
                <input class="input" type="email" placeholder=" {{ __('Email') }} " required />
                <span class="icon is-small is-left">
                  <i class="fa fa-envelope"></i>
                </span>
              </div>
            </div>
            <div class="field">
              <label class="label"> {{ __('Message') }} </label>
              <div class="control">
                <textarea
                  class="textarea"
                  type="text"
                  placeholder=" {{ __('Type your message here ...') }} "
                  required
                ></textarea>
              </div>
            </div>
            <div class="field">
              <label class="label"></label>
              <div class="control">
                {{-- <button class="button is-primary is-loading is-medium is-fullwidth" type="submit"> {{ __('Submit') }} </button> --}}

                <button class="button is-primary is-medium is-fullwidth" type="submit"> {{ __('Submit') }} </button>
              </div>
            </div>
          </form>
          <div class="column invisible" 
          style="background-image: url('/assets/img/tools/contact.png');  
                background-position: center; 
                background-repeat: no-repeat; 
                background-size: cover; ">
          
            {{-- <img class="shadow rounded" src="{{ asset('/assets/img/tools/contact.png') }}" alt="" /> --}}

            {{-- <figure class="image is-covered w-full">
              <img class="shadow rounded" src="{{ asset('/assets/img/tools/contact.png') }}" alt="" />
            </figure> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
</section>