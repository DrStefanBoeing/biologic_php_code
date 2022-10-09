<?php

return array(
    'lab' => array(
        'name' => 'Schaefer DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'asl_data',
    'data_db' => array(
            'cat_table_name' => 'asl360_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'p360_sc_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged Expr',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Avg_lg10_Expr_C_0_E18Neurons' => array(
            'color' => '#F8766D',
            'name' => 'Avg lg10 Expr C 0 E18Neurons'
        ),
        'norm_counts_Avg_lg10_Expr_C_10_E18Neurons' => array(
            'color' => '#E58700',
            'name' => 'Avg lg10 Expr C 10 E18Neurons'
        ),
        'norm_counts_Avg_lg10_Expr_C_11_E18Neurons' => array(
            'color' => '#C99800',
            'name' => 'Avg lg10 Expr C 11 E18Neurons'
        ),
        'norm_counts_Avg_lg10_Expr_C_12_E18Neurons' => array(
            'color' => '#A3A500',
            'name' => 'Avg lg10 Expr C 12 E18Neurons'
        ),
        'norm_counts_Avg_lg10_Expr_C_13_E18Neurons' => array(
            'color' => '#6BB100',
            'name' => 'Avg lg10 Expr C 13 E18Neurons'
        ),
        'norm_counts_Avg_lg10_Expr_C_14_E18Neurons' => array(
            'color' => '#00BA38',
            'name' => 'Avg lg10 Expr C 14 E18Neurons'
        ),
        'norm_counts_Avg_lg10_Expr_C_1_E18Neurons' => array(
            'color' => '#00BF7D',
            'name' => 'Avg lg10 Expr C 1 E18Neurons'
        ),
        'norm_counts_Avg_lg10_Expr_C_2_E18Neurons' => array(
            'color' => '#00C0AF',
            'name' => 'Avg lg10 Expr C 2 E18Neurons'
        ),
        'norm_counts_Avg_lg10_Expr_C_3_E18Neurons' => array(
            'color' => '#00BCD8',
            'name' => 'Avg lg10 Expr C 3 E18Neurons'
        ),
        'norm_counts_Avg_lg10_Expr_C_4_E18Neurons' => array(
            'color' => '#00B0F6',
            'name' => 'Avg lg10 Expr C 4 E18Neurons'
        ),
        'norm_counts_Avg_lg10_Expr_C_5_E18Neurons' => array(
            'color' => '#619CFF',
            'name' => 'Avg lg10 Expr C 5 E18Neurons'
        ),
        'norm_counts_Avg_lg10_Expr_C_6_E18Neurons' => array(
            'color' => '#B983FF',
            'name' => 'Avg lg10 Expr C 6 E18Neurons'
        ),
        'norm_counts_Avg_lg10_Expr_C_7_E18Neurons' => array(
            'color' => '#E76BF3',
            'name' => 'Avg lg10 Expr C 7 E18Neurons'
        ),
        'norm_counts_Avg_lg10_Expr_C_8_E18Neurons' => array(
            'color' => '#FD61D1',
            'name' => 'Avg lg10 Expr C 8 E18Neurons'
        ),
        'norm_counts_Avg_lg10_Expr_C_9_E18Neurons' => array(
            'color' => '#FF67A4',
            'name' => 'Avg lg10 Expr C 9 E18Neurons'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'lg10 Expr for all Samples',
        'sidelabel' => 'lg10 Expr'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Avg_log10_Expr_Sc_C_0_E18Neurons','lg2_avg_Avg_log10_Expr_Sc_C_10_E18Neurons','lg2_avg_Avg_log10_Expr_Sc_C_11_E18Neurons','lg2_avg_Avg_log10_Expr_Sc_C_12_E18Neurons','lg2_avg_Avg_log10_Expr_Sc_C_13_E18Neurons','lg2_avg_Avg_log10_Expr_Sc_C_14_E18Neurons','lg2_avg_Avg_log10_Expr_Sc_C_1_E18Neurons','lg2_avg_Avg_log10_Expr_Sc_C_2_E18Neurons','lg2_avg_Avg_log10_Expr_Sc_C_3_E18Neurons','lg2_avg_Avg_log10_Expr_Sc_C_4_E18Neurons','lg2_avg_Avg_log10_Expr_Sc_C_5_E18Neurons','lg2_avg_Avg_log10_Expr_Sc_C_6_E18Neurons','lg2_avg_Avg_log10_Expr_Sc_C_7_E18Neurons','lg2_avg_Avg_log10_Expr_Sc_C_8_E18Neurons','lg2_avg_Avg_log10_Expr_Sc_C_9_E18Neurons'),

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
'pca' => 'p360_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_X_logFC_Expressed_in_N_Percent_Cells',
        'default-y' => 'norm_counts_Avg_lg10_Expr_C_0_E18Neurons',
        'selection' => array(
            'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
                'name' => 'logFC Expressed in N Percent Cells'
            ),
            'add_counts_Avg_log10_Expr_E18Neurons' => array(
                'name' => 'Avg log10 Expr E18Neurons'
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
            'norm_counts_Avg_lg10_Expr_C_0_E18Neurons' => array(
                'name' => 's Avg lg10 Expr C 0 E18Neurons'
            ),
            'norm_counts_Avg_lg10_Expr_C_10_E18Neurons' => array(
                'name' => 's Avg lg10 Expr C 10 E18Neurons'
            ),
            'norm_counts_Avg_lg10_Expr_C_11_E18Neurons' => array(
                'name' => 's Avg lg10 Expr C 11 E18Neurons'
            ),
            'norm_counts_Avg_lg10_Expr_C_12_E18Neurons' => array(
                'name' => 's Avg lg10 Expr C 12 E18Neurons'
            ),
            'norm_counts_Avg_lg10_Expr_C_13_E18Neurons' => array(
                'name' => 's Avg lg10 Expr C 13 E18Neurons'
            ),
            'norm_counts_Avg_lg10_Expr_C_14_E18Neurons' => array(
                'name' => 's Avg lg10 Expr C 14 E18Neurons'
            ),
            'norm_counts_Avg_lg10_Expr_C_1_E18Neurons' => array(
                'name' => 's Avg lg10 Expr C 1 E18Neurons'
            ),
            'norm_counts_Avg_lg10_Expr_C_2_E18Neurons' => array(
                'name' => 's Avg lg10 Expr C 2 E18Neurons'
            ),
            'norm_counts_Avg_lg10_Expr_C_3_E18Neurons' => array(
                'name' => 's Avg lg10 Expr C 3 E18Neurons'
            ),
            'norm_counts_Avg_lg10_Expr_C_4_E18Neurons' => array(
                'name' => 's Avg lg10 Expr C 4 E18Neurons'
            ),
            'norm_counts_Avg_lg10_Expr_C_5_E18Neurons' => array(
                'name' => 's Avg lg10 Expr C 5 E18Neurons'
            ),
            'norm_counts_Avg_lg10_Expr_C_6_E18Neurons' => array(
                'name' => 's Avg lg10 Expr C 6 E18Neurons'
            ),
            'norm_counts_Avg_lg10_Expr_C_7_E18Neurons' => array(
                'name' => 's Avg lg10 Expr C 7 E18Neurons'
            ),
            'norm_counts_Avg_lg10_Expr_C_8_E18Neurons' => array(
                'name' => 's Avg lg10 Expr C 8 E18Neurons'
            ),
            'norm_counts_Avg_lg10_Expr_C_9_E18Neurons' => array(
                'name' => 's Avg lg10 Expr C 9 E18Neurons'
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
