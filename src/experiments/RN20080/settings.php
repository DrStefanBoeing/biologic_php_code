<?php

return array(
    'lab' => array(
        'name' => 'Sahai DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'esl_data',
    'data_db' => array(
            'cat_table_name' => 'RN20080_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'RN20080_rna_seq_table',
    'primary_gene_symbol' => 'hgnc_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_MCF7_highGluc_0305_TPM' => array(
            'color' => '#F8766D',
            'name' => 'MCF7 highGluc 0305 TPM'
        ),
        'norm_counts_MCF7_highGluc_0306_TPM' => array(
            'color' => '#F8766D',
            'name' => 'MCF7 highGluc 0306 TPM'
        ),
        'norm_counts_MCF7_highGluc_0319_TPM' => array(
            'color' => '#F8766D',
            'name' => 'MCF7 highGluc 0319 TPM'
        ),
        'norm_counts_MCF7_lowGluc_0305_TPM' => array(
            'color' => '#00BA38',
            'name' => 'MCF7 lowGluc 0305 TPM'
        ),
        'norm_counts_MCF7_lowGluc_0306_TPM' => array(
            'color' => '#00BA38',
            'name' => 'MCF7 lowGluc 0306 TPM'
        ),
        'norm_counts_MCF7_lowGluc_0319_TPM' => array(
            'color' => '#00BA38',
            'name' => 'MCF7 lowGluc 0319 TPM'
        ),
        'norm_counts_MCF7_sorted_0305_TPM' => array(
            'color' => '#619CFF',
            'name' => 'MCF7 sorted 0305 TPM'
        ),
        'norm_counts_MCF7_sorted_0306_TPM' => array(
            'color' => '#619CFF',
            'name' => 'MCF7 sorted 0306 TPM'
        ),
        'norm_counts_MCF7_sorted_0319_TPM' => array(
            'color' => '#619CFF',
            'name' => 'MCF7 sorted 0319 TPM'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_MCF7_highGluc_0305_TPM','lg2_avg_MCF7_highGluc_0306_TPM','lg2_avg_MCF7_highGluc_0319_TPM','lg2_avg_MCF7_lowGluc_0305_TPM','lg2_avg_MCF7_lowGluc_0306_TPM','lg2_avg_MCF7_lowGluc_0319_TPM','lg2_avg_MCF7_sorted_0305_TPM','lg2_avg_MCF7_sorted_0306_TPM','lg2_avg_MCF7_sorted_0319_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_MCF7_highGluc_vs_MCF7_sorted' => array(
            'name' => 'logFC MCF7 highGluc vs MCF7 sorted',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_1_padj_MCF7_highGluc_vs_MCF7_sorted' => array(
            'name' => 'padj MCF7 highGluc vs MCF7 sorted',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_MCF7_lowGluc_vs_MCF7_sorted' => array(
            'name' => 'logFC MCF7 lowGluc vs MCF7 sorted',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_2_padj_MCF7_lowGluc_vs_MCF7_sorted' => array(
            'name' => 'padj MCF7 lowGluc vs MCF7 sorted',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_MCF7_highGluc_vs_MCF7_lowGluc' => array(
            'name' => 'logFC MCF7 highGluc vs MCF7 lowGluc',
            'slider_min' => -2,
            'slider_max' => 1,
            'default_low' => -2,
            'default_high' => 1
        ),
        'contrast_3_padj_MCF7_highGluc_vs_MCF7_lowGluc' => array(
            'name' => 'padj MCF7 highGluc vs MCF7 lowGluc',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_MYC' => array(
            'name' => 'corCoef MYC',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_PKM' => array(
            'name' => 'corCoef PKM',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_PPARGC1A' => array(
            'name' => 'corCoef PPARGC1A',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_SLC2A1' => array(
            'name' => 'corCoef SLC2A1',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_L_lg10p_LRT_Glucose' => array(
            'name' => 'lg10p LRT Glucose',
            'slider_min' => 0,
            'slider_max' => 17,
            'default_low' => 0,
            'default_high' => 17
        ),
        'contrast_L_lg10p_LRT_Date' => array(
            'name' => 'lg10p LRT Date',
            'slider_min' => 0,
            'slider_max' => 196,
            'default_low' => 0,
            'default_high' => 196
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'RN20080_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_MCF7_highGluc_vs_MCF7_sorted',
        'default-y' => 'contrast_1_lg10p_MCF7_highGluc_vs_MCF7_sorted',
        'selection' => array(
            'contrast_1_logFC_MCF7_highGluc_vs_MCF7_sorted' => array(
                'name' => 'logFC MCF7 highGluc vs MCF7 sorted'
            ),
            'contrast_2_logFC_MCF7_lowGluc_vs_MCF7_sorted' => array(
                'name' => 'logFC MCF7 lowGluc vs MCF7 sorted'
            ),
            'contrast_3_logFC_MCF7_highGluc_vs_MCF7_lowGluc' => array(
                'name' => 'logFC MCF7 highGluc vs MCF7 lowGluc'
            ),
            'contrast_1_lg10p_MCF7_highGluc_vs_MCF7_sorted' => array(
                'name' => 'lg10p MCF7 highGluc vs MCF7 sorted'
            ),
            'contrast_2_lg10p_MCF7_lowGluc_vs_MCF7_sorted' => array(
                'name' => 'lg10p MCF7 lowGluc vs MCF7 sorted'
            ),
            'contrast_3_lg10p_MCF7_highGluc_vs_MCF7_lowGluc' => array(
                'name' => 'lg10p MCF7 highGluc vs MCF7 lowGluc'
            ),
            'contrast_L_lg10p_LRT_Glucose' => array(
                'name' => 'lg10p LRT Glucose'
            ),
            'contrast_L_lg10p_LRT_Date' => array(
                'name' => 'lg10p LRT Date'
            ),
            'add_venn_X_corCoef_MYC' => array(
                'name' => 'corCoef MYC'
            ),
            'add_venn_X_corCoef_PKM' => array(
                'name' => 'corCoef PKM'
            ),
            'add_venn_X_corCoef_PPARGC1A' => array(
                'name' => 'corCoef PPARGC1A'
            ),
            'add_venn_X_corCoef_SLC2A1' => array(
                'name' => 'corCoef SLC2A1'
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
            'contrast_1_lg2BaseMean_MCF7_highGluc_vs_MCF7_sorted' => array(
                'name' => 'lg2BaseMean MCF7 highGluc vs MCF7 sorted'
            ),
            'contrast_2_lg2BaseMean_MCF7_lowGluc_vs_MCF7_sorted' => array(
                'name' => 'lg2BaseMean MCF7 lowGluc vs MCF7 sorted'
            ),
            'contrast_3_lg2BaseMean_MCF7_highGluc_vs_MCF7_lowGluc' => array(
                'name' => 'lg2BaseMean MCF7 highGluc vs MCF7 lowGluc'
            ),
            'contrast_L_lg2BaseMean_LRT_Glucose' => array(
                'name' => 'lg2BaseMean LRT Glucose'
            ),
            'contrast_L_lg2BaseMean_LRT_Date' => array(
                'name' => 'lg2BaseMean LRT Date'
            )
        )
    )
//End scatterplot
);
