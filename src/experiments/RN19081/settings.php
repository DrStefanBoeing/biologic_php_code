<?php

return array(
    'lab' => array(
        'name' => 'Behrens DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'chl_data',
    'data_db' => array(
            'cat_table_name' => 'RN19081_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'RN19081_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_BLO337A1' => array(
            'color' => '#000004FF',
            'name' => 'BLO337A1'
        ),
        'norm_counts_BLO337A9' => array(
            'color' => '#B63679FF',
            'name' => 'BLO337A9'
        ),
        'norm_counts_BLO337A2' => array(
            'color' => '#FCFDBFFF',
            'name' => 'BLO337A2'
        ),
        'norm_counts_BLO337A3' => array(
            'color' => '#B63679FF',
            'name' => 'BLO337A3'
        ),
        'norm_counts_BLO337A4' => array(
            'color' => '#000004FF',
            'name' => 'BLO337A4'
        ),
        'norm_counts_BLO337A5' => array(
            'color' => '#FCFDBFFF',
            'name' => 'BLO337A5'
        ),
        'norm_counts_BLO337A6' => array(
            'color' => '#B63679FF',
            'name' => 'BLO337A6'
        ),
        'norm_counts_BLO337A7' => array(
            'color' => '#000004FF',
            'name' => 'BLO337A7'
        ),
        'norm_counts_BLO337A8' => array(
            'color' => '#FCFDBFFF',
            'name' => 'BLO337A8'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_BLO337A9','lg2_avg_BLO337A3','lg2_avg_BLO337A6','lg2_avg_BLO337A8','lg2_avg_BLO337A2','lg2_avg_BLO337A5','lg2_avg_BLO337A4','lg2_avg_BLO337A7','lg2_avg_BLO337A1'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_Activin_Null1_vs_Activin_Null2' => array(
            'name' => 'logFC Activin Null1 vs Activin Null2',
            'slider_min' => -8,
            'slider_max' => 9,
            'default_low' => -8,
            'default_high' => 9
        ),
        'contrast_1_padj_Activin_Null1_vs_Activin_Null2' => array(
            'name' => 'padj Activin Null1 vs Activin Null2',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_Activin_Null1_vs_WT' => array(
            'name' => 'logFC Activin Null1 vs WT',
            'slider_min' => -11,
            'slider_max' => 11,
            'default_low' => -11,
            'default_high' => 11
        ),
        'contrast_2_padj_Activin_Null1_vs_WT' => array(
            'name' => 'padj Activin Null1 vs WT',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_Activin_Null2_vs_WT' => array(
            'name' => 'logFC Activin Null2 vs WT',
            'slider_min' => -10,
            'slider_max' => 11,
            'default_low' => -10,
            'default_high' => 11
        ),
        'contrast_3_padj_Activin_Null2_vs_WT' => array(
            'name' => 'padj Activin Null2 vs WT',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_logFC_Activin_Nullcomb_vs_WT' => array(
            'name' => 'logFC Activin Nullcomb vs WT',
            'slider_min' => -19,
            'slider_max' => 21,
            'default_low' => -19,
            'default_high' => 21
        ),
        'contrast_4_padj_Activin_Nullcomb_vs_WT' => array(
            'name' => 'padj Activin Nullcomb vs WT',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'RN19081_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_Activin_Null1_vs_Activin_Null2',
        'default-y' => 'contrast_1_lg10p_Activin_Null1_vs_Activin_Null2',
        'selection' => array(
            'contrast_1_logFC_Activin_Null1_vs_Activin_Null2' => array(
                'name' => 'logFC Activin Null1 vs Activin Null2'
            ),
            'contrast_2_logFC_Activin_Null1_vs_WT' => array(
                'name' => 'logFC Activin Null1 vs WT'
            ),
            'contrast_3_logFC_Activin_Null2_vs_WT' => array(
                'name' => 'logFC Activin Null2 vs WT'
            ),
            'contrast_4_logFC_Activin_Nullcomb_vs_WT' => array(
                'name' => 'logFC Activin Nullcomb vs WT'
            ),
            'contrast_1_lg10p_Activin_Null1_vs_Activin_Null2' => array(
                'name' => 'lg10p Activin Null1 vs Activin Null2'
            ),
            'contrast_2_lg10p_Activin_Null1_vs_WT' => array(
                'name' => 'lg10p Activin Null1 vs WT'
            ),
            'contrast_3_lg10p_Activin_Null2_vs_WT' => array(
                'name' => 'lg10p Activin Null2 vs WT'
            ),
            'contrast_4_lg10p_Activin_Nullcomb_vs_WT' => array(
                'name' => 'lg10p Activin Nullcomb vs WT'
            ),
            'contrast_1_lg2BaseMean_Activin_Null1_vs_Activin_Null2' => array(
                'name' => 'lg2BaseMean Activin Null1 vs Activin Null2'
            ),
            'contrast_2_lg2BaseMean_Activin_Null1_vs_WT' => array(
                'name' => 'lg2BaseMean Activin Null1 vs WT'
            ),
            'contrast_3_lg2BaseMean_Activin_Null2_vs_WT' => array(
                'name' => 'lg2BaseMean Activin Null2 vs WT'
            ),
            'contrast_4_lg2BaseMean_Activin_Nullcomb_vs_WT' => array(
                'name' => 'lg2BaseMean Activin Nullcomb vs WT'
            )
        )
    )
//End scatterplot
);
