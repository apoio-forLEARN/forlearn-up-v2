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
    {   // forlearn-dev
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
            "users_forlearn",
            "user_parameters_forlean",
            "model_has_roles_forlearn",
            "model_has_permissions_forlearn",
            "role_has_permissions",
            "menus",
            "menu_translations",
            "menu_items",
            "menu_item_translations"
        ])->each(function($filename){
            $file_path = resource_path("sql/{$filename}.sql");
            DB::unprepared(file_get_contents($file_path));
        });
    }

}
