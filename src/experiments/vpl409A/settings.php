<?php

return array(
    'public_access' => TRUE,
    'lab' => array(
        'name' => 'Regev DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'vpl_data',
    'data_db' => array(
            'cat_table_name' => 'vpl409A_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'vpl409A_sc_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged Expr',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Avg_log10_Expr_C0_Glia' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C0 Glia'
        ),
        'norm_counts_Avg_log10_Expr_C0_Neuron' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C0 Neuron'
        ),
        'norm_counts_Avg_log10_Expr_C10_Neuron' => array(
            'color' => '#E18A00',
            'name' => 'Avg log10 Expr C10 Neuron'
        ),
        'norm_counts_Avg_log10_Expr_C11_Glia' => array(
            'color' => '#BE9C00',
            'name' => 'Avg log10 Expr C11 Glia'
        ),
        'norm_counts_Avg_log10_Expr_C11_Neuron' => array(
            'color' => '#BE9C00',
            'name' => 'Avg log10 Expr C11 Neuron'
        ),
        'norm_counts_Avg_log10_Expr_C12_Glia' => array(
            'color' => '#8CAB00',
            'name' => 'Avg log10 Expr C12 Glia'
        ),
        'norm_counts_Avg_log10_Expr_C12_Neuron' => array(
            'color' => '#8CAB00',
            'name' => 'Avg log10 Expr C12 Neuron'
        ),
        'norm_counts_Avg_log10_Expr_C1_Glia' => array(
            'color' => '#24B700',
            'name' => 'Avg log10 Expr C1 Glia'
        ),
        'norm_counts_Avg_log10_Expr_C1_Neuron' => array(
            'color' => '#24B700',
            'name' => 'Avg log10 Expr C1 Neuron'
        ),
        'norm_counts_Avg_log10_Expr_C2_Glia' => array(
            'color' => '#00BE70',
            'name' => 'Avg log10 Expr C2 Glia'
        ),
        'norm_counts_Avg_log10_Expr_C2_Neuron' => array(
            'color' => '#00BE70',
            'name' => 'Avg log10 Expr C2 Neuron'
        ),
        'norm_counts_Avg_log10_Expr_C3_Glia' => array(
            'color' => '#00C1AB',
            'name' => 'Avg log10 Expr C3 Glia'
        ),
        'norm_counts_Avg_log10_Expr_C3_Neuron' => array(
            'color' => '#00C1AB',
            'name' => 'Avg log10 Expr C3 Neuron'
        ),
        'norm_counts_Avg_log10_Expr_C4_Glia' => array(
            'color' => '#00BBDA',
            'name' => 'Avg log10 Expr C4 Glia'
        ),
        'norm_counts_Avg_log10_Expr_C4_Neuron' => array(
            'color' => '#00BBDA',
            'name' => 'Avg log10 Expr C4 Neuron'
        ),
        'norm_counts_Avg_log10_Expr_C5_Glia' => array(
            'color' => '#00ACFC',
            'name' => 'Avg log10 Expr C5 Glia'
        ),
        'norm_counts_Avg_log10_Expr_C5_Neuron' => array(
            'color' => '#00ACFC',
            'name' => 'Avg log10 Expr C5 Neuron'
        ),
        'norm_counts_Avg_log10_Expr_C6_Glia' => array(
            'color' => '#8B93FF',
            'name' => 'Avg log10 Expr C6 Glia'
        ),
        'norm_counts_Avg_log10_Expr_C6_Neuron' => array(
            'color' => '#8B93FF',
            'name' => 'Avg log10 Expr C6 Neuron'
        ),
        'norm_counts_Avg_log10_Expr_C7_Glia' => array(
            'color' => '#D575FE',
            'name' => 'Avg log10 Expr C7 Glia'
        ),
        'norm_counts_Avg_log10_Expr_C7_Neuron' => array(
            'color' => '#D575FE',
            'name' => 'Avg log10 Expr C7 Neuron'
        ),
        'norm_counts_Avg_log10_Expr_C8_Glia' => array(
            'color' => '#F962DD',
            'name' => 'Avg log10 Expr C8 Glia'
        ),
        'norm_counts_Avg_log10_Expr_C8_Neuron' => array(
            'color' => '#F962DD',
            'name' => 'Avg log10 Expr C8 Neuron'
        ),
        'norm_counts_Avg_log10_Expr_C9_Glia' => array(
            'color' => '#FF65AC',
            'name' => 'Avg log10 Expr C9 Glia'
        ),
        'norm_counts_Avg_log10_Expr_C9_Neuron' => array(
            'color' => '#FF65AC',
            'name' => 'Avg log10 Expr C9 Neuron'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'lg10 Expr for all Samples',
        'sidelabel' => 'lg10 Expr'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Avg_log10_Expr_Sc_C0_Glia','lg2_avg_Avg_log10_Expr_Sc_C0_Neuron','lg2_avg_Avg_log10_Expr_Sc_C10_Neuron','lg2_avg_Avg_log10_Expr_Sc_C11_Glia','lg2_avg_Avg_log10_Expr_Sc_C11_Neuron','lg2_avg_Avg_log10_Expr_Sc_C12_Glia','lg2_avg_Avg_log10_Expr_Sc_C12_Neuron','lg2_avg_Avg_log10_Expr_Sc_C1_Glia','lg2_avg_Avg_log10_Expr_Sc_C1_Neuron','lg2_avg_Avg_log10_Expr_Sc_C2_Glia','lg2_avg_Avg_log10_Expr_Sc_C2_Neuron','lg2_avg_Avg_log10_Expr_Sc_C3_Glia','lg2_avg_Avg_log10_Expr_Sc_C3_Neuron','lg2_avg_Avg_log10_Expr_Sc_C4_Glia','lg2_avg_Avg_log10_Expr_Sc_C4_Neuron','lg2_avg_Avg_log10_Expr_Sc_C5_Glia','lg2_avg_Avg_log10_Expr_Sc_C5_Neuron','lg2_avg_Avg_log10_Expr_Sc_C6_Glia','lg2_avg_Avg_log10_Expr_Sc_C6_Neuron','lg2_avg_Avg_log10_Expr_Sc_C7_Glia','lg2_avg_Avg_log10_Expr_Sc_C7_Neuron','lg2_avg_Avg_log10_Expr_Sc_C8_Glia','lg2_avg_Avg_log10_Expr_Sc_C8_Neuron','lg2_avg_Avg_log10_Expr_Sc_C9_Glia','lg2_avg_Avg_log10_Expr_Sc_C9_Neuron'),

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
        'contrast_1_logFC_DGE_Glia_vs_Neuron' => array(
            'name' => 'logFC DGE Glia vs Neuron',
            'slider_min' => -9,
            'slider_max' => 9,
            'default_low' => -9,
            'default_high' => 9
        ),
        'contrast_1_padj_DGE_Glia_vs_Neuron' => array(
            'name' => 'padj DGE Glia vs Neuron',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_1_logFC_DGE_Neuron_vs_Glia' => array(
            'name' => 'logFC DGE Neuron vs Glia',
            'slider_min' => -9,
            'slider_max' => 9,
            'default_low' => -9,
            'default_high' => 9
        ),
        'contrast_1_padj_DGE_Neuron_vs_Glia' => array(
            'name' => 'padj DGE Neuron vs Glia',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'add_counts_C0_Residuals' => array(
            'name' => 'C0 Residuals',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'add_counts_C1_Residuals' => array(
            'name' => 'C1 Residuals',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'add_counts_C10_Residuals' => array(
            'name' => 'C10 Residuals',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'add_counts_C11_Residuals' => array(
            'name' => 'C11 Residuals',
            'slider_min' => -2,
            'slider_max' => 3,
            'default_low' => -2,
            'default_high' => 3
        ),
        'add_counts_C12_Residuals' => array(
            'name' => 'C12 Residuals',
            'slider_min' => -2,
            'slider_max' => 4,
            'default_low' => -2,
            'default_high' => 4
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
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
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
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'add_counts_C6_Residuals' => array(
            'name' => 'C6 Residuals',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
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
            'slider_max' => 3,
            'default_low' => -2,
            'default_high' => 3
        ),
        'add_counts_C9_Residuals' => array(
            'name' => 'C9 Residuals',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'vpl409A_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'add_counts_Avg_log10_Expr_all',
        'default-y' => 'norm_counts_Avg_log10_Expr_C0_Glia',
        'selection' => array(
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg log10 Expr all'
            ),
            'norm_counts_Avg_log10_Expr_C0_Glia' => array(
                'name' => 's Avg log10 Expr C0 Glia'
            ),
            'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
                'name' => 'logFC Expressed in N Percent Cells'
            ),
            'contrast_1_logFC_DGE_Glia_vs_Neuron' => array(
                'name' => 'logFC DGE Glia vs Neuron'
            ),
            'contrast_1_logFC_DGE_Neuron_vs_Glia' => array(
                'name' => 'logFC DGE Neuron vs Glia'
            ),
            'contrast_1_lg10p_DGE_Glia_vs_Neuron' => array(
                'name' => 'lg10p DGE Glia vs Neuron'
            ),
            'contrast_1_lg10p_DGE_Neuron_vs_Glia' => array(
                'name' => 'lg10p DGE Neuron vs Glia'
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
            'add_counts_Avg_log10_Expr_C11' => array(
                'name' => 'Avg log10 Expr C11'
            ),
            'add_counts_Avg_log10_Expr_C12' => array(
                'name' => 'Avg log10 Expr C12'
            ),
            'add_counts_Avg_log10_Expr_C10' => array(
                'name' => 'Avg log10 Expr C10'
            ),
            'add_counts_Avg_log10_Expr_C11' => array(
                'name' => 'Avg log10 Expr C11'
            ),
            'add_counts_Avg_log10_Expr_C12' => array(
                'name' => 'Avg log10 Expr C12'
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
            'add_counts_Avg_log10_Expr_Glia' => array(
                'name' => 'Avg log10 Expr Glia'
            ),
            'add_counts_Avg_log10_Expr_Neuron' => array(
                'name' => 'Avg log10 Expr Neuron'
            ),
            'norm_counts_Avg_log10_Expr_C0_Glia' => array(
                'name' => 's Avg log10 Expr C0 Glia'
            ),
            'norm_counts_Avg_log10_Expr_C0_Neuron' => array(
                'name' => 's Avg log10 Expr C0 Neuron'
            ),
            'norm_counts_Avg_log10_Expr_C10_Neuron' => array(
                'name' => 's Avg log10 Expr C10 Neuron'
            ),
            'norm_counts_Avg_log10_Expr_C11_Glia' => array(
                'name' => 's Avg log10 Expr C11 Glia'
            ),
            'norm_counts_Avg_log10_Expr_C11_Neuron' => array(
                'name' => 's Avg log10 Expr C11 Neuron'
            ),
            'norm_counts_Avg_log10_Expr_C12_Glia' => array(
                'name' => 's Avg log10 Expr C12 Glia'
            ),
            'norm_counts_Avg_log10_Expr_C12_Neuron' => array(
                'name' => 's Avg log10 Expr C12 Neuron'
            ),
            'norm_counts_Avg_log10_Expr_C1_Glia' => array(
                'name' => 's Avg log10 Expr C1 Glia'
            ),
            'norm_counts_Avg_log10_Expr_C1_Neuron' => array(
                'name' => 's Avg log10 Expr C1 Neuron'
            ),
            'norm_counts_Avg_log10_Expr_C2_Glia' => array(
                'name' => 's Avg log10 Expr C2 Glia'
            ),
            'norm_counts_Avg_log10_Expr_C2_Neuron' => array(
                'name' => 's Avg log10 Expr C2 Neuron'
            ),
            'norm_counts_Avg_log10_Expr_C3_Glia' => array(
                'name' => 's Avg log10 Expr C3 Glia'
            ),
            'norm_counts_Avg_log10_Expr_C3_Neuron' => array(
                'name' => 's Avg log10 Expr C3 Neuron'
            ),
            'norm_counts_Avg_log10_Expr_C4_Glia' => array(
                'name' => 's Avg log10 Expr C4 Glia'
            ),
            'norm_counts_Avg_log10_Expr_C4_Neuron' => array(
                'name' => 's Avg log10 Expr C4 Neuron'
            ),
            'norm_counts_Avg_log10_Expr_C5_Glia' => array(
                'name' => 's Avg log10 Expr C5 Glia'
            ),
            'norm_counts_Avg_log10_Expr_C5_Neuron' => array(
                'name' => 's Avg log10 Expr C5 Neuron'
            ),
            'norm_counts_Avg_log10_Expr_C6_Glia' => array(
                'name' => 's Avg log10 Expr C6 Glia'
            ),
            'norm_counts_Avg_log10_Expr_C6_Neuron' => array(
                'name' => 's Avg log10 Expr C6 Neuron'
            ),
            'norm_counts_Avg_log10_Expr_C7_Glia' => array(
                'name' => 's Avg log10 Expr C7 Glia'
            ),
            'norm_counts_Avg_log10_Expr_C7_Neuron' => array(
                'name' => 's Avg log10 Expr C7 Neuron'
            ),
            'norm_counts_Avg_log10_Expr_C8_Glia' => array(
                'name' => 's Avg log10 Expr C8 Glia'
            ),
            'norm_counts_Avg_log10_Expr_C8_Neuron' => array(
                'name' => 's Avg log10 Expr C8 Neuron'
            ),
            'norm_counts_Avg_log10_Expr_C9_Glia' => array(
                'name' => 's Avg log10 Expr C9 Glia'
            ),
            'norm_counts_Avg_log10_Expr_C9_Neuron' => array(
                'name' => 's Avg log10 Expr C9 Neuron'
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
            'add_MA_cts_MA_Avg_DGE_Glia_vs_Neuron' => array(
                'name' => 'MA Avg DGE Glia vs Neuron'
            ),
            'add_MA_cts_MA_Avg_DGE_Neuron_vs_Glia' => array(
                'name' => 'MA Avg DGE Neuron vs Glia'
            ),
            'add_counts_C0_Residuals' => array(
                'name' => 'C0 Residuals'
            ),
            'add_counts_C1_Residuals' => array(
                'name' => 'C1 Residuals'
            ),
            'add_counts_C10_Residuals' => array(
                'name' => 'C10 Residuals'
            ),
            'add_counts_C11_Residuals' => array(
                'name' => 'C11 Residuals'
            ),
            'add_counts_C12_Residuals' => array(
                'name' => 'C12 Residuals'
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
