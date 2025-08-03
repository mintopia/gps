<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @mixin IdeHelperWaypoint
 */
class Waypoint extends Model
{
    use HasUlids;

    public function track(): BelongsTo
    {
        return $this->belongsTo(Track::class);
    }
}
