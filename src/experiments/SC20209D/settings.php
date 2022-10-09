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
            'cat_table_name' => 'SC20209D_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'SC20209D_sc_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged Expr',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Avg_log10_Expr_C0_Biotin24hFilt' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C0 Biotin24hFilt'
        ),
        'norm_counts_Avg_log10_Expr_C0_Biotin7dFilt' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C0 Biotin7dFilt'
        ),
        'norm_counts_Avg_log10_Expr_C0_CXCL13ICPE24hFilt' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C0 CXCL13ICPE24hFilt'
        ),
        'norm_counts_Avg_log10_Expr_C1_Biotin24hFilt' => array(
            'color' => '#B79F00',
            'name' => 'Avg log10 Expr C1 Biotin24hFilt'
        ),
        'norm_counts_Avg_log10_Expr_C1_Biotin7dFilt' => array(
            'color' => '#B79F00',
            'name' => 'Avg log10 Expr C1 Biotin7dFilt'
        ),
        'norm_counts_Avg_log10_Expr_C1_CXCL13ICPE24hFilt' => array(
            'color' => '#B79F00',
            'name' => 'Avg log10 Expr C1 CXCL13ICPE24hFilt'
        ),
        'norm_counts_Avg_log10_Expr_C2_Biotin24hFilt' => array(
            'color' => '#00BA38',
            'name' => 'Avg log10 Expr C2 Biotin24hFilt'
        ),
        'norm_counts_Avg_log10_Expr_C2_Biotin7dFilt' => array(
            'color' => '#00BA38',
            'name' => 'Avg log10 Expr C2 Biotin7dFilt'
        ),
        'norm_counts_Avg_log10_Expr_C2_CXCL13ICPE24hFilt' => array(
            'color' => '#00BA38',
            'name' => 'Avg log10 Expr C2 CXCL13ICPE24hFilt'
        ),
        'norm_counts_Avg_log10_Expr_C3_Biotin24hFilt' => array(
            'color' => '#00BFC4',
            'name' => 'Avg log10 Expr C3 Biotin24hFilt'
        ),
        'norm_counts_Avg_log10_Expr_C3_Biotin7dFilt' => array(
            'color' => '#00BFC4',
            'name' => 'Avg log10 Expr C3 Biotin7dFilt'
        ),
        'norm_counts_Avg_log10_Expr_C3_CXCL13ICPE24hFilt' => array(
            'color' => '#00BFC4',
            'name' => 'Avg log10 Expr C3 CXCL13ICPE24hFilt'
        ),
        'norm_counts_Avg_log10_Expr_C4_Biotin24hFilt' => array(
            'color' => '#619CFF',
            'name' => 'Avg log10 Expr C4 Biotin24hFilt'
        ),
        'norm_counts_Avg_log10_Expr_C4_Biotin7dFilt' => array(
            'color' => '#619CFF',
            'name' => 'Avg log10 Expr C4 Biotin7dFilt'
        ),
        'norm_counts_Avg_log10_Expr_C4_CXCL13ICPE24hFilt' => array(
            'color' => '#619CFF',
            'name' => 'Avg log10 Expr C4 CXCL13ICPE24hFilt'
        ),
        'norm_counts_Avg_log10_Expr_C5_Biotin24hFilt' => array(
            'color' => '#F564E3',
            'name' => 'Avg log10 Expr C5 Biotin24hFilt'
        ),
        'norm_counts_Avg_log10_Expr_C5_Biotin7dFilt' => array(
            'color' => '#F564E3',
            'name' => 'Avg log10 Expr C5 Biotin7dFilt'
        ),
        'norm_counts_Avg_log10_Expr_C5_CXCL13ICPE24hFilt' => array(
            'color' => '#F564E3',
            'name' => 'Avg log10 Expr C5 CXCL13ICPE24hFilt'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'lg10 Expr for all Samples',
        'sidelabel' => 'lg10 Expr'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Avg_log10_Expr_Sc_C0_Biotin24hFilt','lg2_avg_Avg_log10_Expr_Sc_C0_Biotin7dFilt','lg2_avg_Avg_log10_Expr_Sc_C0_CXCL13ICPE24hFilt','lg2_avg_Avg_log10_Expr_Sc_C1_Biotin24hFilt','lg2_avg_Avg_log10_Expr_Sc_C1_Biotin7dFilt','lg2_avg_Avg_log10_Expr_Sc_C1_CXCL13ICPE24hFilt','lg2_avg_Avg_log10_Expr_Sc_C2_Biotin24hFilt','lg2_avg_Avg_log10_Expr_Sc_C2_Biotin7dFilt','lg2_avg_Avg_log10_Expr_Sc_C2_CXCL13ICPE24hFilt','lg2_avg_Avg_log10_Expr_Sc_C3_Biotin24hFilt','lg2_avg_Avg_log10_Expr_Sc_C3_Biotin7dFilt','lg2_avg_Avg_log10_Expr_Sc_C3_CXCL13ICPE24hFilt','lg2_avg_Avg_log10_Expr_Sc_C4_Biotin24hFilt','lg2_avg_Avg_log10_Expr_Sc_C4_Biotin7dFilt','lg2_avg_Avg_log10_Expr_Sc_C4_CXCL13ICPE24hFilt','lg2_avg_Avg_log10_Expr_Sc_C5_Biotin24hFilt','lg2_avg_Avg_log10_Expr_Sc_C5_Biotin7dFilt','lg2_avg_Avg_log10_Expr_Sc_C5_CXCL13ICPE24hFilt'),

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
        'contrast_1_logFC_DGE_PeriLZ_vs_CentralLZ' => array(
            'name' => 'logFC DGE PeriLZ vs CentralLZ',
            'slider_min' => -7,
            'slider_max' => 7,
            'default_low' => -7,
            'default_high' => 7
        ),
        'contrast_1_padj_DGE_PeriLZ_vs_CentralLZ' => array(
            'name' => 'padj DGE PeriLZ vs CentralLZ',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_DGE_PeriLZ_vs_DZ' => array(
            'name' => 'logFC DGE PeriLZ vs DZ',
            'slider_min' => -7,
            'slider_max' => 6,
            'default_low' => -7,
            'default_high' => 6
        ),
        'contrast_2_padj_DGE_PeriLZ_vs_DZ' => array(
            'name' => 'padj DGE PeriLZ vs DZ',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_DGE_CentralLZ_vs_DZ' => array(
            'name' => 'logFC DGE CentralLZ vs DZ',
            'slider_min' => -8,
            'slider_max' => 9,
            'default_low' => -8,
            'default_high' => 9
        ),
        'contrast_3_padj_DGE_CentralLZ_vs_DZ' => array(
            'name' => 'padj DGE CentralLZ vs DZ',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_logFC_DGE_LZ_vs_DZ' => array(
            'name' => 'logFC DGE LZ vs DZ',
            'slider_min' => -7,
            'slider_max' => 6,
            'default_low' => -7,
            'default_high' => 6
        ),
        'contrast_4_padj_DGE_LZ_vs_DZ' => array(
            'name' => 'padj DGE LZ vs DZ',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_5_logFC_DGE_Biotin_cLZ_vs_pLZ' => array(
            'name' => 'logFC DGE Biotin cLZ vs pLZ',
            'slider_min' => -7,
            'slider_max' => 7,
            'default_low' => -7,
            'default_high' => 7
        ),
        'contrast_5_padj_DGE_Biotin_cLZ_vs_pLZ' => array(
            'name' => 'padj DGE Biotin cLZ vs pLZ',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_6_logFC_DGE_Cxcl13_cLZ_vs_pLZ' => array(
            'name' => 'logFC DGE Cxcl13 cLZ vs pLZ',
            'slider_min' => -10,
            'slider_max' => 6,
            'default_low' => -10,
            'default_high' => 6
        ),
        'contrast_6_padj_DGE_Cxcl13_cLZ_vs_pLZ' => array(
            'name' => 'padj DGE Cxcl13 cLZ vs pLZ',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_7_logFC_DGE_BioCentralLZ_vs_Cxcl13LZ' => array(
            'name' => 'logFC DGE BioCentralLZ vs Cxcl13LZ',
            'slider_min' => -5,
            'slider_max' => 5,
            'default_low' => -5,
            'default_high' => 5
        ),
        'contrast_7_padj_DGE_BioCentralLZ_vs_Cxcl13LZ' => array(
            'name' => 'padj DGE BioCentralLZ vs Cxcl13LZ',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_8_logFC_DGE_BioPeripheralLZ_vs_Cxcl13LZ' => array(
            'name' => 'logFC DGE BioPeripheralLZ vs Cxcl13LZ',
            'slider_min' => -5,
            'slider_max' => 5,
            'default_low' => -5,
            'default_high' => 5
        ),
        'contrast_8_padj_DGE_BioPeripheralLZ_vs_Cxcl13LZ' => array(
            'name' => 'padj DGE BioPeripheralLZ vs Cxcl13LZ',
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
            'slider_min' => -5,
            'slider_max' => 2,
            'default_low' => -5,
            'default_high' => 2
        ),
        'add_counts_C2_Residuals' => array(
            'name' => 'C2 Residuals',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'add_counts_C3_Residuals' => array(
            'name' => 'C3 Residuals',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'add_counts_C4_Residuals' => array(
            'name' => 'C4 Residuals',
            'slider_min' => -2,
            'slider_max' => 3,
            'default_low' => -2,
            'default_high' => 3
        ),
        'add_counts_C5_Residuals' => array(
            'name' => 'C5 Residuals',
            'slider_min' => -2,
            'slider_max' => 1,
            'default_low' => -2,
            'default_high' => 1
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'SC20209D_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'add_counts_Avg_log10_Expr_all',
        'default-y' => 'norm_counts_Avg_log10_Expr_C0_Biotin24hFilt',
        'selection' => array(
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg log10 Expr all'
            ),
            'norm_counts_Avg_log10_Expr_C0_Biotin24hFilt' => array(
                'name' => 's Avg log10 Expr C0 Biotin24hFilt'
            ),
            'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
                'name' => 'logFC Expressed in N Percent Cells'
            ),
            'contrast_1_logFC_DGE_PeriLZ_vs_CentralLZ' => array(
                'name' => 'logFC DGE PeriLZ vs CentralLZ'
            ),
            'contrast_2_logFC_DGE_PeriLZ_vs_DZ' => array(
                'name' => 'logFC DGE PeriLZ vs DZ'
            ),
            'contrast_3_logFC_DGE_CentralLZ_vs_DZ' => array(
                'name' => 'logFC DGE CentralLZ vs DZ'
            ),
            'contrast_4_logFC_DGE_LZ_vs_DZ' => array(
                'name' => 'logFC DGE LZ vs DZ'
            ),
            'contrast_5_logFC_DGE_Biotin_cLZ_vs_pLZ' => array(
                'name' => 'logFC DGE Biotin cLZ vs pLZ'
            ),
            'contrast_6_logFC_DGE_Cxcl13_cLZ_vs_pLZ' => array(
                'name' => 'logFC DGE Cxcl13 cLZ vs pLZ'
            ),
            'contrast_7_logFC_DGE_BioCentralLZ_vs_Cxcl13LZ' => array(
                'name' => 'logFC DGE BioCentralLZ vs Cxcl13LZ'
            ),
            'contrast_8_logFC_DGE_BioPeripheralLZ_vs_Cxcl13LZ' => array(
                'name' => 'logFC DGE BioPeripheralLZ vs Cxcl13LZ'
            ),
            'contrast_1_lg10p_DGE_PeriLZ_vs_CentralLZ' => array(
                'name' => 'lg10p DGE PeriLZ vs CentralLZ'
            ),
            'contrast_2_lg10p_DGE_PeriLZ_vs_DZ' => array(
                'name' => 'lg10p DGE PeriLZ vs DZ'
            ),
            'contrast_3_lg10p_DGE_CentralLZ_vs_DZ' => array(
                'name' => 'lg10p DGE CentralLZ vs DZ'
            ),
            'contrast_4_lg10p_DGE_LZ_vs_DZ' => array(
                'name' => 'lg10p DGE LZ vs DZ'
            ),
            'contrast_5_lg10p_DGE_Biotin_cLZ_vs_pLZ' => array(
                'name' => 'lg10p DGE Biotin cLZ vs pLZ'
            ),
            'contrast_6_lg10p_DGE_Cxcl13_cLZ_vs_pLZ' => array(
                'name' => 'lg10p DGE Cxcl13 cLZ vs pLZ'
            ),
            'contrast_7_lg10p_DGE_BioCentralLZ_vs_Cxcl13LZ' => array(
                'name' => 'lg10p DGE BioCentralLZ vs Cxcl13LZ'
            ),
            'contrast_8_lg10p_DGE_BioPeripheralLZ_vs_Cxcl13LZ' => array(
                'name' => 'lg10p DGE BioPeripheralLZ vs Cxcl13LZ'
            ),
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg log10 Expr all'
            ),
            'add_counts_Avg_log10_Expr_Biotin24hFilt' => array(
                'name' => 'Avg log10 Expr Biotin24hFilt'
            ),
            'add_counts_Avg_log10_Expr_Biotin7dFilt' => array(
                'name' => 'Avg log10 Expr Biotin7dFilt'
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
            'add_counts_Avg_log10_Expr_CXCL13ICPE24hFilt' => array(
                'name' => 'Avg log10 Expr CXCL13ICPE24hFilt'
            ),
            'norm_counts_Avg_log10_Expr_C0_Biotin24hFilt' => array(
                'name' => 's Avg log10 Expr C0 Biotin24hFilt'
            ),
            'norm_counts_Avg_log10_Expr_C0_Biotin7dFilt' => array(
                'name' => 's Avg log10 Expr C0 Biotin7dFilt'
            ),
            'norm_counts_Avg_log10_Expr_C0_CXCL13ICPE24hFilt' => array(
                'name' => 's Avg log10 Expr C0 CXCL13ICPE24hFilt'
            ),
            'norm_counts_Avg_log10_Expr_C1_Biotin24hFilt' => array(
                'name' => 's Avg log10 Expr C1 Biotin24hFilt'
            ),
            'norm_counts_Avg_log10_Expr_C1_Biotin7dFilt' => array(
                'name' => 's Avg log10 Expr C1 Biotin7dFilt'
            ),
            'norm_counts_Avg_log10_Expr_C1_CXCL13ICPE24hFilt' => array(
                'name' => 's Avg log10 Expr C1 CXCL13ICPE24hFilt'
            ),
            'norm_counts_Avg_log10_Expr_C2_Biotin24hFilt' => array(
                'name' => 's Avg log10 Expr C2 Biotin24hFilt'
            ),
            'norm_counts_Avg_log10_Expr_C2_Biotin7dFilt' => array(
                'name' => 's Avg log10 Expr C2 Biotin7dFilt'
            ),
            'norm_counts_Avg_log10_Expr_C2_CXCL13ICPE24hFilt' => array(
                'name' => 's Avg log10 Expr C2 CXCL13ICPE24hFilt'
            ),
            'norm_counts_Avg_log10_Expr_C3_Biotin24hFilt' => array(
                'name' => 's Avg log10 Expr C3 Biotin24hFilt'
            ),
            'norm_counts_Avg_log10_Expr_C3_Biotin7dFilt' => array(
                'name' => 's Avg log10 Expr C3 Biotin7dFilt'
            ),
            'norm_counts_Avg_log10_Expr_C3_CXCL13ICPE24hFilt' => array(
                'name' => 's Avg log10 Expr C3 CXCL13ICPE24hFilt'
            ),
            'norm_counts_Avg_log10_Expr_C4_Biotin24hFilt' => array(
                'name' => 's Avg log10 Expr C4 Biotin24hFilt'
            ),
            'norm_counts_Avg_log10_Expr_C4_Biotin7dFilt' => array(
                'name' => 's Avg log10 Expr C4 Biotin7dFilt'
            ),
            'norm_counts_Avg_log10_Expr_C4_CXCL13ICPE24hFilt' => array(
                'name' => 's Avg log10 Expr C4 CXCL13ICPE24hFilt'
            ),
            'norm_counts_Avg_log10_Expr_C5_Biotin24hFilt' => array(
                'name' => 's Avg log10 Expr C5 Biotin24hFilt'
            ),
            'norm_counts_Avg_log10_Expr_C5_Biotin7dFilt' => array(
                'name' => 's Avg log10 Expr C5 Biotin7dFilt'
            ),
            'norm_counts_Avg_log10_Expr_C5_CXCL13ICPE24hFilt' => array(
                'name' => 's Avg log10 Expr C5 CXCL13ICPE24hFilt'
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
            'add_MA_cts_MA_Avg_DGE_PeriLZ_vs_CentralLZ' => array(
                'name' => 'MA Avg DGE PeriLZ vs CentralLZ'
            ),
            'add_MA_cts_MA_Avg_DGE_PeriLZ_vs_DZ' => array(
                'name' => 'MA Avg DGE PeriLZ vs DZ'
            ),
            'add_MA_cts_MA_Avg_DGE_CentralLZ_vs_DZ' => array(
                'name' => 'MA Avg DGE CentralLZ vs DZ'
            ),
            'add_MA_cts_MA_Avg_DGE_LZ_vs_DZ' => array(
                'name' => 'MA Avg DGE LZ vs DZ'
            ),
            'add_MA_cts_MA_Avg_DGE_Biotin_cLZ_vs_pLZ' => array(
                'name' => 'MA Avg DGE Biotin cLZ vs pLZ'
            ),
            'add_MA_cts_MA_Avg_DGE_Cxcl13_cLZ_vs_pLZ' => array(
                'name' => 'MA Avg DGE Cxcl13 cLZ vs pLZ'
            ),
            'add_MA_cts_MA_Avg_DGE_BioCentralLZ_vs_Cxcl13LZ' => array(
                'name' => 'MA Avg DGE BioCentralLZ vs Cxcl13LZ'
            ),
            'add_MA_cts_MA_Avg_DGE_BioPeripheralLZ_vs_Cxcl13LZ' => array(
                'name' => 'MA Avg DGE BioPeripheralLZ vs Cxcl13LZ'
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
            )
        )
    )
//End scatterplot
);
