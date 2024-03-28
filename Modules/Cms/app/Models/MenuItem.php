<?php

namespace Modules\Cms\app\Models;

use App\Helpers\LanguageHelper;
use App\Models\CommonModel;
use App\Util\CommonFields;
use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Traits\HasPermissions;

/**
 * Modules\Cms\app\Models\MenuItem
 *
 * @property int $id
 * @property string $code
 * @property int $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @property int|null $parent_id
 * @property int $position
 * @property string $icon
 * @property string $external_link
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|MenuItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MenuItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MenuItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|MenuItem whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MenuItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MenuItem whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MenuItem whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MenuItem whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MenuItem whereExternalLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MenuItem whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MenuItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MenuItem whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MenuItem wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MenuItem whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MenuItem whereUpdatedBy($value)
 * @mixin Eloquent
 * @property int|null $menus_id
 * @property-read Collection|MenuItem[] $children
 * @property-read User $createdBy
 * @property-read User|null $deletedBy
 * @property-read Menu|null $menu
 * @property-read MenuItem|null $parent
 * @property-read Collection|Permission[] $permissions
 * @property-read MenuItemTranslation $translation
 * @property-read Collection|MenuItemTranslation[] $translations
 * @property-read User|null $updatedBy
 * @method static bool|null forceDelete()
 * @method static Builder|MenuItem onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|MenuItem permission($permissions)
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|MenuItem whereMenusId($value)
 * @method static Builder|MenuItem withTrashed()
 * @method static Builder|MenuItem withoutTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|MenuItem disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|MenuItem withCacheCooldownSeconds($seconds = null)
 * @property-read int|null $children_count
 * @property-read int|null $permissions_count
 * @property-read int|null $translations_count
 */
class MenuItem extends CommonModel
{
    use HasFactory, HasPermissions, Cachable;

    /**
     * The attributes that are mass assignable.
     */
    public const TABLE = "menu_items";

    public const PARENT_ID = "parent_id";
    public const MENU_ID = "menus_id";
    public const CODE = "code";
    public const POSITION = "position";
    public const ICON = "icon";
    public const EXTERNAL_LINK = "external_link";


    protected $guard_name = 'web';

    protected $fillable = [
        CommonFields::ID, CommonFields::CREATED_BY, CommonFields::UPDATED_BY, CommonFields::DELETED_BY,

        MenuItem::PARENT_ID, MenuItem::MENU_ID, MenuItem::CODE, MenuItem::POSITION, MenuItem::ICON, MenuItem::EXTERNAL_LINK
    ];

    protected $table = MenuItem::TABLE;

    public function translations()
    {
        return $this->hasMany(MenuItemTranslation::class, 'menu_items_id', 'id');
    }

    public function translation()
    {
        return $this->hasOne(MenuItemTranslation::class, 'menu_items_id', 'id');
    }

    public function currentTranslation()
    {
        return $this
            ->translation()
            ->whereActive(true)
            ->whereLanguageId(LanguageHelper::getCurrentLanguage());
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class, MenuItem::MENU_ID);
    }

    public function parent()
    {
        return $this->belongsTo(__CLASS__, MenuItem::PARENT_ID);
    }

    public function children()
    {
        return $this->hasMany(__CLASS__, MenuItem::PARENT_ID);
    }

    public function childrenRecursive()
    {
        return $this->hasMany(__CLASS__, MenuItem::PARENT_ID)->with('childrenRecursive');
    }

    public static function tree($menu_id)
    {
        $items = self::with([
            'translation' => function ($q) {
                $q->whereActive(true)->whereLanguageId(LanguageHelper::getCurrentLanguage());
            },
            'permissions',
            'childrenRecursive' => function ($q) {
                $q->with([
                    'translation' => function ($q) {
                        $q->whereActive(true)->whereLanguageId(LanguageHelper::getCurrentLanguage());
                    }
                ]);
            },
        ])->whereMenusId($menu_id)->orderBy('position')->get();
        return static::buildTree($items);
    }

    private static function buildTree($elements, $parentId = null)
    {
        $branch = [];
        foreach ($elements as $element) {
            if ($element->parent_id === $parentId) {
                $children = static::buildTree($elements, $element->id);
                if ($children) {
                    $element->children = $children;
                }
                $branch[] = $element;
            }
        }
        return $branch;
    }

}
