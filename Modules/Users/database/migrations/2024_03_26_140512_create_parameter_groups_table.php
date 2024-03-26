<?php

use App\Util\CommonFields;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Users\app\Models\ParameterGroup;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(ParameterGroup::TABLE, function (Blueprint $table) {
            CommonFields::primary($table);
			$table->string(ParameterGroup::CODE)->unique();
			$table->integer(ParameterGroup::ORDER)->nullable()->default(0);
			CommonFields::bottom($table);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(ParameterGroup::TABLE);
    }
};
