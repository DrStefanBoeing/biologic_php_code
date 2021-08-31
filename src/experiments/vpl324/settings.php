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
            'cat_table_name' => 'vpl324_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'p324_rna_seq_table',
    'primary_gene_symbol' => 'dr_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_N_aNP_1_TPM' => array(
            'color' => '#F8766D',
            'name' => 'N aNP 1 TPM'
        ),
        'norm_counts_N_aNP_2_TPM' => array(
            'color' => '#F8766D',
            'name' => 'N aNP 2 TPM'
        ),
        'norm_counts_N_aNP_3_TPM' => array(
            'color' => '#F8766D',
            'name' => 'N aNP 3 TPM'
        ),
        'norm_counts_N_aRG_1_TPM' => array(
            'color' => '#00BA38',
            'name' => 'N aRG 1 TPM'
        ),
        'norm_counts_N_aRG_2_TPM' => array(
            'color' => '#00BA38',
            'name' => 'N aRG 2 TPM'
        ),
        'norm_counts_N_aRG_3_TPM' => array(
            'color' => '#00BA38',
            'name' => 'N aRG 3 TPM'
        ),
        'norm_counts_N_qRG_1_TPM' => array(
            'color' => '#619CFF',
            'name' => 'N qRG 1 TPM'
        ),
        'norm_counts_N_qRG_2_TPM' => array(
            'color' => '#619CFF',
            'name' => 'N qRG 2 TPM'
        ),
        'norm_counts_N_qRG_3_TPM' => array(
            'color' => '#619CFF',
            'name' => 'N qRG 3 TPM'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_N_aNP_1_TPM','lg2_avg_N_aNP_2_TPM','lg2_avg_N_aNP_3_TPM','lg2_avg_N_aRG_1_TPM','lg2_avg_N_aRG_2_TPM','lg2_avg_N_aRG_3_TPM','lg2_avg_N_qRG_1_TPM','lg2_avg_N_qRG_2_TPM','lg2_avg_N_qRG_3_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_N_qRG_vs_N_aRG' => array(
            'name' => 'logFC N qRG vs N aRG',
            'slider_min' => -4,
            'slider_max' => 7,
            'default_low' => -4,
            'default_high' => 7
        ),
        'contrast_2_logFC_N_qRG_vs_N_aNP' => array(
            'name' => 'logFC N qRG vs N aNP',
            'slider_min' => -6,
            'slider_max' => 7,
            'default_low' => -6,
            'default_high' => 7
        ),
        'contrast_3_logFC_N_aRG_vs_N_aNP' => array(
            'name' => 'logFC N aRG vs N aNP',
            'slider_min' => -6,
            'slider_max' => 5,
            'default_low' => -6,
            'default_high' => 5
        ),
        'contrast_A_logFC_PE_SOX10_vs_PE_neg' => array(
            'name' => 'logFC PE SOX10 vs PE neg',
            'slider_min' => -8,
            'slider_max' => 8,
            'default_low' => -8,
            'default_high' => 8
        ),
        'contrast_1_padj_N_qRG_vs_N_aRG' => array(
            'name' => 'padj N qRG vs N aRG',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_padj_N_qRG_vs_N_aNP' => array(
            'name' => 'padj N qRG vs N aNP',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_padj_N_aRG_vs_N_aNP' => array(
            'name' => 'padj N aRG vs N aNP',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_A_padj_PE_SOX10_vs_PE_neg' => array(
            'name' => 'padj PE SOX10 vs PE neg',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_A_padj_PE_SOX10_vs_PE_neg_1' => array(
            'name' => 'padj PE SOX10 vs PE neg 1',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_L_lg10p_LRT_sample_group' => array(
            'name' => 'lg10p LRT sample group',
            'slider_min' => 0,
            'slider_max' => 61,
            'default_low' => 0,
            'default_high' => 61
        ),
        'add_col___Avg_TPM_per_sample' => array(
            'name' => 'Avg TPM per sample',
            'slider_min' => 0,
            'slider_max' => 25452,
            'default_low' => 0,
            'default_high' => 25452
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'p324_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_N_qRG_vs_N_aRG',
        'default-y' => 'contrast_1_lg10p_N_qRG_vs_N_aRG',
        'selection' => array(
            'contrast_1_logFC_N_qRG_vs_N_aRG' => array(
                'name' => 'logFC N qRG vs N aRG'
            ),
            'contrast_2_logFC_N_qRG_vs_N_aNP' => array(
                'name' => 'logFC N qRG vs N aNP'
            ),
            'contrast_3_logFC_N_aRG_vs_N_aNP' => array(
                'name' => 'logFC N aRG vs N aNP'
            ),
            'contrast_A_logFC_PE_SOX10_vs_PE_neg' => array(
                'name' => 'logFC PE SOX10 vs PE neg'
            ),
            'contrast_1_lg10p_N_qRG_vs_N_aRG' => array(
                'name' => 'lg10p N qRG vs N aRG'
            ),
            'contrast_2_lg10p_N_qRG_vs_N_aNP' => array(
                'name' => 'lg10p N qRG vs N aNP'
            ),
            'contrast_3_lg10p_N_aRG_vs_N_aNP' => array(
                'name' => 'lg10p N aRG vs N aNP'
            ),
            'contrast_L_lg10p_LRT_sample_group' => array(
                'name' => 'lg10p LRT sample group'
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
            'contrast_1_lg2BaseMean_N_qRG_vs_N_aRG' => array(
                'name' => 'lg2BaseMean N qRG vs N aRG'
            ),
            'contrast_1_lg2BaseMean' => array(
                'name' => 'lg2BaseMean'
            ),
            'contrast_2_lg2BaseMean_N_qRG_vs_N_aNP' => array(
                'name' => 'lg2BaseMean N qRG vs N aNP'
            ),
            'contrast_2_lg2BaseMean' => array(
                'name' => 'lg2BaseMean'
            ),
            'contrast_3_lg2BaseMean_N_aRG_vs_N_aNP' => array(
                'name' => 'lg2BaseMean N aRG vs N aNP'
            ),
            'contrast_3_lg2BaseMean' => array(
                'name' => 'lg2BaseMean'
            ),
            'contrast_L_lg2BaseMean_LRT_sample_group' => array(
                'name' => 'lg2BaseMean LRT sample group'
            ),
            'add_col___Avg_TPM_per_sample' => array(
                'name' => 'Avg TPM per sample'
            )
        )
    )
//End scatterplot
);
