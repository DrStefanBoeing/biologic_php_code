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
            'cat_table_name' => 'vpl362C_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'vpl362C_sc_rna_seq_table',
    'primary_gene_symbol' => 'hgnc_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged Expr',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Avg_log10_Expr_C5HT' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C5HT'
        ),
        'norm_counts_Avg_log10_Expr_Chat1' => array(
            'color' => '#E68613',
            'name' => 'Avg log10 Expr Chat1'
        ),
        'norm_counts_Avg_log10_Expr_Chat2' => array(
            'color' => '#CD9600',
            'name' => 'Avg log10 Expr Chat2'
        ),
        'norm_counts_Avg_log10_Expr_Chat3' => array(
            'color' => '#ABA300',
            'name' => 'Avg log10 Expr Chat3'
        ),
        'norm_counts_Avg_log10_Expr_Chat4' => array(
            'color' => '#7CAE00',
            'name' => 'Avg log10 Expr Chat4'
        ),
        'norm_counts_Avg_log10_Expr_Glia' => array(
            'color' => '#0CB702',
            'name' => 'Avg log10 Expr Glia'
        ),
        'norm_counts_Avg_log10_Expr_GliaKlf4' => array(
            'color' => '#0CB702',
            'name' => 'Avg log10 Expr GliaKlf4'
        ),
        'norm_counts_Avg_log10_Expr_Her4' => array(
            'color' => '#00C19A',
            'name' => 'Avg log10 Expr Her4'
        ),
        'norm_counts_Avg_log10_Expr_Nos1' => array(
            'color' => '#00BFC4',
            'name' => 'Avg log10 Expr Nos1'
        ),
        'norm_counts_Avg_log10_Expr_Nos2' => array(
            'color' => '#00B8E7',
            'name' => 'Avg log10 Expr Nos2'
        ),
        'norm_counts_Avg_log10_Expr_Nos3' => array(
            'color' => '#00A9FF',
            'name' => 'Avg log10 Expr Nos3'
        ),
        'norm_counts_Avg_log10_Expr_NosChat' => array(
            'color' => '#8494FF',
            'name' => 'Avg log10 Expr NosChat'
        ),
        'norm_counts_Avg_log10_Expr_Other1' => array(
            'color' => '#C77CFF',
            'name' => 'Avg log10 Expr Other1'
        ),
        'norm_counts_Avg_log10_Expr_Other2' => array(
            'color' => '#ED68ED',
            'name' => 'Avg log10 Expr Other2'
        ),
        'norm_counts_Avg_log10_Expr_Other3' => array(
            'color' => '#FF61CC',
            'name' => 'Avg log10 Expr Other3'
        ),
        'norm_counts_Avg_log10_Expr_Other4' => array(
            'color' => '#FF68A1',
            'name' => 'Avg log10 Expr Other4'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'lg10 Expr for all Samples',
        'sidelabel' => 'lg10 Expr'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Avg_log10_Expr_Sc_C5HT','lg2_avg_Avg_log10_Expr_Sc_Chat1','lg2_avg_Avg_log10_Expr_Sc_Chat2','lg2_avg_Avg_log10_Expr_Sc_Chat3','lg2_avg_Avg_log10_Expr_Sc_Chat4','lg2_avg_Avg_log10_Expr_Sc_Glia','lg2_avg_Avg_log10_Expr_Sc_GliaKlf4','lg2_avg_Avg_log10_Expr_Sc_Her4','lg2_avg_Avg_log10_Expr_Sc_Nos1','lg2_avg_Avg_log10_Expr_Sc_Nos2','lg2_avg_Avg_log10_Expr_Sc_Nos3','lg2_avg_Avg_log10_Expr_Sc_NosChat','lg2_avg_Avg_log10_Expr_Sc_Other1','lg2_avg_Avg_log10_Expr_Sc_Other2','lg2_avg_Avg_log10_Expr_Sc_Other3','lg2_avg_Avg_log10_Expr_Sc_Other4'),

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
        'add_counts_Chat1_Residuals' => array(
            'name' => 'Chat1 Residuals',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'add_counts_Chat2_Residuals' => array(
            'name' => 'Chat2 Residuals',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'add_counts_Chat3_Residuals' => array(
            'name' => 'Chat3 Residuals',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'add_counts_Chat4_Residuals' => array(
            'name' => 'Chat4 Residuals',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'add_counts_Nos1_Residuals' => array(
            'name' => 'Nos1 Residuals',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'add_counts_Nos2_Residuals' => array(
            'name' => 'Nos2 Residuals',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'add_counts_Nos3_Residuals' => array(
            'name' => 'Nos3 Residuals',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'add_counts_NosChat_Residuals' => array(
            'name' => 'NosChat Residuals',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'add_counts_C5HT_Residuals' => array(
            'name' => 'C5HT Residuals',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'add_counts_Glia_Residuals' => array(
            'name' => 'Glia Residuals',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'add_counts_GliaKlf4_Residuals' => array(
            'name' => 'GliaKlf4 Residuals',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'add_counts_Her4_Residuals' => array(
            'name' => 'Her4 Residuals',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'add_counts_Other1_Residuals' => array(
            'name' => 'Other1 Residuals',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'add_counts_Other2_Residuals' => array(
            'name' => 'Other2 Residuals',
            'slider_min' => -3,
            'slider_max' => 4,
            'default_low' => -3,
            'default_high' => 4
        ),
        'add_counts_Other3_Residuals' => array(
            'name' => 'Other3 Residuals',
            'slider_min' => -2,
            'slider_max' => 4,
            'default_low' => -2,
            'default_high' => 4
        ),
        'add_counts_Other4_Residuals' => array(
            'name' => 'Other4 Residuals',
            'slider_min' => -2,
            'slider_max' => 5,
            'default_low' => -2,
            'default_high' => 5
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'vpl362C_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'add_counts_Avg_log10_Expr_all',
        'default-y' => 'norm_counts_Avg_log10_Expr_C5HT',
        'selection' => array(
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg log10 Expr all'
            ),
            'norm_counts_Avg_log10_Expr_C5HT' => array(
                'name' => 's Avg log10 Expr C5HT'
            ),
            'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
                'name' => 'logFC Expressed in N Percent Cells'
            ),
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg log10 Expr all'
            ),
            'add_counts_Avg_log10_Expr_HEA614A1' => array(
                'name' => 'Avg log10 Expr HEA614A1'
            ),
            'norm_counts_Avg_log10_Expr_C5HT' => array(
                'name' => 's Avg log10 Expr C5HT'
            ),
            'norm_counts_Avg_log10_Expr_Chat1' => array(
                'name' => 's Avg log10 Expr Chat1'
            ),
            'norm_counts_Avg_log10_Expr_Chat2' => array(
                'name' => 's Avg log10 Expr Chat2'
            ),
            'norm_counts_Avg_log10_Expr_Chat3' => array(
                'name' => 's Avg log10 Expr Chat3'
            ),
            'norm_counts_Avg_log10_Expr_Chat4' => array(
                'name' => 's Avg log10 Expr Chat4'
            ),
            'norm_counts_Avg_log10_Expr_Glia' => array(
                'name' => 's Avg log10 Expr Glia'
            ),
            'norm_counts_Avg_log10_Expr_GliaKlf4' => array(
                'name' => 's Avg log10 Expr GliaKlf4'
            ),
            'norm_counts_Avg_log10_Expr_GliaKlf4' => array(
                'name' => 's Avg log10 Expr GliaKlf4'
            ),
            'norm_counts_Avg_log10_Expr_Her4' => array(
                'name' => 's Avg log10 Expr Her4'
            ),
            'norm_counts_Avg_log10_Expr_Nos1' => array(
                'name' => 's Avg log10 Expr Nos1'
            ),
            'norm_counts_Avg_log10_Expr_Nos2' => array(
                'name' => 's Avg log10 Expr Nos2'
            ),
            'norm_counts_Avg_log10_Expr_Nos3' => array(
                'name' => 's Avg log10 Expr Nos3'
            ),
            'norm_counts_Avg_log10_Expr_NosChat' => array(
                'name' => 's Avg log10 Expr NosChat'
            ),
            'norm_counts_Avg_log10_Expr_Other1' => array(
                'name' => 's Avg log10 Expr Other1'
            ),
            'norm_counts_Avg_log10_Expr_Other2' => array(
                'name' => 's Avg log10 Expr Other2'
            ),
            'norm_counts_Avg_log10_Expr_Other3' => array(
                'name' => 's Avg log10 Expr Other3'
            ),
            'norm_counts_Avg_log10_Expr_Other4' => array(
                'name' => 's Avg log10 Expr Other4'
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
            'add_counts_Chat1_Residuals' => array(
                'name' => 'Chat1 Residuals'
            ),
            'add_counts_Chat2_Residuals' => array(
                'name' => 'Chat2 Residuals'
            ),
            'add_counts_Chat3_Residuals' => array(
                'name' => 'Chat3 Residuals'
            ),
            'add_counts_Chat4_Residuals' => array(
                'name' => 'Chat4 Residuals'
            ),
            'add_counts_Nos1_Residuals' => array(
                'name' => 'Nos1 Residuals'
            ),
            'add_counts_Nos2_Residuals' => array(
                'name' => 'Nos2 Residuals'
            ),
            'add_counts_Nos3_Residuals' => array(
                'name' => 'Nos3 Residuals'
            ),
            'add_counts_NosChat_Residuals' => array(
                'name' => 'NosChat Residuals'
            ),
            'add_counts_C5HT_Residuals' => array(
                'name' => 'C5HT Residuals'
            ),
            'add_counts_Glia_Residuals' => array(
                'name' => 'Glia Residuals'
            ),
            'add_counts_GliaKlf4_Residuals' => array(
                'name' => 'GliaKlf4 Residuals'
            ),
            'add_counts_Her4_Residuals' => array(
                'name' => 'Her4 Residuals'
            ),
            'add_counts_Other1_Residuals' => array(
                'name' => 'Other1 Residuals'
            ),
            'add_counts_Other2_Residuals' => array(
                'name' => 'Other2 Residuals'
            ),
            'add_counts_Other3_Residuals' => array(
                'name' => 'Other3 Residuals'
            ),
            'add_counts_Other4_Residuals' => array(
                'name' => 'Other4 Residuals'
            )
        )
    )
//End scatterplot
);
