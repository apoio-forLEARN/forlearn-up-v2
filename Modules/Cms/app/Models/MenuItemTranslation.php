<?php

namespace Modules\Cms\app\Models;

use App\Util\CommonFields;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Modules\Cms\app\Models\DegreeTranslation
 *
 * @mixin Eloquent
 * @property int $menus_id
 * @property-read Menu $menu
 * @method static Builder|MenuTranslation whereMenusId($value)
 * @property int $menu_items_id
 * @property-read Menu $menuItem
 * @method static Builder|MenuItemTranslation whereMenuItemsId($value)
 * @method static Builder|MenuItemTranslation disableCache()
 * @method static Builder|MenuItemTranslation withCacheCooldownSeconds($seconds = null)
 */
class MenuItemTranslation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    public const TABLE = "menu_item_translations";

    public const MENU_ITEM_ID = "menu_items_id";
    public const LANGUAGE_ID = "language_id";
    public const DISPLAY_NAME = "display_name";
    public const DESCRIPTION = "description";
    public const VERSION = "version";
    public const ACTIVE = "active";

    protected $table = MenuItemTranslation::TABLE;

    protected $fillable = [
        CommonFields::ID, CommonFields::CREATED_BY, CommonFields::UPDATED_BY, CommonFields::DELETED_BY,

        MenuItemTranslation::MENU_ITEM_ID, MenuItemTranslation::LANGUAGE_ID, MenuItemTranslation::DISPLAY_NAME,
        MenuItemTranslation::DESCRIPTION, MenuItemTranslation::VERSION, MenuItemTranslation::ACTIVE
    ];

    public function menuItem()
    {
        return $this->belongsTo(Menu::class, MenuItemTranslation::MENU_ITEM_ID);
    }

    public function language()
    {
        return $this->hasOne(Language::class, CommonFields::ID, MenuItemTranslation::LANGUAGE_ID);
    }

}
