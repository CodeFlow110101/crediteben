<?php

use App\Models\AboutUs;
use App\Models\BlogPage;
use App\Models\ContactUs;
use App\Models\Image;
use App\Models\ServicePage;
use Illuminate\Support\Facades\App;

use function Livewire\Volt\{state, mount, with};

state(['path']);
state(['isfrench'])->reactive();

with(fn() => [
    'aboutus' => AboutUs::get()->mapWithKeys(fn($content) => [$content->key => $this->isfrench ? $content->fr : $content->en]),
    'contactus' => ContactUs::get()->mapWithKeys(fn($content) => [$content->key => $this->isfrench ? $content->fr : $content->en]),
    'service' => ServicePage::get()->mapWithKeys(fn($content) => [$content->key => $this->isfrench ? $content->fr : $content->en]),
    'blog' => BlogPage::get()->mapWithKeys(fn($content) => [$content->key => $this->isfrench ? $content->fr : $content->en]),
    'service_cover' => Image::where('key', 'service-cover')->first()->image,
    'about_us_cover' => Image::where('key', 'about-us-cover')->first()->image,
    'contact_us_cover' => Image::where('key', 'contact-us-cover')->first()->image,
    'blog_cover' => Image::where('key', 'blog-cover')->first()->image,
]);


mount(function ($isfrench) {
    $this->isfrench = $isfrench;
    $this->path = request()->route()->getName();
});

?>

<div class="h-[50vh] w-full overflow-clip flex justify-end relative">
    @if($path == 'service')
    <img class="object-cover" src="{{ asset('storage/'.$service_cover) }}">
    @elseif($path == 'about-us')
    <img class="object-cover" src="{{ asset('storage/'.$about_us_cover) }}">
    @elseif($path == 'contact-us')
    <img class="object-cover" src="{{ asset('storage/'.$contact_us_cover) }}">
    @elseif($path == 'blog' || $path == 'blog-dynamic')
    <img class="object-cover object-bottom" src="{{ asset('storage/'.$blog_cover) }}">
    @endif
    <div class="absolute inset-0 bg-gradient-to-b from-white/50 to-primary/90 flex flex-col items-center">
        <div class="w-11/12 xl:w-4/5 flex gap-4 py-8 mt-auto">
            <div class="border-2 border-accent"></div>
            <div class="flex flex-col text-white">
                <div class="text-4xl xl:text-6xl uppercase tracking-wide font-semibold">
                    @if($path == 'service')
                    {!! $service['cover-heading-1'] !!}
                    @elseif($path == 'about-us')
                    {!! $aboutus['cover-heading-1'] !!}
                    @elseif($path == 'contact-us')
                    {!! $contactus['cover-heading-1'] !!}
                    @elseif($path == 'blog' || $path == 'blog-dynamic')
                    {!! $blog['cover-heading-1'] !!}
                    @endif
                </div>
                <div class="xl:text-xl max-xl:leading-tight font-light">
                    @if($path == 'service')
                    {!! $service['cover-subheading-1'] !!}
                    @elseif($path == 'about-us')
                    {!! $aboutus['cover-subheading-1'] !!}
                    @elseif($path == 'contact-us')
                    {!! $contactus['cover-subheading-1'] !!}
                    @elseif($path == 'blog' || $path == 'blog-dynamic')
                    {!! $blog['cover-subheading-1'] !!}
                    @endif
                </div>
            </div>
        </div>
        <div class="w-full bg-white/90 py-2 flex justify-center">
            <div class="w-11/12 xl:w-4/5 text-xs xl:text-sm capitalize">Home >>
                @if($path == 'service')
                {!! $service['cover-breadcrumb-1'] !!}
                @elseif($path == 'about-us')
                {!! $aboutus['cover-breadcrumb-1'] !!}
                @elseif($path == 'contact-us')
                {!! $contactus['cover-breadcrumb-1'] !!}
                @elseif($path == 'blog' || $path == 'blog-dynamic')
                {!! $blog['cover-breadcrumb-1'] !!}
                @endif
            </div>
        </div>
    </div>
</div>