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
            'cat_table_name' => 'vpl369A_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'vpl369A_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Neuron_ZT0_1_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Neuron ZT0 1 TPM'
        ),
        'norm_counts_Neuron_ZT0_2_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Neuron ZT0 2 TPM'
        ),
        'norm_counts_Neuron_ZT0_3_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Neuron ZT0 3 TPM'
        ),
        'norm_counts_Neuron_ZT0_4_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Neuron ZT0 4 TPM'
        ),
        'norm_counts_Neuron_ZT6_1_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'Neuron ZT6 1 TPM'
        ),
        'norm_counts_Neuron_ZT6_2_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'Neuron ZT6 2 TPM'
        ),
        'norm_counts_Neuron_ZT6_3_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'Neuron ZT6 3 TPM'
        ),
        'norm_counts_Neuron_ZT6_4_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'Neuron ZT6 4 TPM'
        ),
        'norm_counts_Neuron_ZT12_1_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'Neuron ZT12 1 TPM'
        ),
        'norm_counts_Neuron_ZT12_2_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'Neuron ZT12 2 TPM'
        ),
        'norm_counts_Neuron_ZT12_3_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'Neuron ZT12 3 TPM'
        ),
        'norm_counts_Neuron_ZT12_4_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'Neuron ZT12 4 TPM'
        ),
        'norm_counts_Neuron_ZT18_1_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'Neuron ZT18 1 TPM'
        ),
        'norm_counts_Neuron_ZT18_2_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'Neuron ZT18 2 TPM'
        ),
        'norm_counts_Neuron_ZT18_3_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'Neuron ZT18 3 TPM'
        ),
        'norm_counts_Neuron_ZT18_4_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'Neuron ZT18 4 TPM'
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
    'timepoint_array' => array(0,6,12,18),
    'datasets' => array(
'Neuron' => array(
    'color' => '#009900',
    'sample_group' => array(
'Neuron_ZT0' => array(
    'timepoint' =>  0,
    'sampleDbCols' =>  array(
'norm_counts_Neuron_ZT0_1_TPM','norm_counts_Neuron_ZT0_2_TPM','norm_counts_Neuron_ZT0_3_TPM','norm_counts_Neuron_ZT0_4_TPM'
)),
'Neuron_ZT6' => array(
    'timepoint' =>  6,
    'sampleDbCols' =>  array(
'norm_counts_Neuron_ZT6_1_TPM','norm_counts_Neuron_ZT6_2_TPM','norm_counts_Neuron_ZT6_3_TPM','norm_counts_Neuron_ZT6_4_TPM'
)),
'Neuron_ZT12' => array(
    'timepoint' =>  12,
    'sampleDbCols' =>  array(
'norm_counts_Neuron_ZT12_1_TPM','norm_counts_Neuron_ZT12_2_TPM','norm_counts_Neuron_ZT12_3_TPM','norm_counts_Neuron_ZT12_4_TPM'
)),
'Neuron_ZT18' => array(
    'timepoint' =>  18,
    'sampleDbCols' =>  array(
'norm_counts_Neuron_ZT18_1_TPM','norm_counts_Neuron_ZT18_2_TPM','norm_counts_Neuron_ZT18_3_TPM','norm_counts_Neuron_ZT18_4_TPM'
)))))),
// New End: Timecourse
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Neuron_ZT0_1_TPM','lg2_avg_Neuron_ZT0_2_TPM','lg2_avg_Neuron_ZT0_3_TPM','lg2_avg_Neuron_ZT0_4_TPM','lg2_avg_Neuron_ZT6_1_TPM','lg2_avg_Neuron_ZT6_2_TPM','lg2_avg_Neuron_ZT6_3_TPM','lg2_avg_Neuron_ZT6_4_TPM','lg2_avg_Neuron_ZT12_1_TPM','lg2_avg_Neuron_ZT12_2_TPM','lg2_avg_Neuron_ZT12_3_TPM','lg2_avg_Neuron_ZT12_4_TPM','lg2_avg_Neuron_ZT18_1_TPM','lg2_avg_Neuron_ZT18_2_TPM','lg2_avg_Neuron_ZT18_3_TPM','lg2_avg_Neuron_ZT18_4_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_Neuron_ZT0_vs_Neuron_ZT6' => array(
            'name' => 'logFC Neuron ZT0 vs Neuron ZT6',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_1_padj_Neuron_ZT0_vs_Neuron_ZT6' => array(
            'name' => 'padj Neuron ZT0 vs Neuron ZT6',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_Neuron_ZT0_vs_Neuron_ZT12' => array(
            'name' => 'logFC Neuron ZT0 vs Neuron ZT12',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_2_padj_Neuron_ZT0_vs_Neuron_ZT12' => array(
            'name' => 'padj Neuron ZT0 vs Neuron ZT12',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_Neuron_ZT0_vs_Neuron_ZT18' => array(
            'name' => 'logFC Neuron ZT0 vs Neuron ZT18',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_3_padj_Neuron_ZT0_vs_Neuron_ZT18' => array(
            'name' => 'padj Neuron ZT0 vs Neuron ZT18',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_Cry2' => array(
            'name' => 'corCoef Cry2',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_Hgf' => array(
            'name' => 'corCoef Hgf',
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
        'add_venn_X_corCoef_Nr1d2' => array(
            'name' => 'corCoef Nr1d2',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_Per1' => array(
            'name' => 'corCoef Per1',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_Per3' => array(
            'name' => 'corCoef Per3',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_Rorc' => array(
            'name' => 'corCoef Rorc',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_Sst' => array(
            'name' => 'corCoef Sst',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_Vip' => array(
            'name' => 'corCoef Vip',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_L_lg10p_LRT_timepoint' => array(
            'name' => 'lg10p LRT timepoint',
            'slider_min' => 0,
            'slider_max' => 25,
            'default_low' => 0,
            'default_high' => 25
        ) ,
        'contrast_L_lg10p_Cosinor_acr' => array(
            'name' => 'lg10p Cosinor arc',
            'slider_min' => 0,
            'slider_max' => 26,
            'default_low' => 0,
            'default_high' => 26
        ),
        'contrast_L_lg10p_Cosinor_amp' => array(
            'name' => 'lg10p Cosinor amp',
            'slider_min' => 0,
            'slider_max' => 25,
            'default_low' => 0,
            'default_high' => 25
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'vpl369A_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_Neuron_ZT0_vs_Neuron_ZT6',
        'default-y' => 'contrast_1_lg10p_Neuron_ZT0_vs_Neuron_ZT6',
        'selection' => array(
            'contrast_1_logFC_Neuron_ZT0_vs_Neuron_ZT6' => array(
                'name' => 'logFC Neuron ZT0 vs Neuron ZT6'
            ),
            'contrast_2_logFC_Neuron_ZT0_vs_Neuron_ZT12' => array(
                'name' => 'logFC Neuron ZT0 vs Neuron ZT12'
            ),
            'contrast_3_logFC_Neuron_ZT0_vs_Neuron_ZT18' => array(
                'name' => 'logFC Neuron ZT0 vs Neuron ZT18'
            ),
            'contrast_1_lg10p_Neuron_ZT0_vs_Neuron_ZT6' => array(
                'name' => 'lg10p Neuron ZT0 vs Neuron ZT6'
            ),
            'contrast_2_lg10p_Neuron_ZT0_vs_Neuron_ZT12' => array(
                'name' => 'lg10p Neuron ZT0 vs Neuron ZT12'
            ),
            'contrast_3_lg10p_Neuron_ZT0_vs_Neuron_ZT18' => array(
                'name' => 'lg10p Neuron ZT0 vs Neuron ZT18'
            ),
            'contrast_L_lg10p_LRT_timepoint' => array(
                'name' => 'lg10p LRT timepoint'
            ),
            'contrast_L_lg10p_Cosinor_acr' => array(
                'name' => 'lg10p Cosinor acr'
            ),
             'contrast_L_lg10p_Cosinor_amp' => array(
                'name' => 'lg10p Cosinor amp'
            ),
            'add_venn_X_corCoef_Cry2' => array(
                'name' => 'corCoef Cry2'
            ),
            'add_venn_X_corCoef_Hgf' => array(
                'name' => 'corCoef Hgf'
            ),
            'add_venn_X_corCoef_Nos1' => array(
                'name' => 'corCoef Nos1'
            ),
            'add_venn_X_corCoef_Nr1d2' => array(
                'name' => 'corCoef Nr1d2'
            ),
            'add_venn_X_corCoef_Per1' => array(
                'name' => 'corCoef Per1'
            ),
            'add_venn_X_corCoef_Per3' => array(
                'name' => 'corCoef Per3'
            ),
            'add_venn_X_corCoef_Rorc' => array(
                'name' => 'corCoef Rorc'
            ),
            'add_venn_X_corCoef_Sst' => array(
                'name' => 'corCoef Sst'
            ),
            'add_venn_X_corCoef_Vip' => array(
                'name' => 'corCoef Vip'
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
            'contrast_1_lg2BaseMean_Neuron_ZT0_vs_Neuron_ZT6' => array(
                'name' => 'lg2BaseMean Neuron ZT0 vs Neuron ZT6'
            ),
            'contrast_2_lg2BaseMean_Neuron_ZT0_vs_Neuron_ZT12' => array(
                'name' => 'lg2BaseMean Neuron ZT0 vs Neuron ZT12'
            ),
            'contrast_3_lg2BaseMean_Neuron_ZT0_vs_Neuron_ZT18' => array(
                'name' => 'lg2BaseMean Neuron ZT0 vs Neuron ZT18'
            ),
            'contrast_L_lg2BaseMean_LRT_timepoint' => array(
                'name' => 'lg2BaseMean LRT timepoint'
            )
        )
    )
//End scatterplot
);
