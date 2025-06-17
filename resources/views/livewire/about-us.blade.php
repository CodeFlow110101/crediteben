<?php

use App\Models\AboutUs;
use Illuminate\Support\Facades\App;

use function Livewire\Volt\{state, with};

with(fn() => ['content' => AboutUs::get()->mapWithKeys(fn($content) => [$content->key => App::isLocale('fr') ? $content->fr : $content->en])]);

?>

<div class="w-full flex flex-col items-center gap-12">
    <livewire:utility.bg-cover />
    <div class="flex w-4/5 mx-auto *:flex-1 gap-12 py-12">
        <div class="flex flex-col gap-4 py-12">
            <div class="uppercase text-primary text-2xl tracking-wider font-medium">{{ $content['section-1-heading'] }}</div>
            <div class="text-5xl font-semibold">{!! $content['section-1-subheading'] !!}</div>
            <div>
                {!! $content['section-1-description'] !!}
            </div>
            <div class="flex flex-col text-xl font-semibold underline gap-3 tracking-wide">
                <div>
                    Credit Risk Assessment
                </div>
                <div>
                    Accounts Receivable Management
                </div>
                <div>
                    Credit Policy Development and implementation
                </div>
                <div>
                    Debt Recovery & Collection - No collection, no commission
                </div>
            </div>
        </div>
        <div>
            <img class="size-full object-cover" src="{{ asset('images/home-image.webp') }}">
        </div>
    </div>
    <div class="bg-primary py-12">
        <div class="*:bg-white flex gap-4 w-4/5 mx-auto *:flex-1 *:pb-20 *:pt-8 *:px-8">
            <div class="flex flex-col gap-6 text-center">
                <div class="text-primary flex flex-col gap-1 text-2xl font-medium">
                    <div class="flex justify-center">
                        <svg class="size-12 text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div>{!! $content['section-2-tab-1-heading'] !!}</div>
                </div>
                <div class="font-light">
                    {!! $content['section-2-tab-1-subheading'] !!}
                </div>
            </div>
            <div class="flex flex-col gap-6 text-center">
                <div class="text-primary flex flex-col gap-1 text-2xl font-medium">
                    <div class="flex justify-center">
                        <svg class="size-12 text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M15.03 9.684h3.965c.322 0 .64.08.925.232.286.153.532.374.717.645a2.109 2.109 0 0 1 .242 1.883l-2.36 7.201c-.288.814-.48 1.355-1.884 1.355-2.072 0-4.276-.677-6.157-1.256-.472-.145-.924-.284-1.348-.404h-.115V9.478a25.485 25.485 0 0 0 4.238-5.514 1.8 1.8 0 0 1 .901-.83 1.74 1.74 0 0 1 1.21-.048c.396.13.736.397.96.757.225.36.32.788.269 1.211l-1.562 4.63ZM4.177 10H7v8a2 2 0 1 1-4 0v-6.823C3 10.527 3.527 10 4.176 10Z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div>{!! $content['section-2-tab-2-heading'] !!}</div>
                </div>
                <div class="font-light">
                    {!! $content['section-2-tab-2-subheading'] !!}
                </div>
            </div>
            <div class="flex flex-col gap-6 text-center">
                <div class="text-primary flex flex-col gap-1 text-2xl font-medium">
                    <div class="flex justify-center">
                        <svg class="size-12 text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4.5V19a1 1 0 0 0 1 1h15M7 14l4-4 4 4 5-5m0 0h-3.207M20 9v3.207" />
                        </svg>
                    </div>
                    <div>{!! $content['section-2-tab-3-heading'] !!}</div>
                </div>
                <div class="font-light">
                    {!! $content['section-2-tab-3-subheading'] !!}
                </div>
            </div>
        </div>
    </div>
    <div x-data="{ show: 1 }" class="flex flex-col gap-8 py-12 text-center">
        <div class="text-4xl font-semibold capitalize">{!! $content['section-2-tab-3-subheading'] !!}</div>
        <div x-show="show == 1" class="w-4/5 mx-auto italic">
            {!! $content['section-3-quote-1'] !!}
        </div>
        <div x-show="show == 2" class="w-4/5 mx-auto italic">
            {!! $content['section-3-quote-2'] !!}
        </div>
        <div class="flex justify-center *:size-3 *:rounded-full gap-4">
            <div :class="show == 1 ? 'bg-primary' : 'bg-black/20'" @click="show=1;"></div>
            <div :class="show == 2 ? 'bg-primary' : 'bg-black/20'" @click="show=2;"></div>
        </div>
    </div>
    <div class="flex justify-end relative overflow-clip">
        <div class="absolute -z-50">
            <img src="{{ asset('images/about-us-bg.webp') }}">
        </div>
        <div class="w-3/5 flex flex-col gap-5 text-white bg-primary/75 py-48 px-10">
            <div class="text-5xl font-semibold capitalize">
                {!! $content['section-4-heading'] !!}
            </div>
            <div>
                {!! $content['section-4-subheading-1'] !!}
            </div>
            <div>
                {!! $content['section-4-subheading-2'] !!}
            </div>
        </div>
    </div>
</div>