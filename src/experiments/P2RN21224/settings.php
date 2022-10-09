<?php

return array(
    'public_access' => FALSE,
    'lab' => array(
        'name' => 'Anastasiou DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'dal_data',
    'data_db' => array(
            'cat_table_name' => 'P2RN21224_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'P2RN21224_bulk_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'TPM-values for all Samples',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_NC_A12_R1' => array(
            'color' => '#F8766D',
            'name' => 'NC A12 R1'
        ),
        'norm_counts_NC_A12_R2' => array(
            'color' => '#F8766D',
            'name' => 'NC A12 R2'
        ),
        'norm_counts_NC_A12_R3' => array(
            'color' => '#F8766D',
            'name' => 'NC A12 R3'
        ),
        'norm_counts_NC_A12_R4' => array(
            'color' => '#F8766D',
            'name' => 'NC A12 R4'
        ),
        'norm_counts_NC_A12_R5' => array(
            'color' => '#F8766D',
            'name' => 'NC A12 R5'
        ),
        'norm_counts_NC_A25_R1' => array(
            'color' => '#B79F00',
            'name' => 'NC A25 R1'
        ),
        'norm_counts_NC_A25_R2' => array(
            'color' => '#B79F00',
            'name' => 'NC A25 R2'
        ),
        'norm_counts_NC_A25_R3' => array(
            'color' => '#B79F00',
            'name' => 'NC A25 R3'
        ),
        'norm_counts_NC_A25_R4' => array(
            'color' => '#B79F00',
            'name' => 'NC A25 R4'
        ),
        'norm_counts_NC_A25_R5' => array(
            'color' => '#B79F00',
            'name' => 'NC A25 R5'
        ),
        'norm_counts_NC_A50_R1' => array(
            'color' => '#00BA38',
            'name' => 'NC A50 R1'
        ),
        'norm_counts_NC_A50_R2' => array(
            'color' => '#00BA38',
            'name' => 'NC A50 R2'
        ),
        'norm_counts_NC_A50_R3' => array(
            'color' => '#00BA38',
            'name' => 'NC A50 R3'
        ),
        'norm_counts_NC_A50_R4' => array(
            'color' => '#00BA38',
            'name' => 'NC A50 R4'
        ),
        'norm_counts_NC_A50_R5' => array(
            'color' => '#00BA38',
            'name' => 'NC A50 R5'
        ),
        'norm_counts_WD_A12_R1' => array(
            'color' => '#00BFC4',
            'name' => 'WD A12 R1'
        ),
        'norm_counts_WD_A12_R2' => array(
            'color' => '#00BFC4',
            'name' => 'WD A12 R2'
        ),
        'norm_counts_WD_A12_R3' => array(
            'color' => '#00BFC4',
            'name' => 'WD A12 R3'
        ),
        'norm_counts_WD_A12_R4' => array(
            'color' => '#00BFC4',
            'name' => 'WD A12 R4'
        ),
        'norm_counts_WD_A12_R5' => array(
            'color' => '#00BFC4',
            'name' => 'WD A12 R5'
        ),
        'norm_counts_WD_A25_R1' => array(
            'color' => '#619CFF',
            'name' => 'WD A25 R1'
        ),
        'norm_counts_WD_A25_R2' => array(
            'color' => '#619CFF',
            'name' => 'WD A25 R2'
        ),
        'norm_counts_WD_A25_R3' => array(
            'color' => '#619CFF',
            'name' => 'WD A25 R3'
        ),
        'norm_counts_WD_A25_R4' => array(
            'color' => '#619CFF',
            'name' => 'WD A25 R4'
        ),
        'norm_counts_WD_A25_R5' => array(
            'color' => '#619CFF',
            'name' => 'WD A25 R5'
        ),
        'norm_counts_WD_A50_R1' => array(
            'color' => '#F564E3',
            'name' => 'WD A50 R1'
        ),
        'norm_counts_WD_A50_R2' => array(
            'color' => '#F564E3',
            'name' => 'WD A50 R2'
        ),
        'norm_counts_WD_A50_R3' => array(
            'color' => '#F564E3',
            'name' => 'WD A50 R3'
        ),
        'norm_counts_WD_A50_R4' => array(
            'color' => '#F564E3',
            'name' => 'WD A50 R4'
        ),
        'norm_counts_WD_A50_R5' => array(
            'color' => '#F564E3',
            'name' => 'WD A50 R5'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM-values for all Samples',
        'sidelabel' => 'TPM-values for all Samples'
    ),
// New Begin: Timecourse
'timecourse_chart' => array(
    'timepoint_name' => 'Day',
    'display_median' => 'calculate_median',
    'timepoint_array' => array(12,25,50),
    'datasets' => array(
'NC' => array(
    'color' => '#FF0000',
    'sample_group' => array(
'NC_A12' => array(
    'timepoint' =>  12,
    'sampleDbCols' =>  array(
'norm_counts_NC_A12_R1','norm_counts_NC_A12_R2','norm_counts_NC_A12_R3','norm_counts_NC_A12_R4','norm_counts_NC_A12_R5'
)),
'NC_A25' => array(
    'timepoint' =>  25,
    'sampleDbCols' =>  array(
'norm_counts_NC_A25_R1','norm_counts_NC_A25_R2','norm_counts_NC_A25_R3','norm_counts_NC_A25_R4','norm_counts_NC_A25_R5'
)),
'NC_A50' => array(
    'timepoint' =>  50,
    'sampleDbCols' =>  array(
'norm_counts_NC_A50_R1','norm_counts_NC_A50_R2','norm_counts_NC_A50_R3','norm_counts_NC_A50_R4','norm_counts_NC_A50_R5'
)))),
'WD' => array(
    'color' => '#00FFFF',
    'sample_group' => array(
'WD_A12' => array(
    'timepoint' =>  12,
    'sampleDbCols' =>  array(
'norm_counts_WD_A12_R1','norm_counts_WD_A12_R2','norm_counts_WD_A12_R3','norm_counts_WD_A12_R4','norm_counts_WD_A12_R5'
)),
'WD_A25' => array(
    'timepoint' =>  25,
    'sampleDbCols' =>  array(
'norm_counts_WD_A25_R1','norm_counts_WD_A25_R2','norm_counts_WD_A25_R3','norm_counts_WD_A25_R4','norm_counts_WD_A25_R5'
)),
'WD_A50' => array(
    'timepoint' =>  50,
    'sampleDbCols' =>  array(
'norm_counts_WD_A50_R1','norm_counts_WD_A50_R2','norm_counts_WD_A50_R3','norm_counts_WD_A50_R4','norm_counts_WD_A50_R5'
)))))),
// New End: Timecourse
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_NC_A12_R1','lg2_avg_NC_A12_R2','lg2_avg_NC_A12_R3','lg2_avg_NC_A12_R4','lg2_avg_NC_A12_R5','lg2_avg_NC_A25_R1','lg2_avg_NC_A25_R2','lg2_avg_NC_A25_R3','lg2_avg_NC_A25_R4','lg2_avg_NC_A25_R5','lg2_avg_NC_A50_R1','lg2_avg_NC_A50_R2','lg2_avg_NC_A50_R3','lg2_avg_NC_A50_R4','lg2_avg_NC_A50_R5','lg2_avg_WD_A12_R1','lg2_avg_WD_A12_R2','lg2_avg_WD_A12_R3','lg2_avg_WD_A12_R4','lg2_avg_WD_A12_R5','lg2_avg_WD_A25_R1','lg2_avg_WD_A25_R2','lg2_avg_WD_A25_R3','lg2_avg_WD_A25_R4','lg2_avg_WD_A25_R5','lg2_avg_WD_A50_R1','lg2_avg_WD_A50_R2','lg2_avg_WD_A50_R3','lg2_avg_WD_A50_R4','lg2_avg_WD_A50_R5'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_NC_vs_WD' => array(
            'name' => 'logFC NC vs WD',
            'slider_min' => -5,
            'slider_max' => 4,
            'default_low' => -5,
            'default_high' => 4
        ),
        'contrast_1_padj_NC_vs_WD' => array(
            'name' => 'padj NC vs WD',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_A12_vs_A25' => array(
            'name' => 'logFC A12 vs A25',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_2_padj_A12_vs_A25' => array(
            'name' => 'padj A12 vs A25',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_A12_vs_A50' => array(
            'name' => 'logFC A12 vs A50',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'contrast_3_padj_A12_vs_A50' => array(
            'name' => 'padj A12 vs A50',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_logFC_A25_vs_A50' => array(
            'name' => 'logFC A25 vs A50',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_4_padj_A25_vs_A50' => array(
            'name' => 'padj A25 vs A50',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_5_logFC_NC_A12_vs_WD_A12' => array(
            'name' => 'logFC NC A12 vs WD A12',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'contrast_5_padj_NC_A12_vs_WD_A12' => array(
            'name' => 'padj NC A12 vs WD A12',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_6_logFC_NC_A25_vs_WD_A25' => array(
            'name' => 'logFC NC A25 vs WD A25',
            'slider_min' => -6,
            'slider_max' => 5,
            'default_low' => -6,
            'default_high' => 5
        ),
        'contrast_6_padj_NC_A25_vs_WD_A25' => array(
            'name' => 'padj NC A25 vs WD A25',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_7_logFC_NC_A50_vs_WD_A50' => array(
            'name' => 'logFC NC A50 vs WD A50',
            'slider_min' => -8,
            'slider_max' => 10,
            'default_low' => -8,
            'default_high' => 10
        ),
        'contrast_7_padj_NC_A50_vs_WD_A50' => array(
            'name' => 'padj NC A50 vs WD A50',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_8_logFC_NC_A12_vs_NC_A25' => array(
            'name' => 'logFC NC A12 vs NC A25',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_8_padj_NC_A12_vs_NC_A25' => array(
            'name' => 'padj NC A12 vs NC A25',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_9_logFC_NC_A12_vs_NC_A50' => array(
            'name' => 'logFC NC A12 vs NC A50',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_9_padj_NC_A12_vs_NC_A50' => array(
            'name' => 'padj NC A12 vs NC A50',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_10_logFC_NC_A25_vs_NC_A50' => array(
            'name' => '0 logFC NC A25 vs NC A50',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_10_padj_NC_A25_vs_NC_A50' => array(
            'name' => '0 padj NC A25 vs NC A50',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_11_logFC_WD_A12_vs_WD_A25' => array(
            'name' => '1 logFC WD A12 vs WD A25',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'contrast_11_padj_WD_A12_vs_WD_A25' => array(
            'name' => '1 padj WD A12 vs WD A25',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_12_logFC_WD_A12_vs_WD_A50' => array(
            'name' => '2 logFC WD A12 vs WD A50',
            'slider_min' => -5,
            'slider_max' => 10,
            'default_low' => -5,
            'default_high' => 10
        ),
        'contrast_12_padj_WD_A12_vs_WD_A50' => array(
            'name' => '2 padj WD A12 vs WD A50',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_13_logFC_WD_A25_vs_WD_A50' => array(
            'name' => '3 logFC WD A25 vs WD A50',
            'slider_min' => -4,
            'slider_max' => 5,
            'default_low' => -4,
            'default_high' => 5
        ),
        'contrast_13_padj_WD_A25_vs_WD_A50' => array(
            'name' => '3 padj WD A25 vs WD A50',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_L_lg10p_LRT_Age' => array(
            'name' => 'lg10p LRT Age',
            'slider_min' => 0,
            'slider_max' => 18,
            'default_low' => 0,
            'default_high' => 18
        ),
        'contrast_L_lg10p_LRT_Group' => array(
            'name' => 'lg10p LRT Group',
            'slider_min' => 0,
            'slider_max' => 126,
            'default_low' => 0,
            'default_high' => 126
        ),
        'contrast_L_lg10p_LRT_Diet' => array(
            'name' => 'lg10p LRT Diet',
            'slider_min' => 0,
            'slider_max' => 69,
            'default_low' => 0,
            'default_high' => 69
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'P2RN21224_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_NC_vs_WD',
        'default-y' => 'contrast_1_lg10p_NC_vs_WD',
        'selection' => array(
            'contrast_1_logFC_NC_vs_WD' => array(
                'name' => 'logFC NC vs WD'
            ),
            'contrast_2_logFC_A12_vs_A25' => array(
                'name' => 'logFC A12 vs A25'
            ),
            'contrast_3_logFC_A12_vs_A50' => array(
                'name' => 'logFC A12 vs A50'
            ),
            'contrast_4_logFC_A25_vs_A50' => array(
                'name' => 'logFC A25 vs A50'
            ),
            'contrast_5_logFC_NC_A12_vs_WD_A12' => array(
                'name' => 'logFC NC A12 vs WD A12'
            ),
            'contrast_6_logFC_NC_A25_vs_WD_A25' => array(
                'name' => 'logFC NC A25 vs WD A25'
            ),
            'contrast_7_logFC_NC_A50_vs_WD_A50' => array(
                'name' => 'logFC NC A50 vs WD A50'
            ),
            'contrast_8_logFC_NC_A12_vs_NC_A25' => array(
                'name' => 'logFC NC A12 vs NC A25'
            ),
            'contrast_9_logFC_NC_A12_vs_NC_A50' => array(
                'name' => 'logFC NC A12 vs NC A50'
            ),
            'contrast_10_logFC_NC_A25_vs_NC_A50' => array(
                'name' => '0 logFC NC A25 vs NC A50'
            ),
            'contrast_11_logFC_WD_A12_vs_WD_A25' => array(
                'name' => '1 logFC WD A12 vs WD A25'
            ),
            'contrast_12_logFC_WD_A12_vs_WD_A50' => array(
                'name' => '2 logFC WD A12 vs WD A50'
            ),
            'contrast_13_logFC_WD_A25_vs_WD_A50' => array(
                'name' => '3 logFC WD A25 vs WD A50'
            ),
            'contrast_1_lg10p_NC_vs_WD' => array(
                'name' => 'lg10p NC vs WD'
            ),
            'contrast_2_lg10p_A12_vs_A25' => array(
                'name' => 'lg10p A12 vs A25'
            ),
            'contrast_3_lg10p_A12_vs_A50' => array(
                'name' => 'lg10p A12 vs A50'
            ),
            'contrast_4_lg10p_A25_vs_A50' => array(
                'name' => 'lg10p A25 vs A50'
            ),
            'contrast_5_lg10p_NC_A12_vs_WD_A12' => array(
                'name' => 'lg10p NC A12 vs WD A12'
            ),
            'contrast_6_lg10p_NC_A25_vs_WD_A25' => array(
                'name' => 'lg10p NC A25 vs WD A25'
            ),
            'contrast_7_lg10p_NC_A50_vs_WD_A50' => array(
                'name' => 'lg10p NC A50 vs WD A50'
            ),
            'contrast_8_lg10p_NC_A12_vs_NC_A25' => array(
                'name' => 'lg10p NC A12 vs NC A25'
            ),
            'contrast_9_lg10p_NC_A12_vs_NC_A50' => array(
                'name' => 'lg10p NC A12 vs NC A50'
            ),
            'contrast_10_lg10p_NC_A25_vs_NC_A50' => array(
                'name' => '0 lg10p NC A25 vs NC A50'
            ),
            'contrast_11_lg10p_WD_A12_vs_WD_A25' => array(
                'name' => '1 lg10p WD A12 vs WD A25'
            ),
            'contrast_12_lg10p_WD_A12_vs_WD_A50' => array(
                'name' => '2 lg10p WD A12 vs WD A50'
            ),
            'contrast_13_lg10p_WD_A25_vs_WD_A50' => array(
                'name' => '3 lg10p WD A25 vs WD A50'
            ),
            'contrast_L_lg10p_LRT_Age' => array(
                'name' => 'lg10p LRT Age'
            ),
            'contrast_L_lg10p_LRT_Group' => array(
                'name' => 'lg10p LRT Group'
            ),
            'contrast_L_lg10p_LRT_Diet' => array(
                'name' => 'lg10p LRT Diet'
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
            'contrast_1_lg2BaseMean_NC_vs_WD' => array(
                'name' => 'lg2BaseMean NC vs WD'
            ),
            'contrast_2_lg2BaseMean_A12_vs_A25' => array(
                'name' => 'lg2BaseMean A12 vs A25'
            ),
            'contrast_3_lg2BaseMean_A12_vs_A50' => array(
                'name' => 'lg2BaseMean A12 vs A50'
            ),
            'contrast_4_lg2BaseMean_A25_vs_A50' => array(
                'name' => 'lg2BaseMean A25 vs A50'
            ),
            'contrast_5_lg2BaseMean_NC_A12_vs_WD_A12' => array(
                'name' => 'lg2BaseMean NC A12 vs WD A12'
            ),
            'contrast_6_lg2BaseMean_NC_A25_vs_WD_A25' => array(
                'name' => 'lg2BaseMean NC A25 vs WD A25'
            ),
            'contrast_7_lg2BaseMean_NC_A50_vs_WD_A50' => array(
                'name' => 'lg2BaseMean NC A50 vs WD A50'
            ),
            'contrast_8_lg2BaseMean_NC_A12_vs_NC_A25' => array(
                'name' => 'lg2BaseMean NC A12 vs NC A25'
            ),
            'contrast_9_lg2BaseMean_NC_A12_vs_NC_A50' => array(
                'name' => 'lg2BaseMean NC A12 vs NC A50'
            ),
            'contrast_10_lg2BaseMean_NC_A25_vs_NC_A50' => array(
                'name' => '0 lg2BaseMean NC A25 vs NC A50'
            ),
            'contrast_11_lg2BaseMean_WD_A12_vs_WD_A25' => array(
                'name' => '1 lg2BaseMean WD A12 vs WD A25'
            ),
            'contrast_12_lg2BaseMean_WD_A12_vs_WD_A50' => array(
                'name' => '2 lg2BaseMean WD A12 vs WD A50'
            ),
            'contrast_13_lg2BaseMean_WD_A25_vs_WD_A50' => array(
                'name' => '3 lg2BaseMean WD A25 vs WD A50'
            ),
            'contrast_L_lg2BaseMean_LRT_Age' => array(
                'name' => 'lg2BaseMean LRT Age'
            ),
            'contrast_L_lg2BaseMean_LRT_Group' => array(
                'name' => 'lg2BaseMean LRT Group'
            ),
            'contrast_L_lg2BaseMean_LRT_Diet' => array(
                'name' => 'lg2BaseMean LRT Diet'
            )
        )
    )
//End scatterplot
);
