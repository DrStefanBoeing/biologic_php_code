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
            'cat_table_name' => 'ptl486_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'ptl486_sc_rna_seq_table',
    'primary_gene_symbol' => 'hgnc_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged Expr',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Avg_log10_Expr_C0_Epi10_14_R2' => array(
            'color' => '#F8766D',
            'name' => 'Avg_log10_Expr_C0_Epi10_14_R2'
        ),
        'norm_counts_Avg_log10_Expr_C0_Epi10_R1' => array(
            'color' => '#F8766D',
            'name' => 'Avg_log10_Expr_C0_Epi10_R1'
        ),
        'norm_counts_Avg_log10_Expr_C0_Epi14_R1' => array(
            'color' => '#F8766D',
            'name' => 'Avg_log10_Expr_C0_Epi14_R1'
        ),
        'norm_counts_Avg_log10_Expr_C0_Epi6_10_R2' => array(
            'color' => '#F8766D',
            'name' => 'Avg_log10_Expr_C0_Epi6_10_R2'
        ),
        'norm_counts_Avg_log10_Expr_C0_Epi6_R1' => array(
            'color' => '#F8766D',
            'name' => 'Avg_log10_Expr_C0_Epi6_R1'
        ),
        'norm_counts_Avg_log10_Expr_C0_Epi7_R1' => array(
            'color' => '#F8766D',
            'name' => 'Avg_log10_Expr_C0_Epi7_R1'
        ),
        'norm_counts_Avg_log10_Expr_C1_Epi10_14_R2' => array(
            'color' => '#E18A00',
            'name' => 'Avg_log10_Expr_C1_Epi10_14_R2'
        ),
        'norm_counts_Avg_log10_Expr_C1_Epi10_R1' => array(
            'color' => '#E18A00',
            'name' => 'Avg_log10_Expr_C1_Epi10_R1'
        ),
        'norm_counts_Avg_log10_Expr_C1_Epi14_R1' => array(
            'color' => '#E18A00',
            'name' => 'Avg_log10_Expr_C1_Epi14_R1'
        ),
        'norm_counts_Avg_log10_Expr_C1_Epi6_10_R2' => array(
            'color' => '#E18A00',
            'name' => 'Avg_log10_Expr_C1_Epi6_10_R2'
        ),
        'norm_counts_Avg_log10_Expr_C1_Epi6_R1' => array(
            'color' => '#E18A00',
            'name' => 'Avg_log10_Expr_C1_Epi6_R1'
        ),
        'norm_counts_Avg_log10_Expr_C1_Epi7_R1' => array(
            'color' => '#E18A00',
            'name' => 'Avg_log10_Expr_C1_Epi7_R1'
        ),
        'norm_counts_Avg_log10_Expr_C10_Epi10_14_R2' => array(
            'color' => '#E18A00',
            'name' => 'Avg_log10_Expr_C10_Epi10_14_R2'
        ),
        'norm_counts_Avg_log10_Expr_C10_Epi10_R1' => array(
            'color' => '#E18A00',
            'name' => 'Avg_log10_Expr_C10_Epi10_R1'
        ),
        'norm_counts_Avg_log10_Expr_C10_Epi14_R1' => array(
            'color' => '#E18A00',
            'name' => 'Avg_log10_Expr_C10_Epi14_R1'
        ),
        'norm_counts_Avg_log10_Expr_C10_Epi6_10_R2' => array(
            'color' => '#E18A00',
            'name' => 'Avg_log10_Expr_C10_Epi6_10_R2'
        ),
        'norm_counts_Avg_log10_Expr_C10_Epi6_R1' => array(
            'color' => '#E18A00',
            'name' => 'Avg_log10_Expr_C10_Epi6_R1'
        ),
        'norm_counts_Avg_log10_Expr_C10_Epi7_R1' => array(
            'color' => '#E18A00',
            'name' => 'Avg_log10_Expr_C10_Epi7_R1'
        ),
        'norm_counts_Avg_log10_Expr_C11_Epi10_14_R2' => array(
            'color' => '#E18A00',
            'name' => 'Avg_log10_Expr_C11_Epi10_14_R2'
        ),
        'norm_counts_Avg_log10_Expr_C11_Epi10_R1' => array(
            'color' => '#E18A00',
            'name' => 'Avg_log10_Expr_C11_Epi10_R1'
        ),
        'norm_counts_Avg_log10_Expr_C11_Epi14_R1' => array(
            'color' => '#E18A00',
            'name' => 'Avg_log10_Expr_C11_Epi14_R1'
        ),
        'norm_counts_Avg_log10_Expr_C11_Epi6_10_R2' => array(
            'color' => '#E18A00',
            'name' => 'Avg_log10_Expr_C11_Epi6_10_R2'
        ),
        'norm_counts_Avg_log10_Expr_C11_Epi6_R1' => array(
            'color' => '#E18A00',
            'name' => 'Avg_log10_Expr_C11_Epi6_R1'
        ),
        'norm_counts_Avg_log10_Expr_C11_Epi7_R1' => array(
            'color' => '#E18A00',
            'name' => 'Avg_log10_Expr_C11_Epi7_R1'
        ),
        'norm_counts_Avg_log10_Expr_C12_Epi10_R1' => array(
            'color' => '#E18A00',
            'name' => 'Avg_log10_Expr_C12_Epi10_R1'
        ),
        'norm_counts_Avg_log10_Expr_C12_Epi6_10_R2' => array(
            'color' => '#E18A00',
            'name' => 'Avg_log10_Expr_C12_Epi6_10_R2'
        ),
        'norm_counts_Avg_log10_Expr_C12_Epi6_R1' => array(
            'color' => '#E18A00',
            'name' => 'Avg_log10_Expr_C12_Epi6_R1'
        ),
        'norm_counts_Avg_log10_Expr_C12_Epi7_R1' => array(
            'color' => '#E18A00',
            'name' => 'Avg_log10_Expr_C12_Epi7_R1'
        ),
        'norm_counts_Avg_log10_Expr_C2_Epi10_14_R2' => array(
            'color' => '#00BE70',
            'name' => 'Avg_log10_Expr_C2_Epi10_14_R2'
        ),
        'norm_counts_Avg_log10_Expr_C2_Epi10_R1' => array(
            'color' => '#00BE70',
            'name' => 'Avg_log10_Expr_C2_Epi10_R1'
        ),
        'norm_counts_Avg_log10_Expr_C2_Epi14_R1' => array(
            'color' => '#00BE70',
            'name' => 'Avg_log10_Expr_C2_Epi14_R1'
        ),
        'norm_counts_Avg_log10_Expr_C2_Epi6_10_R2' => array(
            'color' => '#00BE70',
            'name' => 'Avg_log10_Expr_C2_Epi6_10_R2'
        ),
        'norm_counts_Avg_log10_Expr_C2_Epi6_R1' => array(
            'color' => '#00BE70',
            'name' => 'Avg_log10_Expr_C2_Epi6_R1'
        ),
        'norm_counts_Avg_log10_Expr_C2_Epi7_R1' => array(
            'color' => '#00BE70',
            'name' => 'Avg_log10_Expr_C2_Epi7_R1'
        ),
        'norm_counts_Avg_log10_Expr_C3_Epi10_14_R2' => array(
            'color' => '#00C1AB',
            'name' => 'Avg_log10_Expr_C3_Epi10_14_R2'
        ),
        'norm_counts_Avg_log10_Expr_C3_Epi10_R1' => array(
            'color' => '#00C1AB',
            'name' => 'Avg_log10_Expr_C3_Epi10_R1'
        ),
        'norm_counts_Avg_log10_Expr_C3_Epi14_R1' => array(
            'color' => '#00C1AB',
            'name' => 'Avg_log10_Expr_C3_Epi14_R1'
        ),
        'norm_counts_Avg_log10_Expr_C3_Epi6_10_R2' => array(
            'color' => '#00C1AB',
            'name' => 'Avg_log10_Expr_C3_Epi6_10_R2'
        ),
        'norm_counts_Avg_log10_Expr_C3_Epi6_R1' => array(
            'color' => '#00C1AB',
            'name' => 'Avg_log10_Expr_C3_Epi6_R1'
        ),
        'norm_counts_Avg_log10_Expr_C3_Epi7_R1' => array(
            'color' => '#00C1AB',
            'name' => 'Avg_log10_Expr_C3_Epi7_R1'
        ),
        'norm_counts_Avg_log10_Expr_C4_Epi10_14_R2' => array(
            'color' => '#00BBDA',
            'name' => 'Avg_log10_Expr_C4_Epi10_14_R2'
        ),
        'norm_counts_Avg_log10_Expr_C4_Epi10_R1' => array(
            'color' => '#00BBDA',
            'name' => 'Avg_log10_Expr_C4_Epi10_R1'
        ),
        'norm_counts_Avg_log10_Expr_C4_Epi14_R1' => array(
            'color' => '#00BBDA',
            'name' => 'Avg_log10_Expr_C4_Epi14_R1'
        ),
        'norm_counts_Avg_log10_Expr_C4_Epi6_10_R2' => array(
            'color' => '#00BBDA',
            'name' => 'Avg_log10_Expr_C4_Epi6_10_R2'
        ),
        'norm_counts_Avg_log10_Expr_C4_Epi6_R1' => array(
            'color' => '#00BBDA',
            'name' => 'Avg_log10_Expr_C4_Epi6_R1'
        ),
        'norm_counts_Avg_log10_Expr_C4_Epi7_R1' => array(
            'color' => '#00BBDA',
            'name' => 'Avg_log10_Expr_C4_Epi7_R1'
        ),
        'norm_counts_Avg_log10_Expr_C5_Epi10_R1' => array(
            'color' => '#00ACFC',
            'name' => 'Avg_log10_Expr_C5_Epi10_R1'
        ),
        'norm_counts_Avg_log10_Expr_C5_Epi6_10_R2' => array(
            'color' => '#00ACFC',
            'name' => 'Avg_log10_Expr_C5_Epi6_10_R2'
        ),
        'norm_counts_Avg_log10_Expr_C5_Epi6_R1' => array(
            'color' => '#00ACFC',
            'name' => 'Avg_log10_Expr_C5_Epi6_R1'
        ),
        'norm_counts_Avg_log10_Expr_C5_Epi7_R1' => array(
            'color' => '#00ACFC',
            'name' => 'Avg_log10_Expr_C5_Epi7_R1'
        ),
        'norm_counts_Avg_log10_Expr_C6_Epi10_14_R2' => array(
            'color' => '#8B93FF',
            'name' => 'Avg_log10_Expr_C6_Epi10_14_R2'
        ),
        'norm_counts_Avg_log10_Expr_C6_Epi10_R1' => array(
            'color' => '#8B93FF',
            'name' => 'Avg_log10_Expr_C6_Epi10_R1'
        ),
        'norm_counts_Avg_log10_Expr_C6_Epi6_10_R2' => array(
            'color' => '#8B93FF',
            'name' => 'Avg_log10_Expr_C6_Epi6_10_R2'
        ),
        'norm_counts_Avg_log10_Expr_C6_Epi6_R1' => array(
            'color' => '#8B93FF',
            'name' => 'Avg_log10_Expr_C6_Epi6_R1'
        ),
        'norm_counts_Avg_log10_Expr_C6_Epi7_R1' => array(
            'color' => '#8B93FF',
            'name' => 'Avg_log10_Expr_C6_Epi7_R1'
        ),
        'norm_counts_Avg_log10_Expr_C7_Epi10_14_R2' => array(
            'color' => '#D575FE',
            'name' => 'Avg_log10_Expr_C7_Epi10_14_R2'
        ),
        'norm_counts_Avg_log10_Expr_C7_Epi10_R1' => array(
            'color' => '#D575FE',
            'name' => 'Avg_log10_Expr_C7_Epi10_R1'
        ),
        'norm_counts_Avg_log10_Expr_C7_Epi14_R1' => array(
            'color' => '#D575FE',
            'name' => 'Avg_log10_Expr_C7_Epi14_R1'
        ),
        'norm_counts_Avg_log10_Expr_C7_Epi6_10_R2' => array(
            'color' => '#D575FE',
            'name' => 'Avg_log10_Expr_C7_Epi6_10_R2'
        ),
        'norm_counts_Avg_log10_Expr_C7_Epi6_R1' => array(
            'color' => '#D575FE',
            'name' => 'Avg_log10_Expr_C7_Epi6_R1'
        ),
        'norm_counts_Avg_log10_Expr_C7_Epi7_R1' => array(
            'color' => '#D575FE',
            'name' => 'Avg_log10_Expr_C7_Epi7_R1'
        ),
        'norm_counts_Avg_log10_Expr_C8_Epi10_14_R2' => array(
            'color' => '#F962DD',
            'name' => 'Avg_log10_Expr_C8_Epi10_14_R2'
        ),
        'norm_counts_Avg_log10_Expr_C8_Epi10_R1' => array(
            'color' => '#F962DD',
            'name' => 'Avg_log10_Expr_C8_Epi10_R1'
        ),
        'norm_counts_Avg_log10_Expr_C8_Epi6_10_R2' => array(
            'color' => '#F962DD',
            'name' => 'Avg_log10_Expr_C8_Epi6_10_R2'
        ),
        'norm_counts_Avg_log10_Expr_C8_Epi6_R1' => array(
            'color' => '#F962DD',
            'name' => 'Avg_log10_Expr_C8_Epi6_R1'
        ),
        'norm_counts_Avg_log10_Expr_C8_Epi7_R1' => array(
            'color' => '#F962DD',
            'name' => 'Avg_log10_Expr_C8_Epi7_R1'
        ),
        'norm_counts_Avg_log10_Expr_C9_Epi10_14_R2' => array(
            'color' => '#FF65AC',
            'name' => 'Avg_log10_Expr_C9_Epi10_14_R2'
        ),
        'norm_counts_Avg_log10_Expr_C9_Epi10_R1' => array(
            'color' => '#FF65AC',
            'name' => 'Avg_log10_Expr_C9_Epi10_R1'
        ),
        'norm_counts_Avg_log10_Expr_C9_Epi14_R1' => array(
            'color' => '#FF65AC',
            'name' => 'Avg_log10_Expr_C9_Epi14_R1'
        ),
        'norm_counts_Avg_log10_Expr_C9_Epi6_10_R2' => array(
            'color' => '#FF65AC',
            'name' => 'Avg_log10_Expr_C9_Epi6_10_R2'
        ),
        'norm_counts_Avg_log10_Expr_C9_Epi6_R1' => array(
            'color' => '#FF65AC',
            'name' => 'Avg_log10_Expr_C9_Epi6_R1'
        ),
        'norm_counts_Avg_log10_Expr_C9_Epi7_R1' => array(
            'color' => '#FF65AC',
            'name' => 'Avg_log10_Expr_C9_Epi7_R1'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'lg10 Expr for all Samples',
        'sidelabel' => 'lg10 Expr'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Avg_log10_Expr_Sc_C0_Epi10_14_R2','lg2_avg_Avg_log10_Expr_Sc_C0_Epi10_R1','lg2_avg_Avg_log10_Expr_Sc_C0_Epi14_R1','lg2_avg_Avg_log10_Expr_Sc_C0_Epi6_10_R2','lg2_avg_Avg_log10_Expr_Sc_C0_Epi6_R1','lg2_avg_Avg_log10_Expr_Sc_C0_Epi7_R1','lg2_avg_Avg_log10_Expr_Sc_C1_Epi10_14_R2','lg2_avg_Avg_log10_Expr_Sc_C1_Epi10_R1','lg2_avg_Avg_log10_Expr_Sc_C1_Epi14_R1','lg2_avg_Avg_log10_Expr_Sc_C1_Epi6_10_R2','lg2_avg_Avg_log10_Expr_Sc_C1_Epi6_R1','lg2_avg_Avg_log10_Expr_Sc_C1_Epi7_R1','lg2_avg_Avg_log10_Expr_Sc_C10_Epi10_14_R2','lg2_avg_Avg_log10_Expr_Sc_C10_Epi10_R1','lg2_avg_Avg_log10_Expr_Sc_C10_Epi14_R1','lg2_avg_Avg_log10_Expr_Sc_C10_Epi6_10_R2','lg2_avg_Avg_log10_Expr_Sc_C10_Epi6_R1','lg2_avg_Avg_log10_Expr_Sc_C10_Epi7_R1','lg2_avg_Avg_log10_Expr_Sc_C11_Epi10_14_R2','lg2_avg_Avg_log10_Expr_Sc_C11_Epi10_R1','lg2_avg_Avg_log10_Expr_Sc_C11_Epi14_R1','lg2_avg_Avg_log10_Expr_Sc_C11_Epi6_10_R2','lg2_avg_Avg_log10_Expr_Sc_C11_Epi6_R1','lg2_avg_Avg_log10_Expr_Sc_C11_Epi7_R1','lg2_avg_Avg_log10_Expr_Sc_C12_Epi10_R1','lg2_avg_Avg_log10_Expr_Sc_C12_Epi6_10_R2','lg2_avg_Avg_log10_Expr_Sc_C12_Epi6_R1','lg2_avg_Avg_log10_Expr_Sc_C12_Epi7_R1','lg2_avg_Avg_log10_Expr_Sc_C2_Epi10_14_R2','lg2_avg_Avg_log10_Expr_Sc_C2_Epi10_R1','lg2_avg_Avg_log10_Expr_Sc_C2_Epi14_R1','lg2_avg_Avg_log10_Expr_Sc_C2_Epi6_10_R2','lg2_avg_Avg_log10_Expr_Sc_C2_Epi6_R1','lg2_avg_Avg_log10_Expr_Sc_C2_Epi7_R1','lg2_avg_Avg_log10_Expr_Sc_C3_Epi10_14_R2','lg2_avg_Avg_log10_Expr_Sc_C3_Epi10_R1','lg2_avg_Avg_log10_Expr_Sc_C3_Epi14_R1','lg2_avg_Avg_log10_Expr_Sc_C3_Epi6_10_R2','lg2_avg_Avg_log10_Expr_Sc_C3_Epi6_R1','lg2_avg_Avg_log10_Expr_Sc_C3_Epi7_R1','lg2_avg_Avg_log10_Expr_Sc_C4_Epi10_14_R2','lg2_avg_Avg_log10_Expr_Sc_C4_Epi10_R1','lg2_avg_Avg_log10_Expr_Sc_C4_Epi14_R1','lg2_avg_Avg_log10_Expr_Sc_C4_Epi6_10_R2','lg2_avg_Avg_log10_Expr_Sc_C4_Epi6_R1','lg2_avg_Avg_log10_Expr_Sc_C4_Epi7_R1','lg2_avg_Avg_log10_Expr_Sc_C5_Epi10_R1','lg2_avg_Avg_log10_Expr_Sc_C5_Epi6_10_R2','lg2_avg_Avg_log10_Expr_Sc_C5_Epi6_R1','lg2_avg_Avg_log10_Expr_Sc_C5_Epi7_R1','lg2_avg_Avg_log10_Expr_Sc_C6_Epi10_14_R2','lg2_avg_Avg_log10_Expr_Sc_C6_Epi10_R1','lg2_avg_Avg_log10_Expr_Sc_C6_Epi6_10_R2','lg2_avg_Avg_log10_Expr_Sc_C6_Epi6_R1','lg2_avg_Avg_log10_Expr_Sc_C6_Epi7_R1','lg2_avg_Avg_log10_Expr_Sc_C7_Epi10_14_R2','lg2_avg_Avg_log10_Expr_Sc_C7_Epi10_R1','lg2_avg_Avg_log10_Expr_Sc_C7_Epi14_R1','lg2_avg_Avg_log10_Expr_Sc_C7_Epi6_10_R2','lg2_avg_Avg_log10_Expr_Sc_C7_Epi6_R1','lg2_avg_Avg_log10_Expr_Sc_C7_Epi7_R1','lg2_avg_Avg_log10_Expr_Sc_C8_Epi10_14_R2','lg2_avg_Avg_log10_Expr_Sc_C8_Epi10_R1','lg2_avg_Avg_log10_Expr_Sc_C8_Epi6_10_R2','lg2_avg_Avg_log10_Expr_Sc_C8_Epi6_R1','lg2_avg_Avg_log10_Expr_Sc_C8_Epi7_R1','lg2_avg_Avg_log10_Expr_Sc_C9_Epi10_14_R2','lg2_avg_Avg_log10_Expr_Sc_C9_Epi10_R1','lg2_avg_Avg_log10_Expr_Sc_C9_Epi14_R1','lg2_avg_Avg_log10_Expr_Sc_C9_Epi6_10_R2','lg2_avg_Avg_log10_Expr_Sc_C9_Epi6_R1','lg2_avg_Avg_log10_Expr_Sc_C9_Epi7_R1'),

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
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'add_counts_C1_Residuals' => array(
            'name' => 'C1_Residuals',
            'slider_min' => -4,
            'slider_max' => 2,
            'default_low' => -4,
            'default_high' => 2
        ),
        'add_counts_C2_Residuals' => array(
            'name' => 'C2_Residuals',
            'slider_min' => -4,
            'slider_max' => 2,
            'default_low' => -4,
            'default_high' => 2
        ),
        'add_counts_C3_Residuals' => array(
            'name' => 'C3_Residuals',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'add_counts_C4_Residuals' => array(
            'name' => 'C4_Residuals',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'add_counts_C5_Residuals' => array(
            'name' => 'C5_Residuals',
            'slider_min' => -4,
            'slider_max' => 2,
            'default_low' => -4,
            'default_high' => 2
        ),
        'add_counts_C6_Residuals' => array(
            'name' => 'C6_Residuals',
            'slider_min' => -4,
            'slider_max' => 2,
            'default_low' => -4,
            'default_high' => 2
        ),
        'add_counts_C7_Residuals' => array(
            'name' => 'C7_Residuals',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'add_counts_C8_Residuals' => array(
            'name' => 'C8_Residuals',
            'slider_min' => -4,
            'slider_max' => 3,
            'default_low' => -4,
            'default_high' => 3
        ),
        'add_counts_C9_Residuals' => array(
            'name' => 'C9_Residuals',
            'slider_min' => -2,
            'slider_max' => 3,
            'default_low' => -2,
            'default_high' => 3
        ),
        'add_counts_C10_Residuals' => array(
            'name' => 'C10_Residuals',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'add_counts_C11_Residuals' => array(
            'name' => 'C11_Residuals',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'add_counts_C12_Residuals' => array(
            'name' => 'C12_Residuals',
            'slider_min' => -4,
            'slider_max' => 3,
            'default_low' => -4,
            'default_high' => 3
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'ptl486_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'add_counts_Avg_log10_Expr_all',
        'default-y' => 'norm_counts_Avg_log10_Expr_C0_Epi10_14_R2',
        'selection' => array(
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg_log10_Expr_all'
            ),
            'norm_counts_Avg_log10_Expr_C0_Epi10_14_R2' => array(
                'name' => 's_Avg_log10_Expr_C0_Epi10_14_R2'
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
            'add_counts_Avg_log10_Expr_C10' => array(
                'name' => 'Avg_log10_Expr_C10'
            ),
            'add_counts_Avg_log10_Expr_C11' => array(
                'name' => 'Avg_log10_Expr_C11'
            ),
            'add_counts_Avg_log10_Expr_C12' => array(
                'name' => 'Avg_log10_Expr_C12'
            ),
            'add_counts_Avg_log10_Expr_C10' => array(
                'name' => 'Avg_log10_Expr_C10'
            ),
            'add_counts_Avg_log10_Expr_C11' => array(
                'name' => 'Avg_log10_Expr_C11'
            ),
            'add_counts_Avg_log10_Expr_C12' => array(
                'name' => 'Avg_log10_Expr_C12'
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
            'add_counts_Avg_log10_Expr_Epi10_14_R2' => array(
                'name' => 'Avg_log10_Expr_Epi10_14_R2'
            ),
            'add_counts_Avg_log10_Expr_Epi10_R1' => array(
                'name' => 'Avg_log10_Expr_Epi10_R1'
            ),
            'add_counts_Avg_log10_Expr_Epi14_R1' => array(
                'name' => 'Avg_log10_Expr_Epi14_R1'
            ),
            'add_counts_Avg_log10_Expr_Epi6_10_R2' => array(
                'name' => 'Avg_log10_Expr_Epi6_10_R2'
            ),
            'add_counts_Avg_log10_Expr_Epi6_R1' => array(
                'name' => 'Avg_log10_Expr_Epi6_R1'
            ),
            'add_counts_Avg_log10_Expr_Epi7_R1' => array(
                'name' => 'Avg_log10_Expr_Epi7_R1'
            ),
            'norm_counts_Avg_log10_Expr_C0_Epi10_14_R2' => array(
                'name' => 's_Avg_log10_Expr_C0_Epi10_14_R2'
            ),
            'norm_counts_Avg_log10_Expr_C0_Epi10_R1' => array(
                'name' => 's_Avg_log10_Expr_C0_Epi10_R1'
            ),
            'norm_counts_Avg_log10_Expr_C0_Epi14_R1' => array(
                'name' => 's_Avg_log10_Expr_C0_Epi14_R1'
            ),
            'norm_counts_Avg_log10_Expr_C0_Epi6_10_R2' => array(
                'name' => 's_Avg_log10_Expr_C0_Epi6_10_R2'
            ),
            'norm_counts_Avg_log10_Expr_C0_Epi6_R1' => array(
                'name' => 's_Avg_log10_Expr_C0_Epi6_R1'
            ),
            'norm_counts_Avg_log10_Expr_C0_Epi7_R1' => array(
                'name' => 's_Avg_log10_Expr_C0_Epi7_R1'
            ),
            'norm_counts_Avg_log10_Expr_C1_Epi10_14_R2' => array(
                'name' => 's_Avg_log10_Expr_C1_Epi10_14_R2'
            ),
            'norm_counts_Avg_log10_Expr_C1_Epi10_R1' => array(
                'name' => 's_Avg_log10_Expr_C1_Epi10_R1'
            ),
            'norm_counts_Avg_log10_Expr_C1_Epi14_R1' => array(
                'name' => 's_Avg_log10_Expr_C1_Epi14_R1'
            ),
            'norm_counts_Avg_log10_Expr_C1_Epi6_10_R2' => array(
                'name' => 's_Avg_log10_Expr_C1_Epi6_10_R2'
            ),
            'norm_counts_Avg_log10_Expr_C1_Epi6_R1' => array(
                'name' => 's_Avg_log10_Expr_C1_Epi6_R1'
            ),
            'norm_counts_Avg_log10_Expr_C1_Epi7_R1' => array(
                'name' => 's_Avg_log10_Expr_C1_Epi7_R1'
            ),
            'norm_counts_Avg_log10_Expr_C10_Epi10_14_R2' => array(
                'name' => 's_Avg_log10_Expr_C10_Epi10_14_R2'
            ),
            'norm_counts_Avg_log10_Expr_C10_Epi10_R1' => array(
                'name' => 's_Avg_log10_Expr_C10_Epi10_R1'
            ),
            'norm_counts_Avg_log10_Expr_C10_Epi14_R1' => array(
                'name' => 's_Avg_log10_Expr_C10_Epi14_R1'
            ),
            'norm_counts_Avg_log10_Expr_C10_Epi6_10_R2' => array(
                'name' => 's_Avg_log10_Expr_C10_Epi6_10_R2'
            ),
            'norm_counts_Avg_log10_Expr_C10_Epi6_R1' => array(
                'name' => 's_Avg_log10_Expr_C10_Epi6_R1'
            ),
            'norm_counts_Avg_log10_Expr_C10_Epi7_R1' => array(
                'name' => 's_Avg_log10_Expr_C10_Epi7_R1'
            ),
            'norm_counts_Avg_log10_Expr_C11_Epi10_14_R2' => array(
                'name' => 's_Avg_log10_Expr_C11_Epi10_14_R2'
            ),
            'norm_counts_Avg_log10_Expr_C11_Epi10_R1' => array(
                'name' => 's_Avg_log10_Expr_C11_Epi10_R1'
            ),
            'norm_counts_Avg_log10_Expr_C11_Epi14_R1' => array(
                'name' => 's_Avg_log10_Expr_C11_Epi14_R1'
            ),
            'norm_counts_Avg_log10_Expr_C11_Epi6_10_R2' => array(
                'name' => 's_Avg_log10_Expr_C11_Epi6_10_R2'
            ),
            'norm_counts_Avg_log10_Expr_C11_Epi6_R1' => array(
                'name' => 's_Avg_log10_Expr_C11_Epi6_R1'
            ),
            'norm_counts_Avg_log10_Expr_C11_Epi7_R1' => array(
                'name' => 's_Avg_log10_Expr_C11_Epi7_R1'
            ),
            'norm_counts_Avg_log10_Expr_C12_Epi10_R1' => array(
                'name' => 's_Avg_log10_Expr_C12_Epi10_R1'
            ),
            'norm_counts_Avg_log10_Expr_C12_Epi6_10_R2' => array(
                'name' => 's_Avg_log10_Expr_C12_Epi6_10_R2'
            ),
            'norm_counts_Avg_log10_Expr_C12_Epi6_R1' => array(
                'name' => 's_Avg_log10_Expr_C12_Epi6_R1'
            ),
            'norm_counts_Avg_log10_Expr_C12_Epi7_R1' => array(
                'name' => 's_Avg_log10_Expr_C12_Epi7_R1'
            ),
            'norm_counts_Avg_log10_Expr_C2_Epi10_14_R2' => array(
                'name' => 's_Avg_log10_Expr_C2_Epi10_14_R2'
            ),
            'norm_counts_Avg_log10_Expr_C2_Epi10_R1' => array(
                'name' => 's_Avg_log10_Expr_C2_Epi10_R1'
            ),
            'norm_counts_Avg_log10_Expr_C2_Epi14_R1' => array(
                'name' => 's_Avg_log10_Expr_C2_Epi14_R1'
            ),
            'norm_counts_Avg_log10_Expr_C2_Epi6_10_R2' => array(
                'name' => 's_Avg_log10_Expr_C2_Epi6_10_R2'
            ),
            'norm_counts_Avg_log10_Expr_C2_Epi6_R1' => array(
                'name' => 's_Avg_log10_Expr_C2_Epi6_R1'
            ),
            'norm_counts_Avg_log10_Expr_C2_Epi7_R1' => array(
                'name' => 's_Avg_log10_Expr_C2_Epi7_R1'
            ),
            'norm_counts_Avg_log10_Expr_C3_Epi10_14_R2' => array(
                'name' => 's_Avg_log10_Expr_C3_Epi10_14_R2'
            ),
            'norm_counts_Avg_log10_Expr_C3_Epi10_R1' => array(
                'name' => 's_Avg_log10_Expr_C3_Epi10_R1'
            ),
            'norm_counts_Avg_log10_Expr_C3_Epi14_R1' => array(
                'name' => 's_Avg_log10_Expr_C3_Epi14_R1'
            ),
            'norm_counts_Avg_log10_Expr_C3_Epi6_10_R2' => array(
                'name' => 's_Avg_log10_Expr_C3_Epi6_10_R2'
            ),
            'norm_counts_Avg_log10_Expr_C3_Epi6_R1' => array(
                'name' => 's_Avg_log10_Expr_C3_Epi6_R1'
            ),
            'norm_counts_Avg_log10_Expr_C3_Epi7_R1' => array(
                'name' => 's_Avg_log10_Expr_C3_Epi7_R1'
            ),
            'norm_counts_Avg_log10_Expr_C4_Epi10_14_R2' => array(
                'name' => 's_Avg_log10_Expr_C4_Epi10_14_R2'
            ),
            'norm_counts_Avg_log10_Expr_C4_Epi10_R1' => array(
                'name' => 's_Avg_log10_Expr_C4_Epi10_R1'
            ),
            'norm_counts_Avg_log10_Expr_C4_Epi14_R1' => array(
                'name' => 's_Avg_log10_Expr_C4_Epi14_R1'
            ),
            'norm_counts_Avg_log10_Expr_C4_Epi6_10_R2' => array(
                'name' => 's_Avg_log10_Expr_C4_Epi6_10_R2'
            ),
            'norm_counts_Avg_log10_Expr_C4_Epi6_R1' => array(
                'name' => 's_Avg_log10_Expr_C4_Epi6_R1'
            ),
            'norm_counts_Avg_log10_Expr_C4_Epi7_R1' => array(
                'name' => 's_Avg_log10_Expr_C4_Epi7_R1'
            ),
            'norm_counts_Avg_log10_Expr_C5_Epi10_R1' => array(
                'name' => 's_Avg_log10_Expr_C5_Epi10_R1'
            ),
            'norm_counts_Avg_log10_Expr_C5_Epi6_10_R2' => array(
                'name' => 's_Avg_log10_Expr_C5_Epi6_10_R2'
            ),
            'norm_counts_Avg_log10_Expr_C5_Epi6_R1' => array(
                'name' => 's_Avg_log10_Expr_C5_Epi6_R1'
            ),
            'norm_counts_Avg_log10_Expr_C5_Epi7_R1' => array(
                'name' => 's_Avg_log10_Expr_C5_Epi7_R1'
            ),
            'norm_counts_Avg_log10_Expr_C6_Epi10_14_R2' => array(
                'name' => 's_Avg_log10_Expr_C6_Epi10_14_R2'
            ),
            'norm_counts_Avg_log10_Expr_C6_Epi10_R1' => array(
                'name' => 's_Avg_log10_Expr_C6_Epi10_R1'
            ),
            'norm_counts_Avg_log10_Expr_C6_Epi6_10_R2' => array(
                'name' => 's_Avg_log10_Expr_C6_Epi6_10_R2'
            ),
            'norm_counts_Avg_log10_Expr_C6_Epi6_R1' => array(
                'name' => 's_Avg_log10_Expr_C6_Epi6_R1'
            ),
            'norm_counts_Avg_log10_Expr_C6_Epi7_R1' => array(
                'name' => 's_Avg_log10_Expr_C6_Epi7_R1'
            ),
            'norm_counts_Avg_log10_Expr_C7_Epi10_14_R2' => array(
                'name' => 's_Avg_log10_Expr_C7_Epi10_14_R2'
            ),
            'norm_counts_Avg_log10_Expr_C7_Epi10_R1' => array(
                'name' => 's_Avg_log10_Expr_C7_Epi10_R1'
            ),
            'norm_counts_Avg_log10_Expr_C7_Epi14_R1' => array(
                'name' => 's_Avg_log10_Expr_C7_Epi14_R1'
            ),
            'norm_counts_Avg_log10_Expr_C7_Epi6_10_R2' => array(
                'name' => 's_Avg_log10_Expr_C7_Epi6_10_R2'
            ),
            'norm_counts_Avg_log10_Expr_C7_Epi6_R1' => array(
                'name' => 's_Avg_log10_Expr_C7_Epi6_R1'
            ),
            'norm_counts_Avg_log10_Expr_C7_Epi7_R1' => array(
                'name' => 's_Avg_log10_Expr_C7_Epi7_R1'
            ),
            'norm_counts_Avg_log10_Expr_C8_Epi10_14_R2' => array(
                'name' => 's_Avg_log10_Expr_C8_Epi10_14_R2'
            ),
            'norm_counts_Avg_log10_Expr_C8_Epi10_R1' => array(
                'name' => 's_Avg_log10_Expr_C8_Epi10_R1'
            ),
            'norm_counts_Avg_log10_Expr_C8_Epi6_10_R2' => array(
                'name' => 's_Avg_log10_Expr_C8_Epi6_10_R2'
            ),
            'norm_counts_Avg_log10_Expr_C8_Epi6_R1' => array(
                'name' => 's_Avg_log10_Expr_C8_Epi6_R1'
            ),
            'norm_counts_Avg_log10_Expr_C8_Epi7_R1' => array(
                'name' => 's_Avg_log10_Expr_C8_Epi7_R1'
            ),
            'norm_counts_Avg_log10_Expr_C9_Epi10_14_R2' => array(
                'name' => 's_Avg_log10_Expr_C9_Epi10_14_R2'
            ),
            'norm_counts_Avg_log10_Expr_C9_Epi10_R1' => array(
                'name' => 's_Avg_log10_Expr_C9_Epi10_R1'
            ),
            'norm_counts_Avg_log10_Expr_C9_Epi14_R1' => array(
                'name' => 's_Avg_log10_Expr_C9_Epi14_R1'
            ),
            'norm_counts_Avg_log10_Expr_C9_Epi6_10_R2' => array(
                'name' => 's_Avg_log10_Expr_C9_Epi6_10_R2'
            ),
            'norm_counts_Avg_log10_Expr_C9_Epi6_R1' => array(
                'name' => 's_Avg_log10_Expr_C9_Epi6_R1'
            ),
            'norm_counts_Avg_log10_Expr_C9_Epi7_R1' => array(
                'name' => 's_Avg_log10_Expr_C9_Epi7_R1'
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
            ),
            'add_counts_C10_Residuals' => array(
                'name' => 'C10_Residuals'
            ),
            'add_counts_C11_Residuals' => array(
                'name' => 'C11_Residuals'
            ),
            'add_counts_C12_Residuals' => array(
                'name' => 'C12_Residuals'
            )
        )
    )
//End scatterplot
);
