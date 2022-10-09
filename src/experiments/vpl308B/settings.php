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
            'cat_table_name' => 'vpl308B_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'vpl308B_rna_seq_table',
    'primary_gene_symbol' => 'dr_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_PE_neg_1' => array(
            'color' => '#F8766D',
            'name' => 'PE neg 1'
        ),
        'norm_counts_PE_neg_5' => array(
            'color' => '#F8766D',
            'name' => 'PE neg 5'
        ),
        'norm_counts_PE_SOX10_4' => array(
            'color' => '#F8766D',
            'name' => 'PE SOX10 4'
        ),
        'norm_counts_SE_neg_3' => array(
            'color' => '#F8766D',
            'name' => 'SE neg 3'
        ),
        'norm_counts_SE_SOX10_2' => array(
            'color' => '#F8766D',
            'name' => 'SE SOX10 2'
        ),
        'norm_counts_PE_neg_2' => array(
            'color' => '#7CAE00',
            'name' => 'PE neg 2'
        ),
        'norm_counts_PE_SOX10_1' => array(
            'color' => '#7CAE00',
            'name' => 'PE SOX10 1'
        ),
        'norm_counts_PE_SOX10_5' => array(
            'color' => '#7CAE00',
            'name' => 'PE SOX10 5'
        ),
        'norm_counts_SE_neg_4' => array(
            'color' => '#7CAE00',
            'name' => 'SE neg 4'
        ),
        'norm_counts_SE_SOX10_3' => array(
            'color' => '#7CAE00',
            'name' => 'SE SOX10 3'
        ),
        'norm_counts_PE_neg_3' => array(
            'color' => '#00BFC4',
            'name' => 'PE neg 3'
        ),
        'norm_counts_PE_SOX10_2' => array(
            'color' => '#00BFC4',
            'name' => 'PE SOX10 2'
        ),
        'norm_counts_SE_neg_1' => array(
            'color' => '#00BFC4',
            'name' => 'SE neg 1'
        ),
        'norm_counts_SE_neg_5' => array(
            'color' => '#00BFC4',
            'name' => 'SE neg 5'
        ),
        'norm_counts_SE_SOX10_4' => array(
            'color' => '#00BFC4',
            'name' => 'SE SOX10 4'
        ),
        'norm_counts_PE_neg_4' => array(
            'color' => '#C77CFF',
            'name' => 'PE neg 4'
        ),
        'norm_counts_PE_SOX10_3' => array(
            'color' => '#C77CFF',
            'name' => 'PE SOX10 3'
        ),
        'norm_counts_SE_neg_2' => array(
            'color' => '#C77CFF',
            'name' => 'SE neg 2'
        ),
        'norm_counts_SE_SOX10_1' => array(
            'color' => '#C77CFF',
            'name' => 'SE SOX10 1'
        ),
        'norm_counts_SE_SOX10_5' => array(
            'color' => '#C77CFF',
            'name' => 'SE SOX10 5'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_SE_neg_5','lg2_avg_PE_neg_5','lg2_avg_SE_neg_1','lg2_avg_PE_neg_1','lg2_avg_SE_neg_2','lg2_avg_PE_neg_2','lg2_avg_SE_neg_4','lg2_avg_PE_neg_4','lg2_avg_SE_neg_3','lg2_avg_PE_neg_3','lg2_avg_SE_SOX10_4','lg2_avg_PE_SOX10_4','lg2_avg_SE_SOX10_1','lg2_avg_PE_SOX10_1','lg2_avg_SE_SOX10_3','lg2_avg_PE_SOX10_3','lg2_avg_SE_SOX10_5','lg2_avg_PE_SOX10_5','lg2_avg_SE_SOX10_2','lg2_avg_PE_SOX10_2'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_PE_SOX10_vs_PE_neg' => array(
            'name' => 'logFC PE SOX10 vs PE neg',
            'slider_min' => -5,
            'slider_max' => 5,
            'default_low' => -5,
            'default_high' => 5
        ),
        'contrast_1_padj_PE_SOX10_vs_PE_neg' => array(
            'name' => 'padj PE SOX10 vs PE neg',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_SE_SOX10_vs_SE_neg' => array(
            'name' => 'logFC SE SOX10 vs SE neg',
            'slider_min' => -4,
            'slider_max' => 5,
            'default_low' => -4,
            'default_high' => 5
        ),
        'contrast_2_padj_SE_SOX10_vs_SE_neg' => array(
            'name' => 'padj SE SOX10 vs SE neg',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_PE_SOX10_vs_SE_SOX10' => array(
            'name' => 'logFC PE SOX10 vs SE SOX10',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_3_padj_PE_SOX10_vs_SE_SOX10' => array(
            'name' => 'padj PE SOX10 vs SE SOX10',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_logFC_PE_neg_vs_SE_neg' => array(
            'name' => 'logFC PE neg vs SE neg',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_4_padj_PE_neg_vs_SE_neg' => array(
            'name' => 'padj PE neg vs SE neg',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'vpl308B_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_PE_SOX10_vs_PE_neg',
        'default-y' => 'contrast_1_lg10p_PE_SOX10_vs_PE_neg',
        'selection' => array(
            'contrast_1_logFC_PE_SOX10_vs_PE_neg' => array(
                'name' => 'logFC PE SOX10 vs PE neg'
            ),
            'contrast_2_logFC_SE_SOX10_vs_SE_neg' => array(
                'name' => 'logFC SE SOX10 vs SE neg'
            ),
            'contrast_3_logFC_PE_SOX10_vs_SE_SOX10' => array(
                'name' => 'logFC PE SOX10 vs SE SOX10'
            ),
            'contrast_4_logFC_PE_neg_vs_SE_neg' => array(
                'name' => 'logFC PE neg vs SE neg'
            ),
            'contrast_1_lg10p_PE_SOX10_vs_PE_neg' => array(
                'name' => 'lg10p PE SOX10 vs PE neg'
            ),
            'contrast_2_lg10p_SE_SOX10_vs_SE_neg' => array(
                'name' => 'lg10p SE SOX10 vs SE neg'
            ),
            'contrast_3_lg10p_PE_SOX10_vs_SE_SOX10' => array(
                'name' => 'lg10p PE SOX10 vs SE SOX10'
            ),
            'contrast_4_lg10p_PE_neg_vs_SE_neg' => array(
                'name' => 'lg10p PE neg vs SE neg'
            ),
            'contrast_1_lg2BaseMean_PE_SOX10_vs_PE_neg' => array(
                'name' => 'lg2BaseMean PE SOX10 vs PE neg'
            ),
            'contrast_2_lg2BaseMean_SE_SOX10_vs_SE_neg' => array(
                'name' => 'lg2BaseMean SE SOX10 vs SE neg'
            ),
            'contrast_3_lg2BaseMean_PE_SOX10_vs_SE_SOX10' => array(
                'name' => 'lg2BaseMean PE SOX10 vs SE SOX10'
            ),
            'contrast_4_lg2BaseMean_PE_neg_vs_SE_neg' => array(
                'name' => 'lg2BaseMean PE neg vs SE neg'
            )
        )
    )
//End scatterplot
);
