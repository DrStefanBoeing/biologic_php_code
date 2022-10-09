<?php

return array(
    'public_access' => FALSE,
    'lab' => array(
        'name' => 'LovellBadge DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'rll_data',
    'data_db' => array(
            'cat_table_name' => 'SC18208_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'SC18208_sc_rna_seq_table',
    'primary_gene_symbol' => 'gg_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged Expr',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Avg_log10_Expr_C0' => array(
            'color' => '#F8766D',
            'name' => 'Avg_log10_Expr_C0'
        ),
        'norm_counts_Avg_log10_Expr_C1' => array(
            'color' => '#E88526',
            'name' => 'Avg_log10_Expr_C1'
        ),
        'norm_counts_Avg_log10_Expr_C10' => array(
            'color' => '#E88526',
            'name' => 'Avg_log10_Expr_C10'
        ),
        'norm_counts_Avg_log10_Expr_C11' => array(
            'color' => '#E88526',
            'name' => 'Avg_log10_Expr_C11'
        ),
        'norm_counts_Avg_log10_Expr_C12' => array(
            'color' => '#E88526',
            'name' => 'Avg_log10_Expr_C12'
        ),
        'norm_counts_Avg_log10_Expr_C13' => array(
            'color' => '#E88526',
            'name' => 'Avg_log10_Expr_C13'
        ),
        'norm_counts_Avg_log10_Expr_C14' => array(
            'color' => '#E88526',
            'name' => 'Avg_log10_Expr_C14'
        ),
        'norm_counts_Avg_log10_Expr_C15' => array(
            'color' => '#E88526',
            'name' => 'Avg_log10_Expr_C15'
        ),
        'norm_counts_Avg_log10_Expr_C16' => array(
            'color' => '#E88526',
            'name' => 'Avg_log10_Expr_C16'
        ),
        'norm_counts_Avg_log10_Expr_C17' => array(
            'color' => '#E88526',
            'name' => 'Avg_log10_Expr_C17'
        ),
        'norm_counts_Avg_log10_Expr_C2' => array(
            'color' => '#00B9E3',
            'name' => 'Avg_log10_Expr_C2'
        ),
        'norm_counts_Avg_log10_Expr_C3' => array(
            'color' => '#00ADFA',
            'name' => 'Avg_log10_Expr_C3'
        ),
        'norm_counts_Avg_log10_Expr_C4' => array(
            'color' => '#619CFF',
            'name' => 'Avg_log10_Expr_C4'
        ),
        'norm_counts_Avg_log10_Expr_C5' => array(
            'color' => '#AE87FF',
            'name' => 'Avg_log10_Expr_C5'
        ),
        'norm_counts_Avg_log10_Expr_C6' => array(
            'color' => '#DB72FB',
            'name' => 'Avg_log10_Expr_C6'
        ),
        'norm_counts_Avg_log10_Expr_C7' => array(
            'color' => '#F564E3',
            'name' => 'Avg_log10_Expr_C7'
        ),
        'norm_counts_Avg_log10_Expr_C8' => array(
            'color' => '#FF61C3',
            'name' => 'Avg_log10_Expr_C8'
        ),
        'norm_counts_Avg_log10_Expr_C9' => array(
            'color' => '#FF699C',
            'name' => 'Avg_log10_Expr_C9'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'lg10 Expr for all Samples',
        'sidelabel' => 'lg10 Expr'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Avg_log10_Expr_Sc_C0','lg2_avg_Avg_log10_Expr_Sc_C1','lg2_avg_Avg_log10_Expr_Sc_C10','lg2_avg_Avg_log10_Expr_Sc_C11','lg2_avg_Avg_log10_Expr_Sc_C12','lg2_avg_Avg_log10_Expr_Sc_C13','lg2_avg_Avg_log10_Expr_Sc_C14','lg2_avg_Avg_log10_Expr_Sc_C15','lg2_avg_Avg_log10_Expr_Sc_C16','lg2_avg_Avg_log10_Expr_Sc_C17','lg2_avg_Avg_log10_Expr_Sc_C2','lg2_avg_Avg_log10_Expr_Sc_C3','lg2_avg_Avg_log10_Expr_Sc_C4','lg2_avg_Avg_log10_Expr_Sc_C5','lg2_avg_Avg_log10_Expr_Sc_C6','lg2_avg_Avg_log10_Expr_Sc_C7','lg2_avg_Avg_log10_Expr_Sc_C8','lg2_avg_Avg_log10_Expr_Sc_C9'),

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
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'SC18208_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'add_counts_Avg_log10_Expr_all',
        'default-y' => 'norm_counts_Avg_log10_Expr_C0',
        'selection' => array(
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg_log10_Expr_all'
            ),
            'norm_counts_Avg_log10_Expr_C0' => array(
                'name' => 's_Avg_log10_Expr_C0'
            ),
            'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
                'name' => 'logFC_Expressed_in_N_Percent_Cells'
            ),
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg_log10_Expr_all'
            ),
            'norm_counts_Avg_log10_Expr_C0' => array(
                'name' => 's_Avg_log10_Expr_C0'
            ),
            'norm_counts_Avg_log10_Expr_C1' => array(
                'name' => 's_Avg_log10_Expr_C1'
            ),
            'norm_counts_Avg_log10_Expr_C10' => array(
                'name' => 's_Avg_log10_Expr_C10'
            ),
            'norm_counts_Avg_log10_Expr_C11' => array(
                'name' => 's_Avg_log10_Expr_C11'
            ),
            'norm_counts_Avg_log10_Expr_C12' => array(
                'name' => 's_Avg_log10_Expr_C12'
            ),
            'norm_counts_Avg_log10_Expr_C13' => array(
                'name' => 's_Avg_log10_Expr_C13'
            ),
            'norm_counts_Avg_log10_Expr_C14' => array(
                'name' => 's_Avg_log10_Expr_C14'
            ),
            'norm_counts_Avg_log10_Expr_C15' => array(
                'name' => 's_Avg_log10_Expr_C15'
            ),
            'norm_counts_Avg_log10_Expr_C16' => array(
                'name' => 's_Avg_log10_Expr_C16'
            ),
            'norm_counts_Avg_log10_Expr_C17' => array(
                'name' => 's_Avg_log10_Expr_C17'
            ),
            'norm_counts_Avg_log10_Expr_C10' => array(
                'name' => 's_Avg_log10_Expr_C10'
            ),
            'norm_counts_Avg_log10_Expr_C11' => array(
                'name' => 's_Avg_log10_Expr_C11'
            ),
            'norm_counts_Avg_log10_Expr_C12' => array(
                'name' => 's_Avg_log10_Expr_C12'
            ),
            'norm_counts_Avg_log10_Expr_C13' => array(
                'name' => 's_Avg_log10_Expr_C13'
            ),
            'norm_counts_Avg_log10_Expr_C14' => array(
                'name' => 's_Avg_log10_Expr_C14'
            ),
            'norm_counts_Avg_log10_Expr_C15' => array(
                'name' => 's_Avg_log10_Expr_C15'
            ),
            'norm_counts_Avg_log10_Expr_C16' => array(
                'name' => 's_Avg_log10_Expr_C16'
            ),
            'norm_counts_Avg_log10_Expr_C17' => array(
                'name' => 's_Avg_log10_Expr_C17'
            ),
            'norm_counts_Avg_log10_Expr_C2' => array(
                'name' => 's_Avg_log10_Expr_C2'
            ),
            'norm_counts_Avg_log10_Expr_C3' => array(
                'name' => 's_Avg_log10_Expr_C3'
            ),
            'norm_counts_Avg_log10_Expr_C4' => array(
                'name' => 's_Avg_log10_Expr_C4'
            ),
            'norm_counts_Avg_log10_Expr_C5' => array(
                'name' => 's_Avg_log10_Expr_C5'
            ),
            'norm_counts_Avg_log10_Expr_C6' => array(
                'name' => 's_Avg_log10_Expr_C6'
            ),
            'norm_counts_Avg_log10_Expr_C7' => array(
                'name' => 's_Avg_log10_Expr_C7'
            ),
            'norm_counts_Avg_log10_Expr_C8' => array(
                'name' => 's_Avg_log10_Expr_C8'
            ),
            'norm_counts_Avg_log10_Expr_C9' => array(
                'name' => 's_Avg_log10_Expr_C9'
            )
        )
    )
//End scatterplot
);
