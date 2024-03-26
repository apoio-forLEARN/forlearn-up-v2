<?php

use App\Util\CommonFields;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Cms\app\Models\Language;
use Modules\Users\app\Models\ParameterGroup;
use Modules\Users\app\Models\ParameterGroupTranslation;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(ParameterGroupTranslation::TABLE, function (Blueprint $table) {
            CommonFields::primary($table);
			$table->foreignId(ParameterGroupTranslation::PARAMETER_GROUP_ID)->constrained(ParameterGroup::TABLE)->cascadeOnDelete();
            $table->foreignId(ParameterGroupTranslation::LANGUAGE_ID)->constrained(Language::TABLE)->cascadeOnDelete();
			$table->string(ParameterGroupTranslation::DISPLAY_NAME)->nullable();
			$table->string(ParameterGroupTranslation::DESCRIPTION)->nullable();
			$table->integer(ParameterGroupTranslation::VERSION);
			$table->boolean(ParameterGroupTranslation::ACTIVE)->nullable();
			$table->string(ParameterGroupTranslation::ABBREVIATION)->nullable();
			CommonFields::bottom($table);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(ParameterGroupTranslation::TABLE);
    }
};
