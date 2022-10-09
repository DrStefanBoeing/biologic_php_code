<?php

return array(
    'lab' => array(
        'name' => 'Pachnis DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'vpl_data',
    'data_db' => array(
            'cat_table_name' => 'RN18175_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'RN18175_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_TCRaKO_ColNeuron_1_TPM' => array(
            'color' => '#F8766D',
            'name' => 'TCRaKO ColNeuron 1 TPM'
        ),
        'norm_counts_TCRaKO_ColNeuron_2_TPM' => array(
            'color' => '#F8766D',
            'name' => 'TCRaKO ColNeuron 2 TPM'
        ),
        'norm_counts_TCRaKO_ColNeuron_3_TPM' => array(
            'color' => '#F8766D',
            'name' => 'TCRaKO ColNeuron 3 TPM'
        ),
        'norm_counts_TCRaKO_ColNeuron_4_TPM' => array(
            'color' => '#F8766D',
            'name' => 'TCRaKO ColNeuron 4 TPM'
        ),
        'norm_counts_TCRaKO_ColNonNeuron_1_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'TCRaKO ColNonNeuron 1 TPM'
        ),
        'norm_counts_TCRaKO_ColNonNeuron_2_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'TCRaKO ColNonNeuron 2 TPM'
        ),
        'norm_counts_TCRaKO_ColNonNeuron_3_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'TCRaKO ColNonNeuron 3 TPM'
        ),
        'norm_counts_TCRaKO_ColNonNeuron_4_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'TCRaKO ColNonNeuron 4 TPM'
        ),
        'norm_counts_WT_ColNeuron_1_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'WT ColNeuron 1 TPM'
        ),
        'norm_counts_WT_ColNeuron_2_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'WT ColNeuron 2 TPM'
        ),
        'norm_counts_WT_ColNeuron_3_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'WT ColNeuron 3 TPM'
        ),
        'norm_counts_WT_ColNeuron_4_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'WT ColNeuron 4 TPM'
        ),
        'norm_counts_WT_ColNonNeuron_1_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'WT ColNonNeuron 1 TPM'
        ),
        'norm_counts_WT_ColNonNeuron_2_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'WT ColNonNeuron 2 TPM'
        ),
        'norm_counts_WT_ColNonNeuron_3_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'WT ColNonNeuron 3 TPM'
        ),
        'norm_counts_WT_ColNonNeuron_4_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'WT ColNonNeuron 4 TPM'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_TCRaKO_ColNeuron_1_TPM','lg2_avg_TCRaKO_ColNeuron_2_TPM','lg2_avg_TCRaKO_ColNeuron_3_TPM','lg2_avg_TCRaKO_ColNeuron_4_TPM','lg2_avg_TCRaKO_ColNonNeuron_1_TPM','lg2_avg_TCRaKO_ColNonNeuron_2_TPM','lg2_avg_TCRaKO_ColNonNeuron_3_TPM','lg2_avg_TCRaKO_ColNonNeuron_4_TPM','lg2_avg_WT_ColNeuron_1_TPM','lg2_avg_WT_ColNeuron_2_TPM','lg2_avg_WT_ColNeuron_3_TPM','lg2_avg_WT_ColNeuron_4_TPM','lg2_avg_WT_ColNonNeuron_1_TPM','lg2_avg_WT_ColNonNeuron_2_TPM','lg2_avg_WT_ColNonNeuron_3_TPM','lg2_avg_WT_ColNonNeuron_4_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_TCRaKO_ColNeuron_vs_WT_ColNeuron_x' => array(
            'name' => 'logFC TCRaKO ColNeuron vs WT ColNeuron x',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_1_padj_TCRaKO_ColNeuron_vs_WT_ColNeuron_x' => array(
            'name' => 'padj TCRaKO ColNeuron vs WT ColNeuron x',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_WT_ColNeuron_vs_WT_ColNonNeuron_x' => array(
            'name' => 'logFC WT ColNeuron vs WT ColNonNeuron x',
            'slider_min' => -10,
            'slider_max' => 10,
            'default_low' => -10,
            'default_high' => 10
        ),
        'contrast_2_padj_WT_ColNeuron_vs_WT_ColNonNeuron_x' => array(
            'name' => 'padj WT ColNeuron vs WT ColNonNeuron x',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_TCRaKO_ColNeuron_vs_TCRaKO_ColNonNeuron_x' => array(
            'name' => 'logFC TCRaKO ColNeuron vs TCRaKO ColNonNeuron x',
            'slider_min' => -11,
            'slider_max' => 9,
            'default_low' => -11,
            'default_high' => 9
        ),
        'contrast_3_padj_TCRaKO_ColNeuron_vs_TCRaKO_ColNonNeuron_x' => array(
            'name' => 'padj TCRaKO ColNeuron vs TCRaKO ColNonNeuron x',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_logFC_TCRaKO_ColNonNeuron_vs_WT_ColNonNeuron_x' => array(
            'name' => 'logFC TCRaKO ColNonNeuron vs WT ColNonNeuron x',
            'slider_min' => -4,
            'slider_max' => 4,
            'default_low' => -4,
            'default_high' => 4
        ),
        'contrast_4_padj_TCRaKO_ColNonNeuron_vs_WT_ColNonNeuron_x' => array(
            'name' => 'padj TCRaKO ColNonNeuron vs WT ColNonNeuron x',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_1_logFC_TCRaKO_ColNeuron_vs_WT_ColNeuron_y' => array(
            'name' => 'logFC TCRaKO ColNeuron vs WT ColNeuron y',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_1_padj_TCRaKO_ColNeuron_vs_WT_ColNeuron_y' => array(
            'name' => 'padj TCRaKO ColNeuron vs WT ColNeuron y',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_WT_ColNeuron_vs_WT_ColNonNeuron_y' => array(
            'name' => 'logFC WT ColNeuron vs WT ColNonNeuron y',
            'slider_min' => -10,
            'slider_max' => 10,
            'default_low' => -10,
            'default_high' => 10
        ),
        'contrast_2_padj_WT_ColNeuron_vs_WT_ColNonNeuron_y' => array(
            'name' => 'padj WT ColNeuron vs WT ColNonNeuron y',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_TCRaKO_ColNeuron_vs_TCRaKO_ColNonNeuron_y' => array(
            'name' => 'logFC TCRaKO ColNeuron vs TCRaKO ColNonNeuron y',
            'slider_min' => -11,
            'slider_max' => 9,
            'default_low' => -11,
            'default_high' => 9
        ),
        'contrast_3_padj_TCRaKO_ColNeuron_vs_TCRaKO_ColNonNeuron_y' => array(
            'name' => 'padj TCRaKO ColNeuron vs TCRaKO ColNonNeuron y',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_logFC_TCRaKO_ColNonNeuron_vs_WT_ColNonNeuron_y' => array(
            'name' => 'logFC TCRaKO ColNonNeuron vs WT ColNonNeuron y',
            'slider_min' => -4,
            'slider_max' => 4,
            'default_low' => -4,
            'default_high' => 4
        ),
        'contrast_4_padj_TCRaKO_ColNonNeuron_vs_WT_ColNonNeuron_y' => array(
            'name' => 'padj TCRaKO ColNonNeuron vs WT ColNonNeuron y',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'RN18175_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_TCRaKO_ColNeuron_vs_WT_ColNeuron_x',
        'default-x' => 'contrast_1_logFC_TCRaKO_ColNeuron_vs_WT_ColNeuron_y',
        'default-y' => 'contrast_1_lg10p_TCRaKO_ColNeuron_vs_WT_ColNeuron_x',
        'default-y' => 'contrast_1_lg10p_TCRaKO_ColNeuron_vs_WT_ColNeuron_y',
        'selection' => array(
            'contrast_1_logFC_TCRaKO_ColNeuron_vs_WT_ColNeuron_x' => array(
                'name' => 'logFC TCRaKO ColNeuron vs WT ColNeuron x'
            ),
            'contrast_2_logFC_WT_ColNeuron_vs_WT_ColNonNeuron_x' => array(
                'name' => 'logFC WT ColNeuron vs WT ColNonNeuron x'
            ),
            'contrast_3_logFC_TCRaKO_ColNeuron_vs_TCRaKO_ColNonNeuron_x' => array(
                'name' => 'logFC TCRaKO ColNeuron vs TCRaKO ColNonNeuron x'
            ),
            'contrast_4_logFC_TCRaKO_ColNonNeuron_vs_WT_ColNonNeuron_x' => array(
                'name' => 'logFC TCRaKO ColNonNeuron vs WT ColNonNeuron x'
            ),
            'contrast_1_logFC_TCRaKO_ColNeuron_vs_WT_ColNeuron_y' => array(
                'name' => 'logFC TCRaKO ColNeuron vs WT ColNeuron y'
            ),
            'contrast_2_logFC_WT_ColNeuron_vs_WT_ColNonNeuron_y' => array(
                'name' => 'logFC WT ColNeuron vs WT ColNonNeuron y'
            ),
            'contrast_3_logFC_TCRaKO_ColNeuron_vs_TCRaKO_ColNonNeuron_y' => array(
                'name' => 'logFC TCRaKO ColNeuron vs TCRaKO ColNonNeuron y'
            ),
            'contrast_4_logFC_TCRaKO_ColNonNeuron_vs_WT_ColNonNeuron_y' => array(
                'name' => 'logFC TCRaKO ColNonNeuron vs WT ColNonNeuron y'
            ),
            'contrast_1_lg10p_TCRaKO_ColNeuron_vs_WT_ColNeuron_x' => array(
                'name' => 'lg10p TCRaKO ColNeuron vs WT ColNeuron x'
            ),
            'contrast_2_lg10p_WT_ColNeuron_vs_WT_ColNonNeuron_x' => array(
                'name' => 'lg10p WT ColNeuron vs WT ColNonNeuron x'
            ),
            'contrast_3_lg10p_TCRaKO_ColNeuron_vs_TCRaKO_ColNonNeuron_x' => array(
                'name' => 'lg10p TCRaKO ColNeuron vs TCRaKO ColNonNeuron x'
            ),
            'contrast_4_lg10p_TCRaKO_ColNonNeuron_vs_WT_ColNonNeuron_x' => array(
                'name' => 'lg10p TCRaKO ColNonNeuron vs WT ColNonNeuron x'
            ),
            'contrast_1_lg10p_TCRaKO_ColNeuron_vs_WT_ColNeuron_y' => array(
                'name' => 'lg10p TCRaKO ColNeuron vs WT ColNeuron y'
            ),
            'contrast_2_lg10p_WT_ColNeuron_vs_WT_ColNonNeuron_y' => array(
                'name' => 'lg10p WT ColNeuron vs WT ColNonNeuron y'
            ),
            'contrast_3_lg10p_TCRaKO_ColNeuron_vs_TCRaKO_ColNonNeuron_y' => array(
                'name' => 'lg10p TCRaKO ColNeuron vs TCRaKO ColNonNeuron y'
            ),
            'contrast_4_lg10p_TCRaKO_ColNonNeuron_vs_WT_ColNonNeuron_y' => array(
                'name' => 'lg10p TCRaKO ColNonNeuron vs WT ColNonNeuron y'
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
            'contrast_1_lg2BaseMean_TCRaKO_ColNeuron_vs_WT_ColNeuron_x' => array(
                'name' => 'lg2BaseMean TCRaKO ColNeuron vs WT ColNeuron x'
            ),
            'contrast_1_lg2BaseMean_x' => array(
                'name' => 'lg2BaseMean x'
            ),
            'contrast_2_lg2BaseMean_WT_ColNeuron_vs_WT_ColNonNeuron_x' => array(
                'name' => 'lg2BaseMean WT ColNeuron vs WT ColNonNeuron x'
            ),
            'contrast_2_lg2BaseMean_x' => array(
                'name' => 'lg2BaseMean x'
            ),
            'contrast_3_lg2BaseMean_TCRaKO_ColNeuron_vs_TCRaKO_ColNonNeuron_x' => array(
                'name' => 'lg2BaseMean TCRaKO ColNeuron vs TCRaKO ColNonNeuron x'
            ),
            'contrast_3_lg2BaseMean_x' => array(
                'name' => 'lg2BaseMean x'
            ),
            'contrast_4_lg2BaseMean_TCRaKO_ColNonNeuron_vs_WT_ColNonNeuron_x' => array(
                'name' => 'lg2BaseMean TCRaKO ColNonNeuron vs WT ColNonNeuron x'
            ),
            'contrast_4_lg2BaseMean_x' => array(
                'name' => 'lg2BaseMean x'
            ),
            'contrast_1_lg2BaseMean_TCRaKO_ColNeuron_vs_WT_ColNeuron_y' => array(
                'name' => 'lg2BaseMean TCRaKO ColNeuron vs WT ColNeuron y'
            ),
            'contrast_1_lg2BaseMean_y' => array(
                'name' => 'lg2BaseMean y'
            ),
            'contrast_2_lg2BaseMean_WT_ColNeuron_vs_WT_ColNonNeuron_y' => array(
                'name' => 'lg2BaseMean WT ColNeuron vs WT ColNonNeuron y'
            ),
            'contrast_2_lg2BaseMean_y' => array(
                'name' => 'lg2BaseMean y'
            ),
            'contrast_3_lg2BaseMean_TCRaKO_ColNeuron_vs_TCRaKO_ColNonNeuron_y' => array(
                'name' => 'lg2BaseMean TCRaKO ColNeuron vs TCRaKO ColNonNeuron y'
            ),
            'contrast_3_lg2BaseMean_y' => array(
                'name' => 'lg2BaseMean y'
            ),
            'contrast_4_lg2BaseMean_TCRaKO_ColNonNeuron_vs_WT_ColNonNeuron_y' => array(
                'name' => 'lg2BaseMean TCRaKO ColNonNeuron vs WT ColNonNeuron y'
            ),
            'contrast_4_lg2BaseMean_y' => array(
                'name' => 'lg2BaseMean y'
            )
        )
    )
//End scatterplot
);
