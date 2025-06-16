<?php

use function Livewire\Volt\{state, mount};

state('path');

mount(function () {
    $this->path = request()->route()->getName();
});
?>

<div>
    <livewire:header />
    @if($path == 'home')
    <livewire:home />
    @elseif($path == 'service')
    <livewire:service />
    @elseif($path == 'about-us')
    <livewire:about-us />
    @elseif($path == 'contact-us')
    <livewire:contact-us />
    @elseif($path == 'blog')
    <livewire:blog />
    @elseif($path == 'blog-dynamic')
    <livewire:blog-dynamic />
    @endif
    <livewire:footer />
</div>