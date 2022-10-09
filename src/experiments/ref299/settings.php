<?php

return array(
    'lab' => array(
        'name' => 'Reference DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'ref_data',
    'data_db' => array(
            'cat_table_name' => 'ref299_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'p299_rna_seq_table',
    'primary_gene_symbol' => 'hgnc_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'lg2(avg TPM)'
    ),

    'samples' => array(
        'norm_counts_SkinNormal_Unt_103_TPM' => array(
            'color' => '#8DD3C7',
            'name' => 'SkinNormal Unt 103 TPM'
        ),
        'norm_counts_SkinNormal_Unt_108_TPM' => array(
            'color' => '#A6DCC2',
            'name' => 'SkinNormal Unt 108 TPM'
        ),
        'norm_counts_SkinNormal_Unt_10_TPM' => array(
            'color' => '#BFE6BE',
            'name' => 'SkinNormal Unt 10 TPM'
        ),
        'norm_counts_SkinNormal_Unt_11_TPM' => array(
            'color' => '#D8F0B9',
            'name' => 'SkinNormal Unt 11 TPM'
        ),
        'norm_counts_SkinNormal_Unt_12_TPM' => array(
            'color' => '#F1F9B5',
            'name' => 'SkinNormal Unt 12 TPM'
        ),
        'norm_counts_SkinNormal_Unt_13_TPM' => array(
            'color' => '#F8F8B6',
            'name' => 'SkinNormal Unt 13 TPM'
        ),
        'norm_counts_SkinNormal_Unt_15_TPM' => array(
            'color' => '#EAE8BF',
            'name' => 'SkinNormal Unt 15 TPM'
        ),
        'norm_counts_SkinNormal_Unt_2_TPM' => array(
            'color' => '#DBD9C8',
            'name' => 'SkinNormal Unt 2 TPM'
        ),
        'norm_counts_SkinNormal_Unt_32_TPM' => array(
            'color' => '#CDCAD0',
            'name' => 'SkinNormal Unt 32 TPM'
        ),
        'norm_counts_SkinNormal_Unt_3_TPM' => array(
            'color' => '#BFBBD9',
            'name' => 'SkinNormal Unt 3 TPM'
        ),
        'norm_counts_SkinNormal_Unt_4_TPM' => array(
            'color' => '#CAAEC5',
            'name' => 'SkinNormal Unt 4 TPM'
        ),
        'norm_counts_SkinNormal_Unt_5_TPM' => array(
            'color' => '#D7A1AE',
            'name' => 'SkinNormal Unt 5 TPM'
        ),
        'norm_counts_SkinNormal_Unt_6_TPM' => array(
            'color' => '#E59497',
            'name' => 'SkinNormal Unt 6 TPM'
        ),
        'norm_counts_SkinNormal_Unt_8_TPM' => array(
            'color' => '#F28880',
            'name' => 'SkinNormal Unt 8 TPM'
        ),
        'norm_counts_SkinNormal_Unt_9_TPM' => array(
            'color' => '#F18379',
            'name' => 'SkinNormal Unt 9 TPM'
        ),
        'norm_counts_SkinPsoriasis_adalimuMab_14_TPM' => array(
            'color' => '#D68E8F',
            'name' => 'SkinPsoriasis adalimuMab 14 TPM'
        ),
        'norm_counts_SkinPsoriasis_adalimuMab_15_TPM' => array(
            'color' => '#BB99A4',
            'name' => 'SkinPsoriasis adalimuMab 15 TPM'
        ),
        'norm_counts_SkinPsoriasis_adalimuMab_17_TPM' => array(
            'color' => '#9FA4B9',
            'name' => 'SkinPsoriasis adalimuMab 17 TPM'
        ),
        'norm_counts_SkinPsoriasis_adalimuMab_18_TPM' => array(
            'color' => '#84AFCF',
            'name' => 'SkinPsoriasis adalimuMab 18 TPM'
        ),
        'norm_counts_SkinPsoriasis_adalimuMab_19_TPM' => array(
            'color' => '#96B1BE',
            'name' => 'SkinPsoriasis adalimuMab 19 TPM'
        ),
        'norm_counts_SkinPsoriasis_adalimuMab_1_TPM' => array(
            'color' => '#B2B2A5',
            'name' => 'SkinPsoriasis adalimuMab 1 TPM'
        ),
        'norm_counts_SkinPsoriasis_adalimuMab_20_TPM' => array(
            'color' => '#CDB28C',
            'name' => 'SkinPsoriasis adalimuMab 20 TPM'
        ),
        'norm_counts_SkinPsoriasis_adalimuMab_22_TPM' => array(
            'color' => '#E8B374',
            'name' => 'SkinPsoriasis adalimuMab 22 TPM'
        ),
        'norm_counts_SkinPsoriasis_adalimuMab_24_TPM' => array(
            'color' => '#F8B662',
            'name' => 'SkinPsoriasis adalimuMab 24 TPM'
        ),
        'norm_counts_SkinPsoriasis_adalimuMab_25_TPM' => array(
            'color' => '#E8BF63',
            'name' => 'SkinPsoriasis adalimuMab 25 TPM'
        ),
        'norm_counts_SkinPsoriasis_adalimuMab_26_TPM' => array(
            'color' => '#D8C965',
            'name' => 'SkinPsoriasis adalimuMab 26 TPM'
        ),
        'norm_counts_SkinPsoriasis_adalimuMab_2_TPM' => array(
            'color' => '#C7D267',
            'name' => 'SkinPsoriasis adalimuMab 2 TPM'
        ),
        'norm_counts_SkinPsoriasis_adalimuMab_30_TPM' => array(
            'color' => '#B7DB68',
            'name' => 'SkinPsoriasis adalimuMab 30 TPM'
        ),
        'norm_counts_SkinPsoriasis_adalimuMab_4_TPM' => array(
            'color' => '#BEDB7C',
            'name' => 'SkinPsoriasis adalimuMab 4 TPM'
        ),
        'norm_counts_SkinPsoriasis_adalimuMab_5_TPM' => array(
            'color' => '#CED798',
            'name' => 'SkinPsoriasis adalimuMab 5 TPM'
        ),
        'norm_counts_SkinPsoriasis_adalimuMab_6_TPM' => array(
            'color' => '#DED3B3',
            'name' => 'SkinPsoriasis adalimuMab 6 TPM'
        ),
        'norm_counts_SkinPsoriasis_adalimuMab_8_TPM' => array(
            'color' => '#EED0CE',
            'name' => 'SkinPsoriasis adalimuMab 8 TPM'
        ),
        'norm_counts_SkinPsoriasis_adalimuMab_9_TPM' => array(
            'color' => '#FACDE4',
            'name' => 'SkinPsoriasis adalimuMab 9 TPM'
        ),
        'norm_counts_SkinPsoriasis_Unt_14_TPM' => array(
            'color' => '#F2D0E1',
            'name' => 'SkinPsoriasis Unt 14 TPM'
        ),
        'norm_counts_SkinPsoriasis_Unt_15_TPM' => array(
            'color' => '#EBD2DF',
            'name' => 'SkinPsoriasis Unt 15 TPM'
        ),
        'norm_counts_SkinPsoriasis_Unt_17_TPM' => array(
            'color' => '#E3D5DC',
            'name' => 'SkinPsoriasis Unt 17 TPM'
        ),
        'norm_counts_SkinPsoriasis_Unt_18_TPM' => array(
            'color' => '#DBD8D9',
            'name' => 'SkinPsoriasis Unt 18 TPM'
        ),
        'norm_counts_SkinPsoriasis_Unt_19_TPM' => array(
            'color' => '#D4CCD5',
            'name' => 'SkinPsoriasis Unt 19 TPM'
        ),
        'norm_counts_SkinPsoriasis_Unt_1_TPM' => array(
            'color' => '#CEB8CE',
            'name' => 'SkinPsoriasis Unt 1 TPM'
        ),
        'norm_counts_SkinPsoriasis_Unt_20_TPM' => array(
            'color' => '#C8A5C8',
            'name' => 'SkinPsoriasis Unt 20 TPM'
        ),
        'norm_counts_SkinPsoriasis_Unt_22_TPM' => array(
            'color' => '#C191C2',
            'name' => 'SkinPsoriasis Unt 22 TPM'
        ),
        'norm_counts_SkinPsoriasis_Unt_24_TPM' => array(
            'color' => '#BC82BD',
            'name' => 'SkinPsoriasis Unt 24 TPM'
        ),
        'norm_counts_SkinPsoriasis_Unt_25_TPM' => array(
            'color' => '#BF99BE',
            'name' => 'SkinPsoriasis Unt 25 TPM'
        ),
        'norm_counts_SkinPsoriasis_Unt_26_TPM' => array(
            'color' => '#C3B1C0',
            'name' => 'SkinPsoriasis Unt 26 TPM'
        ),
        'norm_counts_SkinPsoriasis_Unt_2_TPM' => array(
            'color' => '#C6C8C2',
            'name' => 'SkinPsoriasis Unt 2 TPM'
        ),
        'norm_counts_SkinPsoriasis_Unt_30_TPM' => array(
            'color' => '#CAE0C4',
            'name' => 'SkinPsoriasis Unt 30 TPM'
        ),
        'norm_counts_SkinPsoriasis_Unt_4_TPM' => array(
            'color' => '#D2EBBA',
            'name' => 'SkinPsoriasis Unt 4 TPM'
        ),
        'norm_counts_SkinPsoriasis_Unt_5_TPM' => array(
            'color' => '#DDEBA7',
            'name' => 'SkinPsoriasis Unt 5 TPM'
        ),
        'norm_counts_SkinPsoriasis_Unt_6_TPM' => array(
            'color' => '#E8EC94',
            'name' => 'SkinPsoriasis Unt 6 TPM'
        ),
        'norm_counts_SkinPsoriasis_Unt_8_TPM' => array(
            'color' => '#F3EC81',
            'name' => 'SkinPsoriasis Unt 8 TPM'
        ),
        'norm_counts_SkinPsoriasis_Unt_9_TPM' => array(
            'color' => '#FFED6F',
            'name' => 'SkinPsoriasis Unt 9 TPM'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_SkinNormal_Unt_103_TPM','lg2_avg_SkinNormal_Unt_108_TPM','lg2_avg_SkinNormal_Unt_10_TPM','lg2_avg_SkinNormal_Unt_11_TPM','lg2_avg_SkinNormal_Unt_12_TPM','lg2_avg_SkinNormal_Unt_13_TPM','lg2_avg_SkinNormal_Unt_15_TPM','lg2_avg_SkinNormal_Unt_2_TPM','lg2_avg_SkinNormal_Unt_32_TPM','lg2_avg_SkinNormal_Unt_3_TPM','lg2_avg_SkinNormal_Unt_4_TPM','lg2_avg_SkinNormal_Unt_5_TPM','lg2_avg_SkinNormal_Unt_6_TPM','lg2_avg_SkinNormal_Unt_8_TPM','lg2_avg_SkinNormal_Unt_9_TPM','lg2_avg_SkinPsoriasis_adalimuMab_14_TPM','lg2_avg_SkinPsoriasis_adalimuMab_15_TPM','lg2_avg_SkinPsoriasis_adalimuMab_17_TPM','lg2_avg_SkinPsoriasis_adalimuMab_18_TPM','lg2_avg_SkinPsoriasis_adalimuMab_19_TPM','lg2_avg_SkinPsoriasis_adalimuMab_1_TPM','lg2_avg_SkinPsoriasis_adalimuMab_20_TPM','lg2_avg_SkinPsoriasis_adalimuMab_22_TPM','lg2_avg_SkinPsoriasis_adalimuMab_24_TPM','lg2_avg_SkinPsoriasis_adalimuMab_25_TPM','lg2_avg_SkinPsoriasis_adalimuMab_26_TPM','lg2_avg_SkinPsoriasis_adalimuMab_2_TPM','lg2_avg_SkinPsoriasis_adalimuMab_30_TPM','lg2_avg_SkinPsoriasis_adalimuMab_4_TPM','lg2_avg_SkinPsoriasis_adalimuMab_5_TPM','lg2_avg_SkinPsoriasis_adalimuMab_6_TPM','lg2_avg_SkinPsoriasis_adalimuMab_8_TPM','lg2_avg_SkinPsoriasis_adalimuMab_9_TPM','lg2_avg_SkinPsoriasis_Unt_14_TPM','lg2_avg_SkinPsoriasis_Unt_15_TPM','lg2_avg_SkinPsoriasis_Unt_17_TPM','lg2_avg_SkinPsoriasis_Unt_18_TPM','lg2_avg_SkinPsoriasis_Unt_19_TPM','lg2_avg_SkinPsoriasis_Unt_1_TPM','lg2_avg_SkinPsoriasis_Unt_20_TPM','lg2_avg_SkinPsoriasis_Unt_22_TPM','lg2_avg_SkinPsoriasis_Unt_24_TPM','lg2_avg_SkinPsoriasis_Unt_25_TPM','lg2_avg_SkinPsoriasis_Unt_26_TPM','lg2_avg_SkinPsoriasis_Unt_2_TPM','lg2_avg_SkinPsoriasis_Unt_30_TPM','lg2_avg_SkinPsoriasis_Unt_4_TPM','lg2_avg_SkinPsoriasis_Unt_5_TPM','lg2_avg_SkinPsoriasis_Unt_6_TPM','lg2_avg_SkinPsoriasis_Unt_8_TPM','lg2_avg_SkinPsoriasis_Unt_9_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_SkinPsoriasis_Unt_vs_SkinNormal_Unt' => array(
            'name' => 'logFC SkinPsoriasis Unt vs SkinNormal Unt',
            'slider_min' => -8,
            'slider_max' => 6,
            'default_low' => -8,
            'default_high' => 6
        ),
        'contrast_2_logFC_SkinPsoriasis_adalimuMab_vs_SkinPsoriasis_Unt' => array(
            'name' => 'logFC SkinPsoriasis adalimuMab vs SkinPsoriasis Unt',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_3_logFC_SkinPsoriasis_adalimuMab_vs_SkinNormal_Unt' => array(
            'name' => 'logFC SkinPsoriasis adalimuMab vs SkinNormal Unt',
            'slider_min' => -5,
            'slider_max' => 5,
            'default_low' => -5,
            'default_high' => 5
        ),
        'contrast_L_logFC_LRT_sex' => array(
            'name' => 'logFC LRT sex',
            'slider_min' => -8,
            'slider_max' => 8,
            'default_low' => -8,
            'default_high' => 8
        ),
        'contrast_L_logFC_LRT_treatment' => array(
            'name' => 'logFC LRT treatment',
            'slider_min' => -5,
            'slider_max' => 5,
            'default_low' => -5,
            'default_high' => 5
        ),
        'contrast_L_logFC_LRT_diseaseStatus' => array(
            'name' => 'logFC LRT diseaseStatus',
            'slider_min' => -8,
            'slider_max' => 7,
            'default_low' => -8,
            'default_high' => 7
        ),
        'contrast_P_PCA_estimatePCA1' => array(
            'name' => 'PCA estimatePCA1',
            'slider_min' => -12,
            'slider_max' => 13,
            'default_low' => -12,
            'default_high' => 13
        ),
        'contrast_P_PCA_estimatePCA2' => array(
            'name' => 'PCA estimatePCA2',
            'slider_min' => -9,
            'slider_max' => 11,
            'default_low' => -9,
            'default_high' => 11
        ),
        'contrast_P_PCA_estimatePCA3' => array(
            'name' => 'PCA estimatePCA3',
            'slider_min' => -4,
            'slider_max' => 4,
            'default_low' => -4,
            'default_high' => 4
        ),
        'contrast_P_PCA_estimatePCA4' => array(
            'name' => 'PCA estimatePCA4',
            'slider_min' => -4,
            'slider_max' => 4,
            'default_low' => -4,
            'default_high' => 4
        ),
        'contrast_P_PCA_estimatePCA5' => array(
            'name' => 'PCA estimatePCA5',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'contrast_1_padj_SkinPsoriasis_Unt_vs_SkinNormal_Unt' => array(
            'name' => 'padj SkinPsoriasis Unt vs SkinNormal Unt',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_padj_SkinPsoriasis_adalimuMab_vs_SkinPsoriasis_Unt' => array(
            'name' => 'padj SkinPsoriasis adalimuMab vs SkinPsoriasis Unt',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_padj_SkinPsoriasis_adalimuMab_vs_SkinNormal_Unt' => array(
            'name' => 'padj SkinPsoriasis adalimuMab vs SkinNormal Unt',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_L_lg10p_LRT_sex' => array(
            'name' => 'lg10p LRT sex',
            'slider_min' => 0,
            'slider_max' => 105,
            'default_low' => 0,
            'default_high' => 105
        ),
        'contrast_L_lg10p_LRT_treatment' => array(
            'name' => 'lg10p LRT treatment',
            'slider_min' => 0,
            'slider_max' => 7,
            'default_low' => 0,
            'default_high' => 7
        ),
        'contrast_L_lg10p_LRT_diseaseStatus' => array(
            'name' => 'lg10p LRT diseaseStatus',
            'slider_min' => 0,
            'slider_max' => 78,
            'default_low' => 0,
            'default_high' => 78
        )
    )
    ),
    // Scatterplot Parameters
    'scatterplot' => array(
        'selection' => array(
            'default-x' => 'contrast_1_logFC_SkinPsoriasis_Unt_vs_SkinNormal_Unt',
            'default-y' => 'contrast_2_logFC_SkinPsoriasis_adalimuMab_vs_SkinPsoriasis_Unt',
            'contrast_1_logFC_SkinPsoriasis_Unt_vs_SkinNormal_Unt' => array(
                'name' => 'logFC SkinPsoriasis Unt vs SkinNormal Unt'
            ),
            'contrast_2_logFC_SkinPsoriasis_adalimuMab_vs_SkinPsoriasis_Unt' => array(
                'name' => 'logFC SkinPsoriasis adalimuMab vs SkinPsoriasis Unt'
            ),
            'contrast_3_logFC_SkinPsoriasis_adalimuMab_vs_SkinNormal_Unt' => array(
                'name' => 'logFC SkinPsoriasis adalimuMab vs SkinNormal Unt'
            ),
            'contrast_L_logFC_LRT_sex' => array(
                'name' => 'logFC LRT sex'
            ),
            'contrast_L_logFC_LRT_treatment' => array(
                'name' => 'logFC LRT treatment'
            ),
            'contrast_L_logFC_LRT_diseaseStatus' => array(
                'name' => 'logFC LRT diseaseStatus'
            ),
            'contrast_1_lg10p_SkinPsoriasis_Unt_vs_SkinNormal_Unt' => array(
                'name' => 'lg10p SkinPsoriasis Unt vs SkinNormal Unt'
            ),
            'contrast_2_lg10p_SkinPsoriasis_adalimuMab_vs_SkinPsoriasis_Unt' => array(
                'name' => 'lg10p SkinPsoriasis adalimuMab vs SkinPsoriasis Unt'
            ),
            'contrast_3_lg10p_SkinPsoriasis_adalimuMab_vs_SkinNormal_Unt' => array(
                'name' => 'lg10p SkinPsoriasis adalimuMab vs SkinNormal Unt'
            ),
            'contrast_L_lg10p_LRT_sex' => array(
                'name' => 'lg10p LRT sex'
            ),
            'contrast_L_lg10p_LRT_treatment' => array(
                'name' => 'lg10p LRT treatment'
            ),
            'contrast_L_lg10p_LRT_diseaseStatus' => array(
                'name' => 'lg10p LRT diseaseStatus'
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
            )
        )
    )
//End scatterplot
);
