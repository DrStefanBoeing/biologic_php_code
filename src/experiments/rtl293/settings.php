<?php

return array(
    'lab' => array(
        'name' => 'Treismann DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'rtl_data',
    'data_db' => array(
            'cat_table_name' => 'rtl293_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'rtl293_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_MRTF_BSA_1_TPM' => array(
            'color' => '#F8766D',
            'name' => 'MRTF BSA 1 TPM'
        ),
        'norm_counts_MRTF_BSA_2_TPM' => array(
            'color' => '#F8766D',
            'name' => 'MRTF BSA 2 TPM'
        ),
        'norm_counts_MRTF_BSA_3_TPM' => array(
            'color' => '#F8766D',
            'name' => 'MRTF BSA 3 TPM'
        ),
        'norm_counts_MRTF_BSA_4_TPM' => array(
            'color' => '#F8766D',
            'name' => 'MRTF BSA 4 TPM'
        ),
        'norm_counts_MRTF_FN_1_TPM' => array(
            'color' => '#D39200',
            'name' => 'MRTF FN 1 TPM'
        ),
        'norm_counts_MRTF_FN_2_TPM' => array(
            'color' => '#D39200',
            'name' => 'MRTF FN 2 TPM'
        ),
        'norm_counts_MRTF_FN_3_TPM' => array(
            'color' => '#D39200',
            'name' => 'MRTF FN 3 TPM'
        ),
        'norm_counts_MRTF_FN_4_TPM' => array(
            'color' => '#D39200',
            'name' => 'MRTF FN 4 TPM'
        ),
        'norm_counts_MRTF_PolyDLys_1_TPM' => array(
            'color' => '#93AA00',
            'name' => 'MRTF PolyDLys 1 TPM'
        ),
        'norm_counts_MRTF_PolyDLys_2_TPM' => array(
            'color' => '#93AA00',
            'name' => 'MRTF PolyDLys 2 TPM'
        ),
        'norm_counts_MRTF_PolyDLys_3_TPM' => array(
            'color' => '#93AA00',
            'name' => 'MRTF PolyDLys 3 TPM'
        ),
        'norm_counts_MRTF_PolyDLys_4_TPM' => array(
            'color' => '#93AA00',
            'name' => 'MRTF PolyDLys 4 TPM'
        ),
        'norm_counts_SRF_BSA_1_TPM' => array(
            'color' => '#00BA38',
            'name' => 'SRF BSA 1 TPM'
        ),
        'norm_counts_SRF_BSA_2_TPM' => array(
            'color' => '#00BA38',
            'name' => 'SRF BSA 2 TPM'
        ),
        'norm_counts_SRF_BSA_3_TPM' => array(
            'color' => '#00BA38',
            'name' => 'SRF BSA 3 TPM'
        ),
        'norm_counts_SRF_BSA_4_TPM' => array(
            'color' => '#00BA38',
            'name' => 'SRF BSA 4 TPM'
        ),
        'norm_counts_SRF_FN_1_TPM' => array(
            'color' => '#00C19F',
            'name' => 'SRF FN 1 TPM'
        ),
        'norm_counts_SRF_FN_2_TPM' => array(
            'color' => '#00C19F',
            'name' => 'SRF FN 2 TPM'
        ),
        'norm_counts_SRF_FN_3_TPM' => array(
            'color' => '#00C19F',
            'name' => 'SRF FN 3 TPM'
        ),
        'norm_counts_SRF_FN_4_TPM' => array(
            'color' => '#00C19F',
            'name' => 'SRF FN 4 TPM'
        ),
        'norm_counts_SRF_PolyDLys_1_TPM' => array(
            'color' => '#00B9E3',
            'name' => 'SRF PolyDLys 1 TPM'
        ),
        'norm_counts_SRF_PolyDLys_2_TPM' => array(
            'color' => '#00B9E3',
            'name' => 'SRF PolyDLys 2 TPM'
        ),
        'norm_counts_SRF_PolyDLys_3_TPM' => array(
            'color' => '#00B9E3',
            'name' => 'SRF PolyDLys 3 TPM'
        ),
        'norm_counts_SRF_PolyDLys_4_TPM' => array(
            'color' => '#00B9E3',
            'name' => 'SRF PolyDLys 4 TPM'
        ),
        'norm_counts_WT_BSA_1_TPM' => array(
            'color' => '#619CFF',
            'name' => 'WT BSA 1 TPM'
        ),
        'norm_counts_WT_BSA_2_TPM' => array(
            'color' => '#619CFF',
            'name' => 'WT BSA 2 TPM'
        ),
        'norm_counts_WT_BSA_3_TPM' => array(
            'color' => '#619CFF',
            'name' => 'WT BSA 3 TPM'
        ),
        'norm_counts_WT_BSA_4_TPM' => array(
            'color' => '#619CFF',
            'name' => 'WT BSA 4 TPM'
        ),
        'norm_counts_WT_FN_1_TPM' => array(
            'color' => '#DB72FB',
            'name' => 'WT FN 1 TPM'
        ),
        'norm_counts_WT_FN_2_TPM' => array(
            'color' => '#DB72FB',
            'name' => 'WT FN 2 TPM'
        ),
        'norm_counts_WT_FN_3_TPM' => array(
            'color' => '#DB72FB',
            'name' => 'WT FN 3 TPM'
        ),
        'norm_counts_WT_FN_4_TPM' => array(
            'color' => '#DB72FB',
            'name' => 'WT FN 4 TPM'
        ),
        'norm_counts_WT_PolyDLys_1_TPM' => array(
            'color' => '#FF61C3',
            'name' => 'WT PolyDLys 1 TPM'
        ),
        'norm_counts_WT_PolyDLys_2_TPM' => array(
            'color' => '#FF61C3',
            'name' => 'WT PolyDLys 2 TPM'
        ),
        'norm_counts_WT_PolyDLys_3_TPM' => array(
            'color' => '#FF61C3',
            'name' => 'WT PolyDLys 3 TPM'
        ),
        'norm_counts_WT_PolyDLys_4_TPM' => array(
            'color' => '#FF61C3',
            'name' => 'WT PolyDLys 4 TPM'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_MRTF_BSA_1_TPM','lg2_avg_MRTF_BSA_2_TPM','lg2_avg_MRTF_BSA_3_TPM','lg2_avg_MRTF_BSA_4_TPM','lg2_avg_MRTF_FN_1_TPM','lg2_avg_MRTF_FN_2_TPM','lg2_avg_MRTF_FN_3_TPM','lg2_avg_MRTF_FN_4_TPM','lg2_avg_MRTF_PolyDLys_1_TPM','lg2_avg_MRTF_PolyDLys_2_TPM','lg2_avg_MRTF_PolyDLys_3_TPM','lg2_avg_MRTF_PolyDLys_4_TPM','lg2_avg_SRF_BSA_1_TPM','lg2_avg_SRF_BSA_2_TPM','lg2_avg_SRF_BSA_3_TPM','lg2_avg_SRF_BSA_4_TPM','lg2_avg_SRF_FN_1_TPM','lg2_avg_SRF_FN_2_TPM','lg2_avg_SRF_FN_3_TPM','lg2_avg_SRF_FN_4_TPM','lg2_avg_SRF_PolyDLys_1_TPM','lg2_avg_SRF_PolyDLys_2_TPM','lg2_avg_SRF_PolyDLys_3_TPM','lg2_avg_SRF_PolyDLys_4_TPM','lg2_avg_WT_BSA_1_TPM','lg2_avg_WT_BSA_2_TPM','lg2_avg_WT_BSA_3_TPM','lg2_avg_WT_BSA_4_TPM','lg2_avg_WT_FN_1_TPM','lg2_avg_WT_FN_2_TPM','lg2_avg_WT_FN_3_TPM','lg2_avg_WT_FN_4_TPM','lg2_avg_WT_PolyDLys_1_TPM','lg2_avg_WT_PolyDLys_2_TPM','lg2_avg_WT_PolyDLys_3_TPM','lg2_avg_WT_PolyDLys_4_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_SRF_vs_WT' => array(
            'name' => 'logFC SRF vs WT',
            'slider_min' => -4,
            'slider_max' => 7,
            'default_low' => -4,
            'default_high' => 7
        ),
        'contrast_1_padj_SRF_vs_WT' => array(
            'name' => 'padj SRF vs WT',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_MRTF_vs_WT' => array(
            'name' => 'logFC MRTF vs WT',
            'slider_min' => -5,
            'slider_max' => 5,
            'default_low' => -5,
            'default_high' => 5
        ),
        'contrast_2_padj_MRTF_vs_WT' => array(
            'name' => 'padj MRTF vs WT',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_BSA_vs_FN' => array(
            'name' => 'logFC BSA vs FN',
            'slider_min' => -2,
            'slider_max' => 1,
            'default_low' => -2,
            'default_high' => 1
        ),
        'contrast_3_padj_BSA_vs_FN' => array(
            'name' => 'padj BSA vs FN',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_logFC_BSA_vs_PolyDLys' => array(
            'name' => 'logFC BSA vs PolyDLys',
            'slider_min' => -5,
            'slider_max' => 3,
            'default_low' => -5,
            'default_high' => 3
        ),
        'contrast_4_padj_BSA_vs_PolyDLys' => array(
            'name' => 'padj BSA vs PolyDLys',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_5_logFC_SRF_FN_vs_WT_FN' => array(
            'name' => 'logFC SRF FN vs WT FN',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_5_padj_SRF_FN_vs_WT_FN' => array(
            'name' => 'padj SRF FN vs WT FN',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_6_logFC_MRTF_FN_vs_WT_FN' => array(
            'name' => 'logFC MRTF FN vs WT FN',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_6_padj_MRTF_FN_vs_WT_FN' => array(
            'name' => 'padj MRTF FN vs WT FN',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_7_logFC_WT_FN_vs_WT_PolyDLys' => array(
            'name' => 'logFC WT FN vs WT PolyDLys',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_7_padj_WT_FN_vs_WT_PolyDLys' => array(
            'name' => 'padj WT FN vs WT PolyDLys',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_8_logFC_WT_BSA_vs_WT_FN' => array(
            'name' => 'logFC WT BSA vs WT FN',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_8_padj_WT_BSA_vs_WT_FN' => array(
            'name' => 'padj WT BSA vs WT FN',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_9_logFC_SRF_PolyDLys_vs_WT_PolyDLys' => array(
            'name' => 'logFC SRF PolyDLys vs WT PolyDLys',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_9_padj_SRF_PolyDLys_vs_WT_PolyDLys' => array(
            'name' => 'padj SRF PolyDLys vs WT PolyDLys',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_10_logFC_MRTF_PolyDLys_vs_WT_PolyDLys' => array(
            'name' => '0 logFC MRTF PolyDLys vs WT PolyDLys',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_10_padj_MRTF_PolyDLys_vs_WT_PolyDLys' => array(
            'name' => '0 padj MRTF PolyDLys vs WT PolyDLys',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_11_logFC_SRF_BSA_vs_WT_BSA' => array(
            'name' => '1 logFC SRF BSA vs WT BSA',
            'slider_min' => -2,
            'slider_max' => 1,
            'default_low' => -2,
            'default_high' => 1
        ),
        'contrast_11_padj_SRF_BSA_vs_WT_BSA' => array(
            'name' => '1 padj SRF BSA vs WT BSA',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_12_logFC_MRTF_BSA_vs_WT_BSA' => array(
            'name' => '2 logFC MRTF BSA vs WT BSA',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_12_padj_MRTF_BSA_vs_WT_BSA' => array(
            'name' => '2 padj MRTF BSA vs WT BSA',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_13_logFC_SRF_BSA_vs_SRF_FN' => array(
            'name' => '3 logFC SRF BSA vs SRF FN',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_13_padj_SRF_BSA_vs_SRF_FN' => array(
            'name' => '3 padj SRF BSA vs SRF FN',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_14_logFC_MRTF_BSA_vs_MRTF_FN' => array(
            'name' => '4 logFC MRTF BSA vs MRTF FN',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_14_padj_MRTF_BSA_vs_MRTF_FN' => array(
            'name' => '4 padj MRTF BSA vs MRTF FN',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_Mkl1' => array(
            'name' => 'corCoef Mkl1',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_Mkl2' => array(
            'name' => 'corCoef Mkl2',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_Srf' => array(
            'name' => 'corCoef Srf',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_L_lg10p_LRT_Genotype' => array(
            'name' => 'lg10p LRT Genotype',
            'slider_min' => 0,
            'slider_max' => 262,
            'default_low' => 0,
            'default_high' => 262
        ),
        'contrast_L_lg10p_LRT_Treatment' => array(
            'name' => 'lg10p LRT Treatment',
            'slider_min' => 0,
            'slider_max' => 317,
            'default_low' => 0,
            'default_high' => 317
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'rtl293_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_SRF_vs_WT',
        'default-y' => 'contrast_1_lg10p_SRF_vs_WT',
        'selection' => array(
            'contrast_1_logFC_SRF_vs_WT' => array(
                'name' => 'logFC SRF vs WT'
            ),
            'contrast_2_logFC_MRTF_vs_WT' => array(
                'name' => 'logFC MRTF vs WT'
            ),
            'contrast_3_logFC_BSA_vs_FN' => array(
                'name' => 'logFC BSA vs FN'
            ),
            'contrast_4_logFC_BSA_vs_PolyDLys' => array(
                'name' => 'logFC BSA vs PolyDLys'
            ),
            'contrast_5_logFC_SRF_FN_vs_WT_FN' => array(
                'name' => 'logFC SRF FN vs WT FN'
            ),
            'contrast_6_logFC_MRTF_FN_vs_WT_FN' => array(
                'name' => 'logFC MRTF FN vs WT FN'
            ),
            'contrast_7_logFC_WT_FN_vs_WT_PolyDLys' => array(
                'name' => 'logFC WT FN vs WT PolyDLys'
            ),
            'contrast_8_logFC_WT_BSA_vs_WT_FN' => array(
                'name' => 'logFC WT BSA vs WT FN'
            ),
            'contrast_9_logFC_SRF_PolyDLys_vs_WT_PolyDLys' => array(
                'name' => 'logFC SRF PolyDLys vs WT PolyDLys'
            ),
            'contrast_10_logFC_MRTF_PolyDLys_vs_WT_PolyDLys' => array(
                'name' => '0 logFC MRTF PolyDLys vs WT PolyDLys'
            ),
            'contrast_11_logFC_SRF_BSA_vs_WT_BSA' => array(
                'name' => '1 logFC SRF BSA vs WT BSA'
            ),
            'contrast_12_logFC_MRTF_BSA_vs_WT_BSA' => array(
                'name' => '2 logFC MRTF BSA vs WT BSA'
            ),
            'contrast_13_logFC_SRF_BSA_vs_SRF_FN' => array(
                'name' => '3 logFC SRF BSA vs SRF FN'
            ),
            'contrast_14_logFC_MRTF_BSA_vs_MRTF_FN' => array(
                'name' => '4 logFC MRTF BSA vs MRTF FN'
            ),
            'contrast_1_lg10p_SRF_vs_WT' => array(
                'name' => 'lg10p SRF vs WT'
            ),
            'contrast_2_lg10p_MRTF_vs_WT' => array(
                'name' => 'lg10p MRTF vs WT'
            ),
            'contrast_3_lg10p_BSA_vs_FN' => array(
                'name' => 'lg10p BSA vs FN'
            ),
            'contrast_4_lg10p_BSA_vs_PolyDLys' => array(
                'name' => 'lg10p BSA vs PolyDLys'
            ),
            'contrast_5_lg10p_SRF_FN_vs_WT_FN' => array(
                'name' => 'lg10p SRF FN vs WT FN'
            ),
            'contrast_6_lg10p_MRTF_FN_vs_WT_FN' => array(
                'name' => 'lg10p MRTF FN vs WT FN'
            ),
            'contrast_7_lg10p_WT_FN_vs_WT_PolyDLys' => array(
                'name' => 'lg10p WT FN vs WT PolyDLys'
            ),
            'contrast_8_lg10p_WT_BSA_vs_WT_FN' => array(
                'name' => 'lg10p WT BSA vs WT FN'
            ),
            'contrast_9_lg10p_SRF_PolyDLys_vs_WT_PolyDLys' => array(
                'name' => 'lg10p SRF PolyDLys vs WT PolyDLys'
            ),
            'contrast_10_lg10p_MRTF_PolyDLys_vs_WT_PolyDLys' => array(
                'name' => '0 lg10p MRTF PolyDLys vs WT PolyDLys'
            ),
            'contrast_11_lg10p_SRF_BSA_vs_WT_BSA' => array(
                'name' => '1 lg10p SRF BSA vs WT BSA'
            ),
            'contrast_12_lg10p_MRTF_BSA_vs_WT_BSA' => array(
                'name' => '2 lg10p MRTF BSA vs WT BSA'
            ),
            'contrast_13_lg10p_SRF_BSA_vs_SRF_FN' => array(
                'name' => '3 lg10p SRF BSA vs SRF FN'
            ),
            'contrast_14_lg10p_MRTF_BSA_vs_MRTF_FN' => array(
                'name' => '4 lg10p MRTF BSA vs MRTF FN'
            ),
            'contrast_L_lg10p_LRT_Genotype' => array(
                'name' => 'lg10p LRT Genotype'
            ),
            'contrast_L_lg10p_LRT_Treatment' => array(
                'name' => 'lg10p LRT Treatment'
            ),
            'add_venn_X_corCoef_Mkl1' => array(
                'name' => 'corCoef Mkl1'
            ),
            'add_venn_X_corCoef_Mkl2' => array(
                'name' => 'corCoef Mkl2'
            ),
            'add_venn_X_corCoef_Srf' => array(
                'name' => 'corCoef Srf'
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
            'contrast_1_lg2BaseMean_SRF_vs_WT' => array(
                'name' => 'lg2BaseMean SRF vs WT'
            ),
            'contrast_2_lg2BaseMean_MRTF_vs_WT' => array(
                'name' => 'lg2BaseMean MRTF vs WT'
            ),
            'contrast_3_lg2BaseMean_BSA_vs_FN' => array(
                'name' => 'lg2BaseMean BSA vs FN'
            ),
            'contrast_4_lg2BaseMean_BSA_vs_PolyDLys' => array(
                'name' => 'lg2BaseMean BSA vs PolyDLys'
            ),
            'contrast_5_lg2BaseMean_SRF_FN_vs_WT_FN' => array(
                'name' => 'lg2BaseMean SRF FN vs WT FN'
            ),
            'contrast_6_lg2BaseMean_MRTF_FN_vs_WT_FN' => array(
                'name' => 'lg2BaseMean MRTF FN vs WT FN'
            ),
            'contrast_7_lg2BaseMean_WT_FN_vs_WT_PolyDLys' => array(
                'name' => 'lg2BaseMean WT FN vs WT PolyDLys'
            ),
            'contrast_8_lg2BaseMean_WT_BSA_vs_WT_FN' => array(
                'name' => 'lg2BaseMean WT BSA vs WT FN'
            ),
            'contrast_9_lg2BaseMean_SRF_PolyDLys_vs_WT_PolyDLys' => array(
                'name' => 'lg2BaseMean SRF PolyDLys vs WT PolyDLys'
            ),
            'contrast_10_lg2BaseMean_MRTF_PolyDLys_vs_WT_PolyDLys' => array(
                'name' => '0 lg2BaseMean MRTF PolyDLys vs WT PolyDLys'
            ),
            'contrast_11_lg2BaseMean_SRF_BSA_vs_WT_BSA' => array(
                'name' => '1 lg2BaseMean SRF BSA vs WT BSA'
            ),
            'contrast_12_lg2BaseMean_MRTF_BSA_vs_WT_BSA' => array(
                'name' => '2 lg2BaseMean MRTF BSA vs WT BSA'
            ),
            'contrast_13_lg2BaseMean_SRF_BSA_vs_SRF_FN' => array(
                'name' => '3 lg2BaseMean SRF BSA vs SRF FN'
            ),
            'contrast_14_lg2BaseMean_MRTF_BSA_vs_MRTF_FN' => array(
                'name' => '4 lg2BaseMean MRTF BSA vs MRTF FN'
            ),
            'contrast_L_lg2BaseMean_LRT_Genotype' => array(
                'name' => 'lg2BaseMean LRT Genotype'
            ),
            'contrast_L_lg2BaseMean_LRT_Treatment' => array(
                'name' => 'lg2BaseMean LRT Treatment'
            )
        )
    )
//End scatterplot
);
