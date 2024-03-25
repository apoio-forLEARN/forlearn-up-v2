<?php

use App\Util\CommonFields;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Cms\app\Models\Language;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(Language::TABLE, function (Blueprint $table) {
            CommonFields::primary($table);
            $table->string(Language::NAME);
			$table->string(Language::CODE);
			$table->boolean(Language::DEFAULT)->default(0);
			$table->boolean(Language::ACTIVE)->default(1);
			CommonFields::bottom($table);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(Language::TABLE);
    }
};
