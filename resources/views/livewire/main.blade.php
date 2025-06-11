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
    @endif
    <livewire:footer />
</div>