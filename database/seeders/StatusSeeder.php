<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = [
            'completed',
            'in progress'
        ];
        foreach ($statuses as $status) {
            $newStatus = new Status();
            $newStatus->project_status = $status;
            $newStatus->save();
        }
    }
}
