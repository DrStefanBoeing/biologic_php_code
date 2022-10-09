<?php

return array(
    'public_access' => FALSE,
    'lab' => array(
        'name' => 'Hill DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'chl_data',
    'data_db' => array(
            'cat_table_name' => 'SC21185Cancer_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'SC21185Cancer_sc_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged Expr',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Avg_log10_Expr_C0_Control_R1' => array(
            'color' => '#F8766D',
            'name' => 'Avg_log10_Expr_C0_Control_R1'
        ),
        'norm_counts_Avg_log10_Expr_C0_Control_R2' => array(
            'color' => '#F8766D',
            'name' => 'Avg_log10_Expr_C0_Control_R2'
        ),
        'norm_counts_Avg_log10_Expr_C0_Control_R3' => array(
            'color' => '#F8766D',
            'name' => 'Avg_log10_Expr_C0_Control_R3'
        ),
        'norm_counts_Avg_log10_Expr_C0_MatB52_R1' => array(
            'color' => '#F8766D',
            'name' => 'Avg_log10_Expr_C0_MatB52_R1'
        ),
        'norm_counts_Avg_log10_Expr_C0_MatB52_R2' => array(
            'color' => '#F8766D',
            'name' => 'Avg_log10_Expr_C0_MatB52_R2'
        ),
        'norm_counts_Avg_log10_Expr_C0_MatB52_R3' => array(
            'color' => '#F8766D',
            'name' => 'Avg_log10_Expr_C0_MatB52_R3'
        ),
        'norm_counts_Avg_log10_Expr_C0_Regeneron_2' => array(
            'color' => '#F8766D',
            'name' => 'Avg_log10_Expr_C0_Regeneron_2'
        ),
        'norm_counts_Avg_log10_Expr_C0_Regeneron_3' => array(
            'color' => '#F8766D',
            'name' => 'Avg_log10_Expr_C0_Regeneron_3'
        ),
        'norm_counts_Avg_log10_Expr_C0_Regeneron_R1' => array(
            'color' => '#F8766D',
            'name' => 'Avg_log10_Expr_C0_Regeneron_R1'
        ),
        'norm_counts_Avg_log10_Expr_C1_Control_R1' => array(
            'color' => '#CD9600',
            'name' => 'Avg_log10_Expr_C1_Control_R1'
        ),
        'norm_counts_Avg_log10_Expr_C1_Control_R2' => array(
            'color' => '#CD9600',
            'name' => 'Avg_log10_Expr_C1_Control_R2'
        ),
        'norm_counts_Avg_log10_Expr_C1_Control_R3' => array(
            'color' => '#CD9600',
            'name' => 'Avg_log10_Expr_C1_Control_R3'
        ),
        'norm_counts_Avg_log10_Expr_C1_MatB52_R1' => array(
            'color' => '#CD9600',
            'name' => 'Avg_log10_Expr_C1_MatB52_R1'
        ),
        'norm_counts_Avg_log10_Expr_C1_MatB52_R2' => array(
            'color' => '#CD9600',
            'name' => 'Avg_log10_Expr_C1_MatB52_R2'
        ),
        'norm_counts_Avg_log10_Expr_C1_MatB52_R3' => array(
            'color' => '#CD9600',
            'name' => 'Avg_log10_Expr_C1_MatB52_R3'
        ),
        'norm_counts_Avg_log10_Expr_C1_Regeneron_2' => array(
            'color' => '#CD9600',
            'name' => 'Avg_log10_Expr_C1_Regeneron_2'
        ),
        'norm_counts_Avg_log10_Expr_C1_Regeneron_3' => array(
            'color' => '#CD9600',
            'name' => 'Avg_log10_Expr_C1_Regeneron_3'
        ),
        'norm_counts_Avg_log10_Expr_C1_Regeneron_R1' => array(
            'color' => '#CD9600',
            'name' => 'Avg_log10_Expr_C1_Regeneron_R1'
        ),
        'norm_counts_Avg_log10_Expr_C2_Control_R1' => array(
            'color' => '#7CAE00',
            'name' => 'Avg_log10_Expr_C2_Control_R1'
        ),
        'norm_counts_Avg_log10_Expr_C2_Control_R2' => array(
            'color' => '#7CAE00',
            'name' => 'Avg_log10_Expr_C2_Control_R2'
        ),
        'norm_counts_Avg_log10_Expr_C2_Control_R3' => array(
            'color' => '#7CAE00',
            'name' => 'Avg_log10_Expr_C2_Control_R3'
        ),
        'norm_counts_Avg_log10_Expr_C2_MatB52_R1' => array(
            'color' => '#7CAE00',
            'name' => 'Avg_log10_Expr_C2_MatB52_R1'
        ),
        'norm_counts_Avg_log10_Expr_C2_MatB52_R2' => array(
            'color' => '#7CAE00',
            'name' => 'Avg_log10_Expr_C2_MatB52_R2'
        ),
        'norm_counts_Avg_log10_Expr_C2_MatB52_R3' => array(
            'color' => '#7CAE00',
            'name' => 'Avg_log10_Expr_C2_MatB52_R3'
        ),
        'norm_counts_Avg_log10_Expr_C2_Regeneron_2' => array(
            'color' => '#7CAE00',
            'name' => 'Avg_log10_Expr_C2_Regeneron_2'
        ),
        'norm_counts_Avg_log10_Expr_C2_Regeneron_3' => array(
            'color' => '#7CAE00',
            'name' => 'Avg_log10_Expr_C2_Regeneron_3'
        ),
        'norm_counts_Avg_log10_Expr_C2_Regeneron_R1' => array(
            'color' => '#7CAE00',
            'name' => 'Avg_log10_Expr_C2_Regeneron_R1'
        ),
        'norm_counts_Avg_log10_Expr_C3_Control_R1' => array(
            'color' => '#00BE67',
            'name' => 'Avg_log10_Expr_C3_Control_R1'
        ),
        'norm_counts_Avg_log10_Expr_C3_Control_R2' => array(
            'color' => '#00BE67',
            'name' => 'Avg_log10_Expr_C3_Control_R2'
        ),
        'norm_counts_Avg_log10_Expr_C3_Control_R3' => array(
            'color' => '#00BE67',
            'name' => 'Avg_log10_Expr_C3_Control_R3'
        ),
        'norm_counts_Avg_log10_Expr_C3_MatB52_R1' => array(
            'color' => '#00BE67',
            'name' => 'Avg_log10_Expr_C3_MatB52_R1'
        ),
        'norm_counts_Avg_log10_Expr_C3_MatB52_R2' => array(
            'color' => '#00BE67',
            'name' => 'Avg_log10_Expr_C3_MatB52_R2'
        ),
        'norm_counts_Avg_log10_Expr_C3_MatB52_R3' => array(
            'color' => '#00BE67',
            'name' => 'Avg_log10_Expr_C3_MatB52_R3'
        ),
        'norm_counts_Avg_log10_Expr_C3_Regeneron_2' => array(
            'color' => '#00BE67',
            'name' => 'Avg_log10_Expr_C3_Regeneron_2'
        ),
        'norm_counts_Avg_log10_Expr_C3_Regeneron_3' => array(
            'color' => '#00BE67',
            'name' => 'Avg_log10_Expr_C3_Regeneron_3'
        ),
        'norm_counts_Avg_log10_Expr_C3_Regeneron_R1' => array(
            'color' => '#00BE67',
            'name' => 'Avg_log10_Expr_C3_Regeneron_R1'
        ),
        'norm_counts_Avg_log10_Expr_C4_Control_R1' => array(
            'color' => '#00BFC4',
            'name' => 'Avg_log10_Expr_C4_Control_R1'
        ),
        'norm_counts_Avg_log10_Expr_C4_Control_R2' => array(
            'color' => '#00BFC4',
            'name' => 'Avg_log10_Expr_C4_Control_R2'
        ),
        'norm_counts_Avg_log10_Expr_C4_Control_R3' => array(
            'color' => '#00BFC4',
            'name' => 'Avg_log10_Expr_C4_Control_R3'
        ),
        'norm_counts_Avg_log10_Expr_C4_MatB52_R1' => array(
            'color' => '#00BFC4',
            'name' => 'Avg_log10_Expr_C4_MatB52_R1'
        ),
        'norm_counts_Avg_log10_Expr_C4_MatB52_R2' => array(
            'color' => '#00BFC4',
            'name' => 'Avg_log10_Expr_C4_MatB52_R2'
        ),
        'norm_counts_Avg_log10_Expr_C4_MatB52_R3' => array(
            'color' => '#00BFC4',
            'name' => 'Avg_log10_Expr_C4_MatB52_R3'
        ),
        'norm_counts_Avg_log10_Expr_C4_Regeneron_2' => array(
            'color' => '#00BFC4',
            'name' => 'Avg_log10_Expr_C4_Regeneron_2'
        ),
        'norm_counts_Avg_log10_Expr_C4_Regeneron_3' => array(
            'color' => '#00BFC4',
            'name' => 'Avg_log10_Expr_C4_Regeneron_3'
        ),
        'norm_counts_Avg_log10_Expr_C4_Regeneron_R1' => array(
            'color' => '#00BFC4',
            'name' => 'Avg_log10_Expr_C4_Regeneron_R1'
        ),
        'norm_counts_Avg_log10_Expr_C5_Control_R1' => array(
            'color' => '#00A9FF',
            'name' => 'Avg_log10_Expr_C5_Control_R1'
        ),
        'norm_counts_Avg_log10_Expr_C5_Control_R2' => array(
            'color' => '#00A9FF',
            'name' => 'Avg_log10_Expr_C5_Control_R2'
        ),
        'norm_counts_Avg_log10_Expr_C5_Control_R3' => array(
            'color' => '#00A9FF',
            'name' => 'Avg_log10_Expr_C5_Control_R3'
        ),
        'norm_counts_Avg_log10_Expr_C5_MatB52_R1' => array(
            'color' => '#00A9FF',
            'name' => 'Avg_log10_Expr_C5_MatB52_R1'
        ),
        'norm_counts_Avg_log10_Expr_C5_MatB52_R2' => array(
            'color' => '#00A9FF',
            'name' => 'Avg_log10_Expr_C5_MatB52_R2'
        ),
        'norm_counts_Avg_log10_Expr_C5_MatB52_R3' => array(
            'color' => '#00A9FF',
            'name' => 'Avg_log10_Expr_C5_MatB52_R3'
        ),
        'norm_counts_Avg_log10_Expr_C5_Regeneron_2' => array(
            'color' => '#00A9FF',
            'name' => 'Avg_log10_Expr_C5_Regeneron_2'
        ),
        'norm_counts_Avg_log10_Expr_C5_Regeneron_3' => array(
            'color' => '#00A9FF',
            'name' => 'Avg_log10_Expr_C5_Regeneron_3'
        ),
        'norm_counts_Avg_log10_Expr_C5_Regeneron_R1' => array(
            'color' => '#00A9FF',
            'name' => 'Avg_log10_Expr_C5_Regeneron_R1'
        ),
        'norm_counts_Avg_log10_Expr_C6_Control_R1' => array(
            'color' => '#C77CFF',
            'name' => 'Avg_log10_Expr_C6_Control_R1'
        ),
        'norm_counts_Avg_log10_Expr_C6_Control_R2' => array(
            'color' => '#C77CFF',
            'name' => 'Avg_log10_Expr_C6_Control_R2'
        ),
        'norm_counts_Avg_log10_Expr_C6_Control_R3' => array(
            'color' => '#C77CFF',
            'name' => 'Avg_log10_Expr_C6_Control_R3'
        ),
        'norm_counts_Avg_log10_Expr_C6_MatB52_R1' => array(
            'color' => '#C77CFF',
            'name' => 'Avg_log10_Expr_C6_MatB52_R1'
        ),
        'norm_counts_Avg_log10_Expr_C6_MatB52_R2' => array(
            'color' => '#C77CFF',
            'name' => 'Avg_log10_Expr_C6_MatB52_R2'
        ),
        'norm_counts_Avg_log10_Expr_C6_MatB52_R3' => array(
            'color' => '#C77CFF',
            'name' => 'Avg_log10_Expr_C6_MatB52_R3'
        ),
        'norm_counts_Avg_log10_Expr_C6_Regeneron_2' => array(
            'color' => '#C77CFF',
            'name' => 'Avg_log10_Expr_C6_Regeneron_2'
        ),
        'norm_counts_Avg_log10_Expr_C6_Regeneron_3' => array(
            'color' => '#C77CFF',
            'name' => 'Avg_log10_Expr_C6_Regeneron_3'
        ),
        'norm_counts_Avg_log10_Expr_C6_Regeneron_R1' => array(
            'color' => '#C77CFF',
            'name' => 'Avg_log10_Expr_C6_Regeneron_R1'
        ),
        'norm_counts_Avg_log10_Expr_C7_MatB52_R1' => array(
            'color' => '#FF61CC',
            'name' => 'Avg_log10_Expr_C7_MatB52_R1'
        ),
        'norm_counts_Avg_log10_Expr_C7_MatB52_R2' => array(
            'color' => '#FF61CC',
            'name' => 'Avg_log10_Expr_C7_MatB52_R2'
        ),
        'norm_counts_Avg_log10_Expr_C7_MatB52_R3' => array(
            'color' => '#FF61CC',
            'name' => 'Avg_log10_Expr_C7_MatB52_R3'
        ),
        'norm_counts_Avg_log10_Expr_C7_Regeneron_3' => array(
            'color' => '#FF61CC',
            'name' => 'Avg_log10_Expr_C7_Regeneron_3'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'lg10 Expr for all Samples',
        'sidelabel' => 'lg10 Expr'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Avg_log10_Expr_Sc_C0_Control_R1','lg2_avg_Avg_log10_Expr_Sc_C0_Control_R2','lg2_avg_Avg_log10_Expr_Sc_C0_Control_R3','lg2_avg_Avg_log10_Expr_Sc_C0_MatB52_R1','lg2_avg_Avg_log10_Expr_Sc_C0_MatB52_R2','lg2_avg_Avg_log10_Expr_Sc_C0_MatB52_R3','lg2_avg_Avg_log10_Expr_Sc_C0_Regeneron_2','lg2_avg_Avg_log10_Expr_Sc_C0_Regeneron_3','lg2_avg_Avg_log10_Expr_Sc_C0_Regeneron_R1','lg2_avg_Avg_log10_Expr_Sc_C1_Control_R1','lg2_avg_Avg_log10_Expr_Sc_C1_Control_R2','lg2_avg_Avg_log10_Expr_Sc_C1_Control_R3','lg2_avg_Avg_log10_Expr_Sc_C1_MatB52_R1','lg2_avg_Avg_log10_Expr_Sc_C1_MatB52_R2','lg2_avg_Avg_log10_Expr_Sc_C1_MatB52_R3','lg2_avg_Avg_log10_Expr_Sc_C1_Regeneron_2','lg2_avg_Avg_log10_Expr_Sc_C1_Regeneron_3','lg2_avg_Avg_log10_Expr_Sc_C1_Regeneron_R1','lg2_avg_Avg_log10_Expr_Sc_C2_Control_R1','lg2_avg_Avg_log10_Expr_Sc_C2_Control_R2','lg2_avg_Avg_log10_Expr_Sc_C2_Control_R3','lg2_avg_Avg_log10_Expr_Sc_C2_MatB52_R1','lg2_avg_Avg_log10_Expr_Sc_C2_MatB52_R2','lg2_avg_Avg_log10_Expr_Sc_C2_MatB52_R3','lg2_avg_Avg_log10_Expr_Sc_C2_Regeneron_2','lg2_avg_Avg_log10_Expr_Sc_C2_Regeneron_3','lg2_avg_Avg_log10_Expr_Sc_C2_Regeneron_R1','lg2_avg_Avg_log10_Expr_Sc_C3_Control_R1','lg2_avg_Avg_log10_Expr_Sc_C3_Control_R2','lg2_avg_Avg_log10_Expr_Sc_C3_Control_R3','lg2_avg_Avg_log10_Expr_Sc_C3_MatB52_R1','lg2_avg_Avg_log10_Expr_Sc_C3_MatB52_R2','lg2_avg_Avg_log10_Expr_Sc_C3_MatB52_R3','lg2_avg_Avg_log10_Expr_Sc_C3_Regeneron_2','lg2_avg_Avg_log10_Expr_Sc_C3_Regeneron_3','lg2_avg_Avg_log10_Expr_Sc_C3_Regeneron_R1','lg2_avg_Avg_log10_Expr_Sc_C4_Control_R1','lg2_avg_Avg_log10_Expr_Sc_C4_Control_R2','lg2_avg_Avg_log10_Expr_Sc_C4_Control_R3','lg2_avg_Avg_log10_Expr_Sc_C4_MatB52_R1','lg2_avg_Avg_log10_Expr_Sc_C4_MatB52_R2','lg2_avg_Avg_log10_Expr_Sc_C4_MatB52_R3','lg2_avg_Avg_log10_Expr_Sc_C4_Regeneron_2','lg2_avg_Avg_log10_Expr_Sc_C4_Regeneron_3','lg2_avg_Avg_log10_Expr_Sc_C4_Regeneron_R1','lg2_avg_Avg_log10_Expr_Sc_C5_Control_R1','lg2_avg_Avg_log10_Expr_Sc_C5_Control_R2','lg2_avg_Avg_log10_Expr_Sc_C5_Control_R3','lg2_avg_Avg_log10_Expr_Sc_C5_MatB52_R1','lg2_avg_Avg_log10_Expr_Sc_C5_MatB52_R2','lg2_avg_Avg_log10_Expr_Sc_C5_MatB52_R3','lg2_avg_Avg_log10_Expr_Sc_C5_Regeneron_2','lg2_avg_Avg_log10_Expr_Sc_C5_Regeneron_3','lg2_avg_Avg_log10_Expr_Sc_C5_Regeneron_R1','lg2_avg_Avg_log10_Expr_Sc_C6_Control_R1','lg2_avg_Avg_log10_Expr_Sc_C6_Control_R2','lg2_avg_Avg_log10_Expr_Sc_C6_Control_R3','lg2_avg_Avg_log10_Expr_Sc_C6_MatB52_R1','lg2_avg_Avg_log10_Expr_Sc_C6_MatB52_R2','lg2_avg_Avg_log10_Expr_Sc_C6_MatB52_R3','lg2_avg_Avg_log10_Expr_Sc_C6_Regeneron_2','lg2_avg_Avg_log10_Expr_Sc_C6_Regeneron_3','lg2_avg_Avg_log10_Expr_Sc_C6_Regeneron_R1','lg2_avg_Avg_log10_Expr_Sc_C7_MatB52_R1','lg2_avg_Avg_log10_Expr_Sc_C7_MatB52_R2','lg2_avg_Avg_log10_Expr_Sc_C7_MatB52_R3','lg2_avg_Avg_log10_Expr_Sc_C7_Regeneron_3'),

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
        'contrast_1_logFC_DGE_CC_Regeneron_vs_CC_Ctrl' => array(
            'name' => 'logFC_DGE_CC_Regeneron_vs_CC_Ctrl',
            'slider_min' => -5,
            'slider_max' => 6,
            'default_low' => -5,
            'default_high' => 6
        ),
        'contrast_2_logFC_DGE_CC_MatB52_vs_CC_Ctrl' => array(
            'name' => 'logFC_DGE_CC_MatB52_vs_CC_Ctrl',
            'slider_min' => -5,
            'slider_max' => 7,
            'default_low' => -5,
            'default_high' => 7
        ),
        'contrast_3_logFC_DGE_CC_Regeneron_vs_CC_MatB52' => array(
            'name' => 'logFC_DGE_CC_Regeneron_vs_CC_MatB52',
            'slider_min' => -6,
            'slider_max' => 5,
            'default_low' => -6,
            'default_high' => 5
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
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_counts_C2_Residuals' => array(
            'name' => 'C2_Residuals',
            'slider_min' => -2,
            'slider_max' => 1,
            'default_low' => -2,
            'default_high' => 1
        ),
        'add_counts_C3_Residuals' => array(
            'name' => 'C3_Residuals',
            'slider_min' => -1,
            'slider_max' => 2,
            'default_low' => -1,
            'default_high' => 2
        ),
        'add_counts_C4_Residuals' => array(
            'name' => 'C4_Residuals',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_counts_C5_Residuals' => array(
            'name' => 'C5_Residuals',
            'slider_min' => -1,
            'slider_max' => 2,
            'default_low' => -1,
            'default_high' => 2
        ),
        'add_counts_C6_Residuals' => array(
            'name' => 'C6_Residuals',
            'slider_min' => -1,
            'slider_max' => 3,
            'default_low' => -1,
            'default_high' => 3
        ),
        'add_counts_C7_Residuals' => array(
            'name' => 'C7_Residuals',
            'slider_min' => -2,
            'slider_max' => 3,
            'default_low' => -2,
            'default_high' => 3
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'SC21185Cancer_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'add_counts_Avg_log10_Expr_all',
        'default-y' => 'norm_counts_Avg_log10_Expr_C0_Control_R1',
        'selection' => array(
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg_log10_Expr_all'
            ),
            'norm_counts_Avg_log10_Expr_C0_Control_R1' => array(
                'name' => 's_Avg_log10_Expr_C0_Control_R1'
            ),
            'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
                'name' => 'logFC_Expressed_in_N_Percent_Cells'
            ),
            'contrast_1_logFC_DGE_CC_Regeneron_vs_CC_Ctrl' => array(
                'name' => 'logFC_DGE_CC_Regeneron_vs_CC_Ctrl'
            ),
            'contrast_2_logFC_DGE_CC_MatB52_vs_CC_Ctrl' => array(
                'name' => 'logFC_DGE_CC_MatB52_vs_CC_Ctrl'
            ),
            'contrast_3_logFC_DGE_CC_Regeneron_vs_CC_MatB52' => array(
                'name' => 'logFC_DGE_CC_Regeneron_vs_CC_MatB52'
            ),
            'contrast_1_lg10p_DGE_CC_Regeneron_vs_CC_Ctrl' => array(
                'name' => 'lg10p_DGE_CC_Regeneron_vs_CC_Ctrl'
            ),
            'contrast_2_lg10p_DGE_CC_MatB52_vs_CC_Ctrl' => array(
                'name' => 'lg10p_DGE_CC_MatB52_vs_CC_Ctrl'
            ),
            'contrast_3_lg10p_DGE_CC_Regeneron_vs_CC_MatB52' => array(
                'name' => 'lg10p_DGE_CC_Regeneron_vs_CC_MatB52'
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
            'add_counts_Avg_log10_Expr_Control_R1' => array(
                'name' => 'Avg_log10_Expr_Control_R1'
            ),
            'add_counts_Avg_log10_Expr_Control_R2' => array(
                'name' => 'Avg_log10_Expr_Control_R2'
            ),
            'add_counts_Avg_log10_Expr_Control_R3' => array(
                'name' => 'Avg_log10_Expr_Control_R3'
            ),
            'add_counts_Avg_log10_Expr_MatB52_R1' => array(
                'name' => 'Avg_log10_Expr_MatB52_R1'
            ),
            'add_counts_Avg_log10_Expr_MatB52_R2' => array(
                'name' => 'Avg_log10_Expr_MatB52_R2'
            ),
            'add_counts_Avg_log10_Expr_MatB52_R3' => array(
                'name' => 'Avg_log10_Expr_MatB52_R3'
            ),
            'add_counts_Avg_log10_Expr_Regeneron_2' => array(
                'name' => 'Avg_log10_Expr_Regeneron_2'
            ),
            'add_counts_Avg_log10_Expr_Regeneron_3' => array(
                'name' => 'Avg_log10_Expr_Regeneron_3'
            ),
            'add_counts_Avg_log10_Expr_Regeneron_R1' => array(
                'name' => 'Avg_log10_Expr_Regeneron_R1'
            ),
            'norm_counts_Avg_log10_Expr_C0_Control_R1' => array(
                'name' => 's_Avg_log10_Expr_C0_Control_R1'
            ),
            'norm_counts_Avg_log10_Expr_C0_Control_R2' => array(
                'name' => 's_Avg_log10_Expr_C0_Control_R2'
            ),
            'norm_counts_Avg_log10_Expr_C0_Control_R3' => array(
                'name' => 's_Avg_log10_Expr_C0_Control_R3'
            ),
            'norm_counts_Avg_log10_Expr_C0_MatB52_R1' => array(
                'name' => 's_Avg_log10_Expr_C0_MatB52_R1'
            ),
            'norm_counts_Avg_log10_Expr_C0_MatB52_R2' => array(
                'name' => 's_Avg_log10_Expr_C0_MatB52_R2'
            ),
            'norm_counts_Avg_log10_Expr_C0_MatB52_R3' => array(
                'name' => 's_Avg_log10_Expr_C0_MatB52_R3'
            ),
            'norm_counts_Avg_log10_Expr_C0_Regeneron_2' => array(
                'name' => 's_Avg_log10_Expr_C0_Regeneron_2'
            ),
            'norm_counts_Avg_log10_Expr_C0_Regeneron_3' => array(
                'name' => 's_Avg_log10_Expr_C0_Regeneron_3'
            ),
            'norm_counts_Avg_log10_Expr_C0_Regeneron_R1' => array(
                'name' => 's_Avg_log10_Expr_C0_Regeneron_R1'
            ),
            'norm_counts_Avg_log10_Expr_C1_Control_R1' => array(
                'name' => 's_Avg_log10_Expr_C1_Control_R1'
            ),
            'norm_counts_Avg_log10_Expr_C1_Control_R2' => array(
                'name' => 's_Avg_log10_Expr_C1_Control_R2'
            ),
            'norm_counts_Avg_log10_Expr_C1_Control_R3' => array(
                'name' => 's_Avg_log10_Expr_C1_Control_R3'
            ),
            'norm_counts_Avg_log10_Expr_C1_MatB52_R1' => array(
                'name' => 's_Avg_log10_Expr_C1_MatB52_R1'
            ),
            'norm_counts_Avg_log10_Expr_C1_MatB52_R2' => array(
                'name' => 's_Avg_log10_Expr_C1_MatB52_R2'
            ),
            'norm_counts_Avg_log10_Expr_C1_MatB52_R3' => array(
                'name' => 's_Avg_log10_Expr_C1_MatB52_R3'
            ),
            'norm_counts_Avg_log10_Expr_C1_Regeneron_2' => array(
                'name' => 's_Avg_log10_Expr_C1_Regeneron_2'
            ),
            'norm_counts_Avg_log10_Expr_C1_Regeneron_3' => array(
                'name' => 's_Avg_log10_Expr_C1_Regeneron_3'
            ),
            'norm_counts_Avg_log10_Expr_C1_Regeneron_R1' => array(
                'name' => 's_Avg_log10_Expr_C1_Regeneron_R1'
            ),
            'norm_counts_Avg_log10_Expr_C2_Control_R1' => array(
                'name' => 's_Avg_log10_Expr_C2_Control_R1'
            ),
            'norm_counts_Avg_log10_Expr_C2_Control_R2' => array(
                'name' => 's_Avg_log10_Expr_C2_Control_R2'
            ),
            'norm_counts_Avg_log10_Expr_C2_Control_R3' => array(
                'name' => 's_Avg_log10_Expr_C2_Control_R3'
            ),
            'norm_counts_Avg_log10_Expr_C2_MatB52_R1' => array(
                'name' => 's_Avg_log10_Expr_C2_MatB52_R1'
            ),
            'norm_counts_Avg_log10_Expr_C2_MatB52_R2' => array(
                'name' => 's_Avg_log10_Expr_C2_MatB52_R2'
            ),
            'norm_counts_Avg_log10_Expr_C2_MatB52_R3' => array(
                'name' => 's_Avg_log10_Expr_C2_MatB52_R3'
            ),
            'norm_counts_Avg_log10_Expr_C2_Regeneron_2' => array(
                'name' => 's_Avg_log10_Expr_C2_Regeneron_2'
            ),
            'norm_counts_Avg_log10_Expr_C2_Regeneron_3' => array(
                'name' => 's_Avg_log10_Expr_C2_Regeneron_3'
            ),
            'norm_counts_Avg_log10_Expr_C2_Regeneron_R1' => array(
                'name' => 's_Avg_log10_Expr_C2_Regeneron_R1'
            ),
            'norm_counts_Avg_log10_Expr_C3_Control_R1' => array(
                'name' => 's_Avg_log10_Expr_C3_Control_R1'
            ),
            'norm_counts_Avg_log10_Expr_C3_Control_R2' => array(
                'name' => 's_Avg_log10_Expr_C3_Control_R2'
            ),
            'norm_counts_Avg_log10_Expr_C3_Control_R3' => array(
                'name' => 's_Avg_log10_Expr_C3_Control_R3'
            ),
            'norm_counts_Avg_log10_Expr_C3_MatB52_R1' => array(
                'name' => 's_Avg_log10_Expr_C3_MatB52_R1'
            ),
            'norm_counts_Avg_log10_Expr_C3_MatB52_R2' => array(
                'name' => 's_Avg_log10_Expr_C3_MatB52_R2'
            ),
            'norm_counts_Avg_log10_Expr_C3_MatB52_R3' => array(
                'name' => 's_Avg_log10_Expr_C3_MatB52_R3'
            ),
            'norm_counts_Avg_log10_Expr_C3_Regeneron_2' => array(
                'name' => 's_Avg_log10_Expr_C3_Regeneron_2'
            ),
            'norm_counts_Avg_log10_Expr_C3_Regeneron_3' => array(
                'name' => 's_Avg_log10_Expr_C3_Regeneron_3'
            ),
            'norm_counts_Avg_log10_Expr_C3_Regeneron_R1' => array(
                'name' => 's_Avg_log10_Expr_C3_Regeneron_R1'
            ),
            'norm_counts_Avg_log10_Expr_C4_Control_R1' => array(
                'name' => 's_Avg_log10_Expr_C4_Control_R1'
            ),
            'norm_counts_Avg_log10_Expr_C4_Control_R2' => array(
                'name' => 's_Avg_log10_Expr_C4_Control_R2'
            ),
            'norm_counts_Avg_log10_Expr_C4_Control_R3' => array(
                'name' => 's_Avg_log10_Expr_C4_Control_R3'
            ),
            'norm_counts_Avg_log10_Expr_C4_MatB52_R1' => array(
                'name' => 's_Avg_log10_Expr_C4_MatB52_R1'
            ),
            'norm_counts_Avg_log10_Expr_C4_MatB52_R2' => array(
                'name' => 's_Avg_log10_Expr_C4_MatB52_R2'
            ),
            'norm_counts_Avg_log10_Expr_C4_MatB52_R3' => array(
                'name' => 's_Avg_log10_Expr_C4_MatB52_R3'
            ),
            'norm_counts_Avg_log10_Expr_C4_Regeneron_2' => array(
                'name' => 's_Avg_log10_Expr_C4_Regeneron_2'
            ),
            'norm_counts_Avg_log10_Expr_C4_Regeneron_3' => array(
                'name' => 's_Avg_log10_Expr_C4_Regeneron_3'
            ),
            'norm_counts_Avg_log10_Expr_C4_Regeneron_R1' => array(
                'name' => 's_Avg_log10_Expr_C4_Regeneron_R1'
            ),
            'norm_counts_Avg_log10_Expr_C5_Control_R1' => array(
                'name' => 's_Avg_log10_Expr_C5_Control_R1'
            ),
            'norm_counts_Avg_log10_Expr_C5_Control_R2' => array(
                'name' => 's_Avg_log10_Expr_C5_Control_R2'
            ),
            'norm_counts_Avg_log10_Expr_C5_Control_R3' => array(
                'name' => 's_Avg_log10_Expr_C5_Control_R3'
            ),
            'norm_counts_Avg_log10_Expr_C5_MatB52_R1' => array(
                'name' => 's_Avg_log10_Expr_C5_MatB52_R1'
            ),
            'norm_counts_Avg_log10_Expr_C5_MatB52_R2' => array(
                'name' => 's_Avg_log10_Expr_C5_MatB52_R2'
            ),
            'norm_counts_Avg_log10_Expr_C5_MatB52_R3' => array(
                'name' => 's_Avg_log10_Expr_C5_MatB52_R3'
            ),
            'norm_counts_Avg_log10_Expr_C5_Regeneron_2' => array(
                'name' => 's_Avg_log10_Expr_C5_Regeneron_2'
            ),
            'norm_counts_Avg_log10_Expr_C5_Regeneron_3' => array(
                'name' => 's_Avg_log10_Expr_C5_Regeneron_3'
            ),
            'norm_counts_Avg_log10_Expr_C5_Regeneron_R1' => array(
                'name' => 's_Avg_log10_Expr_C5_Regeneron_R1'
            ),
            'norm_counts_Avg_log10_Expr_C6_Control_R1' => array(
                'name' => 's_Avg_log10_Expr_C6_Control_R1'
            ),
            'norm_counts_Avg_log10_Expr_C6_Control_R2' => array(
                'name' => 's_Avg_log10_Expr_C6_Control_R2'
            ),
            'norm_counts_Avg_log10_Expr_C6_Control_R3' => array(
                'name' => 's_Avg_log10_Expr_C6_Control_R3'
            ),
            'norm_counts_Avg_log10_Expr_C6_MatB52_R1' => array(
                'name' => 's_Avg_log10_Expr_C6_MatB52_R1'
            ),
            'norm_counts_Avg_log10_Expr_C6_MatB52_R2' => array(
                'name' => 's_Avg_log10_Expr_C6_MatB52_R2'
            ),
            'norm_counts_Avg_log10_Expr_C6_MatB52_R3' => array(
                'name' => 's_Avg_log10_Expr_C6_MatB52_R3'
            ),
            'norm_counts_Avg_log10_Expr_C6_Regeneron_2' => array(
                'name' => 's_Avg_log10_Expr_C6_Regeneron_2'
            ),
            'norm_counts_Avg_log10_Expr_C6_Regeneron_3' => array(
                'name' => 's_Avg_log10_Expr_C6_Regeneron_3'
            ),
            'norm_counts_Avg_log10_Expr_C6_Regeneron_R1' => array(
                'name' => 's_Avg_log10_Expr_C6_Regeneron_R1'
            ),
            'norm_counts_Avg_log10_Expr_C7_MatB52_R1' => array(
                'name' => 's_Avg_log10_Expr_C7_MatB52_R1'
            ),
            'norm_counts_Avg_log10_Expr_C7_MatB52_R2' => array(
                'name' => 's_Avg_log10_Expr_C7_MatB52_R2'
            ),
            'norm_counts_Avg_log10_Expr_C7_MatB52_R3' => array(
                'name' => 's_Avg_log10_Expr_C7_MatB52_R3'
            ),
            'norm_counts_Avg_log10_Expr_C7_Regeneron_3' => array(
                'name' => 's_Avg_log10_Expr_C7_Regeneron_3'
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
            )
        )
    )
//End scatterplot
);
