<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RfeStatus;

class RfeStatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = ['draft','waiting for approval','approved','rejected','withdrawn'];
        foreach ($statuses as $status) {
            RfeStatus::create([
                'name' => $status
            ]);
        }
    }
}
