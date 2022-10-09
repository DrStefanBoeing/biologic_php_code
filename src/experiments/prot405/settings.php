<?php

return array(
    'lab' => array(
        'name' => 'Test DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'ref_data',
    'data_db' => array(
            'cat_table_name' => 'prot405_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'prot405_sc_rna_seq_table',
    'primary_gene_symbol' => 'hgnc_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged Expr',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Avg_lg10_Expr_C_0' => array(
            'color' => '#F8766D',
            'name' => 'Avg lg10 Expr C 0'
        ),
        'norm_counts_Avg_lg10_Expr_C_1' => array(
            'color' => '#D89000',
            'name' => 'Avg lg10 Expr C 1'
        ),
        'norm_counts_Avg_lg10_Expr_C_2' => array(
            'color' => '#A3A500',
            'name' => 'Avg lg10 Expr C 2'
        ),
        'norm_counts_Avg_lg10_Expr_C_3' => array(
            'color' => '#39B600',
            'name' => 'Avg lg10 Expr C 3'
        ),
        'norm_counts_Avg_lg10_Expr_C_4' => array(
            'color' => '#00BF7D',
            'name' => 'Avg lg10 Expr C 4'
        ),
        'norm_counts_Avg_lg10_Expr_C_5' => array(
            'color' => '#00BFC4',
            'name' => 'Avg lg10 Expr C 5'
        ),
        'norm_counts_Avg_lg10_Expr_C_6' => array(
            'color' => '#00B0F6',
            'name' => 'Avg lg10 Expr C 6'
        ),
        'norm_counts_Avg_lg10_Expr_C_7' => array(
            'color' => '#9590FF',
            'name' => 'Avg lg10 Expr C 7'
        ),
        'norm_counts_Avg_lg10_Expr_C_8' => array(
            'color' => '#E76BF3',
            'name' => 'Avg lg10 Expr C 8'
        ),
        'norm_counts_Avg_lg10_Expr_C_9' => array(
            'color' => '#FF62BC',
            'name' => 'Avg lg10 Expr C 9'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'lg10 Expr for all Samples',
        'sidelabel' => 'lg10 Expr'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Avg_log10_Expr_Sc_C_0','lg2_avg_Avg_log10_Expr_Sc_C_1','lg2_avg_Avg_log10_Expr_Sc_C_2','lg2_avg_Avg_log10_Expr_Sc_C_3','lg2_avg_Avg_log10_Expr_Sc_C_4','lg2_avg_Avg_log10_Expr_Sc_C_5','lg2_avg_Avg_log10_Expr_Sc_C_6','lg2_avg_Avg_log10_Expr_Sc_C_7','lg2_avg_Avg_log10_Expr_Sc_C_8','lg2_avg_Avg_log10_Expr_Sc_C_9'),

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
        'contrast_A_logFC_bulkRNASeq_agl298_DMSO_3d_vs_Prad_3d' => array(
            'name' => 'logFC bulkRNASeq agl298 DMSO 3d vs Prad 3d',
            'slider_min' => 0,
            'slider_max' => 0,
            'default_low' => 0,
            'default_high' => 0
        ),
        'contrast_A_logFC_bulkRNASeq_agl298_DMSO_14d_vs_Prad_14d' => array(
            'name' => 'logFC bulkRNASeq agl298 DMSO 14d vs Prad 14d',
            'slider_min' => 0,
            'slider_max' => 0,
            'default_low' => 0,
            'default_high' => 0
        ),
        'contrast_A_padj_bulkRNASeq_agl298_DMSO_3d_vs_Prad_3d' => array(
            'name' => 'padj bulkRNASeq agl298 DMSO 3d vs Prad 3d',
            'slider_min' => 0,
            'slider_max' => 0,
            'default_low' => 0,
            'default_high' => 0
        ),
        'contrast_A_padj_bulkRNASeq_agl298_DMSO_14d_vs_Prad_14d' => array(
            'name' => 'padj bulkRNASeq agl298 DMSO 14d vs Prad 14d',
            'slider_min' => 0,
            'slider_max' => 0,
            'default_low' => 0,
            'default_high' => 0
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'prot405_PCA',


    // FeatureView Parameters
    'featureViewParams' => array(
        'geneExprTb' => 'prot405_gene_expr_tb',
        'coordTb' => 'prot405_PCA',
        'geneAcTb' => 'prot405_geneID_tb',
        'defaultGene' => 'P47001',
        'default_x_axis' => 'UMAP_1',
        'default_y_axis' => 'UMAP_2',
        'splitOptions' => array('None','sampleID')
    ),

    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_X_logFC_Expressed_in_N_Percent_Cells',
        'default-y' => 'norm_counts_Avg_lg10_Expr_C_0',
        'selection' => array(
            'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
                'name' => 'logFC Expressed in N Percent Cells'
            ),
            'contrast_A_logFC_bulkRNASeq_agl298_DMSO_3d_vs_Prad_3d' => array(
                'name' => 'logFC bulkRNASeq agl298 DMSO 3d vs Prad 3d'
            ),
            'contrast_A_logFC_bulkRNASeq_agl298_DMSO_14d_vs_Prad_14d' => array(
                'name' => 'logFC bulkRNASeq agl298 DMSO 14d vs Prad 14d'
            ),
            'contrast_A_lg10p_bulkRNASeq_agl298_DMSO_3d_vs_Prad_3d' => array(
                'name' => 'lg10p bulkRNASeq agl298 DMSO 3d vs Prad 3d'
            ),
            'contrast_A_lg10p_bulkRNASeq_agl298_DMSO_14d_vs_Prad_14d' => array(
                'name' => 'lg10p bulkRNASeq agl298 DMSO 14d vs Prad 14d'
            ),
            'add_counts_Avg_log10_Expr_Proteins' => array(
                'name' => 'Avg log10 Expr Proteins'
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
            'norm_counts_Avg_lg10_Expr_C_0' => array(
                'name' => 's Avg lg10 Expr C 0'
            ),
            'norm_counts_Avg_lg10_Expr_C_1' => array(
                'name' => 's Avg lg10 Expr C 1'
            ),
            'norm_counts_Avg_lg10_Expr_C_2' => array(
                'name' => 's Avg lg10 Expr C 2'
            ),
            'norm_counts_Avg_lg10_Expr_C_3' => array(
                'name' => 's Avg lg10 Expr C 3'
            ),
            'norm_counts_Avg_lg10_Expr_C_4' => array(
                'name' => 's Avg lg10 Expr C 4'
            ),
            'norm_counts_Avg_lg10_Expr_C_5' => array(
                'name' => 's Avg lg10 Expr C 5'
            ),
            'norm_counts_Avg_lg10_Expr_C_6' => array(
                'name' => 's Avg lg10 Expr C 6'
            ),
            'norm_counts_Avg_lg10_Expr_C_7' => array(
                'name' => 's Avg lg10 Expr C 7'
            ),
            'norm_counts_Avg_lg10_Expr_C_8' => array(
                'name' => 's Avg lg10 Expr C 8'
            ),
            'norm_counts_Avg_lg10_Expr_C_9' => array(
                'name' => 's Avg lg10 Expr C 9'
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
