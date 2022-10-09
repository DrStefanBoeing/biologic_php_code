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
            'cat_table_name' => 'sll304_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'sll304_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Card14E138A_Colon_1_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Card14E138A Colon 1 TPM'
        ),
        'norm_counts_Card14E138A_Colon_2_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Card14E138A Colon 2 TPM'
        ),
        'norm_counts_Card14E138A_Colon_3_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Card14E138A Colon 3 TPM'
        ),
        'norm_counts_Card14E138A_Colon_4_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Card14E138A Colon 4 TPM'
        ),
        'norm_counts_Card14E138A_Colon_5_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Card14E138A Colon 5 TPM'
        ),
        'norm_counts_Card14E138A_Colon_6_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Card14E138A Colon 6 TPM'
        ),
        'norm_counts_Card14E138A_Ear_1_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'Card14E138A Ear 1 TPM'
        ),
        'norm_counts_Card14E138A_Ear_2_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'Card14E138A Ear 2 TPM'
        ),
        'norm_counts_Card14E138A_Ear_3_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'Card14E138A Ear 3 TPM'
        ),
        'norm_counts_Card14E138A_Ear_4_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'Card14E138A Ear 4 TPM'
        ),
        'norm_counts_Card14E138A_Ear_5_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'Card14E138A Ear 5 TPM'
        ),
        'norm_counts_Card14E138A_Ear_6_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'Card14E138A Ear 6 TPM'
        ),
        'norm_counts_WT_Colon_1_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'WT Colon 1 TPM'
        ),
        'norm_counts_WT_Colon_2_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'WT Colon 2 TPM'
        ),
        'norm_counts_WT_Colon_3_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'WT Colon 3 TPM'
        ),
        'norm_counts_WT_Colon_4_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'WT Colon 4 TPM'
        ),
        'norm_counts_WT_Colon_5_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'WT Colon 5 TPM'
        ),
        'norm_counts_WT_Colon_6_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'WT Colon 6 TPM'
        ),
        'norm_counts_WT_Ear_1_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'WT Ear 1 TPM'
        ),
        'norm_counts_WT_Ear_2_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'WT Ear 2 TPM'
        ),
        'norm_counts_WT_Ear_3_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'WT Ear 3 TPM'
        ),
        'norm_counts_WT_Ear_4_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'WT Ear 4 TPM'
        ),
        'norm_counts_WT_Ear_5_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'WT Ear 5 TPM'
        ),
        'norm_counts_WT_Ear_6_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'WT Ear 6 TPM'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Card14E138A_Colon_1_TPM','lg2_avg_Card14E138A_Colon_2_TPM','lg2_avg_Card14E138A_Colon_3_TPM','lg2_avg_Card14E138A_Colon_4_TPM','lg2_avg_Card14E138A_Colon_5_TPM','lg2_avg_Card14E138A_Colon_6_TPM','lg2_avg_Card14E138A_Ear_1_TPM','lg2_avg_Card14E138A_Ear_2_TPM','lg2_avg_Card14E138A_Ear_3_TPM','lg2_avg_Card14E138A_Ear_4_TPM','lg2_avg_Card14E138A_Ear_5_TPM','lg2_avg_Card14E138A_Ear_6_TPM','lg2_avg_WT_Colon_1_TPM','lg2_avg_WT_Colon_2_TPM','lg2_avg_WT_Colon_3_TPM','lg2_avg_WT_Colon_4_TPM','lg2_avg_WT_Colon_5_TPM','lg2_avg_WT_Colon_6_TPM','lg2_avg_WT_Ear_1_TPM','lg2_avg_WT_Ear_2_TPM','lg2_avg_WT_Ear_3_TPM','lg2_avg_WT_Ear_4_TPM','lg2_avg_WT_Ear_5_TPM','lg2_avg_WT_Ear_6_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_Card14E138A_Ear_vs_WT_Ear' => array(
            'name' => 'logFC Card14E138A Ear vs WT Ear',
            'slider_min' => -7,
            'slider_max' => 10,
            'default_low' => -7,
            'default_high' => 10
        ),
        'contrast_1_padj_Card14E138A_Ear_vs_WT_Ear' => array(
            'name' => 'padj Card14E138A Ear vs WT Ear',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_Card14E138A_Colon_vs_WT_Colon' => array(
            'name' => 'logFC Card14E138A Colon vs WT Colon',
            'slider_min' => -7,
            'slider_max' => 9,
            'default_low' => -7,
            'default_high' => 9
        ),
        'contrast_2_padj_Card14E138A_Colon_vs_WT_Colon' => array(
            'name' => 'padj Card14E138A Colon vs WT Colon',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_Card14E138A_Colon_vs_Card14E138A_Ear' => array(
            'name' => 'logFC Card14E138A Colon vs Card14E138A Ear',
            'slider_min' => -12,
            'slider_max' => 10,
            'default_low' => -12,
            'default_high' => 10
        ),
        'contrast_3_padj_Card14E138A_Colon_vs_Card14E138A_Ear' => array(
            'name' => 'padj Card14E138A Colon vs Card14E138A Ear',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_logFC_WT_Colon_vs_WT_Ear' => array(
            'name' => 'logFC WT Colon vs WT Ear',
            'slider_min' => -10,
            'slider_max' => 11,
            'default_low' => -10,
            'default_high' => 11
        ),
        'contrast_4_padj_WT_Colon_vs_WT_Ear' => array(
            'name' => 'padj WT Colon vs WT Ear',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_5_logFC_Card14E138A_vs_WT' => array(
            'name' => 'logFC Card14E138A vs WT',
            'slider_min' => -4,
            'slider_max' => 5,
            'default_low' => -4,
            'default_high' => 5
        ),
        'contrast_5_padj_Card14E138A_vs_WT' => array(
            'name' => 'padj Card14E138A vs WT',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_6_logFC_Colon_vs_Ear' => array(
            'name' => 'logFC Colon vs Ear',
            'slider_min' => -19,
            'slider_max' => 19,
            'default_low' => -19,
            'default_high' => 19
        ),
        'contrast_6_padj_Colon_vs_Ear' => array(
            'name' => 'padj Colon vs Ear',
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
        'add_venn_X_corCoef_Tnf' => array(
            'name' => 'corCoef Tnf',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'sll304_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_Card14E138A_Ear_vs_WT_Ear',
        'default-y' => 'contrast_1_lg10p_Card14E138A_Ear_vs_WT_Ear',
        'selection' => array(
            'contrast_1_logFC_Card14E138A_Ear_vs_WT_Ear' => array(
                'name' => 'logFC Card14E138A Ear vs WT Ear'
            ),
            'contrast_2_logFC_Card14E138A_Colon_vs_WT_Colon' => array(
                'name' => 'logFC Card14E138A Colon vs WT Colon'
            ),
            'contrast_3_logFC_Card14E138A_Colon_vs_Card14E138A_Ear' => array(
                'name' => 'logFC Card14E138A Colon vs Card14E138A Ear'
            ),
            'contrast_4_logFC_WT_Colon_vs_WT_Ear' => array(
                'name' => 'logFC WT Colon vs WT Ear'
            ),
            'contrast_5_logFC_Card14E138A_vs_WT' => array(
                'name' => 'logFC Card14E138A vs WT'
            ),
            'contrast_6_logFC_Colon_vs_Ear' => array(
                'name' => 'logFC Colon vs Ear'
            ),
            'contrast_1_lg10p_Card14E138A_Ear_vs_WT_Ear' => array(
                'name' => 'lg10p Card14E138A Ear vs WT Ear'
            ),
            'contrast_2_lg10p_Card14E138A_Colon_vs_WT_Colon' => array(
                'name' => 'lg10p Card14E138A Colon vs WT Colon'
            ),
            'contrast_3_lg10p_Card14E138A_Colon_vs_Card14E138A_Ear' => array(
                'name' => 'lg10p Card14E138A Colon vs Card14E138A Ear'
            ),
            'contrast_4_lg10p_WT_Colon_vs_WT_Ear' => array(
                'name' => 'lg10p WT Colon vs WT Ear'
            ),
            'contrast_5_lg10p_Card14E138A_vs_WT' => array(
                'name' => 'lg10p Card14E138A vs WT'
            ),
            'contrast_6_lg10p_Colon_vs_Ear' => array(
                'name' => 'lg10p Colon vs Ear'
            ),
            'add_venn_X_corCoef_Card14' => array(
                'name' => 'corCoef Card14'
            ),
            'add_venn_X_corCoef_Tnf' => array(
                'name' => 'corCoef Tnf'
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
            'contrast_1_lg2BaseMean_Card14E138A_Ear_vs_WT_Ear' => array(
                'name' => 'lg2BaseMean Card14E138A Ear vs WT Ear'
            ),
            'contrast_2_lg2BaseMean_Card14E138A_Colon_vs_WT_Colon' => array(
                'name' => 'lg2BaseMean Card14E138A Colon vs WT Colon'
            ),
            'contrast_3_lg2BaseMean_Card14E138A_Colon_vs_Card14E138A_Ear' => array(
                'name' => 'lg2BaseMean Card14E138A Colon vs Card14E138A Ear'
            ),
            'contrast_4_lg2BaseMean_WT_Colon_vs_WT_Ear' => array(
                'name' => 'lg2BaseMean WT Colon vs WT Ear'
            ),
            'contrast_5_lg2BaseMean_Card14E138A_vs_WT' => array(
                'name' => 'lg2BaseMean Card14E138A vs WT'
            ),
            'contrast_6_lg2BaseMean_Colon_vs_Ear' => array(
                'name' => 'lg2BaseMean Colon vs Ear'
            )
        )
    )
//End scatterplot
);
