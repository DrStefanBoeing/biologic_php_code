<?php

return array(
    'public_access' => TRUE,
    'lab' => array(
        'name' => 'Schaefer DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'asl_data',
    'data_db' => array(
            'cat_table_name' => 'asl319A_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'asl319A_sc_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged Expr',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Avg_log10_Expr_C_0_OBseqR1' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C 0 OBseqR1'
        ),
        'norm_counts_Avg_log10_Expr_C_0_OBseqR2' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C 0 OBseqR2'
        ),
        'norm_counts_Avg_log10_Expr_C_0_OBseqR3' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C 0 OBseqR3'
        ),
        'norm_counts_Avg_log10_Expr_C_10_OBseqR1' => array(
            'color' => '#EC8239',
            'name' => 'Avg log10 Expr C 10 OBseqR1'
        ),
        'norm_counts_Avg_log10_Expr_C_10_OBseqR2' => array(
            'color' => '#EC8239',
            'name' => 'Avg log10 Expr C 10 OBseqR2'
        ),
        'norm_counts_Avg_log10_Expr_C_10_OBseqR3' => array(
            'color' => '#EC8239',
            'name' => 'Avg log10 Expr C 10 OBseqR3'
        ),
        'norm_counts_Avg_log10_Expr_C_11_OBseqR1' => array(
            'color' => '#DB8E00',
            'name' => 'Avg log10 Expr C 11 OBseqR1'
        ),
        'norm_counts_Avg_log10_Expr_C_11_OBseqR2' => array(
            'color' => '#DB8E00',
            'name' => 'Avg log10 Expr C 11 OBseqR2'
        ),
        'norm_counts_Avg_log10_Expr_C_11_OBseqR3' => array(
            'color' => '#DB8E00',
            'name' => 'Avg log10 Expr C 11 OBseqR3'
        ),
        'norm_counts_Avg_log10_Expr_C_12_OBseqR1' => array(
            'color' => '#C79800',
            'name' => 'Avg log10 Expr C 12 OBseqR1'
        ),
        'norm_counts_Avg_log10_Expr_C_12_OBseqR2' => array(
            'color' => '#C79800',
            'name' => 'Avg log10 Expr C 12 OBseqR2'
        ),
        'norm_counts_Avg_log10_Expr_C_12_OBseqR3' => array(
            'color' => '#C79800',
            'name' => 'Avg log10 Expr C 12 OBseqR3'
        ),
        'norm_counts_Avg_log10_Expr_C_13_OBseqR1' => array(
            'color' => '#AEA200',
            'name' => 'Avg log10 Expr C 13 OBseqR1'
        ),
        'norm_counts_Avg_log10_Expr_C_13_OBseqR2' => array(
            'color' => '#AEA200',
            'name' => 'Avg log10 Expr C 13 OBseqR2'
        ),
        'norm_counts_Avg_log10_Expr_C_13_OBseqR3' => array(
            'color' => '#AEA200',
            'name' => 'Avg log10 Expr C 13 OBseqR3'
        ),
        'norm_counts_Avg_log10_Expr_C_14_OBseqR1' => array(
            'color' => '#8FAA00',
            'name' => 'Avg log10 Expr C 14 OBseqR1'
        ),
        'norm_counts_Avg_log10_Expr_C_14_OBseqR2' => array(
            'color' => '#8FAA00',
            'name' => 'Avg log10 Expr C 14 OBseqR2'
        ),
        'norm_counts_Avg_log10_Expr_C_14_OBseqR3' => array(
            'color' => '#8FAA00',
            'name' => 'Avg log10 Expr C 14 OBseqR3'
        ),
        'norm_counts_Avg_log10_Expr_C_15_OBseqR1' => array(
            'color' => '#64B200',
            'name' => 'Avg log10 Expr C 15 OBseqR1'
        ),
        'norm_counts_Avg_log10_Expr_C_15_OBseqR2' => array(
            'color' => '#64B200',
            'name' => 'Avg log10 Expr C 15 OBseqR2'
        ),
        'norm_counts_Avg_log10_Expr_C_15_OBseqR3' => array(
            'color' => '#64B200',
            'name' => 'Avg log10 Expr C 15 OBseqR3'
        ),
        'norm_counts_Avg_log10_Expr_C_16_OBseqR1' => array(
            'color' => '#00B81B',
            'name' => 'Avg log10 Expr C 16 OBseqR1'
        ),
        'norm_counts_Avg_log10_Expr_C_16_OBseqR2' => array(
            'color' => '#00B81B',
            'name' => 'Avg log10 Expr C 16 OBseqR2'
        ),
        'norm_counts_Avg_log10_Expr_C_16_OBseqR3' => array(
            'color' => '#00B81B',
            'name' => 'Avg log10 Expr C 16 OBseqR3'
        ),
        'norm_counts_Avg_log10_Expr_C_17_OBseqR1' => array(
            'color' => '#00BD5C',
            'name' => 'Avg log10 Expr C 17 OBseqR1'
        ),
        'norm_counts_Avg_log10_Expr_C_17_OBseqR2' => array(
            'color' => '#00BD5C',
            'name' => 'Avg log10 Expr C 17 OBseqR2'
        ),
        'norm_counts_Avg_log10_Expr_C_17_OBseqR3' => array(
            'color' => '#00BD5C',
            'name' => 'Avg log10 Expr C 17 OBseqR3'
        ),
        'norm_counts_Avg_log10_Expr_C_18_OBseqR1' => array(
            'color' => '#00C085',
            'name' => 'Avg log10 Expr C 18 OBseqR1'
        ),
        'norm_counts_Avg_log10_Expr_C_18_OBseqR2' => array(
            'color' => '#00C085',
            'name' => 'Avg log10 Expr C 18 OBseqR2'
        ),
        'norm_counts_Avg_log10_Expr_C_18_OBseqR3' => array(
            'color' => '#00C085',
            'name' => 'Avg log10 Expr C 18 OBseqR3'
        ),
        'norm_counts_Avg_log10_Expr_C_19_OBseqR1' => array(
            'color' => '#00C1A7',
            'name' => 'Avg log10 Expr C 19 OBseqR1'
        ),
        'norm_counts_Avg_log10_Expr_C_19_OBseqR2' => array(
            'color' => '#00C1A7',
            'name' => 'Avg log10 Expr C 19 OBseqR2'
        ),
        'norm_counts_Avg_log10_Expr_C_19_OBseqR3' => array(
            'color' => '#00C1A7',
            'name' => 'Avg log10 Expr C 19 OBseqR3'
        ),
        'norm_counts_Avg_log10_Expr_C_1_OBseqR1' => array(
            'color' => '#00BFC4',
            'name' => 'Avg log10 Expr C 1 OBseqR1'
        ),
        'norm_counts_Avg_log10_Expr_C_1_OBseqR2' => array(
            'color' => '#00BFC4',
            'name' => 'Avg log10 Expr C 1 OBseqR2'
        ),
        'norm_counts_Avg_log10_Expr_C_1_OBseqR3' => array(
            'color' => '#00BFC4',
            'name' => 'Avg log10 Expr C 1 OBseqR3'
        ),
        'norm_counts_Avg_log10_Expr_C_20_OBseqR1' => array(
            'color' => '#00BADE',
            'name' => 'Avg log10 Expr C 20 OBseqR1'
        ),
        'norm_counts_Avg_log10_Expr_C_20_OBseqR2' => array(
            'color' => '#00BADE',
            'name' => 'Avg log10 Expr C 20 OBseqR2'
        ),
        'norm_counts_Avg_log10_Expr_C_20_OBseqR3' => array(
            'color' => '#00BADE',
            'name' => 'Avg log10 Expr C 20 OBseqR3'
        ),
        'norm_counts_Avg_log10_Expr_C_21_OBseqR1' => array(
            'color' => '#00B2F3',
            'name' => 'Avg log10 Expr C 21 OBseqR1'
        ),
        'norm_counts_Avg_log10_Expr_C_21_OBseqR2' => array(
            'color' => '#00B2F3',
            'name' => 'Avg log10 Expr C 21 OBseqR2'
        ),
        'norm_counts_Avg_log10_Expr_C_21_OBseqR3' => array(
            'color' => '#00B2F3',
            'name' => 'Avg log10 Expr C 21 OBseqR3'
        ),
        'norm_counts_Avg_log10_Expr_C_2_OBseqR1' => array(
            'color' => '#00A6FF',
            'name' => 'Avg log10 Expr C 2 OBseqR1'
        ),
        'norm_counts_Avg_log10_Expr_C_2_OBseqR2' => array(
            'color' => '#00A6FF',
            'name' => 'Avg log10 Expr C 2 OBseqR2'
        ),
        'norm_counts_Avg_log10_Expr_C_2_OBseqR3' => array(
            'color' => '#00A6FF',
            'name' => 'Avg log10 Expr C 2 OBseqR3'
        ),
        'norm_counts_Avg_log10_Expr_C_3_OBseqR1' => array(
            'color' => '#7C96FF',
            'name' => 'Avg log10 Expr C 3 OBseqR1'
        ),
        'norm_counts_Avg_log10_Expr_C_3_OBseqR2' => array(
            'color' => '#7C96FF',
            'name' => 'Avg log10 Expr C 3 OBseqR2'
        ),
        'norm_counts_Avg_log10_Expr_C_3_OBseqR3' => array(
            'color' => '#7C96FF',
            'name' => 'Avg log10 Expr C 3 OBseqR3'
        ),
        'norm_counts_Avg_log10_Expr_C_4_OBseqR1' => array(
            'color' => '#B385FF',
            'name' => 'Avg log10 Expr C 4 OBseqR1'
        ),
        'norm_counts_Avg_log10_Expr_C_4_OBseqR2' => array(
            'color' => '#B385FF',
            'name' => 'Avg log10 Expr C 4 OBseqR2'
        ),
        'norm_counts_Avg_log10_Expr_C_4_OBseqR3' => array(
            'color' => '#B385FF',
            'name' => 'Avg log10 Expr C 4 OBseqR3'
        ),
        'norm_counts_Avg_log10_Expr_C_5_OBseqR1' => array(
            'color' => '#D874FD',
            'name' => 'Avg log10 Expr C 5 OBseqR1'
        ),
        'norm_counts_Avg_log10_Expr_C_5_OBseqR2' => array(
            'color' => '#D874FD',
            'name' => 'Avg log10 Expr C 5 OBseqR2'
        ),
        'norm_counts_Avg_log10_Expr_C_5_OBseqR3' => array(
            'color' => '#D874FD',
            'name' => 'Avg log10 Expr C 5 OBseqR3'
        ),
        'norm_counts_Avg_log10_Expr_C_6_OBseqR1' => array(
            'color' => '#EF67EB',
            'name' => 'Avg log10 Expr C 6 OBseqR1'
        ),
        'norm_counts_Avg_log10_Expr_C_6_OBseqR2' => array(
            'color' => '#EF67EB',
            'name' => 'Avg log10 Expr C 6 OBseqR2'
        ),
        'norm_counts_Avg_log10_Expr_C_6_OBseqR3' => array(
            'color' => '#EF67EB',
            'name' => 'Avg log10 Expr C 6 OBseqR3'
        ),
        'norm_counts_Avg_log10_Expr_C_7_OBseqR1' => array(
            'color' => '#FD61D3',
            'name' => 'Avg log10 Expr C 7 OBseqR1'
        ),
        'norm_counts_Avg_log10_Expr_C_7_OBseqR2' => array(
            'color' => '#FD61D3',
            'name' => 'Avg log10 Expr C 7 OBseqR2'
        ),
        'norm_counts_Avg_log10_Expr_C_7_OBseqR3' => array(
            'color' => '#FD61D3',
            'name' => 'Avg log10 Expr C 7 OBseqR3'
        ),
        'norm_counts_Avg_log10_Expr_C_8_OBseqR1' => array(
            'color' => '#FF63B6',
            'name' => 'Avg log10 Expr C 8 OBseqR1'
        ),
        'norm_counts_Avg_log10_Expr_C_8_OBseqR2' => array(
            'color' => '#FF63B6',
            'name' => 'Avg log10 Expr C 8 OBseqR2'
        ),
        'norm_counts_Avg_log10_Expr_C_8_OBseqR3' => array(
            'color' => '#FF63B6',
            'name' => 'Avg log10 Expr C 8 OBseqR3'
        ),
        'norm_counts_Avg_log10_Expr_C_9_OBseqR1' => array(
            'color' => '#FF6B94',
            'name' => 'Avg log10 Expr C 9 OBseqR1'
        ),
        'norm_counts_Avg_log10_Expr_C_9_OBseqR2' => array(
            'color' => '#FF6B94',
            'name' => 'Avg log10 Expr C 9 OBseqR2'
        ),
        'norm_counts_Avg_log10_Expr_C_9_OBseqR3' => array(
            'color' => '#FF6B94',
            'name' => 'Avg log10 Expr C 9 OBseqR3'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'lg10 Expr for all Samples',
        'sidelabel' => 'lg10 Expr'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Avg_log10_Expr_Sc_C_0_OBseqR1','lg2_avg_Avg_log10_Expr_Sc_C_0_OBseqR2','lg2_avg_Avg_log10_Expr_Sc_C_0_OBseqR3','lg2_avg_Avg_log10_Expr_Sc_C_10_OBseqR1','lg2_avg_Avg_log10_Expr_Sc_C_10_OBseqR2','lg2_avg_Avg_log10_Expr_Sc_C_10_OBseqR3','lg2_avg_Avg_log10_Expr_Sc_C_11_OBseqR1','lg2_avg_Avg_log10_Expr_Sc_C_11_OBseqR2','lg2_avg_Avg_log10_Expr_Sc_C_11_OBseqR3','lg2_avg_Avg_log10_Expr_Sc_C_12_OBseqR1','lg2_avg_Avg_log10_Expr_Sc_C_12_OBseqR2','lg2_avg_Avg_log10_Expr_Sc_C_12_OBseqR3','lg2_avg_Avg_log10_Expr_Sc_C_13_OBseqR1','lg2_avg_Avg_log10_Expr_Sc_C_13_OBseqR2','lg2_avg_Avg_log10_Expr_Sc_C_13_OBseqR3','lg2_avg_Avg_log10_Expr_Sc_C_14_OBseqR1','lg2_avg_Avg_log10_Expr_Sc_C_14_OBseqR2','lg2_avg_Avg_log10_Expr_Sc_C_14_OBseqR3','lg2_avg_Avg_log10_Expr_Sc_C_15_OBseqR1','lg2_avg_Avg_log10_Expr_Sc_C_15_OBseqR2','lg2_avg_Avg_log10_Expr_Sc_C_15_OBseqR3','lg2_avg_Avg_log10_Expr_Sc_C_16_OBseqR1','lg2_avg_Avg_log10_Expr_Sc_C_16_OBseqR2','lg2_avg_Avg_log10_Expr_Sc_C_16_OBseqR3','lg2_avg_Avg_log10_Expr_Sc_C_17_OBseqR1','lg2_avg_Avg_log10_Expr_Sc_C_17_OBseqR2','lg2_avg_Avg_log10_Expr_Sc_C_17_OBseqR3','lg2_avg_Avg_log10_Expr_Sc_C_18_OBseqR1','lg2_avg_Avg_log10_Expr_Sc_C_18_OBseqR2','lg2_avg_Avg_log10_Expr_Sc_C_18_OBseqR3','lg2_avg_Avg_log10_Expr_Sc_C_19_OBseqR1','lg2_avg_Avg_log10_Expr_Sc_C_19_OBseqR2','lg2_avg_Avg_log10_Expr_Sc_C_19_OBseqR3','lg2_avg_Avg_log10_Expr_Sc_C_1_OBseqR1','lg2_avg_Avg_log10_Expr_Sc_C_1_OBseqR2','lg2_avg_Avg_log10_Expr_Sc_C_1_OBseqR3','lg2_avg_Avg_log10_Expr_Sc_C_20_OBseqR1','lg2_avg_Avg_log10_Expr_Sc_C_20_OBseqR2','lg2_avg_Avg_log10_Expr_Sc_C_20_OBseqR3','lg2_avg_Avg_log10_Expr_Sc_C_21_OBseqR1','lg2_avg_Avg_log10_Expr_Sc_C_21_OBseqR2','lg2_avg_Avg_log10_Expr_Sc_C_21_OBseqR3','lg2_avg_Avg_log10_Expr_Sc_C_2_OBseqR1','lg2_avg_Avg_log10_Expr_Sc_C_2_OBseqR2','lg2_avg_Avg_log10_Expr_Sc_C_2_OBseqR3','lg2_avg_Avg_log10_Expr_Sc_C_3_OBseqR1','lg2_avg_Avg_log10_Expr_Sc_C_3_OBseqR2','lg2_avg_Avg_log10_Expr_Sc_C_3_OBseqR3','lg2_avg_Avg_log10_Expr_Sc_C_4_OBseqR1','lg2_avg_Avg_log10_Expr_Sc_C_4_OBseqR2','lg2_avg_Avg_log10_Expr_Sc_C_4_OBseqR3','lg2_avg_Avg_log10_Expr_Sc_C_5_OBseqR1','lg2_avg_Avg_log10_Expr_Sc_C_5_OBseqR2','lg2_avg_Avg_log10_Expr_Sc_C_5_OBseqR3','lg2_avg_Avg_log10_Expr_Sc_C_6_OBseqR1','lg2_avg_Avg_log10_Expr_Sc_C_6_OBseqR2','lg2_avg_Avg_log10_Expr_Sc_C_6_OBseqR3','lg2_avg_Avg_log10_Expr_Sc_C_7_OBseqR1','lg2_avg_Avg_log10_Expr_Sc_C_7_OBseqR2','lg2_avg_Avg_log10_Expr_Sc_C_7_OBseqR3','lg2_avg_Avg_log10_Expr_Sc_C_8_OBseqR1','lg2_avg_Avg_log10_Expr_Sc_C_8_OBseqR2','lg2_avg_Avg_log10_Expr_Sc_C_8_OBseqR3','lg2_avg_Avg_log10_Expr_Sc_C_9_OBseqR1','lg2_avg_Avg_log10_Expr_Sc_C_9_OBseqR2','lg2_avg_Avg_log10_Expr_Sc_C_9_OBseqR3'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_A_logFC_bulkRNASeq_PC_vs_AON_S_M_vs_S_T' => array(
            'name' => 'logFC bulkRNASeq PC vs AON S M vs S T',
            'slider_min' => -4,
            'slider_max' => 5,
            'default_low' => -4,
            'default_high' => 5
        ),
        'contrast_A_padj_bulkRNASeq_PC_vs_AON_S_M_vs_S_T' => array(
            'name' => 'padj bulkRNASeq PC vs AON S M vs S T',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
            'name' => 'logFC Expressed in N Percent Cells',
            'slider_min' => 0,
            'slider_max' => 100,
            'default_low' => 0,
            'default_high' => 100
        ),
        'contrast_3_logFC_DGE_ET1_vs_ET4' => array(
            'name' => 'logFC DGE ET1 vs ET4',
            'slider_min' => -8,
            'slider_max' => 6,
            'default_low' => -8,
            'default_high' => 6
        ),
        'contrast_3_padj_DGE_ET1_vs_ET4' => array(
            'name' => 'padj DGE ET1 vs ET4',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_logFC_DGE_T1_vs_ET1ET4' => array(
            'name' => 'logFC DGE T1 vs ET1ET4',
            'slider_min' => -8,
            'slider_max' => 7,
            'default_low' => -8,
            'default_high' => 7
        ),
        'contrast_4_padj_DGE_T1_vs_ET1ET4' => array(
            'name' => 'padj DGE T1 vs ET1ET4',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_5_logFC_DGE_M1_vs_M2' => array(
            'name' => 'logFC DGE M1 vs M2',
            'slider_min' => -7,
            'slider_max' => 11,
            'default_low' => -7,
            'default_high' => 11
        ),
        'contrast_5_padj_DGE_M1_vs_M2' => array(
            'name' => 'padj DGE M1 vs M2',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_1_logFC_DGE_M1M2M3_vs_T1ET1ET4' => array(
            'name' => 'logFC DGE M1M2M3 vs T1ET1ET4',
            'slider_min' => -7,
            'slider_max' => 8,
            'default_low' => -7,
            'default_high' => 8
        ),
        'contrast_1_padj_DGE_M1M2M3_vs_T1ET1ET4' => array(
            'name' => 'padj DGE M1M2M3 vs T1ET1ET4',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_DGE_M1M2M3_vs_T1' => array(
            'name' => 'logFC DGE M1M2M3 vs T1',
            'slider_min' => -6,
            'slider_max' => 8,
            'default_low' => -6,
            'default_high' => 8
        ),
        'contrast_2_padj_DGE_M1M2M3_vs_T1' => array(
            'name' => 'padj DGE M1M2M3 vs T1',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_DGE_T1_vs_ET1ET4' => array(
            'name' => 'logFC DGE T1 vs ET1ET4',
            'slider_min' => -8,
            'slider_max' => 7,
            'default_low' => -8,
            'default_high' => 7
        ),
        'contrast_3_padj_DGE_T1_vs_ET1ET4' => array(
            'name' => 'padj DGE T1 vs ET1ET4',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_logFC_DGE_M1_vs_M2' => array(
            'name' => 'logFC DGE M1 vs M2',
            'slider_min' => -7,
            'slider_max' => 11,
            'default_low' => -7,
            'default_high' => 11
        ),
        'contrast_4_padj_DGE_M1_vs_M2' => array(
            'name' => 'padj DGE M1 vs M2',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_5_logFC_DGE_M1_vs_M3' => array(
            'name' => 'logFC DGE M1 vs M3',
            'slider_min' => -7,
            'slider_max' => 7,
            'default_low' => -7,
            'default_high' => 7
        ),
        'contrast_5_padj_DGE_M1_vs_M3' => array(
            'name' => 'padj DGE M1 vs M3',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_6_logFC_DGE_M2_vs_M3' => array(
            'name' => 'logFC DGE M2 vs M3',
            'slider_min' => -9,
            'slider_max' => 8,
            'default_low' => -9,
            'default_high' => 8
        ),
        'contrast_6_padj_DGE_M2_vs_M3' => array(
            'name' => 'padj DGE M2 vs M3',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_7_logFC_DGE_T1_vs_ET1' => array(
            'name' => 'logFC DGE T1 vs ET1',
            'slider_min' => -7,
            'slider_max' => 10,
            'default_low' => -7,
            'default_high' => 10
        ),
        'contrast_7_padj_DGE_T1_vs_ET1' => array(
            'name' => 'padj DGE T1 vs ET1',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_8_logFC_DGE_T1_vs_ET2' => array(
            'name' => 'logFC DGE T1 vs ET2',
            'slider_min' => -12,
            'slider_max' => 9,
            'default_low' => -12,
            'default_high' => 9
        ),
        'contrast_8_padj_DGE_T1_vs_ET2' => array(
            'name' => 'padj DGE T1 vs ET2',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_9_logFC_DGE_T1_vs_ET4' => array(
            'name' => 'logFC DGE T1 vs ET4',
            'slider_min' => -9,
            'slider_max' => 7,
            'default_low' => -9,
            'default_high' => 7
        ),
        'contrast_9_padj_DGE_T1_vs_ET4' => array(
            'name' => 'padj DGE T1 vs ET4',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_10_logFC_DGE_ET1_vs_ET2' => array(
            'name' => '0 logFC DGE ET1 vs ET2',
            'slider_min' => -10,
            'slider_max' => 9,
            'default_low' => -10,
            'default_high' => 9
        ),
        'contrast_10_padj_DGE_ET1_vs_ET2' => array(
            'name' => '0 padj DGE ET1 vs ET2',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_11_logFC_DGE_ET1_vs_ET4' => array(
            'name' => '1 logFC DGE ET1 vs ET4',
            'slider_min' => -8,
            'slider_max' => 6,
            'default_low' => -8,
            'default_high' => 6
        ),
        'contrast_11_padj_DGE_ET1_vs_ET4' => array(
            'name' => '1 padj DGE ET1 vs ET4',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_12_logFC_DGE_ET2_vs_ET4' => array(
            'name' => '2 logFC DGE ET2 vs ET4',
            'slider_min' => -9,
            'slider_max' => 11,
            'default_low' => -9,
            'default_high' => 11
        ),
        'contrast_12_padj_DGE_ET2_vs_ET4' => array(
            'name' => '2 padj DGE ET2 vs ET4',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'add_counts_C_0_Residuals' => array(
            'name' => 'C 0 Residuals',
            'slider_min' => -3,
            'slider_max' => 1,
            'default_low' => -3,
            'default_high' => 1
        ),
        'add_counts_C_1_Residuals' => array(
            'name' => 'C 1 Residuals',
            'slider_min' => -3,
            'slider_max' => 1,
            'default_low' => -3,
            'default_high' => 1
        ),
        'add_counts_C_10_Residuals' => array(
            'name' => 'C 10 Residuals',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'add_counts_C_11_Residuals' => array(
            'name' => 'C 11 Residuals',
            'slider_min' => -2,
            'slider_max' => 4,
            'default_low' => -2,
            'default_high' => 4
        ),
        'add_counts_C_12_Residuals' => array(
            'name' => 'C 12 Residuals',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'add_counts_C_13_Residuals' => array(
            'name' => 'C 13 Residuals',
            'slider_min' => -2,
            'slider_max' => 3,
            'default_low' => -2,
            'default_high' => 3
        ),
        'add_counts_C_14_Residuals' => array(
            'name' => 'C 14 Residuals',
            'slider_min' => -2,
            'slider_max' => 3,
            'default_low' => -2,
            'default_high' => 3
        ),
        'add_counts_C_15_Residuals' => array(
            'name' => 'C 15 Residuals',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'add_counts_C_16_Residuals' => array(
            'name' => 'C 16 Residuals',
            'slider_min' => -2,
            'slider_max' => 4,
            'default_low' => -2,
            'default_high' => 4
        ),
        'add_counts_C_17_Residuals' => array(
            'name' => 'C 17 Residuals',
            'slider_min' => -2,
            'slider_max' => 3,
            'default_low' => -2,
            'default_high' => 3
        ),
        'add_counts_C_18_Residuals' => array(
            'name' => 'C 18 Residuals',
            'slider_min' => -2,
            'slider_max' => 5,
            'default_low' => -2,
            'default_high' => 5
        ),
        'add_counts_C_19_Residuals' => array(
            'name' => 'C 19 Residuals',
            'slider_min' => -2,
            'slider_max' => 4,
            'default_low' => -2,
            'default_high' => 4
        ),
        'add_counts_C_2_Residuals' => array(
            'name' => 'C 2 Residuals',
            'slider_min' => -2,
            'slider_max' => 3,
            'default_low' => -2,
            'default_high' => 3
        ),
        'add_counts_C_20_Residuals' => array(
            'name' => 'C 20 Residuals',
            'slider_min' => -2,
            'slider_max' => 3,
            'default_low' => -2,
            'default_high' => 3
        ),
        'add_counts_C_21_Residuals' => array(
            'name' => 'C 21 Residuals',
            'slider_min' => -1,
            'slider_max' => 2,
            'default_low' => -1,
            'default_high' => 2
        ),
        'add_counts_C_3_Residuals' => array(
            'name' => 'C 3 Residuals',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'add_counts_C_4_Residuals' => array(
            'name' => 'C 4 Residuals',
            'slider_min' => -2,
            'slider_max' => 3,
            'default_low' => -2,
            'default_high' => 3
        ),
        'add_counts_C_5_Residuals' => array(
            'name' => 'C 5 Residuals',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'add_counts_C_6_Residuals' => array(
            'name' => 'C 6 Residuals',
            'slider_min' => -2,
            'slider_max' => 3,
            'default_low' => -2,
            'default_high' => 3
        ),
        'add_counts_C_7_Residuals' => array(
            'name' => 'C 7 Residuals',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'add_counts_C_8_Residuals' => array(
            'name' => 'C 8 Residuals',
            'slider_min' => -2,
            'slider_max' => 3,
            'default_low' => -2,
            'default_high' => 3
        ),
        'add_counts_C_9_Residuals' => array(
            'name' => 'C 9 Residuals',
            'slider_min' => -2,
            'slider_max' => 4,
            'default_low' => -2,
            'default_high' => 4
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'asl319A_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'add_counts_Avg_log10_Expr_all',
        'default-y' => 'add_counts_Avg_log10_Expr_C_0',
        'selection' => array(
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg log10 Expr all'
            ),
            'add_counts_Avg_log10_Expr_C_0' => array(
                'name' => 'Avg log10 Expr C 0'
            ),
            'contrast_A_logFC_bulkRNASeq_PC_vs_AON_S_M_vs_S_T' => array(
                'name' => 'logFC bulkRNASeq PC vs AON S M vs S T'
            ),
            'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
                'name' => 'logFC Expressed in N Percent Cells'
            ),
            'contrast_3_logFC_DGE_ET1_vs_ET4' => array(
                'name' => 'logFC DGE ET1 vs ET4'
            ),
            'contrast_4_logFC_DGE_T1_vs_ET1ET4' => array(
                'name' => 'logFC DGE T1 vs ET1ET4'
            ),
            'contrast_5_logFC_DGE_M1_vs_M2' => array(
                'name' => 'logFC DGE M1 vs M2'
            ),
            'contrast_1_logFC_DGE_M1M2M3_vs_T1ET1ET4' => array(
                'name' => 'logFC DGE M1M2M3 vs T1ET1ET4'
            ),
            'contrast_2_logFC_DGE_M1M2M3_vs_T1' => array(
                'name' => 'logFC DGE M1M2M3 vs T1'
            ),
            'contrast_3_logFC_DGE_T1_vs_ET1ET4' => array(
                'name' => 'logFC DGE T1 vs ET1ET4'
            ),
            'contrast_4_logFC_DGE_M1_vs_M2' => array(
                'name' => 'logFC DGE M1 vs M2'
            ),
            'contrast_5_logFC_DGE_M1_vs_M3' => array(
                'name' => 'logFC DGE M1 vs M3'
            ),
            'contrast_6_logFC_DGE_M2_vs_M3' => array(
                'name' => 'logFC DGE M2 vs M3'
            ),
            'contrast_7_logFC_DGE_T1_vs_ET1' => array(
                'name' => 'logFC DGE T1 vs ET1'
            ),
            'contrast_8_logFC_DGE_T1_vs_ET2' => array(
                'name' => 'logFC DGE T1 vs ET2'
            ),
            'contrast_9_logFC_DGE_T1_vs_ET4' => array(
                'name' => 'logFC DGE T1 vs ET4'
            ),
            'contrast_10_logFC_DGE_ET1_vs_ET2' => array(
                'name' => '0 logFC DGE ET1 vs ET2'
            ),
            'contrast_11_logFC_DGE_ET1_vs_ET4' => array(
                'name' => '1 logFC DGE ET1 vs ET4'
            ),
            'contrast_12_logFC_DGE_ET2_vs_ET4' => array(
                'name' => '2 logFC DGE ET2 vs ET4'
            ),
            'contrast_A_lg10p_bulkRNASeq_PC_vs_AON_S_M_vs_S_T' => array(
                'name' => 'lg10p bulkRNASeq PC vs AON S M vs S T'
            ),
            'contrast_3_lg10p_DGE_ET1_vs_ET4' => array(
                'name' => 'lg10p DGE ET1 vs ET4'
            ),
            'contrast_4_lg10p_DGE_T1_vs_ET1ET4' => array(
                'name' => 'lg10p DGE T1 vs ET1ET4'
            ),
            'contrast_5_lg10p_DGE_M1_vs_M2' => array(
                'name' => 'lg10p DGE M1 vs M2'
            ),
            'contrast_1_lg10p_DGE_M1M2M3_vs_T1ET1ET4' => array(
                'name' => 'lg10p DGE M1M2M3 vs T1ET1ET4'
            ),
            'contrast_2_lg10p_DGE_M1M2M3_vs_T1' => array(
                'name' => 'lg10p DGE M1M2M3 vs T1'
            ),
            'contrast_3_lg10p_DGE_T1_vs_ET1ET4' => array(
                'name' => 'lg10p DGE T1 vs ET1ET4'
            ),
            'contrast_4_lg10p_DGE_M1_vs_M2' => array(
                'name' => 'lg10p DGE M1 vs M2'
            ),
            'contrast_5_lg10p_DGE_M1_vs_M3' => array(
                'name' => 'lg10p DGE M1 vs M3'
            ),
            'contrast_6_lg10p_DGE_M2_vs_M3' => array(
                'name' => 'lg10p DGE M2 vs M3'
            ),
            'contrast_7_lg10p_DGE_T1_vs_ET1' => array(
                'name' => 'lg10p DGE T1 vs ET1'
            ),
            'contrast_8_lg10p_DGE_T1_vs_ET2' => array(
                'name' => 'lg10p DGE T1 vs ET2'
            ),
            'contrast_9_lg10p_DGE_T1_vs_ET4' => array(
                'name' => 'lg10p DGE T1 vs ET4'
            ),
            'contrast_10_lg10p_DGE_ET1_vs_ET2' => array(
                'name' => '0 lg10p DGE ET1 vs ET2'
            ),
            'contrast_11_lg10p_DGE_ET1_vs_ET4' => array(
                'name' => '1 lg10p DGE ET1 vs ET4'
            ),
            'contrast_12_lg10p_DGE_ET2_vs_ET4' => array(
                'name' => '2 lg10p DGE ET2 vs ET4'
            ),
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg log10 Expr all'
            ),
            'add_counts_Avg_log10_Expr_C_0' => array(
                'name' => 'Avg log10 Expr C 0'
            ),
            'add_counts_Avg_log10_Expr_C_1' => array(
                'name' => 'Avg log10 Expr C 1'
            ),
            'add_counts_Avg_log10_Expr_C_10' => array(
                'name' => 'Avg log10 Expr C 10'
            ),
            'add_counts_Avg_log10_Expr_C_11' => array(
                'name' => 'Avg log10 Expr C 11'
            ),
            'add_counts_Avg_log10_Expr_C_12' => array(
                'name' => 'Avg log10 Expr C 12'
            ),
            'add_counts_Avg_log10_Expr_C_13' => array(
                'name' => 'Avg log10 Expr C 13'
            ),
            'add_counts_Avg_log10_Expr_C_14' => array(
                'name' => 'Avg log10 Expr C 14'
            ),
            'add_counts_Avg_log10_Expr_C_15' => array(
                'name' => 'Avg log10 Expr C 15'
            ),
            'add_counts_Avg_log10_Expr_C_16' => array(
                'name' => 'Avg log10 Expr C 16'
            ),
            'add_counts_Avg_log10_Expr_C_17' => array(
                'name' => 'Avg log10 Expr C 17'
            ),
            'add_counts_Avg_log10_Expr_C_18' => array(
                'name' => 'Avg log10 Expr C 18'
            ),
            'add_counts_Avg_log10_Expr_C_19' => array(
                'name' => 'Avg log10 Expr C 19'
            ),
            'add_counts_Avg_log10_Expr_C_10' => array(
                'name' => 'Avg log10 Expr C 10'
            ),
            'add_counts_Avg_log10_Expr_C_11' => array(
                'name' => 'Avg log10 Expr C 11'
            ),
            'add_counts_Avg_log10_Expr_C_12' => array(
                'name' => 'Avg log10 Expr C 12'
            ),
            'add_counts_Avg_log10_Expr_C_13' => array(
                'name' => 'Avg log10 Expr C 13'
            ),
            'add_counts_Avg_log10_Expr_C_14' => array(
                'name' => 'Avg log10 Expr C 14'
            ),
            'add_counts_Avg_log10_Expr_C_15' => array(
                'name' => 'Avg log10 Expr C 15'
            ),
            'add_counts_Avg_log10_Expr_C_16' => array(
                'name' => 'Avg log10 Expr C 16'
            ),
            'add_counts_Avg_log10_Expr_C_17' => array(
                'name' => 'Avg log10 Expr C 17'
            ),
            'add_counts_Avg_log10_Expr_C_18' => array(
                'name' => 'Avg log10 Expr C 18'
            ),
            'add_counts_Avg_log10_Expr_C_19' => array(
                'name' => 'Avg log10 Expr C 19'
            ),
            'add_counts_Avg_log10_Expr_C_2' => array(
                'name' => 'Avg log10 Expr C 2'
            ),
            'add_counts_Avg_log10_Expr_C_20' => array(
                'name' => 'Avg log10 Expr C 20'
            ),
            'add_counts_Avg_log10_Expr_C_21' => array(
                'name' => 'Avg log10 Expr C 21'
            ),
            'add_counts_Avg_log10_Expr_C_20' => array(
                'name' => 'Avg log10 Expr C 20'
            ),
            'add_counts_Avg_log10_Expr_C_21' => array(
                'name' => 'Avg log10 Expr C 21'
            ),
            'add_counts_Avg_log10_Expr_C_3' => array(
                'name' => 'Avg log10 Expr C 3'
            ),
            'add_counts_Avg_log10_Expr_C_4' => array(
                'name' => 'Avg log10 Expr C 4'
            ),
            'add_counts_Avg_log10_Expr_C_5' => array(
                'name' => 'Avg log10 Expr C 5'
            ),
            'add_counts_Avg_log10_Expr_C_6' => array(
                'name' => 'Avg log10 Expr C 6'
            ),
            'add_counts_Avg_log10_Expr_C_7' => array(
                'name' => 'Avg log10 Expr C 7'
            ),
            'add_counts_Avg_log10_Expr_C_8' => array(
                'name' => 'Avg log10 Expr C 8'
            ),
            'add_counts_Avg_log10_Expr_C_9' => array(
                'name' => 'Avg log10 Expr C 9'
            ),
            'add_counts_Avg_log10_Expr_OBseqR1' => array(
                'name' => 'Avg log10 Expr OBseqR1'
            ),
            'add_counts_Avg_log10_Expr_OBseqR2' => array(
                'name' => 'Avg log10 Expr OBseqR2'
            ),
            'add_counts_Avg_log10_Expr_OBseqR3' => array(
                'name' => 'Avg log10 Expr OBseqR3'
            ),
            'norm_counts_Avg_log10_Expr_C_0_OBseqR1' => array(
                'name' => 's Avg log10 Expr C 0 OBseqR1'
            ),
            'norm_counts_Avg_log10_Expr_C_0_OBseqR2' => array(
                'name' => 's Avg log10 Expr C 0 OBseqR2'
            ),
            'norm_counts_Avg_log10_Expr_C_0_OBseqR3' => array(
                'name' => 's Avg log10 Expr C 0 OBseqR3'
            ),
            'norm_counts_Avg_log10_Expr_C_10_OBseqR1' => array(
                'name' => 's Avg log10 Expr C 10 OBseqR1'
            ),
            'norm_counts_Avg_log10_Expr_C_10_OBseqR2' => array(
                'name' => 's Avg log10 Expr C 10 OBseqR2'
            ),
            'norm_counts_Avg_log10_Expr_C_10_OBseqR3' => array(
                'name' => 's Avg log10 Expr C 10 OBseqR3'
            ),
            'norm_counts_Avg_log10_Expr_C_11_OBseqR1' => array(
                'name' => 's Avg log10 Expr C 11 OBseqR1'
            ),
            'norm_counts_Avg_log10_Expr_C_11_OBseqR2' => array(
                'name' => 's Avg log10 Expr C 11 OBseqR2'
            ),
            'norm_counts_Avg_log10_Expr_C_11_OBseqR3' => array(
                'name' => 's Avg log10 Expr C 11 OBseqR3'
            ),
            'norm_counts_Avg_log10_Expr_C_12_OBseqR1' => array(
                'name' => 's Avg log10 Expr C 12 OBseqR1'
            ),
            'norm_counts_Avg_log10_Expr_C_12_OBseqR2' => array(
                'name' => 's Avg log10 Expr C 12 OBseqR2'
            ),
            'norm_counts_Avg_log10_Expr_C_12_OBseqR3' => array(
                'name' => 's Avg log10 Expr C 12 OBseqR3'
            ),
            'norm_counts_Avg_log10_Expr_C_13_OBseqR1' => array(
                'name' => 's Avg log10 Expr C 13 OBseqR1'
            ),
            'norm_counts_Avg_log10_Expr_C_13_OBseqR2' => array(
                'name' => 's Avg log10 Expr C 13 OBseqR2'
            ),
            'norm_counts_Avg_log10_Expr_C_13_OBseqR3' => array(
                'name' => 's Avg log10 Expr C 13 OBseqR3'
            ),
            'norm_counts_Avg_log10_Expr_C_14_OBseqR1' => array(
                'name' => 's Avg log10 Expr C 14 OBseqR1'
            ),
            'norm_counts_Avg_log10_Expr_C_14_OBseqR2' => array(
                'name' => 's Avg log10 Expr C 14 OBseqR2'
            ),
            'norm_counts_Avg_log10_Expr_C_14_OBseqR3' => array(
                'name' => 's Avg log10 Expr C 14 OBseqR3'
            ),
            'norm_counts_Avg_log10_Expr_C_15_OBseqR1' => array(
                'name' => 's Avg log10 Expr C 15 OBseqR1'
            ),
            'norm_counts_Avg_log10_Expr_C_15_OBseqR2' => array(
                'name' => 's Avg log10 Expr C 15 OBseqR2'
            ),
            'norm_counts_Avg_log10_Expr_C_15_OBseqR3' => array(
                'name' => 's Avg log10 Expr C 15 OBseqR3'
            ),
            'norm_counts_Avg_log10_Expr_C_16_OBseqR1' => array(
                'name' => 's Avg log10 Expr C 16 OBseqR1'
            ),
            'norm_counts_Avg_log10_Expr_C_16_OBseqR2' => array(
                'name' => 's Avg log10 Expr C 16 OBseqR2'
            ),
            'norm_counts_Avg_log10_Expr_C_16_OBseqR3' => array(
                'name' => 's Avg log10 Expr C 16 OBseqR3'
            ),
            'norm_counts_Avg_log10_Expr_C_17_OBseqR1' => array(
                'name' => 's Avg log10 Expr C 17 OBseqR1'
            ),
            'norm_counts_Avg_log10_Expr_C_17_OBseqR2' => array(
                'name' => 's Avg log10 Expr C 17 OBseqR2'
            ),
            'norm_counts_Avg_log10_Expr_C_17_OBseqR3' => array(
                'name' => 's Avg log10 Expr C 17 OBseqR3'
            ),
            'norm_counts_Avg_log10_Expr_C_18_OBseqR1' => array(
                'name' => 's Avg log10 Expr C 18 OBseqR1'
            ),
            'norm_counts_Avg_log10_Expr_C_18_OBseqR2' => array(
                'name' => 's Avg log10 Expr C 18 OBseqR2'
            ),
            'norm_counts_Avg_log10_Expr_C_18_OBseqR3' => array(
                'name' => 's Avg log10 Expr C 18 OBseqR3'
            ),
            'norm_counts_Avg_log10_Expr_C_19_OBseqR1' => array(
                'name' => 's Avg log10 Expr C 19 OBseqR1'
            ),
            'norm_counts_Avg_log10_Expr_C_19_OBseqR2' => array(
                'name' => 's Avg log10 Expr C 19 OBseqR2'
            ),
            'norm_counts_Avg_log10_Expr_C_19_OBseqR3' => array(
                'name' => 's Avg log10 Expr C 19 OBseqR3'
            ),
            'norm_counts_Avg_log10_Expr_C_1_OBseqR1' => array(
                'name' => 's Avg log10 Expr C 1 OBseqR1'
            ),
            'norm_counts_Avg_log10_Expr_C_1_OBseqR2' => array(
                'name' => 's Avg log10 Expr C 1 OBseqR2'
            ),
            'norm_counts_Avg_log10_Expr_C_1_OBseqR3' => array(
                'name' => 's Avg log10 Expr C 1 OBseqR3'
            ),
            'norm_counts_Avg_log10_Expr_C_20_OBseqR1' => array(
                'name' => 's Avg log10 Expr C 20 OBseqR1'
            ),
            'norm_counts_Avg_log10_Expr_C_20_OBseqR2' => array(
                'name' => 's Avg log10 Expr C 20 OBseqR2'
            ),
            'norm_counts_Avg_log10_Expr_C_20_OBseqR3' => array(
                'name' => 's Avg log10 Expr C 20 OBseqR3'
            ),
            'norm_counts_Avg_log10_Expr_C_21_OBseqR1' => array(
                'name' => 's Avg log10 Expr C 21 OBseqR1'
            ),
            'norm_counts_Avg_log10_Expr_C_21_OBseqR2' => array(
                'name' => 's Avg log10 Expr C 21 OBseqR2'
            ),
            'norm_counts_Avg_log10_Expr_C_21_OBseqR3' => array(
                'name' => 's Avg log10 Expr C 21 OBseqR3'
            ),
            'norm_counts_Avg_log10_Expr_C_2_OBseqR1' => array(
                'name' => 's Avg log10 Expr C 2 OBseqR1'
            ),
            'norm_counts_Avg_log10_Expr_C_2_OBseqR2' => array(
                'name' => 's Avg log10 Expr C 2 OBseqR2'
            ),
            'norm_counts_Avg_log10_Expr_C_2_OBseqR3' => array(
                'name' => 's Avg log10 Expr C 2 OBseqR3'
            ),
            'norm_counts_Avg_log10_Expr_C_3_OBseqR1' => array(
                'name' => 's Avg log10 Expr C 3 OBseqR1'
            ),
            'norm_counts_Avg_log10_Expr_C_3_OBseqR2' => array(
                'name' => 's Avg log10 Expr C 3 OBseqR2'
            ),
            'norm_counts_Avg_log10_Expr_C_3_OBseqR3' => array(
                'name' => 's Avg log10 Expr C 3 OBseqR3'
            ),
            'norm_counts_Avg_log10_Expr_C_4_OBseqR1' => array(
                'name' => 's Avg log10 Expr C 4 OBseqR1'
            ),
            'norm_counts_Avg_log10_Expr_C_4_OBseqR2' => array(
                'name' => 's Avg log10 Expr C 4 OBseqR2'
            ),
            'norm_counts_Avg_log10_Expr_C_4_OBseqR3' => array(
                'name' => 's Avg log10 Expr C 4 OBseqR3'
            ),
            'norm_counts_Avg_log10_Expr_C_5_OBseqR1' => array(
                'name' => 's Avg log10 Expr C 5 OBseqR1'
            ),
            'norm_counts_Avg_log10_Expr_C_5_OBseqR2' => array(
                'name' => 's Avg log10 Expr C 5 OBseqR2'
            ),
            'norm_counts_Avg_log10_Expr_C_5_OBseqR3' => array(
                'name' => 's Avg log10 Expr C 5 OBseqR3'
            ),
            'norm_counts_Avg_log10_Expr_C_6_OBseqR1' => array(
                'name' => 's Avg log10 Expr C 6 OBseqR1'
            ),
            'norm_counts_Avg_log10_Expr_C_6_OBseqR2' => array(
                'name' => 's Avg log10 Expr C 6 OBseqR2'
            ),
            'norm_counts_Avg_log10_Expr_C_6_OBseqR3' => array(
                'name' => 's Avg log10 Expr C 6 OBseqR3'
            ),
            'norm_counts_Avg_log10_Expr_C_7_OBseqR1' => array(
                'name' => 's Avg log10 Expr C 7 OBseqR1'
            ),
            'norm_counts_Avg_log10_Expr_C_7_OBseqR2' => array(
                'name' => 's Avg log10 Expr C 7 OBseqR2'
            ),
            'norm_counts_Avg_log10_Expr_C_7_OBseqR3' => array(
                'name' => 's Avg log10 Expr C 7 OBseqR3'
            ),
            'norm_counts_Avg_log10_Expr_C_8_OBseqR1' => array(
                'name' => 's Avg log10 Expr C 8 OBseqR1'
            ),
            'norm_counts_Avg_log10_Expr_C_8_OBseqR2' => array(
                'name' => 's Avg log10 Expr C 8 OBseqR2'
            ),
            'norm_counts_Avg_log10_Expr_C_8_OBseqR3' => array(
                'name' => 's Avg log10 Expr C 8 OBseqR3'
            ),
            'norm_counts_Avg_log10_Expr_C_9_OBseqR1' => array(
                'name' => 's Avg log10 Expr C 9 OBseqR1'
            ),
            'norm_counts_Avg_log10_Expr_C_9_OBseqR2' => array(
                'name' => 's Avg log10 Expr C 9 OBseqR2'
            ),
            'norm_counts_Avg_log10_Expr_C_9_OBseqR3' => array(
                'name' => 's Avg log10 Expr C 9 OBseqR3'
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
            'add_MA_cts_MA_Avg_DGE_M1M2M3_vs_T1ET1ET4' => array(
                'name' => 'MA Avg DGE M1M2M3 vs T1ET1ET4'
            ),
            'add_MA_cts_MA_Avg_DGE_M1M2M3_vs_T1ET1ET4' => array(
                'name' => 'MA Avg DGE M1M2M3 vs T1ET1ET4'
            ),
            'add_MA_cts_MA_Avg_DGE_M1M2M3_vs_T1' => array(
                'name' => 'MA Avg DGE M1M2M3 vs T1'
            ),
            'add_MA_cts_MA_Avg_DGE_T1_vs_ET1ET4' => array(
                'name' => 'MA Avg DGE T1 vs ET1ET4'
            ),
            'add_MA_cts_MA_Avg_DGE_M1_vs_M2' => array(
                'name' => 'MA Avg DGE M1 vs M2'
            ),
            'add_MA_cts_MA_Avg_DGE_M1_vs_M3' => array(
                'name' => 'MA Avg DGE M1 vs M3'
            ),
            'add_MA_cts_MA_Avg_DGE_M2_vs_M3' => array(
                'name' => 'MA Avg DGE M2 vs M3'
            ),
            'add_MA_cts_MA_Avg_DGE_T1_vs_ET1ET4' => array(
                'name' => 'MA Avg DGE T1 vs ET1ET4'
            ),
            'add_MA_cts_MA_Avg_DGE_T1_vs_ET1' => array(
                'name' => 'MA Avg DGE T1 vs ET1'
            ),
            'add_MA_cts_MA_Avg_DGE_T1_vs_ET2' => array(
                'name' => 'MA Avg DGE T1 vs ET2'
            ),
            'add_MA_cts_MA_Avg_DGE_T1_vs_ET4' => array(
                'name' => 'MA Avg DGE T1 vs ET4'
            ),
            'add_MA_cts_MA_Avg_DGE_ET1_vs_ET2' => array(
                'name' => 'MA Avg DGE ET1 vs ET2'
            ),
            'add_MA_cts_MA_Avg_DGE_ET1_vs_ET4' => array(
                'name' => 'MA Avg DGE ET1 vs ET4'
            ),
            'add_MA_cts_MA_Avg_DGE_ET2_vs_ET4' => array(
                'name' => 'MA Avg DGE ET2 vs ET4'
            ),
            'add_counts_C_0_Residuals' => array(
                'name' => 'C 0 Residuals'
            ),
            'add_counts_C_1_Residuals' => array(
                'name' => 'C 1 Residuals'
            ),
            'add_counts_C_10_Residuals' => array(
                'name' => 'C 10 Residuals'
            ),
            'add_counts_C_11_Residuals' => array(
                'name' => 'C 11 Residuals'
            ),
            'add_counts_C_12_Residuals' => array(
                'name' => 'C 12 Residuals'
            ),
            'add_counts_C_13_Residuals' => array(
                'name' => 'C 13 Residuals'
            ),
            'add_counts_C_14_Residuals' => array(
                'name' => 'C 14 Residuals'
            ),
            'add_counts_C_15_Residuals' => array(
                'name' => 'C 15 Residuals'
            ),
            'add_counts_C_16_Residuals' => array(
                'name' => 'C 16 Residuals'
            ),
            'add_counts_C_17_Residuals' => array(
                'name' => 'C 17 Residuals'
            ),
            'add_counts_C_18_Residuals' => array(
                'name' => 'C 18 Residuals'
            ),
            'add_counts_C_19_Residuals' => array(
                'name' => 'C 19 Residuals'
            ),
            'add_counts_C_2_Residuals' => array(
                'name' => 'C 2 Residuals'
            ),
            'add_counts_C_20_Residuals' => array(
                'name' => 'C 20 Residuals'
            ),
            'add_counts_C_21_Residuals' => array(
                'name' => 'C 21 Residuals'
            ),
            'add_counts_C_3_Residuals' => array(
                'name' => 'C 3 Residuals'
            ),
            'add_counts_C_4_Residuals' => array(
                'name' => 'C 4 Residuals'
            ),
            'add_counts_C_5_Residuals' => array(
                'name' => 'C 5 Residuals'
            ),
            'add_counts_C_6_Residuals' => array(
                'name' => 'C 6 Residuals'
            ),
            'add_counts_C_7_Residuals' => array(
                'name' => 'C 7 Residuals'
            ),
            'add_counts_C_8_Residuals' => array(
                'name' => 'C 8 Residuals'
            ),
            'add_counts_C_9_Residuals' => array(
                'name' => 'C 9 Residuals'
            )
        )
    )
//End scatterplot
);
