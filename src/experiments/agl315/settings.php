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

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged Expr',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Avg_lg10_Expr_C_0_Ctrl' => array(
            'color' => '#F8766D',
            'name' => 'Avg lg10 Expr C 0 Ctrl'
        ),
        'norm_counts_Avg_lg10_Expr_C_0_Prad' => array(
            'color' => '#F8766D',
            'name' => 'Avg lg10 Expr C 0 Prad'
        ),
        'norm_counts_Avg_lg10_Expr_C_10_Ctrl' => array(
            'color' => '#DB8E00',
            'name' => 'Avg lg10 Expr C 10 Ctrl'
        ),
        'norm_counts_Avg_lg10_Expr_C_10_Prad' => array(
            'color' => '#DB8E00',
            'name' => 'Avg lg10 Expr C 10 Prad'
        ),
        'norm_counts_Avg_lg10_Expr_C_1_Ctrl' => array(
            'color' => '#AEA200',
            'name' => 'Avg lg10 Expr C 1 Ctrl'
        ),
        'norm_counts_Avg_lg10_Expr_C_1_Prad' => array(
            'color' => '#AEA200',
            'name' => 'Avg lg10 Expr C 1 Prad'
        ),
        'norm_counts_Avg_lg10_Expr_C_2_Ctrl' => array(
            'color' => '#64B200',
            'name' => 'Avg lg10 Expr C 2 Ctrl'
        ),
        'norm_counts_Avg_lg10_Expr_C_2_Prad' => array(
            'color' => '#64B200',
            'name' => 'Avg lg10 Expr C 2 Prad'
        ),
        'norm_counts_Avg_lg10_Expr_C_3_Ctrl' => array(
            'color' => '#00BD5C',
            'name' => 'Avg lg10 Expr C 3 Ctrl'
        ),
        'norm_counts_Avg_lg10_Expr_C_3_Prad' => array(
            'color' => '#00BD5C',
            'name' => 'Avg lg10 Expr C 3 Prad'
        ),
        'norm_counts_Avg_lg10_Expr_C_4_Ctrl' => array(
            'color' => '#00C1A7',
            'name' => 'Avg lg10 Expr C 4 Ctrl'
        ),
        'norm_counts_Avg_lg10_Expr_C_4_Prad' => array(
            'color' => '#00C1A7',
            'name' => 'Avg lg10 Expr C 4 Prad'
        ),
        'norm_counts_Avg_lg10_Expr_C_5_Ctrl' => array(
            'color' => '#00BADE',
            'name' => 'Avg lg10 Expr C 5 Ctrl'
        ),
        'norm_counts_Avg_lg10_Expr_C_5_Prad' => array(
            'color' => '#00BADE',
            'name' => 'Avg lg10 Expr C 5 Prad'
        ),
        'norm_counts_Avg_lg10_Expr_C_6_Ctrl' => array(
            'color' => '#00A6FF',
            'name' => 'Avg lg10 Expr C 6 Ctrl'
        ),
        'norm_counts_Avg_lg10_Expr_C_6_Prad' => array(
            'color' => '#00A6FF',
            'name' => 'Avg lg10 Expr C 6 Prad'
        ),
        'norm_counts_Avg_lg10_Expr_C_7_Ctrl' => array(
            'color' => '#B385FF',
            'name' => 'Avg lg10 Expr C 7 Ctrl'
        ),
        'norm_counts_Avg_lg10_Expr_C_7_Prad' => array(
            'color' => '#B385FF',
            'name' => 'Avg lg10 Expr C 7 Prad'
        ),
        'norm_counts_Avg_lg10_Expr_C_8_Ctrl' => array(
            'color' => '#EF67EB',
            'name' => 'Avg lg10 Expr C 8 Ctrl'
        ),
        'norm_counts_Avg_lg10_Expr_C_8_Prad' => array(
            'color' => '#EF67EB',
            'name' => 'Avg lg10 Expr C 8 Prad'
        ),
        'norm_counts_Avg_lg10_Expr_C_9_Ctrl' => array(
            'color' => '#FF63B6',
            'name' => 'Avg lg10 Expr C 9 Ctrl'
        ),
        'norm_counts_Avg_lg10_Expr_C_9_Prad' => array(
            'color' => '#FF63B6',
            'name' => 'Avg lg10 Expr C 9 Prad'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'lg10 Expr for all Samples',
        'sidelabel' => 'lg10 Expr'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Avg_log10_Expr_Sc_C_0_Ctrl','lg2_avg_Avg_log10_Expr_Sc_C_0_Prad','lg2_avg_Avg_log10_Expr_Sc_C_10_Ctrl','lg2_avg_Avg_log10_Expr_Sc_C_10_Prad','lg2_avg_Avg_log10_Expr_Sc_C_1_Ctrl','lg2_avg_Avg_log10_Expr_Sc_C_1_Prad','lg2_avg_Avg_log10_Expr_Sc_C_2_Ctrl','lg2_avg_Avg_log10_Expr_Sc_C_2_Prad','lg2_avg_Avg_log10_Expr_Sc_C_3_Ctrl','lg2_avg_Avg_log10_Expr_Sc_C_3_Prad','lg2_avg_Avg_log10_Expr_Sc_C_4_Ctrl','lg2_avg_Avg_log10_Expr_Sc_C_4_Prad','lg2_avg_Avg_log10_Expr_Sc_C_5_Ctrl','lg2_avg_Avg_log10_Expr_Sc_C_5_Prad','lg2_avg_Avg_log10_Expr_Sc_C_6_Ctrl','lg2_avg_Avg_log10_Expr_Sc_C_6_Prad','lg2_avg_Avg_log10_Expr_Sc_C_7_Ctrl','lg2_avg_Avg_log10_Expr_Sc_C_7_Prad','lg2_avg_Avg_log10_Expr_Sc_C_8_Ctrl','lg2_avg_Avg_log10_Expr_Sc_C_8_Prad','lg2_avg_Avg_log10_Expr_Sc_C_9_Ctrl','lg2_avg_Avg_log10_Expr_Sc_C_9_Prad'),

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
    // Scatterplot Parameters
'pca' => 'p315_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_X_logFC_Expressed_in_N_Percent_Cells',
        'default-y' => 'norm_counts_Avg_lg10_Expr_C_0_Ctrl',
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
            'norm_counts_Avg_lg10_Expr_C_0_Ctrl' => array(
                'name' => 's Avg lg10 Expr C 0 Ctrl'
            ),
            'norm_counts_Avg_lg10_Expr_C_0_Prad' => array(
                'name' => 's Avg lg10 Expr C 0 Prad'
            ),
            'norm_counts_Avg_lg10_Expr_C_10_Ctrl' => array(
                'name' => 's Avg lg10 Expr C 10 Ctrl'
            ),
            'norm_counts_Avg_lg10_Expr_C_10_Prad' => array(
                'name' => 's Avg lg10 Expr C 10 Prad'
            ),
            'norm_counts_Avg_lg10_Expr_C_1_Ctrl' => array(
                'name' => 's Avg lg10 Expr C 1 Ctrl'
            ),
            'norm_counts_Avg_lg10_Expr_C_1_Prad' => array(
                'name' => 's Avg lg10 Expr C 1 Prad'
            ),
            'norm_counts_Avg_lg10_Expr_C_2_Ctrl' => array(
                'name' => 's Avg lg10 Expr C 2 Ctrl'
            ),
            'norm_counts_Avg_lg10_Expr_C_2_Prad' => array(
                'name' => 's Avg lg10 Expr C 2 Prad'
            ),
            'norm_counts_Avg_lg10_Expr_C_3_Ctrl' => array(
                'name' => 's Avg lg10 Expr C 3 Ctrl'
            ),
            'norm_counts_Avg_lg10_Expr_C_3_Prad' => array(
                'name' => 's Avg lg10 Expr C 3 Prad'
            ),
            'norm_counts_Avg_lg10_Expr_C_4_Ctrl' => array(
                'name' => 's Avg lg10 Expr C 4 Ctrl'
            ),
            'norm_counts_Avg_lg10_Expr_C_4_Prad' => array(
                'name' => 's Avg lg10 Expr C 4 Prad'
            ),
            'norm_counts_Avg_lg10_Expr_C_5_Ctrl' => array(
                'name' => 's Avg lg10 Expr C 5 Ctrl'
            ),
            'norm_counts_Avg_lg10_Expr_C_5_Prad' => array(
                'name' => 's Avg lg10 Expr C 5 Prad'
            ),
            'norm_counts_Avg_lg10_Expr_C_6_Ctrl' => array(
                'name' => 's Avg lg10 Expr C 6 Ctrl'
            ),
            'norm_counts_Avg_lg10_Expr_C_6_Prad' => array(
                'name' => 's Avg lg10 Expr C 6 Prad'
            ),
            'norm_counts_Avg_lg10_Expr_C_7_Ctrl' => array(
                'name' => 's Avg lg10 Expr C 7 Ctrl'
            ),
            'norm_counts_Avg_lg10_Expr_C_7_Prad' => array(
                'name' => 's Avg lg10 Expr C 7 Prad'
            ),
            'norm_counts_Avg_lg10_Expr_C_8_Ctrl' => array(
                'name' => 's Avg lg10 Expr C 8 Ctrl'
            ),
            'norm_counts_Avg_lg10_Expr_C_8_Prad' => array(
                'name' => 's Avg lg10 Expr C 8 Prad'
            ),
            'norm_counts_Avg_lg10_Expr_C_9_Ctrl' => array(
                'name' => 's Avg lg10 Expr C 9 Ctrl'
            ),
            'norm_counts_Avg_lg10_Expr_C_9_Prad' => array(
                'name' => 's Avg lg10 Expr C 9 Prad'
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
