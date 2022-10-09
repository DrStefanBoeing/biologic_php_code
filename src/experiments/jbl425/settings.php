<?php

return array(
    'lab' => array(
        'name' => 'Briscoe DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'jbl_data',
    'data_db' => array(
            'cat_table_name' => 'jbl425_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'jbl425_sc_rna_seq_table',
    'primary_gene_symbol' => 'gg_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged Expr',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Avg_log10_Expr_C_LPM_S10' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C LPM S10'
        ),
        'norm_counts_Avg_log10_Expr_C_LPM_S13' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C LPM S13'
        ),
        'norm_counts_Avg_log10_Expr_C_LPM_S7' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C LPM S7'
        ),
        'norm_counts_Avg_log10_Expr_Endoderm_S10' => array(
            'color' => '#E38900',
            'name' => 'Avg log10 Expr Endoderm S10'
        ),
        'norm_counts_Avg_log10_Expr_Endoderm_S13' => array(
            'color' => '#E38900',
            'name' => 'Avg log10 Expr Endoderm S13'
        ),
        'norm_counts_Avg_log10_Expr_Endoderm_S7' => array(
            'color' => '#E38900',
            'name' => 'Avg log10 Expr Endoderm S7'
        ),
        'norm_counts_Avg_log10_Expr_FP_S10' => array(
            'color' => '#C49A00',
            'name' => 'Avg log10 Expr FP S10'
        ),
        'norm_counts_Avg_log10_Expr_Int_meso_S10' => array(
            'color' => '#99A800',
            'name' => 'Avg log10 Expr Int meso S10'
        ),
        'norm_counts_Avg_log10_Expr_Int_meso_S13' => array(
            'color' => '#99A800',
            'name' => 'Avg log10 Expr Int meso S13'
        ),
        'norm_counts_Avg_log10_Expr_NC_S13' => array(
            'color' => '#53B400',
            'name' => 'Avg log10 Expr NC S13'
        ),
        'norm_counts_Avg_log10_Expr_Neural_Prog_S10' => array(
            'color' => '#00BC56',
            'name' => 'Avg log10 Expr Neural Prog S10'
        ),
        'norm_counts_Avg_log10_Expr_Neural_Prog_S13' => array(
            'color' => '#00BC56',
            'name' => 'Avg log10 Expr Neural Prog S13'
        ),
        'norm_counts_Avg_log10_Expr_Neural_S10' => array(
            'color' => '#00C094',
            'name' => 'Avg log10 Expr Neural S10'
        ),
        'norm_counts_Avg_log10_Expr_Neural_S13' => array(
            'color' => '#00C094',
            'name' => 'Avg log10 Expr Neural S13'
        ),
        'norm_counts_Avg_log10_Expr_Neural_S7' => array(
            'color' => '#00C094',
            'name' => 'Avg log10 Expr Neural S7'
        ),
        'norm_counts_Avg_log10_Expr_NMps_S10' => array(
            'color' => '#00BFC4',
            'name' => 'Avg log10 Expr NMps S10'
        ),
        'norm_counts_Avg_log10_Expr_NMps_S13' => array(
            'color' => '#00BFC4',
            'name' => 'Avg log10 Expr NMps S13'
        ),
        'norm_counts_Avg_log10_Expr_NMps_S7' => array(
            'color' => '#00BFC4',
            'name' => 'Avg log10 Expr NMps S7'
        ),
        'norm_counts_Avg_log10_Expr_Notochord_S10' => array(
            'color' => '#00B6EB',
            'name' => 'Avg log10 Expr Notochord S10'
        ),
        'norm_counts_Avg_log10_Expr_Notochord_S13' => array(
            'color' => '#00B6EB',
            'name' => 'Avg log10 Expr Notochord S13'
        ),
        'norm_counts_Avg_log10_Expr_Notochord_S7' => array(
            'color' => '#00B6EB',
            'name' => 'Avg log10 Expr Notochord S7'
        ),
        'norm_counts_Avg_log10_Expr_Paraxial_meso_S10' => array(
            'color' => '#06A4FF',
            'name' => 'Avg log10 Expr Paraxial meso S10'
        ),
        'norm_counts_Avg_log10_Expr_Paraxial_meso_S13' => array(
            'color' => '#06A4FF',
            'name' => 'Avg log10 Expr Paraxial meso S13'
        ),
        'norm_counts_Avg_log10_Expr_Paraxial_meso_S7' => array(
            'color' => '#06A4FF',
            'name' => 'Avg log10 Expr Paraxial meso S7'
        ),
        'norm_counts_Avg_log10_Expr_PS_S10' => array(
            'color' => '#A58AFF',
            'name' => 'Avg log10 Expr PS S10'
        ),
        'norm_counts_Avg_log10_Expr_PS_S13' => array(
            'color' => '#A58AFF',
            'name' => 'Avg log10 Expr PS S13'
        ),
        'norm_counts_Avg_log10_Expr_PS_S7' => array(
            'color' => '#A58AFF',
            'name' => 'Avg log10 Expr PS S7'
        ),
        'norm_counts_Avg_log10_Expr_R_LPM_S10' => array(
            'color' => '#DF70F8',
            'name' => 'Avg log10 Expr R LPM S10'
        ),
        'norm_counts_Avg_log10_Expr_R_LPM_S13' => array(
            'color' => '#DF70F8',
            'name' => 'Avg log10 Expr R LPM S13'
        ),
        'norm_counts_Avg_log10_Expr_R_LPM_S7' => array(
            'color' => '#DF70F8',
            'name' => 'Avg log10 Expr R LPM S7'
        ),
        'norm_counts_Avg_log10_Expr_Skin_S10' => array(
            'color' => '#FB61D7',
            'name' => 'Avg log10 Expr Skin S10'
        ),
        'norm_counts_Avg_log10_Expr_Skin_S13' => array(
            'color' => '#FB61D7',
            'name' => 'Avg log10 Expr Skin S13'
        ),
        'norm_counts_Avg_log10_Expr_Skin_S7' => array(
            'color' => '#FB61D7',
            'name' => 'Avg log10 Expr Skin S7'
        ),
        'norm_counts_Avg_log10_Expr_Somitic_meso_S10' => array(
            'color' => '#FF66A8',
            'name' => 'Avg log10 Expr Somitic meso S10'
        ),
        'norm_counts_Avg_log10_Expr_Somitic_meso_S13' => array(
            'color' => '#FF66A8',
            'name' => 'Avg log10 Expr Somitic meso S13'
        ),
        'norm_counts_Avg_log10_Expr_Somitic_meso_S7' => array(
            'color' => '#FF66A8',
            'name' => 'Avg log10 Expr Somitic meso S7'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'lg10 Expr for all Samples',
        'sidelabel' => 'lg10 Expr'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Avg_log10_Expr_Sc_C_LPM_S10','lg2_avg_Avg_log10_Expr_Sc_C_LPM_S13','lg2_avg_Avg_log10_Expr_Sc_C_LPM_S7','lg2_avg_Avg_log10_Expr_Sc_Endoderm_S10','lg2_avg_Avg_log10_Expr_Sc_Endoderm_S13','lg2_avg_Avg_log10_Expr_Sc_Endoderm_S7','lg2_avg_Avg_log10_Expr_Sc_FP_S10','lg2_avg_Avg_log10_Expr_Sc_Int_meso_S10','lg2_avg_Avg_log10_Expr_Sc_Int_meso_S13','lg2_avg_Avg_log10_Expr_Sc_NC_S13','lg2_avg_Avg_log10_Expr_Sc_Neural_Prog_S10','lg2_avg_Avg_log10_Expr_Sc_Neural_Prog_S13','lg2_avg_Avg_log10_Expr_Sc_Neural_S10','lg2_avg_Avg_log10_Expr_Sc_Neural_S13','lg2_avg_Avg_log10_Expr_Sc_Neural_S7','lg2_avg_Avg_log10_Expr_Sc_NMps_S10','lg2_avg_Avg_log10_Expr_Sc_NMps_S13','lg2_avg_Avg_log10_Expr_Sc_NMps_S7','lg2_avg_Avg_log10_Expr_Sc_Notochord_S10','lg2_avg_Avg_log10_Expr_Sc_Notochord_S13','lg2_avg_Avg_log10_Expr_Sc_Notochord_S7','lg2_avg_Avg_log10_Expr_Sc_Paraxial_meso_S10','lg2_avg_Avg_log10_Expr_Sc_Paraxial_meso_S13','lg2_avg_Avg_log10_Expr_Sc_Paraxial_meso_S7','lg2_avg_Avg_log10_Expr_Sc_PS_S10','lg2_avg_Avg_log10_Expr_Sc_PS_S13','lg2_avg_Avg_log10_Expr_Sc_PS_S7','lg2_avg_Avg_log10_Expr_Sc_R_LPM_S10','lg2_avg_Avg_log10_Expr_Sc_R_LPM_S13','lg2_avg_Avg_log10_Expr_Sc_R_LPM_S7','lg2_avg_Avg_log10_Expr_Sc_Skin_S10','lg2_avg_Avg_log10_Expr_Sc_Skin_S13','lg2_avg_Avg_log10_Expr_Sc_Skin_S7','lg2_avg_Avg_log10_Expr_Sc_Somitic_meso_S10','lg2_avg_Avg_log10_Expr_Sc_Somitic_meso_S13','lg2_avg_Avg_log10_Expr_Sc_Somitic_meso_S7'),

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
        'add_counts_C_LPM_Residuals' => array(
            'name' => 'C LPM Residuals',
            'slider_min' => -2,
            'slider_max' => 1,
            'default_low' => -2,
            'default_high' => 1
        ),
        'add_counts_Endoderm_Residuals' => array(
            'name' => 'Endoderm Residuals',
            'slider_min' => -2,
            'slider_max' => 3,
            'default_low' => -2,
            'default_high' => 3
        ),
        'add_counts_FP_Residuals' => array(
            'name' => 'FP Residuals',
            'slider_min' => -2,
            'slider_max' => 3,
            'default_low' => -2,
            'default_high' => 3
        ),
        'add_counts_Int_meso_Residuals' => array(
            'name' => 'Int meso Residuals',
            'slider_min' => -2,
            'slider_max' => 3,
            'default_low' => -2,
            'default_high' => 3
        ),
        'add_counts_NC_Residuals' => array(
            'name' => 'NC Residuals',
            'slider_min' => -2,
            'slider_max' => 3,
            'default_low' => -2,
            'default_high' => 3
        ),
        'add_counts_Neural_Residuals' => array(
            'name' => 'Neural Residuals',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'add_counts_Neural_Prog_Residuals' => array(
            'name' => 'Neural Prog Residuals',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'add_counts_NMps_Residuals' => array(
            'name' => 'NMps Residuals',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'add_counts_Notochord_Residuals' => array(
            'name' => 'Notochord Residuals',
            'slider_min' => -2,
            'slider_max' => 4,
            'default_low' => -2,
            'default_high' => 4
        ),
        'add_counts_Paraxial_meso_Residuals' => array(
            'name' => 'Paraxial meso Residuals',
            'slider_min' => -2,
            'slider_max' => 1,
            'default_low' => -2,
            'default_high' => 1
        ),
        'add_counts_PS_Residuals' => array(
            'name' => 'PS Residuals',
            'slider_min' => -2,
            'slider_max' => 1,
            'default_low' => -2,
            'default_high' => 1
        ),
        'add_counts_R_LPM_Residuals' => array(
            'name' => 'R LPM Residuals',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'add_counts_Skin_Residuals' => array(
            'name' => 'Skin Residuals',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'add_counts_Somitic_meso_Residuals' => array(
            'name' => 'Somitic meso Residuals',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'jbl425_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'add_counts_Avg_log10_Expr_all',
        'default-y' => 'norm_counts_Avg_log10_Expr_C_LPM_S10',
        'selection' => array(
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg log10 Expr all'
            ),
            'norm_counts_Avg_log10_Expr_C_LPM_S10' => array(
                'name' => 's Avg log10 Expr C LPM S10'
            ),
            'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
                'name' => 'logFC Expressed in N Percent Cells'
            ),
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg log10 Expr all'
            ),
            'add_counts_Avg_log10_Expr_C_LPM' => array(
                'name' => 'Avg log10 Expr C LPM'
            ),
            'add_counts_Avg_log10_Expr_Endoderm' => array(
                'name' => 'Avg log10 Expr Endoderm'
            ),
            'add_counts_Avg_log10_Expr_FP' => array(
                'name' => 'Avg log10 Expr FP'
            ),
            'add_counts_Avg_log10_Expr_Int_meso' => array(
                'name' => 'Avg log10 Expr Int meso'
            ),
            'add_counts_Avg_log10_Expr_NC' => array(
                'name' => 'Avg log10 Expr NC'
            ),
            'add_counts_Avg_log10_Expr_Neural' => array(
                'name' => 'Avg log10 Expr Neural'
            ),
            'add_counts_Avg_log10_Expr_Neural_Prog' => array(
                'name' => 'Avg log10 Expr Neural Prog'
            ),
            'add_counts_Avg_log10_Expr_Neural_Prog' => array(
                'name' => 'Avg log10 Expr Neural Prog'
            ),
            'add_counts_Avg_log10_Expr_NMps' => array(
                'name' => 'Avg log10 Expr NMps'
            ),
            'add_counts_Avg_log10_Expr_Notochord' => array(
                'name' => 'Avg log10 Expr Notochord'
            ),
            'add_counts_Avg_log10_Expr_Paraxial_meso' => array(
                'name' => 'Avg log10 Expr Paraxial meso'
            ),
            'add_counts_Avg_log10_Expr_PS' => array(
                'name' => 'Avg log10 Expr PS'
            ),
            'add_counts_Avg_log10_Expr_R_LPM' => array(
                'name' => 'Avg log10 Expr R LPM'
            ),
            'add_counts_Avg_log10_Expr_S10' => array(
                'name' => 'Avg log10 Expr S10'
            ),
            'add_counts_Avg_log10_Expr_S13' => array(
                'name' => 'Avg log10 Expr S13'
            ),
            'add_counts_Avg_log10_Expr_S7' => array(
                'name' => 'Avg log10 Expr S7'
            ),
            'add_counts_Avg_log10_Expr_Skin' => array(
                'name' => 'Avg log10 Expr Skin'
            ),
            'add_counts_Avg_log10_Expr_Somitic_meso' => array(
                'name' => 'Avg log10 Expr Somitic meso'
            ),
            'norm_counts_Avg_log10_Expr_C_LPM_S10' => array(
                'name' => 's Avg log10 Expr C LPM S10'
            ),
            'norm_counts_Avg_log10_Expr_C_LPM_S13' => array(
                'name' => 's Avg log10 Expr C LPM S13'
            ),
            'norm_counts_Avg_log10_Expr_C_LPM_S7' => array(
                'name' => 's Avg log10 Expr C LPM S7'
            ),
            'norm_counts_Avg_log10_Expr_Endoderm_S10' => array(
                'name' => 's Avg log10 Expr Endoderm S10'
            ),
            'norm_counts_Avg_log10_Expr_Endoderm_S13' => array(
                'name' => 's Avg log10 Expr Endoderm S13'
            ),
            'norm_counts_Avg_log10_Expr_Endoderm_S7' => array(
                'name' => 's Avg log10 Expr Endoderm S7'
            ),
            'norm_counts_Avg_log10_Expr_FP_S10' => array(
                'name' => 's Avg log10 Expr FP S10'
            ),
            'norm_counts_Avg_log10_Expr_Int_meso_S10' => array(
                'name' => 's Avg log10 Expr Int meso S10'
            ),
            'norm_counts_Avg_log10_Expr_Int_meso_S13' => array(
                'name' => 's Avg log10 Expr Int meso S13'
            ),
            'norm_counts_Avg_log10_Expr_NC_S13' => array(
                'name' => 's Avg log10 Expr NC S13'
            ),
            'norm_counts_Avg_log10_Expr_Neural_Prog_S10' => array(
                'name' => 's Avg log10 Expr Neural Prog S10'
            ),
            'norm_counts_Avg_log10_Expr_Neural_Prog_S13' => array(
                'name' => 's Avg log10 Expr Neural Prog S13'
            ),
            'norm_counts_Avg_log10_Expr_Neural_S10' => array(
                'name' => 's Avg log10 Expr Neural S10'
            ),
            'norm_counts_Avg_log10_Expr_Neural_S13' => array(
                'name' => 's Avg log10 Expr Neural S13'
            ),
            'norm_counts_Avg_log10_Expr_Neural_S7' => array(
                'name' => 's Avg log10 Expr Neural S7'
            ),
            'norm_counts_Avg_log10_Expr_NMps_S10' => array(
                'name' => 's Avg log10 Expr NMps S10'
            ),
            'norm_counts_Avg_log10_Expr_NMps_S13' => array(
                'name' => 's Avg log10 Expr NMps S13'
            ),
            'norm_counts_Avg_log10_Expr_NMps_S7' => array(
                'name' => 's Avg log10 Expr NMps S7'
            ),
            'norm_counts_Avg_log10_Expr_Notochord_S10' => array(
                'name' => 's Avg log10 Expr Notochord S10'
            ),
            'norm_counts_Avg_log10_Expr_Notochord_S13' => array(
                'name' => 's Avg log10 Expr Notochord S13'
            ),
            'norm_counts_Avg_log10_Expr_Notochord_S7' => array(
                'name' => 's Avg log10 Expr Notochord S7'
            ),
            'norm_counts_Avg_log10_Expr_Paraxial_meso_S10' => array(
                'name' => 's Avg log10 Expr Paraxial meso S10'
            ),
            'norm_counts_Avg_log10_Expr_Paraxial_meso_S13' => array(
                'name' => 's Avg log10 Expr Paraxial meso S13'
            ),
            'norm_counts_Avg_log10_Expr_Paraxial_meso_S7' => array(
                'name' => 's Avg log10 Expr Paraxial meso S7'
            ),
            'norm_counts_Avg_log10_Expr_PS_S10' => array(
                'name' => 's Avg log10 Expr PS S10'
            ),
            'norm_counts_Avg_log10_Expr_PS_S13' => array(
                'name' => 's Avg log10 Expr PS S13'
            ),
            'norm_counts_Avg_log10_Expr_PS_S7' => array(
                'name' => 's Avg log10 Expr PS S7'
            ),
            'norm_counts_Avg_log10_Expr_R_LPM_S10' => array(
                'name' => 's Avg log10 Expr R LPM S10'
            ),
            'norm_counts_Avg_log10_Expr_R_LPM_S13' => array(
                'name' => 's Avg log10 Expr R LPM S13'
            ),
            'norm_counts_Avg_log10_Expr_R_LPM_S7' => array(
                'name' => 's Avg log10 Expr R LPM S7'
            ),
            'norm_counts_Avg_log10_Expr_Skin_S10' => array(
                'name' => 's Avg log10 Expr Skin S10'
            ),
            'norm_counts_Avg_log10_Expr_Skin_S13' => array(
                'name' => 's Avg log10 Expr Skin S13'
            ),
            'norm_counts_Avg_log10_Expr_Skin_S7' => array(
                'name' => 's Avg log10 Expr Skin S7'
            ),
            'norm_counts_Avg_log10_Expr_Somitic_meso_S10' => array(
                'name' => 's Avg log10 Expr Somitic meso S10'
            ),
            'norm_counts_Avg_log10_Expr_Somitic_meso_S13' => array(
                'name' => 's Avg log10 Expr Somitic meso S13'
            ),
            'norm_counts_Avg_log10_Expr_Somitic_meso_S7' => array(
                'name' => 's Avg log10 Expr Somitic meso S7'
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
            'add_counts_C_LPM_Residuals' => array(
                'name' => 'C LPM Residuals'
            ),
            'add_counts_Endoderm_Residuals' => array(
                'name' => 'Endoderm Residuals'
            ),
            'add_counts_FP_Residuals' => array(
                'name' => 'FP Residuals'
            ),
            'add_counts_Int_meso_Residuals' => array(
                'name' => 'Int meso Residuals'
            ),
            'add_counts_NC_Residuals' => array(
                'name' => 'NC Residuals'
            ),
            'add_counts_Neural_Residuals' => array(
                'name' => 'Neural Residuals'
            ),
            'add_counts_Neural_Prog_Residuals' => array(
                'name' => 'Neural Prog Residuals'
            ),
            'add_counts_NMps_Residuals' => array(
                'name' => 'NMps Residuals'
            ),
            'add_counts_Notochord_Residuals' => array(
                'name' => 'Notochord Residuals'
            ),
            'add_counts_Paraxial_meso_Residuals' => array(
                'name' => 'Paraxial meso Residuals'
            ),
            'add_counts_PS_Residuals' => array(
                'name' => 'PS Residuals'
            ),
            'add_counts_R_LPM_Residuals' => array(
                'name' => 'R LPM Residuals'
            ),
            'add_counts_Skin_Residuals' => array(
                'name' => 'Skin Residuals'
            ),
            'add_counts_Somitic_meso_Residuals' => array(
                'name' => 'Somitic meso Residuals'
            )
        )
    )
//End scatterplot
);
