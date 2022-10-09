<?php

return array(
    'public_access' => TRUE,
    'lab' => array(
        'name' => 'Regev DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'neuro_ref_data',
    'data_db' => array(
            'cat_table_name' => 'Neuroblastoma_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'Neuroblastoma_sc_rna_seq_table',
    'primary_gene_symbol' => 'hgnc_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged Expr',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Avg_log10_Expr_B_cells_singleCellNB' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr B cells singleCellNB'
        ),
        'norm_counts_Avg_log10_Expr_B_cells_singleNucleiNB' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr B cells singleNucleiNB'
        ),
        'norm_counts_Avg_log10_Expr_Endothelial_A_singleCellNB' => array(
            'color' => '#DB8E00',
            'name' => 'Avg log10 Expr Endothelial A singleCellNB'
        ),
        'norm_counts_Avg_log10_Expr_Endothelial_A_singleNucleiNB' => array(
            'color' => '#DB8E00',
            'name' => 'Avg log10 Expr Endothelial A singleNucleiNB'
        ),
        'norm_counts_Avg_log10_Expr_Endothelial_B_singleCellNB' => array(
            'color' => '#AEA200',
            'name' => 'Avg log10 Expr Endothelial B singleCellNB'
        ),
        'norm_counts_Avg_log10_Expr_Endothelial_B_singleNucleiNB' => array(
            'color' => '#AEA200',
            'name' => 'Avg log10 Expr Endothelial B singleNucleiNB'
        ),
        'norm_counts_Avg_log10_Expr_Fibrobl_A_singleCellNB' => array(
            'color' => '#64B200',
            'name' => 'Avg log10 Expr Fibrobl A singleCellNB'
        ),
        'norm_counts_Avg_log10_Expr_Fibrobl_A_singleNucleiNB' => array(
            'color' => '#64B200',
            'name' => 'Avg log10 Expr Fibrobl A singleNucleiNB'
        ),
        'norm_counts_Avg_log10_Expr_Fibrobl_B_singleCellNB' => array(
            'color' => '#00BD5C',
            'name' => 'Avg log10 Expr Fibrobl B singleCellNB'
        ),
        'norm_counts_Avg_log10_Expr_Fibrobl_B_singleNucleiNB' => array(
            'color' => '#00BD5C',
            'name' => 'Avg log10 Expr Fibrobl B singleNucleiNB'
        ),
        'norm_counts_Avg_log10_Expr_Macrophage_singleCellNB' => array(
            'color' => '#00C1A7',
            'name' => 'Avg log10 Expr Macrophage singleCellNB'
        ),
        'norm_counts_Avg_log10_Expr_Macrophage_singleNucleiNB' => array(
            'color' => '#00C1A7',
            'name' => 'Avg log10 Expr Macrophage singleNucleiNB'
        ),
        'norm_counts_Avg_log10_Expr_N_endocrine_singleCellNB' => array(
            'color' => '#00BADE',
            'name' => 'Avg log10 Expr N endocrine singleCellNB'
        ),
        'norm_counts_Avg_log10_Expr_N_endocrine_singleNucleiNB' => array(
            'color' => '#00BADE',
            'name' => 'Avg log10 Expr N endocrine singleNucleiNB'
        ),
        'norm_counts_Avg_log10_Expr_NeurCrest_singleCellNB' => array(
            'color' => '#00A6FF',
            'name' => 'Avg log10 Expr NeurCrest singleCellNB'
        ),
        'norm_counts_Avg_log10_Expr_NeurCrest_singleNucleiNB' => array(
            'color' => '#00A6FF',
            'name' => 'Avg log10 Expr NeurCrest singleNucleiNB'
        ),
        'norm_counts_Avg_log10_Expr_NK_T_cells_singleCellNB' => array(
            'color' => '#B385FF',
            'name' => 'Avg log10 Expr NK T cells singleCellNB'
        ),
        'norm_counts_Avg_log10_Expr_NK_T_cells_singleNucleiNB' => array(
            'color' => '#B385FF',
            'name' => 'Avg log10 Expr NK T cells singleNucleiNB'
        ),
        'norm_counts_Avg_log10_Expr_T_cells_singleCellNB' => array(
            'color' => '#EF67EB',
            'name' => 'Avg log10 Expr T cells singleCellNB'
        ),
        'norm_counts_Avg_log10_Expr_T_cells_singleNucleiNB' => array(
            'color' => '#EF67EB',
            'name' => 'Avg log10 Expr T cells singleNucleiNB'
        ),
        'norm_counts_Avg_log10_Expr_Z_glomerulosa_singleCellNB' => array(
            'color' => '#FF63B6',
            'name' => 'Avg log10 Expr Z glomerulosa singleCellNB'
        ),
        'norm_counts_Avg_log10_Expr_Z_glomerulosa_singleNucleiNB' => array(
            'color' => '#FF63B6',
            'name' => 'Avg log10 Expr Z glomerulosa singleNucleiNB'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'lg10 Expr for all Samples',
        'sidelabel' => 'lg10 Expr'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Avg_log10_Expr_Sc_B_cells_singleCellNB','lg2_avg_Avg_log10_Expr_Sc_B_cells_singleNucleiNB','lg2_avg_Avg_log10_Expr_Sc_Endothelial_A_singleCellNB','lg2_avg_Avg_log10_Expr_Sc_Endothelial_A_singleNucleiNB','lg2_avg_Avg_log10_Expr_Sc_Endothelial_B_singleCellNB','lg2_avg_Avg_log10_Expr_Sc_Endothelial_B_singleNucleiNB','lg2_avg_Avg_log10_Expr_Sc_Fibrobl_A_singleCellNB','lg2_avg_Avg_log10_Expr_Sc_Fibrobl_A_singleNucleiNB','lg2_avg_Avg_log10_Expr_Sc_Fibrobl_B_singleCellNB','lg2_avg_Avg_log10_Expr_Sc_Fibrobl_B_singleNucleiNB','lg2_avg_Avg_log10_Expr_Sc_Macrophage_singleCellNB','lg2_avg_Avg_log10_Expr_Sc_Macrophage_singleNucleiNB','lg2_avg_Avg_log10_Expr_Sc_N_endocrine_singleCellNB','lg2_avg_Avg_log10_Expr_Sc_N_endocrine_singleNucleiNB','lg2_avg_Avg_log10_Expr_Sc_NeurCrest_singleCellNB','lg2_avg_Avg_log10_Expr_Sc_NeurCrest_singleNucleiNB','lg2_avg_Avg_log10_Expr_Sc_NK_T_cells_singleCellNB','lg2_avg_Avg_log10_Expr_Sc_NK_T_cells_singleNucleiNB','lg2_avg_Avg_log10_Expr_Sc_T_cells_singleCellNB','lg2_avg_Avg_log10_Expr_Sc_T_cells_singleNucleiNB','lg2_avg_Avg_log10_Expr_Sc_Z_glomerulosa_singleCellNB','lg2_avg_Avg_log10_Expr_Sc_Z_glomerulosa_singleNucleiNB'),

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
        'contrast_1_logFC_DGE_sn_Endothelial_vs_sc_Endothelial' => array(
            'name' => 'logFC DGE sn Endothelial vs sc Endothelial',
            'slider_min' => -13,
            'slider_max' => 12,
            'default_low' => -13,
            'default_high' => 12
        ),
        'contrast_2_logFC_DGE_sn_N_endocrine_vs_N_sc_endocrine' => array(
            'name' => 'logFC DGE sn N endocrine vs N sc endocrine',
            'slider_min' => -10,
            'slider_max' => 11,
            'default_low' => -10,
            'default_high' => 11
        ),
        'contrast_3_logFC_DGE_sn_Fibroblast_vs_sc_Fibroblasts' => array(
            'name' => 'logFC DGE sn Fibroblast vs sc Fibroblasts',
            'slider_min' => -10,
            'slider_max' => 10,
            'default_low' => -10,
            'default_high' => 10
        ),
        'contrast_4_logFC_DGE_sn_T_cells_vs_sc_T_cells' => array(
            'name' => 'logFC DGE sn T cells vs sc T cells',
            'slider_min' => -9,
            'slider_max' => 12,
            'default_low' => -9,
            'default_high' => 12
        ),
        'contrast_5_logFC_DGE_sn_B_cells_vs_sc_B_cells' => array(
            'name' => 'logFC DGE sn B cells vs sc B cells',
            'slider_min' => -6,
            'slider_max' => 12,
            'default_low' => -6,
            'default_high' => 12
        ),
        'add_counts_B_cells_Residuals_Residuals' => array(
            'name' => 'B cells Residuals Residuals',
            'slider_min' => -2,
            'slider_max' => 4,
            'default_low' => -2,
            'default_high' => 4
        ),
        'add_counts_Endothelial_A_Residuals_Residuals' => array(
            'name' => 'Endothelial A Residuals Residuals',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'add_counts_Endothelial_B_Residuals_Residuals' => array(
            'name' => 'Endothelial B Residuals Residuals',
            'slider_min' => -2,
            'slider_max' => 3,
            'default_low' => -2,
            'default_high' => 3
        ),
        'add_counts_Fibrobl_A_Residuals_Residuals' => array(
            'name' => 'Fibrobl A Residuals Residuals',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'add_counts_Fibrobl_B_Residuals_Residuals' => array(
            'name' => 'Fibrobl B Residuals Residuals',
            'slider_min' => -2,
            'slider_max' => 3,
            'default_low' => -2,
            'default_high' => 3
        ),
        'add_counts_Macrophage_Residuals_Residuals' => array(
            'name' => 'Macrophage Residuals Residuals',
            'slider_min' => -2,
            'slider_max' => 3,
            'default_low' => -2,
            'default_high' => 3
        ),
        'add_counts_NeurCrest_Residuals_Residuals' => array(
            'name' => 'NeurCrest Residuals Residuals',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'add_counts_N_endocrine_Residuals_Residuals' => array(
            'name' => 'N endocrine Residuals Residuals',
            'slider_min' => -2,
            'slider_max' => 3,
            'default_low' => -2,
            'default_high' => 3
        ),
        'add_counts_NK_T_cells_Residuals_Residuals' => array(
            'name' => 'NK T cells Residuals Residuals',
            'slider_min' => -2,
            'slider_max' => 3,
            'default_low' => -2,
            'default_high' => 3
        ),
        'add_counts_T_cells_Residuals_Residuals' => array(
            'name' => 'T cells Residuals Residuals',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'add_counts_Z_glomerulosa_Residuals_Residuals' => array(
            'name' => 'Z glomerulosa Residuals Residuals',
            'slider_min' => -2,
            'slider_max' => 3,
            'default_low' => -2,
            'default_high' => 3
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'Neuroblastoma_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'add_counts_Avg_log10_Expr_all',
        'default-y' => 'norm_counts_Avg_log10_Expr_B_cells_singleCellNB',
        'selection' => array(
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg log10 Expr all'
            ),
            'norm_counts_Avg_log10_Expr_B_cells_singleCellNB' => array(
                'name' => 's Avg log10 Expr B cells singleCellNB'
            ),
            'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
                'name' => 'logFC Expressed in N Percent Cells'
            ),
            'contrast_1_logFC_DGE_sn_Endothelial_vs_sc_Endothelial' => array(
                'name' => 'logFC DGE sn Endothelial vs sc Endothelial'
            ),
            'contrast_2_logFC_DGE_sn_N_endocrine_vs_N_sc_endocrine' => array(
                'name' => 'logFC DGE sn N endocrine vs N sc endocrine'
            ),
            'contrast_3_logFC_DGE_sn_Fibroblast_vs_sc_Fibroblasts' => array(
                'name' => 'logFC DGE sn Fibroblast vs sc Fibroblasts'
            ),
            'contrast_4_logFC_DGE_sn_T_cells_vs_sc_T_cells' => array(
                'name' => 'logFC DGE sn T cells vs sc T cells'
            ),
            'contrast_5_logFC_DGE_sn_B_cells_vs_sc_B_cells' => array(
                'name' => 'logFC DGE sn B cells vs sc B cells'
            ),
            'contrast_1_lg10p_DGE_sn_Endothelial_vs_sc_Endothelial' => array(
                'name' => 'lg10p DGE sn Endothelial vs sc Endothelial'
            ),
            'contrast_2_lg10p_DGE_sn_N_endocrine_vs_N_sc_endocrine' => array(
                'name' => 'lg10p DGE sn N endocrine vs N sc endocrine'
            ),
            'contrast_3_lg10p_DGE_sn_Fibroblast_vs_sc_Fibroblasts' => array(
                'name' => 'lg10p DGE sn Fibroblast vs sc Fibroblasts'
            ),
            'contrast_4_lg10p_DGE_sn_T_cells_vs_sc_T_cells' => array(
                'name' => 'lg10p DGE sn T cells vs sc T cells'
            ),
            'contrast_5_lg10p_DGE_sn_B_cells_vs_sc_B_cells' => array(
                'name' => 'lg10p DGE sn B cells vs sc B cells'
            ),
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg log10 Expr all'
            ),
            'add_counts_Avg_log10_Expr_B_cells' => array(
                'name' => 'Avg log10 Expr B cells'
            ),
            'add_counts_Avg_log10_Expr_Endothelial_A' => array(
                'name' => 'Avg log10 Expr Endothelial A'
            ),
            'add_counts_Avg_log10_Expr_Endothelial_B' => array(
                'name' => 'Avg log10 Expr Endothelial B'
            ),
            'add_counts_Avg_log10_Expr_Fibrobl_A' => array(
                'name' => 'Avg log10 Expr Fibrobl A'
            ),
            'add_counts_Avg_log10_Expr_Fibrobl_B' => array(
                'name' => 'Avg log10 Expr Fibrobl B'
            ),
            'add_counts_Avg_log10_Expr_Macrophage' => array(
                'name' => 'Avg log10 Expr Macrophage'
            ),
            'add_counts_Avg_log10_Expr_N_endocrine' => array(
                'name' => 'Avg log10 Expr N endocrine'
            ),
            'add_counts_Avg_log10_Expr_NeurCrest' => array(
                'name' => 'Avg log10 Expr NeurCrest'
            ),
            'add_counts_Avg_log10_Expr_NK_T_cells' => array(
                'name' => 'Avg log10 Expr NK T cells'
            ),
            'add_counts_Avg_log10_Expr_singleCellNB' => array(
                'name' => 'Avg log10 Expr singleCellNB'
            ),
            'add_counts_Avg_log10_Expr_singleNucleiNB' => array(
                'name' => 'Avg log10 Expr singleNucleiNB'
            ),
            'add_counts_Avg_log10_Expr_T_cells' => array(
                'name' => 'Avg log10 Expr T cells'
            ),
            'add_counts_Avg_log10_Expr_Z_glomerulosa' => array(
                'name' => 'Avg log10 Expr Z glomerulosa'
            ),
            'norm_counts_Avg_log10_Expr_B_cells_singleCellNB' => array(
                'name' => 's Avg log10 Expr B cells singleCellNB'
            ),
            'norm_counts_Avg_log10_Expr_B_cells_singleNucleiNB' => array(
                'name' => 's Avg log10 Expr B cells singleNucleiNB'
            ),
            'norm_counts_Avg_log10_Expr_Endothelial_A_singleCellNB' => array(
                'name' => 's Avg log10 Expr Endothelial A singleCellNB'
            ),
            'norm_counts_Avg_log10_Expr_Endothelial_A_singleNucleiNB' => array(
                'name' => 's Avg log10 Expr Endothelial A singleNucleiNB'
            ),
            'norm_counts_Avg_log10_Expr_Endothelial_B_singleCellNB' => array(
                'name' => 's Avg log10 Expr Endothelial B singleCellNB'
            ),
            'norm_counts_Avg_log10_Expr_Endothelial_B_singleNucleiNB' => array(
                'name' => 's Avg log10 Expr Endothelial B singleNucleiNB'
            ),
            'norm_counts_Avg_log10_Expr_Fibrobl_A_singleCellNB' => array(
                'name' => 's Avg log10 Expr Fibrobl A singleCellNB'
            ),
            'norm_counts_Avg_log10_Expr_Fibrobl_A_singleNucleiNB' => array(
                'name' => 's Avg log10 Expr Fibrobl A singleNucleiNB'
            ),
            'norm_counts_Avg_log10_Expr_Fibrobl_B_singleCellNB' => array(
                'name' => 's Avg log10 Expr Fibrobl B singleCellNB'
            ),
            'norm_counts_Avg_log10_Expr_Fibrobl_B_singleNucleiNB' => array(
                'name' => 's Avg log10 Expr Fibrobl B singleNucleiNB'
            ),
            'norm_counts_Avg_log10_Expr_Macrophage_singleCellNB' => array(
                'name' => 's Avg log10 Expr Macrophage singleCellNB'
            ),
            'norm_counts_Avg_log10_Expr_Macrophage_singleNucleiNB' => array(
                'name' => 's Avg log10 Expr Macrophage singleNucleiNB'
            ),
            'norm_counts_Avg_log10_Expr_N_endocrine_singleCellNB' => array(
                'name' => 's Avg log10 Expr N endocrine singleCellNB'
            ),
            'norm_counts_Avg_log10_Expr_N_endocrine_singleNucleiNB' => array(
                'name' => 's Avg log10 Expr N endocrine singleNucleiNB'
            ),
            'norm_counts_Avg_log10_Expr_NeurCrest_singleCellNB' => array(
                'name' => 's Avg log10 Expr NeurCrest singleCellNB'
            ),
            'norm_counts_Avg_log10_Expr_NeurCrest_singleNucleiNB' => array(
                'name' => 's Avg log10 Expr NeurCrest singleNucleiNB'
            ),
            'norm_counts_Avg_log10_Expr_NK_T_cells_singleCellNB' => array(
                'name' => 's Avg log10 Expr NK T cells singleCellNB'
            ),
            'norm_counts_Avg_log10_Expr_NK_T_cells_singleNucleiNB' => array(
                'name' => 's Avg log10 Expr NK T cells singleNucleiNB'
            ),
            'norm_counts_Avg_log10_Expr_T_cells_singleCellNB' => array(
                'name' => 's Avg log10 Expr T cells singleCellNB'
            ),
            'norm_counts_Avg_log10_Expr_T_cells_singleNucleiNB' => array(
                'name' => 's Avg log10 Expr T cells singleNucleiNB'
            ),
            'norm_counts_Avg_log10_Expr_Z_glomerulosa_singleCellNB' => array(
                'name' => 's Avg log10 Expr Z glomerulosa singleCellNB'
            ),
            'norm_counts_Avg_log10_Expr_Z_glomerulosa_singleNucleiNB' => array(
                'name' => 's Avg log10 Expr Z glomerulosa singleNucleiNB'
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
            'add_counts_B_cells_Residuals_Residuals' => array(
                'name' => 'B cells Residuals Residuals'
            ),
            'add_counts_Endothelial_A_Residuals_Residuals' => array(
                'name' => 'Endothelial A Residuals Residuals'
            ),
            'add_counts_Endothelial_B_Residuals_Residuals' => array(
                'name' => 'Endothelial B Residuals Residuals'
            ),
            'add_counts_Fibrobl_A_Residuals_Residuals' => array(
                'name' => 'Fibrobl A Residuals Residuals'
            ),
            'add_counts_Fibrobl_B_Residuals_Residuals' => array(
                'name' => 'Fibrobl B Residuals Residuals'
            ),
            'add_counts_Macrophage_Residuals_Residuals' => array(
                'name' => 'Macrophage Residuals Residuals'
            ),
            'add_counts_NeurCrest_Residuals_Residuals' => array(
                'name' => 'NeurCrest Residuals Residuals'
            ),
            'add_counts_N_endocrine_Residuals_Residuals' => array(
                'name' => 'N endocrine Residuals Residuals'
            ),
            'add_counts_NK_T_cells_Residuals_Residuals' => array(
                'name' => 'NK T cells Residuals Residuals'
            ),
            'add_counts_T_cells_Residuals_Residuals' => array(
                'name' => 'T cells Residuals Residuals'
            ),
            'add_counts_Z_glomerulosa_Residuals_Residuals' => array(
                'name' => 'Z glomerulosa Residuals Residuals'
            )
        )
    )
//End scatterplot
);
