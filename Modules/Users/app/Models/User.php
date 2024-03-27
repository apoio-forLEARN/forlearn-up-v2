<?php

namespace Modules\Users\app\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

/**
 *  Modules\Users\app\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read DatabaseNotificationCollection|DatabaseNotification[] $notifications
 * @property-read Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read Collection|\Spatie\Permission\Models\Role[] $roles
 * @method static bool|null forceDelete()
 * @method static Builder|User newModelQuery()
 * @method static Builder|User newQuery()
 * @method static \Illuminate\Database\Query\Builder|User onlyTrashed()
 * @method static Builder|User permission($permissions)
 * @method static Builder|User query()
 * @method static bool|null restore()
 * @method static Builder|User role($roles, $guard = null)
 * @method static Builder|User whereCreatedAt($value)
 * @method static Builder|User whereDeletedAt($value)
 * @method static Builder|User whereEmail($value)
 * @method static Builder|User whereId($value)
 * @method static Builder|User whereName($value)
 * @method static Builder|User wherePassword($value)
 * @method static Builder|User whereRememberToken($value)
 * @method static Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|User withTrashed()
 * @method static \Illuminate\Database\Query\Builder|User withoutTrashed()
 * @mixin Eloquent
 * @property-read Collection|UserParameter[] $parameters
 * @property string|null $image
 * @method static Builder|User whereImage($value)
 * @property-read int|null $notifications_count
 * @property-read int|null $parameters_count
 * @property-read int|null $permissions_count
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Modules\GA\Models\Course[] $courses
 * @property-read int|null $courses_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Modules\GA\Models\Discipline[] $disciplines
 * @property-read int|null $disciplines_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Modules\GA\Models\Classes[] $classes
 * @property-read int|null $classes_count
 * @property-read \Modules\Users\app\Models\UserCandidate $candidate
 * @property-read \Modules\Users\app\Models\Matriculation $matriculation
 * @property int $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Users\app\Models\User whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Users\app\Models\User whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Users\app\Models\User whereUpdatedBy($value)
 */
class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    public const TABLE = "users";

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $table = User::TABLE;

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
