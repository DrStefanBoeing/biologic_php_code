<?php

return array(
    'lab' => array(
        'name' => 'Example DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'knl_data',
    'data_db' => array(
            'cat_table_name' => 'knl425_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'knl425_rna_seq_table',
    'primary_gene_symbol' => 'hgnc_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_CTRL_D0_1_TPM' => array(
            'color' => '#F8766D',
            'name' => 'CTRL D0 1 TPM'
        ),
        'norm_counts_CTRL_D0_2_TPM' => array(
            'color' => '#F8766D',
            'name' => 'CTRL D0 2 TPM'
        ),
        'norm_counts_CTRL_D0_3_TPM' => array(
            'color' => '#F8766D',
            'name' => 'CTRL D0 3 TPM'
        ),
        'norm_counts_CTRL_D1_1_TPM' => array(
            'color' => '#E88526',
            'name' => 'CTRL D1 1 TPM'
        ),
        'norm_counts_CTRL_D1_2_TPM' => array(
            'color' => '#E88526',
            'name' => 'CTRL D1 2 TPM'
        ),
        'norm_counts_CTRL_D1_3_TPM' => array(
            'color' => '#E88526',
            'name' => 'CTRL D1 3 TPM'
        ),
        'norm_counts_CTRL_D2_1_TPM' => array(
            'color' => '#D39200',
            'name' => 'CTRL D2 1 TPM'
        ),
        'norm_counts_CTRL_D2_2_TPM' => array(
            'color' => '#D39200',
            'name' => 'CTRL D2 2 TPM'
        ),
        'norm_counts_CTRL_D2_3_TPM' => array(
            'color' => '#D39200',
            'name' => 'CTRL D2 3 TPM'
        ),
        'norm_counts_CTRL_D3_1_TPM' => array(
            'color' => '#B79F00',
            'name' => 'CTRL D3 1 TPM'
        ),
        'norm_counts_CTRL_D3_2_TPM' => array(
            'color' => '#B79F00',
            'name' => 'CTRL D3 2 TPM'
        ),
        'norm_counts_CTRL_D3_3_TPM' => array(
            'color' => '#B79F00',
            'name' => 'CTRL D3 3 TPM'
        ),
        'norm_counts_CTRL_D4_1_TPM' => array(
            'color' => '#93AA00',
            'name' => 'CTRL D4 1 TPM'
        ),
        'norm_counts_CTRL_D4_2_TPM' => array(
            'color' => '#93AA00',
            'name' => 'CTRL D4 2 TPM'
        ),
        'norm_counts_CTRL_D4_3_TPM' => array(
            'color' => '#93AA00',
            'name' => 'CTRL D4 3 TPM'
        ),
        'norm_counts_CTRL_D5_1_TPM' => array(
            'color' => '#5EB300',
            'name' => 'CTRL D5 1 TPM'
        ),
        'norm_counts_CTRL_D5_2_TPM' => array(
            'color' => '#5EB300',
            'name' => 'CTRL D5 2 TPM'
        ),
        'norm_counts_CTRL_D5_3_TPM' => array(
            'color' => '#5EB300',
            'name' => 'CTRL D5 3 TPM'
        ),
        'norm_counts_CTRL_D5_4_TPM' => array(
            'color' => '#5EB300',
            'name' => 'CTRL D5 4 TPM'
        ),
        'norm_counts_CTRL_D5_5_TPM' => array(
            'color' => '#5EB300',
            'name' => 'CTRL D5 5 TPM'
        ),
        'norm_counts_CTRL_D5_6_TPM' => array(
            'color' => '#5EB300',
            'name' => 'CTRL D5 6 TPM'
        ),
        'norm_counts_H9_N4PlusRNA_1_TPM' => array(
            'color' => '#00BA38',
            'name' => 'H9 N4PlusRNA 1 TPM'
        ),
        'norm_counts_H9_N4PlusRNA_2_TPM' => array(
            'color' => '#00BA38',
            'name' => 'H9 N4PlusRNA 2 TPM'
        ),
        'norm_counts_H9_N4PlusRNA_3_TPM' => array(
            'color' => '#00BA38',
            'name' => 'H9 N4PlusRNA 3 TPM'
        ),
        'norm_counts_H9_Naive_1_TPM' => array(
            'color' => '#00BF74',
            'name' => 'H9 Naive 1 TPM'
        ),
        'norm_counts_H9_Naive_2_TPM' => array(
            'color' => '#00BF74',
            'name' => 'H9 Naive 2 TPM'
        ),
        'norm_counts_H9_Naive_3_TPM' => array(
            'color' => '#00BF74',
            'name' => 'H9 Naive 3 TPM'
        ),
        'norm_counts_H9_NminRNA_1_TPM' => array(
            'color' => '#00C19F',
            'name' => 'H9 NminRNA 1 TPM'
        ),
        'norm_counts_H9_NminRNA_2_TPM' => array(
            'color' => '#00C19F',
            'name' => 'H9 NminRNA 2 TPM'
        ),
        'norm_counts_H9_NminRNA_3_TPM' => array(
            'color' => '#00C19F',
            'name' => 'H9 NminRNA 3 TPM'
        ),
        'norm_counts_H9_Passage10RNA_1_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'H9 Passage10RNA 1 TPM'
        ),
        'norm_counts_H9_Passage10RNA_2_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'H9 Passage10RNA 2 TPM'
        ),
        'norm_counts_H9_Passage10RNA_3_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'H9 Passage10RNA 3 TPM'
        ),
        'norm_counts_H9_Passage5RNA_1_TPM' => array(
            'color' => '#00B9E3',
            'name' => 'H9 Passage5RNA 1 TPM'
        ),
        'norm_counts_H9_Passage5RNA_2_TPM' => array(
            'color' => '#00B9E3',
            'name' => 'H9 Passage5RNA 2 TPM'
        ),
        'norm_counts_H9_Passage5RNA_3_TPM' => array(
            'color' => '#00B9E3',
            'name' => 'H9 Passage5RNA 3 TPM'
        ),
        'norm_counts_H9_Primed_1_TPM' => array(
            'color' => '#00ADFA',
            'name' => 'H9 Primed 1 TPM'
        ),
        'norm_counts_H9_Primed_2_TPM' => array(
            'color' => '#00ADFA',
            'name' => 'H9 Primed 2 TPM'
        ),
        'norm_counts_H9_Primed_3_TPM' => array(
            'color' => '#00ADFA',
            'name' => 'H9 Primed 3 TPM'
        ),
        'norm_counts_KLF17_D0_2_TPM' => array(
            'color' => '#619CFF',
            'name' => 'KLF17 D0 2 TPM'
        ),
        'norm_counts_KLF17_D0_3_TPM' => array(
            'color' => '#619CFF',
            'name' => 'KLF17 D0 3 TPM'
        ),
        'norm_counts_KLF17_D1_1_TPM' => array(
            'color' => '#AE87FF',
            'name' => 'KLF17 D1 1 TPM'
        ),
        'norm_counts_KLF17_D1_2_TPM' => array(
            'color' => '#AE87FF',
            'name' => 'KLF17 D1 2 TPM'
        ),
        'norm_counts_KLF17_D1_3_TPM' => array(
            'color' => '#AE87FF',
            'name' => 'KLF17 D1 3 TPM'
        ),
        'norm_counts_KLF17_D2_1_TPM' => array(
            'color' => '#DB72FB',
            'name' => 'KLF17 D2 1 TPM'
        ),
        'norm_counts_KLF17_D2_2_TPM' => array(
            'color' => '#DB72FB',
            'name' => 'KLF17 D2 2 TPM'
        ),
        'norm_counts_KLF17_D2_3_TPM' => array(
            'color' => '#DB72FB',
            'name' => 'KLF17 D2 3 TPM'
        ),
        'norm_counts_KLF17_D3_1_TPM' => array(
            'color' => '#F564E3',
            'name' => 'KLF17 D3 1 TPM'
        ),
        'norm_counts_KLF17_D3_2_TPM' => array(
            'color' => '#F564E3',
            'name' => 'KLF17 D3 2 TPM'
        ),
        'norm_counts_KLF17_D3_3_TPM' => array(
            'color' => '#F564E3',
            'name' => 'KLF17 D3 3 TPM'
        ),
        'norm_counts_KLF17_D4_1_TPM' => array(
            'color' => '#FF61C3',
            'name' => 'KLF17 D4 1 TPM'
        ),
        'norm_counts_KLF17_D4_2_TPM' => array(
            'color' => '#FF61C3',
            'name' => 'KLF17 D4 2 TPM'
        ),
        'norm_counts_KLF17_D4_3_TPM' => array(
            'color' => '#FF61C3',
            'name' => 'KLF17 D4 3 TPM'
        ),
        'norm_counts_KLF17_D5_1_TPM' => array(
            'color' => '#FF699C',
            'name' => 'KLF17 D5 1 TPM'
        ),
        'norm_counts_KLF17_D5_2_TPM' => array(
            'color' => '#FF699C',
            'name' => 'KLF17 D5 2 TPM'
        ),
        'norm_counts_KLF17_D5_3_TPM' => array(
            'color' => '#FF699C',
            'name' => 'KLF17 D5 3 TPM'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_CTRL_D0_1_TPM','lg2_avg_CTRL_D0_2_TPM','lg2_avg_CTRL_D0_3_TPM','lg2_avg_CTRL_D1_1_TPM','lg2_avg_CTRL_D1_2_TPM','lg2_avg_CTRL_D1_3_TPM','lg2_avg_CTRL_D2_1_TPM','lg2_avg_CTRL_D2_2_TPM','lg2_avg_CTRL_D2_3_TPM','lg2_avg_CTRL_D3_1_TPM','lg2_avg_CTRL_D3_2_TPM','lg2_avg_CTRL_D3_3_TPM','lg2_avg_CTRL_D4_1_TPM','lg2_avg_CTRL_D4_2_TPM','lg2_avg_CTRL_D4_3_TPM','lg2_avg_CTRL_D5_1_TPM','lg2_avg_CTRL_D5_2_TPM','lg2_avg_CTRL_D5_3_TPM','lg2_avg_CTRL_D5_4_TPM','lg2_avg_CTRL_D5_5_TPM','lg2_avg_CTRL_D5_6_TPM','lg2_avg_H9_N4PlusRNA_1_TPM','lg2_avg_H9_N4PlusRNA_2_TPM','lg2_avg_H9_N4PlusRNA_3_TPM','lg2_avg_H9_Naive_1_TPM','lg2_avg_H9_Naive_2_TPM','lg2_avg_H9_Naive_3_TPM','lg2_avg_H9_NminRNA_1_TPM','lg2_avg_H9_NminRNA_2_TPM','lg2_avg_H9_NminRNA_3_TPM','lg2_avg_H9_Passage10RNA_1_TPM','lg2_avg_H9_Passage10RNA_2_TPM','lg2_avg_H9_Passage10RNA_3_TPM','lg2_avg_H9_Passage5RNA_1_TPM','lg2_avg_H9_Passage5RNA_2_TPM','lg2_avg_H9_Passage5RNA_3_TPM','lg2_avg_H9_Primed_1_TPM','lg2_avg_H9_Primed_2_TPM','lg2_avg_H9_Primed_3_TPM','lg2_avg_KLF17_D0_2_TPM','lg2_avg_KLF17_D0_3_TPM','lg2_avg_KLF17_D1_1_TPM','lg2_avg_KLF17_D1_2_TPM','lg2_avg_KLF17_D1_3_TPM','lg2_avg_KLF17_D2_1_TPM','lg2_avg_KLF17_D2_2_TPM','lg2_avg_KLF17_D2_3_TPM','lg2_avg_KLF17_D3_1_TPM','lg2_avg_KLF17_D3_2_TPM','lg2_avg_KLF17_D3_3_TPM','lg2_avg_KLF17_D4_1_TPM','lg2_avg_KLF17_D4_2_TPM','lg2_avg_KLF17_D4_3_TPM','lg2_avg_KLF17_D5_1_TPM','lg2_avg_KLF17_D5_2_TPM','lg2_avg_KLF17_D5_3_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_KLF17_vs_CTRL' => array(
            'name' => 'logFC KLF17 vs CTRL',
            'slider_min' => -6,
            'slider_max' => 9,
            'default_low' => -6,
            'default_high' => 9
        ),
        'contrast_1_padj_KLF17_vs_CTRL' => array(
            'name' => 'padj KLF17 vs CTRL',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_H9_vs_KLF17' => array(
            'name' => 'logFC H9 vs KLF17',
            'slider_min' => -12,
            'slider_max' => 14,
            'default_low' => -12,
            'default_high' => 14
        ),
        'contrast_2_padj_H9_vs_KLF17' => array(
            'name' => 'padj H9 vs KLF17',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_H9_vs_CTRL' => array(
            'name' => 'logFC H9 vs CTRL',
            'slider_min' => -12,
            'slider_max' => 16,
            'default_low' => -12,
            'default_high' => 16
        ),
        'contrast_3_padj_H9_vs_CTRL' => array(
            'name' => 'padj H9 vs CTRL',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_GATA3' => array(
            'name' => 'corCoef GATA3',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_KLF17' => array(
            'name' => 'corCoef KLF17',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_POU5F1' => array(
            'name' => 'corCoef POU5F1',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_L_lg10p_LRT_batch' => array(
            'name' => 'lg10p LRT batch',
            'slider_min' => 0,
            'slider_max' => 321,
            'default_low' => 0,
            'default_high' => 321
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'knl425_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_KLF17_vs_CTRL',
        'default-y' => 'contrast_1_lg10p_KLF17_vs_CTRL',
        'selection' => array(
            'contrast_1_logFC_KLF17_vs_CTRL' => array(
                'name' => 'logFC KLF17 vs CTRL'
            ),
            'contrast_2_logFC_H9_vs_KLF17' => array(
                'name' => 'logFC H9 vs KLF17'
            ),
            'contrast_3_logFC_H9_vs_CTRL' => array(
                'name' => 'logFC H9 vs CTRL'
            ),
            'contrast_1_lg10p_KLF17_vs_CTRL' => array(
                'name' => 'lg10p KLF17 vs CTRL'
            ),
            'contrast_2_lg10p_H9_vs_KLF17' => array(
                'name' => 'lg10p H9 vs KLF17'
            ),
            'contrast_3_lg10p_H9_vs_CTRL' => array(
                'name' => 'lg10p H9 vs CTRL'
            ),
            'contrast_L_lg10p_LRT_batch' => array(
                'name' => 'lg10p LRT batch'
            ),
            'add_venn_X_corCoef_GATA3' => array(
                'name' => 'corCoef GATA3'
            ),
            'add_venn_X_corCoef_KLF17' => array(
                'name' => 'corCoef KLF17'
            ),
            'add_venn_X_corCoef_POU5F1' => array(
                'name' => 'corCoef POU5F1'
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
            'contrast_1_lg2BaseMean_KLF17_vs_CTRL' => array(
                'name' => 'lg2BaseMean KLF17 vs CTRL'
            ),
            'contrast_2_lg2BaseMean_H9_vs_KLF17' => array(
                'name' => 'lg2BaseMean H9 vs KLF17'
            ),
            'contrast_3_lg2BaseMean_H9_vs_CTRL' => array(
                'name' => 'lg2BaseMean H9 vs CTRL'
            ),
            'contrast_L_lg2BaseMean_LRT_batch' => array(
                'name' => 'lg2BaseMean LRT batch'
            )
        )
    )
//End scatterplot
);
