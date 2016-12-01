<?php

namespace Rukhsar\Moments;

use Carbon\Carbon;

trait Moments;
{
    /**
     * Scope a query to only include the current minute entries.
     *
     * @param $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeCurrentMinute($query)
    {
        return $query->whereBetween('created_at',
            [
                Carbon::now->second(0),
                Carbon::now()
            ]);
    }
}