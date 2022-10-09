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
            'cat_table_name' => 'dal353_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'p353_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_DEN_Fasted_1_TPM' => array(
            'color' => '#F8766D',
            'name' => 'DEN Fasted 1 TPM'
        ),
        'norm_counts_DEN_Fasted_2_TPM' => array(
            'color' => '#F8766D',
            'name' => 'DEN Fasted 2 TPM'
        ),
        'norm_counts_DEN_Fasted_3_TPM' => array(
            'color' => '#F8766D',
            'name' => 'DEN Fasted 3 TPM'
        ),
        'norm_counts_DEN_Fed_1_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'DEN Fed 1 TPM'
        ),
        'norm_counts_DEN_Fed_2_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'DEN Fed 2 TPM'
        ),
        'norm_counts_DEN_Fed_3_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'DEN Fed 3 TPM'
        ),
        'norm_counts_nonDEN_Fasted_1_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'nonDEN Fasted 1 TPM'
        ),
        'norm_counts_nonDEN_Fasted_2_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'nonDEN Fasted 2 TPM'
        ),
        'norm_counts_nonDEN_Fasted_3_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'nonDEN Fasted 3 TPM'
        ),
        'norm_counts_nonDEN_Fasted_4_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'nonDEN Fasted 4 TPM'
        ),
        'norm_counts_nonDEN_Fed_1_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'nonDEN Fed 1 TPM'
        ),
        'norm_counts_nonDEN_Fed_2_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'nonDEN Fed 2 TPM'
        ),
        'norm_counts_nonDEN_Fed_3_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'nonDEN Fed 3 TPM'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_DEN_Fasted_1_TPM','lg2_avg_DEN_Fasted_2_TPM','lg2_avg_DEN_Fasted_3_TPM','lg2_avg_DEN_Fed_1_TPM','lg2_avg_DEN_Fed_2_TPM','lg2_avg_DEN_Fed_3_TPM','lg2_avg_nonDEN_Fasted_1_TPM','lg2_avg_nonDEN_Fasted_2_TPM','lg2_avg_nonDEN_Fasted_3_TPM','lg2_avg_nonDEN_Fasted_4_TPM','lg2_avg_nonDEN_Fed_1_TPM','lg2_avg_nonDEN_Fed_2_TPM','lg2_avg_nonDEN_Fed_3_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_padj_DENFasted_vs_DENFed' => array(
            'name' => 'padj DENFasted vs DENFed',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_1_logFC_DENFasted_vs_DENFed' => array(
            'name' => 'logFC DENFasted vs DENFed',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'contrast_2_padj_DENFasted_vs_nonDENFasted' => array(
            'name' => 'padj DENFasted vs nonDENFasted',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_DENFasted_vs_nonDENFasted' => array(
            'name' => 'logFC DENFasted vs nonDENFasted',
            'slider_min' => -2,
            'slider_max' => 3,
            'default_low' => -2,
            'default_high' => 3
        ),
        'contrast_3_padj_DENFasted_vs_nonDENFed' => array(
            'name' => 'padj DENFasted vs nonDENFed',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_DENFasted_vs_nonDENFed' => array(
            'name' => 'logFC DENFasted vs nonDENFed',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'contrast_4_padj_DENFed_vs_nonDENFasted' => array(
            'name' => 'padj DENFed vs nonDENFasted',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_logFC_DENFed_vs_nonDENFasted' => array(
            'name' => 'logFC DENFed vs nonDENFasted',
            'slider_min' => -2,
            'slider_max' => 4,
            'default_low' => -2,
            'default_high' => 4
        ),
        'contrast_5_padj_DENFed_vs_nonDENFed' => array(
            'name' => 'padj DENFed vs nonDENFed',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_5_logFC_DENFed_vs_nonDENFed' => array(
            'name' => 'logFC DENFed vs nonDENFed',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_6_padj_nonDENFasted_vs_nonDENFed' => array(
            'name' => 'padj nonDENFasted vs nonDENFed',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_6_logFC_nonDENFasted_vs_nonDENFed' => array(
            'name' => 'logFC nonDENFasted vs nonDENFed',
            'slider_min' => -3,
            'slider_max' => 8,
            'default_low' => -3,
            'default_high' => 8
        ),
        'contrast_L_lg10p_LRT_DEN_nonDEN' => array(
            'name' => 'lg10p LRT DEN nonDEN',
            'slider_min' => 0,
            'slider_max' => 8,
            'default_low' => 0,
            'default_high' => 8
        ),
        'contrast_L_lg10p_LRT_Fed_Fasted' => array(
            'name' => 'lg10p LRT Fed Fasted',
            'slider_min' => 0,
            'slider_max' => 11,
            'default_low' => 0,
            'default_high' => 11
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'p353_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_DENFasted_vs_DENFed',
        'default-y' => 'contrast_1_lg10p_DENFasted_vs_DENFed',
        'selection' => array(
            'contrast_1_logFC_DENFasted_vs_DENFed' => array(
                'name' => 'logFC DENFasted vs DENFed'
            ),
            'contrast_2_logFC_DENFasted_vs_nonDENFasted' => array(
                'name' => 'logFC DENFasted vs nonDENFasted'
            ),
            'contrast_3_logFC_DENFasted_vs_nonDENFed' => array(
                'name' => 'logFC DENFasted vs nonDENFed'
            ),
            'contrast_4_logFC_DENFed_vs_nonDENFasted' => array(
                'name' => 'logFC DENFed vs nonDENFasted'
            ),
            'contrast_5_logFC_DENFed_vs_nonDENFed' => array(
                'name' => 'logFC DENFed vs nonDENFed'
            ),
            'contrast_6_logFC_nonDENFasted_vs_nonDENFed' => array(
                'name' => 'logFC nonDENFasted vs nonDENFed'
            ),
            'contrast_1_lg10p_DENFasted_vs_DENFed' => array(
                'name' => 'lg10p DENFasted vs DENFed'
            ),
            'contrast_2_lg10p_DENFasted_vs_nonDENFasted' => array(
                'name' => 'lg10p DENFasted vs nonDENFasted'
            ),
            'contrast_3_lg10p_DENFasted_vs_nonDENFed' => array(
                'name' => 'lg10p DENFasted vs nonDENFed'
            ),
            'contrast_4_lg10p_DENFed_vs_nonDENFasted' => array(
                'name' => 'lg10p DENFed vs nonDENFasted'
            ),
            'contrast_5_lg10p_DENFed_vs_nonDENFed' => array(
                'name' => 'lg10p DENFed vs nonDENFed'
            ),
            'contrast_6_lg10p_nonDENFasted_vs_nonDENFed' => array(
                'name' => 'lg10p nonDENFasted vs nonDENFed'
            ),
            'contrast_L_lg10p_LRT_DEN_nonDEN' => array(
                'name' => 'lg10p LRT DEN nonDEN'
            ),
            'contrast_L_lg10p_LRT_Fed_Fasted' => array(
                'name' => 'lg10p LRT Fed Fasted'
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
            'contrast_1_lg2BaseMean_DENFasted_vs_DENFed' => array(
                'name' => 'lg2BaseMean DENFasted vs DENFed'
            ),
            'contrast_2_lg2BaseMean_DENFasted_vs_nonDENFasted' => array(
                'name' => 'lg2BaseMean DENFasted vs nonDENFasted'
            ),
            'contrast_3_lg2BaseMean_DENFasted_vs_nonDENFed' => array(
                'name' => 'lg2BaseMean DENFasted vs nonDENFed'
            ),
            'contrast_4_lg2BaseMean_DENFed_vs_nonDENFasted' => array(
                'name' => 'lg2BaseMean DENFed vs nonDENFasted'
            ),
            'contrast_5_lg2BaseMean_DENFed_vs_nonDENFed' => array(
                'name' => 'lg2BaseMean DENFed vs nonDENFed'
            ),
            'contrast_6_lg2BaseMean_nonDENFasted_vs_nonDENFed' => array(
                'name' => 'lg2BaseMean nonDENFasted vs nonDENFed'
            ),
            'contrast_L_lg2BaseMean_LRT_DEN_nonDEN' => array(
                'name' => 'lg2BaseMean LRT DEN nonDEN'
            ),
            'contrast_L_lg2BaseMean_LRT_Fed_Fasted' => array(
                'name' => 'lg2BaseMean LRT Fed Fasted'
            )
        )
    )
//End scatterplot
);
