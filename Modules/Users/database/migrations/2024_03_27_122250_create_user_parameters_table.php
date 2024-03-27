<?php

use App\Util\CommonFields;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Users\app\Models\Parameter;
use Modules\Users\app\Models\ParameterGroup;
use Modules\Users\app\Models\User;
use Modules\Users\app\Models\UserParameter;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(UserParameter::TABLE, function (Blueprint $table) {
            CommonFields::primary($table);
            $table->foreignId(UserParameter::USER_ID)->constrained(User::TABLE)->cascadeOnDelete();
			$table->foreignId(UserParameter::PARAMETER_ID)->constrained(Parameter::TABLE)->cascadeOnDelete();
            $table->foreignId(UserParameter::PARAMETER_GROUP_ID)->constrained(ParameterGroup::TABLE)->cascadeOnDelete();
			$table->string(UserParameter::VALUE)->nullable();
			$table->string(UserParameter::DESCRIPTION)->nullable();
            $table->boolean(UserParameter::IS_DUPLICATE)->nullable()->default(0);
			CommonFields::bottom($table);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(UserParameter::TABLE);
    }
};
