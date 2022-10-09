<?php

return array(
    'lab' => array(
        'name' => 'Parker DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'ppl_data',
    'data_db' => array(
            'cat_table_name' => 'RN20213_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'RN20213_rna_seq_table',
    'primary_gene_symbol' => 'hgnc_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Go6976_Parental_1_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Go6976 Parental 1 TPM'
        ),
        'norm_counts_Go6976_Parental_2_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Go6976 Parental 2 TPM'
        ),
        'norm_counts_Go6976_Parental_3_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Go6976 Parental 3 TPM'
        ),
        'norm_counts_Go6976_PKCAD463H_1_TPM' => array(
            'color' => '#CD9600',
            'name' => 'Go6976 PKCAD463H 1 TPM'
        ),
        'norm_counts_Go6976_PKCAD463H_2_TPM' => array(
            'color' => '#CD9600',
            'name' => 'Go6976 PKCAD463H 2 TPM'
        ),
        'norm_counts_Go6976_PKCAD463H_3_TPM' => array(
            'color' => '#CD9600',
            'name' => 'Go6976 PKCAD463H 3 TPM'
        ),
        'norm_counts_Go6976_PKCAD463N_1_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'Go6976 PKCAD463N 1 TPM'
        ),
        'norm_counts_Go6976_PKCAD463N_2_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'Go6976 PKCAD463N 2 TPM'
        ),
        'norm_counts_Go6976_PKCAD463N_3_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'Go6976 PKCAD463N 3 TPM'
        ),
        'norm_counts_Go6976_PKCAwt_1_TPM' => array(
            'color' => '#00BE67',
            'name' => 'Go6976 PKCAwt 1 TPM'
        ),
        'norm_counts_Go6976_PKCAwt_2_TPM' => array(
            'color' => '#00BE67',
            'name' => 'Go6976 PKCAwt 2 TPM'
        ),
        'norm_counts_Go6976_PKCAwt_3_TPM' => array(
            'color' => '#00BE67',
            'name' => 'Go6976 PKCAwt 3 TPM'
        ),
        'norm_counts_Unt_Parental_1_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'Unt Parental 1 TPM'
        ),
        'norm_counts_Unt_Parental_2_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'Unt Parental 2 TPM'
        ),
        'norm_counts_Unt_Parental_3_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'Unt Parental 3 TPM'
        ),
        'norm_counts_Unt_PKCAD463H_1_TPM' => array(
            'color' => '#00A9FF',
            'name' => 'Unt PKCAD463H 1 TPM'
        ),
        'norm_counts_Unt_PKCAD463H_2_TPM' => array(
            'color' => '#00A9FF',
            'name' => 'Unt PKCAD463H 2 TPM'
        ),
        'norm_counts_Unt_PKCAD463H_3_TPM' => array(
            'color' => '#00A9FF',
            'name' => 'Unt PKCAD463H 3 TPM'
        ),
        'norm_counts_Unt_PKCAD463N_1_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'Unt PKCAD463N 1 TPM'
        ),
        'norm_counts_Unt_PKCAD463N_2_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'Unt PKCAD463N 2 TPM'
        ),
        'norm_counts_Unt_PKCAD463N_3_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'Unt PKCAD463N 3 TPM'
        ),
        'norm_counts_Unt_PKCAwt_2_TPM' => array(
            'color' => '#FF61CC',
            'name' => 'Unt PKCAwt 2 TPM'
        ),
        'norm_counts_Unt_PKCAwt_3_TPM' => array(
            'color' => '#FF61CC',
            'name' => 'Unt PKCAwt 3 TPM'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Go6976_Parental_1_TPM','lg2_avg_Go6976_Parental_2_TPM','lg2_avg_Go6976_Parental_3_TPM','lg2_avg_Go6976_PKCAD463H_1_TPM','lg2_avg_Go6976_PKCAD463H_2_TPM','lg2_avg_Go6976_PKCAD463H_3_TPM','lg2_avg_Go6976_PKCAD463N_1_TPM','lg2_avg_Go6976_PKCAD463N_2_TPM','lg2_avg_Go6976_PKCAD463N_3_TPM','lg2_avg_Go6976_PKCAwt_1_TPM','lg2_avg_Go6976_PKCAwt_2_TPM','lg2_avg_Go6976_PKCAwt_3_TPM','lg2_avg_Unt_Parental_1_TPM','lg2_avg_Unt_Parental_2_TPM','lg2_avg_Unt_Parental_3_TPM','lg2_avg_Unt_PKCAD463H_1_TPM','lg2_avg_Unt_PKCAD463H_2_TPM','lg2_avg_Unt_PKCAD463H_3_TPM','lg2_avg_Unt_PKCAD463N_1_TPM','lg2_avg_Unt_PKCAD463N_2_TPM','lg2_avg_Unt_PKCAD463N_3_TPM','lg2_avg_Unt_PKCAwt_2_TPM','lg2_avg_Unt_PKCAwt_3_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_Unt_PKCAD463H_vs_Unt_PKCAwt' => array(
            'name' => 'logFC Unt PKCAD463H vs Unt PKCAwt',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_1_padj_Unt_PKCAD463H_vs_Unt_PKCAwt' => array(
            'name' => 'padj Unt PKCAD463H vs Unt PKCAwt',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_Go6976_PKCAD463H_vs_Go6976_PKCAwt' => array(
            'name' => 'logFC Go6976 PKCAD463H vs Go6976 PKCAwt',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_2_padj_Go6976_PKCAD463H_vs_Go6976_PKCAwt' => array(
            'name' => 'padj Go6976 PKCAD463H vs Go6976 PKCAwt',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_Unt_PKCAD463N_vs_Unt_PKCAwt' => array(
            'name' => 'logFC Unt PKCAD463N vs Unt PKCAwt',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_3_padj_Unt_PKCAD463N_vs_Unt_PKCAwt' => array(
            'name' => 'padj Unt PKCAD463N vs Unt PKCAwt',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_logFC_Go6976_PKCAD463N_vs_Go6976_PKCAwt' => array(
            'name' => 'logFC Go6976 PKCAD463N vs Go6976 PKCAwt',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_4_padj_Go6976_PKCAD463N_vs_Go6976_PKCAwt' => array(
            'name' => 'padj Go6976 PKCAD463N vs Go6976 PKCAwt',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_5_logFC_Unt_PKCAD463H_vs_Unt_PKCAD463N' => array(
            'name' => 'logFC Unt PKCAD463H vs Unt PKCAD463N',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_5_padj_Unt_PKCAD463H_vs_Unt_PKCAD463N' => array(
            'name' => 'padj Unt PKCAD463H vs Unt PKCAD463N',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_6_logFC_Go6976_PKCAD463H_vs_Go6976_PKCAD463N' => array(
            'name' => 'logFC Go6976 PKCAD463H vs Go6976 PKCAD463N',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_6_padj_Go6976_PKCAD463H_vs_Go6976_PKCAD463N' => array(
            'name' => 'padj Go6976 PKCAD463H vs Go6976 PKCAD463N',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_7_logFC_Go6976_Parental_vs_Unt_Parental' => array(
            'name' => 'logFC Go6976 Parental vs Unt Parental',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_7_padj_Go6976_Parental_vs_Unt_Parental' => array(
            'name' => 'padj Go6976 Parental vs Unt Parental',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_8_logFC_Unt_PKCAwt_vs_Unt_Parental' => array(
            'name' => 'logFC Unt PKCAwt vs Unt Parental',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_8_padj_Unt_PKCAwt_vs_Unt_Parental' => array(
            'name' => 'padj Unt PKCAwt vs Unt Parental',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_PRKCA' => array(
            'name' => 'corCoef PRKCA',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_L_lg10p_LRT_Treatment' => array(
            'name' => 'lg10p LRT Treatment',
            'slider_min' => 0,
            'slider_max' => 3,
            'default_low' => 0,
            'default_high' => 3
        ),
        'contrast_L_lg10p_LRT_Genotype' => array(
            'name' => 'lg10p LRT Genotype',
            'slider_min' => 0,
            'slider_max' => 252,
            'default_low' => 0,
            'default_high' => 252
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'RN20213_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_Unt_PKCAD463H_vs_Unt_PKCAwt',
        'default-y' => 'contrast_1_lg10p_Unt_PKCAD463H_vs_Unt_PKCAwt',
        'selection' => array(
            'contrast_1_logFC_Unt_PKCAD463H_vs_Unt_PKCAwt' => array(
                'name' => 'logFC Unt PKCAD463H vs Unt PKCAwt'
            ),
            'contrast_2_logFC_Go6976_PKCAD463H_vs_Go6976_PKCAwt' => array(
                'name' => 'logFC Go6976 PKCAD463H vs Go6976 PKCAwt'
            ),
            'contrast_3_logFC_Unt_PKCAD463N_vs_Unt_PKCAwt' => array(
                'name' => 'logFC Unt PKCAD463N vs Unt PKCAwt'
            ),
            'contrast_4_logFC_Go6976_PKCAD463N_vs_Go6976_PKCAwt' => array(
                'name' => 'logFC Go6976 PKCAD463N vs Go6976 PKCAwt'
            ),
            'contrast_5_logFC_Unt_PKCAD463H_vs_Unt_PKCAD463N' => array(
                'name' => 'logFC Unt PKCAD463H vs Unt PKCAD463N'
            ),
            'contrast_6_logFC_Go6976_PKCAD463H_vs_Go6976_PKCAD463N' => array(
                'name' => 'logFC Go6976 PKCAD463H vs Go6976 PKCAD463N'
            ),
            'contrast_7_logFC_Go6976_Parental_vs_Unt_Parental' => array(
                'name' => 'logFC Go6976 Parental vs Unt Parental'
            ),
            'contrast_8_logFC_Unt_PKCAwt_vs_Unt_Parental' => array(
                'name' => 'logFC Unt PKCAwt vs Unt Parental'
            ),
            'contrast_1_lg10p_Unt_PKCAD463H_vs_Unt_PKCAwt' => array(
                'name' => 'lg10p Unt PKCAD463H vs Unt PKCAwt'
            ),
            'contrast_2_lg10p_Go6976_PKCAD463H_vs_Go6976_PKCAwt' => array(
                'name' => 'lg10p Go6976 PKCAD463H vs Go6976 PKCAwt'
            ),
            'contrast_3_lg10p_Unt_PKCAD463N_vs_Unt_PKCAwt' => array(
                'name' => 'lg10p Unt PKCAD463N vs Unt PKCAwt'
            ),
            'contrast_4_lg10p_Go6976_PKCAD463N_vs_Go6976_PKCAwt' => array(
                'name' => 'lg10p Go6976 PKCAD463N vs Go6976 PKCAwt'
            ),
            'contrast_5_lg10p_Unt_PKCAD463H_vs_Unt_PKCAD463N' => array(
                'name' => 'lg10p Unt PKCAD463H vs Unt PKCAD463N'
            ),
            'contrast_6_lg10p_Go6976_PKCAD463H_vs_Go6976_PKCAD463N' => array(
                'name' => 'lg10p Go6976 PKCAD463H vs Go6976 PKCAD463N'
            ),
            'contrast_7_lg10p_Go6976_Parental_vs_Unt_Parental' => array(
                'name' => 'lg10p Go6976 Parental vs Unt Parental'
            ),
            'contrast_8_lg10p_Unt_PKCAwt_vs_Unt_Parental' => array(
                'name' => 'lg10p Unt PKCAwt vs Unt Parental'
            ),
            'contrast_L_lg10p_LRT_Treatment' => array(
                'name' => 'lg10p LRT Treatment'
            ),
            'contrast_L_lg10p_LRT_Genotype' => array(
                'name' => 'lg10p LRT Genotype'
            ),
            'add_venn_X_corCoef_PRKCA' => array(
                'name' => 'corCoef PRKCA'
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
            'contrast_1_lg2BaseMean_Unt_PKCAD463H_vs_Unt_PKCAwt' => array(
                'name' => 'lg2BaseMean Unt PKCAD463H vs Unt PKCAwt'
            ),
            'contrast_2_lg2BaseMean_Go6976_PKCAD463H_vs_Go6976_PKCAwt' => array(
                'name' => 'lg2BaseMean Go6976 PKCAD463H vs Go6976 PKCAwt'
            ),
            'contrast_3_lg2BaseMean_Unt_PKCAD463N_vs_Unt_PKCAwt' => array(
                'name' => 'lg2BaseMean Unt PKCAD463N vs Unt PKCAwt'
            ),
            'contrast_4_lg2BaseMean_Go6976_PKCAD463N_vs_Go6976_PKCAwt' => array(
                'name' => 'lg2BaseMean Go6976 PKCAD463N vs Go6976 PKCAwt'
            ),
            'contrast_5_lg2BaseMean_Unt_PKCAD463H_vs_Unt_PKCAD463N' => array(
                'name' => 'lg2BaseMean Unt PKCAD463H vs Unt PKCAD463N'
            ),
            'contrast_6_lg2BaseMean_Go6976_PKCAD463H_vs_Go6976_PKCAD463N' => array(
                'name' => 'lg2BaseMean Go6976 PKCAD463H vs Go6976 PKCAD463N'
            ),
            'contrast_7_lg2BaseMean_Go6976_Parental_vs_Unt_Parental' => array(
                'name' => 'lg2BaseMean Go6976 Parental vs Unt Parental'
            ),
            'contrast_8_lg2BaseMean_Unt_PKCAwt_vs_Unt_Parental' => array(
                'name' => 'lg2BaseMean Unt PKCAwt vs Unt Parental'
            ),
            'contrast_L_lg2BaseMean_LRT_Treatment' => array(
                'name' => 'lg2BaseMean LRT Treatment'
            ),
            'contrast_L_lg2BaseMean_LRT_Genotype' => array(
                'name' => 'lg2BaseMean LRT Genotype'
            )
        )
    )
//End scatterplot
);
