<?php

use function Livewire\Volt\{state};

//

?>

<div>
    <div class="fixed -z-50">
        <img class="size-full" src="{{ asset('images/home-bg.webp') }}">
    </div>
    <div class="bg-white">
        <div class="flex relative">
            <img class="absolute size-full object-scale-down object-right" src="{{ asset('images/home-cover-image.webp') }}">
            <div class="w-1/2 h-full relative z-10 flex flex-col gap-6 text-white bg-white bg-gradient-to-tr from-primary to-90% to-primary/80 *:w-4/5 *:mx-auto py-36">
                <div class="text-accent uppercase font-medium text-2xl">Debt collection agency Calgary</div>
                <div class="flex flex-col gap-2">
                    <div class="text-6xl font-bold">We Don't Collect,</div>
                    <div class="text-6xl font-bold italic">You Don't Pay.</div>
                </div>
                <div class="text-2xl font-extralight py-2 leading-relaxed tracking-wide">
                    30+ years of providing <span class="font-semibold">debt collection services in Calgary</span> and across Canada, and we continue to get our clients paid.
                </div>
                <div>
                    <button class="flex gap-2 items-center uppercase group font-medium text-lg tracking-wide text-white bg-black hover:bg-accent hover:text-black w-min whitespace-nowrap py-3 px-8 rounded-lg *:transition-all transition-all hover:scale-125">
                        <div>Start Collecting now</div>
                        <div class="border border-white group-hover:border-black rounded-full flex justify-center items-center *:size-5 *:text-white group-hover:*:text-black *:transition-all">
                            <svg class="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 12H5m14 0-4 4m4-4-4-4" />
                            </svg>
                        </div>
                    </button>
                </div>
            </div>
        </div>
        <div class="py-10 flex flex-col gap-5 text-center">
            <div class="uppercase text-2xl tracking-wide font-medium text-primary">full-service calgary collections agency</div>
            <div class="text-4xl font-semibold">Delivering Excellence Canada-Wide</div>
            <div class="w-3/4 mx-auto text-xl leading-relaxed font-light">
                At Bison Credit Solutions we are a collection agency out of Calgary, Alberta that puts people first. As business owners, we understand how crucial it is to recover funds that are owed to you. We also understand that most people don’t end up in debt intentionally. Our mission is to help business owners recover what is owed to them and be a resource to help communities get out and stay out of debt. Bison Credit Solutions manages debt recovery and third-party collection needs for consumer collections, small business collections, and commercial debt collection accounts. No matter the size of the file or the industry sector, our experienced <span class="font-semibold">debt recovery team</span> utilizes sophisticated strategies, and cutting-edge technology, that ensures our customers’ success in debt collections.
            </div>
        </div>
        <div class="flex w-4/5 mx-auto *:flex-1 gap-12 py-12">
            <div>
                <img class="size-full object-cover" src="{{ asset('images/home-image.webp') }}">
            </div>
            <div class="flex flex-col gap-12 py-12">
                <div class="font-semibold text-3xl">
                    Our collection agency in Calgary, Alberta collects so you can focus on your business
                </div>
                <div x-data="{ show: 'process' }" class="flex *:flex-1 gap-12">
                    <div class="flex flex-col gap-2 text-2xl uppercase *:py-6 text-center font-semibold *:border-b-2 *:hover:border-primary tracking-wide *:cursor-pointer">
                        <div @click="show = 'process';" :class="show == 'process' ? 'text-primary border-accent transition-all' : 'border-transparent'">Our Process</div>
                        <div @click="show = 'mission';" :class="show == 'mission' ? 'text-primary border-accent transition-all' : 'border-transparent'">Our mission</div>
                        <div @click="show = 'values';" :class="show == 'values' ? 'text-primary border-accent transition-all' : 'border-transparent'">Our values</div>
                    </div>
                    <div class="font-light text-sm ">
                        <div x-show="show == 'process'">
                            Our process has been built on 30 years of tried-and-true practices. We operate from a central collection management call centre, equipped with experienced collectors and in-house legal expertise. Our collectors focus on personal contact and use their collection psychology, negotiating skills, and conflict resolution training, to collect accounts across Canada.
                        </div>
                        <div x-show="show == 'mission'">
                            To aid in the retrieval of overdue receivables, using proven strategies, in a timely manner.
                        </div>
                        <div x-show="show == 'values'" class="flex items-center h-full">
                            <ul class="list-disc">
                                <li>Trust</li>
                                <li>Accountability</li>
                                <li>Client Value Creation</li>
                                <li>Corporate and Personal Growth</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-gradient-to-b from-primary/50 to-transparent py-16">
        <div class="flex flex-col items-center gap-16 translate-y-1/2">
            <div class="text-6xl font-semibold text-white italic">Success Comes With Experience</div>
            <div class="flex *:flex-1 *:odd:bg-primary *:even:bg-primary/90 *:p-12 bg-white text-center w-4/5">
                <div class="flex flex-col text-white gap-2 items-center">
                    <div class="text-6xl font-semibold">10M$</div>
                    <div>Recovered for clients</div>
                </div>
                <div class="flex flex-col text-white gap-2 items-center">
                    <div class="text-6xl font-semibold">30+</div>
                    <div>Years of experience</div>
                </div>
                <div class="flex flex-col text-white gap-2 items-center">
                    <div class="text-6xl font-semibold">85%</div>
                    <div>Success rate on large viable claims</div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white">
        <div class="h-32"></div>
        <div class="py-12">
            <div class="flex gap-5 *:odd:flex-1 w-4/5 mx-auto">
                <div class="flex flex-col gap-4">
                    <div class="text-primary text-2xl uppercase">
                        Why partner with us
                    </div>
                    <div class="text-3xl font-semibold">
                        We're Leaders In Consumer & Commercial Debt Recovery
                    </div>
                    <div>
                        With a strong commitment to professionalism, compliance, and customer satisfaction, Bison Credit Solutions is your premier choice for debt recovery services. Our tailored solutions, backed by industry expertise and cutting-edge technology, ensure optimal results and maximum recovery rates for our clients. Contact us today to discuss your debt recovery needs and let us help you get back on track.
                    </div>
                    <div>
                        <button class="bg-primary flex items-center rounded-lg text-white py-2 px-6 gap-4 uppercase font-medium cursor-pointer transition-all hover:scale-110">
                            <div>explore more</div>
                            <div class="border-2 border-white rounded-full">
                                <svg class="size-3.5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M19 12H5m14 0-4 4m4-4-4-4" />
                                </svg>
                            </div>
                        </button>
                    </div>
                </div>
                <div class="w-0 border-r border-black/20"></div>
                <div class="flex flex-col justify-center gap-4 *:gap-4 text-xl *:items-center">
                    <div class="flex">
                        <div>
                            <svg class="size-15 text-accent" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                        </div>
                        <div>
                            Our In-house legal department has substantial Small Claims and Kings’ Bench experience.
                        </div>
                    </div>
                    <div class="flex">
                        <div>
                            <svg class="size-15 text-accent" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                        </div>
                        <div>
                            Our owner and management team are on-site, providing ongoing staff training, account review, and quality assurance.
                        </div>
                    </div>
                    <div class="flex">
                        <div>
                            <svg class="size-15 text-accent" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                        </div>
                        <div>
                            Contingency-based – no collection – no charge.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col items-center py-12">
            <div class="text-primary text-2xl font-medium uppercase">
                Access our wealth of knowledge
            </div>
            <div class="font-semibold text-4xl">
                Insights & Articles
            </div>
        </div>
    </div>
</div>