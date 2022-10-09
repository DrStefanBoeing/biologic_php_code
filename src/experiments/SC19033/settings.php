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
            'cat_table_name' => 'SC19033_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'SC19033_sc_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged Expr',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Avg_log10_Expr_AST_3m_14_AdS3' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr AST 3m 14 AdS3'
        ),
        'norm_counts_Avg_log10_Expr_AST_3m_14_AdS4' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr AST 3m 14 AdS4'
        ),
        'norm_counts_Avg_log10_Expr_AST_3m_14_AdS5' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr AST 3m 14 AdS5'
        ),
        'norm_counts_Avg_log10_Expr_AST_3m_5_AdS3' => array(
            'color' => '#ED813E',
            'name' => 'Avg log10 Expr AST 3m 5 AdS3'
        ),
        'norm_counts_Avg_log10_Expr_AST_3m_5_AdS4' => array(
            'color' => '#ED813E',
            'name' => 'Avg log10 Expr AST 3m 5 AdS4'
        ),
        'norm_counts_Avg_log10_Expr_AST_3m_5_AdS5' => array(
            'color' => '#ED813E',
            'name' => 'Avg log10 Expr AST 3m 5 AdS5'
        ),
        'norm_counts_Avg_log10_Expr_AST_3m_5_P3S3' => array(
            'color' => '#ED813E',
            'name' => 'Avg log10 Expr AST 3m 5 P3S3'
        ),
        'norm_counts_Avg_log10_Expr_AST_3m_5_P3S4' => array(
            'color' => '#ED813E',
            'name' => 'Avg log10 Expr AST 3m 5 P3S4'
        ),
        'norm_counts_Avg_log10_Expr_AST_3m_5_P3S5' => array(
            'color' => '#ED813E',
            'name' => 'Avg log10 Expr AST 3m 5 P3S5'
        ),
        'norm_counts_Avg_log10_Expr_AST_P3_0_P3S3' => array(
            'color' => '#DE8C00',
            'name' => 'Avg log10 Expr AST P3 0 P3S3'
        ),
        'norm_counts_Avg_log10_Expr_AST_P3_0_P3S4' => array(
            'color' => '#DE8C00',
            'name' => 'Avg log10 Expr AST P3 0 P3S4'
        ),
        'norm_counts_Avg_log10_Expr_AST_P3_0_P3S5' => array(
            'color' => '#DE8C00',
            'name' => 'Avg log10 Expr AST P3 0 P3S5'
        ),
        'norm_counts_Avg_log10_Expr_AST_P3_11_AdS4' => array(
            'color' => '#CD9600',
            'name' => 'Avg log10 Expr AST P3 11 AdS4'
        ),
        'norm_counts_Avg_log10_Expr_AST_P3_11_P3S3' => array(
            'color' => '#CD9600',
            'name' => 'Avg log10 Expr AST P3 11 P3S3'
        ),
        'norm_counts_Avg_log10_Expr_AST_P3_11_P3S4' => array(
            'color' => '#CD9600',
            'name' => 'Avg log10 Expr AST P3 11 P3S4'
        ),
        'norm_counts_Avg_log10_Expr_AST_P3_11_P3S5' => array(
            'color' => '#CD9600',
            'name' => 'Avg log10 Expr AST P3 11 P3S5'
        ),
        'norm_counts_Avg_log10_Expr_AST_P3_15_P3S3' => array(
            'color' => '#B79F00',
            'name' => 'Avg log10 Expr AST P3 15 P3S3'
        ),
        'norm_counts_Avg_log10_Expr_AST_P3_15_P3S4' => array(
            'color' => '#B79F00',
            'name' => 'Avg log10 Expr AST P3 15 P3S4'
        ),
        'norm_counts_Avg_log10_Expr_AST_P3_15_P3S5' => array(
            'color' => '#B79F00',
            'name' => 'Avg log10 Expr AST P3 15 P3S5'
        ),
        'norm_counts_Avg_log10_Expr_AST_P3_19_P3S3' => array(
            'color' => '#9DA700',
            'name' => 'Avg log10 Expr AST P3 19 P3S3'
        ),
        'norm_counts_Avg_log10_Expr_AST_P3_19_P3S4' => array(
            'color' => '#9DA700',
            'name' => 'Avg log10 Expr AST P3 19 P3S4'
        ),
        'norm_counts_Avg_log10_Expr_AST_P3_19_P3S5' => array(
            'color' => '#9DA700',
            'name' => 'Avg log10 Expr AST P3 19 P3S5'
        ),
        'norm_counts_Avg_log10_Expr_AST_P3_1_AdS4' => array(
            'color' => '#7CAE00',
            'name' => 'Avg log10 Expr AST P3 1 AdS4'
        ),
        'norm_counts_Avg_log10_Expr_AST_P3_1_P3S3' => array(
            'color' => '#7CAE00',
            'name' => 'Avg log10 Expr AST P3 1 P3S3'
        ),
        'norm_counts_Avg_log10_Expr_AST_P3_1_P3S4' => array(
            'color' => '#7CAE00',
            'name' => 'Avg log10 Expr AST P3 1 P3S4'
        ),
        'norm_counts_Avg_log10_Expr_AST_P3_1_P3S5' => array(
            'color' => '#7CAE00',
            'name' => 'Avg log10 Expr AST P3 1 P3S5'
        ),
        'norm_counts_Avg_log10_Expr_AST_P3_3_AdS4' => array(
            'color' => '#49B500',
            'name' => 'Avg log10 Expr AST P3 3 AdS4'
        ),
        'norm_counts_Avg_log10_Expr_AST_P3_3_P3S3' => array(
            'color' => '#49B500',
            'name' => 'Avg log10 Expr AST P3 3 P3S3'
        ),
        'norm_counts_Avg_log10_Expr_AST_P3_3_P3S4' => array(
            'color' => '#49B500',
            'name' => 'Avg log10 Expr AST P3 3 P3S4'
        ),
        'norm_counts_Avg_log10_Expr_AST_P3_3_P3S5' => array(
            'color' => '#49B500',
            'name' => 'Avg log10 Expr AST P3 3 P3S5'
        ),
        'norm_counts_Avg_log10_Expr_AST_P3_4_AdS5' => array(
            'color' => '#00BA38',
            'name' => 'Avg log10 Expr AST P3 4 AdS5'
        ),
        'norm_counts_Avg_log10_Expr_AST_P3_4_P3S3' => array(
            'color' => '#00BA38',
            'name' => 'Avg log10 Expr AST P3 4 P3S3'
        ),
        'norm_counts_Avg_log10_Expr_AST_P3_4_P3S4' => array(
            'color' => '#00BA38',
            'name' => 'Avg log10 Expr AST P3 4 P3S4'
        ),
        'norm_counts_Avg_log10_Expr_AST_P3_4_P3S5' => array(
            'color' => '#00BA38',
            'name' => 'Avg log10 Expr AST P3 4 P3S5'
        ),
        'norm_counts_Avg_log10_Expr_END_12_P3S3' => array(
            'color' => '#00BE67',
            'name' => 'Avg log10 Expr END 12 P3S3'
        ),
        'norm_counts_Avg_log10_Expr_END_12_P3S4' => array(
            'color' => '#00BE67',
            'name' => 'Avg log10 Expr END 12 P3S4'
        ),
        'norm_counts_Avg_log10_Expr_END_12_P3S5' => array(
            'color' => '#00BE67',
            'name' => 'Avg log10 Expr END 12 P3S5'
        ),
        'norm_counts_Avg_log10_Expr_END_13_AdS5' => array(
            'color' => '#00C08B',
            'name' => 'Avg log10 Expr END 13 AdS5'
        ),
        'norm_counts_Avg_log10_Expr_END_13_P3S3' => array(
            'color' => '#00C08B',
            'name' => 'Avg log10 Expr END 13 P3S3'
        ),
        'norm_counts_Avg_log10_Expr_END_13_P3S4' => array(
            'color' => '#00C08B',
            'name' => 'Avg log10 Expr END 13 P3S4'
        ),
        'norm_counts_Avg_log10_Expr_END_13_P3S5' => array(
            'color' => '#00C08B',
            'name' => 'Avg log10 Expr END 13 P3S5'
        ),
        'norm_counts_Avg_log10_Expr_END_17_AdS3' => array(
            'color' => '#00C1A9',
            'name' => 'Avg log10 Expr END 17 AdS3'
        ),
        'norm_counts_Avg_log10_Expr_END_17_AdS4' => array(
            'color' => '#00C1A9',
            'name' => 'Avg log10 Expr END 17 AdS4'
        ),
        'norm_counts_Avg_log10_Expr_END_17_AdS5' => array(
            'color' => '#00C1A9',
            'name' => 'Avg log10 Expr END 17 AdS5'
        ),
        'norm_counts_Avg_log10_Expr_END_17_P3S3' => array(
            'color' => '#00C1A9',
            'name' => 'Avg log10 Expr END 17 P3S3'
        ),
        'norm_counts_Avg_log10_Expr_END_7_P3S3' => array(
            'color' => '#00BFC4',
            'name' => 'Avg log10 Expr END 7 P3S3'
        ),
        'norm_counts_Avg_log10_Expr_END_7_P3S4' => array(
            'color' => '#00BFC4',
            'name' => 'Avg log10 Expr END 7 P3S4'
        ),
        'norm_counts_Avg_log10_Expr_END_7_P3S5' => array(
            'color' => '#00BFC4',
            'name' => 'Avg log10 Expr END 7 P3S5'
        ),
        'norm_counts_Avg_log10_Expr_GPC_8_P3S3' => array(
            'color' => '#00BBDC',
            'name' => 'Avg log10 Expr GPC 8 P3S3'
        ),
        'norm_counts_Avg_log10_Expr_GPC_8_P3S4' => array(
            'color' => '#00BBDC',
            'name' => 'Avg log10 Expr GPC 8 P3S4'
        ),
        'norm_counts_Avg_log10_Expr_GPC_8_P3S5' => array(
            'color' => '#00BBDC',
            'name' => 'Avg log10 Expr GPC 8 P3S5'
        ),
        'norm_counts_Avg_log10_Expr_GPC_9_P3S3' => array(
            'color' => '#00B4F0',
            'name' => 'Avg log10 Expr GPC 9 P3S3'
        ),
        'norm_counts_Avg_log10_Expr_GPC_9_P3S4' => array(
            'color' => '#00B4F0',
            'name' => 'Avg log10 Expr GPC 9 P3S4'
        ),
        'norm_counts_Avg_log10_Expr_GPC_9_P3S5' => array(
            'color' => '#00B4F0',
            'name' => 'Avg log10 Expr GPC 9 P3S5'
        ),
        'norm_counts_Avg_log10_Expr_LOW_20_P3S3' => array(
            'color' => '#00A9FF',
            'name' => 'Avg log10 Expr LOW 20 P3S3'
        ),
        'norm_counts_Avg_log10_Expr_LOW_20_P3S4' => array(
            'color' => '#00A9FF',
            'name' => 'Avg log10 Expr LOW 20 P3S4'
        ),
        'norm_counts_Avg_log10_Expr_LOW_20_P3S5' => array(
            'color' => '#00A9FF',
            'name' => 'Avg log10 Expr LOW 20 P3S5'
        ),
        'norm_counts_Avg_log10_Expr_LOW_21_AdS3' => array(
            'color' => '#619CFF',
            'name' => 'Avg log10 Expr LOW 21 AdS3'
        ),
        'norm_counts_Avg_log10_Expr_LOW_21_AdS4' => array(
            'color' => '#619CFF',
            'name' => 'Avg log10 Expr LOW 21 AdS4'
        ),
        'norm_counts_Avg_log10_Expr_LOW_21_AdS5' => array(
            'color' => '#619CFF',
            'name' => 'Avg log10 Expr LOW 21 AdS5'
        ),
        'norm_counts_Avg_log10_Expr_LOW_23_AdS4' => array(
            'color' => '#9F8CFF',
            'name' => 'Avg log10 Expr LOW 23 AdS4'
        ),
        'norm_counts_Avg_log10_Expr_LOW_23_P3S3' => array(
            'color' => '#9F8CFF',
            'name' => 'Avg log10 Expr LOW 23 P3S3'
        ),
        'norm_counts_Avg_log10_Expr_LOW_23_P3S4' => array(
            'color' => '#9F8CFF',
            'name' => 'Avg log10 Expr LOW 23 P3S4'
        ),
        'norm_counts_Avg_log10_Expr_LOW_23_P3S5' => array(
            'color' => '#9F8CFF',
            'name' => 'Avg log10 Expr LOW 23 P3S5'
        ),
        'norm_counts_Avg_log10_Expr_MIC_16_AdS3' => array(
            'color' => '#C77CFF',
            'name' => 'Avg log10 Expr MIC 16 AdS3'
        ),
        'norm_counts_Avg_log10_Expr_MIC_16_AdS4' => array(
            'color' => '#C77CFF',
            'name' => 'Avg log10 Expr MIC 16 AdS4'
        ),
        'norm_counts_Avg_log10_Expr_MIC_16_AdS5' => array(
            'color' => '#C77CFF',
            'name' => 'Avg log10 Expr MIC 16 AdS5'
        ),
        'norm_counts_Avg_log10_Expr_MIC_16_P3S3' => array(
            'color' => '#C77CFF',
            'name' => 'Avg log10 Expr MIC 16 P3S3'
        ),
        'norm_counts_Avg_log10_Expr_MIC_16_P3S4' => array(
            'color' => '#C77CFF',
            'name' => 'Avg log10 Expr MIC 16 P3S4'
        ),
        'norm_counts_Avg_log10_Expr_MIC_16_P3S5' => array(
            'color' => '#C77CFF',
            'name' => 'Avg log10 Expr MIC 16 P3S5'
        ),
        'norm_counts_Avg_log10_Expr_NEU_22_P3S3' => array(
            'color' => '#E36EF6',
            'name' => 'Avg log10 Expr NEU 22 P3S3'
        ),
        'norm_counts_Avg_log10_Expr_NEU_22_P3S4' => array(
            'color' => '#E36EF6',
            'name' => 'Avg log10 Expr NEU 22 P3S4'
        ),
        'norm_counts_Avg_log10_Expr_NEU_22_P3S5' => array(
            'color' => '#E36EF6',
            'name' => 'Avg log10 Expr NEU 22 P3S5'
        ),
        'norm_counts_Avg_log10_Expr_ODC_10_AdS3' => array(
            'color' => '#F564E3',
            'name' => 'Avg log10 Expr ODC 10 AdS3'
        ),
        'norm_counts_Avg_log10_Expr_ODC_10_AdS4' => array(
            'color' => '#F564E3',
            'name' => 'Avg log10 Expr ODC 10 AdS4'
        ),
        'norm_counts_Avg_log10_Expr_ODC_10_AdS5' => array(
            'color' => '#F564E3',
            'name' => 'Avg log10 Expr ODC 10 AdS5'
        ),
        'norm_counts_Avg_log10_Expr_ODC_2_AdS3' => array(
            'color' => '#FF61CC',
            'name' => 'Avg log10 Expr ODC 2 AdS3'
        ),
        'norm_counts_Avg_log10_Expr_ODC_2_AdS4' => array(
            'color' => '#FF61CC',
            'name' => 'Avg log10 Expr ODC 2 AdS4'
        ),
        'norm_counts_Avg_log10_Expr_ODC_2_AdS5' => array(
            'color' => '#FF61CC',
            'name' => 'Avg log10 Expr ODC 2 AdS5'
        ),
        'norm_counts_Avg_log10_Expr_OPC_18_AdS3' => array(
            'color' => '#FF64B0',
            'name' => 'Avg log10 Expr OPC 18 AdS3'
        ),
        'norm_counts_Avg_log10_Expr_OPC_18_AdS4' => array(
            'color' => '#FF64B0',
            'name' => 'Avg log10 Expr OPC 18 AdS4'
        ),
        'norm_counts_Avg_log10_Expr_OPC_18_AdS5' => array(
            'color' => '#FF64B0',
            'name' => 'Avg log10 Expr OPC 18 AdS5'
        ),
        'norm_counts_Avg_log10_Expr_OPC_18_P3S3' => array(
            'color' => '#FF64B0',
            'name' => 'Avg log10 Expr OPC 18 P3S3'
        ),
        'norm_counts_Avg_log10_Expr_OPC_18_P3S4' => array(
            'color' => '#FF64B0',
            'name' => 'Avg log10 Expr OPC 18 P3S4'
        ),
        'norm_counts_Avg_log10_Expr_OPC_18_P3S5' => array(
            'color' => '#FF64B0',
            'name' => 'Avg log10 Expr OPC 18 P3S5'
        ),
        'norm_counts_Avg_log10_Expr_PER_6_AdS3' => array(
            'color' => '#FF6C91',
            'name' => 'Avg log10 Expr PER 6 AdS3'
        ),
        'norm_counts_Avg_log10_Expr_PER_6_AdS4' => array(
            'color' => '#FF6C91',
            'name' => 'Avg log10 Expr PER 6 AdS4'
        ),
        'norm_counts_Avg_log10_Expr_PER_6_AdS5' => array(
            'color' => '#FF6C91',
            'name' => 'Avg log10 Expr PER 6 AdS5'
        ),
        'norm_counts_Avg_log10_Expr_PER_6_P3S3' => array(
            'color' => '#FF6C91',
            'name' => 'Avg log10 Expr PER 6 P3S3'
        ),
        'norm_counts_Avg_log10_Expr_PER_6_P3S4' => array(
            'color' => '#FF6C91',
            'name' => 'Avg log10 Expr PER 6 P3S4'
        ),
        'norm_counts_Avg_log10_Expr_PER_6_P3S5' => array(
            'color' => '#FF6C91',
            'name' => 'Avg log10 Expr PER 6 P3S5'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'lg10 Expr for all Samples',
        'sidelabel' => 'lg10 Expr'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Avg_log10_Expr_Sc_AST_3m_14_AdS3','lg2_avg_Avg_log10_Expr_Sc_AST_3m_14_AdS4','lg2_avg_Avg_log10_Expr_Sc_AST_3m_14_AdS5','lg2_avg_Avg_log10_Expr_Sc_AST_3m_5_AdS3','lg2_avg_Avg_log10_Expr_Sc_AST_3m_5_AdS4','lg2_avg_Avg_log10_Expr_Sc_AST_3m_5_AdS5','lg2_avg_Avg_log10_Expr_Sc_AST_3m_5_P3S3','lg2_avg_Avg_log10_Expr_Sc_AST_3m_5_P3S4','lg2_avg_Avg_log10_Expr_Sc_AST_3m_5_P3S5','lg2_avg_Avg_log10_Expr_Sc_AST_P3_0_P3S3','lg2_avg_Avg_log10_Expr_Sc_AST_P3_0_P3S4','lg2_avg_Avg_log10_Expr_Sc_AST_P3_0_P3S5','lg2_avg_Avg_log10_Expr_Sc_AST_P3_11_AdS4','lg2_avg_Avg_log10_Expr_Sc_AST_P3_11_P3S3','lg2_avg_Avg_log10_Expr_Sc_AST_P3_11_P3S4','lg2_avg_Avg_log10_Expr_Sc_AST_P3_11_P3S5','lg2_avg_Avg_log10_Expr_Sc_AST_P3_15_P3S3','lg2_avg_Avg_log10_Expr_Sc_AST_P3_15_P3S4','lg2_avg_Avg_log10_Expr_Sc_AST_P3_15_P3S5','lg2_avg_Avg_log10_Expr_Sc_AST_P3_19_P3S3','lg2_avg_Avg_log10_Expr_Sc_AST_P3_19_P3S4','lg2_avg_Avg_log10_Expr_Sc_AST_P3_19_P3S5','lg2_avg_Avg_log10_Expr_Sc_AST_P3_1_AdS4','lg2_avg_Avg_log10_Expr_Sc_AST_P3_1_P3S3','lg2_avg_Avg_log10_Expr_Sc_AST_P3_1_P3S4','lg2_avg_Avg_log10_Expr_Sc_AST_P3_1_P3S5','lg2_avg_Avg_log10_Expr_Sc_AST_P3_3_AdS4','lg2_avg_Avg_log10_Expr_Sc_AST_P3_3_P3S3','lg2_avg_Avg_log10_Expr_Sc_AST_P3_3_P3S4','lg2_avg_Avg_log10_Expr_Sc_AST_P3_3_P3S5','lg2_avg_Avg_log10_Expr_Sc_AST_P3_4_AdS5','lg2_avg_Avg_log10_Expr_Sc_AST_P3_4_P3S3','lg2_avg_Avg_log10_Expr_Sc_AST_P3_4_P3S4','lg2_avg_Avg_log10_Expr_Sc_AST_P3_4_P3S5','lg2_avg_Avg_log10_Expr_Sc_END_12_P3S3','lg2_avg_Avg_log10_Expr_Sc_END_12_P3S4','lg2_avg_Avg_log10_Expr_Sc_END_12_P3S5','lg2_avg_Avg_log10_Expr_Sc_END_13_AdS5','lg2_avg_Avg_log10_Expr_Sc_END_13_P3S3','lg2_avg_Avg_log10_Expr_Sc_END_13_P3S4','lg2_avg_Avg_log10_Expr_Sc_END_13_P3S5','lg2_avg_Avg_log10_Expr_Sc_END_17_AdS3','lg2_avg_Avg_log10_Expr_Sc_END_17_AdS4','lg2_avg_Avg_log10_Expr_Sc_END_17_AdS5','lg2_avg_Avg_log10_Expr_Sc_END_17_P3S3','lg2_avg_Avg_log10_Expr_Sc_END_7_P3S3','lg2_avg_Avg_log10_Expr_Sc_END_7_P3S4','lg2_avg_Avg_log10_Expr_Sc_END_7_P3S5','lg2_avg_Avg_log10_Expr_Sc_GPC_8_P3S3','lg2_avg_Avg_log10_Expr_Sc_GPC_8_P3S4','lg2_avg_Avg_log10_Expr_Sc_GPC_8_P3S5','lg2_avg_Avg_log10_Expr_Sc_GPC_9_P3S3','lg2_avg_Avg_log10_Expr_Sc_GPC_9_P3S4','lg2_avg_Avg_log10_Expr_Sc_GPC_9_P3S5','lg2_avg_Avg_log10_Expr_Sc_LOW_20_P3S3','lg2_avg_Avg_log10_Expr_Sc_LOW_20_P3S4','lg2_avg_Avg_log10_Expr_Sc_LOW_20_P3S5','lg2_avg_Avg_log10_Expr_Sc_LOW_21_AdS3','lg2_avg_Avg_log10_Expr_Sc_LOW_21_AdS4','lg2_avg_Avg_log10_Expr_Sc_LOW_21_AdS5','lg2_avg_Avg_log10_Expr_Sc_LOW_23_AdS4','lg2_avg_Avg_log10_Expr_Sc_LOW_23_P3S3','lg2_avg_Avg_log10_Expr_Sc_LOW_23_P3S4','lg2_avg_Avg_log10_Expr_Sc_LOW_23_P3S5','lg2_avg_Avg_log10_Expr_Sc_MIC_16_AdS3','lg2_avg_Avg_log10_Expr_Sc_MIC_16_AdS4','lg2_avg_Avg_log10_Expr_Sc_MIC_16_AdS5','lg2_avg_Avg_log10_Expr_Sc_MIC_16_P3S3','lg2_avg_Avg_log10_Expr_Sc_MIC_16_P3S4','lg2_avg_Avg_log10_Expr_Sc_MIC_16_P3S5','lg2_avg_Avg_log10_Expr_Sc_NEU_22_P3S3','lg2_avg_Avg_log10_Expr_Sc_NEU_22_P3S4','lg2_avg_Avg_log10_Expr_Sc_NEU_22_P3S5','lg2_avg_Avg_log10_Expr_Sc_ODC_10_AdS3','lg2_avg_Avg_log10_Expr_Sc_ODC_10_AdS4','lg2_avg_Avg_log10_Expr_Sc_ODC_10_AdS5','lg2_avg_Avg_log10_Expr_Sc_ODC_2_AdS3','lg2_avg_Avg_log10_Expr_Sc_ODC_2_AdS4','lg2_avg_Avg_log10_Expr_Sc_ODC_2_AdS5','lg2_avg_Avg_log10_Expr_Sc_OPC_18_AdS3','lg2_avg_Avg_log10_Expr_Sc_OPC_18_AdS4','lg2_avg_Avg_log10_Expr_Sc_OPC_18_AdS5','lg2_avg_Avg_log10_Expr_Sc_OPC_18_P3S3','lg2_avg_Avg_log10_Expr_Sc_OPC_18_P3S4','lg2_avg_Avg_log10_Expr_Sc_OPC_18_P3S5','lg2_avg_Avg_log10_Expr_Sc_PER_6_AdS3','lg2_avg_Avg_log10_Expr_Sc_PER_6_AdS4','lg2_avg_Avg_log10_Expr_Sc_PER_6_AdS5','lg2_avg_Avg_log10_Expr_Sc_PER_6_P3S3','lg2_avg_Avg_log10_Expr_Sc_PER_6_P3S4','lg2_avg_Avg_log10_Expr_Sc_PER_6_P3S5'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
            'name' => 'logFC Expressed in N Percent Cells',
            'slider_min' => 0,
            'slider_max' => 100,
            'default_low' => 0,
            'default_high' => 100
        ),
        'contrast_1_logFC_DGE_P3_vs_3m' => array(
            'name' => 'logFC DGE P3 vs 3m',
            'slider_min' => -16,
            'slider_max' => 11,
            'default_low' => -16,
            'default_high' => 11
        ),
        'contrast_1_padj_DGE_P3_vs_3m' => array(
            'name' => 'padj DGE P3 vs 3m',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_DGE_Astrocytes_P3_vs_3m' => array(
            'name' => 'logFC DGE Astrocytes P3 vs 3m',
            'slider_min' => -13,
            'slider_max' => 10,
            'default_low' => -13,
            'default_high' => 10
        ),
        'contrast_2_padj_DGE_Astrocytes_P3_vs_3m' => array(
            'name' => 'padj DGE Astrocytes P3 vs 3m',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'add_counts_AST_3m_14_Residuals' => array(
            'name' => 'AST 3m 14 Residuals',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'add_counts_AST_3m_5_Residuals' => array(
            'name' => 'AST 3m 5 Residuals',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'add_counts_AST_P3_0_Residuals' => array(
            'name' => 'AST P3 0 Residuals',
            'slider_min' => -4,
            'slider_max' => 2,
            'default_low' => -4,
            'default_high' => 2
        ),
        'add_counts_AST_P3_1_Residuals' => array(
            'name' => 'AST P3 1 Residuals',
            'slider_min' => -4,
            'slider_max' => 2,
            'default_low' => -4,
            'default_high' => 2
        ),
        'add_counts_AST_P3_11_Residuals' => array(
            'name' => 'AST P3 11 Residuals',
            'slider_min' => -4,
            'slider_max' => 2,
            'default_low' => -4,
            'default_high' => 2
        ),
        'add_counts_AST_P3_15_Residuals' => array(
            'name' => 'AST P3 15 Residuals',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'add_counts_AST_P3_19_Residuals' => array(
            'name' => 'AST P3 19 Residuals',
            'slider_min' => -4,
            'slider_max' => 3,
            'default_low' => -4,
            'default_high' => 3
        ),
        'add_counts_AST_P3_3_Residuals' => array(
            'name' => 'AST P3 3 Residuals',
            'slider_min' => -4,
            'slider_max' => 1,
            'default_low' => -4,
            'default_high' => 1
        ),
        'add_counts_AST_P3_4_Residuals' => array(
            'name' => 'AST P3 4 Residuals',
            'slider_min' => -4,
            'slider_max' => 2,
            'default_low' => -4,
            'default_high' => 2
        ),
        'add_counts_END_12_Residuals' => array(
            'name' => 'END 12 Residuals',
            'slider_min' => -4,
            'slider_max' => 4,
            'default_low' => -4,
            'default_high' => 4
        ),
        'add_counts_END_13_Residuals' => array(
            'name' => 'END 13 Residuals',
            'slider_min' => -4,
            'slider_max' => 3,
            'default_low' => -4,
            'default_high' => 3
        ),
        'add_counts_END_17_Residuals' => array(
            'name' => 'END 17 Residuals',
            'slider_min' => -5,
            'slider_max' => 4,
            'default_low' => -5,
            'default_high' => 4
        ),
        'add_counts_END_7_Residuals' => array(
            'name' => 'END 7 Residuals',
            'slider_min' => -4,
            'slider_max' => 3,
            'default_low' => -4,
            'default_high' => 3
        ),
        'add_counts_GPC_8_Residuals' => array(
            'name' => 'GPC 8 Residuals',
            'slider_min' => -4,
            'slider_max' => 3,
            'default_low' => -4,
            'default_high' => 3
        ),
        'add_counts_GPC_9_Residuals' => array(
            'name' => 'GPC 9 Residuals',
            'slider_min' => -4,
            'slider_max' => 2,
            'default_low' => -4,
            'default_high' => 2
        ),
        'add_counts_LOW_20_Residuals' => array(
            'name' => 'LOW 20 Residuals',
            'slider_min' => -2,
            'slider_max' => 4,
            'default_low' => -2,
            'default_high' => 4
        ),
        'add_counts_LOW_21_Residuals' => array(
            'name' => 'LOW 21 Residuals',
            'slider_min' => -4,
            'slider_max' => 5,
            'default_low' => -4,
            'default_high' => 5
        ),
        'add_counts_LOW_23_Residuals' => array(
            'name' => 'LOW 23 Residuals',
            'slider_min' => -3,
            'slider_max' => 4,
            'default_low' => -3,
            'default_high' => 4
        ),
        'add_counts_MIC_16_Residuals' => array(
            'name' => 'MIC 16 Residuals',
            'slider_min' => -2,
            'slider_max' => 4,
            'default_low' => -2,
            'default_high' => 4
        ),
        'add_counts_NEU_22_Residuals' => array(
            'name' => 'NEU 22 Residuals',
            'slider_min' => -3,
            'slider_max' => 4,
            'default_low' => -3,
            'default_high' => 4
        ),
        'add_counts_ODC_10_Residuals' => array(
            'name' => 'ODC 10 Residuals',
            'slider_min' => -4,
            'slider_max' => 4,
            'default_low' => -4,
            'default_high' => 4
        ),
        'add_counts_ODC_2_Residuals' => array(
            'name' => 'ODC 2 Residuals',
            'slider_min' => -4,
            'slider_max' => 3,
            'default_low' => -4,
            'default_high' => 3
        ),
        'add_counts_OPC_18_Residuals' => array(
            'name' => 'OPC 18 Residuals',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'add_counts_PER_6_Residuals' => array(
            'name' => 'PER 6 Residuals',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'SC19033_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'add_counts_Avg_log10_Expr_all',
        'default-y' => 'norm_counts_Avg_log10_Expr_AST_3m_14_AdS3',
        'selection' => array(
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg log10 Expr all'
            ),
            'norm_counts_Avg_log10_Expr_AST_3m_14_AdS3' => array(
                'name' => 's Avg log10 Expr AST 3m 14 AdS3'
            ),
            'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
                'name' => 'logFC Expressed in N Percent Cells'
            ),
            'contrast_1_logFC_DGE_P3_vs_3m' => array(
                'name' => 'logFC DGE P3 vs 3m'
            ),
            'contrast_2_logFC_DGE_Astrocytes_P3_vs_3m' => array(
                'name' => 'logFC DGE Astrocytes P3 vs 3m'
            ),
            'contrast_1_lg10p_DGE_P3_vs_3m' => array(
                'name' => 'lg10p DGE P3 vs 3m'
            ),
            'contrast_2_lg10p_DGE_Astrocytes_P3_vs_3m' => array(
                'name' => 'lg10p DGE Astrocytes P3 vs 3m'
            ),
            'add_counts_Avg_log10_Expr_AdS3' => array(
                'name' => 'Avg log10 Expr AdS3'
            ),
            'add_counts_Avg_log10_Expr_AdS4' => array(
                'name' => 'Avg log10 Expr AdS4'
            ),
            'add_counts_Avg_log10_Expr_AdS5' => array(
                'name' => 'Avg log10 Expr AdS5'
            ),
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg log10 Expr all'
            ),
            'add_counts_Avg_log10_Expr_AST_3m_14' => array(
                'name' => 'Avg log10 Expr AST 3m 14'
            ),
            'add_counts_Avg_log10_Expr_AST_3m_5' => array(
                'name' => 'Avg log10 Expr AST 3m 5'
            ),
            'add_counts_Avg_log10_Expr_AST_P3_0' => array(
                'name' => 'Avg log10 Expr AST P3 0'
            ),
            'add_counts_Avg_log10_Expr_AST_P3_1' => array(
                'name' => 'Avg log10 Expr AST P3 1'
            ),
            'add_counts_Avg_log10_Expr_AST_P3_11' => array(
                'name' => 'Avg log10 Expr AST P3 11'
            ),
            'add_counts_Avg_log10_Expr_AST_P3_15' => array(
                'name' => 'Avg log10 Expr AST P3 15'
            ),
            'add_counts_Avg_log10_Expr_AST_P3_19' => array(
                'name' => 'Avg log10 Expr AST P3 19'
            ),
            'add_counts_Avg_log10_Expr_AST_P3_11' => array(
                'name' => 'Avg log10 Expr AST P3 11'
            ),
            'add_counts_Avg_log10_Expr_AST_P3_15' => array(
                'name' => 'Avg log10 Expr AST P3 15'
            ),
            'add_counts_Avg_log10_Expr_AST_P3_19' => array(
                'name' => 'Avg log10 Expr AST P3 19'
            ),
            'add_counts_Avg_log10_Expr_AST_P3_3' => array(
                'name' => 'Avg log10 Expr AST P3 3'
            ),
            'add_counts_Avg_log10_Expr_AST_P3_4' => array(
                'name' => 'Avg log10 Expr AST P3 4'
            ),
            'add_counts_Avg_log10_Expr_END_12' => array(
                'name' => 'Avg log10 Expr END 12'
            ),
            'add_counts_Avg_log10_Expr_END_13' => array(
                'name' => 'Avg log10 Expr END 13'
            ),
            'add_counts_Avg_log10_Expr_END_17' => array(
                'name' => 'Avg log10 Expr END 17'
            ),
            'add_counts_Avg_log10_Expr_END_7' => array(
                'name' => 'Avg log10 Expr END 7'
            ),
            'add_counts_Avg_log10_Expr_GPC_8' => array(
                'name' => 'Avg log10 Expr GPC 8'
            ),
            'add_counts_Avg_log10_Expr_GPC_9' => array(
                'name' => 'Avg log10 Expr GPC 9'
            ),
            'add_counts_Avg_log10_Expr_LOW_20' => array(
                'name' => 'Avg log10 Expr LOW 20'
            ),
            'add_counts_Avg_log10_Expr_LOW_21' => array(
                'name' => 'Avg log10 Expr LOW 21'
            ),
            'add_counts_Avg_log10_Expr_LOW_23' => array(
                'name' => 'Avg log10 Expr LOW 23'
            ),
            'add_counts_Avg_log10_Expr_MIC_16' => array(
                'name' => 'Avg log10 Expr MIC 16'
            ),
            'add_counts_Avg_log10_Expr_NEU_22' => array(
                'name' => 'Avg log10 Expr NEU 22'
            ),
            'add_counts_Avg_log10_Expr_ODC_10' => array(
                'name' => 'Avg log10 Expr ODC 10'
            ),
            'add_counts_Avg_log10_Expr_ODC_2' => array(
                'name' => 'Avg log10 Expr ODC 2'
            ),
            'add_counts_Avg_log10_Expr_OPC_18' => array(
                'name' => 'Avg log10 Expr OPC 18'
            ),
            'add_counts_Avg_log10_Expr_P3S3' => array(
                'name' => 'Avg log10 Expr P3S3'
            ),
            'add_counts_Avg_log10_Expr_P3S4' => array(
                'name' => 'Avg log10 Expr P3S4'
            ),
            'add_counts_Avg_log10_Expr_P3S5' => array(
                'name' => 'Avg log10 Expr P3S5'
            ),
            'add_counts_Avg_log10_Expr_PER_6' => array(
                'name' => 'Avg log10 Expr PER 6'
            ),
            'norm_counts_Avg_log10_Expr_AST_3m_14_AdS3' => array(
                'name' => 's Avg log10 Expr AST 3m 14 AdS3'
            ),
            'norm_counts_Avg_log10_Expr_AST_3m_14_AdS4' => array(
                'name' => 's Avg log10 Expr AST 3m 14 AdS4'
            ),
            'norm_counts_Avg_log10_Expr_AST_3m_14_AdS5' => array(
                'name' => 's Avg log10 Expr AST 3m 14 AdS5'
            ),
            'norm_counts_Avg_log10_Expr_AST_3m_5_AdS3' => array(
                'name' => 's Avg log10 Expr AST 3m 5 AdS3'
            ),
            'norm_counts_Avg_log10_Expr_AST_3m_5_AdS4' => array(
                'name' => 's Avg log10 Expr AST 3m 5 AdS4'
            ),
            'norm_counts_Avg_log10_Expr_AST_3m_5_AdS5' => array(
                'name' => 's Avg log10 Expr AST 3m 5 AdS5'
            ),
            'norm_counts_Avg_log10_Expr_AST_3m_5_P3S3' => array(
                'name' => 's Avg log10 Expr AST 3m 5 P3S3'
            ),
            'norm_counts_Avg_log10_Expr_AST_3m_5_P3S4' => array(
                'name' => 's Avg log10 Expr AST 3m 5 P3S4'
            ),
            'norm_counts_Avg_log10_Expr_AST_3m_5_P3S5' => array(
                'name' => 's Avg log10 Expr AST 3m 5 P3S5'
            ),
            'norm_counts_Avg_log10_Expr_AST_P3_0_P3S3' => array(
                'name' => 's Avg log10 Expr AST P3 0 P3S3'
            ),
            'norm_counts_Avg_log10_Expr_AST_P3_0_P3S4' => array(
                'name' => 's Avg log10 Expr AST P3 0 P3S4'
            ),
            'norm_counts_Avg_log10_Expr_AST_P3_0_P3S5' => array(
                'name' => 's Avg log10 Expr AST P3 0 P3S5'
            ),
            'norm_counts_Avg_log10_Expr_AST_P3_11_AdS4' => array(
                'name' => 's Avg log10 Expr AST P3 11 AdS4'
            ),
            'norm_counts_Avg_log10_Expr_AST_P3_11_P3S3' => array(
                'name' => 's Avg log10 Expr AST P3 11 P3S3'
            ),
            'norm_counts_Avg_log10_Expr_AST_P3_11_P3S4' => array(
                'name' => 's Avg log10 Expr AST P3 11 P3S4'
            ),
            'norm_counts_Avg_log10_Expr_AST_P3_11_P3S5' => array(
                'name' => 's Avg log10 Expr AST P3 11 P3S5'
            ),
            'norm_counts_Avg_log10_Expr_AST_P3_15_P3S3' => array(
                'name' => 's Avg log10 Expr AST P3 15 P3S3'
            ),
            'norm_counts_Avg_log10_Expr_AST_P3_15_P3S4' => array(
                'name' => 's Avg log10 Expr AST P3 15 P3S4'
            ),
            'norm_counts_Avg_log10_Expr_AST_P3_15_P3S5' => array(
                'name' => 's Avg log10 Expr AST P3 15 P3S5'
            ),
            'norm_counts_Avg_log10_Expr_AST_P3_19_P3S3' => array(
                'name' => 's Avg log10 Expr AST P3 19 P3S3'
            ),
            'norm_counts_Avg_log10_Expr_AST_P3_19_P3S4' => array(
                'name' => 's Avg log10 Expr AST P3 19 P3S4'
            ),
            'norm_counts_Avg_log10_Expr_AST_P3_19_P3S5' => array(
                'name' => 's Avg log10 Expr AST P3 19 P3S5'
            ),
            'norm_counts_Avg_log10_Expr_AST_P3_1_AdS4' => array(
                'name' => 's Avg log10 Expr AST P3 1 AdS4'
            ),
            'norm_counts_Avg_log10_Expr_AST_P3_1_P3S3' => array(
                'name' => 's Avg log10 Expr AST P3 1 P3S3'
            ),
            'norm_counts_Avg_log10_Expr_AST_P3_1_P3S4' => array(
                'name' => 's Avg log10 Expr AST P3 1 P3S4'
            ),
            'norm_counts_Avg_log10_Expr_AST_P3_1_P3S5' => array(
                'name' => 's Avg log10 Expr AST P3 1 P3S5'
            ),
            'norm_counts_Avg_log10_Expr_AST_P3_3_AdS4' => array(
                'name' => 's Avg log10 Expr AST P3 3 AdS4'
            ),
            'norm_counts_Avg_log10_Expr_AST_P3_3_P3S3' => array(
                'name' => 's Avg log10 Expr AST P3 3 P3S3'
            ),
            'norm_counts_Avg_log10_Expr_AST_P3_3_P3S4' => array(
                'name' => 's Avg log10 Expr AST P3 3 P3S4'
            ),
            'norm_counts_Avg_log10_Expr_AST_P3_3_P3S5' => array(
                'name' => 's Avg log10 Expr AST P3 3 P3S5'
            ),
            'norm_counts_Avg_log10_Expr_AST_P3_4_AdS5' => array(
                'name' => 's Avg log10 Expr AST P3 4 AdS5'
            ),
            'norm_counts_Avg_log10_Expr_AST_P3_4_P3S3' => array(
                'name' => 's Avg log10 Expr AST P3 4 P3S3'
            ),
            'norm_counts_Avg_log10_Expr_AST_P3_4_P3S4' => array(
                'name' => 's Avg log10 Expr AST P3 4 P3S4'
            ),
            'norm_counts_Avg_log10_Expr_AST_P3_4_P3S5' => array(
                'name' => 's Avg log10 Expr AST P3 4 P3S5'
            ),
            'norm_counts_Avg_log10_Expr_END_12_P3S3' => array(
                'name' => 's Avg log10 Expr END 12 P3S3'
            ),
            'norm_counts_Avg_log10_Expr_END_12_P3S4' => array(
                'name' => 's Avg log10 Expr END 12 P3S4'
            ),
            'norm_counts_Avg_log10_Expr_END_12_P3S5' => array(
                'name' => 's Avg log10 Expr END 12 P3S5'
            ),
            'norm_counts_Avg_log10_Expr_END_13_AdS5' => array(
                'name' => 's Avg log10 Expr END 13 AdS5'
            ),
            'norm_counts_Avg_log10_Expr_END_13_P3S3' => array(
                'name' => 's Avg log10 Expr END 13 P3S3'
            ),
            'norm_counts_Avg_log10_Expr_END_13_P3S4' => array(
                'name' => 's Avg log10 Expr END 13 P3S4'
            ),
            'norm_counts_Avg_log10_Expr_END_13_P3S5' => array(
                'name' => 's Avg log10 Expr END 13 P3S5'
            ),
            'norm_counts_Avg_log10_Expr_END_17_AdS3' => array(
                'name' => 's Avg log10 Expr END 17 AdS3'
            ),
            'norm_counts_Avg_log10_Expr_END_17_AdS4' => array(
                'name' => 's Avg log10 Expr END 17 AdS4'
            ),
            'norm_counts_Avg_log10_Expr_END_17_AdS5' => array(
                'name' => 's Avg log10 Expr END 17 AdS5'
            ),
            'norm_counts_Avg_log10_Expr_END_17_P3S3' => array(
                'name' => 's Avg log10 Expr END 17 P3S3'
            ),
            'norm_counts_Avg_log10_Expr_END_7_P3S3' => array(
                'name' => 's Avg log10 Expr END 7 P3S3'
            ),
            'norm_counts_Avg_log10_Expr_END_7_P3S4' => array(
                'name' => 's Avg log10 Expr END 7 P3S4'
            ),
            'norm_counts_Avg_log10_Expr_END_7_P3S5' => array(
                'name' => 's Avg log10 Expr END 7 P3S5'
            ),
            'norm_counts_Avg_log10_Expr_GPC_8_P3S3' => array(
                'name' => 's Avg log10 Expr GPC 8 P3S3'
            ),
            'norm_counts_Avg_log10_Expr_GPC_8_P3S4' => array(
                'name' => 's Avg log10 Expr GPC 8 P3S4'
            ),
            'norm_counts_Avg_log10_Expr_GPC_8_P3S5' => array(
                'name' => 's Avg log10 Expr GPC 8 P3S5'
            ),
            'norm_counts_Avg_log10_Expr_GPC_9_P3S3' => array(
                'name' => 's Avg log10 Expr GPC 9 P3S3'
            ),
            'norm_counts_Avg_log10_Expr_GPC_9_P3S4' => array(
                'name' => 's Avg log10 Expr GPC 9 P3S4'
            ),
            'norm_counts_Avg_log10_Expr_GPC_9_P3S5' => array(
                'name' => 's Avg log10 Expr GPC 9 P3S5'
            ),
            'norm_counts_Avg_log10_Expr_LOW_20_P3S3' => array(
                'name' => 's Avg log10 Expr LOW 20 P3S3'
            ),
            'norm_counts_Avg_log10_Expr_LOW_20_P3S4' => array(
                'name' => 's Avg log10 Expr LOW 20 P3S4'
            ),
            'norm_counts_Avg_log10_Expr_LOW_20_P3S5' => array(
                'name' => 's Avg log10 Expr LOW 20 P3S5'
            ),
            'norm_counts_Avg_log10_Expr_LOW_21_AdS3' => array(
                'name' => 's Avg log10 Expr LOW 21 AdS3'
            ),
            'norm_counts_Avg_log10_Expr_LOW_21_AdS4' => array(
                'name' => 's Avg log10 Expr LOW 21 AdS4'
            ),
            'norm_counts_Avg_log10_Expr_LOW_21_AdS5' => array(
                'name' => 's Avg log10 Expr LOW 21 AdS5'
            ),
            'norm_counts_Avg_log10_Expr_LOW_23_AdS4' => array(
                'name' => 's Avg log10 Expr LOW 23 AdS4'
            ),
            'norm_counts_Avg_log10_Expr_LOW_23_P3S3' => array(
                'name' => 's Avg log10 Expr LOW 23 P3S3'
            ),
            'norm_counts_Avg_log10_Expr_LOW_23_P3S4' => array(
                'name' => 's Avg log10 Expr LOW 23 P3S4'
            ),
            'norm_counts_Avg_log10_Expr_LOW_23_P3S5' => array(
                'name' => 's Avg log10 Expr LOW 23 P3S5'
            ),
            'norm_counts_Avg_log10_Expr_MIC_16_AdS3' => array(
                'name' => 's Avg log10 Expr MIC 16 AdS3'
            ),
            'norm_counts_Avg_log10_Expr_MIC_16_AdS4' => array(
                'name' => 's Avg log10 Expr MIC 16 AdS4'
            ),
            'norm_counts_Avg_log10_Expr_MIC_16_AdS5' => array(
                'name' => 's Avg log10 Expr MIC 16 AdS5'
            ),
            'norm_counts_Avg_log10_Expr_MIC_16_P3S3' => array(
                'name' => 's Avg log10 Expr MIC 16 P3S3'
            ),
            'norm_counts_Avg_log10_Expr_MIC_16_P3S4' => array(
                'name' => 's Avg log10 Expr MIC 16 P3S4'
            ),
            'norm_counts_Avg_log10_Expr_MIC_16_P3S5' => array(
                'name' => 's Avg log10 Expr MIC 16 P3S5'
            ),
            'norm_counts_Avg_log10_Expr_NEU_22_P3S3' => array(
                'name' => 's Avg log10 Expr NEU 22 P3S3'
            ),
            'norm_counts_Avg_log10_Expr_NEU_22_P3S4' => array(
                'name' => 's Avg log10 Expr NEU 22 P3S4'
            ),
            'norm_counts_Avg_log10_Expr_NEU_22_P3S5' => array(
                'name' => 's Avg log10 Expr NEU 22 P3S5'
            ),
            'norm_counts_Avg_log10_Expr_ODC_10_AdS3' => array(
                'name' => 's Avg log10 Expr ODC 10 AdS3'
            ),
            'norm_counts_Avg_log10_Expr_ODC_10_AdS4' => array(
                'name' => 's Avg log10 Expr ODC 10 AdS4'
            ),
            'norm_counts_Avg_log10_Expr_ODC_10_AdS5' => array(
                'name' => 's Avg log10 Expr ODC 10 AdS5'
            ),
            'norm_counts_Avg_log10_Expr_ODC_2_AdS3' => array(
                'name' => 's Avg log10 Expr ODC 2 AdS3'
            ),
            'norm_counts_Avg_log10_Expr_ODC_2_AdS4' => array(
                'name' => 's Avg log10 Expr ODC 2 AdS4'
            ),
            'norm_counts_Avg_log10_Expr_ODC_2_AdS5' => array(
                'name' => 's Avg log10 Expr ODC 2 AdS5'
            ),
            'norm_counts_Avg_log10_Expr_OPC_18_AdS3' => array(
                'name' => 's Avg log10 Expr OPC 18 AdS3'
            ),
            'norm_counts_Avg_log10_Expr_OPC_18_AdS4' => array(
                'name' => 's Avg log10 Expr OPC 18 AdS4'
            ),
            'norm_counts_Avg_log10_Expr_OPC_18_AdS5' => array(
                'name' => 's Avg log10 Expr OPC 18 AdS5'
            ),
            'norm_counts_Avg_log10_Expr_OPC_18_P3S3' => array(
                'name' => 's Avg log10 Expr OPC 18 P3S3'
            ),
            'norm_counts_Avg_log10_Expr_OPC_18_P3S4' => array(
                'name' => 's Avg log10 Expr OPC 18 P3S4'
            ),
            'norm_counts_Avg_log10_Expr_OPC_18_P3S5' => array(
                'name' => 's Avg log10 Expr OPC 18 P3S5'
            ),
            'norm_counts_Avg_log10_Expr_PER_6_AdS3' => array(
                'name' => 's Avg log10 Expr PER 6 AdS3'
            ),
            'norm_counts_Avg_log10_Expr_PER_6_AdS4' => array(
                'name' => 's Avg log10 Expr PER 6 AdS4'
            ),
            'norm_counts_Avg_log10_Expr_PER_6_AdS5' => array(
                'name' => 's Avg log10 Expr PER 6 AdS5'
            ),
            'norm_counts_Avg_log10_Expr_PER_6_P3S3' => array(
                'name' => 's Avg log10 Expr PER 6 P3S3'
            ),
            'norm_counts_Avg_log10_Expr_PER_6_P3S4' => array(
                'name' => 's Avg log10 Expr PER 6 P3S4'
            ),
            'norm_counts_Avg_log10_Expr_PER_6_P3S5' => array(
                'name' => 's Avg log10 Expr PER 6 P3S5'
            ),
            'add_counts_PCA_Dim_10_Loadings' => array(
                'name' => 'PCA Dim 10 Loadings'
            ),
            'add_counts_PCA_Dim_11_Loadings' => array(
                'name' => 'PCA Dim 11 Loadings'
            ),
            'add_counts_PCA_Dim_12_Loadings' => array(
                'name' => 'PCA Dim 12 Loadings'
            ),
            'add_counts_PCA_Dim_13_Loadings' => array(
                'name' => 'PCA Dim 13 Loadings'
            ),
            'add_counts_PCA_Dim_14_Loadings' => array(
                'name' => 'PCA Dim 14 Loadings'
            ),
            'add_counts_PCA_Dim_15_Loadings' => array(
                'name' => 'PCA Dim 15 Loadings'
            ),
            'add_counts_PCA_Dim_16_Loadings' => array(
                'name' => 'PCA Dim 16 Loadings'
            ),
            'add_counts_PCA_Dim_17_Loadings' => array(
                'name' => 'PCA Dim 17 Loadings'
            ),
            'add_counts_PCA_Dim_18_Loadings' => array(
                'name' => 'PCA Dim 18 Loadings'
            ),
            'add_counts_PCA_Dim_19_Loadings' => array(
                'name' => 'PCA Dim 19 Loadings'
            ),
            'add_counts_PCA_Dim_1_Loadings' => array(
                'name' => 'PCA Dim 1 Loadings'
            ),
            'add_counts_PCA_Dim_20_Loadings' => array(
                'name' => 'PCA Dim 20 Loadings'
            ),
            'add_counts_PCA_Dim_2_Loadings' => array(
                'name' => 'PCA Dim 2 Loadings'
            ),
            'add_counts_PCA_Dim_3_Loadings' => array(
                'name' => 'PCA Dim 3 Loadings'
            ),
            'add_counts_PCA_Dim_4_Loadings' => array(
                'name' => 'PCA Dim 4 Loadings'
            ),
            'add_counts_PCA_Dim_5_Loadings' => array(
                'name' => 'PCA Dim 5 Loadings'
            ),
            'add_counts_PCA_Dim_6_Loadings' => array(
                'name' => 'PCA Dim 6 Loadings'
            ),
            'add_counts_PCA_Dim_7_Loadings' => array(
                'name' => 'PCA Dim 7 Loadings'
            ),
            'add_counts_PCA_Dim_8_Loadings' => array(
                'name' => 'PCA Dim 8 Loadings'
            ),
            'add_counts_PCA_Dim_9_Loadings' => array(
                'name' => 'PCA Dim 9 Loadings'
            ),
            'add_MA_cts_MA_Avg_DGE_P3_vs_3m' => array(
                'name' => 'MA Avg DGE P3 vs 3m'
            ),
            'add_MA_cts_MA_Avg_DGE_Astrocytes_P3_vs_3m' => array(
                'name' => 'MA Avg DGE Astrocytes P3 vs 3m'
            ),
            'add_counts_AST_3m_14_Residuals' => array(
                'name' => 'AST 3m 14 Residuals'
            ),
            'add_counts_AST_3m_5_Residuals' => array(
                'name' => 'AST 3m 5 Residuals'
            ),
            'add_counts_AST_P3_0_Residuals' => array(
                'name' => 'AST P3 0 Residuals'
            ),
            'add_counts_AST_P3_1_Residuals' => array(
                'name' => 'AST P3 1 Residuals'
            ),
            'add_counts_AST_P3_11_Residuals' => array(
                'name' => 'AST P3 11 Residuals'
            ),
            'add_counts_AST_P3_15_Residuals' => array(
                'name' => 'AST P3 15 Residuals'
            ),
            'add_counts_AST_P3_19_Residuals' => array(
                'name' => 'AST P3 19 Residuals'
            ),
            'add_counts_AST_P3_3_Residuals' => array(
                'name' => 'AST P3 3 Residuals'
            ),
            'add_counts_AST_P3_4_Residuals' => array(
                'name' => 'AST P3 4 Residuals'
            ),
            'add_counts_END_12_Residuals' => array(
                'name' => 'END 12 Residuals'
            ),
            'add_counts_END_13_Residuals' => array(
                'name' => 'END 13 Residuals'
            ),
            'add_counts_END_17_Residuals' => array(
                'name' => 'END 17 Residuals'
            ),
            'add_counts_END_7_Residuals' => array(
                'name' => 'END 7 Residuals'
            ),
            'add_counts_GPC_8_Residuals' => array(
                'name' => 'GPC 8 Residuals'
            ),
            'add_counts_GPC_9_Residuals' => array(
                'name' => 'GPC 9 Residuals'
            ),
            'add_counts_LOW_20_Residuals' => array(
                'name' => 'LOW 20 Residuals'
            ),
            'add_counts_LOW_21_Residuals' => array(
                'name' => 'LOW 21 Residuals'
            ),
            'add_counts_LOW_23_Residuals' => array(
                'name' => 'LOW 23 Residuals'
            ),
            'add_counts_MIC_16_Residuals' => array(
                'name' => 'MIC 16 Residuals'
            ),
            'add_counts_NEU_22_Residuals' => array(
                'name' => 'NEU 22 Residuals'
            ),
            'add_counts_ODC_10_Residuals' => array(
                'name' => 'ODC 10 Residuals'
            ),
            'add_counts_ODC_2_Residuals' => array(
                'name' => 'ODC 2 Residuals'
            ),
            'add_counts_OPC_18_Residuals' => array(
                'name' => 'OPC 18 Residuals'
            ),
            'add_counts_PER_6_Residuals' => array(
                'name' => 'PER 6 Residuals'
            )
        )
    )
//End scatterplot
);
