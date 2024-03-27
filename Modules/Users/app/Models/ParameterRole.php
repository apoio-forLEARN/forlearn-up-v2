<?php

namespace Modules\Users\app\Models;

use App\Util\CommonFields;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Modules\Users\app\Models\ParameterRole
 *
 * @property int $id
 * @property int $parameter_id
 * @property int $role_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Parameter $parameter
 * @property-read Role $roles
 * @method static Builder|ParameterRole newModelQuery()
 * @method static Builder|ParameterRole newQuery()
 * @method static Builder|ParameterRole query()
 * @method static Builder|ParameterRole whereCreatedAt($value)
 * @method static Builder|ParameterRole whereId($value)
 * @method static Builder|ParameterRole whereParameterId($value)
 * @method static Builder|ParameterRole whereRoleId($value)
 * @method static Builder|ParameterRole whereUpdatedAt($value)
 * @mixin Eloquent
 */
class ParameterRole extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    public const TABLE = "parameter_roles";

    public const PARAMETER_ID = "parameter_id";
    public const ROLE_ID = "role_id";

    protected $fillable = [
        CommonFields::ID, CommonFields::CREATED_BY, CommonFields::UPDATED_BY, CommonFields::DELETED_BY,

        ParameterRole::PARAMETER_ID, ParameterRole::ROLE_ID
    ];

    protected $table = ParameterRole::TABLE;

    public function parameter()
    {
        return $this->belongsTo(Parameter::class, ParameterRole::PARAMETER_ID,CommonFields::ID);
    }

    public function roles()
    {
        return $this->belongsTo(Role::class, ParameterRole::ROLE_ID,CommonFields::ID);
    }

}
