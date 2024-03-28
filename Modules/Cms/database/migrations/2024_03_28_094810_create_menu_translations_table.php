<?php

use App\Util\CommonFields;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Cms\app\Models\Language;
use Modules\Cms\app\Models\Menu;
use Modules\Cms\app\Models\MenuTranslation;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(MenuTranslation::TABLE, function (Blueprint $table) {
            CommonFields::primary($table);
			$table->foreignId(MenuTranslation::MENU_ID)->constrained(Menu::TABLE)->cascadeOnDelete();
			$table->foreignId(MenuTranslation::LANGUAGE_ID)->constrained(Language::TABLE)->cascadeOnDelete();
			$table->string(MenuTranslation::DISPLAY_NAME)->nullable();
			$table->string(MenuTranslation::DESCRIPTION)->nullable();
			$table->integer(MenuTranslation::VERSION);
			$table->boolean(MenuTranslation::ACTIVE)->nullable();
			CommonFields::bottom($table);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(MenuTranslation::TABLE);
    }
};
