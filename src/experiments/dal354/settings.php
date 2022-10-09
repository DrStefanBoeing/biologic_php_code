<?php

return array(
    'lab' => array(
        'name' => 'Anastasiou DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'dal_data',
    'data_db' => array(
            'cat_table_name' => 'dal354_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'p354_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Liver_DENfasted_1_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Liver DENfasted 1 TPM'
        ),
        'norm_counts_Liver_DENfasted_2_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Liver DENfasted 2 TPM'
        ),
        'norm_counts_Liver_DENfasted_3_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Liver DENfasted 3 TPM'
        ),
        'norm_counts_Liver_DENfed_1_TPM' => array(
            'color' => '#C49A00',
            'name' => 'Liver DENfed 1 TPM'
        ),
        'norm_counts_Liver_DENfed_3_TPM' => array(
            'color' => '#C49A00',
            'name' => 'Liver DENfed 3 TPM'
        ),
        'norm_counts_Liver_nonDENfasted_1_TPM' => array(
            'color' => '#53B400',
            'name' => 'Liver nonDENfasted 1 TPM'
        ),
        'norm_counts_Liver_nonDENfasted_2_TPM' => array(
            'color' => '#53B400',
            'name' => 'Liver nonDENfasted 2 TPM'
        ),
        'norm_counts_Liver_nonDENfasted_3_TPM' => array(
            'color' => '#53B400',
            'name' => 'Liver nonDENfasted 3 TPM'
        ),
        'norm_counts_Liver_nonDENfasted_4_TPM' => array(
            'color' => '#53B400',
            'name' => 'Liver nonDENfasted 4 TPM'
        ),
        'norm_counts_Liver_nonDENfed_1_TPM' => array(
            'color' => '#00C094',
            'name' => 'Liver nonDENfed 1 TPM'
        ),
        'norm_counts_Liver_nonDENfed_2_TPM' => array(
            'color' => '#00C094',
            'name' => 'Liver nonDENfed 2 TPM'
        ),
        'norm_counts_Liver_nonDENfed_3_TPM' => array(
            'color' => '#00C094',
            'name' => 'Liver nonDENfed 3 TPM'
        ),
        'norm_counts_Tumour_DENfasted_1_TPM' => array(
            'color' => '#00B6EB',
            'name' => 'Tumour DENfasted 1 TPM'
        ),
        'norm_counts_Tumour_DENfasted_2_TPM' => array(
            'color' => '#00B6EB',
            'name' => 'Tumour DENfasted 2 TPM'
        ),
        'norm_counts_Tumour_DENfasted_3_TPM' => array(
            'color' => '#00B6EB',
            'name' => 'Tumour DENfasted 3 TPM'
        ),
        'norm_counts_Tumour_DENfed_1_TPM' => array(
            'color' => '#A58AFF',
            'name' => 'Tumour DENfed 1 TPM'
        ),
        'norm_counts_Tumour_DENfed_2_TPM' => array(
            'color' => '#A58AFF',
            'name' => 'Tumour DENfed 2 TPM'
        ),
        'norm_counts_Tumour_DENfed_3_TPM' => array(
            'color' => '#A58AFF',
            'name' => 'Tumour DENfed 3 TPM'
        ),
        'norm_counts_Tumour_nonDENfasted_3_TPM' => array(
            'color' => '#FB61D7',
            'name' => 'Tumour nonDENfasted 3 TPM'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Liver_DENfasted_1_TPM','lg2_avg_Liver_DENfasted_2_TPM','lg2_avg_Liver_DENfasted_3_TPM','lg2_avg_Liver_DENfed_1_TPM','lg2_avg_Liver_DENfed_3_TPM','lg2_avg_Liver_nonDENfasted_1_TPM','lg2_avg_Liver_nonDENfasted_2_TPM','lg2_avg_Liver_nonDENfasted_3_TPM','lg2_avg_Liver_nonDENfasted_4_TPM','lg2_avg_Liver_nonDENfed_1_TPM','lg2_avg_Liver_nonDENfed_2_TPM','lg2_avg_Liver_nonDENfed_3_TPM','lg2_avg_Tumour_DENfasted_1_TPM','lg2_avg_Tumour_DENfasted_2_TPM','lg2_avg_Tumour_DENfasted_3_TPM','lg2_avg_Tumour_DENfed_1_TPM','lg2_avg_Tumour_DENfed_2_TPM','lg2_avg_Tumour_DENfed_3_TPM','lg2_avg_Tumour_nonDENfasted_3_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_padj_DENfastedAdjLiver_vs_DENfedAdjLiver' => array(
            'name' => 'padj DENfastedAdjLiver vs DENfedAdjLiver',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_1_logFC_DENfastedAdjLiver_vs_DENfedAdjLiver' => array(
            'name' => 'logFC DENfastedAdjLiver vs DENfedAdjLiver',
            'slider_min' => -6,
            'slider_max' => 8,
            'default_low' => -6,
            'default_high' => 8
        ),
        'contrast_2_padj_DENfastedAdjLiver_vs_nonDENfastedLiver' => array(
            'name' => 'padj DENfastedAdjLiver vs nonDENfastedLiver',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_DENfastedAdjLiver_vs_nonDENfastedLiver' => array(
            'name' => 'logFC DENfastedAdjLiver vs nonDENfastedLiver',
            'slider_min' => -3,
            'slider_max' => 10,
            'default_low' => -3,
            'default_high' => 10
        ),
        'contrast_3_padj_DENfastedAdjLiver_vs_nonDENfedLiver' => array(
            'name' => 'padj DENfastedAdjLiver vs nonDENfedLiver',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_DENfastedAdjLiver_vs_nonDENfedLiver' => array(
            'name' => 'logFC DENfastedAdjLiver vs nonDENfedLiver',
            'slider_min' => -3,
            'slider_max' => 13,
            'default_low' => -3,
            'default_high' => 13
        ),
        'contrast_4_padj_DENfastedAdjLiver_vs_DENfastedTumour' => array(
            'name' => 'padj DENfastedAdjLiver vs DENfastedTumour',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_logFC_DENfastedAdjLiver_vs_DENfastedTumour' => array(
            'name' => 'logFC DENfastedAdjLiver vs DENfastedTumour',
            'slider_min' => -4,
            'slider_max' => 9,
            'default_low' => -4,
            'default_high' => 9
        ),
        'contrast_5_padj_DENfastedAdjLiver_vs_DENfedTumour' => array(
            'name' => 'padj DENfastedAdjLiver vs DENfedTumour',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_5_logFC_DENfastedAdjLiver_vs_DENfedTumour' => array(
            'name' => 'logFC DENfastedAdjLiver vs DENfedTumour',
            'slider_min' => -3,
            'slider_max' => 6,
            'default_low' => -3,
            'default_high' => 6
        ),
        'contrast_6_padj_DENfedAdjLiver_vs_nonDENfastedLiver' => array(
            'name' => 'padj DENfedAdjLiver vs nonDENfastedLiver',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_6_logFC_DENfedAdjLiver_vs_nonDENfastedLiver' => array(
            'name' => 'logFC DENfedAdjLiver vs nonDENfastedLiver',
            'slider_min' => -4,
            'slider_max' => 12,
            'default_low' => -4,
            'default_high' => 12
        ),
        'contrast_7_padj_DENfedAdjLiver_vs_nonDENfedLiver' => array(
            'name' => 'padj DENfedAdjLiver vs nonDENfedLiver',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_7_logFC_DENfedAdjLiver_vs_nonDENfedLiver' => array(
            'name' => 'logFC DENfedAdjLiver vs nonDENfedLiver',
            'slider_min' => -2,
            'slider_max' => 11,
            'default_low' => -2,
            'default_high' => 11
        ),
        'contrast_8_padj_DENfedAdjLiver_vs_DENfastedTumour' => array(
            'name' => 'padj DENfedAdjLiver vs DENfastedTumour',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_8_logFC_DENfedAdjLiver_vs_DENfastedTumour' => array(
            'name' => 'logFC DENfedAdjLiver vs DENfastedTumour',
            'slider_min' => -6,
            'slider_max' => 11,
            'default_low' => -6,
            'default_high' => 11
        ),
        'contrast_9_padj_DENfedAdjLiver_vs_DENfedTumour' => array(
            'name' => 'padj DENfedAdjLiver vs DENfedTumour',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_9_logFC_DENfedAdjLiver_vs_DENfedTumour' => array(
            'name' => 'logFC DENfedAdjLiver vs DENfedTumour',
            'slider_min' => -4,
            'slider_max' => 9,
            'default_low' => -4,
            'default_high' => 9
        ),
        'contrast_10_padj_nonDENfastedLiver_vs_nonDENfedLiver' => array(
            'name' => '0 padj nonDENfastedLiver vs nonDENfedLiver',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_10_logFC_nonDENfastedLiver_vs_nonDENfedLiver' => array(
            'name' => '0 logFC nonDENfastedLiver vs nonDENfedLiver',
            'slider_min' => -5,
            'slider_max' => 5,
            'default_low' => -5,
            'default_high' => 5
        ),
        'contrast_11_padj_nonDENfastedLiver_vs_DENfastedTumour' => array(
            'name' => '1 padj nonDENfastedLiver vs DENfastedTumour',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_11_logFC_nonDENfastedLiver_vs_DENfastedTumour' => array(
            'name' => '1 logFC nonDENfastedLiver vs DENfastedTumour',
            'slider_min' => -10,
            'slider_max' => 7,
            'default_low' => -10,
            'default_high' => 7
        ),
        'contrast_12_padj_nonDENfastedLiver_vs_DENfedTumour' => array(
            'name' => '2 padj nonDENfastedLiver vs DENfedTumour',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_12_logFC_nonDENfastedLiver_vs_DENfedTumour' => array(
            'name' => '2 logFC nonDENfastedLiver vs DENfedTumour',
            'slider_min' => -9,
            'slider_max' => 5,
            'default_low' => -9,
            'default_high' => 5
        ),
        'contrast_13_padj_nonDENfedLiver_vs_DENfastedTumour' => array(
            'name' => '3 padj nonDENfedLiver vs DENfastedTumour',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_13_logFC_nonDENfedLiver_vs_DENfastedTumour' => array(
            'name' => '3 logFC nonDENfedLiver vs DENfastedTumour',
            'slider_min' => -13,
            'slider_max' => 4,
            'default_low' => -13,
            'default_high' => 4
        ),
        'contrast_14_padj_nonDENfedLiver_vs_DENfedTumour' => array(
            'name' => '4 padj nonDENfedLiver vs DENfedTumour',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_14_logFC_nonDENfedLiver_vs_DENfedTumour' => array(
            'name' => '4 logFC nonDENfedLiver vs DENfedTumour',
            'slider_min' => -9,
            'slider_max' => 5,
            'default_low' => -9,
            'default_high' => 5
        ),
        'contrast_15_padj_DENfastedTumour_vs_DENfedTumour' => array(
            'name' => '5 padj DENfastedTumour vs DENfedTumour',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_15_logFC_DENfastedTumour_vs_DENfedTumour' => array(
            'name' => '5 logFC DENfastedTumour vs DENfedTumour',
            'slider_min' => -4,
            'slider_max' => 8,
            'default_low' => -4,
            'default_high' => 8
        ),
        'contrast_L_lg10p_LRT_Experiment' => array(
            'name' => 'lg10p LRT Experiment',
            'slider_min' => 0,
            'slider_max' => 14,
            'default_low' => 0,
            'default_high' => 14
        ),
        'contrast_L_lg10p_LRT_Feeding' => array(
            'name' => 'lg10p LRT Feeding',
            'slider_min' => 0,
            'slider_max' => 8,
            'default_low' => 0,
            'default_high' => 8
        ),
        'contrast_L_lg10p_LRT_Tissue' => array(
            'name' => 'lg10p LRT Tissue',
            'slider_min' => 0,
            'slider_max' => 8,
            'default_low' => 0,
            'default_high' => 8
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'p354_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_DENfastedAdjLiver_vs_DENfedAdjLiver',
        'default-y' => 'contrast_1_lg10p_DENfastedAdjLiver_vs_DENfedAdjLiver',
        'selection' => array(
            'contrast_1_logFC_DENfastedAdjLiver_vs_DENfedAdjLiver' => array(
                'name' => 'logFC DENfastedAdjLiver vs DENfedAdjLiver'
            ),
            'contrast_2_logFC_DENfastedAdjLiver_vs_nonDENfastedLiver' => array(
                'name' => 'logFC DENfastedAdjLiver vs nonDENfastedLiver'
            ),
            'contrast_3_logFC_DENfastedAdjLiver_vs_nonDENfedLiver' => array(
                'name' => 'logFC DENfastedAdjLiver vs nonDENfedLiver'
            ),
            'contrast_4_logFC_DENfastedAdjLiver_vs_DENfastedTumour' => array(
                'name' => 'logFC DENfastedAdjLiver vs DENfastedTumour'
            ),
            'contrast_5_logFC_DENfastedAdjLiver_vs_DENfedTumour' => array(
                'name' => 'logFC DENfastedAdjLiver vs DENfedTumour'
            ),
            'contrast_6_logFC_DENfedAdjLiver_vs_nonDENfastedLiver' => array(
                'name' => 'logFC DENfedAdjLiver vs nonDENfastedLiver'
            ),
            'contrast_7_logFC_DENfedAdjLiver_vs_nonDENfedLiver' => array(
                'name' => 'logFC DENfedAdjLiver vs nonDENfedLiver'
            ),
            'contrast_8_logFC_DENfedAdjLiver_vs_DENfastedTumour' => array(
                'name' => 'logFC DENfedAdjLiver vs DENfastedTumour'
            ),
            'contrast_9_logFC_DENfedAdjLiver_vs_DENfedTumour' => array(
                'name' => 'logFC DENfedAdjLiver vs DENfedTumour'
            ),
            'contrast_10_logFC_nonDENfastedLiver_vs_nonDENfedLiver' => array(
                'name' => '0 logFC nonDENfastedLiver vs nonDENfedLiver'
            ),
            'contrast_11_logFC_nonDENfastedLiver_vs_DENfastedTumour' => array(
                'name' => '1 logFC nonDENfastedLiver vs DENfastedTumour'
            ),
            'contrast_12_logFC_nonDENfastedLiver_vs_DENfedTumour' => array(
                'name' => '2 logFC nonDENfastedLiver vs DENfedTumour'
            ),
            'contrast_13_logFC_nonDENfedLiver_vs_DENfastedTumour' => array(
                'name' => '3 logFC nonDENfedLiver vs DENfastedTumour'
            ),
            'contrast_14_logFC_nonDENfedLiver_vs_DENfedTumour' => array(
                'name' => '4 logFC nonDENfedLiver vs DENfedTumour'
            ),
            'contrast_15_logFC_DENfastedTumour_vs_DENfedTumour' => array(
                'name' => '5 logFC DENfastedTumour vs DENfedTumour'
            ),
            'contrast_1_lg10p_DENfastedAdjLiver_vs_DENfedAdjLiver' => array(
                'name' => 'lg10p DENfastedAdjLiver vs DENfedAdjLiver'
            ),
            'contrast_2_lg10p_DENfastedAdjLiver_vs_nonDENfastedLiver' => array(
                'name' => 'lg10p DENfastedAdjLiver vs nonDENfastedLiver'
            ),
            'contrast_3_lg10p_DENfastedAdjLiver_vs_nonDENfedLiver' => array(
                'name' => 'lg10p DENfastedAdjLiver vs nonDENfedLiver'
            ),
            'contrast_4_lg10p_DENfastedAdjLiver_vs_DENfastedTumour' => array(
                'name' => 'lg10p DENfastedAdjLiver vs DENfastedTumour'
            ),
            'contrast_5_lg10p_DENfastedAdjLiver_vs_DENfedTumour' => array(
                'name' => 'lg10p DENfastedAdjLiver vs DENfedTumour'
            ),
            'contrast_6_lg10p_DENfedAdjLiver_vs_nonDENfastedLiver' => array(
                'name' => 'lg10p DENfedAdjLiver vs nonDENfastedLiver'
            ),
            'contrast_7_lg10p_DENfedAdjLiver_vs_nonDENfedLiver' => array(
                'name' => 'lg10p DENfedAdjLiver vs nonDENfedLiver'
            ),
            'contrast_8_lg10p_DENfedAdjLiver_vs_DENfastedTumour' => array(
                'name' => 'lg10p DENfedAdjLiver vs DENfastedTumour'
            ),
            'contrast_9_lg10p_DENfedAdjLiver_vs_DENfedTumour' => array(
                'name' => 'lg10p DENfedAdjLiver vs DENfedTumour'
            ),
            'contrast_10_lg10p_nonDENfastedLiver_vs_nonDENfedLiver' => array(
                'name' => '0 lg10p nonDENfastedLiver vs nonDENfedLiver'
            ),
            'contrast_11_lg10p_nonDENfastedLiver_vs_DENfastedTumour' => array(
                'name' => '1 lg10p nonDENfastedLiver vs DENfastedTumour'
            ),
            'contrast_12_lg10p_nonDENfastedLiver_vs_DENfedTumour' => array(
                'name' => '2 lg10p nonDENfastedLiver vs DENfedTumour'
            ),
            'contrast_13_lg10p_nonDENfedLiver_vs_DENfastedTumour' => array(
                'name' => '3 lg10p nonDENfedLiver vs DENfastedTumour'
            ),
            'contrast_14_lg10p_nonDENfedLiver_vs_DENfedTumour' => array(
                'name' => '4 lg10p nonDENfedLiver vs DENfedTumour'
            ),
            'contrast_15_lg10p_DENfastedTumour_vs_DENfedTumour' => array(
                'name' => '5 lg10p DENfastedTumour vs DENfedTumour'
            ),
            'contrast_L_lg10p_LRT_Experiment' => array(
                'name' => 'lg10p LRT Experiment'
            ),
            'contrast_L_lg10p_LRT_Feeding' => array(
                'name' => 'lg10p LRT Feeding'
            ),
            'contrast_L_lg10p_LRT_Tissue' => array(
                'name' => 'lg10p LRT Tissue'
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
            'contrast_1_lg2BaseMean_DENfastedAdjLiver_vs_DENfedAdjLiver' => array(
                'name' => 'lg2BaseMean DENfastedAdjLiver vs DENfedAdjLiver'
            ),
            'contrast_2_lg2BaseMean_DENfastedAdjLiver_vs_nonDENfastedLiver' => array(
                'name' => 'lg2BaseMean DENfastedAdjLiver vs nonDENfastedLiver'
            ),
            'contrast_3_lg2BaseMean_DENfastedAdjLiver_vs_nonDENfedLiver' => array(
                'name' => 'lg2BaseMean DENfastedAdjLiver vs nonDENfedLiver'
            ),
            'contrast_4_lg2BaseMean_DENfastedAdjLiver_vs_DENfastedTumour' => array(
                'name' => 'lg2BaseMean DENfastedAdjLiver vs DENfastedTumour'
            ),
            'contrast_5_lg2BaseMean_DENfastedAdjLiver_vs_DENfedTumour' => array(
                'name' => 'lg2BaseMean DENfastedAdjLiver vs DENfedTumour'
            ),
            'contrast_6_lg2BaseMean_DENfedAdjLiver_vs_nonDENfastedLiver' => array(
                'name' => 'lg2BaseMean DENfedAdjLiver vs nonDENfastedLiver'
            ),
            'contrast_7_lg2BaseMean_DENfedAdjLiver_vs_nonDENfedLiver' => array(
                'name' => 'lg2BaseMean DENfedAdjLiver vs nonDENfedLiver'
            ),
            'contrast_8_lg2BaseMean_DENfedAdjLiver_vs_DENfastedTumour' => array(
                'name' => 'lg2BaseMean DENfedAdjLiver vs DENfastedTumour'
            ),
            'contrast_9_lg2BaseMean_DENfedAdjLiver_vs_DENfedTumour' => array(
                'name' => 'lg2BaseMean DENfedAdjLiver vs DENfedTumour'
            ),
            'contrast_10_lg2BaseMean_nonDENfastedLiver_vs_nonDENfedLiver' => array(
                'name' => '0 lg2BaseMean nonDENfastedLiver vs nonDENfedLiver'
            ),
            'contrast_11_lg2BaseMean_nonDENfastedLiver_vs_DENfastedTumour' => array(
                'name' => '1 lg2BaseMean nonDENfastedLiver vs DENfastedTumour'
            ),
            'contrast_12_lg2BaseMean_nonDENfastedLiver_vs_DENfedTumour' => array(
                'name' => '2 lg2BaseMean nonDENfastedLiver vs DENfedTumour'
            ),
            'contrast_13_lg2BaseMean_nonDENfedLiver_vs_DENfastedTumour' => array(
                'name' => '3 lg2BaseMean nonDENfedLiver vs DENfastedTumour'
            ),
            'contrast_14_lg2BaseMean_nonDENfedLiver_vs_DENfedTumour' => array(
                'name' => '4 lg2BaseMean nonDENfedLiver vs DENfedTumour'
            ),
            'contrast_15_lg2BaseMean_DENfastedTumour_vs_DENfedTumour' => array(
                'name' => '5 lg2BaseMean DENfastedTumour vs DENfedTumour'
            ),
            'contrast_L_lg2BaseMean_LRT_Experiment' => array(
                'name' => 'lg2BaseMean LRT Experiment'
            ),
            'contrast_L_lg2BaseMean_LRT_Feeding' => array(
                'name' => 'lg2BaseMean LRT Feeding'
            ),
            'contrast_L_lg2BaseMean_LRT_Tissue' => array(
                'name' => 'lg2BaseMean LRT Tissue'
            )
        )
    )
//End scatterplot
);
