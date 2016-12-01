<?php

namespace Rukhsar\Moments;

use Carbon\Carbon;

trait Moments
{
    /**
     * Only include the current minute records from model.
     *
     * @param $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeCurrentMinute($query)
    {
        return $query->whereBetween('created_at',
            [
                Carbon::now()->second(0),
                Carbon::now()
            ]
        );
    }

    /**
     * Only include the last minute records from model.
     *
     * @param $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopelastMinute($query)
    {
        return $query->whereBetween('created_at',
            [
                Carbon::now()->subMinute()->second(0),
                Carbon::now()->second(0)
            ]
        );
    }

    /**
     * Only include the current hour records from model.
     *
     * @param $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeCurrentHour($query)
    {
        return $query->whereBetween('created_at',
            [
                Carbon::now()->minute(0)->second(0),
                Carbon::now()
            ]
        );
    }

    /**
     * Only include the last hour records from model.
     *
     * @param $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeLastHour($query)
    {
        return $query->whereBetween('created_at',
            [
                Carbon::now()->subHour()->minute(0)->second(0),
                Carbon::now()->minute(0)->second(0)
            ]
        );
    }

    /**
     * Only include the current day records from model.
     *
     * @param $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeCurrentDay($query)
    {
        return $query->whereBetween('created_at',
            [
                Carbon::now()->startOfDay(),
                Carbon::now()
            ]
        );
    }

    /**
     * Only include the last day records from model.
     *
     * @param $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeLastDay($query)
    {
        return $query->whereBetween('created_at',
            [
                Carbon::now()->subDay()->startOfDay(),
                Carbon::now()->startOfDay()
            ]
        );
    }
}