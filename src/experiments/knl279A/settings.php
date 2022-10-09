<?php

return array(
    'lab' => array(
        'name' => 'Example DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'knl_data',
    'data_db' => array(
            'cat_table_name' => 'knl279A_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'knl279A_rna_seq_table',
    'primary_gene_symbol' => 'hgnc_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_S_Ooc_1_TPM' => array(
            'color' => '#A58AFF',
            'name' => 'S Ooc 1 TPM'
        ),
        'norm_counts_S_Ooc_2_TPM' => array(
            'color' => '#A58AFF',
            'name' => 'S Ooc 2 TPM'
        ),
        'norm_counts_S_Ooc_3_TPM' => array(
            'color' => '#A58AFF',
            'name' => 'S Ooc 3 TPM'
        ),
        'norm_counts_S_Zyg_1_TPM' => array(
            'color' => '#FB61D7',
            'name' => 'S Zyg 1 TPM'
        ),
        'norm_counts_S_Zyg_2_TPM' => array(
            'color' => '#FB61D7',
            'name' => 'S Zyg 2 TPM'
        ),
        'norm_counts_S_Zyg_3_TPM' => array(
            'color' => '#FB61D7',
            'name' => 'S Zyg 3 TPM'
        ),
        'norm_counts_S_2Cembryo_11_TPM' => array(
            'color' => '#F8766D',
            'name' => 'S 2Cembryo 11 TPM'
        ),
        'norm_counts_S_2Cembryo_12_TPM' => array(
            'color' => '#F8766D',
            'name' => 'S 2Cembryo 12 TPM'
        ),
        'norm_counts_S_2Cembryo_21_TPM' => array(
            'color' => '#F8766D',
            'name' => 'S 2Cembryo 21 TPM'
        ),
        'norm_counts_S_2Cembryo_22_TPM' => array(
            'color' => '#F8766D',
            'name' => 'S 2Cembryo 22 TPM'
        ),
        'norm_counts_S_2Cembryo_31_TPM' => array(
            'color' => '#F8766D',
            'name' => 'S 2Cembryo 31 TPM'
        ),
        'norm_counts_S_2Cembryo_32_TPM' => array(
            'color' => '#F8766D',
            'name' => 'S 2Cembryo 32 TPM'
        ),
        'norm_counts_S_4Cembryo_11_TPM' => array(
            'color' => '#C49A00',
            'name' => 'S 4Cembryo 11 TPM'
        ),
        'norm_counts_S_4Cembryo_12_TPM' => array(
            'color' => '#C49A00',
            'name' => 'S 4Cembryo 12 TPM'
        ),
        'norm_counts_S_4Cembryo_13_TPM' => array(
            'color' => '#C49A00',
            'name' => 'S 4Cembryo 13 TPM'
        ),
        'norm_counts_S_4Cembryo_14_TPM' => array(
            'color' => '#C49A00',
            'name' => 'S 4Cembryo 14 TPM'
        ),
        'norm_counts_S_4Cembryo_21_TPM' => array(
            'color' => '#C49A00',
            'name' => 'S 4Cembryo 21 TPM'
        ),
        'norm_counts_S_4Cembryo_22_TPM' => array(
            'color' => '#C49A00',
            'name' => 'S 4Cembryo 22 TPM'
        ),
        'norm_counts_S_4Cembryo_23_TPM' => array(
            'color' => '#C49A00',
            'name' => 'S 4Cembryo 23 TPM'
        ),
        'norm_counts_S_4Cembryo_24_TPM' => array(
            'color' => '#C49A00',
            'name' => 'S 4Cembryo 24 TPM'
        ),
        'norm_counts_S_4Cembryo_31_TPM' => array(
            'color' => '#C49A00',
            'name' => 'S 4Cembryo 31 TPM'
        ),
        'norm_counts_S_4Cembryo_32_TPM' => array(
            'color' => '#C49A00',
            'name' => 'S 4Cembryo 32 TPM'
        ),
        'norm_counts_S_4Cembryo_33_TPM' => array(
            'color' => '#C49A00',
            'name' => 'S 4Cembryo 33 TPM'
        ),
        'norm_counts_S_4Cembryo_34_TPM' => array(
            'color' => '#C49A00',
            'name' => 'S 4Cembryo 34 TPM'
        ),
        'norm_counts_S_8Cembryo_11_TPM' => array(
            'color' => '#53B400',
            'name' => 'S 8Cembryo 11 TPM'
        ),
        'norm_counts_S_8Cembryo_12_TPM' => array(
            'color' => '#53B400',
            'name' => 'S 8Cembryo 12 TPM'
        ),
        'norm_counts_S_8Cembryo_13_TPM' => array(
            'color' => '#53B400',
            'name' => 'S 8Cembryo 13 TPM'
        ),
        'norm_counts_S_8Cembryo_14_TPM' => array(
            'color' => '#53B400',
            'name' => 'S 8Cembryo 14 TPM'
        ),
        'norm_counts_S_8Cembryo_21_TPM' => array(
            'color' => '#53B400',
            'name' => 'S 8Cembryo 21 TPM'
        ),
        'norm_counts_S_8Cembryo_22_TPM' => array(
            'color' => '#53B400',
            'name' => 'S 8Cembryo 22 TPM'
        ),
        'norm_counts_S_8Cembryo_23_TPM' => array(
            'color' => '#53B400',
            'name' => 'S 8Cembryo 23 TPM'
        ),
        'norm_counts_S_8Cembryo_24_TPM' => array(
            'color' => '#53B400',
            'name' => 'S 8Cembryo 24 TPM'
        ),
        'norm_counts_S_8Cembryo_25_TPM' => array(
            'color' => '#53B400',
            'name' => 'S 8Cembryo 25 TPM'
        ),
        'norm_counts_S_8Cembryo_26_TPM' => array(
            'color' => '#53B400',
            'name' => 'S 8Cembryo 26 TPM'
        ),
        'norm_counts_S_8Cembryo_27_TPM' => array(
            'color' => '#53B400',
            'name' => 'S 8Cembryo 27 TPM'
        ),
        'norm_counts_S_8Cembryo_28_TPM' => array(
            'color' => '#53B400',
            'name' => 'S 8Cembryo 28 TPM'
        ),
        'norm_counts_S_8Cembryo_31_TPM' => array(
            'color' => '#53B400',
            'name' => 'S 8Cembryo 31 TPM'
        ),
        'norm_counts_S_8Cembryo_32_TPM' => array(
            'color' => '#53B400',
            'name' => 'S 8Cembryo 32 TPM'
        ),
        'norm_counts_S_8Cembryo_33_TPM' => array(
            'color' => '#53B400',
            'name' => 'S 8Cembryo 33 TPM'
        ),
        'norm_counts_S_8Cembryo_34_TPM' => array(
            'color' => '#53B400',
            'name' => 'S 8Cembryo 34 TPM'
        ),
        'norm_counts_S_8Cembryo_35_TPM' => array(
            'color' => '#53B400',
            'name' => 'S 8Cembryo 35 TPM'
        ),
        'norm_counts_S_8Cembryo_36_TPM' => array(
            'color' => '#53B400',
            'name' => 'S 8Cembryo 36 TPM'
        ),
        'norm_counts_S_8Cembryo_37_TPM' => array(
            'color' => '#53B400',
            'name' => 'S 8Cembryo 37 TPM'
        ),
        'norm_counts_S_8Cembryo_38_TPM' => array(
            'color' => '#53B400',
            'name' => 'S 8Cembryo 38 TPM'
        ),
        'norm_counts_S_Mor_11_TPM' => array(
            'color' => '#00B6EB',
            'name' => 'S Mor 11 TPM'
        ),
        'norm_counts_S_Mor_12_TPM' => array(
            'color' => '#00B6EB',
            'name' => 'S Mor 12 TPM'
        ),
        'norm_counts_S_Mor_13_TPM' => array(
            'color' => '#00B6EB',
            'name' => 'S Mor 13 TPM'
        ),
        'norm_counts_S_Mor_14_TPM' => array(
            'color' => '#00B6EB',
            'name' => 'S Mor 14 TPM'
        ),
        'norm_counts_S_Mor_15_TPM' => array(
            'color' => '#00B6EB',
            'name' => 'S Mor 15 TPM'
        ),
        'norm_counts_S_Mor_16_TPM' => array(
            'color' => '#00B6EB',
            'name' => 'S Mor 16 TPM'
        ),
        'norm_counts_S_Mor_17_TPM' => array(
            'color' => '#00B6EB',
            'name' => 'S Mor 17 TPM'
        ),
        'norm_counts_S_Mor_18_TPM' => array(
            'color' => '#00B6EB',
            'name' => 'S Mor 18 TPM'
        ),
        'norm_counts_S_Mor_21_TPM' => array(
            'color' => '#00B6EB',
            'name' => 'S Mor 21 TPM'
        ),
        'norm_counts_S_Mor_22_TPM' => array(
            'color' => '#00B6EB',
            'name' => 'S Mor 22 TPM'
        ),
        'norm_counts_S_Mor_23_TPM' => array(
            'color' => '#00B6EB',
            'name' => 'S Mor 23 TPM'
        ),
        'norm_counts_S_Mor_24_TPM' => array(
            'color' => '#00B6EB',
            'name' => 'S Mor 24 TPM'
        ),
        'norm_counts_S_Mor_25_TPM' => array(
            'color' => '#00B6EB',
            'name' => 'S Mor 25 TPM'
        ),
        'norm_counts_S_Mor_26_TPM' => array(
            'color' => '#00B6EB',
            'name' => 'S Mor 26 TPM'
        ),
        'norm_counts_S_Mor_27_TPM' => array(
            'color' => '#00B6EB',
            'name' => 'S Mor 27 TPM'
        ),
        'norm_counts_S_Mor_28_TPM' => array(
            'color' => '#00B6EB',
            'name' => 'S Mor 28 TPM'
        ),
        'norm_counts_S_LateB_22_TPM' => array(
            'color' => '#00C094',
            'name' => 'S LateB 22 TPM'
        ),
        'norm_counts_S_LateB_23_TPM' => array(
            'color' => '#00C094',
            'name' => 'S LateB 23 TPM'
        ),
        'norm_counts_S_LateB_31_TPM' => array(
            'color' => '#00C094',
            'name' => 'S LateB 31 TPM'
        ),
        'norm_counts_S_LateB_34_TPM' => array(
            'color' => '#00C094',
            'name' => 'S LateB 34 TPM'
        ),
        'norm_counts_S_LateB_35_TPM' => array(
            'color' => '#00C094',
            'name' => 'S LateB 35 TPM'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
// New Begin: Timecourse
'timecourse_chart' => array(
    'timepoint_name' => 'Day',
    'display_median' => 'calculate_median',
    'timepoint_array' => array(0,1,1.5,2,4,4.5,6),
    'datasets' => array(
'S' => array(
    'color' => '#FF0000FF',
    'sample_group' => array(
'S_Ooc' => array(
    'timepoint' =>  0,
    'sampleDbCols' =>  array(
'norm_counts_S_Ooc_1_TPM','norm_counts_S_Ooc_2_TPM','norm_counts_S_Ooc_3_TPM'
)),
'S_Zyg' => array(
    'timepoint' =>  1,
    'sampleDbCols' =>  array(
'norm_counts_S_Zyg_1_TPM','norm_counts_S_Zyg_2_TPM','norm_counts_S_Zyg_3_TPM'
)),
'S_2Cembryo' => array(
    'timepoint' =>  1.5,
    'sampleDbCols' =>  array(
'norm_counts_S_2Cembryo_11_TPM','norm_counts_S_2Cembryo_12_TPM','norm_counts_S_2Cembryo_21_TPM','norm_counts_S_2Cembryo_22_TPM','norm_counts_S_2Cembryo_31_TPM','norm_counts_S_2Cembryo_32_TPM'
)),
'S_4Cembryo' => array(
    'timepoint' =>  2,
    'sampleDbCols' =>  array(
'norm_counts_S_4Cembryo_11_TPM','norm_counts_S_4Cembryo_12_TPM','norm_counts_S_4Cembryo_13_TPM','norm_counts_S_4Cembryo_14_TPM','norm_counts_S_4Cembryo_21_TPM','norm_counts_S_4Cembryo_22_TPM','norm_counts_S_4Cembryo_23_TPM','norm_counts_S_4Cembryo_24_TPM','norm_counts_S_4Cembryo_31_TPM','norm_counts_S_4Cembryo_32_TPM','norm_counts_S_4Cembryo_33_TPM','norm_counts_S_4Cembryo_34_TPM'
)),
'S_8Cembryo' => array(
    'timepoint' =>  4,
    'sampleDbCols' =>  array(
'norm_counts_S_8Cembryo_11_TPM','norm_counts_S_8Cembryo_12_TPM','norm_counts_S_8Cembryo_13_TPM','norm_counts_S_8Cembryo_14_TPM','norm_counts_S_8Cembryo_21_TPM','norm_counts_S_8Cembryo_22_TPM','norm_counts_S_8Cembryo_23_TPM','norm_counts_S_8Cembryo_24_TPM','norm_counts_S_8Cembryo_25_TPM','norm_counts_S_8Cembryo_26_TPM','norm_counts_S_8Cembryo_27_TPM','norm_counts_S_8Cembryo_28_TPM','norm_counts_S_8Cembryo_31_TPM','norm_counts_S_8Cembryo_32_TPM','norm_counts_S_8Cembryo_33_TPM','norm_counts_S_8Cembryo_34_TPM','norm_counts_S_8Cembryo_35_TPM','norm_counts_S_8Cembryo_36_TPM','norm_counts_S_8Cembryo_37_TPM','norm_counts_S_8Cembryo_38_TPM'
)),
'S_Mor' => array(
    'timepoint' =>  4.5,
    'sampleDbCols' =>  array(
'norm_counts_S_Mor_11_TPM','norm_counts_S_Mor_12_TPM','norm_counts_S_Mor_13_TPM','norm_counts_S_Mor_14_TPM','norm_counts_S_Mor_15_TPM','norm_counts_S_Mor_16_TPM','norm_counts_S_Mor_17_TPM','norm_counts_S_Mor_18_TPM','norm_counts_S_Mor_21_TPM','norm_counts_S_Mor_22_TPM','norm_counts_S_Mor_23_TPM','norm_counts_S_Mor_24_TPM','norm_counts_S_Mor_25_TPM','norm_counts_S_Mor_26_TPM','norm_counts_S_Mor_27_TPM','norm_counts_S_Mor_28_TPM'
)),
'S_LateB' => array(
    'timepoint' =>  6,
    'sampleDbCols' =>  array(
'norm_counts_S_LateB_22_TPM','norm_counts_S_LateB_23_TPM','norm_counts_S_LateB_31_TPM','norm_counts_S_LateB_34_TPM','norm_counts_S_LateB_35_TPM'
)))))),
// New End: Timecourse
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_S_Ooc_1_TPM','lg2_avg_S_Ooc_2_TPM','lg2_avg_S_Ooc_3_TPM','lg2_avg_S_Zyg_1_TPM','lg2_avg_S_Zyg_2_TPM','lg2_avg_S_Zyg_3_TPM','lg2_avg_S_2Cembryo_11_TPM','lg2_avg_S_2Cembryo_12_TPM','lg2_avg_S_2Cembryo_21_TPM','lg2_avg_S_2Cembryo_22_TPM','lg2_avg_S_2Cembryo_31_TPM','lg2_avg_S_2Cembryo_32_TPM','lg2_avg_S_4Cembryo_11_TPM','lg2_avg_S_4Cembryo_12_TPM','lg2_avg_S_4Cembryo_13_TPM','lg2_avg_S_4Cembryo_14_TPM','lg2_avg_S_4Cembryo_21_TPM','lg2_avg_S_4Cembryo_22_TPM','lg2_avg_S_4Cembryo_23_TPM','lg2_avg_S_4Cembryo_24_TPM','lg2_avg_S_4Cembryo_31_TPM','lg2_avg_S_4Cembryo_32_TPM','lg2_avg_S_4Cembryo_33_TPM','lg2_avg_S_4Cembryo_34_TPM','lg2_avg_S_8Cembryo_11_TPM','lg2_avg_S_8Cembryo_12_TPM','lg2_avg_S_8Cembryo_13_TPM','lg2_avg_S_8Cembryo_14_TPM','lg2_avg_S_8Cembryo_21_TPM','lg2_avg_S_8Cembryo_22_TPM','lg2_avg_S_8Cembryo_23_TPM','lg2_avg_S_8Cembryo_24_TPM','lg2_avg_S_8Cembryo_25_TPM','lg2_avg_S_8Cembryo_26_TPM','lg2_avg_S_8Cembryo_27_TPM','lg2_avg_S_8Cembryo_28_TPM','lg2_avg_S_8Cembryo_31_TPM','lg2_avg_S_8Cembryo_32_TPM','lg2_avg_S_8Cembryo_33_TPM','lg2_avg_S_8Cembryo_34_TPM','lg2_avg_S_8Cembryo_35_TPM','lg2_avg_S_8Cembryo_36_TPM','lg2_avg_S_8Cembryo_37_TPM','lg2_avg_S_8Cembryo_38_TPM','lg2_avg_S_Mor_11_TPM','lg2_avg_S_Mor_12_TPM','lg2_avg_S_Mor_13_TPM','lg2_avg_S_Mor_14_TPM','lg2_avg_S_Mor_15_TPM','lg2_avg_S_Mor_16_TPM','lg2_avg_S_Mor_17_TPM','lg2_avg_S_Mor_18_TPM','lg2_avg_S_Mor_21_TPM','lg2_avg_S_Mor_22_TPM','lg2_avg_S_Mor_23_TPM','lg2_avg_S_Mor_24_TPM','lg2_avg_S_Mor_25_TPM','lg2_avg_S_Mor_26_TPM','lg2_avg_S_Mor_27_TPM','lg2_avg_S_Mor_28_TPM','lg2_avg_S_LateB_22_TPM','lg2_avg_S_LateB_23_TPM','lg2_avg_S_LateB_31_TPM','lg2_avg_S_LateB_34_TPM','lg2_avg_S_LateB_35_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_S_Ooc_vs_S_Zyg' => array(
            'name' => 'logFC S Ooc vs S Zyg',
            'slider_min' => -7,
            'slider_max' => 7,
            'default_low' => -7,
            'default_high' => 7
        ),
        'contrast_1_padj_S_Ooc_vs_S_Zyg' => array(
            'name' => 'padj S Ooc vs S Zyg',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_S_2Cembryo_vs_S_Zyg' => array(
            'name' => 'logFC S 2Cembryo vs S Zyg',
            'slider_min' => -6,
            'slider_max' => 7,
            'default_low' => -6,
            'default_high' => 7
        ),
        'contrast_2_padj_S_2Cembryo_vs_S_Zyg' => array(
            'name' => 'padj S 2Cembryo vs S Zyg',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_S_2Cembryo_vs_S_4Cembryo' => array(
            'name' => 'logFC S 2Cembryo vs S 4Cembryo',
            'slider_min' => -9,
            'slider_max' => 7,
            'default_low' => -9,
            'default_high' => 7
        ),
        'contrast_3_padj_S_2Cembryo_vs_S_4Cembryo' => array(
            'name' => 'padj S 2Cembryo vs S 4Cembryo',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_logFC_S_4Cembryo_vs_S_8Cembryo' => array(
            'name' => 'logFC S 4Cembryo vs S 8Cembryo',
            'slider_min' => -12,
            'slider_max' => 9,
            'default_low' => -12,
            'default_high' => 9
        ),
        'contrast_4_padj_S_4Cembryo_vs_S_8Cembryo' => array(
            'name' => 'padj S 4Cembryo vs S 8Cembryo',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_5_logFC_S_8Cembryo_vs_S_Mor' => array(
            'name' => 'logFC S 8Cembryo vs S Mor',
            'slider_min' => -9,
            'slider_max' => 9,
            'default_low' => -9,
            'default_high' => 9
        ),
        'contrast_5_padj_S_8Cembryo_vs_S_Mor' => array(
            'name' => 'padj S 8Cembryo vs S Mor',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_6_logFC_S_LateB_vs_S_Mor' => array(
            'name' => 'logFC S LateB vs S Mor',
            'slider_min' => -14,
            'slider_max' => 16,
            'default_low' => -14,
            'default_high' => 16
        ),
        'contrast_6_padj_S_LateB_vs_S_Mor' => array(
            'name' => 'padj S LateB vs S Mor',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_A_logFC_knl366_KLF17_D5_vs_CTRL_D5' => array(
            'name' => 'logFC knl366 KLF17 D5 vs CTRL D5',
            'slider_min' => -3,
            'slider_max' => 8,
            'default_low' => -3,
            'default_high' => 8
        ),
        'contrast_A_padj_knl366_KLF17_D5_vs_CTRL_D5' => array(
            'name' => 'padj knl366 KLF17 D5 vs CTRL D5',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_A_logFC_knl368A_KO_p5_vs_WT_p5' => array(
            'name' => 'logFC knl368A KO p5 vs WT p5',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_A_padj_knl368A_KO_p5_vs_WT_p5' => array(
            'name' => 'padj knl368A KO p5 vs WT p5',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_GATA3' => array(
            'name' => 'corCoef GATA3',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_KLF17' => array(
            'name' => 'corCoef KLF17',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_POU5F1' => array(
            'name' => 'corCoef POU5F1',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_L_lg10p_LRT_timepoint' => array(
            'name' => 'lg10p LRT timepoint',
            'slider_min' => 0,
            'slider_max' => 157,
            'default_low' => 0,
            'default_high' => 157
        ),
        'contrast_L_lg10p_LRT_Stage' => array(
            'name' => 'lg10p LRT Stage',
            'slider_min' => 0,
            'slider_max' => 157,
            'default_low' => 0,
            'default_high' => 157
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'knl279A_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_S_Ooc_vs_S_Zyg',
        'default-y' => 'contrast_1_lg10p_S_Ooc_vs_S_Zyg',
        'selection' => array(
            'contrast_1_logFC_S_Ooc_vs_S_Zyg' => array(
                'name' => 'logFC S Ooc vs S Zyg'
            ),
            'contrast_2_logFC_S_2Cembryo_vs_S_Zyg' => array(
                'name' => 'logFC S 2Cembryo vs S Zyg'
            ),
            'contrast_3_logFC_S_2Cembryo_vs_S_4Cembryo' => array(
                'name' => 'logFC S 2Cembryo vs S 4Cembryo'
            ),
            'contrast_4_logFC_S_4Cembryo_vs_S_8Cembryo' => array(
                'name' => 'logFC S 4Cembryo vs S 8Cembryo'
            ),
            'contrast_5_logFC_S_8Cembryo_vs_S_Mor' => array(
                'name' => 'logFC S 8Cembryo vs S Mor'
            ),
            'contrast_6_logFC_S_LateB_vs_S_Mor' => array(
                'name' => 'logFC S LateB vs S Mor'
            ),
            'contrast_A_logFC_knl366_KLF17_D5_vs_CTRL_D5' => array(
                'name' => 'logFC knl366 KLF17 D5 vs CTRL D5'
            ),
            'contrast_A_logFC_knl368A_KO_p5_vs_WT_p5' => array(
                'name' => 'logFC knl368A KO p5 vs WT p5'
            ),
            'contrast_1_lg10p_S_Ooc_vs_S_Zyg' => array(
                'name' => 'lg10p S Ooc vs S Zyg'
            ),
            'contrast_2_lg10p_S_2Cembryo_vs_S_Zyg' => array(
                'name' => 'lg10p S 2Cembryo vs S Zyg'
            ),
            'contrast_3_lg10p_S_2Cembryo_vs_S_4Cembryo' => array(
                'name' => 'lg10p S 2Cembryo vs S 4Cembryo'
            ),
            'contrast_4_lg10p_S_4Cembryo_vs_S_8Cembryo' => array(
                'name' => 'lg10p S 4Cembryo vs S 8Cembryo'
            ),
            'contrast_5_lg10p_S_8Cembryo_vs_S_Mor' => array(
                'name' => 'lg10p S 8Cembryo vs S Mor'
            ),
            'contrast_6_lg10p_S_LateB_vs_S_Mor' => array(
                'name' => 'lg10p S LateB vs S Mor'
            ),
            'contrast_L_lg10p_LRT_timepoint' => array(
                'name' => 'lg10p LRT timepoint'
            ),
            'contrast_L_lg10p_LRT_Stage' => array(
                'name' => 'lg10p LRT Stage'
            ),
            'contrast_A_lg10p_knl366_KLF17_D5_vs_CTRL_D5' => array(
                'name' => 'lg10p knl366 KLF17 D5 vs CTRL D5'
            ),
            'contrast_A_lg10p_knl368A_KO_p5_vs_WT_p5' => array(
                'name' => 'lg10p knl368A KO p5 vs WT p5'
            ),
            'add_venn_X_corCoef_GATA3' => array(
                'name' => 'corCoef GATA3'
            ),
            'add_venn_X_corCoef_KLF17' => array(
                'name' => 'corCoef KLF17'
            ),
            'add_venn_X_corCoef_POU5F1' => array(
                'name' => 'corCoef POU5F1'
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
            'contrast_1_lg2BaseMean_S_Ooc_vs_S_Zyg' => array(
                'name' => 'lg2BaseMean S Ooc vs S Zyg'
            ),
            'contrast_2_lg2BaseMean_S_2Cembryo_vs_S_Zyg' => array(
                'name' => 'lg2BaseMean S 2Cembryo vs S Zyg'
            ),
            'contrast_3_lg2BaseMean_S_2Cembryo_vs_S_4Cembryo' => array(
                'name' => 'lg2BaseMean S 2Cembryo vs S 4Cembryo'
            ),
            'contrast_4_lg2BaseMean_S_4Cembryo_vs_S_8Cembryo' => array(
                'name' => 'lg2BaseMean S 4Cembryo vs S 8Cembryo'
            ),
            'contrast_5_lg2BaseMean_S_8Cembryo_vs_S_Mor' => array(
                'name' => 'lg2BaseMean S 8Cembryo vs S Mor'
            ),
            'contrast_6_lg2BaseMean_S_LateB_vs_S_Mor' => array(
                'name' => 'lg2BaseMean S LateB vs S Mor'
            ),
            'contrast_L_lg2BaseMean_LRT_timepoint' => array(
                'name' => 'lg2BaseMean LRT timepoint'
            ),
            'contrast_L_lg2BaseMean_LRT_Stage' => array(
                'name' => 'lg2BaseMean LRT Stage'
            ),
            'contrast_5_lg2BaseMean_KLF17_D5_vs_CTRL_D5' => array(
                'name' => 'lg2BaseMean KLF17 D5 vs CTRL D5'
            ),
            'contrast_4_lg2BaseMean_KO_p5_vs_WT_p5' => array(
                'name' => 'lg2BaseMean KO p5 vs WT p5'
            )
        )
    )
//End scatterplot
);
