<?php

return array(
    'lab' => array(
        'name' => 'Tate DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'jdl_data',
    'data_db' => array(
            'cat_table_name' => 'p182_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'p182_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_A_E4_1_TPM' => array(
            'color' => '#FFFFE5',
            'name' => 'A E4 1 TPM'
        ),
        'norm_counts_A_E4_2_TPM' => array(
            'color' => '#FFFFE5',
            'name' => 'A E4 2 TPM'
        ),
        'norm_counts_A_E4_3_TPM' => array(
            'color' => '#FFFFE5',
            'name' => 'A E4 3 TPM'
        ),
        'norm_counts_A_H10_1_TPM' => array(
            'color' => '#FECE65',
            'name' => 'A H10 1 TPM'
        ),
        'norm_counts_A_H10_2_TPM' => array(
            'color' => '#FECE65',
            'name' => 'A H10 2 TPM'
        ),
        'norm_counts_A_H10_3_TPM' => array(
            'color' => '#FECE65',
            'name' => 'A H10 3 TPM'
        ),
        'norm_counts_A_WT_1_TPM' => array(
            'color' => '#E1640E',
            'name' => 'A WT 1 TPM'
        ),
        'norm_counts_A_WT_2_TPM' => array(
            'color' => '#E1640E',
            'name' => 'A WT 2 TPM'
        ),
        'norm_counts_A_WT_3_TPM' => array(
            'color' => '#E1640E',
            'name' => 'A WT 3 TPM'
        ),
        'norm_counts_A_WTCtrl_1_TPM' => array(
            'color' => '#662506',
            'name' => 'A WTCtrl 1 TPM'
        ),
        'norm_counts_A_WTCtrl_2_TPM' => array(
            'color' => '#662506',
            'name' => 'A WTCtrl 2 TPM'
        ),
        'norm_counts_A_WTCtrl_3_TPM' => array(
            'color' => '#662506',
            'name' => 'A WTCtrl 3 TPM'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_A_E4_1_TPM','lg2_avg_A_E4_2_TPM','lg2_avg_A_E4_3_TPM','lg2_avg_A_H10_2_TPM','lg2_avg_A_H10_3_TPM','lg2_avg_A_H10_1_TPM','lg2_avg_A_WTCtrl_2_TPM','lg2_avg_A_WTCtrl_1_TPM','lg2_avg_A_WTCtrl_3_TPM','lg2_avg_A_WT_1_TPM','lg2_avg_A_WT_2_TPM','lg2_avg_A_WT_3_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_KOE4H10_vs_WTboth' => array(
            'name' => 'logFC KOE4H10 vs WTboth',
            'slider_min' => -7,
            'slider_max' => 4,
            'default_low' => -7,
            'default_high' => 4
        ),
        'contrast_1_padj_KOE4H10_vs_WTboth' => array(
            'name' => 'padj KOE4H10 vs WTboth',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_KOE4H10_vs_WT' => array(
            'name' => 'logFC KOE4H10 vs WT',
            'slider_min' => -7,
            'slider_max' => 4,
            'default_low' => -7,
            'default_high' => 4
        ),
        'contrast_2_padj_KOE4H10_vs_WT' => array(
            'name' => 'padj KOE4H10 vs WT',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_KOE4H10_vs_WTCtrl' => array(
            'name' => 'logFC KOE4H10 vs WTCtrl',
            'slider_min' => -8,
            'slider_max' => 5,
            'default_low' => -8,
            'default_high' => 5
        ),
        'contrast_3_padj_KOE4H10_vs_WTCtrl' => array(
            'name' => 'padj KOE4H10 vs WTCtrl',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_logFC_WtCtrl_vs_WT' => array(
            'name' => 'logFC WtCtrl vs WT',
            'slider_min' => -6,
            'slider_max' => 4,
            'default_low' => -6,
            'default_high' => 4
        ),
        'contrast_4_padj_WtCtrl_vs_WT' => array(
            'name' => 'padj WtCtrl vs WT',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_5_logFC_KoE4_vs_KoH10' => array(
            'name' => 'logFC KoE4 vs KoH10',
            'slider_min' => -7,
            'slider_max' => 6,
            'default_low' => -7,
            'default_high' => 6
        ),
        'contrast_5_padj_KoE4_vs_KoH10' => array(
            'name' => 'padj KoE4 vs KoH10',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'p182_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_KOE4H10_vs_WTboth',
        'default-y' => 'contrast_1_lg10p_KOE4H10_vs_WTboth',
        'selection' => array(
            'contrast_1_logFC_KOE4H10_vs_WTboth' => array(
                'name' => 'logFC KOE4H10 vs WTboth'
            ),
            'contrast_2_logFC_KOE4H10_vs_WT' => array(
                'name' => 'logFC KOE4H10 vs WT'
            ),
            'contrast_3_logFC_KOE4H10_vs_WTCtrl' => array(
                'name' => 'logFC KOE4H10 vs WTCtrl'
            ),
            'contrast_4_logFC_WtCtrl_vs_WT' => array(
                'name' => 'logFC WtCtrl vs WT'
            ),
            'contrast_5_logFC_KoE4_vs_KoH10' => array(
                'name' => 'logFC KoE4 vs KoH10'
            ),
            'contrast_1_lg10p_KOE4H10_vs_WTboth' => array(
                'name' => 'lg10p KOE4H10 vs WTboth'
            ),
            'contrast_2_lg10p_KOE4H10_vs_WT' => array(
                'name' => 'lg10p KOE4H10 vs WT'
            ),
            'contrast_3_lg10p_KOE4H10_vs_WTCtrl' => array(
                'name' => 'lg10p KOE4H10 vs WTCtrl'
            ),
            'contrast_4_lg10p_WtCtrl_vs_WT' => array(
                'name' => 'lg10p WtCtrl vs WT'
            ),
            'contrast_5_lg10p_KoE4_vs_KoH10' => array(
                'name' => 'lg10p KoE4 vs KoH10'
            )
        )
    )
//End scatterplot
);
