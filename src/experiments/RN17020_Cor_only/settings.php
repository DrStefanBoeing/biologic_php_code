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
            'cat_table_name' => 'RN17020_Cor_only_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'RN17020_Cor_only_rna_seq_table',
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
            'color' => '#F8766D',
            'name' => 'Astr CorP4 iA3'
        ),
        'norm_counts_Astr_CorP4_iA4' => array(
            'color' => '#F8766D',
            'name' => 'Astr CorP4 iA4'
        ),
        'norm_counts_Astr_CorP4_iA7' => array(
            'color' => '#F8766D',
            'name' => 'Astr CorP4 iA7'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Astr_CorP4_iA3','lg2_avg_Astr_CorP4_iA4','lg2_avg_Astr_CorP4_iA7','lg2_avg_Astr_Cor2m_mA5','lg2_avg_Astr_Cor2m_mA7','lg2_avg_Astr_Cor2m_mA10'),

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
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'RN17020_Cor_only_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_CorP4_vs_Cor2m',
        'default-y' => 'contrast_1_lg10p_CorP4_vs_Cor2m',
        'selection' => array(
            'contrast_1_logFC_CorP4_vs_Cor2m' => array(
                'name' => 'logFC CorP4 vs Cor2m'
            ),
            'contrast_1_lg10p_CorP4_vs_Cor2m' => array(
                'name' => 'lg10p CorP4 vs Cor2m'
            )
        )
    )
//End scatterplot
);
