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
            'cat_table_name' => 'RN20086_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'RN20086_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_WT_LP_E50_TPM' => array(
            'color' => '#F8766D',
            'name' => 'WT LP E50 TPM'
        ),
        'norm_counts_WT_LP_E55_TPM' => array(
            'color' => '#F8766D',
            'name' => 'WT LP E55 TPM'
        ),
        'norm_counts_WT_LP_E64_TPM' => array(
            'color' => '#F8766D',
            'name' => 'WT LP E64 TPM'
        ),
        'norm_counts_WT_LP_E70_TPM' => array(
            'color' => '#F8766D',
            'name' => 'WT LP E70 TPM'
        ),
        'norm_counts_WT_LP_E74_TPM' => array(
            'color' => '#F8766D',
            'name' => 'WT LP E74 TPM'
        ),
        'norm_counts_WT_STD_E56_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'WT STD E56 TPM'
        ),
        'norm_counts_WT_STD_E63_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'WT STD E63 TPM'
        ),
        'norm_counts_WT_STD_E77_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'WT STD E77 TPM'
        ),
        'norm_counts_WT_STD_E83_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'WT STD E83 TPM'
        ),
        'norm_counts_WT_STD_E84_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'WT STD E84 TPM'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_WT_LP_E50_TPM','lg2_avg_WT_LP_E55_TPM','lg2_avg_WT_LP_E64_TPM','lg2_avg_WT_LP_E70_TPM','lg2_avg_WT_LP_E74_TPM','lg2_avg_WT_STD_E56_TPM','lg2_avg_WT_STD_E63_TPM','lg2_avg_WT_STD_E77_TPM','lg2_avg_WT_STD_E83_TPM','lg2_avg_WT_STD_E84_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_LP_vs_STD' => array(
            'name' => 'logFC LP vs STD',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_1_padj_LP_vs_STD' => array(
            'name' => 'padj LP vs STD',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_Igf1r' => array(
            'name' => 'corCoef Igf1r',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_Mtor' => array(
            'name' => 'corCoef Mtor',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_L_lg10p_LRT_Treatment' => array(
            'name' => 'lg10p LRT Treatment',
            'slider_min' => 0,
            'slider_max' => 22,
            'default_low' => 0,
            'default_high' => 22
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'RN20086_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_LP_vs_STD',
        'default-y' => 'contrast_1_lg10p_LP_vs_STD',
        'selection' => array(
            'contrast_1_logFC_LP_vs_STD' => array(
                'name' => 'logFC LP vs STD'
            ),
            'contrast_1_lg10p_LP_vs_STD' => array(
                'name' => 'lg10p LP vs STD'
            ),
            'contrast_L_lg10p_LRT_Treatment' => array(
                'name' => 'lg10p LRT Treatment'
            ),
            'add_venn_X_corCoef_Igf1r' => array(
                'name' => 'corCoef Igf1r'
            ),
            'add_venn_X_corCoef_Mtor' => array(
                'name' => 'corCoef Mtor'
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
            'contrast_1_lg2BaseMean_LP_vs_STD' => array(
                'name' => 'lg2BaseMean LP vs STD'
            ),
            'contrast_L_lg2BaseMean_LRT_Treatment' => array(
                'name' => 'lg2BaseMean LRT Treatment'
            )
        )
    )
//End scatterplot
);
