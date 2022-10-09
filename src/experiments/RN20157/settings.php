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
            'cat_table_name' => 'RN20157_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'RN20157_rna_seq_table',
    'primary_gene_symbol' => 'hgnc_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Dox_Day0_1_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Dox Day0 1 TPM'
        ),
        'norm_counts_Dox_Day0_2_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Dox Day0 2 TPM'
        ),
        'norm_counts_Dox_Day0_3_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Dox Day0 3 TPM'
        ),
        'norm_counts_UI_Day0_1_TPM' => array(
            'color' => '#00B9E3',
            'name' => 'UI Day0 1 TPM'
        ),
        'norm_counts_UI_Day0_2_TPM' => array(
            'color' => '#00B9E3',
            'name' => 'UI Day0 2 TPM'
        ),
        'norm_counts_UI_Day0_3_TPM' => array(
            'color' => '#00B9E3',
            'name' => 'UI Day0 3 TPM'
        ),
        'norm_counts_Dox_Day1_1_TPM' => array(
            'color' => '#D39200',
            'name' => 'Dox Day1 1 TPM'
        ),
        'norm_counts_Dox_Day1_2_TPM' => array(
            'color' => '#D39200',
            'name' => 'Dox Day1 2 TPM'
        ),
        'norm_counts_Dox_Day1_3_TPM' => array(
            'color' => '#D39200',
            'name' => 'Dox Day1 3 TPM'
        ),
        'norm_counts_UI_Day1_1_TPM' => array(
            'color' => '#619CFF',
            'name' => 'UI Day1 1 TPM'
        ),
        'norm_counts_UI_Day1_2_TPM' => array(
            'color' => '#619CFF',
            'name' => 'UI Day1 2 TPM'
        ),
        'norm_counts_UI_Day1_3_TPM' => array(
            'color' => '#619CFF',
            'name' => 'UI Day1 3 TPM'
        ),
        'norm_counts_Dox_Day2_1_TPM' => array(
            'color' => '#93AA00',
            'name' => 'Dox Day2 1 TPM'
        ),
        'norm_counts_Dox_Day2_2_TPM' => array(
            'color' => '#93AA00',
            'name' => 'Dox Day2 2 TPM'
        ),
        'norm_counts_Dox_Day2_3_TPM' => array(
            'color' => '#93AA00',
            'name' => 'Dox Day2 3 TPM'
        ),
        'norm_counts_UI_Day2_1_TPM' => array(
            'color' => '#DB72FB',
            'name' => 'UI Day2 1 TPM'
        ),
        'norm_counts_UI_Day2_2_TPM' => array(
            'color' => '#DB72FB',
            'name' => 'UI Day2 2 TPM'
        ),
        'norm_counts_UI_Day2_3_TPM' => array(
            'color' => '#DB72FB',
            'name' => 'UI Day2 3 TPM'
        ),
        'norm_counts_Dox_Day5_1_TPM' => array(
            'color' => '#00BA38',
            'name' => 'Dox Day5 1 TPM'
        ),
        'norm_counts_Dox_Day5_2_TPM' => array(
            'color' => '#00BA38',
            'name' => 'Dox Day5 2 TPM'
        ),
        'norm_counts_Dox_Day5_3_TPM' => array(
            'color' => '#00BA38',
            'name' => 'Dox Day5 3 TPM'
        ),
        'norm_counts_UI_Day5_1_TPM' => array(
            'color' => '#FF61C3',
            'name' => 'UI Day5 1 TPM'
        ),
        'norm_counts_UI_Day5_2_TPM' => array(
            'color' => '#FF61C3',
            'name' => 'UI Day5 2 TPM'
        ),
        'norm_counts_UI_Day5_3_TPM' => array(
            'color' => '#FF61C3',
            'name' => 'UI Day5 3 TPM'
        ),
        'norm_counts_Dox_p5_1_TPM' => array(
            'color' => '#00C19F',
            'name' => 'Dox p5 1 TPM'
        ),
        'norm_counts_Dox_p5_2_TPM' => array(
            'color' => '#00C19F',
            'name' => 'Dox p5 2 TPM'
        ),
        'norm_counts_Dox_p5_3_TPM' => array(
            'color' => '#00C19F',
            'name' => 'Dox p5 3 TPM'
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
    'timepoint_array' => array(0,1,2,5),
    'datasets' => array(
'Dox' => array(
    'color' => '#FF0000FF',
    'sample_group' => array(
'Dox_Day0' => array(
    'timepoint' =>  0,
    'sampleDbCols' =>  array(
'norm_counts_Dox_Day0_1_TPM','norm_counts_Dox_Day0_2_TPM','norm_counts_Dox_Day0_3_TPM'
)),
'Dox_Day1' => array(
    'timepoint' =>  1,
    'sampleDbCols' =>  array(
'norm_counts_Dox_Day1_1_TPM','norm_counts_Dox_Day1_2_TPM','norm_counts_Dox_Day1_3_TPM'
)),
'Dox_Day2' => array(
    'timepoint' =>  2,
    'sampleDbCols' =>  array(
'norm_counts_Dox_Day2_1_TPM','norm_counts_Dox_Day2_2_TPM','norm_counts_Dox_Day2_3_TPM'
)),
'Dox_Day5' => array(
    'timepoint' =>  5,
    'sampleDbCols' =>  array(
'norm_counts_Dox_Day5_1_TPM','norm_counts_Dox_Day5_2_TPM','norm_counts_Dox_Day5_3_TPM'
))
)),
'UI' => array(
    'color' => '#00FFFFFF',
    'sample_group' => array(
'UI_Day0' => array(
    'timepoint' =>  0,
    'sampleDbCols' =>  array(
'norm_counts_UI_Day0_1_TPM','norm_counts_UI_Day0_2_TPM','norm_counts_UI_Day0_3_TPM'
)),
'UI_Day1' => array(
    'timepoint' =>  1,
    'sampleDbCols' =>  array(
'norm_counts_UI_Day1_1_TPM','norm_counts_UI_Day1_2_TPM','norm_counts_UI_Day1_3_TPM'
)),
'UI_Day2' => array(
    'timepoint' =>  2,
    'sampleDbCols' =>  array(
'norm_counts_UI_Day2_1_TPM','norm_counts_UI_Day2_2_TPM','norm_counts_UI_Day2_3_TPM'
)),
'UI_Day5' => array(
    'timepoint' =>  5,
    'sampleDbCols' =>  array(
'norm_counts_UI_Day5_1_TPM','norm_counts_UI_Day5_2_TPM','norm_counts_UI_Day5_3_TPM'
)))))),
// New End: Timecourse
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Dox_Day0_1_TPM','lg2_avg_Dox_Day0_2_TPM','lg2_avg_Dox_Day0_3_TPM','lg2_avg_UI_Day0_1_TPM','lg2_avg_UI_Day0_2_TPM','lg2_avg_UI_Day0_3_TPM','lg2_avg_Dox_Day1_1_TPM','lg2_avg_Dox_Day1_2_TPM','lg2_avg_Dox_Day1_3_TPM','lg2_avg_UI_Day1_1_TPM','lg2_avg_UI_Day1_2_TPM','lg2_avg_UI_Day1_3_TPM','lg2_avg_Dox_Day2_1_TPM','lg2_avg_Dox_Day2_2_TPM','lg2_avg_Dox_Day2_3_TPM','lg2_avg_UI_Day2_1_TPM','lg2_avg_UI_Day2_2_TPM','lg2_avg_UI_Day2_3_TPM','lg2_avg_Dox_Day5_1_TPM','lg2_avg_Dox_Day5_2_TPM','lg2_avg_Dox_Day5_3_TPM','lg2_avg_UI_Day5_1_TPM','lg2_avg_UI_Day5_2_TPM','lg2_avg_UI_Day5_3_TPM','lg2_avg_Dox_p5_1_TPM','lg2_avg_Dox_p5_2_TPM','lg2_avg_Dox_p5_3_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_Dox_Day1_vs_UI_Day1' => array(
            'name' => 'logFC Dox Day1 vs UI Day1',
            'slider_min' => -2,
            'slider_max' => 6,
            'default_low' => -2,
            'default_high' => 6
        ),
        'contrast_1_padj_Dox_Day1_vs_UI_Day1' => array(
            'name' => 'padj Dox Day1 vs UI Day1',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_Dox_Day2_vs_UI_Day2' => array(
            'name' => 'logFC Dox Day2 vs UI Day2',
            'slider_min' => -3,
            'slider_max' => 5,
            'default_low' => -3,
            'default_high' => 5
        ),
        'contrast_2_padj_Dox_Day2_vs_UI_Day2' => array(
            'name' => 'padj Dox Day2 vs UI Day2',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_Dox_Day5_vs_UI_Day5' => array(
            'name' => 'logFC Dox Day5 vs UI Day5',
            'slider_min' => -8,
            'slider_max' => 11,
            'default_low' => -8,
            'default_high' => 11
        ),
        'contrast_3_padj_Dox_Day5_vs_UI_Day5' => array(
            'name' => 'padj Dox Day5 vs UI Day5',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_logFC_Dox_p5_vs_Dox_Day0' => array(
            'name' => 'logFC Dox p5 vs Dox Day0',
            'slider_min' => -10,
            'slider_max' => 13,
            'default_low' => -10,
            'default_high' => 13
        ),
        'contrast_4_padj_Dox_p5_vs_Dox_Day0' => array(
            'name' => 'padj Dox p5 vs Dox Day0',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_5_logFC_Dox_D_vs_UI' => array(
            'name' => 'logFC Dox D vs UI',
            'slider_min' => -2,
            'slider_max' => 4,
            'default_low' => -2,
            'default_high' => 4
        ),
        'contrast_5_padj_Dox_D_vs_UI' => array(
            'name' => 'padj Dox D vs UI',
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
        'contrast_L_lg10p_LRT_Treatment' => array(
            'name' => 'lg10p LRT Treatment',
            'slider_min' => 0,
            'slider_max' => 67,
            'default_low' => 0,
            'default_high' => 67
        ),
        'contrast_L_lg10p_LRT_timepoint' => array(
            'name' => 'lg10p LRT timepoint',
            'slider_min' => 0,
            'slider_max' => 321,
            'default_low' => 0,
            'default_high' => 321
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'RN20157_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_Dox_Day1_vs_UI_Day1',
        'default-y' => 'contrast_1_lg10p_Dox_Day1_vs_UI_Day1',
        'selection' => array(
            'contrast_1_logFC_Dox_Day1_vs_UI_Day1' => array(
                'name' => 'logFC Dox Day1 vs UI Day1'
            ),
            'contrast_2_logFC_Dox_Day2_vs_UI_Day2' => array(
                'name' => 'logFC Dox Day2 vs UI Day2'
            ),
            'contrast_3_logFC_Dox_Day5_vs_UI_Day5' => array(
                'name' => 'logFC Dox Day5 vs UI Day5'
            ),
            'contrast_4_logFC_Dox_p5_vs_Dox_Day0' => array(
                'name' => 'logFC Dox p5 vs Dox Day0'
            ),
            'contrast_5_logFC_Dox_D_vs_UI' => array(
                'name' => 'logFC Dox D vs UI'
            ),
            'contrast_1_lg10p_Dox_Day1_vs_UI_Day1' => array(
                'name' => 'lg10p Dox Day1 vs UI Day1'
            ),
            'contrast_2_lg10p_Dox_Day2_vs_UI_Day2' => array(
                'name' => 'lg10p Dox Day2 vs UI Day2'
            ),
            'contrast_3_lg10p_Dox_Day5_vs_UI_Day5' => array(
                'name' => 'lg10p Dox Day5 vs UI Day5'
            ),
            'contrast_4_lg10p_Dox_p5_vs_Dox_Day0' => array(
                'name' => 'lg10p Dox p5 vs Dox Day0'
            ),
            'contrast_5_lg10p_Dox_D_vs_UI' => array(
                'name' => 'lg10p Dox D vs UI'
            ),
            'contrast_L_lg10p_LRT_Treatment' => array(
                'name' => 'lg10p LRT Treatment'
            ),
            'contrast_L_lg10p_LRT_timepoint' => array(
                'name' => 'lg10p LRT timepoint'
            ),
            'add_venn_X_corCoef_GATA3' => array(
                'name' => 'corCoef GATA3'
            ),
            'add_venn_X_corCoef_KLF17' => array(
                'name' => 'corCoef KLF17'
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
            'contrast_1_lg2BaseMean_Dox_Day1_vs_UI_Day1' => array(
                'name' => 'lg2BaseMean Dox Day1 vs UI Day1'
            ),
            'contrast_2_lg2BaseMean_Dox_Day2_vs_UI_Day2' => array(
                'name' => 'lg2BaseMean Dox Day2 vs UI Day2'
            ),
            'contrast_3_lg2BaseMean_Dox_Day5_vs_UI_Day5' => array(
                'name' => 'lg2BaseMean Dox Day5 vs UI Day5'
            ),
            'contrast_4_lg2BaseMean_Dox_p5_vs_Dox_Day0' => array(
                'name' => 'lg2BaseMean Dox p5 vs Dox Day0'
            ),
            'contrast_5_lg2BaseMean_Dox_D_vs_UI' => array(
                'name' => 'lg2BaseMean Dox D vs UI'
            ),
            'contrast_L_lg2BaseMean_LRT_Treatment' => array(
                'name' => 'lg2BaseMean LRT Treatment'
            ),
            'contrast_L_lg2BaseMean_LRT_timepoint' => array(
                'name' => 'lg2BaseMean LRT timepoint'
            )
        )
    )
//End scatterplot
);
