<?php

namespace Modules\Users\app\Models;

use App\Util\CommonFields;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Cms\app\Models\Language;

/**
* Modules\Users\app\Models\ParameterOptionTranslation
*
* @property-read Language $language
* @property-read ParameterOption $parameterOption
* @method static bool|null forceDelete()
* @method static Builder|ParameterOptionTranslation newModelQuery()
* @method static Builder|ParameterOptionTranslation newQuery()
* @method static \Illuminate\Database\Query\Builder|ParameterOptionTranslation onlyTrashed()
* @method static Builder|ParameterOptionTranslation query()
* @method static bool|null restore()
* @method static \Illuminate\Database\Query\Builder|ParameterOptionTranslation withTrashed()
* @method static \Illuminate\Database\Query\Builder|ParameterOptionTranslation withoutTrashed()
* @mixin Eloquent
* @property int $id
* @property int $parameter_options_id
* @property int $language_id
* @property string|null $display_name
* @property string|null $description
* @property int $version
* @property int|null $active
* @property Carbon|null $created_at
* @property Carbon|null $updated_at
* @property string|null $deleted_at
* @method static Builder|ParameterOptionTranslation whereActive($value)
* @method static Builder|ParameterOptionTranslation whereCreatedAt($value)
* @method static Builder|ParameterOptionTranslation whereDeletedAt($value)
* @method static Builder|ParameterOptionTranslation whereDescription($value)
* @method static Builder|ParameterOptionTranslation whereDisplayName($value)
* @method static Builder|ParameterOptionTranslation whereId($value)
* @method static Builder|ParameterOptionTranslation whereLanguageId($value)
* @method static Builder|ParameterOptionTranslation whereParameterOptionsId($value)
* @method static Builder|ParameterOptionTranslation whereUpdatedAt($value)
* @method static Builder|ParameterOptionTranslation whereVersion($value)
* @method static Builder|ParameterOptionTranslation disableCache()
* @method static Builder|ParameterOptionTranslation withCacheCooldownSeconds($seconds = null)
*/
class ParameterOptionTranslation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    public const TABLE = "parameter_option_translations";

    public const PARAMETER_OPTION_ID = "parameter_options_id";
    public const LANGUAGE_ID = "language_id";
    public const DISPLAY_NAME = "display_name";
    public const DESCRIPTION = "description";
    public const VERSION = "version";
    public const ACTIVE = "active";

    protected $fillable = [
        CommonFields::ID, CommonFields::CREATED_BY, CommonFields::UPDATED_BY, CommonFields::DELETED_BY,

        ParameterOptionTranslation::PARAMETER_OPTION_ID, ParameterOptionTranslation::LANGUAGE_ID,
        ParameterOptionTranslation::DISPLAY_NAME, ParameterOptionTranslation::DESCRIPTION,
        ParameterOptionTranslation::VERSION, ParameterOptionTranslation::ACTIVE,
    ];

    protected $table = ParameterOptionTranslation::TABLE;

    public function parameterOption()
    {
        return $this->belongsTo(ParameterOption::class, ParameterOptionTranslation::PARAMETER_OPTION_ID);
    }

    public function language()
    {
        return $this->hasOne(Language::class, CommonFields::ID, ParameterOptionTranslation::LANGUAGE_ID);
    }

}
