<?php

namespace Modules\Cms\app\Models;

use App\Util\CommonFields;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MenuTranslation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    public const TABLE = "menu_translations";

    protected $table = MenuTranslation::TABLE;

    public const MENU_ID = "menus_id";
    public const LANGUAGE_ID = "language_id";
    public const DISPLAY_NAME = "display_name";
    public const DESCRIPTION = "description";
    public const VERSION = "version";
    public const ACTIVE = "active";

    protected $fillable = [
        CommonFields::ID, CommonFields::CREATED_BY, CommonFields::UPDATED_BY, CommonFields::DELETED_BY,

        MenuTranslation::MENU_ID, MenuTranslation::LANGUAGE_ID,  MenuTranslation::DISPLAY_NAME,
        MenuTranslation::DESCRIPTION, MenuTranslation::VERSION, MenuTranslation::ACTIVE,
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class, MenuTranslation::MENU_ID);
    }

    public function language()
    {
        return $this->hasOne(Language::class, CommonFields::ID, MenuTranslation::LANGUAGE_ID);
    }

}
