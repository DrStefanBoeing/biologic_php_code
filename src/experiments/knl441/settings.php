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
            'cat_table_name' => 'knl441_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'knl441_rna_seq_table',
    'primary_gene_symbol' => 'hgnc_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_H9_Naive_3_TPM' => array(
            'color' => '#F8766D',
            'name' => 'H9 Naive 3 TPM'
        ),
        'norm_counts_H9_Naive_1_TPM' => array(
            'color' => '#F37C58',
            'name' => 'H9 Naive 1 TPM'
        ),
        'norm_counts_H9_Naive_2_TPM' => array(
            'color' => '#ED813E',
            'name' => 'H9 Naive 2 TPM'
        ),
        'norm_counts_H9_Passage10RNA_3_TPM' => array(
            'color' => '#E68613',
            'name' => 'H9 Passage10RNA 3 TPM'
        ),
        'norm_counts_H9_Passage5RNA_3_TPM' => array(
            'color' => '#DE8C00',
            'name' => 'H9 Passage5RNA 3 TPM'
        ),
        'norm_counts_H9_Passage5RNA_2_TPM' => array(
            'color' => '#D69100',
            'name' => 'H9 Passage5RNA 2 TPM'
        ),
        'norm_counts_H9_Passage5RNA_1_TPM' => array(
            'color' => '#CD9600',
            'name' => 'H9 Passage5RNA 1 TPM'
        ),
        'norm_counts_H9_Passage10RNA_1_TPM' => array(
            'color' => '#C29A00',
            'name' => 'H9 Passage10RNA 1 TPM'
        ),
        'norm_counts_H9_Passage10RNA_2_TPM' => array(
            'color' => '#B79F00',
            'name' => 'H9 Passage10RNA 2 TPM'
        ),
        'norm_counts_H9_N4PlusRNA_1_TPM' => array(
            'color' => '#ABA300',
            'name' => 'H9 N4PlusRNA 1 TPM'
        ),
        'norm_counts_H9_N4PlusRNA_3_TPM' => array(
            'color' => '#9DA700',
            'name' => 'H9 N4PlusRNA 3 TPM'
        ),
        'norm_counts_H9_NminRNA_1_TPM' => array(
            'color' => '#8EAB00',
            'name' => 'H9 NminRNA 1 TPM'
        ),
        'norm_counts_H9_N4PlusRNA_2_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'H9 N4PlusRNA 2 TPM'
        ),
        'norm_counts_H9_NminRNA_2_TPM' => array(
            'color' => '#66B200',
            'name' => 'H9 NminRNA 2 TPM'
        ),
        'norm_counts_H9_NminRNA_3_TPM' => array(
            'color' => '#49B500',
            'name' => 'H9 NminRNA 3 TPM'
        ),
        'norm_counts_WT_p7MEF_2_TPM' => array(
            'color' => '#0CB702',
            'name' => 'WT p7MEF 2 TPM'
        ),
        'norm_counts_WT_p7MEF_3_TPM' => array(
            'color' => '#00BA38',
            'name' => 'WT p7MEF 3 TPM'
        ),
        'norm_counts_WT_p10MEF_2_TPM' => array(
            'color' => '#00BC52',
            'name' => 'WT p10MEF 2 TPM'
        ),
        'norm_counts_WT_p7MEF_1_TPM' => array(
            'color' => '#00BE67',
            'name' => 'WT p7MEF 1 TPM'
        ),
        'norm_counts_KO_p7MEF_1_TPM' => array(
            'color' => '#00BF7A',
            'name' => 'KO p7MEF 1 TPM'
        ),
        'norm_counts_KO_p7MEF_2_TPM' => array(
            'color' => '#00C08B',
            'name' => 'KO p7MEF 2 TPM'
        ),
        'norm_counts_KO_p10MEF_1_TPM' => array(
            'color' => '#00C19A',
            'name' => 'KO p10MEF 1 TPM'
        ),
        'norm_counts_WT_p10MEF_3_TPM' => array(
            'color' => '#00C1A9',
            'name' => 'WT p10MEF 3 TPM'
        ),
        'norm_counts_WT_p10MEF_1_TPM' => array(
            'color' => '#00C0B7',
            'name' => 'WT p10MEF 1 TPM'
        ),
        'norm_counts_KO_p10MEF_2_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'KO p10MEF 2 TPM'
        ),
        'norm_counts_WT_p5_1_TPM' => array(
            'color' => '#00BDD1',
            'name' => 'WT p5 1 TPM'
        ),
        'norm_counts_WT_p5_3_TPM' => array(
            'color' => '#00BBDC',
            'name' => 'WT p5 3 TPM'
        ),
        'norm_counts_WT_p5_2_TPM' => array(
            'color' => '#00B8E7',
            'name' => 'WT p5 2 TPM'
        ),
        'norm_counts_KO_p5_1_TPM' => array(
            'color' => '#00B4F0',
            'name' => 'KO p5 1 TPM'
        ),
        'norm_counts_KO_p5_2_TPM' => array(
            'color' => '#00AFF8',
            'name' => 'KO p5 2 TPM'
        ),
        'norm_counts_WT_Day8_2_TPM' => array(
            'color' => '#00A9FF',
            'name' => 'WT Day8 2 TPM'
        ),
        'norm_counts_KO_Day8_1_TPM' => array(
            'color' => '#22A3FF',
            'name' => 'KO Day8 1 TPM'
        ),
        'norm_counts_KO_Day8_2_TPM' => array(
            'color' => '#619CFF',
            'name' => 'KO Day8 2 TPM'
        ),
        'norm_counts_WT_Day8_3_TPM' => array(
            'color' => '#8494FF',
            'name' => 'WT Day8 3 TPM'
        ),
        'norm_counts_WT_Day8_1_TPM' => array(
            'color' => '#9F8CFF',
            'name' => 'WT Day8 1 TPM'
        ),
        'norm_counts_KO_Day2_2_TPM' => array(
            'color' => '#B584FF',
            'name' => 'KO Day2 2 TPM'
        ),
        'norm_counts_KO_Day2_1_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'KO Day2 1 TPM'
        ),
        'norm_counts_WT_Day2_2_TPM' => array(
            'color' => '#D674FD',
            'name' => 'WT Day2 2 TPM'
        ),
        'norm_counts_WT_Day2_3_TPM' => array(
            'color' => '#E36EF6',
            'name' => 'WT Day2 3 TPM'
        ),
        'norm_counts_WT_Day2_1_TPM' => array(
            'color' => '#ED68ED',
            'name' => 'WT Day2 1 TPM'
        ),
        'norm_counts_WT_Day0_3_TPM' => array(
            'color' => '#F564E3',
            'name' => 'WT Day0 3 TPM'
        ),
        'norm_counts_KO_Day0_1_TPM' => array(
            'color' => '#FB61D8',
            'name' => 'KO Day0 1 TPM'
        ),
        'norm_counts_KO_Day0_2_TPM' => array(
            'color' => '#FF61CC',
            'name' => 'KO Day0 2 TPM'
        ),
        'norm_counts_WT_Day0_2_TPM' => array(
            'color' => '#FF62BF',
            'name' => 'WT Day0 2 TPM'
        ),
        'norm_counts_WT_Day0_1_TPM' => array(
            'color' => '#FF64B0',
            'name' => 'WT Day0 1 TPM'
        ),
        'norm_counts_H9_Primed_3_TPM' => array(
            'color' => '#FF68A1',
            'name' => 'H9 Primed 3 TPM'
        ),
        'norm_counts_H9_Primed_1_TPM' => array(
            'color' => '#FF6C91',
            'name' => 'H9 Primed 1 TPM'
        ),
        'norm_counts_H9_Primed_2_TPM' => array(
            'color' => '#FF6C91',
            'name' => 'H9 Primed 2 TPM'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_H9_N4PlusRNA_1_TPM','lg2_avg_H9_N4PlusRNA_2_TPM','lg2_avg_H9_N4PlusRNA_3_TPM','lg2_avg_H9_Naive_1_TPM','lg2_avg_H9_Naive_2_TPM','lg2_avg_H9_Naive_3_TPM','lg2_avg_H9_NminRNA_1_TPM','lg2_avg_H9_NminRNA_2_TPM','lg2_avg_H9_NminRNA_3_TPM','lg2_avg_H9_Passage10RNA_1_TPM','lg2_avg_H9_Passage10RNA_2_TPM','lg2_avg_H9_Passage10RNA_3_TPM','lg2_avg_H9_Passage5RNA_1_TPM','lg2_avg_H9_Passage5RNA_2_TPM','lg2_avg_H9_Passage5RNA_3_TPM','lg2_avg_H9_Primed_1_TPM','lg2_avg_H9_Primed_2_TPM','lg2_avg_H9_Primed_3_TPM','lg2_avg_KO_Day0_1_TPM','lg2_avg_KO_Day0_2_TPM','lg2_avg_KO_Day2_1_TPM','lg2_avg_KO_Day2_2_TPM','lg2_avg_KO_Day8_1_TPM','lg2_avg_KO_Day8_2_TPM','lg2_avg_KO_p10MEF_1_TPM','lg2_avg_KO_p10MEF_2_TPM','lg2_avg_KO_p5_1_TPM','lg2_avg_KO_p5_2_TPM','lg2_avg_KO_p7MEF_1_TPM','lg2_avg_KO_p7MEF_2_TPM','lg2_avg_WT_Day0_1_TPM','lg2_avg_WT_Day0_2_TPM','lg2_avg_WT_Day0_3_TPM','lg2_avg_WT_Day2_1_TPM','lg2_avg_WT_Day2_2_TPM','lg2_avg_WT_Day2_3_TPM','lg2_avg_WT_Day8_1_TPM','lg2_avg_WT_Day8_2_TPM','lg2_avg_WT_Day8_3_TPM','lg2_avg_WT_p10MEF_1_TPM','lg2_avg_WT_p10MEF_2_TPM','lg2_avg_WT_p10MEF_3_TPM','lg2_avg_WT_p5_1_TPM','lg2_avg_WT_p5_2_TPM','lg2_avg_WT_p5_3_TPM','lg2_avg_WT_p7MEF_1_TPM','lg2_avg_WT_p7MEF_2_TPM','lg2_avg_WT_p7MEF_3_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_KO_vs_WT' => array(
            'name' => 'logFC KO vs WT',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_1_padj_KO_vs_WT' => array(
            'name' => 'padj KO vs WT',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_H9_vs_KO' => array(
            'name' => 'logFC H9 vs KO',
            'slider_min' => -10,
            'slider_max' => 10,
            'default_low' => -10,
            'default_high' => 10
        ),
        'contrast_2_padj_H9_vs_KO' => array(
            'name' => 'padj H9 vs KO',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_H9_vs_WT' => array(
            'name' => 'logFC H9 vs WT',
            'slider_min' => -10,
            'slider_max' => 9,
            'default_low' => -10,
            'default_high' => 9
        ),
        'contrast_3_padj_H9_vs_WT' => array(
            'name' => 'padj H9 vs WT',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
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
'pca' => 'knl441_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_X_logFC_Expressed_in_N_Percent_Cells',
        'default-y' => 'norm_counts_H9_Naive_3_TPM',
        'selection' => array(
            'norm_counts_H9_Naive_3_TPM' => array(
                'name' => 's H9 Naive 3 TPM'
            ),
            'contrast_1_logFC_KO_vs_WT' => array(
                'name' => 'logFC KO vs WT'
            ),
            'contrast_2_logFC_H9_vs_KO' => array(
                'name' => 'logFC H9 vs KO'
            ),
            'contrast_3_logFC_H9_vs_WT' => array(
                'name' => 'logFC H9 vs WT'
            ),
            'contrast_1_lg10p_KO_vs_WT' => array(
                'name' => 'lg10p KO vs WT'
            ),
            'contrast_2_lg10p_H9_vs_KO' => array(
                'name' => 'lg10p H9 vs KO'
            ),
            'contrast_3_lg10p_H9_vs_WT' => array(
                'name' => 'lg10p H9 vs WT'
            ),
            'contrast_L_lg10p_LRT_batch' => array(
                'name' => 'lg10p LRT batch'
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
            'contrast_1_lg2BaseMean_KO_vs_WT' => array(
                'name' => 'lg2BaseMean KO vs WT'
            ),
            'contrast_2_lg2BaseMean_H9_vs_KO' => array(
                'name' => 'lg2BaseMean H9 vs KO'
            ),
            'contrast_3_lg2BaseMean_H9_vs_WT' => array(
                'name' => 'lg2BaseMean H9 vs WT'
            ),
            'contrast_L_lg2BaseMean_LRT_batch' => array(
                'name' => 'lg2BaseMean LRT batch'
            ),
            'norm_counts_H9_Naive_3_TPM' => array(
                'name' => 's H9 Naive 3 TPM'
            ),
            'norm_counts_H9_Naive_1_TPM' => array(
                'name' => 's H9 Naive 1 TPM'
            ),
            'norm_counts_H9_Naive_2_TPM' => array(
                'name' => 's H9 Naive 2 TPM'
            ),
            'norm_counts_H9_Passage10RNA_3_TPM' => array(
                'name' => 's H9 Passage10RNA 3 TPM'
            ),
            'norm_counts_H9_Passage5RNA_3_TPM' => array(
                'name' => 's H9 Passage5RNA 3 TPM'
            ),
            'norm_counts_H9_Passage5RNA_2_TPM' => array(
                'name' => 's H9 Passage5RNA 2 TPM'
            ),
            'norm_counts_H9_Passage5RNA_1_TPM' => array(
                'name' => 's H9 Passage5RNA 1 TPM'
            ),
            'norm_counts_H9_Passage10RNA_1_TPM' => array(
                'name' => 's H9 Passage10RNA 1 TPM'
            ),
            'norm_counts_H9_Passage10RNA_2_TPM' => array(
                'name' => 's H9 Passage10RNA 2 TPM'
            ),
            'norm_counts_H9_N4PlusRNA_1_TPM' => array(
                'name' => 's H9 N4PlusRNA 1 TPM'
            ),
            'norm_counts_H9_N4PlusRNA_3_TPM' => array(
                'name' => 's H9 N4PlusRNA 3 TPM'
            ),
            'norm_counts_H9_NminRNA_1_TPM' => array(
                'name' => 's H9 NminRNA 1 TPM'
            ),
            'norm_counts_H9_N4PlusRNA_2_TPM' => array(
                'name' => 's H9 N4PlusRNA 2 TPM'
            ),
            'norm_counts_H9_NminRNA_2_TPM' => array(
                'name' => 's H9 NminRNA 2 TPM'
            ),
            'norm_counts_H9_NminRNA_3_TPM' => array(
                'name' => 's H9 NminRNA 3 TPM'
            ),
            'norm_counts_WT_p7MEF_2_TPM' => array(
                'name' => 's WT p7MEF 2 TPM'
            ),
            'norm_counts_WT_p7MEF_3_TPM' => array(
                'name' => 's WT p7MEF 3 TPM'
            ),
            'norm_counts_WT_p10MEF_2_TPM' => array(
                'name' => 's WT p10MEF 2 TPM'
            ),
            'norm_counts_WT_p7MEF_1_TPM' => array(
                'name' => 's WT p7MEF 1 TPM'
            ),
            'norm_counts_KO_p7MEF_1_TPM' => array(
                'name' => 's KO p7MEF 1 TPM'
            ),
            'norm_counts_KO_p7MEF_2_TPM' => array(
                'name' => 's KO p7MEF 2 TPM'
            ),
            'norm_counts_KO_p10MEF_1_TPM' => array(
                'name' => 's KO p10MEF 1 TPM'
            ),
            'norm_counts_WT_p10MEF_3_TPM' => array(
                'name' => 's WT p10MEF 3 TPM'
            ),
            'norm_counts_WT_p10MEF_1_TPM' => array(
                'name' => 's WT p10MEF 1 TPM'
            ),
            'norm_counts_KO_p10MEF_2_TPM' => array(
                'name' => 's KO p10MEF 2 TPM'
            ),
            'norm_counts_WT_p5_1_TPM' => array(
                'name' => 's WT p5 1 TPM'
            ),
            'norm_counts_WT_p5_3_TPM' => array(
                'name' => 's WT p5 3 TPM'
            ),
            'norm_counts_WT_p5_2_TPM' => array(
                'name' => 's WT p5 2 TPM'
            ),
            'norm_counts_KO_p5_1_TPM' => array(
                'name' => 's KO p5 1 TPM'
            ),
            'norm_counts_KO_p5_2_TPM' => array(
                'name' => 's KO p5 2 TPM'
            ),
            'norm_counts_WT_Day8_2_TPM' => array(
                'name' => 's WT Day8 2 TPM'
            ),
            'norm_counts_KO_Day8_1_TPM' => array(
                'name' => 's KO Day8 1 TPM'
            ),
            'norm_counts_KO_Day8_2_TPM' => array(
                'name' => 's KO Day8 2 TPM'
            ),
            'norm_counts_WT_Day8_3_TPM' => array(
                'name' => 's WT Day8 3 TPM'
            ),
            'norm_counts_WT_Day8_1_TPM' => array(
                'name' => 's WT Day8 1 TPM'
            ),
            'norm_counts_KO_Day2_2_TPM' => array(
                'name' => 's KO Day2 2 TPM'
            ),
            'norm_counts_KO_Day2_1_TPM' => array(
                'name' => 's KO Day2 1 TPM'
            ),
            'norm_counts_WT_Day2_2_TPM' => array(
                'name' => 's WT Day2 2 TPM'
            ),
            'norm_counts_WT_Day2_3_TPM' => array(
                'name' => 's WT Day2 3 TPM'
            ),
            'norm_counts_WT_Day2_1_TPM' => array(
                'name' => 's WT Day2 1 TPM'
            ),
            'norm_counts_WT_Day0_3_TPM' => array(
                'name' => 's WT Day0 3 TPM'
            ),
            'norm_counts_KO_Day0_1_TPM' => array(
                'name' => 's KO Day0 1 TPM'
            ),
            'norm_counts_KO_Day0_2_TPM' => array(
                'name' => 's KO Day0 2 TPM'
            ),
            'norm_counts_WT_Day0_2_TPM' => array(
                'name' => 's WT Day0 2 TPM'
            ),
            'norm_counts_WT_Day0_1_TPM' => array(
                'name' => 's WT Day0 1 TPM'
            ),
            'norm_counts_H9_Primed_3_TPM' => array(
                'name' => 's H9 Primed 3 TPM'
            ),
            'norm_counts_H9_Primed_1_TPM' => array(
                'name' => 's H9 Primed 1 TPM'
            ),
            'norm_counts_H9_Primed_2_TPM' => array(
                'name' => 's H9 Primed 2 TPM'
            )
        )
    )
//End scatterplot
);
