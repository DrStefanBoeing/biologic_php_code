<?php

return array(
    'lab' => array(
        'name' => 'Boulton DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'sbl_data',
    'data_db' => array(
            'cat_table_name' => 'RN18046_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'RN18046_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_S_Pole4NULLp53HET_1_TPM' => array(
            'color' => '#F8766D',
            'name' => 'S Pole4NULLp53HET 1 TPM'
        ),
        'norm_counts_S_Pole4NULLp53HET_2_TPM' => array(
            'color' => '#F8766D',
            'name' => 'S Pole4NULLp53HET 2 TPM'
        ),
        'norm_counts_S_Pole4NULLp53HET_3_TPM' => array(
            'color' => '#F8766D',
            'name' => 'S Pole4NULLp53HET 3 TPM'
        ),
        'norm_counts_S_Pole4NULLp53NULL_1_TPM' => array(
            'color' => '#B79F00',
            'name' => 'S Pole4NULLp53NULL 1 TPM'
        ),
        'norm_counts_S_Pole4NULLp53NULL_2_TPM' => array(
            'color' => '#B79F00',
            'name' => 'S Pole4NULLp53NULL 2 TPM'
        ),
        'norm_counts_S_Pole4NULLp53NULL_3_TPM' => array(
            'color' => '#B79F00',
            'name' => 'S Pole4NULLp53NULL 3 TPM'
        ),
        'norm_counts_S_Pole4NULLp53WT_1_TPM' => array(
            'color' => '#00BA38',
            'name' => 'S Pole4NULLp53WT 1 TPM'
        ),
        'norm_counts_S_Pole4NULLp53WT_2_TPM' => array(
            'color' => '#00BA38',
            'name' => 'S Pole4NULLp53WT 2 TPM'
        ),
        'norm_counts_S_Pole4NULLp53WT_3_TPM' => array(
            'color' => '#00BA38',
            'name' => 'S Pole4NULLp53WT 3 TPM'
        ),
        'norm_counts_S_Pole4WTp53HET_1_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'S Pole4WTp53HET 1 TPM'
        ),
        'norm_counts_S_Pole4WTp53HET_2_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'S Pole4WTp53HET 2 TPM'
        ),
        'norm_counts_S_Pole4WTp53HET_3_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'S Pole4WTp53HET 3 TPM'
        ),
        'norm_counts_S_Pole4WTp53NULL_1_TPM' => array(
            'color' => '#619CFF',
            'name' => 'S Pole4WTp53NULL 1 TPM'
        ),
        'norm_counts_S_Pole4WTp53NULL_2_TPM' => array(
            'color' => '#619CFF',
            'name' => 'S Pole4WTp53NULL 2 TPM'
        ),
        'norm_counts_S_Pole4WTp53NULL_3_TPM' => array(
            'color' => '#619CFF',
            'name' => 'S Pole4WTp53NULL 3 TPM'
        ),
        'norm_counts_S_Pole4WTp53WT_1_TPM' => array(
            'color' => '#F564E3',
            'name' => 'S Pole4WTp53WT 1 TPM'
        ),
        'norm_counts_S_Pole4WTp53WT_2_TPM' => array(
            'color' => '#F564E3',
            'name' => 'S Pole4WTp53WT 2 TPM'
        ),
        'norm_counts_S_Pole4WTp53WT_3_TPM' => array(
            'color' => '#F564E3',
            'name' => 'S Pole4WTp53WT 3 TPM'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_S_Pole4NULLp53HET_1_TPM','lg2_avg_S_Pole4NULLp53HET_2_TPM','lg2_avg_S_Pole4NULLp53HET_3_TPM','lg2_avg_S_Pole4NULLp53NULL_1_TPM','lg2_avg_S_Pole4NULLp53NULL_2_TPM','lg2_avg_S_Pole4NULLp53NULL_3_TPM','lg2_avg_S_Pole4NULLp53WT_1_TPM','lg2_avg_S_Pole4NULLp53WT_2_TPM','lg2_avg_S_Pole4NULLp53WT_3_TPM','lg2_avg_S_Pole4WTp53HET_1_TPM','lg2_avg_S_Pole4WTp53HET_2_TPM','lg2_avg_S_Pole4WTp53HET_3_TPM','lg2_avg_S_Pole4WTp53NULL_1_TPM','lg2_avg_S_Pole4WTp53NULL_2_TPM','lg2_avg_S_Pole4WTp53NULL_3_TPM','lg2_avg_S_Pole4WTp53WT_1_TPM','lg2_avg_S_Pole4WTp53WT_2_TPM','lg2_avg_S_Pole4WTp53WT_3_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_Pole4WTp53NULL_vs_Pole4WTp53WT' => array(
            'name' => 'logFC Pole4WTp53NULL vs Pole4WTp53WT',
            'slider_min' => -5,
            'slider_max' => 3,
            'default_low' => -5,
            'default_high' => 3
        ),
        'contrast_1_padj_Pole4WTp53NULL_vs_Pole4WTp53WT' => array(
            'name' => 'padj Pole4WTp53NULL vs Pole4WTp53WT',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_Pole4NULLp53WT_vs_Pole4WTp53WT' => array(
            'name' => 'logFC Pole4NULLp53WT vs Pole4WTp53WT',
            'slider_min' => -2,
            'slider_max' => 3,
            'default_low' => -2,
            'default_high' => 3
        ),
        'contrast_2_padj_Pole4NULLp53WT_vs_Pole4WTp53WT' => array(
            'name' => 'padj Pole4NULLp53WT vs Pole4WTp53WT',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_Pole4NULLp53NULL_vs_Pole4NULLp53WT' => array(
            'name' => 'logFC Pole4NULLp53NULL vs Pole4NULLp53WT',
            'slider_min' => -8,
            'slider_max' => 4,
            'default_low' => -8,
            'default_high' => 4
        ),
        'contrast_3_padj_Pole4NULLp53NULL_vs_Pole4NULLp53WT' => array(
            'name' => 'padj Pole4NULLp53NULL vs Pole4NULLp53WT',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_logFC_Pole4NULLp53HET_vs_Pole4NULLp53WT' => array(
            'name' => 'logFC Pole4NULLp53HET vs Pole4NULLp53WT',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'contrast_4_padj_Pole4NULLp53HET_vs_Pole4NULLp53WT' => array(
            'name' => 'padj Pole4NULLp53HET vs Pole4NULLp53WT',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_5_logFC_Pole4NULLp53HET_vs_Pole4WTp53HET' => array(
            'name' => 'logFC Pole4NULLp53HET vs Pole4WTp53HET',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_5_padj_Pole4NULLp53HET_vs_Pole4WTp53HET' => array(
            'name' => 'padj Pole4NULLp53HET vs Pole4WTp53HET',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_6_logFC_Pole4NULLp53HET_vs_Pole4NULLp53NULL' => array(
            'name' => 'logFC Pole4NULLp53HET vs Pole4NULLp53NULL',
            'slider_min' => -4,
            'slider_max' => 6,
            'default_low' => -4,
            'default_high' => 6
        ),
        'contrast_6_padj_Pole4NULLp53HET_vs_Pole4NULLp53NULL' => array(
            'name' => 'padj Pole4NULLp53HET vs Pole4NULLp53NULL',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_7_logFC_Pole4NULL_vs_Pole4WT' => array(
            'name' => 'logFC Pole4NULL vs Pole4WT',
            'slider_min' => -1,
            'slider_max' => 2,
            'default_low' => -1,
            'default_high' => 2
        ),
        'contrast_7_padj_Pole4NULL_vs_Pole4WT' => array(
            'name' => 'padj Pole4NULL vs Pole4WT',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_8_logFC_53NULL_vs_p53WT' => array(
            'name' => 'logFC 53NULL vs p53WT',
            'slider_min' => -7,
            'slider_max' => 5,
            'default_low' => -7,
            'default_high' => 5
        ),
        'contrast_8_padj_53NULL_vs_p53WT' => array(
            'name' => 'padj 53NULL vs p53WT',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_9_logFC_Pole4NULLp53NULL_vs_S_Pole4WTp53NULL' => array(
            'name' => 'logFC Pole4NULLp53NULL vs S Pole4WTp53NULL',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_9_padj_Pole4NULLp53NULL_vs_S_Pole4WTp53NULL' => array(
            'name' => 'padj Pole4NULLp53NULL vs S Pole4WTp53NULL',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_Cdkn1a' => array(
            'name' => 'corCoef Cdkn1a',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_Pole4' => array(
            'name' => 'corCoef Pole4',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_Trp53' => array(
            'name' => 'corCoef Trp53',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_L_lg10p_LRT_Genotype' => array(
            'name' => 'lg10p LRT Genotype',
            'slider_min' => 0,
            'slider_max' => 237,
            'default_low' => 0,
            'default_high' => 237
        ),
        'contrast_L_lg10p_LRT_Trp53_WT_HET_NULL' => array(
            'name' => 'lg10p LRT Trp53 WT HET NULL',
            'slider_min' => 0,
            'slider_max' => 15,
            'default_low' => 0,
            'default_high' => 15
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'RN18046_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_Pole4WTp53NULL_vs_Pole4WTp53WT',
        'default-y' => 'contrast_1_lg10p_Pole4WTp53NULL_vs_Pole4WTp53WT',
        'selection' => array(
            'contrast_1_logFC_Pole4WTp53NULL_vs_Pole4WTp53WT' => array(
                'name' => 'logFC Pole4WTp53NULL vs Pole4WTp53WT'
            ),
            'contrast_2_logFC_Pole4NULLp53WT_vs_Pole4WTp53WT' => array(
                'name' => 'logFC Pole4NULLp53WT vs Pole4WTp53WT'
            ),
            'contrast_3_logFC_Pole4NULLp53NULL_vs_Pole4NULLp53WT' => array(
                'name' => 'logFC Pole4NULLp53NULL vs Pole4NULLp53WT'
            ),
            'contrast_4_logFC_Pole4NULLp53HET_vs_Pole4NULLp53WT' => array(
                'name' => 'logFC Pole4NULLp53HET vs Pole4NULLp53WT'
            ),
            'contrast_5_logFC_Pole4NULLp53HET_vs_Pole4WTp53HET' => array(
                'name' => 'logFC Pole4NULLp53HET vs Pole4WTp53HET'
            ),
            'contrast_6_logFC_Pole4NULLp53HET_vs_Pole4NULLp53NULL' => array(
                'name' => 'logFC Pole4NULLp53HET vs Pole4NULLp53NULL'
            ),
            'contrast_7_logFC_Pole4NULL_vs_Pole4WT' => array(
                'name' => 'logFC Pole4NULL vs Pole4WT'
            ),
            'contrast_8_logFC_53NULL_vs_p53WT' => array(
                'name' => 'logFC 53NULL vs p53WT'
            ),
            'contrast_9_logFC_Pole4NULLp53NULL_vs_S_Pole4WTp53NULL' => array(
                'name' => 'logFC Pole4NULLp53NULL vs S Pole4WTp53NULL'
            ),
            'contrast_1_lg10p_Pole4WTp53NULL_vs_Pole4WTp53WT' => array(
                'name' => 'lg10p Pole4WTp53NULL vs Pole4WTp53WT'
            ),
            'contrast_2_lg10p_Pole4NULLp53WT_vs_Pole4WTp53WT' => array(
                'name' => 'lg10p Pole4NULLp53WT vs Pole4WTp53WT'
            ),
            'contrast_3_lg10p_Pole4NULLp53NULL_vs_Pole4NULLp53WT' => array(
                'name' => 'lg10p Pole4NULLp53NULL vs Pole4NULLp53WT'
            ),
            'contrast_4_lg10p_Pole4NULLp53HET_vs_Pole4NULLp53WT' => array(
                'name' => 'lg10p Pole4NULLp53HET vs Pole4NULLp53WT'
            ),
            'contrast_5_lg10p_Pole4NULLp53HET_vs_Pole4WTp53HET' => array(
                'name' => 'lg10p Pole4NULLp53HET vs Pole4WTp53HET'
            ),
            'contrast_6_lg10p_Pole4NULLp53HET_vs_Pole4NULLp53NULL' => array(
                'name' => 'lg10p Pole4NULLp53HET vs Pole4NULLp53NULL'
            ),
            'contrast_7_lg10p_Pole4NULL_vs_Pole4WT' => array(
                'name' => 'lg10p Pole4NULL vs Pole4WT'
            ),
            'contrast_8_lg10p_53NULL_vs_p53WT' => array(
                'name' => 'lg10p 53NULL vs p53WT'
            ),
            'contrast_9_lg10p_Pole4NULLp53NULL_vs_S_Pole4WTp53NULL' => array(
                'name' => 'lg10p Pole4NULLp53NULL vs S Pole4WTp53NULL'
            ),
            'contrast_L_lg10p_LRT_Genotype' => array(
                'name' => 'lg10p LRT Genotype'
            ),
            'contrast_L_lg10p_LRT_Trp53_WT_HET_NULL' => array(
                'name' => 'lg10p LRT Trp53 WT HET NULL'
            ),
            'add_venn_X_corCoef_Cdkn1a' => array(
                'name' => 'corCoef Cdkn1a'
            ),
            'add_venn_X_corCoef_Pole4' => array(
                'name' => 'corCoef Pole4'
            ),
            'add_venn_X_corCoef_Trp53' => array(
                'name' => 'corCoef Trp53'
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
            'contrast_1_lg2BaseMean_Pole4WTp53NULL_vs_Pole4WTp53WT' => array(
                'name' => 'lg2BaseMean Pole4WTp53NULL vs Pole4WTp53WT'
            ),
            'contrast_2_lg2BaseMean_Pole4NULLp53WT_vs_Pole4WTp53WT' => array(
                'name' => 'lg2BaseMean Pole4NULLp53WT vs Pole4WTp53WT'
            ),
            'contrast_3_lg2BaseMean_Pole4NULLp53NULL_vs_Pole4NULLp53WT' => array(
                'name' => 'lg2BaseMean Pole4NULLp53NULL vs Pole4NULLp53WT'
            ),
            'contrast_4_lg2BaseMean_Pole4NULLp53HET_vs_Pole4NULLp53WT' => array(
                'name' => 'lg2BaseMean Pole4NULLp53HET vs Pole4NULLp53WT'
            ),
            'contrast_5_lg2BaseMean_Pole4NULLp53HET_vs_Pole4WTp53HET' => array(
                'name' => 'lg2BaseMean Pole4NULLp53HET vs Pole4WTp53HET'
            ),
            'contrast_6_lg2BaseMean_Pole4NULLp53HET_vs_Pole4NULLp53NULL' => array(
                'name' => 'lg2BaseMean Pole4NULLp53HET vs Pole4NULLp53NULL'
            ),
            'contrast_7_lg2BaseMean_Pole4NULL_vs_Pole4WT' => array(
                'name' => 'lg2BaseMean Pole4NULL vs Pole4WT'
            ),
            'contrast_8_lg2BaseMean_53NULL_vs_p53WT' => array(
                'name' => 'lg2BaseMean 53NULL vs p53WT'
            ),
            'contrast_9_lg2BaseMean_Pole4NULLp53NULL_vs_S_Pole4WTp53NULL' => array(
                'name' => 'lg2BaseMean Pole4NULLp53NULL vs S Pole4WTp53NULL'
            ),
            'contrast_L_lg2BaseMean_LRT_Genotype' => array(
                'name' => 'lg2BaseMean LRT Genotype'
            ),
            'contrast_L_lg2BaseMean_LRT_Trp53_WT_HET_NULL' => array(
                'name' => 'lg2BaseMean LRT Trp53 WT HET NULL'
            )
        )
    )
//End scatterplot
);
