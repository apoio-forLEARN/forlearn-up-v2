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
        collect([
            "permissions",
            "roles",
            "languages",
            "parameters",
            "parameter_translations",
            "parameter_groups",
            "parameter_group_translations",
            "parameter_has_parameter_groups",
            "parameter_options",
            "parameter_option_translations",
            "role_translations",
            "users_forlearn", // forlearn-dev
            "user_parameters_forlean"
        ])->each(function($filename){
            $file_path = resource_path("sql/{$filename}.sql");
            DB::unprepared(file_get_contents($file_path));
        });
    }

}
