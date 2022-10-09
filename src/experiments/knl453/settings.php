<?php

return array(
    'lab' => array(
        'name' => 'Niakan DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'knl_data',
    'data_db' => array(
            'cat_table_name' => 'knl453_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'knl453_rna_seq_table',
    'primary_gene_symbol' => 'hgnc_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Dox_Day0_1_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Dox Day0 1 TPM'
        ),
        'norm_counts_Dox_Day0_2_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Dox Day0 2 TPM'
        ),
        'norm_counts_Dox_Day0_3_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Dox Day0 3 TPM'
        ),
        'norm_counts_Dox_Day1_1_TPM' => array(
            'color' => '#E58700',
            'name' => 'Dox Day1 1 TPM'
        ),
        'norm_counts_Dox_Day1_2_TPM' => array(
            'color' => '#E58700',
            'name' => 'Dox Day1 2 TPM'
        ),
        'norm_counts_Dox_Day1_3_TPM' => array(
            'color' => '#E58700',
            'name' => 'Dox Day1 3 TPM'
        ),
        'norm_counts_Dox_Day2_1_TPM' => array(
            'color' => '#C99800',
            'name' => 'Dox Day2 1 TPM'
        ),
        'norm_counts_Dox_Day2_2_TPM' => array(
            'color' => '#C99800',
            'name' => 'Dox Day2 2 TPM'
        ),
        'norm_counts_Dox_Day2_3_TPM' => array(
            'color' => '#C99800',
            'name' => 'Dox Day2 3 TPM'
        ),
        'norm_counts_Dox_Day5_1_TPM' => array(
            'color' => '#A3A500',
            'name' => 'Dox Day5 1 TPM'
        ),
        'norm_counts_Dox_Day5_2_TPM' => array(
            'color' => '#A3A500',
            'name' => 'Dox Day5 2 TPM'
        ),
        'norm_counts_Dox_Day5_3_TPM' => array(
            'color' => '#A3A500',
            'name' => 'Dox Day5 3 TPM'
        ),
        'norm_counts_Dox_p5_1_TPM' => array(
            'color' => '#6BB100',
            'name' => 'Dox p5 1 TPM'
        ),
        'norm_counts_Dox_p5_2_TPM' => array(
            'color' => '#6BB100',
            'name' => 'Dox p5 2 TPM'
        ),
        'norm_counts_Dox_p5_3_TPM' => array(
            'color' => '#6BB100',
            'name' => 'Dox p5 3 TPM'
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
            'color' => '#00BF7D',
            'name' => 'H9 Naive 1 TPM'
        ),
        'norm_counts_H9_Naive_2_TPM' => array(
            'color' => '#00BF7D',
            'name' => 'H9 Naive 2 TPM'
        ),
        'norm_counts_H9_Naive_3_TPM' => array(
            'color' => '#00BF7D',
            'name' => 'H9 Naive 3 TPM'
        ),
        'norm_counts_H9_NminRNA_1_TPM' => array(
            'color' => '#00C0AF',
            'name' => 'H9 NminRNA 1 TPM'
        ),
        'norm_counts_H9_NminRNA_2_TPM' => array(
            'color' => '#00C0AF',
            'name' => 'H9 NminRNA 2 TPM'
        ),
        'norm_counts_H9_NminRNA_3_TPM' => array(
            'color' => '#00C0AF',
            'name' => 'H9 NminRNA 3 TPM'
        ),
        'norm_counts_H9_Passage10RNA_1_TPM' => array(
            'color' => '#00BCD8',
            'name' => 'H9 Passage10RNA 1 TPM'
        ),
        'norm_counts_H9_Passage10RNA_2_TPM' => array(
            'color' => '#00BCD8',
            'name' => 'H9 Passage10RNA 2 TPM'
        ),
        'norm_counts_H9_Passage10RNA_3_TPM' => array(
            'color' => '#00BCD8',
            'name' => 'H9 Passage10RNA 3 TPM'
        ),
        'norm_counts_H9_Passage5RNA_1_TPM' => array(
            'color' => '#00B0F6',
            'name' => 'H9 Passage5RNA 1 TPM'
        ),
        'norm_counts_H9_Passage5RNA_2_TPM' => array(
            'color' => '#00B0F6',
            'name' => 'H9 Passage5RNA 2 TPM'
        ),
        'norm_counts_H9_Passage5RNA_3_TPM' => array(
            'color' => '#00B0F6',
            'name' => 'H9 Passage5RNA 3 TPM'
        ),
        'norm_counts_H9_Primed_1_TPM' => array(
            'color' => '#619CFF',
            'name' => 'H9 Primed 1 TPM'
        ),
        'norm_counts_H9_Primed_2_TPM' => array(
            'color' => '#619CFF',
            'name' => 'H9 Primed 2 TPM'
        ),
        'norm_counts_H9_Primed_3_TPM' => array(
            'color' => '#619CFF',
            'name' => 'H9 Primed 3 TPM'
        ),
        'norm_counts_UI_Day0_1_TPM' => array(
            'color' => '#B983FF',
            'name' => 'UI Day0 1 TPM'
        ),
        'norm_counts_UI_Day0_2_TPM' => array(
            'color' => '#B983FF',
            'name' => 'UI Day0 2 TPM'
        ),
        'norm_counts_UI_Day0_3_TPM' => array(
            'color' => '#B983FF',
            'name' => 'UI Day0 3 TPM'
        ),
        'norm_counts_UI_Day1_1_TPM' => array(
            'color' => '#E76BF3',
            'name' => 'UI Day1 1 TPM'
        ),
        'norm_counts_UI_Day1_2_TPM' => array(
            'color' => '#E76BF3',
            'name' => 'UI Day1 2 TPM'
        ),
        'norm_counts_UI_Day1_3_TPM' => array(
            'color' => '#E76BF3',
            'name' => 'UI Day1 3 TPM'
        ),
        'norm_counts_UI_Day2_1_TPM' => array(
            'color' => '#FD61D1',
            'name' => 'UI Day2 1 TPM'
        ),
        'norm_counts_UI_Day2_2_TPM' => array(
            'color' => '#FD61D1',
            'name' => 'UI Day2 2 TPM'
        ),
        'norm_counts_UI_Day2_3_TPM' => array(
            'color' => '#FD61D1',
            'name' => 'UI Day2 3 TPM'
        ),
        'norm_counts_UI_Day5_1_TPM' => array(
            'color' => '#FF67A4',
            'name' => 'UI Day5 1 TPM'
        ),
        'norm_counts_UI_Day5_2_TPM' => array(
            'color' => '#FF67A4',
            'name' => 'UI Day5 2 TPM'
        ),
        'norm_counts_UI_Day5_3_TPM' => array(
            'color' => '#FF67A4',
            'name' => 'UI Day5 3 TPM'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Dox_Day0_1_TPM','lg2_avg_Dox_Day0_2_TPM','lg2_avg_Dox_Day0_3_TPM','lg2_avg_Dox_Day1_1_TPM','lg2_avg_Dox_Day1_2_TPM','lg2_avg_Dox_Day1_3_TPM','lg2_avg_Dox_Day2_1_TPM','lg2_avg_Dox_Day2_2_TPM','lg2_avg_Dox_Day2_3_TPM','lg2_avg_Dox_Day5_1_TPM','lg2_avg_Dox_Day5_2_TPM','lg2_avg_Dox_Day5_3_TPM','lg2_avg_Dox_p5_1_TPM','lg2_avg_Dox_p5_2_TPM','lg2_avg_Dox_p5_3_TPM','lg2_avg_H9_N4PlusRNA_1_TPM','lg2_avg_H9_N4PlusRNA_2_TPM','lg2_avg_H9_N4PlusRNA_3_TPM','lg2_avg_H9_Naive_1_TPM','lg2_avg_H9_Naive_2_TPM','lg2_avg_H9_Naive_3_TPM','lg2_avg_H9_NminRNA_1_TPM','lg2_avg_H9_NminRNA_2_TPM','lg2_avg_H9_NminRNA_3_TPM','lg2_avg_H9_Passage10RNA_1_TPM','lg2_avg_H9_Passage10RNA_2_TPM','lg2_avg_H9_Passage10RNA_3_TPM','lg2_avg_H9_Passage5RNA_1_TPM','lg2_avg_H9_Passage5RNA_2_TPM','lg2_avg_H9_Passage5RNA_3_TPM','lg2_avg_H9_Primed_1_TPM','lg2_avg_H9_Primed_2_TPM','lg2_avg_H9_Primed_3_TPM','lg2_avg_UI_Day0_1_TPM','lg2_avg_UI_Day0_2_TPM','lg2_avg_UI_Day0_3_TPM','lg2_avg_UI_Day1_1_TPM','lg2_avg_UI_Day1_2_TPM','lg2_avg_UI_Day1_3_TPM','lg2_avg_UI_Day2_1_TPM','lg2_avg_UI_Day2_2_TPM','lg2_avg_UI_Day2_3_TPM','lg2_avg_UI_Day5_1_TPM','lg2_avg_UI_Day5_2_TPM','lg2_avg_UI_Day5_3_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_Dox_vs_UI_x' => array(
            'name' => 'logFC Dox vs UI x',
            'slider_min' => -3,
            'slider_max' => 6,
            'default_low' => -3,
            'default_high' => 6
        ),
        'contrast_1_padj_Dox_vs_UI_x' => array(
            'name' => 'padj Dox vs UI x',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_1_logFC_Dox_vs_UI_y' => array(
            'name' => 'logFC Dox vs UI y',
            'slider_min' => -3,
            'slider_max' => 6,
            'default_low' => -3,
            'default_high' => 6
        ),
        'contrast_1_padj_Dox_vs_UI_y' => array(
            'name' => 'padj Dox vs UI y',
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
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'knl453_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_Dox_vs_UI_x',
        'default-x' => 'contrast_1_logFC_Dox_vs_UI_y',
        'default-y' => 'contrast_1_lg10p_Dox_vs_UI_x',
        'default-y' => 'contrast_1_lg10p_Dox_vs_UI_y',
        'selection' => array(
            'contrast_1_logFC_Dox_vs_UI_x' => array(
                'name' => 'logFC Dox vs UI x'
            ),
            'contrast_1_logFC_Dox_vs_UI_y' => array(
                'name' => 'logFC Dox vs UI y'
            ),
            'contrast_1_lg10p_Dox_vs_UI_x' => array(
                'name' => 'lg10p Dox vs UI x'
            ),
            'contrast_1_lg10p_Dox_vs_UI_y' => array(
                'name' => 'lg10p Dox vs UI y'
            ),
            'add_venn_X_corCoef_GATA3' => array(
                'name' => 'corCoef GATA3'
            ),
            'add_venn_X_corCoef_KLF17' => array(
                'name' => 'corCoef KLF17'
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
            'contrast_1_lg2BaseMean_Dox_vs_UI_x' => array(
                'name' => 'lg2BaseMean Dox vs UI x'
            ),
            'contrast_1_lg2BaseMean_x' => array(
                'name' => 'lg2BaseMean x'
            ),
            'contrast_1_lg2BaseMean_Dox_vs_UI_y' => array(
                'name' => 'lg2BaseMean Dox vs UI y'
            ),
            'contrast_1_lg2BaseMean_y' => array(
                'name' => 'lg2BaseMean y'
            )
        )
    )
//End scatterplot
);
