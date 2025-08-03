<?php

namespace App\Models;

use App\Models\Traits\ToString;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * @mixin IdeHelperUser
 */
class User extends Authenticatable
{
    use HasApiTokens;
    use Notifiable;
    use ToString;
    use HasUlids;

    protected $casts = [
        'terms_agreed_at' => 'datetime',
        'last_login' => 'datetime',
        'status_updated_at' => 'datetime',
        'status' => 'object',
    ];

    protected ?string $email = null;
    public function accounts(): HasMany
    {
        return $this->hasMany(SocialAccount::class);
    }

    public function hasRole(string|Role $role): bool
    {
        if ($role instanceof Role) {
            $role = $role->code;
        }
        return (bool)$this->roles()->whereCode($role)->count();
    }

    public function getEmail(): ?string
    {
        if ($this->email !== null) {
            return $this->email;
        }
        $linked = $this->accounts()->whereNotNull('email')->first();
        if ($linked) {
            $this->email = $linked->email;
            return $this->email;
        }
        return null;
    }

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class);
    }

    public function tracks(): HasMany
    {
        return $this->hasMany(Track::class);
    }

    public function avatarUrl(): string
    {
        foreach ($this->accounts as $acc) {
            if ($acc->avatar_url) {
                return $acc->avatar_url;
            }
        }
        if ($email = $this->getEmail()) {
            $toHash = $email;
        } else {
            $toHash = $this->nickname;
        }
        $hash = hash('sha256', $toHash);
        return "https://gravatar.com/avatar/{$hash}?d=retro";
    }

    protected function toStringName(): string
    {
        return $this->nickname;
    }
}
