<?php

namespace Modules\Users\app\Models;

use App\Util\CommonFields;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ParameterHasParameterGroup extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    public const TABLE = "parameter_has_parameter_groups";

    public const PARAMETER_GROUP_ID = "parameter_group_id";
    public const PARAMETER_ID = "parameter_id";
    public const ORDER = "order";

    protected $fillable = [
        CommonFields::ID, CommonFields::CREATED_BY, CommonFields::UPDATED_BY, CommonFields::DELETED_BY,

        ParameterHasParameterGroup::PARAMETER_GROUP_ID,
        ParameterHasParameterGroup::PARAMETER_ID,
        ParameterHasParameterGroup::ORDER
    ];

    protected $table = ParameterHasParameterGroup::TABLE;

}
