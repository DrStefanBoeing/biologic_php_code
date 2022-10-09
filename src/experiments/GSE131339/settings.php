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
            'cat_table_name' => 'GSE131339_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'GSE131339_sc_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged Expr',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Avg_log10_Expr_C0_mmWTmTEC' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C0 mmWTmTEC'
        ),
        'norm_counts_Avg_log10_Expr_C10_mmWTcTEC' => array(
            'color' => '#DB8E00',
            'name' => 'Avg log10 Expr C10 mmWTcTEC'
        ),
        'norm_counts_Avg_log10_Expr_C10_mmWTmTEC' => array(
            'color' => '#DB8E00',
            'name' => 'Avg log10 Expr C10 mmWTmTEC'
        ),
        'norm_counts_Avg_log10_Expr_C1_mmWTcTEC' => array(
            'color' => '#AEA200',
            'name' => 'Avg log10 Expr C1 mmWTcTEC'
        ),
        'norm_counts_Avg_log10_Expr_C1_mmWTmTEC' => array(
            'color' => '#AEA200',
            'name' => 'Avg log10 Expr C1 mmWTmTEC'
        ),
        'norm_counts_Avg_log10_Expr_C2_mmWTcTEC' => array(
            'color' => '#64B200',
            'name' => 'Avg log10 Expr C2 mmWTcTEC'
        ),
        'norm_counts_Avg_log10_Expr_C2_mmWTmTEC' => array(
            'color' => '#64B200',
            'name' => 'Avg log10 Expr C2 mmWTmTEC'
        ),
        'norm_counts_Avg_log10_Expr_C3_mmWTcTEC' => array(
            'color' => '#00BD5C',
            'name' => 'Avg log10 Expr C3 mmWTcTEC'
        ),
        'norm_counts_Avg_log10_Expr_C3_mmWTmTEC' => array(
            'color' => '#00BD5C',
            'name' => 'Avg log10 Expr C3 mmWTmTEC'
        ),
        'norm_counts_Avg_log10_Expr_C4_mmWTcTEC' => array(
            'color' => '#00C1A7',
            'name' => 'Avg log10 Expr C4 mmWTcTEC'
        ),
        'norm_counts_Avg_log10_Expr_C4_mmWTmTEC' => array(
            'color' => '#00C1A7',
            'name' => 'Avg log10 Expr C4 mmWTmTEC'
        ),
        'norm_counts_Avg_log10_Expr_C5_mmWTcTEC' => array(
            'color' => '#00BADE',
            'name' => 'Avg log10 Expr C5 mmWTcTEC'
        ),
        'norm_counts_Avg_log10_Expr_C5_mmWTmTEC' => array(
            'color' => '#00BADE',
            'name' => 'Avg log10 Expr C5 mmWTmTEC'
        ),
        'norm_counts_Avg_log10_Expr_C6_mmWTcTEC' => array(
            'color' => '#00A6FF',
            'name' => 'Avg log10 Expr C6 mmWTcTEC'
        ),
        'norm_counts_Avg_log10_Expr_C6_mmWTmTEC' => array(
            'color' => '#00A6FF',
            'name' => 'Avg log10 Expr C6 mmWTmTEC'
        ),
        'norm_counts_Avg_log10_Expr_C7_mmWTcTEC' => array(
            'color' => '#B385FF',
            'name' => 'Avg log10 Expr C7 mmWTcTEC'
        ),
        'norm_counts_Avg_log10_Expr_C7_mmWTmTEC' => array(
            'color' => '#B385FF',
            'name' => 'Avg log10 Expr C7 mmWTmTEC'
        ),
        'norm_counts_Avg_log10_Expr_C8_mmWTcTEC' => array(
            'color' => '#EF67EB',
            'name' => 'Avg log10 Expr C8 mmWTcTEC'
        ),
        'norm_counts_Avg_log10_Expr_C8_mmWTmTEC' => array(
            'color' => '#EF67EB',
            'name' => 'Avg log10 Expr C8 mmWTmTEC'
        ),
        'norm_counts_Avg_log10_Expr_C9_mmWTcTEC' => array(
            'color' => '#FF63B6',
            'name' => 'Avg log10 Expr C9 mmWTcTEC'
        ),
        'norm_counts_Avg_log10_Expr_C9_mmWTmTEC' => array(
            'color' => '#FF63B6',
            'name' => 'Avg log10 Expr C9 mmWTmTEC'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'lg10 Expr for all Samples',
        'sidelabel' => 'lg10 Expr'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Avg_log10_Expr_Sc_C0_mmWTmTEC','lg2_avg_Avg_log10_Expr_Sc_C10_mmWTcTEC','lg2_avg_Avg_log10_Expr_Sc_C10_mmWTmTEC','lg2_avg_Avg_log10_Expr_Sc_C1_mmWTcTEC','lg2_avg_Avg_log10_Expr_Sc_C1_mmWTmTEC','lg2_avg_Avg_log10_Expr_Sc_C2_mmWTcTEC','lg2_avg_Avg_log10_Expr_Sc_C2_mmWTmTEC','lg2_avg_Avg_log10_Expr_Sc_C3_mmWTcTEC','lg2_avg_Avg_log10_Expr_Sc_C3_mmWTmTEC','lg2_avg_Avg_log10_Expr_Sc_C4_mmWTcTEC','lg2_avg_Avg_log10_Expr_Sc_C4_mmWTmTEC','lg2_avg_Avg_log10_Expr_Sc_C5_mmWTcTEC','lg2_avg_Avg_log10_Expr_Sc_C5_mmWTmTEC','lg2_avg_Avg_log10_Expr_Sc_C6_mmWTcTEC','lg2_avg_Avg_log10_Expr_Sc_C6_mmWTmTEC','lg2_avg_Avg_log10_Expr_Sc_C7_mmWTcTEC','lg2_avg_Avg_log10_Expr_Sc_C7_mmWTmTEC','lg2_avg_Avg_log10_Expr_Sc_C8_mmWTcTEC','lg2_avg_Avg_log10_Expr_Sc_C8_mmWTmTEC','lg2_avg_Avg_log10_Expr_Sc_C9_mmWTcTEC','lg2_avg_Avg_log10_Expr_Sc_C9_mmWTmTEC'),

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
        'contrast_1_logFC_DGE_mmWTcTEC_vs_mmWTmTEC' => array(
            'name' => 'logFC DGE mmWTcTEC vs mmWTmTEC',
            'slider_min' => -10,
            'slider_max' => 10,
            'default_low' => -10,
            'default_high' => 10
        ),
        'contrast_1_padj_DGE_mmWTcTEC_vs_mmWTmTEC' => array(
            'name' => 'padj DGE mmWTcTEC vs mmWTmTEC',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'add_counts_C0_Residuals' => array(
            'name' => 'C0 Residuals',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
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
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'add_counts_C3_Residuals' => array(
            'name' => 'C3 Residuals',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
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
            'slider_min' => -2,
            'slider_max' => 3,
            'default_low' => -2,
            'default_high' => 3
        ),
        'add_counts_C6_Residuals' => array(
            'name' => 'C6 Residuals',
            'slider_min' => -2,
            'slider_max' => 3,
            'default_low' => -2,
            'default_high' => 3
        ),
        'add_counts_C7_Residuals' => array(
            'name' => 'C7 Residuals',
            'slider_min' => -2,
            'slider_max' => 3,
            'default_low' => -2,
            'default_high' => 3
        ),
        'add_counts_C8_Residuals' => array(
            'name' => 'C8 Residuals',
            'slider_min' => -2,
            'slider_max' => 4,
            'default_low' => -2,
            'default_high' => 4
        ),
        'add_counts_C9_Residuals' => array(
            'name' => 'C9 Residuals',
            'slider_min' => -2,
            'slider_max' => 3,
            'default_low' => -2,
            'default_high' => 3
        ),
        'add_counts_C10_Residuals' => array(
            'name' => 'C10 Residuals',
            'slider_min' => -2,
            'slider_max' => 3,
            'default_low' => -2,
            'default_high' => 3
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'GSE131339_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'add_counts_Avg_log10_Expr_all',
        'default-y' => 'norm_counts_Avg_log10_Expr_C0_mmWTmTEC',
        'selection' => array(
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg log10 Expr all'
            ),
            'norm_counts_Avg_log10_Expr_C0_mmWTmTEC' => array(
                'name' => 's Avg log10 Expr C0 mmWTmTEC'
            ),
            'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
                'name' => 'logFC Expressed in N Percent Cells'
            ),
            'contrast_1_logFC_DGE_mmWTcTEC_vs_mmWTmTEC' => array(
                'name' => 'logFC DGE mmWTcTEC vs mmWTmTEC'
            ),
            'contrast_1_lg10p_DGE_mmWTcTEC_vs_mmWTmTEC' => array(
                'name' => 'lg10p DGE mmWTcTEC vs mmWTmTEC'
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
            'add_counts_Avg_log10_Expr_C10' => array(
                'name' => 'Avg log10 Expr C10'
            ),
            'add_counts_Avg_log10_Expr_C10' => array(
                'name' => 'Avg log10 Expr C10'
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
            'add_counts_Avg_log10_Expr_mmWTcTEC' => array(
                'name' => 'Avg log10 Expr mmWTcTEC'
            ),
            'add_counts_Avg_log10_Expr_mmWTmTEC' => array(
                'name' => 'Avg log10 Expr mmWTmTEC'
            ),
            'norm_counts_Avg_log10_Expr_C0_mmWTmTEC' => array(
                'name' => 's Avg log10 Expr C0 mmWTmTEC'
            ),
            'norm_counts_Avg_log10_Expr_C10_mmWTcTEC' => array(
                'name' => 's Avg log10 Expr C10 mmWTcTEC'
            ),
            'norm_counts_Avg_log10_Expr_C10_mmWTmTEC' => array(
                'name' => 's Avg log10 Expr C10 mmWTmTEC'
            ),
            'norm_counts_Avg_log10_Expr_C1_mmWTcTEC' => array(
                'name' => 's Avg log10 Expr C1 mmWTcTEC'
            ),
            'norm_counts_Avg_log10_Expr_C1_mmWTmTEC' => array(
                'name' => 's Avg log10 Expr C1 mmWTmTEC'
            ),
            'norm_counts_Avg_log10_Expr_C2_mmWTcTEC' => array(
                'name' => 's Avg log10 Expr C2 mmWTcTEC'
            ),
            'norm_counts_Avg_log10_Expr_C2_mmWTmTEC' => array(
                'name' => 's Avg log10 Expr C2 mmWTmTEC'
            ),
            'norm_counts_Avg_log10_Expr_C3_mmWTcTEC' => array(
                'name' => 's Avg log10 Expr C3 mmWTcTEC'
            ),
            'norm_counts_Avg_log10_Expr_C3_mmWTmTEC' => array(
                'name' => 's Avg log10 Expr C3 mmWTmTEC'
            ),
            'norm_counts_Avg_log10_Expr_C4_mmWTcTEC' => array(
                'name' => 's Avg log10 Expr C4 mmWTcTEC'
            ),
            'norm_counts_Avg_log10_Expr_C4_mmWTmTEC' => array(
                'name' => 's Avg log10 Expr C4 mmWTmTEC'
            ),
            'norm_counts_Avg_log10_Expr_C5_mmWTcTEC' => array(
                'name' => 's Avg log10 Expr C5 mmWTcTEC'
            ),
            'norm_counts_Avg_log10_Expr_C5_mmWTmTEC' => array(
                'name' => 's Avg log10 Expr C5 mmWTmTEC'
            ),
            'norm_counts_Avg_log10_Expr_C6_mmWTcTEC' => array(
                'name' => 's Avg log10 Expr C6 mmWTcTEC'
            ),
            'norm_counts_Avg_log10_Expr_C6_mmWTmTEC' => array(
                'name' => 's Avg log10 Expr C6 mmWTmTEC'
            ),
            'norm_counts_Avg_log10_Expr_C7_mmWTcTEC' => array(
                'name' => 's Avg log10 Expr C7 mmWTcTEC'
            ),
            'norm_counts_Avg_log10_Expr_C7_mmWTmTEC' => array(
                'name' => 's Avg log10 Expr C7 mmWTmTEC'
            ),
            'norm_counts_Avg_log10_Expr_C8_mmWTcTEC' => array(
                'name' => 's Avg log10 Expr C8 mmWTcTEC'
            ),
            'norm_counts_Avg_log10_Expr_C8_mmWTmTEC' => array(
                'name' => 's Avg log10 Expr C8 mmWTmTEC'
            ),
            'norm_counts_Avg_log10_Expr_C9_mmWTcTEC' => array(
                'name' => 's Avg log10 Expr C9 mmWTcTEC'
            ),
            'norm_counts_Avg_log10_Expr_C9_mmWTmTEC' => array(
                'name' => 's Avg log10 Expr C9 mmWTmTEC'
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
            'add_MA_cts_MA_Avg_DGE_mmWTcTEC_vs_mmWTmTEC' => array(
                'name' => 'MA Avg DGE mmWTcTEC vs mmWTmTEC'
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
            ),
            'add_counts_C10_Residuals' => array(
                'name' => 'C10 Residuals'
            )
        )
    )
//End scatterplot
);
