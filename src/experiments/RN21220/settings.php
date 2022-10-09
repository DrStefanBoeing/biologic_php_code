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
            'cat_table_name' => 'RN21220_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'RN21220_bulk_rna_seq_table',
    'primary_gene_symbol' => 'Dmel_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'TPM Values for all Samples',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Ctrl_0h_1_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Ctrl 0h 1 TPM'
        ),
        'norm_counts_Ctrl_0h_2_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Ctrl 0h 2 TPM'
        ),
        'norm_counts_Ctrl_0h_3_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Ctrl 0h 3 TPM'
        ),
        'norm_counts_Ctrl_2h_1_TPM' => array(
            'color' => '#EA8331',
            'name' => 'Ctrl 2h 1 TPM'
        ),
        'norm_counts_Ctrl_2h_2_TPM' => array(
            'color' => '#EA8331',
            'name' => 'Ctrl 2h 2 TPM'
        ),
        'norm_counts_Ctrl_2h_3_TPM' => array(
            'color' => '#EA8331',
            'name' => 'Ctrl 2h 3 TPM'
        ),
        'norm_counts_Ctrl_6h_1_TPM' => array(
            'color' => '#C09B00',
            'name' => 'Ctrl 6h 1 TPM'
        ),
        'norm_counts_Ctrl_6h_2_TPM' => array(
            'color' => '#C09B00',
            'name' => 'Ctrl 6h 2 TPM'
        ),
        'norm_counts_Ctrl_6h_3_TPM' => array(
            'color' => '#C09B00',
            'name' => 'Ctrl 6h 3 TPM'
        ),
        'norm_counts_Ctrl_24h_1_TPM' => array(
            'color' => '#D89000',
            'name' => 'Ctrl 24h 1 TPM'
        ),
        'norm_counts_Ctrl_24h_2_TPM' => array(
            'color' => '#D89000',
            'name' => 'Ctrl 24h 2 TPM'
        ),
        'norm_counts_Ctrl_24h_3_TPM' => array(
            'color' => '#D89000',
            'name' => 'Ctrl 24h 3 TPM'
        ),
        'norm_counts_HighFatDiet_0h_1_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'HighFatDiet 0h 1 TPM'
        ),
        'norm_counts_HighFatDiet_0h_2_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'HighFatDiet 0h 2 TPM'
        ),
        'norm_counts_HighFatDiet_0h_3_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'HighFatDiet 0h 3 TPM'
        ),
        'norm_counts_HighFatDiet_2h_1_TPM' => array(
            'color' => '#39B600',
            'name' => 'HighFatDiet 2h 1 TPM'
        ),
        'norm_counts_HighFatDiet_2h_2_TPM' => array(
            'color' => '#39B600',
            'name' => 'HighFatDiet 2h 2 TPM'
        ),
        'norm_counts_HighFatDiet_2h_3_TPM' => array(
            'color' => '#39B600',
            'name' => 'HighFatDiet 2h 3 TPM'
        ),
        'norm_counts_HighFatDiet_6h_1_TPM' => array(
            'color' => '#00BB4E',
            'name' => 'HighFatDiet 6h 1 TPM'
        ),
        'norm_counts_HighFatDiet_6h_2_TPM' => array(
            'color' => '#00BB4E',
            'name' => 'HighFatDiet 6h 2 TPM'
        ),
        'norm_counts_HighFatDiet_6h_3_TPM' => array(
            'color' => '#00BB4E',
            'name' => 'HighFatDiet 6h 3 TPM'
        ),
        'norm_counts_HighFatDiet_24h_1_TPM' => array(
            'color' => '#A3A500',
            'name' => 'HighFatDiet 24h 1 TPM'
        ),
        'norm_counts_HighFatDiet_24h_2_TPM' => array(
            'color' => '#A3A500',
            'name' => 'HighFatDiet 24h 2 TPM'
        ),
        'norm_counts_HighFatDiet_24h_3_TPM' => array(
            'color' => '#A3A500',
            'name' => 'HighFatDiet 24h 3 TPM'
        ),
        'norm_counts_Hypoxia_0h_1_TPM' => array(
            'color' => '#00C1A3',
            'name' => 'Hypoxia 0h 1 TPM'
        ),
        'norm_counts_Hypoxia_0h_2_TPM' => array(
            'color' => '#00C1A3',
            'name' => 'Hypoxia 0h 2 TPM'
        ),
        'norm_counts_Hypoxia_0h_3_TPM' => array(
            'color' => '#00C1A3',
            'name' => 'Hypoxia 0h 3 TPM'
        ),
        'norm_counts_Hypoxia_2h_1_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'Hypoxia 2h 1 TPM'
        ),
        'norm_counts_Hypoxia_2h_2_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'Hypoxia 2h 2 TPM'
        ),
        'norm_counts_Hypoxia_2h_3_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'Hypoxia 2h 3 TPM'
        ),
        'norm_counts_Hypoxia_6h_1_TPM' => array(
            'color' => '#00BF7D',
            'name' => 'Hypoxia 6h 1 TPM'
        ),
        'norm_counts_Hypoxia_6h_2_TPM' => array(
            'color' => '#00BF7D',
            'name' => 'Hypoxia 6h 2 TPM'
        ),
        'norm_counts_Hypoxia_6h_3_TPM' => array(
            'color' => '#00BF7D',
            'name' => 'Hypoxia 6h 3 TPM'
        ),
        'norm_counts_Hypoxia_24h_1_TPM' => array(
            'color' => '#00BAE0',
            'name' => 'Hypoxia 24h 1 TPM'
        ),
        'norm_counts_Hypoxia_24h_2_TPM' => array(
            'color' => '#00BAE0',
            'name' => 'Hypoxia 24h 2 TPM'
        ),
        'norm_counts_Hypoxia_24h_3_TPM' => array(
            'color' => '#00BAE0',
            'name' => 'Hypoxia 24h 3 TPM'
        ),
        'norm_counts_Irradiation_0h_1_TPM' => array(
            'color' => '#00B0F6',
            'name' => 'Irradiation 0h 1 TPM'
        ),
        'norm_counts_Irradiation_0h_2_TPM' => array(
            'color' => '#00B0F6',
            'name' => 'Irradiation 0h 2 TPM'
        ),
        'norm_counts_Irradiation_0h_3_TPM' => array(
            'color' => '#00B0F6',
            'name' => 'Irradiation 0h 3 TPM'
        ),
        'norm_counts_Irradiation_2h_1_TPM' => array(
            'color' => '#9590FF',
            'name' => 'Irradiation 2h 1 TPM'
        ),
        'norm_counts_Irradiation_2h_2_TPM' => array(
            'color' => '#9590FF',
            'name' => 'Irradiation 2h 2 TPM'
        ),
        'norm_counts_Irradiation_2h_3_TPM' => array(
            'color' => '#9590FF',
            'name' => 'Irradiation 2h 3 TPM'
        ),
        'norm_counts_Irradiation_6h_1_TPM' => array(
            'color' => '#35A2FF',
            'name' => 'Irradiation 6h 1 TPM'
        ),
        'norm_counts_Irradiation_6h_2_TPM' => array(
            'color' => '#35A2FF',
            'name' => 'Irradiation 6h 2 TPM'
        ),
        'norm_counts_Irradiation_6h_3_TPM' => array(
            'color' => '#35A2FF',
            'name' => 'Irradiation 6h 3 TPM'
        ),
        'norm_counts_Irradiation_24h_1_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'Irradiation 24h 1 TPM'
        ),
        'norm_counts_Irradiation_24h_2_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'Irradiation 24h 2 TPM'
        ),
        'norm_counts_Irradiation_24h_3_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'Irradiation 24h 3 TPM'
        ),
        'norm_counts_NR_0h_1_TPM' => array(
            'color' => '#E76BF3',
            'name' => 'NR 0h 1 TPM'
        ),
        'norm_counts_NR_0h_2_TPM' => array(
            'color' => '#E76BF3',
            'name' => 'NR 0h 2 TPM'
        ),
        'norm_counts_NR_0h_3_TPM' => array(
            'color' => '#E76BF3',
            'name' => 'NR 0h 3 TPM'
        ),
        'norm_counts_NR_2h_1_TPM' => array(
            'color' => '#FF6A98',
            'name' => 'NR 2h 1 TPM'
        ),
        'norm_counts_NR_2h_2_TPM' => array(
            'color' => '#FF6A98',
            'name' => 'NR 2h 2 TPM'
        ),
        'norm_counts_NR_2h_3_TPM' => array(
            'color' => '#FF6A98',
            'name' => 'NR 2h 3 TPM'
        ),
        'norm_counts_NR_6h_1_TPM' => array(
            'color' => '#FA62DB',
            'name' => 'NR 6h 1 TPM'
        ),
        'norm_counts_NR_6h_2_TPM' => array(
            'color' => '#FA62DB',
            'name' => 'NR 6h 2 TPM'
        ),
        'norm_counts_NR_6h_3_TPM' => array(
            'color' => '#FA62DB',
            'name' => 'NR 6h 3 TPM'
        ),
        'norm_counts_NR_24h_1_TPM' => array(
            'color' => '#FF62BC',
            'name' => 'NR 24h 1 TPM'
        ),
        'norm_counts_NR_24h_2_TPM' => array(
            'color' => '#FF62BC',
            'name' => 'NR 24h 2 TPM'
        ),
        'norm_counts_NR_24h_3_TPM' => array(
            'color' => '#FF62BC',
            'name' => 'NR 24h 3 TPM'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM Values for all Samples'
    ),
// New Begin: Timecourse
'timecourse_chart' => array(
    'timepoint_name' => 'Day',
    'display_median' => 'calculate_median',
    'timepoint_array' => array(0,2,6,24),
    'datasets' => array(
'Ctrl' => array(
    'color' => '#FF0000',
    'sample_group' => array(
'Ctrl_0h' => array(
    'timepoint' =>  0,
    'sampleDbCols' =>  array(
'norm_counts_Ctrl_0h_1_TPM','norm_counts_Ctrl_0h_2_TPM','norm_counts_Ctrl_0h_3_TPM'
)),
'Ctrl_2h' => array(
    'timepoint' =>  2,
    'sampleDbCols' =>  array(
'norm_counts_Ctrl_2h_1_TPM','norm_counts_Ctrl_2h_2_TPM','norm_counts_Ctrl_2h_3_TPM'
)),
'Ctrl_6h' => array(
    'timepoint' =>  6,
    'sampleDbCols' =>  array(
'norm_counts_Ctrl_6h_1_TPM','norm_counts_Ctrl_6h_2_TPM','norm_counts_Ctrl_6h_3_TPM'
)),
'Ctrl_24h' => array(
    'timepoint' =>  24,
    'sampleDbCols' =>  array(
'norm_counts_Ctrl_24h_1_TPM','norm_counts_Ctrl_24h_2_TPM','norm_counts_Ctrl_24h_3_TPM'
)))),
'HighFatDiet' => array(
    'color' => '#CCFF00',
    'sample_group' => array(
'HighFatDiet_0h' => array(
    'timepoint' =>  0,
    'sampleDbCols' =>  array(
'norm_counts_HighFatDiet_0h_1_TPM','norm_counts_HighFatDiet_0h_2_TPM','norm_counts_HighFatDiet_0h_3_TPM'
)),
'HighFatDiet_2h' => array(
    'timepoint' =>  2,
    'sampleDbCols' =>  array(
'norm_counts_HighFatDiet_2h_1_TPM','norm_counts_HighFatDiet_2h_2_TPM','norm_counts_HighFatDiet_2h_3_TPM'
)),
'HighFatDiet_6h' => array(
    'timepoint' =>  6,
    'sampleDbCols' =>  array(
'norm_counts_HighFatDiet_6h_1_TPM','norm_counts_HighFatDiet_6h_2_TPM','norm_counts_HighFatDiet_6h_3_TPM'
)),
'HighFatDiet_24h' => array(
    'timepoint' =>  24,
    'sampleDbCols' =>  array(
'norm_counts_HighFatDiet_24h_1_TPM','norm_counts_HighFatDiet_24h_2_TPM','norm_counts_HighFatDiet_24h_3_TPM'
)))),
'Hypoxia' => array(
    'color' => '#00FF66',
    'sample_group' => array(
'Hypoxia_0h' => array(
    'timepoint' =>  0,
    'sampleDbCols' =>  array(
'norm_counts_Hypoxia_0h_1_TPM','norm_counts_Hypoxia_0h_2_TPM','norm_counts_Hypoxia_0h_3_TPM'
)),
'Hypoxia_2h' => array(
    'timepoint' =>  2,
    'sampleDbCols' =>  array(
'norm_counts_Hypoxia_2h_1_TPM','norm_counts_Hypoxia_2h_2_TPM','norm_counts_Hypoxia_2h_3_TPM'
)),
'Hypoxia_6h' => array(
    'timepoint' =>  6,
    'sampleDbCols' =>  array(
'norm_counts_Hypoxia_6h_1_TPM','norm_counts_Hypoxia_6h_2_TPM','norm_counts_Hypoxia_6h_3_TPM'
)),
'Hypoxia_24h' => array(
    'timepoint' =>  24,
    'sampleDbCols' =>  array(
'norm_counts_Hypoxia_24h_1_TPM','norm_counts_Hypoxia_24h_2_TPM','norm_counts_Hypoxia_24h_3_TPM'
)))),
'Irradiation' => array(
    'color' => '#0066FF',
    'sample_group' => array(
'Irradiation_0h' => array(
    'timepoint' =>  0,
    'sampleDbCols' =>  array(
'norm_counts_Irradiation_0h_1_TPM','norm_counts_Irradiation_0h_2_TPM','norm_counts_Irradiation_0h_3_TPM'
)),
'Irradiation_2h' => array(
    'timepoint' =>  2,
    'sampleDbCols' =>  array(
'norm_counts_Irradiation_2h_1_TPM','norm_counts_Irradiation_2h_2_TPM','norm_counts_Irradiation_2h_3_TPM'
)),
'Irradiation_6h' => array(
    'timepoint' =>  6,
    'sampleDbCols' =>  array(
'norm_counts_Irradiation_6h_1_TPM','norm_counts_Irradiation_6h_2_TPM','norm_counts_Irradiation_6h_3_TPM'
)),
'Irradiation_24h' => array(
    'timepoint' =>  24,
    'sampleDbCols' =>  array(
'norm_counts_Irradiation_24h_1_TPM','norm_counts_Irradiation_24h_2_TPM','norm_counts_Irradiation_24h_3_TPM'
)))),
'NR' => array(
    'color' => '#CC00FF',
    'sample_group' => array(
'NR_0h' => array(
    'timepoint' =>  0,
    'sampleDbCols' =>  array(
'norm_counts_NR_0h_1_TPM','norm_counts_NR_0h_2_TPM','norm_counts_NR_0h_3_TPM'
)),
'NR_2h' => array(
    'timepoint' =>  2,
    'sampleDbCols' =>  array(
'norm_counts_NR_2h_1_TPM','norm_counts_NR_2h_2_TPM','norm_counts_NR_2h_3_TPM'
)),
'NR_6h' => array(
    'timepoint' =>  6,
    'sampleDbCols' =>  array(
'norm_counts_NR_6h_1_TPM','norm_counts_NR_6h_2_TPM','norm_counts_NR_6h_3_TPM'
)),
'NR_24h' => array(
    'timepoint' =>  24,
    'sampleDbCols' =>  array(
'norm_counts_NR_24h_1_TPM','norm_counts_NR_24h_2_TPM','norm_counts_NR_24h_3_TPM'
)))))),
// New End: Timecourse
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Ctrl_0h_1_TPM','lg2_avg_Ctrl_0h_2_TPM','lg2_avg_Ctrl_0h_3_TPM','lg2_avg_Ctrl_2h_1_TPM','lg2_avg_Ctrl_2h_2_TPM','lg2_avg_Ctrl_2h_3_TPM','lg2_avg_Ctrl_6h_1_TPM','lg2_avg_Ctrl_6h_2_TPM','lg2_avg_Ctrl_6h_3_TPM','lg2_avg_Ctrl_24h_1_TPM','lg2_avg_Ctrl_24h_2_TPM','lg2_avg_Ctrl_24h_3_TPM','lg2_avg_HighFatDiet_0h_1_TPM','lg2_avg_HighFatDiet_0h_2_TPM','lg2_avg_HighFatDiet_0h_3_TPM','lg2_avg_HighFatDiet_2h_1_TPM','lg2_avg_HighFatDiet_2h_2_TPM','lg2_avg_HighFatDiet_2h_3_TPM','lg2_avg_HighFatDiet_6h_1_TPM','lg2_avg_HighFatDiet_6h_2_TPM','lg2_avg_HighFatDiet_6h_3_TPM','lg2_avg_HighFatDiet_24h_1_TPM','lg2_avg_HighFatDiet_24h_2_TPM','lg2_avg_HighFatDiet_24h_3_TPM','lg2_avg_Hypoxia_0h_1_TPM','lg2_avg_Hypoxia_0h_2_TPM','lg2_avg_Hypoxia_0h_3_TPM','lg2_avg_Hypoxia_2h_1_TPM','lg2_avg_Hypoxia_2h_2_TPM','lg2_avg_Hypoxia_2h_3_TPM','lg2_avg_Hypoxia_6h_1_TPM','lg2_avg_Hypoxia_6h_2_TPM','lg2_avg_Hypoxia_6h_3_TPM','lg2_avg_Hypoxia_24h_1_TPM','lg2_avg_Hypoxia_24h_2_TPM','lg2_avg_Hypoxia_24h_3_TPM','lg2_avg_Irradiation_0h_1_TPM','lg2_avg_Irradiation_0h_2_TPM','lg2_avg_Irradiation_0h_3_TPM','lg2_avg_Irradiation_2h_1_TPM','lg2_avg_Irradiation_2h_2_TPM','lg2_avg_Irradiation_2h_3_TPM','lg2_avg_Irradiation_6h_1_TPM','lg2_avg_Irradiation_6h_2_TPM','lg2_avg_Irradiation_6h_3_TPM','lg2_avg_Irradiation_24h_1_TPM','lg2_avg_Irradiation_24h_2_TPM','lg2_avg_Irradiation_24h_3_TPM','lg2_avg_NR_0h_1_TPM','lg2_avg_NR_0h_2_TPM','lg2_avg_NR_0h_3_TPM','lg2_avg_NR_2h_1_TPM','lg2_avg_NR_2h_2_TPM','lg2_avg_NR_2h_3_TPM','lg2_avg_NR_6h_1_TPM','lg2_avg_NR_6h_2_TPM','lg2_avg_NR_6h_3_TPM','lg2_avg_NR_24h_1_TPM','lg2_avg_NR_24h_2_TPM','lg2_avg_NR_24h_3_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_high_fat_diest_24h_vs_control_24h' => array(
            'name' => 'logFC high fat diest 24h vs control 24h',
            'slider_min' => -2,
            'slider_max' => 4,
            'default_low' => -2,
            'default_high' => 4
        ),
        'contrast_1_padj_high_fat_diest_24h_vs_control_24h' => array(
            'name' => 'padj high fat diest 24h vs control 24h',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_Hypoxia_24h_vs_control_24h' => array(
            'name' => 'logFC Hypoxia 24h vs control 24h',
            'slider_min' => -6,
            'slider_max' => 7,
            'default_low' => -6,
            'default_high' => 7
        ),
        'contrast_2_padj_Hypoxia_24h_vs_control_24h' => array(
            'name' => 'padj Hypoxia 24h vs control 24h',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_Irradiation_24h_vs_control_24h' => array(
            'name' => 'logFC Irradiation 24h vs control 24h',
            'slider_min' => -1,
            'slider_max' => 2,
            'default_low' => -1,
            'default_high' => 2
        ),
        'contrast_3_padj_Irradiation_24h_vs_control_24h' => array(
            'name' => 'padj Irradiation 24h vs control 24h',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_logFC_NR_24h_vs_control_24h' => array(
            'name' => 'logFC NR 24h vs control 24h',
            'slider_min' => -3,
            'slider_max' => 1,
            'default_low' => -3,
            'default_high' => 1
        ),
        'contrast_4_padj_NR_24h_vs_control_24h' => array(
            'name' => 'padj NR 24h vs control 24h',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_5_logFC_high_fat_diest_2h_vs_control_2h' => array(
            'name' => 'logFC high fat diest 2h vs control 2h',
            'slider_min' => -2,
            'slider_max' => 3,
            'default_low' => -2,
            'default_high' => 3
        ),
        'contrast_5_padj_high_fat_diest_2h_vs_control_2h' => array(
            'name' => 'padj high fat diest 2h vs control 2h',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_6_logFC_Hypoxia_2h_vs_control_2h' => array(
            'name' => 'logFC Hypoxia 2h vs control 2h',
            'slider_min' => -3,
            'slider_max' => 4,
            'default_low' => -3,
            'default_high' => 4
        ),
        'contrast_6_padj_Hypoxia_2h_vs_control_2h' => array(
            'name' => 'padj Hypoxia 2h vs control 2h',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_7_logFC_Irradiation_2h_vs_control_2h' => array(
            'name' => 'logFC Irradiation 2h vs control 2h',
            'slider_min' => -1,
            'slider_max' => 2,
            'default_low' => -1,
            'default_high' => 2
        ),
        'contrast_7_padj_Irradiation_2h_vs_control_2h' => array(
            'name' => 'padj Irradiation 2h vs control 2h',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_8_logFC_NR_2h_vs_control_2h' => array(
            'name' => 'logFC NR 2h vs control 2h',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_8_padj_NR_2h_vs_control_2h' => array(
            'name' => 'padj NR 2h vs control 2h',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_9_logFC_high_fat_diest_6h_vs_control_6h' => array(
            'name' => 'logFC high fat diest 6h vs control 6h',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_9_padj_high_fat_diest_6h_vs_control_6h' => array(
            'name' => 'padj high fat diest 6h vs control 6h',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_10_logFC_Hypoxia_6h_vs_control_6h' => array(
            'name' => '0 logFC Hypoxia 6h vs control 6h',
            'slider_min' => -3,
            'slider_max' => 4,
            'default_low' => -3,
            'default_high' => 4
        ),
        'contrast_10_padj_Hypoxia_6h_vs_control_6h' => array(
            'name' => '0 padj Hypoxia 6h vs control 6h',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_11_logFC_Irradiation_6h_vs_control_6h' => array(
            'name' => '1 logFC Irradiation 6h vs control 6h',
            'slider_min' => -1,
            'slider_max' => 3,
            'default_low' => -1,
            'default_high' => 3
        ),
        'contrast_11_padj_Irradiation_6h_vs_control_6h' => array(
            'name' => '1 padj Irradiation 6h vs control 6h',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_12_logFC_NR_6h_vs_control_6h' => array(
            'name' => '2 logFC NR 6h vs control 6h',
            'slider_min' => -2,
            'slider_max' => 4,
            'default_low' => -2,
            'default_high' => 4
        ),
        'contrast_12_padj_NR_6h_vs_control_6h' => array(
            'name' => '2 padj NR 6h vs control 6h',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_13_logFC_HighFatDiet_vs_Ctrl' => array(
            'name' => '3 logFC HighFatDiet vs Ctrl',
            'slider_min' => -7,
            'slider_max' => 20,
            'default_low' => -7,
            'default_high' => 20
        ),
        'contrast_13_padj_HighFatDiet_vs_Ctrl' => array(
            'name' => '3 padj HighFatDiet vs Ctrl',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_14_logFC_Hypoxia_vs_Ctrl' => array(
            'name' => '4 logFC Hypoxia vs Ctrl',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_14_padj_Hypoxia_vs_Ctrl' => array(
            'name' => '4 padj Hypoxia vs Ctrl',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_15_logFC_Irradiation_vs_Ctrl' => array(
            'name' => '5 logFC Irradiation vs Ctrl',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_15_padj_Irradiation_vs_Ctrl' => array(
            'name' => '5 padj Irradiation vs Ctrl',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_16_logFC_NR_vs_Ctrl' => array(
            'name' => '6 logFC NR vs Ctrl',
            'slider_min' => -1,
            'slider_max' => 4,
            'default_low' => -1,
            'default_high' => 4
        ),
        'contrast_16_padj_NR_vs_Ctrl' => array(
            'name' => '6 padj NR vs Ctrl',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_L_lg10p_LRT_Sample_Treatment' => array(
            'name' => 'lg10p LRT Sample Treatment',
            'slider_min' => 0,
            'slider_max' => 65,
            'default_low' => 0,
            'default_high' => 65
        ),
        'contrast_L_lg10p_LRT_timepoint' => array(
            'name' => 'lg10p LRT timepoint',
            'slider_min' => 0,
            'slider_max' => 65,
            'default_low' => 0,
            'default_high' => 65
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'RN21220_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_high_fat_diest_24h_vs_control_24h',
        'default-y' => 'contrast_1_lg10p_high_fat_diest_24h_vs_control_24h',
        'selection' => array(
            'contrast_1_logFC_high_fat_diest_24h_vs_control_24h' => array(
                'name' => 'logFC high fat diest 24h vs control 24h'
            ),
            'contrast_2_logFC_Hypoxia_24h_vs_control_24h' => array(
                'name' => 'logFC Hypoxia 24h vs control 24h'
            ),
            'contrast_3_logFC_Irradiation_24h_vs_control_24h' => array(
                'name' => 'logFC Irradiation 24h vs control 24h'
            ),
            'contrast_4_logFC_NR_24h_vs_control_24h' => array(
                'name' => 'logFC NR 24h vs control 24h'
            ),
            'contrast_5_logFC_high_fat_diest_2h_vs_control_2h' => array(
                'name' => 'logFC high fat diest 2h vs control 2h'
            ),
            'contrast_6_logFC_Hypoxia_2h_vs_control_2h' => array(
                'name' => 'logFC Hypoxia 2h vs control 2h'
            ),
            'contrast_7_logFC_Irradiation_2h_vs_control_2h' => array(
                'name' => 'logFC Irradiation 2h vs control 2h'
            ),
            'contrast_8_logFC_NR_2h_vs_control_2h' => array(
                'name' => 'logFC NR 2h vs control 2h'
            ),
            'contrast_9_logFC_high_fat_diest_6h_vs_control_6h' => array(
                'name' => 'logFC high fat diest 6h vs control 6h'
            ),
            'contrast_10_logFC_Hypoxia_6h_vs_control_6h' => array(
                'name' => '0 logFC Hypoxia 6h vs control 6h'
            ),
            'contrast_11_logFC_Irradiation_6h_vs_control_6h' => array(
                'name' => '1 logFC Irradiation 6h vs control 6h'
            ),
            'contrast_12_logFC_NR_6h_vs_control_6h' => array(
                'name' => '2 logFC NR 6h vs control 6h'
            ),
            'contrast_13_logFC_HighFatDiet_vs_Ctrl' => array(
                'name' => '3 logFC HighFatDiet vs Ctrl'
            ),
            'contrast_14_logFC_Hypoxia_vs_Ctrl' => array(
                'name' => '4 logFC Hypoxia vs Ctrl'
            ),
            'contrast_15_logFC_Irradiation_vs_Ctrl' => array(
                'name' => '5 logFC Irradiation vs Ctrl'
            ),
            'contrast_16_logFC_NR_vs_Ctrl' => array(
                'name' => '6 logFC NR vs Ctrl'
            ),
            'contrast_1_lg10p_high_fat_diest_24h_vs_control_24h' => array(
                'name' => 'lg10p high fat diest 24h vs control 24h'
            ),
            'contrast_2_lg10p_Hypoxia_24h_vs_control_24h' => array(
                'name' => 'lg10p Hypoxia 24h vs control 24h'
            ),
            'contrast_3_lg10p_Irradiation_24h_vs_control_24h' => array(
                'name' => 'lg10p Irradiation 24h vs control 24h'
            ),
            'contrast_4_lg10p_NR_24h_vs_control_24h' => array(
                'name' => 'lg10p NR 24h vs control 24h'
            ),
            'contrast_5_lg10p_high_fat_diest_2h_vs_control_2h' => array(
                'name' => 'lg10p high fat diest 2h vs control 2h'
            ),
            'contrast_6_lg10p_Hypoxia_2h_vs_control_2h' => array(
                'name' => 'lg10p Hypoxia 2h vs control 2h'
            ),
            'contrast_7_lg10p_Irradiation_2h_vs_control_2h' => array(
                'name' => 'lg10p Irradiation 2h vs control 2h'
            ),
            'contrast_8_lg10p_NR_2h_vs_control_2h' => array(
                'name' => 'lg10p NR 2h vs control 2h'
            ),
            'contrast_9_lg10p_high_fat_diest_6h_vs_control_6h' => array(
                'name' => 'lg10p high fat diest 6h vs control 6h'
            ),
            'contrast_10_lg10p_Hypoxia_6h_vs_control_6h' => array(
                'name' => '0 lg10p Hypoxia 6h vs control 6h'
            ),
            'contrast_11_lg10p_Irradiation_6h_vs_control_6h' => array(
                'name' => '1 lg10p Irradiation 6h vs control 6h'
            ),
            'contrast_12_lg10p_NR_6h_vs_control_6h' => array(
                'name' => '2 lg10p NR 6h vs control 6h'
            ),
            'contrast_13_lg10p_HighFatDiet_vs_Ctrl' => array(
                'name' => '3 lg10p HighFatDiet vs Ctrl'
            ),
            'contrast_14_lg10p_Hypoxia_vs_Ctrl' => array(
                'name' => '4 lg10p Hypoxia vs Ctrl'
            ),
            'contrast_15_lg10p_Irradiation_vs_Ctrl' => array(
                'name' => '5 lg10p Irradiation vs Ctrl'
            ),
            'contrast_16_lg10p_NR_vs_Ctrl' => array(
                'name' => '6 lg10p NR vs Ctrl'
            ),
            'contrast_L_lg10p_LRT_Sample_Treatment' => array(
                'name' => 'lg10p LRT Sample Treatment'
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
            'contrast_1_lg2BaseMean_high_fat_diest_24h_vs_control_24h' => array(
                'name' => 'lg2BaseMean high fat diest 24h vs control 24h'
            ),
            'contrast_2_lg2BaseMean_Hypoxia_24h_vs_control_24h' => array(
                'name' => 'lg2BaseMean Hypoxia 24h vs control 24h'
            ),
            'contrast_3_lg2BaseMean_Irradiation_24h_vs_control_24h' => array(
                'name' => 'lg2BaseMean Irradiation 24h vs control 24h'
            ),
            'contrast_4_lg2BaseMean_NR_24h_vs_control_24h' => array(
                'name' => 'lg2BaseMean NR 24h vs control 24h'
            ),
            'contrast_5_lg2BaseMean_high_fat_diest_2h_vs_control_2h' => array(
                'name' => 'lg2BaseMean high fat diest 2h vs control 2h'
            ),
            'contrast_6_lg2BaseMean_Hypoxia_2h_vs_control_2h' => array(
                'name' => 'lg2BaseMean Hypoxia 2h vs control 2h'
            ),
            'contrast_7_lg2BaseMean_Irradiation_2h_vs_control_2h' => array(
                'name' => 'lg2BaseMean Irradiation 2h vs control 2h'
            ),
            'contrast_8_lg2BaseMean_NR_2h_vs_control_2h' => array(
                'name' => 'lg2BaseMean NR 2h vs control 2h'
            ),
            'contrast_9_lg2BaseMean_high_fat_diest_6h_vs_control_6h' => array(
                'name' => 'lg2BaseMean high fat diest 6h vs control 6h'
            ),
            'contrast_10_lg2BaseMean_Hypoxia_6h_vs_control_6h' => array(
                'name' => '0 lg2BaseMean Hypoxia 6h vs control 6h'
            ),
            'contrast_11_lg2BaseMean_Irradiation_6h_vs_control_6h' => array(
                'name' => '1 lg2BaseMean Irradiation 6h vs control 6h'
            ),
            'contrast_12_lg2BaseMean_NR_6h_vs_control_6h' => array(
                'name' => '2 lg2BaseMean NR 6h vs control 6h'
            ),
            'contrast_13_lg2BaseMean_HighFatDiet_vs_Ctrl' => array(
                'name' => '3 lg2BaseMean HighFatDiet vs Ctrl'
            ),
            'contrast_14_lg2BaseMean_Hypoxia_vs_Ctrl' => array(
                'name' => '4 lg2BaseMean Hypoxia vs Ctrl'
            ),
            'contrast_15_lg2BaseMean_Irradiation_vs_Ctrl' => array(
                'name' => '5 lg2BaseMean Irradiation vs Ctrl'
            ),
            'contrast_16_lg2BaseMean_NR_vs_Ctrl' => array(
                'name' => '6 lg2BaseMean NR vs Ctrl'
            ),
            'contrast_L_lg2BaseMean_LRT_Sample_Treatment' => array(
                'name' => 'lg2BaseMean LRT Sample Treatment'
            ),
            'contrast_L_lg2BaseMean_LRT_timepoint' => array(
                'name' => 'lg2BaseMean LRT timepoint'
            )
        )
    )
//End scatterplot
);
