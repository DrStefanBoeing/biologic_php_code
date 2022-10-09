<?php

return array(
    'public_access' => TRUE,
    'lab' => array(
        'name' => 'Guillemot DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'fgl_data',
    'data_db' => array(
            'cat_table_name' => 'RN17020_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'RN17020_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Astr_2m_mA10' => array(
            'color' => '#F8766D',
            'name' => 'Astr 2m mA10'
        ),
        'norm_counts_Astr_2m_mA5' => array(
            'color' => '#F8766D',
            'name' => 'Astr 2m mA5'
        ),
        'norm_counts_Astr_2m_mA7' => array(
            'color' => '#F8766D',
            'name' => 'Astr 2m mA7'
        ),
        'norm_counts_Astr_BMP_X6' => array(
            'color' => '#7CAE00',
            'name' => 'Astr BMP X6'
        ),
        'norm_counts_Astr_BMP_X8' => array(
            'color' => '#7CAE00',
            'name' => 'Astr BMP X8'
        ),
        'norm_counts_Astr_BMP_X9' => array(
            'color' => '#7CAE00',
            'name' => 'Astr BMP X9'
        ),
        'norm_counts_Astr_P4_iA3' => array(
            'color' => '#00BFC4',
            'name' => 'Astr P4 iA3'
        ),
        'norm_counts_Astr_P4_iA4' => array(
            'color' => '#00BFC4',
            'name' => 'Astr P4 iA4'
        ),
        'norm_counts_Astr_P4_iA7' => array(
            'color' => '#00BFC4',
            'name' => 'Astr P4 iA7'
        ),
        'norm_counts_NSC_EF_X6' => array(
            'color' => '#C77CFF',
            'name' => 'NSC EF X6'
        ),
        'norm_counts_NSC_EF_X8' => array(
            'color' => '#C77CFF',
            'name' => 'NSC EF X8'
        ),
        'norm_counts_NSC_EF_X9' => array(
            'color' => '#C77CFF',
            'name' => 'NSC EF X9'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Astr_2m_mA10','lg2_avg_Astr_2m_mA5','lg2_avg_Astr_2m_mA7','lg2_avg_Astr_BMP_X6','lg2_avg_Astr_BMP_X8','lg2_avg_Astr_BMP_X9','lg2_avg_Astr_P4_iA3','lg2_avg_Astr_P4_iA4','lg2_avg_Astr_P4_iA7','lg2_avg_NSC_EF_X6','lg2_avg_NSC_EF_X8','lg2_avg_NSC_EF_X9'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_Astr_P4_vs_Astr_2m' => array(
            'name' => 'logFC Astr P4 vs Astr 2m',
            'slider_min' => -12,
            'slider_max' => 21,
            'default_low' => -12,
            'default_high' => 21
        ),
        'contrast_1_padj_Astr_P4_vs_Astr_2m' => array(
            'name' => 'padj Astr P4 vs Astr 2m',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_NSC_EF_vs_Astr_BMP' => array(
            'name' => 'logFC NSC EF vs Astr BMP',
            'slider_min' => -12,
            'slider_max' => 21,
            'default_low' => -12,
            'default_high' => 21
        ),
        'contrast_2_padj_NSC_EF_vs_Astr_BMP' => array(
            'name' => 'padj NSC EF vs Astr BMP',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_NSC_EF_vs_Astr_2m' => array(
            'name' => 'logFC NSC EF vs Astr 2m',
            'slider_min' => -12,
            'slider_max' => 21,
            'default_low' => -12,
            'default_high' => 21
        ),
        'contrast_3_padj_NSC_EF_vs_Astr_2m' => array(
            'name' => 'padj NSC EF vs Astr 2m',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_logFC_Astr_BMP_vs_Astr_2m' => array(
            'name' => 'logFC Astr BMP vs Astr 2m',
            'slider_min' => -12,
            'slider_max' => 21,
            'default_low' => -12,
            'default_high' => 21
        ),
        'contrast_4_padj_Astr_BMP_vs_Astr_2m' => array(
            'name' => 'padj Astr BMP vs Astr 2m',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_Ascl1' => array(
            'name' => 'corCoef Ascl1',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_Dbx2' => array(
            'name' => 'corCoef Dbx2',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_Fezf2' => array(
            'name' => 'corCoef Fezf2',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_Lhx2' => array(
            'name' => 'corCoef Lhx2',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_Ntrk2' => array(
            'name' => 'corCoef Ntrk2',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_Rorb' => array(
            'name' => 'corCoef Rorb',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'RN17020_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_Astr_P4_vs_Astr_2m',
        'default-y' => 'contrast_1_lg10p_Astr_P4_vs_Astr_2m',
        'selection' => array(
            'contrast_1_logFC_Astr_P4_vs_Astr_2m' => array(
                'name' => 'logFC Astr P4 vs Astr 2m'
            ),
            'contrast_2_logFC_NSC_EF_vs_Astr_BMP' => array(
                'name' => 'logFC NSC EF vs Astr BMP'
            ),
            'contrast_3_logFC_NSC_EF_vs_Astr_2m' => array(
                'name' => 'logFC NSC EF vs Astr 2m'
            ),
            'contrast_4_logFC_Astr_BMP_vs_Astr_2m' => array(
                'name' => 'logFC Astr BMP vs Astr 2m'
            ),
            'contrast_1_lg10p_Astr_P4_vs_Astr_2m' => array(
                'name' => 'lg10p Astr P4 vs Astr 2m'
            ),
            'contrast_2_lg10p_NSC_EF_vs_Astr_BMP' => array(
                'name' => 'lg10p NSC EF vs Astr BMP'
            ),
            'contrast_3_lg10p_NSC_EF_vs_Astr_2m' => array(
                'name' => 'lg10p NSC EF vs Astr 2m'
            ),
            'contrast_4_lg10p_Astr_BMP_vs_Astr_2m' => array(
                'name' => 'lg10p Astr BMP vs Astr 2m'
            ),
            'add_venn_X_corCoef_Ascl1' => array(
                'name' => 'corCoef Ascl1'
            ),
            'add_venn_X_corCoef_Dbx2' => array(
                'name' => 'corCoef Dbx2'
            ),
            'add_venn_X_corCoef_Fezf2' => array(
                'name' => 'corCoef Fezf2'
            ),
            'add_venn_X_corCoef_Lhx2' => array(
                'name' => 'corCoef Lhx2'
            ),
            'add_venn_X_corCoef_Ntrk2' => array(
                'name' => 'corCoef Ntrk2'
            ),
            'add_venn_X_corCoef_Rorb' => array(
                'name' => 'corCoef Rorb'
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
            'contrast_1_lg2BaseMean_Astr_P4_vs_Astr_2m' => array(
                'name' => 'lg2BaseMean Astr P4 vs Astr 2m'
            ),
            'contrast_2_lg2BaseMean_NSC_EF_vs_Astr_BMP' => array(
                'name' => 'lg2BaseMean NSC EF vs Astr BMP'
            ),
            'contrast_3_lg2BaseMean_NSC_EF_vs_Astr_2m' => array(
                'name' => 'lg2BaseMean NSC EF vs Astr 2m'
            ),
            'contrast_4_lg2BaseMean_Astr_BMP_vs_Astr_2m' => array(
                'name' => 'lg2BaseMean Astr BMP vs Astr 2m'
            )
        )
    )
//End scatterplot
);
