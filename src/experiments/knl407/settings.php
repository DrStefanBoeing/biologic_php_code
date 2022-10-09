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
            'cat_table_name' => 'knl407_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'knl407_rna_seq_table',
    'primary_gene_symbol' => 'hgnc_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_H9_Primed_1_TPM' => array(
            'color' => '#FF61CC',
            'name' => 'H9 Primed 1 TPM'
        ),
        'norm_counts_H9_Primed_2_TPM' => array(
            'color' => '#FF61CC',
            'name' => 'H9 Primed 2 TPM'
        ),
        'norm_counts_H9_Primed_3_TPM' => array(
            'color' => '#FF61CC',
            'name' => 'H9 Primed 3 TPM'
        ),
        'norm_counts_H9_N3PlusRNA_1_TPM' => array(
            'color' => '#F8766D',
            'name' => 'H9 N3PlusRNA 1 TPM'
        ),
        'norm_counts_H9_N3PlusRNA_2_TPM' => array(
            'color' => '#F8766D',
            'name' => 'H9 N3PlusRNA 2 TPM'
        ),
        'norm_counts_H9_N3PlusRNA_3_TPM' => array(
            'color' => '#F8766D',
            'name' => 'H9 N3PlusRNA 3 TPM'
        ),
        'norm_counts_H9_N4MinusRNA_1_TPM' => array(
            'color' => '#CD9600',
            'name' => 'H9 N4MinusRNA 1 TPM'
        ),
        'norm_counts_H9_N4MinusRNA_2_TPM' => array(
            'color' => '#CD9600',
            'name' => 'H9 N4MinusRNA 2 TPM'
        ),
        'norm_counts_H9_N4MinusRNA_3_TPM' => array(
            'color' => '#CD9600',
            'name' => 'H9 N4MinusRNA 3 TPM'
        ),
        'norm_counts_H9_N4PlusRNA_1_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'H9 N4PlusRNA 1 TPM'
        ),
        'norm_counts_H9_N4PlusRNA_2_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'H9 N4PlusRNA 2 TPM'
        ),
        'norm_counts_H9_N4PlusRNA_3_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'H9 N4PlusRNA 3 TPM'
        ),
        'norm_counts_H9_NminRNA_1_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'H9 NminRNA 1 TPM'
        ),
        'norm_counts_H9_NminRNA_2_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'H9 NminRNA 2 TPM'
        ),
        'norm_counts_H9_NminRNA_3_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'H9 NminRNA 3 TPM'
        ),
        'norm_counts_H9_Passage5RNA_1_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'H9 Passage5RNA 1 TPM'
        ),
        'norm_counts_H9_Passage5RNA_2_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'H9 Passage5RNA 2 TPM'
        ),
        'norm_counts_H9_Passage5RNA_3_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'H9 Passage5RNA 3 TPM'
        ),
        'norm_counts_H9_Passage10RNA_1_TPM' => array(
            'color' => '#00A9FF',
            'name' => 'H9 Passage10RNA 1 TPM'
        ),
        'norm_counts_H9_Passage10RNA_2_TPM' => array(
            'color' => '#00A9FF',
            'name' => 'H9 Passage10RNA 2 TPM'
        ),
        'norm_counts_H9_Passage10RNA_3_TPM' => array(
            'color' => '#00A9FF',
            'name' => 'H9 Passage10RNA 3 TPM'
        ),
        'norm_counts_H9_Naive_1_TPM' => array(
            'color' => '#00BE67',
            'name' => 'H9 Naive 1 TPM'
        ),
        'norm_counts_H9_Naive_2_TPM' => array(
            'color' => '#00BE67',
            'name' => 'H9 Naive 2 TPM'
        ),
        'norm_counts_H9_Naive_3_TPM' => array(
            'color' => '#00BE67',
            'name' => 'H9 Naive 3 TPM'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
// New Begin: Timecourse
'timecourse_chart' => array(
    'timepoint_name' => 'Day',
    'display_median' => 'calculate_median',
    'timepoint_array' => array(0,9,9.5,10,10.5,32,56,100),
    'datasets' => array(
'H9' => array(
    'color' => '#FF0000FF',
    'sample_group' => array(
'H9_Primed' => array(
    'timepoint' =>  0,
    'sampleDbCols' =>  array(
'norm_counts_H9_Primed_1_TPM','norm_counts_H9_Primed_2_TPM','norm_counts_H9_Primed_3_TPM'
)),
'H9_N3PlusRNA' => array(
    'timepoint' =>  9,
    'sampleDbCols' =>  array(
'norm_counts_H9_N3PlusRNA_1_TPM','norm_counts_H9_N3PlusRNA_2_TPM','norm_counts_H9_N3PlusRNA_3_TPM'
)),
'H9_N4MinusRNA' => array(
    'timepoint' =>  9.5,
    'sampleDbCols' =>  array(
'norm_counts_H9_N4MinusRNA_1_TPM','norm_counts_H9_N4MinusRNA_2_TPM','norm_counts_H9_N4MinusRNA_3_TPM'
)),
'H9_N4PlusRNA' => array(
    'timepoint' =>  10,
    'sampleDbCols' =>  array(
'norm_counts_H9_N4PlusRNA_1_TPM','norm_counts_H9_N4PlusRNA_2_TPM','norm_counts_H9_N4PlusRNA_3_TPM'
)),
'H9_NminRNA' => array(
    'timepoint' =>  10.5,
    'sampleDbCols' =>  array(
'norm_counts_H9_NminRNA_1_TPM','norm_counts_H9_NminRNA_2_TPM','norm_counts_H9_NminRNA_3_TPM'
)),
'H9_Passage5RNA' => array(
    'timepoint' =>  32,
    'sampleDbCols' =>  array(
'norm_counts_H9_Passage5RNA_1_TPM','norm_counts_H9_Passage5RNA_2_TPM','norm_counts_H9_Passage5RNA_3_TPM'
)),
'H9_Passage10RNA' => array(
    'timepoint' =>  56,
    'sampleDbCols' =>  array(
'norm_counts_H9_Passage10RNA_1_TPM','norm_counts_H9_Passage10RNA_2_TPM','norm_counts_H9_Passage10RNA_3_TPM'
)),
'H9_Naive' => array(
    'timepoint' =>  100,
    'sampleDbCols' =>  array(
'norm_counts_H9_Naive_1_TPM','norm_counts_H9_Naive_2_TPM','norm_counts_H9_Naive_3_TPM'
)))))),
// New End: Timecourse
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_H9_Primed_1_TPM','lg2_avg_H9_Primed_2_TPM','lg2_avg_H9_Primed_3_TPM','lg2_avg_H9_N3PlusRNA_1_TPM','lg2_avg_H9_N3PlusRNA_2_TPM','lg2_avg_H9_N3PlusRNA_3_TPM','lg2_avg_H9_N4MinusRNA_1_TPM','lg2_avg_H9_N4MinusRNA_2_TPM','lg2_avg_H9_N4MinusRNA_3_TPM','lg2_avg_H9_N4PlusRNA_1_TPM','lg2_avg_H9_N4PlusRNA_2_TPM','lg2_avg_H9_N4PlusRNA_3_TPM','lg2_avg_H9_NminRNA_1_TPM','lg2_avg_H9_NminRNA_2_TPM','lg2_avg_H9_NminRNA_3_TPM','lg2_avg_H9_Passage5RNA_1_TPM','lg2_avg_H9_Passage5RNA_2_TPM','lg2_avg_H9_Passage5RNA_3_TPM','lg2_avg_H9_Passage10RNA_1_TPM','lg2_avg_H9_Passage10RNA_2_TPM','lg2_avg_H9_Passage10RNA_3_TPM','lg2_avg_H9_Naive_1_TPM','lg2_avg_H9_Naive_2_TPM','lg2_avg_H9_Naive_3_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_H9_NminRNA_vs_H9_Primed' => array(
            'name' => 'logFC H9 NminRNA vs H9 Primed',
            'slider_min' => -8,
            'slider_max' => 10,
            'default_low' => -8,
            'default_high' => 10
        ),
        'contrast_1_padj_H9_NminRNA_vs_H9_Primed' => array(
            'name' => 'padj H9 NminRNA vs H9 Primed',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_H9_N3PlusRNA_vs_H9_Primed' => array(
            'name' => 'logFC H9 N3PlusRNA vs H9 Primed',
            'slider_min' => -8,
            'slider_max' => 10,
            'default_low' => -8,
            'default_high' => 10
        ),
        'contrast_2_padj_H9_N3PlusRNA_vs_H9_Primed' => array(
            'name' => 'padj H9 N3PlusRNA vs H9 Primed',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_H9_N4PlusRNA_vs_H9_Primed' => array(
            'name' => 'logFC H9 N4PlusRNA vs H9 Primed',
            'slider_min' => -8,
            'slider_max' => 11,
            'default_low' => -8,
            'default_high' => 11
        ),
        'contrast_3_padj_H9_N4PlusRNA_vs_H9_Primed' => array(
            'name' => 'padj H9 N4PlusRNA vs H9 Primed',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_logFC_H9_Naive_vs_H9_Primed' => array(
            'name' => 'logFC H9 Naive vs H9 Primed',
            'slider_min' => -11,
            'slider_max' => 12,
            'default_low' => -11,
            'default_high' => 12
        ),
        'contrast_4_padj_H9_Naive_vs_H9_Primed' => array(
            'name' => 'padj H9 Naive vs H9 Primed',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_5_logFC_H9_NminRNA_vs_H9_Passage5RNA' => array(
            'name' => 'logFC H9 NminRNA vs H9 Passage5RNA',
            'slider_min' => -4,
            'slider_max' => 4,
            'default_low' => -4,
            'default_high' => 4
        ),
        'contrast_5_padj_H9_NminRNA_vs_H9_Passage5RNA' => array(
            'name' => 'padj H9 NminRNA vs H9 Passage5RNA',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_A_logFC_knl366_KLF17_D5_vs_CTRL_D5' => array(
            'name' => 'logFC knl366 KLF17 D5 vs CTRL D5',
            'slider_min' => -3,
            'slider_max' => 8,
            'default_low' => -3,
            'default_high' => 8
        ),
        'contrast_A_padj_knl366_KLF17_D5_vs_CTRL_D5' => array(
            'name' => 'padj knl366 KLF17 D5 vs CTRL D5',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_A_logFC_knl368A_KO_p5_vs_WT_p5' => array(
            'name' => 'logFC knl368A KO p5 vs WT p5',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_A_padj_knl368A_KO_p5_vs_WT_p5' => array(
            'name' => 'padj knl368A KO p5 vs WT p5',
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
        'contrast_L_lg10p_LRT_timepoint' => array(
            'name' => 'lg10p LRT timepoint',
            'slider_min' => 0,
            'slider_max' => 318,
            'default_low' => 0,
            'default_high' => 318
        ),
        'contrast_L_lg10p_LRT_Stage' => array(
            'name' => 'lg10p LRT Stage',
            'slider_min' => 0,
            'slider_max' => 318,
            'default_low' => 0,
            'default_high' => 318
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'knl407_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_H9_NminRNA_vs_H9_Primed',
        'default-y' => 'contrast_1_lg10p_H9_NminRNA_vs_H9_Primed',
        'selection' => array(
            'contrast_1_logFC_H9_NminRNA_vs_H9_Primed' => array(
                'name' => 'logFC H9 NminRNA vs H9 Primed'
            ),
            'contrast_2_logFC_H9_N3PlusRNA_vs_H9_Primed' => array(
                'name' => 'logFC H9 N3PlusRNA vs H9 Primed'
            ),
            'contrast_3_logFC_H9_N4PlusRNA_vs_H9_Primed' => array(
                'name' => 'logFC H9 N4PlusRNA vs H9 Primed'
            ),
            'contrast_4_logFC_H9_Naive_vs_H9_Primed' => array(
                'name' => 'logFC H9 Naive vs H9 Primed'
            ),
            'contrast_5_logFC_H9_NminRNA_vs_H9_Passage5RNA' => array(
                'name' => 'logFC H9 NminRNA vs H9 Passage5RNA'
            ),
            'contrast_A_logFC_knl366_KLF17_D5_vs_CTRL_D5' => array(
                'name' => 'logFC knl366 KLF17 D5 vs CTRL D5'
            ),
            'contrast_A_logFC_knl368A_KO_p5_vs_WT_p5' => array(
                'name' => 'logFC knl368A KO p5 vs WT p5'
            ),
            'contrast_1_lg10p_H9_NminRNA_vs_H9_Primed' => array(
                'name' => 'lg10p H9 NminRNA vs H9 Primed'
            ),
            'contrast_2_lg10p_H9_N3PlusRNA_vs_H9_Primed' => array(
                'name' => 'lg10p H9 N3PlusRNA vs H9 Primed'
            ),
            'contrast_3_lg10p_H9_N4PlusRNA_vs_H9_Primed' => array(
                'name' => 'lg10p H9 N4PlusRNA vs H9 Primed'
            ),
            'contrast_4_lg10p_H9_Naive_vs_H9_Primed' => array(
                'name' => 'lg10p H9 Naive vs H9 Primed'
            ),
            'contrast_5_lg10p_H9_NminRNA_vs_H9_Passage5RNA' => array(
                'name' => 'lg10p H9 NminRNA vs H9 Passage5RNA'
            ),
            'contrast_L_lg10p_LRT_timepoint' => array(
                'name' => 'lg10p LRT timepoint'
            ),
            'contrast_L_lg10p_LRT_Stage' => array(
                'name' => 'lg10p LRT Stage'
            ),
            'contrast_A_lg10p_knl366_KLF17_D5_vs_CTRL_D5' => array(
                'name' => 'lg10p knl366 KLF17 D5 vs CTRL D5'
            ),
            'contrast_A_lg10p_knl368A_KO_p5_vs_WT_p5' => array(
                'name' => 'lg10p knl368A KO p5 vs WT p5'
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
            'contrast_1_lg2BaseMean_H9_NminRNA_vs_H9_Primed' => array(
                'name' => 'lg2BaseMean H9 NminRNA vs H9 Primed'
            ),
            'contrast_2_lg2BaseMean_H9_N3PlusRNA_vs_H9_Primed' => array(
                'name' => 'lg2BaseMean H9 N3PlusRNA vs H9 Primed'
            ),
            'contrast_3_lg2BaseMean_H9_N4PlusRNA_vs_H9_Primed' => array(
                'name' => 'lg2BaseMean H9 N4PlusRNA vs H9 Primed'
            ),
            'contrast_4_lg2BaseMean_H9_Naive_vs_H9_Primed' => array(
                'name' => 'lg2BaseMean H9 Naive vs H9 Primed'
            ),
            'contrast_5_lg2BaseMean_H9_NminRNA_vs_H9_Passage5RNA' => array(
                'name' => 'lg2BaseMean H9 NminRNA vs H9 Passage5RNA'
            ),
            'contrast_L_lg2BaseMean_LRT_timepoint' => array(
                'name' => 'lg2BaseMean LRT timepoint'
            ),
            'contrast_L_lg2BaseMean_LRT_Stage' => array(
                'name' => 'lg2BaseMean LRT Stage'
            ),
            'contrast_5_lg2BaseMean_KLF17_D5_vs_CTRL_D5' => array(
                'name' => 'lg2BaseMean KLF17 D5 vs CTRL D5'
            ),
            'contrast_4_lg2BaseMean_KO_p5_vs_WT_p5' => array(
                'name' => 'lg2BaseMean KO p5 vs WT p5'
            )
        )
    )
//End scatterplot
);
