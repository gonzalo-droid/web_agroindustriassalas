<?php

// Web

Route::middleware('guest')->group(function() {

    Route::view('/', 'web.home')->name('home');

});

// Dashboard

// ...