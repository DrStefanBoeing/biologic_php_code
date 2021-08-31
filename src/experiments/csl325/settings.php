<?php

return array(
    'lab' => array(
        'name' => 'Swanton DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'csl_data',
    'data_db' => array(
            'cat_table_name' => 'csl325_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'p325_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_M_WT_1_TPM' => array(
            'color' => '#F8766D',
            'name' => 'M WT 1 TPM'
        ),
        'norm_counts_M_WT_2_TPM' => array(
            'color' => '#F8766D',
            'name' => 'M WT 2 TPM'
        ),
        'norm_counts_M_WT_3_TPM' => array(
            'color' => '#F8766D',
            'name' => 'M WT 3 TPM'
        ),
        'norm_counts_M_WT_4_TPM' => array(
            'color' => '#F8766D',
            'name' => 'M WT 4 TPM'
        ),
        'norm_counts_M_WT_5_TPM' => array(
            'color' => '#F8766D',
            'name' => 'M WT 5 TPM'
        ),
        'norm_counts_M_Zfp516NULL_1_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'M Zfp516NULL 1 TPM'
        ),
        'norm_counts_M_Zfp516NULL_2_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'M Zfp516NULL 2 TPM'
        ),
        'norm_counts_M_Zfp516NULL_3_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'M Zfp516NULL 3 TPM'
        ),
        'norm_counts_M_Zfp516NULL_4_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'M Zfp516NULL 4 TPM'
        ),
        'norm_counts_M_Zfp516NULL_5_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'M Zfp516NULL 5 TPM'
        ),
        'norm_counts_M_Zfp516NULL_6_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'M Zfp516NULL 6 TPM'
        ),
        'norm_counts_M_Zfp516NULL_7_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'M Zfp516NULL 7 TPM'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_M_WT_1_TPM','lg2_avg_M_WT_2_TPM','lg2_avg_M_WT_3_TPM','lg2_avg_M_WT_4_TPM','lg2_avg_M_WT_5_TPM','lg2_avg_M_Zfp516NULL_1_TPM','lg2_avg_M_Zfp516NULL_2_TPM','lg2_avg_M_Zfp516NULL_3_TPM','lg2_avg_M_Zfp516NULL_4_TPM','lg2_avg_M_Zfp516NULL_5_TPM','lg2_avg_M_Zfp516NULL_6_TPM','lg2_avg_M_Zfp516NULL_7_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_M_Zfp516NULL_vs_M_WT_x' => array(
            'name' => 'logFC M Zfp516NULL vs M WT x',
            'slider_min' => -1,
            'slider_max' => 2,
            'default_low' => -1,
            'default_high' => 2
        ),
        'contrast_2_logFC_WT_Female_vs_WT_Male_x' => array(
            'name' => 'logFC WT Female vs WT Male x',
            'slider_min' => -3,
            'slider_max' => 1,
            'default_low' => -3,
            'default_high' => 1
        ),
        'contrast_1_logFC_M_Zfp516NULL_vs_M_WT_y' => array(
            'name' => 'logFC M Zfp516NULL vs M WT y',
            'slider_min' => -1,
            'slider_max' => 2,
            'default_low' => -1,
            'default_high' => 2
        ),
        'contrast_2_logFC_WT_Female_vs_WT_Male_y' => array(
            'name' => 'logFC WT Female vs WT Male y',
            'slider_min' => -3,
            'slider_max' => 1,
            'default_low' => -3,
            'default_high' => 1
        ),
        'contrast_1_logFC_M_Zfp516NULL_vs_M_WT' => array(
            'name' => 'logFC M Zfp516NULL vs M WT',
            'slider_min' => -1,
            'slider_max' => 2,
            'default_low' => -1,
            'default_high' => 2
        ),
        'contrast_2_logFC_WT_Female_vs_WT_Male' => array(
            'name' => 'logFC WT Female vs WT Male',
            'slider_min' => -3,
            'slider_max' => 1,
            'default_low' => -3,
            'default_high' => 1
        ),
        'contrast_1_padj_M_Zfp516NULL_vs_M_WT_x' => array(
            'name' => 'padj M Zfp516NULL vs M WT x',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_1_padj_M_Zfp516NULL_vs_M_WT_y' => array(
            'name' => 'padj M Zfp516NULL vs M WT y',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_1_padj_M_Zfp516NULL_vs_M_WT' => array(
            'name' => 'padj M Zfp516NULL vs M WT',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_padj_WT_Female_vs_WT_Male_x' => array(
            'name' => 'padj WT Female vs WT Male x',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_padj_WT_Female_vs_WT_Male_y' => array(
            'name' => 'padj WT Female vs WT Male y',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_padj_WT_Female_vs_WT_Male' => array(
            'name' => 'padj WT Female vs WT Male',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'p325_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_M_Zfp516NULL_vs_M_WT',
        'default-y' => 'contrast_1_lg10p_M_Zfp516NULL_vs_M_WT',
        'selection' => array(
            'contrast_1_logFC_M_Zfp516NULL_vs_M_WT_x' => array(
                'name' => 'logFC M Zfp516NULL vs M WT x'
            ),
            'contrast_2_logFC_WT_Female_vs_WT_Male_x' => array(
                'name' => 'logFC WT Female vs WT Male x'
            ),
            'contrast_1_logFC_M_Zfp516NULL_vs_M_WT_y' => array(
                'name' => 'logFC M Zfp516NULL vs M WT y'
            ),
            'contrast_2_logFC_WT_Female_vs_WT_Male_y' => array(
                'name' => 'logFC WT Female vs WT Male y'
            ),
            'contrast_1_logFC_M_Zfp516NULL_vs_M_WT' => array(
                'name' => 'logFC M Zfp516NULL vs M WT'
            ),
            'contrast_2_logFC_WT_Female_vs_WT_Male' => array(
                'name' => 'logFC WT Female vs WT Male'
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
            'contrast_1_lg10p_M_Zfp516NULL_vs_M_WT_x' => array(
                'name' => 'lg10p M Zfp516NULL vs M WT x'
            ),
            'contrast_2_lg10p_WT_Female_vs_WT_Male_x' => array(
                'name' => 'lg10p WT Female vs WT Male x'
            ),
            'contrast_1_lg10p_M_Zfp516NULL_vs_M_WT_y' => array(
                'name' => 'lg10p M Zfp516NULL vs M WT y'
            ),
            'contrast_2_lg10p_WT_Female_vs_WT_Male_y' => array(
                'name' => 'lg10p WT Female vs WT Male y'
            ),
            'contrast_1_lg10p_M_Zfp516NULL_vs_M_WT' => array(
                'name' => 'lg10p M Zfp516NULL vs M WT'
            ),
            'contrast_2_lg10p_WT_Female_vs_WT_Male' => array(
                'name' => 'lg10p WT Female vs WT Male'
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
            'contrast_1_lg2BaseMean_M_Zfp516NULL_vs_M_WT_x' => array(
                'name' => 'lg2BaseMean M Zfp516NULL vs M WT x'
            ),
            'contrast_1_lg2BaseMean_x' => array(
                'name' => 'lg2BaseMean x'
            ),
            'contrast_2_lg2BaseMean_WT_Female_vs_WT_Male_x' => array(
                'name' => 'lg2BaseMean WT Female vs WT Male x'
            ),
            'contrast_2_lg2BaseMean_x' => array(
                'name' => 'lg2BaseMean x'
            ),
            'contrast_1_lg2BaseMean_M_Zfp516NULL_vs_M_WT_y' => array(
                'name' => 'lg2BaseMean M Zfp516NULL vs M WT y'
            ),
            'contrast_1_lg2BaseMean_y' => array(
                'name' => 'lg2BaseMean y'
            ),
            'contrast_2_lg2BaseMean_WT_Female_vs_WT_Male_y' => array(
                'name' => 'lg2BaseMean WT Female vs WT Male y'
            ),
            'contrast_2_lg2BaseMean_y' => array(
                'name' => 'lg2BaseMean y'
            ),
            'contrast_1_lg2BaseMean_M_Zfp516NULL_vs_M_WT' => array(
                'name' => 'lg2BaseMean M Zfp516NULL vs M WT'
            ),
            'contrast_1_lg2BaseMean' => array(
                'name' => 'lg2BaseMean'
            ),
            'contrast_2_lg2BaseMean_WT_Female_vs_WT_Male' => array(
                'name' => 'lg2BaseMean WT Female vs WT Male'
            ),
            'contrast_2_lg2BaseMean' => array(
                'name' => 'lg2BaseMean'
            )
        )
    )
//End scatterplot
);
