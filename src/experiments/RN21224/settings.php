<?php

return array(
    'public_access' => TRUE,
    'lab' => array(
        'name' => 'Anastasiou DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'dal_data',
    'data_db' => array(
            'cat_table_name' => 'RN21224_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'RN21224_bulk_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'TPM Values for all Samples',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Fasted_KO_R1' => array(
            'color' => '#7CAE00',
            'name' => 'Fasted KO R1'
        ),
        'norm_counts_Fasted_KO_R2' => array(
            'color' => '#7CAE00',
            'name' => 'Fasted KO R2'
        ),
        'norm_counts_Fasted_KO_R3' => array(
            'color' => '#7CAE00',
            'name' => 'Fasted KO R3'
        ),
        'norm_counts_Fasted_KO_R4' => array(
            'color' => '#7CAE00',
            'name' => 'Fasted KO R4'
        ),
        'norm_counts_Fasted_WT_R1' => array(
            'color' => '#F8766D',
            'name' => 'Fasted WT R1'
        ),
        'norm_counts_Fasted_WT_R2' => array(
            'color' => '#F8766D',
            'name' => 'Fasted WT R2'
        ),
        'norm_counts_Fasted_WT_R3' => array(
            'color' => '#F8766D',
            'name' => 'Fasted WT R3'
        ),
        'norm_counts_Fasted_WT_R4' => array(
            'color' => '#F8766D',
            'name' => 'Fasted WT R4'
        ),
        'norm_counts_Fed_KO_R1' => array(
            'color' => '#C77CFF',
            'name' => 'Fed KO R1'
        ),
        'norm_counts_Fed_KO_R2' => array(
            'color' => '#C77CFF',
            'name' => 'Fed KO R2'
        ),
        'norm_counts_Fed_KO_R3' => array(
            'color' => '#C77CFF',
            'name' => 'Fed KO R3'
        ),
        'norm_counts_Fed_KO_R4' => array(
            'color' => '#C77CFF',
            'name' => 'Fed KO R4'
        ),
        'norm_counts_Fed_WT_R1' => array(
            'color' => '#00BFC4',
            'name' => 'Fed WT R1'
        ),
        'norm_counts_Fed_WT_R2' => array(
            'color' => '#00BFC4',
            'name' => 'Fed WT R2'
        ),
        'norm_counts_Fed_WT_R3' => array(
            'color' => '#00BFC4',
            'name' => 'Fed WT R3'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM Values for all Samples'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Fasted_KO_R1','lg2_avg_Fasted_KO_R2','lg2_avg_Fasted_KO_R3','lg2_avg_Fasted_KO_R4','lg2_avg_Fasted_WT_R1','lg2_avg_Fasted_WT_R2','lg2_avg_Fasted_WT_R3','lg2_avg_Fasted_WT_R4','lg2_avg_Fed_KO_R1','lg2_avg_Fed_KO_R2','lg2_avg_Fed_KO_R3','lg2_avg_Fed_KO_R4','lg2_avg_Fed_WT_R1','lg2_avg_Fed_WT_R2','lg2_avg_Fed_WT_R3'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_Fed_vs_Fasted' => array(
            'name' => 'logFC Fed vs Fasted',
            'slider_min' => -15,
            'slider_max' => 8,
            'default_low' => -15,
            'default_high' => 8
        ),
        'contrast_1_padj_Fed_vs_Fasted' => array(
            'name' => 'padj Fed vs Fasted',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_WT_vs_KO' => array(
            'name' => 'logFC WT vs KO',
            'slider_min' => -25,
            'slider_max' => 8,
            'default_low' => -25,
            'default_high' => 8
        ),
        'contrast_2_padj_WT_vs_KO' => array(
            'name' => 'padj WT vs KO',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_WTfed_vs_WT_fasted' => array(
            'name' => 'logFC WTfed vs WT fasted',
            'slider_min' => -6,
            'slider_max' => 6,
            'default_low' => -6,
            'default_high' => 6
        ),
        'contrast_3_padj_WTfed_vs_WT_fasted' => array(
            'name' => 'padj WTfed vs WT fasted',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_logFC_WTfed_vs_KO_fasted' => array(
            'name' => 'logFC WTfed vs KO fasted',
            'slider_min' => -4,
            'slider_max' => 3,
            'default_low' => -4,
            'default_high' => 3
        ),
        'contrast_4_padj_WTfed_vs_KO_fasted' => array(
            'name' => 'padj WTfed vs KO fasted',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_5_logFC_WTfed_vs_KO_fed' => array(
            'name' => 'logFC WTfed vs KO fed',
            'slider_min' => -2,
            'slider_max' => 2,
            'default_low' => -2,
            'default_high' => 2
        ),
        'contrast_5_padj_WTfed_vs_KO_fed' => array(
            'name' => 'padj WTfed vs KO fed',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_6_logFC_WT_fasted_vs_KO_fasted' => array(
            'name' => 'logFC WT fasted vs KO fasted',
            'slider_min' => -1,
            'slider_max' => 2,
            'default_low' => -1,
            'default_high' => 2
        ),
        'contrast_6_padj_WT_fasted_vs_KO_fasted' => array(
            'name' => 'padj WT fasted vs KO fasted',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_7_logFC_WT_fasted_vs_KO_fed' => array(
            'name' => 'logFC WT fasted vs KO fed',
            'slider_min' => -5,
            'slider_max' => 7,
            'default_low' => -5,
            'default_high' => 7
        ),
        'contrast_7_padj_WT_fasted_vs_KO_fed' => array(
            'name' => 'padj WT fasted vs KO fed',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_8_logFC_KO_fasted_vs_KO_fed' => array(
            'name' => 'logFC KO fasted vs KO fed',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'contrast_8_padj_KO_fasted_vs_KO_fed' => array(
            'name' => 'padj KO fasted vs KO fed',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_L_lg10p_LRT_Fed_Genotype' => array(
            'name' => 'lg10p LRT Fed Genotype',
            'slider_min' => 0,
            'slider_max' => 44,
            'default_low' => 0,
            'default_high' => 44
        ),
        'contrast_L_lg10p_LRT_Fasted_Genotype' => array(
            'name' => 'lg10p LRT Fasted Genotype',
            'slider_min' => 0,
            'slider_max' => 12,
            'default_low' => 0,
            'default_high' => 12
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'RN21224_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_Fed_vs_Fasted',
        'default-y' => 'contrast_1_lg10p_Fed_vs_Fasted',
        'selection' => array(
            'contrast_1_logFC_Fed_vs_Fasted' => array(
                'name' => 'logFC Fed vs Fasted'
            ),
            'contrast_2_logFC_WT_vs_KO' => array(
                'name' => 'logFC WT vs KO'
            ),
            'contrast_3_logFC_WTfed_vs_WT_fasted' => array(
                'name' => 'logFC WTfed vs WT fasted'
            ),
            'contrast_4_logFC_WTfed_vs_KO_fasted' => array(
                'name' => 'logFC WTfed vs KO fasted'
            ),
            'contrast_5_logFC_WTfed_vs_KO_fed' => array(
                'name' => 'logFC WTfed vs KO fed'
            ),
            'contrast_6_logFC_WT_fasted_vs_KO_fasted' => array(
                'name' => 'logFC WT fasted vs KO fasted'
            ),
            'contrast_7_logFC_WT_fasted_vs_KO_fed' => array(
                'name' => 'logFC WT fasted vs KO fed'
            ),
            'contrast_8_logFC_KO_fasted_vs_KO_fed' => array(
                'name' => 'logFC KO fasted vs KO fed'
            ),
            'contrast_1_lg10p_Fed_vs_Fasted' => array(
                'name' => 'lg10p Fed vs Fasted'
            ),
            'contrast_2_lg10p_WT_vs_KO' => array(
                'name' => 'lg10p WT vs KO'
            ),
            'contrast_3_lg10p_WTfed_vs_WT_fasted' => array(
                'name' => 'lg10p WTfed vs WT fasted'
            ),
            'contrast_4_lg10p_WTfed_vs_KO_fasted' => array(
                'name' => 'lg10p WTfed vs KO fasted'
            ),
            'contrast_5_lg10p_WTfed_vs_KO_fed' => array(
                'name' => 'lg10p WTfed vs KO fed'
            ),
            'contrast_6_lg10p_WT_fasted_vs_KO_fasted' => array(
                'name' => 'lg10p WT fasted vs KO fasted'
            ),
            'contrast_7_lg10p_WT_fasted_vs_KO_fed' => array(
                'name' => 'lg10p WT fasted vs KO fed'
            ),
            'contrast_8_lg10p_KO_fasted_vs_KO_fed' => array(
                'name' => 'lg10p KO fasted vs KO fed'
            ),
            'contrast_L_lg10p_LRT_Fed_Genotype' => array(
                'name' => 'lg10p LRT Fed Genotype'
            ),
            'contrast_L_lg10p_LRT_Fasted_Genotype' => array(
                'name' => 'lg10p LRT Fasted Genotype'
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
            'contrast_1_lg2BaseMean_Fed_vs_Fasted' => array(
                'name' => 'lg2BaseMean Fed vs Fasted'
            ),
            'contrast_2_lg2BaseMean_WT_vs_KO' => array(
                'name' => 'lg2BaseMean WT vs KO'
            ),
            'contrast_3_lg2BaseMean_WTfed_vs_WT_fasted' => array(
                'name' => 'lg2BaseMean WTfed vs WT fasted'
            ),
            'contrast_4_lg2BaseMean_WTfed_vs_KO_fasted' => array(
                'name' => 'lg2BaseMean WTfed vs KO fasted'
            ),
            'contrast_5_lg2BaseMean_WTfed_vs_KO_fed' => array(
                'name' => 'lg2BaseMean WTfed vs KO fed'
            ),
            'contrast_6_lg2BaseMean_WT_fasted_vs_KO_fasted' => array(
                'name' => 'lg2BaseMean WT fasted vs KO fasted'
            ),
            'contrast_7_lg2BaseMean_WT_fasted_vs_KO_fed' => array(
                'name' => 'lg2BaseMean WT fasted vs KO fed'
            ),
            'contrast_8_lg2BaseMean_KO_fasted_vs_KO_fed' => array(
                'name' => 'lg2BaseMean KO fasted vs KO fed'
            ),
            'contrast_L_lg2BaseMean_LRT_Fed_Genotype' => array(
                'name' => 'lg2BaseMean LRT Fed Genotype'
            ),
            'contrast_L_lg2BaseMean_LRT_Fasted_Genotype' => array(
                'name' => 'lg2BaseMean LRT Fasted Genotype'
            )
        )
    )
//End scatterplot
);
