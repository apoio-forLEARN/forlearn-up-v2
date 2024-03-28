<?php

use App\Util\CommonFields;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Cms\app\Models\Language;
use Modules\Cms\app\Models\MenuItem;
use Modules\Cms\app\Models\MenuItemTranslation;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(MenuItemTranslation::TABLE, function (Blueprint $table) {
            CommonFields::primary($table);
			$table->foreignId(MenuItemTranslation::MENU_ITEM_ID)->constrained(MenuItem::TABLE)->cascadeOnDelete();
			$table->foreignId(MenuItemTranslation::LANGUAGE_ID)->constrained(Language::TABLE)->cascadeOnDelete();
			$table->string(MenuItemTranslation::DISPLAY_NAME)->nullable();
			$table->string(MenuItemTranslation::DESCRIPTION)->nullable();
			$table->integer(MenuItemTranslation::VERSION);
			$table->boolean(MenuItemTranslation::ACTIVE)->nullable();
			CommonFields::bottom($table);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(MenuItemTranslation::TABLE);
    }
};
