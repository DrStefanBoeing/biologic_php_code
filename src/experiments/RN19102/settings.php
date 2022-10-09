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
            'cat_table_name' => 'RN19102_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'RN19102_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Astr_2m_A10' => array(
            'color' => '#F8766D',
            'name' => 'Astr 2m A10'
        ),
        'norm_counts_Astr_2m_A5' => array(
            'color' => '#F8766D',
            'name' => 'Astr 2m A5'
        ),
        'norm_counts_Astr_2m_A7' => array(
            'color' => '#F8766D',
            'name' => 'Astr 2m A7'
        ),
        'norm_counts_Astr_P4_iA3' => array(
            'color' => '#B79F00',
            'name' => 'Astr P4 iA3'
        ),
        'norm_counts_Astr_P4_iA4' => array(
            'color' => '#B79F00',
            'name' => 'Astr P4 iA4'
        ),
        'norm_counts_Astr_P4_iA7' => array(
            'color' => '#B79F00',
            'name' => 'Astr P4 iA7'
        ),
        'norm_counts_ThreeD_Ctrl_X6' => array(
            'color' => '#00BA38',
            'name' => 'ThreeD Ctrl X6'
        ),
        'norm_counts_ThreeD_Ctrl_X8' => array(
            'color' => '#00BA38',
            'name' => 'ThreeD Ctrl X8'
        ),
        'norm_counts_ThreeD_Ctrl_X9' => array(
            'color' => '#00BA38',
            'name' => 'ThreeD Ctrl X9'
        ),
        'norm_counts_ThreeD_FGF_X6' => array(
            'color' => '#00BFC4',
            'name' => 'ThreeD FGF X6'
        ),
        'norm_counts_ThreeD_FGF_X8' => array(
            'color' => '#00BFC4',
            'name' => 'ThreeD FGF X8'
        ),
        'norm_counts_ThreeD_FGF_X9' => array(
            'color' => '#00BFC4',
            'name' => 'ThreeD FGF X9'
        ),
        'norm_counts_TwoD_Ctrl_X6' => array(
            'color' => '#619CFF',
            'name' => 'TwoD Ctrl X6'
        ),
        'norm_counts_TwoD_Ctrl_X8' => array(
            'color' => '#619CFF',
            'name' => 'TwoD Ctrl X8'
        ),
        'norm_counts_TwoD_Ctrl_X9' => array(
            'color' => '#619CFF',
            'name' => 'TwoD Ctrl X9'
        ),
        'norm_counts_TwoD_FGF_X6' => array(
            'color' => '#F564E3',
            'name' => 'TwoD FGF X6'
        ),
        'norm_counts_TwoD_FGF_X8' => array(
            'color' => '#F564E3',
            'name' => 'TwoD FGF X8'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Astr_bas2D_X6','lg2_avg_Astr_bas2D_X8','lg2_avg_Astr_bas2D_X9','lg2_avg_Astr_FGF2D_X6','lg2_avg_Astr_FGF2D_X8','lg2_avg_Astr_FGF2D_X9','lg2_avg_Astr_bas3D_X6','lg2_avg_Astr_bas3D_X8','lg2_avg_Astr_bas3D_X9','lg2_avg_Astr_FGF3D_X6','lg2_avg_Astr_FGF3D_X8','lg2_avg_Astr_FGF3D_X9','lg2_avg_Astr_CorP4_iA3','lg2_avg_Astr_CorP4_iA4','lg2_avg_Astr_CorP4_iA7','lg2_avg_Astr_Cor2m_mA5','lg2_avg_Astr_Cor2m_mA7','lg2_avg_Astr_Cor2m_mA10'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_Astr_2m_vs_Astr_P4' => array(
            'name' => 'logFC Astr 2m vs Astr P4',
            'slider_min' => -8,
            'slider_max' => 10,
            'default_low' => -8,
            'default_high' => 10
        ),
        'contrast_1_padj_Astr_2m_vs_Astr_P4' => array(
            'name' => 'padj Astr 2m vs Astr P4',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_ThreeD_FGF_vs_ThreeD_Ctrl' => array(
            'name' => 'logFC ThreeD FGF vs ThreeD Ctrl',
            'slider_min' => -7,
            'slider_max' => 7,
            'default_low' => -7,
            'default_high' => 7
        ),
        'contrast_2_padj_ThreeD_FGF_vs_ThreeD_Ctrl' => array(
            'name' => 'padj ThreeD FGF vs ThreeD Ctrl',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_TwoD_FGF_vs_TwoD_Ctrl' => array(
            'name' => 'logFC TwoD FGF vs TwoD Ctrl',
            'slider_min' => -8,
            'slider_max' => 6,
            'default_low' => -8,
            'default_high' => 6
        ),
        'contrast_3_padj_TwoD_FGF_vs_TwoD_Ctrl' => array(
            'name' => 'padj TwoD FGF vs TwoD Ctrl',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_L_lg10p_LRT_batch' => array(
            'name' => 'lg10p LRT batch',
            'slider_min' => 0,
            'slider_max' => 274,
            'default_low' => 0,
            'default_high' => 274
        ),
        'contrast_L_lg10p_LRT_cellType' => array(
            'name' => 'lg10p LRT cellType',
            'slider_min' => 0,
            'slider_max' => 309,
            'default_low' => 0,
            'default_high' => 309
        ),
        'contrast_L_lg10p_LRT_Treatment' => array(
            'name' => 'lg10p LRT Treatment',
            'slider_min' => 0,
            'slider_max' => 30,
            'default_low' => 0,
            'default_high' => 30
        ),
        'contrast_L_lg10p_LRT_inVitroInVivo' => array(
            'name' => 'lg10p LRT inVitroInVivo',
            'slider_min' => 0,
            'slider_max' => 274,
            'default_low' => 0,
            'default_high' => 274
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'RN19102_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_Astr_2m_vs_Astr_P4',
        'default-y' => 'contrast_1_lg10p_Astr_2m_vs_Astr_P4',
        'selection' => array(
            'contrast_1_logFC_Astr_2m_vs_Astr_P4' => array(
                'name' => 'logFC Astr 2m vs Astr P4'
            ),
            'contrast_2_logFC_ThreeD_FGF_vs_ThreeD_Ctrl' => array(
                'name' => 'logFC ThreeD FGF vs ThreeD Ctrl'
            ),
            'contrast_3_logFC_TwoD_FGF_vs_TwoD_Ctrl' => array(
                'name' => 'logFC TwoD FGF vs TwoD Ctrl'
            ),
            'contrast_1_lg10p_Astr_2m_vs_Astr_P4' => array(
                'name' => 'lg10p Astr 2m vs Astr P4'
            ),
            'contrast_2_lg10p_ThreeD_FGF_vs_ThreeD_Ctrl' => array(
                'name' => 'lg10p ThreeD FGF vs ThreeD Ctrl'
            ),
            'contrast_3_lg10p_TwoD_FGF_vs_TwoD_Ctrl' => array(
                'name' => 'lg10p TwoD FGF vs TwoD Ctrl'
            ),
            'contrast_L_lg10p_LRT_batch' => array(
                'name' => 'lg10p LRT batch'
            ),
            'contrast_L_lg10p_LRT_cellType' => array(
                'name' => 'lg10p LRT cellType'
            ),
            'contrast_L_lg10p_LRT_Treatment' => array(
                'name' => 'lg10p LRT Treatment'
            ),
            'contrast_L_lg10p_LRT_inVitroInVivo' => array(
                'name' => 'lg10p LRT inVitroInVivo'
            ),
            'contrast_1_lg2BaseMean_Astr_2m_vs_Astr_P4' => array(
                'name' => 'lg2BaseMean Astr 2m vs Astr P4'
            ),
            'contrast_2_lg2BaseMean_ThreeD_FGF_vs_ThreeD_Ctrl' => array(
                'name' => 'lg2BaseMean ThreeD FGF vs ThreeD Ctrl'
            ),
            'contrast_3_lg2BaseMean_TwoD_FGF_vs_TwoD_Ctrl' => array(
                'name' => 'lg2BaseMean TwoD FGF vs TwoD Ctrl'
            ),
            'contrast_L_lg2BaseMean_LRT_batch' => array(
                'name' => 'lg2BaseMean LRT batch'
            ),
            'contrast_L_lg2BaseMean_LRT_cellType' => array(
                'name' => 'lg2BaseMean LRT cellType'
            ),
            'contrast_L_lg2BaseMean_LRT_Treatment' => array(
                'name' => 'lg2BaseMean LRT Treatment'
            ),
            'contrast_L_lg2BaseMean_LRT_inVitroInVivo' => array(
                'name' => 'lg2BaseMean LRT inVitroInVivo'
            )
        )
    )
//End scatterplot
);
