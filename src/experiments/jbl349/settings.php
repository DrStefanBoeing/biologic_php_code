<?php

return array(
    'lab' => array(
        'name' => 'Briscoe DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'jbl_data',
    'data_db' => array(
            'cat_table_name' => 'jbl349_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'jbl349_rna_seq_table',
    'primary_gene_symbol' => 'hgnc_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Flat_D1_A_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Flat D1 A TPM'
        ),
        'norm_counts_Flat_D1_B_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Flat D1 B TPM'
        ),
        'norm_counts_Flat_D1_C_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Flat D1 C TPM'
        ),
        'norm_counts_Flat_D3_A_TPM' => array(
            'color' => '#39B600',
            'name' => 'Flat D3 A TPM'
        ),
        'norm_counts_Flat_D3_B_TPM' => array(
            'color' => '#39B600',
            'name' => 'Flat D3 B TPM'
        ),
        'norm_counts_Flat_D3_C_TPM' => array(
            'color' => '#39B600',
            'name' => 'Flat D3 C TPM'
        ),
        'norm_counts_Flat_D7_A_TPM' => array(
            'color' => '#00BF7D',
            'name' => 'Flat D7 A TPM'
        ),
        'norm_counts_Flat_D7_B_TPM' => array(
            'color' => '#00BF7D',
            'name' => 'Flat D7 B TPM'
        ),
        'norm_counts_Flat_D7_C_TPM' => array(
            'color' => '#00BF7D',
            'name' => 'Flat D7 C TPM'
        ),
        'norm_counts_Flat_D14_A_TPM' => array(
            'color' => '#D89000',
            'name' => 'Flat D14 A TPM'
        ),
        'norm_counts_Flat_D14_B_TPM' => array(
            'color' => '#D89000',
            'name' => 'Flat D14 B TPM'
        ),
        'norm_counts_Flat_D14_C_TPM' => array(
            'color' => '#D89000',
            'name' => 'Flat D14 C TPM'
        ),
        'norm_counts_Flat_D21_A_TPM' => array(
            'color' => '#A3A500',
            'name' => 'Flat D21 A TPM'
        ),
        'norm_counts_Flat_D21_B_TPM' => array(
            'color' => '#A3A500',
            'name' => 'Flat D21 B TPM'
        ),
        'norm_counts_Flat_D21_C_TPM' => array(
            'color' => '#A3A500',
            'name' => 'Flat D21 C TPM'
        ),
        'norm_counts_nN_D1_A_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'nN D1 A TPM'
        ),
        'norm_counts_nN_D1_B_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'nN D1 B TPM'
        ),
        'norm_counts_nN_D1_C_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'nN D1 C TPM'
        ),
        'norm_counts_nN_D3_A_TPM' => array(
            'color' => '#E76BF3',
            'name' => 'nN D3 A TPM'
        ),
        'norm_counts_nN_D3_B_TPM' => array(
            'color' => '#E76BF3',
            'name' => 'nN D3 B TPM'
        ),
        'norm_counts_nN_D3_C_TPM' => array(
            'color' => '#E76BF3',
            'name' => 'nN D3 C TPM'
        ),
        'norm_counts_nN_D7_A_TPM' => array(
            'color' => '#FF62BC',
            'name' => 'nN D7 A TPM'
        ),
        'norm_counts_nN_D7_B_TPM' => array(
            'color' => '#FF62BC',
            'name' => 'nN D7 B TPM'
        ),
        'norm_counts_nN_D7_C_TPM' => array(
            'color' => '#FF62BC',
            'name' => 'nN D7 C TPM'
        ),
        'norm_counts_nN_D14_A_TPM' => array(
            'color' => '#00B0F6',
            'name' => 'nN D14 A TPM'
        ),
        'norm_counts_nN_D14_B_TPM' => array(
            'color' => '#00B0F6',
            'name' => 'nN D14 B TPM'
        ),
        'norm_counts_nN_D14_C_TPM' => array(
            'color' => '#00B0F6',
            'name' => 'nN D14 C TPM'
        ),
        'norm_counts_nN_D21_A_TPM' => array(
            'color' => '#9590FF',
            'name' => 'nN D21 A TPM'
        ),
        'norm_counts_nN_D21_B_TPM' => array(
            'color' => '#9590FF',
            'name' => 'nN D21 B TPM'
        ),
        'norm_counts_nN_D21_C_TPM' => array(
            'color' => '#9590FF',
            'name' => 'nN D21 C TPM'
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
    'timepoint_array' => array(1,3,7,14,21),
    'datasets' => array(
'Flat' => array(
    'color' => '#009900',
    'sample_group' => array(
'Flat_D1' => array(
    'timepoint' =>  1,
    'sampleDbCols' =>  array(
'norm_counts_Flat_D1_A_TPM','norm_counts_Flat_D1_B_TPM','norm_counts_Flat_D1_C_TPM'
)),
'Flat_D3' => array(
    'timepoint' =>  3,
    'sampleDbCols' =>  array(
'norm_counts_Flat_D3_A_TPM','norm_counts_Flat_D3_B_TPM','norm_counts_Flat_D3_C_TPM'
)),
'Flat_D7' => array(
    'timepoint' =>  7,
    'sampleDbCols' =>  array(
'norm_counts_Flat_D7_A_TPM','norm_counts_Flat_D7_B_TPM','norm_counts_Flat_D7_C_TPM'
)),
'Flat_D14' => array(
    'timepoint' =>  14,
    'sampleDbCols' =>  array(
'norm_counts_Flat_D14_A_TPM','norm_counts_Flat_D14_B_TPM','norm_counts_Flat_D14_C_TPM'
)),
'Flat_D21' => array(
    'timepoint' =>  21,
    'sampleDbCols' =>  array(
'norm_counts_Flat_D21_A_TPM','norm_counts_Flat_D21_B_TPM','norm_counts_Flat_D21_C_TPM'
)))),
'nN' => array(
    'color' => '#000000',
    'sample_group' => array(
'nN_D1' => array(
    'timepoint' =>  1,
    'sampleDbCols' =>  array(
'norm_counts_nN_D1_A_TPM','norm_counts_nN_D1_B_TPM','norm_counts_nN_D1_C_TPM'
)),
'nN_D3' => array(
    'timepoint' =>  3,
    'sampleDbCols' =>  array(
'norm_counts_nN_D3_A_TPM','norm_counts_nN_D3_B_TPM','norm_counts_nN_D3_C_TPM'
)),
'nN_D7' => array(
    'timepoint' =>  7,
    'sampleDbCols' =>  array(
'norm_counts_nN_D7_A_TPM','norm_counts_nN_D7_B_TPM','norm_counts_nN_D7_C_TPM'
)),
'nN_D14' => array(
    'timepoint' =>  14,
    'sampleDbCols' =>  array(
'norm_counts_nN_D14_A_TPM','norm_counts_nN_D14_B_TPM','norm_counts_nN_D14_C_TPM'
)),
'nN_D21' => array(
    'timepoint' =>  21,
    'sampleDbCols' =>  array(
'norm_counts_nN_D21_A_TPM','norm_counts_nN_D21_B_TPM','norm_counts_nN_D21_C_TPM'
)))))),
// New End: Timecourse
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Flat_D1_A_TPM','lg2_avg_Flat_D1_B_TPM','lg2_avg_Flat_D1_C_TPM','lg2_avg_Flat_D3_A_TPM','lg2_avg_Flat_D3_B_TPM','lg2_avg_Flat_D3_C_TPM','lg2_avg_Flat_D7_A_TPM','lg2_avg_Flat_D7_B_TPM','lg2_avg_Flat_D7_C_TPM','lg2_avg_Flat_D14_A_TPM','lg2_avg_Flat_D14_B_TPM','lg2_avg_Flat_D14_C_TPM','lg2_avg_Flat_D21_A_TPM','lg2_avg_Flat_D21_B_TPM','lg2_avg_Flat_D21_C_TPM','lg2_avg_nN_D1_A_TPM','lg2_avg_nN_D1_B_TPM','lg2_avg_nN_D1_C_TPM','lg2_avg_nN_D3_A_TPM','lg2_avg_nN_D3_B_TPM','lg2_avg_nN_D3_C_TPM','lg2_avg_nN_D7_A_TPM','lg2_avg_nN_D7_B_TPM','lg2_avg_nN_D7_C_TPM','lg2_avg_nN_D14_A_TPM','lg2_avg_nN_D14_B_TPM','lg2_avg_nN_D14_C_TPM','lg2_avg_nN_D21_A_TPM','lg2_avg_nN_D21_B_TPM','lg2_avg_nN_D21_C_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_nN_D1_vs_Flat_D1' => array(
            'name' => 'logFC nN D1 vs Flat D1',
            'slider_min' => -1,
            'slider_max' => 2,
            'default_low' => -1,
            'default_high' => 2
        ),
        'contrast_1_padj_nN_D1_vs_Flat_D1' => array(
            'name' => 'padj nN D1 vs Flat D1',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_nN_D3_vs_Flat_D3' => array(
            'name' => 'logFC nN D3 vs Flat D3',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_2_padj_nN_D3_vs_Flat_D3' => array(
            'name' => 'padj nN D3 vs Flat D3',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_nN_D7_vs_Flat_D7' => array(
            'name' => 'logFC nN D7 vs Flat D7',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_3_padj_nN_D7_vs_Flat_D7' => array(
            'name' => 'padj nN D7 vs Flat D7',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_logFC_nN_D14_vs_Flat_D14' => array(
            'name' => 'logFC nN D14 vs Flat D14',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_4_padj_nN_D14_vs_Flat_D14' => array(
            'name' => 'padj nN D14 vs Flat D14',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_5_logFC_nN_D21_vs_Flat_D21' => array(
            'name' => 'logFC nN D21 vs Flat D21',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_5_padj_nN_D21_vs_Flat_D21' => array(
            'name' => 'padj nN D21 vs Flat D21',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_L_lg10p_LRT_timepoint' => array(
            'name' => 'lg10p LRT timepoint',
            'slider_min' => 0,
            'slider_max' => 46,
            'default_low' => 0,
            'default_high' => 46
        ),
        'contrast_L_lg10p_LRT_nN_Flat' => array(
            'name' => 'lg10p LRT nN Flat',
            'slider_min' => 0,
            'slider_max' => 27,
            'default_low' => 0,
            'default_high' => 27
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'jbl349_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_nN_D1_vs_Flat_D1',
        'default-y' => 'contrast_1_lg10p_nN_D1_vs_Flat_D1',
        'selection' => array(
            'contrast_1_logFC_nN_D1_vs_Flat_D1' => array(
                'name' => 'logFC nN D1 vs Flat D1'
            ),
            'contrast_2_logFC_nN_D3_vs_Flat_D3' => array(
                'name' => 'logFC nN D3 vs Flat D3'
            ),
            'contrast_3_logFC_nN_D7_vs_Flat_D7' => array(
                'name' => 'logFC nN D7 vs Flat D7'
            ),
            'contrast_4_logFC_nN_D14_vs_Flat_D14' => array(
                'name' => 'logFC nN D14 vs Flat D14'
            ),
            'contrast_5_logFC_nN_D21_vs_Flat_D21' => array(
                'name' => 'logFC nN D21 vs Flat D21'
            ),
            'contrast_1_lg10p_nN_D1_vs_Flat_D1' => array(
                'name' => 'lg10p nN D1 vs Flat D1'
            ),
            'contrast_2_lg10p_nN_D3_vs_Flat_D3' => array(
                'name' => 'lg10p nN D3 vs Flat D3'
            ),
            'contrast_3_lg10p_nN_D7_vs_Flat_D7' => array(
                'name' => 'lg10p nN D7 vs Flat D7'
            ),
            'contrast_4_lg10p_nN_D14_vs_Flat_D14' => array(
                'name' => 'lg10p nN D14 vs Flat D14'
            ),
            'contrast_5_lg10p_nN_D21_vs_Flat_D21' => array(
                'name' => 'lg10p nN D21 vs Flat D21'
            ),
            'contrast_L_lg10p_LRT_timepoint' => array(
                'name' => 'lg10p LRT timepoint'
            ),
            'contrast_L_lg10p_LRT_nN_Flat' => array(
                'name' => 'lg10p LRT nN Flat'
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
            'contrast_1_lg2BaseMean_nN_D1_vs_Flat_D1' => array(
                'name' => 'lg2BaseMean nN D1 vs Flat D1'
            ),
            'contrast_2_lg2BaseMean_nN_D3_vs_Flat_D3' => array(
                'name' => 'lg2BaseMean nN D3 vs Flat D3'
            ),
            'contrast_3_lg2BaseMean_nN_D7_vs_Flat_D7' => array(
                'name' => 'lg2BaseMean nN D7 vs Flat D7'
            ),
            'contrast_4_lg2BaseMean_nN_D14_vs_Flat_D14' => array(
                'name' => 'lg2BaseMean nN D14 vs Flat D14'
            ),
            'contrast_5_lg2BaseMean_nN_D21_vs_Flat_D21' => array(
                'name' => 'lg2BaseMean nN D21 vs Flat D21'
            ),
            'contrast_L_lg2BaseMean_LRT_timepoint' => array(
                'name' => 'lg2BaseMean LRT timepoint'
            ),
            'contrast_L_lg2BaseMean_LRT_nN_Flat' => array(
                'name' => 'lg2BaseMean LRT nN Flat'
            )
        )
    )
//End scatterplot
);
