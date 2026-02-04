<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'phone',
        'domain',
        'hosting_expires_at',
        'notes',
        'profile_photo_path',
        'stripe_account_id',
        'stripe_onboarding_completed',
        'stripe_commission_rate',
        'hero_image',
        'promotion_text',
        'special_features',
        'api_key',
        'api_enabled',
        'api_rate_limit',
        'api_key_generated_at',
    ];

    public function businessClients()
    {
        return $this->hasMany(BusinessClient::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    /**
     * Check if user has a specific feature enabled.
     */
    public function hasFeature(string $feature): bool
    {
        $features = $this->special_features ?? [];
        return isset($features[$feature]) && $features[$feature] === true;
    }

    /**
     * Enable a specific feature for the user.
     */
    public function enableFeature(string $feature): void
    {
        $features = $this->special_features ?? [];
        $features[$feature] = true;
        $this->special_features = $features;
        $this->save();
    }

    /**
     * Disable a specific feature for the user.
     */
    public function disableFeature(string $feature): void
    {
        $features = $this->special_features ?? [];
        $features[$feature] = false;
        $this->special_features = $features;
        $this->save();
    }

    /**
     * Toggle a specific feature for the user.
     */
    public function toggleFeature(string $feature): bool
    {
        if ($this->hasFeature($feature)) {
            $this->disableFeature($feature);
            return false;
        } else {
            $this->enableFeature($feature);
            return true;
        }
    }

    /**
     * Get all enabled features.
     */
    public function getEnabledFeatures(): array
    {
        $features = $this->special_features ?? [];
        return array_keys(array_filter($features, fn($v) => $v === true));
    }

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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'special_features' => 'array',
    ];
}
