<?php
namespace App\Http\Traits;

use App\Models\Student;
use Carbon\Carbon;

trait Statistics {

//    public $Model;


    /**
     * declare columns to use in statistics data
     *
     * @return string[]
     */
    protected function statistics_columns()
    {
        return [];
    }


    /**
     * get data changes percentage
     *
     * @param $new
     * @param $old
     * @return float|int
     */
    private function get_percent($new, $old) {
        return ($new - $old) / ($old > 0 ? $old : 1) * 100;
    }


    /**
     * get statistics of a model by two Carbon date time
     *
     * @param $query
     * @param Carbon $from
     * @param Carbon $to
     * @return object
     */
    public function scopeStatistics($query, Carbon $from, Carbon $to)
    {
        $this_period = $this->Model::whereBetween('created_at', [$from, $to]);
        $last_period = $this->Model::whereBetween('created_at', [$to->diffAsCarbonInterval($from), $from]);

        $days = [];
        $to->subDay()->diffInDaysFiltered(function ($day) use (&$days) {
            $day_period = $this->Model::whereBetween('created_at', [$day, $day->copy()->addDay()]);
            return $days[] = $day_period->count();
        }, $from);

        $data = [
            'new' => $this_period->count(),
            'new_diff_percent' => $this->get_percent($this_period->count(), $last_period->count()),
            'daily' => $days
        ];

        foreach ($this->statistics_columns() as $column) {
            $data[$column] = $this_period->where($column, true)->count();
            $data[$column.'_diff'] = $this_period->where($column, true)->count() - $last_period->where('vip', true)->count();
            $data[$column.'_diff_percent'] = $this->get_percent($this_period->where('vip', true)->count(), $last_period->where('vip', true)->count());
        }

        return (object) $data;
    }
}
