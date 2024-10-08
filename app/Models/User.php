<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
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

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

    // scope function
    public function scopeNotAdmin($q)
    {
        $q->whereHas("role", function ($query) {
            $query->whereNotIn('slug', ['admin', 'developer']);
        });
    }

    public function scopeAstrologer($q)
    {
        $q->whereHas("role", function ($query) {
            $query->where('slug', 'astrologer');
        });
    }

    public function scopeFilterOn($query)
    {
        if (request('search')) {
            $query->where('name', 'like', '%' . request('search') . '%');
        }

        if (request('role')) {
            $query->where('role_id', request('role'));
        }
    }

    public function scopeHavePermissions($query, $perms)
    {
        $query->whereHas('role', function ($q) use ($perms) {
            $q->whereHas('permissions', function ($q) use ($perms) {
                $q->whereIn('slug', $perms);
            });
        });
    }

    // helper function
    public function getRedirectRoute(): string
    {
        return match ((int)$this->role_id) {
            1 => route('admin.dashboard'),
            2 => route('welcome'),
        };
    }
}