<?php

namespace Modules\Users\app\Models;

use App\Helpers\LanguageHelper;
use App\Models\CommonModel;
use App\Util\CommonFields;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Traits\HasRoles;


/**
 * Modules\Users\app\Models\ParameterGroup
 *
 * @property int $id
 * @property string|null $code
 * @property int $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read User $createdBy
 * @property-read User|null $deletedBy
 * @property-read Parameter $parameter
 * @property-read Collection|Parameter[] $parameters
 * @property-read ParameterGroupTranslation $translation
 * @property-read Collection|ParameterGroupTranslation[] $translations
 * @property-read User|null $updatedBy
 * @property-read Collection|UserParameter[] $user_parameters
 * @method static Builder|ParameterGroup newModelQuery()
 * @method static Builder|ParameterGroup newQuery()
 * @method static Builder|ParameterGroup query()
 * @method static Builder|ParameterGroup whereCode($value)
 * @method static Builder|ParameterGroup whereCreatedAt($value)
 * @method static Builder|ParameterGroup whereCreatedBy($value)
 * @method static Builder|ParameterGroup whereDeletedBy($value)
 * @method static Builder|ParameterGroup whereId($value)
 * @method static Builder|ParameterGroup whereUpdatedAt($value)
 * @method static Builder|ParameterGroup whereUpdatedBy($value)
 * @mixin Eloquent
 * @property-read Collection|Permission[] $permissions
 * @property-read Collection|Role[] $roles
 * @method static Builder|ParameterGroup permission($permissions)
 * @method static Builder|ParameterGroup role($roles, $guard = null)
 * @property int $order
 * @method static Builder|ParameterGroup whereOrder($value)
 * @property-read int|null $parameters_count
 * @property-read int|null $permissions_count
 * @property-read int|null $roles_count
 * @property-read int|null $translations_count
 */
class ParameterGroup extends CommonModel
{
    use HasFactory, HasRoles;

    /**
     * The attributes that are mass assignable.
     */
    public const TABLE = "parameter_groups";
    public const CODE = "code";
    public const ORDER = "order";

    protected $fillable = [
        CommonFields::ID, CommonFields::CREATED_BY, CommonFields::UPDATED_BY, CommonFields::DELETED_BY,

        ParameterGroup::CODE, ParameterGroup::ORDER
    ];

    protected $table = ParameterGroup::TABLE;

    protected $guard_name = 'web';

    public function translations()
    {
        return $this->hasMany(ParameterGroupTranslation::class, ParameterGroupTranslation::PARAMETER_GROUP_ID, CommonFields::ID);
    }

    public function translation()
    {
        return $this->hasOne(ParameterGroupTranslation::class, ParameterGroupTranslation::PARAMETER_GROUP_ID, CommonFields::ID);
    }

    public function currentTranslation()
    {
        return $this->translation()->whereActive(true)->whereLanguageId(LanguageHelper::getCurrentLanguage());
    }

    public function parameters()
    {
        return $this->belongsToMany(Parameter::class, ParameterHasParameterGroup::TABLE, ParameterHasParameterGroup::PARAMETER_GROUP_ID, ParameterHasParameterGroup::PARAMETER_ID)
            ->withPivot([ParameterHasParameterGroup::ORDER])
            ->orderBy(ParameterHasParameterGroup::ORDER);
    }

}
