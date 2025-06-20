<?php

use function Livewire\Volt\{mount, state, with};

use App\Models\Navbar;
use App\Models\Setting;

state('isfrench')->reactive();

with(fn() => [
    'phone' => Setting::where('name', 'phone')->first()->value,
    'email' => Setting::where('name', 'email')->first()->value,
    'navbar' => Navbar::get()->mapWithKeys(fn($element) => [$element->key => $this->isfrench ? $element->fr : $element->en])
]);

mount(fn($isfrench) => $this->isfrench = $isfrench);

?>

<div class="max-xl:h-28">
    <div class="max-xl:fixed top-0 z-50 inset-x-0">
        <div class="bg-gradient-to-r from-primary to-black from-60% text-white w-full flex justify-center py-2">
            <div class="max-xl:flex-col w-11/12 flex justify-between items-center gap-4">
                <div class="flex justify-between items-center gap-4">
                    <div wire:click="$dispatch('toggle-language', { value: false })" class="hover:text-accent cursor-pointer">English</div>
                    <div class="border-l border-white rounded-full h-1/2"></div>
                    <div wire:click="$dispatch('toggle-language', { value: true })" class="hover:text-accent cursor-pointer">Français</div>
                </div>
                <div class="flex justify-end items-center gap-4">
                    <div class="flex gap-4">
                        <div class="flex gap-2 items-center">
                            <div>
                                <svg class="size-5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m3.5 5.5 7.893 6.036a1 1 0 0 0 1.214 0L20.5 5.5M4 19h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
                                </svg>
                            </div>
                            <div>{{ $email }}</div>
                        </div>
                    </div>
                    <div class="border-l border-white rounded-full h-1/2"></div>
                    <div class="flex gap-4">
                        <div class="flex gap-2 items-center">
                            <div>
                                <svg class="size-5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M7.978 4a2.553 2.553 0 0 0-1.926.877C4.233 6.7 3.699 8.751 4.153 10.814c.44 1.995 1.778 3.893 3.456 5.572 1.68 1.679 3.577 3.018 5.57 3.459 2.062.456 4.115-.073 5.94-1.885a2.556 2.556 0 0 0 .001-3.861l-1.21-1.21a2.689 2.689 0 0 0-3.802 0l-.617.618a.806.806 0 0 1-1.14 0l-1.854-1.855a.807.807 0 0 1 0-1.14l.618-.62a2.692 2.692 0 0 0 0-3.803l-1.21-1.211A2.555 2.555 0 0 0 7.978 4Z" />
                                </svg>
                            </div>
                            <div>{{ $phone }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div x-data="{ show: false }" class="flex justify-center bg-white py-3">
            <div class="flex justify-between gap-28 items-center w-11/12 relative">
                <div>
                    <img class="h-14 w-auto" src="{{ asset('images/logo.png') }}">
                </div>
                <div x-cloak :class="show ? 'max-xl:scale-y-100' : 'max-xl:scale-y-0'" class="max-xl:fixed transition-all origin-top inset-x-0 z-50 top-28 max-xl:py-4 bg-white *:bg-white flex max-xl:flex-col flex-1 justify-center *:max-xl:w-11/12 max-xl:*:mx-auto gap-4 xl:gap-14 font-medium text-lg ">
                    <a href="/" wire:navigate>
                        {!! $navbar['home'] !!}
                    </a>
                    <a href="/service" wire:navigate>
                        {!! $navbar['service'] !!}
                    </a>
                    <a href="/about-us" wire:navigate>
                        {!! $navbar['about_us'] !!}
                    </a>
                    <a href="/blog" wire:navigate>
                        {!! $navbar['blog'] !!}
                    </a>
                </div>
                <div class="max-xl:hidden">
                    <a href="/contact-us" wire:navigate class="bg-primary py-3 px-6 rounded-lg text-white font-medium tracking-wide hover:bg-accent hover:text-black transition-all">
                        {!! $navbar['contact'] !!}
                    </a>
                </div>
                <div @click="show = !show" class="xl:hidden">
                    <svg x-show="!show" class="size-full text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14" />
                    </svg>
                    <svg x-cloak x-show="show" class="size-full text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>