<?php

return array(
    'lab' => array(
        'name' => 'Gould DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'agl_data',
    'data_db' => array(
            'cat_table_name' => 'agl315_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'p315_sc_rna_seq_table',
    'primary_gene_symbol' => 'hgnc_symbol',
    'ptm_display_column' => '',

    'gene_cat_suggestion' => array(
        'dbname' => 'reference_categories',
        'dbtable' => 'mysigdb_c2_1329_canonical_pathways',
    ),

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged Expr',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Avg_lg10_Expr_C0_Ctrl' => array(
            'color' => '#F8766D',
            'name' => 'Avg lg10 Expr C0 Ctrl'
        ),
        'norm_counts_Avg_lg10_Expr_C0_Prad' => array(
            'color' => '#F8766D',
            'name' => 'Avg lg10 Expr C0 Prad'
        ),
        'norm_counts_Avg_lg10_Expr_C1_Ctrl' => array(
            'color' => '#D39200',
            'name' => 'Avg lg10 Expr C1 Ctrl'
        ),
        'norm_counts_Avg_lg10_Expr_C1_Prad' => array(
            'color' => '#D39200',
            'name' => 'Avg lg10 Expr C1 Prad'
        ),
        'norm_counts_Avg_lg10_Expr_C2_Ctrl' => array(
            'color' => '#93AA00',
            'name' => 'Avg lg10 Expr C2 Ctrl'
        ),
        'norm_counts_Avg_lg10_Expr_C2_Prad' => array(
            'color' => '#93AA00',
            'name' => 'Avg lg10 Expr C2 Prad'
        ),
        'norm_counts_Avg_lg10_Expr_C3_Ctrl' => array(
            'color' => '#00BA38',
            'name' => 'Avg lg10 Expr C3 Ctrl'
        ),
        'norm_counts_Avg_lg10_Expr_C3_Prad' => array(
            'color' => '#00BA38',
            'name' => 'Avg lg10 Expr C3 Prad'
        ),
        'norm_counts_Avg_lg10_Expr_C4_Ctrl' => array(
            'color' => '#00C19F',
            'name' => 'Avg lg10 Expr C4 Ctrl'
        ),
        'norm_counts_Avg_lg10_Expr_C4_Prad' => array(
            'color' => '#00C19F',
            'name' => 'Avg lg10 Expr C4 Prad'
        ),
        'norm_counts_Avg_lg10_Expr_C5_Ctrl' => array(
            'color' => '#00B9E3',
            'name' => 'Avg lg10 Expr C5 Ctrl'
        ),
        'norm_counts_Avg_lg10_Expr_C5_Prad' => array(
            'color' => '#00B9E3',
            'name' => 'Avg lg10 Expr C5 Prad'
        ),
        'norm_counts_Avg_lg10_Expr_C6_Ctrl' => array(
            'color' => '#619CFF',
            'name' => 'Avg lg10 Expr C6 Ctrl'
        ),
        'norm_counts_Avg_lg10_Expr_C6_Prad' => array(
            'color' => '#619CFF',
            'name' => 'Avg lg10 Expr C6 Prad'
        ),
        'norm_counts_Avg_lg10_Expr_C7_Ctrl' => array(
            'color' => '#DB72FB',
            'name' => 'Avg lg10 Expr C7 Ctrl'
        ),
        'norm_counts_Avg_lg10_Expr_C7_Prad' => array(
            'color' => '#DB72FB',
            'name' => 'Avg lg10 Expr C7 Prad'
        ),
        'norm_counts_Avg_lg10_Expr_C8_Ctrl' => array(
            'color' => '#FF61C3',
            'name' => 'Avg lg10 Expr C8 Ctrl'
        ),
        'norm_counts_Avg_lg10_Expr_C8_Prad' => array(
            'color' => '#FF61C3',
            'name' => 'Avg lg10 Expr C8 Prad'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'lg10 Expr for all Samples',
        'sidelabel' => 'lg10 Expr'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Avg_log10_Expr_Sc_C0_Ctrl','lg2_avg_Avg_log10_Expr_Sc_C0_Prad','lg2_avg_Avg_log10_Expr_Sc_C1_Ctrl','lg2_avg_Avg_log10_Expr_Sc_C1_Prad','lg2_avg_Avg_log10_Expr_Sc_C2_Ctrl','lg2_avg_Avg_log10_Expr_Sc_C2_Prad','lg2_avg_Avg_log10_Expr_Sc_C3_Ctrl','lg2_avg_Avg_log10_Expr_Sc_C3_Prad','lg2_avg_Avg_log10_Expr_Sc_C4_Ctrl','lg2_avg_Avg_log10_Expr_Sc_C4_Prad','lg2_avg_Avg_log10_Expr_Sc_C5_Ctrl','lg2_avg_Avg_log10_Expr_Sc_C5_Prad','lg2_avg_Avg_log10_Expr_Sc_C6_Ctrl','lg2_avg_Avg_log10_Expr_Sc_C6_Prad','lg2_avg_Avg_log10_Expr_Sc_C7_Ctrl','lg2_avg_Avg_log10_Expr_Sc_C7_Prad','lg2_avg_Avg_log10_Expr_Sc_C8_Ctrl','lg2_avg_Avg_log10_Expr_Sc_C8_Prad'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
            'name' => 'logFC Expressed in N Percent Cells',
            'slider_min' => 0,
            'slider_max' => 100,
            'default_low' => 0,
            'default_high' => 100
        )
    )
    ),

    // FeatureView Parameters
    'featureViewParams' => array(
        'geneExprTb' => 'agl315_gene_expr_tb',
        'coordTb' => 'p315_PCA',
        'geneAcTb' => 'agl315_geneID_tb',
        'defaultGene' => 'TOP2A',
        'default_x_axis' => 'UMAP_1',
        'default_y_axis' => 'UMAP_2',
        'splitOptions' => array('None','sampleID', 'treatment')
    ),

    // PCA Parameters
    'pca' => 'p315_PCA',

    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_X_logFC_Expressed_in_N_Percent_Cells',
        'default-y' => 'norm_counts_Avg_lg10_Expr_C0_Ctrl',
        'selection' => array(
            'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
                'name' => 'logFC Expressed in N Percent Cells'
            ),
            'add_counts_Avg_log10_Expr_Ctrl' => array(
                'name' => 'Avg log10 Expr Ctrl'
            ),
            'add_counts_Avg_log10_Expr_Prad' => array(
                'name' => 'Avg log10 Expr Prad'
            ),
            'add_counts_PCA_Dim_1_Loadings' => array(
                'name' => 'PCA Dim 1 Loadings'
            ),
            'add_counts_PCA_Dim_2_Loadings' => array(
                'name' => 'PCA Dim 2 Loadings'
            ),
            'add_counts_PCA_Dim_3_Loadings' => array(
                'name' => 'PCA Dim 3 Loadings'
            ),
            'add_counts_PCA_Dim_4_Loadings' => array(
                'name' => 'PCA Dim 4 Loadings'
            ),
            'add_counts_PCA_Dim_5_Loadings' => array(
                'name' => 'PCA Dim 5 Loadings'
            ),
            'add_counts_PCA_Dim_6_Loadings' => array(
                'name' => 'PCA Dim 6 Loadings'
            ),
            'add_counts_PCA_Dim_7_Loadings' => array(
                'name' => 'PCA Dim 7 Loadings'
            ),
            'add_counts_PCA_Dim_8_Loadings' => array(
                'name' => 'PCA Dim 8 Loadings'
            ),
            'add_counts_PCA_Dim_9_Loadings' => array(
                'name' => 'PCA Dim 9 Loadings'
            ),
            'add_counts_PCA_Dim_10_Loadings' => array(
                'name' => 'PCA Dim 10 Loadings'
            ),
            'add_counts_PCA_Dim_11_Loadings' => array(
                'name' => 'PCA Dim 11 Loadings'
            ),
            'add_counts_PCA_Dim_12_Loadings' => array(
                'name' => 'PCA Dim 12 Loadings'
            ),
            'add_counts_PCA_Dim_13_Loadings' => array(
                'name' => 'PCA Dim 13 Loadings'
            ),
            'add_counts_PCA_Dim_14_Loadings' => array(
                'name' => 'PCA Dim 14 Loadings'
            ),
            'add_counts_PCA_Dim_15_Loadings' => array(
                'name' => 'PCA Dim 15 Loadings'
            ),
            'add_counts_PCA_Dim_16_Loadings' => array(
                'name' => 'PCA Dim 16 Loadings'
            ),
            'add_counts_PCA_Dim_17_Loadings' => array(
                'name' => 'PCA Dim 17 Loadings'
            ),
            'add_counts_PCA_Dim_18_Loadings' => array(
                'name' => 'PCA Dim 18 Loadings'
            ),
            'add_counts_PCA_Dim_19_Loadings' => array(
                'name' => 'PCA Dim 19 Loadings'
            ),
            'add_counts_PCA_Dim_20_Loadings' => array(
                'name' => 'PCA Dim 20 Loadings'
            ),
            'norm_counts_Avg_lg10_Expr_C0_Ctrl' => array(
                'name' => 's Avg lg10 Expr C0 Ctrl'
            ),
            'norm_counts_Avg_lg10_Expr_C0_Prad' => array(
                'name' => 's Avg lg10 Expr C0 Prad'
            ),
            'norm_counts_Avg_lg10_Expr_C1_Ctrl' => array(
                'name' => 's Avg lg10 Expr C1 Ctrl'
            ),
            'norm_counts_Avg_lg10_Expr_C1_Prad' => array(
                'name' => 's Avg lg10 Expr C1 Prad'
            ),
            'norm_counts_Avg_lg10_Expr_C2_Ctrl' => array(
                'name' => 's Avg lg10 Expr C2 Ctrl'
            ),
            'norm_counts_Avg_lg10_Expr_C2_Prad' => array(
                'name' => 's Avg lg10 Expr C2 Prad'
            ),
            'norm_counts_Avg_lg10_Expr_C3_Ctrl' => array(
                'name' => 's Avg lg10 Expr C3 Ctrl'
            ),
            'norm_counts_Avg_lg10_Expr_C3_Prad' => array(
                'name' => 's Avg lg10 Expr C3 Prad'
            ),
            'norm_counts_Avg_lg10_Expr_C4_Ctrl' => array(
                'name' => 's Avg lg10 Expr C4 Ctrl'
            ),
            'norm_counts_Avg_lg10_Expr_C4_Prad' => array(
                'name' => 's Avg lg10 Expr C4 Prad'
            ),
            'norm_counts_Avg_lg10_Expr_C5_Ctrl' => array(
                'name' => 's Avg lg10 Expr C5 Ctrl'
            ),
            'norm_counts_Avg_lg10_Expr_C5_Prad' => array(
                'name' => 's Avg lg10 Expr C5 Prad'
            ),
            'norm_counts_Avg_lg10_Expr_C6_Ctrl' => array(
                'name' => 's Avg lg10 Expr C6 Ctrl'
            ),
            'norm_counts_Avg_lg10_Expr_C6_Prad' => array(
                'name' => 's Avg lg10 Expr C6 Prad'
            ),
            'norm_counts_Avg_lg10_Expr_C7_Ctrl' => array(
                'name' => 's Avg lg10 Expr C7 Ctrl'
            ),
            'norm_counts_Avg_lg10_Expr_C7_Prad' => array(
                'name' => 's Avg lg10 Expr C7 Prad'
            ),
            'norm_counts_Avg_lg10_Expr_C8_Ctrl' => array(
                'name' => 's Avg lg10 Expr C8 Ctrl'
            ),
            'norm_counts_Avg_lg10_Expr_C8_Prad' => array(
                'name' => 's Avg lg10 Expr C8 Prad'
            ),
            'add_counts_PCA_Dim_1_Loadings' => array(
                'name' => 'PCA Dim 1 Loadings'
            ),
            'add_counts_PCA_Dim_2_Loadings' => array(
                'name' => 'PCA Dim 2 Loadings'
            ),
            'add_counts_PCA_Dim_3_Loadings' => array(
                'name' => 'PCA Dim 3 Loadings'
            ),
            'add_counts_PCA_Dim_4_Loadings' => array(
                'name' => 'PCA Dim 4 Loadings'
            ),
            'add_counts_PCA_Dim_5_Loadings' => array(
                'name' => 'PCA Dim 5 Loadings'
            ),
            'add_counts_PCA_Dim_6_Loadings' => array(
                'name' => 'PCA Dim 6 Loadings'
            ),
            'add_counts_PCA_Dim_7_Loadings' => array(
                'name' => 'PCA Dim 7 Loadings'
            ),
            'add_counts_PCA_Dim_8_Loadings' => array(
                'name' => 'PCA Dim 8 Loadings'
            ),
            'add_counts_PCA_Dim_9_Loadings' => array(
                'name' => 'PCA Dim 9 Loadings'
            ),
            'add_counts_PCA_Dim_10_Loadings' => array(
                'name' => 'PCA Dim 10 Loadings'
            ),
            'add_counts_PCA_Dim_11_Loadings' => array(
                'name' => 'PCA Dim 11 Loadings'
            ),
            'add_counts_PCA_Dim_12_Loadings' => array(
                'name' => 'PCA Dim 12 Loadings'
            ),
            'add_counts_PCA_Dim_13_Loadings' => array(
                'name' => 'PCA Dim 13 Loadings'
            ),
            'add_counts_PCA_Dim_14_Loadings' => array(
                'name' => 'PCA Dim 14 Loadings'
            ),
            'add_counts_PCA_Dim_15_Loadings' => array(
                'name' => 'PCA Dim 15 Loadings'
            ),
            'add_counts_PCA_Dim_16_Loadings' => array(
                'name' => 'PCA Dim 16 Loadings'
            ),
            'add_counts_PCA_Dim_17_Loadings' => array(
                'name' => 'PCA Dim 17 Loadings'
            ),
            'add_counts_PCA_Dim_18_Loadings' => array(
                'name' => 'PCA Dim 18 Loadings'
            ),
            'add_counts_PCA_Dim_19_Loadings' => array(
                'name' => 'PCA Dim 19 Loadings'
            ),
            'add_counts_PCA_Dim_20_Loadings' => array(
                'name' => 'PCA Dim 20 Loadings'
            )
        )
    )
//End scatterplot
);
