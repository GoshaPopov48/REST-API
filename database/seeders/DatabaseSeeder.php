<?php

namespace Database\Seeders;

use App\Models\Document;
use App\Models\Language;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(3)->create();
        Language::factory(10)->create();
        Project::factory(10)
            ->has(
                Document::factory(3)
            )
            ->create();

    }
}
