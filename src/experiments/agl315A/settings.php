<?php

return array(
    'lab' => array(
        'name' => 'Gould DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'csl_data',
    'data_db' => array(
            'cat_table_name' => 'agl315A_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'agl315A_sc_rna_seq_table',
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
        'norm_counts_Avg_lg10_Expr_C_1_Ctrl' => array(
            'color' => '#D39200',
            'name' => 'Avg lg10 Expr C 1 Ctrl'
        ),
        'norm_counts_Avg_lg10_Expr_C_1_Prad' => array(
            'color' => '#D39200',
            'name' => 'Avg lg10 Expr C 1 Prad'
        ),
        'norm_counts_Avg_lg10_Expr_C_2_Ctrl' => array(
            'color' => '#93AA00',
            'name' => 'Avg lg10 Expr C 2 Ctrl'
        ),
        'norm_counts_Avg_lg10_Expr_C_2_Prad' => array(
            'color' => '#93AA00',
            'name' => 'Avg lg10 Expr C 2 Prad'
        ),
        'norm_counts_Avg_lg10_Expr_C_3_Ctrl' => array(
            'color' => '#00BA38',
            'name' => 'Avg lg10 Expr C 3 Ctrl'
        ),
        'norm_counts_Avg_lg10_Expr_C_3_Prad' => array(
            'color' => '#00BA38',
            'name' => 'Avg lg10 Expr C 3 Prad'
        ),
        'norm_counts_Avg_lg10_Expr_C_4_Ctrl' => array(
            'color' => '#00C19F',
            'name' => 'Avg lg10 Expr C 4 Ctrl'
        ),
        'norm_counts_Avg_lg10_Expr_C_4_Prad' => array(
            'color' => '#00C19F',
            'name' => 'Avg lg10 Expr C 4 Prad'
        ),
        'norm_counts_Avg_lg10_Expr_C_5_Ctrl' => array(
            'color' => '#00B9E3',
            'name' => 'Avg lg10 Expr C 5 Ctrl'
        ),
        'norm_counts_Avg_lg10_Expr_C_5_Prad' => array(
            'color' => '#00B9E3',
            'name' => 'Avg lg10 Expr C 5 Prad'
        ),
        'norm_counts_Avg_lg10_Expr_C_6_Ctrl' => array(
            'color' => '#619CFF',
            'name' => 'Avg lg10 Expr C 6 Ctrl'
        ),
        'norm_counts_Avg_lg10_Expr_C_6_Prad' => array(
            'color' => '#619CFF',
            'name' => 'Avg lg10 Expr C 6 Prad'
        ),
        'norm_counts_Avg_lg10_Expr_C_7_Ctrl' => array(
            'color' => '#DB72FB',
            'name' => 'Avg lg10 Expr C 7 Ctrl'
        ),
        'norm_counts_Avg_lg10_Expr_C_7_Prad' => array(
            'color' => '#DB72FB',
            'name' => 'Avg lg10 Expr C 7 Prad'
        ),
        'norm_counts_Avg_lg10_Expr_C_8_Ctrl' => array(
            'color' => '#FF61C3',
            'name' => 'Avg lg10 Expr C 8 Ctrl'
        ),
        'norm_counts_Avg_lg10_Expr_C_8_Prad' => array(
            'color' => '#FF61C3',
            'name' => 'Avg lg10 Expr C 8 Prad'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'lg10 Expr for all Samples',
        'sidelabel' => 'lg10 Expr'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Avg_log10_Expr_Sc_C_0_Ctrl','lg2_avg_Avg_log10_Expr_Sc_C_0_Prad','lg2_avg_Avg_log10_Expr_Sc_C_1_Ctrl','lg2_avg_Avg_log10_Expr_Sc_C_1_Prad','lg2_avg_Avg_log10_Expr_Sc_C_2_Ctrl','lg2_avg_Avg_log10_Expr_Sc_C_2_Prad','lg2_avg_Avg_log10_Expr_Sc_C_3_Ctrl','lg2_avg_Avg_log10_Expr_Sc_C_3_Prad','lg2_avg_Avg_log10_Expr_Sc_C_4_Ctrl','lg2_avg_Avg_log10_Expr_Sc_C_4_Prad','lg2_avg_Avg_log10_Expr_Sc_C_5_Ctrl','lg2_avg_Avg_log10_Expr_Sc_C_5_Prad','lg2_avg_Avg_log10_Expr_Sc_C_6_Ctrl','lg2_avg_Avg_log10_Expr_Sc_C_6_Prad','lg2_avg_Avg_log10_Expr_Sc_C_7_Ctrl','lg2_avg_Avg_log10_Expr_Sc_C_7_Prad','lg2_avg_Avg_log10_Expr_Sc_C_8_Ctrl','lg2_avg_Avg_log10_Expr_Sc_C_8_Prad'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_A_logFC_bulkRNASeq_agl298_DMSO_3d_vs_Prad_3d' => array(
            'name' => 'logFC bulkRNASeq agl298 DMSO 3d vs Prad 3d',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_A_lg10p_bulkRNASeq_agl298_DMSO_3d_vs_Prad_3d' => array(
            'name' => 'lg10p bulkRNASeq agl298 DMSO 3d vs Prad 3d',
            'slider_min' => 0,
            'slider_max' => 144,
            'default_low' => 0,
            'default_high' => 144
        ),
        'contrast_A_padj_bulkRNASeq_agl298_DMSO_3d_vs_Prad_3d' => array(
            'name' => 'padj bulkRNASeq agl298 DMSO 3d vs Prad 3d',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_A_logFC_bulkRNASeq_agl298_DMSO_14d_vs_Prad_14d' => array(
            'name' => 'logFC bulkRNASeq agl298 DMSO 14d vs Prad 14d',
            'slider_min' => -5,
            'slider_max' => 4,
            'default_low' => -5,
            'default_high' => 4
        ),
        'contrast_A_lg10p_bulkRNASeq_agl298_DMSO_14d_vs_Prad_14d' => array(
            'name' => 'lg10p bulkRNASeq agl298 DMSO 14d vs Prad 14d',
            'slider_min' => 0,
            'slider_max' => 289,
            'default_low' => 0,
            'default_high' => 289
        ),
        'contrast_A_padj_bulkRNASeq_agl298_DMSO_14d_vs_Prad_14d' => array(
            'name' => 'padj bulkRNASeq agl298 DMSO 14d vs Prad 14d',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
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
        'contrast_C3_avg_diff_Cluster_3' => array(
            'name' => '3 avg diff Cluster 3',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_C4_avg_diff_Cluster_4' => array(
            'name' => '4 avg diff Cluster 4',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_C5_avg_diff_Cluster_5' => array(
            'name' => '5 avg diff Cluster 5',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_C6_avg_diff_Cluster_6' => array(
            'name' => '6 avg diff Cluster 6',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_C7_avg_diff_Cluster_7' => array(
            'name' => '7 avg diff Cluster 7',
            'slider_min' => -1,
            'slider_max' => 4,
            'default_low' => -1,
            'default_high' => 4
        ),
        'contrast_C8_avg_diff_Cluster_8' => array(
            'name' => '8 avg diff Cluster 8',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'contrast_1_logFC_glmG_Prad_vs_Ctrl' => array(
            'name' => 'logFC glmG Prad vs Ctrl',
            'slider_min' => -7,
            'slider_max' => 7,
            'default_low' => -7,
            'default_high' => 7
        ),
        'contrast_1_padj_glmG_Prad_vs_Ctrl' => array(
            'name' => 'padj glmG Prad vs Ctrl',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_1_lg10p_glmG_Prad_vs_Ctrl' => array(
            'name' => 'lg10p glmG Prad vs Ctrl',
            'slider_min' => 0,
            'slider_max' => 320,
            'default_low' => 0,
            'default_high' => 320
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'agl315A_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_X_logFC_Expressed_in_N_Percent_Cells',
        'default-y' => 'norm_counts_Avg_lg10_Expr_C_0_Ctrl',
        'selection' => array(
            'contrast_A_logFC_bulkRNASeq_agl298_DMSO_3d_vs_Prad_3d' => array(
                'name' => 'logFC bulkRNASeq agl298 DMSO 3d vs Prad 3d'
            ),
            'contrast_A_lg10p_bulkRNASeq_agl298_DMSO_3d_vs_Prad_3d' => array(
                'name' => 'lg10p bulkRNASeq agl298 DMSO 3d vs Prad 3d'
            ),
            'contrast_A_padj_bulkRNASeq_agl298_DMSO_3d_vs_Prad_3d' => array(
                'name' => 'padj bulkRNASeq agl298 DMSO 3d vs Prad 3d'
            ),
            'contrast_A_logFC_bulkRNASeq_agl298_DMSO_14d_vs_Prad_14d' => array(
                'name' => 'logFC bulkRNASeq agl298 DMSO 14d vs Prad 14d'
            ),
            'contrast_A_lg10p_bulkRNASeq_agl298_DMSO_14d_vs_Prad_14d' => array(
                'name' => 'lg10p bulkRNASeq agl298 DMSO 14d vs Prad 14d'
            ),
            'contrast_A_padj_bulkRNASeq_agl298_DMSO_14d_vs_Prad_14d' => array(
                'name' => 'padj bulkRNASeq agl298 DMSO 14d vs Prad 14d'
            ),
            'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
                'name' => 'logFC Expressed in N Percent Cells'
            ),
            'contrast_C0_avg_diff_Cluster_0' => array(
                'name' => '0 avg diff Cluster 0'
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
            'contrast_1_logFC_glmG_Prad_vs_Ctrl' => array(
                'name' => 'logFC glmG Prad vs Ctrl'
            ),
            'contrast_1_padj_glmG_Prad_vs_Ctrl' => array(
                'name' => 'padj glmG Prad vs Ctrl'
            ),
            'contrast_1_lg10p_glmG_Prad_vs_Ctrl' => array(
                'name' => 'lg10p glmG Prad vs Ctrl'
            ),
            'add_counts_Avg_log10_Expr_Ctrl' => array(
                'name' => 'Avg log10 Expr Ctrl'
            ),
            'add_counts_Avg_log10_Expr_Prad' => array(
                'name' => 'Avg log10 Expr Prad'
            ),
            'add_counts_Avg_log10_Expr_C_0' => array(
                'name' => 'Avg log10 Expr C 0'
            ),
            'add_counts_Avg_log10_Expr_C_1' => array(
                'name' => 'Avg log10 Expr C 1'
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
