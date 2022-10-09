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
            'cat_table_name' => 'vpl362_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'p362_sc_rna_seq_table',
    'primary_gene_symbol' => 'dr_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged Expr',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Avg_lg10_Expr_C_0_S' => array(
            'color' => '#F8766D',
            'name' => 'Avg lg10 Expr C 0 S'
        ),
        'norm_counts_Avg_lg10_Expr_C_10_S' => array(
            'color' => '#E58700',
            'name' => 'Avg lg10 Expr C 10 S'
        ),
        'norm_counts_Avg_lg10_Expr_C_11_S' => array(
            'color' => '#C99800',
            'name' => 'Avg lg10 Expr C 11 S'
        ),
        'norm_counts_Avg_lg10_Expr_C_12_S' => array(
            'color' => '#A3A500',
            'name' => 'Avg lg10 Expr C 12 S'
        ),
        'norm_counts_Avg_lg10_Expr_C_13_S' => array(
            'color' => '#6BB100',
            'name' => 'Avg lg10 Expr C 13 S'
        ),
        'norm_counts_Avg_lg10_Expr_C_14_S' => array(
            'color' => '#00BA38',
            'name' => 'Avg lg10 Expr C 14 S'
        ),
        'norm_counts_Avg_lg10_Expr_C_1_S' => array(
            'color' => '#00BF7D',
            'name' => 'Avg lg10 Expr C 1 S'
        ),
        'norm_counts_Avg_lg10_Expr_C_2_S' => array(
            'color' => '#00C0AF',
            'name' => 'Avg lg10 Expr C 2 S'
        ),
        'norm_counts_Avg_lg10_Expr_C_3_S' => array(
            'color' => '#00BCD8',
            'name' => 'Avg lg10 Expr C 3 S'
        ),
        'norm_counts_Avg_lg10_Expr_C_4_S' => array(
            'color' => '#00B0F6',
            'name' => 'Avg lg10 Expr C 4 S'
        ),
        'norm_counts_Avg_lg10_Expr_C_5_S' => array(
            'color' => '#619CFF',
            'name' => 'Avg lg10 Expr C 5 S'
        ),
        'norm_counts_Avg_lg10_Expr_C_6_S' => array(
            'color' => '#B983FF',
            'name' => 'Avg lg10 Expr C 6 S'
        ),
        'norm_counts_Avg_lg10_Expr_C_7_S' => array(
            'color' => '#E76BF3',
            'name' => 'Avg lg10 Expr C 7 S'
        ),
        'norm_counts_Avg_lg10_Expr_C_8_S' => array(
            'color' => '#FD61D1',
            'name' => 'Avg lg10 Expr C 8 S'
        ),
        'norm_counts_Avg_lg10_Expr_C_9_S' => array(
            'color' => '#FF67A4',
            'name' => 'Avg lg10 Expr C 9 S'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'lg10 Expr for all Samples',
        'sidelabel' => 'lg10 Expr'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Avg_log10_Expr_Sc_C_0_S','lg2_avg_Avg_log10_Expr_Sc_C_10_S','lg2_avg_Avg_log10_Expr_Sc_C_11_S','lg2_avg_Avg_log10_Expr_Sc_C_12_S','lg2_avg_Avg_log10_Expr_Sc_C_13_S','lg2_avg_Avg_log10_Expr_Sc_C_14_S','lg2_avg_Avg_log10_Expr_Sc_C_1_S','lg2_avg_Avg_log10_Expr_Sc_C_2_S','lg2_avg_Avg_log10_Expr_Sc_C_3_S','lg2_avg_Avg_log10_Expr_Sc_C_4_S','lg2_avg_Avg_log10_Expr_Sc_C_5_S','lg2_avg_Avg_log10_Expr_Sc_C_6_S','lg2_avg_Avg_log10_Expr_Sc_C_7_S','lg2_avg_Avg_log10_Expr_Sc_C_8_S','lg2_avg_Avg_log10_Expr_Sc_C_9_S'),

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
        'contrast_A_bulk_rll308_logFC_PE_SOX10_vs_PE_neg' => array(
            'name' => 'bulk rll308 logFC PE SOX10 vs PE neg',
            'slider_min' => -8,
            'slider_max' => 8,
            'default_low' => -8,
            'default_high' => 8
        ),
        'contrast_A_bulk_rll308_padj_PE_SOX10_vs_PE_neg' => array(
            'name' => 'bulk rll308 padj PE SOX10 vs PE neg',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_A_bulk_rll308_lg10p_PE_SOX10_vs_PE_neg' => array(
            'name' => 'bulk rll308 lg10p PE SOX10 vs PE neg',
            'slider_min' => 0,
            'slider_max' => 25,
            'default_low' => 0,
            'default_high' => 25
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'p362_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_X_logFC_Expressed_in_N_Percent_Cells',
        'default-y' => 'norm_counts_Avg_lg10_Expr_C_0_S',
        'selection' => array(
            'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
                'name' => 'logFC Expressed in N Percent Cells'
            ),
            'contrast_A_bulk_rll308_logFC_PE_SOX10_vs_PE_neg' => array(
                'name' => 'bulk rll308 logFC PE SOX10 vs PE neg'
            ),
            'contrast_A_bulk_rll308_padj_PE_SOX10_vs_PE_neg' => array(
                'name' => 'bulk rll308 padj PE SOX10 vs PE neg'
            ),
            'contrast_A_bulk_rll308_lg10p_PE_SOX10_vs_PE_neg' => array(
                'name' => 'bulk rll308 lg10p PE SOX10 vs PE neg'
            ),
            'add_counts_Avg_log10_Expr_S' => array(
                'name' => 'Avg log10 Expr S'
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
            'norm_counts_Avg_lg10_Expr_C_0_S' => array(
                'name' => 's Avg lg10 Expr C 0 S'
            ),
            'norm_counts_Avg_lg10_Expr_C_10_S' => array(
                'name' => 's Avg lg10 Expr C 10 S'
            ),
            'norm_counts_Avg_lg10_Expr_C_11_S' => array(
                'name' => 's Avg lg10 Expr C 11 S'
            ),
            'norm_counts_Avg_lg10_Expr_C_12_S' => array(
                'name' => 's Avg lg10 Expr C 12 S'
            ),
            'norm_counts_Avg_lg10_Expr_C_13_S' => array(
                'name' => 's Avg lg10 Expr C 13 S'
            ),
            'norm_counts_Avg_lg10_Expr_C_14_S' => array(
                'name' => 's Avg lg10 Expr C 14 S'
            ),
            'norm_counts_Avg_lg10_Expr_C_1_S' => array(
                'name' => 's Avg lg10 Expr C 1 S'
            ),
            'norm_counts_Avg_lg10_Expr_C_2_S' => array(
                'name' => 's Avg lg10 Expr C 2 S'
            ),
            'norm_counts_Avg_lg10_Expr_C_3_S' => array(
                'name' => 's Avg lg10 Expr C 3 S'
            ),
            'norm_counts_Avg_lg10_Expr_C_4_S' => array(
                'name' => 's Avg lg10 Expr C 4 S'
            ),
            'norm_counts_Avg_lg10_Expr_C_5_S' => array(
                'name' => 's Avg lg10 Expr C 5 S'
            ),
            'norm_counts_Avg_lg10_Expr_C_6_S' => array(
                'name' => 's Avg lg10 Expr C 6 S'
            ),
            'norm_counts_Avg_lg10_Expr_C_7_S' => array(
                'name' => 's Avg lg10 Expr C 7 S'
            ),
            'norm_counts_Avg_lg10_Expr_C_8_S' => array(
                'name' => 's Avg lg10 Expr C 8 S'
            ),
            'norm_counts_Avg_lg10_Expr_C_9_S' => array(
                'name' => 's Avg lg10 Expr C 9 S'
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
