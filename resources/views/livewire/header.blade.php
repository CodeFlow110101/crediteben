<?php

use function Livewire\Volt\{state};

//

?>

<div>
    <div class="bg-gradient-to-r from-primary to-black from-60% text-white w-full flex justify-center py-2">
        <div class="w-11/12 flex justify-end items-center gap-4">
            <div class="flex gap-4">
                <div class="flex gap-2 items-center">
                    <div>
                        <svg class="size-5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m3.5 5.5 7.893 6.036a1 1 0 0 0 1.214 0L20.5 5.5M4 19h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
                        </svg>
                    </div>
                    <div>contact@crediteben.com</div>
                </div>
            </div>
            <div class="border-l border-white rounded-full h-1/2"></div>
            <div class="flex gap-4">
                <div class="flex gap-2 items-center">
                    <div>
                        <svg class="size-5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M7.978 4a2.553 2.553 0 0 0-1.926.877C4.233 6.7 3.699 8.751 4.153 10.814c.44 1.995 1.778 3.893 3.456 5.572 1.68 1.679 3.577 3.018 5.57 3.459 2.062.456 4.115-.073 5.94-1.885a2.556 2.556 0 0 0 .001-3.861l-1.21-1.21a2.689 2.689 0 0 0-3.802 0l-.617.618a.806.806 0 0 1-1.14 0l-1.854-1.855a.807.807 0 0 1 0-1.14l.618-.62a2.692 2.692 0 0 0 0-3.803l-1.21-1.211A2.555 2.555 0 0 0 7.978 4Z" />
                        </svg>
                    </div>
                    <div>587-332-3292</div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center bg-white py-3">
        <div class="flex justify-between gap-28 items-center w-11/12">
            <div>
                <img class="h-14 w-auto" src="{{ asset('images/logo.png') }}">
            </div>
            <div class="flex flex-1 justify-around font-medium text-lg">
                <div>
                    Home
                </div>
                <div class="flex items-center gap-2">
                    <div>
                        Services
                    </div>
                </div>
                <div>
                    About Us
                </div>
                <div>
                    Blog
                </div>
            </div>
            <div>
                <button class="bg-primary py-3 px-6 rounded-lg text-white uppercase font-medium tracking-wide">
                    Get Started
                </button>
            </div>
        </div>
    </div>
</div>