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
            'cat_table_name' => 'agl315B_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'agl315B_sc_rna_seq_table',
    'primary_gene_symbol' => 'hgnc_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged Expr',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Avg_log10_Expr_C0_Ctrl' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C0 Ctrl'
        ),
        'norm_counts_Avg_log10_Expr_C0_Prad' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C0 Prad'
        ),
        'norm_counts_Avg_log10_Expr_C1_Ctrl' => array(
            'color' => '#D89000',
            'name' => 'Avg log10 Expr C1 Ctrl'
        ),
        'norm_counts_Avg_log10_Expr_C1_Prad' => array(
            'color' => '#D89000',
            'name' => 'Avg log10 Expr C1 Prad'
        ),
        'norm_counts_Avg_log10_Expr_C2_Ctrl' => array(
            'color' => '#A3A500',
            'name' => 'Avg log10 Expr C2 Ctrl'
        ),
        'norm_counts_Avg_log10_Expr_C2_Prad' => array(
            'color' => '#A3A500',
            'name' => 'Avg log10 Expr C2 Prad'
        ),
        'norm_counts_Avg_log10_Expr_C3_Ctrl' => array(
            'color' => '#39B600',
            'name' => 'Avg log10 Expr C3 Ctrl'
        ),
        'norm_counts_Avg_log10_Expr_C3_Prad' => array(
            'color' => '#39B600',
            'name' => 'Avg log10 Expr C3 Prad'
        ),
        'norm_counts_Avg_log10_Expr_C4_Ctrl' => array(
            'color' => '#00BF7D',
            'name' => 'Avg log10 Expr C4 Ctrl'
        ),
        'norm_counts_Avg_log10_Expr_C4_Prad' => array(
            'color' => '#00BF7D',
            'name' => 'Avg log10 Expr C4 Prad'
        ),
        'norm_counts_Avg_log10_Expr_C5_Ctrl' => array(
            'color' => '#00BFC4',
            'name' => 'Avg log10 Expr C5 Ctrl'
        ),
        'norm_counts_Avg_log10_Expr_C5_Prad' => array(
            'color' => '#00BFC4',
            'name' => 'Avg log10 Expr C5 Prad'
        ),
        'norm_counts_Avg_log10_Expr_C6_Ctrl' => array(
            'color' => '#00B0F6',
            'name' => 'Avg log10 Expr C6 Ctrl'
        ),
        'norm_counts_Avg_log10_Expr_C6_Prad' => array(
            'color' => '#00B0F6',
            'name' => 'Avg log10 Expr C6 Prad'
        ),
        'norm_counts_Avg_log10_Expr_C7_Ctrl' => array(
            'color' => '#9590FF',
            'name' => 'Avg log10 Expr C7 Ctrl'
        ),
        'norm_counts_Avg_log10_Expr_C7_Prad' => array(
            'color' => '#9590FF',
            'name' => 'Avg log10 Expr C7 Prad'
        ),
        'norm_counts_Avg_log10_Expr_C8_Ctrl' => array(
            'color' => '#E76BF3',
            'name' => 'Avg log10 Expr C8 Ctrl'
        ),
        'norm_counts_Avg_log10_Expr_C8_Prad' => array(
            'color' => '#E76BF3',
            'name' => 'Avg log10 Expr C8 Prad'
        ),
        'norm_counts_Avg_log10_Expr_C9_Ctrl' => array(
            'color' => '#FF62BC',
            'name' => 'Avg log10 Expr C9 Ctrl'
        ),
        'norm_counts_Avg_log10_Expr_C9_Prad' => array(
            'color' => '#FF62BC',
            'name' => 'Avg log10 Expr C9 Prad'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'lg10 Expr for all Samples',
        'sidelabel' => 'lg10 Expr'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Avg_log10_Expr_Sc_C0_Ctrl','lg2_avg_Avg_log10_Expr_Sc_C0_Prad','lg2_avg_Avg_log10_Expr_Sc_C1_Ctrl','lg2_avg_Avg_log10_Expr_Sc_C1_Prad','lg2_avg_Avg_log10_Expr_Sc_C2_Ctrl','lg2_avg_Avg_log10_Expr_Sc_C2_Prad','lg2_avg_Avg_log10_Expr_Sc_C3_Ctrl','lg2_avg_Avg_log10_Expr_Sc_C3_Prad','lg2_avg_Avg_log10_Expr_Sc_C4_Ctrl','lg2_avg_Avg_log10_Expr_Sc_C4_Prad','lg2_avg_Avg_log10_Expr_Sc_C5_Ctrl','lg2_avg_Avg_log10_Expr_Sc_C5_Prad','lg2_avg_Avg_log10_Expr_Sc_C6_Ctrl','lg2_avg_Avg_log10_Expr_Sc_C6_Prad','lg2_avg_Avg_log10_Expr_Sc_C7_Ctrl','lg2_avg_Avg_log10_Expr_Sc_C7_Prad','lg2_avg_Avg_log10_Expr_Sc_C8_Ctrl','lg2_avg_Avg_log10_Expr_Sc_C8_Prad','lg2_avg_Avg_log10_Expr_Sc_C9_Ctrl','lg2_avg_Avg_log10_Expr_Sc_C9_Prad'),

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
        'contrast_1_logFC_DGE_Prad_vs_Ctrl' => array(
            'name' => 'logFC DGE Prad vs Ctrl',
            'slider_min' => -7,
            'slider_max' => 7,
            'default_low' => -7,
            'default_high' => 7
        ),
        'contrast_1_padj_DGE_Prad_vs_Ctrl' => array(
            'name' => 'padj DGE Prad vs Ctrl',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_DGE_Prad_Rest_vs_Ctrl_Rest' => array(
            'name' => 'logFC DGE Prad Rest vs Ctrl Rest',
            'slider_min' => -7,
            'slider_max' => 7,
            'default_low' => -7,
            'default_high' => 7
        ),
        'contrast_2_padj_DGE_Prad_Rest_vs_Ctrl_Rest' => array(
            'name' => 'padj DGE Prad Rest vs Ctrl Rest',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_DGE_Prad_C5_vs_Ctrl_C5' => array(
            'name' => 'logFC DGE Prad C5 vs Ctrl C5',
            'slider_min' => -6,
            'slider_max' => 5,
            'default_low' => -6,
            'default_high' => 5
        ),
        'contrast_3_padj_DGE_Prad_C5_vs_Ctrl_C5' => array(
            'name' => 'padj DGE Prad C5 vs Ctrl C5',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_logFC_DGE_Prad_C9_vs_Ctrl_C9' => array(
            'name' => 'logFC DGE Prad C9 vs Ctrl C9',
            'slider_min' => -5,
            'slider_max' => 6,
            'default_low' => -5,
            'default_high' => 6
        ),
        'contrast_4_padj_DGE_Prad_C9_vs_Ctrl_C9' => array(
            'name' => 'padj DGE Prad C9 vs Ctrl C9',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'add_counts_C0_Residuals' => array(
            'name' => 'C0 Residuals',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
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
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_counts_C3_Residuals' => array(
            'name' => 'C3 Residuals',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_counts_C4_Residuals' => array(
            'name' => 'C4 Residuals',
            'slider_min' => -2,
            'slider_max' => 1,
            'default_low' => -2,
            'default_high' => 1
        ),
        'add_counts_C5_Residuals' => array(
            'name' => 'C5 Residuals',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_counts_C6_Residuals' => array(
            'name' => 'C6 Residuals',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
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
        ),
        'add_counts_C9_Residuals' => array(
            'name' => 'C9 Residuals',
            'slider_min' => -1,
            'slider_max' => 4,
            'default_low' => -1,
            'default_high' => 4
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'agl315B_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'add_counts_Avg_log10_Expr_all',
        'default-y' => 'norm_counts_Avg_log10_Expr_C0_Ctrl',
        'selection' => array(
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg log10 Expr all'
            ),
            'norm_counts_Avg_log10_Expr_C0_Ctrl' => array(
                'name' => 's Avg log10 Expr C0 Ctrl'
            ),
            'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
                'name' => 'logFC Expressed in N Percent Cells'
            ),
            'contrast_1_logFC_DGE_Prad_vs_Ctrl' => array(
                'name' => 'logFC DGE Prad vs Ctrl'
            ),
            'contrast_2_logFC_DGE_Prad_Rest_vs_Ctrl_Rest' => array(
                'name' => 'logFC DGE Prad Rest vs Ctrl Rest'
            ),
            'contrast_3_logFC_DGE_Prad_C5_vs_Ctrl_C5' => array(
                'name' => 'logFC DGE Prad C5 vs Ctrl C5'
            ),
            'contrast_4_logFC_DGE_Prad_C9_vs_Ctrl_C9' => array(
                'name' => 'logFC DGE Prad C9 vs Ctrl C9'
            ),
            'contrast_1_lg10p_DGE_Prad_vs_Ctrl' => array(
                'name' => 'lg10p DGE Prad vs Ctrl'
            ),
            'contrast_2_lg10p_DGE_Prad_Rest_vs_Ctrl_Rest' => array(
                'name' => 'lg10p DGE Prad Rest vs Ctrl Rest'
            ),
            'contrast_3_lg10p_DGE_Prad_C5_vs_Ctrl_C5' => array(
                'name' => 'lg10p DGE Prad C5 vs Ctrl C5'
            ),
            'contrast_4_lg10p_DGE_Prad_C9_vs_Ctrl_C9' => array(
                'name' => 'lg10p DGE Prad C9 vs Ctrl C9'
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
            'add_counts_Avg_log10_Expr_C9' => array(
                'name' => 'Avg log10 Expr C9'
            ),
            'add_counts_Avg_log10_Expr_Ctrl' => array(
                'name' => 'Avg log10 Expr Ctrl'
            ),
            'add_counts_Avg_log10_Expr_Prad' => array(
                'name' => 'Avg log10 Expr Prad'
            ),
            'norm_counts_Avg_log10_Expr_C0_Ctrl' => array(
                'name' => 's Avg log10 Expr C0 Ctrl'
            ),
            'norm_counts_Avg_log10_Expr_C0_Prad' => array(
                'name' => 's Avg log10 Expr C0 Prad'
            ),
            'norm_counts_Avg_log10_Expr_C1_Ctrl' => array(
                'name' => 's Avg log10 Expr C1 Ctrl'
            ),
            'norm_counts_Avg_log10_Expr_C1_Prad' => array(
                'name' => 's Avg log10 Expr C1 Prad'
            ),
            'norm_counts_Avg_log10_Expr_C2_Ctrl' => array(
                'name' => 's Avg log10 Expr C2 Ctrl'
            ),
            'norm_counts_Avg_log10_Expr_C2_Prad' => array(
                'name' => 's Avg log10 Expr C2 Prad'
            ),
            'norm_counts_Avg_log10_Expr_C3_Ctrl' => array(
                'name' => 's Avg log10 Expr C3 Ctrl'
            ),
            'norm_counts_Avg_log10_Expr_C3_Prad' => array(
                'name' => 's Avg log10 Expr C3 Prad'
            ),
            'norm_counts_Avg_log10_Expr_C4_Ctrl' => array(
                'name' => 's Avg log10 Expr C4 Ctrl'
            ),
            'norm_counts_Avg_log10_Expr_C4_Prad' => array(
                'name' => 's Avg log10 Expr C4 Prad'
            ),
            'norm_counts_Avg_log10_Expr_C5_Ctrl' => array(
                'name' => 's Avg log10 Expr C5 Ctrl'
            ),
            'norm_counts_Avg_log10_Expr_C5_Prad' => array(
                'name' => 's Avg log10 Expr C5 Prad'
            ),
            'norm_counts_Avg_log10_Expr_C6_Ctrl' => array(
                'name' => 's Avg log10 Expr C6 Ctrl'
            ),
            'norm_counts_Avg_log10_Expr_C6_Prad' => array(
                'name' => 's Avg log10 Expr C6 Prad'
            ),
            'norm_counts_Avg_log10_Expr_C7_Ctrl' => array(
                'name' => 's Avg log10 Expr C7 Ctrl'
            ),
            'norm_counts_Avg_log10_Expr_C7_Prad' => array(
                'name' => 's Avg log10 Expr C7 Prad'
            ),
            'norm_counts_Avg_log10_Expr_C8_Ctrl' => array(
                'name' => 's Avg log10 Expr C8 Ctrl'
            ),
            'norm_counts_Avg_log10_Expr_C8_Prad' => array(
                'name' => 's Avg log10 Expr C8 Prad'
            ),
            'norm_counts_Avg_log10_Expr_C9_Ctrl' => array(
                'name' => 's Avg log10 Expr C9 Ctrl'
            ),
            'norm_counts_Avg_log10_Expr_C9_Prad' => array(
                'name' => 's Avg log10 Expr C9 Prad'
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
            'add_MA_cts_MA_Avg_DGE_Prad_vs_Ctrl' => array(
                'name' => 'MA Avg DGE Prad vs Ctrl'
            ),
            'add_MA_cts_MA_Avg_DGE_Prad_Rest_vs_Ctrl_Rest' => array(
                'name' => 'MA Avg DGE Prad Rest vs Ctrl Rest'
            ),
            'add_MA_cts_MA_Avg_DGE_Prad_C5_vs_Ctrl_C5' => array(
                'name' => 'MA Avg DGE Prad C5 vs Ctrl C5'
            ),
            'add_MA_cts_MA_Avg_DGE_Prad_C9_vs_Ctrl_C9' => array(
                'name' => 'MA Avg DGE Prad C9 vs Ctrl C9'
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
            )
        )
    )
//End scatterplot
);
