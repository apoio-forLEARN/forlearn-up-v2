<?php

use App\Util\CommonFields;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Cms\app\Models\Language;
use Modules\Users\app\Models\ParameterOption;
use Modules\Users\app\Models\ParameterOptionTranslation;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(ParameterOptionTranslation::TABLE, function (Blueprint $table) {
            CommonFields::primary($table);
			$table->foreignId(ParameterOptionTranslation::PARAMETER_OPTION_ID)->constrained(ParameterOption::TABLE)->cascadeOnDelete();
            $table->foreignId(ParameterOptionTranslation::LANGUAGE_ID)->constrained(Language::TABLE)->cascadeOnDelete();
			$table->string(ParameterOptionTranslation::DISPLAY_NAME)->nullable();
			$table->string(ParameterOptionTranslation::DESCRIPTION)->nullable();
			$table->integer(ParameterOptionTranslation::VERSION);
			$table->boolean(ParameterOptionTranslation::ACTIVE)->nullable();
			CommonFields::bottom($table);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(ParameterOptionTranslation::TABLE);
    }
};
