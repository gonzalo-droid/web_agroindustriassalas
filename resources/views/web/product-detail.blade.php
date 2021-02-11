@extends('web.layout.app')

@section('web.content')
    
<div class="has-text-centered hero-products"></div>

<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-12">
                <div class="content">
                    <div class="columns">
                        <div class="column is-6">
                            <div class="columns">
                                <div class="column is-2">
                                    <figure class="image is-64x64 is-clickable">
                                        <img src="https://bulma.io/images/placeholders/128x128.png">
                                    </figure>
                                    <figure class="image is-64x64 is-clickable">
                                        <img src="https://bulma.io/images/placeholders/128x128.png">
                                    </figure>
                                    <figure class="image is-64x64 is-clickable">
                                        <img src="https://bulma.io/images/placeholders/128x128.png">
                                    </figure>
                                </div>
                                <div class="column is-10">
                                    <div x-data="{ open: false }" class="is-clickable">
                                        <a @click="open = true" title="View large image">
                                            <figure class="image is-3by2">
                                                <img src="https://bulma.io/images/placeholders/480x320.png" alt="Example image">
                                            </figure>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div>
                                <h3 class="heading"> {{ __('Category Name') }} </h3>
                                <h1 class="title"> {{ __('Product Name') }} </h1>
                                <p class=""> {{ __('Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis pariatur eaque velit iusto doloribus sequi.') }} </p>
                                <br>
                                <a href="#" class="button is-primary is-medium"> {{ __('Contact') }} </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal" :class="{ 'is-active': open }">
    <div class="modal-background" @click="open = false"></div>
        <div class="modal-content">
            <img src="https://via.placeholder.com/1200x675" alt="Example image">
        </div>
    <button class="modal-close is-large" aria-label="close" @click="{ open = false }"></button>
</div>

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

@endsection

@section('scripts')
    
<script>

document.querySelectorAll("#tab li").forEach(function(tabElement) {
        tabElement.onclick = function() { toggleTab(this.id, this.dataset.target); }
    });
    
    function toggleTab(selectedNav, targetId) {
        const tabElements = document.querySelectorAll("#tab li");
    
        tabElements.forEach(function(tabElement) {
            if (tabElement.id == selectedNav) {
                tabElement.classList.add("is-active");
            } else {
                if (tabElement.classList.contains("is-active")) {
                    tabElement.classList.remove("is-active");
                }
            }
        });
    
        setMainTab(targetId);
    }

    function setMainTab(id) {
        const tabs = document.querySelectorAll(".tab-pane");
        tabs.forEach(function(tab) {
            if (tab.id === id) {
                tab.style.display = "block";
            } else {
                tab.style.display = "none";
            }
        });
    }

    setMainTab('pane-1');
    
</script>

@endsection