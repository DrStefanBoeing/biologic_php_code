<?php

return array(
    'lab' => array(
        'name' => 'Ley DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'sll_data',
    'data_db' => array(
            'cat_table_name' => 'sll326_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'p326_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Ear_Il23IP_1_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'Ear Il23IP 1 TPM'
        ),
        'norm_counts_Ear_Il23IP_2_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'Ear Il23IP 2 TPM'
        ),
        'norm_counts_Ear_Il23IP_3_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'Ear Il23IP 3 TPM'
        ),
        'norm_counts_Ear_Il23IP_4_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'Ear Il23IP 4 TPM'
        ),
        'norm_counts_Ear_Il23PO_1_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Ear Il23PO 1 TPM'
        ),
        'norm_counts_Ear_Il23PO_2_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Ear Il23PO 2 TPM'
        ),
        'norm_counts_Ear_Il23PO_3_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Ear Il23PO 3 TPM'
        ),
        'norm_counts_Ear_Il23PO_4_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Ear Il23PO 4 TPM'
        ),
        'norm_counts_Ear_PbsIP_1_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'Ear PbsIP 1 TPM'
        ),
        'norm_counts_Ear_PbsIP_2_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'Ear PbsIP 2 TPM'
        ),
        'norm_counts_Ear_PbsIP_3_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'Ear PbsIP 3 TPM'
        ),
        'norm_counts_Ear_PbsIP_4_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'Ear PbsIP 4 TPM'
        ),
        'norm_counts_Ear_PbsPO_1_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'Ear PbsPO 1 TPM'
        ),
        'norm_counts_Ear_PbsPO_2_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'Ear PbsPO 2 TPM'
        ),
        'norm_counts_Ear_PbsPO_3_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'Ear PbsPO 3 TPM'
        ),
        'norm_counts_Ear_PbsPO_4_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'Ear PbsPO 4 TPM'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Ear_Il23IP_1_TPM','lg2_avg_Ear_Il23IP_2_TPM','lg2_avg_Ear_Il23IP_3_TPM','lg2_avg_Ear_Il23IP_4_TPM','lg2_avg_Ear_Il23PO_1_TPM','lg2_avg_Ear_Il23PO_2_TPM','lg2_avg_Ear_Il23PO_3_TPM','lg2_avg_Ear_Il23PO_4_TPM','lg2_avg_Ear_PbsIP_1_TPM','lg2_avg_Ear_PbsIP_2_TPM','lg2_avg_Ear_PbsIP_3_TPM','lg2_avg_Ear_PbsIP_4_TPM','lg2_avg_Ear_PbsPO_1_TPM','lg2_avg_Ear_PbsPO_2_TPM','lg2_avg_Ear_PbsPO_3_TPM','lg2_avg_Ear_PbsPO_4_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_Ear_Il23_vs_Ear_Pbs' => array(
            'name' => 'logFC Ear Il23 vs Ear Pbs',
            'slider_min' => -5,
            'slider_max' => 9,
            'default_low' => -5,
            'default_high' => 9
        ),
        'contrast_2_logFC_Ear_Il23IP_vs_Ear_PbsIP' => array(
            'name' => 'logFC Ear Il23IP vs Ear PbsIP',
            'slider_min' => -5,
            'slider_max' => 9,
            'default_low' => -5,
            'default_high' => 9
        ),
        'contrast_3_logFC_Ear_Il23PO_vs_Ear_PbsPO' => array(
            'name' => 'logFC Ear Il23PO vs Ear PbsPO',
            'slider_min' => -5,
            'slider_max' => 10,
            'default_low' => -5,
            'default_high' => 10
        ),
        'contrast_A1_logFC_Skin_Card14KI_vs_Skin_WT' => array(
            'name' => '1 logFC Skin Card14KI vs Skin WT',
            'slider_min' => -6,
            'slider_max' => 10,
            'default_low' => -6,
            'default_high' => 10
        ),
        'contrast_B1_logFC_CARD14E138A_0hr_vs_CARD14WT_0hr' => array(
            'name' => '1 logFC CARD14E138A 0hr vs CARD14WT 0hr',
            'slider_min' => -4,
            'slider_max' => 5,
            'default_low' => -4,
            'default_high' => 5
        ),
        'contrast_B2_logFC_CARD14E138A_3hr_vs_CARD14WT_3hr' => array(
            'name' => '2 logFC CARD14E138A 3hr vs CARD14WT 3hr',
            'slider_min' => -5,
            'slider_max' => 9,
            'default_low' => -5,
            'default_high' => 9
        ),
        'contrast_B3_logFC_CARD14E138A_6hr_vs_CARD14WT_6hr' => array(
            'name' => '3 logFC CARD14E138A 6hr vs CARD14WT 6hr',
            'slider_min' => -6,
            'slider_max' => 10,
            'default_low' => -6,
            'default_high' => 10
        ),
        'contrast_B4_logFC_CARD14E138A_9hr_vs_CARD14WT_9hr' => array(
            'name' => '4 logFC CARD14E138A 9hr vs CARD14WT 9hr',
            'slider_min' => -7,
            'slider_max' => 10,
            'default_low' => -7,
            'default_high' => 10
        ),
        'contrast_1_padj_Ear_Il23_vs_Ear_Pbs' => array(
            'name' => 'padj Ear Il23 vs Ear Pbs',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_padj_Ear_Il23IP_vs_Ear_PbsIP' => array(
            'name' => 'padj Ear Il23IP vs Ear PbsIP',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_padj_Ear_Il23PO_vs_Ear_PbsPO' => array(
            'name' => 'padj Ear Il23PO vs Ear PbsPO',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'p326_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_Ear_Il23_vs_Ear_Pbs',
        'default-y' => 'contrast_1_lg10p_Ear_Il23_vs_Ear_Pbs',
        'selection' => array(
            'contrast_1_logFC_Ear_Il23_vs_Ear_Pbs' => array(
                'name' => 'logFC Ear Il23 vs Ear Pbs'
            ),
            'contrast_2_logFC_Ear_Il23IP_vs_Ear_PbsIP' => array(
                'name' => 'logFC Ear Il23IP vs Ear PbsIP'
            ),
            'contrast_3_logFC_Ear_Il23PO_vs_Ear_PbsPO' => array(
                'name' => 'logFC Ear Il23PO vs Ear PbsPO'
            ),
            'contrast_A1_logFC_Skin_Card14KI_vs_Skin_WT' => array(
                'name' => '1 logFC Skin Card14KI vs Skin WT'
            ),
            'contrast_B1_logFC_CARD14E138A_0hr_vs_CARD14WT_0hr' => array(
                'name' => '1 logFC CARD14E138A 0hr vs CARD14WT 0hr'
            ),
            'contrast_B2_logFC_CARD14E138A_3hr_vs_CARD14WT_3hr' => array(
                'name' => '2 logFC CARD14E138A 3hr vs CARD14WT 3hr'
            ),
            'contrast_B3_logFC_CARD14E138A_6hr_vs_CARD14WT_6hr' => array(
                'name' => '3 logFC CARD14E138A 6hr vs CARD14WT 6hr'
            ),
            'contrast_B4_logFC_CARD14E138A_9hr_vs_CARD14WT_9hr' => array(
                'name' => '4 logFC CARD14E138A 9hr vs CARD14WT 9hr'
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
            'contrast_1_lg10p_Ear_Il23_vs_Ear_Pbs' => array(
                'name' => 'lg10p Ear Il23 vs Ear Pbs'
            ),
            'contrast_2_lg10p_Ear_Il23IP_vs_Ear_PbsIP' => array(
                'name' => 'lg10p Ear Il23IP vs Ear PbsIP'
            ),
            'contrast_3_lg10p_Ear_Il23PO_vs_Ear_PbsPO' => array(
                'name' => 'lg10p Ear Il23PO vs Ear PbsPO'
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
            'contrast_A1_lg10p_Skin_Card14KI_vs_Skin_WT' => array(
                'name' => '1 lg10p Skin Card14KI vs Skin WT'
            ),
            'contrast_B1_lg10p_CARD14E138A_0hr_vs_CARD14WT_0hr' => array(
                'name' => '1 lg10p CARD14E138A 0hr vs CARD14WT 0hr'
            ),
            'contrast_B2_lg10p_CARD14E138A_3hr_vs_CARD14WT_3hr' => array(
                'name' => '2 lg10p CARD14E138A 3hr vs CARD14WT 3hr'
            ),
            'contrast_B3_lg10p_CARD14E138A_6hr_vs_CARD14WT_6hr' => array(
                'name' => '3 lg10p CARD14E138A 6hr vs CARD14WT 6hr'
            ),
            'contrast_B4_lg10p_CARD14E138A_9hr_vs_CARD14WT_9hr' => array(
                'name' => '4 lg10p CARD14E138A 9hr vs CARD14WT 9hr'
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
            'contrast_1_lg2BaseMean_Ear_Il23_vs_Ear_Pbs' => array(
                'name' => 'lg2BaseMean Ear Il23 vs Ear Pbs'
            ),
            'contrast_2_lg2BaseMean_Ear_Il23IP_vs_Ear_PbsIP' => array(
                'name' => 'lg2BaseMean Ear Il23IP vs Ear PbsIP'
            ),
            'contrast_3_lg2BaseMean_Ear_Il23PO_vs_Ear_PbsPO' => array(
                'name' => 'lg2BaseMean Ear Il23PO vs Ear PbsPO'
            )
        )
    )
//End scatterplot
);
