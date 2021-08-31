<?php

return array(
    'lab' => array(
        'name' => 'Ley DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'sll_data',
    'data_db' => array(
            'cat_table_name' => 'sll285_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'p285_rna_seq_table',
    'primary_gene_symbol' => 'hgnc_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_CARD14E138A_0hr_1_TPM' => array(
            'color' => '#F8766D',
            'name' => 'CARD14E138A 0hr 1 TPM'
        ),
        'norm_counts_CARD14E138A_0hr_2_TPM' => array(
            'color' => '#F8766D',
            'name' => 'CARD14E138A 0hr 2 TPM'
        ),
        'norm_counts_CARD14E138A_0hr_3_TPM' => array(
            'color' => '#F8766D',
            'name' => 'CARD14E138A 0hr 3 TPM'
        ),
        'norm_counts_CARD14E138A_3hr_1_TPM' => array(
            'color' => '#DE8C00',
            'name' => 'CARD14E138A 3hr 1 TPM'
        ),
        'norm_counts_CARD14E138A_3hr_2_TPM' => array(
            'color' => '#DE8C00',
            'name' => 'CARD14E138A 3hr 2 TPM'
        ),
        'norm_counts_CARD14E138A_3hr_3_TPM' => array(
            'color' => '#DE8C00',
            'name' => 'CARD14E138A 3hr 3 TPM'
        ),
        'norm_counts_CARD14E138A_6hr_1_TPM' => array(
            'color' => '#B79F00',
            'name' => 'CARD14E138A 6hr 1 TPM'
        ),
        'norm_counts_CARD14E138A_6hr_2_TPM' => array(
            'color' => '#B79F00',
            'name' => 'CARD14E138A 6hr 2 TPM'
        ),
        'norm_counts_CARD14E138A_6hr_3_TPM' => array(
            'color' => '#B79F00',
            'name' => 'CARD14E138A 6hr 3 TPM'
        ),
        'norm_counts_CARD14E138A_9hr_1_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'CARD14E138A 9hr 1 TPM'
        ),
        'norm_counts_CARD14E138A_9hr_2_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'CARD14E138A 9hr 2 TPM'
        ),
        'norm_counts_CARD14E138A_9hr_3_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'CARD14E138A 9hr 3 TPM'
        ),
        'norm_counts_CARD14WT_0hr_1_TPM' => array(
            'color' => '#00BA38',
            'name' => 'CARD14WT 0hr 1 TPM'
        ),
        'norm_counts_CARD14WT_0hr_2_TPM' => array(
            'color' => '#00BA38',
            'name' => 'CARD14WT 0hr 2 TPM'
        ),
        'norm_counts_CARD14WT_0hr_3_TPM' => array(
            'color' => '#00BA38',
            'name' => 'CARD14WT 0hr 3 TPM'
        ),
        'norm_counts_CARD14WT_3hr_1_TPM' => array(
            'color' => '#00C08B',
            'name' => 'CARD14WT 3hr 1 TPM'
        ),
        'norm_counts_CARD14WT_3hr_2_TPM' => array(
            'color' => '#00C08B',
            'name' => 'CARD14WT 3hr 2 TPM'
        ),
        'norm_counts_CARD14WT_3hr_3_TPM' => array(
            'color' => '#00C08B',
            'name' => 'CARD14WT 3hr 3 TPM'
        ),
        'norm_counts_CARD14WT_6hr_1_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'CARD14WT 6hr 1 TPM'
        ),
        'norm_counts_CARD14WT_6hr_2_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'CARD14WT 6hr 2 TPM'
        ),
        'norm_counts_CARD14WT_6hr_3_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'CARD14WT 6hr 3 TPM'
        ),
        'norm_counts_CARD14WT_9hr_1_TPM' => array(
            'color' => '#00B4F0',
            'name' => 'CARD14WT 9hr 1 TPM'
        ),
        'norm_counts_CARD14WT_9hr_2_TPM' => array(
            'color' => '#00B4F0',
            'name' => 'CARD14WT 9hr 2 TPM'
        ),
        'norm_counts_CARD14WT_9hr_3_TPM' => array(
            'color' => '#00B4F0',
            'name' => 'CARD14WT 9hr 3 TPM'
        ),
        'norm_counts_HaCatTR_0hr_1_TPM' => array(
            'color' => '#619CFF',
            'name' => 'HaCatTR 0hr 1 TPM'
        ),
        'norm_counts_HaCatTR_0hr_2_TPM' => array(
            'color' => '#619CFF',
            'name' => 'HaCatTR 0hr 2 TPM'
        ),
        'norm_counts_HaCatTR_0hr_3_TPM' => array(
            'color' => '#619CFF',
            'name' => 'HaCatTR 0hr 3 TPM'
        ),
        'norm_counts_HaCatTR_3hr_1_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'HaCatTR 3hr 1 TPM'
        ),
        'norm_counts_HaCatTR_3hr_2_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'HaCatTR 3hr 2 TPM'
        ),
        'norm_counts_HaCatTR_3hr_3_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'HaCatTR 3hr 3 TPM'
        ),
        'norm_counts_HaCatTR_6hr_1_TPM' => array(
            'color' => '#F564E3',
            'name' => 'HaCatTR 6hr 1 TPM'
        ),
        'norm_counts_HaCatTR_6hr_2_TPM' => array(
            'color' => '#F564E3',
            'name' => 'HaCatTR 6hr 2 TPM'
        ),
        'norm_counts_HaCatTR_6hr_3_TPM' => array(
            'color' => '#F564E3',
            'name' => 'HaCatTR 6hr 3 TPM'
        ),
        'norm_counts_HaCatTR_9hr_1_TPM' => array(
            'color' => '#FF64B0',
            'name' => 'HaCatTR 9hr 1 TPM'
        ),
        'norm_counts_HaCatTR_9hr_2_TPM' => array(
            'color' => '#FF64B0',
            'name' => 'HaCatTR 9hr 2 TPM'
        ),
        'norm_counts_HaCatTR_9hr_3_TPM' => array(
            'color' => '#FF64B0',
            'name' => 'HaCatTR 9hr 3 TPM'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_CARD14E138A_0hr_1_TPM','lg2_avg_CARD14E138A_0hr_2_TPM','lg2_avg_CARD14E138A_0hr_3_TPM','lg2_avg_CARD14E138A_3hr_1_TPM','lg2_avg_CARD14E138A_3hr_2_TPM','lg2_avg_CARD14E138A_3hr_3_TPM','lg2_avg_CARD14E138A_6hr_1_TPM','lg2_avg_CARD14E138A_6hr_2_TPM','lg2_avg_CARD14E138A_6hr_3_TPM','lg2_avg_CARD14E138A_9hr_1_TPM','lg2_avg_CARD14E138A_9hr_2_TPM','lg2_avg_CARD14E138A_9hr_3_TPM','lg2_avg_CARD14WT_0hr_1_TPM','lg2_avg_CARD14WT_0hr_2_TPM','lg2_avg_CARD14WT_0hr_3_TPM','lg2_avg_CARD14WT_3hr_1_TPM','lg2_avg_CARD14WT_3hr_2_TPM','lg2_avg_CARD14WT_3hr_3_TPM','lg2_avg_CARD14WT_6hr_1_TPM','lg2_avg_CARD14WT_6hr_2_TPM','lg2_avg_CARD14WT_6hr_3_TPM','lg2_avg_CARD14WT_9hr_1_TPM','lg2_avg_CARD14WT_9hr_2_TPM','lg2_avg_CARD14WT_9hr_3_TPM','lg2_avg_HaCatTR_0hr_1_TPM','lg2_avg_HaCatTR_0hr_2_TPM','lg2_avg_HaCatTR_0hr_3_TPM','lg2_avg_HaCatTR_3hr_1_TPM','lg2_avg_HaCatTR_3hr_2_TPM','lg2_avg_HaCatTR_3hr_3_TPM','lg2_avg_HaCatTR_6hr_1_TPM','lg2_avg_HaCatTR_6hr_2_TPM','lg2_avg_HaCatTR_6hr_3_TPM','lg2_avg_HaCatTR_9hr_1_TPM','lg2_avg_HaCatTR_9hr_2_TPM','lg2_avg_HaCatTR_9hr_3_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_CARD14E138A_0hr_vs_CARD14WT_0hr' => array(
            'name' => 'logFC CARD14E138A 0hr vs CARD14WT 0hr',
            'slider_min' => -4,
            'slider_max' => 5,
            'default_low' => -4,
            'default_high' => 5
        ),
        'contrast_1_padj_CARD14E138A_0hr_vs_CARD14WT_0hr' => array(
            'name' => 'padj CARD14E138A 0hr vs CARD14WT 0hr',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_CARD14E138A_3hr_vs_CARD14WT_3hr' => array(
            'name' => 'logFC CARD14E138A 3hr vs CARD14WT 3hr',
            'slider_min' => -5,
            'slider_max' => 10,
            'default_low' => -5,
            'default_high' => 10
        ),
        'contrast_2_padj_CARD14E138A_3hr_vs_CARD14WT_3hr' => array(
            'name' => 'padj CARD14E138A 3hr vs CARD14WT 3hr',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_CARD14E138A_6hr_vs_CARD14WT_6hr' => array(
            'name' => 'logFC CARD14E138A 6hr vs CARD14WT 6hr',
            'slider_min' => -6,
            'slider_max' => 10,
            'default_low' => -6,
            'default_high' => 10
        ),
        'contrast_3_padj_CARD14E138A_6hr_vs_CARD14WT_6hr' => array(
            'name' => 'padj CARD14E138A 6hr vs CARD14WT 6hr',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_logFC_CARD14E138A_9hr_vs_CARD14WT_9hr' => array(
            'name' => 'logFC CARD14E138A 9hr vs CARD14WT 9hr',
            'slider_min' => -7,
            'slider_max' => 10,
            'default_low' => -7,
            'default_high' => 10
        ),
        'contrast_4_padj_CARD14E138A_9hr_vs_CARD14WT_9hr' => array(
            'name' => 'padj CARD14E138A 9hr vs CARD14WT 9hr',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'p285_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_CARD14E138A_0hr_vs_CARD14WT_0hr',
        'default-y' => 'contrast_1_lg10p_CARD14E138A_0hr_vs_CARD14WT_0hr',
        'selection' => array(
            'contrast_1_logFC_CARD14E138A_0hr_vs_CARD14WT_0hr' => array(
                'name' => 'logFC CARD14E138A 0hr vs CARD14WT 0hr'
            ),
            'contrast_2_logFC_CARD14E138A_3hr_vs_CARD14WT_3hr' => array(
                'name' => 'logFC CARD14E138A 3hr vs CARD14WT 3hr'
            ),
            'contrast_3_logFC_CARD14E138A_6hr_vs_CARD14WT_6hr' => array(
                'name' => 'logFC CARD14E138A 6hr vs CARD14WT 6hr'
            ),
            'contrast_4_logFC_CARD14E138A_9hr_vs_CARD14WT_9hr' => array(
                'name' => 'logFC CARD14E138A 9hr vs CARD14WT 9hr'
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
            'contrast_1_lg10p_CARD14E138A_0hr_vs_CARD14WT_0hr' => array(
                'name' => 'lg10p CARD14E138A 0hr vs CARD14WT 0hr'
            ),
            'contrast_2_lg10p_CARD14E138A_3hr_vs_CARD14WT_3hr' => array(
                'name' => 'lg10p CARD14E138A 3hr vs CARD14WT 3hr'
            ),
            'contrast_3_lg10p_CARD14E138A_6hr_vs_CARD14WT_6hr' => array(
                'name' => 'lg10p CARD14E138A 6hr vs CARD14WT 6hr'
            ),
            'contrast_4_lg10p_CARD14E138A_9hr_vs_CARD14WT_9hr' => array(
                'name' => 'lg10p CARD14E138A 9hr vs CARD14WT 9hr'
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
            'contrast_1_lg2BaseMean_CARD14E138A_0hr_vs_CARD14WT_0hr' => array(
                'name' => 'lg2BaseMean CARD14E138A 0hr vs CARD14WT 0hr'
            ),
            'contrast_2_lg2BaseMean_CARD14E138A_3hr_vs_CARD14WT_3hr' => array(
                'name' => 'lg2BaseMean CARD14E138A 3hr vs CARD14WT 3hr'
            ),
            'contrast_3_lg2BaseMean_CARD14E138A_6hr_vs_CARD14WT_6hr' => array(
                'name' => 'lg2BaseMean CARD14E138A 6hr vs CARD14WT 6hr'
            ),
            'contrast_4_lg2BaseMean_CARD14E138A_9hr_vs_CARD14WT_9hr' => array(
                'name' => 'lg2BaseMean CARD14E138A 9hr vs CARD14WT 9hr'
            )
        )
    )
//End scatterplot
);
