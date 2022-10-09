<?php

return array(
   'lab' => array(
        'name' => 'Gould DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'agl_data',
    'data_db' => array(
            'cat_table_name' => 'agl298_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'agl298_rna_seq_table',
    'primary_gene_symbol' => 'hgnc_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_DMSO_0d_1_TPM' => array(
            'color' => '#F8766D',
            'name' => 'DMSO 0d 1 TPM'
        ),
        'norm_counts_DMSO_0d_2_TPM' => array(
            'color' => '#F8766D',
            'name' => 'DMSO 0d 2 TPM'
        ),
        'norm_counts_DMSO_0d_3_TPM' => array(
            'color' => '#F8766D',
            'name' => 'DMSO 0d 3 TPM'
        ),
        'norm_counts_DMSO_0d_4_TPM' => array(
            'color' => '#F8766D',
            'name' => 'DMSO 0d 4 TPM'
        ),
        'norm_counts_DMSO_0d_5_TPM' => array(
            'color' => '#F8766D',
            'name' => 'DMSO 0d 5 TPM'
        ),
        'norm_counts_DMSO_0d_6_TPM' => array(
            'color' => '#F8766D',
            'name' => 'DMSO 0d 6 TPM'
        ),
        'norm_counts_DMSO_1d_1_TPM' => array(
            'color' => '#DE8C00',
            'name' => 'DMSO 1d 1 TPM'
        ),
        'norm_counts_DMSO_1d_2_TPM' => array(
            'color' => '#DE8C00',
            'name' => 'DMSO 1d 2 TPM'
        ),
        'norm_counts_DMSO_1d_3_TPM' => array(
            'color' => '#DE8C00',
            'name' => 'DMSO 1d 3 TPM'
        ),
        'norm_counts_DMSO_1d_4_TPM' => array(
            'color' => '#DE8C00',
            'name' => 'DMSO 1d 4 TPM'
        ),
        'norm_counts_DMSO_2d_1_TPM' => array(
            'color' => '#CD9600',
            'name' => 'DMSO 2d 1 TPM'
        ),
        'norm_counts_DMSO_2d_2_TPM' => array(
            'color' => '#CD9600',
            'name' => 'DMSO 2d 2 TPM'
        ),
        'norm_counts_DMSO_2d_3_TPM' => array(
            'color' => '#CD9600',
            'name' => 'DMSO 2d 3 TPM'
        ),
        'norm_counts_DMSO_2d_4_TPM' => array(
            'color' => '#CD9600',
            'name' => 'DMSO 2d 4 TPM'
        ),
        'norm_counts_DMSO_3d_1_TPM' => array(
            'color' => '#B79F00',
            'name' => 'DMSO 3d 1 TPM'
        ),
        'norm_counts_DMSO_3d_2_TPM' => array(
            'color' => '#B79F00',
            'name' => 'DMSO 3d 2 TPM'
        ),
        'norm_counts_DMSO_3d_3_TPM' => array(
            'color' => '#B79F00',
            'name' => 'DMSO 3d 3 TPM'
        ),
        'norm_counts_DMSO_3d_4_TPM' => array(
            'color' => '#B79F00',
            'name' => 'DMSO 3d 4 TPM'
        ),
        'norm_counts_DMSO_7d_1_TPM' => array(
            'color' => '#9DA700',
            'name' => 'DMSO 7d 1 TPM'
        ),
        'norm_counts_DMSO_7d_2_TPM' => array(
            'color' => '#9DA700',
            'name' => 'DMSO 7d 2 TPM'
        ),
        'norm_counts_DMSO_7d_3_TPM' => array(
            'color' => '#9DA700',
            'name' => 'DMSO 7d 3 TPM'
        ),
        'norm_counts_DMSO_7d_4_TPM' => array(
            'color' => '#9DA700',
            'name' => 'DMSO 7d 4 TPM'
        ),
        'norm_counts_DMSO_14d_2_TPM' => array(
            'color' => '#ED813E',
            'name' => 'DMSO 14d 2 TPM'
        ),
        'norm_counts_DMSO_14d_3_TPM' => array(
            'color' => '#ED813E',
            'name' => 'DMSO 14d 3 TPM'
        ),
        'norm_counts_DMSO_14d_4_TPM' => array(
            'color' => '#ED813E',
            'name' => 'DMSO 14d 4 TPM'
        ),
        'norm_counts_Monolayer_0d_1_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'Monolayer 0d 1 TPM'
        ),
        'norm_counts_Monolayer_0d_2_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'Monolayer 0d 2 TPM'
        ),
        'norm_counts_Monolayer_0d_3_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'Monolayer 0d 3 TPM'
        ),
        'norm_counts_Monolayer_0d_4_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'Monolayer 0d 4 TPM'
        ),
        'norm_counts_Monolayer_1d_1_TPM' => array(
            'color' => '#00BA38',
            'name' => 'Monolayer 1d 1 TPM'
        ),
        'norm_counts_Monolayer_1d_2_TPM' => array(
            'color' => '#00BA38',
            'name' => 'Monolayer 1d 2 TPM'
        ),
        'norm_counts_Monolayer_1d_3_TPM' => array(
            'color' => '#00BA38',
            'name' => 'Monolayer 1d 3 TPM'
        ),
        'norm_counts_Monolayer_1d_4_TPM' => array(
            'color' => '#00BA38',
            'name' => 'Monolayer 1d 4 TPM'
        ),
        'norm_counts_Monolayer_2d_1_TPM' => array(
            'color' => '#00BE67',
            'name' => 'Monolayer 2d 1 TPM'
        ),
        'norm_counts_Monolayer_2d_2_TPM' => array(
            'color' => '#00BE67',
            'name' => 'Monolayer 2d 2 TPM'
        ),
        'norm_counts_Monolayer_2d_3_TPM' => array(
            'color' => '#00BE67',
            'name' => 'Monolayer 2d 3 TPM'
        ),
        'norm_counts_Monolayer_2d_4_TPM' => array(
            'color' => '#00BE67',
            'name' => 'Monolayer 2d 4 TPM'
        ),
        'norm_counts_Monolayer_3d_1_TPM' => array(
            'color' => '#00C08B',
            'name' => 'Monolayer 3d 1 TPM'
        ),
        'norm_counts_Monolayer_3d_2_TPM' => array(
            'color' => '#00C08B',
            'name' => 'Monolayer 3d 2 TPM'
        ),
        'norm_counts_Monolayer_3d_3_TPM' => array(
            'color' => '#00C08B',
            'name' => 'Monolayer 3d 3 TPM'
        ),
        'norm_counts_Monolayer_3d_4_TPM' => array(
            'color' => '#00C08B',
            'name' => 'Monolayer 3d 4 TPM'
        ),
        'norm_counts_Monolayer_7d_1_TPM' => array(
            'color' => '#00C1A9',
            'name' => 'Monolayer 7d 1 TPM'
        ),
        'norm_counts_Monolayer_7d_2_TPM' => array(
            'color' => '#00C1A9',
            'name' => 'Monolayer 7d 2 TPM'
        ),
        'norm_counts_Monolayer_7d_3_TPM' => array(
            'color' => '#00C1A9',
            'name' => 'Monolayer 7d 3 TPM'
        ),
        'norm_counts_Monolayer_7d_4_TPM' => array(
            'color' => '#00C1A9',
            'name' => 'Monolayer 7d 4 TPM'
        ),
        'norm_counts_Monolayer_14d_1_TPM' => array(
            'color' => '#49B500',
            'name' => 'Monolayer 14d 1 TPM'
        ),
        'norm_counts_Monolayer_14d_2_TPM' => array(
            'color' => '#49B500',
            'name' => 'Monolayer 14d 2 TPM'
        ),
        'norm_counts_Monolayer_14d_3_TPM' => array(
            'color' => '#49B500',
            'name' => 'Monolayer 14d 3 TPM'
        ),
        'norm_counts_Monolayer_14d_4_TPM' => array(
            'color' => '#49B500',
            'name' => 'Monolayer 14d 4 TPM'
        ),
        'norm_counts_Prad_0d_1_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'Prad 0d 1 TPM'
        ),
        'norm_counts_Prad_0d_2_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'Prad 0d 2 TPM'
        ),
        'norm_counts_Prad_0d_3_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'Prad 0d 3 TPM'
        ),
        'norm_counts_Prad_0d_4_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'Prad 0d 4 TPM'
        ),
        'norm_counts_Prad_1d_1_TPM' => array(
            'color' => '#00B4F0',
            'name' => 'Prad 1d 1 TPM'
        ),
        'norm_counts_Prad_1d_2_TPM' => array(
            'color' => '#00B4F0',
            'name' => 'Prad 1d 2 TPM'
        ),
        'norm_counts_Prad_1d_3_TPM' => array(
            'color' => '#00B4F0',
            'name' => 'Prad 1d 3 TPM'
        ),
        'norm_counts_Prad_1d_4_TPM' => array(
            'color' => '#00B4F0',
            'name' => 'Prad 1d 4 TPM'
        ),
        'norm_counts_Prad_2d_1_TPM' => array(
            'color' => '#00A9FF',
            'name' => 'Prad 2d 1 TPM'
        ),
        'norm_counts_Prad_2d_2_TPM' => array(
            'color' => '#00A9FF',
            'name' => 'Prad 2d 2 TPM'
        ),
        'norm_counts_Prad_2d_3_TPM' => array(
            'color' => '#00A9FF',
            'name' => 'Prad 2d 3 TPM'
        ),
        'norm_counts_Prad_2d_4_TPM' => array(
            'color' => '#00A9FF',
            'name' => 'Prad 2d 4 TPM'
        ),
        'norm_counts_Prad_3d_1_TPM' => array(
            'color' => '#619CFF',
            'name' => 'Prad 3d 1 TPM'
        ),
        'norm_counts_Prad_3d_2_TPM' => array(
            'color' => '#619CFF',
            'name' => 'Prad 3d 2 TPM'
        ),
        'norm_counts_Prad_3d_3_TPM' => array(
            'color' => '#619CFF',
            'name' => 'Prad 3d 3 TPM'
        ),
        'norm_counts_Prad_3d_4_TPM' => array(
            'color' => '#619CFF',
            'name' => 'Prad 3d 4 TPM'
        ),
        'norm_counts_Prad_7d_1_TPM' => array(
            'color' => '#9F8CFF',
            'name' => 'Prad 7d 1 TPM'
        ),
        'norm_counts_Prad_7d_2_TPM' => array(
            'color' => '#9F8CFF',
            'name' => 'Prad 7d 2 TPM'
        ),
        'norm_counts_Prad_7d_3_TPM' => array(
            'color' => '#9F8CFF',
            'name' => 'Prad 7d 3 TPM'
        ),
        'norm_counts_Prad_7d_4_TPM' => array(
            'color' => '#9F8CFF',
            'name' => 'Prad 7d 4 TPM'
        ),
        'norm_counts_Prad_14d_1_TPM' => array(
            'color' => '#00BBDC',
            'name' => 'Prad 14d 1 TPM'
        ),
        'norm_counts_Prad_14d_2_TPM' => array(
            'color' => '#00BBDC',
            'name' => 'Prad 14d 2 TPM'
        ),
        'norm_counts_Prad_14d_3_TPM' => array(
            'color' => '#00BBDC',
            'name' => 'Prad 14d 3 TPM'
        ),
        'norm_counts_Prad_14d_4_TPM' => array(
            'color' => '#00BBDC',
            'name' => 'Prad 14d 4 TPM'
        ),
        'norm_counts_TMZ_0d_1_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'TMZ 0d 1 TPM'
        ),
        'norm_counts_TMZ_0d_2_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'TMZ 0d 2 TPM'
        ),
        'norm_counts_TMZ_0d_3_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'TMZ 0d 3 TPM'
        ),
        'norm_counts_TMZ_0d_4_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'TMZ 0d 4 TPM'
        ),
        'norm_counts_TMZ_1d_1_TPM' => array(
            'color' => '#F564E3',
            'name' => 'TMZ 1d 1 TPM'
        ),
        'norm_counts_TMZ_1d_2_TPM' => array(
            'color' => '#F564E3',
            'name' => 'TMZ 1d 2 TPM'
        ),
        'norm_counts_TMZ_1d_3_TPM' => array(
            'color' => '#F564E3',
            'name' => 'TMZ 1d 3 TPM'
        ),
        'norm_counts_TMZ_1d_4_TPM' => array(
            'color' => '#F564E3',
            'name' => 'TMZ 1d 4 TPM'
        ),
        'norm_counts_TMZ_2d_1_TPM' => array(
            'color' => '#FF61CC',
            'name' => 'TMZ 2d 1 TPM'
        ),
        'norm_counts_TMZ_2d_2_TPM' => array(
            'color' => '#FF61CC',
            'name' => 'TMZ 2d 2 TPM'
        ),
        'norm_counts_TMZ_2d_3_TPM' => array(
            'color' => '#FF61CC',
            'name' => 'TMZ 2d 3 TPM'
        ),
        'norm_counts_TMZ_2d_4_TPM' => array(
            'color' => '#FF61CC',
            'name' => 'TMZ 2d 4 TPM'
        ),
        'norm_counts_TMZ_3d_1_TPM' => array(
            'color' => '#FF64B0',
            'name' => 'TMZ 3d 1 TPM'
        ),
        'norm_counts_TMZ_3d_2_TPM' => array(
            'color' => '#FF64B0',
            'name' => 'TMZ 3d 2 TPM'
        ),
        'norm_counts_TMZ_3d_3_TPM' => array(
            'color' => '#FF64B0',
            'name' => 'TMZ 3d 3 TPM'
        ),
        'norm_counts_TMZ_3d_4_TPM' => array(
            'color' => '#FF64B0',
            'name' => 'TMZ 3d 4 TPM'
        ),
        'norm_counts_TMZ_7d_1_TPM' => array(
            'color' => '#FF6C91',
            'name' => 'TMZ 7d 1 TPM'
        ),
        'norm_counts_TMZ_7d_2_TPM' => array(
            'color' => '#FF6C91',
            'name' => 'TMZ 7d 2 TPM'
        ),
        'norm_counts_TMZ_7d_3_TPM' => array(
            'color' => '#FF6C91',
            'name' => 'TMZ 7d 3 TPM'
        ),
        'norm_counts_TMZ_7d_4_TPM' => array(
            'color' => '#FF6C91',
            'name' => 'TMZ 7d 4 TPM'
        ),
        'norm_counts_TMZ_14d_1_TPM' => array(
            'color' => '#E36EF6',
            'name' => 'TMZ 14d 1 TPM'
        ),
        'norm_counts_TMZ_14d_2_TPM' => array(
            'color' => '#E36EF6',
            'name' => 'TMZ 14d 2 TPM'
        ),
        'norm_counts_TMZ_14d_3_TPM' => array(
            'color' => '#E36EF6',
            'name' => 'TMZ 14d 3 TPM'
        ),
        'norm_counts_TMZ_14d_4_TPM' => array(
            'color' => '#E36EF6',
            'name' => 'TMZ 14d 4 TPM'
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
    'timepoint_array' => array(0,1,2,3,7,14),
    'datasets' => array(
'DMSO' => array(
    'color' => '#009900',
    'sample_group' => array(
'DMSO_0d' => array(
    'timepoint' =>  0,
    'sampleDbCols' =>  array(
'norm_counts_DMSO_0d_1_TPM','norm_counts_DMSO_0d_2_TPM','norm_counts_DMSO_0d_3_TPM','norm_counts_DMSO_0d_4_TPM','norm_counts_DMSO_0d_5_TPM','norm_counts_DMSO_0d_6_TPM'
)),
'DMSO_1d' => array(
    'timepoint' =>  1,
    'sampleDbCols' =>  array(
'norm_counts_DMSO_1d_1_TPM','norm_counts_DMSO_1d_2_TPM','norm_counts_DMSO_1d_3_TPM','norm_counts_DMSO_1d_4_TPM'
)),
'DMSO_2d' => array(
    'timepoint' =>  2,
    'sampleDbCols' =>  array(
'norm_counts_DMSO_2d_1_TPM','norm_counts_DMSO_2d_2_TPM','norm_counts_DMSO_2d_3_TPM','norm_counts_DMSO_2d_4_TPM'
)),
'DMSO_3d' => array(
    'timepoint' =>  3,
    'sampleDbCols' =>  array(
'norm_counts_DMSO_3d_1_TPM','norm_counts_DMSO_3d_2_TPM','norm_counts_DMSO_3d_3_TPM','norm_counts_DMSO_3d_4_TPM'
)),
'DMSO_7d' => array(
    'timepoint' =>  7,
    'sampleDbCols' =>  array(
'norm_counts_DMSO_7d_1_TPM','norm_counts_DMSO_7d_2_TPM','norm_counts_DMSO_7d_3_TPM','norm_counts_DMSO_7d_4_TPM'
)),
'DMSO_14d' => array(
    'timepoint' =>  14,
    'sampleDbCols' =>  array(
'norm_counts_DMSO_14d_2_TPM','norm_counts_DMSO_14d_3_TPM','norm_counts_DMSO_14d_4_TPM'
)))),
'Monolayer' => array(
    'color' => 'black',
    'sample_group' => array(
'Monolayer_0d' => array(
    'timepoint' =>  0,
    'sampleDbCols' =>  array(
'norm_counts_Monolayer_0d_1_TPM','norm_counts_Monolayer_0d_2_TPM','norm_counts_Monolayer_0d_3_TPM','norm_counts_Monolayer_0d_4_TPM'
)),
'Monolayer_1d' => array(
    'timepoint' =>  1,
    'sampleDbCols' =>  array(
'norm_counts_Monolayer_1d_1_TPM','norm_counts_Monolayer_1d_2_TPM','norm_counts_Monolayer_1d_3_TPM','norm_counts_Monolayer_1d_4_TPM'
)),
'Monolayer_2d' => array(
    'timepoint' =>  2,
    'sampleDbCols' =>  array(
'norm_counts_Monolayer_2d_1_TPM','norm_counts_Monolayer_2d_2_TPM','norm_counts_Monolayer_2d_3_TPM','norm_counts_Monolayer_2d_4_TPM'
)),
'Monolayer_3d' => array(
    'timepoint' =>  3,
    'sampleDbCols' =>  array(
'norm_counts_Monolayer_3d_1_TPM','norm_counts_Monolayer_3d_2_TPM','norm_counts_Monolayer_3d_3_TPM','norm_counts_Monolayer_3d_4_TPM'
)),
'Monolayer_7d' => array(
    'timepoint' =>  7,
    'sampleDbCols' =>  array(
'norm_counts_Monolayer_7d_1_TPM','norm_counts_Monolayer_7d_2_TPM','norm_counts_Monolayer_7d_3_TPM','norm_counts_Monolayer_7d_4_TPM'
)),
'Monolayer_14d' => array(
    'timepoint' =>  14,
    'sampleDbCols' =>  array(
'norm_counts_Monolayer_14d_1_TPM','norm_counts_Monolayer_14d_2_TPM','norm_counts_Monolayer_14d_3_TPM','norm_counts_Monolayer_14d_4_TPM'
)))),
'Prad' => array(
    'color' => '#FF0000',
    'sample_group' => array(
'Prad_0d' => array(
    'timepoint' =>  0,
    'sampleDbCols' =>  array(
'norm_counts_Prad_0d_1_TPM','norm_counts_Prad_0d_2_TPM','norm_counts_Prad_0d_3_TPM','norm_counts_Prad_0d_4_TPM'
)),
'Prad_1d' => array(
    'timepoint' =>  1,
    'sampleDbCols' =>  array(
'norm_counts_Prad_1d_1_TPM','norm_counts_Prad_1d_2_TPM','norm_counts_Prad_1d_3_TPM','norm_counts_Prad_1d_4_TPM'
)),
'Prad_2d' => array(
    'timepoint' =>  2,
    'sampleDbCols' =>  array(
'norm_counts_Prad_2d_1_TPM','norm_counts_Prad_2d_2_TPM','norm_counts_Prad_2d_3_TPM','norm_counts_Prad_2d_4_TPM'
)),
'Prad_3d' => array(
    'timepoint' =>  3,
    'sampleDbCols' =>  array(
'norm_counts_Prad_3d_1_TPM','norm_counts_Prad_3d_2_TPM','norm_counts_Prad_3d_3_TPM','norm_counts_Prad_3d_4_TPM'
)),
'Prad_7d' => array(
    'timepoint' =>  7,
    'sampleDbCols' =>  array(
'norm_counts_Prad_7d_1_TPM','norm_counts_Prad_7d_2_TPM','norm_counts_Prad_7d_3_TPM','norm_counts_Prad_7d_4_TPM'
)),
'Prad_14d' => array(
    'timepoint' =>  14,
    'sampleDbCols' =>  array(
'norm_counts_Prad_14d_1_TPM','norm_counts_Prad_14d_2_TPM','norm_counts_Prad_14d_3_TPM','norm_counts_Prad_14d_4_TPM'
)))),
'TMZ' => array(
    'color' => 'orange',
    'sample_group' => array(
'TMZ_0d' => array(
    'timepoint' =>  0,
    'sampleDbCols' =>  array(
'norm_counts_TMZ_0d_1_TPM','norm_counts_TMZ_0d_2_TPM','norm_counts_TMZ_0d_3_TPM','norm_counts_TMZ_0d_4_TPM'
)),
'TMZ_1d' => array(
    'timepoint' =>  1,
    'sampleDbCols' =>  array(
'norm_counts_TMZ_1d_1_TPM','norm_counts_TMZ_1d_2_TPM','norm_counts_TMZ_1d_3_TPM','norm_counts_TMZ_1d_4_TPM'
)),
'TMZ_2d' => array(
    'timepoint' =>  2,
    'sampleDbCols' =>  array(
'norm_counts_TMZ_2d_1_TPM','norm_counts_TMZ_2d_2_TPM','norm_counts_TMZ_2d_3_TPM','norm_counts_TMZ_2d_4_TPM'
)),
'TMZ_3d' => array(
    'timepoint' =>  3,
    'sampleDbCols' =>  array(
'norm_counts_TMZ_3d_1_TPM','norm_counts_TMZ_3d_2_TPM','norm_counts_TMZ_3d_3_TPM','norm_counts_TMZ_3d_4_TPM'
)),
'TMZ_7d' => array(
    'timepoint' =>  7,
    'sampleDbCols' =>  array(
'norm_counts_TMZ_7d_1_TPM','norm_counts_TMZ_7d_2_TPM','norm_counts_TMZ_7d_3_TPM','norm_counts_TMZ_7d_4_TPM'
)),
'TMZ_14d' => array(
    'timepoint' =>  14,
    'sampleDbCols' =>  array(
'norm_counts_TMZ_14d_1_TPM','norm_counts_TMZ_14d_2_TPM','norm_counts_TMZ_14d_3_TPM','norm_counts_TMZ_14d_4_TPM'
)))))),
// New End: Timecourse
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_DMSO_0d_1_TPM','lg2_avg_DMSO_0d_2_TPM','lg2_avg_DMSO_0d_3_TPM','lg2_avg_DMSO_0d_4_TPM','lg2_avg_DMSO_0d_5_TPM','lg2_avg_DMSO_0d_6_TPM','lg2_avg_DMSO_1d_1_TPM','lg2_avg_DMSO_1d_2_TPM','lg2_avg_DMSO_1d_3_TPM','lg2_avg_DMSO_1d_4_TPM','lg2_avg_DMSO_2d_1_TPM','lg2_avg_DMSO_2d_2_TPM','lg2_avg_DMSO_2d_3_TPM','lg2_avg_DMSO_2d_4_TPM','lg2_avg_DMSO_3d_1_TPM','lg2_avg_DMSO_3d_2_TPM','lg2_avg_DMSO_3d_3_TPM','lg2_avg_DMSO_3d_4_TPM','lg2_avg_DMSO_7d_1_TPM','lg2_avg_DMSO_7d_2_TPM','lg2_avg_DMSO_7d_3_TPM','lg2_avg_DMSO_7d_4_TPM','lg2_avg_DMSO_14d_2_TPM','lg2_avg_DMSO_14d_3_TPM','lg2_avg_DMSO_14d_4_TPM','lg2_avg_Monolayer_0d_1_TPM','lg2_avg_Monolayer_0d_2_TPM','lg2_avg_Monolayer_0d_3_TPM','lg2_avg_Monolayer_0d_4_TPM','lg2_avg_Monolayer_1d_1_TPM','lg2_avg_Monolayer_1d_2_TPM','lg2_avg_Monolayer_1d_3_TPM','lg2_avg_Monolayer_1d_4_TPM','lg2_avg_Monolayer_2d_1_TPM','lg2_avg_Monolayer_2d_2_TPM','lg2_avg_Monolayer_2d_3_TPM','lg2_avg_Monolayer_2d_4_TPM','lg2_avg_Monolayer_3d_1_TPM','lg2_avg_Monolayer_3d_2_TPM','lg2_avg_Monolayer_3d_3_TPM','lg2_avg_Monolayer_3d_4_TPM','lg2_avg_Monolayer_7d_1_TPM','lg2_avg_Monolayer_7d_2_TPM','lg2_avg_Monolayer_7d_3_TPM','lg2_avg_Monolayer_7d_4_TPM','lg2_avg_Monolayer_14d_1_TPM','lg2_avg_Monolayer_14d_2_TPM','lg2_avg_Monolayer_14d_3_TPM','lg2_avg_Monolayer_14d_4_TPM','lg2_avg_Prad_0d_1_TPM','lg2_avg_Prad_0d_2_TPM','lg2_avg_Prad_0d_3_TPM','lg2_avg_Prad_0d_4_TPM','lg2_avg_Prad_1d_1_TPM','lg2_avg_Prad_1d_2_TPM','lg2_avg_Prad_1d_3_TPM','lg2_avg_Prad_1d_4_TPM','lg2_avg_Prad_2d_1_TPM','lg2_avg_Prad_2d_2_TPM','lg2_avg_Prad_2d_3_TPM','lg2_avg_Prad_2d_4_TPM','lg2_avg_Prad_3d_1_TPM','lg2_avg_Prad_3d_2_TPM','lg2_avg_Prad_3d_3_TPM','lg2_avg_Prad_3d_4_TPM','lg2_avg_Prad_7d_1_TPM','lg2_avg_Prad_7d_2_TPM','lg2_avg_Prad_7d_3_TPM','lg2_avg_Prad_7d_4_TPM','lg2_avg_Prad_14d_1_TPM','lg2_avg_Prad_14d_2_TPM','lg2_avg_Prad_14d_3_TPM','lg2_avg_Prad_14d_4_TPM','lg2_avg_TMZ_0d_1_TPM','lg2_avg_TMZ_0d_2_TPM','lg2_avg_TMZ_0d_3_TPM','lg2_avg_TMZ_0d_4_TPM','lg2_avg_TMZ_1d_1_TPM','lg2_avg_TMZ_1d_2_TPM','lg2_avg_TMZ_1d_3_TPM','lg2_avg_TMZ_1d_4_TPM','lg2_avg_TMZ_2d_1_TPM','lg2_avg_TMZ_2d_2_TPM','lg2_avg_TMZ_2d_3_TPM','lg2_avg_TMZ_2d_4_TPM','lg2_avg_TMZ_3d_1_TPM','lg2_avg_TMZ_3d_2_TPM','lg2_avg_TMZ_3d_3_TPM','lg2_avg_TMZ_3d_4_TPM','lg2_avg_TMZ_7d_1_TPM','lg2_avg_TMZ_7d_2_TPM','lg2_avg_TMZ_7d_3_TPM','lg2_avg_TMZ_7d_4_TPM','lg2_avg_TMZ_14d_1_TPM','lg2_avg_TMZ_14d_2_TPM','lg2_avg_TMZ_14d_3_TPM','lg2_avg_TMZ_14d_4_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_DMSO_3d_vs_Monolayer_3d' => array(
            'name' => 'logFC DMSO 3d vs Monolayer 3d',
            'slider_min' => -3,
            'slider_max' => 6,
            'default_low' => -3,
            'default_high' => 6
        ),
        'contrast_1_padj_DMSO_3d_vs_Monolayer_3d' => array(
            'name' => 'padj DMSO 3d vs Monolayer 3d',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_DMSO_3d_vs_Prad_3d' => array(
            'name' => 'logFC DMSO 3d vs Prad 3d',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_2_padj_DMSO_3d_vs_Prad_3d' => array(
            'name' => 'padj DMSO 3d vs Prad 3d',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_DMSO_3d_vs_TMZ_3d' => array(
            'name' => 'logFC DMSO 3d vs TMZ 3d',
            'slider_min' => -2,
            'slider_max' => 3,
            'default_low' => -2,
            'default_high' => 3
        ),
        'contrast_3_padj_DMSO_3d_vs_TMZ_3d' => array(
            'name' => 'padj DMSO 3d vs TMZ 3d',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_logFC_DMSO_14d_vs_Monolayer_14d' => array(
            'name' => 'logFC DMSO 14d vs Monolayer 14d',
            'slider_min' => -4,
            'slider_max' => 5,
            'default_low' => -4,
            'default_high' => 5
        ),
        'contrast_4_padj_DMSO_14d_vs_Monolayer_14d' => array(
            'name' => 'padj DMSO 14d vs Monolayer 14d',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_5_logFC_DMSO_14d_vs_Prad_14d' => array(
            'name' => 'logFC DMSO 14d vs Prad 14d',
            'slider_min' => -5,
            'slider_max' => 4,
            'default_low' => -5,
            'default_high' => 4
        ),
        'contrast_5_padj_DMSO_14d_vs_Prad_14d' => array(
            'name' => 'padj DMSO 14d vs Prad 14d',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_6_logFC_DMSO_14d_vs_TMZ_14d' => array(
            'name' => 'logFC DMSO 14d vs TMZ 14d',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_6_padj_DMSO_14d_vs_TMZ_14d' => array(
            'name' => 'padj DMSO 14d vs TMZ 14d',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_7_logFC_DMSO_0d_vs_Monolayer_14d' => array(
            'name' => 'logFC DMSO 0d vs Monolayer 14d',
            'slider_min' => -9,
            'slider_max' => 10,
            'default_low' => -9,
            'default_high' => 10
        ),
        'contrast_7_padj_DMSO_0d_vs_Monolayer_14d' => array(
            'name' => 'padj DMSO 0d vs Monolayer 14d',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_8_logFC_DMSO_0d_vs_Prad_14d' => array(
            'name' => 'logFC DMSO 0d vs Prad 14d',
            'slider_min' => -6,
            'slider_max' => 8,
            'default_low' => -6,
            'default_high' => 8
        ),
        'contrast_8_padj_DMSO_0d_vs_Prad_14d' => array(
            'name' => 'padj DMSO 0d vs Prad 14d',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_9_logFC_DMSO_0d_vs_TMZ_14d' => array(
            'name' => 'logFC DMSO 0d vs TMZ 14d',
            'slider_min' => -7,
            'slider_max' => 10,
            'default_low' => -7,
            'default_high' => 10
        ),
        'contrast_9_padj_DMSO_0d_vs_TMZ_14d' => array(
            'name' => 'padj DMSO 0d vs TMZ 14d',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_MGMT' => array(
            'name' => 'corCoef MGMT',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_TOP2A' => array(
            'name' => 'corCoef TOP2A',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_L_lg10p_LRT_timepoint' => array(
            'name' => 'lg10p LRT timepoint',
            'slider_min' => 0,
            'slider_max' => 308,
            'default_low' => 0,
            'default_high' => 308
        ),
        'contrast_L_lg10p_LRT_treatment' => array(
            'name' => 'lg10p LRT treatment',
            'slider_min' => 0,
            'slider_max' => 70,
            'default_low' => 0,
            'default_high' => 70
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'agl298_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_DMSO_3d_vs_Monolayer_3d',
        'default-y' => 'contrast_1_lg10p_DMSO_3d_vs_Monolayer_3d',
        'selection' => array(
            'contrast_1_logFC_DMSO_3d_vs_Monolayer_3d' => array(
                'name' => 'logFC DMSO 3d vs Monolayer 3d'
            ),
            'contrast_2_logFC_DMSO_3d_vs_Prad_3d' => array(
                'name' => 'logFC DMSO 3d vs Prad 3d'
            ),
            'contrast_3_logFC_DMSO_3d_vs_TMZ_3d' => array(
                'name' => 'logFC DMSO 3d vs TMZ 3d'
            ),
            'contrast_4_logFC_DMSO_14d_vs_Monolayer_14d' => array(
                'name' => 'logFC DMSO 14d vs Monolayer 14d'
            ),
            'contrast_5_logFC_DMSO_14d_vs_Prad_14d' => array(
                'name' => 'logFC DMSO 14d vs Prad 14d'
            ),
            'contrast_6_logFC_DMSO_14d_vs_TMZ_14d' => array(
                'name' => 'logFC DMSO 14d vs TMZ 14d'
            ),
            'contrast_7_logFC_DMSO_0d_vs_Monolayer_14d' => array(
                'name' => 'logFC DMSO 0d vs Monolayer 14d'
            ),
            'contrast_8_logFC_DMSO_0d_vs_Prad_14d' => array(
                'name' => 'logFC DMSO 0d vs Prad 14d'
            ),
            'contrast_9_logFC_DMSO_0d_vs_TMZ_14d' => array(
                'name' => 'logFC DMSO 0d vs TMZ 14d'
            ),
            'contrast_1_lg10p_DMSO_3d_vs_Monolayer_3d' => array(
                'name' => 'lg10p DMSO 3d vs Monolayer 3d'
            ),
            'contrast_2_lg10p_DMSO_3d_vs_Prad_3d' => array(
                'name' => 'lg10p DMSO 3d vs Prad 3d'
            ),
            'contrast_3_lg10p_DMSO_3d_vs_TMZ_3d' => array(
                'name' => 'lg10p DMSO 3d vs TMZ 3d'
            ),
            'contrast_4_lg10p_DMSO_14d_vs_Monolayer_14d' => array(
                'name' => 'lg10p DMSO 14d vs Monolayer 14d'
            ),
            'contrast_5_lg10p_DMSO_14d_vs_Prad_14d' => array(
                'name' => 'lg10p DMSO 14d vs Prad 14d'
            ),
            'contrast_6_lg10p_DMSO_14d_vs_TMZ_14d' => array(
                'name' => 'lg10p DMSO 14d vs TMZ 14d'
            ),
            'contrast_7_lg10p_DMSO_0d_vs_Monolayer_14d' => array(
                'name' => 'lg10p DMSO 0d vs Monolayer 14d'
            ),
            'contrast_8_lg10p_DMSO_0d_vs_Prad_14d' => array(
                'name' => 'lg10p DMSO 0d vs Prad 14d'
            ),
            'contrast_9_lg10p_DMSO_0d_vs_TMZ_14d' => array(
                'name' => 'lg10p DMSO 0d vs TMZ 14d'
            ),
            'contrast_L_lg10p_LRT_timepoint' => array(
                'name' => 'lg10p LRT timepoint'
            ),
            'contrast_L_lg10p_LRT_treatment' => array(
                'name' => 'lg10p LRT treatment'
            ),
            'add_venn_X_corCoef_MGMT' => array(
                'name' => 'corCoef MGMT'
            ),
            'add_venn_X_corCoef_TOP2A' => array(
                'name' => 'corCoef TOP2A'
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
            'contrast_1_lg2BaseMean_DMSO_3d_vs_Monolayer_3d' => array(
                'name' => 'lg2BaseMean DMSO 3d vs Monolayer 3d'
            ),
            'contrast_2_lg2BaseMean_DMSO_3d_vs_Prad_3d' => array(
                'name' => 'lg2BaseMean DMSO 3d vs Prad 3d'
            ),
            'contrast_3_lg2BaseMean_DMSO_3d_vs_TMZ_3d' => array(
                'name' => 'lg2BaseMean DMSO 3d vs TMZ 3d'
            ),
            'contrast_4_lg2BaseMean_DMSO_14d_vs_Monolayer_14d' => array(
                'name' => 'lg2BaseMean DMSO 14d vs Monolayer 14d'
            ),
            'contrast_5_lg2BaseMean_DMSO_14d_vs_Prad_14d' => array(
                'name' => 'lg2BaseMean DMSO 14d vs Prad 14d'
            ),
            'contrast_6_lg2BaseMean_DMSO_14d_vs_TMZ_14d' => array(
                'name' => 'lg2BaseMean DMSO 14d vs TMZ 14d'
            ),
            'contrast_7_lg2BaseMean_DMSO_0d_vs_Monolayer_14d' => array(
                'name' => 'lg2BaseMean DMSO 0d vs Monolayer 14d'
            ),
            'contrast_8_lg2BaseMean_DMSO_0d_vs_Prad_14d' => array(
                'name' => 'lg2BaseMean DMSO 0d vs Prad 14d'
            ),
            'contrast_9_lg2BaseMean_DMSO_0d_vs_TMZ_14d' => array(
                'name' => 'lg2BaseMean DMSO 0d vs TMZ 14d'
            ),
            'contrast_L_lg2BaseMean_LRT_timepoint' => array(
                'name' => 'lg2BaseMean LRT timepoint'
            ),
            'contrast_L_lg2BaseMean_LRT_treatment' => array(
                'name' => 'lg2BaseMean LRT treatment'
            )
        )
    )
//End scatterplot
);
