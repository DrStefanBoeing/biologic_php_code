<?php

return array(
    'lab' => array(
        'name' => 'Lovell-Badge DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'rll_data',
    'data_db' => array(
            'cat_table_name' => 'rll352A_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'rll352A_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_p27NULL_E135OC_1_TPM' => array(
            'color' => '#B79F00',
            'name' => 'p27NULL E135OC 1 TPM'
        ),
        'norm_counts_p27NULL_E135OC_3_TPM' => array(
            'color' => '#B79F00',
            'name' => 'p27NULL E135OC 3 TPM'
        ),
        'norm_counts_p27NULL_E135OC_4_TPM' => array(
            'color' => '#B79F00',
            'name' => 'p27NULL E135OC 4 TPM'
        ),
        'norm_counts_p27NULL_E185OC_1_TPM' => array(
            'color' => '#00BA38',
            'name' => 'p27NULL E185OC 1 TPM'
        ),
        'norm_counts_p27NULL_E185OC_2_TPM' => array(
            'color' => '#00BA38',
            'name' => 'p27NULL E185OC 2 TPM'
        ),
        'norm_counts_p27NULL_E185OC_3_TPM' => array(
            'color' => '#00BA38',
            'name' => 'p27NULL E185OC 3 TPM'
        ),
        'norm_counts_p27NULL_E185OC_4_TPM' => array(
            'color' => '#00BA38',
            'name' => 'p27NULL E185OC 4 TPM'
        ),
        'norm_counts_p27null_PND8_1_TPM' => array(
            'color' => '#F8766D',
            'name' => 'p27null PND8 1 TPM'
        ),
        'norm_counts_p27null_PND8_3_TPM' => array(
            'color' => '#F8766D',
            'name' => 'p27null PND8 3 TPM'
        ),
        'norm_counts_p27null_PND8_4_TPM' => array(
            'color' => '#F8766D',
            'name' => 'p27null PND8 4 TPM'
        ),
        'norm_counts_WT_E135OC_1_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'WT E135OC 1 TPM'
        ),
        'norm_counts_WT_E135OC_2_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'WT E135OC 2 TPM'
        ),
        'norm_counts_WT_E135OC_3_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'WT E135OC 3 TPM'
        ),
        'norm_counts_WT_E135OC_4_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'WT E135OC 4 TPM'
        ),
        'norm_counts_WT_E185OC_1_TPM' => array(
            'color' => '#619CFF',
            'name' => 'WT E185OC 1 TPM'
        ),
        'norm_counts_WT_E185OC_2_TPM' => array(
            'color' => '#619CFF',
            'name' => 'WT E185OC 2 TPM'
        ),
        'norm_counts_WT_E185OC_3_TPM' => array(
            'color' => '#619CFF',
            'name' => 'WT E185OC 3 TPM'
        ),
        'norm_counts_WT_E185OC_4_TPM' => array(
            'color' => '#619CFF',
            'name' => 'WT E185OC 4 TPM'
        ),
        'norm_counts_WT_PND8_1_TPM' => array(
            'color' => '#F564E3',
            'name' => 'WT PND8 1 TPM'
        ),
        'norm_counts_WT_PND8_2_TPM' => array(
            'color' => '#F564E3',
            'name' => 'WT PND8 2 TPM'
        ),
        'norm_counts_WT_PND8_3_TPM' => array(
            'color' => '#F564E3',
            'name' => 'WT PND8 3 TPM'
        ),
        'norm_counts_WT_PND8_4_TPM' => array(
            'color' => '#F564E3',
            'name' => 'WT PND8 4 TPM'
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
    'timepoint_array' => array(13,18,28),
    'datasets' => array(

'p27NULL' => array(
    'color' => '#FF0000FF',
    'sample_group' => array(
'p27NULL_E135OC' => array(
    'timepoint' =>  13,
    'sampleDbCols' =>  array(
'norm_counts_p27NULL_E135OC_1_TPM','norm_counts_p27NULL_E135OC_3_TPM','norm_counts_p27NULL_E135OC_4_TPM'
)),
'p27NULL_E185OC' => array(
    'timepoint' =>  18,
    'sampleDbCols' =>  array(
'norm_counts_p27NULL_E185OC_1_TPM','norm_counts_p27NULL_E185OC_2_TPM','norm_counts_p27NULL_E185OC_3_TPM','norm_counts_p27NULL_E185OC_4_TPM'
)),
 'p27null_PND8' => array(
    'timepoint' =>  28,
    'sampleDbCols' =>  array(
        'norm_counts_p27null_PND8_1_TPM','norm_counts_p27null_PND8_3_TPM','norm_counts_p27null_PND8_4_TPM'
 )))),
'WT' => array(
    'color' => '#00FF00FF',
    'sample_group' => array(
'WT_E135OC' => array(
    'timepoint' =>  13,
    'sampleDbCols' =>  array(
'norm_counts_WT_E135OC_1_TPM','norm_counts_WT_E135OC_2_TPM','norm_counts_WT_E135OC_3_TPM','norm_counts_WT_E135OC_4_TPM'
)),
'WT_E185OC' => array(
    'timepoint' =>  18,
    'sampleDbCols' =>  array(
'norm_counts_WT_E185OC_1_TPM','norm_counts_WT_E185OC_2_TPM','norm_counts_WT_E185OC_3_TPM','norm_counts_WT_E185OC_4_TPM'
)),
'WT_PND8' => array(
    'timepoint' =>  28,
    'sampleDbCols' =>  array(
'norm_counts_WT_PND8_1_TPM','norm_counts_WT_PND8_2_TPM','norm_counts_WT_PND8_3_TPM','norm_counts_WT_PND8_4_TPM'
)))))),
// New End: Timecourse
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_p27NULL_E135OC_1_TPM','lg2_avg_p27NULL_E135OC_3_TPM','lg2_avg_p27NULL_E135OC_4_TPM','lg2_avg_p27NULL_E185OC_1_TPM','lg2_avg_p27NULL_E185OC_2_TPM','lg2_avg_p27NULL_E185OC_3_TPM','lg2_avg_p27NULL_E185OC_4_TPM','lg2_avg_p27null_PND8_1_TPM','lg2_avg_p27null_PND8_3_TPM','lg2_avg_p27null_PND8_4_TPM','lg2_avg_WT_E135OC_1_TPM','lg2_avg_WT_E135OC_2_TPM','lg2_avg_WT_E135OC_3_TPM','lg2_avg_WT_E135OC_4_TPM','lg2_avg_WT_E185OC_1_TPM','lg2_avg_WT_E185OC_2_TPM','lg2_avg_WT_E185OC_3_TPM','lg2_avg_WT_E185OC_4_TPM','lg2_avg_WT_PND8_1_TPM','lg2_avg_WT_PND8_2_TPM','lg2_avg_WT_PND8_3_TPM','lg2_avg_WT_PND8_4_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_p27NULL_E135OC_vs_WT_E135OC' => array(
            'name' => 'logFC p27NULL E135OC vs WT E135OC',
            'slider_min' => -6,
            'slider_max' => 4,
            'default_low' => -6,
            'default_high' => 4
        ),
        'contrast_1_padj_p27NULL_E135OC_vs_WT_E135OC' => array(
            'name' => 'padj p27NULL E135OC vs WT E135OC',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_p27NULL_E185OC_vs_WT_E185OC' => array(
            'name' => 'logFC p27NULL E185OC vs WT E185OC',
            'slider_min' => -4,
            'slider_max' => 4,
            'default_low' => -4,
            'default_high' => 4
        ),
        'contrast_2_padj_p27NULL_E185OC_vs_WT_E185OC' => array(
            'name' => 'padj p27NULL E185OC vs WT E185OC',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_p27null_PND8_vs_WT_PND8' => array(
            'name' => 'logFC p27null PND8 vs WT PND8',
            'slider_min' => -4,
            'slider_max' => 7,
            'default_low' => -4,
            'default_high' => 7
        ),
        'contrast_3_padj_p27null_PND8_vs_WT_PND8' => array(
            'name' => 'padj p27null PND8 vs WT PND8',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_logFC_p27NULL_E135OC_vs_p27NULL_E185OC' => array(
            'name' => 'logFC p27NULL E135OC vs p27NULL E185OC',
            'slider_min' => -5,
            'slider_max' => 5,
            'default_low' => -5,
            'default_high' => 5
        ),
        'contrast_4_padj_p27NULL_E135OC_vs_p27NULL_E185OC' => array(
            'name' => 'padj p27NULL E135OC vs p27NULL E185OC',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_5_logFC_p27NULL_E185OC_vs_p27null_PND8' => array(
            'name' => 'logFC p27NULL E185OC vs p27null PND8',
            'slider_min' => -7,
            'slider_max' => 7,
            'default_low' => -7,
            'default_high' => 7
        ),
        'contrast_5_padj_p27NULL_E185OC_vs_p27null_PND8' => array(
            'name' => 'padj p27NULL E185OC vs p27null PND8',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_6_logFC_WT_E135OC_vs_WT_E185OC' => array(
            'name' => 'logFC WT E135OC vs WT E185OC',
            'slider_min' => -6,
            'slider_max' => 7,
            'default_low' => -6,
            'default_high' => 7
        ),
        'contrast_6_padj_WT_E135OC_vs_WT_E185OC' => array(
            'name' => 'padj WT E135OC vs WT E185OC',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_7_logFC_WT_E185OC_vs_WT_PND8' => array(
            'name' => 'logFC WT E185OC vs WT PND8',
            'slider_min' => -8,
            'slider_max' => 9,
            'default_low' => -8,
            'default_high' => 9
        ),
        'contrast_7_padj_WT_E185OC_vs_WT_PND8' => array(
            'name' => 'padj WT E185OC vs WT PND8',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_8_logFC_p27NULL_vs_WT' => array(
            'name' => 'logFC p27NULL vs WT',
            'slider_min' => -2,
            'slider_max' => 1,
            'default_low' => -2,
            'default_high' => 1
        ),
        'contrast_8_padj_p27NULL_vs_WT' => array(
            'name' => 'padj p27NULL vs WT',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_Cdkn1b' => array(
            'name' => 'corCoef Cdkn1b',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_L_lg10p_LRT_Timepoint' => array(
            'name' => 'lg10p LRT Timepoint',
            'slider_min' => 0,
            'slider_max' => 321,
            'default_low' => 0,
            'default_high' => 321
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'rll352A_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_p27NULL_E135OC_vs_WT_E135OC',
        'default-y' => 'contrast_1_lg10p_p27NULL_E135OC_vs_WT_E135OC',
        'selection' => array(
            'contrast_1_logFC_p27NULL_E135OC_vs_WT_E135OC' => array(
                'name' => 'logFC p27NULL E135OC vs WT E135OC'
            ),
            'contrast_2_logFC_p27NULL_E185OC_vs_WT_E185OC' => array(
                'name' => 'logFC p27NULL E185OC vs WT E185OC'
            ),
            'contrast_3_logFC_p27null_PND8_vs_WT_PND8' => array(
                'name' => 'logFC p27null PND8 vs WT PND8'
            ),
            'contrast_4_logFC_p27NULL_E135OC_vs_p27NULL_E185OC' => array(
                'name' => 'logFC p27NULL E135OC vs p27NULL E185OC'
            ),
            'contrast_5_logFC_p27NULL_E185OC_vs_p27null_PND8' => array(
                'name' => 'logFC p27NULL E185OC vs p27null PND8'
            ),
            'contrast_6_logFC_WT_E135OC_vs_WT_E185OC' => array(
                'name' => 'logFC WT E135OC vs WT E185OC'
            ),
            'contrast_7_logFC_WT_E185OC_vs_WT_PND8' => array(
                'name' => 'logFC WT E185OC vs WT PND8'
            ),
            'contrast_8_logFC_p27NULL_vs_WT' => array(
                'name' => 'logFC p27NULL vs WT'
            ),
            'contrast_1_lg10p_p27NULL_E135OC_vs_WT_E135OC' => array(
                'name' => 'lg10p p27NULL E135OC vs WT E135OC'
            ),
            'contrast_2_lg10p_p27NULL_E185OC_vs_WT_E185OC' => array(
                'name' => 'lg10p p27NULL E185OC vs WT E185OC'
            ),
            'contrast_3_lg10p_p27null_PND8_vs_WT_PND8' => array(
                'name' => 'lg10p p27null PND8 vs WT PND8'
            ),
            'contrast_4_lg10p_p27NULL_E135OC_vs_p27NULL_E185OC' => array(
                'name' => 'lg10p p27NULL E135OC vs p27NULL E185OC'
            ),
            'contrast_5_lg10p_p27NULL_E185OC_vs_p27null_PND8' => array(
                'name' => 'lg10p p27NULL E185OC vs p27null PND8'
            ),
            'contrast_6_lg10p_WT_E135OC_vs_WT_E185OC' => array(
                'name' => 'lg10p WT E135OC vs WT E185OC'
            ),
            'contrast_7_lg10p_WT_E185OC_vs_WT_PND8' => array(
                'name' => 'lg10p WT E185OC vs WT PND8'
            ),
            'contrast_8_lg10p_p27NULL_vs_WT' => array(
                'name' => 'lg10p p27NULL vs WT'
            ),
            'contrast_L_lg10p_LRT_Timepoint' => array(
                'name' => 'lg10p LRT Timepoint'
            ),
            'add_venn_X_corCoef_Cdkn1b' => array(
                'name' => 'corCoef Cdkn1b'
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
            'contrast_1_lg2BaseMean_p27NULL_E135OC_vs_WT_E135OC' => array(
                'name' => 'lg2BaseMean p27NULL E135OC vs WT E135OC'
            ),
            'contrast_2_lg2BaseMean_p27NULL_E185OC_vs_WT_E185OC' => array(
                'name' => 'lg2BaseMean p27NULL E185OC vs WT E185OC'
            ),
            'contrast_3_lg2BaseMean_p27null_PND8_vs_WT_PND8' => array(
                'name' => 'lg2BaseMean p27null PND8 vs WT PND8'
            ),
            'contrast_4_lg2BaseMean_p27NULL_E135OC_vs_p27NULL_E185OC' => array(
                'name' => 'lg2BaseMean p27NULL E135OC vs p27NULL E185OC'
            ),
            'contrast_5_lg2BaseMean_p27NULL_E185OC_vs_p27null_PND8' => array(
                'name' => 'lg2BaseMean p27NULL E185OC vs p27null PND8'
            ),
            'contrast_6_lg2BaseMean_WT_E135OC_vs_WT_E185OC' => array(
                'name' => 'lg2BaseMean WT E135OC vs WT E185OC'
            ),
            'contrast_7_lg2BaseMean_WT_E185OC_vs_WT_PND8' => array(
                'name' => 'lg2BaseMean WT E185OC vs WT PND8'
            ),
            'contrast_8_lg2BaseMean_p27NULL_vs_WT' => array(
                'name' => 'lg2BaseMean p27NULL vs WT'
            ),
            'contrast_L_lg2BaseMean_LRT_Timepoint' => array(
                'name' => 'lg2BaseMean LRT Timepoint'
            )
        )
    )
//End scatterplot
);
