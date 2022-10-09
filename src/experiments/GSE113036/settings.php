<?php

return array(
    'lab' => array(
        'name' => 'Treutlein DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'fgl_data',
    'data_db' => array(
            'cat_table_name' => 'GSE113036_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'GSE113036_sc_rna_seq_table',
    'primary_gene_symbol' => 'hgnc_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged Expr',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Avg_log10_Expr_C0' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C0'
        ),
        'norm_counts_Avg_log10_Expr_C1' => array(
            'color' => '#CD9600',
            'name' => 'Avg log10 Expr C1'
        ),
        'norm_counts_Avg_log10_Expr_C2' => array(
            'color' => '#7CAE00',
            'name' => 'Avg log10 Expr C2'
        ),
        'norm_counts_Avg_log10_Expr_C3' => array(
            'color' => '#00BE67',
            'name' => 'Avg log10 Expr C3'
        ),
        'norm_counts_Avg_log10_Expr_C4' => array(
            'color' => '#00BFC4',
            'name' => 'Avg log10 Expr C4'
        ),
        'norm_counts_Avg_log10_Expr_C5' => array(
            'color' => '#00A9FF',
            'name' => 'Avg log10 Expr C5'
        ),
        'norm_counts_Avg_log10_Expr_C6' => array(
            'color' => '#C77CFF',
            'name' => 'Avg log10 Expr C6'
        ),
        'norm_counts_Avg_log10_Expr_C7' => array(
            'color' => '#FF61CC',
            'name' => 'Avg log10 Expr C7'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'lg10 Expr for all Samples',
        'sidelabel' => 'lg10 Expr'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Avg_log10_Expr_Sc_C0','lg2_avg_Avg_log10_Expr_Sc_C1','lg2_avg_Avg_log10_Expr_Sc_C2','lg2_avg_Avg_log10_Expr_Sc_C3','lg2_avg_Avg_log10_Expr_Sc_C4','lg2_avg_Avg_log10_Expr_Sc_C5','lg2_avg_Avg_log10_Expr_Sc_C6','lg2_avg_Avg_log10_Expr_Sc_C7'),

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
        'contrast_1_logFC_PanNeuronal_vs_Meso' => array(
            'name' => 'logFC PanNeuronal vs Meso',
            'slider_min' => -8,
            'slider_max' => 8,
            'default_low' => -8,
            'default_high' => 8
        ),
        'contrast_1_padj_PanNeuronal_vs_Meso' => array(
            'name' => 'padj PanNeuronal vs Meso',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_Neuro1_vs_Neuro2' => array(
            'name' => 'logFC Neuro1 vs Neuro2',
            'slider_min' => -7,
            'slider_max' => 7,
            'default_low' => -7,
            'default_high' => 7
        ),
        'contrast_2_padj_Neuro1_vs_Neuro2' => array(
            'name' => 'padj Neuro1 vs Neuro2',
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
            'slider_max' => 1,
            'default_low' => -2,
            'default_high' => 1
        ),
        'add_counts_C2_Residuals' => array(
            'name' => 'C2 Residuals',
            'slider_min' => -2,
            'slider_max' => 1,
            'default_low' => -2,
            'default_high' => 1
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
            'slider_max' => 3,
            'default_low' => -2,
            'default_high' => 3
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
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'add_counts_C7_Residuals' => array(
            'name' => 'C7 Residuals',
            'slider_min' => -2,
            'slider_max' => 3,
            'default_low' => -2,
            'default_high' => 3
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'GSE113036_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'add_counts_Avg_log10_Expr_all',
        'default-y' => 'norm_counts_Avg_log10_Expr_C0',
        'selection' => array(
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg log10 Expr all'
            ),
            'norm_counts_Avg_log10_Expr_C0' => array(
                'name' => 's Avg log10 Expr C0'
            ),
            'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
                'name' => 'logFC Expressed in N Percent Cells'
            ),
            'contrast_1_logFC_PanNeuronal_vs_Meso' => array(
                'name' => 'logFC PanNeuronal vs Meso'
            ),
            'contrast_2_logFC_Neuro1_vs_Neuro2' => array(
                'name' => 'logFC Neuro1 vs Neuro2'
            ),
            'contrast_1_lg10p_PanNeuronal_vs_Meso' => array(
                'name' => 'lg10p PanNeuronal vs Meso'
            ),
            'contrast_2_lg10p_Neuro1_vs_Neuro2' => array(
                'name' => 'lg10p Neuro1 vs Neuro2'
            ),
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg log10 Expr all'
            ),
            'add_counts_Avg_log10_Expr_BrainPericytes' => array(
                'name' => 'Avg log10 Expr BrainPericytes'
            ),
            'norm_counts_Avg_log10_Expr_C0' => array(
                'name' => 's Avg log10 Expr C0'
            ),
            'norm_counts_Avg_log10_Expr_C1' => array(
                'name' => 's Avg log10 Expr C1'
            ),
            'norm_counts_Avg_log10_Expr_C2' => array(
                'name' => 's Avg log10 Expr C2'
            ),
            'norm_counts_Avg_log10_Expr_C3' => array(
                'name' => 's Avg log10 Expr C3'
            ),
            'norm_counts_Avg_log10_Expr_C4' => array(
                'name' => 's Avg log10 Expr C4'
            ),
            'norm_counts_Avg_log10_Expr_C5' => array(
                'name' => 's Avg log10 Expr C5'
            ),
            'norm_counts_Avg_log10_Expr_C6' => array(
                'name' => 's Avg log10 Expr C6'
            ),
            'norm_counts_Avg_log10_Expr_C7' => array(
                'name' => 's Avg log10 Expr C7'
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
            'add_MA_cts_MA_Avg_PanNeuronal_vs_Meso' => array(
                'name' => 'MA Avg PanNeuronal vs Meso'
            ),
            'add_MA_cts_MA_Avg_Neuro1_vs_Neuro2' => array(
                'name' => 'MA Avg Neuro1 vs Neuro2'
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
            )
        )
    )
//End scatterplot
);
