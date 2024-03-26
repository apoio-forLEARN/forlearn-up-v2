<?php

use App\Util\CommonFields;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Users\app\Models\Parameter;
use Modules\Users\app\Models\ParameterGroup;
use Modules\Users\app\Models\ParameterHasParameterGroup;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(ParameterHasParameterGroup::TABLE, function (Blueprint $table) {
            CommonFields::primary($table);
			$table->foreignId(ParameterHasParameterGroup::PARAMETER_ID)->constrained(Parameter::TABLE)->cascadeOnDelete();
            $table->foreignId(ParameterHasParameterGroup::PARAMETER_GROUP_ID)->constrained(ParameterGroup::TABLE)->cascadeOnDelete();
			$table->integer(ParameterHasParameterGroup::ORDER)->default(0);
            CommonFields::bottom($table);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(ParameterHasParameterGroup::TABLE);
    }
};
