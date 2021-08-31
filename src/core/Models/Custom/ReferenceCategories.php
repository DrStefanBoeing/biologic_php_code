<?php

namespace Biologic\Core\Models\Custom;

use Illuminate\Database\Capsule\Manager as QB;
use Illuminate\Database\Query\Builder;

class ReferenceCategories
{

    private $qBuilder;
    private $search;

    public function __construct()
    {
        $this->qBuilder = new Builder(QB::connection('reference_categories'));
    }

    public function appendCats($cat_ids, $q_gene_name)
    {
        $cat_id_count = count($cat_ids);
        for ($i = 0; $i < $cat_id_count; $i++) {
            if($i == 0) {
                $this->appendCatQ($this->qBuilder->from($cat_ids[$i]), $q_gene_name);
            } else {
                $this->appendCatQ($this->qBuilder->union($cat_ids[$i]), $q_gene_name);
            }
        }
    }

    public function appendCatQ(Builder $q_builder, $q_gene_name)
    {
        $primary_gene_symbol = setting('primary_gene_symbol');

        $q_builder->distinct()
            ->select($primary_gene_symbol, 'cat_id', 'cat_name', 'cat_type', 'data_source', 'comments_1', 'comments_2', 'cat_item_size')
            ->where(function($query) use($primary_gene_symbol, $q_gene_name) {
                $query->where($primary_gene_symbol, 'LIKE', '%;'.$q_gene_name.'%')
                    ->orWhere($primary_gene_symbol, 'LIKE', '%;'.$q_gene_name.';%');
            });

        if(isset($this->search)) {
            // replacing spaces with underscore because of the general format for this column
            $q_builder->where('cat_name', 'LIKE', '%'.str_replace(' ', '_', $this->search).'%')
                ->orWhere('data_source', 'LIKE', '%'.$this->search.'%');
        }

        return $q_builder;
    }

    public function setSearch($search)
    {
        $this->search = $search;
    }

    public function getQBuilder()
    {
        return $this->qBuilder;
    }

}

