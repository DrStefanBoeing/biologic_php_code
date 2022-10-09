<?php

return array(
    'lab' => array(
        'name' => 'Ley DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'sll_data',
    'data_db' => array(
            'cat_table_name' => 'sll357_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'sll357_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_WT_day5_1_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'WT day5 1 TPM'
        ),
        'norm_counts_WT_day5_2_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'WT day5 2 TPM'
        ),
        'norm_counts_WT_day5_3_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'WT day5 3 TPM'
        ),
        'norm_counts_WT_day5_4_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'WT day5 4 TPM'
        ),
        'norm_counts_WT_day5_5_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'WT day5 5 TPM'
        ),
        'norm_counts_WT_day5_6_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'WT day5 6 TPM'
        ),
        'norm_counts_WT_day30_1_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'WT day30 1 TPM'
        ),
        'norm_counts_WT_day30_2_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'WT day30 2 TPM'
        ),
        'norm_counts_WT_day30_3_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'WT day30 3 TPM'
        ),
        'norm_counts_WT_day30_4_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'WT day30 4 TPM'
        ),
        'norm_counts_WT_day30_5_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'WT day30 5 TPM'
        ),
        'norm_counts_WT_day30_6_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'WT day30 6 TPM'
        ),
        'norm_counts_Card14KI_day5_1_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'Card14KI day5 1 TPM'
        ),
        'norm_counts_Card14KI_day5_2_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'Card14KI day5 2 TPM'
        ),
        'norm_counts_Card14KI_day5_3_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'Card14KI day5 3 TPM'
        ),
        'norm_counts_Card14KI_day5_4_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'Card14KI day5 4 TPM'
        ),
        'norm_counts_Card14KI_day5_5_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'Card14KI day5 5 TPM'
        ),
        'norm_counts_Card14KI_day5_6_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'Card14KI day5 6 TPM'
        ),
        'norm_counts_Card14KI_day30_1_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Card14KI day30 1 TPM'
        ),
        'norm_counts_Card14KI_day30_2_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Card14KI day30 2 TPM'
        ),
        'norm_counts_Card14KI_day30_3_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Card14KI day30 3 TPM'
        ),
        'norm_counts_Card14KI_day30_4_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Card14KI day30 4 TPM'
        ),
        'norm_counts_Card14KI_day30_5_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Card14KI day30 5 TPM'
        ),
        'norm_counts_Card14KI_day30_6_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Card14KI day30 6 TPM'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_WT_day5_1_TPM','lg2_avg_WT_day5_2_TPM','lg2_avg_WT_day5_3_TPM','lg2_avg_WT_day5_4_TPM','lg2_avg_WT_day5_5_TPM','lg2_avg_WT_day5_6_TPM','lg2_avg_WT_day30_1_TPM','lg2_avg_WT_day30_2_TPM','lg2_avg_WT_day30_3_TPM','lg2_avg_WT_day30_4_TPM','lg2_avg_WT_day30_5_TPM','lg2_avg_WT_day30_6_TPM','lg2_avg_Card14KI_day5_1_TPM','lg2_avg_Card14KI_day5_2_TPM','lg2_avg_Card14KI_day5_3_TPM','lg2_avg_Card14KI_day5_4_TPM','lg2_avg_Card14KI_day5_5_TPM','lg2_avg_Card14KI_day5_6_TPM','lg2_avg_Card14KI_day30_1_TPM','lg2_avg_Card14KI_day30_2_TPM','lg2_avg_Card14KI_day30_3_TPM','lg2_avg_Card14KI_day30_4_TPM','lg2_avg_Card14KI_day30_5_TPM','lg2_avg_Card14KI_day30_6_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_Card14KI__vs_WT_' => array(
            'name' => 'logFC Card14KI  vs WT ',
            'slider_min' => -6,
            'slider_max' => 9,
            'default_low' => -6,
            'default_high' => 9
        ),
        'contrast_1_padj_Card14KI__vs_WT_' => array(
            'name' => 'padj Card14KI  vs WT ',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_A_logFC_L_Card14KI_vs_L_WT' => array(
            'name' => 'logFC L Card14KI vs L WT',
            'slider_min' => -7,
            'slider_max' => 11,
            'default_low' => -7,
            'default_high' => 11
        ),
        'contrast_A_padj_L_Card14KI_vs_L_WT' => array(
            'name' => 'padj L Card14KI vs L WT',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_B_logFC_Z_Card14delE138_vs_Z_WT' => array(
            'name' => 'logFC Z Card14delE138 vs Z WT',
            'slider_min' => -10,
            'slider_max' => 12,
            'default_low' => -10,
            'default_high' => 12
        ),
        'contrast_B_padj_Z_Card14delE138_vs_Z_WT' => array(
            'name' => 'padj Z Card14delE138 vs Z WT',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_C_logFC_Ear_Il23_vs_Ear_Pbs' => array(
            'name' => 'logFC Ear Il23 vs Ear Pbs',
            'slider_min' => -5,
            'slider_max' => 9,
            'default_low' => -5,
            'default_high' => 9
        ),
        'contrast_C_padj_Ear_Il23_vs_Ear_Pbs' => array(
            'name' => 'padj Ear Il23 vs Ear Pbs',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_C_lg2BaseMean_Ear_Il23_vs_Ear_Pbs' => array(
            'name' => 'lg2BaseMean Ear Il23 vs Ear Pbs',
            'slider_min' => 0,
            'slider_max' => 1000,
            'default_low' => 0,
            'default_high' => 1000
        ),
        'contrast_C_lg2BaseMean' => array(
            'name' => 'lg2BaseMean',
            'slider_min' => -1,
            'slider_max' => 19,
            'default_low' => -1,
            'default_high' => 19
        ),
        'contrast_D_logFC_Psoriasis_Unt_vs_SkinNormal_Unt' => array(
            'name' => 'logFC Psoriasis Unt vs SkinNormal Unt',
            'slider_min' => -8,
            'slider_max' => 6,
            'default_low' => -8,
            'default_high' => 6
        ),
        'contrast_D_padj_Psoriasis_Unt_vs_SkinNormal_Unt' => array(
            'name' => 'padj Psoriasis Unt vs SkinNormal Unt',
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
            'slider_min' => -6,
            'slider_max' => 10,
            'default_low' => -6,
            'default_high' => 10
        ),
        'contrast_A_padj_sll378_PSO_lesional_vs_CTRL_healthy' => array(
            'name' => 'padj sll378 PSO lesional vs CTRL healthy',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_A_logFC_sll302_Z_Card14delE138_vs_Z_WT' => array(
            'name' => 'logFC sll302 Z Card14delE138 vs Z WT',
            'slider_min' => -7,
            'slider_max' => 11,
            'default_low' => -7,
            'default_high' => 11
        ),
        'contrast_A_padj_sll302_Z_Card14delE138_vs_Z_WT' => array(
            'name' => 'padj sll302 Z Card14delE138 vs Z WT',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_L_lg10p_LRT_WT_MT' => array(
            'name' => 'lg10p LRT WT MT',
            'slider_min' => 0,
            'slider_max' => 139,
            'default_low' => 0,
            'default_high' => 139
        ),
        'contrast_L_lg10p_LRT_timepoint' => array(
            'name' => 'lg10p LRT timepoint',
            'slider_min' => 0,
            'slider_max' => 219,
            'default_low' => 0,
            'default_high' => 219
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'sll357_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_Card14KI__vs_WT_',
        'default-y' => 'contrast_1_lg10p_Card14KI__vs_WT_',
        'selection' => array(
            'contrast_1_logFC_Card14KI__vs_WT_' => array(
                'name' => 'logFC Card14KI  vs WT '
            ),
            'contrast_A_logFC_L_Card14KI_vs_L_WT' => array(
                'name' => 'logFC L Card14KI vs L WT'
            ),
            'contrast_B_logFC_Z_Card14delE138_vs_Z_WT' => array(
                'name' => 'logFC Z Card14delE138 vs Z WT'
            ),
            'contrast_C_logFC_Ear_Il23_vs_Ear_Pbs' => array(
                'name' => 'logFC Ear Il23 vs Ear Pbs'
            ),
            'contrast_D_logFC_Psoriasis_Unt_vs_SkinNormal_Unt' => array(
                'name' => 'logFC Psoriasis Unt vs SkinNormal Unt'
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
            'contrast_A_logFC_sll302_Z_Card14delE138_vs_Z_WT' => array(
                'name' => 'logFC sll302 Z Card14delE138 vs Z WT'
            ),
            'contrast_1_lg10p_Card14KI__vs_WT_' => array(
                'name' => 'lg10p Card14KI  vs WT '
            ),
            'contrast_L_lg10p_LRT_WT_MT' => array(
                'name' => 'lg10p LRT WT MT'
            ),
            'contrast_L_lg10p_LRT_timepoint' => array(
                'name' => 'lg10p LRT timepoint'
            ),
            'contrast_A_lg10p_L_Card14KI_vs_L_WT' => array(
                'name' => 'lg10p L Card14KI vs L WT'
            ),
            'contrast_B_lg10p_Z_Card14delE138_vs_Z_WT' => array(
                'name' => 'lg10p Z Card14delE138 vs Z WT'
            ),
            'contrast_C_lg10p_Ear_Il23_vs_Ear_Pbs' => array(
                'name' => 'lg10p Ear Il23 vs Ear Pbs'
            ),
            'contrast_D_lg10p_Psoriasis_Unt_vs_SkinNormal_Unt' => array(
                'name' => 'lg10p Psoriasis Unt vs SkinNormal Unt'
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
            'contrast_A_lg10p_sll302_Z_Card14delE138_vs_Z_WT' => array(
                'name' => 'lg10p sll302 Z Card14delE138 vs Z WT'
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
            'contrast_1_lg2BaseMean_Card14KI__vs_WT_' => array(
                'name' => 'lg2BaseMean Card14KI  vs WT '
            ),
            'contrast_L_lg2BaseMean_LRT_WT_MT' => array(
                'name' => 'lg2BaseMean LRT WT MT'
            ),
            'contrast_L_lg2BaseMean_LRT_timepoint' => array(
                'name' => 'lg2BaseMean LRT timepoint'
            ),
            'contrast_C_lg2BaseMean_Ear_Il23_vs_Ear_Pbs' => array(
                'name' => 'lg2BaseMean Ear Il23 vs Ear Pbs'
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
            ),
            'contrast_C_lg2BaseMean_Ear_Il23_vs_Ear_Pbs' => array(
                'name' => 'lg2BaseMean Ear Il23 vs Ear Pbs'
            ),
            'contrast_C_lg2BaseMean' => array(
                'name' => 'lg2BaseMean'
            )
        )
    )
//End scatterplot
);
