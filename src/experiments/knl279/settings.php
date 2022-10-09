<?php

return array(
    'lab' => array(
        'name' => 'Niakan DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'knl_data',
    'data_db' => array(
            'cat_table_name' => 'knl279_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'p279_sc_rna_seq_table',
    'primary_gene_symbol' => 'hgnc_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged Expr',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Avg_lg10_Expr_C_Ooc_Ooc' => array(
            'color' => '#F8766D',
            'name' => 'Avg lg10 Expr C Ooc Ooc'
        ),
        'norm_counts_Avg_lg10_Expr_C_Zyg_Zyg' => array(
            'color' => '#F8766D',
            'name' => 'Avg lg10 Expr C Zyg Zyg'
        ),
        'norm_counts_Avg_lg10_Expr_C_X2Cembryo1_X2Cembryo1' => array(
            'color' => '#F8766D',
            'name' => 'Avg lg10 Expr C X2Cembryo1 X2Cembryo1'
        ),
        'norm_counts_Avg_lg10_Expr_C_X2Cembryo2_X2Cembryo2' => array(
            'color' => '#F8766D',
            'name' => 'Avg lg10 Expr C X2Cembryo2 X2Cembryo2'
        ),
        'norm_counts_Avg_lg10_Expr_C_X2Cembryo3_X2Cembryo3' => array(
            'color' => '#F8766D',
            'name' => 'Avg lg10 Expr C X2Cembryo3 X2Cembryo3'
        ),
        'norm_counts_Avg_lg10_Expr_C_X4Cembryo1_X4Cembryo1' => array(
            'color' => '#F8766D',
            'name' => 'Avg lg10 Expr C X4Cembryo1 X4Cembryo1'
        ),
        'norm_counts_Avg_lg10_Expr_C_X4Cembryo2_X4Cembryo2' => array(
            'color' => '#F8766D',
            'name' => 'Avg lg10 Expr C X4Cembryo2 X4Cembryo2'
        ),
        'norm_counts_Avg_lg10_Expr_C_X4Cembryo3_X4Cembryo3' => array(
            'color' => '#F8766D',
            'name' => 'Avg lg10 Expr C X4Cembryo3 X4Cembryo3'
        ),
        'norm_counts_Avg_lg10_Expr_C_X8Cembryo1_X8Cembryo1' => array(
            'color' => '#F8766D',
            'name' => 'Avg lg10 Expr C X8Cembryo1 X8Cembryo1'
        ),
        'norm_counts_Avg_lg10_Expr_C_X8Cembryo2_X8Cembryo2' => array(
            'color' => '#F8766D',
            'name' => 'Avg lg10 Expr C X8Cembryo2 X8Cembryo2'
        ),
        'norm_counts_Avg_lg10_Expr_C_X8Cembryo3_X8Cembryo3' => array(
            'color' => '#F8766D',
            'name' => 'Avg lg10 Expr C X8Cembryo3 X8Cembryo3'
        ),
        'norm_counts_Avg_lg10_Expr_C_Mor1_Mor1' => array(
            'color' => '#F8766D',
            'name' => 'Avg lg10 Expr C Mor1 Mor1'
        ),
        'norm_counts_Avg_lg10_Expr_C_Mor2_Mor2' => array(
            'color' => '#F8766D',
            'name' => 'Avg lg10 Expr C Mor2 Mor2'
        ),
        'norm_counts_Avg_lg10_Expr_C_LateB1_LateB1' => array(
            'color' => '#F8766D',
            'name' => 'Avg lg10 Expr C LateB1 LateB1'
        ),
        'norm_counts_Avg_lg10_Expr_C_LateB2_LateB2' => array(
            'color' => '#F8766D',
            'name' => 'Avg lg10 Expr C LateB2 LateB2'
        ),
        'norm_counts_Avg_lg10_Expr_C_LateB3_LateB3' => array(
            'color' => '#F8766D',
            'name' => 'Avg lg10 Expr C LateB3 LateB3'
        ),
        'norm_counts_Avg_lg10_Expr_C_hEscP10_hEscP10' => array(
            'color' => '#F8766D',
            'name' => 'Avg lg10 Expr C hEscP10 hEscP10'
        ),
        'norm_counts_Avg_lg10_Expr_C_hEscP0_hEscP0' => array(
            'color' => '#F8766D',
            'name' => 'Avg lg10 Expr C hEscP0 hEscP0'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'lg10 Expr for all Samples',
        'sidelabel' => 'lg10 Expr'
    ),

// New Begin: Timecourse
'timecourse_chart' => array(
    'timepoint_name' => 'Day',
    'display_median' => 'calculate_median',
    'timepoint_array' => array(0,1,1.5,2,4,4.5,6),
    'datasets' => array(
'A' => array(
    'color' => '#FF0000FF',
    'sample_group' => array(
'Ooc' => array(
    'timepoint' =>  0,
    'sampleDbCols' =>  array(
'ts_counts_Avg_log10_Expr_Ooc_1','ts_counts_Avg_log10_Expr_Ooc_2','ts_counts_Avg_log10_Expr_Ooc_3'
)),
'Zyg' => array(
    'timepoint' =>  1,
    'sampleDbCols' =>  array(
'ts_counts_Avg_log10_Expr_Zyg_1','ts_counts_Avg_log10_Expr_Zyg_2','ts_counts_Avg_log10_Expr_Zyg_3'
)),
'X2Cembryo' => array(
    'timepoint' =>  1.5,
    'sampleDbCols' =>  array(
'ts_counts_Avg_log10_Expr_X2Cembryo1_1','ts_counts_Avg_log10_Expr_X2Cembryo1_2','ts_counts_Avg_log10_Expr_X2Cembryo2_1','ts_counts_Avg_log10_Expr_X2Cembryo2_2','ts_counts_Avg_log10_Expr_X2Cembryo3_1','ts_counts_Avg_log10_Expr_X2Cembryo3_2'
)),
'X4Cembryo' => array(
    'timepoint' =>  2,
    'sampleDbCols' =>  array(
'ts_counts_Avg_log10_Expr_X4Cembryo1_1','ts_counts_Avg_log10_Expr_X4Cembryo1_2','ts_counts_Avg_log10_Expr_X4Cembryo1_3','ts_counts_Avg_log10_Expr_X4Cembryo1_4','ts_counts_Avg_log10_Expr_X4Cembryo2_1','ts_counts_Avg_log10_Expr_X4Cembryo2_2','ts_counts_Avg_log10_Expr_X4Cembryo2_3','ts_counts_Avg_log10_Expr_X4Cembryo2_4','ts_counts_Avg_log10_Expr_X4Cembryo3_1','ts_counts_Avg_log10_Expr_X4Cembryo3_2','ts_counts_Avg_log10_Expr_X4Cembryo3_3','ts_counts_Avg_log10_Expr_X4Cembryo3_4'
)),
'X8Cembryo' => array(
    'timepoint' =>  4,
    'sampleDbCols' =>  array(
'ts_counts_Avg_log10_Expr_X8Cembryo1_1','ts_counts_Avg_log10_Expr_X8Cembryo1_2','ts_counts_Avg_log10_Expr_X8Cembryo1_3','ts_counts_Avg_log10_Expr_X8Cembryo1_4','ts_counts_Avg_log10_Expr_X8Cembryo2_1','ts_counts_Avg_log10_Expr_X8Cembryo2_2','ts_counts_Avg_log10_Expr_X8Cembryo2_3','ts_counts_Avg_log10_Expr_X8Cembryo2_4','ts_counts_Avg_log10_Expr_X8Cembryo2_5','ts_counts_Avg_log10_Expr_X8Cembryo2_6','ts_counts_Avg_log10_Expr_X8Cembryo2_7','ts_counts_Avg_log10_Expr_X8Cembryo2_8','ts_counts_Avg_log10_Expr_X8Cembryo3_1','ts_counts_Avg_log10_Expr_X8Cembryo3_2','ts_counts_Avg_log10_Expr_X8Cembryo3_3','ts_counts_Avg_log10_Expr_X8Cembryo3_4','ts_counts_Avg_log10_Expr_X8Cembryo3_5','ts_counts_Avg_log10_Expr_X8Cembryo3_6','ts_counts_Avg_log10_Expr_X8Cembryo3_7','ts_counts_Avg_log10_Expr_X8Cembryo3_8'
)),
'Mor' => array(
    'timepoint' =>  4.5,
    'sampleDbCols' =>  array(
'ts_counts_Avg_log10_Expr_Mor1_1','ts_counts_Avg_log10_Expr_Mor1_2','ts_counts_Avg_log10_Expr_Mor1_3','ts_counts_Avg_log10_Expr_Mor1_4','ts_counts_Avg_log10_Expr_Mor1_5','ts_counts_Avg_log10_Expr_Mor1_6','ts_counts_Avg_log10_Expr_Mor1_7','ts_counts_Avg_log10_Expr_Mor1_8','ts_counts_Avg_log10_Expr_Mor2_1','ts_counts_Avg_log10_Expr_Mor2_2','ts_counts_Avg_log10_Expr_Mor2_3','ts_counts_Avg_log10_Expr_Mor2_4','ts_counts_Avg_log10_Expr_Mor2_5','ts_counts_Avg_log10_Expr_Mor2_6','ts_counts_Avg_log10_Expr_Mor2_7','ts_counts_Avg_log10_Expr_Mor2_8'
)),
'LateB' => array(
    'timepoint' =>  6,
    'sampleDbCols' =>  array(
'ts_counts_Avg_log10_Expr_LateB1_1','ts_counts_Avg_log10_Expr_LateB1_10','ts_counts_Avg_log10_Expr_LateB1_11','ts_counts_Avg_log10_Expr_LateB1_12','ts_counts_Avg_log10_Expr_LateB1_2','ts_counts_Avg_log10_Expr_LateB1_3','ts_counts_Avg_log10_Expr_LateB1_4','ts_counts_Avg_log10_Expr_LateB1_5','ts_counts_Avg_log10_Expr_LateB1_6','ts_counts_Avg_log10_Expr_LateB1_7','ts_counts_Avg_log10_Expr_LateB1_8','ts_counts_Avg_log10_Expr_LateB1_9','ts_counts_Avg_log10_Expr_LateB2_1','ts_counts_Avg_log10_Expr_LateB2_10','ts_counts_Avg_log10_Expr_LateB2_2','ts_counts_Avg_log10_Expr_LateB2_3','ts_counts_Avg_log10_Expr_LateB2_4','ts_counts_Avg_log10_Expr_LateB2_5','ts_counts_Avg_log10_Expr_LateB2_6','ts_counts_Avg_log10_Expr_LateB2_7','ts_counts_Avg_log10_Expr_LateB2_8','ts_counts_Avg_log10_Expr_LateB2_9','ts_counts_Avg_log10_Expr_LateB3_1','ts_counts_Avg_log10_Expr_LateB3_2','ts_counts_Avg_log10_Expr_LateB3_3','ts_counts_Avg_log10_Expr_LateB3_4','ts_counts_Avg_log10_Expr_LateB3_5','ts_counts_Avg_log10_Expr_LateB3_6','ts_counts_Avg_log10_Expr_LateB3_7','ts_counts_Avg_log10_Expr_LateB3_8'
)))))),
// New End: Timecourse

    
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Avg_log10_Expr_Sc_C_Ooc_Ooc','lg2_avg_Avg_log10_Expr_Sc_C_Zyg_Zyg','lg2_avg_Avg_log10_Expr_Sc_C_X2Cembryo1_X2Cembryo1','lg2_avg_Avg_log10_Expr_Sc_C_X2Cembryo2_X2Cembryo2','lg2_avg_Avg_log10_Expr_Sc_C_X2Cembryo3_X2Cembryo3','lg2_avg_Avg_log10_Expr_Sc_C_X4Cembryo1_X4Cembryo1','lg2_avg_Avg_log10_Expr_Sc_C_X4Cembryo2_X4Cembryo2','lg2_avg_Avg_log10_Expr_Sc_C_X4Cembryo3_X4Cembryo3','lg2_avg_Avg_log10_Expr_Sc_C_X8Cembryo1_X8Cembryo1','lg2_avg_Avg_log10_Expr_Sc_C_X8Cembryo2_X8Cembryo2','lg2_avg_Avg_log10_Expr_Sc_C_X8Cembryo3_X8Cembryo3','lg2_avg_Avg_log10_Expr_Sc_C_Mor1_Mor1','lg2_avg_Avg_log10_Expr_Sc_C_Mor2_Mor2','lg2_avg_Avg_log10_Expr_Sc_C_LateB1_LateB1','lg2_avg_Avg_log10_Expr_Sc_C_LateB2_LateB2','lg2_avg_Avg_log10_Expr_Sc_C_LateB3_LateB3','lg2_avg_Avg_log10_Expr_Sc_C_hEscP10_hEscP10','lg2_avg_Avg_log10_Expr_Sc_C_hEscP0_hEscP0'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
            'name' => 'logFC Expressed in N Percent Cells',
            'slider_min' => 2,
            'slider_max' => 100,
            'default_low' => 2,
            'default_high' => 100
        ),
        'contrast_1_logFC_bulkRNAseq_knl366_CTRL_D0_vs_KLF17_D0' => array(
            'name' => 'logFC bulkRNAseq knl366 CTRL D0 vs KLF17 D0',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_2_logFC_bulkRNAseq_knl366_CTRL_D1_vs_KLF17_D1' => array(
            'name' => 'logFC bulkRNAseq knl366 CTRL D1 vs KLF17 D1',
            'slider_min' => -4,
            'slider_max' => 2,
            'default_low' => -4,
            'default_high' => 2
        ),
        'contrast_3_logFC_bulkRNAseq_knl366_CTRL_D2_vs_KLF17_D2' => array(
            'name' => 'logFC bulkRNAseq knl366 CTRL D2 vs KLF17 D2',
            'slider_min' => -7,
            'slider_max' => 3,
            'default_low' => -7,
            'default_high' => 3
        ),
        'contrast_4_logFC_bulkRNAseq_knl366_CTRL_D3_vs_KLF17_D3' => array(
            'name' => 'logFC bulkRNAseq knl366 CTRL D3 vs KLF17 D3',
            'slider_min' => -7,
            'slider_max' => 3,
            'default_low' => -7,
            'default_high' => 3
        ),
        'contrast_5_logFC_bulkRNAseq_knl366_CTRL_D5_vs_KLF17_D5' => array(
            'name' => 'logFC bulkRNAseq knl366 CTRL D5 vs KLF17 D5',
            'slider_min' => -8,
            'slider_max' => 3,
            'default_low' => -8,
            'default_high' => 3
        ),
        'contrast_6_logFC_bulkRNAseq_knl366_CTRL_D0_vs_CTRL_D5' => array(
            'name' => 'logFC bulkRNAseq knl366 CTRL D0 vs CTRL D5',
            'slider_min' => -6,
            'slider_max' => 3,
            'default_low' => -6,
            'default_high' => 3
        ),
        'contrast_7_logFC_bulkRNAseq_knl366_KLF17_D0_vs_KLF17_D5' => array(
            'name' => 'logFC bulkRNAseq knl366 KLF17 D0 vs KLF17 D5',
            'slider_min' => -8,
            'slider_max' => 4,
            'default_low' => -8,
            'default_high' => 4
        ),
        'contrast_1_padj_bulkRNAseq_knl366_CTRL_D0_vs_KLF17_D0' => array(
            'name' => 'padj bulkRNAseq knl366 CTRL D0 vs KLF17 D0',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_padj_bulkRNAseq_knl366_CTRL_D1_vs_KLF17_D1' => array(
            'name' => 'padj bulkRNAseq knl366 CTRL D1 vs KLF17 D1',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_padj_bulkRNAseq_knl366_CTRL_D2_vs_KLF17_D2' => array(
            'name' => 'padj bulkRNAseq knl366 CTRL D2 vs KLF17 D2',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_padj_bulkRNAseq_knl366_CTRL_D3_vs_KLF17_D3' => array(
            'name' => 'padj bulkRNAseq knl366 CTRL D3 vs KLF17 D3',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_5_padj_bulkRNAseq_knl366_CTRL_D5_vs_KLF17_D5' => array(
            'name' => 'padj bulkRNAseq knl366 CTRL D5 vs KLF17 D5',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_6_padj_bulkRNAseq_knl366_CTRL_D0_vs_CTRL_D5' => array(
            'name' => 'padj bulkRNAseq knl366 CTRL D0 vs CTRL D5',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_7_padj_bulkRNAseq_knl366_KLF17_D0_vs_KLF17_D5' => array(
            'name' => 'padj bulkRNAseq knl366 KLF17 D0 vs KLF17 D5',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_1_lg10p_bulkRNAseq_knl366_CTRL_D0_vs_KLF17_D0' => array(
            'name' => 'lg10p bulkRNAseq knl366 CTRL D0 vs KLF17 D0',
            'slider_min' => 0,
            'slider_max' => 37,
            'default_low' => 0,
            'default_high' => 37
        ),
        'contrast_2_lg10p_bulkRNAseq_knl366_CTRL_D1_vs_KLF17_D1' => array(
            'name' => 'lg10p bulkRNAseq knl366 CTRL D1 vs KLF17 D1',
            'slider_min' => 0,
            'slider_max' => 80,
            'default_low' => 0,
            'default_high' => 80
        ),
        'contrast_3_lg10p_bulkRNAseq_knl366_CTRL_D2_vs_KLF17_D2' => array(
            'name' => 'lg10p bulkRNAseq knl366 CTRL D2 vs KLF17 D2',
            'slider_min' => 0,
            'slider_max' => 220,
            'default_low' => 0,
            'default_high' => 220
        ),
        'contrast_4_lg10p_bulkRNAseq_knl366_CTRL_D3_vs_KLF17_D3' => array(
            'name' => 'lg10p bulkRNAseq knl366 CTRL D3 vs KLF17 D3',
            'slider_min' => 0,
            'slider_max' => 181,
            'default_low' => 0,
            'default_high' => 181
        ),
        'contrast_5_lg10p_bulkRNAseq_knl366_CTRL_D5_vs_KLF17_D5' => array(
            'name' => 'lg10p bulkRNAseq knl366 CTRL D5 vs KLF17 D5',
            'slider_min' => 0,
            'slider_max' => 196,
            'default_low' => 0,
            'default_high' => 196
        ),
        'contrast_6_lg10p_bulkRNAseq_knl366_CTRL_D0_vs_CTRL_D5' => array(
            'name' => 'lg10p bulkRNAseq knl366 CTRL D0 vs CTRL D5',
            'slider_min' => 0,
            'slider_max' => 41,
            'default_low' => 0,
            'default_high' => 41
        ),
        'contrast_7_lg10p_bulkRNAseq_knl366_KLF17_D0_vs_KLF17_D5' => array(
            'name' => 'lg10p bulkRNAseq knl366 KLF17 D0 vs KLF17 D5',
            'slider_min' => 0,
            'slider_max' => 133,
            'default_low' => 0,
            'default_high' => 133
        ),
        'contrast_L_lg10p_bulkRNAseq_knl366_LRT_Timepoint' => array(
            'name' => 'lg10p bulkRNAseq knl366 LRT Timepoint',
            'slider_min' => 0,
            'slider_max' => 54,
            'default_low' => 0,
            'default_high' => 54
        ),
        'contrast_L_lg10p_bulkRNAseq_knl366_LRT_Batch' => array(
            'name' => 'lg10p bulkRNAseq knl366 LRT Batch',
            'slider_min' => 0,
            'slider_max' => 87,
            'default_low' => 0,
            'default_high' => 87
        ),
        'contrast_L_lg10p_bulkRNAseq_knl366_LRT_Genotype' => array(
            'name' => 'lg10p bulkRNAseq knl366 LRT Genotype',
            'slider_min' => 0,
            'slider_max' => 56,
            'default_low' => 0,
            'default_high' => 56
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'p279_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_X_logFC_Expressed_in_N_Percent_Cells',
        'default-y' => 'norm_counts_Avg_lg10_Expr_C_Ooc_Ooc',
        'selection' => array(
            'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
                'name' => 'logFC Expressed in N Percent Cells'
            ),
            'contrast_1_logFC_bulkRNAseq_knl366_CTRL_D0_vs_KLF17_D0' => array(
                'name' => 'logFC bulkRNAseq knl366 CTRL D0 vs KLF17 D0'
            ),
            'contrast_2_logFC_bulkRNAseq_knl366_CTRL_D1_vs_KLF17_D1' => array(
                'name' => 'logFC bulkRNAseq knl366 CTRL D1 vs KLF17 D1'
            ),
            'contrast_3_logFC_bulkRNAseq_knl366_CTRL_D2_vs_KLF17_D2' => array(
                'name' => 'logFC bulkRNAseq knl366 CTRL D2 vs KLF17 D2'
            ),
            'contrast_4_logFC_bulkRNAseq_knl366_CTRL_D3_vs_KLF17_D3' => array(
                'name' => 'logFC bulkRNAseq knl366 CTRL D3 vs KLF17 D3'
            ),
            'contrast_5_logFC_bulkRNAseq_knl366_CTRL_D5_vs_KLF17_D5' => array(
                'name' => 'logFC bulkRNAseq knl366 CTRL D5 vs KLF17 D5'
            ),
            'contrast_6_logFC_bulkRNAseq_knl366_CTRL_D0_vs_CTRL_D5' => array(
                'name' => 'logFC bulkRNAseq knl366 CTRL D0 vs CTRL D5'
            ),
            'contrast_7_logFC_bulkRNAseq_knl366_KLF17_D0_vs_KLF17_D5' => array(
                'name' => 'logFC bulkRNAseq knl366 KLF17 D0 vs KLF17 D5'
            ),
            'contrast_1_padj_bulkRNAseq_knl366_CTRL_D0_vs_KLF17_D0' => array(
                'name' => 'padj bulkRNAseq knl366 CTRL D0 vs KLF17 D0'
            ),
            'contrast_2_padj_bulkRNAseq_knl366_CTRL_D1_vs_KLF17_D1' => array(
                'name' => 'padj bulkRNAseq knl366 CTRL D1 vs KLF17 D1'
            ),
            'contrast_3_padj_bulkRNAseq_knl366_CTRL_D2_vs_KLF17_D2' => array(
                'name' => 'padj bulkRNAseq knl366 CTRL D2 vs KLF17 D2'
            ),
            'contrast_4_padj_bulkRNAseq_knl366_CTRL_D3_vs_KLF17_D3' => array(
                'name' => 'padj bulkRNAseq knl366 CTRL D3 vs KLF17 D3'
            ),
            'contrast_5_padj_bulkRNAseq_knl366_CTRL_D5_vs_KLF17_D5' => array(
                'name' => 'padj bulkRNAseq knl366 CTRL D5 vs KLF17 D5'
            ),
            'contrast_6_padj_bulkRNAseq_knl366_CTRL_D0_vs_CTRL_D5' => array(
                'name' => 'padj bulkRNAseq knl366 CTRL D0 vs CTRL D5'
            ),
            'contrast_7_padj_bulkRNAseq_knl366_KLF17_D0_vs_KLF17_D5' => array(
                'name' => 'padj bulkRNAseq knl366 KLF17 D0 vs KLF17 D5'
            ),
            'contrast_1_lg10p_bulkRNAseq_knl366_CTRL_D0_vs_KLF17_D0' => array(
                'name' => 'lg10p bulkRNAseq knl366 CTRL D0 vs KLF17 D0'
            ),
            'contrast_2_lg10p_bulkRNAseq_knl366_CTRL_D1_vs_KLF17_D1' => array(
                'name' => 'lg10p bulkRNAseq knl366 CTRL D1 vs KLF17 D1'
            ),
            'contrast_3_lg10p_bulkRNAseq_knl366_CTRL_D2_vs_KLF17_D2' => array(
                'name' => 'lg10p bulkRNAseq knl366 CTRL D2 vs KLF17 D2'
            ),
            'contrast_4_lg10p_bulkRNAseq_knl366_CTRL_D3_vs_KLF17_D3' => array(
                'name' => 'lg10p bulkRNAseq knl366 CTRL D3 vs KLF17 D3'
            ),
            'contrast_5_lg10p_bulkRNAseq_knl366_CTRL_D5_vs_KLF17_D5' => array(
                'name' => 'lg10p bulkRNAseq knl366 CTRL D5 vs KLF17 D5'
            ),
            'contrast_6_lg10p_bulkRNAseq_knl366_CTRL_D0_vs_CTRL_D5' => array(
                'name' => 'lg10p bulkRNAseq knl366 CTRL D0 vs CTRL D5'
            ),
            'contrast_7_lg10p_bulkRNAseq_knl366_KLF17_D0_vs_KLF17_D5' => array(
                'name' => 'lg10p bulkRNAseq knl366 KLF17 D0 vs KLF17 D5'
            ),
            'contrast_L_lg10p_bulkRNAseq_knl366_LRT_Timepoint' => array(
                'name' => 'lg10p bulkRNAseq knl366 LRT Timepoint'
            ),
            'contrast_L_lg10p_bulkRNAseq_knl366_LRT_Batch' => array(
                'name' => 'lg10p bulkRNAseq knl366 LRT Batch'
            ),
            'contrast_L_lg10p_bulkRNAseq_knl366_LRT_Genotype' => array(
                'name' => 'lg10p bulkRNAseq knl366 LRT Genotype'
            ),
            'add_counts_Avg_log10_Expr_hEscP0' => array(
                'name' => 'Avg log10 Expr hEscP0'
            ),
            'add_counts_Avg_log10_Expr_hEscP10' => array(
                'name' => 'Avg log10 Expr hEscP10'
            ),
            'add_counts_Avg_log10_Expr_LateB1' => array(
                'name' => 'Avg log10 Expr LateB1'
            ),
            'add_counts_Avg_log10_Expr_LateB2' => array(
                'name' => 'Avg log10 Expr LateB2'
            ),
            'add_counts_Avg_log10_Expr_LateB3' => array(
                'name' => 'Avg log10 Expr LateB3'
            ),
            'add_counts_Avg_log10_Expr_Mor1' => array(
                'name' => 'Avg log10 Expr Mor1'
            ),
            'add_counts_Avg_log10_Expr_Mor2' => array(
                'name' => 'Avg log10 Expr Mor2'
            ),
            'add_counts_Avg_log10_Expr_Ooc' => array(
                'name' => 'Avg log10 Expr Ooc'
            ),
            'add_counts_Avg_log10_Expr_X2Cembryo1' => array(
                'name' => 'Avg log10 Expr X2Cembryo1'
            ),
            'add_counts_Avg_log10_Expr_X2Cembryo2' => array(
                'name' => 'Avg log10 Expr X2Cembryo2'
            ),
            'add_counts_Avg_log10_Expr_X2Cembryo3' => array(
                'name' => 'Avg log10 Expr X2Cembryo3'
            ),
            'add_counts_Avg_log10_Expr_X4Cembryo1' => array(
                'name' => 'Avg log10 Expr X4Cembryo1'
            ),
            'add_counts_Avg_log10_Expr_X4Cembryo2' => array(
                'name' => 'Avg log10 Expr X4Cembryo2'
            ),
            'add_counts_Avg_log10_Expr_X4Cembryo3' => array(
                'name' => 'Avg log10 Expr X4Cembryo3'
            ),
            'add_counts_Avg_log10_Expr_X8Cembryo1' => array(
                'name' => 'Avg log10 Expr X8Cembryo1'
            ),
            'add_counts_Avg_log10_Expr_X8Cembryo2' => array(
                'name' => 'Avg log10 Expr X8Cembryo2'
            ),
            'add_counts_Avg_log10_Expr_X8Cembryo3' => array(
                'name' => 'Avg log10 Expr X8Cembryo3'
            ),
            'add_counts_Avg_log10_Expr_Zyg' => array(
                'name' => 'Avg log10 Expr Zyg'
            ),
            'add_counts_PCA_Dim_1_Loadings' => array(
                'name' => 'PCA Dim 1 Loadings'
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
            'add_counts_PCA_Dim_20_Loadings' => array(
                'name' => 'PCA Dim 20 Loadings'
            ),
            'norm_counts_Avg_lg10_Expr_C_Ooc_Ooc' => array(
                'name' => 's Avg lg10 Expr C Ooc Ooc'
            ),
            'norm_counts_Avg_lg10_Expr_C_Zyg_Zyg' => array(
                'name' => 's Avg lg10 Expr C Zyg Zyg'
            ),
            'norm_counts_Avg_lg10_Expr_C_X2Cembryo1_X2Cembryo1' => array(
                'name' => 's Avg lg10 Expr C X2Cembryo1 X2Cembryo1'
            ),
            'norm_counts_Avg_lg10_Expr_C_X2Cembryo2_X2Cembryo2' => array(
                'name' => 's Avg lg10 Expr C X2Cembryo2 X2Cembryo2'
            ),
            'norm_counts_Avg_lg10_Expr_C_X2Cembryo3_X2Cembryo3' => array(
                'name' => 's Avg lg10 Expr C X2Cembryo3 X2Cembryo3'
            ),
            'norm_counts_Avg_lg10_Expr_C_X4Cembryo1_X4Cembryo1' => array(
                'name' => 's Avg lg10 Expr C X4Cembryo1 X4Cembryo1'
            ),
            'norm_counts_Avg_lg10_Expr_C_X4Cembryo2_X4Cembryo2' => array(
                'name' => 's Avg lg10 Expr C X4Cembryo2 X4Cembryo2'
            ),
            'norm_counts_Avg_lg10_Expr_C_X4Cembryo3_X4Cembryo3' => array(
                'name' => 's Avg lg10 Expr C X4Cembryo3 X4Cembryo3'
            ),
            'norm_counts_Avg_lg10_Expr_C_X8Cembryo1_X8Cembryo1' => array(
                'name' => 's Avg lg10 Expr C X8Cembryo1 X8Cembryo1'
            ),
            'norm_counts_Avg_lg10_Expr_C_X8Cembryo2_X8Cembryo2' => array(
                'name' => 's Avg lg10 Expr C X8Cembryo2 X8Cembryo2'
            ),
            'norm_counts_Avg_lg10_Expr_C_X8Cembryo3_X8Cembryo3' => array(
                'name' => 's Avg lg10 Expr C X8Cembryo3 X8Cembryo3'
            ),
            'norm_counts_Avg_lg10_Expr_C_Mor1_Mor1' => array(
                'name' => 's Avg lg10 Expr C Mor1 Mor1'
            ),
            'norm_counts_Avg_lg10_Expr_C_Mor2_Mor2' => array(
                'name' => 's Avg lg10 Expr C Mor2 Mor2'
            ),
            'norm_counts_Avg_lg10_Expr_C_LateB1_LateB1' => array(
                'name' => 's Avg lg10 Expr C LateB1 LateB1'
            ),
            'norm_counts_Avg_lg10_Expr_C_LateB2_LateB2' => array(
                'name' => 's Avg lg10 Expr C LateB2 LateB2'
            ),
            'norm_counts_Avg_lg10_Expr_C_LateB3_LateB3' => array(
                'name' => 's Avg lg10 Expr C LateB3 LateB3'
            ),
            'norm_counts_Avg_lg10_Expr_C_hEscP10_hEscP10' => array(
                'name' => 's Avg lg10 Expr C hEscP10 hEscP10'
            ),
            'norm_counts_Avg_lg10_Expr_C_hEscP0_hEscP0' => array(
                'name' => 's Avg lg10 Expr C hEscP0 hEscP0'
            ),
            'add_counts_PCA_Dim_1_Loadings' => array(
                'name' => 'PCA Dim 1 Loadings'
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
            'add_counts_PCA_Dim_20_Loadings' => array(
                'name' => 'PCA Dim 20 Loadings'
            )
        )
    )
//End scatterplot
);
