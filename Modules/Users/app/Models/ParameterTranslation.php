<?php

namespace Modules\Users\app\Models;

use App\Util\CommonFields;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Cms\app\Models\Language;

/**
 * Modules\Users\app\Models\ParameterTranslation
 *
 * @property-read Language $language
 * @property-read Parameter $parameter
 * @method static bool|null forceDelete()
 * @method static Builder|ParameterTranslation newModelQuery()
 * @method static Builder|ParameterTranslation newQuery()
 * @method static \Illuminate\Database\Query\Builder|ParameterTranslation onlyTrashed()
 * @method static Builder|ParameterTranslation query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Query\Builder|ParameterTranslation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ParameterTranslation withoutTrashed()
 * @mixin Eloquent
 * @property int $id
 * @property int $parameters_id
 * @property int $language_id
 * @property string|null $display_name
 * @property string|null $description
 * @property int $version
 * @property int|null $active
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static Builder|ParameterTranslation whereActive($value)
 * @method static Builder|ParameterTranslation whereCreatedAt($value)
 * @method static Builder|ParameterTranslation whereDeletedAt($value)
 * @method static Builder|ParameterTranslation whereDescription($value)
 * @method static Builder|ParameterTranslation whereDisplayName($value)
 * @method static Builder|ParameterTranslation whereId($value)
 * @method static Builder|ParameterTranslation whereLanguageId($value)
 * @method static Builder|ParameterTranslation whereParametersId($value)
 * @method static Builder|ParameterTranslation whereUpdatedAt($value)
 * @method static Builder|ParameterTranslation whereVersion($value)
 * @method static Builder|ParameterTranslation disableCache()
 * @method static Builder|ParameterTranslation withCacheCooldownSeconds($seconds = null)
 */
class ParameterTranslation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    public const TABLE = "parameter_translations";

    public const PARAMETER_ID = "parameters_id";
    public const LANGUAGE_ID = "language_id";
    public const DISPLAY_NAME = "display_name";
    public const DESCRIPTION = "description";
    public const VERSION = "version";
    public const ACTIVE = "active";

    protected $fillable = [
        CommonFields::ID, CommonFields::CREATED_BY, CommonFields::UPDATED_BY, CommonFields::DELETED_BY,

        ParameterTranslation::PARAMETER_ID, ParameterTranslation::LANGUAGE_ID,
        ParameterTranslation::DISPLAY_NAME, ParameterTranslation::DESCRIPTION,
        ParameterTranslation::VERSION, ParameterTranslation::ACTIVE,
    ];

    protected $table = ParameterTranslation::TABLE;

    public function parameter()
    {
        return $this->belongsTo(Parameter::class, ParameterTranslation::PARAMETER_ID);
    }

    public function language()
    {
        return $this->hasOne(Language::class, CommonFields::ID, ParameterTranslation::LANGUAGE_ID);
    }

}
