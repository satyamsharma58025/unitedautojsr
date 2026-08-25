<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Service;

class CategoryAndServiceSeeder extends Seeder
{
    public function run(): void
    {
        Service::truncate();
        SubCategory::truncate();
        Category::truncate();

        $cat1 = Category::create([
            'name' => 'Repairs', 'slug' => 'repairs',
            'description' => 'General repair services', 'status' => 'yes',
            'category_image' => 'images/services-2/1.webp'
        ]);
        $sub1 = SubCategory::create(['category_id' => $cat1->id, 'name' => 'Engine Repair', 'slug' => 'engine-repair']);
        $sub1b = SubCategory::create(['category_id' => $cat1->id, 'name' => 'Brake Service', 'slug' => 'brake-service']);
        Service::create(['category_id' => $cat1->id, 'sub_category_id' => $sub1->id, 'name' => 'Oil Change', 'price' => 499, 'unit' => 'per vehicle', 'notes' => 'Includes synthetic options.']);
        Service::create(['category_id' => $cat1->id, 'sub_category_id' => $sub1->id, 'name' => 'Engine Diagnostics', 'price' => 899, 'unit' => 'per vehicle', 'notes' => 'Full computer diagnostic scan.']);
        Service::create(['category_id' => $cat1->id, 'sub_category_id' => $sub1b->id, 'name' => 'Brake Pad Replacement', 'price' => 1299, 'unit' => 'per axle', 'notes' => 'Includes rotor inspection.']);

        $cat2 = Category::create([
            'name' => 'Detailing', 'slug' => 'detailing',
            'description' => 'Car detailing and cleaning', 'status' => 'yes',
            'category_image' => 'images/services-2/2.webp'
        ]);
        $sub2 = SubCategory::create(['category_id' => $cat2->id, 'name' => 'Interior Cleaning', 'slug' => 'interior-cleaning']);
        $sub2b = SubCategory::create(['category_id' => $cat2->id, 'name' => 'Exterior Detailing', 'slug' => 'exterior-detailing']);
        Service::create(['category_id' => $cat2->id, 'sub_category_id' => $sub2->id, 'name' => 'Interior Shampoo', 'price' => 1499, 'unit' => 'per vehicle', 'notes' => 'Deep cleaning for seats and carpets.']);
        Service::create(['category_id' => $cat2->id, 'sub_category_id' => $sub2b->id, 'name' => 'Ceramic Coating', 'price' => 4999, 'unit' => 'per vehicle', 'notes' => 'Long-lasting paint protection.']);
        Service::create(['category_id' => $cat2->id, 'sub_category_id' => $sub2b->id, 'name' => 'Hand Wash & Wax', 'price' => 699, 'unit' => 'per vehicle', 'notes' => 'Gentle wash with premium wax finish.']);

        $cat3 = Category::create([
            'name' => 'Maintenance', 'slug' => 'maintenance',
            'description' => 'Routine vehicle maintenance', 'status' => 'yes',
            'category_image' => 'images/services-2/3.webp'
        ]);
        $sub3 = SubCategory::create(['category_id' => $cat3->id, 'name' => 'Tire Service', 'slug' => 'tire-service']);
        Service::create(['category_id' => $cat3->id, 'sub_category_id' => $sub3->id, 'name' => 'Tire Rotation', 'price' => 399, 'unit' => 'per vehicle', 'notes' => 'Extends tire life and improves handling.']);
        Service::create(['category_id' => $cat3->id, 'sub_category_id' => $sub3->id, 'name' => 'Wheel Alignment', 'price' => 799, 'unit' => 'per vehicle', 'notes' => 'Precision alignment for smoother rides.']);
    }
}
