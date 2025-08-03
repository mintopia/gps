<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * @property int $id
 * @property string $provider_type
 * @property string $provider_id
 * @property string $name
 * @property string $code
 * @property string|null $description
 * @property \App\Enums\SettingType $type
 * @property int $encrypted
 * @property string|null $validation
 * @property mixed|null $value
 * @property int $order
 * @property \Carbon\CarbonImmutable|null $created_at
 * @property \Carbon\CarbonImmutable|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $provider
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProviderSetting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProviderSetting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProviderSetting ordered(string $direction = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProviderSetting query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProviderSetting whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProviderSetting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProviderSetting whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProviderSetting whereEncrypted($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProviderSetting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProviderSetting whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProviderSetting whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProviderSetting whereProviderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProviderSetting whereProviderType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProviderSetting whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProviderSetting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProviderSetting whereValidation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProviderSetting whereValue($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperProviderSetting {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $code
 * @property string $name
 * @property \Carbon\CarbonImmutable|null $created_at
 * @property \Carbon\CarbonImmutable|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperRole {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $code
 * @property string $name
 * @property string|null $description
 * @property int $encrypted
 * @property int $hidden
 * @property mixed|null $value
 * @property string|null $validation
 * @property \App\Enums\SettingType $type
 * @property int $order
 * @property \Carbon\CarbonImmutable|null $created_at
 * @property \Carbon\CarbonImmutable|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Setting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Setting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Setting ordered(string $direction = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Setting query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Setting whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Setting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Setting whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Setting whereEncrypted($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Setting whereHidden($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Setting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Setting whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Setting whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Setting whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Setting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Setting whereValidation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Setting whereValue($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperSetting {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $user_id
 * @property string|null $social_provider_id
 * @property string|null $external_id
 * @property string|null $name
 * @property string|null $avatar_url
 * @property string|null $email
 * @property string|null $access_token
 * @property string|null $refresh_token
 * @property string|null $access_token_expires_at
 * @property \Carbon\CarbonImmutable|null $created_at
 * @property \Carbon\CarbonImmutable|null $updated_at
 * @property-read \App\Models\SocialProvider|null $provider
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SocialAccount newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SocialAccount newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SocialAccount query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SocialAccount whereAccessToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SocialAccount whereAccessTokenExpiresAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SocialAccount whereAvatarUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SocialAccount whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SocialAccount whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SocialAccount whereExternalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SocialAccount whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SocialAccount whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SocialAccount whereRefreshToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SocialAccount whereSocialProviderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SocialAccount whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SocialAccount whereUserId($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperSocialAccount {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $code
 * @property string $provider_class
 * @property int $supports_auth
 * @property int $enabled
 * @property int $auth_enabled
 * @property int $can_be_renamed
 * @property \Carbon\CarbonImmutable|null $created_at
 * @property \Carbon\CarbonImmutable|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\SocialAccount> $accounts
 * @property-read int|null $accounts_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ProviderSetting> $settings
 * @property-read int|null $settings_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SocialProvider newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SocialProvider newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SocialProvider query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SocialProvider whereAuthEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SocialProvider whereCanBeRenamed($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SocialProvider whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SocialProvider whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SocialProvider whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SocialProvider whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SocialProvider whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SocialProvider whereProviderClass($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SocialProvider whereSupportsAuth($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SocialProvider whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperSocialProvider {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $code
 * @property int $readonly
 * @property int $active
 * @property string $primary
 * @property int $dark_mode
 * @property string $nav_background
 * @property string|null $css
 * @property \Carbon\CarbonImmutable|null $created_at
 * @property \Carbon\CarbonImmutable|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Theme newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Theme newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Theme query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Theme whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Theme whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Theme whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Theme whereCss($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Theme whereDarkMode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Theme whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Theme whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Theme whereNavBackground($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Theme wherePrimary($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Theme whereReadonly($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Theme whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperTheme {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $user_id
 * @property string|null $name
 * @property string|null $description
 * @property \Carbon\CarbonImmutable|null $created_at
 * @property \Carbon\CarbonImmutable|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Track newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Track newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Track query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Track whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Track whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Track whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Track whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Track whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Track whereUserId($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperTrack {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $nickname
 * @property string|null $avatar
 * @property \Carbon\CarbonImmutable|null $terms_agreed_at
 * @property int $first_login
 * @property \Carbon\CarbonImmutable|null $last_login
 * @property int $suspended
 * @property \Carbon\CarbonImmutable|null $created_at
 * @property \Carbon\CarbonImmutable|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\SocialAccount> $accounts
 * @property-read int|null $accounts_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Role> $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereFirstLogin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereLastLogin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereNickname($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereSuspended($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereTermsAgreedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperUser {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $track_id
 * @property float $latitude
 * @property float $longitude
 * @property string $date
 * @property float $speed
 * @property float $course
 * @property float $altitude
 * @property int $satellites
 * @property float $hdop
 * @property \Carbon\CarbonImmutable|null $created_at
 * @property \Carbon\CarbonImmutable|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Waypoint newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Waypoint newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Waypoint query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Waypoint whereAltitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Waypoint whereCourse($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Waypoint whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Waypoint whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Waypoint whereHdop($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Waypoint whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Waypoint whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Waypoint whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Waypoint whereSatellites($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Waypoint whereSpeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Waypoint whereTrackId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Waypoint whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperWaypoint {}
}

