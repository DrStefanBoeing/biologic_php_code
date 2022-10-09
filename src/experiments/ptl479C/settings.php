<?php

return array(
    'public_access' => FALSE,
    'lab' => array(
        'name' => 'Tolar DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'ptl_data',
    'data_db' => array(
            'cat_table_name' => 'ptl479C_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'ptl479C_sc_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged Expr',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Avg_log10_Expr_C0_Biotin' => array(
            'color' => '#F8766D',
            'name' => 'Avg_log10_Expr_C0_Biotin'
        ),
        'norm_counts_Avg_log10_Expr_C0_Ikk2Het' => array(
            'color' => '#F8766D',
            'name' => 'Avg_log10_Expr_C0_Ikk2Het'
        ),
        'norm_counts_Avg_log10_Expr_C1_Biotin' => array(
            'color' => '#A3A500',
            'name' => 'Avg_log10_Expr_C1_Biotin'
        ),
        'norm_counts_Avg_log10_Expr_C1_Ikk2Het' => array(
            'color' => '#A3A500',
            'name' => 'Avg_log10_Expr_C1_Ikk2Het'
        ),
        'norm_counts_Avg_log10_Expr_C2_Biotin' => array(
            'color' => '#00BF7D',
            'name' => 'Avg_log10_Expr_C2_Biotin'
        ),
        'norm_counts_Avg_log10_Expr_C2_Ikk2Het' => array(
            'color' => '#00BF7D',
            'name' => 'Avg_log10_Expr_C2_Ikk2Het'
        ),
        'norm_counts_Avg_log10_Expr_C3_Biotin' => array(
            'color' => '#00B0F6',
            'name' => 'Avg_log10_Expr_C3_Biotin'
        ),
        'norm_counts_Avg_log10_Expr_C3_Ikk2Het' => array(
            'color' => '#00B0F6',
            'name' => 'Avg_log10_Expr_C3_Ikk2Het'
        ),
        'norm_counts_Avg_log10_Expr_C4_Biotin' => array(
            'color' => '#E76BF3',
            'name' => 'Avg_log10_Expr_C4_Biotin'
        ),
        'norm_counts_Avg_log10_Expr_C4_Ikk2Het' => array(
            'color' => '#E76BF3',
            'name' => 'Avg_log10_Expr_C4_Ikk2Het'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'lg10 Expr for all Samples',
        'sidelabel' => 'lg10 Expr'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Avg_log10_Expr_Sc_C0_Biotin','lg2_avg_Avg_log10_Expr_Sc_C0_Ikk2Het','lg2_avg_Avg_log10_Expr_Sc_C1_Biotin','lg2_avg_Avg_log10_Expr_Sc_C1_Ikk2Het','lg2_avg_Avg_log10_Expr_Sc_C2_Biotin','lg2_avg_Avg_log10_Expr_Sc_C2_Ikk2Het','lg2_avg_Avg_log10_Expr_Sc_C3_Biotin','lg2_avg_Avg_log10_Expr_Sc_C3_Ikk2Het','lg2_avg_Avg_log10_Expr_Sc_C4_Biotin','lg2_avg_Avg_log10_Expr_Sc_C4_Ikk2Het'),

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
            'slider_max' => 3,
            'default_low' => -1,
            'default_high' => 3
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
            'slider_min' => -3,
            'slider_max' => 1,
            'default_low' => -3,
            'default_high' => 1
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
            'slider_min' => -4,
            'slider_max' => 2,
            'default_low' => -4,
            'default_high' => 2
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'ptl479C_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'add_counts_Avg_log10_Expr_all',
        'default-y' => 'norm_counts_Avg_log10_Expr_C0_Biotin',
        'selection' => array(
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg_log10_Expr_all'
            ),
            'norm_counts_Avg_log10_Expr_C0_Biotin' => array(
                'name' => 's_Avg_log10_Expr_C0_Biotin'
            ),
            'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
                'name' => 'logFC_Expressed_in_N_Percent_Cells'
            ),
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg_log10_Expr_all'
            ),
            'add_counts_Avg_log10_Expr_Biotin' => array(
                'name' => 'Avg_log10_Expr_Biotin'
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
            'add_counts_Avg_log10_Expr_Ikk2Het' => array(
                'name' => 'Avg_log10_Expr_Ikk2Het'
            ),
            'norm_counts_Avg_log10_Expr_C0_Biotin' => array(
                'name' => 's_Avg_log10_Expr_C0_Biotin'
            ),
            'norm_counts_Avg_log10_Expr_C0_Ikk2Het' => array(
                'name' => 's_Avg_log10_Expr_C0_Ikk2Het'
            ),
            'norm_counts_Avg_log10_Expr_C1_Biotin' => array(
                'name' => 's_Avg_log10_Expr_C1_Biotin'
            ),
            'norm_counts_Avg_log10_Expr_C1_Ikk2Het' => array(
                'name' => 's_Avg_log10_Expr_C1_Ikk2Het'
            ),
            'norm_counts_Avg_log10_Expr_C2_Biotin' => array(
                'name' => 's_Avg_log10_Expr_C2_Biotin'
            ),
            'norm_counts_Avg_log10_Expr_C2_Ikk2Het' => array(
                'name' => 's_Avg_log10_Expr_C2_Ikk2Het'
            ),
            'norm_counts_Avg_log10_Expr_C3_Biotin' => array(
                'name' => 's_Avg_log10_Expr_C3_Biotin'
            ),
            'norm_counts_Avg_log10_Expr_C3_Ikk2Het' => array(
                'name' => 's_Avg_log10_Expr_C3_Ikk2Het'
            ),
            'norm_counts_Avg_log10_Expr_C4_Biotin' => array(
                'name' => 's_Avg_log10_Expr_C4_Biotin'
            ),
            'norm_counts_Avg_log10_Expr_C4_Ikk2Het' => array(
                'name' => 's_Avg_log10_Expr_C4_Ikk2Het'
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
            )
        )
    )
//End scatterplot
);
