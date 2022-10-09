<?php

return array(
    'public_access' => TRUE,
    'lab' => array(
        'name' => 'Pachnis DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'esl_data',
    'data_db' => array(
            'cat_table_name' => 'RN21261_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'RN21261_bulk_rna_seq_table',
    'primary_gene_symbol' => 'hgnc_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'TPM Values for all Samples',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_S_Capivasertib_2' => array(
            'color' => '#619CFF',
            'name' => 'S Capivasertib 2'
        ),
        'norm_counts_S_Capivasertib_1' => array(
            'color' => '#619CFF',
            'name' => 'S Capivasertib 1'
        ),
        'norm_counts_S_Capivasertib_3' => array(
            'color' => '#619CFF',
            'name' => 'S Capivasertib 3'
        ),
        'norm_counts_S_DMSO_1' => array(
            'color' => '#00BA38',
            'name' => 'S DMSO 1'
        ),
        'norm_counts_S_DMSO_2' => array(
            'color' => '#00BA38',
            'name' => 'S DMSO 2'
        ),
        'norm_counts_S_DMSO_3' => array(
            'color' => '#00BA38',
            'name' => 'S DMSO 3'
        ),
        'norm_counts_S_Parental_1' => array(
            'color' => '#F8766D',
            'name' => 'S Parental 1'
        ),
        'norm_counts_S_Parental_3' => array(
            'color' => '#F8766D',
            'name' => 'S Parental 3'
        ),
        'norm_counts_S_Parental_2' => array(
            'color' => '#F8766D',
            'name' => 'S Parental 2'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM Values for all Samples'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_S_Capivasertib_2','lg2_avg_S_Capivasertib_1','lg2_avg_S_Capivasertib_3','lg2_avg_S_DMSO_1','lg2_avg_S_DMSO_2','lg2_avg_S_DMSO_3','lg2_avg_S_Parental_1','lg2_avg_S_Parental_3','lg2_avg_S_Parental_2'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_Capivasertib_vs_DMSO' => array(
            'name' => 'logFC Capivasertib vs DMSO',
            'slider_min' => -5,
            'slider_max' => 4,
            'default_low' => -5,
            'default_high' => 4
        ),
        'contrast_1_padj_Capivasertib_vs_DMSO' => array(
            'name' => 'padj Capivasertib vs DMSO',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_Parental_vs_DMSO' => array(
            'name' => 'logFC Parental vs DMSO',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_2_padj_Parental_vs_DMSO' => array(
            'name' => 'padj Parental vs DMSO',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_Capivasertib_vs_Parental' => array(
            'name' => 'logFC Capivasertib vs Parental',
            'slider_min' => -6,
            'slider_max' => 4,
            'default_low' => -6,
            'default_high' => 4
        ),
        'contrast_3_padj_Capivasertib_vs_Parental' => array(
            'name' => 'padj Capivasertib vs Parental',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_L_lg10p_LRT_Technical_Replicate' => array(
            'name' => 'lg10p LRT Technical Replicate',
            'slider_min' => 0,
            'slider_max' => 185,
            'default_low' => 0,
            'default_high' => 185
        ),
        'contrast_L_lg10p_LRT_Treatment_Group' => array(
            'name' => 'lg10p LRT Treatment Group',
            'slider_min' => 0,
            'slider_max' => 9,
            'default_low' => 0,
            'default_high' => 9
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'RN21261_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_Capivasertib_vs_DMSO',
        'default-y' => 'contrast_1_lg10p_Capivasertib_vs_DMSO',
        'selection' => array(
            'contrast_1_logFC_Capivasertib_vs_DMSO' => array(
                'name' => 'logFC Capivasertib vs DMSO'
            ),
            'contrast_2_logFC_Parental_vs_DMSO' => array(
                'name' => 'logFC Parental vs DMSO'
            ),
            'contrast_3_logFC_Capivasertib_vs_Parental' => array(
                'name' => 'logFC Capivasertib vs Parental'
            ),
            'contrast_1_lg10p_Capivasertib_vs_DMSO' => array(
                'name' => 'lg10p Capivasertib vs DMSO'
            ),
            'contrast_2_lg10p_Parental_vs_DMSO' => array(
                'name' => 'lg10p Parental vs DMSO'
            ),
            'contrast_3_lg10p_Capivasertib_vs_Parental' => array(
                'name' => 'lg10p Capivasertib vs Parental'
            ),
            'contrast_L_lg10p_LRT_Technical_Replicate' => array(
                'name' => 'lg10p LRT Technical Replicate'
            ),
            'contrast_L_lg10p_LRT_Treatment_Group' => array(
                'name' => 'lg10p LRT Treatment Group'
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
            'contrast_1_lg2BaseMean_Capivasertib_vs_DMSO' => array(
                'name' => 'lg2BaseMean Capivasertib vs DMSO'
            ),
            'contrast_2_lg2BaseMean_Parental_vs_DMSO' => array(
                'name' => 'lg2BaseMean Parental vs DMSO'
            ),
            'contrast_3_lg2BaseMean_Capivasertib_vs_Parental' => array(
                'name' => 'lg2BaseMean Capivasertib vs Parental'
            ),
            'contrast_L_lg2BaseMean_LRT_Technical_Replicate' => array(
                'name' => 'lg2BaseMean LRT Technical Replicate'
            ),
            'contrast_L_lg2BaseMean_LRT_Treatment_Group' => array(
                'name' => 'lg2BaseMean LRT Treatment Group'
            )
        )
    )
//End scatterplot
);
