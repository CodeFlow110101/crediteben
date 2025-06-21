<?php

use App\Mail\ContactForm;
use App\Models\ContactUs;
use App\Models\Setting;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\App;
use function Livewire\Volt\{state, with, rules, mount};

state(['isfrench'])->reactive();
state(['first_name', 'last_name', 'phone_no', 'email', 'company_name', 'job_title', 'subject', 'message', 'showThankYouMessage']);

rules(['first_name' => 'required', 'email' => 'required|email', 'message' => 'required']);

with(fn() => [
    'options' => collect([
        'Which of these best describe you?',
        'My company needs to collect debt',
        'I work at a bank or other financial institution',
        'I work for a telecommunications company',
        'I work for an accounting firm',
        'I have a question about my personal debt'
    ]),
    'content' => ContactUs::get()->mapWithKeys(fn($content) => [$content->key => $this->isfrench ? $content->fr : $content->en]),
    'phone' => Setting::where('name', 'phone')->first()->value,
    'emailId' => Setting::where('name', 'email')->first()->value,
]);

mount(fn($isfrench) => $this->isfrench = $isfrench);

$submit = function () {
    $this->validate();

    Setting::where('name', 'email')->first()->value && Mail::to(Setting::where('name', 'email')->first()->value)->send(new ContactForm($this->first_name, $this->last_name, $this->phone_no, $this->email, $this->company_name, $this->job_title, $this->subject, $this->message));
    $this->reset(['first_name', 'last_name', 'phone_no', 'email', 'company_name', 'job_title', 'subject', 'message', 'showThankYouMessage']);
    $this->showThankYouMessage = true;
}

?>

<div class="w-full flex flex-col items-center gap-12">
    <livewire:utility.bg-cover :isfrench="$isfrench" />
    <div class="w-11/12 xl:w-4/5 mx-auto flex max-xl:flex-col *:flex-1 gap-16 xl:gap-8 xl:py-12">
        <div class="flex flex-col gap-3">
            <div class="text-primary text-2xl">
                {!! $content['section-1-heading'] !!}
            </div>
            <div class="uppercase text-4xl font-semibold">
                {!! $content['section-1-subheading'] !!}
            </div>
            <div class="font-light leading-tight">
                {!! $content['section-1-description'] !!}
            </div>
            <div class="flex flex-col gap-2">
                <div class="flex gap-2 items-center">
                    <div>
                        <svg class="size-7 text-accent" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m3.5 5.5 7.893 6.036a1 1 0 0 0 1.214 0L20.5 5.5M4 19h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
                        </svg>
                    </div>
                    <div>{{ $emailId }}</div>
                </div>
                <div class="flex gap-2 items-center">
                    <div>
                        <svg class="size-7 text-accent" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M7.978 4a2.553 2.553 0 0 0-1.926.877C4.233 6.7 3.699 8.751 4.153 10.814c.44 1.995 1.778 3.893 3.456 5.572 1.68 1.679 3.577 3.018 5.57 3.459 2.062.456 4.115-.073 5.94-1.885a2.556 2.556 0 0 0 .001-3.861l-1.21-1.21a2.689 2.689 0 0 0-3.802 0l-.617.618a.806.806 0 0 1-1.14 0l-1.854-1.855a.807.807 0 0 1 0-1.14l.618-.62a2.692 2.692 0 0 0 0-3.803l-1.21-1.211A2.555 2.555 0 0 0 7.978 4Z" />
                        </svg>
                    </div>
                    <div>{{ $phone }}</div>
                </div>
            </div>
        </div>
        <div>
            <form wire:submit.prevent="submit" class="font-light flex flex-col gap-6">
                <div class="flex max-xl:flex-col *:flex-1 gap-4">
                    <div>
                        <input wire:model="first_name" class="bg-black/5 py-2 px-4 w-full outline-none" placeholder="First Name">
                        @error('first_name')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <input wire:model="last_name" class="bg-black/5 py-2 px-4 w-full outline-none" placeholder="Last Name">
                        @error('last_name')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div>
                    <input wire:model="phone_no" type="number" class="bg-black/5 py-2 px-4 w-full outline-none" placeholder="Phone No">
                    @error('phone_no')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <input wire:model="email" class="bg-black/5 py-2 px-4 w-full outline-none" placeholder="Email">
                    @error('email')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="flex max-xl:flex-col *:flex-1 gap-4">
                    <div>
                        <input wire:model="company_name" class="bg-black/5 py-2 px-4 w-full outline-none" placeholder="Company Name">
                        @error('company_name')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <input wire:model="job_title" class="bg-black/5 py-2 px-4 w-full outline-none" placeholder="Job Title">
                        @error('job_title')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div>
                    <select wire:model="subject" class="bg-black/5 py-2 px-4 w-full outline-none">
                        @foreach($options as $option)
                        <option value="{{ $option }}">{{ $option }}</option>
                        @endforeach
                    </select>
                    @error('subject')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <textarea wire:model="message" class="bg-black/5 py-2 px-4 w-full outline-none" rows="6" placeholder="Tell us about your situation"></textarea>
                    @error('message')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <button wire:loading.class="*:last:invisible" class="relative uppercase py-2 px-6 bg-primary text-white cursor-pointer font-medium">
                        <div wire:loading.class.remove="invisible" class="absolute invisible inset-2 flex justify-center items-center">
                            <svg aria-hidden="true" class="size-full text-primary fill-white animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor" />
                                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill" />
                            </svg>
                        </div>
                        <div>
                            Send Message
                        </div>
                    </button>
                </div>
                <div>
                    @if($showThankYouMessage)
                    <div class="text-xl"> {!! $content['form-after-submit-message'] !!}</div>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>