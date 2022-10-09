<?php

return array(
    'public_access' => TRUE,
    'lab' => array(
        'name' => 'Pachnis DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'agl_data',
    'data_db' => array(
            'cat_table_name' => 'testExperiment_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'testExperiment_bulk_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'TPM Values for all Samples',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Fresh_1' => array(
            'color' => '#F8766D',
            'name' => 'Fresh 1'
        ),
        'norm_counts_Fresh_2' => array(
            'color' => '#F8766D',
            'name' => 'Fresh 2'
        ),
        'norm_counts_Fresh_3' => array(
            'color' => '#F8766D',
            'name' => 'Fresh 3'
        ),
        'norm_counts_Post_dissociation_1' => array(
            'color' => '#00BA38',
            'name' => 'Post dissociation 1'
        ),
        'norm_counts_Post_dissociation_2' => array(
            'color' => '#00BA38',
            'name' => 'Post dissociation 2'
        ),
        'norm_counts_Post_dissociation_3' => array(
            'color' => '#00BA38',
            'name' => 'Post dissociation 3'
        ),
        'norm_counts_Post_FACS_1' => array(
            'color' => '#619CFF',
            'name' => 'Post FACS 1'
        ),
        'norm_counts_Post_FACS_2' => array(
            'color' => '#619CFF',
            'name' => 'Post FACS 2'
        ),
        'norm_counts_Post_FACS_3' => array(
            'color' => '#619CFF',
            'name' => 'Post FACS 3'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM Values for all Samples'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Fresh_1','lg2_avg_Fresh_2','lg2_avg_Fresh_3','lg2_avg_Post_dissociation_1','lg2_avg_Post_dissociation_2','lg2_avg_Post_dissociation_3','lg2_avg_Post_FACS_1','lg2_avg_Post_FACS_2','lg2_avg_Post_FACS_3'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_Post_dissociation_vs_Fresh' => array(
            'name' => 'logFC Post dissociation vs Fresh',
            'slider_min' => -4,
            'slider_max' => 4,
            'default_low' => -4,
            'default_high' => 4
        ),
        'contrast_1_padj_Post_dissociation_vs_Fresh' => array(
            'name' => 'padj Post dissociation vs Fresh',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_Post_FACS_vs_Fresh' => array(
            'name' => 'logFC Post FACS vs Fresh',
            'slider_min' => -6,
            'slider_max' => 5,
            'default_low' => -6,
            'default_high' => 5
        ),
        'contrast_2_padj_Post_FACS_vs_Fresh' => array(
            'name' => 'padj Post FACS vs Fresh',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_Post_FACS_vs_Post_dissociation' => array(
            'name' => 'logFC Post FACS vs Post dissociation',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_3_padj_Post_FACS_vs_Post_dissociation' => array(
            'name' => 'padj Post FACS vs Post dissociation',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'testExperiment_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_Post_dissociation_vs_Fresh',
        'default-y' => 'contrast_1_lg10p_Post_dissociation_vs_Fresh',
        'selection' => array(
            'contrast_1_logFC_Post_dissociation_vs_Fresh' => array(
                'name' => 'logFC Post dissociation vs Fresh'
            ),
            'contrast_2_logFC_Post_FACS_vs_Fresh' => array(
                'name' => 'logFC Post FACS vs Fresh'
            ),
            'contrast_3_logFC_Post_FACS_vs_Post_dissociation' => array(
                'name' => 'logFC Post FACS vs Post dissociation'
            ),
            'contrast_1_lg10p_Post_dissociation_vs_Fresh' => array(
                'name' => 'lg10p Post dissociation vs Fresh'
            ),
            'contrast_2_lg10p_Post_FACS_vs_Fresh' => array(
                'name' => 'lg10p Post FACS vs Fresh'
            ),
            'contrast_3_lg10p_Post_FACS_vs_Post_dissociation' => array(
                'name' => 'lg10p Post FACS vs Post dissociation'
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
            'contrast_1_lg2BaseMean_Post_dissociation_vs_Fresh' => array(
                'name' => 'lg2BaseMean Post dissociation vs Fresh'
            ),
            'contrast_2_lg2BaseMean_Post_FACS_vs_Fresh' => array(
                'name' => 'lg2BaseMean Post FACS vs Fresh'
            ),
            'contrast_3_lg2BaseMean_Post_FACS_vs_Post_dissociation' => array(
                'name' => 'lg2BaseMean Post FACS vs Post dissociation'
            )
        )
    )
//End scatterplot
);
