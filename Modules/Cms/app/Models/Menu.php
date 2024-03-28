<?php

namespace Modules\Cms\app\Models;

use App\Util\CommonFields;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Modules\Cms\app\Models
 *
 * @property int $id
 * @property string $code
 * @property int $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read User $createdBy
 * @property-read User|null $deletedBy
 * @property-read MenuTranslation $translation
 * @property-read Collection|MenuTranslation[] $translations
 * @property-read User|null $updatedBy
 * @method static bool|null forceDelete()
 * @method static Builder|Menu newModelQuery()
 * @method static Builder|Menu newQuery()
 * @method static \Illuminate\Database\Query\Builder|Menu onlyTrashed()
 * @method static Builder|Menu query()
 * @method static bool|null restore()
 * @method static Builder|Menu whereCode($value)
 * @method static Builder|Menu whereCreatedAt($value)
 * @method static Builder|Menu whereCreatedBy($value)
 * @method static Builder|Menu whereDeletedAt($value)
 * @method static Builder|Menu whereDeletedBy($value)
 * @method static Builder|Menu whereId($value)
 * @method static Builder|Menu whereUpdatedAt($value)
 * @method static Builder|Menu whereUpdatedBy($value)
 * @method static \Illuminate\Database\Query\Builder|Menu withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Menu withoutTrashed()
 * @mixin Eloquent
 * @property-read Collection|MenuItem[] $items
 * @property int|null $order
 * @method static Builder|Menu whereOrder($value)
 * @method static Builder|Menu disableCache()
 * @method static Builder|Menu withCacheCooldownSeconds($seconds = null)
 * @property-read int|null $items_count
 * @property-read int|null $translations_count
 */
class Menu extends Model
{
    use HasFactory;

    public const TABLE = "menus";
    public const CODE = "code";
    public const ORDER = "order";
    public const GRID = "grid";

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        CommonFields::ID, CommonFields::CREATED_BY, CommonFields::UPDATED_BY, CommonFields::DELETED_BY,

        Menu::CODE, Menu::ORDER, MENU::GRID
    ];

    protected $table = Menu::TABLE;

}
