<?php

use App\Util\CommonFields;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Users\app\Models\Notification;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(Notification::TABLE, function (Blueprint $table) {
            CommonFields::primary($table);
            $table->string(Notification::ICON);
            $table->string(Notification::SUBJECT);
            $table->mediumText(Notification::BODY_MESSENGE);
            $table->bigInteger(Notification::SENT_BY);
            $table->bigInteger(Notification::SENT_TO);
            $table->bigInteger(Notification::STATE_READ)->nullable();
            $table->date(Notification::DATE_SENT);
            $table->string(Notification::FILE)->nullable();
            $table->integer(Notification::STAR)->nullable();
            $table->integer(Notification::COD_NOTIFICATION);
			CommonFields::bottom($table);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(Notification::TABLE);
    }
};
