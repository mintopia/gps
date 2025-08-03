<?php

namespace App\Models;

use App\Casts\SettingValue;
use App\Enums\SettingType;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

/**
 * @mixin IdeHelperProviderSetting
 */
class ProviderSetting extends Model implements Sortable
{
    use SortableTrait;
    use HasUlids;

    protected $casts = [
        'value' => SettingValue::class,
        'type' => SettingType::class,
    ];

    public function buildSortQuery(): Builder
    {
        return static::query()->where('provider_id', $this->provider_id)->where('provider_type', $this->provider_type);
    }

    public function provider(): MorphTo
    {
        return $this->morphTo();
    }

    public function isRequired(): bool
    {
        return str_contains($this->validation ?? '', 'required');
    }
}
