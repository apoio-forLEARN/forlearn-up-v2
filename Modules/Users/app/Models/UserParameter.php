<?php

namespace Modules\Users\app\Models;

use App\Models\CommonModel;
use App\Util\CommonFields;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserParameter extends CommonModel
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    public const TABLE = "user_parameters";

    public const USER_ID = "users_id";
    public const PARAMETER_ID = "parameters_id";
    public const PARAMETER_GROUP_ID = "parameter_group_id";
    public const DESCRIPTION = "description";
    public const VALUE = "value";
    public const IS_DUPLICATE = "is_duplicate";

    protected $fillable = [
        CommonFields::ID, CommonFields::CREATED_BY, CommonFields::UPDATED_BY, CommonFields::DELETED_BY,

        UserParameter::USER_ID,UserParameter::PARAMETER_ID,
        UserParameter::PARAMETER_GROUP_ID,UserParameter::DESCRIPTION,
        UserParameter::VALUE
    ];

    protected $table = UserParameter::TABLE;

    public function user()
    {
        return $this->belongsTo(User::class, UserParameter::USER_ID);
    }

    public function parameter_group()
    {
        return $this->belongsTo(ParameterGroup::class, UserParameter::PARAMETER_GROUP_ID);
    }

    public function parameter()
    {
        return $this->belongsTo(Parameter::class, UserParameter::PARAMETER_ID);
    }

}
