<?php

use App\Models\Career;
use App\Models\CareerJob;

use function Livewire\Volt\{state, mount, with};

state('isfrench')->reactive();

with(fn() => [
    'content' => Career::get()->mapWithKeys(fn($content) => [$content->key => $this->isfrench ? $content->fr : $content->en]),
    'jobs' => CareerJob::get(),
]);
mount(fn($isfrench) => $this->isfrench = $isfrench);

?>

<div class="w-full flex flex-col items-center gap-12 max-xl:pb-12">
    <livewire:utility.bg-cover :isfrench="$isfrench" />
    <div class="w-11/12 xl:w-4/5 flex flex-col gap-4">
        <div class="text-primary text-2xl font-semibold uppercase"> {{ $content['heading'] }}</div>
        <div class="font-light max-xl:text-sm">
            {!! $content['description'] !!}
        </div>

        <div class="py-10 flex flex-col gap-6">
            @foreach($jobs as $job)
            <div x-data="{ expanded: false }" class="flex flex-col gap-4 border-t border-t-primary p-4">
                <div class="text-primary text-xl font-semibold uppercase">
                    {{ $isfrench ? $job->title_fr : $job->title_en }}
                </div>
                <div x-show="!expanded" class="font-light max-xl:text-sm">
                    {!! Str::of($isfrench ? strip_tags($job->description_fr) :strip_tags($job->description_en))->limit("200") !!}
                    @if(Str::of($isfrench ? strip_tags($job->description_fr) :strip_tags($job->description_en))->length > 200)
                    <div @click="expanded = !expanded;" class="text-sm text-primary cursor-pointer underline">Read more</div>
                    @endif
                </div>

                <div x-show="expanded" class="font-light max-xl:text-sm">
                    {!! Str::of($isfrench ? $job->description_fr : $job->description_en) !!}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>