<?php

return array(
    'lab' => array(
        'name' => 'Hill DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'chl_data',
    'data_db' => array(
            'cat_table_name' => 'scPDAC_subC4_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'scPDAC_subC4_sc_rna_seq_table',
    'primary_gene_symbol' => 'hgnc_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged Expr',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Avg_log10_Expr_C0_P01Fib' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C0 P01Fib'
        ),
        'norm_counts_Avg_log10_Expr_C0_P03Fib' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C0 P03Fib'
        ),
        'norm_counts_Avg_log10_Expr_C0_P05Fib' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C0 P05Fib'
        ),
        'norm_counts_Avg_log10_Expr_C0_P06Fib' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C0 P06Fib'
        ),
        'norm_counts_Avg_log10_Expr_C0_P07Fib' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C0 P07Fib'
        ),
        'norm_counts_Avg_log10_Expr_C0_P08Fib' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C0 P08Fib'
        ),
        'norm_counts_Avg_log10_Expr_C0_P09Fib' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C0 P09Fib'
        ),
        'norm_counts_Avg_log10_Expr_C0_P10Fib' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C0 P10Fib'
        ),
        'norm_counts_Avg_log10_Expr_C1_P01Fib' => array(
            'color' => '#00BA38',
            'name' => 'Avg log10 Expr C1 P01Fib'
        ),
        'norm_counts_Avg_log10_Expr_C1_P03Fib' => array(
            'color' => '#00BA38',
            'name' => 'Avg log10 Expr C1 P03Fib'
        ),
        'norm_counts_Avg_log10_Expr_C1_P05Fib' => array(
            'color' => '#00BA38',
            'name' => 'Avg log10 Expr C1 P05Fib'
        ),
        'norm_counts_Avg_log10_Expr_C1_P06Fib' => array(
            'color' => '#00BA38',
            'name' => 'Avg log10 Expr C1 P06Fib'
        ),
        'norm_counts_Avg_log10_Expr_C1_P07Fib' => array(
            'color' => '#00BA38',
            'name' => 'Avg log10 Expr C1 P07Fib'
        ),
        'norm_counts_Avg_log10_Expr_C1_P08Fib' => array(
            'color' => '#00BA38',
            'name' => 'Avg log10 Expr C1 P08Fib'
        ),
        'norm_counts_Avg_log10_Expr_C1_P09Fib' => array(
            'color' => '#00BA38',
            'name' => 'Avg log10 Expr C1 P09Fib'
        ),
        'norm_counts_Avg_log10_Expr_C1_P10Fib' => array(
            'color' => '#00BA38',
            'name' => 'Avg log10 Expr C1 P10Fib'
        ),
        'norm_counts_Avg_log10_Expr_C2_P01Fib' => array(
            'color' => '#619CFF',
            'name' => 'Avg log10 Expr C2 P01Fib'
        ),
        'norm_counts_Avg_log10_Expr_C2_P03Fib' => array(
            'color' => '#619CFF',
            'name' => 'Avg log10 Expr C2 P03Fib'
        ),
        'norm_counts_Avg_log10_Expr_C2_P05Fib' => array(
            'color' => '#619CFF',
            'name' => 'Avg log10 Expr C2 P05Fib'
        ),
        'norm_counts_Avg_log10_Expr_C2_P06Fib' => array(
            'color' => '#619CFF',
            'name' => 'Avg log10 Expr C2 P06Fib'
        ),
        'norm_counts_Avg_log10_Expr_C2_P07Fib' => array(
            'color' => '#619CFF',
            'name' => 'Avg log10 Expr C2 P07Fib'
        ),
        'norm_counts_Avg_log10_Expr_C2_P08Fib' => array(
            'color' => '#619CFF',
            'name' => 'Avg log10 Expr C2 P08Fib'
        ),
        'norm_counts_Avg_log10_Expr_C2_P09Fib' => array(
            'color' => '#619CFF',
            'name' => 'Avg log10 Expr C2 P09Fib'
        ),
        'norm_counts_Avg_log10_Expr_C2_P10Fib' => array(
            'color' => '#619CFF',
            'name' => 'Avg log10 Expr C2 P10Fib'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'lg10 Expr for all Samples',
        'sidelabel' => 'lg10 Expr'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Avg_log10_Expr_Sc_C0_P01Fib','lg2_avg_Avg_log10_Expr_Sc_C0_P03Fib','lg2_avg_Avg_log10_Expr_Sc_C0_P05Fib','lg2_avg_Avg_log10_Expr_Sc_C0_P06Fib','lg2_avg_Avg_log10_Expr_Sc_C0_P07Fib','lg2_avg_Avg_log10_Expr_Sc_C0_P08Fib','lg2_avg_Avg_log10_Expr_Sc_C0_P09Fib','lg2_avg_Avg_log10_Expr_Sc_C0_P10Fib','lg2_avg_Avg_log10_Expr_Sc_C1_P01Fib','lg2_avg_Avg_log10_Expr_Sc_C1_P03Fib','lg2_avg_Avg_log10_Expr_Sc_C1_P05Fib','lg2_avg_Avg_log10_Expr_Sc_C1_P06Fib','lg2_avg_Avg_log10_Expr_Sc_C1_P07Fib','lg2_avg_Avg_log10_Expr_Sc_C1_P08Fib','lg2_avg_Avg_log10_Expr_Sc_C1_P09Fib','lg2_avg_Avg_log10_Expr_Sc_C1_P10Fib','lg2_avg_Avg_log10_Expr_Sc_C2_P01Fib','lg2_avg_Avg_log10_Expr_Sc_C2_P03Fib','lg2_avg_Avg_log10_Expr_Sc_C2_P05Fib','lg2_avg_Avg_log10_Expr_Sc_C2_P06Fib','lg2_avg_Avg_log10_Expr_Sc_C2_P07Fib','lg2_avg_Avg_log10_Expr_Sc_C2_P08Fib','lg2_avg_Avg_log10_Expr_Sc_C2_P09Fib','lg2_avg_Avg_log10_Expr_Sc_C2_P10Fib'),

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
        'contrast_1_logFC_DGE_Fib_C2_vs_Fib_C0_C1' => array(
            'name' => 'logFC DGE Fib C2 vs Fib C0 C1',
            'slider_min' => -6,
            'slider_max' => 7,
            'default_low' => -6,
            'default_high' => 7
        ),
        'contrast_1_padj_DGE_Fib_C2_vs_Fib_C0_C1' => array(
            'name' => 'padj DGE Fib C2 vs Fib C0 C1',
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
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'scPDAC_subC4_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'add_counts_Avg_log10_Expr_all',
        'default-y' => 'norm_counts_Avg_log10_Expr_C0_P01Fib',
        'selection' => array(
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg log10 Expr all'
            ),
            'norm_counts_Avg_log10_Expr_C0_P01Fib' => array(
                'name' => 's Avg log10 Expr C0 P01Fib'
            ),
            'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
                'name' => 'logFC Expressed in N Percent Cells'
            ),
            'contrast_1_logFC_DGE_Fib_C2_vs_Fib_C0_C1' => array(
                'name' => 'logFC DGE Fib C2 vs Fib C0 C1'
            ),
            'contrast_1_lg10p_DGE_Fib_C2_vs_Fib_C0_C1' => array(
                'name' => 'lg10p DGE Fib C2 vs Fib C0 C1'
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
            'add_counts_Avg_log10_Expr_P01Fib' => array(
                'name' => 'Avg log10 Expr P01Fib'
            ),
            'add_counts_Avg_log10_Expr_P03Fib' => array(
                'name' => 'Avg log10 Expr P03Fib'
            ),
            'add_counts_Avg_log10_Expr_P05Fib' => array(
                'name' => 'Avg log10 Expr P05Fib'
            ),
            'add_counts_Avg_log10_Expr_P06Fib' => array(
                'name' => 'Avg log10 Expr P06Fib'
            ),
            'add_counts_Avg_log10_Expr_P07Fib' => array(
                'name' => 'Avg log10 Expr P07Fib'
            ),
            'add_counts_Avg_log10_Expr_P08Fib' => array(
                'name' => 'Avg log10 Expr P08Fib'
            ),
            'add_counts_Avg_log10_Expr_P09Fib' => array(
                'name' => 'Avg log10 Expr P09Fib'
            ),
            'add_counts_Avg_log10_Expr_P10Fib' => array(
                'name' => 'Avg log10 Expr P10Fib'
            ),
            'norm_counts_Avg_log10_Expr_C0_P01Fib' => array(
                'name' => 's Avg log10 Expr C0 P01Fib'
            ),
            'norm_counts_Avg_log10_Expr_C0_P03Fib' => array(
                'name' => 's Avg log10 Expr C0 P03Fib'
            ),
            'norm_counts_Avg_log10_Expr_C0_P05Fib' => array(
                'name' => 's Avg log10 Expr C0 P05Fib'
            ),
            'norm_counts_Avg_log10_Expr_C0_P06Fib' => array(
                'name' => 's Avg log10 Expr C0 P06Fib'
            ),
            'norm_counts_Avg_log10_Expr_C0_P07Fib' => array(
                'name' => 's Avg log10 Expr C0 P07Fib'
            ),
            'norm_counts_Avg_log10_Expr_C0_P08Fib' => array(
                'name' => 's Avg log10 Expr C0 P08Fib'
            ),
            'norm_counts_Avg_log10_Expr_C0_P09Fib' => array(
                'name' => 's Avg log10 Expr C0 P09Fib'
            ),
            'norm_counts_Avg_log10_Expr_C0_P10Fib' => array(
                'name' => 's Avg log10 Expr C0 P10Fib'
            ),
            'norm_counts_Avg_log10_Expr_C1_P01Fib' => array(
                'name' => 's Avg log10 Expr C1 P01Fib'
            ),
            'norm_counts_Avg_log10_Expr_C1_P03Fib' => array(
                'name' => 's Avg log10 Expr C1 P03Fib'
            ),
            'norm_counts_Avg_log10_Expr_C1_P05Fib' => array(
                'name' => 's Avg log10 Expr C1 P05Fib'
            ),
            'norm_counts_Avg_log10_Expr_C1_P06Fib' => array(
                'name' => 's Avg log10 Expr C1 P06Fib'
            ),
            'norm_counts_Avg_log10_Expr_C1_P07Fib' => array(
                'name' => 's Avg log10 Expr C1 P07Fib'
            ),
            'norm_counts_Avg_log10_Expr_C1_P08Fib' => array(
                'name' => 's Avg log10 Expr C1 P08Fib'
            ),
            'norm_counts_Avg_log10_Expr_C1_P09Fib' => array(
                'name' => 's Avg log10 Expr C1 P09Fib'
            ),
            'norm_counts_Avg_log10_Expr_C1_P10Fib' => array(
                'name' => 's Avg log10 Expr C1 P10Fib'
            ),
            'norm_counts_Avg_log10_Expr_C2_P01Fib' => array(
                'name' => 's Avg log10 Expr C2 P01Fib'
            ),
            'norm_counts_Avg_log10_Expr_C2_P03Fib' => array(
                'name' => 's Avg log10 Expr C2 P03Fib'
            ),
            'norm_counts_Avg_log10_Expr_C2_P05Fib' => array(
                'name' => 's Avg log10 Expr C2 P05Fib'
            ),
            'norm_counts_Avg_log10_Expr_C2_P06Fib' => array(
                'name' => 's Avg log10 Expr C2 P06Fib'
            ),
            'norm_counts_Avg_log10_Expr_C2_P07Fib' => array(
                'name' => 's Avg log10 Expr C2 P07Fib'
            ),
            'norm_counts_Avg_log10_Expr_C2_P08Fib' => array(
                'name' => 's Avg log10 Expr C2 P08Fib'
            ),
            'norm_counts_Avg_log10_Expr_C2_P09Fib' => array(
                'name' => 's Avg log10 Expr C2 P09Fib'
            ),
            'norm_counts_Avg_log10_Expr_C2_P10Fib' => array(
                'name' => 's Avg log10 Expr C2 P10Fib'
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
            'add_MA_cts_MA_Avg_DGE_Fib_C2_vs_Fib_C0_C1' => array(
                'name' => 'MA Avg DGE Fib C2 vs Fib C0 C1'
            ),
            'add_counts_C0_Residuals' => array(
                'name' => 'C0 Residuals'
            ),
            'add_counts_C1_Residuals' => array(
                'name' => 'C1 Residuals'
            ),
            'add_counts_C2_Residuals' => array(
                'name' => 'C2 Residuals'
            )
        )
    )
//End scatterplot
);
