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
            'cat_table_name' => 'vpl330_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'vpl330_sc_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged Expr',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Avg_lg10_Expr_C_0_DIV10' => array(
            'color' => '#F8766D',
            'name' => 'Avg lg10 Expr C 0 DIV10'
        ),
        'norm_counts_Avg_lg10_Expr_C_0_DIV20' => array(
            'color' => '#F8766D',
            'name' => 'Avg lg10 Expr C 0 DIV20'
        ),
        'norm_counts_Avg_lg10_Expr_C_0_DIV4' => array(
            'color' => '#F8766D',
            'name' => 'Avg lg10 Expr C 0 DIV4'
        ),
        'norm_counts_Avg_lg10_Expr_C_1_DIV10' => array(
            'color' => '#CD9600',
            'name' => 'Avg lg10 Expr C 1 DIV10'
        ),
        'norm_counts_Avg_lg10_Expr_C_1_DIV20' => array(
            'color' => '#CD9600',
            'name' => 'Avg lg10 Expr C 1 DIV20'
        ),
        'norm_counts_Avg_lg10_Expr_C_1_DIV4' => array(
            'color' => '#CD9600',
            'name' => 'Avg lg10 Expr C 1 DIV4'
        ),
        'norm_counts_Avg_lg10_Expr_C_2_DIV10' => array(
            'color' => '#7CAE00',
            'name' => 'Avg lg10 Expr C 2 DIV10'
        ),
        'norm_counts_Avg_lg10_Expr_C_2_DIV20' => array(
            'color' => '#7CAE00',
            'name' => 'Avg lg10 Expr C 2 DIV20'
        ),
        'norm_counts_Avg_lg10_Expr_C_2_DIV4' => array(
            'color' => '#7CAE00',
            'name' => 'Avg lg10 Expr C 2 DIV4'
        ),
        'norm_counts_Avg_lg10_Expr_C_3_DIV10' => array(
            'color' => '#00BE67',
            'name' => 'Avg lg10 Expr C 3 DIV10'
        ),
        'norm_counts_Avg_lg10_Expr_C_3_DIV20' => array(
            'color' => '#00BE67',
            'name' => 'Avg lg10 Expr C 3 DIV20'
        ),
        'norm_counts_Avg_lg10_Expr_C_3_DIV4' => array(
            'color' => '#00BE67',
            'name' => 'Avg lg10 Expr C 3 DIV4'
        ),
        'norm_counts_Avg_lg10_Expr_C_4_DIV10' => array(
            'color' => '#00BFC4',
            'name' => 'Avg lg10 Expr C 4 DIV10'
        ),
        'norm_counts_Avg_lg10_Expr_C_4_DIV20' => array(
            'color' => '#00BFC4',
            'name' => 'Avg lg10 Expr C 4 DIV20'
        ),
        'norm_counts_Avg_lg10_Expr_C_4_DIV4' => array(
            'color' => '#00BFC4',
            'name' => 'Avg lg10 Expr C 4 DIV4'
        ),
        'norm_counts_Avg_lg10_Expr_C_5_DIV10' => array(
            'color' => '#00A9FF',
            'name' => 'Avg lg10 Expr C 5 DIV10'
        ),
        'norm_counts_Avg_lg10_Expr_C_5_DIV20' => array(
            'color' => '#00A9FF',
            'name' => 'Avg lg10 Expr C 5 DIV20'
        ),
        'norm_counts_Avg_lg10_Expr_C_5_DIV4' => array(
            'color' => '#00A9FF',
            'name' => 'Avg lg10 Expr C 5 DIV4'
        ),
        'norm_counts_Avg_lg10_Expr_C_6_DIV10' => array(
            'color' => '#C77CFF',
            'name' => 'Avg lg10 Expr C 6 DIV10'
        ),
        'norm_counts_Avg_lg10_Expr_C_6_DIV20' => array(
            'color' => '#C77CFF',
            'name' => 'Avg lg10 Expr C 6 DIV20'
        ),
        'norm_counts_Avg_lg10_Expr_C_6_DIV4' => array(
            'color' => '#C77CFF',
            'name' => 'Avg lg10 Expr C 6 DIV4'
        ),
        'norm_counts_Avg_lg10_Expr_C_7_DIV10' => array(
            'color' => '#FF61CC',
            'name' => 'Avg lg10 Expr C 7 DIV10'
        ),
        'norm_counts_Avg_lg10_Expr_C_7_DIV20' => array(
            'color' => '#FF61CC',
            'name' => 'Avg lg10 Expr C 7 DIV20'
        ),
        'norm_counts_Avg_lg10_Expr_C_7_DIV4' => array(
            'color' => '#FF61CC',
            'name' => 'Avg lg10 Expr C 7 DIV4'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'lg10 Expr for all Samples',
        'sidelabel' => 'lg10 Expr'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Avg_log10_Expr_Sc_C_0_DIV10','lg2_avg_Avg_log10_Expr_Sc_C_0_DIV20','lg2_avg_Avg_log10_Expr_Sc_C_0_DIV4','lg2_avg_Avg_log10_Expr_Sc_C_1_DIV10','lg2_avg_Avg_log10_Expr_Sc_C_1_DIV20','lg2_avg_Avg_log10_Expr_Sc_C_1_DIV4','lg2_avg_Avg_log10_Expr_Sc_C_2_DIV10','lg2_avg_Avg_log10_Expr_Sc_C_2_DIV20','lg2_avg_Avg_log10_Expr_Sc_C_2_DIV4','lg2_avg_Avg_log10_Expr_Sc_C_3_DIV10','lg2_avg_Avg_log10_Expr_Sc_C_3_DIV20','lg2_avg_Avg_log10_Expr_Sc_C_3_DIV4','lg2_avg_Avg_log10_Expr_Sc_C_4_DIV10','lg2_avg_Avg_log10_Expr_Sc_C_4_DIV20','lg2_avg_Avg_log10_Expr_Sc_C_4_DIV4','lg2_avg_Avg_log10_Expr_Sc_C_5_DIV10','lg2_avg_Avg_log10_Expr_Sc_C_5_DIV20','lg2_avg_Avg_log10_Expr_Sc_C_5_DIV4','lg2_avg_Avg_log10_Expr_Sc_C_6_DIV10','lg2_avg_Avg_log10_Expr_Sc_C_6_DIV20','lg2_avg_Avg_log10_Expr_Sc_C_6_DIV4','lg2_avg_Avg_log10_Expr_Sc_C_7_DIV10','lg2_avg_Avg_log10_Expr_Sc_C_7_DIV20','lg2_avg_Avg_log10_Expr_Sc_C_7_DIV4'),

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
        'contrast_1_logFC_Glia_vs_Neuro_All' => array(
            'name' => 'logFC Glia vs Neuro All',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'contrast_1_padj_Glia_vs_Neuro_All' => array(
            'name' => 'padj Glia vs Neuro All',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_Glia_vs_Neuro_DIV10' => array(
            'name' => 'logFC Glia vs Neuro DIV10',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'contrast_2_padj_Glia_vs_Neuro_DIV10' => array(
            'name' => 'padj Glia vs Neuro DIV10',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_Glia_vs_Neuro_DIV4' => array(
            'name' => 'logFC Glia vs Neuro DIV4',
            'slider_min' => -4,
            'slider_max' => 2,
            'default_low' => -4,
            'default_high' => 2
        ),
        'contrast_3_padj_Glia_vs_Neuro_DIV4' => array(
            'name' => 'padj Glia vs Neuro DIV4',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_logFC_Glia_vs_Neuro_DIV20' => array(
            'name' => 'logFC Glia vs Neuro DIV20',
            'slider_min' => -4,
            'slider_max' => 2,
            'default_low' => -4,
            'default_high' => 2
        ),
        'contrast_4_padj_Glia_vs_Neuro_DIV20' => array(
            'name' => 'padj Glia vs Neuro DIV20',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_1_lg10p_Glia_vs_Neuro_All' => array(
            'name' => 'lg10p Glia vs Neuro All',
            'slider_min' => 0,
            'slider_max' => 319,
            'default_low' => 0,
            'default_high' => 319
        ),
        'contrast_2_lg10p_Glia_vs_Neuro_DIV10' => array(
            'name' => 'lg10p Glia vs Neuro DIV10',
            'slider_min' => 0,
            'slider_max' => 318,
            'default_low' => 0,
            'default_high' => 318
        ),
        'contrast_3_lg10p_Glia_vs_Neuro_DIV4' => array(
            'name' => 'lg10p Glia vs Neuro DIV4',
            'slider_min' => 0,
            'slider_max' => 259,
            'default_low' => 0,
            'default_high' => 259
        ),
        'contrast_4_lg10p_Glia_vs_Neuro_DIV20' => array(
            'name' => 'lg10p Glia vs Neuro DIV20',
            'slider_min' => 0,
            'slider_max' => 259,
            'default_low' => 0,
            'default_high' => 259
        ),
        'contrast_1_logFC_glmG_Glia_vs_Neuro_All' => array(
            'name' => 'logFC glmG Glia vs Neuro All',
            'slider_min' => -12,
            'slider_max' => 8,
            'default_low' => -12,
            'default_high' => 8
        ),
        'contrast_1_padj_glmG_Glia_vs_Neuro_All' => array(
            'name' => 'padj glmG Glia vs Neuro All',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_1_lg10p_glmG_Glia_vs_Neuro_All' => array(
            'name' => 'lg10p glmG Glia vs Neuro All',
            'slider_min' => 0,
            'slider_max' => 322,
            'default_low' => 0,
            'default_high' => 322
        ),
        'contrast_2_logFC_glmG_Glia_vs_Neuro_DIV10' => array(
            'name' => 'logFC glmG Glia vs Neuro DIV10',
            'slider_min' => -10,
            'slider_max' => 8,
            'default_low' => -10,
            'default_high' => 8
        ),
        'contrast_2_padj_glmG_Glia_vs_Neuro_DIV10' => array(
            'name' => 'padj glmG Glia vs Neuro DIV10',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_lg10p_glmG_Glia_vs_Neuro_DIV10' => array(
            'name' => 'lg10p glmG Glia vs Neuro DIV10',
            'slider_min' => 0,
            'slider_max' => 319,
            'default_low' => 0,
            'default_high' => 319
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'vpl330_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_X_logFC_Expressed_in_N_Percent_Cells',
        'default-y' => 'norm_counts_Avg_lg10_Expr_C_0_DIV10',
        'selection' => array(
            'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
                'name' => 'logFC Expressed in N Percent Cells'
            ),
            'contrast_1_logFC_Glia_vs_Neuro_All' => array(
                'name' => 'logFC Glia vs Neuro All'
            ),
            'contrast_1_padj_Glia_vs_Neuro_All' => array(
                'name' => 'padj Glia vs Neuro All'
            ),
            'contrast_2_logFC_Glia_vs_Neuro_DIV10' => array(
                'name' => 'logFC Glia vs Neuro DIV10'
            ),
            'contrast_2_padj_Glia_vs_Neuro_DIV10' => array(
                'name' => 'padj Glia vs Neuro DIV10'
            ),
            'contrast_3_logFC_Glia_vs_Neuro_DIV4' => array(
                'name' => 'logFC Glia vs Neuro DIV4'
            ),
            'contrast_3_padj_Glia_vs_Neuro_DIV4' => array(
                'name' => 'padj Glia vs Neuro DIV4'
            ),
            'contrast_4_logFC_Glia_vs_Neuro_DIV20' => array(
                'name' => 'logFC Glia vs Neuro DIV20'
            ),
            'contrast_4_padj_Glia_vs_Neuro_DIV20' => array(
                'name' => 'padj Glia vs Neuro DIV20'
            ),
            'contrast_1_lg10p_Glia_vs_Neuro_All' => array(
                'name' => 'lg10p Glia vs Neuro All'
            ),
            'contrast_2_lg10p_Glia_vs_Neuro_DIV10' => array(
                'name' => 'lg10p Glia vs Neuro DIV10'
            ),
            'contrast_3_lg10p_Glia_vs_Neuro_DIV4' => array(
                'name' => 'lg10p Glia vs Neuro DIV4'
            ),
            'contrast_4_lg10p_Glia_vs_Neuro_DIV20' => array(
                'name' => 'lg10p Glia vs Neuro DIV20'
            ),
            'contrast_1_logFC_glmG_Glia_vs_Neuro_All' => array(
                'name' => 'logFC glmG Glia vs Neuro All'
            ),
            'contrast_1_padj_glmG_Glia_vs_Neuro_All' => array(
                'name' => 'padj glmG Glia vs Neuro All'
            ),
            'contrast_1_lg10p_glmG_Glia_vs_Neuro_All' => array(
                'name' => 'lg10p glmG Glia vs Neuro All'
            ),
            'contrast_2_logFC_glmG_Glia_vs_Neuro_DIV10' => array(
                'name' => 'logFC glmG Glia vs Neuro DIV10'
            ),
            'contrast_2_padj_glmG_Glia_vs_Neuro_DIV10' => array(
                'name' => 'padj glmG Glia vs Neuro DIV10'
            ),
            'contrast_2_lg10p_glmG_Glia_vs_Neuro_DIV10' => array(
                'name' => 'lg10p glmG Glia vs Neuro DIV10'
            ),
            'add_counts_Avg_log10_Expr_DIV4' => array(
                'name' => 'Avg log10 Expr DIV4'
            ),
            'add_counts_Avg_log10_Expr_DIV10' => array(
                'name' => 'Avg log10 Expr DIV10'
            ),
            'add_counts_Avg_log10_Expr_DIV20' => array(
                'name' => 'Avg log10 Expr DIV20'
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
            'norm_counts_Avg_lg10_Expr_C_0_DIV10' => array(
                'name' => 's Avg lg10 Expr C 0 DIV10'
            ),
            'norm_counts_Avg_lg10_Expr_C_0_DIV20' => array(
                'name' => 's Avg lg10 Expr C 0 DIV20'
            ),
            'norm_counts_Avg_lg10_Expr_C_0_DIV4' => array(
                'name' => 's Avg lg10 Expr C 0 DIV4'
            ),
            'norm_counts_Avg_lg10_Expr_C_1_DIV10' => array(
                'name' => 's Avg lg10 Expr C 1 DIV10'
            ),
            'norm_counts_Avg_lg10_Expr_C_1_DIV20' => array(
                'name' => 's Avg lg10 Expr C 1 DIV20'
            ),
            'norm_counts_Avg_lg10_Expr_C_1_DIV4' => array(
                'name' => 's Avg lg10 Expr C 1 DIV4'
            ),
            'norm_counts_Avg_lg10_Expr_C_2_DIV10' => array(
                'name' => 's Avg lg10 Expr C 2 DIV10'
            ),
            'norm_counts_Avg_lg10_Expr_C_2_DIV20' => array(
                'name' => 's Avg lg10 Expr C 2 DIV20'
            ),
            'norm_counts_Avg_lg10_Expr_C_2_DIV4' => array(
                'name' => 's Avg lg10 Expr C 2 DIV4'
            ),
            'norm_counts_Avg_lg10_Expr_C_3_DIV10' => array(
                'name' => 's Avg lg10 Expr C 3 DIV10'
            ),
            'norm_counts_Avg_lg10_Expr_C_3_DIV20' => array(
                'name' => 's Avg lg10 Expr C 3 DIV20'
            ),
            'norm_counts_Avg_lg10_Expr_C_3_DIV4' => array(
                'name' => 's Avg lg10 Expr C 3 DIV4'
            ),
            'norm_counts_Avg_lg10_Expr_C_4_DIV10' => array(
                'name' => 's Avg lg10 Expr C 4 DIV10'
            ),
            'norm_counts_Avg_lg10_Expr_C_4_DIV20' => array(
                'name' => 's Avg lg10 Expr C 4 DIV20'
            ),
            'norm_counts_Avg_lg10_Expr_C_4_DIV4' => array(
                'name' => 's Avg lg10 Expr C 4 DIV4'
            ),
            'norm_counts_Avg_lg10_Expr_C_5_DIV10' => array(
                'name' => 's Avg lg10 Expr C 5 DIV10'
            ),
            'norm_counts_Avg_lg10_Expr_C_5_DIV20' => array(
                'name' => 's Avg lg10 Expr C 5 DIV20'
            ),
            'norm_counts_Avg_lg10_Expr_C_5_DIV4' => array(
                'name' => 's Avg lg10 Expr C 5 DIV4'
            ),
            'norm_counts_Avg_lg10_Expr_C_6_DIV10' => array(
                'name' => 's Avg lg10 Expr C 6 DIV10'
            ),
            'norm_counts_Avg_lg10_Expr_C_6_DIV20' => array(
                'name' => 's Avg lg10 Expr C 6 DIV20'
            ),
            'norm_counts_Avg_lg10_Expr_C_6_DIV4' => array(
                'name' => 's Avg lg10 Expr C 6 DIV4'
            ),
            'norm_counts_Avg_lg10_Expr_C_7_DIV10' => array(
                'name' => 's Avg lg10 Expr C 7 DIV10'
            ),
            'norm_counts_Avg_lg10_Expr_C_7_DIV20' => array(
                'name' => 's Avg lg10 Expr C 7 DIV20'
            ),
            'norm_counts_Avg_lg10_Expr_C_7_DIV4' => array(
                'name' => 's Avg lg10 Expr C 7 DIV4'
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
