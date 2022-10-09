<?php

return array(
    'public_access' => TRUE,
    'lab' => array(
        'name' => 'Pachnis DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'vpl_data',
    'data_db' => array(
            'cat_table_name' => 'RN21203mature_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'RN21203mature_bulk_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'TPM Values for all Samples',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_EGC_HpolygyrusMature_1' => array(
            'color' => '#D39200',
            'name' => 'EGC HpolygyrusMature 1'
        ),
        'norm_counts_EGC_HpolygyrusMature_2' => array(
            'color' => '#D39200',
            'name' => 'EGC HpolygyrusMature 2'
        ),
        'norm_counts_EGC_HpolygyrusMature_3' => array(
            'color' => '#D39200',
            'name' => 'EGC HpolygyrusMature 3'
        ),
        'norm_counts_EGC_HpolygyrusMature_4' => array(
            'color' => '#D39200',
            'name' => 'EGC HpolygyrusMature 4'
        ),
        'norm_counts_EGC_NaiveMature_1' => array(
            'color' => '#00BA38',
            'name' => 'EGC NaiveMature 1'
        ),
        'norm_counts_EGC_NaiveMature_2' => array(
            'color' => '#00BA38',
            'name' => 'EGC NaiveMature 2'
        ),
        'norm_counts_EGC_NaiveMature_3' => array(
            'color' => '#00BA38',
            'name' => 'EGC NaiveMature 3'
        ),
        'norm_counts_EGC_NaiveMature_4' => array(
            'color' => '#00BA38',
            'name' => 'EGC NaiveMature 4'
        ),
        'norm_counts_nonEGC_HpolygyrusMature_1' => array(
            'color' => '#619CFF',
            'name' => 'nonEGC HpolygyrusMature 1'
        ),
        'norm_counts_nonEGC_HpolygyrusMature_2' => array(
            'color' => '#619CFF',
            'name' => 'nonEGC HpolygyrusMature 2'
        ),
        'norm_counts_nonEGC_HpolygyrusMature_3' => array(
            'color' => '#619CFF',
            'name' => 'nonEGC HpolygyrusMature 3'
        ),
        'norm_counts_nonEGC_HpolygyrusMature_4' => array(
            'color' => '#619CFF',
            'name' => 'nonEGC HpolygyrusMature 4'
        ),
        'norm_counts_nonEGC_NaiveMature_1' => array(
            'color' => '#FF61C3',
            'name' => 'nonEGC NaiveMature 1'
        ),
        'norm_counts_nonEGC_NaiveMature_2' => array(
            'color' => '#FF61C3',
            'name' => 'nonEGC NaiveMature 2'
        ),
        'norm_counts_nonEGC_NaiveMature_3' => array(
            'color' => '#FF61C3',
            'name' => 'nonEGC NaiveMature 3'
        ),
        'norm_counts_nonEGC_NaiveMature_4' => array(
            'color' => '#FF61C3',
            'name' => 'nonEGC NaiveMature 4'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM Values for all Samples'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_EGC_HpolygyrusMature_1','lg2_avg_EGC_HpolygyrusMature_2','lg2_avg_EGC_HpolygyrusMature_3','lg2_avg_EGC_HpolygyrusMature_4','lg2_avg_EGC_NaiveMature_1','lg2_avg_EGC_NaiveMature_2','lg2_avg_EGC_NaiveMature_3','lg2_avg_EGC_NaiveMature_4','lg2_avg_nonEGC_HpolygyrusMature_1','lg2_avg_nonEGC_HpolygyrusMature_2','lg2_avg_nonEGC_HpolygyrusMature_3','lg2_avg_nonEGC_HpolygyrusMature_4','lg2_avg_nonEGC_NaiveMature_1','lg2_avg_nonEGC_NaiveMature_2','lg2_avg_nonEGC_NaiveMature_3','lg2_avg_nonEGC_NaiveMature_4'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_EGC_HpolyMature_vs_EGC_NaiveMature' => array(
            'name' => 'logFC EGC HpolyMature vs EGC NaiveMature',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'contrast_1_padj_EGC_HpolyMature_vs_EGC_NaiveMature' => array(
            'name' => 'padj EGC HpolyMature vs EGC NaiveMature',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_nonEGC_HpolygyrusMature_vs_nonEGC_NaiveMature' => array(
            'name' => 'logFC nonEGC HpolygyrusMature vs nonEGC NaiveMature',
            'slider_min' => -3,
            'slider_max' => 5,
            'default_low' => -3,
            'default_high' => 5
        ),
        'contrast_2_padj_nonEGC_HpolygyrusMature_vs_nonEGC_NaiveMature' => array(
            'name' => 'padj nonEGC HpolygyrusMature vs nonEGC NaiveMature',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_EGC_NaiveMature_vs_nonEGC_NaiveMature' => array(
            'name' => 'logFC EGC NaiveMature vs nonEGC NaiveMature',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_3_padj_EGC_NaiveMature_vs_nonEGC_NaiveMature' => array(
            'name' => 'padj EGC NaiveMature vs nonEGC NaiveMature',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'RN21203mature_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_EGC_HpolyMature_vs_EGC_NaiveMature',
        'default-y' => 'contrast_1_lg10p_EGC_HpolyMature_vs_EGC_NaiveMature',
        'selection' => array(
            'contrast_1_logFC_EGC_HpolyMature_vs_EGC_NaiveMature' => array(
                'name' => 'logFC EGC HpolyMature vs EGC NaiveMature'
            ),
            'contrast_2_logFC_nonEGC_HpolygyrusMature_vs_nonEGC_NaiveMature' => array(
                'name' => 'logFC nonEGC HpolygyrusMature vs nonEGC NaiveMature'
            ),
            'contrast_3_logFC_EGC_NaiveMature_vs_nonEGC_NaiveMature' => array(
                'name' => 'logFC EGC NaiveMature vs nonEGC NaiveMature'
            ),
            'contrast_1_lg10p_EGC_HpolyMature_vs_EGC_NaiveMature' => array(
                'name' => 'lg10p EGC HpolyMature vs EGC NaiveMature'
            ),
            'contrast_2_lg10p_nonEGC_HpolygyrusMature_vs_nonEGC_NaiveMature' => array(
                'name' => 'lg10p nonEGC HpolygyrusMature vs nonEGC NaiveMature'
            ),
            'contrast_3_lg10p_EGC_NaiveMature_vs_nonEGC_NaiveMature' => array(
                'name' => 'lg10p EGC NaiveMature vs nonEGC NaiveMature'
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
            'contrast_1_lg2BaseMean_EGC_HpolyMature_vs_EGC_NaiveMature' => array(
                'name' => 'lg2BaseMean EGC HpolyMature vs EGC NaiveMature'
            ),
            'contrast_2_lg2BaseMean_nonEGC_HpolygyrusMature_vs_nonEGC_NaiveMature' => array(
                'name' => 'lg2BaseMean nonEGC HpolygyrusMature vs nonEGC NaiveMature'
            ),
            'contrast_3_lg2BaseMean_EGC_NaiveMature_vs_nonEGC_NaiveMature' => array(
                'name' => 'lg2BaseMean EGC NaiveMature vs nonEGC NaiveMature'
            )
        )
    )
//End scatterplot
);
