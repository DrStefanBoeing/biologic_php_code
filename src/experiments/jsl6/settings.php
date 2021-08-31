<?php

return array(
    'lab' => array(
        'name' => 'Pachnis DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'jsl_data',
    'data_db' => array(
            'cat_table_name' => ''
    ),

    'rnaseq_db_table' => 'P12_csa_ubiquitylation',
    'primary_gene_symbol' => 'hgnc_symbol',
    'ptm_display_column' => 'display_ptm',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'lg2(SILAC Ratio)'
    ),

    'samples' => array(
        'norm_counts_ratio_h_l_count_ne146' => array(
            'color' => '#FF0000FF',
            'name' => 'ratio h l count ne146'
        ),
        'norm_counts_ratio_h_l_count_ne147' => array(
            'color' => '#FFDB00FF',
            'name' => 'ratio h l count ne147'
        ),
        'norm_counts_ratio_h_l_count_ne148' => array(
            'color' => '#49FF00FF',
            'name' => 'ratio h l count ne148'
        ),
        'norm_counts_ratio_h_l_count_ne166' => array(
            'color' => '#00FF92FF',
            'name' => 'ratio h l count ne166'
        ),
        'norm_counts_ratio_h_l_count_ne167' => array(
            'color' => '#0092FFFF',
            'name' => 'ratio h l count ne167'
        ),
        'norm_counts_ratio_h_l_count_ne168' => array(
            'color' => '#4900FFFF',
            'name' => 'ratio h l count ne168'
        ),
        'norm_counts_ratio_h_l_count_ne169' => array(
            'color' => '#FF00DBFF',
            'name' => 'ratio h l count ne169'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_logFC_uv_ne166','lg2_avg_logFC_uv_ne167','lg2_avg_logFC_uv_ne168','lg2_avg_logFC_uv_ne169','lg2_avg_logFC_uv_ne146','lg2_avg_logFC_uv_mg132_ne147','lg2_avg_logFC_ox_ne148'),

        'table' => array(
            'col_name_start' => 11,
            'low_highlight' => -1,
            'high_highlight' => 1
        ),

        'selection' => array(
            'contrast_1_lg10_intensity_ne166' => array(
                'name' => 'lg10 intensity ne166',
                'slider_min' => 0,
                'slider_max' => 12,
                'default_low' => 0,
                'default_high' => 12
            ),
            'contrast_1_logFC_uv_ne166' => array(
                'name' => 'logFC uv ne166',
                'slider_min' => -5,
                'slider_max' => 3,
                'default_low' => -5,
                'default_high' => 3
            ),
            'contrast_2_lg10_intensity_ne167' => array(
                'name' => 'lg10 intensity ne167',
                'slider_min' => 0,
                'slider_max' => 12,
                'default_low' => 0,
                'default_high' => 12
            ),
            'contrast_2_logFC_uv_ne167' => array(
                'name' => 'logFC uv ne167',
                'slider_min' => -6,
                'slider_max' => 4,
                'default_low' => -6,
                'default_high' => 4
            ),
            'contrast_3_lg10_intensity_ne168' => array(
                'name' => 'lg10 intensity ne168',
                'slider_min' => 0,
                'slider_max' => 12,
                'default_low' => 0,
                'default_high' => 12
            ),
            'contrast_3_logFC_uv_ne168' => array(
                'name' => 'logFC uv ne168',
                'slider_min' => -7,
                'slider_max' => 5,
                'default_low' => -7,
                'default_high' => 5
            ),
            'contrast_4_lg10_intensity_ne169' => array(
                'name' => 'lg10 intensity ne169',
                'slider_min' => 0,
                'slider_max' => 12,
                'default_low' => 0,
                'default_high' => 12
            ),
            'contrast_4_logFC_uv_ne169' => array(
                'name' => 'logFC uv ne169',
                'slider_min' => -4,
                'slider_max' => 6,
                'default_low' => -4,
                'default_high' => 6
            ),
            'contrast_5_lg10_intensity_ne146' => array(
                'name' => 'lg10 intensity ne146',
                'slider_min' => 0,
                'slider_max' => 12,
                'default_low' => 0,
                'default_high' => 12
            ),
            'contrast_5_logFC_uv_ne146' => array(
                'name' => 'logFC uv ne146',
                'slider_min' => -4,
                'slider_max' => 6,
                'default_low' => -4,
                'default_high' => 6
            ),
            'contrast_6_lg10_intensity_ne147' => array(
                'name' => 'lg10 intensity ne147',
                'slider_min' => 0,
                'slider_max' => 12,
                'default_low' => 0,
                'default_high' => 12
            ),
            'contrast_6_logFC_uv_mg132_ne147' => array(
                'name' => 'logFC uv mg132 ne147',
                'slider_min' => -6,
                'slider_max' => 6,
                'default_low' => -6,
                'default_high' => 6
            ),
            'contrast_7_lg10_intensity_ne148' => array(
                'name' => 'lg10 intensity ne148',
                'slider_min' => 0,
                'slider_max' => 12,
                'default_low' => 0,
                'default_high' => 12
            ),
            'contrast_7_logFC_ox_ne148' => array(
                'name' => 'logFC ox ne148',
                'slider_min' => -7,
                'slider_max' => 6,
                'default_low' => -7,
                'default_high' => 6
            ),
            'norm_counts_ratio_h_l_count_ne146' => array(
                'name' => 's ratio h l count ne146',
                'slider_min' => 0,
                'slider_max' => 682,
                'default_low' => 0,
                'default_high' => 682
            ),
            'norm_counts_ratio_h_l_count_ne147' => array(
                'name' => 's ratio h l count ne147',
                'slider_min' => 0,
                'slider_max' => 1488,
                'default_low' => 0,
                'default_high' => 1488
            ),
            'norm_counts_ratio_h_l_count_ne148' => array(
                'name' => 's ratio h l count ne148',
                'slider_min' => 0,
                'slider_max' => 336,
                'default_low' => 0,
                'default_high' => 336
            ),
            'norm_counts_ratio_h_l_count_ne166' => array(
                'name' => 's ratio h l count ne166',
                'slider_min' => 0,
                'slider_max' => 2031,
                'default_low' => 0,
                'default_high' => 2031
            ),
            'norm_counts_ratio_h_l_count_ne167' => array(
                'name' => 's ratio h l count ne167',
                'slider_min' => 0,
                'slider_max' => 1862,
                'default_low' => 0,
                'default_high' => 1862
            ),
            'norm_counts_ratio_h_l_count_ne168' => array(
                'name' => 's ratio h l count ne168',
                'slider_min' => 0,
                'slider_max' => 2461,
                'default_low' => 0,
                'default_high' => 2461
            ),
            'norm_counts_ratio_h_l_count_ne169' => array(
                'name' => 's ratio h l count ne169',
                'slider_min' => 0,
                'slider_max' => 3587,
                'default_low' => 0,
                'default_high' => 3587
            )
        )
    ),
    // Scatterplot Parameters
    'scatterplot' => array(
        'selection' => array(
            'contrast_1_lg10_intensity_ne166' => array(
                'name' => 'lg10 intensity ne166'
            ),
            'contrast_1_logFC_uv_ne166' => array(
                'name' => 'logFC uv ne166'
            ),
            'contrast_2_lg10_intensity_ne167' => array(
                'name' => 'lg10 intensity ne167'
            ),
            'contrast_2_logFC_uv_ne167' => array(
                'name' => 'logFC uv ne167'
            ),
            'contrast_3_lg10_intensity_ne168' => array(
                'name' => 'lg10 intensity ne168'
            ),
            'contrast_3_logFC_uv_ne168' => array(
                'name' => 'logFC uv ne168'
            ),
            'contrast_4_lg10_intensity_ne169' => array(
                'name' => 'lg10 intensity ne169'
            ),
            'contrast_4_logFC_uv_ne169' => array(
                'name' => 'logFC uv ne169'
            ),
            'contrast_5_lg10_intensity_ne146' => array(
                'name' => 'lg10 intensity ne146'
            ),
            'contrast_5_logFC_uv_ne146' => array(
                'name' => 'logFC uv ne146'
            ),
            'contrast_6_lg10_intensity_ne147' => array(
                'name' => 'lg10 intensity ne147'
            ),
            'contrast_6_logFC_uv_mg132_ne147' => array(
                'name' => 'logFC uv mg132 ne147'
            ),
            'contrast_7_lg10_intensity_ne148' => array(
                'name' => 'lg10 intensity ne148'
            ),
            'contrast_7_logFC_ox_ne148' => array(
                'name' => 'logFC ox ne148'
            )
        )
    )
//End scatterplot
);
