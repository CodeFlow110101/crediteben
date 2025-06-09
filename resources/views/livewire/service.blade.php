<?php

use function Livewire\Volt\{state};

//

?>

<div class="w-full flex flex-col items-center gap-12">
    <div class="h-[50vh] w-full overflow-clip flex justify-end relative">
        <img class="object-cover" src="{{ asset('images/service-cover-image.webp') }}">
        <div class="absolute inset-0 bg-gradient-to-b from-white/70 to-primary/70 flex flex-col items-center">
            <div class="w-4/5 flex gap-4 py-8 mt-auto">
                <div class="border-2 border-accent"></div>
                <div class="flex flex-col text-white">
                    <div class="text-6xl uppercase tracking-wide font-semibold">Our Services</div>
                    <div class="text-xl">Efficient Solutions for Maximum Results</div>
                </div>
            </div>
            <div class="w-full bg-white/90 py-2 flex justify-center">
                <div class="w-4/5 text-sm">Home >> Our Services</div>
            </div>
        </div>
    </div>
    <div>
        <div class="w-4/5 flex flex-col gap-12">
            <div class="flex flex-col gap-4">
                <div class="text-primary text-xl font-semibold uppercase">Credit Risk Assessment</div>
                <div class="font-light">
                    <ul class="list-disc">
                        <li>
                            Credit Adjudication – Reviewing credit applications, applying risk assessment models, and determining approval criteria to ensure informed credit decisions.
                        </li>
                        <li>
                            Client Credit Evaluation – Analyzing financial reports, credit scores, payment history, and adjusting credit limits to minimize credit risk exposure.
                        </li>
                        <li>
                            Vendor & Supplier Risk Analysis – Assessing creditworthiness to prevent defaults.
                        </li>
                        <li>
                            Custom Risk Reports – Delivering insights on potential risks in extending credit.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="flex flex-col gap-4">
                <div class="text-primary text-xl font-semibold uppercase">Accounts Receivable Management</div>
                <div class="font-light">
                    <ul class="list-disc">
                        <li>
                            Cash Application – Allocating incoming payments accurately and efficiently.
                        </li>
                        <li>
                            Late Payment Follow-ups – Following up on late payments but not delinquent accounts.
                        </li>
                        <li>
                            Aging Report Analysis – Identifying high-risk accounts based on overdue balances.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="flex flex-col gap-4">
                <div class="text-primary text-xl font-semibold uppercase">Credit Policy Development and implementation</div>
                <div class="font-light">
                    <ul class="list-disc">
                        <li>
                            Custom Credit Approval Framework – Defining payment terms and approval protocols.
                        </li>
                        <li>
                            Risk Mitigation Strategies – Structuring policies to minimize financial exposure.
                        </li>
                        <li>
                            Compliance with Credit Regulations – Ensuring adherence to legal and industry standards.
                        </li>
                        <li>
                            Support for Implementation – Assisting with rollout and integration into business operations.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="flex flex-col gap-4">
                <div class="text-primary text-xl font-semibold uppercase"> Debt Recovery & Collection - No collection, no commission</div>
                <div class="font-light">
                    <ul class="list-disc">
                        <li>
                            Collection Activities – Implementing strategies to recover overdue payments.
                        </li>
                        <li>
                            Payment Negotiation & Settlement – Facilitating agreements to resolve outstanding debts.
                        </li>
                        <li>
                            Legal Remedies Consulting – Advising on legal options for overdue debts.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>