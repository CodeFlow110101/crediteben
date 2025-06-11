<?php

use function Livewire\Volt\{rules, state};
use Carbon\Carbon;

state(['name', 'email', 'message']);

rules(['name' => 'required', 'email' => 'required', 'message' => 'required']);

$submit = function () {
};

?>

<div class="pt-16 flex flex-col gap-16 bg-white">
    <div class="flex justify-center">
        <div class="w-4/5 flex rounded-r-3xl overflow-clip justify-end relative">
            <img src="{{ asset('images/footer-bg-image.webp') }}" class="absolute inset-0 z-0">
            <div class="w-1/2 bg-primary flex justify-center py-12 relative z-10">
                <form wire:submit="submit" class="w-4/5 text-white flex flex-col gap-8">
                    <div class="flex flex-col gap-3">
                        <div class="text-3xl">Have Questions? Contact Us</div>
                        <div class="font-light">For any problems or questions, feel free to reach out to us by filling up the form below.</div>
                    </div>
                    <div>
                        <input class="bg-white/10 w-full placeholder:text-white/50 placeholder:font-light p-2 " placeholder="Name">
                        <div class="text-red-700 text-sm"></div>
                    </div>
                    <div>
                        <input class="bg-white/10 w-full placeholder:text-white/50 placeholder:font-light p-2 " placeholder="Email">
                        <div class="text-red-700 text-sm"></div>
                    </div>
                    <div>
                        <textarea class="bg-white/10 w-full placeholder:text-white/50 placeholder:font-light p-2" rows="5" placeholder="Message"></textarea>
                        <div class="text-red-700 text-sm"></div>
                    </div>
                    <button class="flex gap-2 items-center uppercase group font-semibold text-lg tracking-wide text-primary bg-white hover:bg-accent hover:text-white w-min whitespace-nowrap py-3 px-6 rounded-lg *:transition-colors">
                        <div>Submit message</div>
                        <div class="bg-primary rounded-full flex justify-center items-center *:size-5 *:text-white group-hover:bg-white group-hover:*:text-accent *:transition-colors">
                            <svg class="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 12H5m14 0-4 4m4-4-4-4" />
                            </svg>
                        </div>
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div class="flex flex-col gap-8">
        <div class="w-4/5 mx-auto flex justify-around">
            <div class="flex flex-col gap-2">
                <div class="uppercase text-2xl font-semibold">contact</div>
                <div class="flex gap-2 items-center text-lg">
                    <div>
                        <svg class="size-6 text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m3.5 5.5 7.893 6.036a1 1 0 0 0 1.214 0L20.5 5.5M4 19h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
                        </svg>
                    </div>
                    <div>contact@crediteben.com</div>
                </div>
                <div class="flex gap-2 items-center text-lg">
                    <div>
                        <svg class="size-6 text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M7.978 4a2.553 2.553 0 0 0-1.926.877C4.233 6.7 3.699 8.751 4.153 10.814c.44 1.995 1.778 3.893 3.456 5.572 1.68 1.679 3.577 3.018 5.57 3.459 2.062.456 4.115-.073 5.94-1.885a2.556 2.556 0 0 0 .001-3.861l-1.21-1.21a2.689 2.689 0 0 0-3.802 0l-.617.618a.806.806 0 0 1-1.14 0l-1.854-1.855a.807.807 0 0 1 0-1.14l.618-.62a2.692 2.692 0 0 0 0-3.803l-1.21-1.211A2.555 2.555 0 0 0 7.978 4Z" />
                        </svg>
                    </div>
                    <div>587-332-3292</div>
                </div>
            </div>
            <div class="flex flex-col gap-2">
                <div class="uppercase text-2xl font-semibold">Comapny</div>
                <div class="flex flex-col gap-2 *:hover:text-accent *:transition-colors text-lg">
                    <div>Home</div>
                    <div>Services</div>
                    <div>About Us</div>
                    <div>Blog</div>
                    <div>Get started</div>
                </div>
            </div>
        </div>
        <div class="border border-black/20 w-3/4 mx-auto"></div>
        <div class="flex justify-between items-center w-4/5 mx-auto">
            <div class="h-min">
                <img class="h-24 w-auto" src="{{ asset('images/logo.png') }}">
            </div>
            <div class="flex gap-4 *:bg-black/5 *:rounded-lg *:*:text-primary *:*:size-8 *:p-2">
                <div>
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div>
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M22 5.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.343 8.343 0 0 1-2.605.981A4.13 4.13 0 0 0 15.85 4a4.068 4.068 0 0 0-4.1 4.038c0 .31.035.618.105.919A11.705 11.705 0 0 1 3.4 4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 6.1 13.635a4.192 4.192 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 2 18.184 11.732 11.732 0 0 0 8.291 20 11.502 11.502 0 0 0 19.964 8.5c0-.177 0-.349-.012-.523A8.143 8.143 0 0 0 22 5.892Z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div>
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z" clip-rule="evenodd" />
                        <path d="M7.2 8.809H4V19.5h3.2V8.809Z" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="bg-primary w-4/5 rounded-t-full mx-auto text-center text-white py-2">Copyright © {{ Carbon::now()->year }} CreditEben Solutions</div>
    </div>
</div>