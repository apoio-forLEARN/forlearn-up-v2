<?php

namespace Modules\Users\app\Models;

use App\Util\CommonFields;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Cms\app\Models\Language;

/**
 * Modules\Users\app\Models\RoleTranslation
 *
 * @property int $id
 * @property int $role_id
 * @property int $language_id
 * @property string|null $display_name
 * @property string|null $description
 * @property int|null $version
 * @property int $active
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read Language $language
 * @property-read Role $role
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|RoleTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RoleTranslation newQuery()
 * @method static Builder|RoleTranslation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|RoleTranslation query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|RoleTranslation whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleTranslation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleTranslation whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleTranslation whereDisplayName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleTranslation whereLanguageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleTranslation whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleTranslation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleTranslation whereVersion($value)
 * @method static Builder|RoleTranslation withTrashed()
 * @method static Builder|RoleTranslation withoutTrashed()
 * @mixin Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|RoleTranslation disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|RoleTranslation withCacheCooldownSeconds($seconds = null)
 */
class RoleTranslation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    public const TABLE = "role_translations";

    public const ROLE_ID = "role_id";
    public const LANGUAGE_ID = "language_id";
    public const DISPLAY_NAME = "display_name";
    public const DESCRIPTION = "description";
    public const VERSION = "version";
    public const ACTIVE = "active";

    protected $fillable = [
        CommonFields::ID, CommonFields::CREATED_BY, CommonFields::UPDATED_BY, CommonFields::DELETED_BY,

        RoleTranslation::ROLE_ID, RoleTranslation::LANGUAGE_ID,
        RoleTranslation::DISPLAY_NAME, RoleTranslation::DESCRIPTION,
        RoleTranslation::VERSION, RoleTranslation::ACTIVE,
    ];

    protected $table = RoleTranslation::TABLE;

    public function role()
    {
        return $this->belongsTo(Role::class, RoleTranslation::ROLE_ID);
    }

    public function language()
    {
        return $this->hasOne(Language::class, CommonFields::ID, RoleTranslation::LANGUAGE_ID);
    }

}
