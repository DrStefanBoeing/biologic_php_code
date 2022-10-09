<?php

return array(
    'lab' => array(
        'name' => 'Bonfanti DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'pbl_data',
    'data_db' => array(
            'cat_table_name' => 'pbl359BsubCluster_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'pbl359BsubCluster_sc_rna_seq_table',
    'primary_gene_symbol' => 'hgnc_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged Expr',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Avg_log10_Expr_cTEC_I_Epip10sub' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr cTEC I Epip10sub'
        ),
        'norm_counts_Avg_log10_Expr_cTEC_I_Epip14sub' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr cTEC I Epip14sub'
        ),
        'norm_counts_Avg_log10_Expr_cTEC_I_Epip6sub' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr cTEC I Epip6sub'
        ),
        'norm_counts_Avg_log10_Expr_cTEC_I_Epip7sub' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr cTEC I Epip7sub'
        ),
        'norm_counts_Avg_log10_Expr_cTEC_II_Epip10sub' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr cTEC II Epip10sub'
        ),
        'norm_counts_Avg_log10_Expr_cTEC_II_Epip14sub' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr cTEC II Epip14sub'
        ),
        'norm_counts_Avg_log10_Expr_cTEC_II_Epip6sub' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr cTEC II Epip6sub'
        ),
        'norm_counts_Avg_log10_Expr_cTEC_II_Epip7sub' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr cTEC II Epip7sub'
        ),
        'norm_counts_Avg_log10_Expr_cTEC_III_Epip10sub' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr cTEC III Epip10sub'
        ),
        'norm_counts_Avg_log10_Expr_cTEC_III_Epip14sub' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr cTEC III Epip14sub'
        ),
        'norm_counts_Avg_log10_Expr_cTEC_III_Epip6sub' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr cTEC III Epip6sub'
        ),
        'norm_counts_Avg_log10_Expr_cTEC_III_Epip7sub' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr cTEC III Epip7sub'
        ),
        'norm_counts_Avg_log10_Expr_Ionocytes_Epip10sub' => array(
            'color' => '#99A800',
            'name' => 'Avg log10 Expr Ionocytes Epip10sub'
        ),
        'norm_counts_Avg_log10_Expr_Ionocytes_Epip14sub' => array(
            'color' => '#99A800',
            'name' => 'Avg log10 Expr Ionocytes Epip14sub'
        ),
        'norm_counts_Avg_log10_Expr_Ionocytes_Epip6sub' => array(
            'color' => '#99A800',
            'name' => 'Avg log10 Expr Ionocytes Epip6sub'
        ),
        'norm_counts_Avg_log10_Expr_Ionocytes_Epip7sub' => array(
            'color' => '#99A800',
            'name' => 'Avg log10 Expr Ionocytes Epip7sub'
        ),
        'norm_counts_Avg_log10_Expr_mTEC_AIREpos_Epip10sub' => array(
            'color' => '#53B400',
            'name' => 'Avg log10 Expr mTEC AIREpos Epip10sub'
        ),
        'norm_counts_Avg_log10_Expr_mTEC_AIREpos_Epip14sub' => array(
            'color' => '#53B400',
            'name' => 'Avg log10 Expr mTEC AIREpos Epip14sub'
        ),
        'norm_counts_Avg_log10_Expr_mTEC_AIREpos_Epip6sub' => array(
            'color' => '#53B400',
            'name' => 'Avg log10 Expr mTEC AIREpos Epip6sub'
        ),
        'norm_counts_Avg_log10_Expr_mTEC_AIREpos_Epip7sub' => array(
            'color' => '#53B400',
            'name' => 'Avg log10 Expr mTEC AIREpos Epip7sub'
        ),
        'norm_counts_Avg_log10_Expr_mTEC_diff_Epip10sub' => array(
            'color' => '#00BC56',
            'name' => 'Avg log10 Expr mTEC diff Epip10sub'
        ),
        'norm_counts_Avg_log10_Expr_mTEC_diff_Epip14sub' => array(
            'color' => '#00BC56',
            'name' => 'Avg log10 Expr mTEC diff Epip14sub'
        ),
        'norm_counts_Avg_log10_Expr_mTEC_diff_Epip6sub' => array(
            'color' => '#00BC56',
            'name' => 'Avg log10 Expr mTEC diff Epip6sub'
        ),
        'norm_counts_Avg_log10_Expr_mTEC_diff_Epip7sub' => array(
            'color' => '#00BC56',
            'name' => 'Avg log10 Expr mTEC diff Epip7sub'
        ),
        'norm_counts_Avg_log10_Expr_Myo_mTEC_Epip10sub' => array(
            'color' => '#00C094',
            'name' => 'Avg log10 Expr Myo mTEC Epip10sub'
        ),
        'norm_counts_Avg_log10_Expr_Myo_mTEC_Epip6sub' => array(
            'color' => '#00C094',
            'name' => 'Avg log10 Expr Myo mTEC Epip6sub'
        ),
        'norm_counts_Avg_log10_Expr_Myo_mTEC_Epip7sub' => array(
            'color' => '#00C094',
            'name' => 'Avg log10 Expr Myo mTEC Epip7sub'
        ),
        'norm_counts_Avg_log10_Expr_Neuro_I_Epip10sub' => array(
            'color' => '#00BFC4',
            'name' => 'Avg log10 Expr Neuro I Epip10sub'
        ),
        'norm_counts_Avg_log10_Expr_Neuro_I_Epip14sub' => array(
            'color' => '#00BFC4',
            'name' => 'Avg log10 Expr Neuro I Epip14sub'
        ),
        'norm_counts_Avg_log10_Expr_Neuro_I_Epip6sub' => array(
            'color' => '#00BFC4',
            'name' => 'Avg log10 Expr Neuro I Epip6sub'
        ),
        'norm_counts_Avg_log10_Expr_Neuro_I_Epip7sub' => array(
            'color' => '#00BFC4',
            'name' => 'Avg log10 Expr Neuro I Epip7sub'
        ),
        'norm_counts_Avg_log10_Expr_Neuro_II_Epip10sub' => array(
            'color' => '#00BFC4',
            'name' => 'Avg log10 Expr Neuro II Epip10sub'
        ),
        'norm_counts_Avg_log10_Expr_Neuro_II_Epip14sub' => array(
            'color' => '#00BFC4',
            'name' => 'Avg log10 Expr Neuro II Epip14sub'
        ),
        'norm_counts_Avg_log10_Expr_Neuro_II_Epip6sub' => array(
            'color' => '#00BFC4',
            'name' => 'Avg log10 Expr Neuro II Epip6sub'
        ),
        'norm_counts_Avg_log10_Expr_Neuro_II_Epip7sub' => array(
            'color' => '#00BFC4',
            'name' => 'Avg log10 Expr Neuro II Epip7sub'
        ),
        'norm_counts_Avg_log10_Expr_Neuro_III_Epip10sub' => array(
            'color' => '#00BFC4',
            'name' => 'Avg log10 Expr Neuro III Epip10sub'
        ),
        'norm_counts_Avg_log10_Expr_Neuro_III_Epip14sub' => array(
            'color' => '#00BFC4',
            'name' => 'Avg log10 Expr Neuro III Epip14sub'
        ),
        'norm_counts_Avg_log10_Expr_Neuro_III_Epip6sub' => array(
            'color' => '#00BFC4',
            'name' => 'Avg log10 Expr Neuro III Epip6sub'
        ),
        'norm_counts_Avg_log10_Expr_Neuro_III_Epip7sub' => array(
            'color' => '#00BFC4',
            'name' => 'Avg log10 Expr Neuro III Epip7sub'
        ),
        'norm_counts_Avg_log10_Expr_Neuro_IV_Epip7sub' => array(
            'color' => '#00BFC4',
            'name' => 'Avg log10 Expr Neuro IV Epip7sub'
        ),
        'norm_counts_Avg_log10_Expr_Plykrtns_prolif_Epip10sub' => array(
            'color' => '#DF70F8',
            'name' => 'Avg log10 Expr Plykrtns prolif Epip10sub'
        ),
        'norm_counts_Avg_log10_Expr_Plykrtns_prolif_Epip14sub' => array(
            'color' => '#DF70F8',
            'name' => 'Avg log10 Expr Plykrtns prolif Epip14sub'
        ),
        'norm_counts_Avg_log10_Expr_Plykrtns_prolif_Epip6sub' => array(
            'color' => '#DF70F8',
            'name' => 'Avg log10 Expr Plykrtns prolif Epip6sub'
        ),
        'norm_counts_Avg_log10_Expr_Plykrtns_prolif_Epip7sub' => array(
            'color' => '#DF70F8',
            'name' => 'Avg log10 Expr Plykrtns prolif Epip7sub'
        ),
        'norm_counts_Avg_log10_Expr_Polykeratins_Epip10sub' => array(
            'color' => '#FB61D7',
            'name' => 'Avg log10 Expr Polykeratins Epip10sub'
        ),
        'norm_counts_Avg_log10_Expr_Polykeratins_Epip14sub' => array(
            'color' => '#FB61D7',
            'name' => 'Avg log10 Expr Polykeratins Epip14sub'
        ),
        'norm_counts_Avg_log10_Expr_Polykeratins_Epip6sub' => array(
            'color' => '#FB61D7',
            'name' => 'Avg log10 Expr Polykeratins Epip6sub'
        ),
        'norm_counts_Avg_log10_Expr_Polykeratins_Epip7sub' => array(
            'color' => '#FB61D7',
            'name' => 'Avg log10 Expr Polykeratins Epip7sub'
        ),
        'norm_counts_Avg_log10_Expr_T_cells_cont_Epip10sub' => array(
            'color' => '#FF66A8',
            'name' => 'Avg log10 Expr T cells cont Epip10sub'
        ),
        'norm_counts_Avg_log10_Expr_T_cells_cont_Epip14sub' => array(
            'color' => '#FF66A8',
            'name' => 'Avg log10 Expr T cells cont Epip14sub'
        ),
        'norm_counts_Avg_log10_Expr_T_cells_cont_Epip6sub' => array(
            'color' => '#FF66A8',
            'name' => 'Avg log10 Expr T cells cont Epip6sub'
        ),
        'norm_counts_Avg_log10_Expr_T_cells_cont_Epip7sub' => array(
            'color' => '#FF66A8',
            'name' => 'Avg log10 Expr T cells cont Epip7sub'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'lg10 Expr for all Samples',
        'sidelabel' => 'lg10 Expr'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Avg_log10_Expr_Sc_cTEC_I_Epip10sub','lg2_avg_Avg_log10_Expr_Sc_cTEC_I_Epip14sub','lg2_avg_Avg_log10_Expr_Sc_cTEC_I_Epip6sub','lg2_avg_Avg_log10_Expr_Sc_cTEC_I_Epip7sub','lg2_avg_Avg_log10_Expr_Sc_cTEC_II_Epip10sub','lg2_avg_Avg_log10_Expr_Sc_cTEC_II_Epip14sub','lg2_avg_Avg_log10_Expr_Sc_cTEC_II_Epip6sub','lg2_avg_Avg_log10_Expr_Sc_cTEC_II_Epip7sub','lg2_avg_Avg_log10_Expr_Sc_cTEC_III_Epip10sub','lg2_avg_Avg_log10_Expr_Sc_cTEC_III_Epip14sub','lg2_avg_Avg_log10_Expr_Sc_cTEC_III_Epip6sub','lg2_avg_Avg_log10_Expr_Sc_cTEC_III_Epip7sub','lg2_avg_Avg_log10_Expr_Sc_Ionocytes_Epip10sub','lg2_avg_Avg_log10_Expr_Sc_Ionocytes_Epip14sub','lg2_avg_Avg_log10_Expr_Sc_Ionocytes_Epip6sub','lg2_avg_Avg_log10_Expr_Sc_Ionocytes_Epip7sub','lg2_avg_Avg_log10_Expr_Sc_mTEC_AIREpos_Epip10sub','lg2_avg_Avg_log10_Expr_Sc_mTEC_AIREpos_Epip14sub','lg2_avg_Avg_log10_Expr_Sc_mTEC_AIREpos_Epip6sub','lg2_avg_Avg_log10_Expr_Sc_mTEC_AIREpos_Epip7sub','lg2_avg_Avg_log10_Expr_Sc_mTEC_diff_Epip10sub','lg2_avg_Avg_log10_Expr_Sc_mTEC_diff_Epip14sub','lg2_avg_Avg_log10_Expr_Sc_mTEC_diff_Epip6sub','lg2_avg_Avg_log10_Expr_Sc_mTEC_diff_Epip7sub','lg2_avg_Avg_log10_Expr_Sc_Myo_mTEC_Epip10sub','lg2_avg_Avg_log10_Expr_Sc_Myo_mTEC_Epip6sub','lg2_avg_Avg_log10_Expr_Sc_Myo_mTEC_Epip7sub','lg2_avg_Avg_log10_Expr_Sc_Neuro_I_Epip10sub','lg2_avg_Avg_log10_Expr_Sc_Neuro_I_Epip14sub','lg2_avg_Avg_log10_Expr_Sc_Neuro_I_Epip6sub','lg2_avg_Avg_log10_Expr_Sc_Neuro_I_Epip7sub','lg2_avg_Avg_log10_Expr_Sc_Neuro_II_Epip10sub','lg2_avg_Avg_log10_Expr_Sc_Neuro_II_Epip14sub','lg2_avg_Avg_log10_Expr_Sc_Neuro_II_Epip6sub','lg2_avg_Avg_log10_Expr_Sc_Neuro_II_Epip7sub','lg2_avg_Avg_log10_Expr_Sc_Neuro_III_Epip10sub','lg2_avg_Avg_log10_Expr_Sc_Neuro_III_Epip14sub','lg2_avg_Avg_log10_Expr_Sc_Neuro_III_Epip6sub','lg2_avg_Avg_log10_Expr_Sc_Neuro_III_Epip7sub','lg2_avg_Avg_log10_Expr_Sc_Neuro_IV_Epip7sub','lg2_avg_Avg_log10_Expr_Sc_Plykrtns_prolif_Epip10sub','lg2_avg_Avg_log10_Expr_Sc_Plykrtns_prolif_Epip14sub','lg2_avg_Avg_log10_Expr_Sc_Plykrtns_prolif_Epip6sub','lg2_avg_Avg_log10_Expr_Sc_Plykrtns_prolif_Epip7sub','lg2_avg_Avg_log10_Expr_Sc_Polykeratins_Epip10sub','lg2_avg_Avg_log10_Expr_Sc_Polykeratins_Epip14sub','lg2_avg_Avg_log10_Expr_Sc_Polykeratins_Epip6sub','lg2_avg_Avg_log10_Expr_Sc_Polykeratins_Epip7sub','lg2_avg_Avg_log10_Expr_Sc_T_cells_cont_Epip10sub','lg2_avg_Avg_log10_Expr_Sc_T_cells_cont_Epip14sub','lg2_avg_Avg_log10_Expr_Sc_T_cells_cont_Epip6sub','lg2_avg_Avg_log10_Expr_Sc_T_cells_cont_Epip7sub'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
            'name' => 'logFC Expressed in N Percent Cells',
            'slider_min' => 1,
            'slider_max' => 100,
            'default_low' => 1,
            'default_high' => 100
        ),
        'contrast_1_logFC_DGE_C5_vs_C7' => array(
            'name' => 'logFC DGE C5 vs C7',
            'slider_min' => -14,
            'slider_max' => 14,
            'default_low' => -14,
            'default_high' => 14
        ),
        'contrast_2_logFC_DGE_C4_PolyK_vs_C9mTecDiff' => array(
            'name' => 'logFC DGE C4 PolyK vs C9mTecDiff',
            'slider_min' => -10,
            'slider_max' => 9,
            'default_low' => -10,
            'default_high' => 9
        ),
        'contrast_3_logFC_DGE_Neuro_I_II_vs_NeuroIII' => array(
            'name' => 'logFC DGE Neuro I II vs NeuroIII',
            'slider_min' => -9,
            'slider_max' => 6,
            'default_low' => -9,
            'default_high' => 6
        ),
        'contrast_4_logFC_DGE_cTEC_III_vs_Polykrtns' => array(
            'name' => 'logFC DGE cTEC III vs Polykrtns',
            'slider_min' => -8,
            'slider_max' => 7,
            'default_low' => -8,
            'default_high' => 7
        ),
        'contrast_5_logFC_DGE_cTEC_III_vs_cTEC_I_II' => array(
            'name' => 'logFC DGE cTEC III vs cTEC I II',
            'slider_min' => -3,
            'slider_max' => 11,
            'default_low' => -3,
            'default_high' => 11
        ),
        'add_counts_T_cells_cont_Residuals' => array(
            'name' => 'T cells cont Residuals',
            'slider_min' => -2,
            'slider_max' => 3,
            'default_low' => -2,
            'default_high' => 3
        ),
        'add_counts_cTEC_I_Residuals' => array(
            'name' => 'cTEC I Residuals',
            'slider_min' => -5,
            'slider_max' => 2,
            'default_low' => -5,
            'default_high' => 2
        ),
        'add_counts_cTEC_II_Residuals' => array(
            'name' => 'cTEC II Residuals',
            'slider_min' => -4,
            'slider_max' => 2,
            'default_low' => -4,
            'default_high' => 2
        ),
        'add_counts_cTEC_III_Residuals' => array(
            'name' => 'cTEC III Residuals',
            'slider_min' => -2,
            'slider_max' => 3,
            'default_low' => -2,
            'default_high' => 3
        ),
        'add_counts_Polykeratins_Residuals' => array(
            'name' => 'Polykeratins Residuals',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'add_counts_Plykrtns_prolif_Residuals' => array(
            'name' => 'Plykrtns prolif Residuals',
            'slider_min' => -2,
            'slider_max' => 3,
            'default_low' => -2,
            'default_high' => 3
        ),
        'add_counts_mTEC_diff_Residuals' => array(
            'name' => 'mTEC diff Residuals',
            'slider_min' => -4,
            'slider_max' => 2,
            'default_low' => -4,
            'default_high' => 2
        ),
        'add_counts_Myo_mTEC_Residuals' => array(
            'name' => 'Myo mTEC Residuals',
            'slider_min' => -4,
            'slider_max' => 3,
            'default_low' => -4,
            'default_high' => 3
        ),
        'add_counts_Neuro_I_Residuals' => array(
            'name' => 'Neuro I Residuals',
            'slider_min' => -4,
            'slider_max' => 2,
            'default_low' => -4,
            'default_high' => 2
        ),
        'add_counts_Neuro_II_Residuals' => array(
            'name' => 'Neuro II Residuals',
            'slider_min' => -4,
            'slider_max' => 2,
            'default_low' => -4,
            'default_high' => 2
        ),
        'add_counts_Neuro_III_Residuals' => array(
            'name' => 'Neuro III Residuals',
            'slider_min' => -4,
            'slider_max' => 2,
            'default_low' => -4,
            'default_high' => 2
        ),
        'add_counts_Neuro_IV_Residuals' => array(
            'name' => 'Neuro IV Residuals',
            'slider_min' => -4,
            'slider_max' => 3,
            'default_low' => -4,
            'default_high' => 3
        ),
        'add_counts_Ionocytes_Residuals' => array(
            'name' => 'Ionocytes Residuals',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'add_counts_mTEC_AIREpos_Residuals' => array(
            'name' => 'mTEC AIREpos Residuals',
            'slider_min' => -2,
            'slider_max' => 4,
            'default_low' => -2,
            'default_high' => 4
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'pbl359BsubCluster_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'add_counts_Avg_log10_Expr_all',
        'default-y' => 'norm_counts_Avg_log10_Expr_cTEC_I_Epip10sub',
        'selection' => array(
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg log10 Expr all'
            ),
            'norm_counts_Avg_log10_Expr_cTEC_I_Epip10sub' => array(
                'name' => 's Avg log10 Expr cTEC I Epip10sub'
            ),
            'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
                'name' => 'logFC Expressed in N Percent Cells'
            ),
            'contrast_1_logFC_DGE_C5_vs_C7' => array(
                'name' => 'logFC DGE C5 vs C7'
            ),
            'contrast_2_logFC_DGE_C4_PolyK_vs_C9mTecDiff' => array(
                'name' => 'logFC DGE C4 PolyK vs C9mTecDiff'
            ),
            'contrast_3_logFC_DGE_Neuro_I_II_vs_NeuroIII' => array(
                'name' => 'logFC DGE Neuro I II vs NeuroIII'
            ),
            'contrast_4_logFC_DGE_cTEC_III_vs_Polykrtns' => array(
                'name' => 'logFC DGE cTEC III vs Polykrtns'
            ),
            'contrast_5_logFC_DGE_cTEC_III_vs_cTEC_I_II' => array(
                'name' => 'logFC DGE cTEC III vs cTEC I II'
            ),
            'contrast_1_lg10p_DGE_C5_vs_C7' => array(
                'name' => 'lg10p DGE C5 vs C7'
            ),
            'contrast_2_lg10p_DGE_C4_PolyK_vs_C9mTecDiff' => array(
                'name' => 'lg10p DGE C4 PolyK vs C9mTecDiff'
            ),
            'contrast_3_lg10p_DGE_Neuro_I_II_vs_NeuroIII' => array(
                'name' => 'lg10p DGE Neuro I II vs NeuroIII'
            ),
            'contrast_4_lg10p_DGE_cTEC_III_vs_Polykrtns' => array(
                'name' => 'lg10p DGE cTEC III vs Polykrtns'
            ),
            'contrast_5_lg10p_DGE_cTEC_III_vs_cTEC_I_II' => array(
                'name' => 'lg10p DGE cTEC III vs cTEC I II'
            ),
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg log10 Expr all'
            ),
            'add_counts_Avg_log10_Expr_cTEC_I' => array(
                'name' => 'Avg log10 Expr cTEC I'
            ),
            'add_counts_Avg_log10_Expr_cTEC_II' => array(
                'name' => 'Avg log10 Expr cTEC II'
            ),
            'add_counts_Avg_log10_Expr_cTEC_III' => array(
                'name' => 'Avg log10 Expr cTEC III'
            ),
            'add_counts_Avg_log10_Expr_cTEC_II' => array(
                'name' => 'Avg log10 Expr cTEC II'
            ),
            'add_counts_Avg_log10_Expr_cTEC_III' => array(
                'name' => 'Avg log10 Expr cTEC III'
            ),
            'add_counts_Avg_log10_Expr_cTEC_III' => array(
                'name' => 'Avg log10 Expr cTEC III'
            ),
            'add_counts_Avg_log10_Expr_Epip10sub' => array(
                'name' => 'Avg log10 Expr Epip10sub'
            ),
            'add_counts_Avg_log10_Expr_Epip14sub' => array(
                'name' => 'Avg log10 Expr Epip14sub'
            ),
            'add_counts_Avg_log10_Expr_Epip6sub' => array(
                'name' => 'Avg log10 Expr Epip6sub'
            ),
            'add_counts_Avg_log10_Expr_Epip7sub' => array(
                'name' => 'Avg log10 Expr Epip7sub'
            ),
            'add_counts_Avg_log10_Expr_Ionocytes' => array(
                'name' => 'Avg log10 Expr Ionocytes'
            ),
            'add_counts_Avg_log10_Expr_mTEC_AIREpos' => array(
                'name' => 'Avg log10 Expr mTEC AIREpos'
            ),
            'add_counts_Avg_log10_Expr_mTEC_diff' => array(
                'name' => 'Avg log10 Expr mTEC diff'
            ),
            'add_counts_Avg_log10_Expr_Myo_mTEC' => array(
                'name' => 'Avg log10 Expr Myo mTEC'
            ),
            'add_counts_Avg_log10_Expr_Neuro_I' => array(
                'name' => 'Avg log10 Expr Neuro I'
            ),
            'add_counts_Avg_log10_Expr_Neuro_II' => array(
                'name' => 'Avg log10 Expr Neuro II'
            ),
            'add_counts_Avg_log10_Expr_Neuro_III' => array(
                'name' => 'Avg log10 Expr Neuro III'
            ),
            'add_counts_Avg_log10_Expr_Neuro_IV' => array(
                'name' => 'Avg log10 Expr Neuro IV'
            ),
            'add_counts_Avg_log10_Expr_Neuro_II' => array(
                'name' => 'Avg log10 Expr Neuro II'
            ),
            'add_counts_Avg_log10_Expr_Neuro_III' => array(
                'name' => 'Avg log10 Expr Neuro III'
            ),
            'add_counts_Avg_log10_Expr_Neuro_III' => array(
                'name' => 'Avg log10 Expr Neuro III'
            ),
            'add_counts_Avg_log10_Expr_Neuro_IV' => array(
                'name' => 'Avg log10 Expr Neuro IV'
            ),
            'add_counts_Avg_log10_Expr_Plykrtns_prolif' => array(
                'name' => 'Avg log10 Expr Plykrtns prolif'
            ),
            'add_counts_Avg_log10_Expr_Polykeratins' => array(
                'name' => 'Avg log10 Expr Polykeratins'
            ),
            'add_counts_Avg_log10_Expr_T_cells_cont' => array(
                'name' => 'Avg log10 Expr T cells cont'
            ),
            'norm_counts_Avg_log10_Expr_cTEC_I_Epip10sub' => array(
                'name' => 's Avg log10 Expr cTEC I Epip10sub'
            ),
            'norm_counts_Avg_log10_Expr_cTEC_I_Epip14sub' => array(
                'name' => 's Avg log10 Expr cTEC I Epip14sub'
            ),
            'norm_counts_Avg_log10_Expr_cTEC_I_Epip6sub' => array(
                'name' => 's Avg log10 Expr cTEC I Epip6sub'
            ),
            'norm_counts_Avg_log10_Expr_cTEC_I_Epip7sub' => array(
                'name' => 's Avg log10 Expr cTEC I Epip7sub'
            ),
            'norm_counts_Avg_log10_Expr_cTEC_II_Epip10sub' => array(
                'name' => 's Avg log10 Expr cTEC II Epip10sub'
            ),
            'norm_counts_Avg_log10_Expr_cTEC_II_Epip14sub' => array(
                'name' => 's Avg log10 Expr cTEC II Epip14sub'
            ),
            'norm_counts_Avg_log10_Expr_cTEC_II_Epip6sub' => array(
                'name' => 's Avg log10 Expr cTEC II Epip6sub'
            ),
            'norm_counts_Avg_log10_Expr_cTEC_II_Epip7sub' => array(
                'name' => 's Avg log10 Expr cTEC II Epip7sub'
            ),
            'norm_counts_Avg_log10_Expr_cTEC_III_Epip10sub' => array(
                'name' => 's Avg log10 Expr cTEC III Epip10sub'
            ),
            'norm_counts_Avg_log10_Expr_cTEC_III_Epip14sub' => array(
                'name' => 's Avg log10 Expr cTEC III Epip14sub'
            ),
            'norm_counts_Avg_log10_Expr_cTEC_III_Epip6sub' => array(
                'name' => 's Avg log10 Expr cTEC III Epip6sub'
            ),
            'norm_counts_Avg_log10_Expr_cTEC_III_Epip7sub' => array(
                'name' => 's Avg log10 Expr cTEC III Epip7sub'
            ),
            'norm_counts_Avg_log10_Expr_Ionocytes_Epip10sub' => array(
                'name' => 's Avg log10 Expr Ionocytes Epip10sub'
            ),
            'norm_counts_Avg_log10_Expr_Ionocytes_Epip14sub' => array(
                'name' => 's Avg log10 Expr Ionocytes Epip14sub'
            ),
            'norm_counts_Avg_log10_Expr_Ionocytes_Epip6sub' => array(
                'name' => 's Avg log10 Expr Ionocytes Epip6sub'
            ),
            'norm_counts_Avg_log10_Expr_Ionocytes_Epip7sub' => array(
                'name' => 's Avg log10 Expr Ionocytes Epip7sub'
            ),
            'norm_counts_Avg_log10_Expr_mTEC_AIREpos_Epip10sub' => array(
                'name' => 's Avg log10 Expr mTEC AIREpos Epip10sub'
            ),
            'norm_counts_Avg_log10_Expr_mTEC_AIREpos_Epip14sub' => array(
                'name' => 's Avg log10 Expr mTEC AIREpos Epip14sub'
            ),
            'norm_counts_Avg_log10_Expr_mTEC_AIREpos_Epip6sub' => array(
                'name' => 's Avg log10 Expr mTEC AIREpos Epip6sub'
            ),
            'norm_counts_Avg_log10_Expr_mTEC_AIREpos_Epip7sub' => array(
                'name' => 's Avg log10 Expr mTEC AIREpos Epip7sub'
            ),
            'norm_counts_Avg_log10_Expr_mTEC_diff_Epip10sub' => array(
                'name' => 's Avg log10 Expr mTEC diff Epip10sub'
            ),
            'norm_counts_Avg_log10_Expr_mTEC_diff_Epip14sub' => array(
                'name' => 's Avg log10 Expr mTEC diff Epip14sub'
            ),
            'norm_counts_Avg_log10_Expr_mTEC_diff_Epip6sub' => array(
                'name' => 's Avg log10 Expr mTEC diff Epip6sub'
            ),
            'norm_counts_Avg_log10_Expr_mTEC_diff_Epip7sub' => array(
                'name' => 's Avg log10 Expr mTEC diff Epip7sub'
            ),
            'norm_counts_Avg_log10_Expr_Myo_mTEC_Epip10sub' => array(
                'name' => 's Avg log10 Expr Myo mTEC Epip10sub'
            ),
            'norm_counts_Avg_log10_Expr_Myo_mTEC_Epip6sub' => array(
                'name' => 's Avg log10 Expr Myo mTEC Epip6sub'
            ),
            'norm_counts_Avg_log10_Expr_Myo_mTEC_Epip7sub' => array(
                'name' => 's Avg log10 Expr Myo mTEC Epip7sub'
            ),
            'norm_counts_Avg_log10_Expr_Neuro_I_Epip10sub' => array(
                'name' => 's Avg log10 Expr Neuro I Epip10sub'
            ),
            'norm_counts_Avg_log10_Expr_Neuro_I_Epip14sub' => array(
                'name' => 's Avg log10 Expr Neuro I Epip14sub'
            ),
            'norm_counts_Avg_log10_Expr_Neuro_I_Epip6sub' => array(
                'name' => 's Avg log10 Expr Neuro I Epip6sub'
            ),
            'norm_counts_Avg_log10_Expr_Neuro_I_Epip7sub' => array(
                'name' => 's Avg log10 Expr Neuro I Epip7sub'
            ),
            'norm_counts_Avg_log10_Expr_Neuro_II_Epip10sub' => array(
                'name' => 's Avg log10 Expr Neuro II Epip10sub'
            ),
            'norm_counts_Avg_log10_Expr_Neuro_II_Epip14sub' => array(
                'name' => 's Avg log10 Expr Neuro II Epip14sub'
            ),
            'norm_counts_Avg_log10_Expr_Neuro_II_Epip6sub' => array(
                'name' => 's Avg log10 Expr Neuro II Epip6sub'
            ),
            'norm_counts_Avg_log10_Expr_Neuro_II_Epip7sub' => array(
                'name' => 's Avg log10 Expr Neuro II Epip7sub'
            ),
            'norm_counts_Avg_log10_Expr_Neuro_III_Epip10sub' => array(
                'name' => 's Avg log10 Expr Neuro III Epip10sub'
            ),
            'norm_counts_Avg_log10_Expr_Neuro_III_Epip14sub' => array(
                'name' => 's Avg log10 Expr Neuro III Epip14sub'
            ),
            'norm_counts_Avg_log10_Expr_Neuro_III_Epip6sub' => array(
                'name' => 's Avg log10 Expr Neuro III Epip6sub'
            ),
            'norm_counts_Avg_log10_Expr_Neuro_III_Epip7sub' => array(
                'name' => 's Avg log10 Expr Neuro III Epip7sub'
            ),
            'norm_counts_Avg_log10_Expr_Neuro_IV_Epip7sub' => array(
                'name' => 's Avg log10 Expr Neuro IV Epip7sub'
            ),
            'norm_counts_Avg_log10_Expr_Plykrtns_prolif_Epip10sub' => array(
                'name' => 's Avg log10 Expr Plykrtns prolif Epip10sub'
            ),
            'norm_counts_Avg_log10_Expr_Plykrtns_prolif_Epip14sub' => array(
                'name' => 's Avg log10 Expr Plykrtns prolif Epip14sub'
            ),
            'norm_counts_Avg_log10_Expr_Plykrtns_prolif_Epip6sub' => array(
                'name' => 's Avg log10 Expr Plykrtns prolif Epip6sub'
            ),
            'norm_counts_Avg_log10_Expr_Plykrtns_prolif_Epip7sub' => array(
                'name' => 's Avg log10 Expr Plykrtns prolif Epip7sub'
            ),
            'norm_counts_Avg_log10_Expr_Polykeratins_Epip10sub' => array(
                'name' => 's Avg log10 Expr Polykeratins Epip10sub'
            ),
            'norm_counts_Avg_log10_Expr_Polykeratins_Epip14sub' => array(
                'name' => 's Avg log10 Expr Polykeratins Epip14sub'
            ),
            'norm_counts_Avg_log10_Expr_Polykeratins_Epip6sub' => array(
                'name' => 's Avg log10 Expr Polykeratins Epip6sub'
            ),
            'norm_counts_Avg_log10_Expr_Polykeratins_Epip7sub' => array(
                'name' => 's Avg log10 Expr Polykeratins Epip7sub'
            ),
            'norm_counts_Avg_log10_Expr_T_cells_cont_Epip10sub' => array(
                'name' => 's Avg log10 Expr T cells cont Epip10sub'
            ),
            'norm_counts_Avg_log10_Expr_T_cells_cont_Epip14sub' => array(
                'name' => 's Avg log10 Expr T cells cont Epip14sub'
            ),
            'norm_counts_Avg_log10_Expr_T_cells_cont_Epip6sub' => array(
                'name' => 's Avg log10 Expr T cells cont Epip6sub'
            ),
            'norm_counts_Avg_log10_Expr_T_cells_cont_Epip7sub' => array(
                'name' => 's Avg log10 Expr T cells cont Epip7sub'
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
            'add_counts_T_cells_cont_Residuals' => array(
                'name' => 'T cells cont Residuals'
            ),
            'add_counts_cTEC_I_Residuals' => array(
                'name' => 'cTEC I Residuals'
            ),
            'add_counts_cTEC_II_Residuals' => array(
                'name' => 'cTEC II Residuals'
            ),
            'add_counts_cTEC_III_Residuals' => array(
                'name' => 'cTEC III Residuals'
            ),
            'add_counts_Polykeratins_Residuals' => array(
                'name' => 'Polykeratins Residuals'
            ),
            'add_counts_Plykrtns_prolif_Residuals' => array(
                'name' => 'Plykrtns prolif Residuals'
            ),
            'add_counts_mTEC_diff_Residuals' => array(
                'name' => 'mTEC diff Residuals'
            ),
            'add_counts_Myo_mTEC_Residuals' => array(
                'name' => 'Myo mTEC Residuals'
            ),
            'add_counts_Neuro_I_Residuals' => array(
                'name' => 'Neuro I Residuals'
            ),
            'add_counts_Neuro_II_Residuals' => array(
                'name' => 'Neuro II Residuals'
            ),
            'add_counts_Neuro_III_Residuals' => array(
                'name' => 'Neuro III Residuals'
            ),
            'add_counts_Neuro_IV_Residuals' => array(
                'name' => 'Neuro IV Residuals'
            ),
            'add_counts_Ionocytes_Residuals' => array(
                'name' => 'Ionocytes Residuals'
            ),
            'add_counts_mTEC_AIREpos_Residuals' => array(
                'name' => 'mTEC AIREpos Residuals'
            )
        )
    )
//End scatterplot
);
