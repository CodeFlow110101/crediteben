<?php

use App\Models\Blog;

use function Livewire\Volt\{state, with};
use Illuminate\Support\Str;

with(fn() => ['blogs' => Blog::get()->map(function ($blog) {
    $blog->url = Str::of($blog->title)->lower()->replace(' ', '')->toString();
    return $blog;
})]);

?>

<div class="w-full flex flex-col items-center gap-12">
    <livewire:utility.bg-cover />
    <div class="grid grid-cols-3 gap-6 w-4/5 mx-auto py-12">
        @foreach($blogs as $blog)
        <div class="flex flex-col gap-2 shadow border border-black/5">
            <div>
                <img src="{{ asset('storage/'.$blog->image) }}">
            </div>
            <div class="py-4 px-4 flex flex-col gap-2 grow">
                <div class="text-primary text-xl">
                    {{ $blog->title }}
                </div>
                <div class="text-lg">
                    {{ Str::of($blog->description)->stripTags()->limit(30) }}
                </div>
                <div class="mt-auto">
                    <a href="/{{ $blog->url }}" wire:navigate class="text-primary text-sm font-medium">read more</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>