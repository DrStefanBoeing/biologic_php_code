<?php

return array(
    'lab' => array(
        'name' => 'Briscoe DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'jbl_data',
    'data_db' => array(
            'cat_table_name' => 'jbl364_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'jbl364_rna_seq_table',
    'primary_gene_symbol' => 'hgnc_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Flat_Highp0o0_1_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Flat Highp0o0 1 TPM'
        ),
        'norm_counts_Flat_Highp0o0_2_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Flat Highp0o0 2 TPM'
        ),
        'norm_counts_Flat_Highp0o0_3_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Flat Highp0o0 3 TPM'
        ),
        'norm_counts_Flat_Lowp0o0_2_TPM' => array(
            'color' => '#DE8C00',
            'name' => 'Flat Lowp0o0 2 TPM'
        ),
        'norm_counts_Flat_Lowp0o0_3_TPM' => array(
            'color' => '#DE8C00',
            'name' => 'Flat Lowp0o0 3 TPM'
        ),
        'norm_counts_Flat_Medp0o0_1_TPM' => array(
            'color' => '#B79F00',
            'name' => 'Flat Medp0o0 1 TPM'
        ),
        'norm_counts_Flat_Medp0o0_2_TPM' => array(
            'color' => '#B79F00',
            'name' => 'Flat Medp0o0 2 TPM'
        ),
        'norm_counts_Gel16_Highp0o0_1_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'Gel16 Highp0o0 1 TPM'
        ),
        'norm_counts_Gel16_Highp0o0_2_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'Gel16 Highp0o0 2 TPM'
        ),
        'norm_counts_Gel16_Highp0o0_3_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'Gel16 Highp0o0 3 TPM'
        ),
        'norm_counts_Gel35_Highp0o0_1_TPM' => array(
            'color' => '#00BA38',
            'name' => 'Gel35 Highp0o0 1 TPM'
        ),
        'norm_counts_Gel35_Highp0o0_2_TPM' => array(
            'color' => '#00BA38',
            'name' => 'Gel35 Highp0o0 2 TPM'
        ),
        'norm_counts_Gel35_Highp0o0_3_TPM' => array(
            'color' => '#00BA38',
            'name' => 'Gel35 Highp0o0 3 TPM'
        ),
        'norm_counts_Gel7_Highp0o0_1_TPM' => array(
            'color' => '#00C08B',
            'name' => 'Gel7 Highp0o0 1 TPM'
        ),
        'norm_counts_Gel7_Highp0o0_2_TPM' => array(
            'color' => '#00C08B',
            'name' => 'Gel7 Highp0o0 2 TPM'
        ),
        'norm_counts_nN_Highp2o1000_1_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'nN Highp2o1000 1 TPM'
        ),
        'norm_counts_nN_Highp2o1000_2_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'nN Highp2o1000 2 TPM'
        ),
        'norm_counts_nN_Highp2o1000_3_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'nN Highp2o1000 3 TPM'
        ),
        'norm_counts_nN_Highp2o700_1_TPM' => array(
            'color' => '#00B4F0',
            'name' => 'nN Highp2o700 1 TPM'
        ),
        'norm_counts_nN_Highp2o700_2_TPM' => array(
            'color' => '#00B4F0',
            'name' => 'nN Highp2o700 2 TPM'
        ),
        'norm_counts_nN_Highp2o700_3_TPM' => array(
            'color' => '#00B4F0',
            'name' => 'nN Highp2o700 3 TPM'
        ),
        'norm_counts_nN_Highp2o850_1_TPM' => array(
            'color' => '#619CFF',
            'name' => 'nN Highp2o850 1 TPM'
        ),
        'norm_counts_nN_Highp2o850_2_TPM' => array(
            'color' => '#619CFF',
            'name' => 'nN Highp2o850 2 TPM'
        ),
        'norm_counts_nN_Highp2o850_3_TPM' => array(
            'color' => '#619CFF',
            'name' => 'nN Highp2o850 3 TPM'
        ),
        'norm_counts_nN_Highp5o1000_1_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'nN Highp5o1000 1 TPM'
        ),
        'norm_counts_nN_Highp5o1000_2_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'nN Highp5o1000 2 TPM'
        ),
        'norm_counts_nN_Highp5o1000_3_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'nN Highp5o1000 3 TPM'
        ),
        'norm_counts_nN_Highp5o700_1_TPM' => array(
            'color' => '#F564E3',
            'name' => 'nN Highp5o700 1 TPM'
        ),
        'norm_counts_nN_Highp5o700_2_TPM' => array(
            'color' => '#F564E3',
            'name' => 'nN Highp5o700 2 TPM'
        ),
        'norm_counts_nN_Highp5o700_3_TPM' => array(
            'color' => '#F564E3',
            'name' => 'nN Highp5o700 3 TPM'
        ),
        'norm_counts_nN_Highp5o850_1_TPM' => array(
            'color' => '#FF64B0',
            'name' => 'nN Highp5o850 1 TPM'
        ),
        'norm_counts_nN_Highp5o850_2_TPM' => array(
            'color' => '#FF64B0',
            'name' => 'nN Highp5o850 2 TPM'
        ),
        'norm_counts_nN_Highp5o850_3_TPM' => array(
            'color' => '#FF64B0',
            'name' => 'nN Highp5o850 3 TPM'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Flat_Highp0o0_1_TPM','lg2_avg_Flat_Highp0o0_2_TPM','lg2_avg_Flat_Highp0o0_3_TPM','lg2_avg_Flat_Lowp0o0_2_TPM','lg2_avg_Flat_Lowp0o0_3_TPM','lg2_avg_Flat_Medp0o0_1_TPM','lg2_avg_Flat_Medp0o0_2_TPM','lg2_avg_Gel16_Highp0o0_1_TPM','lg2_avg_Gel16_Highp0o0_2_TPM','lg2_avg_Gel16_Highp0o0_3_TPM','lg2_avg_Gel35_Highp0o0_1_TPM','lg2_avg_Gel35_Highp0o0_2_TPM','lg2_avg_Gel35_Highp0o0_3_TPM','lg2_avg_Gel7_Highp0o0_1_TPM','lg2_avg_Gel7_Highp0o0_2_TPM','lg2_avg_nN_Highp2o1000_1_TPM','lg2_avg_nN_Highp2o1000_2_TPM','lg2_avg_nN_Highp2o1000_3_TPM','lg2_avg_nN_Highp2o700_1_TPM','lg2_avg_nN_Highp2o700_2_TPM','lg2_avg_nN_Highp2o700_3_TPM','lg2_avg_nN_Highp2o850_1_TPM','lg2_avg_nN_Highp2o850_2_TPM','lg2_avg_nN_Highp2o850_3_TPM','lg2_avg_nN_Highp5o1000_1_TPM','lg2_avg_nN_Highp5o1000_2_TPM','lg2_avg_nN_Highp5o1000_3_TPM','lg2_avg_nN_Highp5o700_1_TPM','lg2_avg_nN_Highp5o700_2_TPM','lg2_avg_nN_Highp5o700_3_TPM','lg2_avg_nN_Highp5o850_1_TPM','lg2_avg_nN_Highp5o850_2_TPM','lg2_avg_nN_Highp5o850_3_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_Flat_vs_Gel' => array(
            'name' => 'logFC Flat vs Gel',
            'slider_min' => -4,
            'slider_max' => 4,
            'default_low' => -4,
            'default_high' => 4
        ),
        'contrast_1_padj_Flat_vs_Gel' => array(
            'name' => 'padj Flat vs Gel',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_Gel_vs_nN' => array(
            'name' => 'logFC Gel vs nN',
            'slider_min' => -4,
            'slider_max' => 3,
            'default_low' => -4,
            'default_high' => 3
        ),
        'contrast_2_padj_Gel_vs_nN' => array(
            'name' => 'padj Gel vs nN',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_Flat_vs_nN' => array(
            'name' => 'logFC Flat vs nN',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_3_padj_Flat_vs_nN' => array(
            'name' => 'padj Flat vs nN',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_logFC_nN_Highp2o1000_vs_Flat_Highp0o0' => array(
            'name' => 'logFC nN Highp2o1000 vs Flat Highp0o0',
            'slider_min' => -2,
            'slider_max' => 3,
            'default_low' => -2,
            'default_high' => 3
        ),
        'contrast_4_padj_nN_Highp2o1000_vs_Flat_Highp0o0' => array(
            'name' => 'padj nN Highp2o1000 vs Flat Highp0o0',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_5_logFC_nN_Highp2o850_vs_Flat_Highp0o0' => array(
            'name' => 'logFC nN Highp2o850 vs Flat Highp0o0',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_5_padj_nN_Highp2o850_vs_Flat_Highp0o0' => array(
            'name' => 'padj nN Highp2o850 vs Flat Highp0o0',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_6_logFC_nN_Highp2o700_vs_Flat_Highp0o0' => array(
            'name' => 'logFC nN Highp2o700 vs Flat Highp0o0',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_6_padj_nN_Highp2o700_vs_Flat_Highp0o0' => array(
            'name' => 'padj nN Highp2o700 vs Flat Highp0o0',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_7_logFC_nN_Highp2o1000_vs_Flat_Medp0o0' => array(
            'name' => 'logFC nN Highp2o1000 vs Flat Medp0o0',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'contrast_7_padj_nN_Highp2o1000_vs_Flat_Medp0o0' => array(
            'name' => 'padj nN Highp2o1000 vs Flat Medp0o0',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_8_logFC_nN_Highp2o850_vs_Flat_Medp0o0' => array(
            'name' => 'logFC nN Highp2o850 vs Flat Medp0o0',
            'slider_min' => -4,
            'slider_max' => 2,
            'default_low' => -4,
            'default_high' => 2
        ),
        'contrast_8_padj_nN_Highp2o850_vs_Flat_Medp0o0' => array(
            'name' => 'padj nN Highp2o850 vs Flat Medp0o0',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_9_logFC_nN_Highp2o700_vs_Flat_Medp0o0' => array(
            'name' => 'logFC nN Highp2o700 vs Flat Medp0o0',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'contrast_9_padj_nN_Highp2o700_vs_Flat_Medp0o0' => array(
            'name' => 'padj nN Highp2o700 vs Flat Medp0o0',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_10_logFC_nN_Highp5o1000_vs_Flat_Highp0o0' => array(
            'name' => '0 logFC nN Highp5o1000 vs Flat Highp0o0',
            'slider_min' => -1,
            'slider_max' => 2,
            'default_low' => -1,
            'default_high' => 2
        ),
        'contrast_10_padj_nN_Highp5o1000_vs_Flat_Highp0o0' => array(
            'name' => '0 padj nN Highp5o1000 vs Flat Highp0o0',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_11_logFC_nN_Highp5o850_vs_Flat_Highp0o0' => array(
            'name' => '1 logFC nN Highp5o850 vs Flat Highp0o0',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_11_padj_nN_Highp5o850_vs_Flat_Highp0o0' => array(
            'name' => '1 padj nN Highp5o850 vs Flat Highp0o0',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_12_logFC_nN_Highp5o700_vs_Flat_Highp0o0' => array(
            'name' => '2 logFC nN Highp5o700 vs Flat Highp0o0',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_12_padj_nN_Highp5o700_vs_Flat_Highp0o0' => array(
            'name' => '2 padj nN Highp5o700 vs Flat Highp0o0',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_13_logFC_nN_Highp5o1000_vs_Flat_Medp0o0' => array(
            'name' => '3 logFC nN Highp5o1000 vs Flat Medp0o0',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'contrast_13_padj_nN_Highp5o1000_vs_Flat_Medp0o0' => array(
            'name' => '3 padj nN Highp5o1000 vs Flat Medp0o0',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_14_logFC_nN_Highp5o850_vs_Flat_Medp0o0' => array(
            'name' => '4 logFC nN Highp5o850 vs Flat Medp0o0',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_14_padj_nN_Highp5o850_vs_Flat_Medp0o0' => array(
            'name' => '4 padj nN Highp5o850 vs Flat Medp0o0',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_15_logFC_nN_Highp5o700_vs_Flat_Medp0o0' => array(
            'name' => '5 logFC nN Highp5o700 vs Flat Medp0o0',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_15_padj_nN_Highp5o700_vs_Flat_Medp0o0' => array(
            'name' => '5 padj nN Highp5o700 vs Flat Medp0o0',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_L_lg10p_LRT_Flat_Gel_nN' => array(
            'name' => 'lg10p LRT Flat Gel nN',
            'slider_min' => 0,
            'slider_max' => 197,
            'default_low' => 0,
            'default_high' => 197
        ),
        'contrast_L_lg10p_LRT_Flat_SeedingDensity' => array(
            'name' => 'lg10p LRT Flat SeedingDensity',
            'slider_min' => 0,
            'slider_max' => 32,
            'default_low' => 0,
            'default_high' => 32
        ),
        'contrast_L_lg10p_LRT_Pitch' => array(
            'name' => 'lg10p LRT Pitch',
            'slider_min' => 0,
            'slider_max' => 25,
            'default_low' => 0,
            'default_high' => 25
        ),
        'contrast_L_lg10p_LRT_Opening' => array(
            'name' => 'lg10p LRT Opening',
            'slider_min' => 0,
            'slider_max' => 15,
            'default_low' => 0,
            'default_high' => 15
        ),
        'contrast_L_lg10p_LRT_p2o_700_850_1000' => array(
            'name' => 'lg10p LRT p2o 700 850 1000',
            'slider_min' => 0,
            'slider_max' => 31,
            'default_low' => 0,
            'default_high' => 31
        ),
        'contrast_L_lg10p_LRT_p5o_700_850_1000' => array(
            'name' => 'lg10p LRT p5o 700 850 1000',
            'slider_min' => 0,
            'slider_max' => 19,
            'default_low' => 0,
            'default_high' => 19
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'jbl364_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_Flat_vs_Gel',
        'default-y' => 'contrast_1_lg10p_Flat_vs_Gel',
        'selection' => array(
            'contrast_1_logFC_Flat_vs_Gel' => array(
                'name' => 'logFC Flat vs Gel'
            ),
            'contrast_2_logFC_Gel_vs_nN' => array(
                'name' => 'logFC Gel vs nN'
            ),
            'contrast_3_logFC_Flat_vs_nN' => array(
                'name' => 'logFC Flat vs nN'
            ),
            'contrast_4_logFC_nN_Highp2o1000_vs_Flat_Highp0o0' => array(
                'name' => 'logFC nN Highp2o1000 vs Flat Highp0o0'
            ),
            'contrast_5_logFC_nN_Highp2o850_vs_Flat_Highp0o0' => array(
                'name' => 'logFC nN Highp2o850 vs Flat Highp0o0'
            ),
            'contrast_6_logFC_nN_Highp2o700_vs_Flat_Highp0o0' => array(
                'name' => 'logFC nN Highp2o700 vs Flat Highp0o0'
            ),
            'contrast_7_logFC_nN_Highp2o1000_vs_Flat_Medp0o0' => array(
                'name' => 'logFC nN Highp2o1000 vs Flat Medp0o0'
            ),
            'contrast_8_logFC_nN_Highp2o850_vs_Flat_Medp0o0' => array(
                'name' => 'logFC nN Highp2o850 vs Flat Medp0o0'
            ),
            'contrast_9_logFC_nN_Highp2o700_vs_Flat_Medp0o0' => array(
                'name' => 'logFC nN Highp2o700 vs Flat Medp0o0'
            ),
            'contrast_10_logFC_nN_Highp5o1000_vs_Flat_Highp0o0' => array(
                'name' => '0 logFC nN Highp5o1000 vs Flat Highp0o0'
            ),
            'contrast_11_logFC_nN_Highp5o850_vs_Flat_Highp0o0' => array(
                'name' => '1 logFC nN Highp5o850 vs Flat Highp0o0'
            ),
            'contrast_12_logFC_nN_Highp5o700_vs_Flat_Highp0o0' => array(
                'name' => '2 logFC nN Highp5o700 vs Flat Highp0o0'
            ),
            'contrast_13_logFC_nN_Highp5o1000_vs_Flat_Medp0o0' => array(
                'name' => '3 logFC nN Highp5o1000 vs Flat Medp0o0'
            ),
            'contrast_14_logFC_nN_Highp5o850_vs_Flat_Medp0o0' => array(
                'name' => '4 logFC nN Highp5o850 vs Flat Medp0o0'
            ),
            'contrast_15_logFC_nN_Highp5o700_vs_Flat_Medp0o0' => array(
                'name' => '5 logFC nN Highp5o700 vs Flat Medp0o0'
            ),
            'contrast_1_lg10p_Flat_vs_Gel' => array(
                'name' => 'lg10p Flat vs Gel'
            ),
            'contrast_2_lg10p_Gel_vs_nN' => array(
                'name' => 'lg10p Gel vs nN'
            ),
            'contrast_3_lg10p_Flat_vs_nN' => array(
                'name' => 'lg10p Flat vs nN'
            ),
            'contrast_4_lg10p_nN_Highp2o1000_vs_Flat_Highp0o0' => array(
                'name' => 'lg10p nN Highp2o1000 vs Flat Highp0o0'
            ),
            'contrast_5_lg10p_nN_Highp2o850_vs_Flat_Highp0o0' => array(
                'name' => 'lg10p nN Highp2o850 vs Flat Highp0o0'
            ),
            'contrast_6_lg10p_nN_Highp2o700_vs_Flat_Highp0o0' => array(
                'name' => 'lg10p nN Highp2o700 vs Flat Highp0o0'
            ),
            'contrast_7_lg10p_nN_Highp2o1000_vs_Flat_Medp0o0' => array(
                'name' => 'lg10p nN Highp2o1000 vs Flat Medp0o0'
            ),
            'contrast_8_lg10p_nN_Highp2o850_vs_Flat_Medp0o0' => array(
                'name' => 'lg10p nN Highp2o850 vs Flat Medp0o0'
            ),
            'contrast_9_lg10p_nN_Highp2o700_vs_Flat_Medp0o0' => array(
                'name' => 'lg10p nN Highp2o700 vs Flat Medp0o0'
            ),
            'contrast_10_lg10p_nN_Highp5o1000_vs_Flat_Highp0o0' => array(
                'name' => '0 lg10p nN Highp5o1000 vs Flat Highp0o0'
            ),
            'contrast_11_lg10p_nN_Highp5o850_vs_Flat_Highp0o0' => array(
                'name' => '1 lg10p nN Highp5o850 vs Flat Highp0o0'
            ),
            'contrast_12_lg10p_nN_Highp5o700_vs_Flat_Highp0o0' => array(
                'name' => '2 lg10p nN Highp5o700 vs Flat Highp0o0'
            ),
            'contrast_13_lg10p_nN_Highp5o1000_vs_Flat_Medp0o0' => array(
                'name' => '3 lg10p nN Highp5o1000 vs Flat Medp0o0'
            ),
            'contrast_14_lg10p_nN_Highp5o850_vs_Flat_Medp0o0' => array(
                'name' => '4 lg10p nN Highp5o850 vs Flat Medp0o0'
            ),
            'contrast_15_lg10p_nN_Highp5o700_vs_Flat_Medp0o0' => array(
                'name' => '5 lg10p nN Highp5o700 vs Flat Medp0o0'
            ),
            'contrast_L_lg10p_LRT_Flat_Gel_nN' => array(
                'name' => 'lg10p LRT Flat Gel nN'
            ),
            'contrast_L_lg10p_LRT_Flat_SeedingDensity' => array(
                'name' => 'lg10p LRT Flat SeedingDensity'
            ),
            'contrast_L_lg10p_LRT_Pitch' => array(
                'name' => 'lg10p LRT Pitch'
            ),
            'contrast_L_lg10p_LRT_Opening' => array(
                'name' => 'lg10p LRT Opening'
            ),
            'contrast_L_lg10p_LRT_p2o_700_850_1000' => array(
                'name' => 'lg10p LRT p2o 700 850 1000'
            ),
            'contrast_L_lg10p_LRT_p5o_700_850_1000' => array(
                'name' => 'lg10p LRT p5o 700 850 1000'
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
            'contrast_1_lg2BaseMean_Flat_vs_Gel' => array(
                'name' => 'lg2BaseMean Flat vs Gel'
            ),
            'contrast_2_lg2BaseMean_Gel_vs_nN' => array(
                'name' => 'lg2BaseMean Gel vs nN'
            ),
            'contrast_3_lg2BaseMean_Flat_vs_nN' => array(
                'name' => 'lg2BaseMean Flat vs nN'
            ),
            'contrast_4_lg2BaseMean_nN_Highp2o1000_vs_Flat_Highp0o0' => array(
                'name' => 'lg2BaseMean nN Highp2o1000 vs Flat Highp0o0'
            ),
            'contrast_5_lg2BaseMean_nN_Highp2o850_vs_Flat_Highp0o0' => array(
                'name' => 'lg2BaseMean nN Highp2o850 vs Flat Highp0o0'
            ),
            'contrast_6_lg2BaseMean_nN_Highp2o700_vs_Flat_Highp0o0' => array(
                'name' => 'lg2BaseMean nN Highp2o700 vs Flat Highp0o0'
            ),
            'contrast_7_lg2BaseMean_nN_Highp2o1000_vs_Flat_Medp0o0' => array(
                'name' => 'lg2BaseMean nN Highp2o1000 vs Flat Medp0o0'
            ),
            'contrast_8_lg2BaseMean_nN_Highp2o850_vs_Flat_Medp0o0' => array(
                'name' => 'lg2BaseMean nN Highp2o850 vs Flat Medp0o0'
            ),
            'contrast_9_lg2BaseMean_nN_Highp2o700_vs_Flat_Medp0o0' => array(
                'name' => 'lg2BaseMean nN Highp2o700 vs Flat Medp0o0'
            ),
            'contrast_10_lg2BaseMean_nN_Highp5o1000_vs_Flat_Highp0o0' => array(
                'name' => '0 lg2BaseMean nN Highp5o1000 vs Flat Highp0o0'
            ),
            'contrast_11_lg2BaseMean_nN_Highp5o850_vs_Flat_Highp0o0' => array(
                'name' => '1 lg2BaseMean nN Highp5o850 vs Flat Highp0o0'
            ),
            'contrast_12_lg2BaseMean_nN_Highp5o700_vs_Flat_Highp0o0' => array(
                'name' => '2 lg2BaseMean nN Highp5o700 vs Flat Highp0o0'
            ),
            'contrast_13_lg2BaseMean_nN_Highp5o1000_vs_Flat_Medp0o0' => array(
                'name' => '3 lg2BaseMean nN Highp5o1000 vs Flat Medp0o0'
            ),
            'contrast_14_lg2BaseMean_nN_Highp5o850_vs_Flat_Medp0o0' => array(
                'name' => '4 lg2BaseMean nN Highp5o850 vs Flat Medp0o0'
            ),
            'contrast_15_lg2BaseMean_nN_Highp5o700_vs_Flat_Medp0o0' => array(
                'name' => '5 lg2BaseMean nN Highp5o700 vs Flat Medp0o0'
            ),
            'contrast_L_lg2BaseMean_LRT_Flat_Gel_nN' => array(
                'name' => 'lg2BaseMean LRT Flat Gel nN'
            ),
            'contrast_L_lg2BaseMean_LRT_Flat_SeedingDensity' => array(
                'name' => 'lg2BaseMean LRT Flat SeedingDensity'
            ),
            'contrast_L_lg2BaseMean_LRT_Pitch' => array(
                'name' => 'lg2BaseMean LRT Pitch'
            ),
            'contrast_L_lg2BaseMean_LRT_Opening' => array(
                'name' => 'lg2BaseMean LRT Opening'
            ),
            'contrast_L_lg2BaseMean_LRT_p2o_700_850_1000' => array(
                'name' => 'lg2BaseMean LRT p2o 700 850 1000'
            ),
            'contrast_L_lg2BaseMean_LRT_p5o_700_850_1000' => array(
                'name' => 'lg2BaseMean LRT p5o 700 850 1000'
            )
        )
    )
//End scatterplot
);
