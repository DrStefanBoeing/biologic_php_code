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
            'cat_table_name' => 'vpl277_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'p277_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Chem_GliaBAC_1_TPM' => array(
            'color' => '#8DD3C7',
            'name' => 'Chem GliaBAC 1 TPM'
        ),
        'norm_counts_Chem_GliaBAC_2_TPM' => array(
            'color' => '#8DD3C7',
            'name' => 'Chem GliaBAC 2 TPM'
        ),
        'norm_counts_Chem_GliaBAC_3_TPM' => array(
            'color' => '#8DD3C7',
            'name' => 'Chem GliaBAC 3 TPM'
        ),
        'norm_counts_Chem_GliaBAC_4_TPM' => array(
            'color' => '#8DD3C7',
            'name' => 'Chem GliaBAC 4 TPM'
        ),
        'norm_counts_Chem_GliaCtrl_1_TPM' => array(
            'color' => '#D9D7C9',
            'name' => 'Chem GliaCtrl 1 TPM'
        ),
        'norm_counts_Chem_GliaCtrl_2_TPM' => array(
            'color' => '#D9D7C9',
            'name' => 'Chem GliaCtrl 2 TPM'
        ),
        'norm_counts_Chem_GliaCtrl_3_TPM' => array(
            'color' => '#D9D7C9',
            'name' => 'Chem GliaCtrl 3 TPM'
        ),
        'norm_counts_Chem_GliaCtrl_4_TPM' => array(
            'color' => '#D9D7C9',
            'name' => 'Chem GliaCtrl 4 TPM'
        ),
        'norm_counts_Worm_EnGliaCtrl_1_TPM' => array(
            'color' => '#E9877F',
            'name' => 'Worm EnGliaCtrl 1 TPM'
        ),
        'norm_counts_Worm_EnGliaCtrl_2_TPM' => array(
            'color' => '#E9877F',
            'name' => 'Worm EnGliaCtrl 2 TPM'
        ),
        'norm_counts_Worm_EnGliaCtrl_3_TPM' => array(
            'color' => '#E9877F',
            'name' => 'Worm EnGliaCtrl 3 TPM'
        ),
        'norm_counts_Worm_EnGliaCtrl_4_TPM' => array(
            'color' => '#E9877F',
            'name' => 'Worm EnGliaCtrl 4 TPM'
        ),
        'norm_counts_Worm_EnGliaInf_1_TPM' => array(
            'color' => '#D9B382',
            'name' => 'Worm EnGliaInf 1 TPM'
        ),
        'norm_counts_Worm_EnGliaInf_2_TPM' => array(
            'color' => '#D9B382',
            'name' => 'Worm EnGliaInf 2 TPM'
        ),
        'norm_counts_Worm_EnGliaInf_3_TPM' => array(
            'color' => '#D9B382',
            'name' => 'Worm EnGliaInf 3 TPM'
        ),
        'norm_counts_Worm_EnGliaInf_5_TPM' => array(
            'color' => '#D9B382',
            'name' => 'Worm EnGliaInf 5 TPM'
        ),
        'norm_counts_Chem_NonGliaBAC_1_TPM' => array(
            'color' => '#C7D98C',
            'name' => 'Chem NonGliaBAC 1 TPM'
        ),
        'norm_counts_Chem_NonGliaBAC_2_TPM' => array(
            'color' => '#C7D98C',
            'name' => 'Chem NonGliaBAC 2 TPM'
        ),
        'norm_counts_Chem_NonGliaBAC_3_TPM' => array(
            'color' => '#C7D98C',
            'name' => 'Chem NonGliaBAC 3 TPM'
        ),
        'norm_counts_Chem_NonGliaBAC_4_TPM' => array(
            'color' => '#C7D98C',
            'name' => 'Chem NonGliaBAC 4 TPM'
        ),
        'norm_counts_Chem_NonGliaCtrl_1_TPM' => array(
            'color' => '#DED7DA',
            'name' => 'Chem NonGliaCtrl 1 TPM'
        ),
        'norm_counts_Chem_NonGliaCtrl_2_TPM' => array(
            'color' => '#DED7DA',
            'name' => 'Chem NonGliaCtrl 2 TPM'
        ),
        'norm_counts_Chem_NonGliaCtrl_3_TPM' => array(
            'color' => '#DED7DA',
            'name' => 'Chem NonGliaCtrl 3 TPM'
        ),
        'norm_counts_Chem_NonGliaCtrl_4_TPM' => array(
            'color' => '#DED7DA',
            'name' => 'Chem NonGliaCtrl 4 TPM'
        ),
        'norm_counts_Worm_EnNonGliaCtrl_1_TPM' => array(
            'color' => '#C2ADC0',
            'name' => 'Worm EnNonGliaCtrl 1 TPM'
        ),
        'norm_counts_Worm_EnNonGliaCtrl_2_TPM' => array(
            'color' => '#C2ADC0',
            'name' => 'Worm EnNonGliaCtrl 2 TPM'
        ),
        'norm_counts_Worm_EnNonGliaCtrl_3_TPM' => array(
            'color' => '#C2ADC0',
            'name' => 'Worm EnNonGliaCtrl 3 TPM'
        ),
        'norm_counts_Worm_EnNonGliaCtrl_4_TPM' => array(
            'color' => '#C2ADC0',
            'name' => 'Worm EnNonGliaCtrl 4 TPM'
        ),
        'norm_counts_Worm_EnNonGliaInf_1_TPM' => array(
            'color' => '#FFED6F',
            'name' => 'Worm EnNonGliaInf 1 TPM'
        ),
        'norm_counts_Worm_EnNonGliaInf_2_TPM' => array(
            'color' => '#FFED6F',
            'name' => 'Worm EnNonGliaInf 2 TPM'
        ),
        'norm_counts_Worm_EnNonGliaInf_3_TPM' => array(
            'color' => '#FFED6F',
            'name' => 'Worm EnNonGliaInf 3 TPM'
        ),
        'norm_counts_Worm_EnNonGliaInf_4_TPM' => array(
            'color' => '#FFED6F',
            'name' => 'Worm EnNonGliaInf 4 TPM'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Chem_GliaBAC_1_TPM','lg2_avg_Chem_GliaBAC_2_TPM','lg2_avg_Chem_GliaBAC_3_TPM','lg2_avg_Chem_GliaBAC_4_TPM','lg2_avg_Chem_GliaCtrl_1_TPM','lg2_avg_Chem_GliaCtrl_2_TPM','lg2_avg_Chem_GliaCtrl_3_TPM','lg2_avg_Chem_GliaCtrl_4_TPM','lg2_avg_Worm_EnGliaCtrl_1_TPM','lg2_avg_Worm_EnGliaCtrl_2_TPM','lg2_avg_Worm_EnGliaCtrl_3_TPM','lg2_avg_Worm_EnGliaCtrl_4_TPM','lg2_avg_Worm_EnGliaInf_1_TPM','lg2_avg_Worm_EnGliaInf_2_TPM','lg2_avg_Worm_EnGliaInf_3_TPM','lg2_avg_Worm_EnGliaInf_5_TPM','lg2_avg_Chem_NonGliaBAC_1_TPM','lg2_avg_Chem_NonGliaBAC_2_TPM','lg2_avg_Chem_NonGliaBAC_3_TPM','lg2_avg_Chem_NonGliaBAC_4_TPM','lg2_avg_Chem_NonGliaCtrl_1_TPM','lg2_avg_Chem_NonGliaCtrl_2_TPM','lg2_avg_Chem_NonGliaCtrl_3_TPM','lg2_avg_Chem_NonGliaCtrl_4_TPM','lg2_avg_Worm_EnNonGliaCtrl_1_TPM','lg2_avg_Worm_EnNonGliaCtrl_2_TPM','lg2_avg_Worm_EnNonGliaCtrl_3_TPM','lg2_avg_Worm_EnNonGliaCtrl_4_TPM','lg2_avg_Worm_EnNonGliaInf_1_TPM','lg2_avg_Worm_EnNonGliaInf_2_TPM','lg2_avg_Worm_EnNonGliaInf_3_TPM','lg2_avg_Worm_EnNonGliaInf_4_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_WormGliaCtrl_vs_WormNonGliaCtrl' => array(
            'name' => 'logFC WormGliaCtrl vs WormNonGliaCtrl',
            'slider_min' => -9,
            'slider_max' => 9,
            'default_low' => -9,
            'default_high' => 9
        ),
        'contrast_2_logFC_WormGliaInf_vs_WormNonGliaInf' => array(
            'name' => 'logFC WormGliaInf vs WormNonGliaInf',
            'slider_min' => -9,
            'slider_max' => 10,
            'default_low' => -9,
            'default_high' => 10
        ),
        'contrast_3_logFC_WormGliaInf_vs_WormGliaCtrl' => array(
            'name' => 'logFC WormGliaInf vs WormGliaCtrl',
            'slider_min' => -4,
            'slider_max' => 8,
            'default_low' => -4,
            'default_high' => 8
        ),
        'contrast_4_logFC_WormNonGliaInf_vs_WormNonGliaCtrl' => array(
            'name' => 'logFC WormNonGliaInf vs WormNonGliaCtrl',
            'slider_min' => -6,
            'slider_max' => 9,
            'default_low' => -6,
            'default_high' => 9
        ),
        'contrast_5_logFC_ChemGliaBAC_vs_ChemGliaCtrl' => array(
            'name' => 'logFC ChemGliaBAC vs ChemGliaCtrl',
            'slider_min' => -4,
            'slider_max' => 6,
            'default_low' => -4,
            'default_high' => 6
        ),
        'contrast_6_logFC_ChemGliaCtrl_vs_ChemNonGliaCtrl' => array(
            'name' => 'logFC ChemGliaCtrl vs ChemNonGliaCtrl',
            'slider_min' => -9,
            'slider_max' => 10,
            'default_low' => -9,
            'default_high' => 10
        ),
        'contrast_7_logFC_ChemGliaBAC_vs_ChemNonGliaBAC' => array(
            'name' => 'logFC ChemGliaBAC vs ChemNonGliaBAC',
            'slider_min' => -10,
            'slider_max' => 10,
            'default_low' => -10,
            'default_high' => 10
        ),
        'contrast_8_logFC_ChemGliaBAC_vs_WormEnGliaInf' => array(
            'name' => 'logFC ChemGliaBAC vs WormEnGliaInf',
            'slider_min' => -8,
            'slider_max' => 6,
            'default_low' => -8,
            'default_high' => 6
        ),
        'contrast_P_PCA_estimatePCA1' => array(
            'name' => 'PCA estimatePCA1',
            'slider_min' => -7,
            'slider_max' => 7,
            'default_low' => -7,
            'default_high' => 7
        ),
        'contrast_P_PCA_estimatePCA2' => array(
            'name' => 'PCA estimatePCA2',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'contrast_P_PCA_estimatePCA3' => array(
            'name' => 'PCA estimatePCA3',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_P_PCA_estimatePCA4' => array(
            'name' => 'PCA estimatePCA4',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_P_PCA_estimatePCA5' => array(
            'name' => 'PCA estimatePCA5',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_1_padj_WormGliaCtrl_vs_WormNonGliaCtrl' => array(
            'name' => 'padj WormGliaCtrl vs WormNonGliaCtrl',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_padj_WormGliaInf_vs_WormNonGliaInf' => array(
            'name' => 'padj WormGliaInf vs WormNonGliaInf',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_padj_WormGliaInf_vs_WormGliaCtrl' => array(
            'name' => 'padj WormGliaInf vs WormGliaCtrl',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_padj_WormNonGliaInf_vs_WormNonGliaCtrl' => array(
            'name' => 'padj WormNonGliaInf vs WormNonGliaCtrl',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_5_padj_ChemGliaBAC_vs_ChemGliaCtrl' => array(
            'name' => 'padj ChemGliaBAC vs ChemGliaCtrl',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_6_padj_ChemGliaCtrl_vs_ChemNonGliaCtrl' => array(
            'name' => 'padj ChemGliaCtrl vs ChemNonGliaCtrl',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_7_padj_ChemGliaBAC_vs_ChemNonGliaBAC' => array(
            'name' => 'padj ChemGliaBAC vs ChemNonGliaBAC',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_8_padj_ChemGliaBAC_vs_WormEnGliaInf' => array(
            'name' => 'padj ChemGliaBAC vs WormEnGliaInf',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_L_lg10p_LRT_wormInfection_vs_untreated' => array(
            'name' => 'lg10p LRT wormInfection vs untreated',
            'slider_min' => 0,
            'slider_max' => 17,
            'default_low' => 0,
            'default_high' => 17
        ),
        'contrast_L_lg10p_LRT_chemicalTreatment_vs_untreated' => array(
            'name' => 'lg10p LRT chemicalTreatment vs untreated',
            'slider_min' => 0,
            'slider_max' => 10,
            'default_low' => 0,
            'default_high' => 10
        ),
        'contrast_L_lg10p_LRT_Glia_vs_nonGlia' => array(
            'name' => 'lg10p LRT Glia vs nonGlia',
            'slider_min' => 0,
            'slider_max' => 92,
            'default_low' => 0,
            'default_high' => 92
        )
    )
    ),
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_WormGliaCtrl_vs_WormNonGliaCtrl',
        'default-y' => 'contrast_2_logFC_WormGliaInf_vs_WormNonGliaInf',
        'selection' => array(
            'contrast_1_logFC_WormGliaCtrl_vs_WormNonGliaCtrl' => array(
                'name' => 'logFC WormGliaCtrl vs WormNonGliaCtrl'
            ),
            'contrast_2_logFC_WormGliaInf_vs_WormNonGliaInf' => array(
                'name' => 'logFC WormGliaInf vs WormNonGliaInf'
            ),
            'contrast_3_logFC_WormGliaInf_vs_WormGliaCtrl' => array(
                'name' => 'logFC WormGliaInf vs WormGliaCtrl'
            ),
            'contrast_4_logFC_WormNonGliaInf_vs_WormNonGliaCtrl' => array(
                'name' => 'logFC WormNonGliaInf vs WormNonGliaCtrl'
            ),
            'contrast_5_logFC_ChemGliaBAC_vs_ChemGliaCtrl' => array(
                'name' => 'logFC ChemGliaBAC vs ChemGliaCtrl'
            ),
            'contrast_6_logFC_ChemGliaCtrl_vs_ChemNonGliaCtrl' => array(
                'name' => 'logFC ChemGliaCtrl vs ChemNonGliaCtrl'
            ),
            'contrast_7_logFC_ChemGliaBAC_vs_ChemNonGliaBAC' => array(
                'name' => 'logFC ChemGliaBAC vs ChemNonGliaBAC'
            ),
            'contrast_8_logFC_ChemGliaBAC_vs_WormEnGliaInf' => array(
                'name' => 'logFC ChemGliaBAC vs WormEnGliaInf'
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
            'contrast_1_lg10p_WormGliaCtrl_vs_WormNonGliaCtrl' => array(
                'name' => 'lg10p WormGliaCtrl vs WormNonGliaCtrl'
            ),
            'contrast_2_lg10p_WormGliaInf_vs_WormNonGliaInf' => array(
                'name' => 'lg10p WormGliaInf vs WormNonGliaInf'
            ),
            'contrast_3_lg10p_WormGliaInf_vs_WormGliaCtrl' => array(
                'name' => 'lg10p WormGliaInf vs WormGliaCtrl'
            ),
            'contrast_4_lg10p_WormNonGliaInf_vs_WormNonGliaCtrl' => array(
                'name' => 'lg10p WormNonGliaInf vs WormNonGliaCtrl'
            ),
            'contrast_5_lg10p_ChemGliaBAC_vs_ChemGliaCtrl' => array(
                'name' => 'lg10p ChemGliaBAC vs ChemGliaCtrl'
            ),
            'contrast_6_lg10p_ChemGliaCtrl_vs_ChemNonGliaCtrl' => array(
                'name' => 'lg10p ChemGliaCtrl vs ChemNonGliaCtrl'
            ),
            'contrast_7_lg10p_ChemGliaBAC_vs_ChemNonGliaBAC' => array(
                'name' => 'lg10p ChemGliaBAC vs ChemNonGliaBAC'
            ),
            'contrast_8_lg10p_ChemGliaBAC_vs_WormEnGliaInf' => array(
                'name' => 'lg10p ChemGliaBAC vs WormEnGliaInf'
            ),
            'contrast_L_lg10p_LRT_wormInfection_vs_untreated' => array(
                'name' => 'lg10p LRT wormInfection vs untreated'
            ),
            'contrast_L_lg10p_LRT_chemicalTreatment_vs_untreated' => array(
                'name' => 'lg10p LRT chemicalTreatment vs untreated'
            ),
            'contrast_L_lg10p_LRT_Glia_vs_nonGlia' => array(
                'name' => 'lg10p LRT Glia vs nonGlia'
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
            'contrast_1_lg2BaseMean_WormGliaCtrl_vs_WormNonGliaCtrl' => array(
                'name' => 'lg2BaseMean WormGliaCtrl vs WormNonGliaCtrl'
            ),
            'contrast_2_lg2BaseMean_WormGliaInf_vs_WormNonGliaInf' => array(
                'name' => 'lg2BaseMean WormGliaInf vs WormNonGliaInf'
            ),
            'contrast_3_lg2BaseMean_WormGliaInf_vs_WormGliaCtrl' => array(
                'name' => 'lg2BaseMean WormGliaInf vs WormGliaCtrl'
            ),
            'contrast_4_lg2BaseMean_WormNonGliaInf_vs_WormNonGliaCtrl' => array(
                'name' => 'lg2BaseMean WormNonGliaInf vs WormNonGliaCtrl'
            ),
            'contrast_5_lg2BaseMean_ChemGliaBAC_vs_ChemGliaCtrl' => array(
                'name' => 'lg2BaseMean ChemGliaBAC vs ChemGliaCtrl'
            ),
            'contrast_6_lg2BaseMean_ChemGliaCtrl_vs_ChemNonGliaCtrl' => array(
                'name' => 'lg2BaseMean ChemGliaCtrl vs ChemNonGliaCtrl'
            ),
            'contrast_7_lg2BaseMean_ChemGliaBAC_vs_ChemNonGliaBAC' => array(
                'name' => 'lg2BaseMean ChemGliaBAC vs ChemNonGliaBAC'
            ),
            'contrast_8_lg2BaseMean_ChemGliaBAC_vs_WormEnGliaInf' => array(
                'name' => 'lg2BaseMean ChemGliaBAC vs WormEnGliaInf'
            ),
            'contrast_L_lg2BaseMean_LRT_wormInfection_vs_untreated' => array(
                'name' => 'lg2BaseMean LRT wormInfection vs untreated'
            ),
            'contrast_L_lg2BaseMean_LRT_chemicalTreatment_vs_untreated' => array(
                'name' => 'lg2BaseMean LRT chemicalTreatment vs untreated'
            ),
            'contrast_L_lg2BaseMean_LRT_Glia_vs_nonGlia' => array(
                'name' => 'lg2BaseMean LRT Glia vs nonGlia'
            )
        )
    )
//End scatterplot
);
