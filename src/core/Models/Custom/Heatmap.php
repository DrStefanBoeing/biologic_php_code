<?php
namespace Biologic\Core\Models\Custom;

use Biologic\Core\Classes\Request;
use Illuminate\Database\Capsule\Manager as QB;

class Heatmap
{
    private $categories;

    private $qResults;

    // query builder
    private $qBuilder;

    public function __construct($table, $categories)
    {
        $this->categories = $categories;

        $this->qBuilder = QB::table($table)->distinct()->select(setting('primary_gene_symbol'), 'gene_description');

        foreach($categories as $category) {
            $this->qBuilder->addSelect($category);
        }
    }

    public function getQBuilder()
    {
        return $this->qBuilder;
    }

    public function addMinMaxConditions(Request $request)
    {
        $this->qBuilder->where(function($query) use($request) {
            foreach(setting('venn.selection') as $column_key => $selection) {
                if(strtoupper($request->input('join')) == 'OR') {
                    $query->orWhere($column_key, '<=', $request->input($column_key . '_high') ?? $selection['slider_max'])
                        ->orWhere($column_key, '>=', $request->input($column_key . '_low') ?? $selection['slider_min']);
                } else {
                    $query->where($column_key, '<=', $request->input($column_key . '_high') ?? $selection['slider_max'])
                        ->where($column_key, '>=', $request->input($column_key . '_low') ?? $selection['slider_min']);
                }
            }
        });
    }

    public function fetchResults()
    {
        $this->qResults = $this->qBuilder->orderBy('cluster_order', 'DESC')
            ->orderBy(setting('primary_gene_symbol'), 'DESC')->get();
        return $this->qResults;
    }

    public function getXCategories()
    {
        $x_categories = array();
        foreach($this->categories as $raw_x_category) {
            $x_category = str_ireplace("lg2_avg_", "", $raw_x_category);
            $x_category = str_ireplace("contrast_x_", "", $x_category);
            $x_category = str_ireplace("norm_counts_", "", $x_category);
            array_push($x_categories, esc($x_category));
        }

        return json_encode($x_categories);
    }

    public function getYCategories()
    {
        $y_categories = [];

        foreach($this->qResults as $row) {
            array_push($y_categories, esc($row->{setting('primary_gene_symbol')}));
        }

        return json_encode($y_categories);
    }

    public function getSeries()
    {
        $series = [];

        $counter = 0;
        foreach($this->qResults as $row) {
            $i=0;
            foreach($this->categories as $category) {
                array_push($series, [
                    $i, $counter, floatval($row->{$category})
                ]);
                $i++;
            }

            $counter++;
        }

        return json_encode($series);
    }
}


