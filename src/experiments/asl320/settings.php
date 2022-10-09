<?php

return array(
    'public_access' => TRUE,
    'lab' => array(
        'name' => 'Schaefer DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'asl_data',
    'data_db' => array(
            'cat_table_name' => 'asl320_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'p320_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_S_M_1_TPM' => array(
            'color' => '#F8766D',
            'name' => 'S M 1 TPM'
        ),
        'norm_counts_S_M_2_TPM' => array(
            'color' => '#F8766D',
            'name' => 'S M 2 TPM'
        ),
        'norm_counts_S_M_3_TPM' => array(
            'color' => '#F8766D',
            'name' => 'S M 3 TPM'
        ),
        'norm_counts_S_T_1_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'S T 1 TPM'
        ),
        'norm_counts_S_T_2_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'S T 2 TPM'
        ),
        'norm_counts_S_T_3_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'S T 3 TPM'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_S_M_1_TPM','lg2_avg_S_M_2_TPM','lg2_avg_S_M_3_TPM','lg2_avg_S_T_1_TPM','lg2_avg_S_T_2_TPM','lg2_avg_S_T_3_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_S_M_vs_S_T' => array(
            'name' => 'logFC S M vs S T',
            'slider_min' => -4,
            'slider_max' => 5,
            'default_low' => -4,
            'default_high' => 5
        ),
        'contrast_1_padj_S_M_vs_S_T' => array(
            'name' => 'padj S M vs S T',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'p320_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_S_M_vs_S_T',
        'default-y' => 'contrast_1_lg10p_S_M_vs_S_T',
        'selection' => array(
            'contrast_1_logFC_S_M_vs_S_T' => array(
                'name' => 'logFC S M vs S T'
            ),
            'contrast_1_lg10p_S_M_vs_S_T' => array(
                'name' => 'lg10p S M vs S T'
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
            'contrast_1_lg2BaseMean_S_M_vs_S_T' => array(
                'name' => 'lg2BaseMean S M vs S T'
            )
        )
    )
//End scatterplot
);
