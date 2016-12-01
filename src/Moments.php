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

    /**
     * Only include the current week records from model.
     *
     * @param $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeCurrentWeek($query)
    {
        return $query->whereBetween('created_at',
            [
                Carbon::now()->startOfWeek(),
                Carbon::now()
            ]
        );
    }

    /**
     * Only include the last week records from model.
     *
     * @param $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeLastWeek($query)
    {
        return $query->whereBetween('created_at',
            [
                Carbon::now()->subWeek()->startOfWeek(),
                Carbon::now()->subWeek()->endOfWeek()
            ]
        );
    }

    /**
     * Only include the current month records from model.
     *
     * @param $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeCurrentMonth($query)
    {
        return $query->whereBetween('created_at',
            [
                Carbon::now()->startOfMonth(),
                Carbon::now()
            ]
        );
    }

    /**
     * Only include the last month records from model.
     *
     * @param $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeLastMonth($query)
    {
        return $query->whereBetween('created_at',
            [
                Carbon::now()->subMonth()->startOfMonth(),
                Carbon::now()->subMonth()->endOfMonth()
            ]
        );
    }

    /**
     * Only include the current year records from model.
     *
     * @param $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeCurrentYear($query)
    {
        return $query->whereBetween('created_at',
            [
                Carbon::now()->startOfYear(),
                Carbon::now()
            ]
        );
    }

    /**
     * Only include the last year records from model.
     *
     * @param $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeLastYear($query)
    {
        return $query->whereBetween('created_at',
            [
                Carbon::now()->subYear()->startOfYear(),
                Carbon::now()->subYear()->endOfYear()
            ]
        );
    }

    /**
     * Only include the last x seconds records from model.
     *
     * @param $query
     * @param int $countSeconds
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeLastSeconds($query, int $countSeconds)
    {
        return $query->whereBetween('created_at',
            [
                Carbon::now()->subSeconds($countSeconds),
                Carbon::now()
            ]
        );
    }

    /**
     * Only include the last x minutes records from model.
     *
     * @param $query
     * @param int $countMinutes
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeLastMinutes($query, int $countMinutes)
    {
        return $query->whereBetween('created_at',
            [
                Carbon::now()->subMinutes($countMinutes)->second(0),
                Carbon::now()
            ]
        );
    }

    /**
     * Only include the last x hours records from model.
     *
     * @param $query
     * @param int $countHours
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeLastHours($query, int $countHours)
    {
        return $query->whereBetween('created_at',
            [
                Carbon::now()->subHours($countHours)->minute(0),
                Carbon::now()
            ]
        );
    }

    /**
     * Only include the last x days records from model.
     *
     * @param $query
     * @param int $countDays
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeLastDays($query, int $countDays)
    {
        return $query->whereBetween('created_at',
            [
                Carbon::now()->subDays($countDays)->startOfDay(),
                Carbon::now()
            ]
        );
    }

    /**
     * Only include the last x weeks records from model.
     *
     * @param $query
     * @param int $countWeeks
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeLastWeeks($query, int $countWeeks)
    {
        return $query->whereBetween('created_at',
            [
                Carbon::now()->subWeeks($countWeeks)->startOfWeek(),
                Carbon::now()
            ]
        );
    }

    /**
     * Only include the last x months records from model.
     *
     * @param $query
     * @param int $countMonths
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeLastMonths($query, int $countMonths)
    {
        return $query->whereBetween('created_at',
            [
                Carbon::now()->subMonths($countMonths)->startOfMonth(),
                Carbon::now()
            ]
        );
    }

    /**
     * Only include the last x years records from model.
     *
     * @param $query
     * @param int $countYears
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeLastYears($query, int $countYears)
    {
        return $query->whereBetween('created_at',
            [
                Carbon::now()->subYears($countYears)->startOfYear(),
                Carbon::now()
            ]
        );
    }

}