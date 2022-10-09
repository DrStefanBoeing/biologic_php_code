<?php

return array(
    'public_access' => FALSE,
    'lab' => array(
        'name' => 'Wu  BGC DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'chl_data',
    'data_db' => array(
            'cat_table_name' => 'scPDAC_Wu_all_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'scPDAC_Wu_all_sc_rna_seq_table',
    'primary_gene_symbol' => 'hgnc_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged Expr',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Avg_log10_Expr_C0_Normal' => array(
            'color' => '#F8766D',
            'name' => 'Avg_log10_Expr_C0_Normal'
        ),
        'norm_counts_Avg_log10_Expr_C0_Tumor' => array(
            'color' => '#F27D53',
            'name' => 'Avg_log10_Expr_C0_Tumor'
        ),
        'norm_counts_Avg_log10_Expr_C1_Normal' => array(
            'color' => '#EA8331',
            'name' => 'Avg_log10_Expr_C1_Normal'
        ),
        'norm_counts_Avg_log10_Expr_C1_Tumor' => array(
            'color' => '#E28A00',
            'name' => 'Avg_log10_Expr_C1_Tumor'
        ),
        'norm_counts_Avg_log10_Expr_C10_Normal' => array(
            'color' => '#D89000',
            'name' => 'Avg_log10_Expr_C10_Normal'
        ),
        'norm_counts_Avg_log10_Expr_C10_Tumor' => array(
            'color' => '#CD9600',
            'name' => 'Avg_log10_Expr_C10_Tumor'
        ),
        'norm_counts_Avg_log10_Expr_C11_Normal' => array(
            'color' => '#C09B00',
            'name' => 'Avg_log10_Expr_C11_Normal'
        ),
        'norm_counts_Avg_log10_Expr_C11_Tumor' => array(
            'color' => '#B2A000',
            'name' => 'Avg_log10_Expr_C11_Tumor'
        ),
        'norm_counts_Avg_log10_Expr_C12_Normal' => array(
            'color' => '#A3A500',
            'name' => 'Avg_log10_Expr_C12_Normal'
        ),
        'norm_counts_Avg_log10_Expr_C12_Tumor' => array(
            'color' => '#91AA00',
            'name' => 'Avg_log10_Expr_C12_Tumor'
        ),
        'norm_counts_Avg_log10_Expr_C13_Normal' => array(
            'color' => '#7CAE00',
            'name' => 'Avg_log10_Expr_C13_Normal'
        ),
        'norm_counts_Avg_log10_Expr_C13_Tumor' => array(
            'color' => '#61B200',
            'name' => 'Avg_log10_Expr_C13_Tumor'
        ),
        'norm_counts_Avg_log10_Expr_C14_Normal' => array(
            'color' => '#39B600',
            'name' => 'Avg_log10_Expr_C14_Normal'
        ),
        'norm_counts_Avg_log10_Expr_C14_Tumor' => array(
            'color' => '#00B92A',
            'name' => 'Avg_log10_Expr_C14_Tumor'
        ),
        'norm_counts_Avg_log10_Expr_C15_Normal' => array(
            'color' => '#00BB4E',
            'name' => 'Avg_log10_Expr_C15_Normal'
        ),
        'norm_counts_Avg_log10_Expr_C15_Tumor' => array(
            'color' => '#00BE67',
            'name' => 'Avg_log10_Expr_C15_Tumor'
        ),
        'norm_counts_Avg_log10_Expr_C16_Normal' => array(
            'color' => '#00BF7D',
            'name' => 'Avg_log10_Expr_C16_Normal'
        ),
        'norm_counts_Avg_log10_Expr_C16_Tumor' => array(
            'color' => '#00C091',
            'name' => 'Avg_log10_Expr_C16_Tumor'
        ),
        'norm_counts_Avg_log10_Expr_C17_Normal' => array(
            'color' => '#00C1A3',
            'name' => 'Avg_log10_Expr_C17_Normal'
        ),
        'norm_counts_Avg_log10_Expr_C17_Tumor' => array(
            'color' => '#00C0B4',
            'name' => 'Avg_log10_Expr_C17_Tumor'
        ),
        'norm_counts_Avg_log10_Expr_C18_Normal' => array(
            'color' => '#00BFC4',
            'name' => 'Avg_log10_Expr_C18_Normal'
        ),
        'norm_counts_Avg_log10_Expr_C18_Tumor' => array(
            'color' => '#00BDD3',
            'name' => 'Avg_log10_Expr_C18_Tumor'
        ),
        'norm_counts_Avg_log10_Expr_C19_Normal' => array(
            'color' => '#00BAE0',
            'name' => 'Avg_log10_Expr_C19_Normal'
        ),
        'norm_counts_Avg_log10_Expr_C19_Tumor' => array(
            'color' => '#00B5EC',
            'name' => 'Avg_log10_Expr_C19_Tumor'
        ),
        'norm_counts_Avg_log10_Expr_C2_Normal' => array(
            'color' => '#00B0F6',
            'name' => 'Avg_log10_Expr_C2_Normal'
        ),
        'norm_counts_Avg_log10_Expr_C2_Tumor' => array(
            'color' => '#00A9FF',
            'name' => 'Avg_log10_Expr_C2_Tumor'
        ),
        'norm_counts_Avg_log10_Expr_C3_Normal' => array(
            'color' => '#35A2FF',
            'name' => 'Avg_log10_Expr_C3_Normal'
        ),
        'norm_counts_Avg_log10_Expr_C3_Tumor' => array(
            'color' => '#7099FF',
            'name' => 'Avg_log10_Expr_C3_Tumor'
        ),
        'norm_counts_Avg_log10_Expr_C4_Normal' => array(
            'color' => '#9590FF',
            'name' => 'Avg_log10_Expr_C4_Normal'
        ),
        'norm_counts_Avg_log10_Expr_C4_Tumor' => array(
            'color' => '#B186FF',
            'name' => 'Avg_log10_Expr_C4_Tumor'
        ),
        'norm_counts_Avg_log10_Expr_C5_Normal' => array(
            'color' => '#C77CFF',
            'name' => 'Avg_log10_Expr_C5_Normal'
        ),
        'norm_counts_Avg_log10_Expr_C5_Tumor' => array(
            'color' => '#D973FC',
            'name' => 'Avg_log10_Expr_C5_Tumor'
        ),
        'norm_counts_Avg_log10_Expr_C6_Normal' => array(
            'color' => '#E76BF3',
            'name' => 'Avg_log10_Expr_C6_Normal'
        ),
        'norm_counts_Avg_log10_Expr_C6_Tumor' => array(
            'color' => '#F265E8',
            'name' => 'Avg_log10_Expr_C6_Tumor'
        ),
        'norm_counts_Avg_log10_Expr_C7_Normal' => array(
            'color' => '#FA62DB',
            'name' => 'Avg_log10_Expr_C7_Normal'
        ),
        'norm_counts_Avg_log10_Expr_C7_Tumor' => array(
            'color' => '#FF61CC',
            'name' => 'Avg_log10_Expr_C7_Tumor'
        ),
        'norm_counts_Avg_log10_Expr_C8_Normal' => array(
            'color' => '#FF62BC',
            'name' => 'Avg_log10_Expr_C8_Normal'
        ),
        'norm_counts_Avg_log10_Expr_C8_Tumor' => array(
            'color' => '#FF65AA',
            'name' => 'Avg_log10_Expr_C8_Tumor'
        ),
        'norm_counts_Avg_log10_Expr_C9_Normal' => array(
            'color' => '#FF6A98',
            'name' => 'Avg_log10_Expr_C9_Normal'
        ),
        'norm_counts_Avg_log10_Expr_C9_Tumor' => array(
            'color' => '#FF6C91',
            'name' => 'Avg_log10_Expr_C9_Tumor'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'lg10 Expr for all Samples',
        'sidelabel' => 'lg10 Expr'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Avg_log10_Expr_Sc_C0_Normal','lg2_avg_Avg_log10_Expr_Sc_C0_Tumor','lg2_avg_Avg_log10_Expr_Sc_C1_Normal','lg2_avg_Avg_log10_Expr_Sc_C1_Tumor','lg2_avg_Avg_log10_Expr_Sc_C10_Normal','lg2_avg_Avg_log10_Expr_Sc_C10_Tumor','lg2_avg_Avg_log10_Expr_Sc_C11_Normal','lg2_avg_Avg_log10_Expr_Sc_C11_Tumor','lg2_avg_Avg_log10_Expr_Sc_C12_Normal','lg2_avg_Avg_log10_Expr_Sc_C12_Tumor','lg2_avg_Avg_log10_Expr_Sc_C13_Normal','lg2_avg_Avg_log10_Expr_Sc_C13_Tumor','lg2_avg_Avg_log10_Expr_Sc_C14_Normal','lg2_avg_Avg_log10_Expr_Sc_C14_Tumor','lg2_avg_Avg_log10_Expr_Sc_C15_Normal','lg2_avg_Avg_log10_Expr_Sc_C15_Tumor','lg2_avg_Avg_log10_Expr_Sc_C16_Normal','lg2_avg_Avg_log10_Expr_Sc_C16_Tumor','lg2_avg_Avg_log10_Expr_Sc_C17_Normal','lg2_avg_Avg_log10_Expr_Sc_C17_Tumor','lg2_avg_Avg_log10_Expr_Sc_C18_Normal','lg2_avg_Avg_log10_Expr_Sc_C18_Tumor','lg2_avg_Avg_log10_Expr_Sc_C19_Normal','lg2_avg_Avg_log10_Expr_Sc_C19_Tumor','lg2_avg_Avg_log10_Expr_Sc_C2_Normal','lg2_avg_Avg_log10_Expr_Sc_C2_Tumor','lg2_avg_Avg_log10_Expr_Sc_C3_Normal','lg2_avg_Avg_log10_Expr_Sc_C3_Tumor','lg2_avg_Avg_log10_Expr_Sc_C4_Normal','lg2_avg_Avg_log10_Expr_Sc_C4_Tumor','lg2_avg_Avg_log10_Expr_Sc_C5_Normal','lg2_avg_Avg_log10_Expr_Sc_C5_Tumor','lg2_avg_Avg_log10_Expr_Sc_C6_Normal','lg2_avg_Avg_log10_Expr_Sc_C6_Tumor','lg2_avg_Avg_log10_Expr_Sc_C7_Normal','lg2_avg_Avg_log10_Expr_Sc_C7_Tumor','lg2_avg_Avg_log10_Expr_Sc_C8_Normal','lg2_avg_Avg_log10_Expr_Sc_C8_Tumor','lg2_avg_Avg_log10_Expr_Sc_C9_Normal','lg2_avg_Avg_log10_Expr_Sc_C9_Tumor'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_A_logFC_RN19081_logFC_Activin_Nullcomb_vs_WT' => array(
            'name' => 'logFC_RN19081_logFC_Activin_Nullcomb_vs_WT',
            'slider_min' => -18,
            'slider_max' => 17,
            'default_low' => -18,
            'default_high' => 17
        ),
        'contrast_A_padj_RN19081_Activin_Nullcomb_vs_WT' => array(
            'name' => 'padj_RN19081_Activin_Nullcomb_vs_WT',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_C_Inhba_Correlation_Coef' => array(
            'name' => 'Inhba_Correlation_Coef',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
            'name' => 'logFC_Expressed_in_N_Percent_Cells',
            'slider_min' => 0,
            'slider_max' => 100,
            'default_low' => 0,
            'default_high' => 100
        ),
        'contrast_1_logFC_DGE_Fib_T_C4_vs_N_C4' => array(
            'name' => 'logFC_DGE_Fib_T_C4_vs_N_C4',
            'slider_min' => -9,
            'slider_max' => 10,
            'default_low' => -9,
            'default_high' => 10
        ),
        'contrast_2_logFC_DGE_Stellate_T_C6_vs_N_C6' => array(
            'name' => 'logFC_DGE_Stellate_T_C6_vs_N_C6',
            'slider_min' => -7,
            'slider_max' => 8,
            'default_low' => -7,
            'default_high' => 8
        ),
        'contrast_3_logFC_DGE_Tcell_T_C8_vs_N_C8' => array(
            'name' => 'logFC_DGE_Tcell_T_C8_vs_N_C8',
            'slider_min' => -8,
            'slider_max' => 7,
            'default_low' => -8,
            'default_high' => 7
        ),
        'contrast_4_logFC_DGE_Mac_T_C5_vs_N_C5' => array(
            'name' => 'logFC_DGE_Mac_T_C5_vs_N_C5',
            'slider_min' => -7,
            'slider_max' => 9,
            'default_low' => -7,
            'default_high' => 9
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'scPDAC_Wu_all_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'add_counts_Avg_log10_Expr_all',
        'default-y' => 'norm_counts_Avg_log10_Expr_C0_Normal',
        'selection' => array(
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg_log10_Expr_all'
            ),
            'norm_counts_Avg_log10_Expr_C0_Normal' => array(
                'name' => 's_Avg_log10_Expr_C0_Normal'
            ),
            'contrast_A_logFC_RN19081_logFC_Activin_Nullcomb_vs_WT' => array(
                'name' => 'logFC_RN19081_logFC_Activin_Nullcomb_vs_WT'
            ),
            'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
                'name' => 'logFC_Expressed_in_N_Percent_Cells'
            ),
            'contrast_1_logFC_DGE_Fib_T_C4_vs_N_C4' => array(
                'name' => 'logFC_DGE_Fib_T_C4_vs_N_C4'
            ),
            'contrast_2_logFC_DGE_Stellate_T_C6_vs_N_C6' => array(
                'name' => 'logFC_DGE_Stellate_T_C6_vs_N_C6'
            ),
            'contrast_3_logFC_DGE_Tcell_T_C8_vs_N_C8' => array(
                'name' => 'logFC_DGE_Tcell_T_C8_vs_N_C8'
            ),
            'contrast_4_logFC_DGE_Mac_T_C5_vs_N_C5' => array(
                'name' => 'logFC_DGE_Mac_T_C5_vs_N_C5'
            ),
            'contrast_A_lg10p_RN19081_Activin_Nullcomb_vs_WT' => array(
                'name' => 'lg10p_RN19081_Activin_Nullcomb_vs_WT'
            ),
            'contrast_1_lg10p_DGE_Fib_T_C4_vs_N_C4' => array(
                'name' => 'lg10p_DGE_Fib_T_C4_vs_N_C4'
            ),
            'contrast_2_lg10p_DGE_Stellate_T_C6_vs_N_C6' => array(
                'name' => 'lg10p_DGE_Stellate_T_C6_vs_N_C6'
            ),
            'contrast_3_lg10p_DGE_Tcell_T_C8_vs_N_C8' => array(
                'name' => 'lg10p_DGE_Tcell_T_C8_vs_N_C8'
            ),
            'contrast_4_lg10p_DGE_Mac_T_C5_vs_N_C5' => array(
                'name' => 'lg10p_DGE_Mac_T_C5_vs_N_C5'
            ),
            'contrast_C_Inhba_Correlation_Coef' => array(
                'name' => 'Inhba_Correlation_Coef'
            ),
            'contrast_A_lg2BaseMean_RN19081_Activin_Nullcomb_vs_WT' => array(
                'name' => 'lg2BaseMean_RN19081_Activin_Nullcomb_vs_WT'
            ),
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg_log10_Expr_all'
            ),
            'norm_counts_Avg_log10_Expr_C0_Normal' => array(
                'name' => 's_Avg_log10_Expr_C0_Normal'
            ),
            'norm_counts_Avg_log10_Expr_C0_Tumor' => array(
                'name' => 's_Avg_log10_Expr_C0_Tumor'
            ),
            'norm_counts_Avg_log10_Expr_C1_Normal' => array(
                'name' => 's_Avg_log10_Expr_C1_Normal'
            ),
            'norm_counts_Avg_log10_Expr_C1_Tumor' => array(
                'name' => 's_Avg_log10_Expr_C1_Tumor'
            ),
            'norm_counts_Avg_log10_Expr_C10_Normal' => array(
                'name' => 's_Avg_log10_Expr_C10_Normal'
            ),
            'norm_counts_Avg_log10_Expr_C10_Tumor' => array(
                'name' => 's_Avg_log10_Expr_C10_Tumor'
            ),
            'norm_counts_Avg_log10_Expr_C11_Normal' => array(
                'name' => 's_Avg_log10_Expr_C11_Normal'
            ),
            'norm_counts_Avg_log10_Expr_C11_Tumor' => array(
                'name' => 's_Avg_log10_Expr_C11_Tumor'
            ),
            'norm_counts_Avg_log10_Expr_C12_Normal' => array(
                'name' => 's_Avg_log10_Expr_C12_Normal'
            ),
            'norm_counts_Avg_log10_Expr_C12_Tumor' => array(
                'name' => 's_Avg_log10_Expr_C12_Tumor'
            ),
            'norm_counts_Avg_log10_Expr_C13_Normal' => array(
                'name' => 's_Avg_log10_Expr_C13_Normal'
            ),
            'norm_counts_Avg_log10_Expr_C13_Tumor' => array(
                'name' => 's_Avg_log10_Expr_C13_Tumor'
            ),
            'norm_counts_Avg_log10_Expr_C14_Normal' => array(
                'name' => 's_Avg_log10_Expr_C14_Normal'
            ),
            'norm_counts_Avg_log10_Expr_C14_Tumor' => array(
                'name' => 's_Avg_log10_Expr_C14_Tumor'
            ),
            'norm_counts_Avg_log10_Expr_C15_Normal' => array(
                'name' => 's_Avg_log10_Expr_C15_Normal'
            ),
            'norm_counts_Avg_log10_Expr_C15_Tumor' => array(
                'name' => 's_Avg_log10_Expr_C15_Tumor'
            ),
            'norm_counts_Avg_log10_Expr_C16_Normal' => array(
                'name' => 's_Avg_log10_Expr_C16_Normal'
            ),
            'norm_counts_Avg_log10_Expr_C16_Tumor' => array(
                'name' => 's_Avg_log10_Expr_C16_Tumor'
            ),
            'norm_counts_Avg_log10_Expr_C17_Normal' => array(
                'name' => 's_Avg_log10_Expr_C17_Normal'
            ),
            'norm_counts_Avg_log10_Expr_C17_Tumor' => array(
                'name' => 's_Avg_log10_Expr_C17_Tumor'
            ),
            'norm_counts_Avg_log10_Expr_C18_Normal' => array(
                'name' => 's_Avg_log10_Expr_C18_Normal'
            ),
            'norm_counts_Avg_log10_Expr_C18_Tumor' => array(
                'name' => 's_Avg_log10_Expr_C18_Tumor'
            ),
            'norm_counts_Avg_log10_Expr_C19_Normal' => array(
                'name' => 's_Avg_log10_Expr_C19_Normal'
            ),
            'norm_counts_Avg_log10_Expr_C19_Tumor' => array(
                'name' => 's_Avg_log10_Expr_C19_Tumor'
            ),
            'norm_counts_Avg_log10_Expr_C2_Normal' => array(
                'name' => 's_Avg_log10_Expr_C2_Normal'
            ),
            'norm_counts_Avg_log10_Expr_C2_Tumor' => array(
                'name' => 's_Avg_log10_Expr_C2_Tumor'
            ),
            'norm_counts_Avg_log10_Expr_C3_Normal' => array(
                'name' => 's_Avg_log10_Expr_C3_Normal'
            ),
            'norm_counts_Avg_log10_Expr_C3_Tumor' => array(
                'name' => 's_Avg_log10_Expr_C3_Tumor'
            ),
            'norm_counts_Avg_log10_Expr_C4_Normal' => array(
                'name' => 's_Avg_log10_Expr_C4_Normal'
            ),
            'norm_counts_Avg_log10_Expr_C4_Tumor' => array(
                'name' => 's_Avg_log10_Expr_C4_Tumor'
            ),
            'norm_counts_Avg_log10_Expr_C5_Normal' => array(
                'name' => 's_Avg_log10_Expr_C5_Normal'
            ),
            'norm_counts_Avg_log10_Expr_C5_Tumor' => array(
                'name' => 's_Avg_log10_Expr_C5_Tumor'
            ),
            'norm_counts_Avg_log10_Expr_C6_Normal' => array(
                'name' => 's_Avg_log10_Expr_C6_Normal'
            ),
            'norm_counts_Avg_log10_Expr_C6_Tumor' => array(
                'name' => 's_Avg_log10_Expr_C6_Tumor'
            ),
            'norm_counts_Avg_log10_Expr_C7_Normal' => array(
                'name' => 's_Avg_log10_Expr_C7_Normal'
            ),
            'norm_counts_Avg_log10_Expr_C7_Tumor' => array(
                'name' => 's_Avg_log10_Expr_C7_Tumor'
            ),
            'norm_counts_Avg_log10_Expr_C8_Normal' => array(
                'name' => 's_Avg_log10_Expr_C8_Normal'
            ),
            'norm_counts_Avg_log10_Expr_C8_Tumor' => array(
                'name' => 's_Avg_log10_Expr_C8_Tumor'
            ),
            'norm_counts_Avg_log10_Expr_C9_Normal' => array(
                'name' => 's_Avg_log10_Expr_C9_Normal'
            ),
            'norm_counts_Avg_log10_Expr_C9_Tumor' => array(
                'name' => 's_Avg_log10_Expr_C9_Tumor'
            )
        )
    )
//End scatterplot
);
