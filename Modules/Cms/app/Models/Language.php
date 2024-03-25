<?php

namespace Modules\Cms\app\Models;

use App\Models\User;
use App\Util\CommonFields;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Cms\Database\factories\LanguageFactory;

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
