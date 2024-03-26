<?php

use App\Util\CommonFields;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Users\app\Models\Parameter;
use Modules\Users\app\Models\ParameterOption;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(ParameterOption::TABLE, function (Blueprint $table) {
            CommonFields::primary($table);
			$table->foreignId(ParameterOption::PARAMETER_ID)->constrained(Parameter::TABLE)->cascadeOnDelete();
			$table->string(ParameterOption::CODE, 191)->nullable()->unique();
			$table->boolean(ParameterOption::HAS_RELATED_PARAMETERS)->default(0);
			CommonFields::bottom($table);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(ParameterOption::TABLE);
    }
};
