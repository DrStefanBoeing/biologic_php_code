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
            'cat_table_name' => 'vpl292_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'p292_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'lg2(SILAC Ratio)'
    ),

    'samples' => array(
        'norm_counts_Neuron_Ctrl_1' => array(
            'color' => '#8DD3C7',
            'name' => 'Neuron Ctrl 1'
        ),
        'norm_counts_Neuron_Ctrl_2' => array(
            'color' => '#8DD3C7',
            'name' => 'Neuron Ctrl 2'
        ),
        'norm_counts_Neuron_Ctrl_3' => array(
            'color' => '#8DD3C7',
            'name' => 'Neuron Ctrl 3'
        ),
        'norm_counts_Neuron_Ctrl_4' => array(
            'color' => '#8DD3C7',
            'name' => 'Neuron Ctrl 4'
        ),
        'norm_counts_Neuron_AhrAgo_1' => array(
            'color' => '#A9A0B2',
            'name' => 'Neuron AhrAgo 1'
        ),
        'norm_counts_Neuron_AhrAgo_2' => array(
            'color' => '#A9A0B2',
            'name' => 'Neuron AhrAgo 2'
        ),
        'norm_counts_Neuron_AhrAgo_3' => array(
            'color' => '#A9A0B2',
            'name' => 'Neuron AhrAgo 3'
        ),
        'norm_counts_Neuron_AhrAgo_4' => array(
            'color' => '#A9A0B2',
            'name' => 'Neuron AhrAgo 4'
        ),
        'norm_counts_nonNeuron_Ctrl_1' => array(
            'color' => '#F0D1E1',
            'name' => 'nonNeuron Ctrl 1'
        ),
        'norm_counts_nonNeuron_Ctrl_2' => array(
            'color' => '#F0D1E1',
            'name' => 'nonNeuron Ctrl 2'
        ),
        'norm_counts_nonNeuron_Ctrl_3' => array(
            'color' => '#F0D1E1',
            'name' => 'nonNeuron Ctrl 3'
        ),
        'norm_counts_nonNeuron_Ctrl_4' => array(
            'color' => '#F0D1E1',
            'name' => 'nonNeuron Ctrl 4'
        ),
        'norm_counts_nonNeuron_AhrAgo_1' => array(
            'color' => '#FFED6F',
            'name' => 'nonNeuron AhrAgo 1'
        ),
        'norm_counts_nonNeuron_AhrAgo_2' => array(
            'color' => '#FFED6F',
            'name' => 'nonNeuron AhrAgo 2'
        ),
        'norm_counts_nonNeuron_AhrAgo_3' => array(
            'color' => '#FFED6F',
            'name' => 'nonNeuron AhrAgo 3'
        ),
        'norm_counts_nonNeuron_AhrAgo_4' => array(
            'color' => '#FFED6F',
            'name' => 'nonNeuron AhrAgo 4'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Neuron_Ctrl_1','lg2_avg_Neuron_Ctrl_2','lg2_avg_Neuron_Ctrl_3','lg2_avg_Neuron_Ctrl_4','lg2_avg_Neuron_AhrAgo_1','lg2_avg_Neuron_AhrAgo_2','lg2_avg_Neuron_AhrAgo_3','lg2_avg_Neuron_AhrAgo_4','lg2_avg_nonNeuron_Ctrl_1','lg2_avg_nonNeuron_Ctrl_2','lg2_avg_nonNeuron_Ctrl_3','lg2_avg_nonNeuron_Ctrl_4','lg2_avg_nonNeuron_AhrAgo_1','lg2_avg_nonNeuron_AhrAgo_2','lg2_avg_nonNeuron_AhrAgo_3','lg2_avg_nonNeuron_AhrAgo_4'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_Neuron_AhrAgo_vs_Neuron_Ctrl' => array(
            'name' => 'logFC Neuron AhrAgo vs Neuron Ctrl',
            'slider_min' => -8,
            'slider_max' => 8,
            'default_low' => -8,
            'default_high' => 8
        ),
        'contrast_2_logFC_nonNeuron_AhrAgo_vs_nonNeuron_Ctrl' => array(
            'name' => 'logFC nonNeuron AhrAgo vs nonNeuron Ctrl',
            'slider_min' => -9,
            'slider_max' => 10,
            'default_low' => -9,
            'default_high' => 10
        ),
        'contrast_3_logFC_Neuron_Ctrl_vs_nonNeuron_Ctrl' => array(
            'name' => 'logFC Neuron Ctrl vs nonNeuron Ctrl',
            'slider_min' => -11,
            'slider_max' => 10,
            'default_low' => -11,
            'default_high' => 10
        ),
        'contrast_4_logFC_Neuron_AhrAgo_vs_nonNeuron_AhrAgo' => array(
            'name' => 'logFC Neuron AhrAgo vs nonNeuron AhrAgo',
            'slider_min' => -12,
            'slider_max' => 10,
            'default_low' => -12,
            'default_high' => 10
        ),
        'contrast_R2_logFC_SPF_ColPos_vs_GF_ColPos' => array(
            'name' => '2 logFC SPF ColPos vs GF ColPos',
            'slider_min' => -5,
            'slider_max' => 5,
            'default_low' => -5,
            'default_high' => 5
        ),
        'contrast_R7_logFC_SPF_ColPos_vs_SPF_SiPos' => array(
            'name' => '7 logFC SPF ColPos vs SPF SiPos',
            'slider_min' => -7,
            'slider_max' => 10,
            'default_low' => -7,
            'default_high' => 10
        ),
        'contrast_1_padj_Neuron_AhrAgo_vs_Neuron_Ctrl' => array(
            'name' => 'padj Neuron AhrAgo vs Neuron Ctrl',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_padj_nonNeuron_AhrAgo_vs_nonNeuron_Ctrl' => array(
            'name' => 'padj nonNeuron AhrAgo vs nonNeuron Ctrl',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_padj_Neuron_Ctrl_vs_nonNeuron_Ctrl' => array(
            'name' => 'padj Neuron Ctrl vs nonNeuron Ctrl',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_R2_padj_SPF_ColPos_vs_GF_ColPos' => array(
            'name' => '2 padj SPF ColPos vs GF ColPos',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_D_lg10p_LRT_Neuron_nonNeuron' => array(
            'name' => 'lg10p LRT Neuron nonNeuron',
            'slider_min' => 0,
            'slider_max' => 46,
            'default_low' => 0,
            'default_high' => 46
        ),
        'contrast_G_lg10p_LRT_Sample_Group' => array(
            'name' => 'lg10p LRT Sample Group',
            'slider_min' => 0,
            'slider_max' => 59,
            'default_low' => 0,
            'default_high' => 59
        )
    )
    ),
    // Scatterplot Parameters
    'scatterplot' => array(
        'selection' => array(
            'contrast_1_logFC_Neuron_AhrAgo_vs_Neuron_Ctrl' => array(
                'name' => 'logFC Neuron AhrAgo vs Neuron Ctrl'
            ),
            'contrast_2_logFC_nonNeuron_AhrAgo_vs_nonNeuron_Ctrl' => array(
                'name' => 'logFC nonNeuron AhrAgo vs nonNeuron Ctrl'
            ),
            'contrast_3_logFC_Neuron_Ctrl_vs_nonNeuron_Ctrl' => array(
                'name' => 'logFC Neuron Ctrl vs nonNeuron Ctrl'
            ),
            'contrast_4_logFC_Neuron_AhrAgo_vs_nonNeuron_AhrAgo' => array(
                'name' => 'logFC Neuron AhrAgo vs nonNeuron AhrAgo'
            ),
            'contrast_R2_logFC_SPF_ColPos_vs_GF_ColPos' => array(
                'name' => '2 logFC SPF ColPos vs GF ColPos'
            ),
            'contrast_R7_logFC_SPF_ColPos_vs_SPF_SiPos' => array(
                'name' => '7 logFC SPF ColPos vs SPF SiPos'
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
            'contrast_R2_lg10p_SPF_ColPos_vs_GF_ColPos' => array(
                'name' => '2 lg10p SPF ColPos vs GF ColPos'
            ),
            'contrast_R7_lg10p_SPF_ColPos_vs_SPF_SiPos' => array(
                'name' => '7 lg10p SPF ColPos vs SPF SiPos'
            ),
            'contrast_1_lg10p_Neuron_AhrAgo_vs_Neuron_Ctrl' => array(
                'name' => 'lg10p Neuron AhrAgo vs Neuron Ctrl'
            ),
            'contrast_2_lg10p_nonNeuron_AhrAgo_vs_nonNeuron_Ctrl' => array(
                'name' => 'lg10p nonNeuron AhrAgo vs nonNeuron Ctrl'
            ),
            'contrast_3_lg10p_Neuron_Ctrl_vs_nonNeuron_Ctrl' => array(
                'name' => 'lg10p Neuron Ctrl vs nonNeuron Ctrl'
            ),
            'contrast_4_lg10p_Neuron_AhrAgo_vs_nonNeuron_AhrAgo' => array(
                'name' => 'lg10p Neuron AhrAgo vs nonNeuron AhrAgo'
            ),
            'contrast_G_lg10p_LRT_Sample_Group' => array(
                'name' => 'lg10p LRT Sample Group'
            ),
            'contrast_D_lg10p_LRT_Neuron_nonNeuron' => array(
                'name' => 'lg10p LRT Neuron nonNeuron'
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
            'contrast_P_padj_PCA1' => array(
                'name' => 'padj PCA1'
            ),
            'contrast_P_padj_PCA2' => array(
                'name' => 'padj PCA2'
            ),
            'contrast_P_padj_PCA3' => array(
                'name' => 'padj PCA3'
            ),
            'contrast_P_padj_PCA4' => array(
                'name' => 'padj PCA4'
            ),
            'contrast_P_padj_PCA5' => array(
                'name' => 'padj PCA5'
            )
        ),
        'default-x' => 'contrast_1_logFC_Neuron_AhrAgo_vs_Neuron_Ctrl',
        'default-y' => 'contrast_1_lg10p_Neuron_AhrAgo_vs_Neuron_Ctrl'
    )
//End scatterplot
);
