<?php

namespace Modules\Users\app\Models;

use App\Helpers\LanguageHelper;
use App\Util\CommonFields;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Role
 *
 * @package Modules\Users\app\Models
 * @property int $id
 * @property string $name
 * @property string $guard_name
 * @property int $created_by
 * @property int|null $updated_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read Collection|RoleTranslation[] $translations
 * @property-read Collection|User[] $users
 * @method static Builder|Role newModelQuery()
 * @method static Builder|Role newQuery()
 * @method static Builder|\Spatie\Permission\Models\Role permission($permissions)
 * @method static Builder|Role query()
 * @method static Builder|Role whereCreatedAt($value)
 * @method static Builder|Role whereCreatedBy($value)
 * @method static Builder|Role whereGuardName($value)
 * @method static Builder|Role whereId($value)
 * @method static Builder|Role whereName($value)
 * @method static Builder|Role whereUpdatedAt($value)
 * @method static Builder|Role whereUpdatedBy($value)
 * @mixin Eloquent
 * @property-read User $createdBy
 * @property-read User|null $updatedBy
 * @property-read RoleTranslation $translation
 * @method static Builder|Role disableCache()
 * @method static Builder|Role withCacheCooldownSeconds($seconds = null)
 * @property-read int|null $permissions_count
 * @property-read int|null $translations_count
 * @property-read int|null $users_count
 */
class Role extends \Spatie\Permission\Models\Role
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    public const TABLE = "roles";

    public const NAME = "name";
    public const GUARD_NAME = "guard_name";

    protected $fillable = [
        CommonFields::ID, CommonFields::CREATED_BY, CommonFields::UPDATED_BY, CommonFields::DELETED_BY,
        Role::NAME, Role::GUARD_NAME,
    ];


    public function translations()
    {
        return $this->hasMany(RoleTranslation::class, RoleTranslation::ROLE_ID, CommonFields::ID);
    }

    public function translation()
    {
        return $this->hasOne(RoleTranslation::class, RoleTranslation::ROLE_ID, CommonFields::ID);
    }

    public function currentTranslation()
    {
        return $this->translation()->whereActive(true)->whereLanguageId(LanguageHelper::getCurrentLanguage());
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, CommonFields::CREATED_BY);
    }

    public function updatedBy()
    {
        return $this->belongsTo(User::class, CommonFields::UPDATED_BY);
    }

}
