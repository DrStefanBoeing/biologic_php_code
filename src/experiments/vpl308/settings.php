<?php

return array(
    'lab' => array(
        'name' => 'Pachnis DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'vpl_data',
    'data_db' => array(
            'cat_table_name' => 'vpl308_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'p308_rna_seq_table',
    'primary_gene_symbol' => 'dr_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_SE_neg_1_TPM' => array(
            'color' => '#8DD3C7',
            'name' => 'SE neg 1 TPM'
        ),
        'norm_counts_SE_neg_2_TPM' => array(
            'color' => '#8DD3C7',
            'name' => 'SE neg 2 TPM'
        ),
        'norm_counts_SE_neg_3_TPM' => array(
            'color' => '#8DD3C7',
            'name' => 'SE neg 3 TPM'
        ),
        'norm_counts_SE_neg_4_TPM' => array(
            'color' => '#8DD3C7',
            'name' => 'SE neg 4 TPM'
        ),
        'norm_counts_SE_neg_5_TPM' => array(
            'color' => '#8DD3C7',
            'name' => 'SE neg 5 TPM'
        ),
        'norm_counts_PE_neg_1_TPM' => array(
            'color' => '#A9A0B2',
            'name' => 'PE neg 1 TPM'
        ),
        'norm_counts_PE_neg_2_TPM' => array(
            'color' => '#A9A0B2',
            'name' => 'PE neg 2 TPM'
        ),
        'norm_counts_PE_neg_3_TPM' => array(
            'color' => '#A9A0B2',
            'name' => 'PE neg 3 TPM'
        ),
        'norm_counts_PE_neg_4_TPM' => array(
            'color' => '#A9A0B2',
            'name' => 'PE neg 4 TPM'
        ),
        'norm_counts_PE_neg_5_TPM' => array(
            'color' => '#A9A0B2',
            'name' => 'PE neg 5 TPM'
        ),
        'norm_counts_SE_SOX10_1_TPM' => array(
            'color' => '#F0D1E1',
            'name' => 'SE SOX10 1 TPM'
        ),
        'norm_counts_SE_SOX10_2_TPM' => array(
            'color' => '#F0D1E1',
            'name' => 'SE SOX10 2 TPM'
        ),
        'norm_counts_SE_SOX10_3_TPM' => array(
            'color' => '#F0D1E1',
            'name' => 'SE SOX10 3 TPM'
        ),
        'norm_counts_SE_SOX10_4_TPM' => array(
            'color' => '#F0D1E1',
            'name' => 'SE SOX10 4 TPM'
        ),
        'norm_counts_SE_SOX10_5_TPM' => array(
            'color' => '#F0D1E1',
            'name' => 'SE SOX10 5 TPM'
        ),
        'norm_counts_PE_SOX10_1_TPM' => array(
            'color' => '#FFED6F',
            'name' => 'PE SOX10 1 TPM'
        ),
        'norm_counts_PE_SOX10_2_TPM' => array(
            'color' => '#FFED6F',
            'name' => 'PE SOX10 2 TPM'
        ),
        'norm_counts_PE_SOX10_3_TPM' => array(
            'color' => '#FFED6F',
            'name' => 'PE SOX10 3 TPM'
        ),
        'norm_counts_PE_SOX10_4_TPM' => array(
            'color' => '#FFED6F',
            'name' => 'PE SOX10 4 TPM'
        ),
        'norm_counts_PE_SOX10_5_TPM' => array(
            'color' => '#FFED6F',
            'name' => 'PE SOX10 5 TPM'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
       'experiments' => array('lg2_avg_SE_neg_1_TPM','lg2_avg_SE_neg_2_TPM','lg2_avg_SE_neg_3_TPM','lg2_avg_SE_neg_4_TPM','lg2_avg_SE_neg_5_TPM','lg2_avg_PE_neg_1_TPM','lg2_avg_PE_neg_2_TPM','lg2_avg_PE_neg_3_TPM','lg2_avg_PE_neg_4_TPM','lg2_avg_PE_neg_5_TPM','lg2_avg_SE_SOX10_1_TPM','lg2_avg_SE_SOX10_2_TPM','lg2_avg_SE_SOX10_3_TPM','lg2_avg_SE_SOX10_4_TPM','lg2_avg_SE_SOX10_5_TPM','lg2_avg_PE_SOX10_1_TPM','lg2_avg_PE_SOX10_2_TPM','lg2_avg_PE_SOX10_3_TPM','lg2_avg_PE_SOX10_4_TPM','lg2_avg_PE_SOX10_5_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
       'contrast_1_logFC_SE_SOX10_vs_SE_neg' => array(
            'name' => 'logFC SE SOX10 vs SE neg',
            'slider_min' => -8,
            'slider_max' => 10,
            'default_low' => -8,
            'default_high' => 10
        ),
        'contrast_2_logFC_PE_SOX10_vs_PE_neg' => array(
            'name' => 'logFC PE SOX10 vs PE neg',
            'slider_min' => -8,
            'slider_max' => 8,
            'default_low' => -8,
            'default_high' => 8
        ),
       'contrast_3_logFC_SE_SOX10_vs_PE_SOX10' => array(
            'name' => 'logFC SE SOX10 vs PE SOX10',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_4_logFC_SE_neg_vs_PE_neg' => array(
            'name' => 'logFC SE neg vs PE neg',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_P_PCA_estimatePCA1' => array(
            'name' => 'PCA estimatePCA1',
            'slider_min' => -5,
            'slider_max' => 5,
            'default_low' => -5,
            'default_high' => 5
        ),
        'contrast_P_PCA_estimatePCA2' => array(
            'name' => 'PCA estimatePCA2',
            'slider_min' => -4,
            'slider_max' => 3,
            'default_low' => -4,
            'default_high' => 3
        ),
        'contrast_P_PCA_estimatePCA3' => array(
            'name' => 'PCA estimatePCA3',
            'slider_min' => -4,
            'slider_max' => 3,
            'default_low' => -4,
            'default_high' => 3
        ),
        'contrast_P_PCA_estimatePCA4' => array(
            'name' => 'PCA estimatePCA4',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'contrast_P_PCA_estimatePCA5' => array(
            'name' => 'PCA estimatePCA5',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_P_PCA_estimatePCA6' => array(
            'name' => 'PCA estimatePCA6',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_P_PCA_estimatePCA7' => array(
            'name' => 'PCA estimatePCA7',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_P_PCA_estimatePCA8' => array(
            'name' => 'PCA estimatePCA8',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_P_PCA_estimatePCA9' => array(
            'name' => 'PCA estimatePCA9',
            'slider_min' => -2,
            'slider_max' => 1,
            'default_low' => -2,
            'default_high' => 1
        ),
        'contrast_P_PCA_estimatePCA10' => array(
            'name' => 'PCA estimatePCA10',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_1_padj_PE_SOX10_vs_PE_neg' => array(
            'name' => 'padj PE SOX10 vs PE neg',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_L_lg10p_LRT_Sox10_Neg' => array(
            'name' => 'lg10p LRT Sox10 Neg',
            'slider_min' => 0,
            'slider_max' => 17,
            'default_low' => 0,
            'default_high' => 17
        )
    )
    ),
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_PE_SOX10_vs_PE_neg',
        'default-y' => 'contrast_1_lg10p_PE_SOX10_vs_PE_neg',
        'selection' => array(
            'contrast_1_logFC_PE_SOX10_vs_PE_neg' => array(
                'name' => 'logFC PE SOX10 vs PE neg'
            ),
           'contrast_3_logFC_SE_SOX10_vs_PE_SOX10' => array(
                'name' => 'logFC SE SOX10 vs PE SOX10'
            ),
            'contrast_4_logFC_SE_neg_vs_PE_neg' => array(
                'name' => 'logFC SE neg vs PE neg'
            ),
            'contrast_1_lg10p_SE_SOX10_vs_SE_neg' => array(
                'name' => 'lg10p SE SOX10 vs SE neg'
            ),
            'contrast_2_lg10p_PE_SOX10_vs_PE_neg' => array(
                'name' => 'lg10p PE SOX10 vs PE neg'
            ),
            'contrast_L_lg10p_LRT_Sox10_Neg' => array(
                'name' => 'lg10p LRT Sox10 Neg'
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
            'contrast_P_lg10p_PCA6' => array(
                'name' => 'lg10p PCA6'
            ),
            'contrast_P_lg10p_PCA7' => array(
                'name' => 'lg10p PCA7'
            ),
            'contrast_P_lg10p_PCA8' => array(
                'name' => 'lg10p PCA8'
            ),
            'contrast_P_lg10p_PCA9' => array(
                'name' => 'lg10p PCA9'
            ),
            'contrast_P_lg10p_PCA10' => array(
                'name' => 'lg10p PCA10'
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
            'contrast_P_PCA_estimatePCA6' => array(
                'name' => 'PCA estimatePCA6'
            ),
            'contrast_P_PCA_estimatePCA7' => array(
                'name' => 'PCA estimatePCA7'
            ),
            'contrast_P_PCA_estimatePCA8' => array(
                'name' => 'PCA estimatePCA8'
            ),
            'contrast_P_PCA_estimatePCA9' => array(
                'name' => 'PCA estimatePCA9'
            ),
            'contrast_P_PCA_estimatePCA10' => array(
                'name' => 'PCA estimatePCA10'
            )
        )
    )
//End scatterplot
);
