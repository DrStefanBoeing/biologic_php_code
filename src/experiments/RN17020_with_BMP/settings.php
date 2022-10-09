<?php

return array(
    'public_access' => TRUE, 
    'lab' => array(
        'name' => 'Article DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'fgl_data',
    'data_db' => array(
            'cat_table_name' => 'RN17020_with_BMP_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'RN17020_with_BMP_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Astr_BMP_X6' => array(
            'color' => '#F8766D',
            'name' => 'Astr BMP X6'
        ),
        'norm_counts_Astr_BMP_X8' => array(
            'color' => '#F8766D',
            'name' => 'Astr BMP X8'
        ),
        'norm_counts_Astr_BMP_X9' => array(
            'color' => '#F8766D',
            'name' => 'Astr BMP X9'
        ),
        'norm_counts_Astr_Cor2m_mA5' => array(
            'color' => '#00BFC4',
            'name' => 'Astr Cor2m mA5'
        ),
        'norm_counts_Astr_Cor2m_mA7' => array(
            'color' => '#00BFC4',
            'name' => 'Astr Cor2m mA7'
        ),
        'norm_counts_Astr_Cor2m_mA10' => array(
            'color' => '#00BFC4',
            'name' => 'Astr Cor2m mA10'
        ),
        'norm_counts_Astr_CorP4_iA3' => array(
            'color' => '#7CAE00',
            'name' => 'Astr CorP4 iA3'
        ),
        'norm_counts_Astr_CorP4_iA4' => array(
            'color' => '#7CAE00',
            'name' => 'Astr CorP4 iA4'
        ),
        'norm_counts_Astr_CorP4_iA7' => array(
            'color' => '#7CAE00',
            'name' => 'Astr CorP4 iA7'
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
        'experiments' => array('lg2_avg_NSC_EF_X6','lg2_avg_NSC_EF_X8','lg2_avg_NSC_EF_X9','lg2_avg_Astr_BMP_X6','lg2_avg_Astr_BMP_X8','lg2_avg_Astr_BMP_X9','lg2_avg_Astr_CorP4_iA3','lg2_avg_Astr_CorP4_iA4','lg2_avg_Astr_CorP4_iA7','lg2_avg_Astr_Cor2m_mA5','lg2_avg_Astr_Cor2m_mA7','lg2_avg_Astr_Cor2m_mA10'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_CorP4_vs_Cor2m' => array(
            'name' => 'logFC CorP4 vs Cor2m',
            'slider_min' => -12,
            'slider_max' => 21,
            'default_low' => -12,
            'default_high' => 21
        ),
        'contrast_1_padj_CorP4_vs_Cor2m' => array(
            'name' => 'padj CorP4 vs Cor2m',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_EF_vs_BMP' => array(
            'name' => 'logFC EF vs BMP',
            'slider_min' => -12,
            'slider_max' => 21,
            'default_low' => -12,
            'default_high' => 21
        ),
        'contrast_2_padj_EF_vs_BMP' => array(
            'name' => 'padj EF vs BMP',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_EF_vs_Cor2m' => array(
            'name' => 'logFC EF vs Cor2m',
            'slider_min' => -12,
            'slider_max' => 21,
            'default_low' => -12,
            'default_high' => 21
        ),
        'contrast_3_padj_EF_vs_Cor2m' => array(
            'name' => 'padj EF vs Cor2m',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_logFC_BMP_vs_Cor2m' => array(
            'name' => 'logFC BMP vs Cor2m',
            'slider_min' => -12,
            'slider_max' => 21,
            'default_low' => -12,
            'default_high' => 21
        ),
        'contrast_4_padj_BMP_vs_Cor2m' => array(
            'name' => 'padj BMP vs Cor2m',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'RN17020_with_BMP_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_CorP4_vs_Cor2m',
        'default-y' => 'contrast_1_lg10p_CorP4_vs_Cor2m',
        'selection' => array(
            'contrast_1_logFC_CorP4_vs_Cor2m' => array(
                'name' => 'logFC CorP4 vs Cor2m'
            ),
            'contrast_2_logFC_EF_vs_BMP' => array(
                'name' => 'logFC EF vs BMP'
            ),
            'contrast_3_logFC_EF_vs_Cor2m' => array(
                'name' => 'logFC EF vs Cor2m'
            ),
            'contrast_4_logFC_BMP_vs_Cor2m' => array(
                'name' => 'logFC BMP vs Cor2m'
            ),
            'contrast_1_lg10p_CorP4_vs_Cor2m' => array(
                'name' => 'lg10p CorP4 vs Cor2m'
            ),
            'contrast_2_lg10p_EF_vs_BMP' => array(
                'name' => 'lg10p EF vs BMP'
            ),
            'contrast_3_lg10p_EF_vs_Cor2m' => array(
                'name' => 'lg10p EF vs Cor2m'
            ),
            'contrast_4_lg10p_BMP_vs_Cor2m' => array(
                'name' => 'lg10p BMP vs Cor2m'
            )
        )
    )
//End scatterplot
);
