<?php

return array(
    'lab' => array(
        'name' => 'Sahai DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'esl_data',
    'data_db' => array(
            'cat_table_name' => 'esl406_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'esl406_rna_seq_table',
    'primary_gene_symbol' => 'hgnc_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 8,
        'lower_limit' => -8,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_1_logFC_NRAS_vs_Ctrl' => array(
            'color' => '#F8766D',
            'name' => '1 logFC NRAS vs Ctrl'
        ),
        'norm_counts_10_logFC_YAP_vs_Ctrl' => array(
            'color' => '#D89000',
            'name' => '10 logFC YAP vs Ctrl'
        ),
        'norm_counts_2_logFC_PLXPD_NRAS_vs_DMSO_NRAS' => array(
            'color' => '#A3A500',
            'name' => '2 logFC PLXPD NRAS vs DMSO NRAS'
        ),
        'norm_counts_3_logFC_PLXPD_NRAS_vs_PLXPD_Ctrl' => array(
            'color' => '#39B600',
            'name' => '3 logFC PLXPD NRAS vs PLXPD Ctrl'
        ),
        'norm_counts_4_logFC_PLXPD_YAP_vs_DMSO_YAP' => array(
            'color' => '#00BF7D',
            'name' => '4 logFC PLXPD YAP vs DMSO YAP'
        ),
        'norm_counts_5_logFC_PLXPD_YAP_vs_PLXPD_Ctrl' => array(
            'color' => '#00BFC4',
            'name' => '5 logFC PLXPD YAP vs PLXPD Ctrl'
        ),
        'norm_counts_6_logFC_Similar_CTRL_vs_MUT' => array(
            'color' => '#00B0F6',
            'name' => '6 logFC Similar CTRL vs MUT'
        ),
        'norm_counts_7_logFC_Similar_in_MUT_upon_PLXPD' => array(
            'color' => '#9590FF',
            'name' => '7 logFC Similar in MUT upon PLXPD'
        ),
        'norm_counts_8_logFC_SPON_PLXPD_addicted_vs_Ctrl_DMSO_treated' => array(
            'color' => '#E76BF3',
            'name' => '8 logFC SPON PLXPD addicted vs Ctrl DMSO treated'
        ),
        'norm_counts_9_logFC_SPON_PLXPD_addicted_vs_Ctrl_PLXPD_treated' => array(
            'color' => '#FF62BC',
            'name' => '9 logFC SPON PLXPD addicted vs Ctrl PLXPD treated'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_1_logFC_NRAS_vs_Ctrl','lg2_avg_10_logFC_YAP_vs_Ctrl','lg2_avg_2_logFC_PLXPD_NRAS_vs_DMSO_NRAS','lg2_avg_3_logFC_PLXPD_NRAS_vs_PLXPD_Ctrl','lg2_avg_4_logFC_PLXPD_YAP_vs_DMSO_YAP','lg2_avg_5_logFC_PLXPD_YAP_vs_PLXPD_Ctrl','lg2_avg_6_logFC_Similar_CTRL_vs_MUT','lg2_avg_7_logFC_Similar_in_MUT_upon_PLXPD','lg2_avg_8_logFC_SPON_PLXPD_addicted_vs_Ctrl_DMSO_treated','lg2_avg_9_logFC_SPON_PLXPD_addicted_vs_Ctrl_PLXPD_treated'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_NRAS_vs_Ctrl' => array(
            'name' => 'logFC NRAS vs Ctrl',
            'slider_min' => -21,
            'slider_max' => 10,
            'default_low' => -21,
            'default_high' => 10
        ),
        'contrast_1_padj_NRAS_vs_Ctrl' => array(
            'name' => 'padj NRAS vs Ctrl',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_PLXPD_NRAS_vs_DMSO_NRAS' => array(
            'name' => 'logFC PLXPD NRAS vs DMSO NRAS',
            'slider_min' => -4,
            'slider_max' => 23,
            'default_low' => -4,
            'default_high' => 23
        ),
        'contrast_2_padj_PLXPD_NRAS_vs_DMSO_NRAS' => array(
            'name' => 'padj PLXPD NRAS vs DMSO NRAS',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_PLXPD_NRAS_vs_PLXPD_Ctrl' => array(
            'name' => 'logFC PLXPD NRAS vs PLXPD Ctrl',
            'slider_min' => -8,
            'slider_max' => 26,
            'default_low' => -8,
            'default_high' => 26
        ),
        'contrast_3_padj_PLXPD_NRAS_vs_PLXPD_Ctrl' => array(
            'name' => 'padj PLXPD NRAS vs PLXPD Ctrl',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_logFC_PLXPD_YAP_vs_DMSO_YAP' => array(
            'name' => 'logFC PLXPD YAP vs DMSO YAP',
            'slider_min' => -5,
            'slider_max' => 5,
            'default_low' => -5,
            'default_high' => 5
        ),
        'contrast_4_padj_PLXPD_YAP_vs_DMSO_YAP' => array(
            'name' => 'padj PLXPD YAP vs DMSO YAP',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_5_logFC_PLXPD_YAP_vs_PLXPD_Ctrl' => array(
            'name' => 'logFC PLXPD YAP vs PLXPD Ctrl',
            'slider_min' => -6,
            'slider_max' => 14,
            'default_low' => -6,
            'default_high' => 14
        ),
        'contrast_5_padj_PLXPD_YAP_vs_PLXPD_Ctrl' => array(
            'name' => 'padj PLXPD YAP vs PLXPD Ctrl',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_6_logFC_Similar_CTRL_vs_MUT' => array(
            'name' => 'logFC Similar CTRL vs MUT',
            'slider_min' => -4,
            'slider_max' => 23,
            'default_low' => -4,
            'default_high' => 23
        ),
        'contrast_6_padj_Similar_CTRL_vs_MUT' => array(
            'name' => 'padj Similar CTRL vs MUT',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_7_logFC_Similar_in_MUT_upon_PLXPD' => array(
            'name' => 'logFC Similar in MUT upon PLXPD',
            'slider_min' => -6,
            'slider_max' => 22,
            'default_low' => -6,
            'default_high' => 22
        ),
        'contrast_7_padj_Similar_in_MUT_upon_PLXPD' => array(
            'name' => 'padj Similar in MUT upon PLXPD',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_8_logFC_SPON_PLXPD_addicted_vs_Ctrl_DMSO_treated' => array(
            'name' => 'logFC SPON PLXPD addicted vs Ctrl DMSO treated',
            'slider_min' => -10,
            'slider_max' => 13,
            'default_low' => -10,
            'default_high' => 13
        ),
        'contrast_8_padj_SPON_PLXPD_addicted_vs_Ctrl_DMSO_treated' => array(
            'name' => 'padj SPON PLXPD addicted vs Ctrl DMSO treated',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_9_logFC_SPON_PLXPD_addicted_vs_Ctrl_PLXPD_treated' => array(
            'name' => 'logFC SPON PLXPD addicted vs Ctrl PLXPD treated',
            'slider_min' => -7,
            'slider_max' => 13,
            'default_low' => -7,
            'default_high' => 13
        ),
        'contrast_9_padj_SPON_PLXPD_addicted_vs_Ctrl_PLXPD_treated' => array(
            'name' => 'padj SPON PLXPD addicted vs Ctrl PLXPD treated',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_10_logFC_YAP_vs_Ctrl' => array(
            'name' => '0 logFC YAP vs Ctrl',
            'slider_min' => -6,
            'slider_max' => 16,
            'default_low' => -6,
            'default_high' => 16
        ),
        'contrast_10_padj_YAP_vs_Ctrl' => array(
            'name' => '0 padj YAP vs Ctrl',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        )
    )
    ),
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_NRAS_vs_Ctrl',
        'default-y' => 'contrast_1_lg10p_NRAS_vs_Ctrl',
        'selection' => array(
            'contrast_1_logFC_NRAS_vs_Ctrl' => array(
                'name' => 'logFC NRAS vs Ctrl'
            ),
            'contrast_2_logFC_PLXPD_NRAS_vs_DMSO_NRAS' => array(
                'name' => 'logFC PLXPD NRAS vs DMSO NRAS'
            ),
            'contrast_3_logFC_PLXPD_NRAS_vs_PLXPD_Ctrl' => array(
                'name' => 'logFC PLXPD NRAS vs PLXPD Ctrl'
            ),
            'contrast_4_logFC_PLXPD_YAP_vs_DMSO_YAP' => array(
                'name' => 'logFC PLXPD YAP vs DMSO YAP'
            ),
            'contrast_5_logFC_PLXPD_YAP_vs_PLXPD_Ctrl' => array(
                'name' => 'logFC PLXPD YAP vs PLXPD Ctrl'
            ),
            'contrast_6_logFC_Similar_CTRL_vs_MUT' => array(
                'name' => 'logFC Similar CTRL vs MUT'
            ),
            'contrast_7_logFC_Similar_in_MUT_upon_PLXPD' => array(
                'name' => 'logFC Similar in MUT upon PLXPD'
            ),
            'contrast_8_logFC_SPON_PLXPD_addicted_vs_Ctrl_DMSO_treated' => array(
                'name' => 'logFC SPON PLXPD addicted vs Ctrl DMSO treated'
            ),
            'contrast_9_logFC_SPON_PLXPD_addicted_vs_Ctrl_PLXPD_treated' => array(
                'name' => 'logFC SPON PLXPD addicted vs Ctrl PLXPD treated'
            ),
            'contrast_10_logFC_YAP_vs_Ctrl' => array(
                'name' => '0 logFC YAP vs Ctrl'
            ),
            'contrast_1_lg10p_NRAS_vs_Ctrl' => array(
                'name' => 'lg10p NRAS vs Ctrl'
            ),
            'contrast_2_lg10p_PLXPD_NRAS_vs_DMSO_NRAS' => array(
                'name' => 'lg10p PLXPD NRAS vs DMSO NRAS'
            ),
            'contrast_3_lg10p_PLXPD_NRAS_vs_PLXPD_Ctrl' => array(
                'name' => 'lg10p PLXPD NRAS vs PLXPD Ctrl'
            ),
            'contrast_4_lg10p_PLXPD_YAP_vs_DMSO_YAP' => array(
                'name' => 'lg10p PLXPD YAP vs DMSO YAP'
            ),
            'contrast_5_lg10p_PLXPD_YAP_vs_PLXPD_Ctrl' => array(
                'name' => 'lg10p PLXPD YAP vs PLXPD Ctrl'
            ),
            'contrast_6_lg10p_Similar_CTRL_vs_MUT' => array(
                'name' => 'lg10p Similar CTRL vs MUT'
            ),
            'contrast_7_lg10p_Similar_in_MUT_upon_PLXPD' => array(
                'name' => 'lg10p Similar in MUT upon PLXPD'
            ),
            'contrast_8_lg10p_SPON_PLXPD_addicted_vs_Ctrl_DMSO_treated' => array(
                'name' => 'lg10p SPON PLXPD addicted vs Ctrl DMSO treated'
            ),
            'contrast_9_lg10p_SPON_PLXPD_addicted_vs_Ctrl_PLXPD_treated' => array(
                'name' => 'lg10p SPON PLXPD addicted vs Ctrl PLXPD treated'
            ),
            'contrast_10_lg10p_YAP_vs_Ctrl' => array(
                'name' => '0 lg10p YAP vs Ctrl'
            )
        )
    )
//End scatterplot
);
