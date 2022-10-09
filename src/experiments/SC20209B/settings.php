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
            'cat_table_name' => 'SC20209B_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'SC20209B_sc_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged Expr',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Avg_log10_Expr_B_cells_1_Biotin24h' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr B cells 1 Biotin24h'
        ),
        'norm_counts_Avg_log10_Expr_B_cells_1_Biotin7d' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr B cells 1 Biotin7d'
        ),
        'norm_counts_Avg_log10_Expr_B_cells_1_CXCL13ICPE24h' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr B cells 1 CXCL13ICPE24h'
        ),
        'norm_counts_Avg_log10_Expr_B_cells_2_Biotin24h' => array(
            'color' => '#E9842C',
            'name' => 'Avg log10 Expr B cells 2 Biotin24h'
        ),
        'norm_counts_Avg_log10_Expr_B_cells_2_Biotin7d' => array(
            'color' => '#E9842C',
            'name' => 'Avg log10 Expr B cells 2 Biotin7d'
        ),
        'norm_counts_Avg_log10_Expr_B_cells_2_CXCL13ICPE24h' => array(
            'color' => '#E9842C',
            'name' => 'Avg log10 Expr B cells 2 CXCL13ICPE24h'
        ),
        'norm_counts_Avg_log10_Expr_B_cells_3_Biotin24h' => array(
            'color' => '#D69100',
            'name' => 'Avg log10 Expr B cells 3 Biotin24h'
        ),
        'norm_counts_Avg_log10_Expr_B_cells_3_Biotin7d' => array(
            'color' => '#D69100',
            'name' => 'Avg log10 Expr B cells 3 Biotin7d'
        ),
        'norm_counts_Avg_log10_Expr_B_cells_3_CXCL13ICPE24h' => array(
            'color' => '#D69100',
            'name' => 'Avg log10 Expr B cells 3 CXCL13ICPE24h'
        ),
        'norm_counts_Avg_log10_Expr_B_cells_4_Biotin24h' => array(
            'color' => '#BC9D00',
            'name' => 'Avg log10 Expr B cells 4 Biotin24h'
        ),
        'norm_counts_Avg_log10_Expr_B_cells_4_Biotin7d' => array(
            'color' => '#BC9D00',
            'name' => 'Avg log10 Expr B cells 4 Biotin7d'
        ),
        'norm_counts_Avg_log10_Expr_B_cells_4_CXCL13ICPE24h' => array(
            'color' => '#BC9D00',
            'name' => 'Avg log10 Expr B cells 4 CXCL13ICPE24h'
        ),
        'norm_counts_Avg_log10_Expr_B_cells_5_Biotin24h' => array(
            'color' => '#9CA700',
            'name' => 'Avg log10 Expr B cells 5 Biotin24h'
        ),
        'norm_counts_Avg_log10_Expr_B_cells_5_Biotin7d' => array(
            'color' => '#9CA700',
            'name' => 'Avg log10 Expr B cells 5 Biotin7d'
        ),
        'norm_counts_Avg_log10_Expr_B_cells_5_CXCL13ICPE24h' => array(
            'color' => '#9CA700',
            'name' => 'Avg log10 Expr B cells 5 CXCL13ICPE24h'
        ),
        'norm_counts_Avg_log10_Expr_B_cells_6_Biotin24h' => array(
            'color' => '#6FB000',
            'name' => 'Avg log10 Expr B cells 6 Biotin24h'
        ),
        'norm_counts_Avg_log10_Expr_B_cells_6_Biotin7d' => array(
            'color' => '#6FB000',
            'name' => 'Avg log10 Expr B cells 6 Biotin7d'
        ),
        'norm_counts_Avg_log10_Expr_B_cells_6_CXCL13ICPE24h' => array(
            'color' => '#6FB000',
            'name' => 'Avg log10 Expr B cells 6 CXCL13ICPE24h'
        ),
        'norm_counts_Avg_log10_Expr_C12_Biotin24h' => array(
            'color' => '#00B813',
            'name' => 'Avg log10 Expr C12 Biotin24h'
        ),
        'norm_counts_Avg_log10_Expr_C12_Biotin7d' => array(
            'color' => '#00B813',
            'name' => 'Avg log10 Expr C12 Biotin7d'
        ),
        'norm_counts_Avg_log10_Expr_C12_CXCL13ICPE24h' => array(
            'color' => '#00B813',
            'name' => 'Avg log10 Expr C12 CXCL13ICPE24h'
        ),
        'norm_counts_Avg_log10_Expr_C15_Biotin24h' => array(
            'color' => '#00BD61',
            'name' => 'Avg log10 Expr C15 Biotin24h'
        ),
        'norm_counts_Avg_log10_Expr_C15_Biotin7d' => array(
            'color' => '#00BD61',
            'name' => 'Avg log10 Expr C15 Biotin7d'
        ),
        'norm_counts_Avg_log10_Expr_C15_CXCL13ICPE24h' => array(
            'color' => '#00BD61',
            'name' => 'Avg log10 Expr C15 CXCL13ICPE24h'
        ),
        'norm_counts_Avg_log10_Expr_C16_Biotin24h' => array(
            'color' => '#00C08E',
            'name' => 'Avg log10 Expr C16 Biotin24h'
        ),
        'norm_counts_Avg_log10_Expr_C16_Biotin7d' => array(
            'color' => '#00C08E',
            'name' => 'Avg log10 Expr C16 Biotin7d'
        ),
        'norm_counts_Avg_log10_Expr_C16_CXCL13ICPE24h' => array(
            'color' => '#00C08E',
            'name' => 'Avg log10 Expr C16 CXCL13ICPE24h'
        ),
        'norm_counts_Avg_log10_Expr_C17_Biotin24h' => array(
            'color' => '#00C0B4',
            'name' => 'Avg log10 Expr C17 Biotin24h'
        ),
        'norm_counts_Avg_log10_Expr_C17_Biotin7d' => array(
            'color' => '#00C0B4',
            'name' => 'Avg log10 Expr C17 Biotin7d'
        ),
        'norm_counts_Avg_log10_Expr_C17_CXCL13ICPE24h' => array(
            'color' => '#00C0B4',
            'name' => 'Avg log10 Expr C17 CXCL13ICPE24h'
        ),
        'norm_counts_Avg_log10_Expr_C18_Biotin24h' => array(
            'color' => '#00BDD4',
            'name' => 'Avg log10 Expr C18 Biotin24h'
        ),
        'norm_counts_Avg_log10_Expr_C18_Biotin7d' => array(
            'color' => '#00BDD4',
            'name' => 'Avg log10 Expr C18 Biotin7d'
        ),
        'norm_counts_Avg_log10_Expr_C18_CXCL13ICPE24h' => array(
            'color' => '#00BDD4',
            'name' => 'Avg log10 Expr C18 CXCL13ICPE24h'
        ),
        'norm_counts_Avg_log10_Expr_C3_Biotin24h' => array(
            'color' => '#00B5EE',
            'name' => 'Avg log10 Expr C3 Biotin24h'
        ),
        'norm_counts_Avg_log10_Expr_C3_Biotin7d' => array(
            'color' => '#00B5EE',
            'name' => 'Avg log10 Expr C3 Biotin7d'
        ),
        'norm_counts_Avg_log10_Expr_C3_CXCL13ICPE24h' => array(
            'color' => '#00B5EE',
            'name' => 'Avg log10 Expr C3 CXCL13ICPE24h'
        ),
        'norm_counts_Avg_log10_Expr_C4_Biotin24h' => array(
            'color' => '#00A7FF',
            'name' => 'Avg log10 Expr C4 Biotin24h'
        ),
        'norm_counts_Avg_log10_Expr_C4_Biotin7d' => array(
            'color' => '#00A7FF',
            'name' => 'Avg log10 Expr C4 Biotin7d'
        ),
        'norm_counts_Avg_log10_Expr_C4_CXCL13ICPE24h' => array(
            'color' => '#00A7FF',
            'name' => 'Avg log10 Expr C4 CXCL13ICPE24h'
        ),
        'norm_counts_Avg_log10_Expr_C7_Biotin24h' => array(
            'color' => '#7F96FF',
            'name' => 'Avg log10 Expr C7 Biotin24h'
        ),
        'norm_counts_Avg_log10_Expr_C7_Biotin7d' => array(
            'color' => '#7F96FF',
            'name' => 'Avg log10 Expr C7 Biotin7d'
        ),
        'norm_counts_Avg_log10_Expr_C7_CXCL13ICPE24h' => array(
            'color' => '#7F96FF',
            'name' => 'Avg log10 Expr C7 CXCL13ICPE24h'
        ),
        'norm_counts_Avg_log10_Expr_DZ_FDCs_Biotin24h' => array(
            'color' => '#BC81FF',
            'name' => 'Avg log10 Expr DZ FDCs Biotin24h'
        ),
        'norm_counts_Avg_log10_Expr_DZ_FDCs_Biotin7d' => array(
            'color' => '#BC81FF',
            'name' => 'Avg log10 Expr DZ FDCs Biotin7d'
        ),
        'norm_counts_Avg_log10_Expr_DZ_FDCs_CXCL13ICPE24h' => array(
            'color' => '#BC81FF',
            'name' => 'Avg log10 Expr DZ FDCs CXCL13ICPE24h'
        ),
        'norm_counts_Avg_log10_Expr_LZ_FDCs_Biotin24h' => array(
            'color' => '#E26EF7',
            'name' => 'Avg log10 Expr LZ FDCs Biotin24h'
        ),
        'norm_counts_Avg_log10_Expr_LZ_FDCs_Biotin7d' => array(
            'color' => '#E26EF7',
            'name' => 'Avg log10 Expr LZ FDCs Biotin7d'
        ),
        'norm_counts_Avg_log10_Expr_LZ_FDCs_CXCL13ICPE24h' => array(
            'color' => '#E26EF7',
            'name' => 'Avg log10 Expr LZ FDCs CXCL13ICPE24h'
        ),
        'norm_counts_Avg_log10_Expr_TBRcs_1_Biotin24h' => array(
            'color' => '#F863DF',
            'name' => 'Avg log10 Expr TBRcs 1 Biotin24h'
        ),
        'norm_counts_Avg_log10_Expr_TBRcs_1_Biotin7d' => array(
            'color' => '#F863DF',
            'name' => 'Avg log10 Expr TBRcs 1 Biotin7d'
        ),
        'norm_counts_Avg_log10_Expr_TBRcs_1_CXCL13ICPE24h' => array(
            'color' => '#F863DF',
            'name' => 'Avg log10 Expr TBRcs 1 CXCL13ICPE24h'
        ),
        'norm_counts_Avg_log10_Expr_TBRcs_2_Biotin24h' => array(
            'color' => '#FF62BF',
            'name' => 'Avg log10 Expr TBRcs 2 Biotin24h'
        ),
        'norm_counts_Avg_log10_Expr_TBRcs_2_Biotin7d' => array(
            'color' => '#FF62BF',
            'name' => 'Avg log10 Expr TBRcs 2 Biotin7d'
        ),
        'norm_counts_Avg_log10_Expr_TBRcs_2_CXCL13ICPE24h' => array(
            'color' => '#FF62BF',
            'name' => 'Avg log10 Expr TBRcs 2 CXCL13ICPE24h'
        ),
        'norm_counts_Avg_log10_Expr_T_cells_Biotin24h' => array(
            'color' => '#FF6A9A',
            'name' => 'Avg log10 Expr T cells Biotin24h'
        ),
        'norm_counts_Avg_log10_Expr_T_cells_Biotin7d' => array(
            'color' => '#FF6A9A',
            'name' => 'Avg log10 Expr T cells Biotin7d'
        ),
        'norm_counts_Avg_log10_Expr_T_cells_CXCL13ICPE24h' => array(
            'color' => '#FF6A9A',
            'name' => 'Avg log10 Expr T cells CXCL13ICPE24h'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'lg10 Expr for all Samples',
        'sidelabel' => 'lg10 Expr'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Avg_log10_Expr_Sc_B_cells_1_Biotin24h','lg2_avg_Avg_log10_Expr_Sc_B_cells_1_Biotin7d','lg2_avg_Avg_log10_Expr_Sc_B_cells_1_CXCL13ICPE24h','lg2_avg_Avg_log10_Expr_Sc_B_cells_2_Biotin24h','lg2_avg_Avg_log10_Expr_Sc_B_cells_2_Biotin7d','lg2_avg_Avg_log10_Expr_Sc_B_cells_2_CXCL13ICPE24h','lg2_avg_Avg_log10_Expr_Sc_B_cells_3_Biotin24h','lg2_avg_Avg_log10_Expr_Sc_B_cells_3_Biotin7d','lg2_avg_Avg_log10_Expr_Sc_B_cells_3_CXCL13ICPE24h','lg2_avg_Avg_log10_Expr_Sc_B_cells_4_Biotin24h','lg2_avg_Avg_log10_Expr_Sc_B_cells_4_Biotin7d','lg2_avg_Avg_log10_Expr_Sc_B_cells_4_CXCL13ICPE24h','lg2_avg_Avg_log10_Expr_Sc_B_cells_5_Biotin24h','lg2_avg_Avg_log10_Expr_Sc_B_cells_5_Biotin7d','lg2_avg_Avg_log10_Expr_Sc_B_cells_5_CXCL13ICPE24h','lg2_avg_Avg_log10_Expr_Sc_B_cells_6_Biotin24h','lg2_avg_Avg_log10_Expr_Sc_B_cells_6_Biotin7d','lg2_avg_Avg_log10_Expr_Sc_B_cells_6_CXCL13ICPE24h','lg2_avg_Avg_log10_Expr_Sc_C12_Biotin24h','lg2_avg_Avg_log10_Expr_Sc_C12_Biotin7d','lg2_avg_Avg_log10_Expr_Sc_C12_CXCL13ICPE24h','lg2_avg_Avg_log10_Expr_Sc_C15_Biotin24h','lg2_avg_Avg_log10_Expr_Sc_C15_Biotin7d','lg2_avg_Avg_log10_Expr_Sc_C15_CXCL13ICPE24h','lg2_avg_Avg_log10_Expr_Sc_C16_Biotin24h','lg2_avg_Avg_log10_Expr_Sc_C16_Biotin7d','lg2_avg_Avg_log10_Expr_Sc_C16_CXCL13ICPE24h','lg2_avg_Avg_log10_Expr_Sc_C17_Biotin24h','lg2_avg_Avg_log10_Expr_Sc_C17_Biotin7d','lg2_avg_Avg_log10_Expr_Sc_C17_CXCL13ICPE24h','lg2_avg_Avg_log10_Expr_Sc_C18_Biotin24h','lg2_avg_Avg_log10_Expr_Sc_C18_Biotin7d','lg2_avg_Avg_log10_Expr_Sc_C18_CXCL13ICPE24h','lg2_avg_Avg_log10_Expr_Sc_C3_Biotin24h','lg2_avg_Avg_log10_Expr_Sc_C3_Biotin7d','lg2_avg_Avg_log10_Expr_Sc_C3_CXCL13ICPE24h','lg2_avg_Avg_log10_Expr_Sc_C4_Biotin24h','lg2_avg_Avg_log10_Expr_Sc_C4_Biotin7d','lg2_avg_Avg_log10_Expr_Sc_C4_CXCL13ICPE24h','lg2_avg_Avg_log10_Expr_Sc_C7_Biotin24h','lg2_avg_Avg_log10_Expr_Sc_C7_Biotin7d','lg2_avg_Avg_log10_Expr_Sc_C7_CXCL13ICPE24h','lg2_avg_Avg_log10_Expr_Sc_DZ_FDCs_Biotin24h','lg2_avg_Avg_log10_Expr_Sc_DZ_FDCs_Biotin7d','lg2_avg_Avg_log10_Expr_Sc_DZ_FDCs_CXCL13ICPE24h','lg2_avg_Avg_log10_Expr_Sc_LZ_FDCs_Biotin24h','lg2_avg_Avg_log10_Expr_Sc_LZ_FDCs_Biotin7d','lg2_avg_Avg_log10_Expr_Sc_LZ_FDCs_CXCL13ICPE24h','lg2_avg_Avg_log10_Expr_Sc_TBRcs_1_Biotin24h','lg2_avg_Avg_log10_Expr_Sc_TBRcs_1_Biotin7d','lg2_avg_Avg_log10_Expr_Sc_TBRcs_1_CXCL13ICPE24h','lg2_avg_Avg_log10_Expr_Sc_TBRcs_2_Biotin24h','lg2_avg_Avg_log10_Expr_Sc_TBRcs_2_Biotin7d','lg2_avg_Avg_log10_Expr_Sc_TBRcs_2_CXCL13ICPE24h','lg2_avg_Avg_log10_Expr_Sc_T_cells_Biotin24h','lg2_avg_Avg_log10_Expr_Sc_T_cells_Biotin7d','lg2_avg_Avg_log10_Expr_Sc_T_cells_CXCL13ICPE24h'),

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
        'contrast_1_logFC_DGE_CXCL13ICPE24h_vs_Biotin24h' => array(
            'name' => 'logFC DGE CXCL13ICPE24h vs Biotin24h',
            'slider_min' => -8,
            'slider_max' => 6,
            'default_low' => -8,
            'default_high' => 6
        ),
        'contrast_2_logFC_DGE_Biotin7d_vs_CXCL13ICPE24h' => array(
            'name' => 'logFC DGE Biotin7d vs CXCL13ICPE24h',
            'slider_min' => -11,
            'slider_max' => 7,
            'default_low' => -11,
            'default_high' => 7
        ),
        'contrast_3_logFC_DGE_DZ_FDCs_vs_LZ_FDCs' => array(
            'name' => 'logFC DGE DZ FDCs vs LZ FDCs',
            'slider_min' => -6,
            'slider_max' => 9,
            'default_low' => -6,
            'default_high' => 9
        ),
        'add_counts_DZ_FDCs_Residuals' => array(
            'name' => 'DZ FDCs Residuals',
            'slider_min' => -2,
            'slider_max' => 3,
            'default_low' => -2,
            'default_high' => 3
        ),
        'add_counts_LZ_FDCs_Residuals' => array(
            'name' => 'LZ FDCs Residuals',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'add_counts_B_cells_1_Residuals' => array(
            'name' => 'B cells 1 Residuals',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'add_counts_B_cells_2_Residuals' => array(
            'name' => 'B cells 2 Residuals',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_counts_B_cells_3_Residuals' => array(
            'name' => 'B cells 3 Residuals',
            'slider_min' => -2,
            'slider_max' => 1,
            'default_low' => -2,
            'default_high' => 1
        ),
        'add_counts_B_cells_4_Residuals' => array(
            'name' => 'B cells 4 Residuals',
            'slider_min' => -2,
            'slider_max' => 4,
            'default_low' => -2,
            'default_high' => 4
        ),
        'add_counts_B_cells_5_Residuals' => array(
            'name' => 'B cells 5 Residuals',
            'slider_min' => -2,
            'slider_max' => 3,
            'default_low' => -2,
            'default_high' => 3
        ),
        'add_counts_B_cells_6_Residuals' => array(
            'name' => 'B cells 6 Residuals',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'add_counts_T_cells_Residuals' => array(
            'name' => 'T cells Residuals',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'add_counts_TBRcs_1_Residuals' => array(
            'name' => 'TBRcs 1 Residuals',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'add_counts_TBRcs_2_Residuals' => array(
            'name' => 'TBRcs 2 Residuals',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'add_counts_C3_Residuals' => array(
            'name' => 'C3 Residuals',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'add_counts_C4_Residuals' => array(
            'name' => 'C4 Residuals',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'add_counts_C7_Residuals' => array(
            'name' => 'C7 Residuals',
            'slider_min' => -3,
            'slider_max' => 1,
            'default_low' => -3,
            'default_high' => 1
        ),
        'add_counts_C12_Residuals' => array(
            'name' => 'C12 Residuals',
            'slider_min' => -2,
            'slider_max' => 4,
            'default_low' => -2,
            'default_high' => 4
        ),
        'add_counts_C15_Residuals' => array(
            'name' => 'C15 Residuals',
            'slider_min' => -2,
            'slider_max' => 3,
            'default_low' => -2,
            'default_high' => 3
        ),
        'add_counts_C16_Residuals' => array(
            'name' => 'C16 Residuals',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'add_counts_C17_Residuals' => array(
            'name' => 'C17 Residuals',
            'slider_min' => -4,
            'slider_max' => 4,
            'default_low' => -4,
            'default_high' => 4
        ),
        'add_counts_C18_Residuals' => array(
            'name' => 'C18 Residuals',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'SC20209B_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'add_counts_Avg_log10_Expr_all',
        'default-y' => 'norm_counts_Avg_log10_Expr_B_cells_1_Biotin24h',
        'selection' => array(
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg log10 Expr all'
            ),
            'norm_counts_Avg_log10_Expr_B_cells_1_Biotin24h' => array(
                'name' => 's Avg log10 Expr B cells 1 Biotin24h'
            ),
            'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
                'name' => 'logFC Expressed in N Percent Cells'
            ),
            'contrast_1_logFC_DGE_CXCL13ICPE24h_vs_Biotin24h' => array(
                'name' => 'logFC DGE CXCL13ICPE24h vs Biotin24h'
            ),
            'contrast_2_logFC_DGE_Biotin7d_vs_CXCL13ICPE24h' => array(
                'name' => 'logFC DGE Biotin7d vs CXCL13ICPE24h'
            ),
            'contrast_3_logFC_DGE_DZ_FDCs_vs_LZ_FDCs' => array(
                'name' => 'logFC DGE DZ FDCs vs LZ FDCs'
            ),
            'contrast_1_lg10p_DGE_CXCL13ICPE24h_vs_Biotin24h' => array(
                'name' => 'lg10p DGE CXCL13ICPE24h vs Biotin24h'
            ),
            'contrast_2_lg10p_DGE_Biotin7d_vs_CXCL13ICPE24h' => array(
                'name' => 'lg10p DGE Biotin7d vs CXCL13ICPE24h'
            ),
            'contrast_3_lg10p_DGE_DZ_FDCs_vs_LZ_FDCs' => array(
                'name' => 'lg10p DGE DZ FDCs vs LZ FDCs'
            ),
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg log10 Expr all'
            ),
            'add_counts_Avg_log10_Expr_B_cells_1' => array(
                'name' => 'Avg log10 Expr B cells 1'
            ),
            'add_counts_Avg_log10_Expr_B_cells_2' => array(
                'name' => 'Avg log10 Expr B cells 2'
            ),
            'add_counts_Avg_log10_Expr_B_cells_3' => array(
                'name' => 'Avg log10 Expr B cells 3'
            ),
            'add_counts_Avg_log10_Expr_B_cells_4' => array(
                'name' => 'Avg log10 Expr B cells 4'
            ),
            'add_counts_Avg_log10_Expr_B_cells_5' => array(
                'name' => 'Avg log10 Expr B cells 5'
            ),
            'add_counts_Avg_log10_Expr_B_cells_6' => array(
                'name' => 'Avg log10 Expr B cells 6'
            ),
            'add_counts_Avg_log10_Expr_Biotin24h' => array(
                'name' => 'Avg log10 Expr Biotin24h'
            ),
            'add_counts_Avg_log10_Expr_Biotin7d' => array(
                'name' => 'Avg log10 Expr Biotin7d'
            ),
            'add_counts_Avg_log10_Expr_C12' => array(
                'name' => 'Avg log10 Expr C12'
            ),
            'add_counts_Avg_log10_Expr_C15' => array(
                'name' => 'Avg log10 Expr C15'
            ),
            'add_counts_Avg_log10_Expr_C16' => array(
                'name' => 'Avg log10 Expr C16'
            ),
            'add_counts_Avg_log10_Expr_C17' => array(
                'name' => 'Avg log10 Expr C17'
            ),
            'add_counts_Avg_log10_Expr_C18' => array(
                'name' => 'Avg log10 Expr C18'
            ),
            'add_counts_Avg_log10_Expr_C3' => array(
                'name' => 'Avg log10 Expr C3'
            ),
            'add_counts_Avg_log10_Expr_C4' => array(
                'name' => 'Avg log10 Expr C4'
            ),
            'add_counts_Avg_log10_Expr_C7' => array(
                'name' => 'Avg log10 Expr C7'
            ),
            'add_counts_Avg_log10_Expr_CXCL13ICPE24h' => array(
                'name' => 'Avg log10 Expr CXCL13ICPE24h'
            ),
            'add_counts_Avg_log10_Expr_DZ_FDCs' => array(
                'name' => 'Avg log10 Expr DZ FDCs'
            ),
            'add_counts_Avg_log10_Expr_LZ_FDCs' => array(
                'name' => 'Avg log10 Expr LZ FDCs'
            ),
            'add_counts_Avg_log10_Expr_TBRcs_1' => array(
                'name' => 'Avg log10 Expr TBRcs 1'
            ),
            'add_counts_Avg_log10_Expr_TBRcs_2' => array(
                'name' => 'Avg log10 Expr TBRcs 2'
            ),
            'add_counts_Avg_log10_Expr_T_cells' => array(
                'name' => 'Avg log10 Expr T cells'
            ),
            'norm_counts_Avg_log10_Expr_B_cells_1_Biotin24h' => array(
                'name' => 's Avg log10 Expr B cells 1 Biotin24h'
            ),
            'norm_counts_Avg_log10_Expr_B_cells_1_Biotin7d' => array(
                'name' => 's Avg log10 Expr B cells 1 Biotin7d'
            ),
            'norm_counts_Avg_log10_Expr_B_cells_1_CXCL13ICPE24h' => array(
                'name' => 's Avg log10 Expr B cells 1 CXCL13ICPE24h'
            ),
            'norm_counts_Avg_log10_Expr_B_cells_2_Biotin24h' => array(
                'name' => 's Avg log10 Expr B cells 2 Biotin24h'
            ),
            'norm_counts_Avg_log10_Expr_B_cells_2_Biotin7d' => array(
                'name' => 's Avg log10 Expr B cells 2 Biotin7d'
            ),
            'norm_counts_Avg_log10_Expr_B_cells_2_CXCL13ICPE24h' => array(
                'name' => 's Avg log10 Expr B cells 2 CXCL13ICPE24h'
            ),
            'norm_counts_Avg_log10_Expr_B_cells_3_Biotin24h' => array(
                'name' => 's Avg log10 Expr B cells 3 Biotin24h'
            ),
            'norm_counts_Avg_log10_Expr_B_cells_3_Biotin7d' => array(
                'name' => 's Avg log10 Expr B cells 3 Biotin7d'
            ),
            'norm_counts_Avg_log10_Expr_B_cells_3_CXCL13ICPE24h' => array(
                'name' => 's Avg log10 Expr B cells 3 CXCL13ICPE24h'
            ),
            'norm_counts_Avg_log10_Expr_B_cells_4_Biotin24h' => array(
                'name' => 's Avg log10 Expr B cells 4 Biotin24h'
            ),
            'norm_counts_Avg_log10_Expr_B_cells_4_Biotin7d' => array(
                'name' => 's Avg log10 Expr B cells 4 Biotin7d'
            ),
            'norm_counts_Avg_log10_Expr_B_cells_4_CXCL13ICPE24h' => array(
                'name' => 's Avg log10 Expr B cells 4 CXCL13ICPE24h'
            ),
            'norm_counts_Avg_log10_Expr_B_cells_5_Biotin24h' => array(
                'name' => 's Avg log10 Expr B cells 5 Biotin24h'
            ),
            'norm_counts_Avg_log10_Expr_B_cells_5_Biotin7d' => array(
                'name' => 's Avg log10 Expr B cells 5 Biotin7d'
            ),
            'norm_counts_Avg_log10_Expr_B_cells_5_CXCL13ICPE24h' => array(
                'name' => 's Avg log10 Expr B cells 5 CXCL13ICPE24h'
            ),
            'norm_counts_Avg_log10_Expr_B_cells_6_Biotin24h' => array(
                'name' => 's Avg log10 Expr B cells 6 Biotin24h'
            ),
            'norm_counts_Avg_log10_Expr_B_cells_6_Biotin7d' => array(
                'name' => 's Avg log10 Expr B cells 6 Biotin7d'
            ),
            'norm_counts_Avg_log10_Expr_B_cells_6_CXCL13ICPE24h' => array(
                'name' => 's Avg log10 Expr B cells 6 CXCL13ICPE24h'
            ),
            'norm_counts_Avg_log10_Expr_C12_Biotin24h' => array(
                'name' => 's Avg log10 Expr C12 Biotin24h'
            ),
            'norm_counts_Avg_log10_Expr_C12_Biotin7d' => array(
                'name' => 's Avg log10 Expr C12 Biotin7d'
            ),
            'norm_counts_Avg_log10_Expr_C12_CXCL13ICPE24h' => array(
                'name' => 's Avg log10 Expr C12 CXCL13ICPE24h'
            ),
            'norm_counts_Avg_log10_Expr_C15_Biotin24h' => array(
                'name' => 's Avg log10 Expr C15 Biotin24h'
            ),
            'norm_counts_Avg_log10_Expr_C15_Biotin7d' => array(
                'name' => 's Avg log10 Expr C15 Biotin7d'
            ),
            'norm_counts_Avg_log10_Expr_C15_CXCL13ICPE24h' => array(
                'name' => 's Avg log10 Expr C15 CXCL13ICPE24h'
            ),
            'norm_counts_Avg_log10_Expr_C16_Biotin24h' => array(
                'name' => 's Avg log10 Expr C16 Biotin24h'
            ),
            'norm_counts_Avg_log10_Expr_C16_Biotin7d' => array(
                'name' => 's Avg log10 Expr C16 Biotin7d'
            ),
            'norm_counts_Avg_log10_Expr_C16_CXCL13ICPE24h' => array(
                'name' => 's Avg log10 Expr C16 CXCL13ICPE24h'
            ),
            'norm_counts_Avg_log10_Expr_C17_Biotin24h' => array(
                'name' => 's Avg log10 Expr C17 Biotin24h'
            ),
            'norm_counts_Avg_log10_Expr_C17_Biotin7d' => array(
                'name' => 's Avg log10 Expr C17 Biotin7d'
            ),
            'norm_counts_Avg_log10_Expr_C17_CXCL13ICPE24h' => array(
                'name' => 's Avg log10 Expr C17 CXCL13ICPE24h'
            ),
            'norm_counts_Avg_log10_Expr_C18_Biotin24h' => array(
                'name' => 's Avg log10 Expr C18 Biotin24h'
            ),
            'norm_counts_Avg_log10_Expr_C18_Biotin7d' => array(
                'name' => 's Avg log10 Expr C18 Biotin7d'
            ),
            'norm_counts_Avg_log10_Expr_C18_CXCL13ICPE24h' => array(
                'name' => 's Avg log10 Expr C18 CXCL13ICPE24h'
            ),
            'norm_counts_Avg_log10_Expr_C3_Biotin24h' => array(
                'name' => 's Avg log10 Expr C3 Biotin24h'
            ),
            'norm_counts_Avg_log10_Expr_C3_Biotin7d' => array(
                'name' => 's Avg log10 Expr C3 Biotin7d'
            ),
            'norm_counts_Avg_log10_Expr_C3_CXCL13ICPE24h' => array(
                'name' => 's Avg log10 Expr C3 CXCL13ICPE24h'
            ),
            'norm_counts_Avg_log10_Expr_C4_Biotin24h' => array(
                'name' => 's Avg log10 Expr C4 Biotin24h'
            ),
            'norm_counts_Avg_log10_Expr_C4_Biotin7d' => array(
                'name' => 's Avg log10 Expr C4 Biotin7d'
            ),
            'norm_counts_Avg_log10_Expr_C4_CXCL13ICPE24h' => array(
                'name' => 's Avg log10 Expr C4 CXCL13ICPE24h'
            ),
            'norm_counts_Avg_log10_Expr_C7_Biotin24h' => array(
                'name' => 's Avg log10 Expr C7 Biotin24h'
            ),
            'norm_counts_Avg_log10_Expr_C7_Biotin7d' => array(
                'name' => 's Avg log10 Expr C7 Biotin7d'
            ),
            'norm_counts_Avg_log10_Expr_C7_CXCL13ICPE24h' => array(
                'name' => 's Avg log10 Expr C7 CXCL13ICPE24h'
            ),
            'norm_counts_Avg_log10_Expr_DZ_FDCs_Biotin24h' => array(
                'name' => 's Avg log10 Expr DZ FDCs Biotin24h'
            ),
            'norm_counts_Avg_log10_Expr_DZ_FDCs_Biotin7d' => array(
                'name' => 's Avg log10 Expr DZ FDCs Biotin7d'
            ),
            'norm_counts_Avg_log10_Expr_DZ_FDCs_CXCL13ICPE24h' => array(
                'name' => 's Avg log10 Expr DZ FDCs CXCL13ICPE24h'
            ),
            'norm_counts_Avg_log10_Expr_LZ_FDCs_Biotin24h' => array(
                'name' => 's Avg log10 Expr LZ FDCs Biotin24h'
            ),
            'norm_counts_Avg_log10_Expr_LZ_FDCs_Biotin7d' => array(
                'name' => 's Avg log10 Expr LZ FDCs Biotin7d'
            ),
            'norm_counts_Avg_log10_Expr_LZ_FDCs_CXCL13ICPE24h' => array(
                'name' => 's Avg log10 Expr LZ FDCs CXCL13ICPE24h'
            ),
            'norm_counts_Avg_log10_Expr_TBRcs_1_Biotin24h' => array(
                'name' => 's Avg log10 Expr TBRcs 1 Biotin24h'
            ),
            'norm_counts_Avg_log10_Expr_TBRcs_1_Biotin7d' => array(
                'name' => 's Avg log10 Expr TBRcs 1 Biotin7d'
            ),
            'norm_counts_Avg_log10_Expr_TBRcs_1_CXCL13ICPE24h' => array(
                'name' => 's Avg log10 Expr TBRcs 1 CXCL13ICPE24h'
            ),
            'norm_counts_Avg_log10_Expr_TBRcs_2_Biotin24h' => array(
                'name' => 's Avg log10 Expr TBRcs 2 Biotin24h'
            ),
            'norm_counts_Avg_log10_Expr_TBRcs_2_Biotin7d' => array(
                'name' => 's Avg log10 Expr TBRcs 2 Biotin7d'
            ),
            'norm_counts_Avg_log10_Expr_TBRcs_2_CXCL13ICPE24h' => array(
                'name' => 's Avg log10 Expr TBRcs 2 CXCL13ICPE24h'
            ),
            'norm_counts_Avg_log10_Expr_T_cells_Biotin24h' => array(
                'name' => 's Avg log10 Expr T cells Biotin24h'
            ),
            'norm_counts_Avg_log10_Expr_T_cells_Biotin7d' => array(
                'name' => 's Avg log10 Expr T cells Biotin7d'
            ),
            'norm_counts_Avg_log10_Expr_T_cells_CXCL13ICPE24h' => array(
                'name' => 's Avg log10 Expr T cells CXCL13ICPE24h'
            ),
            'add_counts_PCA_Dim_10_Loadings' => array(
                'name' => 'PCA Dim 10 Loadings'
            ),
            'add_counts_PCA_Dim_11_Loadings' => array(
                'name' => 'PCA Dim 11 Loadings'
            ),
            'add_counts_PCA_Dim_12_Loadings' => array(
                'name' => 'PCA Dim 12 Loadings'
            ),
            'add_counts_PCA_Dim_13_Loadings' => array(
                'name' => 'PCA Dim 13 Loadings'
            ),
            'add_counts_PCA_Dim_14_Loadings' => array(
                'name' => 'PCA Dim 14 Loadings'
            ),
            'add_counts_PCA_Dim_15_Loadings' => array(
                'name' => 'PCA Dim 15 Loadings'
            ),
            'add_counts_PCA_Dim_16_Loadings' => array(
                'name' => 'PCA Dim 16 Loadings'
            ),
            'add_counts_PCA_Dim_17_Loadings' => array(
                'name' => 'PCA Dim 17 Loadings'
            ),
            'add_counts_PCA_Dim_18_Loadings' => array(
                'name' => 'PCA Dim 18 Loadings'
            ),
            'add_counts_PCA_Dim_19_Loadings' => array(
                'name' => 'PCA Dim 19 Loadings'
            ),
            'add_counts_PCA_Dim_1_Loadings' => array(
                'name' => 'PCA Dim 1 Loadings'
            ),
            'add_counts_PCA_Dim_20_Loadings' => array(
                'name' => 'PCA Dim 20 Loadings'
            ),
            'add_counts_PCA_Dim_2_Loadings' => array(
                'name' => 'PCA Dim 2 Loadings'
            ),
            'add_counts_PCA_Dim_3_Loadings' => array(
                'name' => 'PCA Dim 3 Loadings'
            ),
            'add_counts_PCA_Dim_4_Loadings' => array(
                'name' => 'PCA Dim 4 Loadings'
            ),
            'add_counts_PCA_Dim_5_Loadings' => array(
                'name' => 'PCA Dim 5 Loadings'
            ),
            'add_counts_PCA_Dim_6_Loadings' => array(
                'name' => 'PCA Dim 6 Loadings'
            ),
            'add_counts_PCA_Dim_7_Loadings' => array(
                'name' => 'PCA Dim 7 Loadings'
            ),
            'add_counts_PCA_Dim_8_Loadings' => array(
                'name' => 'PCA Dim 8 Loadings'
            ),
            'add_counts_PCA_Dim_9_Loadings' => array(
                'name' => 'PCA Dim 9 Loadings'
            ),
            'add_counts_DZ_FDCs_Residuals' => array(
                'name' => 'DZ FDCs Residuals'
            ),
            'add_counts_LZ_FDCs_Residuals' => array(
                'name' => 'LZ FDCs Residuals'
            ),
            'add_counts_B_cells_1_Residuals' => array(
                'name' => 'B cells 1 Residuals'
            ),
            'add_counts_B_cells_2_Residuals' => array(
                'name' => 'B cells 2 Residuals'
            ),
            'add_counts_B_cells_3_Residuals' => array(
                'name' => 'B cells 3 Residuals'
            ),
            'add_counts_B_cells_4_Residuals' => array(
                'name' => 'B cells 4 Residuals'
            ),
            'add_counts_B_cells_5_Residuals' => array(
                'name' => 'B cells 5 Residuals'
            ),
            'add_counts_B_cells_6_Residuals' => array(
                'name' => 'B cells 6 Residuals'
            ),
            'add_counts_T_cells_Residuals' => array(
                'name' => 'T cells Residuals'
            ),
            'add_counts_TBRcs_1_Residuals' => array(
                'name' => 'TBRcs 1 Residuals'
            ),
            'add_counts_TBRcs_2_Residuals' => array(
                'name' => 'TBRcs 2 Residuals'
            ),
            'add_counts_C3_Residuals' => array(
                'name' => 'C3 Residuals'
            ),
            'add_counts_C4_Residuals' => array(
                'name' => 'C4 Residuals'
            ),
            'add_counts_C7_Residuals' => array(
                'name' => 'C7 Residuals'
            ),
            'add_counts_C12_Residuals' => array(
                'name' => 'C12 Residuals'
            ),
            'add_counts_C15_Residuals' => array(
                'name' => 'C15 Residuals'
            ),
            'add_counts_C16_Residuals' => array(
                'name' => 'C16 Residuals'
            ),
            'add_counts_C17_Residuals' => array(
                'name' => 'C17 Residuals'
            ),
            'add_counts_C18_Residuals' => array(
                'name' => 'C18 Residuals'
            )
        )
    )
//End scatterplot
);
