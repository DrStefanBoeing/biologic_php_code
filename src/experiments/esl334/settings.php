<?php

return array(
    'lab' => array(
        'name' => 'Sahai DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'esl_data',
    'data_db' => array(
            'cat_table_name' => 'esl334_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'p334_rna_seq_table',
    'primary_gene_symbol' => 'hgnc_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_S_1255_1_TPM' => array(
            'color' => '#F8766D',
            'name' => 'S 1255 1 TPM'
        ),
        'norm_counts_S_1255_2_TPM' => array(
            'color' => '#F8766D',
            'name' => 'S 1255 2 TPM'
        ),
        'norm_counts_S_1501_1_TPM' => array(
            'color' => '#EA8331',
            'name' => 'S 1501 1 TPM'
        ),
        'norm_counts_S_1501_2_TPM' => array(
            'color' => '#EA8331',
            'name' => 'S 1501 2 TPM'
        ),
        'norm_counts_S_1764_1_TPM' => array(
            'color' => '#D89000',
            'name' => 'S 1764 1 TPM'
        ),
        'norm_counts_S_1764_2_TPM' => array(
            'color' => '#D89000',
            'name' => 'S 1764 2 TPM'
        ),
        'norm_counts_S_1902_1_TPM' => array(
            'color' => '#C09B00',
            'name' => 'S 1902 1 TPM'
        ),
        'norm_counts_S_1902_2_TPM' => array(
            'color' => '#C09B00',
            'name' => 'S 1902 2 TPM'
        ),
        'norm_counts_S_alCerCAF_1_TPM' => array(
            'color' => '#A3A500',
            'name' => 'S alCerCAF 1 TPM'
        ),
        'norm_counts_S_alCerCAF_2_TPM' => array(
            'color' => '#A3A500',
            'name' => 'S alCerCAF 2 TPM'
        ),
        'norm_counts_S_alCerCAF_3_TPM' => array(
            'color' => '#A3A500',
            'name' => 'S alCerCAF 3 TPM'
        ),
        'norm_counts_S_alOCAF1_1_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'S alOCAF1 1 TPM'
        ),
        'norm_counts_S_alOCAF1_2_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'S alOCAF1 2 TPM'
        ),
        'norm_counts_S_alOCAF1_3_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'S alOCAF1 3 TPM'
        ),
        'norm_counts_S_alVCAF2B_1_TPM' => array(
            'color' => '#39B600',
            'name' => 'S alVCAF2B 1 TPM'
        ),
        'norm_counts_S_alVCAF2B_2_TPM' => array(
            'color' => '#39B600',
            'name' => 'S alVCAF2B 2 TPM'
        ),
        'norm_counts_S_alVCAF2B_3_TPM' => array(
            'color' => '#39B600',
            'name' => 'S alVCAF2B 3 TPM'
        ),
        'norm_counts_S_alVCAF8_1_TPM' => array(
            'color' => '#00BB4E',
            'name' => 'S alVCAF8 1 TPM'
        ),
        'norm_counts_S_alVCAF8_2_TPM' => array(
            'color' => '#00BB4E',
            'name' => 'S alVCAF8 2 TPM'
        ),
        'norm_counts_S_alVCAF8_3_TPM' => array(
            'color' => '#00BB4E',
            'name' => 'S alVCAF8 3 TPM'
        ),
        'norm_counts_S_HNOF6_1_TPM' => array(
            'color' => '#00BF7D',
            'name' => 'S HNOF6 1 TPM'
        ),
        'norm_counts_S_HNOF6_2_TPM' => array(
            'color' => '#00BF7D',
            'name' => 'S HNOF6 2 TPM'
        ),
        'norm_counts_S_ND4_1_TPM' => array(
            'color' => '#00C1A3',
            'name' => 'S ND4 1 TPM'
        ),
        'norm_counts_S_ND4_2_TPM' => array(
            'color' => '#00C1A3',
            'name' => 'S ND4 2 TPM'
        ),
        'norm_counts_S_ND5_1_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'S ND5 1 TPM'
        ),
        'norm_counts_S_ND5_2_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'S ND5 2 TPM'
        ),
        'norm_counts_S_NonAl1901_1_TPM' => array(
            'color' => '#00BAE0',
            'name' => 'S NonAl1901 1 TPM'
        ),
        'norm_counts_S_NonAl1901_2_TPM' => array(
            'color' => '#00BAE0',
            'name' => 'S NonAl1901 2 TPM'
        ),
        'norm_counts_S_NonAlMAF2_1_TPM' => array(
            'color' => '#00B0F6',
            'name' => 'S NonAlMAF2 1 TPM'
        ),
        'norm_counts_S_NonAlMAF2_2_TPM' => array(
            'color' => '#00B0F6',
            'name' => 'S NonAlMAF2 2 TPM'
        ),
        'norm_counts_S_OCAF2_1_TPM' => array(
            'color' => '#35A2FF',
            'name' => 'S OCAF2 1 TPM'
        ),
        'norm_counts_S_OCAF2_2_TPM' => array(
            'color' => '#35A2FF',
            'name' => 'S OCAF2 2 TPM'
        ),
        'norm_counts_S_OSMF11_1_TPM' => array(
            'color' => '#9590FF',
            'name' => 'S OSMF11 1 TPM'
        ),
        'norm_counts_S_OSMF11_2_TPM' => array(
            'color' => '#9590FF',
            'name' => 'S OSMF11 2 TPM'
        ),
        'norm_counts_S_OSMF8_1_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'S OSMF8 1 TPM'
        ),
        'norm_counts_S_OSMF8_2_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'S OSMF8 2 TPM'
        ),
        'norm_counts_S_P13T_2_TPM' => array(
            'color' => '#E76BF3',
            'name' => 'S P13T 2 TPM'
        ),
        'norm_counts_S_P20T_1_TPM' => array(
            'color' => '#FA62DB',
            'name' => 'S P20T 1 TPM'
        ),
        'norm_counts_S_P20T_2_TPM' => array(
            'color' => '#FA62DB',
            'name' => 'S P20T 2 TPM'
        ),
        'norm_counts_S_P22T_1_TPM' => array(
            'color' => '#FF62BC',
            'name' => 'S P22T 1 TPM'
        ),
        'norm_counts_S_P22T_2_TPM' => array(
            'color' => '#FF62BC',
            'name' => 'S P22T 2 TPM'
        ),
        'norm_counts_S_P27T_1_TPM' => array(
            'color' => '#FF6A98',
            'name' => 'S P27T 1 TPM'
        ),
        'norm_counts_S_P27T_2_TPM' => array(
            'color' => '#FF6A98',
            'name' => 'S P27T 2 TPM'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_S_1255_1_TPM','lg2_avg_S_1255_2_TPM','lg2_avg_S_1501_1_TPM','lg2_avg_S_1501_2_TPM','lg2_avg_S_1764_1_TPM','lg2_avg_S_1764_2_TPM','lg2_avg_S_1902_1_TPM','lg2_avg_S_1902_2_TPM','lg2_avg_S_alCerCAF_1_TPM','lg2_avg_S_alCerCAF_2_TPM','lg2_avg_S_alCerCAF_3_TPM','lg2_avg_S_alOCAF1_1_TPM','lg2_avg_S_alOCAF1_2_TPM','lg2_avg_S_alOCAF1_3_TPM','lg2_avg_S_alVCAF2B_1_TPM','lg2_avg_S_alVCAF2B_2_TPM','lg2_avg_S_alVCAF2B_3_TPM','lg2_avg_S_alVCAF8_1_TPM','lg2_avg_S_alVCAF8_2_TPM','lg2_avg_S_alVCAF8_3_TPM','lg2_avg_S_HNOF6_1_TPM','lg2_avg_S_HNOF6_2_TPM','lg2_avg_S_ND4_1_TPM','lg2_avg_S_ND4_2_TPM','lg2_avg_S_ND5_1_TPM','lg2_avg_S_ND5_2_TPM','lg2_avg_S_NonAl1901_1_TPM','lg2_avg_S_NonAl1901_2_TPM','lg2_avg_S_NonAlMAF2_1_TPM','lg2_avg_S_NonAlMAF2_2_TPM','lg2_avg_S_OCAF2_1_TPM','lg2_avg_S_OCAF2_2_TPM','lg2_avg_S_OSMF11_1_TPM','lg2_avg_S_OSMF11_2_TPM','lg2_avg_S_OSMF8_1_TPM','lg2_avg_S_OSMF8_2_TPM','lg2_avg_S_P13T_2_TPM','lg2_avg_S_P20T_1_TPM','lg2_avg_S_P20T_2_TPM','lg2_avg_S_P22T_1_TPM','lg2_avg_S_P22T_2_TPM','lg2_avg_S_P27T_1_TPM','lg2_avg_S_P27T_2_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_aligned_vs_non_aligned' => array(
            'name' => 'logFC aligned vs non aligned',
            'slider_min' => -9,
            'slider_max' => 7,
            'default_low' => -9,
            'default_high' => 7
        ),
        'contrast_1_padj_aligned_vs_non_aligned' => array(
            'name' => 'padj aligned vs non aligned',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_OSMHNO_vs_OCAF' => array(
            'name' => 'logFC OSMHNO vs OCAF',
            'slider_min' => -12,
            'slider_max' => 11,
            'default_low' => -12,
            'default_high' => 11
        ),
        'contrast_2_padj_OSMHNO_vs_OCAF' => array(
            'name' => 'padj OSMHNO vs OCAF',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_S1764S1501_vs_NonAl1901' => array(
            'name' => 'logFC S1764S1501 vs NonAl1901',
            'slider_min' => -11,
            'slider_max' => 10,
            'default_low' => -11,
            'default_high' => 10
        ),
        'contrast_3_padj_S1764S1501_vs_NonAl1901' => array(
            'name' => 'padj S1764S1501 vs NonAl1901',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_L_padj_LRT_Sample_Group' => array(
            'name' => 'padj LRT Sample Group',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'p334_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_aligned_vs_non_aligned',
        'default-y' => 'contrast_1_lg10p_aligned_vs_non_aligned',
        'selection' => array(
            'contrast_1_logFC_aligned_vs_non_aligned' => array(
                'name' => 'logFC aligned vs non aligned'
            ),
            'contrast_2_logFC_OSMHNO_vs_OCAF' => array(
                'name' => 'logFC OSMHNO vs OCAF'
            ),
            'contrast_3_logFC_S1764S1501_vs_NonAl1901' => array(
                'name' => 'logFC S1764S1501 vs NonAl1901'
            ),
            'contrast_P_PCA_estimatePCA1' => array(
                'name' => 'PCA estimatePCA1'
            ),
            'contrast_P_PCA_estimatePCA2' => array(
                'name' => 'PCA estimatePCA2'
            ),
            'contrast_P_PCA_estimatePCA3' => array(
                'name' => 'PCA estimatePCA3'
            ),
            'contrast_P_PCA_estimatePCA4' => array(
                'name' => 'PCA estimatePCA4'
            ),
            'contrast_P_PCA_estimatePCA5' => array(
                'name' => 'PCA estimatePCA5'
            ),
            'contrast_1_lg10p_aligned_vs_non_aligned' => array(
                'name' => 'lg10p aligned vs non aligned'
            ),
            'contrast_2_lg10p_OSMHNO_vs_OCAF' => array(
                'name' => 'lg10p OSMHNO vs OCAF'
            ),
            'contrast_3_lg10p_S1764S1501_vs_NonAl1901' => array(
                'name' => 'lg10p S1764S1501 vs NonAl1901'
            ),
            'contrast_L_lg10p_LRT_Sample_Group' => array(
                'name' => 'lg10p LRT Sample Group'
            ),
            'contrast_P_lg10p_PCA1' => array(
                'name' => 'lg10p PCA1'
            ),
            'contrast_P_lg10p_PCA2' => array(
                'name' => 'lg10p PCA2'
            ),
            'contrast_P_lg10p_PCA3' => array(
                'name' => 'lg10p PCA3'
            ),
            'contrast_P_lg10p_PCA4' => array(
                'name' => 'lg10p PCA4'
            ),
            'contrast_P_lg10p_PCA5' => array(
                'name' => 'lg10p PCA5'
            ),
            'contrast_1_lg2BaseMean_aligned_vs_non_aligned' => array(
                'name' => 'lg2BaseMean aligned vs non aligned'
            ),
            'contrast_2_lg2BaseMean_OSMHNO_vs_OCAF' => array(
                'name' => 'lg2BaseMean OSMHNO vs OCAF'
            ),
            'contrast_3_lg2BaseMean_S1764S1501_vs_NonAl1901' => array(
                'name' => 'lg2BaseMean S1764S1501 vs NonAl1901'
            ),
            'contrast_L_lg2BaseMean_LRT_Sample_Group' => array(
                'name' => 'lg2BaseMean LRT Sample Group'
            )
        )
    )
//End scatterplot
);
