<?php

return array(
    'lab' => array(
        'name' => 'Bonfanti DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'pbl_data',
    'data_db' => array(
            'cat_table_name' => 'pbl442_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'pbl442_sc_rna_seq_table',
    'primary_gene_symbol' => 'hgnc_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged Expr',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Avg_log10_Expr_C0_Epip10' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C0 Epip10'
        ),
        'norm_counts_Avg_log10_Expr_C0_Epip6' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C0 Epip6'
        ),
        'norm_counts_Avg_log10_Expr_C10_Epip10' => array(
            'color' => '#DE8C00',
            'name' => 'Avg log10 Expr C10 Epip10'
        ),
        'norm_counts_Avg_log10_Expr_C10_Epip6' => array(
            'color' => '#DE8C00',
            'name' => 'Avg log10 Expr C10 Epip6'
        ),
        'norm_counts_Avg_log10_Expr_C11_Epip10' => array(
            'color' => '#B79F00',
            'name' => 'Avg log10 Expr C11 Epip10'
        ),
        'norm_counts_Avg_log10_Expr_C11_Epip6' => array(
            'color' => '#B79F00',
            'name' => 'Avg log10 Expr C11 Epip6'
        ),
        'norm_counts_Avg_log10_Expr_C1_Epip10' => array(
            'color' => '#7CAE00',
            'name' => 'Avg log10 Expr C1 Epip10'
        ),
        'norm_counts_Avg_log10_Expr_C1_Epip6' => array(
            'color' => '#7CAE00',
            'name' => 'Avg log10 Expr C1 Epip6'
        ),
        'norm_counts_Avg_log10_Expr_C2_Epip10' => array(
            'color' => '#00BA38',
            'name' => 'Avg log10 Expr C2 Epip10'
        ),
        'norm_counts_Avg_log10_Expr_C2_Epip6' => array(
            'color' => '#00BA38',
            'name' => 'Avg log10 Expr C2 Epip6'
        ),
        'norm_counts_Avg_log10_Expr_C3_Epip10' => array(
            'color' => '#00C08B',
            'name' => 'Avg log10 Expr C3 Epip10'
        ),
        'norm_counts_Avg_log10_Expr_C3_Epip6' => array(
            'color' => '#00C08B',
            'name' => 'Avg log10 Expr C3 Epip6'
        ),
        'norm_counts_Avg_log10_Expr_C4_Epip10' => array(
            'color' => '#00BFC4',
            'name' => 'Avg log10 Expr C4 Epip10'
        ),
        'norm_counts_Avg_log10_Expr_C4_Epip6' => array(
            'color' => '#00BFC4',
            'name' => 'Avg log10 Expr C4 Epip6'
        ),
        'norm_counts_Avg_log10_Expr_C5_Epip10' => array(
            'color' => '#00B4F0',
            'name' => 'Avg log10 Expr C5 Epip10'
        ),
        'norm_counts_Avg_log10_Expr_C5_Epip6' => array(
            'color' => '#00B4F0',
            'name' => 'Avg log10 Expr C5 Epip6'
        ),
        'norm_counts_Avg_log10_Expr_C6_Epip10' => array(
            'color' => '#619CFF',
            'name' => 'Avg log10 Expr C6 Epip10'
        ),
        'norm_counts_Avg_log10_Expr_C6_Epip6' => array(
            'color' => '#619CFF',
            'name' => 'Avg log10 Expr C6 Epip6'
        ),
        'norm_counts_Avg_log10_Expr_C7_Epip10' => array(
            'color' => '#C77CFF',
            'name' => 'Avg log10 Expr C7 Epip10'
        ),
        'norm_counts_Avg_log10_Expr_C7_Epip6' => array(
            'color' => '#C77CFF',
            'name' => 'Avg log10 Expr C7 Epip6'
        ),
        'norm_counts_Avg_log10_Expr_C8_Epip10' => array(
            'color' => '#F564E3',
            'name' => 'Avg log10 Expr C8 Epip10'
        ),
        'norm_counts_Avg_log10_Expr_C8_Epip6' => array(
            'color' => '#F564E3',
            'name' => 'Avg log10 Expr C8 Epip6'
        ),
        'norm_counts_Avg_log10_Expr_C9_Epip10' => array(
            'color' => '#FF64B0',
            'name' => 'Avg log10 Expr C9 Epip10'
        ),
        'norm_counts_Avg_log10_Expr_C9_Epip6' => array(
            'color' => '#FF64B0',
            'name' => 'Avg log10 Expr C9 Epip6'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'lg10 Expr for all Samples',
        'sidelabel' => 'lg10 Expr'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Avg_log10_Expr_Sc_C0_Epip10','lg2_avg_Avg_log10_Expr_Sc_C0_Epip6','lg2_avg_Avg_log10_Expr_Sc_C10_Epip10','lg2_avg_Avg_log10_Expr_Sc_C10_Epip6','lg2_avg_Avg_log10_Expr_Sc_C11_Epip10','lg2_avg_Avg_log10_Expr_Sc_C11_Epip6','lg2_avg_Avg_log10_Expr_Sc_C1_Epip10','lg2_avg_Avg_log10_Expr_Sc_C1_Epip6','lg2_avg_Avg_log10_Expr_Sc_C2_Epip10','lg2_avg_Avg_log10_Expr_Sc_C2_Epip6','lg2_avg_Avg_log10_Expr_Sc_C3_Epip10','lg2_avg_Avg_log10_Expr_Sc_C3_Epip6','lg2_avg_Avg_log10_Expr_Sc_C4_Epip10','lg2_avg_Avg_log10_Expr_Sc_C4_Epip6','lg2_avg_Avg_log10_Expr_Sc_C5_Epip10','lg2_avg_Avg_log10_Expr_Sc_C5_Epip6','lg2_avg_Avg_log10_Expr_Sc_C6_Epip10','lg2_avg_Avg_log10_Expr_Sc_C6_Epip6','lg2_avg_Avg_log10_Expr_Sc_C7_Epip10','lg2_avg_Avg_log10_Expr_Sc_C7_Epip6','lg2_avg_Avg_log10_Expr_Sc_C8_Epip10','lg2_avg_Avg_log10_Expr_Sc_C8_Epip6','lg2_avg_Avg_log10_Expr_Sc_C9_Epip10','lg2_avg_Avg_log10_Expr_Sc_C9_Epip6'),

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
            'slider_min' => -5,
            'slider_max' => 2,
            'default_low' => -5,
            'default_high' => 2
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
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'add_counts_C3_Residuals' => array(
            'name' => 'C3 Residuals',
            'slider_min' => -4,
            'slider_max' => 2,
            'default_low' => -4,
            'default_high' => 2
        ),
        'add_counts_C4_Residuals' => array(
            'name' => 'C4 Residuals',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'add_counts_C5_Residuals' => array(
            'name' => 'C5 Residuals',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'add_counts_C6_Residuals' => array(
            'name' => 'C6 Residuals',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'add_counts_C7_Residuals' => array(
            'name' => 'C7 Residuals',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'add_counts_C8_Residuals' => array(
            'name' => 'C8 Residuals',
            'slider_min' => -4,
            'slider_max' => 3,
            'default_low' => -4,
            'default_high' => 3
        ),
        'add_counts_C9_Residuals' => array(
            'name' => 'C9 Residuals',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'add_counts_C10_Residuals' => array(
            'name' => 'C10 Residuals',
            'slider_min' => -4,
            'slider_max' => 4,
            'default_low' => -4,
            'default_high' => 4
        ),
        'add_counts_C11_Residuals' => array(
            'name' => 'C11 Residuals',
            'slider_min' => -4,
            'slider_max' => 4,
            'default_low' => -4,
            'default_high' => 4
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'pbl442_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'add_counts_Avg_log10_Expr_all',
        'default-y' => 'norm_counts_Avg_log10_Expr_C0_Epip10',
        'selection' => array(
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg log10 Expr all'
            ),
            'norm_counts_Avg_log10_Expr_C0_Epip10' => array(
                'name' => 's Avg log10 Expr C0 Epip10'
            ),
            'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
                'name' => 'logFC Expressed in N Percent Cells'
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
            'add_counts_Avg_log10_Expr_C10' => array(
                'name' => 'Avg log10 Expr C10'
            ),
            'add_counts_Avg_log10_Expr_C11' => array(
                'name' => 'Avg log10 Expr C11'
            ),
            'add_counts_Avg_log10_Expr_C10' => array(
                'name' => 'Avg log10 Expr C10'
            ),
            'add_counts_Avg_log10_Expr_C11' => array(
                'name' => 'Avg log10 Expr C11'
            ),
            'add_counts_Avg_log10_Expr_C2' => array(
                'name' => 'Avg log10 Expr C2'
            ),
            'add_counts_Avg_log10_Expr_C3' => array(
                'name' => 'Avg log10 Expr C3'
            ),
            'add_counts_Avg_log10_Expr_C4' => array(
                'name' => 'Avg log10 Expr C4'
            ),
            'add_counts_Avg_log10_Expr_C5' => array(
                'name' => 'Avg log10 Expr C5'
            ),
            'add_counts_Avg_log10_Expr_C6' => array(
                'name' => 'Avg log10 Expr C6'
            ),
            'add_counts_Avg_log10_Expr_C7' => array(
                'name' => 'Avg log10 Expr C7'
            ),
            'add_counts_Avg_log10_Expr_C8' => array(
                'name' => 'Avg log10 Expr C8'
            ),
            'add_counts_Avg_log10_Expr_C9' => array(
                'name' => 'Avg log10 Expr C9'
            ),
            'add_counts_Avg_log10_Expr_Epip10' => array(
                'name' => 'Avg log10 Expr Epip10'
            ),
            'add_counts_Avg_log10_Expr_Epip6' => array(
                'name' => 'Avg log10 Expr Epip6'
            ),
            'norm_counts_Avg_log10_Expr_C0_Epip10' => array(
                'name' => 's Avg log10 Expr C0 Epip10'
            ),
            'norm_counts_Avg_log10_Expr_C0_Epip6' => array(
                'name' => 's Avg log10 Expr C0 Epip6'
            ),
            'norm_counts_Avg_log10_Expr_C10_Epip10' => array(
                'name' => 's Avg log10 Expr C10 Epip10'
            ),
            'norm_counts_Avg_log10_Expr_C10_Epip6' => array(
                'name' => 's Avg log10 Expr C10 Epip6'
            ),
            'norm_counts_Avg_log10_Expr_C11_Epip10' => array(
                'name' => 's Avg log10 Expr C11 Epip10'
            ),
            'norm_counts_Avg_log10_Expr_C11_Epip6' => array(
                'name' => 's Avg log10 Expr C11 Epip6'
            ),
            'norm_counts_Avg_log10_Expr_C1_Epip10' => array(
                'name' => 's Avg log10 Expr C1 Epip10'
            ),
            'norm_counts_Avg_log10_Expr_C1_Epip6' => array(
                'name' => 's Avg log10 Expr C1 Epip6'
            ),
            'norm_counts_Avg_log10_Expr_C2_Epip10' => array(
                'name' => 's Avg log10 Expr C2 Epip10'
            ),
            'norm_counts_Avg_log10_Expr_C2_Epip6' => array(
                'name' => 's Avg log10 Expr C2 Epip6'
            ),
            'norm_counts_Avg_log10_Expr_C3_Epip10' => array(
                'name' => 's Avg log10 Expr C3 Epip10'
            ),
            'norm_counts_Avg_log10_Expr_C3_Epip6' => array(
                'name' => 's Avg log10 Expr C3 Epip6'
            ),
            'norm_counts_Avg_log10_Expr_C4_Epip10' => array(
                'name' => 's Avg log10 Expr C4 Epip10'
            ),
            'norm_counts_Avg_log10_Expr_C4_Epip6' => array(
                'name' => 's Avg log10 Expr C4 Epip6'
            ),
            'norm_counts_Avg_log10_Expr_C5_Epip10' => array(
                'name' => 's Avg log10 Expr C5 Epip10'
            ),
            'norm_counts_Avg_log10_Expr_C5_Epip6' => array(
                'name' => 's Avg log10 Expr C5 Epip6'
            ),
            'norm_counts_Avg_log10_Expr_C6_Epip10' => array(
                'name' => 's Avg log10 Expr C6 Epip10'
            ),
            'norm_counts_Avg_log10_Expr_C6_Epip6' => array(
                'name' => 's Avg log10 Expr C6 Epip6'
            ),
            'norm_counts_Avg_log10_Expr_C7_Epip10' => array(
                'name' => 's Avg log10 Expr C7 Epip10'
            ),
            'norm_counts_Avg_log10_Expr_C7_Epip6' => array(
                'name' => 's Avg log10 Expr C7 Epip6'
            ),
            'norm_counts_Avg_log10_Expr_C8_Epip10' => array(
                'name' => 's Avg log10 Expr C8 Epip10'
            ),
            'norm_counts_Avg_log10_Expr_C8_Epip6' => array(
                'name' => 's Avg log10 Expr C8 Epip6'
            ),
            'norm_counts_Avg_log10_Expr_C9_Epip10' => array(
                'name' => 's Avg log10 Expr C9 Epip10'
            ),
            'norm_counts_Avg_log10_Expr_C9_Epip6' => array(
                'name' => 's Avg log10 Expr C9 Epip6'
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
            'add_counts_PCA_Dim_1_Loadings' => array(
                'name' => 'PCA Dim 1 Loadings'
            ),
            'add_counts_PCA_Dim_20_Loadings' => array(
                'name' => 'PCA Dim 20 Loadings'
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
            'add_counts_C0_Residuals' => array(
                'name' => 'C0 Residuals'
            ),
            'add_counts_C1_Residuals' => array(
                'name' => 'C1 Residuals'
            ),
            'add_counts_C2_Residuals' => array(
                'name' => 'C2 Residuals'
            ),
            'add_counts_C3_Residuals' => array(
                'name' => 'C3 Residuals'
            ),
            'add_counts_C4_Residuals' => array(
                'name' => 'C4 Residuals'
            ),
            'add_counts_C5_Residuals' => array(
                'name' => 'C5 Residuals'
            ),
            'add_counts_C6_Residuals' => array(
                'name' => 'C6 Residuals'
            ),
            'add_counts_C7_Residuals' => array(
                'name' => 'C7 Residuals'
            ),
            'add_counts_C8_Residuals' => array(
                'name' => 'C8 Residuals'
            ),
            'add_counts_C9_Residuals' => array(
                'name' => 'C9 Residuals'
            ),
            'add_counts_C10_Residuals' => array(
                'name' => 'C10 Residuals'
            ),
            'add_counts_C11_Residuals' => array(
                'name' => 'C11 Residuals'
            )
        )
    )
//End scatterplot
);