<?php

return array(
    'lab' => array(
        'name' => 'Ley DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'sll_data',
    'data_db' => array(
            'cat_table_name' => 'sll302_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'sll302_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Z_Card14delE138_1_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Z Card14delE138 1 TPM'
        ),
        'norm_counts_Z_Card14delE138_2_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Z Card14delE138 2 TPM'
        ),
        'norm_counts_Z_Card14delE138_3_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Z Card14delE138 3 TPM'
        ),
        'norm_counts_Z_WT_1_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'Z WT 1 TPM'
        ),
        'norm_counts_Z_WT_2_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'Z WT 2 TPM'
        ),
        'norm_counts_Z_WT_3_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'Z WT 3 TPM'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Z_Card14delE138_1_TPM','lg2_avg_Z_Card14delE138_2_TPM','lg2_avg_Z_Card14delE138_3_TPM','lg2_avg_Z_WT_1_TPM','lg2_avg_Z_WT_2_TPM','lg2_avg_Z_WT_3_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_Z_Card14delE138_vs_Z_WT' => array(
            'name' => 'logFC Z Card14delE138 vs Z WT',
            'slider_min' => -7,
            'slider_max' => 11,
            'default_low' => -7,
            'default_high' => 11
        ),
        'contrast_1_padj_Z_Card14delE138_vs_Z_WT' => array(
            'name' => 'padj Z Card14delE138 vs Z WT',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_A_logFC_bulk_sll378_AD_lesional_vs_CTRL_healthy' => array(
            'name' => 'logFC bulk sll378 AD lesional vs CTRL healthy',
            'slider_min' => -4,
            'slider_max' => 6,
            'default_low' => -4,
            'default_high' => 6
        ),
        'contrast_A_padj_bulk_sll378_AD_lesional_vs_CTRL_healthy' => array(
            'name' => 'padj bulk sll378 AD lesional vs CTRL healthy',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_A_logFC_bulk_sll378_PSO_lesional_vs_CTRL_healthy' => array(
            'name' => 'logFC bulk sll378 PSO lesional vs CTRL healthy',
            'slider_min' => -6,
            'slider_max' => 10,
            'default_low' => -6,
            'default_high' => 10
        ),
        'contrast_A_padj_bulk_sll378_PSO_lesional_vs_CTRL_healthy' => array(
            'name' => 'padj bulk sll378 PSO lesional vs CTRL healthy',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_Card14' => array(
            'name' => 'corCoef Card14',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_Map3k8' => array(
            'name' => 'corCoef Map3k8',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_L_lg10p_LRT_genotype' => array(
            'name' => 'lg10p LRT genotype',
            'slider_min' => 0,
            'slider_max' => 201,
            'default_low' => 0,
            'default_high' => 201
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'sll302_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_Z_Card14delE138_vs_Z_WT',
        'default-y' => 'contrast_1_lg10p_Z_Card14delE138_vs_Z_WT',
        'selection' => array(
            'contrast_1_logFC_Z_Card14delE138_vs_Z_WT' => array(
                'name' => 'logFC Z Card14delE138 vs Z WT'
            ),
            'contrast_A_logFC_bulk_sll378_AD_lesional_vs_CTRL_healthy' => array(
                'name' => 'logFC bulk sll378 AD lesional vs CTRL healthy'
            ),
            'contrast_A_logFC_bulk_sll378_PSO_lesional_vs_CTRL_healthy' => array(
                'name' => 'logFC bulk sll378 PSO lesional vs CTRL healthy'
            ),
            'contrast_1_lg10p_Z_Card14delE138_vs_Z_WT' => array(
                'name' => 'lg10p Z Card14delE138 vs Z WT'
            ),
            'contrast_L_lg10p_LRT_genotype' => array(
                'name' => 'lg10p LRT genotype'
            ),
            'contrast_A_lg10p_bulk_sll378_AD_lesional_vs_CTRL_healthy' => array(
                'name' => 'lg10p bulk sll378 AD lesional vs CTRL healthy'
            ),
            'contrast_A_lg10p_bulk_sll378_PSO_lesional_vs_CTRL_healthy' => array(
                'name' => 'lg10p bulk sll378 PSO lesional vs CTRL healthy'
            ),
            'add_venn_X_corCoef_Card14' => array(
                'name' => 'corCoef Card14'
            ),
            'add_venn_X_corCoef_Map3k8' => array(
                'name' => 'corCoef Map3k8'
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
            'contrast_1_lg2BaseMean_Z_Card14delE138_vs_Z_WT' => array(
                'name' => 'lg2BaseMean Z Card14delE138 vs Z WT'
            ),
            'contrast_L_lg2BaseMean_LRT_genotype' => array(
                'name' => 'lg2BaseMean LRT genotype'
            ),
            'contrast_A_lg2BaseMean_bulk_sll378_AD_lesional_vs_CTRL_healthy' => array(
                'name' => 'lg2BaseMean bulk sll378 AD lesional vs CTRL healthy'
            ),
            'contrast_A_lg2BaseMean_bulk_sll378_KC_IL36alpha_vs_KC_Untretated' => array(
                'name' => 'lg2BaseMean bulk sll378 KC IL36alpha vs KC Untretated'
            ),
            'contrast_A_lg2BaseMean_bulk_sll378_PSO_lesional_vs_CTRL_healthy' => array(
                'name' => 'lg2BaseMean bulk sll378 PSO lesional vs CTRL healthy'
            )
        )
    )
//End scatterplot
);
