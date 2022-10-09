<?php

return array(
    'public_access' => TRUE,
    'lab' => array(
        'name' => 'Reference DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'vtl_data',
    'data_db' => array(
            'cat_table_name' => 'vtl333_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'p333_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_preB_Ctrl_1_TPM' => array(
            'color' => '#F8766D',
            'name' => 'preB Ctrl 1 TPM'
        ),
        'norm_counts_preB_Ctrl_2_TPM' => array(
            'color' => '#F8766D',
            'name' => 'preB Ctrl 2 TPM'
        ),
        'norm_counts_preB_Ctrl_3_TPM' => array(
            'color' => '#F8766D',
            'name' => 'preB Ctrl 3 TPM'
        ),
        'norm_counts_preB_DKO_1_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'preB DKO 1 TPM'
        ),
        'norm_counts_preB_DKO_2_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'preB DKO 2 TPM'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_preB_Ctrl_1_TPM','lg2_avg_preB_Ctrl_2_TPM','lg2_avg_preB_Ctrl_3_TPM','lg2_avg_preB_DKO_1_TPM','lg2_avg_preB_DKO_2_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_preB_DKO_vs_preB_Ctrl' => array(
            'name' => 'logFC preB DKO vs preB Ctrl',
            'slider_min' => -4,
            'slider_max' => 4,
            'default_low' => -4,
            'default_high' => 4
        ),
        'contrast_1_padj_preB_DKO_vs_preB_Ctrl' => array(
            'name' => 'padj preB DKO vs preB Ctrl',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_L_padj_LRT_MT_vs_WT' => array(
            'name' => 'padj LRT MT vs WT',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'p333_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_preB_DKO_vs_preB_Ctrl',
        'default-y' => 'contrast_1_lg10p_preB_DKO_vs_preB_Ctrl',
        'selection' => array(
            'contrast_1_logFC_preB_DKO_vs_preB_Ctrl' => array(
                'name' => 'logFC preB DKO vs preB Ctrl'
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
            'contrast_1_lg10p_preB_DKO_vs_preB_Ctrl' => array(
                'name' => 'lg10p preB DKO vs preB Ctrl'
            ),
            'contrast_L_lg10p_LRT_MT_vs_WT' => array(
                'name' => 'lg10p LRT MT vs WT'
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
            'contrast_1_lg2BaseMean_preB_DKO_vs_preB_Ctrl' => array(
                'name' => 'lg2BaseMean preB DKO vs preB Ctrl'
            ),
            'contrast_L_lg2BaseMean_LRT_MT_vs_WT' => array(
                'name' => 'lg2BaseMean LRT MT vs WT'
            )
        )
    )
//End scatterplot
);
