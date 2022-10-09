<?php

return array(
    'lab' => array(
        'name' => 'Tolar DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'ptl_data',
    'data_db' => array(
            'cat_table_name' => 'SC20209_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'SC20209_sc_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged Expr',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Avg_log10_Expr_B_cell_1' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr B cell 1'
        ),
        'norm_counts_Avg_log10_Expr_B_cell_2' => array(
            'color' => '#D89000',
            'name' => 'Avg log10 Expr B cell 2'
        ),
        'norm_counts_Avg_log10_Expr_DZ_FDC' => array(
            'color' => '#A3A500',
            'name' => 'Avg log10 Expr DZ FDC'
        ),
        'norm_counts_Avg_log10_Expr_HPC' => array(
            'color' => '#39B600',
            'name' => 'Avg log10 Expr HPC'
        ),
        'norm_counts_Avg_log10_Expr_LZ_FDC' => array(
            'color' => '#00BF7D',
            'name' => 'Avg log10 Expr LZ FDC'
        ),
        'norm_counts_Avg_log10_Expr_MedRC' => array(
            'color' => '#00BFC4',
            'name' => 'Avg log10 Expr MedRC'
        ),
        'norm_counts_Avg_log10_Expr_MRC_IFR' => array(
            'color' => '#00B0F6',
            'name' => 'Avg log10 Expr MRC IFR'
        ),
        'norm_counts_Avg_log10_Expr_Other' => array(
            'color' => '#9590FF',
            'name' => 'Avg log10 Expr Other'
        ),
        'norm_counts_Avg_log10_Expr_TBRC' => array(
            'color' => '#E76BF3',
            'name' => 'Avg log10 Expr TBRC'
        ),
        'norm_counts_Avg_log10_Expr_T_Cell' => array(
            'color' => '#FF62BC',
            'name' => 'Avg log10 Expr T Cell'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'lg10 Expr for all Samples',
        'sidelabel' => 'lg10 Expr'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Avg_log10_Expr_Sc_B_cell_1','lg2_avg_Avg_log10_Expr_Sc_B_cell_2','lg2_avg_Avg_log10_Expr_Sc_DZ_FDC','lg2_avg_Avg_log10_Expr_Sc_HPC','lg2_avg_Avg_log10_Expr_Sc_LZ_FDC','lg2_avg_Avg_log10_Expr_Sc_MedRC','lg2_avg_Avg_log10_Expr_Sc_MRC_IFR','lg2_avg_Avg_log10_Expr_Sc_Other','lg2_avg_Avg_log10_Expr_Sc_TBRC','lg2_avg_Avg_log10_Expr_Sc_T_Cell'),

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
        'contrast_1_logFC_DZ_vs_LZ_FDC' => array(
            'name' => 'logFC DZ vs LZ FDC',
            'slider_min' => -7,
            'slider_max' => 7,
            'default_low' => -7,
            'default_high' => 7
        ),
        'contrast_1_logFC_DGE_DZ_vs_LZ_FDC' => array(
            'name' => 'logFC DGE DZ vs LZ FDC',
            'slider_min' => -7,
            'slider_max' => 7,
            'default_low' => -7,
            'default_high' => 7
        ),
        'contrast_1_padj_DGE_DZ_vs_LZ_FDC' => array(
            'name' => 'padj DGE DZ vs LZ FDC',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_DGE_B_cells_1_vs_B_cells_2' => array(
            'name' => 'logFC DGE B cells 1 vs B cells 2',
            'slider_min' => -8,
            'slider_max' => 4,
            'default_low' => -8,
            'default_high' => 4
        ),
        'contrast_2_padj_DGE_B_cells_1_vs_B_cells_2' => array(
            'name' => 'padj DGE B cells 1 vs B cells 2',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'add_counts_B_cell_1_Residuals' => array(
            'name' => 'B cell 1 Residuals',
            'slider_min' => -4,
            'slider_max' => 2,
            'default_low' => -4,
            'default_high' => 2
        ),
        'add_counts_B_cell_2_Residuals' => array(
            'name' => 'B cell 2 Residuals',
            'slider_min' => -4,
            'slider_max' => 2,
            'default_low' => -4,
            'default_high' => 2
        ),
        'add_counts_DZ_FDC_Residuals' => array(
            'name' => 'DZ FDC Residuals',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'add_counts_HPC_Residuals' => array(
            'name' => 'HPC Residuals',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'add_counts_LZ_FDC_Residuals' => array(
            'name' => 'LZ FDC Residuals',
            'slider_min' => -4,
            'slider_max' => 3,
            'default_low' => -4,
            'default_high' => 3
        ),
        'add_counts_MedRC_Residuals' => array(
            'name' => 'MedRC Residuals',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'add_counts_MRC_IFR_Residuals' => array(
            'name' => 'MRC IFR Residuals',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'add_counts_Other_Residuals' => array(
            'name' => 'Other Residuals',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'add_counts_TBRC_Residuals' => array(
            'name' => 'TBRC Residuals',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'add_counts_T_Cell_Residuals' => array(
            'name' => 'T Cell Residuals',
            'slider_min' => -4,
            'slider_max' => 3,
            'default_low' => -4,
            'default_high' => 3
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'SC20209_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'add_counts_Avg_log10_Expr_all',
        'default-y' => 'norm_counts_Avg_log10_Expr_B_cell_1',
        'selection' => array(
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg log10 Expr all'
            ),
            'norm_counts_Avg_log10_Expr_B_cell_1' => array(
                'name' => 's Avg log10 Expr B cell 1'
            ),
            'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
                'name' => 'logFC Expressed in N Percent Cells'
            ),
            'contrast_1_logFC_DZ_vs_LZ_FDC' => array(
                'name' => 'logFC DZ vs LZ FDC'
            ),
            'contrast_1_logFC_DGE_DZ_vs_LZ_FDC' => array(
                'name' => 'logFC DGE DZ vs LZ FDC'
            ),
            'contrast_2_logFC_DGE_B_cells_1_vs_B_cells_2' => array(
                'name' => 'logFC DGE B cells 1 vs B cells 2'
            ),
            'contrast_1_lg10p_DZ_vs_LZ_FDC' => array(
                'name' => 'lg10p DZ vs LZ FDC'
            ),
            'contrast_1_lg10p_DGE_DZ_vs_LZ_FDC' => array(
                'name' => 'lg10p DGE DZ vs LZ FDC'
            ),
            'contrast_2_lg10p_DGE_B_cells_1_vs_B_cells_2' => array(
                'name' => 'lg10p DGE B cells 1 vs B cells 2'
            ),
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg log10 Expr all'
            ),
            'add_counts_Avg_log10_Expr_CXCL13ICPE24h' => array(
                'name' => 'Avg log10 Expr CXCL13ICPE24h'
            ),
            'norm_counts_Avg_log10_Expr_B_cell_1' => array(
                'name' => 's Avg log10 Expr B cell 1'
            ),
            'norm_counts_Avg_log10_Expr_B_cell_2' => array(
                'name' => 's Avg log10 Expr B cell 2'
            ),
            'norm_counts_Avg_log10_Expr_DZ_FDC' => array(
                'name' => 's Avg log10 Expr DZ FDC'
            ),
            'norm_counts_Avg_log10_Expr_HPC' => array(
                'name' => 's Avg log10 Expr HPC'
            ),
            'norm_counts_Avg_log10_Expr_LZ_FDC' => array(
                'name' => 's Avg log10 Expr LZ FDC'
            ),
            'norm_counts_Avg_log10_Expr_MedRC' => array(
                'name' => 's Avg log10 Expr MedRC'
            ),
            'norm_counts_Avg_log10_Expr_MRC_IFR' => array(
                'name' => 's Avg log10 Expr MRC IFR'
            ),
            'norm_counts_Avg_log10_Expr_Other' => array(
                'name' => 's Avg log10 Expr Other'
            ),
            'norm_counts_Avg_log10_Expr_TBRC' => array(
                'name' => 's Avg log10 Expr TBRC'
            ),
            'norm_counts_Avg_log10_Expr_T_Cell' => array(
                'name' => 's Avg log10 Expr T Cell'
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
            'add_MA_cts_MA_Avg_DZ_vs_LZ_FDC' => array(
                'name' => 'MA Avg DZ vs LZ FDC'
            ),
            'add_MA_cts_MA_Avg_DGE_DZ_vs_LZ_FDC' => array(
                'name' => 'MA Avg DGE DZ vs LZ FDC'
            ),
            'add_MA_cts_MA_Avg_DGE_B_cells_1_vs_B_cells_2' => array(
                'name' => 'MA Avg DGE B cells 1 vs B cells 2'
            ),
            'add_counts_B_cell_1_Residuals' => array(
                'name' => 'B cell 1 Residuals'
            ),
            'add_counts_B_cell_2_Residuals' => array(
                'name' => 'B cell 2 Residuals'
            ),
            'add_counts_DZ_FDC_Residuals' => array(
                'name' => 'DZ FDC Residuals'
            ),
            'add_counts_HPC_Residuals' => array(
                'name' => 'HPC Residuals'
            ),
            'add_counts_LZ_FDC_Residuals' => array(
                'name' => 'LZ FDC Residuals'
            ),
            'add_counts_MedRC_Residuals' => array(
                'name' => 'MedRC Residuals'
            ),
            'add_counts_MRC_IFR_Residuals' => array(
                'name' => 'MRC IFR Residuals'
            ),
            'add_counts_Other_Residuals' => array(
                'name' => 'Other Residuals'
            ),
            'add_counts_TBRC_Residuals' => array(
                'name' => 'TBRC Residuals'
            ),
            'add_counts_T_Cell_Residuals' => array(
                'name' => 'T Cell Residuals'
            )
        )
    )
//End scatterplot
);
