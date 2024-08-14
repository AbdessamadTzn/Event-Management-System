<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RSVP extends Model
{
    use HasFactory;
    /**
     * Get the events that owns the RSVP
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function events(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
}
