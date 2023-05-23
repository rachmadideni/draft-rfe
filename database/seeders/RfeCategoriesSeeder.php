<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RfeCategory;

class RfeCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'basic_information',
            'contact',
            'educations',
            'family_emergency_contact',
            'work_experience'
        ];

        foreach ($categories as $category) {
            RfeCategory::create([
                'name' => $category
            ]);
        }
    }
}
