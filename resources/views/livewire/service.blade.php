<?php

use App\Models\Services;
use Illuminate\Support\Facades\App;

use function Livewire\Volt\{state, with, mount};

state('isfrench')->reactive();

with(fn() => [
    'services' => Services::get()->mapWithKeys(fn($service) => [$this->isfrench ? $service->title_fr : $service->title =>  $this->isfrench ? $service->description_fr : $service->description]),
]);

mount(fn($isfrench) => $this->isfrench = $isfrench);

?>

<div class="w-full flex flex-col items-center gap-12 max-xl:pb-12">
    <livewire:utility.bg-cover :isfrench="$isfrench" />
    <div class="w-11/12 xl:w-4/5 flex max-xl:flex-col gap-10">
        <div class="flex flex-col gap-12 flex-1">
            @foreach($services as $title => $description)
            <div class="flex flex-col gap-4">
                <div class="text-primary text-2xl font-semibold uppercase">{!! $title !!}</div>
                <div class="font-light max-xl:text-sm">
                    {!! $description !!}
                </div>
            </div>
            @endforeach
        </div>
        <div class="relative">
            <div class="flex flex-col gap-4 sticky top-6">
                <div class="uppercase text-2xl text-primary font-semibold">Services</div>
                <div class="flex flex-col gap-2 *:bg-primary group *:text-white *:py-2 *:px-4 *:hover:bg-white *:hover:text-primary *:cursor-pointer *:transition-colors">
                    @foreach($services as $title => $description)
                    <div>{!! $title !!}</div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>