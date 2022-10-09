<?php

return array(
    'public_access' => FALSE,
    'lab' => array(
        'name' => 'Gould DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'agl_data',
    'data_db' => array(
            'cat_table_name' => 'RN21220test_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'RN21220test_bulk_rna_seq_table',
    'primary_gene_symbol' => 'Dmel_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'TPM-values for all Samples',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Ctrl_0h_1' => array(
            'color' => '#F8766D',
            'name' => 'Ctrl 0h 1'
        ),
        'norm_counts_Ctrl_0h_2' => array(
            'color' => '#F8766D',
            'name' => 'Ctrl 0h 2'
        ),
        'norm_counts_Ctrl_0h_3' => array(
            'color' => '#F8766D',
            'name' => 'Ctrl 0h 3'
        ),
        'norm_counts_Ctrl_24h_2' => array(
            'color' => '#EA8331',
            'name' => 'Ctrl 24h 2'
        ),
        'norm_counts_Ctrl_24h_1' => array(
            'color' => '#EA8331',
            'name' => 'Ctrl 24h 1'
        ),
        'norm_counts_Ctrl_24h_3' => array(
            'color' => '#EA8331',
            'name' => 'Ctrl 24h 3'
        ),
        'norm_counts_Ctrl_2h_3' => array(
            'color' => '#D89000',
            'name' => 'Ctrl 2h 3'
        ),
        'norm_counts_Ctrl_2h_1' => array(
            'color' => '#D89000',
            'name' => 'Ctrl 2h 1'
        ),
        'norm_counts_Ctrl_2h_2' => array(
            'color' => '#D89000',
            'name' => 'Ctrl 2h 2'
        ),
        'norm_counts_Ctrl_6h_2' => array(
            'color' => '#C09B00',
            'name' => 'Ctrl 6h 2'
        ),
        'norm_counts_Ctrl_6h_1' => array(
            'color' => '#C09B00',
            'name' => 'Ctrl 6h 1'
        ),
        'norm_counts_Ctrl_6h_3' => array(
            'color' => '#C09B00',
            'name' => 'Ctrl 6h 3'
        ),
        'norm_counts_HighFatDiet_0h_1' => array(
            'color' => '#A3A500',
            'name' => 'HighFatDiet 0h 1'
        ),
        'norm_counts_HighFatDiet_0h_3' => array(
            'color' => '#A3A500',
            'name' => 'HighFatDiet 0h 3'
        ),
        'norm_counts_HighFatDiet_0h_2' => array(
            'color' => '#A3A500',
            'name' => 'HighFatDiet 0h 2'
        ),
        'norm_counts_HighFatDiet_24h_1' => array(
            'color' => '#7CAE00',
            'name' => 'HighFatDiet 24h 1'
        ),
        'norm_counts_HighFatDiet_24h_3' => array(
            'color' => '#7CAE00',
            'name' => 'HighFatDiet 24h 3'
        ),
        'norm_counts_HighFatDiet_24h_2' => array(
            'color' => '#7CAE00',
            'name' => 'HighFatDiet 24h 2'
        ),
        'norm_counts_HighFatDiet_2h_2' => array(
            'color' => '#39B600',
            'name' => 'HighFatDiet 2h 2'
        ),
        'norm_counts_HighFatDiet_2h_3' => array(
            'color' => '#39B600',
            'name' => 'HighFatDiet 2h 3'
        ),
        'norm_counts_HighFatDiet_2h_1' => array(
            'color' => '#39B600',
            'name' => 'HighFatDiet 2h 1'
        ),
        'norm_counts_HighFatDiet_6h_1' => array(
            'color' => '#00BB4E',
            'name' => 'HighFatDiet 6h 1'
        ),
        'norm_counts_HighFatDiet_6h_2' => array(
            'color' => '#00BB4E',
            'name' => 'HighFatDiet 6h 2'
        ),
        'norm_counts_HighFatDiet_6h_3' => array(
            'color' => '#00BB4E',
            'name' => 'HighFatDiet 6h 3'
        ),
        'norm_counts_Hypoxia_0h_1' => array(
            'color' => '#00BF7D',
            'name' => 'Hypoxia 0h 1'
        ),
        'norm_counts_Hypoxia_0h_2' => array(
            'color' => '#00BF7D',
            'name' => 'Hypoxia 0h 2'
        ),
        'norm_counts_Hypoxia_0h_3' => array(
            'color' => '#00BF7D',
            'name' => 'Hypoxia 0h 3'
        ),
        'norm_counts_Hypoxia_24h_1' => array(
            'color' => '#00C1A3',
            'name' => 'Hypoxia 24h 1'
        ),
        'norm_counts_Hypoxia_24h_2' => array(
            'color' => '#00C1A3',
            'name' => 'Hypoxia 24h 2'
        ),
        'norm_counts_Hypoxia_24h_3' => array(
            'color' => '#00C1A3',
            'name' => 'Hypoxia 24h 3'
        ),
        'norm_counts_Hypoxia_2h_3' => array(
            'color' => '#00BFC4',
            'name' => 'Hypoxia 2h 3'
        ),
        'norm_counts_Hypoxia_2h_2' => array(
            'color' => '#00BFC4',
            'name' => 'Hypoxia 2h 2'
        ),
        'norm_counts_Hypoxia_2h_1' => array(
            'color' => '#00BFC4',
            'name' => 'Hypoxia 2h 1'
        ),
        'norm_counts_Hypoxia_6h_3' => array(
            'color' => '#00BAE0',
            'name' => 'Hypoxia 6h 3'
        ),
        'norm_counts_Hypoxia_6h_1' => array(
            'color' => '#00BAE0',
            'name' => 'Hypoxia 6h 1'
        ),
        'norm_counts_Hypoxia_6h_2' => array(
            'color' => '#00BAE0',
            'name' => 'Hypoxia 6h 2'
        ),
        'norm_counts_Irradiation_0h_3' => array(
            'color' => '#00B0F6',
            'name' => 'Irradiation 0h 3'
        ),
        'norm_counts_Irradiation_0h_2' => array(
            'color' => '#00B0F6',
            'name' => 'Irradiation 0h 2'
        ),
        'norm_counts_Irradiation_0h_1' => array(
            'color' => '#00B0F6',
            'name' => 'Irradiation 0h 1'
        ),
        'norm_counts_Irradiation_24h_1' => array(
            'color' => '#35A2FF',
            'name' => 'Irradiation 24h 1'
        ),
        'norm_counts_Irradiation_24h_2' => array(
            'color' => '#35A2FF',
            'name' => 'Irradiation 24h 2'
        ),
        'norm_counts_Irradiation_24h_3' => array(
            'color' => '#35A2FF',
            'name' => 'Irradiation 24h 3'
        ),
        'norm_counts_Irradiation_2h_3' => array(
            'color' => '#9590FF',
            'name' => 'Irradiation 2h 3'
        ),
        'norm_counts_Irradiation_2h_2' => array(
            'color' => '#9590FF',
            'name' => 'Irradiation 2h 2'
        ),
        'norm_counts_Irradiation_2h_1' => array(
            'color' => '#9590FF',
            'name' => 'Irradiation 2h 1'
        ),
        'norm_counts_Irradiation_6h_1' => array(
            'color' => '#C77CFF',
            'name' => 'Irradiation 6h 1'
        ),
        'norm_counts_Irradiation_6h_2' => array(
            'color' => '#C77CFF',
            'name' => 'Irradiation 6h 2'
        ),
        'norm_counts_Irradiation_6h_3' => array(
            'color' => '#C77CFF',
            'name' => 'Irradiation 6h 3'
        ),
        'norm_counts_NR_0h_1' => array(
            'color' => '#E76BF3',
            'name' => 'NR 0h 1'
        ),
        'norm_counts_NR_0h_3' => array(
            'color' => '#E76BF3',
            'name' => 'NR 0h 3'
        ),
        'norm_counts_NR_0h_2' => array(
            'color' => '#E76BF3',
            'name' => 'NR 0h 2'
        ),
        'norm_counts_NR_24h_3' => array(
            'color' => '#FA62DB',
            'name' => 'NR 24h 3'
        ),
        'norm_counts_NR_24h_1' => array(
            'color' => '#FA62DB',
            'name' => 'NR 24h 1'
        ),
        'norm_counts_NR_24h_2' => array(
            'color' => '#FA62DB',
            'name' => 'NR 24h 2'
        ),
        'norm_counts_NR_2h_2' => array(
            'color' => '#FF62BC',
            'name' => 'NR 2h 2'
        ),
        'norm_counts_NR_2h_1' => array(
            'color' => '#FF62BC',
            'name' => 'NR 2h 1'
        ),
        'norm_counts_NR_2h_3' => array(
            'color' => '#FF62BC',
            'name' => 'NR 2h 3'
        ),
        'norm_counts_NR_6h_2' => array(
            'color' => '#FF6A98',
            'name' => 'NR 6h 2'
        ),
        'norm_counts_NR_6h_3' => array(
            'color' => '#FF6A98',
            'name' => 'NR 6h 3'
        ),
        'norm_counts_NR_6h_1' => array(
            'color' => '#FF6A98',
            'name' => 'NR 6h 1'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM-values for all Samples',
        'sidelabel' => 'TPM-values for all Samples'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Ctrl_0h_1','lg2_avg_Ctrl_0h_2','lg2_avg_Ctrl_0h_3','lg2_avg_Ctrl_24h_2','lg2_avg_Ctrl_24h_1','lg2_avg_Ctrl_24h_3','lg2_avg_Ctrl_2h_3','lg2_avg_Ctrl_2h_1','lg2_avg_Ctrl_2h_2','lg2_avg_Ctrl_6h_2','lg2_avg_Ctrl_6h_1','lg2_avg_Ctrl_6h_3','lg2_avg_HighFatDiet_0h_1','lg2_avg_HighFatDiet_0h_3','lg2_avg_HighFatDiet_0h_2','lg2_avg_HighFatDiet_24h_1','lg2_avg_HighFatDiet_24h_3','lg2_avg_HighFatDiet_24h_2','lg2_avg_HighFatDiet_2h_2','lg2_avg_HighFatDiet_2h_3','lg2_avg_HighFatDiet_2h_1','lg2_avg_HighFatDiet_6h_1','lg2_avg_HighFatDiet_6h_2','lg2_avg_HighFatDiet_6h_3','lg2_avg_Hypoxia_0h_1','lg2_avg_Hypoxia_0h_2','lg2_avg_Hypoxia_0h_3','lg2_avg_Hypoxia_24h_1','lg2_avg_Hypoxia_24h_2','lg2_avg_Hypoxia_24h_3','lg2_avg_Hypoxia_2h_3','lg2_avg_Hypoxia_2h_2','lg2_avg_Hypoxia_2h_1','lg2_avg_Hypoxia_6h_3','lg2_avg_Hypoxia_6h_1','lg2_avg_Hypoxia_6h_2','lg2_avg_Irradiation_0h_3','lg2_avg_Irradiation_0h_2','lg2_avg_Irradiation_0h_1','lg2_avg_Irradiation_24h_1','lg2_avg_Irradiation_24h_2','lg2_avg_Irradiation_24h_3','lg2_avg_Irradiation_2h_3','lg2_avg_Irradiation_2h_2','lg2_avg_Irradiation_2h_1','lg2_avg_Irradiation_6h_1','lg2_avg_Irradiation_6h_2','lg2_avg_Irradiation_6h_3','lg2_avg_NR_0h_1','lg2_avg_NR_0h_3','lg2_avg_NR_0h_2','lg2_avg_NR_24h_3','lg2_avg_NR_24h_1','lg2_avg_NR_24h_2','lg2_avg_NR_2h_2','lg2_avg_NR_2h_1','lg2_avg_NR_2h_3','lg2_avg_NR_6h_2','lg2_avg_NR_6h_3','lg2_avg_NR_6h_1'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_D1_logFC_NRC_24h_vs_CC_24h' => array(
            'name' => '1 logFC NRC 24h vs CC 24h',
            'slider_min' => -6,
            'slider_max' => 32,
            'default_low' => -6,
            'default_high' => 32
        ),
        'contrast_D1_padj_NRC_24h_vs_CC_24h' => array(
            'name' => '1 padj NRC 24h vs CC 24h',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_D2_logFC_NRC_2h_vs_CC_2h' => array(
            'name' => '2 logFC NRC 2h vs CC 2h',
            'slider_min' => -6,
            'slider_max' => 26,
            'default_low' => -6,
            'default_high' => 26
        ),
        'contrast_D2_padj_NRC_2h_vs_CC_2h' => array(
            'name' => '2 padj NRC 2h vs CC 2h',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_D3_logFC_NRC_6h_vs_CC_6h' => array(
            'name' => '3 logFC NRC 6h vs CC 6h',
            'slider_min' => -29,
            'slider_max' => 6,
            'default_low' => -29,
            'default_high' => 6
        ),
        'contrast_D3_padj_NRC_6h_vs_CC_6h' => array(
            'name' => '3 padj NRC 6h vs CC 6h',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_D4_logFC_NRH_24h_vs_CC_24h' => array(
            'name' => '4 logFC NRH 24h vs CC 24h',
            'slider_min' => -20,
            'slider_max' => 27,
            'default_low' => -20,
            'default_high' => 27
        ),
        'contrast_D4_padj_NRH_24h_vs_CC_24h' => array(
            'name' => '4 padj NRH 24h vs CC 24h',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_D5_logFC_NRH_24h_vs_NRC_24h' => array(
            'name' => '5 logFC NRH 24h vs NRC 24h',
            'slider_min' => -51,
            'slider_max' => 7,
            'default_low' => -51,
            'default_high' => 7
        ),
        'contrast_D5_padj_NRH_24h_vs_NRC_24h' => array(
            'name' => '5 padj NRH 24h vs NRC 24h',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_D6_logFC_NRH_2h_vs_CC_2h' => array(
            'name' => '6 logFC NRH 2h vs CC 2h',
            'slider_min' => -16,
            'slider_max' => 13,
            'default_low' => -16,
            'default_high' => 13
        ),
        'contrast_D6_padj_NRH_2h_vs_CC_2h' => array(
            'name' => '6 padj NRH 2h vs CC 2h',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_D7_logFC_NRH_2h_vs_NRC_2h' => array(
            'name' => '7 logFC NRH 2h vs NRC 2h',
            'slider_min' => -33,
            'slider_max' => 7,
            'default_low' => -33,
            'default_high' => 7
        ),
        'contrast_D7_padj_NRH_2h_vs_NRC_2h' => array(
            'name' => '7 padj NRH 2h vs NRC 2h',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_D8_logFC_NRH_6h_vs_CC_6h' => array(
            'name' => '8 logFC NRH 6h vs CC 6h',
            'slider_min' => -20,
            'slider_max' => 25,
            'default_low' => -20,
            'default_high' => 25
        ),
        'contrast_D8_padj_NRH_6h_vs_CC_6h' => array(
            'name' => '8 padj NRH 6h vs CC 6h',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_D9_logFC_NRH_6h_vs_NRC_6h' => array(
            'name' => '9 logFC NRH 6h vs NRC 6h',
            'slider_min' => -16,
            'slider_max' => 20,
            'default_low' => -16,
            'default_high' => 20
        ),
        'contrast_D9_padj_NRH_6h_vs_NRC_6h' => array(
            'name' => '9 padj NRH 6h vs NRC 6h',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_L_lg10p_LRT_all' => array(
            'name' => 'lg10p LRT all',
            'slider_min' => 0,
            'slider_max' => 322,
            'default_low' => 0,
            'default_high' => 322
        ),
        'contrast_L_lg10p_LRT_CC' => array(
            'name' => 'lg10p LRT CC',
            'slider_min' => 0,
            'slider_max' => 293,
            'default_low' => 0,
            'default_high' => 293
        ),
        'contrast_L_lg10p_LRT_NRC' => array(
            'name' => 'lg10p LRT NRC',
            'slider_min' => 0,
            'slider_max' => 261,
            'default_low' => 0,
            'default_high' => 261
        ),
        'contrast_L_lg10p_LRT_NRH' => array(
            'name' => 'lg10p LRT NRH',
            'slider_min' => 0,
            'slider_max' => 183,
            'default_low' => 0,
            'default_high' => 183
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'RN21220test_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_D1_lg10p_NRC_24h_vs_CC_24h',
        'default-y' => 'contrast_D1_lg2BaseMean_NRC_24h_vs_CC_24h',
        'selection' => array(
            'contrast_D1_logFC_NRC_24h_vs_CC_24h' => array(
                'name' => '1 logFC NRC 24h vs CC 24h'
            ),
            'contrast_D2_logFC_NRC_2h_vs_CC_2h' => array(
                'name' => '2 logFC NRC 2h vs CC 2h'
            ),
            'contrast_D3_logFC_NRC_6h_vs_CC_6h' => array(
                'name' => '3 logFC NRC 6h vs CC 6h'
            ),
            'contrast_D4_logFC_NRH_24h_vs_CC_24h' => array(
                'name' => '4 logFC NRH 24h vs CC 24h'
            ),
            'contrast_D5_logFC_NRH_24h_vs_NRC_24h' => array(
                'name' => '5 logFC NRH 24h vs NRC 24h'
            ),
            'contrast_D6_logFC_NRH_2h_vs_CC_2h' => array(
                'name' => '6 logFC NRH 2h vs CC 2h'
            ),
            'contrast_D7_logFC_NRH_2h_vs_NRC_2h' => array(
                'name' => '7 logFC NRH 2h vs NRC 2h'
            ),
            'contrast_D8_logFC_NRH_6h_vs_CC_6h' => array(
                'name' => '8 logFC NRH 6h vs CC 6h'
            ),
            'contrast_D9_logFC_NRH_6h_vs_NRC_6h' => array(
                'name' => '9 logFC NRH 6h vs NRC 6h'
            ),
            'contrast_D1_lg10p_NRC_24h_vs_CC_24h' => array(
                'name' => '1 lg10p NRC 24h vs CC 24h'
            ),
            'contrast_D2_lg10p_NRC_2h_vs_CC_2h' => array(
                'name' => '2 lg10p NRC 2h vs CC 2h'
            ),
            'contrast_D3_lg10p_NRC_6h_vs_CC_6h' => array(
                'name' => '3 lg10p NRC 6h vs CC 6h'
            ),
            'contrast_D4_lg10p_NRH_24h_vs_CC_24h' => array(
                'name' => '4 lg10p NRH 24h vs CC 24h'
            ),
            'contrast_D5_lg10p_NRH_24h_vs_NRC_24h' => array(
                'name' => '5 lg10p NRH 24h vs NRC 24h'
            ),
            'contrast_D6_lg10p_NRH_2h_vs_CC_2h' => array(
                'name' => '6 lg10p NRH 2h vs CC 2h'
            ),
            'contrast_D7_lg10p_NRH_2h_vs_NRC_2h' => array(
                'name' => '7 lg10p NRH 2h vs NRC 2h'
            ),
            'contrast_D8_lg10p_NRH_6h_vs_CC_6h' => array(
                'name' => '8 lg10p NRH 6h vs CC 6h'
            ),
            'contrast_D9_lg10p_NRH_6h_vs_NRC_6h' => array(
                'name' => '9 lg10p NRH 6h vs NRC 6h'
            ),
            'contrast_L_lg10p_LRT_all' => array(
                'name' => 'lg10p LRT all'
            ),
            'contrast_L_lg10p_LRT_CC' => array(
                'name' => 'lg10p LRT CC'
            ),
            'contrast_L_lg10p_LRT_NRC' => array(
                'name' => 'lg10p LRT NRC'
            ),
            'contrast_L_lg10p_LRT_NRH' => array(
                'name' => 'lg10p LRT NRH'
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
            'contrast_D1_lg2BaseMean_NRC_24h_vs_CC_24h' => array(
                'name' => '1 lg2BaseMean NRC 24h vs CC 24h'
            ),
            'contrast_D2_lg2BaseMean_NRC_2h_vs_CC_2h' => array(
                'name' => '2 lg2BaseMean NRC 2h vs CC 2h'
            ),
            'contrast_D3_lg2BaseMean_NRC_6h_vs_CC_6h' => array(
                'name' => '3 lg2BaseMean NRC 6h vs CC 6h'
            ),
            'contrast_D4_lg2BaseMean_NRH_24h_vs_CC_24h' => array(
                'name' => '4 lg2BaseMean NRH 24h vs CC 24h'
            ),
            'contrast_D5_lg2BaseMean_NRH_24h_vs_NRC_24h' => array(
                'name' => '5 lg2BaseMean NRH 24h vs NRC 24h'
            ),
            'contrast_D6_lg2BaseMean_NRH_2h_vs_CC_2h' => array(
                'name' => '6 lg2BaseMean NRH 2h vs CC 2h'
            ),
            'contrast_D7_lg2BaseMean_NRH_2h_vs_NRC_2h' => array(
                'name' => '7 lg2BaseMean NRH 2h vs NRC 2h'
            ),
            'contrast_D8_lg2BaseMean_NRH_6h_vs_CC_6h' => array(
                'name' => '8 lg2BaseMean NRH 6h vs CC 6h'
            ),
            'contrast_D9_lg2BaseMean_NRH_6h_vs_NRC_6h' => array(
                'name' => '9 lg2BaseMean NRH 6h vs NRC 6h'
            ),
            'contrast_L_lg2BaseMean_LRT_all' => array(
                'name' => 'lg2BaseMean LRT all'
            ),
            'contrast_L_lg2BaseMean_LRT_CC' => array(
                'name' => 'lg2BaseMean LRT CC'
            ),
            'contrast_L_lg2BaseMean_LRT_NRC' => array(
                'name' => 'lg2BaseMean LRT NRC'
            ),
            'contrast_L_lg2BaseMean_LRT_NRH' => array(
                'name' => 'lg2BaseMean LRT NRH'
            )
        )
    )
//End scatterplot
);
