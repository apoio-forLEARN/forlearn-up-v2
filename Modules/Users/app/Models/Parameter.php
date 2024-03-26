<?php

namespace Modules\Users\app\Models;

use App\Helpers\LanguageHelper;
use App\Models\CommonModel;
use App\Util\CommonFields;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Traits\HasRoles;

/**
 * Modules\Users\app\Models\Parameter
 *
 * @property-read Collection|ParameterOption[] $options
 * @property-read Collection|ParameterTranslation[] $translations
 * @method static bool|null forceDelete()
 * @method static Builder|Parameter newModelQuery()
 * @method static Builder|Parameter newQuery()
 * @method static \Illuminate\Database\Query\Builder|Parameter onlyTrashed()
 * @method static Builder|Parameter query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Query\Builder|Parameter withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Parameter withoutTrashed()
 * @mixin Eloquent
 * @property int $id
 * @property string|null $code
 * @property int $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property string|null $type
 * @property int|null $has_options
 * @property-read User $createdBy
 * @property-read User|null $deletedBy
 * @property-read User|null $updatedBy
 * @method static Builder|Parameter whereCode($value)
 * @method static Builder|Parameter whereCreatedAt($value)
 * @method static Builder|Parameter whereCreatedBy($value)
 * @method static Builder|Parameter whereDeletedAt($value)
 * @method static Builder|Parameter whereDeletedBy($value)
 * @method static Builder|Parameter whereHasOptions($value)
 * @method static Builder|Parameter whereId($value)
 * @method static Builder|Parameter whereType($value)
 * @method static Builder|Parameter whereUpdatedAt($value)
 * @method static Builder|Parameter whereUpdatedBy($value)
 * @property-read Collection|ParameterOptionTranslation[] $optionsTranslations
 * @property-read Collection|UserParameter[] $parameters
 * @property-read ParameterTranslation $translation
 * @property int|null $parameter_group_id
 * @property-read Collection|ParameterHasParameterGroup[] $parameter_has_parameter_groups
 * @property-read Collection|ParameterRole[] $parameter_roles
 * @property-read Collection|Role[] $roles
 * @method static Builder|Parameter whereParameterGroupId($value)
 * @property-read Collection|ParameterGroup[] $groups
 * @property-read Collection|Permission[] $permissions
 * @method static Builder|Parameter permission($permissions)
 * @method static Builder|Parameter role($roles, $guard = null)
 * @property int $required
 * @property-read Collection|User[] $users
 * @method static Builder|Parameter whereRequired($value)
 * @property-read int|null $groups_count
 * @property-read int|null $options_count
 * @property-read int|null $permissions_count
 * @property-read int|null $roles_count
 * @property-read int|null $translations_count
 * @property-read int|null $users_count
 */
class Parameter extends CommonModel
{
    use HasFactory, HasRoles;
    /**
     * The attributes that are mass assignable.
     */
    public const TABLE = "parameters";

    public const CODE = "code";
    public const TYPE = "type";
    public const HAS_OPTIONS = "has_options";
    public const REQUIRED = "required";

    protected $fillable = [
        CommonFields::ID, CommonFields::CREATED_BY, CommonFields::UPDATED_BY, CommonFields::DELETED_BY,

        Parameter::CODE, Parameter::TYPE, Parameter::HAS_OPTIONS, Parameter::REQUIRED,
    ];

    protected $table = Parameter::TABLE;

    protected $guard_name = 'web';

    public function translations()
    {
        return $this->hasMany(ParameterTranslation::class, ParameterTranslation::PARAMETER_ID, CommonFields::ID);
    }

    public function translation()
    {
        return $this->hasOne(ParameterTranslation::class, ParameterTranslation::PARAMETER_ID, CommonFields::ID);
    }

    public function currentTranslation()
    {
        return $this->translation()->whereActive(true)->whereLanguageId(LanguageHelper::getCurrentLanguage());
    }

}
