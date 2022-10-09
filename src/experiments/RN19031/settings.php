<?php

return array(
    'lab' => array(
        'name' => 'Papayannopoulos DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'papayannopoulos_data',
    'data_db' => array(
            'cat_table_name' => 'RN19031_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'RN19031_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_TCRaKO_InfLy6Hi_1_TPM' => array(
            'color' => '#F8766D',
            'name' => 'TCRaKO InfLy6Hi 1 TPM'
        ),
        'norm_counts_TCRaKO_InfLy6Hi_2_TPM' => array(
            'color' => '#F8766D',
            'name' => 'TCRaKO InfLy6Hi 2 TPM'
        ),
        'norm_counts_TCRaKO_InfLy6Hi_3_TPM' => array(
            'color' => '#F8766D',
            'name' => 'TCRaKO InfLy6Hi 3 TPM'
        ),
        'norm_counts_TCRaKO_InfLy6Low_1_TPM' => array(
            'color' => '#CD9600',
            'name' => 'TCRaKO InfLy6Low 1 TPM'
        ),
        'norm_counts_TCRaKO_InfLy6Low_2_TPM' => array(
            'color' => '#CD9600',
            'name' => 'TCRaKO InfLy6Low 2 TPM'
        ),
        'norm_counts_TCRaKO_InfLy6Low_3_TPM' => array(
            'color' => '#CD9600',
            'name' => 'TCRaKO InfLy6Low 3 TPM'
        ),
        'norm_counts_TCRaKO_NaiveLy6Hi_1_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'TCRaKO NaiveLy6Hi 1 TPM'
        ),
        'norm_counts_TCRaKO_NaiveLy6Hi_2_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'TCRaKO NaiveLy6Hi 2 TPM'
        ),
        'norm_counts_TCRaKO_NaiveLy6Hi_3_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'TCRaKO NaiveLy6Hi 3 TPM'
        ),
        'norm_counts_WTcGCSF_NaiveLy6Hi_1_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'WTcGCSF NaiveLy6Hi 1 TPM'
        ),
        'norm_counts_WTcGCSF_NaiveLy6Hi_2_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'WTcGCSF NaiveLy6Hi 2 TPM'
        ),
        'norm_counts_WTcGCSF_NaiveLy6Hi_3_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'WTcGCSF NaiveLy6Hi 3 TPM'
        ),
        'norm_counts_WTcGCSF_NaiveLy6Low_1_TPM' => array(
            'color' => '#FF61CC',
            'name' => 'WTcGCSF NaiveLy6Low 1 TPM'
        ),
        'norm_counts_WTcGCSF_NaiveLy6Low_2_TPM' => array(
            'color' => '#FF61CC',
            'name' => 'WTcGCSF NaiveLy6Low 2 TPM'
        ),
        'norm_counts_WTcGCSF_NaiveLy6Low_3_TPM' => array(
            'color' => '#FF61CC',
            'name' => 'WTcGCSF NaiveLy6Low 3 TPM'
        ),
        'norm_counts_WT_InfLy6Hi_1_TPM' => array(
            'color' => '#00BE67',
            'name' => 'WT InfLy6Hi 1 TPM'
        ),
        'norm_counts_WT_InfLy6Hi_2_TPM' => array(
            'color' => '#00BE67',
            'name' => 'WT InfLy6Hi 2 TPM'
        ),
        'norm_counts_WT_InfLy6Hi_3_TPM' => array(
            'color' => '#00BE67',
            'name' => 'WT InfLy6Hi 3 TPM'
        ),
        'norm_counts_WT_InfLy6Low_1_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'WT InfLy6Low 1 TPM'
        ),
        'norm_counts_WT_InfLy6Low_2_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'WT InfLy6Low 2 TPM'
        ),
        'norm_counts_WT_InfLy6Low_3_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'WT InfLy6Low 3 TPM'
        ),
        'norm_counts_WT_NaiveLy6Hi_1_TPM' => array(
            'color' => '#00A9FF',
            'name' => 'WT NaiveLy6Hi 1 TPM'
        ),
        'norm_counts_WT_NaiveLy6Hi_2_TPM' => array(
            'color' => '#00A9FF',
            'name' => 'WT NaiveLy6Hi 2 TPM'
        ),
        'norm_counts_WT_NaiveLy6Hi_3_TPM' => array(
            'color' => '#00A9FF',
            'name' => 'WT NaiveLy6Hi 3 TPM'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_TCRaKO_InfLy6Hi_1_TPM','lg2_avg_TCRaKO_InfLy6Hi_2_TPM','lg2_avg_TCRaKO_InfLy6Hi_3_TPM','lg2_avg_TCRaKO_InfLy6Low_1_TPM','lg2_avg_TCRaKO_InfLy6Low_2_TPM','lg2_avg_TCRaKO_InfLy6Low_3_TPM','lg2_avg_TCRaKO_NaiveLy6Hi_1_TPM','lg2_avg_TCRaKO_NaiveLy6Hi_2_TPM','lg2_avg_TCRaKO_NaiveLy6Hi_3_TPM','lg2_avg_WTcGCSF_NaiveLy6Hi_1_TPM','lg2_avg_WTcGCSF_NaiveLy6Hi_2_TPM','lg2_avg_WTcGCSF_NaiveLy6Hi_3_TPM','lg2_avg_WTcGCSF_NaiveLy6Low_1_TPM','lg2_avg_WTcGCSF_NaiveLy6Low_2_TPM','lg2_avg_WTcGCSF_NaiveLy6Low_3_TPM','lg2_avg_WT_InfLy6Hi_1_TPM','lg2_avg_WT_InfLy6Hi_2_TPM','lg2_avg_WT_InfLy6Hi_3_TPM','lg2_avg_WT_InfLy6Low_1_TPM','lg2_avg_WT_InfLy6Low_2_TPM','lg2_avg_WT_InfLy6Low_3_TPM','lg2_avg_WT_NaiveLy6Hi_1_TPM','lg2_avg_WT_NaiveLy6Hi_2_TPM','lg2_avg_WT_NaiveLy6Hi_3_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_WT_InfLy6Hi_vs_WT_NaiveLy6Hi' => array(
            'name' => 'logFC WT InfLy6Hi vs WT NaiveLy6Hi',
            'slider_min' => -12,
            'slider_max' => 14,
            'default_low' => -12,
            'default_high' => 14
        ),
        'contrast_1_padj_WT_InfLy6Hi_vs_WT_NaiveLy6Hi' => array(
            'name' => 'padj WT InfLy6Hi vs WT NaiveLy6Hi',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_WT_InfLy6Hi_vs_WT_InfLy6Low' => array(
            'name' => 'logFC WT InfLy6Hi vs WT InfLy6Low',
            'slider_min' => -10,
            'slider_max' => 11,
            'default_low' => -10,
            'default_high' => 11
        ),
        'contrast_2_padj_WT_InfLy6Hi_vs_WT_InfLy6Low' => array(
            'name' => 'padj WT InfLy6Hi vs WT InfLy6Low',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_WT_InfLy6Low_vs_WT_NaiveLy6Hi' => array(
            'name' => 'logFC WT InfLy6Low vs WT NaiveLy6Hi',
            'slider_min' => -12,
            'slider_max' => 11,
            'default_low' => -12,
            'default_high' => 11
        ),
        'contrast_3_padj_WT_InfLy6Low_vs_WT_NaiveLy6Hi' => array(
            'name' => 'padj WT InfLy6Low vs WT NaiveLy6Hi',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_logFC_TCRaKO_vs_WT' => array(
            'name' => 'logFC TCRaKO vs WT',
            'slider_min' => -8,
            'slider_max' => 9,
            'default_low' => -8,
            'default_high' => 9
        ),
        'contrast_4_padj_TCRaKO_vs_WT' => array(
            'name' => 'padj TCRaKO vs WT',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_5_logFC_Infected_vs_Naive' => array(
            'name' => 'logFC Infected vs Naive',
            'slider_min' => -6,
            'slider_max' => 8,
            'default_low' => -6,
            'default_high' => 8
        ),
        'contrast_5_padj_Infected_vs_Naive' => array(
            'name' => 'padj Infected vs Naive',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_6_logFC_cGCSF_vs_Unt' => array(
            'name' => 'logFC cGCSF vs Unt',
            'slider_min' => -5,
            'slider_max' => 8,
            'default_low' => -5,
            'default_high' => 8
        ),
        'contrast_6_padj_cGCSF_vs_Unt' => array(
            'name' => 'padj cGCSF vs Unt',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_7_logFC_Ly6Hi_vs_Ly6Low' => array(
            'name' => 'logFC Ly6Hi vs Ly6Low',
            'slider_min' => -9,
            'slider_max' => 4,
            'default_low' => -9,
            'default_high' => 4
        ),
        'contrast_7_padj_Ly6Hi_vs_Ly6Low' => array(
            'name' => 'padj Ly6Hi vs Ly6Low',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_8_logFC_Inf_WTcGCSF_vs_WT_TCRaKO_Naive' => array(
            'name' => 'logFC Inf WTcGCSF vs WT TCRaKO Naive',
            'slider_min' => -6,
            'slider_max' => 7,
            'default_low' => -6,
            'default_high' => 7
        ),
        'contrast_8_padj_Inf_WTcGCSF_vs_WT_TCRaKO_Naive' => array(
            'name' => 'padj Inf WTcGCSF vs WT TCRaKO Naive',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_9_logFC_Inf_WTcGCSF_Hi_vs_Inf_WTcGCSF_Low' => array(
            'name' => 'logFC Inf WTcGCSF Hi vs Inf WTcGCSF Low',
            'slider_min' => -9,
            'slider_max' => 5,
            'default_low' => -9,
            'default_high' => 5
        ),
        'contrast_9_padj_Inf_WTcGCSF_Hi_vs_Inf_WTcGCSF_Low' => array(
            'name' => 'padj Inf WTcGCSF Hi vs Inf WTcGCSF Low',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_Cybb' => array(
            'name' => 'corCoef Cybb',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_Elane' => array(
            'name' => 'corCoef Elane',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_Ly6g' => array(
            'name' => 'corCoef Ly6g',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_Mpo' => array(
            'name' => 'corCoef Mpo',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_L_lg10p_LRT_genotype' => array(
            'name' => 'lg10p LRT genotype',
            'slider_min' => 0,
            'slider_max' => 24,
            'default_low' => 0,
            'default_high' => 24
        ),
        'contrast_L_lg10p_LRT_Naive_Infected' => array(
            'name' => 'lg10p LRT Naive Infected',
            'slider_min' => 0,
            'slider_max' => 13,
            'default_low' => 0,
            'default_high' => 13
        ),
        'contrast_L_lg10p_LRT_Ly6Hi_Low' => array(
            'name' => 'lg10p LRT Ly6Hi Low',
            'slider_min' => 0,
            'slider_max' => 16,
            'default_low' => 0,
            'default_high' => 16
        ),
        'contrast_L_lg10p_LRT_cGCSF' => array(
            'name' => 'lg10p LRT cGCSF',
            'slider_min' => 0,
            'slider_max' => 13,
            'default_low' => 0,
            'default_high' => 13
        ),
        'contrast_L_lg10p_LRT_WtNaHi_WTinfLo_WTclGcLo' => array(
            'name' => 'lg10p LRT WtNaHi WTinfLo WTclGcLo',
            'slider_min' => 0,
            'slider_max' => 26,
            'default_low' => 0,
            'default_high' => 26
        ),
        'contrast_L_lg10p_LRT_WtNaHi_WTinfLo_TinfHi' => array(
            'name' => 'lg10p LRT WtNaHi WTinfLo TinfHi',
            'slider_min' => 0,
            'slider_max' => 15,
            'default_low' => 0,
            'default_high' => 15
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'RN19031_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_WT_InfLy6Hi_vs_WT_NaiveLy6Hi',
        'default-y' => 'contrast_1_lg10p_WT_InfLy6Hi_vs_WT_NaiveLy6Hi',
        'selection' => array(
            'contrast_1_logFC_WT_InfLy6Hi_vs_WT_NaiveLy6Hi' => array(
                'name' => 'logFC WT InfLy6Hi vs WT NaiveLy6Hi'
            ),
            'contrast_2_logFC_WT_InfLy6Hi_vs_WT_InfLy6Low' => array(
                'name' => 'logFC WT InfLy6Hi vs WT InfLy6Low'
            ),
            'contrast_3_logFC_WT_InfLy6Low_vs_WT_NaiveLy6Hi' => array(
                'name' => 'logFC WT InfLy6Low vs WT NaiveLy6Hi'
            ),
            'contrast_4_logFC_TCRaKO_vs_WT' => array(
                'name' => 'logFC TCRaKO vs WT'
            ),
            'contrast_5_logFC_Infected_vs_Naive' => array(
                'name' => 'logFC Infected vs Naive'
            ),
            'contrast_6_logFC_cGCSF_vs_Unt' => array(
                'name' => 'logFC cGCSF vs Unt'
            ),
            'contrast_7_logFC_Ly6Hi_vs_Ly6Low' => array(
                'name' => 'logFC Ly6Hi vs Ly6Low'
            ),
            'contrast_8_logFC_Inf_WTcGCSF_vs_WT_TCRaKO_Naive' => array(
                'name' => 'logFC Inf WTcGCSF vs WT TCRaKO Naive'
            ),
            'contrast_9_logFC_Inf_WTcGCSF_Hi_vs_Inf_WTcGCSF_Low' => array(
                'name' => 'logFC Inf WTcGCSF Hi vs Inf WTcGCSF Low'
            ),
            'contrast_1_lg10p_WT_InfLy6Hi_vs_WT_NaiveLy6Hi' => array(
                'name' => 'lg10p WT InfLy6Hi vs WT NaiveLy6Hi'
            ),
            'contrast_2_lg10p_WT_InfLy6Hi_vs_WT_InfLy6Low' => array(
                'name' => 'lg10p WT InfLy6Hi vs WT InfLy6Low'
            ),
            'contrast_3_lg10p_WT_InfLy6Low_vs_WT_NaiveLy6Hi' => array(
                'name' => 'lg10p WT InfLy6Low vs WT NaiveLy6Hi'
            ),
            'contrast_4_lg10p_TCRaKO_vs_WT' => array(
                'name' => 'lg10p TCRaKO vs WT'
            ),
            'contrast_5_lg10p_Infected_vs_Naive' => array(
                'name' => 'lg10p Infected vs Naive'
            ),
            'contrast_6_lg10p_cGCSF_vs_Unt' => array(
                'name' => 'lg10p cGCSF vs Unt'
            ),
            'contrast_7_lg10p_Ly6Hi_vs_Ly6Low' => array(
                'name' => 'lg10p Ly6Hi vs Ly6Low'
            ),
            'contrast_8_lg10p_Inf_WTcGCSF_vs_WT_TCRaKO_Naive' => array(
                'name' => 'lg10p Inf WTcGCSF vs WT TCRaKO Naive'
            ),
            'contrast_9_lg10p_Inf_WTcGCSF_Hi_vs_Inf_WTcGCSF_Low' => array(
                'name' => 'lg10p Inf WTcGCSF Hi vs Inf WTcGCSF Low'
            ),
            'contrast_L_lg10p_LRT_genotype' => array(
                'name' => 'lg10p LRT genotype'
            ),
            'contrast_L_lg10p_LRT_Naive_Infected' => array(
                'name' => 'lg10p LRT Naive Infected'
            ),
            'contrast_L_lg10p_LRT_Ly6Hi_Low' => array(
                'name' => 'lg10p LRT Ly6Hi Low'
            ),
            'contrast_L_lg10p_LRT_cGCSF' => array(
                'name' => 'lg10p LRT cGCSF'
            ),
            'contrast_L_lg10p_LRT_WtNaHi_WTinfLo_WTclGcLo' => array(
                'name' => 'lg10p LRT WtNaHi WTinfLo WTclGcLo'
            ),
            'contrast_L_lg10p_LRT_WtNaHi_WTinfLo_TinfHi' => array(
                'name' => 'lg10p LRT WtNaHi WTinfLo TinfHi'
            ),
            'add_venn_X_corCoef_Cybb' => array(
                'name' => 'corCoef Cybb'
            ),
            'add_venn_X_corCoef_Elane' => array(
                'name' => 'corCoef Elane'
            ),
            'add_venn_X_corCoef_Ly6g' => array(
                'name' => 'corCoef Ly6g'
            ),
            'add_venn_X_corCoef_Mpo' => array(
                'name' => 'corCoef Mpo'
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
            'contrast_1_lg2BaseMean_WT_InfLy6Hi_vs_WT_NaiveLy6Hi' => array(
                'name' => 'lg2BaseMean WT InfLy6Hi vs WT NaiveLy6Hi'
            ),
            'contrast_2_lg2BaseMean_WT_InfLy6Hi_vs_WT_InfLy6Low' => array(
                'name' => 'lg2BaseMean WT InfLy6Hi vs WT InfLy6Low'
            ),
            'contrast_3_lg2BaseMean_WT_InfLy6Low_vs_WT_NaiveLy6Hi' => array(
                'name' => 'lg2BaseMean WT InfLy6Low vs WT NaiveLy6Hi'
            ),
            'contrast_4_lg2BaseMean_TCRaKO_vs_WT' => array(
                'name' => 'lg2BaseMean TCRaKO vs WT'
            ),
            'contrast_5_lg2BaseMean_Infected_vs_Naive' => array(
                'name' => 'lg2BaseMean Infected vs Naive'
            ),
            'contrast_6_lg2BaseMean_cGCSF_vs_Unt' => array(
                'name' => 'lg2BaseMean cGCSF vs Unt'
            ),
            'contrast_7_lg2BaseMean_Ly6Hi_vs_Ly6Low' => array(
                'name' => 'lg2BaseMean Ly6Hi vs Ly6Low'
            ),
            'contrast_8_lg2BaseMean_Inf_WTcGCSF_vs_WT_TCRaKO_Naive' => array(
                'name' => 'lg2BaseMean Inf WTcGCSF vs WT TCRaKO Naive'
            ),
            'contrast_9_lg2BaseMean_Inf_WTcGCSF_Hi_vs_Inf_WTcGCSF_Low' => array(
                'name' => 'lg2BaseMean Inf WTcGCSF Hi vs Inf WTcGCSF Low'
            ),
            'contrast_L_lg2BaseMean_LRT_genotype' => array(
                'name' => 'lg2BaseMean LRT genotype'
            ),
            'contrast_L_lg2BaseMean_LRT_Naive_Infected' => array(
                'name' => 'lg2BaseMean LRT Naive Infected'
            ),
            'contrast_L_lg2BaseMean_LRT_Ly6Hi_Low' => array(
                'name' => 'lg2BaseMean LRT Ly6Hi Low'
            ),
            'contrast_L_lg2BaseMean_LRT_cGCSF' => array(
                'name' => 'lg2BaseMean LRT cGCSF'
            ),
            'contrast_L_lg2BaseMean_LRT_WtNaHi_WTinfLo_WTclGcLo' => array(
                'name' => 'lg2BaseMean LRT WtNaHi WTinfLo WTclGcLo'
            ),
            'contrast_L_lg2BaseMean_LRT_WtNaHi_WTinfLo_TinfHi' => array(
                'name' => 'lg2BaseMean LRT WtNaHi WTinfLo TinfHi'
            )
        )
    )
//End scatterplot
);
