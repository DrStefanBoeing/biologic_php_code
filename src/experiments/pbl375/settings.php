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
            'cat_table_name' => 'pbl375_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'pbl375_sc_rna_seq_table',
    'primary_gene_symbol' => 'hgnc_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged Expr',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Avg_lg10_Expr_C_0_Endo' => array(
            'color' => '#F8766D',
            'name' => 'Avg lg10 Expr C 0 Endo'
        ),
        'norm_counts_Avg_lg10_Expr_C_0_MESp5' => array(
            'color' => '#F8766D',
            'name' => 'Avg lg10 Expr C 0 MESp5'
        ),
        'norm_counts_Avg_lg10_Expr_C_10_Endo' => array(
            'color' => '#DB8E00',
            'name' => 'Avg lg10 Expr C 10 Endo'
        ),
        'norm_counts_Avg_lg10_Expr_C_10_MESp5' => array(
            'color' => '#DB8E00',
            'name' => 'Avg lg10 Expr C 10 MESp5'
        ),
        'norm_counts_Avg_lg10_Expr_C_1_Endo' => array(
            'color' => '#AEA200',
            'name' => 'Avg lg10 Expr C 1 Endo'
        ),
        'norm_counts_Avg_lg10_Expr_C_1_MESp5' => array(
            'color' => '#AEA200',
            'name' => 'Avg lg10 Expr C 1 MESp5'
        ),
        'norm_counts_Avg_lg10_Expr_C_2_Endo' => array(
            'color' => '#64B200',
            'name' => 'Avg lg10 Expr C 2 Endo'
        ),
        'norm_counts_Avg_lg10_Expr_C_2_MESp5' => array(
            'color' => '#64B200',
            'name' => 'Avg lg10 Expr C 2 MESp5'
        ),
        'norm_counts_Avg_lg10_Expr_C_3_Endo' => array(
            'color' => '#00BD5C',
            'name' => 'Avg lg10 Expr C 3 Endo'
        ),
        'norm_counts_Avg_lg10_Expr_C_3_MESp5' => array(
            'color' => '#00BD5C',
            'name' => 'Avg lg10 Expr C 3 MESp5'
        ),
        'norm_counts_Avg_lg10_Expr_C_4_Endo' => array(
            'color' => '#00C1A7',
            'name' => 'Avg lg10 Expr C 4 Endo'
        ),
        'norm_counts_Avg_lg10_Expr_C_4_MESp5' => array(
            'color' => '#00C1A7',
            'name' => 'Avg lg10 Expr C 4 MESp5'
        ),
        'norm_counts_Avg_lg10_Expr_C_5_Endo' => array(
            'color' => '#00BADE',
            'name' => 'Avg lg10 Expr C 5 Endo'
        ),
        'norm_counts_Avg_lg10_Expr_C_5_MESp5' => array(
            'color' => '#00BADE',
            'name' => 'Avg lg10 Expr C 5 MESp5'
        ),
        'norm_counts_Avg_lg10_Expr_C_6_Endo' => array(
            'color' => '#00A6FF',
            'name' => 'Avg lg10 Expr C 6 Endo'
        ),
        'norm_counts_Avg_lg10_Expr_C_6_MESp5' => array(
            'color' => '#00A6FF',
            'name' => 'Avg lg10 Expr C 6 MESp5'
        ),
        'norm_counts_Avg_lg10_Expr_C_7_Endo' => array(
            'color' => '#B385FF',
            'name' => 'Avg lg10 Expr C 7 Endo'
        ),
        'norm_counts_Avg_lg10_Expr_C_7_MESp5' => array(
            'color' => '#B385FF',
            'name' => 'Avg lg10 Expr C 7 MESp5'
        ),
        'norm_counts_Avg_lg10_Expr_C_8_Endo' => array(
            'color' => '#EF67EB',
            'name' => 'Avg lg10 Expr C 8 Endo'
        ),
        'norm_counts_Avg_lg10_Expr_C_8_MESp5' => array(
            'color' => '#EF67EB',
            'name' => 'Avg lg10 Expr C 8 MESp5'
        ),
        'norm_counts_Avg_lg10_Expr_C_9_Endo' => array(
            'color' => '#FF63B6',
            'name' => 'Avg lg10 Expr C 9 Endo'
        ),
        'norm_counts_Avg_lg10_Expr_C_9_MESp5' => array(
            'color' => '#FF63B6',
            'name' => 'Avg lg10 Expr C 9 MESp5'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'lg10 Expr for all Samples',
        'sidelabel' => 'lg10 Expr'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Avg_log10_Expr_Sc_C_0_Endo','lg2_avg_Avg_log10_Expr_Sc_C_0_MESp5','lg2_avg_Avg_log10_Expr_Sc_C_10_Endo','lg2_avg_Avg_log10_Expr_Sc_C_10_MESp5','lg2_avg_Avg_log10_Expr_Sc_C_1_Endo','lg2_avg_Avg_log10_Expr_Sc_C_1_MESp5','lg2_avg_Avg_log10_Expr_Sc_C_2_Endo','lg2_avg_Avg_log10_Expr_Sc_C_2_MESp5','lg2_avg_Avg_log10_Expr_Sc_C_3_Endo','lg2_avg_Avg_log10_Expr_Sc_C_3_MESp5','lg2_avg_Avg_log10_Expr_Sc_C_4_Endo','lg2_avg_Avg_log10_Expr_Sc_C_4_MESp5','lg2_avg_Avg_log10_Expr_Sc_C_5_Endo','lg2_avg_Avg_log10_Expr_Sc_C_5_MESp5','lg2_avg_Avg_log10_Expr_Sc_C_6_Endo','lg2_avg_Avg_log10_Expr_Sc_C_6_MESp5','lg2_avg_Avg_log10_Expr_Sc_C_7_Endo','lg2_avg_Avg_log10_Expr_Sc_C_7_MESp5','lg2_avg_Avg_log10_Expr_Sc_C_8_Endo','lg2_avg_Avg_log10_Expr_Sc_C_8_MESp5','lg2_avg_Avg_log10_Expr_Sc_C_9_Endo','lg2_avg_Avg_log10_Expr_Sc_C_9_MESp5'),

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
        'contrast_C0_avg_diff_Cluster_0' => array(
            'name' => '0 avg diff Cluster 0',
            'slider_min' => 0,
            'slider_max' => 2,
            'default_low' => 0,
            'default_high' => 2
        ),
        'contrast_C2_avg_diff_Cluster_2' => array(
            'name' => '2 avg diff Cluster 2',
            'slider_min' => -1,
            'slider_max' => 3,
            'default_low' => -1,
            'default_high' => 3
        ),
        'contrast_C3_avg_diff_Cluster_3' => array(
            'name' => '3 avg diff Cluster 3',
            'slider_min' => -1,
            'slider_max' => 3,
            'default_low' => -1,
            'default_high' => 3
        ),
        'contrast_C4_avg_diff_Cluster_4' => array(
            'name' => '4 avg diff Cluster 4',
            'slider_min' => -1,
            'slider_max' => 2,
            'default_low' => -1,
            'default_high' => 2
        ),
        'contrast_C5_avg_diff_Cluster_5' => array(
            'name' => '5 avg diff Cluster 5',
            'slider_min' => -4,
            'slider_max' => 3,
            'default_low' => -4,
            'default_high' => 3
        ),
        'contrast_C6_avg_diff_Cluster_6' => array(
            'name' => '6 avg diff Cluster 6',
            'slider_min' => -2,
            'slider_max' => 3,
            'default_low' => -2,
            'default_high' => 3
        ),
        'contrast_C7_avg_diff_Cluster_7' => array(
            'name' => '7 avg diff Cluster 7',
            'slider_min' => -4,
            'slider_max' => 2,
            'default_low' => -4,
            'default_high' => 2
        ),
        'contrast_C8_avg_diff_Cluster_8' => array(
            'name' => '8 avg diff Cluster 8',
            'slider_min' => -5,
            'slider_max' => 6,
            'default_low' => -5,
            'default_high' => 6
        ),
        'contrast_C9_avg_diff_Cluster_9' => array(
            'name' => '9 avg diff Cluster 9',
            'slider_min' => -4,
            'slider_max' => 6,
            'default_low' => -4,
            'default_high' => 6
        ),
        'contrast_C10_avg_diff_Cluster_10' => array(
            'name' => '10 avg diff Cluster 10',
            'slider_min' => -4,
            'slider_max' => 2,
            'default_low' => -4,
            'default_high' => 2
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'pbl375_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_X_logFC_Expressed_in_N_Percent_Cells',
        'default-y' => 'norm_counts_Avg_lg10_Expr_C_0_Endo',
        'selection' => array(
            'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
                'name' => 'logFC Expressed in N Percent Cells'
            ),
            'contrast_C0_avg_diff_Cluster_0' => array(
                'name' => '0 avg diff Cluster 0'
            ),
            'contrast_C2_avg_diff_Cluster_2' => array(
                'name' => '2 avg diff Cluster 2'
            ),
            'contrast_C3_avg_diff_Cluster_3' => array(
                'name' => '3 avg diff Cluster 3'
            ),
            'contrast_C4_avg_diff_Cluster_4' => array(
                'name' => '4 avg diff Cluster 4'
            ),
            'contrast_C5_avg_diff_Cluster_5' => array(
                'name' => '5 avg diff Cluster 5'
            ),
            'contrast_C6_avg_diff_Cluster_6' => array(
                'name' => '6 avg diff Cluster 6'
            ),
            'contrast_C7_avg_diff_Cluster_7' => array(
                'name' => '7 avg diff Cluster 7'
            ),
            'contrast_C8_avg_diff_Cluster_8' => array(
                'name' => '8 avg diff Cluster 8'
            ),
            'contrast_C9_avg_diff_Cluster_9' => array(
                'name' => '9 avg diff Cluster 9'
            ),
            'contrast_C10_avg_diff_Cluster_10' => array(
                'name' => '10 avg diff Cluster 10'
            ),
            'add_counts_Avg_log10_Expr_Endo' => array(
                'name' => 'Avg log10 Expr Endo'
            ),
            'add_counts_Avg_log10_Expr_MESp5' => array(
                'name' => 'Avg log10 Expr MESp5'
            ),
            'add_counts_Avg_log10_Expr_C_0' => array(
                'name' => 'Avg log10 Expr C 0'
            ),
            'add_counts_Avg_log10_Expr_C_1' => array(
                'name' => 'Avg log10 Expr C 1'
            ),
            'add_counts_Avg_log10_Expr_C_10' => array(
                'name' => 'Avg log10 Expr C 10'
            ),
            'add_counts_Avg_log10_Expr_C_2' => array(
                'name' => 'Avg log10 Expr C 2'
            ),
            'add_counts_Avg_log10_Expr_C_3' => array(
                'name' => 'Avg log10 Expr C 3'
            ),
            'add_counts_Avg_log10_Expr_C_4' => array(
                'name' => 'Avg log10 Expr C 4'
            ),
            'add_counts_Avg_log10_Expr_C_5' => array(
                'name' => 'Avg log10 Expr C 5'
            ),
            'add_counts_Avg_log10_Expr_C_6' => array(
                'name' => 'Avg log10 Expr C 6'
            ),
            'add_counts_Avg_log10_Expr_C_7' => array(
                'name' => 'Avg log10 Expr C 7'
            ),
            'add_counts_Avg_log10_Expr_C_8' => array(
                'name' => 'Avg log10 Expr C 8'
            ),
            'add_counts_Avg_log10_Expr_C_9' => array(
                'name' => 'Avg log10 Expr C 9'
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
            'norm_counts_Avg_lg10_Expr_C_0_Endo' => array(
                'name' => 's Avg lg10 Expr C 0 Endo'
            ),
            'norm_counts_Avg_lg10_Expr_C_0_MESp5' => array(
                'name' => 's Avg lg10 Expr C 0 MESp5'
            ),
            'norm_counts_Avg_lg10_Expr_C_10_Endo' => array(
                'name' => 's Avg lg10 Expr C 10 Endo'
            ),
            'norm_counts_Avg_lg10_Expr_C_10_MESp5' => array(
                'name' => 's Avg lg10 Expr C 10 MESp5'
            ),
            'norm_counts_Avg_lg10_Expr_C_1_Endo' => array(
                'name' => 's Avg lg10 Expr C 1 Endo'
            ),
            'norm_counts_Avg_lg10_Expr_C_1_MESp5' => array(
                'name' => 's Avg lg10 Expr C 1 MESp5'
            ),
            'norm_counts_Avg_lg10_Expr_C_2_Endo' => array(
                'name' => 's Avg lg10 Expr C 2 Endo'
            ),
            'norm_counts_Avg_lg10_Expr_C_2_MESp5' => array(
                'name' => 's Avg lg10 Expr C 2 MESp5'
            ),
            'norm_counts_Avg_lg10_Expr_C_3_Endo' => array(
                'name' => 's Avg lg10 Expr C 3 Endo'
            ),
            'norm_counts_Avg_lg10_Expr_C_3_MESp5' => array(
                'name' => 's Avg lg10 Expr C 3 MESp5'
            ),
            'norm_counts_Avg_lg10_Expr_C_4_Endo' => array(
                'name' => 's Avg lg10 Expr C 4 Endo'
            ),
            'norm_counts_Avg_lg10_Expr_C_4_MESp5' => array(
                'name' => 's Avg lg10 Expr C 4 MESp5'
            ),
            'norm_counts_Avg_lg10_Expr_C_5_Endo' => array(
                'name' => 's Avg lg10 Expr C 5 Endo'
            ),
            'norm_counts_Avg_lg10_Expr_C_5_MESp5' => array(
                'name' => 's Avg lg10 Expr C 5 MESp5'
            ),
            'norm_counts_Avg_lg10_Expr_C_6_Endo' => array(
                'name' => 's Avg lg10 Expr C 6 Endo'
            ),
            'norm_counts_Avg_lg10_Expr_C_6_MESp5' => array(
                'name' => 's Avg lg10 Expr C 6 MESp5'
            ),
            'norm_counts_Avg_lg10_Expr_C_7_Endo' => array(
                'name' => 's Avg lg10 Expr C 7 Endo'
            ),
            'norm_counts_Avg_lg10_Expr_C_7_MESp5' => array(
                'name' => 's Avg lg10 Expr C 7 MESp5'
            ),
            'norm_counts_Avg_lg10_Expr_C_8_Endo' => array(
                'name' => 's Avg lg10 Expr C 8 Endo'
            ),
            'norm_counts_Avg_lg10_Expr_C_8_MESp5' => array(
                'name' => 's Avg lg10 Expr C 8 MESp5'
            ),
            'norm_counts_Avg_lg10_Expr_C_9_Endo' => array(
                'name' => 's Avg lg10 Expr C 9 Endo'
            ),
            'norm_counts_Avg_lg10_Expr_C_9_MESp5' => array(
                'name' => 's Avg lg10 Expr C 9 MESp5'
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
