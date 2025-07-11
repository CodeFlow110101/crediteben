<?php

use App\Models\Blog;

use function Livewire\Volt\{state, with, mount};
use Illuminate\Support\Str;
use Illuminate\Support\Facades\App;

state('isfrench')->reactive();

with(fn() => ['blogs' => Blog::get()->map(function ($blog) {
    $blog->url = Str::of($blog->title)->lower()->replace(' ', '')->toString();
    return $blog;
})]);

mount(fn($isfrench) => $this->isfrench = $isfrench);

?>

<div class="w-full flex flex-col items-center gap-12">
    <livewire:utility.bg-cover :isfrench="$isfrench" />
    <div class="grid xl:grid-cols-3 gap-6 w-4/5 mx-auto py-12">
        @foreach($blogs as $blog)
        <div class="flex flex-col gap-2 shadow border border-black/5">
            <div>
                <img src="{{ asset('storage/'.$blog->image) }}">
            </div>
            <div class="py-4 px-4 flex flex-col gap-2 grow">
                <div class="text-primary text-xl">
                    {{ $isfrench ? $blog->title_fr : $blog->title }}
                </div>
                <div class="text-lg">
                    {{ Str::of($isfrench ? $blog->description_fr : $blog->description)->stripTags()->limit(30) }}
                </div>
                <div class="mt-auto">
                    <a href="/{{ $blog->url }}" wire:navigate class="text-primary text-sm font-medium">read more</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>