<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::redirect('/', '/service');


// Volt::route('/', 'main')->name('home');
Volt::route('/service', 'main')->name('service');
// Volt::route('/about-us', 'main')->name('about-us');
