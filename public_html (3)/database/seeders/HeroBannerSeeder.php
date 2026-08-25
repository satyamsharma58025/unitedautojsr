<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\HeroBanner;

class HeroBannerSeeder extends Seeder
{
    public function run(): void
    {
        HeroBanner::truncate();
        $banners = [
            ['banner_image' => 'images/background/1.webp', 'sub_title' => 'Trusted Auto Care', 'main_title' => 'Your Car Deserves The Best', 'sort_paragraph' => 'Fast, reliable and affordable car services.'],
            ['banner_image' => 'images/background/2.webp', 'sub_title' => 'Professional Service', 'main_title' => 'Keeping Your Car In Top Shape', 'sort_paragraph' => 'Comprehensive services for all car models.'],
            ['banner_image' => 'images/background/3.webp', 'sub_title' => 'Skilled Technicians', 'main_title' => 'Repairs Done Right, The First Time', 'sort_paragraph' => 'Certified experts handling every job with precision.'],
        ];
        foreach ($banners as $b) {
            HeroBanner::create($b);
        }
    }
}
