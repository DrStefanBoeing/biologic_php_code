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
            'cat_table_name' => 'RN18227_with_RF_comb_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'RN18227_with_RF_comb_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Astr_Cor2m_mA5' => array(
            'color' => '#F564E3',
            'name' => 'Astr Cor2m mA5'
        ),
        'norm_counts_Astr_Cor2m_mA7' => array(
            'color' => '#F564E3',
            'name' => 'Astr Cor2m mA7'
        ),
        'norm_counts_Astr_Cor2m_mA10' => array(
            'color' => '#F564E3',
            'name' => 'Astr Cor2m mA10'
        ),
        'norm_counts_Astr_CorP4_iA3' => array(
            'color' => '#619CFF',
            'name' => 'Astr CorP4 iA3'
        ),
        'norm_counts_Astr_CorP4_iA4' => array(
            'color' => '#619CFF',
            'name' => 'Astr CorP4 iA4'
        ),
        'norm_counts_Astr_CorP4_iA7' => array(
            'color' => '#619CFF',
            'name' => 'Astr CorP4 iA7'
        ),
        'norm_counts_Astr_EGFP_X6R1' => array(
            'color' => '#F8766D',
            'name' => 'Astr EGFP X6R1'
        ),
        'norm_counts_Astr_EGFP_X6R2' => array(
            'color' => '#F8766D',
            'name' => 'Astr EGFP X6R2'
        ),
        'norm_counts_Astr_EGFP_X8R1' => array(
            'color' => '#F8766D',
            'name' => 'Astr EGFP X8R1'
        ),
        'norm_counts_Astr_EGFP_X8R2' => array(
            'color' => '#F8766D',
            'name' => 'Astr EGFP X8R2'
        ),
        'norm_counts_Astr_EGFP_X9R1' => array(
            'color' => '#F8766D',
            'name' => 'Astr EGFP X9R1'
        ),
        'norm_counts_Astr_EGFP_X9R2' => array(
            'color' => '#F8766D',
            'name' => 'Astr EGFP X9R2'
        ),
        'norm_counts_Astr_Fezf2_X6' => array(
            'color' => '#00BA38',
            'name' => 'Astr Fezf2 X6'
        ),
        'norm_counts_Astr_Fezf2_X8' => array(
            'color' => '#00BA38',
            'name' => 'Astr Fezf2 X8'
        ),
        'norm_counts_Astr_Fezf2_X9' => array(
            'color' => '#00BA38',
            'name' => 'Astr Fezf2 X9'
        ),
        'norm_counts_Astr_RF_X6' => array(
            'color' => '#00BFC4',
            'name' => 'Astr RF X6'
        ),
        'norm_counts_Astr_RF_X8' => array(
            'color' => '#00BFC4',
            'name' => 'Astr RF X8'
        ),
        'norm_counts_Astr_RF_X9' => array(
            'color' => '#00BFC4',
            'name' => 'Astr RF X9'
        ),
        'norm_counts_Astr_Rorb_X6' => array(
            'color' => '#B79F00',
            'name' => 'Astr Rorb X6'
        ),
        'norm_counts_Astr_Rorb_X8' => array(
            'color' => '#B79F00',
            'name' => 'Astr Rorb X8'
        ),
        'norm_counts_Astr_Rorb_X9' => array(
            'color' => '#B79F00',
            'name' => 'Astr Rorb X9'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Astr_EGFP_X6R1','lg2_avg_Astr_EGFP_X6R2','lg2_avg_Astr_EGFP_X8R1','lg2_avg_Astr_EGFP_X8R2','lg2_avg_Astr_EGFP_X9R1','lg2_avg_Astr_EGFP_X9R2','lg2_avg_Astr_Rorb_X6','lg2_avg_Astr_Rorb_X8','lg2_avg_Astr_Rorb_X9','lg2_avg_Astr_Fezf2_X6','lg2_avg_Astr_Fezf2_X8','lg2_avg_Astr_Fezf2_X9','lg2_avg_Astr_RF_X6','lg2_avg_Astr_RF_X8','lg2_avg_Astr_RF_X9','lg2_avg_Astr_CorP4_iA3','lg2_avg_Astr_CorP4_iA4','lg2_avg_Astr_CorP4_iA7','lg2_avg_Astr_Cor2m_mA5','lg2_avg_Astr_Cor2m_mA7','lg2_avg_Astr_Cor2m_mA10'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_CorP4_vs_Cor2m' => array(
            'name' => 'logFC CorP4 vs Cor2m',
            'slider_min' => -12,
            'slider_max' => 20,
            'default_low' => -12,
            'default_high' => 20
        ),
        'contrast_1_padj_CorP4_vs_Cor2m' => array(
            'name' => 'padj CorP4 vs Cor2m',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_EGFP_vs_Cor2m' => array(
            'name' => 'logFC EGFP vs Cor2m',
            'slider_min' => -12,
            'slider_max' => 20,
            'default_low' => -12,
            'default_high' => 20
        ),
        'contrast_2_padj_EGFP_vs_Cor2m' => array(
            'name' => 'padj EGFP vs Cor2m',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_EGFP_vs_Rorb' => array(
            'name' => 'logFC EGFP vs Rorb',
            'slider_min' => -12,
            'slider_max' => 20,
            'default_low' => -12,
            'default_high' => 20
        ),
        'contrast_3_padj_EGFP_vs_Rorb' => array(
            'name' => 'padj EGFP vs Rorb',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_logFC_EGFP_vs_Fezf2' => array(
            'name' => 'logFC EGFP vs Fezf2',
            'slider_min' => -12,
            'slider_max' => 20,
            'default_low' => -12,
            'default_high' => 20
        ),
        'contrast_4_padj_EGFP_vs_Fezf2' => array(
            'name' => 'padj EGFP vs Fezf2',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_5_logFC_EGFP_vs_RF' => array(
            'name' => 'logFC EGFP vs RF',
            'slider_min' => -12,
            'slider_max' => 20,
            'default_low' => -12,
            'default_high' => 20
        ),
        'contrast_5_padj_EGFP_vs_RF' => array(
            'name' => 'padj EGFP vs RF',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'RN18227_with_RF_comb_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_CorP4_vs_Cor2m',
        'default-y' => 'contrast_1_lg10p_CorP4_vs_Cor2m',
        'selection' => array(
            'contrast_1_logFC_CorP4_vs_Cor2m' => array(
                'name' => 'logFC CorP4 vs Cor2m'
            ),
            'contrast_2_logFC_EGFP_vs_Cor2m' => array(
                'name' => 'logFC EGFP vs Cor2m'
            ),
            'contrast_3_logFC_EGFP_vs_Rorb' => array(
                'name' => 'logFC EGFP vs Rorb'
            ),
            'contrast_4_logFC_EGFP_vs_Fezf2' => array(
                'name' => 'logFC EGFP vs Fezf2'
            ),
            'contrast_5_logFC_EGFP_vs_RF' => array(
                'name' => 'logFC EGFP vs RF'
            ),
            'contrast_1_lg10p_CorP4_vs_Cor2m' => array(
                'name' => 'lg10p CorP4 vs Cor2m'
            ),
            'contrast_2_lg10p_EGFP_vs_Cor2m' => array(
                'name' => 'lg10p EGFP vs Cor2m'
            ),
            'contrast_3_lg10p_EGFP_vs_Rorb' => array(
                'name' => 'lg10p EGFP vs Rorb'
            ),
            'contrast_4_lg10p_EGFP_vs_Fezf2' => array(
                'name' => 'lg10p EGFP vs Fezf2'
            ),
            'contrast_5_lg10p_EGFP_vs_RF' => array(
                'name' => 'lg10p EGFP vs RF'
            )
        )
    )
//End scatterplot
);
