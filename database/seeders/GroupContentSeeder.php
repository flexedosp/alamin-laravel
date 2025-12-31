<?php

namespace Database\Seeders;

use App\Models\GroupContentModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GroupContentModel::insert(
            [
                [
                    'name' => 'Berita',
                    'created_at' => now(),
                    'created_by' => 'Admin',
                ],
                [
                    'name' => 'Artikel',
                    'created_at' => now(),
                    'created_by' => 'Admin',
                ]
            ]
        );
    }
}
