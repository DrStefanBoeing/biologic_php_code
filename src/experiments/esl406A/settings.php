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
            'cat_table_name' => 'esl406A_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'esl406A_rna_seq_table',
    'primary_gene_symbol' => 'hgnc_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_TPM_CTR_spont_resist_NI_PLXPD_24h_1_R1' => array(
            'color' => '#A58AFF',
            'name' => 'TPM CTR spont resist NI PLXPD 24h 1 R1'
        ),
        'norm_counts_TPM_CTR_spont_resist_NI_PLXPD_24h_2_R1' => array(
            'color' => '#A58AFF',
            'name' => 'TPM CTR spont resist NI PLXPD 24h 2 R1'
        ),
        'norm_counts_TPM_CTR_spont_resist_NI_PLXPD_24h_3_R1' => array(
            'color' => '#A58AFF',
            'name' => 'TPM CTR spont resist NI PLXPD 24h 3 R1'
        ),
        'norm_counts_TPM_CTR_YAP5SA_NI_DMSO_24h_1_R1' => array(
            'color' => '#FB61D7',
            'name' => 'TPM CTR YAP5SA NI DMSO 24h 1 R1'
        ),
        'norm_counts_TPM_CTR_YAP5SA_NI_DMSO_24h_2_R1' => array(
            'color' => '#FB61D7',
            'name' => 'TPM CTR YAP5SA NI DMSO 24h 2 R1'
        ),
        'norm_counts_TPM_CTR_YAP5SA_NI_DMSO_24h_3_R1' => array(
            'color' => '#FB61D7',
            'name' => 'TPM CTR YAP5SA NI DMSO 24h 3 R1'
        ),
        'norm_counts_TPM_MUT_NRASQ61K_49d_DMSO_24h_1_R1' => array(
            'color' => '#F8766D',
            'name' => 'TPM MUT NRASQ61K 49d DMSO 24h 1 R1'
        ),
        'norm_counts_TPM_MUT_NRASQ61K_49d_DMSO_24h_2_R1' => array(
            'color' => '#F8766D',
            'name' => 'TPM MUT NRASQ61K 49d DMSO 24h 2 R1'
        ),
        'norm_counts_TPM_MUT_NRASQ61K_49d_DMSO_24h_3_R1' => array(
            'color' => '#F8766D',
            'name' => 'TPM MUT NRASQ61K 49d DMSO 24h 3 R1'
        ),
        'norm_counts_TPM_MUT_spont_resist_NI_PLXPD_24h_1_R1' => array(
            'color' => '#C49A00',
            'name' => 'TPM MUT spont resist NI PLXPD 24h 1 R1'
        ),
        'norm_counts_TPM_MUT_spont_resist_NI_PLXPD_24h_2_R1' => array(
            'color' => '#C49A00',
            'name' => 'TPM MUT spont resist NI PLXPD 24h 2 R1'
        ),
        'norm_counts_TPM_MUT_spont_resist_NI_PLXPD_24h_3_R1' => array(
            'color' => '#C49A00',
            'name' => 'TPM MUT spont resist NI PLXPD 24h 3 R1'
        ),
        'norm_counts_TPM_MUT_YAP5SA_NI_DMSO_24h_1_R1' => array(
            'color' => '#53B400',
            'name' => 'TPM MUT YAP5SA NI DMSO 24h 1 R1'
        ),
        'norm_counts_TPM_MUT_YAP5SA_NI_DMSO_24h_2_R1' => array(
            'color' => '#53B400',
            'name' => 'TPM MUT YAP5SA NI DMSO 24h 2 R1'
        ),
        'norm_counts_TPM_MUT_YAP5SA_NI_DMSO_24h_3_R1' => array(
            'color' => '#53B400',
            'name' => 'TPM MUT YAP5SA NI DMSO 24h 3 R1'
        ),
        'norm_counts_TPM_CTR_NRASQ61K_49d_DMSO_24h_1_R1' => array(
            'color' => '#00C094',
            'name' => 'TPM CTR NRASQ61K 49d DMSO 24h 1 R1'
        ),
        'norm_counts_TPM_CTR_NRASQ61K_49d_DMSO_24h_2_R1' => array(
            'color' => '#00C094',
            'name' => 'TPM CTR NRASQ61K 49d DMSO 24h 2 R1'
        ),
        'norm_counts_TPM_CTR_NRASQ61K_49d_DMSO_24h_3_R1' => array(
            'color' => '#00C094',
            'name' => 'TPM CTR NRASQ61K 49d DMSO 24h 3 R1'
        ),
        'norm_counts_TPM_CTR_NRASQ61K_49d_DMSO_24h_1_R2' => array(
            'color' => '#00B6EB',
            'name' => 'TPM CTR NRASQ61K 49d DMSO 24h 1 R2'
        ),
        'norm_counts_TPM_CTR_NRASQ61K_49d_DMSO_24h_2_R2' => array(
            'color' => '#00B6EB',
            'name' => 'TPM CTR NRASQ61K 49d DMSO 24h 2 R2'
        ),
        'norm_counts_TPM_CTR_NRASQ61K_49d_DMSO_24h_3_R2' => array(
            'color' => '#00B6EB',
            'name' => 'TPM CTR NRASQ61K 49d DMSO 24h 3 R2'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_TPM_CTR_spont_resist_NI_PLXPD_24h_1_R1','lg2_avg_TPM_CTR_spont_resist_NI_PLXPD_24h_2_R1','lg2_avg_TPM_CTR_spont_resist_NI_PLXPD_24h_3_R1','lg2_avg_TPM_CTR_YAP5SA_NI_DMSO_24h_1_R1','lg2_avg_TPM_CTR_YAP5SA_NI_DMSO_24h_2_R1','lg2_avg_TPM_CTR_YAP5SA_NI_DMSO_24h_3_R1','lg2_avg_TPM_MUT_NRASQ61K_49d_DMSO_24h_1_R1','lg2_avg_TPM_MUT_NRASQ61K_49d_DMSO_24h_2_R1','lg2_avg_TPM_MUT_NRASQ61K_49d_DMSO_24h_3_R1','lg2_avg_TPM_MUT_spont_resist_NI_PLXPD_24h_1_R1','lg2_avg_TPM_MUT_spont_resist_NI_PLXPD_24h_2_R1','lg2_avg_TPM_MUT_spont_resist_NI_PLXPD_24h_3_R1','lg2_avg_TPM_MUT_YAP5SA_NI_DMSO_24h_1_R1','lg2_avg_TPM_MUT_YAP5SA_NI_DMSO_24h_2_R1','lg2_avg_TPM_MUT_YAP5SA_NI_DMSO_24h_3_R1','lg2_avg_TPM_CTR_NRASQ61K_49d_DMSO_24h_1_R1','lg2_avg_TPM_CTR_NRASQ61K_49d_DMSO_24h_2_R1','lg2_avg_TPM_CTR_NRASQ61K_49d_DMSO_24h_3_R1','lg2_avg_TPM_CTR_NRASQ61K_49d_DMSO_24h_1_R2','lg2_avg_TPM_CTR_NRASQ61K_49d_DMSO_24h_2_R2','lg2_avg_TPM_CTR_NRASQ61K_49d_DMSO_24h_3_R2'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_NRAS_mutDMSO_ctrlDMSO' => array(
            'name' => 'logFC NRAS mutDMSO ctrlDMSO',
            'slider_min' => -24,
            'slider_max' => 10,
            'default_low' => -24,
            'default_high' => 10
        ),
        'contrast_1_padj_NRAS_mutDMSO_ctrlDMSO' => array(
            'name' => 'padj NRAS mutDMSO ctrlDMSO',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_SPON_mutPLXPD_ctrlDMSO' => array(
            'name' => 'logFC SPON mutPLXPD ctrlDMSO',
            'slider_min' => -12,
            'slider_max' => 13,
            'default_low' => -12,
            'default_high' => 13
        ),
        'contrast_2_padj_SPON_mutPLXPD_ctrlDMSO' => array(
            'name' => 'padj SPON mutPLXPD ctrlDMSO',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_YAP_mutDMSO_ctrlDMSO' => array(
            'name' => 'logFC YAP mutDMSO ctrlDMSO',
            'slider_min' => -9,
            'slider_max' => 16,
            'default_low' => -9,
            'default_high' => 16
        ),
        'contrast_3_padj_YAP_mutDMSO_ctrlDMSO' => array(
            'name' => 'padj YAP mutDMSO ctrlDMSO',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        )
    )
    ),
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_NRAS_mutDMSO_ctrlDMSO',
        'default-y' => 'contrast_1_lg10p_NRAS_mutDMSO_ctrlDMSO',
        'selection' => array(
            'contrast_1_logFC_NRAS_mutDMSO_ctrlDMSO' => array(
                'name' => 'logFC NRAS mutDMSO ctrlDMSO'
            ),
            'contrast_2_logFC_SPON_mutPLXPD_ctrlDMSO' => array(
                'name' => 'logFC SPON mutPLXPD ctrlDMSO'
            ),
            'contrast_3_logFC_YAP_mutDMSO_ctrlDMSO' => array(
                'name' => 'logFC YAP mutDMSO ctrlDMSO'
            ),
            'contrast_1_lg10p_NRAS_mutDMSO_ctrlDMSO' => array(
                'name' => 'lg10p NRAS mutDMSO ctrlDMSO'
            ),
            'contrast_2_lg10p_SPON_mutPLXPD_ctrlDMSO' => array(
                'name' => 'lg10p SPON mutPLXPD ctrlDMSO'
            ),
            'contrast_3_lg10p_YAP_mutDMSO_ctrlDMSO' => array(
                'name' => 'lg10p YAP mutDMSO ctrlDMSO'
            )
        )
    )
//End scatterplot
);
