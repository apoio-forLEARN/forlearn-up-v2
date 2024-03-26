<?php

namespace Modules\Users\app\Models;

use App\Models\CommonModel;
use App\Util\CommonFields;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Modules\Users\app\Models\ParameterOption
 *
 * @property-read Parameter $parameter
 * @property-read Collection|ParameterOptionTranslation[] $translations
 * @method static bool|null forceDelete()
 * @method static Builder|ParameterOption newModelQuery()
 * @method static Builder|ParameterOption newQuery()
 * @method static \Illuminate\Database\Query\Builder|ParameterOption onlyTrashed()
 * @method static Builder|ParameterOption query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Query\Builder|ParameterOption withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ParameterOption withoutTrashed()
 * @mixin Eloquent
 * @property int $id
 * @property int $parameters_id
 * @property string|null $code
 * @property int $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read User $createdBy
 * @property-read User|null $deletedBy
 * @property-read User|null $updatedBy
 * @method static Builder|ParameterOption whereCode($value)
 * @method static Builder|ParameterOption whereCreatedAt($value)
 * @method static Builder|ParameterOption whereCreatedBy($value)
 * @method static Builder|ParameterOption whereDeletedAt($value)
 * @method static Builder|ParameterOption whereDeletedBy($value)
 * @method static Builder|ParameterOption whereId($value)
 * @method static Builder|ParameterOption whereParametersId($value)
 * @method static Builder|ParameterOption whereUpdatedAt($value)
 * @method static Builder|ParameterOption whereUpdatedBy($value)
 * @property-read ParameterOptionTranslation $translation
 * @property int $has_related_parameters
 * @property-read Collection|Parameter[] $relatedParameters
 * @method static Builder|ParameterOption whereHasRelatedParameters($value)
 * @property-read int|null $related_parameters_count
 * @property-read int|null $translations_count
 */
class ParameterOption extends CommonModel
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    public const TABLE = "parameter_options";

    public const PARAMETER_ID = "parameters_id";
    public const CODE = "code";
    public const HAS_RELATED_PARAMETERS = "has_related_parameters";

    protected $fillable = [
        CommonFields::ID, CommonFields::CREATED_BY, CommonFields::UPDATED_BY, CommonFields::DELETED_BY,

        ParameterOption::PARAMETER_ID, ParameterOption::CODE, ParameterOption::HAS_RELATED_PARAMETERS
    ];

}
