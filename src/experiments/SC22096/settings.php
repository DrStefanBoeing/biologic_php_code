<?php

return array(
    'public_access' => FALSE,
    'lab' => array(
        'name' => 'Bonfanti DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'pbl_data',
    'data_db' => array(
            'cat_table_name' => 'SC22096_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'SC22096_sc_rna_seq_table',
    'primary_gene_symbol' => 'hgnc_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged Expr',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Avg_log10_Expr_C0_NHBEA' => array(
            'color' => '#F8766D',
            'name' => 'Avg_log10_Expr_C0_NHBEA'
        ),
        'norm_counts_Avg_log10_Expr_C0_OES20' => array(
            'color' => '#F8766D',
            'name' => 'Avg_log10_Expr_C0_OES20'
        ),
        'norm_counts_Avg_log10_Expr_C0_OES22' => array(
            'color' => '#F8766D',
            'name' => 'Avg_log10_Expr_C0_OES22'
        ),
        'norm_counts_Avg_log10_Expr_C0_Skin01' => array(
            'color' => '#F8766D',
            'name' => 'Avg_log10_Expr_C0_Skin01'
        ),
        'norm_counts_Avg_log10_Expr_C0_THY135' => array(
            'color' => '#F8766D',
            'name' => 'Avg_log10_Expr_C0_THY135'
        ),
        'norm_counts_Avg_log10_Expr_C0_THY136' => array(
            'color' => '#F8766D',
            'name' => 'Avg_log10_Expr_C0_THY136'
        ),
        'norm_counts_Avg_log10_Expr_C1_NHBEA' => array(
            'color' => '#D89000',
            'name' => 'Avg_log10_Expr_C1_NHBEA'
        ),
        'norm_counts_Avg_log10_Expr_C1_OES20' => array(
            'color' => '#D89000',
            'name' => 'Avg_log10_Expr_C1_OES20'
        ),
        'norm_counts_Avg_log10_Expr_C1_OES22' => array(
            'color' => '#D89000',
            'name' => 'Avg_log10_Expr_C1_OES22'
        ),
        'norm_counts_Avg_log10_Expr_C1_Skin01' => array(
            'color' => '#D89000',
            'name' => 'Avg_log10_Expr_C1_Skin01'
        ),
        'norm_counts_Avg_log10_Expr_C1_THY135' => array(
            'color' => '#D89000',
            'name' => 'Avg_log10_Expr_C1_THY135'
        ),
        'norm_counts_Avg_log10_Expr_C1_THY136' => array(
            'color' => '#D89000',
            'name' => 'Avg_log10_Expr_C1_THY136'
        ),
        'norm_counts_Avg_log10_Expr_C2_NHBEA' => array(
            'color' => '#A3A500',
            'name' => 'Avg_log10_Expr_C2_NHBEA'
        ),
        'norm_counts_Avg_log10_Expr_C2_OES20' => array(
            'color' => '#A3A500',
            'name' => 'Avg_log10_Expr_C2_OES20'
        ),
        'norm_counts_Avg_log10_Expr_C2_OES22' => array(
            'color' => '#A3A500',
            'name' => 'Avg_log10_Expr_C2_OES22'
        ),
        'norm_counts_Avg_log10_Expr_C2_Skin01' => array(
            'color' => '#A3A500',
            'name' => 'Avg_log10_Expr_C2_Skin01'
        ),
        'norm_counts_Avg_log10_Expr_C2_THY135' => array(
            'color' => '#A3A500',
            'name' => 'Avg_log10_Expr_C2_THY135'
        ),
        'norm_counts_Avg_log10_Expr_C2_THY136' => array(
            'color' => '#A3A500',
            'name' => 'Avg_log10_Expr_C2_THY136'
        ),
        'norm_counts_Avg_log10_Expr_C3_NHBEA' => array(
            'color' => '#39B600',
            'name' => 'Avg_log10_Expr_C3_NHBEA'
        ),
        'norm_counts_Avg_log10_Expr_C3_OES20' => array(
            'color' => '#39B600',
            'name' => 'Avg_log10_Expr_C3_OES20'
        ),
        'norm_counts_Avg_log10_Expr_C3_OES22' => array(
            'color' => '#39B600',
            'name' => 'Avg_log10_Expr_C3_OES22'
        ),
        'norm_counts_Avg_log10_Expr_C3_Skin01' => array(
            'color' => '#39B600',
            'name' => 'Avg_log10_Expr_C3_Skin01'
        ),
        'norm_counts_Avg_log10_Expr_C3_THY135' => array(
            'color' => '#39B600',
            'name' => 'Avg_log10_Expr_C3_THY135'
        ),
        'norm_counts_Avg_log10_Expr_C3_THY136' => array(
            'color' => '#39B600',
            'name' => 'Avg_log10_Expr_C3_THY136'
        ),
        'norm_counts_Avg_log10_Expr_C4_NHBEA' => array(
            'color' => '#00BF7D',
            'name' => 'Avg_log10_Expr_C4_NHBEA'
        ),
        'norm_counts_Avg_log10_Expr_C4_OES20' => array(
            'color' => '#00BF7D',
            'name' => 'Avg_log10_Expr_C4_OES20'
        ),
        'norm_counts_Avg_log10_Expr_C4_OES22' => array(
            'color' => '#00BF7D',
            'name' => 'Avg_log10_Expr_C4_OES22'
        ),
        'norm_counts_Avg_log10_Expr_C4_Skin01' => array(
            'color' => '#00BF7D',
            'name' => 'Avg_log10_Expr_C4_Skin01'
        ),
        'norm_counts_Avg_log10_Expr_C4_THY135' => array(
            'color' => '#00BF7D',
            'name' => 'Avg_log10_Expr_C4_THY135'
        ),
        'norm_counts_Avg_log10_Expr_C4_THY136' => array(
            'color' => '#00BF7D',
            'name' => 'Avg_log10_Expr_C4_THY136'
        ),
        'norm_counts_Avg_log10_Expr_C5_NHBEA' => array(
            'color' => '#00BFC4',
            'name' => 'Avg_log10_Expr_C5_NHBEA'
        ),
        'norm_counts_Avg_log10_Expr_C5_OES20' => array(
            'color' => '#00BFC4',
            'name' => 'Avg_log10_Expr_C5_OES20'
        ),
        'norm_counts_Avg_log10_Expr_C5_OES22' => array(
            'color' => '#00BFC4',
            'name' => 'Avg_log10_Expr_C5_OES22'
        ),
        'norm_counts_Avg_log10_Expr_C5_Skin01' => array(
            'color' => '#00BFC4',
            'name' => 'Avg_log10_Expr_C5_Skin01'
        ),
        'norm_counts_Avg_log10_Expr_C5_THY135' => array(
            'color' => '#00BFC4',
            'name' => 'Avg_log10_Expr_C5_THY135'
        ),
        'norm_counts_Avg_log10_Expr_C5_THY136' => array(
            'color' => '#00BFC4',
            'name' => 'Avg_log10_Expr_C5_THY136'
        ),
        'norm_counts_Avg_log10_Expr_C6_NHBEA' => array(
            'color' => '#00B0F6',
            'name' => 'Avg_log10_Expr_C6_NHBEA'
        ),
        'norm_counts_Avg_log10_Expr_C6_OES20' => array(
            'color' => '#00B0F6',
            'name' => 'Avg_log10_Expr_C6_OES20'
        ),
        'norm_counts_Avg_log10_Expr_C6_OES22' => array(
            'color' => '#00B0F6',
            'name' => 'Avg_log10_Expr_C6_OES22'
        ),
        'norm_counts_Avg_log10_Expr_C6_Skin01' => array(
            'color' => '#00B0F6',
            'name' => 'Avg_log10_Expr_C6_Skin01'
        ),
        'norm_counts_Avg_log10_Expr_C6_THY135' => array(
            'color' => '#00B0F6',
            'name' => 'Avg_log10_Expr_C6_THY135'
        ),
        'norm_counts_Avg_log10_Expr_C6_THY136' => array(
            'color' => '#00B0F6',
            'name' => 'Avg_log10_Expr_C6_THY136'
        ),
        'norm_counts_Avg_log10_Expr_C7_NHBEA' => array(
            'color' => '#9590FF',
            'name' => 'Avg_log10_Expr_C7_NHBEA'
        ),
        'norm_counts_Avg_log10_Expr_C7_OES20' => array(
            'color' => '#9590FF',
            'name' => 'Avg_log10_Expr_C7_OES20'
        ),
        'norm_counts_Avg_log10_Expr_C7_OES22' => array(
            'color' => '#9590FF',
            'name' => 'Avg_log10_Expr_C7_OES22'
        ),
        'norm_counts_Avg_log10_Expr_C7_Skin01' => array(
            'color' => '#9590FF',
            'name' => 'Avg_log10_Expr_C7_Skin01'
        ),
        'norm_counts_Avg_log10_Expr_C7_THY135' => array(
            'color' => '#9590FF',
            'name' => 'Avg_log10_Expr_C7_THY135'
        ),
        'norm_counts_Avg_log10_Expr_C7_THY136' => array(
            'color' => '#9590FF',
            'name' => 'Avg_log10_Expr_C7_THY136'
        ),
        'norm_counts_Avg_log10_Expr_C8_NHBEA' => array(
            'color' => '#E76BF3',
            'name' => 'Avg_log10_Expr_C8_NHBEA'
        ),
        'norm_counts_Avg_log10_Expr_C8_OES20' => array(
            'color' => '#E76BF3',
            'name' => 'Avg_log10_Expr_C8_OES20'
        ),
        'norm_counts_Avg_log10_Expr_C8_OES22' => array(
            'color' => '#E76BF3',
            'name' => 'Avg_log10_Expr_C8_OES22'
        ),
        'norm_counts_Avg_log10_Expr_C8_Skin01' => array(
            'color' => '#E76BF3',
            'name' => 'Avg_log10_Expr_C8_Skin01'
        ),
        'norm_counts_Avg_log10_Expr_C8_THY135' => array(
            'color' => '#E76BF3',
            'name' => 'Avg_log10_Expr_C8_THY135'
        ),
        'norm_counts_Avg_log10_Expr_C8_THY136' => array(
            'color' => '#E76BF3',
            'name' => 'Avg_log10_Expr_C8_THY136'
        ),
        'norm_counts_Avg_log10_Expr_C9_NHBEA' => array(
            'color' => '#FF62BC',
            'name' => 'Avg_log10_Expr_C9_NHBEA'
        ),
        'norm_counts_Avg_log10_Expr_C9_OES20' => array(
            'color' => '#FF62BC',
            'name' => 'Avg_log10_Expr_C9_OES20'
        ),
        'norm_counts_Avg_log10_Expr_C9_OES22' => array(
            'color' => '#FF62BC',
            'name' => 'Avg_log10_Expr_C9_OES22'
        ),
        'norm_counts_Avg_log10_Expr_C9_Skin01' => array(
            'color' => '#FF62BC',
            'name' => 'Avg_log10_Expr_C9_Skin01'
        ),
        'norm_counts_Avg_log10_Expr_C9_THY135' => array(
            'color' => '#FF62BC',
            'name' => 'Avg_log10_Expr_C9_THY135'
        ),
        'norm_counts_Avg_log10_Expr_C9_THY136' => array(
            'color' => '#FF62BC',
            'name' => 'Avg_log10_Expr_C9_THY136'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'lg10 Expr for all Samples',
        'sidelabel' => 'lg10 Expr'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Avg_log10_Expr_Sc_C0_NHBEA','lg2_avg_Avg_log10_Expr_Sc_C0_OES20','lg2_avg_Avg_log10_Expr_Sc_C0_OES22','lg2_avg_Avg_log10_Expr_Sc_C0_Skin01','lg2_avg_Avg_log10_Expr_Sc_C0_THY135','lg2_avg_Avg_log10_Expr_Sc_C0_THY136','lg2_avg_Avg_log10_Expr_Sc_C1_NHBEA','lg2_avg_Avg_log10_Expr_Sc_C1_OES20','lg2_avg_Avg_log10_Expr_Sc_C1_OES22','lg2_avg_Avg_log10_Expr_Sc_C1_Skin01','lg2_avg_Avg_log10_Expr_Sc_C1_THY135','lg2_avg_Avg_log10_Expr_Sc_C1_THY136','lg2_avg_Avg_log10_Expr_Sc_C2_NHBEA','lg2_avg_Avg_log10_Expr_Sc_C2_OES20','lg2_avg_Avg_log10_Expr_Sc_C2_OES22','lg2_avg_Avg_log10_Expr_Sc_C2_Skin01','lg2_avg_Avg_log10_Expr_Sc_C2_THY135','lg2_avg_Avg_log10_Expr_Sc_C2_THY136','lg2_avg_Avg_log10_Expr_Sc_C3_NHBEA','lg2_avg_Avg_log10_Expr_Sc_C3_OES20','lg2_avg_Avg_log10_Expr_Sc_C3_OES22','lg2_avg_Avg_log10_Expr_Sc_C3_Skin01','lg2_avg_Avg_log10_Expr_Sc_C3_THY135','lg2_avg_Avg_log10_Expr_Sc_C3_THY136','lg2_avg_Avg_log10_Expr_Sc_C4_NHBEA','lg2_avg_Avg_log10_Expr_Sc_C4_OES20','lg2_avg_Avg_log10_Expr_Sc_C4_OES22','lg2_avg_Avg_log10_Expr_Sc_C4_Skin01','lg2_avg_Avg_log10_Expr_Sc_C4_THY135','lg2_avg_Avg_log10_Expr_Sc_C4_THY136','lg2_avg_Avg_log10_Expr_Sc_C5_NHBEA','lg2_avg_Avg_log10_Expr_Sc_C5_OES20','lg2_avg_Avg_log10_Expr_Sc_C5_OES22','lg2_avg_Avg_log10_Expr_Sc_C5_Skin01','lg2_avg_Avg_log10_Expr_Sc_C5_THY135','lg2_avg_Avg_log10_Expr_Sc_C5_THY136','lg2_avg_Avg_log10_Expr_Sc_C6_NHBEA','lg2_avg_Avg_log10_Expr_Sc_C6_OES20','lg2_avg_Avg_log10_Expr_Sc_C6_OES22','lg2_avg_Avg_log10_Expr_Sc_C6_Skin01','lg2_avg_Avg_log10_Expr_Sc_C6_THY135','lg2_avg_Avg_log10_Expr_Sc_C6_THY136','lg2_avg_Avg_log10_Expr_Sc_C7_NHBEA','lg2_avg_Avg_log10_Expr_Sc_C7_OES20','lg2_avg_Avg_log10_Expr_Sc_C7_OES22','lg2_avg_Avg_log10_Expr_Sc_C7_Skin01','lg2_avg_Avg_log10_Expr_Sc_C7_THY135','lg2_avg_Avg_log10_Expr_Sc_C7_THY136','lg2_avg_Avg_log10_Expr_Sc_C8_NHBEA','lg2_avg_Avg_log10_Expr_Sc_C8_OES20','lg2_avg_Avg_log10_Expr_Sc_C8_OES22','lg2_avg_Avg_log10_Expr_Sc_C8_Skin01','lg2_avg_Avg_log10_Expr_Sc_C8_THY135','lg2_avg_Avg_log10_Expr_Sc_C8_THY136','lg2_avg_Avg_log10_Expr_Sc_C9_NHBEA','lg2_avg_Avg_log10_Expr_Sc_C9_OES20','lg2_avg_Avg_log10_Expr_Sc_C9_OES22','lg2_avg_Avg_log10_Expr_Sc_C9_Skin01','lg2_avg_Avg_log10_Expr_Sc_C9_THY135','lg2_avg_Avg_log10_Expr_Sc_C9_THY136'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
            'name' => 'logFC_Expressed_in_N_Percent_Cells',
            'slider_min' => 0,
            'slider_max' => 100,
            'default_low' => 0,
            'default_high' => 100
        ),
        'add_counts_C0_Residuals' => array(
            'name' => 'C0_Residuals',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_counts_C1_Residuals' => array(
            'name' => 'C1_Residuals',
            'slider_min' => -2,
            'slider_max' => 1,
            'default_low' => -2,
            'default_high' => 1
        ),
        'add_counts_C2_Residuals' => array(
            'name' => 'C2_Residuals',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'add_counts_C3_Residuals' => array(
            'name' => 'C3_Residuals',
            'slider_min' => -2,
            'slider_max' => 1,
            'default_low' => -2,
            'default_high' => 1
        ),
        'add_counts_C4_Residuals' => array(
            'name' => 'C4_Residuals',
            'slider_min' => -2,
            'slider_max' => 1,
            'default_low' => -2,
            'default_high' => 1
        ),
        'add_counts_C5_Residuals' => array(
            'name' => 'C5_Residuals',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'add_counts_C6_Residuals' => array(
            'name' => 'C6_Residuals',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'add_counts_C7_Residuals' => array(
            'name' => 'C7_Residuals',
            'slider_min' => -1,
            'slider_max' => 2,
            'default_low' => -1,
            'default_high' => 2
        ),
        'add_counts_C8_Residuals' => array(
            'name' => 'C8_Residuals',
            'slider_min' => -1,
            'slider_max' => 3,
            'default_low' => -1,
            'default_high' => 3
        ),
        'add_counts_C9_Residuals' => array(
            'name' => 'C9_Residuals',
            'slider_min' => -2,
            'slider_max' => 4,
            'default_low' => -2,
            'default_high' => 4
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'SC22096_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'add_counts_Avg_log10_Expr_all',
        'default-y' => 'norm_counts_Avg_log10_Expr_C0_NHBEA',
        'selection' => array(
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg_log10_Expr_all'
            ),
            'norm_counts_Avg_log10_Expr_C0_NHBEA' => array(
                'name' => 's_Avg_log10_Expr_C0_NHBEA'
            ),
            'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
                'name' => 'logFC_Expressed_in_N_Percent_Cells'
            ),
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg_log10_Expr_all'
            ),
            'add_counts_Avg_log10_Expr_C0' => array(
                'name' => 'Avg_log10_Expr_C0'
            ),
            'add_counts_Avg_log10_Expr_C1' => array(
                'name' => 'Avg_log10_Expr_C1'
            ),
            'add_counts_Avg_log10_Expr_C2' => array(
                'name' => 'Avg_log10_Expr_C2'
            ),
            'add_counts_Avg_log10_Expr_C3' => array(
                'name' => 'Avg_log10_Expr_C3'
            ),
            'add_counts_Avg_log10_Expr_C4' => array(
                'name' => 'Avg_log10_Expr_C4'
            ),
            'add_counts_Avg_log10_Expr_C5' => array(
                'name' => 'Avg_log10_Expr_C5'
            ),
            'add_counts_Avg_log10_Expr_C6' => array(
                'name' => 'Avg_log10_Expr_C6'
            ),
            'add_counts_Avg_log10_Expr_C7' => array(
                'name' => 'Avg_log10_Expr_C7'
            ),
            'add_counts_Avg_log10_Expr_C8' => array(
                'name' => 'Avg_log10_Expr_C8'
            ),
            'add_counts_Avg_log10_Expr_C9' => array(
                'name' => 'Avg_log10_Expr_C9'
            ),
            'add_counts_Avg_log10_Expr_NHBEA' => array(
                'name' => 'Avg_log10_Expr_NHBEA'
            ),
            'add_counts_Avg_log10_Expr_OES20' => array(
                'name' => 'Avg_log10_Expr_OES20'
            ),
            'add_counts_Avg_log10_Expr_OES22' => array(
                'name' => 'Avg_log10_Expr_OES22'
            ),
            'add_counts_Avg_log10_Expr_Skin01' => array(
                'name' => 'Avg_log10_Expr_Skin01'
            ),
            'add_counts_Avg_log10_Expr_THY135' => array(
                'name' => 'Avg_log10_Expr_THY135'
            ),
            'add_counts_Avg_log10_Expr_THY136' => array(
                'name' => 'Avg_log10_Expr_THY136'
            ),
            'norm_counts_Avg_log10_Expr_C0_NHBEA' => array(
                'name' => 's_Avg_log10_Expr_C0_NHBEA'
            ),
            'norm_counts_Avg_log10_Expr_C0_OES20' => array(
                'name' => 's_Avg_log10_Expr_C0_OES20'
            ),
            'norm_counts_Avg_log10_Expr_C0_OES22' => array(
                'name' => 's_Avg_log10_Expr_C0_OES22'
            ),
            'norm_counts_Avg_log10_Expr_C0_Skin01' => array(
                'name' => 's_Avg_log10_Expr_C0_Skin01'
            ),
            'norm_counts_Avg_log10_Expr_C0_THY135' => array(
                'name' => 's_Avg_log10_Expr_C0_THY135'
            ),
            'norm_counts_Avg_log10_Expr_C0_THY136' => array(
                'name' => 's_Avg_log10_Expr_C0_THY136'
            ),
            'norm_counts_Avg_log10_Expr_C1_NHBEA' => array(
                'name' => 's_Avg_log10_Expr_C1_NHBEA'
            ),
            'norm_counts_Avg_log10_Expr_C1_OES20' => array(
                'name' => 's_Avg_log10_Expr_C1_OES20'
            ),
            'norm_counts_Avg_log10_Expr_C1_OES22' => array(
                'name' => 's_Avg_log10_Expr_C1_OES22'
            ),
            'norm_counts_Avg_log10_Expr_C1_Skin01' => array(
                'name' => 's_Avg_log10_Expr_C1_Skin01'
            ),
            'norm_counts_Avg_log10_Expr_C1_THY135' => array(
                'name' => 's_Avg_log10_Expr_C1_THY135'
            ),
            'norm_counts_Avg_log10_Expr_C1_THY136' => array(
                'name' => 's_Avg_log10_Expr_C1_THY136'
            ),
            'norm_counts_Avg_log10_Expr_C2_NHBEA' => array(
                'name' => 's_Avg_log10_Expr_C2_NHBEA'
            ),
            'norm_counts_Avg_log10_Expr_C2_OES20' => array(
                'name' => 's_Avg_log10_Expr_C2_OES20'
            ),
            'norm_counts_Avg_log10_Expr_C2_OES22' => array(
                'name' => 's_Avg_log10_Expr_C2_OES22'
            ),
            'norm_counts_Avg_log10_Expr_C2_Skin01' => array(
                'name' => 's_Avg_log10_Expr_C2_Skin01'
            ),
            'norm_counts_Avg_log10_Expr_C2_THY135' => array(
                'name' => 's_Avg_log10_Expr_C2_THY135'
            ),
            'norm_counts_Avg_log10_Expr_C2_THY136' => array(
                'name' => 's_Avg_log10_Expr_C2_THY136'
            ),
            'norm_counts_Avg_log10_Expr_C3_NHBEA' => array(
                'name' => 's_Avg_log10_Expr_C3_NHBEA'
            ),
            'norm_counts_Avg_log10_Expr_C3_OES20' => array(
                'name' => 's_Avg_log10_Expr_C3_OES20'
            ),
            'norm_counts_Avg_log10_Expr_C3_OES22' => array(
                'name' => 's_Avg_log10_Expr_C3_OES22'
            ),
            'norm_counts_Avg_log10_Expr_C3_Skin01' => array(
                'name' => 's_Avg_log10_Expr_C3_Skin01'
            ),
            'norm_counts_Avg_log10_Expr_C3_THY135' => array(
                'name' => 's_Avg_log10_Expr_C3_THY135'
            ),
            'norm_counts_Avg_log10_Expr_C3_THY136' => array(
                'name' => 's_Avg_log10_Expr_C3_THY136'
            ),
            'norm_counts_Avg_log10_Expr_C4_NHBEA' => array(
                'name' => 's_Avg_log10_Expr_C4_NHBEA'
            ),
            'norm_counts_Avg_log10_Expr_C4_OES20' => array(
                'name' => 's_Avg_log10_Expr_C4_OES20'
            ),
            'norm_counts_Avg_log10_Expr_C4_OES22' => array(
                'name' => 's_Avg_log10_Expr_C4_OES22'
            ),
            'norm_counts_Avg_log10_Expr_C4_Skin01' => array(
                'name' => 's_Avg_log10_Expr_C4_Skin01'
            ),
            'norm_counts_Avg_log10_Expr_C4_THY135' => array(
                'name' => 's_Avg_log10_Expr_C4_THY135'
            ),
            'norm_counts_Avg_log10_Expr_C4_THY136' => array(
                'name' => 's_Avg_log10_Expr_C4_THY136'
            ),
            'norm_counts_Avg_log10_Expr_C5_NHBEA' => array(
                'name' => 's_Avg_log10_Expr_C5_NHBEA'
            ),
            'norm_counts_Avg_log10_Expr_C5_OES20' => array(
                'name' => 's_Avg_log10_Expr_C5_OES20'
            ),
            'norm_counts_Avg_log10_Expr_C5_OES22' => array(
                'name' => 's_Avg_log10_Expr_C5_OES22'
            ),
            'norm_counts_Avg_log10_Expr_C5_Skin01' => array(
                'name' => 's_Avg_log10_Expr_C5_Skin01'
            ),
            'norm_counts_Avg_log10_Expr_C5_THY135' => array(
                'name' => 's_Avg_log10_Expr_C5_THY135'
            ),
            'norm_counts_Avg_log10_Expr_C5_THY136' => array(
                'name' => 's_Avg_log10_Expr_C5_THY136'
            ),
            'norm_counts_Avg_log10_Expr_C6_NHBEA' => array(
                'name' => 's_Avg_log10_Expr_C6_NHBEA'
            ),
            'norm_counts_Avg_log10_Expr_C6_OES20' => array(
                'name' => 's_Avg_log10_Expr_C6_OES20'
            ),
            'norm_counts_Avg_log10_Expr_C6_OES22' => array(
                'name' => 's_Avg_log10_Expr_C6_OES22'
            ),
            'norm_counts_Avg_log10_Expr_C6_Skin01' => array(
                'name' => 's_Avg_log10_Expr_C6_Skin01'
            ),
            'norm_counts_Avg_log10_Expr_C6_THY135' => array(
                'name' => 's_Avg_log10_Expr_C6_THY135'
            ),
            'norm_counts_Avg_log10_Expr_C6_THY136' => array(
                'name' => 's_Avg_log10_Expr_C6_THY136'
            ),
            'norm_counts_Avg_log10_Expr_C7_NHBEA' => array(
                'name' => 's_Avg_log10_Expr_C7_NHBEA'
            ),
            'norm_counts_Avg_log10_Expr_C7_OES20' => array(
                'name' => 's_Avg_log10_Expr_C7_OES20'
            ),
            'norm_counts_Avg_log10_Expr_C7_OES22' => array(
                'name' => 's_Avg_log10_Expr_C7_OES22'
            ),
            'norm_counts_Avg_log10_Expr_C7_Skin01' => array(
                'name' => 's_Avg_log10_Expr_C7_Skin01'
            ),
            'norm_counts_Avg_log10_Expr_C7_THY135' => array(
                'name' => 's_Avg_log10_Expr_C7_THY135'
            ),
            'norm_counts_Avg_log10_Expr_C7_THY136' => array(
                'name' => 's_Avg_log10_Expr_C7_THY136'
            ),
            'norm_counts_Avg_log10_Expr_C8_NHBEA' => array(
                'name' => 's_Avg_log10_Expr_C8_NHBEA'
            ),
            'norm_counts_Avg_log10_Expr_C8_OES20' => array(
                'name' => 's_Avg_log10_Expr_C8_OES20'
            ),
            'norm_counts_Avg_log10_Expr_C8_OES22' => array(
                'name' => 's_Avg_log10_Expr_C8_OES22'
            ),
            'norm_counts_Avg_log10_Expr_C8_Skin01' => array(
                'name' => 's_Avg_log10_Expr_C8_Skin01'
            ),
            'norm_counts_Avg_log10_Expr_C8_THY135' => array(
                'name' => 's_Avg_log10_Expr_C8_THY135'
            ),
            'norm_counts_Avg_log10_Expr_C8_THY136' => array(
                'name' => 's_Avg_log10_Expr_C8_THY136'
            ),
            'norm_counts_Avg_log10_Expr_C9_NHBEA' => array(
                'name' => 's_Avg_log10_Expr_C9_NHBEA'
            ),
            'norm_counts_Avg_log10_Expr_C9_OES20' => array(
                'name' => 's_Avg_log10_Expr_C9_OES20'
            ),
            'norm_counts_Avg_log10_Expr_C9_OES22' => array(
                'name' => 's_Avg_log10_Expr_C9_OES22'
            ),
            'norm_counts_Avg_log10_Expr_C9_Skin01' => array(
                'name' => 's_Avg_log10_Expr_C9_Skin01'
            ),
            'norm_counts_Avg_log10_Expr_C9_THY135' => array(
                'name' => 's_Avg_log10_Expr_C9_THY135'
            ),
            'norm_counts_Avg_log10_Expr_C9_THY136' => array(
                'name' => 's_Avg_log10_Expr_C9_THY136'
            ),
            'add_counts_C0_Residuals' => array(
                'name' => 'C0_Residuals'
            ),
            'add_counts_C1_Residuals' => array(
                'name' => 'C1_Residuals'
            ),
            'add_counts_C2_Residuals' => array(
                'name' => 'C2_Residuals'
            ),
            'add_counts_C3_Residuals' => array(
                'name' => 'C3_Residuals'
            ),
            'add_counts_C4_Residuals' => array(
                'name' => 'C4_Residuals'
            ),
            'add_counts_C5_Residuals' => array(
                'name' => 'C5_Residuals'
            ),
            'add_counts_C6_Residuals' => array(
                'name' => 'C6_Residuals'
            ),
            'add_counts_C7_Residuals' => array(
                'name' => 'C7_Residuals'
            ),
            'add_counts_C8_Residuals' => array(
                'name' => 'C8_Residuals'
            ),
            'add_counts_C9_Residuals' => array(
                'name' => 'C9_Residuals'
            )
        )
    )
//End scatterplot
);
