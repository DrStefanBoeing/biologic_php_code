<?php

return array(
    'lab' => array(
        'name' => 'Example DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'ref_data',
    'data_db' => array(
            'cat_table_name' => 'ref348_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'p348_sc_rna_seq_table',
    'primary_gene_symbol' => 'dr_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Averaged Heatmap',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Avg_lg10_Expr_X0_16hpf' => array(
            'color' => '#F8766D',
            'name' => 'Avg lg10 Expr X0 16hpf'
        ),
        'norm_counts_Avg_lg10_Expr_X1_16hpf' => array(
            'color' => '#EB8335',
            'name' => 'Avg lg10 Expr X1 16hpf'
        ),
        'norm_counts_Avg_lg10_Expr_X2_16hpf' => array(
            'color' => '#DA8F00',
            'name' => 'Avg lg10 Expr X2 16hpf'
        ),
        'norm_counts_Avg_lg10_Expr_X3_16hpf' => array(
            'color' => '#C49A00',
            'name' => 'Avg lg10 Expr X3 16hpf'
        ),
        'norm_counts_Avg_lg10_Expr_X3_24hpf' => array(
            'color' => '#C49A00',
            'name' => 'Avg lg10 Expr X3 24hpf'
        ),
        'norm_counts_Avg_lg10_Expr_X4_24hpf' => array(
            'color' => '#A9A400',
            'name' => 'Avg lg10 Expr X4 24hpf'
        ),
        'norm_counts_Avg_lg10_Expr_X5_24hpf' => array(
            'color' => '#86AC00',
            'name' => 'Avg lg10 Expr X5 24hpf'
        ),
        'norm_counts_Avg_lg10_Expr_X6_24hpf' => array(
            'color' => '#53B400',
            'name' => 'Avg lg10 Expr X6 24hpf'
        ),
        'norm_counts_Avg_lg10_Expr_X7_24hpf' => array(
            'color' => '#00BA38',
            'name' => 'Avg lg10 Expr X7 24hpf'
        ),
        'norm_counts_Avg_lg10_Expr_X7_44hpf' => array(
            'color' => '#00BA38',
            'name' => 'Avg lg10 Expr X7 44hpf'
        ),
        'norm_counts_Avg_lg10_Expr_X8_44hpf' => array(
            'color' => '#00BE6D',
            'name' => 'Avg lg10 Expr X8 44hpf'
        ),
        'norm_counts_Avg_lg10_Expr_X9_44hpf' => array(
            'color' => '#00C094',
            'name' => 'Avg lg10 Expr X9 44hpf'
        ),
        'norm_counts_Avg_lg10_Expr_X10_44hpf' => array(
            'color' => '#EB8335',
            'name' => 'Avg lg10 Expr X10 44hpf'
        ),
        'norm_counts_Avg_lg10_Expr_X11_44hpf' => array(
            'color' => '#EB8335',
            'name' => 'Avg lg10 Expr X11 44hpf'
        ),
        'norm_counts_Avg_lg10_Expr_X12_44hpf' => array(
            'color' => '#EB8335',
            'name' => 'Avg lg10 Expr X12 44hpf'
        ),
        'norm_counts_Avg_lg10_Expr_X13_44hpf' => array(
            'color' => '#EB8335',
            'name' => 'Avg lg10 Expr X13 44hpf'
        ),
        'norm_counts_Avg_lg10_Expr_X14_44hpf' => array(
            'color' => '#EB8335',
            'name' => 'Avg lg10 Expr X14 44hpf'
        ),
        'norm_counts_Avg_lg10_Expr_X15_44hpf' => array(
            'color' => '#EB8335',
            'name' => 'Avg lg10 Expr X15 44hpf'
        ),
        'norm_counts_Avg_lg10_Expr_X16_44hpf' => array(
            'color' => '#EB8335',
            'name' => 'Avg lg10 Expr X16 44hpf'
        ),
        'norm_counts_Avg_lg10_Expr_X17_44hpf' => array(
            'color' => '#EB8335',
            'name' => 'Avg lg10 Expr X17 44hpf'
        ),
        'norm_counts_Avg_lg10_Expr_X18_44hpf' => array(
            'color' => '#EB8335',
            'name' => 'Avg lg10 Expr X18 44hpf'
        ),
        'norm_counts_Avg_lg10_Expr_X19_44hpf' => array(
            'color' => '#EB8335',
            'name' => 'Avg lg10 Expr X19 44hpf'
        ),
        'norm_counts_Avg_lg10_Expr_X20_44hpf' => array(
            'color' => '#DA8F00',
            'name' => 'Avg lg10 Expr X20 44hpf'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'lg10 Expr for all Samples',
        'sidelabel' => 'lg10 Expr'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Avg_log10_Expr_Sc_X44hpf','lg2_avg_Avg_log10_Expr_Sc_X24hpf','lg2_avg_Avg_log10_Expr_Sc_X16hpf','lg2_avg_Avg_log10_Expr_Sc_X0_16hpf','lg2_avg_Avg_log10_Expr_Sc_X1_16hpf','lg2_avg_Avg_log10_Expr_Sc_X2_16hpf','lg2_avg_Avg_log10_Expr_Sc_X3_16hpf','lg2_avg_Avg_log10_Expr_Sc_X3_24hpf','lg2_avg_Avg_log10_Expr_Sc_X4_24hpf','lg2_avg_Avg_log10_Expr_Sc_X5_24hpf','lg2_avg_Avg_log10_Expr_Sc_X6_24hpf','lg2_avg_Avg_log10_Expr_Sc_X7_24hpf','lg2_avg_Avg_log10_Expr_Sc_X7_44hpf','lg2_avg_Avg_log10_Expr_Sc_X8_44hpf','lg2_avg_Avg_log10_Expr_Sc_X9_44hpf','lg2_avg_Avg_log10_Expr_Sc_X10_44hpf','lg2_avg_Avg_log10_Expr_Sc_X11_44hpf','lg2_avg_Avg_log10_Expr_Sc_X12_44hpf','lg2_avg_Avg_log10_Expr_Sc_X13_44hpf','lg2_avg_Avg_log10_Expr_Sc_X14_44hpf','lg2_avg_Avg_log10_Expr_Sc_X15_44hpf','lg2_avg_Avg_log10_Expr_Sc_X16_44hpf','lg2_avg_Avg_log10_Expr_Sc_X17_44hpf','lg2_avg_Avg_log10_Expr_Sc_X18_44hpf','lg2_avg_Avg_log10_Expr_Sc_X19_44hpf','lg2_avg_Avg_log10_Expr_Sc_X20_44hpf'),

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
        'contrast_1_avg_logFC_16hpf_vs_24hpf' => array(
            'name' => 'avg logFC 16hpf vs 24hpf',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_1_padj_16hpf_vs_24hpf' => array(
            'name' => 'padj 16hpf vs 24hpf',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_1_lg10p_16hpf_vs_24hpf' => array(
            'name' => 'lg10p 16hpf vs 24hpf',
            'slider_min' => 0,
            'slider_max' => 98,
            'default_low' => 0,
            'default_high' => 98
        ),
        'contrast_2_avg_logFC_24hpf_vs_44hpf' => array(
            'name' => 'avg logFC 24hpf vs 44hpf',
            'slider_min' => -1,
            'slider_max' => 0,
            'default_low' => -1,
            'default_high' => 0
        ),
        'contrast_2_padj_24hpf_vs_44hpf' => array(
            'name' => 'padj 24hpf vs 44hpf',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_lg10p_24hpf_vs_44hpf' => array(
            'name' => 'lg10p 24hpf vs 44hpf',
            'slider_min' => 0,
            'slider_max' => 0,
            'default_low' => 0,
            'default_high' => 0
        )
    )
    ),
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_X_logFC_Expressed_in_N_Percent_Cells',
        'default-y' => 'norm_counts_Avg_lg10_Expr_X0_16hpf',
        'selection' => array(
            'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
                'name' => 'logFC Expressed in N Percent Cells'
            ),
            'contrast_1_avg_logFC_16hpf_vs_24hpf' => array(
                'name' => 'avg logFC 16hpf vs 24hpf'
            ),
            'contrast_1_padj_16hpf_vs_24hpf' => array(
                'name' => 'padj 16hpf vs 24hpf'
            ),
            'contrast_1_lg10p_16hpf_vs_24hpf' => array(
                'name' => 'lg10p 16hpf vs 24hpf'
            ),
            'contrast_2_avg_logFC_24hpf_vs_44hpf' => array(
                'name' => 'avg logFC 24hpf vs 44hpf'
            ),
            'contrast_2_padj_24hpf_vs_44hpf' => array(
                'name' => 'padj 24hpf vs 44hpf'
            ),
            'contrast_2_lg10p_24hpf_vs_44hpf' => array(
                'name' => 'lg10p 24hpf vs 44hpf'
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
            'norm_counts_Avg_lg10_Expr_X16hpf' => array(
                'name' => 's Avg lg10 Expr X16hpf'
            ),
            'norm_counts_Avg_lg10_Expr_X24hpf' => array(
                'name' => 's Avg lg10 Expr X24hpf'
            ),
            'norm_counts_Avg_lg10_Expr_X44hpf' => array(
                'name' => 's Avg lg10 Expr X44hpf'
            ),
            'norm_counts_Avg_lg10_Expr_X0_16hpf' => array(
                'name' => 's Avg lg10 Expr X0 16hpf'
            ),
            'norm_counts_Avg_lg10_Expr_X1_16hpf' => array(
                'name' => 's Avg lg10 Expr X1 16hpf'
            ),
            'norm_counts_Avg_lg10_Expr_X2_16hpf' => array(
                'name' => 's Avg lg10 Expr X2 16hpf'
            ),
            'norm_counts_Avg_lg10_Expr_X3_16hpf' => array(
                'name' => 's Avg lg10 Expr X3 16hpf'
            ),
            'norm_counts_Avg_lg10_Expr_X3_24hpf' => array(
                'name' => 's Avg lg10 Expr X3 24hpf'
            ),
            'norm_counts_Avg_lg10_Expr_X4_24hpf' => array(
                'name' => 's Avg lg10 Expr X4 24hpf'
            ),
            'norm_counts_Avg_lg10_Expr_X5_24hpf' => array(
                'name' => 's Avg lg10 Expr X5 24hpf'
            ),
            'norm_counts_Avg_lg10_Expr_X6_24hpf' => array(
                'name' => 's Avg lg10 Expr X6 24hpf'
            ),
            'norm_counts_Avg_lg10_Expr_X7_24hpf' => array(
                'name' => 's Avg lg10 Expr X7 24hpf'
            ),
            'norm_counts_Avg_lg10_Expr_X7_44hpf' => array(
                'name' => 's Avg lg10 Expr X7 44hpf'
            ),
            'norm_counts_Avg_lg10_Expr_X8_44hpf' => array(
                'name' => 's Avg lg10 Expr X8 44hpf'
            ),
            'norm_counts_Avg_lg10_Expr_X9_44hpf' => array(
                'name' => 's Avg lg10 Expr X9 44hpf'
            ),
            'norm_counts_Avg_lg10_Expr_X10_44hpf' => array(
                'name' => 's Avg lg10 Expr X10 44hpf'
            ),
            'norm_counts_Avg_lg10_Expr_X11_44hpf' => array(
                'name' => 's Avg lg10 Expr X11 44hpf'
            ),
            'norm_counts_Avg_lg10_Expr_X12_44hpf' => array(
                'name' => 's Avg lg10 Expr X12 44hpf'
            ),
            'norm_counts_Avg_lg10_Expr_X13_44hpf' => array(
                'name' => 's Avg lg10 Expr X13 44hpf'
            ),
            'norm_counts_Avg_lg10_Expr_X14_44hpf' => array(
                'name' => 's Avg lg10 Expr X14 44hpf'
            ),
            'norm_counts_Avg_lg10_Expr_X15_44hpf' => array(
                'name' => 's Avg lg10 Expr X15 44hpf'
            ),
            'norm_counts_Avg_lg10_Expr_X16_44hpf' => array(
                'name' => 's Avg lg10 Expr X16 44hpf'
            ),
            'norm_counts_Avg_lg10_Expr_X17_44hpf' => array(
                'name' => 's Avg lg10 Expr X17 44hpf'
            ),
            'norm_counts_Avg_lg10_Expr_X18_44hpf' => array(
                'name' => 's Avg lg10 Expr X18 44hpf'
            ),
            'norm_counts_Avg_lg10_Expr_X19_44hpf' => array(
                'name' => 's Avg lg10 Expr X19 44hpf'
            ),
            'norm_counts_Avg_lg10_Expr_X20_44hpf' => array(
                'name' => 's Avg lg10 Expr X20 44hpf'
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
