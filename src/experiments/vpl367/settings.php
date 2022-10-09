<?php

return array(
    'public_access' => TRUE,
    'lab' => array(
       'name' => 'Pachnis DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'vpl_data',
    'data_db' => array(
            'cat_table_name' => 'vpl367_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'vpl367_rna_seq_table',
    'primary_gene_symbol' => 'dr_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_PE_neg_1_TPM' => array(
            'color' => '#247BA0',
            'name' => 'PE neg 1 TPM'
        ),
        'norm_counts_PE_neg_2_TPM' => array(
            'color' => '#247BA0',
            'name' => 'PE neg 2 TPM'
        ),
        'norm_counts_PE_neg_3_TPM' => array(
            'color' => '#247BA0',
            'name' => 'PE neg 3 TPM'
        ),
        'norm_counts_PE_neg_4_TPM' => array(
            'color' => '#247BA0',
            'name' => 'PE neg 4 TPM'
        ),
        'norm_counts_PE_neg_5_TPM' => array(
            'color' => '#247BA0',
            'name' => 'PE neg 5 TPM'
        ),
        'norm_counts_PE_SOX10_1_TPM' => array(
            'color' => '#FF1654',
            'name' => 'PE SOX10 1 TPM'
        ),
        'norm_counts_PE_SOX10_2_TPM' => array(
            'color' => '#FF1654',
            'name' => 'PE SOX10 2 TPM'
        ),
        'norm_counts_PE_SOX10_3_TPM' => array(
            'color' => '#FF1654',
            'name' => 'PE SOX10 3 TPM'
        ),
        'norm_counts_PE_SOX10_4_TPM' => array(
            'color' => '#FF1654',
            'name' => 'PE SOX10 4 TPM'
        ),
        'norm_counts_PE_SOX10_5_TPM' => array(
            'color' => '#FF1654',
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
        'experiments' => array('lg2_avg_PE_neg_1_TPM','lg2_avg_PE_neg_2_TPM','lg2_avg_PE_neg_3_TPM','lg2_avg_PE_neg_4_TPM','lg2_avg_PE_neg_5_TPM','lg2_avg_PE_SOX10_1_TPM','lg2_avg_PE_SOX10_2_TPM','lg2_avg_PE_SOX10_3_TPM','lg2_avg_PE_SOX10_4_TPM','lg2_avg_PE_SOX10_5_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_PE_SOX10_vs_PE_neg' => array(
            'name' => 'logFC PE SOX10 vs PE neg',
            'slider_min' => -8,
            'slider_max' => 8,
            'default_low' => -8,
            'default_high' => 8
        ),
        'contrast_1_padj_PE_SOX10_vs_PE_neg' => array(
            'name' => 'padj PE SOX10 vs PE neg',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_A_logFC_singleCell_Glia_vs_Neuron' => array(
            'name' => 'logFC singleCell Glia vs Neuron',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'contrast_A_padj_singleCell_Glia_vs_Neuron' => array(
            'name' => 'padj singleCell Glia vs Neuron',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_ret' => array(
            'name' => 'corCoef ret',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_sox10' => array(
            'name' => 'corCoef sox10',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'vpl367_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_PE_SOX10_vs_PE_neg',
        'default-y' => 'contrast_1_lg10p_PE_SOX10_vs_PE_neg',
        'selection' => array(
            'contrast_1_logFC_PE_SOX10_vs_PE_neg' => array(
                'name' => 'logFC PE SOX10 vs PE neg'
            ),
            'contrast_A_logFC_singleCell_Glia_vs_Neuron' => array(
                'name' => 'logFC singleCell Glia vs Neuron'
            ),
            'contrast_1_lg10p_PE_SOX10_vs_PE_neg' => array(
                'name' => 'lg10p PE SOX10 vs PE neg'
            ),
            'contrast_L_lg10p_LRT_CellType' => array(
                'name' => 'lg10p LRT CellType'
            ),
            'contrast_A_lg10p_singleCell_Glia_vs_Neuron' => array(
                'name' => 'lg10p singleCell Glia vs Neuron'
            ),
            'add_venn_X_corCoef_ret' => array(
                'name' => 'corCoef ret'
            ),
            'add_venn_X_corCoef_sox10' => array(
                'name' => 'corCoef sox10'
            )
        )
    )
//End scatterplot
);
