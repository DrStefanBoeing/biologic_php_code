<?php

return array(
    'lab' => array(
        'name' => 'TenXGenomics DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'neuro_ref_data',
    'data_db' => array(
            'cat_table_name' => 'GSE152906_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'GSE152906_sc_rna_seq_table',
    'primary_gene_symbol' => 'dr_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged Expr',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Avg_log10_Expr_C0_E50hpf' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C0 E50hpf'
        ),
        'norm_counts_Avg_log10_Expr_C0_E70hpf' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C0 E70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C10_E50hpf' => array(
            'color' => '#EF7F46',
            'name' => 'Avg log10 Expr C10 E50hpf'
        ),
        'norm_counts_Avg_log10_Expr_C10_E70hpf' => array(
            'color' => '#EF7F46',
            'name' => 'Avg log10 Expr C10 E70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C11_E50hpf' => array(
            'color' => '#E38900',
            'name' => 'Avg log10 Expr C11 E50hpf'
        ),
        'norm_counts_Avg_log10_Expr_C11_E70hpf' => array(
            'color' => '#E38900',
            'name' => 'Avg log10 Expr C11 E70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C12_E50hpf' => array(
            'color' => '#D59100',
            'name' => 'Avg log10 Expr C12 E50hpf'
        ),
        'norm_counts_Avg_log10_Expr_C12_E70hpf' => array(
            'color' => '#D59100',
            'name' => 'Avg log10 Expr C12 E70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C13_E50hpf' => array(
            'color' => '#C49A00',
            'name' => 'Avg log10 Expr C13 E50hpf'
        ),
        'norm_counts_Avg_log10_Expr_C13_E70hpf' => array(
            'color' => '#C49A00',
            'name' => 'Avg log10 Expr C13 E70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C14_E50hpf' => array(
            'color' => '#B0A100',
            'name' => 'Avg log10 Expr C14 E50hpf'
        ),
        'norm_counts_Avg_log10_Expr_C14_E70hpf' => array(
            'color' => '#B0A100',
            'name' => 'Avg log10 Expr C14 E70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C15_E50hpf' => array(
            'color' => '#99A800',
            'name' => 'Avg log10 Expr C15 E50hpf'
        ),
        'norm_counts_Avg_log10_Expr_C15_E70hpf' => array(
            'color' => '#99A800',
            'name' => 'Avg log10 Expr C15 E70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C16_E50hpf' => array(
            'color' => '#7CAE00',
            'name' => 'Avg log10 Expr C16 E50hpf'
        ),
        'norm_counts_Avg_log10_Expr_C16_E70hpf' => array(
            'color' => '#7CAE00',
            'name' => 'Avg log10 Expr C16 E70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C17_E50hpf' => array(
            'color' => '#53B400',
            'name' => 'Avg log10 Expr C17 E50hpf'
        ),
        'norm_counts_Avg_log10_Expr_C17_E70hpf' => array(
            'color' => '#53B400',
            'name' => 'Avg log10 Expr C17 E70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C18_E50hpf' => array(
            'color' => '#00B823',
            'name' => 'Avg log10 Expr C18 E50hpf'
        ),
        'norm_counts_Avg_log10_Expr_C18_E70hpf' => array(
            'color' => '#00B823',
            'name' => 'Avg log10 Expr C18 E70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C19_E50hpf' => array(
            'color' => '#00BC56',
            'name' => 'Avg log10 Expr C19 E50hpf'
        ),
        'norm_counts_Avg_log10_Expr_C19_E70hpf' => array(
            'color' => '#00BC56',
            'name' => 'Avg log10 Expr C19 E70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C1_E50hpf' => array(
            'color' => '#00BF77',
            'name' => 'Avg log10 Expr C1 E50hpf'
        ),
        'norm_counts_Avg_log10_Expr_C1_E70hpf' => array(
            'color' => '#00BF77',
            'name' => 'Avg log10 Expr C1 E70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C20_E50hpf' => array(
            'color' => '#00C094',
            'name' => 'Avg log10 Expr C20 E50hpf'
        ),
        'norm_counts_Avg_log10_Expr_C20_E70hpf' => array(
            'color' => '#00C094',
            'name' => 'Avg log10 Expr C20 E70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C21_E50hpf' => array(
            'color' => '#00C1AD',
            'name' => 'Avg log10 Expr C21 E50hpf'
        ),
        'norm_counts_Avg_log10_Expr_C21_E70hpf' => array(
            'color' => '#00C1AD',
            'name' => 'Avg log10 Expr C21 E70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C22_E50hpf' => array(
            'color' => '#00BFC4',
            'name' => 'Avg log10 Expr C22 E50hpf'
        ),
        'norm_counts_Avg_log10_Expr_C22_E70hpf' => array(
            'color' => '#00BFC4',
            'name' => 'Avg log10 Expr C22 E70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C23_E50hpf' => array(
            'color' => '#00BCD9',
            'name' => 'Avg log10 Expr C23 E50hpf'
        ),
        'norm_counts_Avg_log10_Expr_C23_E70hpf' => array(
            'color' => '#00BCD9',
            'name' => 'Avg log10 Expr C23 E70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C24_E50hpf' => array(
            'color' => '#00B6EB',
            'name' => 'Avg log10 Expr C24 E50hpf'
        ),
        'norm_counts_Avg_log10_Expr_C24_E70hpf' => array(
            'color' => '#00B6EB',
            'name' => 'Avg log10 Expr C24 E70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C25_E70hpf' => array(
            'color' => '#00AEF9',
            'name' => 'Avg log10 Expr C25 E70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C26_E50hpf' => array(
            'color' => '#06A4FF',
            'name' => 'Avg log10 Expr C26 E50hpf'
        ),
        'norm_counts_Avg_log10_Expr_C26_E70hpf' => array(
            'color' => '#06A4FF',
            'name' => 'Avg log10 Expr C26 E70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C27_E50hpf' => array(
            'color' => '#7698FF',
            'name' => 'Avg log10 Expr C27 E50hpf'
        ),
        'norm_counts_Avg_log10_Expr_C27_E70hpf' => array(
            'color' => '#7698FF',
            'name' => 'Avg log10 Expr C27 E70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C2_E50hpf' => array(
            'color' => '#A58AFF',
            'name' => 'Avg log10 Expr C2 E50hpf'
        ),
        'norm_counts_Avg_log10_Expr_C2_E70hpf' => array(
            'color' => '#A58AFF',
            'name' => 'Avg log10 Expr C2 E70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C3_E50hpf' => array(
            'color' => '#C77CFF',
            'name' => 'Avg log10 Expr C3 E50hpf'
        ),
        'norm_counts_Avg_log10_Expr_C3_E70hpf' => array(
            'color' => '#C77CFF',
            'name' => 'Avg log10 Expr C3 E70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C4_E50hpf' => array(
            'color' => '#DF70F8',
            'name' => 'Avg log10 Expr C4 E50hpf'
        ),
        'norm_counts_Avg_log10_Expr_C4_E70hpf' => array(
            'color' => '#DF70F8',
            'name' => 'Avg log10 Expr C4 E70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C5_E50hpf' => array(
            'color' => '#F166E9',
            'name' => 'Avg log10 Expr C5 E50hpf'
        ),
        'norm_counts_Avg_log10_Expr_C5_E70hpf' => array(
            'color' => '#F166E9',
            'name' => 'Avg log10 Expr C5 E70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C6_E50hpf' => array(
            'color' => '#FB61D7',
            'name' => 'Avg log10 Expr C6 E50hpf'
        ),
        'norm_counts_Avg_log10_Expr_C6_E70hpf' => array(
            'color' => '#FB61D7',
            'name' => 'Avg log10 Expr C6 E70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C7_E50hpf' => array(
            'color' => '#FF62C1',
            'name' => 'Avg log10 Expr C7 E50hpf'
        ),
        'norm_counts_Avg_log10_Expr_C7_E70hpf' => array(
            'color' => '#FF62C1',
            'name' => 'Avg log10 Expr C7 E70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C8_E50hpf' => array(
            'color' => '#FF66A8',
            'name' => 'Avg log10 Expr C8 E50hpf'
        ),
        'norm_counts_Avg_log10_Expr_C8_E70hpf' => array(
            'color' => '#FF66A8',
            'name' => 'Avg log10 Expr C8 E70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C9_E50hpf' => array(
            'color' => '#FF6C91',
            'name' => 'Avg log10 Expr C9 E50hpf'
        ),
        'norm_counts_Avg_log10_Expr_C9_E70hpf' => array(
            'color' => '#FF6C91',
            'name' => 'Avg log10 Expr C9 E70hpf'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'lg10 Expr for all Samples',
        'sidelabel' => 'lg10 Expr'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Avg_log10_Expr_Sc_C0_E50hpf','lg2_avg_Avg_log10_Expr_Sc_C0_E70hpf','lg2_avg_Avg_log10_Expr_Sc_C10_E50hpf','lg2_avg_Avg_log10_Expr_Sc_C10_E70hpf','lg2_avg_Avg_log10_Expr_Sc_C11_E50hpf','lg2_avg_Avg_log10_Expr_Sc_C11_E70hpf','lg2_avg_Avg_log10_Expr_Sc_C12_E50hpf','lg2_avg_Avg_log10_Expr_Sc_C12_E70hpf','lg2_avg_Avg_log10_Expr_Sc_C13_E50hpf','lg2_avg_Avg_log10_Expr_Sc_C13_E70hpf','lg2_avg_Avg_log10_Expr_Sc_C14_E50hpf','lg2_avg_Avg_log10_Expr_Sc_C14_E70hpf','lg2_avg_Avg_log10_Expr_Sc_C15_E50hpf','lg2_avg_Avg_log10_Expr_Sc_C15_E70hpf','lg2_avg_Avg_log10_Expr_Sc_C16_E50hpf','lg2_avg_Avg_log10_Expr_Sc_C16_E70hpf','lg2_avg_Avg_log10_Expr_Sc_C17_E50hpf','lg2_avg_Avg_log10_Expr_Sc_C17_E70hpf','lg2_avg_Avg_log10_Expr_Sc_C18_E50hpf','lg2_avg_Avg_log10_Expr_Sc_C18_E70hpf','lg2_avg_Avg_log10_Expr_Sc_C19_E50hpf','lg2_avg_Avg_log10_Expr_Sc_C19_E70hpf','lg2_avg_Avg_log10_Expr_Sc_C1_E50hpf','lg2_avg_Avg_log10_Expr_Sc_C1_E70hpf','lg2_avg_Avg_log10_Expr_Sc_C20_E50hpf','lg2_avg_Avg_log10_Expr_Sc_C20_E70hpf','lg2_avg_Avg_log10_Expr_Sc_C21_E50hpf','lg2_avg_Avg_log10_Expr_Sc_C21_E70hpf','lg2_avg_Avg_log10_Expr_Sc_C22_E50hpf','lg2_avg_Avg_log10_Expr_Sc_C22_E70hpf','lg2_avg_Avg_log10_Expr_Sc_C23_E50hpf','lg2_avg_Avg_log10_Expr_Sc_C23_E70hpf','lg2_avg_Avg_log10_Expr_Sc_C24_E50hpf','lg2_avg_Avg_log10_Expr_Sc_C24_E70hpf','lg2_avg_Avg_log10_Expr_Sc_C25_E70hpf','lg2_avg_Avg_log10_Expr_Sc_C26_E50hpf','lg2_avg_Avg_log10_Expr_Sc_C26_E70hpf','lg2_avg_Avg_log10_Expr_Sc_C27_E50hpf','lg2_avg_Avg_log10_Expr_Sc_C27_E70hpf','lg2_avg_Avg_log10_Expr_Sc_C2_E50hpf','lg2_avg_Avg_log10_Expr_Sc_C2_E70hpf','lg2_avg_Avg_log10_Expr_Sc_C3_E50hpf','lg2_avg_Avg_log10_Expr_Sc_C3_E70hpf','lg2_avg_Avg_log10_Expr_Sc_C4_E50hpf','lg2_avg_Avg_log10_Expr_Sc_C4_E70hpf','lg2_avg_Avg_log10_Expr_Sc_C5_E50hpf','lg2_avg_Avg_log10_Expr_Sc_C5_E70hpf','lg2_avg_Avg_log10_Expr_Sc_C6_E50hpf','lg2_avg_Avg_log10_Expr_Sc_C6_E70hpf','lg2_avg_Avg_log10_Expr_Sc_C7_E50hpf','lg2_avg_Avg_log10_Expr_Sc_C7_E70hpf','lg2_avg_Avg_log10_Expr_Sc_C8_E50hpf','lg2_avg_Avg_log10_Expr_Sc_C8_E70hpf','lg2_avg_Avg_log10_Expr_Sc_C9_E50hpf','lg2_avg_Avg_log10_Expr_Sc_C9_E70hpf'),

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
        'add_counts_C0_Residuals' => array(
            'name' => 'C0 Residuals',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'add_counts_C1_Residuals' => array(
            'name' => 'C1 Residuals',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'add_counts_C2_Residuals' => array(
            'name' => 'C2 Residuals',
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
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'add_counts_C5_Residuals' => array(
            'name' => 'C5 Residuals',
            'slider_min' => -3,
            'slider_max' => 1,
            'default_low' => -3,
            'default_high' => 1
        ),
        'add_counts_C6_Residuals' => array(
            'name' => 'C6 Residuals',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'add_counts_C7_Residuals' => array(
            'name' => 'C7 Residuals',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'add_counts_C8_Residuals' => array(
            'name' => 'C8 Residuals',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'add_counts_C9_Residuals' => array(
            'name' => 'C9 Residuals',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'add_counts_C10_Residuals' => array(
            'name' => 'C10 Residuals',
            'slider_min' => -4,
            'slider_max' => 2,
            'default_low' => -4,
            'default_high' => 2
        ),
        'add_counts_C11_Residuals' => array(
            'name' => 'C11 Residuals',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'add_counts_C12_Residuals' => array(
            'name' => 'C12 Residuals',
            'slider_min' => -3,
            'slider_max' => 4,
            'default_low' => -3,
            'default_high' => 4
        ),
        'add_counts_C13_Residuals' => array(
            'name' => 'C13 Residuals',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'add_counts_C14_Residuals' => array(
            'name' => 'C14 Residuals',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'add_counts_C15_Residuals' => array(
            'name' => 'C15 Residuals',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
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
            'slider_min' => -3,
            'slider_max' => 4,
            'default_low' => -3,
            'default_high' => 4
        ),
        'add_counts_C18_Residuals' => array(
            'name' => 'C18 Residuals',
            'slider_min' => -1,
            'slider_max' => 2,
            'default_low' => -1,
            'default_high' => 2
        ),
        'add_counts_C19_Residuals' => array(
            'name' => 'C19 Residuals',
            'slider_min' => -3,
            'slider_max' => 4,
            'default_low' => -3,
            'default_high' => 4
        ),
        'add_counts_C20_Residuals' => array(
            'name' => 'C20 Residuals',
            'slider_min' => -3,
            'slider_max' => 4,
            'default_low' => -3,
            'default_high' => 4
        ),
        'add_counts_C21_Residuals' => array(
            'name' => 'C21 Residuals',
            'slider_min' => -2,
            'slider_max' => 5,
            'default_low' => -2,
            'default_high' => 5
        ),
        'add_counts_C22_Residuals' => array(
            'name' => 'C22 Residuals',
            'slider_min' => -2,
            'slider_max' => 5,
            'default_low' => -2,
            'default_high' => 5
        ),
        'add_counts_C23_Residuals' => array(
            'name' => 'C23 Residuals',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'add_counts_C24_Residuals' => array(
            'name' => 'C24 Residuals',
            'slider_min' => -3,
            'slider_max' => 4,
            'default_low' => -3,
            'default_high' => 4
        ),
        'add_counts_C25_Residuals' => array(
            'name' => 'C25 Residuals',
            'slider_min' => -3,
            'slider_max' => 5,
            'default_low' => -3,
            'default_high' => 5
        ),
        'add_counts_C26_Residuals' => array(
            'name' => 'C26 Residuals',
            'slider_min' => -3,
            'slider_max' => 6,
            'default_low' => -3,
            'default_high' => 6
        ),
        'add_counts_C27_Residuals' => array(
            'name' => 'C27 Residuals',
            'slider_min' => -3,
            'slider_max' => 5,
            'default_low' => -3,
            'default_high' => 5
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'GSE152906_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'add_counts_Avg_log10_Expr_all',
        'default-y' => 'norm_counts_Avg_log10_Expr_C0_E50hpf',
        'selection' => array(
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg log10 Expr all'
            ),
            'norm_counts_Avg_log10_Expr_C0_E50hpf' => array(
                'name' => 's Avg log10 Expr C0 E50hpf'
            ),
            'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
                'name' => 'logFC Expressed in N Percent Cells'
            ),
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg log10 Expr all'
            ),
            'add_counts_Avg_log10_Expr_C0' => array(
                'name' => 'Avg log10 Expr C0'
            ),
            'add_counts_Avg_log10_Expr_C1' => array(
                'name' => 'Avg log10 Expr C1'
            ),
            'add_counts_Avg_log10_Expr_C10' => array(
                'name' => 'Avg log10 Expr C10'
            ),
            'add_counts_Avg_log10_Expr_C11' => array(
                'name' => 'Avg log10 Expr C11'
            ),
            'add_counts_Avg_log10_Expr_C12' => array(
                'name' => 'Avg log10 Expr C12'
            ),
            'add_counts_Avg_log10_Expr_C13' => array(
                'name' => 'Avg log10 Expr C13'
            ),
            'add_counts_Avg_log10_Expr_C14' => array(
                'name' => 'Avg log10 Expr C14'
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
            'add_counts_Avg_log10_Expr_C19' => array(
                'name' => 'Avg log10 Expr C19'
            ),
            'add_counts_Avg_log10_Expr_C10' => array(
                'name' => 'Avg log10 Expr C10'
            ),
            'add_counts_Avg_log10_Expr_C11' => array(
                'name' => 'Avg log10 Expr C11'
            ),
            'add_counts_Avg_log10_Expr_C12' => array(
                'name' => 'Avg log10 Expr C12'
            ),
            'add_counts_Avg_log10_Expr_C13' => array(
                'name' => 'Avg log10 Expr C13'
            ),
            'add_counts_Avg_log10_Expr_C14' => array(
                'name' => 'Avg log10 Expr C14'
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
            'add_counts_Avg_log10_Expr_C19' => array(
                'name' => 'Avg log10 Expr C19'
            ),
            'add_counts_Avg_log10_Expr_C2' => array(
                'name' => 'Avg log10 Expr C2'
            ),
            'add_counts_Avg_log10_Expr_C20' => array(
                'name' => 'Avg log10 Expr C20'
            ),
            'add_counts_Avg_log10_Expr_C21' => array(
                'name' => 'Avg log10 Expr C21'
            ),
            'add_counts_Avg_log10_Expr_C22' => array(
                'name' => 'Avg log10 Expr C22'
            ),
            'add_counts_Avg_log10_Expr_C23' => array(
                'name' => 'Avg log10 Expr C23'
            ),
            'add_counts_Avg_log10_Expr_C24' => array(
                'name' => 'Avg log10 Expr C24'
            ),
            'add_counts_Avg_log10_Expr_C25' => array(
                'name' => 'Avg log10 Expr C25'
            ),
            'add_counts_Avg_log10_Expr_C26' => array(
                'name' => 'Avg log10 Expr C26'
            ),
            'add_counts_Avg_log10_Expr_C27' => array(
                'name' => 'Avg log10 Expr C27'
            ),
            'add_counts_Avg_log10_Expr_C20' => array(
                'name' => 'Avg log10 Expr C20'
            ),
            'add_counts_Avg_log10_Expr_C21' => array(
                'name' => 'Avg log10 Expr C21'
            ),
            'add_counts_Avg_log10_Expr_C22' => array(
                'name' => 'Avg log10 Expr C22'
            ),
            'add_counts_Avg_log10_Expr_C23' => array(
                'name' => 'Avg log10 Expr C23'
            ),
            'add_counts_Avg_log10_Expr_C24' => array(
                'name' => 'Avg log10 Expr C24'
            ),
            'add_counts_Avg_log10_Expr_C25' => array(
                'name' => 'Avg log10 Expr C25'
            ),
            'add_counts_Avg_log10_Expr_C26' => array(
                'name' => 'Avg log10 Expr C26'
            ),
            'add_counts_Avg_log10_Expr_C27' => array(
                'name' => 'Avg log10 Expr C27'
            ),
            'add_counts_Avg_log10_Expr_C3' => array(
                'name' => 'Avg log10 Expr C3'
            ),
            'add_counts_Avg_log10_Expr_C4' => array(
                'name' => 'Avg log10 Expr C4'
            ),
            'add_counts_Avg_log10_Expr_C5' => array(
                'name' => 'Avg log10 Expr C5'
            ),
            'add_counts_Avg_log10_Expr_C6' => array(
                'name' => 'Avg log10 Expr C6'
            ),
            'add_counts_Avg_log10_Expr_C7' => array(
                'name' => 'Avg log10 Expr C7'
            ),
            'add_counts_Avg_log10_Expr_C8' => array(
                'name' => 'Avg log10 Expr C8'
            ),
            'add_counts_Avg_log10_Expr_C9' => array(
                'name' => 'Avg log10 Expr C9'
            ),
            'add_counts_Avg_log10_Expr_E50hpf' => array(
                'name' => 'Avg log10 Expr E50hpf'
            ),
            'add_counts_Avg_log10_Expr_E70hpf' => array(
                'name' => 'Avg log10 Expr E70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C0_E50hpf' => array(
                'name' => 's Avg log10 Expr C0 E50hpf'
            ),
            'norm_counts_Avg_log10_Expr_C0_E70hpf' => array(
                'name' => 's Avg log10 Expr C0 E70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C10_E50hpf' => array(
                'name' => 's Avg log10 Expr C10 E50hpf'
            ),
            'norm_counts_Avg_log10_Expr_C10_E70hpf' => array(
                'name' => 's Avg log10 Expr C10 E70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C11_E50hpf' => array(
                'name' => 's Avg log10 Expr C11 E50hpf'
            ),
            'norm_counts_Avg_log10_Expr_C11_E70hpf' => array(
                'name' => 's Avg log10 Expr C11 E70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C12_E50hpf' => array(
                'name' => 's Avg log10 Expr C12 E50hpf'
            ),
            'norm_counts_Avg_log10_Expr_C12_E70hpf' => array(
                'name' => 's Avg log10 Expr C12 E70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C13_E50hpf' => array(
                'name' => 's Avg log10 Expr C13 E50hpf'
            ),
            'norm_counts_Avg_log10_Expr_C13_E70hpf' => array(
                'name' => 's Avg log10 Expr C13 E70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C14_E50hpf' => array(
                'name' => 's Avg log10 Expr C14 E50hpf'
            ),
            'norm_counts_Avg_log10_Expr_C14_E70hpf' => array(
                'name' => 's Avg log10 Expr C14 E70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C15_E50hpf' => array(
                'name' => 's Avg log10 Expr C15 E50hpf'
            ),
            'norm_counts_Avg_log10_Expr_C15_E70hpf' => array(
                'name' => 's Avg log10 Expr C15 E70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C16_E50hpf' => array(
                'name' => 's Avg log10 Expr C16 E50hpf'
            ),
            'norm_counts_Avg_log10_Expr_C16_E70hpf' => array(
                'name' => 's Avg log10 Expr C16 E70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C17_E50hpf' => array(
                'name' => 's Avg log10 Expr C17 E50hpf'
            ),
            'norm_counts_Avg_log10_Expr_C17_E70hpf' => array(
                'name' => 's Avg log10 Expr C17 E70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C18_E50hpf' => array(
                'name' => 's Avg log10 Expr C18 E50hpf'
            ),
            'norm_counts_Avg_log10_Expr_C18_E70hpf' => array(
                'name' => 's Avg log10 Expr C18 E70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C19_E50hpf' => array(
                'name' => 's Avg log10 Expr C19 E50hpf'
            ),
            'norm_counts_Avg_log10_Expr_C19_E70hpf' => array(
                'name' => 's Avg log10 Expr C19 E70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C1_E50hpf' => array(
                'name' => 's Avg log10 Expr C1 E50hpf'
            ),
            'norm_counts_Avg_log10_Expr_C1_E70hpf' => array(
                'name' => 's Avg log10 Expr C1 E70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C20_E50hpf' => array(
                'name' => 's Avg log10 Expr C20 E50hpf'
            ),
            'norm_counts_Avg_log10_Expr_C20_E70hpf' => array(
                'name' => 's Avg log10 Expr C20 E70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C21_E50hpf' => array(
                'name' => 's Avg log10 Expr C21 E50hpf'
            ),
            'norm_counts_Avg_log10_Expr_C21_E70hpf' => array(
                'name' => 's Avg log10 Expr C21 E70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C22_E50hpf' => array(
                'name' => 's Avg log10 Expr C22 E50hpf'
            ),
            'norm_counts_Avg_log10_Expr_C22_E70hpf' => array(
                'name' => 's Avg log10 Expr C22 E70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C23_E50hpf' => array(
                'name' => 's Avg log10 Expr C23 E50hpf'
            ),
            'norm_counts_Avg_log10_Expr_C23_E70hpf' => array(
                'name' => 's Avg log10 Expr C23 E70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C24_E50hpf' => array(
                'name' => 's Avg log10 Expr C24 E50hpf'
            ),
            'norm_counts_Avg_log10_Expr_C24_E70hpf' => array(
                'name' => 's Avg log10 Expr C24 E70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C25_E70hpf' => array(
                'name' => 's Avg log10 Expr C25 E70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C26_E50hpf' => array(
                'name' => 's Avg log10 Expr C26 E50hpf'
            ),
            'norm_counts_Avg_log10_Expr_C26_E70hpf' => array(
                'name' => 's Avg log10 Expr C26 E70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C27_E50hpf' => array(
                'name' => 's Avg log10 Expr C27 E50hpf'
            ),
            'norm_counts_Avg_log10_Expr_C27_E70hpf' => array(
                'name' => 's Avg log10 Expr C27 E70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C2_E50hpf' => array(
                'name' => 's Avg log10 Expr C2 E50hpf'
            ),
            'norm_counts_Avg_log10_Expr_C2_E70hpf' => array(
                'name' => 's Avg log10 Expr C2 E70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C3_E50hpf' => array(
                'name' => 's Avg log10 Expr C3 E50hpf'
            ),
            'norm_counts_Avg_log10_Expr_C3_E70hpf' => array(
                'name' => 's Avg log10 Expr C3 E70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C4_E50hpf' => array(
                'name' => 's Avg log10 Expr C4 E50hpf'
            ),
            'norm_counts_Avg_log10_Expr_C4_E70hpf' => array(
                'name' => 's Avg log10 Expr C4 E70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C5_E50hpf' => array(
                'name' => 's Avg log10 Expr C5 E50hpf'
            ),
            'norm_counts_Avg_log10_Expr_C5_E70hpf' => array(
                'name' => 's Avg log10 Expr C5 E70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C6_E50hpf' => array(
                'name' => 's Avg log10 Expr C6 E50hpf'
            ),
            'norm_counts_Avg_log10_Expr_C6_E70hpf' => array(
                'name' => 's Avg log10 Expr C6 E70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C7_E50hpf' => array(
                'name' => 's Avg log10 Expr C7 E50hpf'
            ),
            'norm_counts_Avg_log10_Expr_C7_E70hpf' => array(
                'name' => 's Avg log10 Expr C7 E70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C8_E50hpf' => array(
                'name' => 's Avg log10 Expr C8 E50hpf'
            ),
            'norm_counts_Avg_log10_Expr_C8_E70hpf' => array(
                'name' => 's Avg log10 Expr C8 E70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C9_E50hpf' => array(
                'name' => 's Avg log10 Expr C9 E50hpf'
            ),
            'norm_counts_Avg_log10_Expr_C9_E70hpf' => array(
                'name' => 's Avg log10 Expr C9 E70hpf'
            ),
            'add_counts_C0_Residuals' => array(
                'name' => 'C0 Residuals'
            ),
            'add_counts_C1_Residuals' => array(
                'name' => 'C1 Residuals'
            ),
            'add_counts_C2_Residuals' => array(
                'name' => 'C2 Residuals'
            ),
            'add_counts_C3_Residuals' => array(
                'name' => 'C3 Residuals'
            ),
            'add_counts_C4_Residuals' => array(
                'name' => 'C4 Residuals'
            ),
            'add_counts_C5_Residuals' => array(
                'name' => 'C5 Residuals'
            ),
            'add_counts_C6_Residuals' => array(
                'name' => 'C6 Residuals'
            ),
            'add_counts_C7_Residuals' => array(
                'name' => 'C7 Residuals'
            ),
            'add_counts_C8_Residuals' => array(
                'name' => 'C8 Residuals'
            ),
            'add_counts_C9_Residuals' => array(
                'name' => 'C9 Residuals'
            ),
            'add_counts_C10_Residuals' => array(
                'name' => 'C10 Residuals'
            ),
            'add_counts_C11_Residuals' => array(
                'name' => 'C11 Residuals'
            ),
            'add_counts_C12_Residuals' => array(
                'name' => 'C12 Residuals'
            ),
            'add_counts_C13_Residuals' => array(
                'name' => 'C13 Residuals'
            ),
            'add_counts_C14_Residuals' => array(
                'name' => 'C14 Residuals'
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
            ),
            'add_counts_C19_Residuals' => array(
                'name' => 'C19 Residuals'
            ),
            'add_counts_C20_Residuals' => array(
                'name' => 'C20 Residuals'
            ),
            'add_counts_C21_Residuals' => array(
                'name' => 'C21 Residuals'
            ),
            'add_counts_C22_Residuals' => array(
                'name' => 'C22 Residuals'
            ),
            'add_counts_C23_Residuals' => array(
                'name' => 'C23 Residuals'
            ),
            'add_counts_C24_Residuals' => array(
                'name' => 'C24 Residuals'
            ),
            'add_counts_C25_Residuals' => array(
                'name' => 'C25 Residuals'
            ),
            'add_counts_C26_Residuals' => array(
                'name' => 'C26 Residuals'
            ),
            'add_counts_C27_Residuals' => array(
                'name' => 'C27 Residuals'
            )
        )
    )
//End scatterplot
);
