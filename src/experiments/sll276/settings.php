<?php

return array(
    'lab' => array(
        'name' => 'Pachnis DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'sll_data',
    'data_db' => array(
            'cat_table_name' => 'sll276_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'sll276_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_CARD14WT_0hr_1_TPM' => array(
            'color' => 'NA',
            'name' => 'CARD14WT 0hr 1 TPM'
        ),
        'norm_counts_CARD14WT_0hr_2_TPM' => array(
            'color' => 'NA',
            'name' => 'CARD14WT 0hr 2 TPM'
        ),
        'norm_counts_CARD14WT_0hr_3_TPM' => array(
            'color' => 'NA',
            'name' => 'CARD14WT 0hr 3 TPM'
        ),
        'norm_counts_CARD14WT_3hr_1_TPM' => array(
            'color' => 'NA',
            'name' => 'CARD14WT 3hr 1 TPM'
        ),
        'norm_counts_CARD14WT_3hr_2_TPM' => array(
            'color' => 'NA',
            'name' => 'CARD14WT 3hr 2 TPM'
        ),
        'norm_counts_CARD14WT_3hr_3_TPM' => array(
            'color' => 'NA',
            'name' => 'CARD14WT 3hr 3 TPM'
        ),
        'norm_counts_CARD14WT_6hr_1_TPM' => array(
            'color' => 'NA',
            'name' => 'CARD14WT 6hr 1 TPM'
        ),
        'norm_counts_CARD14WT_6hr_2_TPM' => array(
            'color' => 'NA',
            'name' => 'CARD14WT 6hr 2 TPM'
        ),
        'norm_counts_CARD14WT_6hr_3_TPM' => array(
            'color' => 'NA',
            'name' => 'CARD14WT 6hr 3 TPM'
        ),
        'norm_counts_CARD14WT_9hr_1_TPM' => array(
            'color' => 'NA',
            'name' => 'CARD14WT 9hr 1 TPM'
        ),
        'norm_counts_CARD14WT_9hr_2_TPM' => array(
            'color' => 'NA',
            'name' => 'CARD14WT 9hr 2 TPM'
        ),
        'norm_counts_CARD14WT_9hr_3_TPM' => array(
            'color' => 'NA',
            'name' => 'CARD14WT 9hr 3 TPM'
        ),
        'norm_counts_CARD14E138A_0hr_1_TPM' => array(
            'color' => 'NA',
            'name' => 'CARD14E138A 0hr 1 TPM'
        ),
        'norm_counts_CARD14E138A_0hr_2_TPM' => array(
            'color' => 'NA',
            'name' => 'CARD14E138A 0hr 2 TPM'
        ),
        'norm_counts_CARD14E138A_0hr_3_TPM' => array(
            'color' => 'NA',
            'name' => 'CARD14E138A 0hr 3 TPM'
        ),
        'norm_counts_CARD14E138A_3hr_1_TPM' => array(
            'color' => 'NA',
            'name' => 'CARD14E138A 3hr 1 TPM'
        ),
        'norm_counts_CARD14E138A_3hr_2_TPM' => array(
            'color' => 'NA',
            'name' => 'CARD14E138A 3hr 2 TPM'
        ),
        'norm_counts_CARD14E138A_3hr_3_TPM' => array(
            'color' => 'NA',
            'name' => 'CARD14E138A 3hr 3 TPM'
        ),
        'norm_counts_CARD14E138A_6hr_1_TPM' => array(
            'color' => 'NA',
            'name' => 'CARD14E138A 6hr 1 TPM'
        ),
        'norm_counts_CARD14E138A_6hr_2_TPM' => array(
            'color' => 'NA',
            'name' => 'CARD14E138A 6hr 2 TPM'
        ),
        'norm_counts_CARD14E138A_6hr_3_TPM' => array(
            'color' => 'NA',
            'name' => 'CARD14E138A 6hr 3 TPM'
        ),
        'norm_counts_CARD14E138A_9hr_1_TPM' => array(
            'color' => 'NA',
            'name' => 'CARD14E138A 9hr 1 TPM'
        ),
        'norm_counts_CARD14E138A_9hr_2_TPM' => array(
            'color' => 'NA',
            'name' => 'CARD14E138A 9hr 2 TPM'
        ),
        'norm_counts_CARD14E138A_9hr_3_TPM' => array(
            'color' => 'NA',
            'name' => 'CARD14E138A 9hr 3 TPM'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Skin_WT_6_TPM','lg2_avg_Skin_WT_2_TPM','lg2_avg_Skin_WT_3_TPM','lg2_avg_Skin_WT_1_TPM','lg2_avg_Skin_WT_4_TPM','lg2_avg_Skin_WT_5_TPM','lg2_avg_Skin_Card14KI_1_TPM','lg2_avg_Skin_Card14KI_3_TPM','lg2_avg_Skin_Card14KI_2_TPM','lg2_avg_Skin_Card14KI_4_TPM','lg2_avg_Skin_Card14KI_5_TPM','lg2_avg_Skin_Card14KI_6_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_Skin_Card14KI_vs_Skin_WT' => array(
            'name' => 'logFC Skin Card14KI vs Skin WT',
            'slider_min' => -6,
            'slider_max' => 10,
            'default_low' => -6,
            'default_high' => 10
        ),
        'contrast_1_padj_Skin_Card14KI_vs_Skin_WT' => array(
            'name' => 'padj Skin Card14KI vs Skin WT',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_A_logFC_sll378_AD_lesional_vs_CTRL_healthy' => array(
            'name' => 'logFC sll378 AD lesional vs CTRL healthy',
            'slider_min' => -4,
            'slider_max' => 6,
            'default_low' => -4,
            'default_high' => 6
        ),
        'contrast_A_padj_sll378_AD_lesional_vs_CTRL_healthy' => array(
            'name' => 'padj sll378 AD lesional vs CTRL healthy',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_A_logFC_sll378_AD_nonlesional_vs_CTRL_healthy' => array(
            'name' => 'logFC sll378 AD nonlesional vs CTRL healthy',
            'slider_min' => -1,
            'slider_max' => 2,
            'default_low' => -1,
            'default_high' => 2
        ),
        'contrast_A_padj_sll378_AD_nonlesional_vs_CTRL_healthy' => array(
            'name' => 'padj sll378 AD nonlesional vs CTRL healthy',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_A_logFC_sll378_AD_chronic_vs_CTRL_healthy' => array(
            'name' => 'logFC sll378 AD chronic vs CTRL healthy',
            'slider_min' => -6,
            'slider_max' => 7,
            'default_low' => -6,
            'default_high' => 7
        ),
        'contrast_A_padj_sll378_AD_chronic_vs_CTRL_healthy' => array(
            'name' => 'padj sll378 AD chronic vs CTRL healthy',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_A_logFC_sll378_PSO_nonlesional_vs_CTRL_healthy' => array(
            'name' => 'logFC sll378 PSO nonlesional vs CTRL healthy',
            'slider_min' => -1,
            'slider_max' => 2,
            'default_low' => -1,
            'default_high' => 2
        ),
        'contrast_A_padj_sll378_PSO_nonlesional_vs_CTRL_healthy' => array(
            'name' => 'padj sll378 PSO nonlesional vs CTRL healthy',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_A_logFC_sll378_PSO_lesional_vs_CTRL_healthy' => array(
            'name' => 'logFC sll378 PSO lesional vs CTRL healthy',
            'slider_min' => -5,
            'slider_max' => 10,
            'default_low' => -5,
            'default_high' => 10
        ),
        'contrast_A_padj_sll378_PSO_lesional_vs_CTRL_healthy' => array(
            'name' => 'padj sll378 PSO lesional vs CTRL healthy',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_A_logFC_sll299_Psoriasis_Unt_vs_SkinNormal_Unt' => array(
            'name' => 'logFC sll299 Psoriasis Unt vs SkinNormal Unt',
            'slider_min' => -8,
            'slider_max' => 6,
            'default_low' => -8,
            'default_high' => 6
        ),
        'contrast_A_padj_sll299_Psoriasis_Unt_vs_SkinNormal_Unt' => array(
            'name' => 'padj sll299 Psoriasis Unt vs SkinNormal Unt',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_A_logFC_sll299_Psoriasis_adaMab_vs_Psoriasis_Unt' => array(
            'name' => 'logFC sll299 Psoriasis adaMab vs Psoriasis Unt',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_A_padj_sll299_Psoriasis_adaMab_vs_Psoriasis_Unt' => array(
            'name' => 'padj sll299 Psoriasis adaMab vs Psoriasis Unt',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_A_logFC_sll299_Psoriasis_adaMab_vs_SkinNormal_Unt' => array(
            'name' => 'logFC sll299 Psoriasis adaMab vs SkinNormal Unt',
            'slider_min' => -5,
            'slider_max' => 3,
            'default_low' => -5,
            'default_high' => 3
        ),
        'contrast_A_padj_sll299_Psoriasis_adaMab_vs_SkinNormal_Unt' => array(
            'name' => 'padj sll299 Psoriasis adaMab vs SkinNormal Unt',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'sll276_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_Skin_Card14KI_vs_Skin_WT',
        'default-y' => 'contrast_1_lg10p_Skin_Card14KI_vs_Skin_WT',
        'selection' => array(
            'contrast_1_logFC_Skin_Card14KI_vs_Skin_WT' => array(
                'name' => 'logFC Skin Card14KI vs Skin WT'
            ),
            'contrast_A_logFC_sll378_AD_lesional_vs_CTRL_healthy' => array(
                'name' => 'logFC sll378 AD lesional vs CTRL healthy'
            ),
            'contrast_A_logFC_sll378_AD_nonlesional_vs_CTRL_healthy' => array(
                'name' => 'logFC sll378 AD nonlesional vs CTRL healthy'
            ),
            'contrast_A_logFC_sll378_AD_chronic_vs_CTRL_healthy' => array(
                'name' => 'logFC sll378 AD chronic vs CTRL healthy'
            ),
            'contrast_A_logFC_sll378_PSO_nonlesional_vs_CTRL_healthy' => array(
                'name' => 'logFC sll378 PSO nonlesional vs CTRL healthy'
            ),
            'contrast_A_logFC_sll378_PSO_lesional_vs_CTRL_healthy' => array(
                'name' => 'logFC sll378 PSO lesional vs CTRL healthy'
            ),
            'contrast_A_logFC_sll299_Psoriasis_Unt_vs_SkinNormal_Unt' => array(
                'name' => 'logFC sll299 Psoriasis Unt vs SkinNormal Unt'
            ),
            'contrast_A_logFC_sll299_Psoriasis_adaMab_vs_Psoriasis_Unt' => array(
                'name' => 'logFC sll299 Psoriasis adaMab vs Psoriasis Unt'
            ),
            'contrast_A_logFC_sll299_Psoriasis_adaMab_vs_SkinNormal_Unt' => array(
                'name' => 'logFC sll299 Psoriasis adaMab vs SkinNormal Unt'
            ),
            'contrast_1_lg10p_Skin_Card14KI_vs_Skin_WT' => array(
                'name' => 'lg10p Skin Card14KI vs Skin WT'
            ),
            'contrast_A_lg10p_sll378_AD_lesional_vs_CTRL_healthy' => array(
                'name' => 'lg10p sll378 AD lesional vs CTRL healthy'
            ),
            'contrast_A_lg10p_sll378_AD_nonlesional_vs_CTRL_healthy' => array(
                'name' => 'lg10p sll378 AD nonlesional vs CTRL healthy'
            ),
            'contrast_A_lg10p_sll378_AD_chronic_vs_CTRL_healthy' => array(
                'name' => 'lg10p sll378 AD chronic vs CTRL healthy'
            ),
            'contrast_A_lg10p_sll378_PSO_nonlesional_vs_CTRL_healthy' => array(
                'name' => 'lg10p sll378 PSO nonlesional vs CTRL healthy'
            ),
            'contrast_A_lg10p_sll378_PSO_lesional_vs_CTRL_healthy' => array(
                'name' => 'lg10p sll378 PSO lesional vs CTRL healthy'
            ),
            'contrast_A_lg10p_sll299_Psoriasis_Unt_vs_SkinNormal_Unt' => array(
                'name' => 'lg10p sll299 Psoriasis Unt vs SkinNormal Unt'
            ),
            'contrast_A_lg10p_sll299_Psoriasis_adaMab_vs_Psoriasis_Unt' => array(
                'name' => 'lg10p sll299 Psoriasis adaMab vs Psoriasis Unt'
            ),
            'contrast_A_lg10p_sll299_Psoriasis_adaMab_vs_SkinNormal_Unt' => array(
                'name' => 'lg10p sll299 Psoriasis adaMab vs SkinNormal Unt'
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
            'contrast_1_lg2BaseMean_Skin_Card14KI_vs_Skin_WT' => array(
                'name' => 'lg2BaseMean Skin Card14KI vs Skin WT'
            ),
            'contrast_1_lg2BaseMean_AD_lesional_vs_CTRL_healthy' => array(
                'name' => 'lg2BaseMean AD lesional vs CTRL healthy'
            ),
            'contrast_2_lg2BaseMean_AD_nonlesional_vs_CTRL_healthy' => array(
                'name' => 'lg2BaseMean AD nonlesional vs CTRL healthy'
            ),
            'contrast_3_lg2BaseMean_AD_chronic_vs_CTRL_healthy' => array(
                'name' => 'lg2BaseMean AD chronic vs CTRL healthy'
            ),
            'contrast_4_lg2BaseMean_PSO_nonlesional_vs_CTRL_healthy' => array(
                'name' => 'lg2BaseMean PSO nonlesional vs CTRL healthy'
            ),
            'contrast_5_lg2BaseMean_PSO_lesional_vs_CTRL_healthy' => array(
                'name' => 'lg2BaseMean PSO lesional vs CTRL healthy'
            )
        )
    )
//End scatterplot
);
