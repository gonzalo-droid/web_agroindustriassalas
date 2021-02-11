<?php

// Web

Route::middleware('guest')->group(function() {

    Route::view('/', 'web.home')->name('home');
    Route::view('/nosotros', 'web.about-us')->name('about-us');
    Route::view('/productos', 'web.products')->name('products');
    Route::view('/productos/detalle', 'web.product-detail')->name('product.detail');
    Route::view('/contacto', 'web.contact-us')->name('contact-us');

});

// Dashboard

// ...