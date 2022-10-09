<?php

return array(
    'lab' => array(
        'name' => 'TenXGenomics DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'vpl_data',
    'data_db' => array(
            'cat_table_name' => 'SC18139plusGSE152906V2_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'SC18139plusGSE152906V2_sc_rna_seq_table',
    'primary_gene_symbol' => 'dr_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged Expr',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Avg_log10_Expr_C0_sc50hpf' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C0 sc50hpf'
        ),
        'norm_counts_Avg_log10_Expr_C0_sc70hpf' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C0 sc70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C0_snAdult' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C0 snAdult'
        ),
        'norm_counts_Avg_log10_Expr_C10_sc50hpf' => array(
            'color' => '#EC823C',
            'name' => 'Avg log10 Expr C10 sc50hpf'
        ),
        'norm_counts_Avg_log10_Expr_C10_sc70hpf' => array(
            'color' => '#EC823C',
            'name' => 'Avg log10 Expr C10 sc70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C10_snAdult' => array(
            'color' => '#EC823C',
            'name' => 'Avg log10 Expr C10 snAdult'
        ),
        'norm_counts_Avg_log10_Expr_C11_sc70hpf' => array(
            'color' => '#DD8D00',
            'name' => 'Avg log10 Expr C11 sc70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C11_snAdult' => array(
            'color' => '#DD8D00',
            'name' => 'Avg log10 Expr C11 snAdult'
        ),
        'norm_counts_Avg_log10_Expr_C12_sc50hpf' => array(
            'color' => '#CA9700',
            'name' => 'Avg log10 Expr C12 sc50hpf'
        ),
        'norm_counts_Avg_log10_Expr_C12_sc70hpf' => array(
            'color' => '#CA9700',
            'name' => 'Avg log10 Expr C12 sc70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C12_snAdult' => array(
            'color' => '#CA9700',
            'name' => 'Avg log10 Expr C12 snAdult'
        ),
        'norm_counts_Avg_log10_Expr_C13_sc50hpf' => array(
            'color' => '#B3A000',
            'name' => 'Avg log10 Expr C13 sc50hpf'
        ),
        'norm_counts_Avg_log10_Expr_C13_sc70hpf' => array(
            'color' => '#B3A000',
            'name' => 'Avg log10 Expr C13 sc70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C14_sc50hpf' => array(
            'color' => '#97A900',
            'name' => 'Avg log10 Expr C14 sc50hpf'
        ),
        'norm_counts_Avg_log10_Expr_C14_sc70hpf' => array(
            'color' => '#97A900',
            'name' => 'Avg log10 Expr C14 sc70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C14_snAdult' => array(
            'color' => '#97A900',
            'name' => 'Avg log10 Expr C14 snAdult'
        ),
        'norm_counts_Avg_log10_Expr_C15_sc50hpf' => array(
            'color' => '#71B000',
            'name' => 'Avg log10 Expr C15 sc50hpf'
        ),
        'norm_counts_Avg_log10_Expr_C15_sc70hpf' => array(
            'color' => '#71B000',
            'name' => 'Avg log10 Expr C15 sc70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C15_snAdult' => array(
            'color' => '#71B000',
            'name' => 'Avg log10 Expr C15 snAdult'
        ),
        'norm_counts_Avg_log10_Expr_C16_snAdult' => array(
            'color' => '#2FB600',
            'name' => 'Avg log10 Expr C16 snAdult'
        ),
        'norm_counts_Avg_log10_Expr_C17_sc50hpf' => array(
            'color' => '#00BB4B',
            'name' => 'Avg log10 Expr C17 sc50hpf'
        ),
        'norm_counts_Avg_log10_Expr_C17_sc70hpf' => array(
            'color' => '#00BB4B',
            'name' => 'Avg log10 Expr C17 sc70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C18_sc50hpf' => array(
            'color' => '#00BF76',
            'name' => 'Avg log10 Expr C18 sc50hpf'
        ),
        'norm_counts_Avg_log10_Expr_C18_sc70hpf' => array(
            'color' => '#00BF76',
            'name' => 'Avg log10 Expr C18 sc70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C19_sc50hpf' => array(
            'color' => '#00C098',
            'name' => 'Avg log10 Expr C19 sc50hpf'
        ),
        'norm_counts_Avg_log10_Expr_C19_sc70hpf' => array(
            'color' => '#00C098',
            'name' => 'Avg log10 Expr C19 sc70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C19_snAdult' => array(
            'color' => '#00C098',
            'name' => 'Avg log10 Expr C19 snAdult'
        ),
        'norm_counts_Avg_log10_Expr_C1_sc50hpf' => array(
            'color' => '#00C0B7',
            'name' => 'Avg log10 Expr C1 sc50hpf'
        ),
        'norm_counts_Avg_log10_Expr_C1_sc70hpf' => array(
            'color' => '#00C0B7',
            'name' => 'Avg log10 Expr C1 sc70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C1_snAdult' => array(
            'color' => '#00C0B7',
            'name' => 'Avg log10 Expr C1 snAdult'
        ),
        'norm_counts_Avg_log10_Expr_C20_sc70hpf' => array(
            'color' => '#00BDD1',
            'name' => 'Avg log10 Expr C20 sc70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C21_sc70hpf' => array(
            'color' => '#00B7E8',
            'name' => 'Avg log10 Expr C21 sc70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C22_sc70hpf' => array(
            'color' => '#00AEFA',
            'name' => 'Avg log10 Expr C22 sc70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C22_snAdult' => array(
            'color' => '#00AEFA',
            'name' => 'Avg log10 Expr C22 snAdult'
        ),
        'norm_counts_Avg_log10_Expr_C2_sc50hpf' => array(
            'color' => '#3DA1FF',
            'name' => 'Avg log10 Expr C2 sc50hpf'
        ),
        'norm_counts_Avg_log10_Expr_C2_sc70hpf' => array(
            'color' => '#3DA1FF',
            'name' => 'Avg log10 Expr C2 sc70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C2_snAdult' => array(
            'color' => '#3DA1FF',
            'name' => 'Avg log10 Expr C2 snAdult'
        ),
        'norm_counts_Avg_log10_Expr_C3_sc50hpf' => array(
            'color' => '#8F91FF',
            'name' => 'Avg log10 Expr C3 sc50hpf'
        ),
        'norm_counts_Avg_log10_Expr_C3_sc70hpf' => array(
            'color' => '#8F91FF',
            'name' => 'Avg log10 Expr C3 sc70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C3_snAdult' => array(
            'color' => '#8F91FF',
            'name' => 'Avg log10 Expr C3 snAdult'
        ),
        'norm_counts_Avg_log10_Expr_C4_sc50hpf' => array(
            'color' => '#BE80FF',
            'name' => 'Avg log10 Expr C4 sc50hpf'
        ),
        'norm_counts_Avg_log10_Expr_C4_sc70hpf' => array(
            'color' => '#BE80FF',
            'name' => 'Avg log10 Expr C4 sc70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C4_snAdult' => array(
            'color' => '#BE80FF',
            'name' => 'Avg log10 Expr C4 snAdult'
        ),
        'norm_counts_Avg_log10_Expr_C5_sc50hpf' => array(
            'color' => '#DE71F9',
            'name' => 'Avg log10 Expr C5 sc50hpf'
        ),
        'norm_counts_Avg_log10_Expr_C5_sc70hpf' => array(
            'color' => '#DE71F9',
            'name' => 'Avg log10 Expr C5 sc70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C5_snAdult' => array(
            'color' => '#DE71F9',
            'name' => 'Avg log10 Expr C5 snAdult'
        ),
        'norm_counts_Avg_log10_Expr_C6_sc50hpf' => array(
            'color' => '#F265E7',
            'name' => 'Avg log10 Expr C6 sc50hpf'
        ),
        'norm_counts_Avg_log10_Expr_C6_sc70hpf' => array(
            'color' => '#F265E7',
            'name' => 'Avg log10 Expr C6 sc70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C6_snAdult' => array(
            'color' => '#F265E7',
            'name' => 'Avg log10 Expr C6 snAdult'
        ),
        'norm_counts_Avg_log10_Expr_C7_sc50hpf' => array(
            'color' => '#FE61CF',
            'name' => 'Avg log10 Expr C7 sc50hpf'
        ),
        'norm_counts_Avg_log10_Expr_C7_sc70hpf' => array(
            'color' => '#FE61CF',
            'name' => 'Avg log10 Expr C7 sc70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C7_snAdult' => array(
            'color' => '#FE61CF',
            'name' => 'Avg log10 Expr C7 snAdult'
        ),
        'norm_counts_Avg_log10_Expr_C8_sc50hpf' => array(
            'color' => '#FF64B3',
            'name' => 'Avg log10 Expr C8 sc50hpf'
        ),
        'norm_counts_Avg_log10_Expr_C8_sc70hpf' => array(
            'color' => '#FF64B3',
            'name' => 'Avg log10 Expr C8 sc70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C8_snAdult' => array(
            'color' => '#FF64B3',
            'name' => 'Avg log10 Expr C8 snAdult'
        ),
        'norm_counts_Avg_log10_Expr_C9_sc50hpf' => array(
            'color' => '#FF6C92',
            'name' => 'Avg log10 Expr C9 sc50hpf'
        ),
        'norm_counts_Avg_log10_Expr_C9_sc70hpf' => array(
            'color' => '#FF6C92',
            'name' => 'Avg log10 Expr C9 sc70hpf'
        ),
        'norm_counts_Avg_log10_Expr_C9_snAdult' => array(
            'color' => '#FF6C92',
            'name' => 'Avg log10 Expr C9 snAdult'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'lg10 Expr for all Samples',
        'sidelabel' => 'lg10 Expr'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Avg_log10_Expr_Sc_C0_sc50hpf','lg2_avg_Avg_log10_Expr_Sc_C0_sc70hpf','lg2_avg_Avg_log10_Expr_Sc_C0_snAdult','lg2_avg_Avg_log10_Expr_Sc_C10_sc50hpf','lg2_avg_Avg_log10_Expr_Sc_C10_sc70hpf','lg2_avg_Avg_log10_Expr_Sc_C10_snAdult','lg2_avg_Avg_log10_Expr_Sc_C11_sc70hpf','lg2_avg_Avg_log10_Expr_Sc_C11_snAdult','lg2_avg_Avg_log10_Expr_Sc_C12_sc50hpf','lg2_avg_Avg_log10_Expr_Sc_C12_sc70hpf','lg2_avg_Avg_log10_Expr_Sc_C12_snAdult','lg2_avg_Avg_log10_Expr_Sc_C13_sc50hpf','lg2_avg_Avg_log10_Expr_Sc_C13_sc70hpf','lg2_avg_Avg_log10_Expr_Sc_C14_sc50hpf','lg2_avg_Avg_log10_Expr_Sc_C14_sc70hpf','lg2_avg_Avg_log10_Expr_Sc_C14_snAdult','lg2_avg_Avg_log10_Expr_Sc_C15_sc50hpf','lg2_avg_Avg_log10_Expr_Sc_C15_sc70hpf','lg2_avg_Avg_log10_Expr_Sc_C15_snAdult','lg2_avg_Avg_log10_Expr_Sc_C16_snAdult','lg2_avg_Avg_log10_Expr_Sc_C17_sc50hpf','lg2_avg_Avg_log10_Expr_Sc_C17_sc70hpf','lg2_avg_Avg_log10_Expr_Sc_C18_sc50hpf','lg2_avg_Avg_log10_Expr_Sc_C18_sc70hpf','lg2_avg_Avg_log10_Expr_Sc_C19_sc50hpf','lg2_avg_Avg_log10_Expr_Sc_C19_sc70hpf','lg2_avg_Avg_log10_Expr_Sc_C19_snAdult','lg2_avg_Avg_log10_Expr_Sc_C1_sc50hpf','lg2_avg_Avg_log10_Expr_Sc_C1_sc70hpf','lg2_avg_Avg_log10_Expr_Sc_C1_snAdult','lg2_avg_Avg_log10_Expr_Sc_C20_sc70hpf','lg2_avg_Avg_log10_Expr_Sc_C21_sc70hpf','lg2_avg_Avg_log10_Expr_Sc_C22_sc70hpf','lg2_avg_Avg_log10_Expr_Sc_C22_snAdult','lg2_avg_Avg_log10_Expr_Sc_C2_sc50hpf','lg2_avg_Avg_log10_Expr_Sc_C2_sc70hpf','lg2_avg_Avg_log10_Expr_Sc_C2_snAdult','lg2_avg_Avg_log10_Expr_Sc_C3_sc50hpf','lg2_avg_Avg_log10_Expr_Sc_C3_sc70hpf','lg2_avg_Avg_log10_Expr_Sc_C3_snAdult','lg2_avg_Avg_log10_Expr_Sc_C4_sc50hpf','lg2_avg_Avg_log10_Expr_Sc_C4_sc70hpf','lg2_avg_Avg_log10_Expr_Sc_C4_snAdult','lg2_avg_Avg_log10_Expr_Sc_C5_sc50hpf','lg2_avg_Avg_log10_Expr_Sc_C5_sc70hpf','lg2_avg_Avg_log10_Expr_Sc_C5_snAdult','lg2_avg_Avg_log10_Expr_Sc_C6_sc50hpf','lg2_avg_Avg_log10_Expr_Sc_C6_sc70hpf','lg2_avg_Avg_log10_Expr_Sc_C6_snAdult','lg2_avg_Avg_log10_Expr_Sc_C7_sc50hpf','lg2_avg_Avg_log10_Expr_Sc_C7_sc70hpf','lg2_avg_Avg_log10_Expr_Sc_C7_snAdult','lg2_avg_Avg_log10_Expr_Sc_C8_sc50hpf','lg2_avg_Avg_log10_Expr_Sc_C8_sc70hpf','lg2_avg_Avg_log10_Expr_Sc_C8_snAdult','lg2_avg_Avg_log10_Expr_Sc_C9_sc50hpf','lg2_avg_Avg_log10_Expr_Sc_C9_sc70hpf','lg2_avg_Avg_log10_Expr_Sc_C9_snAdult'),

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
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
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
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'add_counts_C3_Residuals' => array(
            'name' => 'C3 Residuals',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
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
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
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
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'add_counts_C8_Residuals' => array(
            'name' => 'C8 Residuals',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
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
            'slider_min' => -3,
            'slider_max' => 4,
            'default_low' => -3,
            'default_high' => 4
        ),
        'add_counts_C11_Residuals' => array(
            'name' => 'C11 Residuals',
            'slider_min' => -2,
            'slider_max' => 4,
            'default_low' => -2,
            'default_high' => 4
        ),
        'add_counts_C12_Residuals' => array(
            'name' => 'C12 Residuals',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'add_counts_C13_Residuals' => array(
            'name' => 'C13 Residuals',
            'slider_min' => -3,
            'slider_max' => 4,
            'default_low' => -3,
            'default_high' => 4
        ),
        'add_counts_C14_Residuals' => array(
            'name' => 'C14 Residuals',
            'slider_min' => -3,
            'slider_max' => 4,
            'default_low' => -3,
            'default_high' => 4
        ),
        'add_counts_C15_Residuals' => array(
            'name' => 'C15 Residuals',
            'slider_min' => -3,
            'slider_max' => 4,
            'default_low' => -3,
            'default_high' => 4
        ),
        'add_counts_C16_Residuals' => array(
            'name' => 'C16 Residuals',
            'slider_min' => -3,
            'slider_max' => 4,
            'default_low' => -3,
            'default_high' => 4
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
            'slider_min' => -2,
            'slider_max' => 5,
            'default_low' => -2,
            'default_high' => 5
        ),
        'add_counts_C19_Residuals' => array(
            'name' => 'C19 Residuals',
            'slider_min' => -2,
            'slider_max' => 6,
            'default_low' => -2,
            'default_high' => 6
        ),
        'add_counts_C20_Residuals' => array(
            'name' => 'C20 Residuals',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'add_counts_C21_Residuals' => array(
            'name' => 'C21 Residuals',
            'slider_min' => -3,
            'slider_max' => 5,
            'default_low' => -3,
            'default_high' => 5
        ),
        'add_counts_C22_Residuals' => array(
            'name' => 'C22 Residuals',
            'slider_min' => -3,
            'slider_max' => 4,
            'default_low' => -3,
            'default_high' => 4
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'SC18139plusGSE152906V2_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'add_counts_Avg_log10_Expr_all',
        'default-y' => 'norm_counts_Avg_log10_Expr_C0_sc50hpf',
        'selection' => array(
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg log10 Expr all'
            ),
            'norm_counts_Avg_log10_Expr_C0_sc50hpf' => array(
                'name' => 's Avg log10 Expr C0 sc50hpf'
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
            'add_counts_Avg_log10_Expr_C20' => array(
                'name' => 'Avg log10 Expr C20'
            ),
            'add_counts_Avg_log10_Expr_C21' => array(
                'name' => 'Avg log10 Expr C21'
            ),
            'add_counts_Avg_log10_Expr_C22' => array(
                'name' => 'Avg log10 Expr C22'
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
            'add_counts_Avg_log10_Expr_sc50hpf' => array(
                'name' => 'Avg log10 Expr sc50hpf'
            ),
            'add_counts_Avg_log10_Expr_sc70hpf' => array(
                'name' => 'Avg log10 Expr sc70hpf'
            ),
            'add_counts_Avg_log10_Expr_snAdult' => array(
                'name' => 'Avg log10 Expr snAdult'
            ),
            'norm_counts_Avg_log10_Expr_C0_sc50hpf' => array(
                'name' => 's Avg log10 Expr C0 sc50hpf'
            ),
            'norm_counts_Avg_log10_Expr_C0_sc70hpf' => array(
                'name' => 's Avg log10 Expr C0 sc70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C0_snAdult' => array(
                'name' => 's Avg log10 Expr C0 snAdult'
            ),
            'norm_counts_Avg_log10_Expr_C10_sc50hpf' => array(
                'name' => 's Avg log10 Expr C10 sc50hpf'
            ),
            'norm_counts_Avg_log10_Expr_C10_sc70hpf' => array(
                'name' => 's Avg log10 Expr C10 sc70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C10_snAdult' => array(
                'name' => 's Avg log10 Expr C10 snAdult'
            ),
            'norm_counts_Avg_log10_Expr_C11_sc70hpf' => array(
                'name' => 's Avg log10 Expr C11 sc70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C11_snAdult' => array(
                'name' => 's Avg log10 Expr C11 snAdult'
            ),
            'norm_counts_Avg_log10_Expr_C12_sc50hpf' => array(
                'name' => 's Avg log10 Expr C12 sc50hpf'
            ),
            'norm_counts_Avg_log10_Expr_C12_sc70hpf' => array(
                'name' => 's Avg log10 Expr C12 sc70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C12_snAdult' => array(
                'name' => 's Avg log10 Expr C12 snAdult'
            ),
            'norm_counts_Avg_log10_Expr_C13_sc50hpf' => array(
                'name' => 's Avg log10 Expr C13 sc50hpf'
            ),
            'norm_counts_Avg_log10_Expr_C13_sc70hpf' => array(
                'name' => 's Avg log10 Expr C13 sc70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C14_sc50hpf' => array(
                'name' => 's Avg log10 Expr C14 sc50hpf'
            ),
            'norm_counts_Avg_log10_Expr_C14_sc70hpf' => array(
                'name' => 's Avg log10 Expr C14 sc70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C14_snAdult' => array(
                'name' => 's Avg log10 Expr C14 snAdult'
            ),
            'norm_counts_Avg_log10_Expr_C15_sc50hpf' => array(
                'name' => 's Avg log10 Expr C15 sc50hpf'
            ),
            'norm_counts_Avg_log10_Expr_C15_sc70hpf' => array(
                'name' => 's Avg log10 Expr C15 sc70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C15_snAdult' => array(
                'name' => 's Avg log10 Expr C15 snAdult'
            ),
            'norm_counts_Avg_log10_Expr_C16_snAdult' => array(
                'name' => 's Avg log10 Expr C16 snAdult'
            ),
            'norm_counts_Avg_log10_Expr_C17_sc50hpf' => array(
                'name' => 's Avg log10 Expr C17 sc50hpf'
            ),
            'norm_counts_Avg_log10_Expr_C17_sc70hpf' => array(
                'name' => 's Avg log10 Expr C17 sc70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C18_sc50hpf' => array(
                'name' => 's Avg log10 Expr C18 sc50hpf'
            ),
            'norm_counts_Avg_log10_Expr_C18_sc70hpf' => array(
                'name' => 's Avg log10 Expr C18 sc70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C19_sc50hpf' => array(
                'name' => 's Avg log10 Expr C19 sc50hpf'
            ),
            'norm_counts_Avg_log10_Expr_C19_sc70hpf' => array(
                'name' => 's Avg log10 Expr C19 sc70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C19_snAdult' => array(
                'name' => 's Avg log10 Expr C19 snAdult'
            ),
            'norm_counts_Avg_log10_Expr_C1_sc50hpf' => array(
                'name' => 's Avg log10 Expr C1 sc50hpf'
            ),
            'norm_counts_Avg_log10_Expr_C1_sc70hpf' => array(
                'name' => 's Avg log10 Expr C1 sc70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C1_snAdult' => array(
                'name' => 's Avg log10 Expr C1 snAdult'
            ),
            'norm_counts_Avg_log10_Expr_C20_sc70hpf' => array(
                'name' => 's Avg log10 Expr C20 sc70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C21_sc70hpf' => array(
                'name' => 's Avg log10 Expr C21 sc70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C22_sc70hpf' => array(
                'name' => 's Avg log10 Expr C22 sc70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C22_snAdult' => array(
                'name' => 's Avg log10 Expr C22 snAdult'
            ),
            'norm_counts_Avg_log10_Expr_C2_sc50hpf' => array(
                'name' => 's Avg log10 Expr C2 sc50hpf'
            ),
            'norm_counts_Avg_log10_Expr_C2_sc70hpf' => array(
                'name' => 's Avg log10 Expr C2 sc70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C2_snAdult' => array(
                'name' => 's Avg log10 Expr C2 snAdult'
            ),
            'norm_counts_Avg_log10_Expr_C3_sc50hpf' => array(
                'name' => 's Avg log10 Expr C3 sc50hpf'
            ),
            'norm_counts_Avg_log10_Expr_C3_sc70hpf' => array(
                'name' => 's Avg log10 Expr C3 sc70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C3_snAdult' => array(
                'name' => 's Avg log10 Expr C3 snAdult'
            ),
            'norm_counts_Avg_log10_Expr_C4_sc50hpf' => array(
                'name' => 's Avg log10 Expr C4 sc50hpf'
            ),
            'norm_counts_Avg_log10_Expr_C4_sc70hpf' => array(
                'name' => 's Avg log10 Expr C4 sc70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C4_snAdult' => array(
                'name' => 's Avg log10 Expr C4 snAdult'
            ),
            'norm_counts_Avg_log10_Expr_C5_sc50hpf' => array(
                'name' => 's Avg log10 Expr C5 sc50hpf'
            ),
            'norm_counts_Avg_log10_Expr_C5_sc70hpf' => array(
                'name' => 's Avg log10 Expr C5 sc70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C5_snAdult' => array(
                'name' => 's Avg log10 Expr C5 snAdult'
            ),
            'norm_counts_Avg_log10_Expr_C6_sc50hpf' => array(
                'name' => 's Avg log10 Expr C6 sc50hpf'
            ),
            'norm_counts_Avg_log10_Expr_C6_sc70hpf' => array(
                'name' => 's Avg log10 Expr C6 sc70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C6_snAdult' => array(
                'name' => 's Avg log10 Expr C6 snAdult'
            ),
            'norm_counts_Avg_log10_Expr_C7_sc50hpf' => array(
                'name' => 's Avg log10 Expr C7 sc50hpf'
            ),
            'norm_counts_Avg_log10_Expr_C7_sc70hpf' => array(
                'name' => 's Avg log10 Expr C7 sc70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C7_snAdult' => array(
                'name' => 's Avg log10 Expr C7 snAdult'
            ),
            'norm_counts_Avg_log10_Expr_C8_sc50hpf' => array(
                'name' => 's Avg log10 Expr C8 sc50hpf'
            ),
            'norm_counts_Avg_log10_Expr_C8_sc70hpf' => array(
                'name' => 's Avg log10 Expr C8 sc70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C8_snAdult' => array(
                'name' => 's Avg log10 Expr C8 snAdult'
            ),
            'norm_counts_Avg_log10_Expr_C9_sc50hpf' => array(
                'name' => 's Avg log10 Expr C9 sc50hpf'
            ),
            'norm_counts_Avg_log10_Expr_C9_sc70hpf' => array(
                'name' => 's Avg log10 Expr C9 sc70hpf'
            ),
            'norm_counts_Avg_log10_Expr_C9_snAdult' => array(
                'name' => 's Avg log10 Expr C9 snAdult'
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
            )
        )
    )
//End scatterplot
);
