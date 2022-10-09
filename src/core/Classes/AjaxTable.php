<?php

namespace Biologic\Core\Classes;

use Illuminate\Database\Query\Builder;

/**
 * Class AjaxTable
 *
 * A class to facilitate getting data for use with data table ajax.
 *
 * Transforming data:
 *      pass a function to the class, which will be used to filter and transform the results
 *      of the sql query. Return null if you wish to unset that key from the query results,
 *      and hence avoid sending that data back to the browser.
 *
 * Security notes:
 *      returned row values are escaped to prevent xss (but not the keys)
 *      anything else should be handled before being passed to the class.
 *
 * @package Biologic\Core\Classes
 */
class AjaxTable
{
    const LIMIT = 2500;

    private $queryBuilder;
    private $transform;

    public function __construct(Builder $query_builder)
    {
        $this->queryBuilder = $query_builder;
    }

    /**
     * Set a transform for the returned rows.
     *
     * @param $transform
     * @return $this
     */
    public function setTransform($transform)
    {
        $this->transform = $transform;

        return $this;
    }

    /**
     * Sanitize the row values, and apply any transform we were passed.
     *
     * @param $key
     * @param $value
     * @param $row
     * @return mixed
     */
    private function _applyTransform($key, $value, $row)
    {
        if(isset($this->transform)) {
            $transform = $this->transform;

            return $transform($key, esc($value), $row);
        }

        return esc($value);
    }

    /**
     * Return the rows associated with the DataTable's sql query.
     *
     * @param int $limit
     * @param int $offset
     * @param string $sort
     * @param string $order
     * @return mixed
     */
    public function getRows($limit=10, $offset=0, $sort='', $order='ASC')
    {
        $q_builder = clone $this->queryBuilder;

        if(!empty($sort)) {
            $q_builder->orderBy($sort, $order);
        }

        if($limit > self::LIMIT) {
            $limit = self::LIMIT;
        }

        if($limit > -1) {
            $q_builder->limit($limit);
        }

        if($offset > 0) {
            $q_builder->offset($offset);
        }

        $rows = $q_builder->get();

        $row_count = count($rows);
        for($i = 0; $i < $row_count; $i++) {
            foreach($rows[$i] as $key => $column) {
                $transformed = $this->_applyTransform($key, $column, $rows[$i]);

                // remove rows where we returned null (to allow for the option of hiding returned rows from the response)
                if(is_null($transformed)) {
                    unset($rows[$i]->{$key});
                } else {
                    $rows[$i]->{$key} = $transformed;
                }
            }
        }

        return $rows;
    }

    /**
     * Get the total row count for a query without applying a limit (for pagination).
     *
     * @return int
     */
    public function getTotal()
    {
        $q_builder = clone $this->queryBuilder;

        // takes a while... look at speeding up, maybe by doing the count inside sql
        $result = $q_builder->get()->count();

        return $result;
    }
}

