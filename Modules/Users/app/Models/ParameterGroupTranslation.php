<?php

namespace Modules\Users\app\Models;

use App\Models\CommonModel;
use App\Util\CommonFields;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Cms\app\Models\Language;
use Spatie\Permission\Traits\HasRoles;

/**
 * Modules\Users\app\Models\ParameterGroupTranslation
 *
 * @property int $id
 * @property int $parameter_group_id
 * @property int $language_id
 * @property string|null $display_name
 * @property string|null $description
 * @property int $version
 * @property int|null $active
 * @property string|null $abbreviation
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read Language $language
 * @property-read ParameterGroup $parameter_group
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|ParameterGroupTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ParameterGroupTranslation newQuery()
 * @method static Builder|ParameterGroupTranslation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ParameterGroupTranslation query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|ParameterGroupTranslation whereAbbreviation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ParameterGroupTranslation whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ParameterGroupTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ParameterGroupTranslation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ParameterGroupTranslation whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ParameterGroupTranslation whereDisplayName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ParameterGroupTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ParameterGroupTranslation whereLanguageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ParameterGroupTranslation whereParameterGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ParameterGroupTranslation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ParameterGroupTranslation whereVersion($value)
 * @method static Builder|ParameterGroupTranslation withTrashed()
 * @method static Builder|ParameterGroupTranslation withoutTrashed()
 * @mixin Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|ParameterGroupTranslation disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|ParameterGroupTranslation withCacheCooldownSeconds($seconds = null)
 */
class ParameterGroupTranslation extends CommonModel
{
    use HasFactory, HasRoles;

    /**
     * The attributes that are mass assignable.
     */
    public const TABLE = "parameter_group_translations";

    public const PARAMETER_GROUP_ID = "parameter_group_id";
    public const LANGUAGE_ID = "language_id";
    public const DISPLAY_NAME = "display_name";
    public const DESCRIPTION = "description";
    public const VERSION = "version";
    public const ACTIVE = "active";
    public const ABBREVIATION ="abbreviation";

    protected $fillable = [
        CommonFields::ID, CommonFields::CREATED_BY, CommonFields::UPDATED_BY, CommonFields::DELETED_BY,

        ParameterGroupTranslation::PARAMETER_GROUP_ID, ParameterGroupTranslation::LANGUAGE_ID,
        ParameterGroupTranslation::DISPLAY_NAME, ParameterGroupTranslation::DESCRIPTION,
        ParameterGroupTranslation::VERSION, ParameterGroupTranslation::ACTIVE,
        ParameterGroupTranslation::ABBREVIATION
    ];

    protected $table = ParameterGroupTranslation::TABLE;

    public function parameter_group()
    {
        return $this->belongsTo(ParameterGroup::class, ParameterGroupTranslation::PARAMETER_GROUP_ID);
    }

    public function language()
    {
        return $this->hasOne(Language::class, CommonFields::ID, ParameterGroupTranslation::LANGUAGE_ID);
    }

}
