<?php

use App\Util\CommonFields;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Cms\app\Models\Language;
use Modules\Users\app\Models\Role;
use Modules\Users\app\Models\RoleTranslation;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(RoleTranslation::TABLE, function (Blueprint $table) {
            CommonFields::primary($table);
			$table->foreignId(RoleTranslation::ROLE_ID)->constrained(Role::TABLE)->cascadeOnDelete();
            $table->foreignId(RoleTranslation::LANGUAGE_ID)->constrained(Language::TABLE)->cascadeOnDelete();
			$table->string(RoleTranslation::DISPLAY_NAME)->nullable();
			$table->string(RoleTranslation::DESCRIPTION)->nullable();
			$table->integer(RoleTranslation::VERSION)->nullable();
			$table->boolean(RoleTranslation::ACTIVE);
			CommonFields::bottom($table);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(RoleTranslation::TABLE);
    }
};
