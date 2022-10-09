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
            'cat_table_name' => 'vpl331_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'p331_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Glia_HpolyHet_1_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Glia HpolyHet 1 TPM'
        ),
        'norm_counts_Glia_HpolyHet_2_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Glia HpolyHet 2 TPM'
        ),
        'norm_counts_Glia_HpolyHet_3_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Glia HpolyHet 3 TPM'
        ),
        'norm_counts_Glia_HpolyHet_4_TPM' => array(
            'color' => '#F8766D',
            'name' => 'Glia HpolyHet 4 TPM'
        ),
        'norm_counts_Glia_HpolyHom_1_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'Glia HpolyHom 1 TPM'
        ),
        'norm_counts_Glia_HpolyHom_2_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'Glia HpolyHom 2 TPM'
        ),
        'norm_counts_Glia_HpolyHom_3_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'Glia HpolyHom 3 TPM'
        ),
        'norm_counts_Glia_HpolyHom_4_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'Glia HpolyHom 4 TPM'
        ),
        'norm_counts_NonGlia_HpolyHet_1_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'NonGlia HpolyHet 1 TPM'
        ),
        'norm_counts_NonGlia_HpolyHet_2_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'NonGlia HpolyHet 2 TPM'
        ),
        'norm_counts_NonGlia_HpolyHet_3_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'NonGlia HpolyHet 3 TPM'
        ),
        'norm_counts_NonGlia_HpolyHet_4_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'NonGlia HpolyHet 4 TPM'
        ),
        'norm_counts_NonGlia_HpolyHom_1_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'NonGlia HpolyHom 1 TPM'
        ),
        'norm_counts_NonGlia_HpolyHom_2_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'NonGlia HpolyHom 2 TPM'
        ),
        'norm_counts_NonGlia_HpolyHom_3_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'NonGlia HpolyHom 3 TPM'
        ),
        'norm_counts_NonGlia_HpolyHom_4_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'NonGlia HpolyHom 4 TPM'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Glia_HpolyHet_1_TPM','lg2_avg_Glia_HpolyHet_2_TPM','lg2_avg_Glia_HpolyHet_3_TPM','lg2_avg_Glia_HpolyHet_4_TPM','lg2_avg_Glia_HpolyHom_1_TPM','lg2_avg_Glia_HpolyHom_2_TPM','lg2_avg_Glia_HpolyHom_3_TPM','lg2_avg_Glia_HpolyHom_4_TPM','lg2_avg_NonGlia_HpolyHet_1_TPM','lg2_avg_NonGlia_HpolyHet_2_TPM','lg2_avg_NonGlia_HpolyHet_3_TPM','lg2_avg_NonGlia_HpolyHet_4_TPM','lg2_avg_NonGlia_HpolyHom_1_TPM','lg2_avg_NonGlia_HpolyHom_2_TPM','lg2_avg_NonGlia_HpolyHom_3_TPM','lg2_avg_NonGlia_HpolyHom_4_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_Glia_HpolyHet_vs_Glia_HpolyHom' => array(
            'name' => 'logFC Glia HpolyHet vs Glia HpolyHom',
            'slider_min' => -5,
            'slider_max' => 5,
            'default_low' => -5,
            'default_high' => 5
        ),
        'contrast_2_logFC_NonGlia_HpolyHet_vs_NonGlia_HpolyHom' => array(
            'name' => 'logFC NonGlia HpolyHet vs NonGlia HpolyHom',
            'slider_min' => -7,
            'slider_max' => 7,
            'default_low' => -7,
            'default_high' => 7
        ),
        'contrast_3_logFC_Glia_HpolyHet_vs_NonGlia_HpolyHet' => array(
            'name' => 'logFC Glia HpolyHet vs NonGlia HpolyHet',
            'slider_min' => -10,
            'slider_max' => 16,
            'default_low' => -10,
            'default_high' => 16
        ),
        'contrast_4_logFC_Glia_HpolyHom_vs_NonGlia_HpolyHom' => array(
            'name' => 'logFC Glia HpolyHom vs NonGlia HpolyHom',
            'slider_min' => -10,
            'slider_max' => 11,
            'default_low' => -10,
            'default_high' => 11
        ),
        'contrast_1_padj_Glia_HpolyHet_vs_Glia_HpolyHom' => array(
            'name' => 'padj Glia HpolyHet vs Glia HpolyHom',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_padj_NonGlia_HpolyHet_vs_NonGlia_HpolyHom' => array(
            'name' => 'padj NonGlia HpolyHet vs NonGlia HpolyHom',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_padj_Glia_HpolyHet_vs_NonGlia_HpolyHet' => array(
            'name' => 'padj Glia HpolyHet vs NonGlia HpolyHet',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_padj_Glia_HpolyHom_vs_NonGlia_HpolyHom' => array(
            'name' => 'padj Glia HpolyHom vs NonGlia HpolyHom',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'p331_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_2_logFC_NonGlia_HpolyHet_vs_NonGlia_HpolyHom',
        'default-y' => 'contrast_2_lg10p_NonGlia_HpolyHet_vs_NonGlia_HpolyHom',
        'selection' => array(
            'contrast_1_logFC_Glia_HpolyHet_vs_Glia_HpolyHom' => array(
                'name' => 'logFC Glia HpolyHet vs Glia HpolyHom'
            ),
            'contrast_2_logFC_NonGlia_HpolyHet_vs_NonGlia_HpolyHom' => array(
                'name' => 'logFC NonGlia HpolyHet vs NonGlia HpolyHom'
            ),
            'contrast_3_logFC_Glia_HpolyHet_vs_NonGlia_HpolyHet' => array(
                'name' => 'logFC Glia HpolyHet vs NonGlia HpolyHet'
            ),
            'contrast_4_logFC_Glia_HpolyHom_vs_NonGlia_HpolyHom' => array(
                'name' => 'logFC Glia HpolyHom vs NonGlia HpolyHom'
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
            'contrast_1_lg10p_Glia_HpolyHet_vs_Glia_HpolyHom' => array(
                'name' => 'lg10p Glia HpolyHet vs Glia HpolyHom'
            ),
            'contrast_2_lg10p_NonGlia_HpolyHet_vs_NonGlia_HpolyHom' => array(
                'name' => 'lg10p NonGlia HpolyHet vs NonGlia HpolyHom'
            ),
            'contrast_3_lg10p_Glia_HpolyHet_vs_NonGlia_HpolyHet' => array(
                'name' => 'lg10p Glia HpolyHet vs NonGlia HpolyHet'
            ),
            'contrast_4_lg10p_Glia_HpolyHom_vs_NonGlia_HpolyHom' => array(
                'name' => 'lg10p Glia HpolyHom vs NonGlia HpolyHom'
            ),
            'contrast_L_lg10p_LRT_Glia_vs_NonGlia' => array(
                'name' => 'lg10p LRT Glia vs NonGlia'
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
            'contrast_1_lg2BaseMean_Glia_HpolyHet_vs_Glia_HpolyHom' => array(
                'name' => 'lg2BaseMean Glia HpolyHet vs Glia HpolyHom'
            ),
            'contrast_2_lg2BaseMean_NonGlia_HpolyHet_vs_NonGlia_HpolyHom' => array(
                'name' => 'lg2BaseMean NonGlia HpolyHet vs NonGlia HpolyHom'
            ),
            'contrast_3_lg2BaseMean_Glia_HpolyHet_vs_NonGlia_HpolyHet' => array(
                'name' => 'lg2BaseMean Glia HpolyHet vs NonGlia HpolyHet'
            ),
            'contrast_4_lg2BaseMean_Glia_HpolyHom_vs_NonGlia_HpolyHom' => array(
                'name' => 'lg2BaseMean Glia HpolyHom vs NonGlia HpolyHom'
            ),
            'contrast_L_lg2BaseMean_LRT_Glia_vs_NonGlia' => array(
                'name' => 'lg2BaseMean LRT Glia vs NonGlia'
            )
        )
    )
//End scatterplot
);
