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
            'cat_table_name' => 'pbl442subCluster_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'pbl442subCluster_sc_rna_seq_table',
    'primary_gene_symbol' => 'hgnc_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged Expr',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Avg_log10_Expr_cTEC_Epip10sub' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr cTEC Epip10sub'
        ),
        'norm_counts_Avg_log10_Expr_cTEC_Epip6sub' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr cTEC Epip6sub'
        ),
        'norm_counts_Avg_log10_Expr_CTGF_Ply_Krtn_Epip10sub' => array(
            'color' => '#B79F00',
            'name' => 'Avg log10 Expr CTGF Ply Krtn Epip10sub'
        ),
        'norm_counts_Avg_log10_Expr_CTGF_Ply_Krtn_Epip6sub' => array(
            'color' => '#B79F00',
            'name' => 'Avg log10 Expr CTGF Ply Krtn Epip6sub'
        ),
        'norm_counts_Avg_log10_Expr_Ionocytes_Epip10sub' => array(
            'color' => '#00BA38',
            'name' => 'Avg log10 Expr Ionocytes Epip10sub'
        ),
        'norm_counts_Avg_log10_Expr_Ionocytes_Epip6sub' => array(
            'color' => '#00BA38',
            'name' => 'Avg log10 Expr Ionocytes Epip6sub'
        ),
        'norm_counts_Avg_log10_Expr_Myo_mTEC_Epip10sub' => array(
            'color' => '#00BFC4',
            'name' => 'Avg log10 Expr Myo mTEC Epip10sub'
        ),
        'norm_counts_Avg_log10_Expr_Myo_mTEC_Epip6sub' => array(
            'color' => '#00BFC4',
            'name' => 'Avg log10 Expr Myo mTEC Epip6sub'
        ),
        'norm_counts_Avg_log10_Expr_Ply_Krtn_Epip10sub' => array(
            'color' => '#619CFF',
            'name' => 'Avg log10 Expr Ply Krtn Epip10sub'
        ),
        'norm_counts_Avg_log10_Expr_Ply_Krtn_Epip6sub' => array(
            'color' => '#619CFF',
            'name' => 'Avg log10 Expr Ply Krtn Epip6sub'
        ),
        'norm_counts_Avg_log10_Expr_Prol_Ply_Krtn_Epip10sub' => array(
            'color' => '#F564E3',
            'name' => 'Avg log10 Expr Prol Ply Krtn Epip10sub'
        ),
        'norm_counts_Avg_log10_Expr_Prol_Ply_Krtn_Epip6sub' => array(
            'color' => '#F564E3',
            'name' => 'Avg log10 Expr Prol Ply Krtn Epip6sub'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'lg10 Expr for all Samples',
        'sidelabel' => 'lg10 Expr'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Avg_log10_Expr_Sc_cTEC_Epip10sub','lg2_avg_Avg_log10_Expr_Sc_cTEC_Epip6sub','lg2_avg_Avg_log10_Expr_Sc_CTGF_Ply_Krtn_Epip10sub','lg2_avg_Avg_log10_Expr_Sc_CTGF_Ply_Krtn_Epip6sub','lg2_avg_Avg_log10_Expr_Sc_Ionocytes_Epip10sub','lg2_avg_Avg_log10_Expr_Sc_Ionocytes_Epip6sub','lg2_avg_Avg_log10_Expr_Sc_Myo_mTEC_Epip10sub','lg2_avg_Avg_log10_Expr_Sc_Myo_mTEC_Epip6sub','lg2_avg_Avg_log10_Expr_Sc_Ply_Krtn_Epip10sub','lg2_avg_Avg_log10_Expr_Sc_Ply_Krtn_Epip6sub','lg2_avg_Avg_log10_Expr_Sc_Prol_Ply_Krtn_Epip10sub','lg2_avg_Avg_log10_Expr_Sc_Prol_Ply_Krtn_Epip6sub'),

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
        'add_counts_Ply_Krtn_Residuals' => array(
            'name' => 'Ply Krtn Residuals',
            'slider_min' => -2,
            'slider_max' => 1,
            'default_low' => -2,
            'default_high' => 1
        ),
        'add_counts_CTGF_Ply_Krtn_Residuals' => array(
            'name' => 'CTGF Ply Krtn Residuals',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'add_counts_Myo_mTEC_Residuals' => array(
            'name' => 'Myo mTEC Residuals',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'add_counts_cTEC_Residuals' => array(
            'name' => 'cTEC Residuals',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'add_counts_Ionocytes_Residuals' => array(
            'name' => 'Ionocytes Residuals',
            'slider_min' => -4,
            'slider_max' => 2,
            'default_low' => -4,
            'default_high' => 2
        ),
        'add_counts_Prol_Ply_Krtn_Residuals' => array(
            'name' => 'Prol Ply Krtn Residuals',
            'slider_min' => -2,
            'slider_max' => 3,
            'default_low' => -2,
            'default_high' => 3
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'pbl442subCluster_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'add_counts_Avg_log10_Expr_all',
        'default-y' => 'norm_counts_Avg_log10_Expr_cTEC_Epip10sub',
        'selection' => array(
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg log10 Expr all'
            ),
            'norm_counts_Avg_log10_Expr_cTEC_Epip10sub' => array(
                'name' => 's Avg log10 Expr cTEC Epip10sub'
            ),
            'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
                'name' => 'logFC Expressed in N Percent Cells'
            ),
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg log10 Expr all'
            ),
            'add_counts_Avg_log10_Expr_cTEC' => array(
                'name' => 'Avg log10 Expr cTEC'
            ),
            'add_counts_Avg_log10_Expr_CTGF_Ply_Krtn' => array(
                'name' => 'Avg log10 Expr CTGF Ply Krtn'
            ),
            'add_counts_Avg_log10_Expr_Epip10sub' => array(
                'name' => 'Avg log10 Expr Epip10sub'
            ),
            'add_counts_Avg_log10_Expr_Epip6sub' => array(
                'name' => 'Avg log10 Expr Epip6sub'
            ),
            'add_counts_Avg_log10_Expr_Ionocytes' => array(
                'name' => 'Avg log10 Expr Ionocytes'
            ),
            'add_counts_Avg_log10_Expr_Myo_mTEC' => array(
                'name' => 'Avg log10 Expr Myo mTEC'
            ),
            'add_counts_Avg_log10_Expr_Ply_Krtn' => array(
                'name' => 'Avg log10 Expr Ply Krtn'
            ),
            'add_counts_Avg_log10_Expr_Prol_Ply_Krtn' => array(
                'name' => 'Avg log10 Expr Prol Ply Krtn'
            ),
            'norm_counts_Avg_log10_Expr_cTEC_Epip10sub' => array(
                'name' => 's Avg log10 Expr cTEC Epip10sub'
            ),
            'norm_counts_Avg_log10_Expr_cTEC_Epip6sub' => array(
                'name' => 's Avg log10 Expr cTEC Epip6sub'
            ),
            'norm_counts_Avg_log10_Expr_CTGF_Ply_Krtn_Epip10sub' => array(
                'name' => 's Avg log10 Expr CTGF Ply Krtn Epip10sub'
            ),
            'norm_counts_Avg_log10_Expr_CTGF_Ply_Krtn_Epip6sub' => array(
                'name' => 's Avg log10 Expr CTGF Ply Krtn Epip6sub'
            ),
            'norm_counts_Avg_log10_Expr_Ionocytes_Epip10sub' => array(
                'name' => 's Avg log10 Expr Ionocytes Epip10sub'
            ),
            'norm_counts_Avg_log10_Expr_Ionocytes_Epip6sub' => array(
                'name' => 's Avg log10 Expr Ionocytes Epip6sub'
            ),
            'norm_counts_Avg_log10_Expr_Myo_mTEC_Epip10sub' => array(
                'name' => 's Avg log10 Expr Myo mTEC Epip10sub'
            ),
            'norm_counts_Avg_log10_Expr_Myo_mTEC_Epip6sub' => array(
                'name' => 's Avg log10 Expr Myo mTEC Epip6sub'
            ),
            'norm_counts_Avg_log10_Expr_Ply_Krtn_Epip10sub' => array(
                'name' => 's Avg log10 Expr Ply Krtn Epip10sub'
            ),
            'norm_counts_Avg_log10_Expr_Ply_Krtn_Epip6sub' => array(
                'name' => 's Avg log10 Expr Ply Krtn Epip6sub'
            ),
            'norm_counts_Avg_log10_Expr_Prol_Ply_Krtn_Epip10sub' => array(
                'name' => 's Avg log10 Expr Prol Ply Krtn Epip10sub'
            ),
            'norm_counts_Avg_log10_Expr_Prol_Ply_Krtn_Epip6sub' => array(
                'name' => 's Avg log10 Expr Prol Ply Krtn Epip6sub'
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
            'add_counts_Ply_Krtn_Residuals' => array(
                'name' => 'Ply Krtn Residuals'
            ),
            'add_counts_CTGF_Ply_Krtn_Residuals' => array(
                'name' => 'CTGF Ply Krtn Residuals'
            ),
            'add_counts_Myo_mTEC_Residuals' => array(
                'name' => 'Myo mTEC Residuals'
            ),
            'add_counts_cTEC_Residuals' => array(
                'name' => 'cTEC Residuals'
            ),
            'add_counts_Ionocytes_Residuals' => array(
                'name' => 'Ionocytes Residuals'
            ),
            'add_counts_Prol_Ply_Krtn_Residuals' => array(
                'name' => 'Prol Ply Krtn Residuals'
            )
        )
    )
//End scatterplot
);
