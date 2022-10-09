<?php

return array(
    'lab' => array(
        'name' => 'Tolar DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'ptl_data',
    'data_db' => array(
            'cat_table_name' => 'SC21076plus56SubSubClustering_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'SC21076plus56SubSubClustering_sc_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged Expr',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Avg_log10_Expr_C0_Biotin24h' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C0 Biotin24h'
        ),
        'norm_counts_Avg_log10_Expr_C0_Biotin7d' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C0 Biotin7d'
        ),
        'norm_counts_Avg_log10_Expr_C0_CXCL13ICPE24h' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C0 CXCL13ICPE24h'
        ),
        'norm_counts_Avg_log10_Expr_C0_IsotypeCentral' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C0 IsotypeCentral'
        ),
        'norm_counts_Avg_log10_Expr_C0_IsotypePeripheral' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C0 IsotypePeripheral'
        ),
        'norm_counts_Avg_log10_Expr_C1_Biotin24h' => array(
            'color' => '#00BA38',
            'name' => 'Avg log10 Expr C1 Biotin24h'
        ),
        'norm_counts_Avg_log10_Expr_C1_Biotin7d' => array(
            'color' => '#00BA38',
            'name' => 'Avg log10 Expr C1 Biotin7d'
        ),
        'norm_counts_Avg_log10_Expr_C1_CXCL13ICPE24h' => array(
            'color' => '#00BA38',
            'name' => 'Avg log10 Expr C1 CXCL13ICPE24h'
        ),
        'norm_counts_Avg_log10_Expr_C1_IsotypeCentral' => array(
            'color' => '#00BA38',
            'name' => 'Avg log10 Expr C1 IsotypeCentral'
        ),
        'norm_counts_Avg_log10_Expr_C1_IsotypePeripheral' => array(
            'color' => '#00BA38',
            'name' => 'Avg log10 Expr C1 IsotypePeripheral'
        ),
        'norm_counts_Avg_log10_Expr_C2_Biotin24h' => array(
            'color' => '#619CFF',
            'name' => 'Avg log10 Expr C2 Biotin24h'
        ),
        'norm_counts_Avg_log10_Expr_C2_Biotin7d' => array(
            'color' => '#619CFF',
            'name' => 'Avg log10 Expr C2 Biotin7d'
        ),
        'norm_counts_Avg_log10_Expr_C2_CXCL13ICPE24h' => array(
            'color' => '#619CFF',
            'name' => 'Avg log10 Expr C2 CXCL13ICPE24h'
        ),
        'norm_counts_Avg_log10_Expr_C2_IsotypeCentral' => array(
            'color' => '#619CFF',
            'name' => 'Avg log10 Expr C2 IsotypeCentral'
        ),
        'norm_counts_Avg_log10_Expr_C2_IsotypePeripheral' => array(
            'color' => '#619CFF',
            'name' => 'Avg log10 Expr C2 IsotypePeripheral'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'lg10 Expr for all Samples',
        'sidelabel' => 'lg10 Expr'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Avg_log10_Expr_Sc_C0_Biotin24h','lg2_avg_Avg_log10_Expr_Sc_C0_Biotin7d','lg2_avg_Avg_log10_Expr_Sc_C0_CXCL13ICPE24h','lg2_avg_Avg_log10_Expr_Sc_C0_IsotypeCentral','lg2_avg_Avg_log10_Expr_Sc_C0_IsotypePeripheral','lg2_avg_Avg_log10_Expr_Sc_C1_Biotin24h','lg2_avg_Avg_log10_Expr_Sc_C1_Biotin7d','lg2_avg_Avg_log10_Expr_Sc_C1_CXCL13ICPE24h','lg2_avg_Avg_log10_Expr_Sc_C1_IsotypeCentral','lg2_avg_Avg_log10_Expr_Sc_C1_IsotypePeripheral','lg2_avg_Avg_log10_Expr_Sc_C2_Biotin24h','lg2_avg_Avg_log10_Expr_Sc_C2_Biotin7d','lg2_avg_Avg_log10_Expr_Sc_C2_CXCL13ICPE24h','lg2_avg_Avg_log10_Expr_Sc_C2_IsotypeCentral','lg2_avg_Avg_log10_Expr_Sc_C2_IsotypePeripheral'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
            'name' => 'logFC Expressed in N Percent Cells',
            'slider_min' => 0,
            'slider_max' => 100,
            'default_low' => 0,
            'default_high' => 100
        ),
        'contrast_1_logFC_DGE_C0_Biotin_vs_C1_Biotin' => array(
            'name' => 'logFC DGE C0 Biotin vs C1 Biotin',
            'slider_min' => -6,
            'slider_max' => 8,
            'default_low' => -6,
            'default_high' => 8
        ),
        'contrast_2_logFC_DGE_C0_CXCL13ICPE24h_vs_C1_CXCL13ICPE24h' => array(
            'name' => 'logFC DGE C0 CXCL13ICPE24h vs C1 CXCL13ICPE24h',
            'slider_min' => -6,
            'slider_max' => 11,
            'default_low' => -6,
            'default_high' => 11
        ),
        'contrast_3_logFC_DGE_C0_vs_C1_in_IsotypeCentral' => array(
            'name' => 'logFC DGE C0 vs C1 in IsotypeCentral',
            'slider_min' => -4,
            'slider_max' => 8,
            'default_low' => -4,
            'default_high' => 8
        ),
        'contrast_4_logFC_DGE_C0_vs_C1_in_Isotype_Peripheral' => array(
            'name' => 'logFC DGE C0 vs C1 in Isotype Peripheral',
            'slider_min' => -6,
            'slider_max' => 10,
            'default_low' => -6,
            'default_high' => 10
        ),
        'contrast_5_logFC_DGE_C0_Biotin_vs_C0_CXCL13ICPE24h' => array(
            'name' => 'logFC DGE C0 Biotin vs C0 CXCL13ICPE24h',
            'slider_min' => -7,
            'slider_max' => 5,
            'default_low' => -7,
            'default_high' => 5
        ),
        'contrast_6_logFC_DGE_C1_Biotin_vs_C1_CXCL13ICPE24h' => array(
            'name' => 'logFC DGE C1 Biotin vs C1 CXCL13ICPE24h',
            'slider_min' => -7,
            'slider_max' => 4,
            'default_low' => -7,
            'default_high' => 4
        ),
        'add_counts_C0_Residuals' => array(
            'name' => 'C0 Residuals',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_counts_C1_Residuals' => array(
            'name' => 'C1 Residuals',
            'slider_min' => -5,
            'slider_max' => 1,
            'default_low' => -5,
            'default_high' => 1
        ),
        'add_counts_C2_Residuals' => array(
            'name' => 'C2 Residuals',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'SC21076plus56SubSubClustering_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'add_counts_Avg_log10_Expr_all',
        'default-y' => 'norm_counts_Avg_log10_Expr_C0_Biotin24h',
        'selection' => array(
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg log10 Expr all'
            ),
            'norm_counts_Avg_log10_Expr_C0_Biotin24h' => array(
                'name' => 's Avg log10 Expr C0 Biotin24h'
            ),
            'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
                'name' => 'logFC Expressed in N Percent Cells'
            ),
            'contrast_1_logFC_DGE_C0_Biotin_vs_C1_Biotin' => array(
                'name' => 'logFC DGE C0 Biotin vs C1 Biotin'
            ),
            'contrast_2_logFC_DGE_C0_CXCL13ICPE24h_vs_C1_CXCL13ICPE24h' => array(
                'name' => 'logFC DGE C0 CXCL13ICPE24h vs C1 CXCL13ICPE24h'
            ),
            'contrast_3_logFC_DGE_C0_vs_C1_in_IsotypeCentral' => array(
                'name' => 'logFC DGE C0 vs C1 in IsotypeCentral'
            ),
            'contrast_4_logFC_DGE_C0_vs_C1_in_Isotype_Peripheral' => array(
                'name' => 'logFC DGE C0 vs C1 in Isotype Peripheral'
            ),
            'contrast_5_logFC_DGE_C0_Biotin_vs_C0_CXCL13ICPE24h' => array(
                'name' => 'logFC DGE C0 Biotin vs C0 CXCL13ICPE24h'
            ),
            'contrast_6_logFC_DGE_C1_Biotin_vs_C1_CXCL13ICPE24h' => array(
                'name' => 'logFC DGE C1 Biotin vs C1 CXCL13ICPE24h'
            ),
            'contrast_1_lg10p_DGE_C0_Biotin_vs_C1_Biotin' => array(
                'name' => 'lg10p DGE C0 Biotin vs C1 Biotin'
            ),
            'contrast_2_lg10p_DGE_C0_CXCL13ICPE24h_vs_C1_CXCL13ICPE24h' => array(
                'name' => 'lg10p DGE C0 CXCL13ICPE24h vs C1 CXCL13ICPE24h'
            ),
            'contrast_3_lg10p_DGE_C0_vs_C1_in_IsotypeCentral' => array(
                'name' => 'lg10p DGE C0 vs C1 in IsotypeCentral'
            ),
            'contrast_4_lg10p_DGE_C0_vs_C1_in_Isotype_Peripheral' => array(
                'name' => 'lg10p DGE C0 vs C1 in Isotype Peripheral'
            ),
            'contrast_5_lg10p_DGE_C0_Biotin_vs_C0_CXCL13ICPE24h' => array(
                'name' => 'lg10p DGE C0 Biotin vs C0 CXCL13ICPE24h'
            ),
            'contrast_6_lg10p_DGE_C1_Biotin_vs_C1_CXCL13ICPE24h' => array(
                'name' => 'lg10p DGE C1 Biotin vs C1 CXCL13ICPE24h'
            ),
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg log10 Expr all'
            ),
            'add_counts_Avg_log10_Expr_Biotin24h' => array(
                'name' => 'Avg log10 Expr Biotin24h'
            ),
            'add_counts_Avg_log10_Expr_Biotin7d' => array(
                'name' => 'Avg log10 Expr Biotin7d'
            ),
            'add_counts_Avg_log10_Expr_C0' => array(
                'name' => 'Avg log10 Expr C0'
            ),
            'add_counts_Avg_log10_Expr_C1' => array(
                'name' => 'Avg log10 Expr C1'
            ),
            'add_counts_Avg_log10_Expr_C2' => array(
                'name' => 'Avg log10 Expr C2'
            ),
            'add_counts_Avg_log10_Expr_CXCL13ICPE24h' => array(
                'name' => 'Avg log10 Expr CXCL13ICPE24h'
            ),
            'add_counts_Avg_log10_Expr_IsotypeCentral' => array(
                'name' => 'Avg log10 Expr IsotypeCentral'
            ),
            'add_counts_Avg_log10_Expr_IsotypePeripheral' => array(
                'name' => 'Avg log10 Expr IsotypePeripheral'
            ),
            'norm_counts_Avg_log10_Expr_C0_Biotin24h' => array(
                'name' => 's Avg log10 Expr C0 Biotin24h'
            ),
            'norm_counts_Avg_log10_Expr_C0_Biotin7d' => array(
                'name' => 's Avg log10 Expr C0 Biotin7d'
            ),
            'norm_counts_Avg_log10_Expr_C0_CXCL13ICPE24h' => array(
                'name' => 's Avg log10 Expr C0 CXCL13ICPE24h'
            ),
            'norm_counts_Avg_log10_Expr_C0_IsotypeCentral' => array(
                'name' => 's Avg log10 Expr C0 IsotypeCentral'
            ),
            'norm_counts_Avg_log10_Expr_C0_IsotypePeripheral' => array(
                'name' => 's Avg log10 Expr C0 IsotypePeripheral'
            ),
            'norm_counts_Avg_log10_Expr_C1_Biotin24h' => array(
                'name' => 's Avg log10 Expr C1 Biotin24h'
            ),
            'norm_counts_Avg_log10_Expr_C1_Biotin7d' => array(
                'name' => 's Avg log10 Expr C1 Biotin7d'
            ),
            'norm_counts_Avg_log10_Expr_C1_CXCL13ICPE24h' => array(
                'name' => 's Avg log10 Expr C1 CXCL13ICPE24h'
            ),
            'norm_counts_Avg_log10_Expr_C1_IsotypeCentral' => array(
                'name' => 's Avg log10 Expr C1 IsotypeCentral'
            ),
            'norm_counts_Avg_log10_Expr_C1_IsotypePeripheral' => array(
                'name' => 's Avg log10 Expr C1 IsotypePeripheral'
            ),
            'norm_counts_Avg_log10_Expr_C2_Biotin24h' => array(
                'name' => 's Avg log10 Expr C2 Biotin24h'
            ),
            'norm_counts_Avg_log10_Expr_C2_Biotin7d' => array(
                'name' => 's Avg log10 Expr C2 Biotin7d'
            ),
            'norm_counts_Avg_log10_Expr_C2_CXCL13ICPE24h' => array(
                'name' => 's Avg log10 Expr C2 CXCL13ICPE24h'
            ),
            'norm_counts_Avg_log10_Expr_C2_IsotypeCentral' => array(
                'name' => 's Avg log10 Expr C2 IsotypeCentral'
            ),
            'norm_counts_Avg_log10_Expr_C2_IsotypePeripheral' => array(
                'name' => 's Avg log10 Expr C2 IsotypePeripheral'
            ),
            'add_counts_C0_Residuals' => array(
                'name' => 'C0 Residuals'
            ),
            'add_counts_C1_Residuals' => array(
                'name' => 'C1 Residuals'
            ),
            'add_counts_C2_Residuals' => array(
                'name' => 'C2 Residuals'
            )
        )
    )
//End scatterplot
);
