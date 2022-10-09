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
            'cat_table_name' => 'csl417C_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'csl417C_rna_seq_table',
    'primary_gene_symbol' => 'hgnc_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_TUMOUR_CD4_LTX893_TPM' => array(
            'color' => '#F8766D',
            'name' => 'TUMOUR CD4 LTX893 TPM'
        ),
        'norm_counts_TUMOUR_CD4_LTX896_TPM' => array(
            'color' => '#F8766D',
            'name' => 'TUMOUR CD4 LTX896 TPM'
        ),
        'norm_counts_TUMOUR_CD4_LTX902_TPM' => array(
            'color' => '#F8766D',
            'name' => 'TUMOUR CD4 LTX902 TPM'
        ),
        'norm_counts_TUMOUR_CD4_LTX917_TPM' => array(
            'color' => '#F8766D',
            'name' => 'TUMOUR CD4 LTX917 TPM'
        ),
        'norm_counts_TUMOUR_CD4_LTX918_TPM' => array(
            'color' => '#F8766D',
            'name' => 'TUMOUR CD4 LTX918 TPM'
        ),
        'norm_counts_TUMOUR_CD4_LTX920_TPM' => array(
            'color' => '#F8766D',
            'name' => 'TUMOUR CD4 LTX920 TPM'
        ),
        'norm_counts_TUMOUR_CD4_LTX927_TPM' => array(
            'color' => '#F8766D',
            'name' => 'TUMOUR CD4 LTX927 TPM'
        ),
        'norm_counts_TUMOUR_CD4_LTX933_TPM' => array(
            'color' => '#F8766D',
            'name' => 'TUMOUR CD4 LTX933 TPM'
        ),
        'norm_counts_TUMOUR_CD4_LTX949_TPM' => array(
            'color' => '#F8766D',
            'name' => 'TUMOUR CD4 LTX949 TPM'
        ),
        'norm_counts_TUMOUR_CD8_LTX893_TPM' => array(
            'color' => '#B79F00',
            'name' => 'TUMOUR CD8 LTX893 TPM'
        ),
        'norm_counts_TUMOUR_CD8_LTX896_TPM' => array(
            'color' => '#B79F00',
            'name' => 'TUMOUR CD8 LTX896 TPM'
        ),
        'norm_counts_TUMOUR_CD8_LTX902_TPM' => array(
            'color' => '#B79F00',
            'name' => 'TUMOUR CD8 LTX902 TPM'
        ),
        'norm_counts_TUMOUR_CD8_LTX917_TPM' => array(
            'color' => '#B79F00',
            'name' => 'TUMOUR CD8 LTX917 TPM'
        ),
        'norm_counts_TUMOUR_CD8_LTX918_TPM' => array(
            'color' => '#B79F00',
            'name' => 'TUMOUR CD8 LTX918 TPM'
        ),
        'norm_counts_TUMOUR_CD8_LTX920_TPM' => array(
            'color' => '#B79F00',
            'name' => 'TUMOUR CD8 LTX920 TPM'
        ),
        'norm_counts_TUMOUR_CD8_LTX927_TPM' => array(
            'color' => '#B79F00',
            'name' => 'TUMOUR CD8 LTX927 TPM'
        ),
        'norm_counts_TUMOUR_CD8_LTX933_TPM' => array(
            'color' => '#B79F00',
            'name' => 'TUMOUR CD8 LTX933 TPM'
        ),
        'norm_counts_TUMOUR_CD8_LTX949_TPM' => array(
            'color' => '#B79F00',
            'name' => 'TUMOUR CD8 LTX949 TPM'
        ),
        'norm_counts_TUMOUR_NKCELLS_LTX893_TPM' => array(
            'color' => '#00BA38',
            'name' => 'TUMOUR NKCELLS LTX893 TPM'
        ),
        'norm_counts_TUMOUR_NKCELLS_LTX896_TPM' => array(
            'color' => '#00BA38',
            'name' => 'TUMOUR NKCELLS LTX896 TPM'
        ),
        'norm_counts_TUMOUR_NKCELLS_LTX918_TPM' => array(
            'color' => '#00BA38',
            'name' => 'TUMOUR NKCELLS LTX918 TPM'
        ),
        'norm_counts_TUMOUR_NKCELLS_LTX920_TPM' => array(
            'color' => '#00BA38',
            'name' => 'TUMOUR NKCELLS LTX920 TPM'
        ),
        'norm_counts_TUMOUR_NKCELLS_LTX927_TPM' => array(
            'color' => '#00BA38',
            'name' => 'TUMOUR NKCELLS LTX927 TPM'
        ),
        'norm_counts_TUMOUR_NKCELLS_LTX933_TPM' => array(
            'color' => '#00BA38',
            'name' => 'TUMOUR NKCELLS LTX933 TPM'
        ),
        'norm_counts_TUMOUR_NKCELLS_LTX949_TPM' => array(
            'color' => '#00BA38',
            'name' => 'TUMOUR NKCELLS LTX949 TPM'
        ),
        'norm_counts_TUMOUR_TREG_LTX893_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'TUMOUR TREG LTX893 TPM'
        ),
        'norm_counts_TUMOUR_TREG_LTX896_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'TUMOUR TREG LTX896 TPM'
        ),
        'norm_counts_TUMOUR_TREG_LTX917_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'TUMOUR TREG LTX917 TPM'
        ),
        'norm_counts_TUMOUR_TREG_LTX920_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'TUMOUR TREG LTX920 TPM'
        ),
        'norm_counts_TUMOUR_TREG_LTX927_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'TUMOUR TREG LTX927 TPM'
        ),
        'norm_counts_TUMOUR_VD1_LTX293_TPM' => array(
            'color' => '#619CFF',
            'name' => 'TUMOUR VD1 LTX293 TPM'
        ),
        'norm_counts_TUMOUR_VD1_LTX310_TPM' => array(
            'color' => '#619CFF',
            'name' => 'TUMOUR VD1 LTX310 TPM'
        ),
        'norm_counts_TUMOUR_VD1_LTX323_TPM' => array(
            'color' => '#619CFF',
            'name' => 'TUMOUR VD1 LTX323 TPM'
        ),
        'norm_counts_TUMOUR_VD1_LTX479_TPM' => array(
            'color' => '#619CFF',
            'name' => 'TUMOUR VD1 LTX479 TPM'
        ),
        'norm_counts_TUMOUR_VD1_LTX567_TPM' => array(
            'color' => '#619CFF',
            'name' => 'TUMOUR VD1 LTX567 TPM'
        ),
        'norm_counts_TUMOUR_VD2_LTX246_TPM' => array(
            'color' => '#F564E3',
            'name' => 'TUMOUR VD2 LTX246 TPM'
        ),
        'norm_counts_TUMOUR_VD2_LTX429_TPM' => array(
            'color' => '#F564E3',
            'name' => 'TUMOUR VD2 LTX429 TPM'
        ),
        'norm_counts_TUMOUR_VD2_LTX479_TPM' => array(
            'color' => '#F564E3',
            'name' => 'TUMOUR VD2 LTX479 TPM'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_TUMOUR_CD4_LTX893_TPM','lg2_avg_TUMOUR_CD4_LTX896_TPM','lg2_avg_TUMOUR_CD4_LTX902_TPM','lg2_avg_TUMOUR_CD4_LTX917_TPM','lg2_avg_TUMOUR_CD4_LTX918_TPM','lg2_avg_TUMOUR_CD4_LTX920_TPM','lg2_avg_TUMOUR_CD4_LTX927_TPM','lg2_avg_TUMOUR_CD4_LTX933_TPM','lg2_avg_TUMOUR_CD4_LTX949_TPM','lg2_avg_TUMOUR_CD8_LTX893_TPM','lg2_avg_TUMOUR_CD8_LTX896_TPM','lg2_avg_TUMOUR_CD8_LTX902_TPM','lg2_avg_TUMOUR_CD8_LTX917_TPM','lg2_avg_TUMOUR_CD8_LTX918_TPM','lg2_avg_TUMOUR_CD8_LTX920_TPM','lg2_avg_TUMOUR_CD8_LTX927_TPM','lg2_avg_TUMOUR_CD8_LTX933_TPM','lg2_avg_TUMOUR_CD8_LTX949_TPM','lg2_avg_TUMOUR_NKCELLS_LTX893_TPM','lg2_avg_TUMOUR_NKCELLS_LTX896_TPM','lg2_avg_TUMOUR_NKCELLS_LTX918_TPM','lg2_avg_TUMOUR_NKCELLS_LTX920_TPM','lg2_avg_TUMOUR_NKCELLS_LTX927_TPM','lg2_avg_TUMOUR_NKCELLS_LTX933_TPM','lg2_avg_TUMOUR_NKCELLS_LTX949_TPM','lg2_avg_TUMOUR_TREG_LTX893_TPM','lg2_avg_TUMOUR_TREG_LTX896_TPM','lg2_avg_TUMOUR_TREG_LTX917_TPM','lg2_avg_TUMOUR_TREG_LTX920_TPM','lg2_avg_TUMOUR_TREG_LTX927_TPM','lg2_avg_TUMOUR_VD1_LTX293_TPM','lg2_avg_TUMOUR_VD1_LTX310_TPM','lg2_avg_TUMOUR_VD1_LTX323_TPM','lg2_avg_TUMOUR_VD1_LTX479_TPM','lg2_avg_TUMOUR_VD1_LTX567_TPM','lg2_avg_TUMOUR_VD2_LTX246_TPM','lg2_avg_TUMOUR_VD2_LTX429_TPM','lg2_avg_TUMOUR_VD2_LTX479_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_VD1_vs_VD2_x' => array(
            'name' => 'logFC VD1 vs VD2 x',
            'slider_min' => -9,
            'slider_max' => 11,
            'default_low' => -9,
            'default_high' => 11
        ),
        'contrast_1_padj_VD1_vs_VD2_x' => array(
            'name' => 'padj VD1 vs VD2 x',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_1_logFC_VD1_vs_VD2_y' => array(
            'name' => 'logFC VD1 vs VD2 y',
            'slider_min' => -9,
            'slider_max' => 11,
            'default_low' => -9,
            'default_high' => 11
        ),
        'contrast_1_padj_VD1_vs_VD2_y' => array(
            'name' => 'padj VD1 vs VD2 y',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'add_venn_X_corCoef_IRF3' => array(
            'name' => 'corCoef IRF3',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'csl417C_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_VD1_vs_VD2_x',
        'default-x' => 'contrast_1_logFC_VD1_vs_VD2_y',
        'default-y' => 'contrast_1_lg10p_VD1_vs_VD2_x',
        'default-y' => 'contrast_1_lg10p_VD1_vs_VD2_y',
        'selection' => array(
            'contrast_1_logFC_VD1_vs_VD2_x' => array(
                'name' => 'logFC VD1 vs VD2 x'
            ),
            'contrast_1_logFC_VD1_vs_VD2_y' => array(
                'name' => 'logFC VD1 vs VD2 y'
            ),
            'contrast_1_lg10p_VD1_vs_VD2_x' => array(
                'name' => 'lg10p VD1 vs VD2 x'
            ),
            'contrast_1_lg10p_VD1_vs_VD2_y' => array(
                'name' => 'lg10p VD1 vs VD2 y'
            ),
            'add_venn_X_corCoef_IRF3' => array(
                'name' => 'corCoef IRF3'
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
            'contrast_1_lg2BaseMean_VD1_vs_VD2_x' => array(
                'name' => 'lg2BaseMean VD1 vs VD2 x'
            ),
            'contrast_1_lg2BaseMean_x' => array(
                'name' => 'lg2BaseMean x'
            ),
            'contrast_1_lg2BaseMean_VD1_vs_VD2_y' => array(
                'name' => 'lg2BaseMean VD1 vs VD2 y'
            ),
            'contrast_1_lg2BaseMean_y' => array(
                'name' => 'lg2BaseMean y'
            )
        )
    )
//End scatterplot
);
