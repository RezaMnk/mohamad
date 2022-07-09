<?php
namespace App\Http\Traits;

use App\Models\Student;
use Carbon\Carbon;

trait Statistics {

    /**
     * declare columns to use in statistics data
     *
     * @param $rules
     * @return array
     */
    protected function statistics_columns($rules)
    {
        return [
            /*
            'is_vip' => true,                                                                       For Booleans
            'status' => $rules['status'],                                                           For Enums, strings, etc.
            'description' => ['condition' => 'LIKE', '%'. $rules['description'] .'$'],              For Like
            'view_count' => ['condition' => '>=', $rules['view_count']],                            For Coparisons
            'code' => [$rules['code']]                                                              For Multiple data
            */
        ];
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
     * @param array $rules
     * @return object
     */
    public function scopeStatistics($query, Carbon $from, Carbon $to, $rules = [])
    {
        $this_period = static::class::whereBetween('created_at', [$from, $to]);
        $last_period = static::class::whereBetween('created_at', [$to->diffAsCarbonInterval($from), $from]);

        $days = [];
        $to->subDay()->diffInDaysFiltered(function ($day) use (&$days) {
            $day_period = static::class::whereBetween('created_at', [$day, $day->copy()->addDay()]);
            return $days[] = $day_period->count();
        }, $from);

        $data = [
            'new' => $this_period->count(),
            'new_diff_percent' => $this->get_percent($this_period->count(), $last_period->count()),
            'daily' => $days,
            'increased' => $this_period->count() > $last_period->count(),
        ];

        foreach ($this->statistics_columns($rules) as $column => $value_rule) {

            if (is_bool($value_rule) or !is_array($value_rule)) {

                $data[$column] = $this_period->where($column, true)->count();
                $data[$column.'_diff'] = $this_period->where($column, true)->count() - $last_period->where($column, true)->count();
                $data[$column.'_diff_percent'] = $this->get_percent($this_period->where($column, true)->count(), $last_period->where($column, true)->count());
                $data[$column.'_increased'] = $this_period->where($column, true)->count() > $last_period->where($column, true)->count();
            }

            elseif (isset($value_rule['condition'])) {

                $data[$column] = $this_period->where($column, $value_rule['condition'], $value_rule[1])->count();
                $data[$column.'_diff'] = $this_period->where($column, $value_rule['condition'], $value_rule[1])->count() - $last_period->where($column, $value_rule['condition'], $value_rule[1])->count();
                $data[$column.'_diff_percent'] = $this->get_percent($this_period->where($column, $value_rule['condition'], $value_rule[1])->count(), $last_period->where($column, $value_rule['condition'], $value_rule[1])->count());
                $data[$column.'_increased'] = $this_period->where($column, $value_rule['condition'], $value_rule[1])->count() > $last_period->where($column, $value_rule['condition'], $value_rule[1])->count();
            }

            else {

                $data[$column] = $this_period->whereIn($column, $value_rule)->count();
                $data[$column.'_diff'] = $this_period->whereIn($column, $value_rule)->count() - $last_period->whereIn($column, $value_rule)->count();
                $data[$column.'_diff_percent'] = $this->get_percent($this_period->whereIn($column, $value_rule)->count(), $last_period->whereIn($column, $value_rule)->count());
                $data[$column.'_increased'] = $this_period->whereIn($column, $value_rule)->count() > $last_period->whereIn($column, $value_rule)->count();
            }

        }

        return (object) $data;
    }
}
