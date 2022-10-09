<?php

return array(
    'lab' => array(
        'name' => 'TenXGenomics DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'immuno_ref_data',
    'data_db' => array(
            'cat_table_name' => 'A3P3_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'A3P3_sc_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged Expr',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Avg_log10_Expr_C0_A3' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C0 A3'
        ),
        'norm_counts_Avg_log10_Expr_C0_P3' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C0 P3'
        ),
        'norm_counts_Avg_log10_Expr_C1_A3' => array(
            'color' => '#00BA38',
            'name' => 'Avg log10 Expr C1 A3'
        ),
        'norm_counts_Avg_log10_Expr_C1_P3' => array(
            'color' => '#00BA38',
            'name' => 'Avg log10 Expr C1 P3'
        ),
        'norm_counts_Avg_log10_Expr_C2_A3' => array(
            'color' => '#619CFF',
            'name' => 'Avg log10 Expr C2 A3'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'lg10 Expr for all Samples',
        'sidelabel' => 'lg10 Expr'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Avg_log10_Expr_Sc_C0_A3','lg2_avg_Avg_log10_Expr_Sc_C0_P3','lg2_avg_Avg_log10_Expr_Sc_C1_A3','lg2_avg_Avg_log10_Expr_Sc_C1_P3','lg2_avg_Avg_log10_Expr_Sc_C2_A3'),

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
        ),
        'add_counts_C0_Residuals' => array(
            'name' => 'C0 Residuals',
            'slider_min' => -2,
            'slider_max' => 1,
            'default_low' => -2,
            'default_high' => 1
        ),
        'add_counts_C1_Residuals' => array(
            'name' => 'C1 Residuals',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'add_counts_C2_Residuals' => array(
            'name' => 'C2 Residuals',
            'slider_min' => -4,
            'slider_max' => 3,
            'default_low' => -4,
            'default_high' => 3
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'A3P3_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'add_counts_Avg_log10_Expr_all',
        'default-y' => 'norm_counts_Avg_log10_Expr_C0_A3',
        'selection' => array(
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg log10 Expr all'
            ),
            'norm_counts_Avg_log10_Expr_C0_A3' => array(
                'name' => 's Avg log10 Expr C0 A3'
            ),
            'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
                'name' => 'logFC Expressed in N Percent Cells'
            ),
            'add_counts_Avg_log10_Expr_A3' => array(
                'name' => 'Avg log10 Expr A3'
            ),
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg log10 Expr all'
            ),
            'add_counts_Avg_log10_Expr_C0' => array(
                'name' => 'Avg log10 Expr C0'
            ),
            'add_counts_Avg_log10_Expr_C1' => array(
                'name' => 'Avg log10 Expr C1'
            ),
            'add_counts_Avg_log10_Expr_C2' => array(
                'name' => 'Avg log10 Expr C2'
            ),
            'add_counts_Avg_log10_Expr_P3' => array(
                'name' => 'Avg log10 Expr P3'
            ),
            'norm_counts_Avg_log10_Expr_C0_A3' => array(
                'name' => 's Avg log10 Expr C0 A3'
            ),
            'norm_counts_Avg_log10_Expr_C0_P3' => array(
                'name' => 's Avg log10 Expr C0 P3'
            ),
            'norm_counts_Avg_log10_Expr_C1_A3' => array(
                'name' => 's Avg log10 Expr C1 A3'
            ),
            'norm_counts_Avg_log10_Expr_C1_P3' => array(
                'name' => 's Avg log10 Expr C1 P3'
            ),
            'norm_counts_Avg_log10_Expr_C2_A3' => array(
                'name' => 's Avg log10 Expr C2 A3'
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
            'add_counts_C0_Residuals' => array(
                'name' => 'C0 Residuals'
            ),
            'add_counts_C1_Residuals' => array(
                'name' => 'C1 Residuals'
            ),
            'add_counts_C2_Residuals' => array(
                'name' => 'C2 Residuals'
            )
        )
    )
//End scatterplot
);
