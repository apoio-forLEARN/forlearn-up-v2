<?php

namespace App\Util;

use Illuminate\Database\Schema\Blueprint;

class CommonFields{

  public const ID = "id";
  public const CREATED_BY = "created_by";
  public const UPDATED_BY = "updated_by";
  public const DELETED_BY = "deleted_by";
  public const DELETED_AT ="deleted_at";

  public static function primary(Blueprint $table){
    $table->id();
  }

  public static function bottom(Blueprint $table){
    $table->integer(static::CREATED_BY)->unsigned()->nullable();
    $table->integer(static::UPDATED_BY)->unsigned()->nullable();
    $table->integer(static::DELETED_BY)->unsigned()->nullable();
    $table->integer(static::DELETED_AT)->unsigned()->nullable();
    $table->timestamps();
  }

}
