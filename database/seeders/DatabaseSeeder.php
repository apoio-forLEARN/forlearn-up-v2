<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        collect(["permissions", "roles", "languages"])->each(function($filename){
            $file_path = resource_path("sql/{$filename}.sql");
            DB::unprepared(file_get_contents($file_path));
        });
    }

}
