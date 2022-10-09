<?php

return array(
    'lab' => array(
        'name' => 'Hill DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'ch_data',
    'data_db' => array(
            'cat_table_name' => 'RN20047subA_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'RN20047subA_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_KO2_T18_M1_TPM' => array(
            'color' => '#F8766D',
            'name' => 'KO2 T18 M1 TPM'
        ),
        'norm_counts_KO2_T18_M2_TPM' => array(
            'color' => '#F8766D',
            'name' => 'KO2 T18 M2 TPM'
        ),
        'norm_counts_KO2_T18_M3_TPM' => array(
            'color' => '#F8766D',
            'name' => 'KO2 T18 M3 TPM'
        ),
        'norm_counts_KO2_T18_M4_TPM' => array(
            'color' => '#F8766D',
            'name' => 'KO2 T18 M4 TPM'
        ),
        'norm_counts_WT_T18_M1_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'WT T18 M1 TPM'
        ),
        'norm_counts_WT_T18_M2_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'WT T18 M2 TPM'
        ),
        'norm_counts_WT_T18_M3_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'WT T18 M3 TPM'
        ),
        'norm_counts_WT_T18_M4_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'WT T18 M4 TPM'
        ),
        'norm_counts_KO2_T72_M1_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'KO2 T72 M1 TPM'
        ),
        'norm_counts_KO2_T72_M2_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'KO2 T72 M2 TPM'
        ),
        'norm_counts_KO2_T72_M3_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'KO2 T72 M3 TPM'
        ),
        'norm_counts_KO2_T72_M4_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'KO2 T72 M4 TPM'
        ),
        'norm_counts_WT_T72_M1_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'WT T72 M1 TPM'
        ),
        'norm_counts_WT_T72_M2_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'WT T72 M2 TPM'
        ),
        'norm_counts_WT_T72_M3_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'WT T72 M3 TPM'
        ),
        'norm_counts_WT_T72_M4_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'WT T72 M4 TPM'
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
    'timepoint_array' => array(18,72),
    'datasets' => array(
'KO2' => array(
    'color' => '#FF0000FF',
    'sample_group' => array(
'KO2_T18' => array(
    'timepoint' =>  18,
    'sampleDbCols' =>  array(
'norm_counts_KO2_T18_M1_TPM','norm_counts_KO2_T18_M2_TPM','norm_counts_KO2_T18_M3_TPM','norm_counts_KO2_T18_M4_TPM'
)),
'KO2_T72' => array(
    'timepoint' =>  72,
    'sampleDbCols' =>  array(
'norm_counts_KO2_T72_M1_TPM','norm_counts_KO2_T72_M2_TPM','norm_counts_KO2_T72_M3_TPM','norm_counts_KO2_T72_M4_TPM'
)))),
'WT' => array(
    'color' => '#00FFFFFF',
    'sample_group' => array(
'WT_T18' => array(
    'timepoint' =>  18,
    'sampleDbCols' =>  array(
'norm_counts_WT_T18_M1_TPM','norm_counts_WT_T18_M2_TPM','norm_counts_WT_T18_M3_TPM','norm_counts_WT_T18_M4_TPM'
)),
'WT_T72' => array(
    'timepoint' =>  72,
    'sampleDbCols' =>  array(
'norm_counts_WT_T72_M1_TPM','norm_counts_WT_T72_M2_TPM','norm_counts_WT_T72_M3_TPM','norm_counts_WT_T72_M4_TPM'
)))))),
// New End: Timecourse
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_KO2_T18_M1_TPM','lg2_avg_KO2_T18_M2_TPM','lg2_avg_KO2_T18_M3_TPM','lg2_avg_KO2_T18_M4_TPM','lg2_avg_WT_T18_M1_TPM','lg2_avg_WT_T18_M2_TPM','lg2_avg_WT_T18_M3_TPM','lg2_avg_WT_T18_M4_TPM','lg2_avg_KO2_T72_M1_TPM','lg2_avg_KO2_T72_M2_TPM','lg2_avg_KO2_T72_M3_TPM','lg2_avg_KO2_T72_M4_TPM','lg2_avg_WT_T72_M1_TPM','lg2_avg_WT_T72_M2_TPM','lg2_avg_WT_T72_M3_TPM','lg2_avg_WT_T72_M4_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_KO2_T18_vs_WT_T18' => array(
            'name' => 'logFC KO2 T18 vs WT T18',
            'slider_min' => -7,
            'slider_max' => 5,
            'default_low' => -7,
            'default_high' => 5
        ),
        'contrast_1_padj_KO2_T18_vs_WT_T18' => array(
            'name' => 'padj KO2 T18 vs WT T18',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_KO2_T72_vs_WT_T72' => array(
            'name' => 'logFC KO2 T72 vs WT T72',
            'slider_min' => -4,
            'slider_max' => 5,
            'default_low' => -4,
            'default_high' => 5
        ),
        'contrast_2_padj_KO2_T72_vs_WT_T72' => array(
            'name' => 'padj KO2 T72 vs WT T72',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_KO2_vs_WT' => array(
            'name' => 'logFC KO2 vs WT',
            'slider_min' => -4,
            'slider_max' => 5,
            'default_low' => -4,
            'default_high' => 5
        ),
        'contrast_3_padj_KO2_vs_WT' => array(
            'name' => 'padj KO2 vs WT',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_L_lg10p_LRT_Timepoint' => array(
            'name' => 'lg10p LRT Timepoint',
            'slider_min' => 0,
            'slider_max' => 21,
            'default_low' => 0,
            'default_high' => 21
        ),
        'contrast_L_lg10p_LRT_Genotype' => array(
            'name' => 'lg10p LRT Genotype',
            'slider_min' => 0,
            'slider_max' => 18,
            'default_low' => 0,
            'default_high' => 18
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'RN20047subA_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_KO2_T18_vs_WT_T18',
        'default-y' => 'contrast_1_lg10p_KO2_T18_vs_WT_T18',
        'selection' => array(
            'contrast_1_logFC_KO2_T18_vs_WT_T18' => array(
                'name' => 'logFC KO2 T18 vs WT T18'
            ),
            'contrast_2_logFC_KO2_T72_vs_WT_T72' => array(
                'name' => 'logFC KO2 T72 vs WT T72'
            ),
            'contrast_3_logFC_KO2_vs_WT' => array(
                'name' => 'logFC KO2 vs WT'
            ),
            'contrast_1_lg10p_KO2_T18_vs_WT_T18' => array(
                'name' => 'lg10p KO2 T18 vs WT T18'
            ),
            'contrast_2_lg10p_KO2_T72_vs_WT_T72' => array(
                'name' => 'lg10p KO2 T72 vs WT T72'
            ),
            'contrast_3_lg10p_KO2_vs_WT' => array(
                'name' => 'lg10p KO2 vs WT'
            ),
            'contrast_L_lg10p_LRT_Timepoint' => array(
                'name' => 'lg10p LRT Timepoint'
            ),
            'contrast_L_lg10p_LRT_Genotype' => array(
                'name' => 'lg10p LRT Genotype'
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
            'contrast_1_lg2BaseMean_KO2_T18_vs_WT_T18' => array(
                'name' => 'lg2BaseMean KO2 T18 vs WT T18'
            ),
            'contrast_2_lg2BaseMean_KO2_T72_vs_WT_T72' => array(
                'name' => 'lg2BaseMean KO2 T72 vs WT T72'
            ),
            'contrast_3_lg2BaseMean_KO2_vs_WT' => array(
                'name' => 'lg2BaseMean KO2 vs WT'
            ),
            'contrast_L_lg2BaseMean_LRT_Timepoint' => array(
                'name' => 'lg2BaseMean LRT Timepoint'
            ),
            'contrast_L_lg2BaseMean_LRT_Genotype' => array(
                'name' => 'lg2BaseMean LRT Genotype'
            )
        )
    )
//End scatterplot
);
