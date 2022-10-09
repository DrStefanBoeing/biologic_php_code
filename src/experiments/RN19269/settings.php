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
            'cat_table_name' => 'RN19269_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'RN19269_rna_seq_table',
    'primary_gene_symbol' => 'Dmel_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Fed_0h_1_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Fed 0h 1 TPM'
        ),
        'norm_counts_Fed_0h_2_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Fed 0h 2 TPM'
        ),
        'norm_counts_Fed_0h_3_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Fed 0h 3 TPM'
        ),
        'norm_counts_Fed_16h_1_TPM' => array(
            'color' => '#E7851E',
            'name' => 'Fed 16h 1 TPM'
        ),
        'norm_counts_Fed_16h_2_TPM' => array(
            'color' => '#E7851E',
            'name' => 'Fed 16h 2 TPM'
        ),
        'norm_counts_Fed_16h_3_TPM' => array(
            'color' => '#E7851E',
            'name' => 'Fed 16h 3 TPM'
        ),
        'norm_counts_Fed_1h_1_TPM' => array(
            'color' => '#D09400',
            'name' => 'Fed 1h 1 TPM'
        ),
        'norm_counts_Fed_1h_2_TPM' => array(
            'color' => '#D09400',
            'name' => 'Fed 1h 2 TPM'
        ),
        'norm_counts_Fed_1h_3_TPM' => array(
            'color' => '#D09400',
            'name' => 'Fed 1h 3 TPM'
        ),
        'norm_counts_Fed_24h_1_TPM' => array(
            'color' => '#B2A100',
            'name' => 'Fed 24h 1 TPM'
        ),
        'norm_counts_Fed_24h_2_TPM' => array(
            'color' => '#B2A100',
            'name' => 'Fed 24h 2 TPM'
        ),
        'norm_counts_Fed_24h_3_TPM' => array(
            'color' => '#B2A100',
            'name' => 'Fed 24h 3 TPM'
        ),
        'norm_counts_Fed_2h_1_TPM' => array(
            'color' => '#89AC00',
            'name' => 'Fed 2h 1 TPM'
        ),
        'norm_counts_Fed_2h_2_TPM' => array(
            'color' => '#89AC00',
            'name' => 'Fed 2h 2 TPM'
        ),
        'norm_counts_Fed_2h_3_TPM' => array(
            'color' => '#89AC00',
            'name' => 'Fed 2h 3 TPM'
        ),
        'norm_counts_Fed_4h_1_TPM' => array(
            'color' => '#45B500',
            'name' => 'Fed 4h 1 TPM'
        ),
        'norm_counts_Fed_4h_2_TPM' => array(
            'color' => '#45B500',
            'name' => 'Fed 4h 2 TPM'
        ),
        'norm_counts_Fed_4h_3_TPM' => array(
            'color' => '#45B500',
            'name' => 'Fed 4h 3 TPM'
        ),
        'norm_counts_Fed_8h_1_TPM' => array(
            'color' => '#00BC51',
            'name' => 'Fed 8h 1 TPM'
        ),
        'norm_counts_Fed_8h_2_TPM' => array(
            'color' => '#00BC51',
            'name' => 'Fed 8h 2 TPM'
        ),
        'norm_counts_Fed_8h_3_TPM' => array(
            'color' => '#00BC51',
            'name' => 'Fed 8h 3 TPM'
        ),
        'norm_counts_IR_1h_1_TPM' => array(
            'color' => '#00C087',
            'name' => 'IR 1h 1 TPM'
        ),
        'norm_counts_IR_1h_2_TPM' => array(
            'color' => '#00C087',
            'name' => 'IR 1h 2 TPM'
        ),
        'norm_counts_IR_1h_3_TPM' => array(
            'color' => '#00C087',
            'name' => 'IR 1h 3 TPM'
        ),
        'norm_counts_IR_24h_1_TPM' => array(
            'color' => '#00C0B2',
            'name' => 'IR 24h 1 TPM'
        ),
        'norm_counts_IR_24h_2_TPM' => array(
            'color' => '#00C0B2',
            'name' => 'IR 24h 2 TPM'
        ),
        'norm_counts_IR_24h_3_TPM' => array(
            'color' => '#00C0B2',
            'name' => 'IR 24h 3 TPM'
        ),
        'norm_counts_IR_2h_1_TPM' => array(
            'color' => '#00BCD6',
            'name' => 'IR 2h 1 TPM'
        ),
        'norm_counts_IR_2h_2_TPM' => array(
            'color' => '#00BCD6',
            'name' => 'IR 2h 2 TPM'
        ),
        'norm_counts_IR_2h_3_TPM' => array(
            'color' => '#00BCD6',
            'name' => 'IR 2h 3 TPM'
        ),
        'norm_counts_IR_4h_1_TPM' => array(
            'color' => '#00B3F2',
            'name' => 'IR 4h 1 TPM'
        ),
        'norm_counts_IR_4h_2_TPM' => array(
            'color' => '#00B3F2',
            'name' => 'IR 4h 2 TPM'
        ),
        'norm_counts_IR_4h_3_TPM' => array(
            'color' => '#00B3F2',
            'name' => 'IR 4h 3 TPM'
        ),
        'norm_counts_IR_8h_1_TPM' => array(
            'color' => '#29A3FF',
            'name' => 'IR 8h 1 TPM'
        ),
        'norm_counts_IR_8h_2_TPM' => array(
            'color' => '#29A3FF',
            'name' => 'IR 8h 2 TPM'
        ),
        'norm_counts_IR_8h_3_TPM' => array(
            'color' => '#29A3FF',
            'name' => 'IR 8h 3 TPM'
        ),
        'norm_counts_NR_16h_1_TPM' => array(
            'color' => '#9C8DFF',
            'name' => 'NR 16h 1 TPM'
        ),
        'norm_counts_NR_16h_2_TPM' => array(
            'color' => '#9C8DFF',
            'name' => 'NR 16h 2 TPM'
        ),
        'norm_counts_NR_16h_3_TPM' => array(
            'color' => '#9C8DFF',
            'name' => 'NR 16h 3 TPM'
        ),
        'norm_counts_NR_24h_1_TPM' => array(
            'color' => '#D277FF',
            'name' => 'NR 24h 1 TPM'
        ),
        'norm_counts_NR_24h_2_TPM' => array(
            'color' => '#D277FF',
            'name' => 'NR 24h 2 TPM'
        ),
        'norm_counts_NR_24h_3_TPM' => array(
            'color' => '#D277FF',
            'name' => 'NR 24h 3 TPM'
        ),
        'norm_counts_NR_2h_1_TPM' => array(
            'color' => '#F166E8',
            'name' => 'NR 2h 1 TPM'
        ),
        'norm_counts_NR_2h_2_TPM' => array(
            'color' => '#F166E8',
            'name' => 'NR 2h 2 TPM'
        ),
        'norm_counts_NR_2h_3_TPM' => array(
            'color' => '#F166E8',
            'name' => 'NR 2h 3 TPM'
        ),
        'norm_counts_NR_4h_1_TPM' => array(
            'color' => '#FF61C7',
            'name' => 'NR 4h 1 TPM'
        ),
        'norm_counts_NR_4h_2_TPM' => array(
            'color' => '#FF61C7',
            'name' => 'NR 4h 2 TPM'
        ),
        'norm_counts_NR_4h_3_TPM' => array(
            'color' => '#FF61C7',
            'name' => 'NR 4h 3 TPM'
        ),
        'norm_counts_NR_8h_1_TPM' => array(
            'color' => '#FF689E',
            'name' => 'NR 8h 1 TPM'
        ),
        'norm_counts_NR_8h_2_TPM' => array(
            'color' => '#FF689E',
            'name' => 'NR 8h 2 TPM'
        ),
        'norm_counts_NR_8h_3_TPM' => array(
            'color' => '#FF689E',
            'name' => 'NR 8h 3 TPM'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Fed_0h_1_TPM','lg2_avg_Fed_0h_2_TPM','lg2_avg_Fed_0h_3_TPM','lg2_avg_Fed_16h_1_TPM','lg2_avg_Fed_16h_2_TPM','lg2_avg_Fed_16h_3_TPM','lg2_avg_Fed_1h_1_TPM','lg2_avg_Fed_1h_2_TPM','lg2_avg_Fed_1h_3_TPM','lg2_avg_Fed_24h_1_TPM','lg2_avg_Fed_24h_2_TPM','lg2_avg_Fed_24h_3_TPM','lg2_avg_Fed_2h_1_TPM','lg2_avg_Fed_2h_2_TPM','lg2_avg_Fed_2h_3_TPM','lg2_avg_Fed_4h_1_TPM','lg2_avg_Fed_4h_2_TPM','lg2_avg_Fed_4h_3_TPM','lg2_avg_Fed_8h_1_TPM','lg2_avg_Fed_8h_2_TPM','lg2_avg_Fed_8h_3_TPM','lg2_avg_IR_1h_1_TPM','lg2_avg_IR_1h_2_TPM','lg2_avg_IR_1h_3_TPM','lg2_avg_IR_24h_1_TPM','lg2_avg_IR_24h_2_TPM','lg2_avg_IR_24h_3_TPM','lg2_avg_IR_2h_1_TPM','lg2_avg_IR_2h_2_TPM','lg2_avg_IR_2h_3_TPM','lg2_avg_IR_4h_1_TPM','lg2_avg_IR_4h_2_TPM','lg2_avg_IR_4h_3_TPM','lg2_avg_IR_8h_1_TPM','lg2_avg_IR_8h_2_TPM','lg2_avg_IR_8h_3_TPM','lg2_avg_NR_16h_1_TPM','lg2_avg_NR_16h_2_TPM','lg2_avg_NR_16h_3_TPM','lg2_avg_NR_24h_1_TPM','lg2_avg_NR_24h_2_TPM','lg2_avg_NR_24h_3_TPM','lg2_avg_NR_2h_1_TPM','lg2_avg_NR_2h_2_TPM','lg2_avg_NR_2h_3_TPM','lg2_avg_NR_4h_1_TPM','lg2_avg_NR_4h_2_TPM','lg2_avg_NR_4h_3_TPM','lg2_avg_NR_8h_1_TPM','lg2_avg_NR_8h_2_TPM','lg2_avg_NR_8h_3_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_Fed_vs_IR' => array(
            'name' => 'logFC Fed vs IR',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_1_padj_Fed_vs_IR' => array(
            'name' => 'padj Fed vs IR',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_Fed_vs_NR' => array(
            'name' => 'logFC Fed vs NR',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_2_padj_Fed_vs_NR' => array(
            'name' => 'padj Fed vs NR',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_IR_vs_NR' => array(
            'name' => 'logFC IR vs NR',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_3_padj_IR_vs_NR' => array(
            'name' => 'padj IR vs NR',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_Acf1' => array(
            'name' => 'corCoef Acf1',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_L_lg10p_LRT_treatment' => array(
            'name' => 'lg10p LRT treatment',
            'slider_min' => 0,
            'slider_max' => 54,
            'default_low' => 0,
            'default_high' => 54
        ),
        'contrast_L_lg10p_LRT_timepoint' => array(
            'name' => 'lg10p LRT timepoint',
            'slider_min' => 0,
            'slider_max' => 78,
            'default_low' => 0,
            'default_high' => 78
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'RN19269_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_Fed_vs_IR',
        'default-y' => 'contrast_1_lg10p_Fed_vs_IR',
        'selection' => array(
            'contrast_1_logFC_Fed_vs_IR' => array(
                'name' => 'logFC Fed vs IR'
            ),
            'contrast_2_logFC_Fed_vs_NR' => array(
                'name' => 'logFC Fed vs NR'
            ),
            'contrast_3_logFC_IR_vs_NR' => array(
                'name' => 'logFC IR vs NR'
            ),
            'contrast_1_lg10p_Fed_vs_IR' => array(
                'name' => 'lg10p Fed vs IR'
            ),
            'contrast_2_lg10p_Fed_vs_NR' => array(
                'name' => 'lg10p Fed vs NR'
            ),
            'contrast_3_lg10p_IR_vs_NR' => array(
                'name' => 'lg10p IR vs NR'
            ),
            'contrast_L_lg10p_LRT_treatment' => array(
                'name' => 'lg10p LRT treatment'
            ),
            'contrast_L_lg10p_LRT_timepoint' => array(
                'name' => 'lg10p LRT timepoint'
            ),
            'add_venn_X_corCoef_Acf1' => array(
                'name' => 'corCoef Acf1'
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
            'contrast_1_lg2BaseMean_Fed_vs_IR' => array(
                'name' => 'lg2BaseMean Fed vs IR'
            ),
            'contrast_2_lg2BaseMean_Fed_vs_NR' => array(
                'name' => 'lg2BaseMean Fed vs NR'
            ),
            'contrast_3_lg2BaseMean_IR_vs_NR' => array(
                'name' => 'lg2BaseMean IR vs NR'
            ),
            'contrast_L_lg2BaseMean_LRT_treatment' => array(
                'name' => 'lg2BaseMean LRT treatment'
            ),
            'contrast_L_lg2BaseMean_LRT_timepoint' => array(
                'name' => 'lg2BaseMean LRT timepoint'
            )
        )
    )
//End scatterplot
);
