<?php

return array(
    'lab' => array(
        'name' => 'LovellBadge DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'rll_data',
    'data_db' => array(
            'cat_table_name' => 'GCsubclusteringRLL358B_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'GCsubclusteringRLL358B_sc_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged Expr',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Avg_log10_Expr_C0_E185subC' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C0 E185subC'
        ),
        'norm_counts_Avg_log10_Expr_C0_PD4subC' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C0 PD4subC'
        ),
        'norm_counts_Avg_log10_Expr_C0_PD7subC' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C0 PD7subC'
        ),
        'norm_counts_Avg_log10_Expr_C1_E185subC' => array(
            'color' => '#D39200',
            'name' => 'Avg log10 Expr C1 E185subC'
        ),
        'norm_counts_Avg_log10_Expr_C1_PD4subC' => array(
            'color' => '#D39200',
            'name' => 'Avg log10 Expr C1 PD4subC'
        ),
        'norm_counts_Avg_log10_Expr_C1_PD7subC' => array(
            'color' => '#D39200',
            'name' => 'Avg log10 Expr C1 PD7subC'
        ),
        'norm_counts_Avg_log10_Expr_C2_E185subC' => array(
            'color' => '#93AA00',
            'name' => 'Avg log10 Expr C2 E185subC'
        ),
        'norm_counts_Avg_log10_Expr_C2_PD4subC' => array(
            'color' => '#93AA00',
            'name' => 'Avg log10 Expr C2 PD4subC'
        ),
        'norm_counts_Avg_log10_Expr_C2_PD7subC' => array(
            'color' => '#93AA00',
            'name' => 'Avg log10 Expr C2 PD7subC'
        ),
        'norm_counts_Avg_log10_Expr_C3_E185subC' => array(
            'color' => '#00BA38',
            'name' => 'Avg log10 Expr C3 E185subC'
        ),
        'norm_counts_Avg_log10_Expr_C3_PD4subC' => array(
            'color' => '#00BA38',
            'name' => 'Avg log10 Expr C3 PD4subC'
        ),
        'norm_counts_Avg_log10_Expr_C3_PD7subC' => array(
            'color' => '#00BA38',
            'name' => 'Avg log10 Expr C3 PD7subC'
        ),
        'norm_counts_Avg_log10_Expr_C4_E185subC' => array(
            'color' => '#00C19F',
            'name' => 'Avg log10 Expr C4 E185subC'
        ),
        'norm_counts_Avg_log10_Expr_C4_PD4subC' => array(
            'color' => '#00C19F',
            'name' => 'Avg log10 Expr C4 PD4subC'
        ),
        'norm_counts_Avg_log10_Expr_C4_PD7subC' => array(
            'color' => '#00C19F',
            'name' => 'Avg log10 Expr C4 PD7subC'
        ),
        'norm_counts_Avg_log10_Expr_C5_E185subC' => array(
            'color' => '#00B9E3',
            'name' => 'Avg log10 Expr C5 E185subC'
        ),
        'norm_counts_Avg_log10_Expr_C5_PD4subC' => array(
            'color' => '#00B9E3',
            'name' => 'Avg log10 Expr C5 PD4subC'
        ),
        'norm_counts_Avg_log10_Expr_C5_PD7subC' => array(
            'color' => '#00B9E3',
            'name' => 'Avg log10 Expr C5 PD7subC'
        ),
        'norm_counts_Avg_log10_Expr_C6_E185subC' => array(
            'color' => '#619CFF',
            'name' => 'Avg log10 Expr C6 E185subC'
        ),
        'norm_counts_Avg_log10_Expr_C6_PD4subC' => array(
            'color' => '#619CFF',
            'name' => 'Avg log10 Expr C6 PD4subC'
        ),
        'norm_counts_Avg_log10_Expr_C6_PD7subC' => array(
            'color' => '#619CFF',
            'name' => 'Avg log10 Expr C6 PD7subC'
        ),
        'norm_counts_Avg_log10_Expr_C7_E185subC' => array(
            'color' => '#DB72FB',
            'name' => 'Avg log10 Expr C7 E185subC'
        ),
        'norm_counts_Avg_log10_Expr_C7_PD4subC' => array(
            'color' => '#DB72FB',
            'name' => 'Avg log10 Expr C7 PD4subC'
        ),
        'norm_counts_Avg_log10_Expr_C7_PD7subC' => array(
            'color' => '#DB72FB',
            'name' => 'Avg log10 Expr C7 PD7subC'
        ),
        'norm_counts_Avg_log10_Expr_C8_E185subC' => array(
            'color' => '#FF61C3',
            'name' => 'Avg log10 Expr C8 E185subC'
        ),
        'norm_counts_Avg_log10_Expr_C8_PD4subC' => array(
            'color' => '#FF61C3',
            'name' => 'Avg log10 Expr C8 PD4subC'
        ),
        'norm_counts_Avg_log10_Expr_C8_PD7subC' => array(
            'color' => '#FF61C3',
            'name' => 'Avg log10 Expr C8 PD7subC'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'lg10 Expr for all Samples',
        'sidelabel' => 'lg10 Expr'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Avg_log10_Expr_Sc_C0_E185subC','lg2_avg_Avg_log10_Expr_Sc_C0_PD4subC','lg2_avg_Avg_log10_Expr_Sc_C0_PD7subC','lg2_avg_Avg_log10_Expr_Sc_C1_E185subC','lg2_avg_Avg_log10_Expr_Sc_C1_PD4subC','lg2_avg_Avg_log10_Expr_Sc_C1_PD7subC','lg2_avg_Avg_log10_Expr_Sc_C2_E185subC','lg2_avg_Avg_log10_Expr_Sc_C2_PD4subC','lg2_avg_Avg_log10_Expr_Sc_C2_PD7subC','lg2_avg_Avg_log10_Expr_Sc_C3_E185subC','lg2_avg_Avg_log10_Expr_Sc_C3_PD4subC','lg2_avg_Avg_log10_Expr_Sc_C3_PD7subC','lg2_avg_Avg_log10_Expr_Sc_C4_E185subC','lg2_avg_Avg_log10_Expr_Sc_C4_PD4subC','lg2_avg_Avg_log10_Expr_Sc_C4_PD7subC','lg2_avg_Avg_log10_Expr_Sc_C5_E185subC','lg2_avg_Avg_log10_Expr_Sc_C5_PD4subC','lg2_avg_Avg_log10_Expr_Sc_C5_PD7subC','lg2_avg_Avg_log10_Expr_Sc_C6_E185subC','lg2_avg_Avg_log10_Expr_Sc_C6_PD4subC','lg2_avg_Avg_log10_Expr_Sc_C6_PD7subC','lg2_avg_Avg_log10_Expr_Sc_C7_E185subC','lg2_avg_Avg_log10_Expr_Sc_C7_PD4subC','lg2_avg_Avg_log10_Expr_Sc_C7_PD7subC','lg2_avg_Avg_log10_Expr_Sc_C8_E185subC','lg2_avg_Avg_log10_Expr_Sc_C8_PD4subC','lg2_avg_Avg_log10_Expr_Sc_C8_PD7subC'),

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
        'contrast_1_logFC_DGE_C2_vs_C0_1' => array(
            'name' => 'logFC DGE C2 vs C0 1',
            'slider_min' => -8,
            'slider_max' => 6,
            'default_low' => -8,
            'default_high' => 6
        ),
        'contrast_1_padj_DGE_C2_vs_C0_1' => array(
            'name' => 'padj DGE C2 vs C0 1',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_DGE_C2_vs_C6' => array(
            'name' => 'logFC DGE C2 vs C6',
            'slider_min' => -8,
            'slider_max' => 7,
            'default_low' => -8,
            'default_high' => 7
        ),
        'contrast_2_padj_DGE_C2_vs_C6' => array(
            'name' => 'padj DGE C2 vs C6',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_DGE_C2_vs_C5' => array(
            'name' => 'logFC DGE C2 vs C5',
            'slider_min' => -7,
            'slider_max' => 9,
            'default_low' => -7,
            'default_high' => 9
        ),
        'contrast_3_padj_DGE_C2_vs_C5' => array(
            'name' => 'padj DGE C2 vs C5',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_logFC_DGE_C5_vs_C0_1' => array(
            'name' => 'logFC DGE C5 vs C0 1',
            'slider_min' => -7,
            'slider_max' => 7,
            'default_low' => -7,
            'default_high' => 7
        ),
        'contrast_4_padj_DGE_C5_vs_C0_1' => array(
            'name' => 'padj DGE C5 vs C0 1',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
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
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'add_counts_C2_Residuals' => array(
            'name' => 'C2 Residuals',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_counts_C3_Residuals' => array(
            'name' => 'C3 Residuals',
            'slider_min' => -2,
            'slider_max' => 1,
            'default_low' => -2,
            'default_high' => 1
        ),
        'add_counts_C4_Residuals' => array(
            'name' => 'C4 Residuals',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
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
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'add_counts_C8_Residuals' => array(
            'name' => 'C8 Residuals',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'GCsubclusteringRLL358B_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'add_counts_Avg_log10_Expr_all',
        'default-y' => 'norm_counts_Avg_log10_Expr_C0_E185subC',
        'selection' => array(
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg log10 Expr all'
            ),
            'norm_counts_Avg_log10_Expr_C0_E185subC' => array(
                'name' => 's Avg log10 Expr C0 E185subC'
            ),
            'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
                'name' => 'logFC Expressed in N Percent Cells'
            ),
            'contrast_1_logFC_DGE_C2_vs_C0_1' => array(
                'name' => 'logFC DGE C2 vs C0 1'
            ),
            'contrast_2_logFC_DGE_C2_vs_C6' => array(
                'name' => 'logFC DGE C2 vs C6'
            ),
            'contrast_3_logFC_DGE_C2_vs_C5' => array(
                'name' => 'logFC DGE C2 vs C5'
            ),
            'contrast_4_logFC_DGE_C5_vs_C0_1' => array(
                'name' => 'logFC DGE C5 vs C0 1'
            ),
            'contrast_1_lg10p_DGE_C2_vs_C0_1' => array(
                'name' => 'lg10p DGE C2 vs C0 1'
            ),
            'contrast_2_lg10p_DGE_C2_vs_C6' => array(
                'name' => 'lg10p DGE C2 vs C6'
            ),
            'contrast_3_lg10p_DGE_C2_vs_C5' => array(
                'name' => 'lg10p DGE C2 vs C5'
            ),
            'contrast_4_lg10p_DGE_C5_vs_C0_1' => array(
                'name' => 'lg10p DGE C5 vs C0 1'
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
            'add_counts_Avg_log10_Expr_C8' => array(
                'name' => 'Avg log10 Expr C8'
            ),
            'add_counts_Avg_log10_Expr_E185subC' => array(
                'name' => 'Avg log10 Expr E185subC'
            ),
            'add_counts_Avg_log10_Expr_PD4subC' => array(
                'name' => 'Avg log10 Expr PD4subC'
            ),
            'add_counts_Avg_log10_Expr_PD7subC' => array(
                'name' => 'Avg log10 Expr PD7subC'
            ),
            'norm_counts_Avg_log10_Expr_C0_E185subC' => array(
                'name' => 's Avg log10 Expr C0 E185subC'
            ),
            'norm_counts_Avg_log10_Expr_C0_PD4subC' => array(
                'name' => 's Avg log10 Expr C0 PD4subC'
            ),
            'norm_counts_Avg_log10_Expr_C0_PD7subC' => array(
                'name' => 's Avg log10 Expr C0 PD7subC'
            ),
            'norm_counts_Avg_log10_Expr_C1_E185subC' => array(
                'name' => 's Avg log10 Expr C1 E185subC'
            ),
            'norm_counts_Avg_log10_Expr_C1_PD4subC' => array(
                'name' => 's Avg log10 Expr C1 PD4subC'
            ),
            'norm_counts_Avg_log10_Expr_C1_PD7subC' => array(
                'name' => 's Avg log10 Expr C1 PD7subC'
            ),
            'norm_counts_Avg_log10_Expr_C2_E185subC' => array(
                'name' => 's Avg log10 Expr C2 E185subC'
            ),
            'norm_counts_Avg_log10_Expr_C2_PD4subC' => array(
                'name' => 's Avg log10 Expr C2 PD4subC'
            ),
            'norm_counts_Avg_log10_Expr_C2_PD7subC' => array(
                'name' => 's Avg log10 Expr C2 PD7subC'
            ),
            'norm_counts_Avg_log10_Expr_C3_E185subC' => array(
                'name' => 's Avg log10 Expr C3 E185subC'
            ),
            'norm_counts_Avg_log10_Expr_C3_PD4subC' => array(
                'name' => 's Avg log10 Expr C3 PD4subC'
            ),
            'norm_counts_Avg_log10_Expr_C3_PD7subC' => array(
                'name' => 's Avg log10 Expr C3 PD7subC'
            ),
            'norm_counts_Avg_log10_Expr_C4_E185subC' => array(
                'name' => 's Avg log10 Expr C4 E185subC'
            ),
            'norm_counts_Avg_log10_Expr_C4_PD4subC' => array(
                'name' => 's Avg log10 Expr C4 PD4subC'
            ),
            'norm_counts_Avg_log10_Expr_C4_PD7subC' => array(
                'name' => 's Avg log10 Expr C4 PD7subC'
            ),
            'norm_counts_Avg_log10_Expr_C5_E185subC' => array(
                'name' => 's Avg log10 Expr C5 E185subC'
            ),
            'norm_counts_Avg_log10_Expr_C5_PD4subC' => array(
                'name' => 's Avg log10 Expr C5 PD4subC'
            ),
            'norm_counts_Avg_log10_Expr_C5_PD7subC' => array(
                'name' => 's Avg log10 Expr C5 PD7subC'
            ),
            'norm_counts_Avg_log10_Expr_C6_E185subC' => array(
                'name' => 's Avg log10 Expr C6 E185subC'
            ),
            'norm_counts_Avg_log10_Expr_C6_PD4subC' => array(
                'name' => 's Avg log10 Expr C6 PD4subC'
            ),
            'norm_counts_Avg_log10_Expr_C6_PD7subC' => array(
                'name' => 's Avg log10 Expr C6 PD7subC'
            ),
            'norm_counts_Avg_log10_Expr_C7_E185subC' => array(
                'name' => 's Avg log10 Expr C7 E185subC'
            ),
            'norm_counts_Avg_log10_Expr_C7_PD4subC' => array(
                'name' => 's Avg log10 Expr C7 PD4subC'
            ),
            'norm_counts_Avg_log10_Expr_C7_PD7subC' => array(
                'name' => 's Avg log10 Expr C7 PD7subC'
            ),
            'norm_counts_Avg_log10_Expr_C8_E185subC' => array(
                'name' => 's Avg log10 Expr C8 E185subC'
            ),
            'norm_counts_Avg_log10_Expr_C8_PD4subC' => array(
                'name' => 's Avg log10 Expr C8 PD4subC'
            ),
            'norm_counts_Avg_log10_Expr_C8_PD7subC' => array(
                'name' => 's Avg log10 Expr C8 PD7subC'
            ),
            'add_counts_PCA_Dim_1_Loadings' => array(
                'name' => 'PCA Dim 1 Loadings'
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
            'add_counts_PCA_Dim_2_Loadings' => array(
                'name' => 'PCA Dim 2 Loadings'
            ),
            'add_counts_PCA_Dim_20_Loadings' => array(
                'name' => 'PCA Dim 20 Loadings'
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
            'add_MA_cts_MA_Avg_DGE_C2_vs_C0_1' => array(
                'name' => 'MA Avg DGE C2 vs C0 1'
            ),
            'add_MA_cts_MA_Avg_DGE_C2_vs_C6' => array(
                'name' => 'MA Avg DGE C2 vs C6'
            ),
            'add_MA_cts_MA_Avg_DGE_C2_vs_C5' => array(
                'name' => 'MA Avg DGE C2 vs C5'
            ),
            'add_MA_cts_MA_Avg_DGE_C5_vs_C0_1' => array(
                'name' => 'MA Avg DGE C5 vs C0 1'
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
            )
        )
    )
//End scatterplot
);
