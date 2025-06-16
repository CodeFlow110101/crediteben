<?php

namespace Database\Seeders;

use App\Models\Home;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $home = [
            [
                "key" => "cover-header-1",
                "en" => "Debt collection agency Calgary",
                "fr" => ""
            ],
            [
                "key" => "cover-header-2",
                "en" => "We Don't Collect,",
                "fr" => ""
            ],
            [
                "key" => "cover-header-3",
                "en" => "You Don't Pay.",
                "fr" => ""
            ],
            [
                "key" => "cover-description-1",
                "en" => '30+ years of providing debt collection services in Calgary and across Canada, and we continue to get our clients paid.',
                "fr" => ""
            ],
            [
                "key" => "cover-button-title",
                "en" => 'Start Collecting now',
                "fr" => ""
            ],
            [
                "key" => "section-2-title-1",
                "en" => 'full-service calgary collections agency',
                "fr" => ""
            ],
            [
                "key" => "section-2-title-2",
                "en" => 'Delivering Excellence Canada-Wide',
                "fr" => ""
            ],
            [
                "key" => "section-2-description-1",
                "en" => 'At Bison Credit Solutions we are a collection agency out of Calgary, Alberta that puts people first. As business owners, we understand how crucial it is to recover funds that are owed to you. We also understand that most people don’t end up in debt intentionally. Our mission is to help business owners recover what is owed to them and be a resource to help communities get out and stay out of debt. Bison Credit Solutions manages debt recovery and third-party collection needs for consumer collections, small business collections, and commercial debt collection accounts. No matter the size of the file or the industry sector, our experienced debt recovery team utilizes sophisticated strategies, and cutting-edge technology, that ensures our customers’ success in debt collections.',
                "fr" => ""
            ],
            [
                "key" => "section-3-title-1",
                "en" => 'Our collection agency in Calgary, Alberta collects so you can focus on your business',
                "fr" => ""
            ],
            [
                "key" => "section-3-option-value-1",
                "en" => 'Our process has been built on 30 years of tried-and-true practices. We operate from a central collection management call centre, equipped with experienced collectors and in-house legal expertise. Our collectors focus on personal contact and use their collection psychology, negotiating skills, and conflict resolution training, to collect accounts across Canada.',
                "fr" => ""
            ],
            [
                "key" => "section-3-option-value-2",
                "en" => 'To aid in the retrieval of overdue receivables, using proven strategies, in a timely manner.',
                "fr" => ""
            ],
            [
                "key" => "section-3-option-value-3",
                "en" => 'To aid in the retrieval of overdue receivables, using proven strategies, in a timely manner.',
                "fr" => ""
            ],
            [
                "key" => "section-3-option-name-1",
                "en" => 'Our Process',
                "fr" => ""
            ],
            [
                "key" => "section-3-option-name-2",
                "en" => 'Our mission',
                "fr" => ""
            ],
            [
                "key" => "section-3-option-name-3",
                "en" => 'Our values',
                "fr" => ""
            ],
            [
                "key" => "section-4-title",
                "en" => 'Success Comes With Experience',
                "fr" => ""
            ],
            [
                "key" => "section-4-tab-1-heading",
                "en" => '10M$',
                "fr" => ""
            ],
            [
                "key" => "section-4-tab-2-heading",
                "en" => '30+',
                "fr" => ""
            ],
            [
                "key" => "section-4-tab-3-heading",
                "en" => '85%',
                "fr" => ""
            ],
            [
                "key" => "section-4-tab-1-subheading",
                "en" => 'Recovered for clients',
                "fr" => ""
            ],
            [
                "key" => "section-4-tab-2-subheading",
                "en" => 'Years of experience',
                "fr" => ""
            ],
            [
                "key" => "section-4-tab-3-subheading",
                "en" => 'Success rate on large viable claims',
                "fr" => ""
            ],
            [
                "key" => "section-5-tab-1-heading-1",
                "en" => 'Why partner with us',
                "fr" => ""
            ],
            [
                "key" => "section-5-tab-1-heading-2",
                "en" => "We're Leaders In Consumer & Commercial Debt Recovery",
                "fr" => ""
            ],
            [
                "key" => "section-5-tab-1-description",
                "en" => "With a strong commitment to professionalism, compliance, and customer satisfaction, Bison Credit Solutions is your premier choice for debt recovery services. Our tailored solutions, backed by industry expertise and cutting-edge technology, ensure optimal results and maximum recovery rates for our clients. Contact us today to discuss your debt recovery needs and let us help you get back on track.",
                "fr" => ""
            ],
            [
                "key" => "section-5-tab-1-button-title",
                "en" => "explore more",
                "fr" => ""
            ],
            [
                "key" => "section-5-tab-2-heading-1",
                "en" => "Our In-house legal department has substantial Small Claims and Kings’ Bench experience.",
                "fr" => ""
            ],
            [
                "key" => "section-5-tab-2-heading-2",
                "en" => "Our owner and management team are on-site, providing ongoing staff training, account review, and quality assurance.",
                "fr" => ""
            ],
            [
                "key" => "section-5-tab-2-heading-3",
                "en" => "Contingency-based – no collection – no charge.",
                "fr" => ""
            ],
            [
                "key" => "section-6-heading-1",
                "en" => "Access our wealth of knowledge",
                "fr" => ""
            ],
            [
                "key" => "section-6-heading-2",
                "en" => "Insights & Articles",
                "fr" => ""
            ],
        ];

        collect($home)->each(fn($content) => Home::updateOrCreate(['key' => $content['key']], $content));
    }
}
