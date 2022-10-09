<?php

return array(
    'lab' => array(
        'name' => 'Pachnis DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'vpl_data',
    'data_db' => array(
            'cat_table_name' => 'vpl195B_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'vpl195B_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_SHC_DIV0C_1_TPM' => array(
            'color' => '#F8766D',
            'name' => 'SHC DIV0C 1 TPM'
        ),
        'norm_counts_SHC_DIV0C_2_TPM' => array(
            'color' => '#F8766D',
            'name' => 'SHC DIV0C 2 TPM'
        ),
        'norm_counts_SHC_DIV0C_3_TPM' => array(
            'color' => '#F8766D',
            'name' => 'SHC DIV0C 3 TPM'
        ),
        'norm_counts_SHC_DIV4_2_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'SHC DIV4 2 TPM'
        ),
        'norm_counts_SHC_DIV4_3_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'SHC DIV4 3 TPM'
        ),
        'norm_counts_SHC_DIV4_4_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'SHC DIV4 4 TPM'
        ),
        'norm_counts_SHC_DIV11_1_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'SHC DIV11 1 TPM'
        ),
        'norm_counts_SHC_DIV11_2_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'SHC DIV11 2 TPM'
        ),
        'norm_counts_SHC_DIV11_4_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'SHC DIV11 4 TPM'
        ),
        'norm_counts_SHC_DIV20_1_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'SHC DIV20 1 TPM'
        ),
        'norm_counts_SHC_DIV20_2_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'SHC DIV20 2 TPM'
        ),
        'norm_counts_SHC_DIV20_3_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'SHC DIV20 3 TPM'
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
    'timepoint_array' => array(0,4,11,20),
    'datasets' => array(
'SHC' => array(
    'color' => '#FF0000FF',
    'sample_group' => array(
'SHC_DIV0C' => array(
    'timepoint' =>  0,
    'sampleDbCols' =>  array(
'norm_counts_SHC_DIV0C_1_TPM','norm_counts_SHC_DIV0C_2_TPM','norm_counts_SHC_DIV0C_3_TPM'
)),
'SHC_DIV4' => array(
    'timepoint' =>  4,
    'sampleDbCols' =>  array(
'norm_counts_SHC_DIV4_2_TPM','norm_counts_SHC_DIV4_3_TPM','norm_counts_SHC_DIV4_4_TPM'
)),
'SHC_DIV11' => array(
    'timepoint' =>  11,
    'sampleDbCols' =>  array(
'norm_counts_SHC_DIV11_1_TPM','norm_counts_SHC_DIV11_2_TPM','norm_counts_SHC_DIV11_4_TPM'
)),
'SHC_DIV20' => array(
    'timepoint' =>  20,
    'sampleDbCols' =>  array(
'norm_counts_SHC_DIV20_1_TPM','norm_counts_SHC_DIV20_2_TPM','norm_counts_SHC_DIV20_3_TPM'
)))))),
// New End: Timecourse
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_SHC_DIV0C_1_TPM','lg2_avg_SHC_DIV0C_2_TPM','lg2_avg_SHC_DIV0C_3_TPM','lg2_avg_SHC_DIV4_2_TPM','lg2_avg_SHC_DIV4_3_TPM','lg2_avg_SHC_DIV4_4_TPM','lg2_avg_SHC_DIV11_1_TPM','lg2_avg_SHC_DIV11_2_TPM','lg2_avg_SHC_DIV11_4_TPM','lg2_avg_SHC_DIV20_1_TPM','lg2_avg_SHC_DIV20_2_TPM','lg2_avg_SHC_DIV20_3_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_DIV11_vs_DIV4' => array(
            'name' => 'logFC DIV11 vs DIV4',
            'slider_min' => -6,
            'slider_max' => 9,
            'default_low' => -6,
            'default_high' => 9
        ),
        'contrast_1_padj_DIV11_vs_DIV4' => array(
            'name' => 'padj DIV11 vs DIV4',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_DIV20_vs_DIV4' => array(
            'name' => 'logFC DIV20 vs DIV4',
            'slider_min' => -7,
            'slider_max' => 10,
            'default_low' => -7,
            'default_high' => 10
        ),
        'contrast_2_padj_DIV20_vs_DIV4' => array(
            'name' => 'padj DIV20 vs DIV4',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_DIV20_vs_DIV11' => array(
            'name' => 'logFC DIV20 vs DIV11',
            'slider_min' => -5,
            'slider_max' => 6,
            'default_low' => -5,
            'default_high' => 6
        ),
        'contrast_3_padj_DIV20_vs_DIV11' => array(
            'name' => 'padj DIV20 vs DIV11',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_logFC_DIV4_vs_DIV0C' => array(
            'name' => 'logFC DIV4 vs DIV0C',
            'slider_min' => -11,
            'slider_max' => 11,
            'default_low' => -11,
            'default_high' => 11
        ),
        'contrast_4_padj_DIV4_vs_DIV0C' => array(
            'name' => 'padj DIV4 vs DIV0C',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_5_logFC_DIV11_vs_DIV0C' => array(
            'name' => 'logFC DIV11 vs DIV0C',
            'slider_min' => -10,
            'slider_max' => 12,
            'default_low' => -10,
            'default_high' => 12
        ),
        'contrast_5_padj_DIV11_vs_DIV0C' => array(
            'name' => 'padj DIV11 vs DIV0C',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_6_logFC_DIV20_vs_DIV0C' => array(
            'name' => 'logFC DIV20 vs DIV0C',
            'slider_min' => -9,
            'slider_max' => 14,
            'default_low' => -9,
            'default_high' => 14
        ),
        'contrast_6_padj_DIV20_vs_DIV0C' => array(
            'name' => 'padj DIV20 vs DIV0C',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_Ascl1' => array(
            'name' => 'corCoef Ascl1',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_Mki67' => array(
            'name' => 'corCoef Mki67',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_Nos1' => array(
            'name' => 'corCoef Nos1',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_Ret' => array(
            'name' => 'corCoef Ret',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_S100b' => array(
            'name' => 'corCoef S100b',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_L_lg10p_LRT_timepoint' => array(
            'name' => 'lg10p LRT timepoint',
            'slider_min' => 0,
            'slider_max' => 320,
            'default_low' => 0,
            'default_high' => 320
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'vpl195B_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_DIV11_vs_DIV4',
        'default-y' => 'contrast_1_lg10p_DIV11_vs_DIV4',
        'selection' => array(
            'contrast_1_logFC_DIV11_vs_DIV4' => array(
                'name' => 'logFC DIV11 vs DIV4'
            ),
            'contrast_2_logFC_DIV20_vs_DIV4' => array(
                'name' => 'logFC DIV20 vs DIV4'
            ),
            'contrast_3_logFC_DIV20_vs_DIV11' => array(
                'name' => 'logFC DIV20 vs DIV11'
            ),
            'contrast_4_logFC_DIV4_vs_DIV0C' => array(
                'name' => 'logFC DIV4 vs DIV0C'
            ),
            'contrast_5_logFC_DIV11_vs_DIV0C' => array(
                'name' => 'logFC DIV11 vs DIV0C'
            ),
            'contrast_6_logFC_DIV20_vs_DIV0C' => array(
                'name' => 'logFC DIV20 vs DIV0C'
            ),
            'contrast_1_lg10p_DIV11_vs_DIV4' => array(
                'name' => 'lg10p DIV11 vs DIV4'
            ),
            'contrast_2_lg10p_DIV20_vs_DIV4' => array(
                'name' => 'lg10p DIV20 vs DIV4'
            ),
            'contrast_3_lg10p_DIV20_vs_DIV11' => array(
                'name' => 'lg10p DIV20 vs DIV11'
            ),
            'contrast_4_lg10p_DIV4_vs_DIV0C' => array(
                'name' => 'lg10p DIV4 vs DIV0C'
            ),
            'contrast_5_lg10p_DIV11_vs_DIV0C' => array(
                'name' => 'lg10p DIV11 vs DIV0C'
            ),
            'contrast_6_lg10p_DIV20_vs_DIV0C' => array(
                'name' => 'lg10p DIV20 vs DIV0C'
            ),
            'contrast_L_lg10p_LRT_timepoint' => array(
                'name' => 'lg10p LRT timepoint'
            ),
            'add_venn_X_corCoef_Ascl1' => array(
                'name' => 'corCoef Ascl1'
            ),
            'add_venn_X_corCoef_Mki67' => array(
                'name' => 'corCoef Mki67'
            ),
            'add_venn_X_corCoef_Nos1' => array(
                'name' => 'corCoef Nos1'
            ),
            'add_venn_X_corCoef_Ret' => array(
                'name' => 'corCoef Ret'
            ),
            'add_venn_X_corCoef_S100b' => array(
                'name' => 'corCoef S100b'
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
            'contrast_1_lg2BaseMean_DIV11_vs_DIV4' => array(
                'name' => 'lg2BaseMean DIV11 vs DIV4'
            ),
            'contrast_2_lg2BaseMean_DIV20_vs_DIV4' => array(
                'name' => 'lg2BaseMean DIV20 vs DIV4'
            ),
            'contrast_3_lg2BaseMean_DIV20_vs_DIV11' => array(
                'name' => 'lg2BaseMean DIV20 vs DIV11'
            ),
            'contrast_4_lg2BaseMean_DIV4_vs_DIV0C' => array(
                'name' => 'lg2BaseMean DIV4 vs DIV0C'
            ),
            'contrast_5_lg2BaseMean_DIV11_vs_DIV0C' => array(
                'name' => 'lg2BaseMean DIV11 vs DIV0C'
            ),
            'contrast_6_lg2BaseMean_DIV20_vs_DIV0C' => array(
                'name' => 'lg2BaseMean DIV20 vs DIV0C'
            ),
            'contrast_L_lg2BaseMean_LRT_timepoint' => array(
                'name' => 'lg2BaseMean LRT timepoint'
            )
        )
    )
//End scatterplot
);
