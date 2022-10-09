<?php

return array(
    'lab' => array(
        'name' => 'Pachnis DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'vpl_data',
    'data_db' => array(
            'cat_table_name' => 'vpl412_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'vpl412_sc_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged Expr',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Avg_log10_Expr_C0_DIV0' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C0 DIV0'
        ),
        'norm_counts_Avg_log10_Expr_C0_DIV10' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C0 DIV10'
        ),
        'norm_counts_Avg_log10_Expr_C0_DIV20' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C0 DIV20'
        ),
        'norm_counts_Avg_log10_Expr_C0_DIV4' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C0 DIV4'
        ),
        'norm_counts_Avg_log10_Expr_C1_DIV0' => array(
            'color' => '#CD9600',
            'name' => 'Avg log10 Expr C1 DIV0'
        ),
        'norm_counts_Avg_log10_Expr_C1_DIV10' => array(
            'color' => '#CD9600',
            'name' => 'Avg log10 Expr C1 DIV10'
        ),
        'norm_counts_Avg_log10_Expr_C1_DIV20' => array(
            'color' => '#CD9600',
            'name' => 'Avg log10 Expr C1 DIV20'
        ),
        'norm_counts_Avg_log10_Expr_C1_DIV4' => array(
            'color' => '#CD9600',
            'name' => 'Avg log10 Expr C1 DIV4'
        ),
        'norm_counts_Avg_log10_Expr_C2_DIV0' => array(
            'color' => '#7CAE00',
            'name' => 'Avg log10 Expr C2 DIV0'
        ),
        'norm_counts_Avg_log10_Expr_C2_DIV10' => array(
            'color' => '#7CAE00',
            'name' => 'Avg log10 Expr C2 DIV10'
        ),
        'norm_counts_Avg_log10_Expr_C2_DIV20' => array(
            'color' => '#7CAE00',
            'name' => 'Avg log10 Expr C2 DIV20'
        ),
        'norm_counts_Avg_log10_Expr_C2_DIV4' => array(
            'color' => '#7CAE00',
            'name' => 'Avg log10 Expr C2 DIV4'
        ),
        'norm_counts_Avg_log10_Expr_C3_DIV0' => array(
            'color' => '#00BE67',
            'name' => 'Avg log10 Expr C3 DIV0'
        ),
        'norm_counts_Avg_log10_Expr_C3_DIV10' => array(
            'color' => '#00BE67',
            'name' => 'Avg log10 Expr C3 DIV10'
        ),
        'norm_counts_Avg_log10_Expr_C3_DIV20' => array(
            'color' => '#00BE67',
            'name' => 'Avg log10 Expr C3 DIV20'
        ),
        'norm_counts_Avg_log10_Expr_C3_DIV4' => array(
            'color' => '#00BE67',
            'name' => 'Avg log10 Expr C3 DIV4'
        ),
        'norm_counts_Avg_log10_Expr_C4_DIV0' => array(
            'color' => '#00BFC4',
            'name' => 'Avg log10 Expr C4 DIV0'
        ),
        'norm_counts_Avg_log10_Expr_C4_DIV10' => array(
            'color' => '#00BFC4',
            'name' => 'Avg log10 Expr C4 DIV10'
        ),
        'norm_counts_Avg_log10_Expr_C4_DIV20' => array(
            'color' => '#00BFC4',
            'name' => 'Avg log10 Expr C4 DIV20'
        ),
        'norm_counts_Avg_log10_Expr_C4_DIV4' => array(
            'color' => '#00BFC4',
            'name' => 'Avg log10 Expr C4 DIV4'
        ),
        'norm_counts_Avg_log10_Expr_C5_DIV0' => array(
            'color' => '#00A9FF',
            'name' => 'Avg log10 Expr C5 DIV0'
        ),
        'norm_counts_Avg_log10_Expr_C5_DIV10' => array(
            'color' => '#00A9FF',
            'name' => 'Avg log10 Expr C5 DIV10'
        ),
        'norm_counts_Avg_log10_Expr_C5_DIV20' => array(
            'color' => '#00A9FF',
            'name' => 'Avg log10 Expr C5 DIV20'
        ),
        'norm_counts_Avg_log10_Expr_C5_DIV4' => array(
            'color' => '#00A9FF',
            'name' => 'Avg log10 Expr C5 DIV4'
        ),
        'norm_counts_Avg_log10_Expr_C6_DIV0' => array(
            'color' => '#C77CFF',
            'name' => 'Avg log10 Expr C6 DIV0'
        ),
        'norm_counts_Avg_log10_Expr_C6_DIV10' => array(
            'color' => '#C77CFF',
            'name' => 'Avg log10 Expr C6 DIV10'
        ),
        'norm_counts_Avg_log10_Expr_C6_DIV20' => array(
            'color' => '#C77CFF',
            'name' => 'Avg log10 Expr C6 DIV20'
        ),
        'norm_counts_Avg_log10_Expr_C6_DIV4' => array(
            'color' => '#C77CFF',
            'name' => 'Avg log10 Expr C6 DIV4'
        ),
        'norm_counts_Avg_log10_Expr_C7_DIV0' => array(
            'color' => '#FF61CC',
            'name' => 'Avg log10 Expr C7 DIV0'
        ),
        'norm_counts_Avg_log10_Expr_C7_DIV10' => array(
            'color' => '#FF61CC',
            'name' => 'Avg log10 Expr C7 DIV10'
        ),
        'norm_counts_Avg_log10_Expr_C7_DIV20' => array(
            'color' => '#FF61CC',
            'name' => 'Avg log10 Expr C7 DIV20'
        ),
        'norm_counts_Avg_log10_Expr_C7_DIV4' => array(
            'color' => '#FF61CC',
            'name' => 'Avg log10 Expr C7 DIV4'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'lg10 Expr for all Samples',
        'sidelabel' => 'lg10 Expr'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Avg_log10_Expr_Sc_C0_DIV0','lg2_avg_Avg_log10_Expr_Sc_C0_DIV10','lg2_avg_Avg_log10_Expr_Sc_C0_DIV20','lg2_avg_Avg_log10_Expr_Sc_C0_DIV4','lg2_avg_Avg_log10_Expr_Sc_C1_DIV0','lg2_avg_Avg_log10_Expr_Sc_C1_DIV10','lg2_avg_Avg_log10_Expr_Sc_C1_DIV20','lg2_avg_Avg_log10_Expr_Sc_C1_DIV4','lg2_avg_Avg_log10_Expr_Sc_C2_DIV0','lg2_avg_Avg_log10_Expr_Sc_C2_DIV10','lg2_avg_Avg_log10_Expr_Sc_C2_DIV20','lg2_avg_Avg_log10_Expr_Sc_C2_DIV4','lg2_avg_Avg_log10_Expr_Sc_C3_DIV0','lg2_avg_Avg_log10_Expr_Sc_C3_DIV10','lg2_avg_Avg_log10_Expr_Sc_C3_DIV20','lg2_avg_Avg_log10_Expr_Sc_C3_DIV4','lg2_avg_Avg_log10_Expr_Sc_C4_DIV0','lg2_avg_Avg_log10_Expr_Sc_C4_DIV10','lg2_avg_Avg_log10_Expr_Sc_C4_DIV20','lg2_avg_Avg_log10_Expr_Sc_C4_DIV4','lg2_avg_Avg_log10_Expr_Sc_C5_DIV0','lg2_avg_Avg_log10_Expr_Sc_C5_DIV10','lg2_avg_Avg_log10_Expr_Sc_C5_DIV20','lg2_avg_Avg_log10_Expr_Sc_C5_DIV4','lg2_avg_Avg_log10_Expr_Sc_C6_DIV0','lg2_avg_Avg_log10_Expr_Sc_C6_DIV10','lg2_avg_Avg_log10_Expr_Sc_C6_DIV20','lg2_avg_Avg_log10_Expr_Sc_C6_DIV4','lg2_avg_Avg_log10_Expr_Sc_C7_DIV0','lg2_avg_Avg_log10_Expr_Sc_C7_DIV10','lg2_avg_Avg_log10_Expr_Sc_C7_DIV20','lg2_avg_Avg_log10_Expr_Sc_C7_DIV4'),

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
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_counts_C2_Residuals' => array(
            'name' => 'C2 Residuals',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'add_counts_C3_Residuals' => array(
            'name' => 'C3 Residuals',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
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
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'add_counts_C7_Residuals' => array(
            'name' => 'C7 Residuals',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'vpl412_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'add_counts_Avg_log10_Expr_all',
        'default-y' => 'norm_counts_Avg_log10_Expr_C0_DIV0',
        'selection' => array(
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg log10 Expr all'
            ),
            'norm_counts_Avg_log10_Expr_C0_DIV0' => array(
                'name' => 's Avg log10 Expr C0 DIV0'
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
            'add_counts_Avg_log10_Expr_DIV0' => array(
                'name' => 'Avg log10 Expr DIV0'
            ),
            'add_counts_Avg_log10_Expr_DIV10' => array(
                'name' => 'Avg log10 Expr DIV10'
            ),
            'add_counts_Avg_log10_Expr_DIV20' => array(
                'name' => 'Avg log10 Expr DIV20'
            ),
            'add_counts_Avg_log10_Expr_DIV4' => array(
                'name' => 'Avg log10 Expr DIV4'
            ),
            'norm_counts_Avg_log10_Expr_C0_DIV0' => array(
                'name' => 's Avg log10 Expr C0 DIV0'
            ),
            'norm_counts_Avg_log10_Expr_C0_DIV10' => array(
                'name' => 's Avg log10 Expr C0 DIV10'
            ),
            'norm_counts_Avg_log10_Expr_C0_DIV20' => array(
                'name' => 's Avg log10 Expr C0 DIV20'
            ),
            'norm_counts_Avg_log10_Expr_C0_DIV4' => array(
                'name' => 's Avg log10 Expr C0 DIV4'
            ),
            'norm_counts_Avg_log10_Expr_C1_DIV0' => array(
                'name' => 's Avg log10 Expr C1 DIV0'
            ),
            'norm_counts_Avg_log10_Expr_C1_DIV10' => array(
                'name' => 's Avg log10 Expr C1 DIV10'
            ),
            'norm_counts_Avg_log10_Expr_C1_DIV20' => array(
                'name' => 's Avg log10 Expr C1 DIV20'
            ),
            'norm_counts_Avg_log10_Expr_C1_DIV4' => array(
                'name' => 's Avg log10 Expr C1 DIV4'
            ),
            'norm_counts_Avg_log10_Expr_C2_DIV0' => array(
                'name' => 's Avg log10 Expr C2 DIV0'
            ),
            'norm_counts_Avg_log10_Expr_C2_DIV10' => array(
                'name' => 's Avg log10 Expr C2 DIV10'
            ),
            'norm_counts_Avg_log10_Expr_C2_DIV20' => array(
                'name' => 's Avg log10 Expr C2 DIV20'
            ),
            'norm_counts_Avg_log10_Expr_C2_DIV4' => array(
                'name' => 's Avg log10 Expr C2 DIV4'
            ),
            'norm_counts_Avg_log10_Expr_C3_DIV0' => array(
                'name' => 's Avg log10 Expr C3 DIV0'
            ),
            'norm_counts_Avg_log10_Expr_C3_DIV10' => array(
                'name' => 's Avg log10 Expr C3 DIV10'
            ),
            'norm_counts_Avg_log10_Expr_C3_DIV20' => array(
                'name' => 's Avg log10 Expr C3 DIV20'
            ),
            'norm_counts_Avg_log10_Expr_C3_DIV4' => array(
                'name' => 's Avg log10 Expr C3 DIV4'
            ),
            'norm_counts_Avg_log10_Expr_C4_DIV0' => array(
                'name' => 's Avg log10 Expr C4 DIV0'
            ),
            'norm_counts_Avg_log10_Expr_C4_DIV10' => array(
                'name' => 's Avg log10 Expr C4 DIV10'
            ),
            'norm_counts_Avg_log10_Expr_C4_DIV20' => array(
                'name' => 's Avg log10 Expr C4 DIV20'
            ),
            'norm_counts_Avg_log10_Expr_C4_DIV4' => array(
                'name' => 's Avg log10 Expr C4 DIV4'
            ),
            'norm_counts_Avg_log10_Expr_C5_DIV0' => array(
                'name' => 's Avg log10 Expr C5 DIV0'
            ),
            'norm_counts_Avg_log10_Expr_C5_DIV10' => array(
                'name' => 's Avg log10 Expr C5 DIV10'
            ),
            'norm_counts_Avg_log10_Expr_C5_DIV20' => array(
                'name' => 's Avg log10 Expr C5 DIV20'
            ),
            'norm_counts_Avg_log10_Expr_C5_DIV4' => array(
                'name' => 's Avg log10 Expr C5 DIV4'
            ),
            'norm_counts_Avg_log10_Expr_C6_DIV0' => array(
                'name' => 's Avg log10 Expr C6 DIV0'
            ),
            'norm_counts_Avg_log10_Expr_C6_DIV10' => array(
                'name' => 's Avg log10 Expr C6 DIV10'
            ),
            'norm_counts_Avg_log10_Expr_C6_DIV20' => array(
                'name' => 's Avg log10 Expr C6 DIV20'
            ),
            'norm_counts_Avg_log10_Expr_C6_DIV4' => array(
                'name' => 's Avg log10 Expr C6 DIV4'
            ),
            'norm_counts_Avg_log10_Expr_C7_DIV0' => array(
                'name' => 's Avg log10 Expr C7 DIV0'
            ),
            'norm_counts_Avg_log10_Expr_C7_DIV10' => array(
                'name' => 's Avg log10 Expr C7 DIV10'
            ),
            'norm_counts_Avg_log10_Expr_C7_DIV20' => array(
                'name' => 's Avg log10 Expr C7 DIV20'
            ),
            'norm_counts_Avg_log10_Expr_C7_DIV4' => array(
                'name' => 's Avg log10 Expr C7 DIV4'
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
            )
        )
    )
//End scatterplot
);
