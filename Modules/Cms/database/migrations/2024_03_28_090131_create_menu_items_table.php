<?php

use App\Util\CommonFields;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Cms\app\Models\Menu;
use Modules\Cms\app\Models\MenuItem;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(MenuItem::TABLE, function (Blueprint $table) {
            CommonFields::primary($table);
            $table->foreignId(MenuItem::MENU_ID)->constrained(Menu::TABLE)->cascadeOnDelete();
            $table->integer(MenuItem::PARENT_ID)->unsigned()->nullable();
			$table->string(MenuItem::CODE)->unique();
			$table->integer(MenuItem::POSITION);
			$table->string(MenuItem::ICON)->nullable();
			$table->text(MenuItem::EXTERNAL_LINK, 65535)->nullable();
			CommonFields::bottom($table);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(MenuItem::TABLE);
    }
};
