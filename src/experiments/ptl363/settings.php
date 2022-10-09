<?php

return array(
    'lab' => array(
        'name' => 'Tolar DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'ptl_data',
    'data_db' => array(
            'cat_table_name' => 'ptl363_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'p363_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Ctrl_d0_1_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Ctrl d0 1 TPM'
        ),
        'norm_counts_Ctrl_d0_2_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Ctrl d0 2 TPM'
        ),
        'norm_counts_Ctrl_d0_3_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Ctrl d0 3 TPM'
        ),
        'norm_counts_Ctrl_d0_4_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Ctrl d0 4 TPM'
        ),
        'norm_counts_ICPE_d1_1_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'ICPE d1 1 TPM'
        ),
        'norm_counts_ICPE_d1_2_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'ICPE d1 2 TPM'
        ),
        'norm_counts_ICPE_d1_3_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'ICPE d1 3 TPM'
        ),
        'norm_counts_ICPE_d1_4_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'ICPE d1 4 TPM'
        ),
        'norm_counts_ICneg_d7_1_TPM' => array(
            'color' => '#00BE67',
            'name' => 'ICneg d7 1 TPM'
        ),
        'norm_counts_ICneg_d7_2_TPM' => array(
            'color' => '#00BE67',
            'name' => 'ICneg d7 2 TPM'
        ),
        'norm_counts_ICneg_d7_3_TPM' => array(
            'color' => '#00BE67',
            'name' => 'ICneg d7 3 TPM'
        ),
        'norm_counts_ICneg_d7_4_TPM' => array(
            'color' => '#00BE67',
            'name' => 'ICneg d7 4 TPM'
        ),
        'norm_counts_ICPE_d7_1_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'ICPE d7 1 TPM'
        ),
        'norm_counts_ICPE_d7_2_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'ICPE d7 2 TPM'
        ),
        'norm_counts_ICPE_d7_3_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'ICPE d7 3 TPM'
        ),
        'norm_counts_ICPE_d7_4_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'ICPE d7 4 TPM'
        ),
        'norm_counts_IC488_d71_1_TPM' => array(
            'color' => '#CD9600',
            'name' => 'IC488 d71 1 TPM'
        ),
        'norm_counts_IC488_d71_2_TPM' => array(
            'color' => '#CD9600',
            'name' => 'IC488 d71 2 TPM'
        ),
        'norm_counts_IC488_d71_3_TPM' => array(
            'color' => '#CD9600',
            'name' => 'IC488 d71 3 TPM'
        ),
        'norm_counts_ICPEIC488_d71_1_TPM' => array(
            'color' => '#FF61CC',
            'name' => 'ICPEIC488 d71 1 TPM'
        ),
        'norm_counts_ICPEIC488_d71_2_TPM' => array(
            'color' => '#FF61CC',
            'name' => 'ICPEIC488 d71 2 TPM'
        ),
        'norm_counts_ICPEIC488_d71_3_TPM' => array(
            'color' => '#FF61CC',
            'name' => 'ICPEIC488 d71 3 TPM'
        ),
        'norm_counts_ICPEIC488_d71_4_TPM' => array(
            'color' => '#FF61CC',
            'name' => 'ICPEIC488 d71 4 TPM'
        ),
        'norm_counts_ICneg_d14_1_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'ICneg d14 1 TPM'
        ),
        'norm_counts_ICneg_d14_2_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'ICneg d14 2 TPM'
        ),
        'norm_counts_ICneg_d14_3_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'ICneg d14 3 TPM'
        ),
        'norm_counts_ICneg_d14_4_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'ICneg d14 4 TPM'
        ),
        'norm_counts_ICPE_d14_1_TPM' => array(
            'color' => '#00A9FF',
            'name' => 'ICPE d14 1 TPM'
        ),
        'norm_counts_ICPE_d14_2_TPM' => array(
            'color' => '#00A9FF',
            'name' => 'ICPE d14 2 TPM'
        ),
        'norm_counts_ICPE_d14_3_TPM' => array(
            'color' => '#00A9FF',
            'name' => 'ICPE d14 3 TPM'
        ),
        'norm_counts_ICPE_d14_4_TPM' => array(
            'color' => '#00A9FF',
            'name' => 'ICPE d14 4 TPM'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Ctrl_d0_1_TPM','lg2_avg_Ctrl_d0_2_TPM','lg2_avg_Ctrl_d0_3_TPM','lg2_avg_Ctrl_d0_4_TPM','lg2_avg_ICPE_d1_1_TPM','lg2_avg_ICPE_d1_2_TPM','lg2_avg_ICPE_d1_3_TPM','lg2_avg_ICPE_d1_4_TPM','lg2_avg_ICneg_d7_1_TPM','lg2_avg_ICneg_d7_2_TPM','lg2_avg_ICneg_d7_3_TPM','lg2_avg_ICneg_d7_4_TPM','lg2_avg_ICPE_d7_1_TPM','lg2_avg_ICPE_d7_2_TPM','lg2_avg_ICPE_d7_3_TPM','lg2_avg_ICPE_d7_4_TPM','lg2_avg_IC488_d71_1_TPM','lg2_avg_IC488_d71_2_TPM','lg2_avg_IC488_d71_3_TPM','lg2_avg_ICPEIC488_d71_1_TPM','lg2_avg_ICPEIC488_d71_2_TPM','lg2_avg_ICPEIC488_d71_3_TPM','lg2_avg_ICPEIC488_d71_4_TPM','lg2_avg_ICneg_d14_1_TPM','lg2_avg_ICneg_d14_2_TPM','lg2_avg_ICneg_d14_3_TPM','lg2_avg_ICneg_d14_4_TPM','lg2_avg_ICPE_d14_1_TPM','lg2_avg_ICPE_d14_2_TPM','lg2_avg_ICPE_d14_3_TPM','lg2_avg_ICPE_d14_4_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_ICPE_d1_vs_ICPE_d7' => array(
            'name' => 'logFC ICPE d1 vs ICPE d7',
            'slider_min' => -11,
            'slider_max' => 9,
            'default_low' => -11,
            'default_high' => 9
        ),
        'contrast_1_padj_ICPE_d1_vs_ICPE_d7' => array(
            'name' => 'padj ICPE d1 vs ICPE d7',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_ICPE_d1_vs_ICPE_d14' => array(
            'name' => 'logFC ICPE d1 vs ICPE d14',
            'slider_min' => -11,
            'slider_max' => 12,
            'default_low' => -11,
            'default_high' => 12
        ),
        'contrast_2_padj_ICPE_d1_vs_ICPE_d14' => array(
            'name' => 'padj ICPE d1 vs ICPE d14',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_ICPE_d7_vs_ICPE_d14' => array(
            'name' => 'logFC ICPE d7 vs ICPE d14',
            'slider_min' => -9,
            'slider_max' => 11,
            'default_low' => -9,
            'default_high' => 11
        ),
        'contrast_3_padj_ICPE_d7_vs_ICPE_d14' => array(
            'name' => 'padj ICPE d7 vs ICPE d14',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_logFC_Ctrl_d0_vs_ICPE_d1' => array(
            'name' => 'logFC Ctrl d0 vs ICPE d1',
            'slider_min' => -10,
            'slider_max' => 10,
            'default_low' => -10,
            'default_high' => 10
        ),
        'contrast_4_padj_Ctrl_d0_vs_ICPE_d1' => array(
            'name' => 'padj Ctrl d0 vs ICPE d1',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_5_logFC_Ctrl_d0_vs_ICPE_d7' => array(
            'name' => 'logFC Ctrl d0 vs ICPE d7',
            'slider_min' => -11,
            'slider_max' => 10,
            'default_low' => -11,
            'default_high' => 10
        ),
        'contrast_5_padj_Ctrl_d0_vs_ICPE_d7' => array(
            'name' => 'padj Ctrl d0 vs ICPE d7',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_6_logFC_Ctrl_d0_vs_ICPE_d14' => array(
            'name' => 'logFC Ctrl d0 vs ICPE d14',
            'slider_min' => -11,
            'slider_max' => 12,
            'default_low' => -11,
            'default_high' => 12
        ),
        'contrast_6_padj_Ctrl_d0_vs_ICPE_d14' => array(
            'name' => 'padj Ctrl d0 vs ICPE d14',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_7_logFC_ICneg_d7_vs_ICPE_d7' => array(
            'name' => 'logFC ICneg d7 vs ICPE d7',
            'slider_min' => -10,
            'slider_max' => 9,
            'default_low' => -10,
            'default_high' => 9
        ),
        'contrast_7_padj_ICneg_d7_vs_ICPE_d7' => array(
            'name' => 'padj ICneg d7 vs ICPE d7',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_8_logFC_ICneg_d14_vs_ICPE_d14' => array(
            'name' => 'logFC ICneg d14 vs ICPE d14',
            'slider_min' => -8,
            'slider_max' => 11,
            'default_low' => -8,
            'default_high' => 11
        ),
        'contrast_8_padj_ICneg_d14_vs_ICPE_d14' => array(
            'name' => 'padj ICneg d14 vs ICPE d14',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_9_logFC_Ctrl_d0_vs_ICneg_d14' => array(
            'name' => 'logFC Ctrl d0 vs ICneg d14',
            'slider_min' => -10,
            'slider_max' => 8,
            'default_low' => -10,
            'default_high' => 8
        ),
        'contrast_9_padj_Ctrl_d0_vs_ICneg_d14' => array(
            'name' => 'padj Ctrl d0 vs ICneg d14',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_10_logFC_IC488_d71_vs_ICPEIC488_d71' => array(
            'name' => '0 logFC IC488 d71 vs ICPEIC488 d71',
            'slider_min' => -12,
            'slider_max' => 12,
            'default_low' => -12,
            'default_high' => 12
        ),
        'contrast_10_padj_IC488_d71_vs_ICPEIC488_d71' => array(
            'name' => '0 padj IC488 d71 vs ICPEIC488 d71',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_11_logFC_ICPE_d1_vs_IC488_d71' => array(
            'name' => '1 logFC ICPE d1 vs IC488 d71',
            'slider_min' => -11,
            'slider_max' => 9,
            'default_low' => -11,
            'default_high' => 9
        ),
        'contrast_11_padj_ICPE_d1_vs_IC488_d71' => array(
            'name' => '1 padj ICPE d1 vs IC488 d71',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_12_logFC_ICPEIC488_d71_vs_ICPE_d7' => array(
            'name' => '2 logFC ICPEIC488 d71 vs ICPE d7',
            'slider_min' => -11,
            'slider_max' => 10,
            'default_low' => -11,
            'default_high' => 10
        ),
        'contrast_12_padj_ICPEIC488_d71_vs_ICPE_d7' => array(
            'name' => '2 padj ICPEIC488 d71 vs ICPE d7',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_L_lg10p_LRT_timepoint' => array(
            'name' => 'lg10p LRT timepoint',
            'slider_min' => 0,
            'slider_max' => 6,
            'default_low' => 0,
            'default_high' => 6
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'p363_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_ICPE_d1_vs_ICPE_d7',
        'default-y' => 'contrast_1_lg10p_ICPE_d1_vs_ICPE_d7',
        'selection' => array(
            'contrast_1_logFC_ICPE_d1_vs_ICPE_d7' => array(
                'name' => 'logFC ICPE d1 vs ICPE d7'
            ),
            'contrast_2_logFC_ICPE_d1_vs_ICPE_d14' => array(
                'name' => 'logFC ICPE d1 vs ICPE d14'
            ),
            'contrast_3_logFC_ICPE_d7_vs_ICPE_d14' => array(
                'name' => 'logFC ICPE d7 vs ICPE d14'
            ),
            'contrast_4_logFC_Ctrl_d0_vs_ICPE_d1' => array(
                'name' => 'logFC Ctrl d0 vs ICPE d1'
            ),
            'contrast_5_logFC_Ctrl_d0_vs_ICPE_d7' => array(
                'name' => 'logFC Ctrl d0 vs ICPE d7'
            ),
            'contrast_6_logFC_Ctrl_d0_vs_ICPE_d14' => array(
                'name' => 'logFC Ctrl d0 vs ICPE d14'
            ),
            'contrast_7_logFC_ICneg_d7_vs_ICPE_d7' => array(
                'name' => 'logFC ICneg d7 vs ICPE d7'
            ),
            'contrast_8_logFC_ICneg_d14_vs_ICPE_d14' => array(
                'name' => 'logFC ICneg d14 vs ICPE d14'
            ),
            'contrast_9_logFC_Ctrl_d0_vs_ICneg_d14' => array(
                'name' => 'logFC Ctrl d0 vs ICneg d14'
            ),
            'contrast_10_logFC_IC488_d71_vs_ICPEIC488_d71' => array(
                'name' => '0 logFC IC488 d71 vs ICPEIC488 d71'
            ),
            'contrast_11_logFC_ICPE_d1_vs_IC488_d71' => array(
                'name' => '1 logFC ICPE d1 vs IC488 d71'
            ),
            'contrast_12_logFC_ICPEIC488_d71_vs_ICPE_d7' => array(
                'name' => '2 logFC ICPEIC488 d71 vs ICPE d7'
            ),
            'contrast_1_lg10p_ICPE_d1_vs_ICPE_d7' => array(
                'name' => 'lg10p ICPE d1 vs ICPE d7'
            ),
            'contrast_2_lg10p_ICPE_d1_vs_ICPE_d14' => array(
                'name' => 'lg10p ICPE d1 vs ICPE d14'
            ),
            'contrast_3_lg10p_ICPE_d7_vs_ICPE_d14' => array(
                'name' => 'lg10p ICPE d7 vs ICPE d14'
            ),
            'contrast_4_lg10p_Ctrl_d0_vs_ICPE_d1' => array(
                'name' => 'lg10p Ctrl d0 vs ICPE d1'
            ),
            'contrast_5_lg10p_Ctrl_d0_vs_ICPE_d7' => array(
                'name' => 'lg10p Ctrl d0 vs ICPE d7'
            ),
            'contrast_6_lg10p_Ctrl_d0_vs_ICPE_d14' => array(
                'name' => 'lg10p Ctrl d0 vs ICPE d14'
            ),
            'contrast_7_lg10p_ICneg_d7_vs_ICPE_d7' => array(
                'name' => 'lg10p ICneg d7 vs ICPE d7'
            ),
            'contrast_8_lg10p_ICneg_d14_vs_ICPE_d14' => array(
                'name' => 'lg10p ICneg d14 vs ICPE d14'
            ),
            'contrast_9_lg10p_Ctrl_d0_vs_ICneg_d14' => array(
                'name' => 'lg10p Ctrl d0 vs ICneg d14'
            ),
            'contrast_10_lg10p_IC488_d71_vs_ICPEIC488_d71' => array(
                'name' => '0 lg10p IC488 d71 vs ICPEIC488 d71'
            ),
            'contrast_11_lg10p_ICPE_d1_vs_IC488_d71' => array(
                'name' => '1 lg10p ICPE d1 vs IC488 d71'
            ),
            'contrast_12_lg10p_ICPEIC488_d71_vs_ICPE_d7' => array(
                'name' => '2 lg10p ICPEIC488 d71 vs ICPE d7'
            ),
            'contrast_L_lg10p_LRT_timepoint' => array(
                'name' => 'lg10p LRT timepoint'
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
            'contrast_1_lg2BaseMean_ICPE_d1_vs_ICPE_d7' => array(
                'name' => 'lg2BaseMean ICPE d1 vs ICPE d7'
            ),
            'contrast_2_lg2BaseMean_ICPE_d1_vs_ICPE_d14' => array(
                'name' => 'lg2BaseMean ICPE d1 vs ICPE d14'
            ),
            'contrast_3_lg2BaseMean_ICPE_d7_vs_ICPE_d14' => array(
                'name' => 'lg2BaseMean ICPE d7 vs ICPE d14'
            ),
            'contrast_4_lg2BaseMean_Ctrl_d0_vs_ICPE_d1' => array(
                'name' => 'lg2BaseMean Ctrl d0 vs ICPE d1'
            ),
            'contrast_5_lg2BaseMean_Ctrl_d0_vs_ICPE_d7' => array(
                'name' => 'lg2BaseMean Ctrl d0 vs ICPE d7'
            ),
            'contrast_6_lg2BaseMean_Ctrl_d0_vs_ICPE_d14' => array(
                'name' => 'lg2BaseMean Ctrl d0 vs ICPE d14'
            ),
            'contrast_7_lg2BaseMean_ICneg_d7_vs_ICPE_d7' => array(
                'name' => 'lg2BaseMean ICneg d7 vs ICPE d7'
            ),
            'contrast_8_lg2BaseMean_ICneg_d14_vs_ICPE_d14' => array(
                'name' => 'lg2BaseMean ICneg d14 vs ICPE d14'
            ),
            'contrast_9_lg2BaseMean_Ctrl_d0_vs_ICneg_d14' => array(
                'name' => 'lg2BaseMean Ctrl d0 vs ICneg d14'
            ),
            'contrast_10_lg2BaseMean_IC488_d71_vs_ICPEIC488_d71' => array(
                'name' => '0 lg2BaseMean IC488 d71 vs ICPEIC488 d71'
            ),
            'contrast_11_lg2BaseMean_ICPE_d1_vs_IC488_d71' => array(
                'name' => '1 lg2BaseMean ICPE d1 vs IC488 d71'
            ),
            'contrast_12_lg2BaseMean_ICPEIC488_d71_vs_ICPE_d7' => array(
                'name' => '2 lg2BaseMean ICPEIC488 d71 vs ICPE d7'
            ),
            'contrast_L_lg2BaseMean_LRT_timepoint' => array(
                'name' => 'lg2BaseMean LRT timepoint'
            )
        )
    )
//End scatterplot
);
