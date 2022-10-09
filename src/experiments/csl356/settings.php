<?php

return array(
    'lab' => array(
        'name' => 'Swanton DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'csl_data',
    'data_db' => array(
            'cat_table_name' => 'csl356_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'p356_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_M_WT_1_TPM' => array(
            'color' => '#F8766D',
            'name' => 'M WT 1 TPM'
        ),
        'norm_counts_M_WT_2_TPM' => array(
            'color' => '#F8766D',
            'name' => 'M WT 2 TPM'
        ),
        'norm_counts_M_WT_3_TPM' => array(
            'color' => '#F8766D',
            'name' => 'M WT 3 TPM'
        ),
        'norm_counts_M_WT_4_TPM' => array(
            'color' => '#F8766D',
            'name' => 'M WT 4 TPM'
        ),
        'norm_counts_M_Zfp516NULL_1_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'M Zfp516NULL 1 TPM'
        ),
        'norm_counts_M_Zfp516NULL_2_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'M Zfp516NULL 2 TPM'
        ),
        'norm_counts_M_Zfp516NULL_3_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'M Zfp516NULL 3 TPM'
        ),
        'norm_counts_M_Zfp516NULL_4_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'M Zfp516NULL 4 TPM'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_M_WT_1_TPM','lg2_avg_M_WT_2_TPM','lg2_avg_M_WT_3_TPM','lg2_avg_M_WT_4_TPM','lg2_avg_M_Zfp516NULL_1_TPM','lg2_avg_M_Zfp516NULL_2_TPM','lg2_avg_M_Zfp516NULL_3_TPM','lg2_avg_M_Zfp516NULL_4_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_M_Zfp516NULL_vs_M_WT' => array(
            'name' => 'logFC M Zfp516NULL vs M WT',
            'slider_min' => -1,
            'slider_max' => 2,
            'default_low' => -1,
            'default_high' => 2
        ),
        'contrast_1_padj_M_Zfp516NULL_vs_M_WT' => array(
            'name' => 'padj M Zfp516NULL vs M WT',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_A_logFC_hsRNASeq_NT_vs_ZNF516' => array(
            'name' => 'logFC hsRNASeq NT vs ZNF516',
            'slider_min' => -3,
            'slider_max' => 4,
            'default_low' => -3,
            'default_high' => 4
        ),
        'contrast_A_padj_hsRNASeq_NT_vs_ZNF516' => array(
            'name' => 'padj hsRNASeq NT vs ZNF516',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_L_lg10p_LRT_WT_MT' => array(
            'name' => 'lg10p LRT WT MT',
            'slider_min' => 0,
            'slider_max' => 28,
            'default_low' => 0,
            'default_high' => 28
        ),
        'contrast_L_lg10p_LRT_Gender' => array(
            'name' => 'lg10p LRT Gender',
            'slider_min' => 0,
            'slider_max' => 205,
            'default_low' => 0,
            'default_high' => 205
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'p356_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_M_Zfp516NULL_vs_M_WT',
        'default-y' => 'contrast_1_lg10p_M_Zfp516NULL_vs_M_WT',
        'selection' => array(
            'contrast_1_logFC_M_Zfp516NULL_vs_M_WT' => array(
                'name' => 'logFC M Zfp516NULL vs M WT'
            ),
            'contrast_A_logFC_hsRNASeq_NT_vs_ZNF516' => array(
                'name' => 'logFC hsRNASeq NT vs ZNF516'
            ),
            'contrast_1_lg10p_M_Zfp516NULL_vs_M_WT' => array(
                'name' => 'lg10p M Zfp516NULL vs M WT'
            ),
            'contrast_L_lg10p_LRT_WT_MT' => array(
                'name' => 'lg10p LRT WT MT'
            ),
            'contrast_L_lg10p_LRT_Gender' => array(
                'name' => 'lg10p LRT Gender'
            ),
            'contrast_A_lg10p_hsRNASeq_NT_vs_ZNF516' => array(
                'name' => 'lg10p hsRNASeq NT vs ZNF516'
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
            'contrast_1_lg2BaseMean_M_Zfp516NULL_vs_M_WT' => array(
                'name' => 'lg2BaseMean M Zfp516NULL vs M WT'
            ),
            'contrast_L_lg2BaseMean_LRT_WT_MT' => array(
                'name' => 'lg2BaseMean LRT WT MT'
            ),
            'contrast_L_lg2BaseMean_LRT_Gender' => array(
                'name' => 'lg2BaseMean LRT Gender'
            )
        )
    )
//End scatterplot
);
