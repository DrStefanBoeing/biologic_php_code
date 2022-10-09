<?php

return array(
    'lab' => array(
        'name' => 'Swanton DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'csl_data',
    'data_db' => array(
            'cat_table_name' => 'RN21019_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'RN21019_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_A_WT_2044_TPM' => array(
            'color' => '#F8766D',
            'name' => 'A WT 2044 TPM'
        ),
        'norm_counts_A_WT_2048_TPM' => array(
            'color' => '#F8766D',
            'name' => 'A WT 2048 TPM'
        ),
        'norm_counts_A_WT_2049_TPM' => array(
            'color' => '#F8766D',
            'name' => 'A WT 2049 TPM'
        ),
        'norm_counts_A_WT_2061_TPM' => array(
            'color' => '#F8766D',
            'name' => 'A WT 2061 TPM'
        ),
        'norm_counts_A_WT_2063_TPM' => array(
            'color' => '#F8766D',
            'name' => 'A WT 2063 TPM'
        ),
        'norm_counts_A_Zfp516_2042_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'A Zfp516 2042 TPM'
        ),
        'norm_counts_A_Zfp516_2043_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'A Zfp516 2043 TPM'
        ),
        'norm_counts_A_Zfp516_2045_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'A Zfp516 2045 TPM'
        ),
        'norm_counts_A_Zfp516_2066_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'A Zfp516 2066 TPM'
        ),
        'norm_counts_A_Zfp516_2067_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'A Zfp516 2067 TPM'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_A_WT_2044_TPM','lg2_avg_A_WT_2048_TPM','lg2_avg_A_WT_2049_TPM','lg2_avg_A_WT_2061_TPM','lg2_avg_A_WT_2063_TPM','lg2_avg_A_Zfp516_2042_TPM','lg2_avg_A_Zfp516_2043_TPM','lg2_avg_A_Zfp516_2045_TPM','lg2_avg_A_Zfp516_2066_TPM','lg2_avg_A_Zfp516_2067_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_Zfp516_vs_WT' => array(
            'name' => 'logFC Zfp516 vs WT',
            'slider_min' => -1,
            'slider_max' => 3,
            'default_low' => -1,
            'default_high' => 3
        ),
        'contrast_1_padj_Zfp516_vs_WT' => array(
            'name' => 'padj Zfp516 vs WT',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_A_logFC_embryo_csl356_M_Zfp516NULL_vs_M_WT' => array(
            'name' => 'logFC embryo csl356 M Zfp516NULL vs M WT',
            'slider_min' => -1,
            'slider_max' => 2,
            'default_low' => -1,
            'default_high' => 2
        ),
        'contrast_A_padj_embryo_csl356_M_Zfp516NULL_vs_M_WT' => array(
            'name' => 'padj embryo csl356 M Zfp516NULL vs M WT',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_B_logFC_unbalanced_csl325_M_Zfp516NULL_vs_M_WT' => array(
            'name' => 'logFC unbalanced csl325 M Zfp516NULL vs M WT',
            'slider_min' => -1,
            'slider_max' => 2,
            'default_low' => -1,
            'default_high' => 2
        ),
        'contrast_B_padj_unbalanced_csl325_M_Zfp516NULL_vs_M_WT' => array(
            'name' => 'padj unbalanced csl325 M Zfp516NULL vs M WT',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_1_lg2BaseMean_Zfp516_vs_WT' => array(
            'name' => 'lg2BaseMean Zfp516 vs WT',
            'slider_min' => 0,
            'slider_max' => 19,
            'default_low' => 0,
            'default_high' => 19
        ),
        'contrast_1_lg2BaseMean_M_Zfp516NULL_vs_M_WT' => array(
            'name' => 'lg2BaseMean M Zfp516NULL vs M WT',
            'slider_min' => 0,
            'slider_max' => 18,
            'default_low' => 0,
            'default_high' => 18
        ),
        'contrast_1_lg2BaseMean' => array(
            'name' => 'lg2BaseMean',
            'slider_min' => 0,
            'slider_max' => 18,
            'default_low' => 0,
            'default_high' => 18
        ),
        'add_venn_X_corCoef_Uty' => array(
            'name' => 'corCoef Uty',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_Xist' => array(
            'name' => 'corCoef Xist',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_Zfp516' => array(
            'name' => 'corCoef Zfp516',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_L_lg10p_LRT_Genotype' => array(
            'name' => 'lg10p LRT Genotype',
            'slider_min' => 0,
            'slider_max' => 197,
            'default_low' => 0,
            'default_high' => 197
        ),
        'contrast_L_lg10p_LRT_CSX' => array(
            'name' => 'lg10p LRT CSX',
            'slider_min' => 0,
            'slider_max' => 12,
            'default_low' => 0,
            'default_high' => 12
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'RN21019_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_Zfp516_vs_WT',
        'default-y' => 'contrast_1_lg10p_Zfp516_vs_WT',
        'selection' => array(
            'contrast_1_logFC_Zfp516_vs_WT' => array(
                'name' => 'logFC Zfp516 vs WT'
            ),
            'contrast_A_logFC_embryo_csl356_M_Zfp516NULL_vs_M_WT' => array(
                'name' => 'logFC embryo csl356 M Zfp516NULL vs M WT'
            ),
            'contrast_B_logFC_unbalanced_csl325_M_Zfp516NULL_vs_M_WT' => array(
                'name' => 'logFC unbalanced csl325 M Zfp516NULL vs M WT'
            ),
            'contrast_1_lg10p_Zfp516_vs_WT' => array(
                'name' => 'lg10p Zfp516 vs WT'
            ),
            'contrast_L_lg10p_LRT_Genotype' => array(
                'name' => 'lg10p LRT Genotype'
            ),
            'contrast_L_lg10p_LRT_CSX' => array(
                'name' => 'lg10p LRT CSX'
            ),
            'contrast_A_lg10p_embryo_csl356_M_Zfp516NULL_vs_M_WT' => array(
                'name' => 'lg10p embryo csl356 M Zfp516NULL vs M WT'
            ),
            'contrast_B_lg10p_unbalanced_csl325_M_Zfp516NULL_vs_M_WT' => array(
                'name' => 'lg10p unbalanced csl325 M Zfp516NULL vs M WT'
            ),
            'add_venn_X_corCoef_Uty' => array(
                'name' => 'corCoef Uty'
            ),
            'add_venn_X_corCoef_Xist' => array(
                'name' => 'corCoef Xist'
            ),
            'add_venn_X_corCoef_Zfp516' => array(
                'name' => 'corCoef Zfp516'
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
            'contrast_1_lg2BaseMean_Zfp516_vs_WT' => array(
                'name' => 'lg2BaseMean Zfp516 vs WT'
            ),
            'contrast_L_lg2BaseMean_LRT_Genotype' => array(
                'name' => 'lg2BaseMean LRT Genotype'
            ),
            'contrast_L_lg2BaseMean_LRT_CSX' => array(
                'name' => 'lg2BaseMean LRT CSX'
            ),
            'contrast_1_lg2BaseMean_M_Zfp516NULL_vs_M_WT' => array(
                'name' => 'lg2BaseMean M Zfp516NULL vs M WT'
            ),
            'contrast_1_lg2BaseMean_Zfp516_vs_WT' => array(
                'name' => 'lg2BaseMean Zfp516 vs WT'
            ),
            'contrast_1_lg2BaseMean_M_Zfp516NULL_vs_M_WT' => array(
                'name' => 'lg2BaseMean M Zfp516NULL vs M WT'
            ),
            'contrast_1_lg2BaseMean' => array(
                'name' => 'lg2BaseMean'
            )
        )
    )
//End scatterplot
);
