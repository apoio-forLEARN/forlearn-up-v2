<?php

use App\Util\CommonFields;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Cms\app\Models\Menu;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(Menu::TABLE, function (Blueprint $table) {
            CommonFields::primary($table);
			$table->string(Menu::CODE)->unique();
			$table->integer(Menu::ORDER)->nullable()->default(0);
            CommonFields::bottom($table);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(Menu::TABLE);
    }
};
