<?php

use function Livewire\Volt\{state, mount};
use App\Models\Blog;
use Illuminate\Support\Str;

state(['blog']);

mount(function () {
    $this->blog = Blog::get()->filter(fn($blog) => Str::of($blog->title)->lower()->replace(' ', '')->toString() == Str::of(request()->route('title'))->lower()->replace(' ', '')->toString())->first();
});

?>

<div class="w-full flex flex-col items-center gap-12 py-12">
    <livewire:utility.bg-cover />
    <div class="flex flex-col items-start gap-24 w-4/5">
        <div class="flex flex-col items-center gap-8 xl:gap-12">
            <div class="text-primary text-2xl font-semibold uppercase">{{ $blog->title }}</div>
            <div class="w-11/12 xl:w-4/5 h-[50vh] overflow-clip">
                <img class="object-center" src="{{ asset('storage/'.$blog->image) }}">
            </div>
            <div class="font-light">
                {!! $blog->description !!}
            </div>
        </div>
    </div>
</div>