<?php

use function Livewire\Volt\{rules, state, with, mount};

use App\Mail\FooterForm;
use App\Models\Footer;
use App\Models\Image;
use App\Models\Navbar;
use App\Models\Setting;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\App;

state(['name', 'email', 'message', 'showThankYouMessage']);
state('isfrench')->reactive();

rules(['name' => 'required', 'email' => 'required|email:rfc,dns', 'message' => 'required']);

with(fn() => [
    'footer' => Footer::get()->mapWithKeys(fn($content) => [$content->key => $this->isfrench ? $content->fr : $content->en]),
    'phone' => Setting::where('name', 'phone')->first()->value,
    'emailId' => Setting::where('name', 'email')->first()->value,
    'facebook' => Setting::where('name', 'facebook')->first()->value,
    'twitter' => Setting::where('name', 'twitter')->first()->value,
    'linkedin' => Setting::where('name', 'linkedin')->first()->value,
    'footer_image_1' => Image::where('key', 'footer-image-1')->first()->image,
    'navbar' => Navbar::get()->mapWithKeys(fn($element) => [$element->key => $this->isfrench ? $element->fr : $element->en])
]);

$submit = function () {
    $this->validate();

    Setting::where('name', 'email')->first()->value && Mail::to(Setting::where('name', 'email')->first()->value)->send(new FooterForm($this->name, $this->email, $this->message));
    $this->reset(['name', 'email', 'message', 'showThankYouMessage']);
    $this->showThankYouMessage = true;
};

mount(fn($isfrench) => $this->isfrench = $isfrench);

?>

<div class="xl:pt-16 flex flex-col gap-16 bg-white">
    @if(request()->path() != 'contact-us')
    <div class="flex justify-center">
        <div class="xl:w-4/5 flex max-xl:flex-col rounded-b-3xl xl:rounded-r-3xl overflow-clip justify-end relative">
            <img src="{{ asset('storage/'.$footer_image_1) }}" class="xl:absolute inset-0 z-0 h-full">
            <div class="xl:w-1/2 bg-primary flex justify-center py-12 relative z-10">
                <form wire:submit.prevent="submit" class="w-4/5 text-white flex flex-col gap-4 xl:gap-8">
                    <div class="flex flex-col gap-3">
                        <div class="xl:text-3xl">{!! $footer['form-heading'] !!}</div>
                        <div class="max-xl:text-sm font-light">{!! $footer['form-subheading'] !!}</div>
                    </div>
                    <div>
                        <input wire:model="name" class="bg-white/10 w-full placeholder:text-white/50 placeholder:font-light p-2 " placeholder="{!! Str::of($footer['form-name-placeholder'])->striptags() !!}">
                        @error('name')
                        <div class="text-white text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <input wire:model="email" class="bg-white/10 w-full placeholder:text-white/50 placeholder:font-light p-2 " placeholder="{!! Str::of($footer['form-email-placeholder'])->striptags() !!}">
                        @error('email')
                        <div class="text-white text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <textarea wire:model="message" class="bg-white/10 w-full placeholder:text-white/50 placeholder:font-light p-2" rows="5" placeholder="{!! Str::of($footer['form-message-placeholder'])->striptags() !!}"></textarea>
                        @error('message')
                        <div class="text-white text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <button wire:loading.class="*:odd:invisible" wire:target="submit" class="relative flex gap-2 items-center uppercase group font-semibold xl:text-lg tracking-wide text-primary bg-white hover:bg-accent hover:text-white w-min whitespace-nowrap py-3 px-6 rounded-lg *:transition-colors">
                        <div>{!! Str::of($footer['form-submit-button'])->striptags() !!}</div>
                        <div wire:loading.class.remove="invisible" wire:target="submit" class="absolute invisible inset-0 flex justify-center items-center">
                            <svg aria-hidden="true" class="w-8 h-8 text-white group-hover:text-accent group-hover:fill-white fill-primary animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor" />
                                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill" />
                            </svg>
                        </div>
                        <div class="bg-primary rounded-full flex justify-center items-center *:size-5 *:text-white group-hover:bg-white group-hover:*:text-accent *:transition-colors">
                            <svg class="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 12H5m14 0-4 4m4-4-4-4" />
                            </svg>
                        </div>
                    </button>
                    @if($showThankYouMessage)
                    <div class="text-xl">{!! $footer['form-success-message'] !!}</div>
                    @endif
                </form>
            </div>
        </div>
    </div>
    @endif
    <div class="flex flex-col gap-8">
        <div class="w-4/5 mx-auto flex max-xl:flex-col max-xl:gap-12 justify-around">
            <div class="flex flex-col gap-2">
                <div class="uppercase text-2xl font-semibold">{!! Str::of($footer['contact-heading'])->striptags() !!}</div>
                <div class="flex gap-2 items-center text-lg">
                    <div>
                        <svg class="size-6 text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m3.5 5.5 7.893 6.036a1 1 0 0 0 1.214 0L20.5 5.5M4 19h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
                        </svg>
                    </div>
                    <div>{{ $emailId }}</div>
                </div>
                <div class="flex gap-2 items-center text-lg">
                    <div>
                        <svg class="size-6 text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M7.978 4a2.553 2.553 0 0 0-1.926.877C4.233 6.7 3.699 8.751 4.153 10.814c.44 1.995 1.778 3.893 3.456 5.572 1.68 1.679 3.577 3.018 5.57 3.459 2.062.456 4.115-.073 5.94-1.885a2.556 2.556 0 0 0 .001-3.861l-1.21-1.21a2.689 2.689 0 0 0-3.802 0l-.617.618a.806.806 0 0 1-1.14 0l-1.854-1.855a.807.807 0 0 1 0-1.14l.618-.62a2.692 2.692 0 0 0 0-3.803l-1.21-1.211A2.555 2.555 0 0 0 7.978 4Z" />
                        </svg>
                    </div>
                    <div>{{ $phone }}</div>
                </div>
            </div>
            <div class="flex flex-col gap-2">
                <div class="uppercase text-2xl font-semibold">{!! Str::of($footer['navigation-heading'])->striptags() !!}</div>
                <div class="flex flex-col gap-2 *:hover:text-accent *:transition-colors text-lg">
                    <a href="/" wire:navigate>{!! $navbar['home'] !!}</a>
                    <a href="/services" wire:navigate>{!! $navbar['service'] !!}</a>
                    <a href="/about-us" wire:navigate> {!! $navbar['about_us'] !!}</a>
                    <a href="/blog" wire:navigate>{!! $navbar['blog'] !!}</a>
                    <a href="/contact-us" wire:navigate>{!! $navbar['contact'] !!}</a>
                </div>
            </div>
        </div>
        <div class="border border-black/20 w-3/4 mx-auto"></div>
        <div class="flex max-xl:flex-col max-xl:gap-6 justify-between items-center w-4/5 mx-auto">
            <div class="h-min">
                <img class="h-16 xl:h-24 w-auto" src="{{ asset('images/logo.png') }}">
            </div>
            <div class="flex gap-4 *:bg-black/5 *:rounded-lg *:*:text-primary *:*:size-8 *:p-2">
                <a href="{{ $facebook }}">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z" clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="{{ $twitter }}">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M22 5.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.343 8.343 0 0 1-2.605.981A4.13 4.13 0 0 0 15.85 4a4.068 4.068 0 0 0-4.1 4.038c0 .31.035.618.105.919A11.705 11.705 0 0 1 3.4 4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 6.1 13.635a4.192 4.192 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 2 18.184 11.732 11.732 0 0 0 8.291 20 11.502 11.502 0 0 0 19.964 8.5c0-.177 0-.349-.012-.523A8.143 8.143 0 0 0 22 5.892Z" clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="{{ $linkedin }}">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z" clip-rule="evenodd" />
                        <path d="M7.2 8.809H4V19.5h3.2V8.809Z" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="bg-primary w-full xl:w-4/5 rounded-t-full mx-auto text-center max-xl:text-xs text-white py-2">{!! Str::of($footer['copyright-statement'])->striptags() !!}</div>
    </div>
</div>