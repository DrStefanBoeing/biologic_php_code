<?php

return array(
    'lab' => array(
        'name' => 'Ley DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'sll_data',
    'data_db' => array(
            'cat_table_name' => 'sll285_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'sll285_rna_seq_table',
    'primary_gene_symbol' => 'hgnc_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_CARD14WT_0hr_1_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'CARD14WT 0hr 1 TPM'
        ),
        'norm_counts_CARD14WT_0hr_2_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'CARD14WT 0hr 2 TPM'
        ),
        'norm_counts_CARD14WT_0hr_3_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'CARD14WT 0hr 3 TPM'
        ),
        'norm_counts_CARD14WT_3hr_1_TPM' => array(
            'color' => '#00A9FF',
            'name' => 'CARD14WT 3hr 1 TPM'
        ),
        'norm_counts_CARD14WT_3hr_2_TPM' => array(
            'color' => '#00A9FF',
            'name' => 'CARD14WT 3hr 2 TPM'
        ),
        'norm_counts_CARD14WT_3hr_3_TPM' => array(
            'color' => '#00A9FF',
            'name' => 'CARD14WT 3hr 3 TPM'
        ),
        'norm_counts_CARD14WT_6hr_1_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'CARD14WT 6hr 1 TPM'
        ),
        'norm_counts_CARD14WT_6hr_2_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'CARD14WT 6hr 2 TPM'
        ),
        'norm_counts_CARD14WT_6hr_3_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'CARD14WT 6hr 3 TPM'
        ),
        'norm_counts_CARD14WT_9hr_1_TPM' => array(
            'color' => '#FF61CC',
            'name' => 'CARD14WT 9hr 1 TPM'
        ),
        'norm_counts_CARD14WT_9hr_2_TPM' => array(
            'color' => '#FF61CC',
            'name' => 'CARD14WT 9hr 2 TPM'
        ),
        'norm_counts_CARD14WT_9hr_3_TPM' => array(
            'color' => '#FF61CC',
            'name' => 'CARD14WT 9hr 3 TPM'
        ),
        'norm_counts_CARD14E138A_0hr_1_TPM' => array(
            'color' => '#F8766D',
            'name' => 'CARD14E138A 0hr 1 TPM'
        ),
        'norm_counts_CARD14E138A_0hr_2_TPM' => array(
            'color' => '#F8766D',
            'name' => 'CARD14E138A 0hr 2 TPM'
        ),
        'norm_counts_CARD14E138A_0hr_3_TPM' => array(
            'color' => '#F8766D',
            'name' => 'CARD14E138A 0hr 3 TPM'
        ),
        'norm_counts_CARD14E138A_3hr_1_TPM' => array(
            'color' => '#CD9600',
            'name' => 'CARD14E138A 3hr 1 TPM'
        ),
        'norm_counts_CARD14E138A_3hr_2_TPM' => array(
            'color' => '#CD9600',
            'name' => 'CARD14E138A 3hr 2 TPM'
        ),
        'norm_counts_CARD14E138A_3hr_3_TPM' => array(
            'color' => '#CD9600',
            'name' => 'CARD14E138A 3hr 3 TPM'
        ),
        'norm_counts_CARD14E138A_6hr_1_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'CARD14E138A 6hr 1 TPM'
        ),
        'norm_counts_CARD14E138A_6hr_2_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'CARD14E138A 6hr 2 TPM'
        ),
        'norm_counts_CARD14E138A_6hr_3_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'CARD14E138A 6hr 3 TPM'
        ),
        'norm_counts_CARD14E138A_9hr_1_TPM' => array(
            'color' => '#00BE67',
            'name' => 'CARD14E138A 9hr 1 TPM'
        ),
        'norm_counts_CARD14E138A_9hr_2_TPM' => array(
            'color' => '#00BE67',
            'name' => 'CARD14E138A 9hr 2 TPM'
        ),
        'norm_counts_CARD14E138A_9hr_3_TPM' => array(
            'color' => '#00BE67',
            'name' => 'CARD14E138A 9hr 3 TPM'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
// New Begin: Timecourse
'timecourse_chart' => array(
    'timepoint_name' => 'Day',
    'display_median' => 'calculate_median',
    'timepoint_array' => array(0,3,6,9),
    'datasets' => array(
'CARD14E138A' => array(
    'color' => '#FF0000',
    'sample_group' => array(
'CARD14E138A_0hr' => array(
    'timepoint' =>  0,
    'sampleDbCols' =>  array(
'norm_counts_CARD14E138A_0hr_1_TPM','norm_counts_CARD14E138A_0hr_2_TPM','norm_counts_CARD14E138A_0hr_3_TPM'
)),
'CARD14E138A_3hr' => array(
    'timepoint' =>  3,
    'sampleDbCols' =>  array(
'norm_counts_CARD14E138A_3hr_1_TPM','norm_counts_CARD14E138A_3hr_2_TPM','norm_counts_CARD14E138A_3hr_3_TPM'
)),
'CARD14E138A_6hr' => array(
    'timepoint' =>  6,
    'sampleDbCols' =>  array(
'norm_counts_CARD14E138A_6hr_1_TPM','norm_counts_CARD14E138A_6hr_2_TPM','norm_counts_CARD14E138A_6hr_3_TPM'
)),
'CARD14E138A_9hr' => array(
    'timepoint' =>  9,
    'sampleDbCols' =>  array(
'norm_counts_CARD14E138A_9hr_1_TPM','norm_counts_CARD14E138A_9hr_2_TPM','norm_counts_CARD14E138A_9hr_3_TPM'
)))),
'CARD14WT' => array(
    'color' => '#009900',
    'sample_group' => array(
'CARD14WT_0hr' => array(
    'timepoint' =>  0,
    'sampleDbCols' =>  array(
'norm_counts_CARD14WT_0hr_1_TPM','norm_counts_CARD14WT_0hr_2_TPM','norm_counts_CARD14WT_0hr_3_TPM'
)),
'CARD14WT_3hr' => array(
    'timepoint' =>  3,
    'sampleDbCols' =>  array(
'norm_counts_CARD14WT_3hr_1_TPM','norm_counts_CARD14WT_3hr_2_TPM','norm_counts_CARD14WT_3hr_3_TPM'
)),
'CARD14WT_6hr' => array(
    'timepoint' =>  6,
    'sampleDbCols' =>  array(
'norm_counts_CARD14WT_6hr_1_TPM','norm_counts_CARD14WT_6hr_2_TPM','norm_counts_CARD14WT_6hr_3_TPM'
)),
'CARD14WT_9hr' => array(
    'timepoint' =>  9,
    'sampleDbCols' =>  array(
'norm_counts_CARD14WT_9hr_1_TPM','norm_counts_CARD14WT_9hr_2_TPM','norm_counts_CARD14WT_9hr_3_TPM'
)))))),
// New End: Timecourse
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_CARD14WT_0hr_1_TPM','lg2_avg_CARD14WT_0hr_2_TPM','lg2_avg_CARD14WT_0hr_3_TPM','lg2_avg_CARD14WT_3hr_1_TPM','lg2_avg_CARD14WT_3hr_2_TPM','lg2_avg_CARD14WT_3hr_3_TPM','lg2_avg_CARD14WT_6hr_1_TPM','lg2_avg_CARD14WT_6hr_2_TPM','lg2_avg_CARD14WT_6hr_3_TPM','lg2_avg_CARD14WT_9hr_1_TPM','lg2_avg_CARD14WT_9hr_2_TPM','lg2_avg_CARD14WT_9hr_3_TPM','lg2_avg_CARD14E138A_0hr_1_TPM','lg2_avg_CARD14E138A_0hr_2_TPM','lg2_avg_CARD14E138A_0hr_3_TPM','lg2_avg_CARD14E138A_3hr_1_TPM','lg2_avg_CARD14E138A_3hr_2_TPM','lg2_avg_CARD14E138A_3hr_3_TPM','lg2_avg_CARD14E138A_6hr_1_TPM','lg2_avg_CARD14E138A_6hr_2_TPM','lg2_avg_CARD14E138A_6hr_3_TPM','lg2_avg_CARD14E138A_9hr_1_TPM','lg2_avg_CARD14E138A_9hr_2_TPM','lg2_avg_CARD14E138A_9hr_3_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_CARD14E138A_0hr_vs_CARD14WT_0hr' => array(
            'name' => 'logFC CARD14E138A 0hr vs CARD14WT 0hr',
            'slider_min' => -4,
            'slider_max' => 5,
            'default_low' => -4,
            'default_high' => 5
        ),
        'contrast_1_padj_CARD14E138A_0hr_vs_CARD14WT_0hr' => array(
            'name' => 'padj CARD14E138A 0hr vs CARD14WT 0hr',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_CARD14E138A_3hr_vs_CARD14WT_3hr' => array(
            'name' => 'logFC CARD14E138A 3hr vs CARD14WT 3hr',
            'slider_min' => -5,
            'slider_max' => 10,
            'default_low' => -5,
            'default_high' => 10
        ),
        'contrast_2_padj_CARD14E138A_3hr_vs_CARD14WT_3hr' => array(
            'name' => 'padj CARD14E138A 3hr vs CARD14WT 3hr',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_CARD14E138A_6hr_vs_CARD14WT_6hr' => array(
            'name' => 'logFC CARD14E138A 6hr vs CARD14WT 6hr',
            'slider_min' => -6,
            'slider_max' => 10,
            'default_low' => -6,
            'default_high' => 10
        ),
        'contrast_3_padj_CARD14E138A_6hr_vs_CARD14WT_6hr' => array(
            'name' => 'padj CARD14E138A 6hr vs CARD14WT 6hr',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_logFC_CARD14E138A_9hr_vs_CARD14WT_9hr' => array(
            'name' => 'logFC CARD14E138A 9hr vs CARD14WT 9hr',
            'slider_min' => -7,
            'slider_max' => 10,
            'default_low' => -7,
            'default_high' => 10
        ),
        'contrast_4_padj_CARD14E138A_9hr_vs_CARD14WT_9hr' => array(
            'name' => 'padj CARD14E138A 9hr vs CARD14WT 9hr',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_A_logFC_sll378_AD_lesional_vs_CTRL_healthy' => array(
            'name' => 'logFC sll378 AD lesional vs CTRL healthy',
            'slider_min' => -4,
            'slider_max' => 6,
            'default_low' => -4,
            'default_high' => 6
        ),
        'contrast_A_padj_sll378_AD_lesional_vs_CTRL_healthy' => array(
            'name' => 'padj sll378 AD lesional vs CTRL healthy',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_A_logFC_sll378_AD_nonlesional_vs_CTRL_healthy' => array(
            'name' => 'logFC sll378 AD nonlesional vs CTRL healthy',
            'slider_min' => -1,
            'slider_max' => 2,
            'default_low' => -1,
            'default_high' => 2
        ),
        'contrast_A_padj_sll378_AD_nonlesional_vs_CTRL_healthy' => array(
            'name' => 'padj sll378 AD nonlesional vs CTRL healthy',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_A_logFC_sll378_AD_chronic_vs_CTRL_healthy' => array(
            'name' => 'logFC sll378 AD chronic vs CTRL healthy',
            'slider_min' => -7,
            'slider_max' => 9,
            'default_low' => -7,
            'default_high' => 9
        ),
        'contrast_A_padj_sll378_AD_chronic_vs_CTRL_healthy' => array(
            'name' => 'padj sll378 AD chronic vs CTRL healthy',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_A_logFC_sll378_PSO_nonlesional_vs_CTRL_healthy' => array(
            'name' => 'logFC sll378 PSO nonlesional vs CTRL healthy',
            'slider_min' => -1,
            'slider_max' => 2,
            'default_low' => -1,
            'default_high' => 2
        ),
        'contrast_A_padj_sll378_PSO_nonlesional_vs_CTRL_healthy' => array(
            'name' => 'padj sll378 PSO nonlesional vs CTRL healthy',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_A_logFC_sll378_PSO_lesional_vs_CTRL_healthy' => array(
            'name' => 'logFC sll378 PSO lesional vs CTRL healthy',
            'slider_min' => -6,
            'slider_max' => 10,
            'default_low' => -6,
            'default_high' => 10
        ),
        'contrast_A_padj_sll378_PSO_lesional_vs_CTRL_healthy' => array(
            'name' => 'padj sll378 PSO lesional vs CTRL healthy',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_A_logFC_sll299_Psoriasis_Unt_vs_SkinNormal_Unt' => array(
            'name' => 'logFC sll299 Psoriasis Unt vs SkinNormal Unt',
            'slider_min' => -8,
            'slider_max' => 6,
            'default_low' => -8,
            'default_high' => 6
        ),
        'contrast_A_padj_sll299_Psoriasis_Unt_vs_SkinNormal_Unt' => array(
            'name' => 'padj sll299 Psoriasis Unt vs SkinNormal Unt',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_A_logFC_sll299_Psoriasis_adaMab_vs_Psoriasis_Unt' => array(
            'name' => 'logFC sll299 Psoriasis adaMab vs Psoriasis Unt',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_A_padj_sll299_Psoriasis_adaMab_vs_Psoriasis_Unt' => array(
            'name' => 'padj sll299 Psoriasis adaMab vs Psoriasis Unt',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_A_logFC_sll299_Psoriasis_adaMab_vs_SkinNormal_Unt' => array(
            'name' => 'logFC sll299 Psoriasis adaMab vs SkinNormal Unt',
            'slider_min' => -5,
            'slider_max' => 5,
            'default_low' => -5,
            'default_high' => 5
        ),
        'contrast_A_padj_sll299_Psoriasis_adaMab_vs_SkinNormal_Unt' => array(
            'name' => 'padj sll299 Psoriasis adaMab vs SkinNormal Unt',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_A_logFC_sll377_KC_IL36alpha_vs_KC_Untretated' => array(
            'name' => 'logFC sll377 KC IL36alpha vs KC Untretated',
            'slider_min' => -2,
            'slider_max' => 5,
            'default_low' => -2,
            'default_high' => 5
        ),
        'contrast_A_padj_sll377_KC_IL36alpha_vs_KC_Untretated' => array(
            'name' => 'padj sll377 KC IL36alpha vs KC Untretated',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_A_logFC_sll377_KC_IL36beta_vs_KC_Untretated' => array(
            'name' => 'logFC sll377 KC IL36beta vs KC Untretated',
            'slider_min' => -2,
            'slider_max' => 7,
            'default_low' => -2,
            'default_high' => 7
        ),
        'contrast_A_padj_sll377_KC_IL36beta_vs_KC_Untretated' => array(
            'name' => 'padj sll377 KC IL36beta vs KC Untretated',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_A_logFC_sll377_KC_IL36gamma_vs_KC_Untretated' => array(
            'name' => 'logFC sll377 KC IL36gamma vs KC Untretated',
            'slider_min' => -2,
            'slider_max' => 6,
            'default_low' => -2,
            'default_high' => 6
        ),
        'contrast_A_padj_sll377_KC_IL36gamma_vs_KC_Untretated' => array(
            'name' => 'padj sll377 KC IL36gamma vs KC Untretated',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_CARD14' => array(
            'name' => 'corCoef CARD14',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_L_lg10p_LRT_Timepoint' => array(
            'name' => 'lg10p LRT Timepoint',
            'slider_min' => 0,
            'slider_max' => 14,
            'default_low' => 0,
            'default_high' => 14
        ),
        'contrast_L_lg10p_LRT_WT_MT' => array(
            'name' => 'lg10p LRT WT MT',
            'slider_min' => 0,
            'slider_max' => 305,
            'default_low' => 0,
            'default_high' => 305
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'sll285_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_CARD14E138A_0hr_vs_CARD14WT_0hr',
        'default-y' => 'contrast_1_lg10p_CARD14E138A_0hr_vs_CARD14WT_0hr',
        'selection' => array(
            'contrast_1_logFC_CARD14E138A_0hr_vs_CARD14WT_0hr' => array(
                'name' => 'logFC CARD14E138A 0hr vs CARD14WT 0hr'
            ),
            'contrast_2_logFC_CARD14E138A_3hr_vs_CARD14WT_3hr' => array(
                'name' => 'logFC CARD14E138A 3hr vs CARD14WT 3hr'
            ),
            'contrast_3_logFC_CARD14E138A_6hr_vs_CARD14WT_6hr' => array(
                'name' => 'logFC CARD14E138A 6hr vs CARD14WT 6hr'
            ),
            'contrast_4_logFC_CARD14E138A_9hr_vs_CARD14WT_9hr' => array(
                'name' => 'logFC CARD14E138A 9hr vs CARD14WT 9hr'
            ),
            'contrast_A_logFC_sll378_AD_lesional_vs_CTRL_healthy' => array(
                'name' => 'logFC sll378 AD lesional vs CTRL healthy'
            ),
            'contrast_A_logFC_sll378_AD_nonlesional_vs_CTRL_healthy' => array(
                'name' => 'logFC sll378 AD nonlesional vs CTRL healthy'
            ),
            'contrast_A_logFC_sll378_AD_chronic_vs_CTRL_healthy' => array(
                'name' => 'logFC sll378 AD chronic vs CTRL healthy'
            ),
            'contrast_A_logFC_sll378_PSO_nonlesional_vs_CTRL_healthy' => array(
                'name' => 'logFC sll378 PSO nonlesional vs CTRL healthy'
            ),
            'contrast_A_logFC_sll378_PSO_lesional_vs_CTRL_healthy' => array(
                'name' => 'logFC sll378 PSO lesional vs CTRL healthy'
            ),
            'contrast_A_logFC_sll299_Psoriasis_Unt_vs_SkinNormal_Unt' => array(
                'name' => 'logFC sll299 Psoriasis Unt vs SkinNormal Unt'
            ),
            'contrast_A_logFC_sll299_Psoriasis_adaMab_vs_Psoriasis_Unt' => array(
                'name' => 'logFC sll299 Psoriasis adaMab vs Psoriasis Unt'
            ),
            'contrast_A_logFC_sll299_Psoriasis_adaMab_vs_SkinNormal_Unt' => array(
                'name' => 'logFC sll299 Psoriasis adaMab vs SkinNormal Unt'
            ),
            'contrast_A_logFC_sll377_KC_IL36alpha_vs_KC_Untretated' => array(
                'name' => 'logFC sll377 KC IL36alpha vs KC Untretated'
            ),
            'contrast_A_logFC_sll377_KC_IL36beta_vs_KC_Untretated' => array(
                'name' => 'logFC sll377 KC IL36beta vs KC Untretated'
            ),
            'contrast_A_logFC_sll377_KC_IL36gamma_vs_KC_Untretated' => array(
                'name' => 'logFC sll377 KC IL36gamma vs KC Untretated'
            ),
            'contrast_1_lg10p_CARD14E138A_0hr_vs_CARD14WT_0hr' => array(
                'name' => 'lg10p CARD14E138A 0hr vs CARD14WT 0hr'
            ),
            'contrast_2_lg10p_CARD14E138A_3hr_vs_CARD14WT_3hr' => array(
                'name' => 'lg10p CARD14E138A 3hr vs CARD14WT 3hr'
            ),
            'contrast_3_lg10p_CARD14E138A_6hr_vs_CARD14WT_6hr' => array(
                'name' => 'lg10p CARD14E138A 6hr vs CARD14WT 6hr'
            ),
            'contrast_4_lg10p_CARD14E138A_9hr_vs_CARD14WT_9hr' => array(
                'name' => 'lg10p CARD14E138A 9hr vs CARD14WT 9hr'
            ),
            'contrast_L_lg10p_LRT_Timepoint' => array(
                'name' => 'lg10p LRT Timepoint'
            ),
            'contrast_L_lg10p_LRT_WT_MT' => array(
                'name' => 'lg10p LRT WT MT'
            ),
            'contrast_A_lg10p_sll378_AD_lesional_vs_CTRL_healthy' => array(
                'name' => 'lg10p sll378 AD lesional vs CTRL healthy'
            ),
            'contrast_A_lg10p_sll378_AD_nonlesional_vs_CTRL_healthy' => array(
                'name' => 'lg10p sll378 AD nonlesional vs CTRL healthy'
            ),
            'contrast_A_lg10p_sll378_AD_chronic_vs_CTRL_healthy' => array(
                'name' => 'lg10p sll378 AD chronic vs CTRL healthy'
            ),
            'contrast_A_lg10p_sll378_PSO_nonlesional_vs_CTRL_healthy' => array(
                'name' => 'lg10p sll378 PSO nonlesional vs CTRL healthy'
            ),
            'contrast_A_lg10p_sll378_PSO_lesional_vs_CTRL_healthy' => array(
                'name' => 'lg10p sll378 PSO lesional vs CTRL healthy'
            ),
            'contrast_A_lg10p_sll299_Psoriasis_Unt_vs_SkinNormal_Unt' => array(
                'name' => 'lg10p sll299 Psoriasis Unt vs SkinNormal Unt'
            ),
            'contrast_A_lg10p_sll299_Psoriasis_adaMab_vs_Psoriasis_Unt' => array(
                'name' => 'lg10p sll299 Psoriasis adaMab vs Psoriasis Unt'
            ),
            'contrast_A_lg10p_sll299_Psoriasis_adaMab_vs_SkinNormal_Unt' => array(
                'name' => 'lg10p sll299 Psoriasis adaMab vs SkinNormal Unt'
            ),
            'contrast_A_lg10p_sll377_KC_IL36alpha_vs_KC_Untretated' => array(
                'name' => 'lg10p sll377 KC IL36alpha vs KC Untretated'
            ),
            'contrast_A_lg10p_sll377_KC_IL36beta_vs_KC_Untretated' => array(
                'name' => 'lg10p sll377 KC IL36beta vs KC Untretated'
            ),
            'contrast_A_lg10p_sll377_KC_IL36gamma_vs_KC_Untretated' => array(
                'name' => 'lg10p sll377 KC IL36gamma vs KC Untretated'
            ),
            'add_venn_X_corCoef_CARD14' => array(
                'name' => 'corCoef CARD14'
            ),
            'contrast_P_PCA_estimatePCA1' => array(
                'name' => 'PCA estimatePCA1'
            ),
            'contrast_P_PCA_estimatePCA2' => array(
                'name' => 'PCA estimatePCA2'
            ),
            'contrast_P_PCA_estimatePCA3' => array(
                'name' => 'PCA estimatePCA3'
            ),
            'contrast_P_PCA_estimatePCA4' => array(
                'name' => 'PCA estimatePCA4'
            ),
            'contrast_P_PCA_estimatePCA5' => array(
                'name' => 'PCA estimatePCA5'
            ),
            'contrast_P_lg10p_PCA1' => array(
                'name' => 'lg10p PCA1'
            ),
            'contrast_P_lg10p_PCA2' => array(
                'name' => 'lg10p PCA2'
            ),
            'contrast_P_lg10p_PCA3' => array(
                'name' => 'lg10p PCA3'
            ),
            'contrast_P_lg10p_PCA4' => array(
                'name' => 'lg10p PCA4'
            ),
            'contrast_P_lg10p_PCA5' => array(
                'name' => 'lg10p PCA5'
            ),
            'contrast_1_lg2BaseMean_CARD14E138A_0hr_vs_CARD14WT_0hr' => array(
                'name' => 'lg2BaseMean CARD14E138A 0hr vs CARD14WT 0hr'
            ),
            'contrast_2_lg2BaseMean_CARD14E138A_3hr_vs_CARD14WT_3hr' => array(
                'name' => 'lg2BaseMean CARD14E138A 3hr vs CARD14WT 3hr'
            ),
            'contrast_3_lg2BaseMean_CARD14E138A_6hr_vs_CARD14WT_6hr' => array(
                'name' => 'lg2BaseMean CARD14E138A 6hr vs CARD14WT 6hr'
            ),
            'contrast_4_lg2BaseMean_CARD14E138A_9hr_vs_CARD14WT_9hr' => array(
                'name' => 'lg2BaseMean CARD14E138A 9hr vs CARD14WT 9hr'
            ),
            'contrast_L_lg2BaseMean_LRT_Timepoint' => array(
                'name' => 'lg2BaseMean LRT Timepoint'
            ),
            'contrast_L_lg2BaseMean_LRT_WT_MT' => array(
                'name' => 'lg2BaseMean LRT WT MT'
            ),
            'contrast_1_lg2BaseMean_AD_lesional_vs_CTRL_healthy' => array(
                'name' => 'lg2BaseMean AD lesional vs CTRL healthy'
            ),
            'contrast_2_lg2BaseMean_AD_nonlesional_vs_CTRL_healthy' => array(
                'name' => 'lg2BaseMean AD nonlesional vs CTRL healthy'
            ),
            'contrast_3_lg2BaseMean_AD_chronic_vs_CTRL_healthy' => array(
                'name' => 'lg2BaseMean AD chronic vs CTRL healthy'
            ),
            'contrast_4_lg2BaseMean_PSO_nonlesional_vs_CTRL_healthy' => array(
                'name' => 'lg2BaseMean PSO nonlesional vs CTRL healthy'
            ),
            'contrast_5_lg2BaseMean_PSO_lesional_vs_CTRL_healthy' => array(
                'name' => 'lg2BaseMean PSO lesional vs CTRL healthy'
            ),
            'contrast_1_lg2BaseMean_KC_IL36alpha_vs_KC_Untretated' => array(
                'name' => 'lg2BaseMean KC IL36alpha vs KC Untretated'
            ),
            'contrast_2_lg2BaseMean_KC_IL36beta_vs_KC_Untretated' => array(
                'name' => 'lg2BaseMean KC IL36beta vs KC Untretated'
            ),
            'contrast_3_lg2BaseMean_KC_IL36gamma_vs_KC_Untretated' => array(
                'name' => 'lg2BaseMean KC IL36gamma vs KC Untretated'
            )
        )
    )
//End scatterplot
);
