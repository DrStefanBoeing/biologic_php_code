<?php

return array(
    'public_access' => TRUE,
    'lab' => array(
        'name' => 'Ley DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'sll_data',
    'data_db' => array(
            'cat_table_name' => 'sll377_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'sll377_rna_seq_table',
    'primary_gene_symbol' => 'hgnc_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_KC_Untretated_1_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'KC Untretated 1 TPM'
        ),
        'norm_counts_KC_Untretated_2_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'KC Untretated 2 TPM'
        ),
        'norm_counts_KC_Untretated_3_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'KC Untretated 3 TPM'
        ),
        'norm_counts_KC_IL36alpha_1_TPM' => array(
            'color' => '#F8766D',
            'name' => 'KC IL36alpha 1 TPM'
        ),
        'norm_counts_KC_IL36alpha_2_TPM' => array(
            'color' => '#F8766D',
            'name' => 'KC IL36alpha 2 TPM'
        ),
        'norm_counts_KC_IL36alpha_3_TPM' => array(
            'color' => '#F8766D',
            'name' => 'KC IL36alpha 3 TPM'
        ),
        'norm_counts_KC_IL36beta_1_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'KC IL36beta 1 TPM'
        ),
        'norm_counts_KC_IL36beta_2_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'KC IL36beta 2 TPM'
        ),
        'norm_counts_KC_IL36beta_3_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'KC IL36beta 3 TPM'
        ),
        'norm_counts_KC_IL36gamma_1_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'KC IL36gamma 1 TPM'
        ),
        'norm_counts_KC_IL36gamma_2_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'KC IL36gamma 2 TPM'
        ),
        'norm_counts_KC_IL36gamma_3_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'KC IL36gamma 3 TPM'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_KC_Untretated_1_TPM','lg2_avg_KC_Untretated_2_TPM','lg2_avg_KC_Untretated_3_TPM','lg2_avg_KC_IL36alpha_1_TPM','lg2_avg_KC_IL36alpha_2_TPM','lg2_avg_KC_IL36alpha_3_TPM','lg2_avg_KC_IL36beta_1_TPM','lg2_avg_KC_IL36beta_2_TPM','lg2_avg_KC_IL36beta_3_TPM','lg2_avg_KC_IL36gamma_1_TPM','lg2_avg_KC_IL36gamma_2_TPM','lg2_avg_KC_IL36gamma_3_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_KC_IL36alpha_vs_KC_Untretated' => array(
            'name' => 'logFC KC IL36alpha vs KC Untretated',
            'slider_min' => -3,
            'slider_max' => 5,
            'default_low' => -3,
            'default_high' => 5
        ),
        'contrast_1_padj_KC_IL36alpha_vs_KC_Untretated' => array(
            'name' => 'padj KC IL36alpha vs KC Untretated',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_KC_IL36beta_vs_KC_Untretated' => array(
            'name' => 'logFC KC IL36beta vs KC Untretated',
            'slider_min' => -3,
            'slider_max' => 7,
            'default_low' => -3,
            'default_high' => 7
        ),
        'contrast_2_padj_KC_IL36beta_vs_KC_Untretated' => array(
            'name' => 'padj KC IL36beta vs KC Untretated',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_KC_IL36gamma_vs_KC_Untretated' => array(
            'name' => 'logFC KC IL36gamma vs KC Untretated',
            'slider_min' => -3,
            'slider_max' => 6,
            'default_low' => -3,
            'default_high' => 6
        ),
        'contrast_3_padj_KC_IL36gamma_vs_KC_Untretated' => array(
            'name' => 'padj KC IL36gamma vs KC Untretated',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_IL36G' => array(
            'name' => 'corCoef IL36G',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_MAP3K8' => array(
            'name' => 'corCoef MAP3K8',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_L_lg10p_LRT_treatment' => array(
            'name' => 'lg10p LRT treatment',
            'slider_min' => 0,
            'slider_max' => 298,
            'default_low' => 0,
            'default_high' => 298
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'sll377_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_KC_IL36alpha_vs_KC_Untretated',
        'default-y' => 'contrast_1_lg10p_KC_IL36alpha_vs_KC_Untretated',
        'selection' => array(
            'contrast_1_logFC_KC_IL36alpha_vs_KC_Untretated' => array(
                'name' => 'logFC KC IL36alpha vs KC Untretated'
            ),
            'contrast_2_logFC_KC_IL36beta_vs_KC_Untretated' => array(
                'name' => 'logFC KC IL36beta vs KC Untretated'
            ),
            'contrast_3_logFC_KC_IL36gamma_vs_KC_Untretated' => array(
                'name' => 'logFC KC IL36gamma vs KC Untretated'
            ),
            'contrast_1_lg10p_KC_IL36alpha_vs_KC_Untretated' => array(
                'name' => 'lg10p KC IL36alpha vs KC Untretated'
            ),
            'contrast_2_lg10p_KC_IL36beta_vs_KC_Untretated' => array(
                'name' => 'lg10p KC IL36beta vs KC Untretated'
            ),
            'contrast_3_lg10p_KC_IL36gamma_vs_KC_Untretated' => array(
                'name' => 'lg10p KC IL36gamma vs KC Untretated'
            ),
            'contrast_L_lg10p_LRT_treatment' => array(
                'name' => 'lg10p LRT treatment'
            ),
            'add_venn_X_corCoef_IL36G' => array(
                'name' => 'corCoef IL36G'
            ),
            'add_venn_X_corCoef_MAP3K8' => array(
                'name' => 'corCoef MAP3K8'
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
            'contrast_1_lg2BaseMean_KC_IL36alpha_vs_KC_Untretated' => array(
                'name' => 'lg2BaseMean KC IL36alpha vs KC Untretated'
            ),
            'contrast_2_lg2BaseMean_KC_IL36beta_vs_KC_Untretated' => array(
                'name' => 'lg2BaseMean KC IL36beta vs KC Untretated'
            ),
            'contrast_3_lg2BaseMean_KC_IL36gamma_vs_KC_Untretated' => array(
                'name' => 'lg2BaseMean KC IL36gamma vs KC Untretated'
            ),
            'contrast_L_lg2BaseMean_LRT_treatment' => array(
                'name' => 'lg2BaseMean LRT treatment'
            )
        )
    )
//End scatterplot
);
