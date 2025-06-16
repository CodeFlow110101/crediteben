<?php

use function Livewire\Volt\{state, mount};

state('path');

mount(function () {
    $this->path = request()->route()->getName();
});

?>

<div class="h-[50vh] w-full overflow-clip flex justify-end relative">
    @if($path == 'service')
    <img class="object-cover" src="{{ asset('images/service-cover-image.webp') }}">
    @elseif($path == 'about-us')
    <img class="object-cover" src="{{ asset('images/home-bg.webp') }}">
    @elseif($path == 'contact-us')
    <img class="object-cover" src="{{ asset('images/contact-us-cover.webp') }}">
    @elseif($path == 'blog' || $path == 'blog-dynamic')
    <img class="object-cover object-bottom" src="{{ asset('images/blog-cover.webp') }}">
    @endif
    <div class="absolute inset-0 bg-gradient-to-b from-white/50 to-primary/90 flex flex-col items-center">
        <div class="w-4/5 flex gap-4 py-8 mt-auto">
            <div class="border-2 border-accent"></div>
            <div class="flex flex-col text-white">
                <div class="text-6xl uppercase tracking-wide font-semibold">
                    @if($path == 'service')
                    Our Services
                    @elseif($path == 'about-us')
                    about us
                    @elseif($path == 'contact-us')
                    contact us
                    @elseif($path == 'blog' || $path == 'blog-dynamic')
                    blog
                    @endif
                </div>
                <div class="text-xl font-light">
                    @if($path == 'service')
                    Efficient Solutions for Maximum Results
                    @elseif($path == 'about-us')
                    We have been collecting since 1992.
                    @elseif($path == 'contact-us')
                    We would love to hear from you.
                    @elseif($path == 'blog' || $path == 'blog-dynamic')
                    Stay Updated.
                    @endif
                </div>
            </div>
        </div>
        <div class="w-full bg-white/90 py-2 flex justify-center">
            <div class="w-4/5 text-sm capitalize">Home >>
                @if($path == 'service')
                Our Services
                @elseif($path == 'about-us')
                about us
                @elseif($path == 'contact-us')
                contact us
                @elseif($path == 'blog' || $path == 'blog-dynamic')
                blog
                @endif
            </div>
        </div>
    </div>
</div>