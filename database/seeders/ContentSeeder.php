<?php

namespace Database\Seeders;

use App\Models\AboutUs;
use App\Models\BlogPage;
use App\Models\Career;
use App\Models\ContactUs;
use App\Models\Footer;
use App\Models\Home;
use App\Models\Image;
use App\Models\Navbar;
use App\Models\ServicePage;
use App\Models\Setting;
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

        $aboutus = [
            [
                "key" => "cover-heading-1",
                "en" => "about us",
                "fr" => ""
            ],
            [
                "key" => "cover-subheading-1",
                "en" => "We have been collecting since 1992.",
                "fr" => ""
            ],
            [
                "key" => "cover-breadcrumb-1",
                "en" => "about us",
                "fr" => ""
            ],
            [
                "key" => "section-1-heading",
                "en" => "Get to know us",
                "fr" => ""
            ],
            [
                "key" => "section-1-subheading",
                "en" => "Who We are",
                "fr" => ""
            ],
            [
                "key" => "section-1-description",
                "en" => "Bison Credit Solutions is a third-party collection agency, based in Calgary Alberta. We provide a full range of collection, litigation, and accounts receivable management services. Bison Credit Solutions manages debt recovery and third-party collection needs for consumer and commercial accounts. No matter the size of the file or the industry sector, our experienced team, sophisticated strategies, and cutting-edge technology, ensures our customer’s satisfaction.",
                "fr" => ""
            ],
            [
                "key" => "section-2-tab-1-heading",
                "en" => "Our mission",
                "fr" => ""
            ],
            [
                "key" => "section-2-tab-1-subheading",
                "en" => "To aid in the retrieval of overdue receivables, using proven strategies, in a timely manner.",
                "fr" => ""
            ],
            [
                "key" => "section-2-tab-2-heading",
                "en" => "Our Values",
                "fr" => ""
            ],
            [
                "key" => "section-2-tab-2-subheading",
                "en" => "The core values of BCS embrace integrity and trust, knowledge and professionalism as well as respect and reliability.",
                "fr" => ""
            ],
            [
                "key" => "section-2-tab-3-heading",
                "en" => "Our Process",
                "fr" => ""
            ],
            [
                "key" => "section-2-tab-3-subheading",
                "en" => "Our process has been built on 30 years of tried-and-true practices. We operate from a central collection management call centre, equipped with experienced collectors and in-house legal expertise.",
                "fr" => ""
            ],
            [
                "key" => "section-3-heading",
                "en" => "What clients say about us",
                "fr" => ""
            ],
            [
                "key" => "section-3-quote-1",
                "en" => "“With the help of BCS, we have streamlined our system so that we work files ourselves and then send accounts at a specific point to their office. Bison works all files diligently, whether a $50 unpaid bill or a $6,000 commercial file. We also find them quick to respond to our requests and ready to provide collection status reports when required.”",
                "fr" => ""
            ],
            [
                "key" => "section-3-quote-2",
                "en" => "“We have been pleased with the work that Bison Credit Solutions has performed for many years since becoming our 3rd party collection agency. Bison has successfully collected both large and small accounts in Calgary and well beyond city boundaries. BCS has also executed many successful court actions for our firm.”",
                "fr" => ""
            ],
            [
                "key" => "section-4-heading",
                "en" => "Why partner with BCS?",
                "fr" => ""
            ],
            [
                "key" => "section-4-subheading-1",
                "en" => "BCS can demonstrate a proven track record in collecting consumer and commercial debt for clients of all sizes. We customize a solution for you that will recover your funds as quickly as possible.",
                "fr" => ""
            ],
            [
                "key" => "section-4-subheading-2",
                "en" => "No matter the size of the file, or the industry sector, we are here for you.",
                "fr" => ""
            ],
        ];

        $career = [
            [
                "key" => "cover-heading-1",
                "en" => "career",
                "fr" => ""
            ],
            [
                "key" => "cover-subheading-1",
                "en" => "We would love to hear from you.",
                "fr" => ""
            ],
            [
                "key" => "cover-breadcrumb-1",
                "en" => "career",
                "fr" => ""
            ],
            [
                "key" => "heading",
                "en" => "Job",
                "fr" => ""
            ],
            [
                "key" => "description",
                "en" => "description",
                "fr" => ""
            ],
        ];

        $contactus = [
            [
                "key" => "cover-heading-1",
                "en" => "contact us",
                "fr" => ""
            ],
            [
                "key" => "cover-subheading-1",
                "en" => "We would love to hear from you.",
                "fr" => ""
            ],
            [
                "key" => "cover-breadcrumb-1",
                "en" => "contact us",
                "fr" => ""
            ],
            [
                "key" => "section-1-heading",
                "en" => "NEED TO COLLECT?",
                "fr" => ""
            ],
            [
                "key" => "section-1-subheading",
                "en" => "get in touch with us",
                "fr" => ""
            ],
            [
                "key" => "section-1-description",
                "en" => "get in touch with us",
                "fr" => ""
            ],
            [
                "key" => "form-first-name-placeholder",
                "en" => "First Name",
                "fr" => ""
            ],
            [
                "key" => "form-last-name-placeholder",
                "en" => "Last Name",
                "fr" => ""
            ],
            [
                "key" => "form-phone-no-placeholder",
                "en" => "phone no",
                "fr" => ""
            ],
            [
                "key" => "form-email-placeholder",
                "en" => "Email",
                "fr" => ""
            ],
            [
                "key" => "form-company-name-placeholder",
                "en" => "Company Name",
                "fr" => ""
            ],
            [
                "key" => "form-job-title-placeholder",
                "en" => "Job Title",
                "fr" => ""
            ],
            [
                "key" => "form-subject-option-1",
                "en" => "Which of these best describe you?",
                "fr" => ""
            ],
            [
                "key" => "form-subject-option-2",
                "en" => "My company needs to collect debt",
                "fr" => ""
            ],
            [
                "key" => "form-subject-option-3",
                "en" => "I work at a bank or other financial institution",
                "fr" => ""
            ],
            [
                "key" => "form-subject-option-4",
                "en" => "I work for a telecommunications company",
                "fr" => ""
            ],
            [
                "key" => "form-subject-option-5",
                "en" => "I work for an accounting firm",
                "fr" => ""
            ],
            [
                "key" => "form-subject-option-6",
                "en" => "I have a question about my personal debt",
                "fr" => ""
            ],
            [
                "key" => "form-message-placeholder",
                "en" => "Tell us about your situation",
                "fr" => ""
            ],
            [
                "key" => "form-submit-button",
                "en" => "Send Message",
                "fr" => ""
            ],
            [
                "key" => "form-after-submit-message",
                "en" => "Thank you for contacting us, We will be in touch shortly!",
                "fr" => ""
            ]
        ];

        $service = [
            [
                "key" => "cover-heading-1",
                "en" => "Our Services",
                "fr" => ""
            ],
            [
                "key" => "cover-subheading-1",
                "en" => "Efficient Solutions for Maximum Results",
                "fr" => ""
            ],
            [
                "key" => "cover-breadcrumb-1",
                "en" => "Our Services",
                "fr" => ""
            ]
        ];

        $blog = [
            [
                "key" => "cover-heading-1",
                "en" => "blog",
                "fr" => ""
            ],
            [
                "key" => "cover-subheading-1",
                "en" => "Stay Updated.",
                "fr" => ""
            ],
            [
                "key" => "cover-breadcrumb-1",
                "en" => "blog",
                "fr" => ""
            ]
        ];

        $footer = [
            [
                "key" => "form-heading",
                "en" => "Have Questions? Contact Us",
                "fr" => ""
            ],
            [
                "key" => "form-subheading",
                "en" => "Have Questions? Contact Us",
                "fr" => ""
            ],
            [
                "key" => "form-name-placeholder",
                "en" => "name",
                "fr" => ""
            ],
            [
                "key" => "form-email-placeholder",
                "en" => "email",
                "fr" => ""
            ],
            [
                "key" => "form-message-placeholder",
                "en" => "message",
                "fr" => ""
            ],
            [
                "key" => "form-submit-button",
                "en" => "Submit Message",
                "fr" => ""
            ],
            [
                "key" => "form-success-message",
                "en" => "Thank you for contacting us, We will be in touch shortly!",
                "fr" => ""
            ],
            [
                "key" => "contact-heading",
                "en" => "contact",
                "fr" => ""
            ],
            [
                "key" => "navigation-heading",
                "en" => "company",
                "fr" => ""
            ],
            [
                "key" => "copyright-statement",
                "en" => "Copyright © 2025 CreditEben Solutions",
                "fr" => ""
            ]
        ];

        $setting = [
            [
                "name" => "phone",
                "value" => "",
            ],
            [
                "name" => "email",
                "value" => "",
            ],
            [
                "name" => "facebook",
                "value" => "",
            ],
            [
                "name" => "twitter",
                "value" => "",
            ],
            [
                "name" => "linkedin",
                "value" => "",
            ]
        ];

        $image = [
            [
                "key" => "home-cover-image",
                "image" => "",
            ],
            [
                "key" => "home-image-1",
                "image" => "",
            ],
            [
                "key" => "home-image-2",
                "image" => "",
            ],
            [
                "key" => "service-cover",
                "image" => "",
            ],
            [
                "key" => "about-us-cover",
                "image" => "",
            ],
            [
                "key" => "contact-us-cover",
                "image" => "",
            ],
            [
                "key" => "blog-cover",
                "image" => "",
            ],
            [
                "key" => "about-us-image-1",
                "image" => "",
            ],
            [
                "key" => "about-us-image-2",
                "image" => "",
            ],
            [
                "key" => "footer-image-1",
                "image" => "",
            ],
            [
                "key" => "career-cover",
                "image" => "",
            ],
        ];

        $navbar = [
            [
                "key" => "home",
                "en" => "Home",
                "fr" => ""
            ],
            [
                "key" => "service",
                "en" => "services",
                "fr" => ""
            ],
            [
                "key" => "about_us",
                "en" => "about us",
                "fr" => ""
            ],
            [
                "key" => "blog",
                "en" => "blog",
                "fr" => ""
            ],
            [
                "key" => "career",
                "en" => "career",
                "fr" => ""
            ],
            [
                "key" => "contact",
                "en" => "get started",
                "fr" => ""
            ],
        ];

        collect($home)->each(fn($content) => Home::firstOrCreate(['key' => $content['key']], $content));
        collect($aboutus)->each(fn($content) => AboutUs::firstOrCreate(['key' => $content['key']], $content));
        collect($contactus)->each(fn($content) => ContactUs::firstOrCreate(['key' => $content['key']], $content));
        collect($career)->each(fn($content) => Career::firstOrCreate(['key' => $content['key']], $content));
        collect($service)->each(fn($content) => ServicePage::firstOrCreate(['key' => $content['key']], $content));
        collect($blog)->each(fn($content) => BlogPage::firstOrCreate(['key' => $content['key']], $content));
        collect($footer)->each(fn($content) => Footer::firstOrCreate(['key' => $content['key']], $content));
        collect($setting)->each(fn($content) => Setting::firstOrCreate(['name' => $content['name']], $content));
        collect($image)->each(fn($content) => Image::firstOrCreate(['key' => $content['key']], $content));
        collect($navbar)->each(fn($content) => Navbar::firstOrCreate(['key' => $content['key']], $content));
    }
}
