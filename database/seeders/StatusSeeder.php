<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder {
    /**
     * Run the database seeds.
     * @return void
     */
    public function run() {
        Status::truncate();
        $statuses = [
            [
                'name' => 'Publish',
            ],
            [
                'name' => 'Draft',
            ],
        ];

        foreach ($statuses as $status) {
            Status::create($status);
        }
    }
}
