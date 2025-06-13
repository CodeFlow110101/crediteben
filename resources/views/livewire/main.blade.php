<?php

use function Livewire\Volt\{state, mount};

state('path');

mount(function () {
    $this->path = request()->path();
});
?>

<div>
    <livewire:header />
    @if($path == '/')
    <livewire:home />
    @elseif($path == 'service')
    <livewire:service />
    @elseif($path == 'about-us')
    <livewire:about-us />
    @elseif($path == 'contact-us')
    <livewire:contact-us />
    @elseif($path == 'blog')
    <livewire:blog />
    @endif
    <livewire:footer />
</div>