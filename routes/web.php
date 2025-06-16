<?php

use App\Http\Middleware\BlogValidation;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::redirect('/', '/service');


Volt::route('/', 'main')->name('home');
Volt::route('/service', 'main')->name('service');
Volt::route('/about-us', 'main')->name('about-us');
Volt::route('/contact-us', 'main')->name('contact-us');
Volt::route('/blog', 'main')->name('blog');
Volt::route('/{title}', 'main')->name('blog-dynamic')->middleware(BlogValidation::class);
