<?php

return array(
    'lab' => array(
        'name' => 'Schaefer DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'asl_data',
    'data_db' => array(
            'cat_table_name' => 'asl320A_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'asl320A_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_N_AON_1_TPM' => array(
            'color' => '#F8766D',
            'name' => 'N AON 1 TPM'
        ),
        'norm_counts_N_AON_2_TPM' => array(
            'color' => '#F8766D',
            'name' => 'N AON 2 TPM'
        ),
        'norm_counts_N_AON_3_TPM' => array(
            'color' => '#F8766D',
            'name' => 'N AON 3 TPM'
        ),
        'norm_counts_N_PCx_1_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'N PCx 1 TPM'
        ),
        'norm_counts_N_PCx_2_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'N PCx 2 TPM'
        ),
        'norm_counts_N_PCx_3_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'N PCx 3 TPM'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_N_AON_1_TPM','lg2_avg_N_AON_2_TPM','lg2_avg_N_AON_3_TPM','lg2_avg_N_PCx_1_TPM','lg2_avg_N_PCx_2_TPM','lg2_avg_N_PCx_3_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_N_AON_vs_N_PCx' => array(
            'name' => 'logFC N AON vs N PCx',
            'slider_min' => -5,
            'slider_max' => 3,
            'default_low' => -5,
            'default_high' => 3
        ),
        'contrast_1_padj_N_AON_vs_N_PCx' => array(
            'name' => 'padj N AON vs N PCx',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_Lamp5' => array(
            'name' => 'corCoef Lamp5',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_Tshz2' => array(
            'name' => 'corCoef Tshz2',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'asl320A_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_N_AON_vs_N_PCx',
        'default-y' => 'contrast_1_lg10p_N_AON_vs_N_PCx',
        'selection' => array(
            'contrast_1_logFC_N_AON_vs_N_PCx' => array(
                'name' => 'logFC N AON vs N PCx'
            ),
            'contrast_1_lg10p_N_AON_vs_N_PCx' => array(
                'name' => 'lg10p N AON vs N PCx'
            ),
            'add_venn_X_corCoef_Lamp5' => array(
                'name' => 'corCoef Lamp5'
            ),
            'add_venn_X_corCoef_Tshz2' => array(
                'name' => 'corCoef Tshz2'
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
            'contrast_1_lg2BaseMean_N_AON_vs_N_PCx' => array(
                'name' => 'lg2BaseMean N AON vs N PCx'
            )
        )
    )
//End scatterplot
);
