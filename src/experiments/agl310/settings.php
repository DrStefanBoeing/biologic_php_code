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
            'cat_table_name' => 'agl310_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'p310_rna_seq_table',
    'primary_gene_symbol' => 'hgnc_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_T2Neuroblast_24hr_1_TPM' => array(
            'color' => '#8DD3C7',
            'name' => 'T2Neuroblast 24hr 1 TPM'
        ),
        'norm_counts_T2Neuroblast_24hr_2_TPM' => array(
            'color' => '#8DD3C7',
            'name' => 'T2Neuroblast 24hr 2 TPM'
        ),
        'norm_counts_T2Neuroblast_24hr_3_TPM' => array(
            'color' => '#8DD3C7',
            'name' => 'T2Neuroblast 24hr 3 TPM'
        ),
        'norm_counts_T2Neuroblast_36hr_1_TPM' => array(
            'color' => '#A9A0B2',
            'name' => 'T2Neuroblast 36hr 1 TPM'
        ),
        'norm_counts_T2Neuroblast_36hr_2_TPM' => array(
            'color' => '#A9A0B2',
            'name' => 'T2Neuroblast 36hr 2 TPM'
        ),
        'norm_counts_T2Neuroblast_36hr_3_TPM' => array(
            'color' => '#A9A0B2',
            'name' => 'T2Neuroblast 36hr 3 TPM'
        ),
        'norm_counts_T2Neuroblast_50hr_1_TPM' => array(
            'color' => '#F0D1E1',
            'name' => 'T2Neuroblast 50hr 1 TPM'
        ),
        'norm_counts_T2Neuroblast_50hr_2_TPM' => array(
            'color' => '#F0D1E1',
            'name' => 'T2Neuroblast 50hr 2 TPM'
        ),
        'norm_counts_T2Neuroblast_50hr_3_TPM' => array(
            'color' => '#F0D1E1',
            'name' => 'T2Neuroblast 50hr 3 TPM'
        ),
        'norm_counts_T2Neuroblast_84hr_1_TPM' => array(
            'color' => '#FFED6F',
            'name' => 'T2Neuroblast 84hr 1 TPM'
        ),
        'norm_counts_T2Neuroblast_84hr_2_TPM' => array(
            'color' => '#FFED6F',
            'name' => 'T2Neuroblast 84hr 2 TPM'
        ),
        'norm_counts_T2Neuroblast_84hr_3_TPM' => array(
            'color' => '#FFED6F',
            'name' => 'T2Neuroblast 84hr 3 TPM'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_T2Neuroblast_24hr_1_TPM','lg2_avg_T2Neuroblast_24hr_2_TPM','lg2_avg_T2Neuroblast_24hr_3_TPM','lg2_avg_T2Neuroblast_36hr_1_TPM','lg2_avg_T2Neuroblast_36hr_2_TPM','lg2_avg_T2Neuroblast_36hr_3_TPM','lg2_avg_T2Neuroblast_50hr_1_TPM','lg2_avg_T2Neuroblast_50hr_2_TPM','lg2_avg_T2Neuroblast_50hr_3_TPM','lg2_avg_T2Neuroblast_84hr_1_TPM','lg2_avg_T2Neuroblast_84hr_2_TPM','lg2_avg_T2Neuroblast_84hr_3_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_T2Neuroblast_36hr_vs_T2Neuroblast_24hr' => array(
            'name' => 'logFC T2Neuroblast 36hr vs T2Neuroblast 24hr',
            'slider_min' => -3,
            'slider_max' => 4,
            'default_low' => -3,
            'default_high' => 4
        ),
        'contrast_2_logFC_T2Neuroblast_50hr_vs_T2Neuroblast_36hr' => array(
            'name' => 'logFC T2Neuroblast 50hr vs T2Neuroblast 36hr',
            'slider_min' => -5,
            'slider_max' => 4,
            'default_low' => -5,
            'default_high' => 4
        ),
        'contrast_3_logFC_T2Neuroblast_84hr_vs_T2Neuroblast_50hr' => array(
            'name' => 'logFC T2Neuroblast 84hr vs T2Neuroblast 50hr',
            'slider_min' => -5,
            'slider_max' => 4,
            'default_low' => -5,
            'default_high' => 4
        ),
        'contrast_4_logFC_T2Neuroblast_84hr_vs_T2Neuroblast_36hr' => array(
            'name' => 'logFC T2Neuroblast 84hr vs T2Neuroblast 36hr',
            'slider_min' => -8,
            'slider_max' => 7,
            'default_low' => -8,
            'default_high' => 7
        ),
        'contrast_P_PCA_estimatePCA1' => array(
            'name' => 'PCA estimatePCA1',
            'slider_min' => -31,
            'slider_max' => 31,
            'default_low' => -31,
            'default_high' => 31
        ),
        'contrast_P_PCA_estimatePCA2' => array(
            'name' => 'PCA estimatePCA2',
            'slider_min' => -15,
            'slider_max' => 14,
            'default_low' => -15,
            'default_high' => 14
        ),
        'contrast_P_PCA_estimatePCA3' => array(
            'name' => 'PCA estimatePCA3',
            'slider_min' => -11,
            'slider_max' => 10,
            'default_low' => -11,
            'default_high' => 10
        ),
        'contrast_P_PCA_estimatePCA4' => array(
            'name' => 'PCA estimatePCA4',
            'slider_min' => -7,
            'slider_max' => 7,
            'default_low' => -7,
            'default_high' => 7
        ),
        'contrast_P_PCA_estimatePCA5' => array(
            'name' => 'PCA estimatePCA5',
            'slider_min' => -7,
            'slider_max' => 5,
            'default_low' => -7,
            'default_high' => 5
        ),
        'contrast_1_padj_T2Neuroblast_36hr_vs_T2Neuroblast_24hr' => array(
            'name' => 'padj T2Neuroblast 36hr vs T2Neuroblast 24hr',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_padj_T2Neuroblast_50hr_vs_T2Neuroblast_36hr' => array(
            'name' => 'padj T2Neuroblast 50hr vs T2Neuroblast 36hr',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_padj_T2Neuroblast_84hr_vs_T2Neuroblast_50hr' => array(
            'name' => 'padj T2Neuroblast 84hr vs T2Neuroblast 50hr',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_padj_T2Neuroblast_84hr_vs_T2Neuroblast_36hr' => array(
            'name' => 'padj T2Neuroblast 84hr vs T2Neuroblast 36hr',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_L_lg10p_LRT_timepoint' => array(
            'name' => 'lg10p LRT timepoint',
            'slider_min' => 0,
            'slider_max' => 177,
            'default_low' => 0,
            'default_high' => 177
        )
    )
    ),
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_T2Neuroblast_36hr_vs_T2Neuroblast_24hr',
        'default-y' => 'contrast_2_logFC_T2Neuroblast_50hr_vs_T2Neuroblast_36hr',
        'selection' => array(
            'contrast_1_logFC_T2Neuroblast_36hr_vs_T2Neuroblast_24hr' => array(
                'name' => 'logFC T2Neuroblast 36hr vs T2Neuroblast 24hr'
            ),
            'contrast_2_logFC_T2Neuroblast_50hr_vs_T2Neuroblast_36hr' => array(
                'name' => 'logFC T2Neuroblast 50hr vs T2Neuroblast 36hr'
            ),
            'contrast_3_logFC_T2Neuroblast_84hr_vs_T2Neuroblast_50hr' => array(
                'name' => 'logFC T2Neuroblast 84hr vs T2Neuroblast 50hr'
            ),
            'contrast_4_logFC_T2Neuroblast_84hr_vs_T2Neuroblast_36hr' => array(
                'name' => 'logFC T2Neuroblast 84hr vs T2Neuroblast 36hr'
            ),
            'contrast_1_lg10p_T2Neuroblast_36hr_vs_T2Neuroblast_24hr' => array(
                'name' => 'lg10p T2Neuroblast 36hr vs T2Neuroblast 24hr'
            ),
            'contrast_2_lg10p_T2Neuroblast_50hr_vs_T2Neuroblast_36hr' => array(
                'name' => 'lg10p T2Neuroblast 50hr vs T2Neuroblast 36hr'
            ),
            'contrast_3_lg10p_T2Neuroblast_84hr_vs_T2Neuroblast_50hr' => array(
                'name' => 'lg10p T2Neuroblast 84hr vs T2Neuroblast 50hr'
            ),
            'contrast_4_lg10p_T2Neuroblast_84hr_vs_T2Neuroblast_36hr' => array(
                'name' => 'lg10p T2Neuroblast 84hr vs T2Neuroblast 36hr'
            ),
            'contrast_L_lg10p_LRT_timepoint' => array(
                'name' => 'lg10p LRT timepoint'
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
            )
        )
    )
//End scatterplot
);
