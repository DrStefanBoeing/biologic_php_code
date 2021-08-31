<?php

return array(
    'lab' => array(
        'name' => 'Pachnis DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'rll_data',
    'data_db' => array(
            'cat_table_name' => 'rll328_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'p328_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_p27null_12wk_1_TPM' => array(
            'color' => '#F8766D',
            'name' => 'p27null 12wk 1 TPM'
        ),
        'norm_counts_p27null_12wk_3_TPM' => array(
            'color' => '#F8766D',
            'name' => 'p27null 12wk 3 TPM'
        ),
        'norm_counts_p27null_12wk_4_TPM' => array(
            'color' => '#F8766D',
            'name' => 'p27null 12wk 4 TPM'
        ),
        'norm_counts_p27null_PND8_1_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'p27null PND8 1 TPM'
        ),
        'norm_counts_p27null_PND8_3_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'p27null PND8 3 TPM'
        ),
        'norm_counts_p27null_PND8_4_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'p27null PND8 4 TPM'
        ),
        'norm_counts_WT_12wk_1_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'WT 12wk 1 TPM'
        ),
        'norm_counts_WT_12wk_2_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'WT 12wk 2 TPM'
        ),
        'norm_counts_WT_12wk_3_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'WT 12wk 3 TPM'
        ),
        'norm_counts_WT_12wk_4_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'WT 12wk 4 TPM'
        ),
        'norm_counts_WT_PND8_1_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'WT PND8 1 TPM'
        ),
        'norm_counts_WT_PND8_2_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'WT PND8 2 TPM'
        ),
        'norm_counts_WT_PND8_3_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'WT PND8 3 TPM'
        ),
        'norm_counts_WT_PND8_4_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'WT PND8 4 TPM'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_p27null_12wk_1_TPM','lg2_avg_p27null_12wk_3_TPM','lg2_avg_p27null_12wk_4_TPM','lg2_avg_p27null_PND8_1_TPM','lg2_avg_p27null_PND8_3_TPM','lg2_avg_p27null_PND8_4_TPM','lg2_avg_WT_12wk_1_TPM','lg2_avg_WT_12wk_2_TPM','lg2_avg_WT_12wk_3_TPM','lg2_avg_WT_12wk_4_TPM','lg2_avg_WT_PND8_1_TPM','lg2_avg_WT_PND8_2_TPM','lg2_avg_WT_PND8_3_TPM','lg2_avg_WT_PND8_4_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_p27null_PND8_vs_WT_PND8' => array(
            'name' => 'logFC p27null PND8 vs WT PND8',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_1_padj_p27null_PND8_vs_WT_PND8' => array(
            'name' => 'padj p27null PND8 vs WT PND8',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_p27null_12wk_vs_WT_12wk' => array(
            'name' => 'logFC p27null 12wk vs WT 12wk',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'contrast_2_padj_p27null_12wk_vs_WT_12wk' => array(
            'name' => 'padj p27null 12wk vs WT 12wk',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_WT_12wk_vs_WT_PND8' => array(
            'name' => 'logFC WT 12wk vs WT PND8',
            'slider_min' => -6,
            'slider_max' => 7,
            'default_low' => -6,
            'default_high' => 7
        ),
        'contrast_3_padj_WT_12wk_vs_WT_PND8' => array(
            'name' => 'padj WT 12wk vs WT PND8',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_logFC_p27null_12wk_vs_p27null_PND8' => array(
            'name' => 'logFC p27null 12wk vs p27null PND8',
            'slider_min' => -8,
            'slider_max' => 7,
            'default_low' => -8,
            'default_high' => 7
        ),
        'contrast_4_padj_p27null_12wk_vs_p27null_PND8' => array(
            'name' => 'padj p27null 12wk vs p27null PND8',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_L_padj_LRT_WT_vs_MT' => array(
            'name' => 'padj LRT WT vs MT',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_L_padj_LRT_12wt_vs_PND8' => array(
            'name' => 'padj LRT 12wt vs PND8',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'p328_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_p27null_PND8_vs_WT_PND8',
        'default-y' => 'contrast_1_lg10p_p27null_PND8_vs_WT_PND8',
        'selection' => array(
            'contrast_1_logFC_p27null_PND8_vs_WT_PND8' => array(
                'name' => 'logFC p27null PND8 vs WT PND8'
            ),
            'contrast_2_logFC_p27null_12wk_vs_WT_12wk' => array(
                'name' => 'logFC p27null 12wk vs WT 12wk'
            ),
            'contrast_3_logFC_WT_12wk_vs_WT_PND8' => array(
                'name' => 'logFC WT 12wk vs WT PND8'
            ),
            'contrast_4_logFC_p27null_12wk_vs_p27null_PND8' => array(
                'name' => 'logFC p27null 12wk vs p27null PND8'
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
            'contrast_1_lg10p_p27null_PND8_vs_WT_PND8' => array(
                'name' => 'lg10p p27null PND8 vs WT PND8'
            ),
            'contrast_2_lg10p_p27null_12wk_vs_WT_12wk' => array(
                'name' => 'lg10p p27null 12wk vs WT 12wk'
            ),
            'contrast_3_lg10p_WT_12wk_vs_WT_PND8' => array(
                'name' => 'lg10p WT 12wk vs WT PND8'
            ),
            'contrast_4_lg10p_p27null_12wk_vs_p27null_PND8' => array(
                'name' => 'lg10p p27null 12wk vs p27null PND8'
            ),
            'contrast_L_lg10p_LRT_WT_vs_MT' => array(
                'name' => 'lg10p LRT WT vs MT'
            ),
            'contrast_L_lg10p_LRT_12wt_vs_PND8' => array(
                'name' => 'lg10p LRT 12wt vs PND8'
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
            'contrast_1_lg2BaseMean_p27null_PND8_vs_WT_PND8' => array(
                'name' => 'lg2BaseMean p27null PND8 vs WT PND8'
            ),
            'contrast_2_lg2BaseMean_p27null_12wk_vs_WT_12wk' => array(
                'name' => 'lg2BaseMean p27null 12wk vs WT 12wk'
            ),
            'contrast_3_lg2BaseMean_WT_12wk_vs_WT_PND8' => array(
                'name' => 'lg2BaseMean WT 12wk vs WT PND8'
            ),
            'contrast_4_lg2BaseMean_p27null_12wk_vs_p27null_PND8' => array(
                'name' => 'lg2BaseMean p27null 12wk vs p27null PND8'
            ),
            'contrast_L_lg2BaseMean_LRT_WT_vs_MT' => array(
                'name' => 'lg2BaseMean LRT WT vs MT'
            ),
            'contrast_L_lg2BaseMean_LRT_12wt_vs_PND8' => array(
                'name' => 'lg2BaseMean LRT 12wt vs PND8'
            )
        )
    )
//End scatterplot
);
