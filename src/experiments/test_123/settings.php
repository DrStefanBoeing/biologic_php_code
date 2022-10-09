<?php

return array(
    'lab' => array(
        'name' => 'Article DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'test_data',
    'data_db' => array(
            'cat_table_name' => 'test_123_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'test_123_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_A_WT_2044' => array(
            'color' => '#F8766D',
            'name' => 'A WT 2044'
        ),
        'norm_counts_A_WT_2048' => array(
            'color' => '#F8766D',
            'name' => 'A WT 2048'
        ),
        'norm_counts_A_WT_2049' => array(
            'color' => '#F8766D',
            'name' => 'A WT 2049'
        ),
        'norm_counts_A_WT_2061' => array(
            'color' => '#F8766D',
            'name' => 'A WT 2061'
        ),
        'norm_counts_A_WT_2063' => array(
            'color' => '#F8766D',
            'name' => 'A WT 2063'
        ),
        'norm_counts_A_Zfp516_2042' => array(
            'color' => '#00BFC4',
            'name' => 'A Zfp516 2042'
        ),
        'norm_counts_A_Zfp516_2043' => array(
            'color' => '#00BFC4',
            'name' => 'A Zfp516 2043'
        ),
        'norm_counts_A_Zfp516_2045' => array(
            'color' => '#00BFC4',
            'name' => 'A Zfp516 2045'
        ),
        'norm_counts_A_Zfp516_2066' => array(
            'color' => '#00BFC4',
            'name' => 'A Zfp516 2066'
        ),
        'norm_counts_A_Zfp516_2067' => array(
            'color' => '#00BFC4',
            'name' => 'A Zfp516 2067'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_A_WT_2048_TPM','lg2_avg_A_WT_2063_TPM','lg2_avg_A_WT_2049_TPM','lg2_avg_A_WT_2044_TPM','lg2_avg_A_Zfp516_2043_TPM','lg2_avg_A_Zfp516_2042_TPM','lg2_avg_A_Zfp516_2045_TPM','lg2_avg_A_Zfp516_2067_TPM','lg2_avg_A_Zfp516_2066_TPM','lg2_avg_A_WT_2061_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_A_Conditon_vs_B_Condition' => array(
            'name' => 'logFC A Conditon vs B Condition',
            'slider_min' => -1,
            'slider_max' => 3,
            'default_low' => -1,
            'default_high' => 3
        ),
        'contrast_1_padj_A_Conditon_vs_B_Condition' => array(
            'name' => 'padj A Conditon vs B Condition',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'test_123_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_A_Conditon_vs_B_Condition',
        'default-y' => 'contrast_1_lg10p_A_Conditon_vs_B_Condition',
        'selection' => array(
            'contrast_1_logFC_A_Conditon_vs_B_Condition' => array(
                'name' => 'logFC A Conditon vs B Condition'
            ),
            'contrast_1_lg10p_A_Conditon_vs_B_Condition' => array(
                'name' => 'lg10p A Conditon vs B Condition'
            ),
            'contrast_1_lg2BaseMean_A_Conditon_vs_B_Condition' => array(
                'name' => 'lg2BaseMean A Conditon vs B Condition'
            )
        )
    )
//End scatterplot
);