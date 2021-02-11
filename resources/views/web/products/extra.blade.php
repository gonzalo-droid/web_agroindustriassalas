<div class="container">
    <div class="tabs is-boxed is-centered main-menu" id="tab">
        <ul>
            <li data-target="pane-1" id="1" class="is-active">
                <a>
                    <span class="icon is-small"><i class="fab fa-superpowers"></i></span>
                    <span> {{ __('Lorem') }} </span>
                </a>
            </li>
            <li data-target="pane-2" id="2">
                <a>
                    <span class="icon is-small"><i class="fab fa-superpowers"></i></span>
                    <span> {{ __('Lorem') }} </span>
                </a>
            </li>
        </ul>
    </div>
    <div class="tab-content">
        <div class="tab-pane" id="pane-1">
            <h1> {{ __('Calendar') }} </h1>
        </div>
        <div class="tab-pane is-active" id="pane-2">
            <h1> {{ __('Ingredients') }} </h1>
        </div>
    </div>
</div>