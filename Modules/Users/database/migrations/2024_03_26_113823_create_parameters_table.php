<?php

use App\Util\CommonFields;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Users\app\Models\Parameter;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(Parameter::TABLE, function (Blueprint $table) {
            CommonFields::primary($table);
			$table->string(Parameter::CODE);
            $table->string(Parameter::TYPE);
			$table->boolean(Parameter::HAS_OPTIONS)->nullable();
			$table->boolean(Parameter::REQUIRED)->default(0);
			CommonFields::bottom($table);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(Parameter::TABLE);
    }
};
