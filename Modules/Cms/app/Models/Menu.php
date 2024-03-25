<?php

namespace Modules\Cms\app\Models;

use App\Util\CommonFields;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Cms\Database\factories\MenuFactory;

class Menu extends Model
{
    use HasFactory;

    public const TABLE = "menus";
    public const CODE = "code";
    public const ORDER = "order";

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        CommonFields::ID, CommonFields::CREATED_BY, CommonFields::UPDATED_BY, CommonFields::DELETED_BY,

        Menu::CODE, Menu::ORDER
    ];

    protected $table = Menu::TABLE;

    protected static function newFactory(): MenuFactory{
        return MenuFactory::new();
    }

}
