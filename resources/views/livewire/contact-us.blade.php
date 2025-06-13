<?php

use function Livewire\Volt\{state, with};

with(fn() => ['options' => collect([
    'Which of these best describe you?',
    'My company needs to collect debt',
    'I work at a bank or other financial institution',
    'I work for a telecommunications company',
    'I work for an accounting firm',
    'I have a question about my personal debt'
])]);

$submit= function(){
    dd('hello');
}

?>

<div class="w-full flex flex-col items-center gap-12">
    <livewire:utility.bg-cover />
    <div class="w-4/5 mx-auto flex *:flex-1 gap-8 py-12">
        <div class="flex flex-col gap-3">
            <div class="text-primary text-2xl">
                NEED TO COLLECT?
            </div>
            <div class="uppercase text-4xl font-semibold">
                get in touch with us
            </div>
            <div class="font-light leading-tight">
                Contact us for a free consultation, new inquires, or to let us know how we are doing. We look forward to hearing from you. A representative will reply within 24 hours.
            </div>
            <div class="flex flex-col gap-2">
                <div class="flex gap-2 items-center">
                    <div>
                        <svg class="size-7 text-accent" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m3.5 5.5 7.893 6.036a1 1 0 0 0 1.214 0L20.5 5.5M4 19h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
                        </svg>
                    </div>
                    <div>contact@crediteben.com</div>
                </div>
                <div class="flex gap-2 items-center">
                    <div>
                        <svg class="size-7 text-accent" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M7.978 4a2.553 2.553 0 0 0-1.926.877C4.233 6.7 3.699 8.751 4.153 10.814c.44 1.995 1.778 3.893 3.456 5.572 1.68 1.679 3.577 3.018 5.57 3.459 2.062.456 4.115-.073 5.94-1.885a2.556 2.556 0 0 0 .001-3.861l-1.21-1.21a2.689 2.689 0 0 0-3.802 0l-.617.618a.806.806 0 0 1-1.14 0l-1.854-1.855a.807.807 0 0 1 0-1.14l.618-.62a2.692 2.692 0 0 0 0-3.803l-1.21-1.211A2.555 2.555 0 0 0 7.978 4Z" />
                        </svg>
                    </div>
                    <div>587-332-3292</div>
                </div>
            </div>
        </div>
        <div>
            <form wire:submit="submit" class="font-light flex flex-col gap-6">
                <div class="flex *:flex-1 gap-4">
                    <div>
                        <input class="bg-black/5 py-2 px-4 w-full outline-none" placeholder="First Name">
                    </div>
                    <div>
                        <input class="bg-black/5 py-2 px-4 w-full outline-none" placeholder="Last Name">
                    </div>
                </div>
                <div>
                    <input class="bg-black/5 py-2 px-4 w-full outline-none" placeholder="Phone No">
                </div>
                <div>
                    <input class="bg-black/5 py-2 px-4 w-full outline-none" placeholder="Email">
                </div>
                <div class="flex *:flex-1 gap-4">
                    <div>
                        <input class="bg-black/5 py-2 px-4 w-full outline-none" placeholder="Company Name">
                    </div>
                    <div>
                        <input class="bg-black/5 py-2 px-4 w-full outline-none" placeholder="Job Title">
                    </div>
                </div>
                <div>
                    <select class="bg-black/5 py-2 px-4 w-full outline-none">
                        @foreach($options as $option)
                        <option value="{{ $option }}">{{ $option }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <textarea class="bg-black/5 py-2 px-4 w-full outline-none" rows="6" placeholder="Tell us about your situation"></textarea>
                </div>
                <div>
                    <button class="uppercase py-2 px-6 bg-primary text-white cursor-pointer font-medium">
                        Send Message
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>