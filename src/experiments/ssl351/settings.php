<?php

return array(
    'lab' => array(
        'name' => 'Santos DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'ssl_data',
    'data_db' => array(
            'cat_table_name' => 'ssl351_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'p351_chip_lfq_seq_table',
    'primary_gene_symbol' => 'hgnc_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 9,
        'lower_limit' => 0,
        'headline' => 'Heatmap: log10 - Intensity',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_ChIP_0hrs_1' => array(
            'color' => '#8DD3C7',
            'name' => 'ChIP 0hrs 1'
        ),
        'norm_counts_ChIP_0hrs_2' => array(
            'color' => '#8DD3C7',
            'name' => 'ChIP 0hrs 2'
        ),
        'norm_counts_ChIP_0hrs_3' => array(
            'color' => '#8DD3C7',
            'name' => 'ChIP 0hrs 3'
        ),
        'norm_counts_ChIP_6hrs_1' => array(
            'color' => '#CAAEC5',
            'name' => 'ChIP 6hrs 1'
        ),
        'norm_counts_ChIP_6hrs_2' => array(
            'color' => '#CAAEC5',
            'name' => 'ChIP 6hrs 2'
        ),
        'norm_counts_ChIP_6hrs_3' => array(
            'color' => '#CAAEC5',
            'name' => 'ChIP 6hrs 3'
        ),
        'norm_counts_ChIP_12hrs_1' => array(
            'color' => '#B2B2A5',
            'name' => 'ChIP 12hrs 1'
        ),
        'norm_counts_ChIP_12hrs_2' => array(
            'color' => '#B2B2A5',
            'name' => 'ChIP 12hrs 2'
        ),
        'norm_counts_ChIP_12hrs_3' => array(
            'color' => '#B2B2A5',
            'name' => 'ChIP 12hrs 3'
        ),
        'norm_counts_ChIP_24hrs_1' => array(
            'color' => '#DED3B3',
            'name' => 'ChIP 24hrs 1'
        ),
        'norm_counts_ChIP_24hrs_2' => array(
            'color' => '#DED3B3',
            'name' => 'ChIP 24hrs 2'
        ),
        'norm_counts_ChIP_24hrs_3' => array(
            'color' => '#DED3B3',
            'name' => 'ChIP 24hrs 3'
        ),
        'norm_counts_ChIP_48hrs_1' => array(
            'color' => '#C191C2',
            'name' => 'ChIP 48hrs 1'
        ),
        'norm_counts_ChIP_48hrs_2' => array(
            'color' => '#C191C2',
            'name' => 'ChIP 48hrs 2'
        ),
        'norm_counts_ChIP_48hrs_3' => array(
            'color' => '#C191C2',
            'name' => 'ChIP 48hrs 3'
        ),
        'norm_counts_ChIP_72hrs_1' => array(
            'color' => '#FFED6F',
            'name' => 'ChIP 72hrs 1'
        ),
        'norm_counts_ChIP_72hrs_2' => array(
            'color' => '#FFED6F',
            'name' => 'ChIP 72hrs 2'
        ),
        'norm_counts_ChIP_72hrs_3' => array(
            'color' => '#FFED6F',
            'name' => 'ChIP 72hrs 3'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'log10 Intensity Values for all Samples',
        'sidelabel' => 'log10 Intensity'
    ),
// New Begin: Timecourse
'timecourse_chart' => array(
    'timepoint_name' => 'Day',
    'display_median' => 'calculate_median',
    'timepoint_array' => array(0,6,12,24,48,72),
    'datasets' => array(
'ChIP' => array(
    'color' => '#009900',
    'sample_group' => array(
'ChIP_0hrs' => array(
    'timepoint' =>  0,
    'sampleDbCols' =>  array(
'norm_counts_ChIP_0hrs_1','norm_counts_ChIP_0hrs_2','norm_counts_ChIP_0hrs_3'
)),
'ChIP_6hrs' => array(
    'timepoint' =>  6,
    'sampleDbCols' =>  array(
'norm_counts_ChIP_6hrs_1','norm_counts_ChIP_6hrs_2','norm_counts_ChIP_6hrs_3'
)),
'ChIP_12hrs' => array(
    'timepoint' =>  12,
    'sampleDbCols' =>  array(
'norm_counts_ChIP_12hrs_1','norm_counts_ChIP_12hrs_2','norm_counts_ChIP_12hrs_3'
)),
'ChIP_24hrs' => array(
    'timepoint' =>  24,
    'sampleDbCols' =>  array(
'norm_counts_ChIP_24hrs_1','norm_counts_ChIP_24hrs_2','norm_counts_ChIP_24hrs_3'
)),
'ChIP_48hrs' => array(
    'timepoint' =>  48,
    'sampleDbCols' =>  array(
'norm_counts_ChIP_48hrs_1','norm_counts_ChIP_48hrs_2','norm_counts_ChIP_48hrs_3'
)),
'ChIP_72hrs' => array(
    'timepoint' =>  72,
    'sampleDbCols' =>  array(
'norm_counts_ChIP_72hrs_1','norm_counts_ChIP_72hrs_2','norm_counts_ChIP_72hrs_3'
)))))),
// New End: Timecourse
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_ChIP_0hrs_1','lg2_avg_ChIP_0hrs_2','lg2_avg_ChIP_0hrs_3','lg2_avg_ChIP_6hrs_1','lg2_avg_ChIP_6hrs_2','lg2_avg_ChIP_6hrs_3','lg2_avg_ChIP_12hrs_1','lg2_avg_ChIP_12hrs_2','lg2_avg_ChIP_12hrs_3','lg2_avg_ChIP_24hrs_1','lg2_avg_ChIP_24hrs_2','lg2_avg_ChIP_24hrs_3','lg2_avg_ChIP_48hrs_1','lg2_avg_ChIP_48hrs_2','lg2_avg_ChIP_48hrs_3','lg2_avg_ChIP_72hrs_1','lg2_avg_ChIP_72hrs_2','lg2_avg_ChIP_72hrs_3'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_time72H_6H_median' => array(
            'name' => 'logFC time72H 6H median',
            'slider_min' => -5,
            'slider_max' => 5,
            'default_low' => -5,
            'default_high' => 5
        ),
        'contrast_1_padj_time72H_6H' => array(
            'name' => 'padj time72H 6H',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_time48H_6H_mean' => array(
            'name' => 'logFC time48H 6H mean',
            'slider_min' => -5,
            'slider_max' => 5,
            'default_low' => -5,
            'default_high' => 5
        ),
        'contrast_2_logFC_time48H_6H_median' => array(
            'name' => 'logFC time48H 6H median',
            'slider_min' => -5,
            'slider_max' => 5,
            'default_low' => -5,
            'default_high' => 5
        ),
        'contrast_2_padj_time48H_6H' => array(
            'name' => 'padj time48H 6H',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_time24H_6H_mean' => array(
            'name' => 'logFC time24H 6H mean',
            'slider_min' => -5,
            'slider_max' => 5,
            'default_low' => -5,
            'default_high' => 5
        ),
        'contrast_3_logFC_time24H_6H_median' => array(
            'name' => 'logFC time24H 6H median',
            'slider_min' => -5,
            'slider_max' => 5,
            'default_low' => -5,
            'default_high' => 5
        ),
        'contrast_3_padj_time24H_6H' => array(
            'name' => 'padj time24H 6H',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_logFC_time12H_6H_mean' => array(
            'name' => 'logFC time12H 6H mean',
            'slider_min' => -5,
            'slider_max' => 5,
            'default_low' => -5,
            'default_high' => 5
        ),
        'contrast_4_logFC_time12H_6H_median' => array(
            'name' => 'logFC time12H 6H median',
            'slider_min' => -5,
            'slider_max' => 5,
            'default_low' => -5,
            'default_high' => 5
        ),
        'contrast_4_padj_time12H_6H' => array(
            'name' => 'padj time12H 6H',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_C_corCoef_ACTR1B' => array(
            'name' => 'corCoef ACTR1B',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_C_corCoef_CTNNB1' => array(
            'name' => 'corCoef CTNNB1',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_C_corCoef_FTSJ3' => array(
            'name' => 'corCoef FTSJ3',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_C_corCoef_GATA3' => array(
            'name' => 'corCoef GATA3',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_C_corCoef_ZNF281' => array(
            'name' => 'corCoef ZNF281',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_N_Detected_in_N_samples' => array(
            'name' => 'Detected in N samples',
            'slider_min' => 1,
            'slider_max' => 18,
            'default_low' => 1,
            'default_high' => 18
        ),
        'iBAQtional__ChIP_0hrs_MedianZF' => array(
            'name' => ' ChIP 0hrs MedianZF',
            'slider_min' => 0,
            'slider_max' => 8,
            'default_low' => 0,
            'default_high' => 8
        ),
        'iBAQtional__ChIP_12hrs_MedianZF' => array(
            'name' => ' ChIP 12hrs MedianZF',
            'slider_min' => 0,
            'slider_max' => 9,
            'default_low' => 0,
            'default_high' => 9
        ),
        'iBAQtional__ChIP_24hrs_MedianZF' => array(
            'name' => ' ChIP 24hrs MedianZF',
            'slider_min' => 0,
            'slider_max' => 9,
            'default_low' => 0,
            'default_high' => 9
        ),
        'iBAQtional__ChIP_48hrs_MedianZF' => array(
            'name' => ' ChIP 48hrs MedianZF',
            'slider_min' => 0,
            'slider_max' => 9,
            'default_low' => 0,
            'default_high' => 9
        ),
        'iBAQtional__ChIP_6hrs_MedianZF' => array(
            'name' => ' ChIP 6hrs MedianZF',
            'slider_min' => 0,
            'slider_max' => 9,
            'default_low' => 0,
            'default_high' => 9
        ),
        'iBAQtional__ChIP_72hrs_MedianZF' => array(
            'name' => ' ChIP 72hrs MedianZF',
            'slider_min' => 0,
            'slider_max' => 9,
            'default_low' => 0,
            'default_high' => 9
        ),
        'iBAQtional__Ratio72H_6H_log2_mean' => array(
            'name' => ' Ratio72H 6H log2 mean',
            'slider_min' => -5,
            'slider_max' => 5,
            'default_low' => -5,
            'default_high' => 5
        ),
        'iBAQtional__time12H_6H_mad_median' => array(
            'name' => ' time12H 6H mad median',
            'slider_min' => 0,
            'slider_max' => 148,
            'default_low' => 0,
            'default_high' => 148
        ),
        'iBAQtional__time24H_6H_mad_median' => array(
            'name' => ' time24H 6H mad median',
            'slider_min' => 0,
            'slider_max' => 148,
            'default_low' => 0,
            'default_high' => 148
        ),
        'iBAQtional__time48H_6H_mad_median' => array(
            'name' => ' time48H 6H mad median',
            'slider_min' => 0,
            'slider_max' => 148,
            'default_low' => 0,
            'default_high' => 148
        ),
        'iBAQtional__time72H_6H_mad_median' => array(
            'name' => ' time72H 6H mad median',
            'slider_min' => 0,
            'slider_max' => 147,
            'default_low' => 0,
            'default_high' => 147
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'p351_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_time72H_6H_median',
        'default-y' => 'contrast_1_lg10p_time72H_6H',
        'selection' => array(
            'contrast_4_logFC_time12H_6H_median' => array(
                'name' => 'logFC time12H 6H median'
            ),
            'contrast_4_logFC_time12H_6H_mean' => array(
                'name' => 'logFC time12H 6H mean'
            ),
            'contrast_3_logFC_time24H_6H_median' => array(
                'name' => 'logFC time24H 6H median'
            ),
            'contrast_3_logFC_time24H_6H_mean' => array(
                'name' => 'logFC time24H 6H mean'
            ),
            'contrast_2_logFC_time48H_6H_median' => array(
                'name' => 'logFC time48H 6H median'
            ),
            'contrast_2_logFC_time48H_6H_mean' => array(
                'name' => 'logFC time48H 6H mean'
            ),
            'contrast_1_logFC_time72H_6H_median' => array(
                'name' => 'logFC time72H 6H median'
            ),
            'contrast_4_lg10p_time12H_6H' => array(
                'name' => 'lg10p time12H 6H'
            ),
            'contrast_3_lg10p_time24H_6H' => array(
                'name' => 'lg10p time24H 6H'
            ),
            'contrast_2_lg10p_time48H_6H' => array(
                'name' => 'lg10p time48H 6H'
            ),
            'contrast_1_lg10p_time72H_6H' => array(
                'name' => 'lg10p time72H 6H'
            ),
            'iBAQtional__time72H_6H_mad_median' => array(
                'name' => ' time72H 6H mad median'
            ),
            'iBAQtional__time48H_6H_mad_median' => array(
                'name' => ' time48H 6H mad median'
            ),
            'iBAQtional__time24H_6H_mad_median' => array(
                'name' => ' time24H 6H mad median'
            ),
            'iBAQtional__time12H_6H_mad_median' => array(
                'name' => ' time12H 6H mad median'
            ),
            'iBAQtional__Ratio72H_6H_log2_mean' => array(
                'name' => ' Ratio72H 6H log2 mean'
            ),
            'iBAQtional__ChIP_72hrs_MedianZF' => array(
                'name' => ' ChIP 72hrs MedianZF'
            ),
            'iBAQtional__ChIP_6hrs_MedianZF' => array(
                'name' => ' ChIP 6hrs MedianZF'
            ),
            'iBAQtional__ChIP_48hrs_MedianZF' => array(
                'name' => ' ChIP 48hrs MedianZF'
            ),
            'iBAQtional__ChIP_24hrs_MedianZF' => array(
                'name' => ' ChIP 24hrs MedianZF'
            ),
            'iBAQtional__ChIP_12hrs_MedianZF' => array(
                'name' => ' ChIP 12hrs MedianZF'
            ),
            'iBAQtional__ChIP_0hrs_MedianZF' => array(
                'name' => ' ChIP 0hrs MedianZF'
            ),
            'contrast_C_corCoef_GATA3' => array(
                'name' => 'corCoef GATA3'
            ),
            'contrast_C_corCoef_CTNNB1' => array(
                'name' => 'corCoef CTNNB1'
            ),
            'contrast_C_corCoef_FTSJ3' => array(
                'name' => 'corCoef FTSJ3'
            ),
            'contrast_C_corCoef_ZNF281' => array(
                'name' => 'corCoef ZNF281'
            ),
            'contrast_C_corCoef_ACTR1B' => array(
                'name' => 'corCoef ACTR1B'
            ),
            'contrast_N_Detected_in_N_samples' => array(
                'name' => 'Detected in N samples'
            )
        )
    )
//End scatterplot
);
