<?php

use App\Models\Blog;
use App\Models\Home;
use Illuminate\Support\Facades\App;

use function Livewire\Volt\{state, with};

with(fn() => [
    'blogs' => Blog::get(),
    'content' => Home::get()->mapWithKeys(fn($content) => [$content->key => App::isLocale('fr') ? $content->fr : $content->en]),
]);


?>

<div>
    <div class="fixed -z-50">
        <img class="size-full" src="{!! asset('images/home-bg.webp') !!}">
    </div>
    <div class="bg-white">
        <div class="flex relative">
            <img class="absolute size-full object-scale-down object-right" src="{!! asset('images/home-cover-image.webp') !!}">
            <div class="w-1/2 h-full relative z-10 flex flex-col gap-6 text-white bg-white bg-gradient-to-tr from-primary to-90% to-primary/80 *:w-4/5 *:mx-auto py-36">
                <div class="text-accent uppercase font-medium text-2xl">{!! $content["cover-header-1"] !!}</div>
                <div class="flex flex-col gap-2">
                    <div class="text-6xl font-bold">{!! $content["cover-header-2"] !!}</div>
                    <div class="text-6xl font-bold italic">{!! $content["cover-header-3"] !!}</div>
                </div>
                <div class="text-2xl font-extralight py-2 leading-relaxed tracking-wide">
                    {!! $content["cover-description-1"] !!}
                </div>
                <div>
                    <a href="/contact-us" wire:navigate class="flex gap-2 items-center uppercase group font-medium text-lg tracking-wide text-white bg-black hover:bg-accent hover:text-black w-min whitespace-nowrap py-3 px-8 rounded-lg *:transition-all transition-all hover:scale-125">
                        <div>{!! $content["cover-button-title"] !!}</div>
                        <div class="border border-white group-hover:border-black rounded-full flex justify-center items-center *:size-5 *:text-white group-hover:*:text-black *:transition-all">
                            <svg class="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 12H5m14 0-4 4m4-4-4-4" />
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="py-10 flex flex-col gap-5 text-center">
            <div class="uppercase text-2xl tracking-wide font-medium text-primary">{!! $content["section-2-title-1"] !!}</div>
            <div class="text-4xl font-semibold">{!! $content["section-2-title-2"] !!}</div>
            <div class="w-3/4 mx-auto text-xl leading-relaxed font-light">
                {!! $content["section-2-description-1"] !!}
            </div>
        </div>
        <div class="flex w-4/5 mx-auto *:flex-1 gap-12 py-12">
            <div>
                <img class="size-full object-cover" src="{!! asset('images/home-image.webp') !!}">
            </div>
            <div class="flex flex-col gap-12 py-12">
                <div class="font-semibold text-3xl">
                    {!! $content["section-3-title-1"] !!}
                </div>
                <div x-data="{ show: 'process' }" class="flex *:flex-1 gap-12">
                    <div class="flex flex-col gap-2 text-2xl uppercase *:py-6 text-center font-semibold *:border-b-2 *:hover:border-primary tracking-wide *:cursor-pointer">
                        <div @click="show = 'process';" :class="show == 'process' ? 'text-primary border-accent transition-all' : 'border-transparent'"> {!! $content["section-3-option-name-1"] !!}</div>
                        <div @click="show = 'mission';" :class="show == 'mission' ? 'text-primary border-accent transition-all' : 'border-transparent'">{!! $content["section-3-option-name-2"] !!}</div>
                        <div @click="show = 'values';" :class="show == 'values' ? 'text-primary border-accent transition-all' : 'border-transparent'">{!! $content["section-3-option-name-3"] !!}</div>
                    </div>
                    <div class="font-light text-sm ">
                        <div x-show="show == 'process'">
                            {!! $content["section-3-option-value-1"] !!}
                        </div>
                        <div x-show="show == 'mission'">
                            {!! $content["section-3-option-value-2"] !!}
                        </div>
                        <div x-show="show == 'values'" class="flex items-center h-full">
                            {!! $content["section-3-option-value-3"] !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-gradient-to-b from-primary/50 to-transparent py-16">
        <div class="flex flex-col items-center gap-16 translate-y-1/2">
            <div class="text-6xl font-semibold text-white italic">{!! $content["section-4-title"] !!}</div>
            <div class="flex *:flex-1 *:odd:bg-primary *:even:bg-primary/90 *:p-12 bg-white text-center w-4/5">
                <div class="flex flex-col text-white gap-2 items-center">
                    <div class="text-6xl font-semibold">{!! $content["section-4-tab-1-heading"] !!}</div>
                    <div>{!! $content["section-4-tab-1-subheading"] !!}</div>
                </div>
                <div class="flex flex-col text-white gap-2 items-center">
                    <div class="text-6xl font-semibold">{!! $content["section-4-tab-2-heading"] !!}</div>
                    <div>{!! $content["section-4-tab-2-subheading"] !!}</div>
                </div>
                <div class="flex flex-col text-white gap-2 items-center">
                    <div class="text-6xl font-semibold">{!! $content["section-4-tab-3-heading"] !!}</div>
                    <div>{!! $content["section-4-tab-3-subheading"] !!}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white">
        <div class="h-32"></div>
        <div class="py-12">
            <div class="flex gap-5 *:odd:flex-1 w-4/5 mx-auto">
                <div class="flex flex-col gap-4">
                    <div class="text-primary text-2xl uppercase">
                        {!! $content["section-5-tab-1-heading-1"] !!}
                    </div>
                    <div class="text-3xl font-semibold">
                        {!! $content["section-5-tab-1-heading-2"] !!}
                    </div>
                    <div>
                        {!! $content["section-5-tab-1-description"] !!}
                    </div>
                    <div>
                        <a href="/about-us" wire:navigate class="bg-primary w-min whitespace-nowrap flex items-center rounded-lg text-white py-2 px-6 gap-4 uppercase font-medium cursor-pointer transition-all hover:scale-110">
                            <div> {!! $content["section-5-tab-1-button-title"] !!}</div>
                            <div class="border-2 border-white rounded-full">
                                <svg class="size-3.5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M19 12H5m14 0-4 4m4-4-4-4" />
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="w-0 border-r border-black/20"></div>
                <div class="flex flex-col justify-center gap-4 *:gap-4 text-xl *:items-center">
                    <div class="flex">
                        <div>
                            <svg class="size-15 text-accent" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                        </div>
                        <div>
                            {!! $content["section-5-tab-2-heading-1"] !!}
                        </div>
                    </div>
                    <div class="flex">
                        <div>
                            <svg class="size-15 text-accent" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                        </div>
                        <div>
                            {!! $content["section-5-tab-2-heading-2"] !!}
                        </div>
                    </div>
                    <div class="flex">
                        <div>
                            <svg class="size-15 text-accent" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                        </div>
                        <div>
                            {!! $content["section-5-tab-2-heading-3"] !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col items-center py-12">
            <div class="text-primary text-2xl font-medium uppercase">
                {!! $content["section-6-heading-1"] !!}
            </div>
            <div class="font-semibold text-4xl">
                {!! $content["section-6-heading-2"] !!}
            </div>
            <div class="grid grid-cols-3 gap-6 w-4/5 mx-auto py-12">
                @foreach($blogs as $blog)
                <div class="flex flex-col gap-2 shadow border border-black/5">
                    <div>
                        <img src="{!! asset('storage/'.$blog->image) !!}">
                    </div>
                    <div class="py-4 px-4 flex flex-col gap-2 grow">
                        <div class="text-primary text-xl">
                            {!! $blog->title !!}
                        </div>
                        <div class="text-lg">
                            {!! Str::of($blog->description)->stripTags()->limit(30) !!}
                        </div>
                        <div class="mt-auto">
                            <a href="/" wire:navigate class="text-primary text-sm font-medium">read more</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>