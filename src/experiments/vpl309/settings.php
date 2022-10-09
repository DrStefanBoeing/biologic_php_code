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
            'cat_table_name' => 'vpl309_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'p309_sc_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 2,
        'lower_limit' => -2,
        'headline' => 'Heatmap: Row-averaged Expr',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Avg_lg10_Expr_C_0_DIV10' => array(
            'color' => '#F8766D',
            'name' => 'Avg lg10 Expr C 0 DIV10'
        ),
        'norm_counts_Avg_lg10_Expr_C_0_DIV4' => array(
            'color' => '#F8766D',
            'name' => 'Avg lg10 Expr C 0 DIV4'
        ),
        'norm_counts_Avg_lg10_Expr_C_10_DIV10' => array(
            'color' => '#DB8E00',
            'name' => 'Avg lg10 Expr C 10 DIV10'
        ),
        'norm_counts_Avg_lg10_Expr_C_10_DIV4' => array(
            'color' => '#DB8E00',
            'name' => 'Avg lg10 Expr C 10 DIV4'
        ),
        'norm_counts_Avg_lg10_Expr_C_1_DIV10' => array(
            'color' => '#AEA200',
            'name' => 'Avg lg10 Expr C 1 DIV10'
        ),
        'norm_counts_Avg_lg10_Expr_C_1_DIV4' => array(
            'color' => '#AEA200',
            'name' => 'Avg lg10 Expr C 1 DIV4'
        ),
        'norm_counts_Avg_lg10_Expr_C_2_DIV10' => array(
            'color' => '#64B200',
            'name' => 'Avg lg10 Expr C 2 DIV10'
        ),
        'norm_counts_Avg_lg10_Expr_C_2_DIV4' => array(
            'color' => '#64B200',
            'name' => 'Avg lg10 Expr C 2 DIV4'
        ),
        'norm_counts_Avg_lg10_Expr_C_3_DIV10' => array(
            'color' => '#00BD5C',
            'name' => 'Avg lg10 Expr C 3 DIV10'
        ),
        'norm_counts_Avg_lg10_Expr_C_3_DIV4' => array(
            'color' => '#00BD5C',
            'name' => 'Avg lg10 Expr C 3 DIV4'
        ),
        'norm_counts_Avg_lg10_Expr_C_4_DIV10' => array(
            'color' => '#00C1A7',
            'name' => 'Avg lg10 Expr C 4 DIV10'
        ),
        'norm_counts_Avg_lg10_Expr_C_4_DIV4' => array(
            'color' => '#00C1A7',
            'name' => 'Avg lg10 Expr C 4 DIV4'
        ),
        'norm_counts_Avg_lg10_Expr_C_5_DIV10' => array(
            'color' => '#00BADE',
            'name' => 'Avg lg10 Expr C 5 DIV10'
        ),
        'norm_counts_Avg_lg10_Expr_C_5_DIV4' => array(
            'color' => '#00BADE',
            'name' => 'Avg lg10 Expr C 5 DIV4'
        ),
        'norm_counts_Avg_lg10_Expr_C_6_DIV10' => array(
            'color' => '#00A6FF',
            'name' => 'Avg lg10 Expr C 6 DIV10'
        ),
        'norm_counts_Avg_lg10_Expr_C_6_DIV4' => array(
            'color' => '#00A6FF',
            'name' => 'Avg lg10 Expr C 6 DIV4'
        ),
        'norm_counts_Avg_lg10_Expr_C_7_DIV10' => array(
            'color' => '#B385FF',
            'name' => 'Avg lg10 Expr C 7 DIV10'
        ),
        'norm_counts_Avg_lg10_Expr_C_7_DIV4' => array(
            'color' => '#B385FF',
            'name' => 'Avg lg10 Expr C 7 DIV4'
        ),
        'norm_counts_Avg_lg10_Expr_C_8_DIV10' => array(
            'color' => '#EF67EB',
            'name' => 'Avg lg10 Expr C 8 DIV10'
        ),
        'norm_counts_Avg_lg10_Expr_C_8_DIV4' => array(
            'color' => '#EF67EB',
            'name' => 'Avg lg10 Expr C 8 DIV4'
        ),
        'norm_counts_Avg_lg10_Expr_C_9_DIV10' => array(
            'color' => '#FF63B6',
            'name' => 'Avg lg10 Expr C 9 DIV10'
        ),
        'norm_counts_Avg_lg10_Expr_C_9_DIV4' => array(
            'color' => '#FF63B6',
            'name' => 'Avg lg10 Expr C 9 DIV4'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'lg10 Expr for all Samples',
        'sidelabel' => 'lg10 Expr'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Avg_log10_Expr_Sc_C_0_DIV10','lg2_avg_Avg_log10_Expr_Sc_C_0_DIV4','lg2_avg_Avg_log10_Expr_Sc_C_10_DIV10','lg2_avg_Avg_log10_Expr_Sc_C_10_DIV4','lg2_avg_Avg_log10_Expr_Sc_C_1_DIV10','lg2_avg_Avg_log10_Expr_Sc_C_1_DIV4','lg2_avg_Avg_log10_Expr_Sc_C_2_DIV10','lg2_avg_Avg_log10_Expr_Sc_C_2_DIV4','lg2_avg_Avg_log10_Expr_Sc_C_3_DIV10','lg2_avg_Avg_log10_Expr_Sc_C_3_DIV4','lg2_avg_Avg_log10_Expr_Sc_C_4_DIV10','lg2_avg_Avg_log10_Expr_Sc_C_4_DIV4','lg2_avg_Avg_log10_Expr_Sc_C_5_DIV10','lg2_avg_Avg_log10_Expr_Sc_C_5_DIV4','lg2_avg_Avg_log10_Expr_Sc_C_6_DIV10','lg2_avg_Avg_log10_Expr_Sc_C_6_DIV4','lg2_avg_Avg_log10_Expr_Sc_C_7_DIV10','lg2_avg_Avg_log10_Expr_Sc_C_7_DIV4','lg2_avg_Avg_log10_Expr_Sc_C_8_DIV10','lg2_avg_Avg_log10_Expr_Sc_C_8_DIV4','lg2_avg_Avg_log10_Expr_Sc_C_9_DIV10','lg2_avg_Avg_log10_Expr_Sc_C_9_DIV4'),

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
        'contrast_1_logFC_DIV11_vs_DIV4_bulkRNAseq195' => array(
            'name' => 'logFC DIV11 vs DIV4 bulkRNAseq195',
            'slider_min' => -6,
            'slider_max' => 9,
            'default_low' => -6,
            'default_high' => 9
        ),
        'contrast_2_logFC_DIV20_vs_DIV4_bulkRNAseq195' => array(
            'name' => 'logFC DIV20 vs DIV4 bulkRNAseq195',
            'slider_min' => -7,
            'slider_max' => 9,
            'default_low' => -7,
            'default_high' => 9
        ),
        'contrast_3_logFC_DIV20_vs_DIV11_bulkRNAseq195' => array(
            'name' => 'logFC DIV20 vs DIV11 bulkRNAseq195',
            'slider_min' => -5,
            'slider_max' => 10,
            'default_low' => -5,
            'default_high' => 10
        ),
        'contrast_4_logFC_DIV0C_vs_DIV11_bulkRNAseq195' => array(
            'name' => 'logFC DIV0C vs DIV11 bulkRNAseq195',
            'slider_min' => -13,
            'slider_max' => 11,
            'default_low' => -13,
            'default_high' => 11
        ),
        'contrast_2_logFC_ATAC_DIV11_vs_DIV4_60' => array(
            'name' => 'logFC ATAC DIV11 vs DIV4 60',
            'slider_min' => -3,
            'slider_max' => 4,
            'default_low' => -3,
            'default_high' => 4
        ),
        'contrast_1_padj_DIV11_vs_DIV4_bulkRNAseq195' => array(
            'name' => 'padj DIV11 vs DIV4 bulkRNAseq195',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_padj_DIV20_vs_DIV4_bulkRNAseq195' => array(
            'name' => 'padj DIV20 vs DIV4 bulkRNAseq195',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_padj_DIV20_vs_DIV11_bulkRNAseq195' => array(
            'name' => 'padj DIV20 vs DIV11 bulkRNAseq195',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_padj_DIV0C_vs_DIV11_bulkRNAseq195' => array(
            'name' => 'padj DIV0C vs DIV11 bulkRNAseq195',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_padj_ATAC_DIV11_vs_DIV4_60' => array(
            'name' => 'padj ATAC DIV11 vs DIV4 60',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        )
    )
    ),
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_X_logFC_Expressed_in_N_Percent_Cells',
        'default-y' => 'norm_counts_Avg_lg10_Expr_C_8_DIV10',
        'selection' => array(
            'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
                'name' => 'logFC Expressed in N Percent Cells'
            ),
            'contrast_1_logFC_DIV11_vs_DIV4_bulkRNAseq195' => array(
                'name' => 'logFC DIV11 vs DIV4 bulkRNAseq195'
            ),
            'contrast_2_logFC_DIV20_vs_DIV4_bulkRNAseq195' => array(
                'name' => 'logFC DIV20 vs DIV4 bulkRNAseq195'
            ),
            'contrast_3_logFC_DIV20_vs_DIV11_bulkRNAseq195' => array(
                'name' => 'logFC DIV20 vs DIV11 bulkRNAseq195'
            ),
            'contrast_4_logFC_DIV0C_vs_DIV11_bulkRNAseq195' => array(
                'name' => 'logFC DIV0C vs DIV11 bulkRNAseq195'
            ),
            'contrast_2_logFC_ATAC_DIV11_vs_DIV4_60' => array(
                'name' => 'logFC ATAC DIV11 vs DIV4 60'
            ),
            'contrast_1_lg10p_DIV11_vs_DIV4_bulkRNAseq195' => array(
                'name' => 'lg10p DIV11 vs DIV4 bulkRNAseq195'
            ),
            'contrast_2_lg10p_DIV20_vs_DIV4_bulkRNAseq195' => array(
                'name' => 'lg10p DIV20 vs DIV4 bulkRNAseq195'
            ),
            'contrast_3_lg10p_DIV20_vs_DIV11_bulkRNAseq195' => array(
                'name' => 'lg10p DIV20 vs DIV11 bulkRNAseq195'
            ),
            'contrast_4_lg10p_DIV0C_vs_DIV11_bulkRNAseq195' => array(
                'name' => 'lg10p DIV0C vs DIV11 bulkRNAseq195'
            ),
            'contrast_2_lg10p_ATAC_DIV11_vs_DIV4_60' => array(
                'name' => 'lg10p ATAC DIV11 vs DIV4 60'
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
            'norm_counts_Avg_lg10_Expr_C_0_DIV4' => array(
                'name' => 's Avg lg10 Expr C 0 DIV4'
            ),
            'norm_counts_Avg_lg10_Expr_C_10_DIV10' => array(
                'name' => 's Avg lg10 Expr C 10 DIV10'
            ),
            'norm_counts_Avg_lg10_Expr_C_10_DIV4' => array(
                'name' => 's Avg lg10 Expr C 10 DIV4'
            ),
            'norm_counts_Avg_lg10_Expr_C_1_DIV10' => array(
                'name' => 's Avg lg10 Expr C 1 DIV10'
            ),
            'norm_counts_Avg_lg10_Expr_C_1_DIV4' => array(
                'name' => 's Avg lg10 Expr C 1 DIV4'
            ),
            'norm_counts_Avg_lg10_Expr_C_2_DIV10' => array(
                'name' => 's Avg lg10 Expr C 2 DIV10'
            ),
            'norm_counts_Avg_lg10_Expr_C_2_DIV4' => array(
                'name' => 's Avg lg10 Expr C 2 DIV4'
            ),
            'norm_counts_Avg_lg10_Expr_C_3_DIV10' => array(
                'name' => 's Avg lg10 Expr C 3 DIV10'
            ),
            'norm_counts_Avg_lg10_Expr_C_3_DIV4' => array(
                'name' => 's Avg lg10 Expr C 3 DIV4'
            ),
            'norm_counts_Avg_lg10_Expr_C_4_DIV10' => array(
                'name' => 's Avg lg10 Expr C 4 DIV10'
            ),
            'norm_counts_Avg_lg10_Expr_C_4_DIV4' => array(
                'name' => 's Avg lg10 Expr C 4 DIV4'
            ),
            'norm_counts_Avg_lg10_Expr_C_5_DIV10' => array(
                'name' => 's Avg lg10 Expr C 5 DIV10'
            ),
            'norm_counts_Avg_lg10_Expr_C_5_DIV4' => array(
                'name' => 's Avg lg10 Expr C 5 DIV4'
            ),
            'norm_counts_Avg_lg10_Expr_C_6_DIV10' => array(
                'name' => 's Avg lg10 Expr C 6 DIV10'
            ),
            'norm_counts_Avg_lg10_Expr_C_6_DIV4' => array(
                'name' => 's Avg lg10 Expr C 6 DIV4'
            ),
            'norm_counts_Avg_lg10_Expr_C_7_DIV10' => array(
                'name' => 's Avg lg10 Expr C 7 DIV10'
            ),
            'norm_counts_Avg_lg10_Expr_C_7_DIV4' => array(
                'name' => 's Avg lg10 Expr C 7 DIV4'
            ),
            'norm_counts_Avg_lg10_Expr_C_8_DIV10' => array(
                'name' => 's Avg lg10 Expr C 8 DIV10'
            ),
            'norm_counts_Avg_lg10_Expr_C_8_DIV4' => array(
                'name' => 's Avg lg10 Expr C 8 DIV4'
            ),
            'norm_counts_Avg_lg10_Expr_C_9_DIV10' => array(
                'name' => 's Avg lg10 Expr C 9 DIV10'
            ),
            'norm_counts_Avg_lg10_Expr_C_9_DIV4' => array(
                'name' => 's Avg lg10 Expr C 9 DIV4'
            )
        )
    )
//End scatterplot
);
