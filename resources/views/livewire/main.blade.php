<?php

use function Livewire\Volt\{state, mount, on};

state(['path', 'isfrench' => session('isfrench', false)]);

on([
    'toggle-language' => function ($value) {
        $this->isfrench = $value;
        session(['isfrench' => $this->isfrench]);
    },
]);

mount(function () {
    $this->path = request()->route()->getName();
});
?>

<div>
    <livewire:header :isfrench="$isfrench" />
    @if($path == 'home')
    <livewire:home :isfrench="$isfrench" />
    @elseif($path == 'service')
    <livewire:service :isfrench="$isfrench" />
    @elseif($path == 'about-us')
    <livewire:about-us :isfrench="$isfrench" />
    @elseif($path == 'contact-us')
    <livewire:contact-us :isfrench="$isfrench" />
    @elseif($path == 'blog')
    <livewire:blog :isfrench="$isfrench" />
    @elseif($path == 'blog-dynamic')
    <livewire:blog-dynamic :isfrench="$isfrench" />
    @endif
    <livewire:footer :isfrench="$isfrench" />
</div>