<?php

return array(
    'lab' => array(
        'name' => 'bioLOGIC Public'
    ),

    'public_access' => true,

    /*
     * Experiment settings
     */
    'data_db_name' => 'biologic_data',
    'data_db' => array(
        'cat_table_name' => 'bio001_cat_reference_db_table'
    ),

    'primary_gene_symbol' => "mgi_symbol",
    'rnaseq_db_table' => "p001_rna_seq_table",
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => "Heatmap: Row-averaged TPM",
        'pointer' => "lg2(SILAC Ratio)"
    ),

    'samples' => array(
        'norm_counts_antiNGF_DLKi_1' => array(
            'color' => '#8DD3C7',
            'name' => 'antiNGF DLKi 1'
        ),
        'norm_counts_antiNGF_DLKi_2' => array(
            'color' => '#8DD3C7',
            'name' => 'antiNGF DLKi 2'
        ),
        'norm_counts_antiNGF_DLKi_3' => array(
            'color' => '#8DD3C7',
            'name' => 'antiNGF DLKi 3'
        ),
        'norm_counts_antiNGF_DLKi_4' => array(
            'color' => '#8DD3C7',
            'name' => 'antiNGF DLKi 4'
        ),
        'norm_counts_antiNGF_DMSO_1' => array(
            'color' => '#A9A0B2',
            'name' => 'antiNGF DMSO 1'
        ),
        'norm_counts_antiNGF_DMSO_2' => array(
            'color' => '#A9A0B2',
            'name' => 'antiNGF DMSO 2'
        ),
        'norm_counts_antiNGF_DMSO_3' => array(
            'color' => '#A9A0B2',
            'name' => 'antiNGF DMSO 3'
        ),
        'norm_counts_antiNGF_DMSO_4' => array(
            'color' => '#A9A0B2',
            'name' => 'antiNGF DMSO 4'
        ),
        'norm_counts_antiNGF_DMSO_5' => array(
            'color' => '#A9A0B2',
            'name' => 'antiNGF DMSO 5'
        ),
        'norm_counts_antiNGF_ISRIB_1' => array(
            'color' => '#F0D1E1',
            'name' => 'antiNGF ISRIB 1'
        ),
        'norm_counts_antiNGF_ISRIB_2' => array(
            'color' => '#F0D1E1',
            'name' => 'antiNGF ISRIB 2'
        ),
        'norm_counts_antiNGF_ISRIB_3' => array(
            'color' => '#F0D1E1',
            'name' => 'antiNGF ISRIB 3'
        ),
        'norm_counts_antiNGF_ISRIB_4' => array(
            'color' => '#F0D1E1',
            'name' => 'antiNGF ISRIB 4'
        ),
        'norm_counts_NGF_DMSO_1' => array(
            'color' => '#FFED6F',
            'name' => 'NGF DMSO 1',
        ),
        'norm_counts_NGF_DMSO_2' => array(
            'color' => '#FFED6F',
            'name' => 'NGF DMSO 2'
        ),
        'norm_counts_NGF_DMSO_3' => array(
            'color' => '#FFED6F',
            'name' => 'NGF DMSO 3'
        ),
        'norm_counts_NGF_DMSO_4' => array(
            'color' => '#FFED6F',
            'name' => 'NGF DMSO 4'
        ),
        'norm_counts_NGF_DMSO_5' => array(
            'color' => '#FFED6F',
            'name' => 'NGF DMSO 5'
        )

    ),

    // bar chart
    'count_table' => array(
        'headline' => "TPM Values for all Samples",
        'sidelabel' => "TPM"
    ),

    'venn' => array(
        'experiments' => array('lg2_avg_antiNGF_ISRIB_1','lg2_avg_antiNGF_ISRIB_3','lg2_avg_antiNGF_ISRIB_2','lg2_avg_antiNGF_ISRIB_4','lg2_avg_antiNGF_DLKi_2','lg2_avg_antiNGF_DLKi_4','lg2_avg_antiNGF_DLKi_3','lg2_avg_antiNGF_DLKi_1','lg2_avg_antiNGF_DMSO_2','lg2_avg_antiNGF_DMSO_5','lg2_avg_antiNGF_DMSO_1','lg2_avg_antiNGF_DMSO_3','lg2_avg_antiNGF_DMSO_4','lg2_avg_NGF_DMSO_3','lg2_avg_NGF_DMSO_2','lg2_avg_NGF_DMSO_5','lg2_avg_NGF_DMSO_1','lg2_avg_NGF_DMSO_4'),

        'table' => array(
            'col_name_start' => 11,
            'low_highlight' => -1,
            'high_highlight' => 1
        ),

        'selection' => array(
            'contrast_1_logFC_antiNGF_DMSO_vs_NGF_DMSO' => array(
                'name' => 'logFC antiNGF DMSO vs NGF DMSO',
                'slider_min' => -5,
                'slider_max' => 5,
                'default_low' => -5,
                'default_high' => 5
            ),

            'contrast_2_logFC_antiNGF_ISRIB_vs_antiNGF_DMSO' => array(
                'name' => 'logFC antiNGF ISRIB vs antiNGF DMSO',
                'slider_min' => -4,
                'slider_max' => 2,
                'default_low' => -4,
                'default_high' => 2
            ),

            'contrast_3_logFC_antiNGF_DLKi_vs_antiNGF_DMSO' => array(
                'name' => 'logFC antiNGF DLKi vs antiNGF DMSO',
                'slider_min' => -5,
                'slider_max' => 3,
                'default_low' => -5,
                'default_high' => 3
            ),

            'contrast_1_padj_antiNGF_DMSO_vs_NGF_DMSO' => array(
                'name' => 'padj antiNGF DMSO vs NGF DMSO',
                'slider_min' => 0,
                'slider_max' => 1,
                'default_low' => 0,
                'default_high' => 1
            ),

            'contrast_2_padj_antiNGF_ISRIB_vs_antiNGF_DMSO' => array(
                'name' => 'padj antiNGF ISRIB vs antiNGF DMSO',
                'slider_min' => 0,
                'slider_max' => 1,
                'default_low' => 0,
                'default_high' => 1
            ),

            'contrast_3_padj_antiNGF_DLKi_vs_antiNGF_DMSO' => array(
                'name' => 'padj antiNGF DLKi vs antiNGF DMSO',
                'slider_min' => 0,
                'slider_max' => 1,
                'default_low' => 0,
                'default_high' => 1
            )
        )
    ),

    'scatterplot' => array(
        'selection' => array(
            'contrast_1_logFC_antiNGF_DMSO_vs_NGF_DMSO' => array(
                'name' => 'logFC_antiNGF_DMSO_vs_NGF_DMSO'
            ),
            'contrast_2_logFC_antiNGF_ISRIB_vs_antiNGF_DMSO' => array(
                'name' => 'logFC_antiNGF_ISRIB_vs_antiNGF_DMSO'
            ),
            'contrast_3_logFC_antiNGF_DLKi_vs_antiNGF_DMSO' => array(
                'name' => 'logFC_antiNGF_DLKi_vs_antiNGF_DMSO'
            ),
            'contrast_1_lg10p_antiNGF_DMSO_vs_NGF_DMSO' => array(
                'name' => 'lg10p_antiNGF_DMSO_vs_NGF_DMSO'
            ),
            'contrast_2_lg10p_antiNGF_ISRIB_vs_antiNGF_DMSO' => array(
                'name' => 'lg10p_antiNGF_ISRIB_vs_antiNGF_DMSO'
            ),
            'contrast_3_lg10p_antiNGF_DLKi_vs_antiNGF_DMSO' => array(
                'name' => 'lg10p_antiNGF_DLKi_vs_antiNGF_DMSO'
            )
        ),
        'default-x' => 'contrast_1_logFC_antiNGF_DMSO_vs_NGF_DMSO',
        'default-y' => 'contrast_1_lg10p_antiNGF_DMSO_vs_NGF_DMSO'
    )
);
