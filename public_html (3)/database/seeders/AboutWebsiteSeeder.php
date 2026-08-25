<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AboutWebsite;

class AboutWebsiteSeeder extends Seeder
{
    public function run(): void
    {
        AboutWebsite::truncate();

        AboutWebsite::create([
            'about_title' => 'About United Auto',
            'short_description' => 'We provide best-in-class car services with experienced technicians.',
            'description' => '<p>United Auto has been serving customers with high quality auto services for over a decade. Our team specializes in repair, maintenance, and detailing.</p>',
            'about_image' => 'assets/images/company/logo.png',
            'mission' => 'Deliver outstanding automotive service and customer satisfaction.',
            'vision' => 'To be the most trusted name in automotive care.',
            'why_choose_title_1' => 'Experienced Technicians',
            'why_choose_content_1' => 'Our technicians are certified and highly trained.',
            'why_choose_title_2' => 'Quality Parts',
            'why_choose_content_2' => 'We use OEM and high-quality aftermarket parts.',
            'why_choose_title_3' => 'Transparent Pricing',
            'why_choose_content_3' => 'No hidden fees and clear estimates.',
            'why_choose_title_4' => 'Fast Turnaround',
            'why_choose_content_4' => 'Quick and reliable service without compromising quality.',
            'service_terms' => 'Standard service terms apply.'
        ]);
    }
}
