<?php
namespace Biologic\Core\Models\Custom;

use Illuminate\Database\Capsule\Manager as QB;

class GeneTable
{
    private $joinType;

    private $qResults;

    private $qBuilder;

    public function __construct($table, $columns, $join_type='AND')
    {
        $this->joinType = strtoupper($join_type);

        $this->qBuilder = QB::table($table)->distinct()->select(setting('primary_gene_symbol'), 'cluster_order', 'gene_description');

        foreach($columns as $column) {
            $this->qBuilder->addSelect($column);
        }
    }

    public function getQBuilder()
    {
        return $this->qBuilder;
    }

    public function addHighLowClauses($selection, $data)
    {
        foreach($selection as $key => $value) {
            $high = $key."_high";
            $low = $key."_low";
            if(isset($data[$high])) {
                if($this->joinType === 'OR') {
                    $this->qBuilder->orWhere(function($query) use($key, $data, $high, $low) {
                        $query->where($key, '<=', $data[$high])
                            ->where($key, '>=', $data[$low]);
                    });
                } else {
                    $this->qBuilder->where(function($query) use($key, $data, $high, $low) {
                        $query->where($key, '<=', $data[$high])
                            ->where($key, '>=', $data[$low]);
                    });
                }
            }
        }
    }

    public function selectedGene($selected, $exact)
    {
        if(isset($selected)) {
            if($exact) {
                if($this->joinType === 'OR') {
                    $this->qBuilder->orWhere(setting('primary_gene_symbol'), $selected);
                } else {
                    $this->qBuilder->where(setting('primary_gene_symbol'), $selected);
                }
            } else {
                if($this->joinType === 'OR') {
                    $this->qBuilder->orWhere(setting('primary_gene_symbol'), 'LIKE', '%'.$selected.'%');
                } else {
                    $this->qBuilder->where(setting('primary_gene_symbol'), 'LIKE', '%'.$selected.'%');
                }
            }
        }
    }

    public function inCategory($category_id)
    {
        $primary_gene_symbol = setting('primary_gene_symbol');

        $dbtable = explode("__", $category_id);
        $dbtable = $dbtable[0];

        $ref_cats = QB::connection('reference_categories')->table($dbtable)->distinct()->select($primary_gene_symbol, 'cat_name')
            ->where('cat_id', $category_id)->orderBy($primary_gene_symbol, 'ASC')->first();

        $cat_gene_ids = explode(";", $ref_cats->{$primary_gene_symbol});

        ## If the reference category is a PTM category it will contain geneName-T123 annotation ##$sql_query
        $n = count($cat_gene_ids) - 1;
        for ($s=0; $s < $n; $s++){
            $cat_gene_ids[$s] =  explode("-", $cat_gene_ids[$s])[0];
        }

        $gene_list = [];
        foreach($cat_gene_ids as $cat_gene_id) {
            if ($cat_gene_id != "") {
                $cat_gene_id = explode("(", $cat_gene_id)[0];
                array_push($gene_list, $cat_gene_id);
            }
        }
        $this->qBuilder->whereIn($primary_gene_symbol, $gene_list);
    }

    public function search($search)
    {
        $this->qBuilder->where(function($query) use($search) {
            $query->orWhere(setting('primary_gene_symbol'), 'LIKE', '%'.$search.'%')
                ->orWhere('gene_description', 'LIKE', '%'.$search.'%');
        });
    }
}
