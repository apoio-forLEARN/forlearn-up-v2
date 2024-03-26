<?php

use App\Util\CommonFields;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Cms\app\Models\Language;
use Modules\Users\app\Models\Parameter;
use Modules\Users\app\Models\ParameterTranslation;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(ParameterTranslation::TABLE, function (Blueprint $table) {
            CommonFields::primary($table);
			$table->foreignId(ParameterTranslation::PARAMETER_ID)->constrained(Parameter::TABLE)->cascadeOnDelete();
			$table->foreignId(ParameterTranslation::LANGUAGE_ID)->constrained(Language::TABLE)->cascadeOnDelete();
			$table->string(ParameterTranslation::DISPLAY_NAME)->nullable();
			$table->string(ParameterTranslation::DESCRIPTION)->nullable();
			$table->integer(ParameterTranslation::VERSION);
			$table->boolean(ParameterTranslation::ACTIVE)->nullable();
			CommonFields::bottom($table);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(ParameterTranslation::TABLE);
    }
};
