<?php

namespace Modules\Cms\app\Models;

use App\Util\CommonFields;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Cms\Database\factories\LanguageFactory;
use Modules\Users\app\Models\User;

/**
 * Modules\Cms\app\Models
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property int $default
 * @property int $active
 * @property int $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|Language newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Language newQuery()
 * @method static Builder|Language onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Language query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereDefault($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereUpdatedBy($value)
 * @method static Builder|Language withTrashed()
 * @method static Builder|Language withoutTrashed()
 * @mixin Eloquent
 * @property-read User $createdBy
 * @property-read User|null $deletedBy
 * @property-read User|null $updatedBy
 */
class Language extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */

    public const TABLE = "languages";

    public const NAME = "name";
    public const CODE = "code";
    public const DEFAULT = "default";

    public const ACTIVE = "active";

    protected $fillable = [
        CommonFields::ID, CommonFields::CREATED_BY, CommonFields::UPDATED_BY, CommonFields::DELETED_BY,
        Language::NAME, Language::CODE, Language::DEFAULT, Language::ACTIVE
    ];

    protected $table = Language::TABLE;

    protected static function newFactory(): LanguageFactory
    {
        return LanguageFactory::new();
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, CommonFields::CREATED_BY);
    }

    public function updatedBy()
    {
        return $this->belongsTo(User::class, CommonFields::UPDATED_BY);
    }

    public function deletedBy()
    {
        return $this->belongsTo(User::class, CommonFields::DELETED_BY);
    }

}
