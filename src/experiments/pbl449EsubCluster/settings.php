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
            'cat_table_name' => 'pbl449EsubCluster_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'pbl449EsubCluster_sc_rna_seq_table',
    'primary_gene_symbol' => 'hgnc_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged Expr',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Avg_log10_Expr_C1_CortexThy89sub' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C1 CortexThy89sub'
        ),
        'norm_counts_Avg_log10_Expr_C1_CortexThy94sub' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C1 CortexThy94sub'
        ),
        'norm_counts_Avg_log10_Expr_C1_MedullaThy89sub' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C1 MedullaThy89sub'
        ),
        'norm_counts_Avg_log10_Expr_C1_MedullaThy94sub' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C1 MedullaThy94sub'
        ),
        'norm_counts_Avg_log10_Expr_C1_Skin01sub' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C1 Skin01sub'
        ),
        'norm_counts_Avg_log10_Expr_C1_ThyP89sub' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C1 ThyP89sub'
        ),
        'norm_counts_Avg_log10_Expr_C1_ThyP94sub' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C1 ThyP94sub'
        ),
        'norm_counts_Avg_log10_Expr_C2_CortexThy89sub' => array(
            'color' => '#00BA38',
            'name' => 'Avg log10 Expr C2 CortexThy89sub'
        ),
        'norm_counts_Avg_log10_Expr_C2_CortexThy94sub' => array(
            'color' => '#00BA38',
            'name' => 'Avg log10 Expr C2 CortexThy94sub'
        ),
        'norm_counts_Avg_log10_Expr_C2_MedullaThy89sub' => array(
            'color' => '#00BA38',
            'name' => 'Avg log10 Expr C2 MedullaThy89sub'
        ),
        'norm_counts_Avg_log10_Expr_C2_MedullaThy94sub' => array(
            'color' => '#00BA38',
            'name' => 'Avg log10 Expr C2 MedullaThy94sub'
        ),
        'norm_counts_Avg_log10_Expr_C2_Skin01sub' => array(
            'color' => '#00BA38',
            'name' => 'Avg log10 Expr C2 Skin01sub'
        ),
        'norm_counts_Avg_log10_Expr_C2_ThyP89sub' => array(
            'color' => '#00BA38',
            'name' => 'Avg log10 Expr C2 ThyP89sub'
        ),
        'norm_counts_Avg_log10_Expr_C2_ThyP94sub' => array(
            'color' => '#00BA38',
            'name' => 'Avg log10 Expr C2 ThyP94sub'
        ),
        'norm_counts_Avg_log10_Expr_C3_CortexThy89sub' => array(
            'color' => '#619CFF',
            'name' => 'Avg log10 Expr C3 CortexThy89sub'
        ),
        'norm_counts_Avg_log10_Expr_C3_CortexThy94sub' => array(
            'color' => '#619CFF',
            'name' => 'Avg log10 Expr C3 CortexThy94sub'
        ),
        'norm_counts_Avg_log10_Expr_C3_MedullaThy89sub' => array(
            'color' => '#619CFF',
            'name' => 'Avg log10 Expr C3 MedullaThy89sub'
        ),
        'norm_counts_Avg_log10_Expr_C3_MedullaThy94sub' => array(
            'color' => '#619CFF',
            'name' => 'Avg log10 Expr C3 MedullaThy94sub'
        ),
        'norm_counts_Avg_log10_Expr_C3_Skin01sub' => array(
            'color' => '#619CFF',
            'name' => 'Avg log10 Expr C3 Skin01sub'
        ),
        'norm_counts_Avg_log10_Expr_C3_ThyP89sub' => array(
            'color' => '#619CFF',
            'name' => 'Avg log10 Expr C3 ThyP89sub'
        ),
        'norm_counts_Avg_log10_Expr_C3_ThyP94sub' => array(
            'color' => '#619CFF',
            'name' => 'Avg log10 Expr C3 ThyP94sub'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'lg10 Expr for all Samples',
        'sidelabel' => 'lg10 Expr'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Avg_log10_Expr_Sc_C1_CortexThy89sub','lg2_avg_Avg_log10_Expr_Sc_C1_CortexThy94sub','lg2_avg_Avg_log10_Expr_Sc_C1_MedullaThy89sub','lg2_avg_Avg_log10_Expr_Sc_C1_MedullaThy94sub','lg2_avg_Avg_log10_Expr_Sc_C1_Skin01sub','lg2_avg_Avg_log10_Expr_Sc_C1_ThyP89sub','lg2_avg_Avg_log10_Expr_Sc_C1_ThyP94sub','lg2_avg_Avg_log10_Expr_Sc_C2_CortexThy89sub','lg2_avg_Avg_log10_Expr_Sc_C2_CortexThy94sub','lg2_avg_Avg_log10_Expr_Sc_C2_MedullaThy89sub','lg2_avg_Avg_log10_Expr_Sc_C2_MedullaThy94sub','lg2_avg_Avg_log10_Expr_Sc_C2_Skin01sub','lg2_avg_Avg_log10_Expr_Sc_C2_ThyP89sub','lg2_avg_Avg_log10_Expr_Sc_C2_ThyP94sub','lg2_avg_Avg_log10_Expr_Sc_C3_CortexThy89sub','lg2_avg_Avg_log10_Expr_Sc_C3_CortexThy94sub','lg2_avg_Avg_log10_Expr_Sc_C3_MedullaThy89sub','lg2_avg_Avg_log10_Expr_Sc_C3_MedullaThy94sub','lg2_avg_Avg_log10_Expr_Sc_C3_Skin01sub','lg2_avg_Avg_log10_Expr_Sc_C3_ThyP89sub','lg2_avg_Avg_log10_Expr_Sc_C3_ThyP94sub'),

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
        'add_counts_C1_Residuals' => array(
            'name' => 'C1 Residuals',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'add_counts_C2_Residuals' => array(
            'name' => 'C2 Residuals',
            'slider_min' => -2,
            'slider_max' => 1,
            'default_low' => -2,
            'default_high' => 1
        ),
        'add_counts_C3_Residuals' => array(
            'name' => 'C3 Residuals',
            'slider_min' => -1,
            'slider_max' => 2,
            'default_low' => -1,
            'default_high' => 2
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'pbl449EsubCluster_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'add_counts_Avg_log10_Expr_all',
        'default-y' => 'norm_counts_Avg_log10_Expr_C1_CortexThy89sub',
        'selection' => array(
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg log10 Expr all'
            ),
            'norm_counts_Avg_log10_Expr_C1_CortexThy89sub' => array(
                'name' => 's Avg log10 Expr C1 CortexThy89sub'
            ),
            'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
                'name' => 'logFC Expressed in N Percent Cells'
            ),
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg log10 Expr all'
            ),
            'add_counts_Avg_log10_Expr_C1' => array(
                'name' => 'Avg log10 Expr C1'
            ),
            'add_counts_Avg_log10_Expr_C2' => array(
                'name' => 'Avg log10 Expr C2'
            ),
            'add_counts_Avg_log10_Expr_C3' => array(
                'name' => 'Avg log10 Expr C3'
            ),
            'add_counts_Avg_log10_Expr_CortexThy89sub' => array(
                'name' => 'Avg log10 Expr CortexThy89sub'
            ),
            'add_counts_Avg_log10_Expr_CortexThy94sub' => array(
                'name' => 'Avg log10 Expr CortexThy94sub'
            ),
            'add_counts_Avg_log10_Expr_MedullaThy89sub' => array(
                'name' => 'Avg log10 Expr MedullaThy89sub'
            ),
            'add_counts_Avg_log10_Expr_MedullaThy94sub' => array(
                'name' => 'Avg log10 Expr MedullaThy94sub'
            ),
            'add_counts_Avg_log10_Expr_Skin01sub' => array(
                'name' => 'Avg log10 Expr Skin01sub'
            ),
            'add_counts_Avg_log10_Expr_ThyP89sub' => array(
                'name' => 'Avg log10 Expr ThyP89sub'
            ),
            'add_counts_Avg_log10_Expr_ThyP94sub' => array(
                'name' => 'Avg log10 Expr ThyP94sub'
            ),
            'norm_counts_Avg_log10_Expr_C1_CortexThy89sub' => array(
                'name' => 's Avg log10 Expr C1 CortexThy89sub'
            ),
            'norm_counts_Avg_log10_Expr_C1_CortexThy94sub' => array(
                'name' => 's Avg log10 Expr C1 CortexThy94sub'
            ),
            'norm_counts_Avg_log10_Expr_C1_MedullaThy89sub' => array(
                'name' => 's Avg log10 Expr C1 MedullaThy89sub'
            ),
            'norm_counts_Avg_log10_Expr_C1_MedullaThy94sub' => array(
                'name' => 's Avg log10 Expr C1 MedullaThy94sub'
            ),
            'norm_counts_Avg_log10_Expr_C1_Skin01sub' => array(
                'name' => 's Avg log10 Expr C1 Skin01sub'
            ),
            'norm_counts_Avg_log10_Expr_C1_ThyP89sub' => array(
                'name' => 's Avg log10 Expr C1 ThyP89sub'
            ),
            'norm_counts_Avg_log10_Expr_C1_ThyP94sub' => array(
                'name' => 's Avg log10 Expr C1 ThyP94sub'
            ),
            'norm_counts_Avg_log10_Expr_C2_CortexThy89sub' => array(
                'name' => 's Avg log10 Expr C2 CortexThy89sub'
            ),
            'norm_counts_Avg_log10_Expr_C2_CortexThy94sub' => array(
                'name' => 's Avg log10 Expr C2 CortexThy94sub'
            ),
            'norm_counts_Avg_log10_Expr_C2_MedullaThy89sub' => array(
                'name' => 's Avg log10 Expr C2 MedullaThy89sub'
            ),
            'norm_counts_Avg_log10_Expr_C2_MedullaThy94sub' => array(
                'name' => 's Avg log10 Expr C2 MedullaThy94sub'
            ),
            'norm_counts_Avg_log10_Expr_C2_Skin01sub' => array(
                'name' => 's Avg log10 Expr C2 Skin01sub'
            ),
            'norm_counts_Avg_log10_Expr_C2_ThyP89sub' => array(
                'name' => 's Avg log10 Expr C2 ThyP89sub'
            ),
            'norm_counts_Avg_log10_Expr_C2_ThyP94sub' => array(
                'name' => 's Avg log10 Expr C2 ThyP94sub'
            ),
            'norm_counts_Avg_log10_Expr_C3_CortexThy89sub' => array(
                'name' => 's Avg log10 Expr C3 CortexThy89sub'
            ),
            'norm_counts_Avg_log10_Expr_C3_CortexThy94sub' => array(
                'name' => 's Avg log10 Expr C3 CortexThy94sub'
            ),
            'norm_counts_Avg_log10_Expr_C3_MedullaThy89sub' => array(
                'name' => 's Avg log10 Expr C3 MedullaThy89sub'
            ),
            'norm_counts_Avg_log10_Expr_C3_MedullaThy94sub' => array(
                'name' => 's Avg log10 Expr C3 MedullaThy94sub'
            ),
            'norm_counts_Avg_log10_Expr_C3_Skin01sub' => array(
                'name' => 's Avg log10 Expr C3 Skin01sub'
            ),
            'norm_counts_Avg_log10_Expr_C3_ThyP89sub' => array(
                'name' => 's Avg log10 Expr C3 ThyP89sub'
            ),
            'norm_counts_Avg_log10_Expr_C3_ThyP94sub' => array(
                'name' => 's Avg log10 Expr C3 ThyP94sub'
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
            'add_counts_C1_Residuals' => array(
                'name' => 'C1 Residuals'
            ),
            'add_counts_C2_Residuals' => array(
                'name' => 'C2 Residuals'
            ),
            'add_counts_C3_Residuals' => array(
                'name' => 'C3 Residuals'
            )
        )
    )
//End scatterplot
);
