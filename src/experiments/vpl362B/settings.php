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
            'cat_table_name' => 'vpl362B_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'vpl362B_sc_rna_seq_table',
    'primary_gene_symbol' => 'dr_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged Expr',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Avg_log10_Expr_C5HT' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr C5HT'
        ),
        'norm_counts_Avg_log10_Expr_ChAT1' => array(
            'color' => '#E18A00',
            'name' => 'Avg log10 Expr ChAT1'
        ),
        'norm_counts_Avg_log10_Expr_ChAT2' => array(
            'color' => '#BE9C00',
            'name' => 'Avg log10 Expr ChAT2'
        ),
        'norm_counts_Avg_log10_Expr_ChAT3' => array(
            'color' => '#8CAB00',
            'name' => 'Avg log10 Expr ChAT3'
        ),
        'norm_counts_Avg_log10_Expr_Glia' => array(
            'color' => '#24B700',
            'name' => 'Avg log10 Expr Glia'
        ),
        'norm_counts_Avg_log10_Expr_NOS1' => array(
            'color' => '#00BE70',
            'name' => 'Avg log10 Expr NOS1'
        ),
        'norm_counts_Avg_log10_Expr_NOS2' => array(
            'color' => '#00C1AB',
            'name' => 'Avg log10 Expr NOS2'
        ),
        'norm_counts_Avg_log10_Expr_NOS3' => array(
            'color' => '#00BBDA',
            'name' => 'Avg log10 Expr NOS3'
        ),
        'norm_counts_Avg_log10_Expr_NOSChAT' => array(
            'color' => '#00ACFC',
            'name' => 'Avg log10 Expr NOSChAT'
        ),
        'norm_counts_Avg_log10_Expr_Other1' => array(
            'color' => '#8B93FF',
            'name' => 'Avg log10 Expr Other1'
        ),
        'norm_counts_Avg_log10_Expr_Other2' => array(
            'color' => '#D575FE',
            'name' => 'Avg log10 Expr Other2'
        ),
        'norm_counts_Avg_log10_Expr_Other3' => array(
            'color' => '#F962DD',
            'name' => 'Avg log10 Expr Other3'
        ),
        'norm_counts_Avg_log10_Expr_Other4' => array(
            'color' => '#FF65AC',
            'name' => 'Avg log10 Expr Other4'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'lg10 Expr for all Samples',
        'sidelabel' => 'lg10 Expr'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Avg_log10_Expr_Sc_C5HT','lg2_avg_Avg_log10_Expr_Sc_ChAT1','lg2_avg_Avg_log10_Expr_Sc_ChAT2','lg2_avg_Avg_log10_Expr_Sc_ChAT3','lg2_avg_Avg_log10_Expr_Sc_Glia','lg2_avg_Avg_log10_Expr_Sc_NOS1','lg2_avg_Avg_log10_Expr_Sc_NOS2','lg2_avg_Avg_log10_Expr_Sc_NOS3','lg2_avg_Avg_log10_Expr_Sc_NOSChAT','lg2_avg_Avg_log10_Expr_Sc_Other1','lg2_avg_Avg_log10_Expr_Sc_Other2','lg2_avg_Avg_log10_Expr_Sc_Other3','lg2_avg_Avg_log10_Expr_Sc_Other4'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_A_logFC_bulkRNASeq_vpl367_PE_SOX10_vs_PE_neg' => array(
            'name' => 'logFC bulkRNASeq vpl367 PE SOX10 vs PE neg',
            'slider_min' => -8,
            'slider_max' => 8,
            'default_low' => -8,
            'default_high' => 8
        ),
        'contrast_A_padj_bulkRNASeq_vpl367_PE_SOX10_vs_PE_neg' => array(
            'name' => 'padj bulkRNASeq vpl367 PE SOX10 vs PE neg',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_1_logFC_DGE_sn_mouse_Regev_Neuron_vs_Glia' => array(
            'name' => 'logFC DGE sn mouse Regev Neuron vs Glia',
            'slider_min' => -9,
            'slider_max' => 8,
            'default_low' => -9,
            'default_high' => 8
        ),
        'contrast_1_padj_DGE_sn_mouse_Regev_Neuron_vs_Glia' => array(
            'name' => 'padj DGE sn mouse Regev Neuron vs Glia',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
            'name' => 'logFC Expressed in N Percent Cells',
            'slider_min' => 0,
            'slider_max' => 100,
            'default_low' => 0,
            'default_high' => 100
        ),
        'contrast_1_logFC_DGE_Neuron_vs_Glia' => array(
            'name' => 'logFC DGE Neuron vs Glia',
            'slider_min' => -10,
            'slider_max' => 8,
            'default_low' => -10,
            'default_high' => 8
        ),
        'contrast_1_padj_DGE_Neuron_vs_Glia' => array(
            'name' => 'padj DGE Neuron vs Glia',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_DGE_NeuronsChAT_vs_NeuronsOther' => array(
            'name' => 'logFC DGE NeuronsChAT vs NeuronsOther',
            'slider_min' => -9,
            'slider_max' => 10,
            'default_low' => -9,
            'default_high' => 10
        ),
        'contrast_2_padj_DGE_NeuronsChAT_vs_NeuronsOther' => array(
            'name' => 'padj DGE NeuronsChAT vs NeuronsOther',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_DGE_Neurons_Nos_vs_Neurons_Other' => array(
            'name' => 'logFC DGE Neurons Nos vs Neurons Other',
            'slider_min' => -9,
            'slider_max' => 8,
            'default_low' => -9,
            'default_high' => 8
        ),
        'contrast_3_padj_DGE_Neurons_Nos_vs_Neurons_Other' => array(
            'name' => 'padj DGE Neurons Nos vs Neurons Other',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_logFC_DGE_Neurons_5HT_vs_Neurons_Other' => array(
            'name' => 'logFC DGE Neurons 5HT vs Neurons Other',
            'slider_min' => -10,
            'slider_max' => 10,
            'default_low' => -10,
            'default_high' => 10
        ),
        'contrast_4_padj_DGE_Neurons_5HT_vs_Neurons_Other' => array(
            'name' => 'padj DGE Neurons 5HT vs Neurons Other',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_5_logFC_DGE_Neurons_Chat1_vs_Neurons_ChAT_Other' => array(
            'name' => 'logFC DGE Neurons Chat1 vs Neurons ChAT Other',
            'slider_min' => -10,
            'slider_max' => 5,
            'default_low' => -10,
            'default_high' => 5
        ),
        'contrast_5_padj_DGE_Neurons_Chat1_vs_Neurons_ChAT_Other' => array(
            'name' => 'padj DGE Neurons Chat1 vs Neurons ChAT Other',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_6_logFC_DGE_NeuronChat2_vs_Neuron_ChAT_Other' => array(
            'name' => 'logFC DGE NeuronChat2 vs Neuron ChAT Other',
            'slider_min' => -8,
            'slider_max' => 6,
            'default_low' => -8,
            'default_high' => 6
        ),
        'contrast_6_padj_DGE_NeuronChat2_vs_Neuron_ChAT_Other' => array(
            'name' => 'padj DGE NeuronChat2 vs Neuron ChAT Other',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_7_logFC_DGE_NeuronChat3_vs_Neuron_ChAT_Other' => array(
            'name' => 'logFC DGE NeuronChat3 vs Neuron ChAT Other',
            'slider_min' => -7,
            'slider_max' => 7,
            'default_low' => -7,
            'default_high' => 7
        ),
        'contrast_7_padj_DGE_NeuronChat3_vs_Neuron_ChAT_Other' => array(
            'name' => 'padj DGE NeuronChat3 vs Neuron ChAT Other',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_8_logFC_DGE_NeuronNos1_vs_Neuron_Nos_Other' => array(
            'name' => 'logFC DGE NeuronNos1 vs Neuron Nos Other',
            'slider_min' => -8,
            'slider_max' => 6,
            'default_low' => -8,
            'default_high' => 6
        ),
        'contrast_8_padj_DGE_NeuronNos1_vs_Neuron_Nos_Other' => array(
            'name' => 'padj DGE NeuronNos1 vs Neuron Nos Other',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_9_logFC_DGE_NeuronNos2_vs_Neuron_Nos_Other' => array(
            'name' => 'logFC DGE NeuronNos2 vs Neuron Nos Other',
            'slider_min' => -6,
            'slider_max' => 9,
            'default_low' => -6,
            'default_high' => 9
        ),
        'contrast_9_padj_DGE_NeuronNos2_vs_Neuron_Nos_Other' => array(
            'name' => 'padj DGE NeuronNos2 vs Neuron Nos Other',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_10_logFC_DGE_NeuronNos3_vs_Neuron_Nos_Other' => array(
            'name' => '0 logFC DGE NeuronNos3 vs Neuron Nos Other',
            'slider_min' => -5,
            'slider_max' => 6,
            'default_low' => -5,
            'default_high' => 6
        ),
        'contrast_10_padj_DGE_NeuronNos3_vs_Neuron_Nos_Other' => array(
            'name' => '0 padj DGE NeuronNos3 vs Neuron Nos Other',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_11_logFC_DGE_NeuronsNOSChat_vs_ChatOther' => array(
            'name' => '1 logFC DGE NeuronsNOSChat vs ChatOther',
            'slider_min' => -8,
            'slider_max' => 10,
            'default_low' => -8,
            'default_high' => 10
        ),
        'contrast_11_padj_DGE_NeuronsNOSChat_vs_ChatOther' => array(
            'name' => '1 padj DGE NeuronsNOSChat vs ChatOther',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_12_logFC_DGE_NeuronsNOSChat_vs_NeuronsNosOthers' => array(
            'name' => '2 logFC DGE NeuronsNOSChat vs NeuronsNosOthers',
            'slider_min' => -9,
            'slider_max' => 10,
            'default_low' => -9,
            'default_high' => 10
        ),
        'contrast_12_padj_DGE_NeuronsNOSChat_vs_NeuronsNosOthers' => array(
            'name' => '2 padj DGE NeuronsNOSChat vs NeuronsNosOthers',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_13_logFC_DGE_Neurons5HT_vs_NeuronsNos' => array(
            'name' => '3 logFC DGE Neurons5HT vs NeuronsNos',
            'slider_min' => -9,
            'slider_max' => 10,
            'default_low' => -9,
            'default_high' => 10
        ),
        'contrast_13_padj_DGE_Neurons5HT_vs_NeuronsNos' => array(
            'name' => '3 padj DGE Neurons5HT vs NeuronsNos',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_14_logFC_DGE_Neurons5HT_vs_NeuronsChat' => array(
            'name' => '4 logFC DGE Neurons5HT vs NeuronsChat',
            'slider_min' => -10,
            'slider_max' => 11,
            'default_low' => -10,
            'default_high' => 11
        ),
        'contrast_14_padj_DGE_Neurons5HT_vs_NeuronsChat' => array(
            'name' => '4 padj DGE Neurons5HT vs NeuronsChat',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_15_logFC_DGE_Chat1_vs_OtherUMAPChAT' => array(
            'name' => '5 logFC DGE Chat1 vs OtherUMAPChAT',
            'slider_min' => -10,
            'slider_max' => 5,
            'default_low' => -10,
            'default_high' => 5
        ),
        'contrast_15_padj_DGE_Chat1_vs_OtherUMAPChAT' => array(
            'name' => '5 padj DGE Chat1 vs OtherUMAPChAT',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_16_logFC_DGE_Chat2_vs_OtherUMAPChAT' => array(
            'name' => '6 logFC DGE Chat2 vs OtherUMAPChAT',
            'slider_min' => -7,
            'slider_max' => 8,
            'default_low' => -7,
            'default_high' => 8
        ),
        'contrast_16_padj_DGE_Chat2_vs_OtherUMAPChAT' => array(
            'name' => '6 padj DGE Chat2 vs OtherUMAPChAT',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_17_logFC_DGE_Chat3_vs_OtherUMAPChAT' => array(
            'name' => '7 logFC DGE Chat3 vs OtherUMAPChAT',
            'slider_min' => -5,
            'slider_max' => 8,
            'default_low' => -5,
            'default_high' => 8
        ),
        'contrast_17_padj_DGE_Chat3_vs_OtherUMAPChAT' => array(
            'name' => '7 padj DGE Chat3 vs OtherUMAPChAT',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_18_logFC_DGE_NOS1_vs_OtherUMAPNOS' => array(
            'name' => '8 logFC DGE NOS1 vs OtherUMAPNOS',
            'slider_min' => -9,
            'slider_max' => 6,
            'default_low' => -9,
            'default_high' => 6
        ),
        'contrast_18_padj_DGE_NOS1_vs_OtherUMAPNOS' => array(
            'name' => '8 padj DGE NOS1 vs OtherUMAPNOS',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_19_logFC_DGE_NOS2_vs_OtherUMAPNOS' => array(
            'name' => '9 logFC DGE NOS2 vs OtherUMAPNOS',
            'slider_min' => -8,
            'slider_max' => 9,
            'default_low' => -8,
            'default_high' => 9
        ),
        'contrast_19_padj_DGE_NOS2_vs_OtherUMAPNOS' => array(
            'name' => '9 padj DGE NOS2 vs OtherUMAPNOS',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_20_logFC_DGE_NOS3_vs_OtherUMAPNOS' => array(
            'name' => '0 logFC DGE NOS3 vs OtherUMAPNOS',
            'slider_min' => -7,
            'slider_max' => 6,
            'default_low' => -7,
            'default_high' => 6
        ),
        'contrast_20_padj_DGE_NOS3_vs_OtherUMAPNOS' => array(
            'name' => '0 padj DGE NOS3 vs OtherUMAPNOS',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_21_logFC_DGE_C5HT_vs_UMAPNOS' => array(
            'name' => '1 logFC DGE C5HT vs UMAPNOS',
            'slider_min' => -9,
            'slider_max' => 10,
            'default_low' => -9,
            'default_high' => 10
        ),
        'contrast_21_padj_DGE_C5HT_vs_UMAPNOS' => array(
            'name' => '1 padj DGE C5HT vs UMAPNOS',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_22_logFC_DGE_C5HT_vs_UMAPChAT' => array(
            'name' => '2 logFC DGE C5HT vs UMAPChAT',
            'slider_min' => -11,
            'slider_max' => 12,
            'default_low' => -11,
            'default_high' => 12
        ),
        'contrast_22_padj_DGE_C5HT_vs_UMAPChAT' => array(
            'name' => '2 padj DGE C5HT vs UMAPChAT',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_23_logFC_DGE_Other1_vs_UMAPChAT' => array(
            'name' => '3 logFC DGE Other1 vs UMAPChAT',
            'slider_min' => -8,
            'slider_max' => 11,
            'default_low' => -8,
            'default_high' => 11
        ),
        'contrast_23_padj_DGE_Other1_vs_UMAPChAT' => array(
            'name' => '3 padj DGE Other1 vs UMAPChAT',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_24_logFC_DGE_Other1_vs_ChAT' => array(
            'name' => '4 logFC DGE Other1 vs ChAT',
            'slider_min' => -8,
            'slider_max' => 11,
            'default_low' => -8,
            'default_high' => 11
        ),
        'contrast_24_padj_DGE_Other1_vs_ChAT' => array(
            'name' => '4 padj DGE Other1 vs ChAT',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_25_logFC_DGE_Other1_vs_ NeuronsNOS' => array(
            'name' => '5 logFC DGE Other1 vs  NeuronsNOS',
            'slider_min' => -8,
            'slider_max' => 12,
            'default_low' => -8,
            'default_high' => 12
        ),
        'contrast_25_padj_DGE_Other1_vs_ NeuronsNOS' => array(
            'name' => '5 padj DGE Other1 vs  NeuronsNOS',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_26_logFC_DGE_Other1_vs_ UMAPNOS' => array(
            'name' => '6 logFC DGE Other1 vs  UMAPNOS',
            'slider_min' => -8,
            'slider_max' => 11,
            'default_low' => -8,
            'default_high' => 11
        ),
        'contrast_26_padj_DGE_Other1_vs_ UMAPNOS' => array(
            'name' => '6 padj DGE Other1 vs  UMAPNOS',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_27_logFC_DGE_Other1_vs_Neurons5HT' => array(
            'name' => '7 logFC DGE Other1 vs Neurons5HT',
            'slider_min' => -11,
            'slider_max' => 11,
            'default_low' => -11,
            'default_high' => 11
        ),
        'contrast_27_padj_DGE_Other1_vs_Neurons5HT' => array(
            'name' => '7 padj DGE Other1 vs Neurons5HT',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_28_logFC_DGE_Other1_vs_Glia' => array(
            'name' => '8 logFC DGE Other1 vs Glia',
            'slider_min' => -9,
            'slider_max' => 10,
            'default_low' => -9,
            'default_high' => 10
        ),
        'contrast_28_padj_DGE_Other1_vs_Glia' => array(
            'name' => '8 padj DGE Other1 vs Glia',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_29_logFC_DGE_Other1_vs_Neuron' => array(
            'name' => '9 logFC DGE Other1 vs Neuron',
            'slider_min' => -8,
            'slider_max' => 11,
            'default_low' => -8,
            'default_high' => 11
        ),
        'contrast_29_padj_DGE_Other1_vs_Neuron' => array(
            'name' => '9 padj DGE Other1 vs Neuron',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_30_logFC_DGE_Other1_vs_Chat3' => array(
            'name' => '0 logFC DGE Other1 vs Chat3',
            'slider_min' => -9,
            'slider_max' => 8,
            'default_low' => -9,
            'default_high' => 8
        ),
        'contrast_30_padj_DGE_Other1_vs_Chat3' => array(
            'name' => '0 padj DGE Other1 vs Chat3',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'add_counts_C5HT_Residuals' => array(
            'name' => 'C5HT Residuals',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'add_counts_ChAT1_Residuals' => array(
            'name' => 'ChAT1 Residuals',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'add_counts_ChAT2_Residuals' => array(
            'name' => 'ChAT2 Residuals',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'add_counts_ChAT3_Residuals' => array(
            'name' => 'ChAT3 Residuals',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'add_counts_Glia_Residuals' => array(
            'name' => 'Glia Residuals',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'add_counts_NOS1_Residuals' => array(
            'name' => 'NOS1 Residuals',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'add_counts_NOS2_Residuals' => array(
            'name' => 'NOS2 Residuals',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'add_counts_NOS3_Residuals' => array(
            'name' => 'NOS3 Residuals',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'add_counts_NOSChAT_Residuals' => array(
            'name' => 'NOSChAT Residuals',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'add_counts_Other1_Residuals' => array(
            'name' => 'Other1 Residuals',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'add_counts_Other2_Residuals' => array(
            'name' => 'Other2 Residuals',
            'slider_min' => -3,
            'slider_max' => 4,
            'default_low' => -3,
            'default_high' => 4
        ),
        'add_counts_Other3_Residuals' => array(
            'name' => 'Other3 Residuals',
            'slider_min' => -2,
            'slider_max' => 4,
            'default_low' => -2,
            'default_high' => 4
        ),
        'add_counts_Other4_Residuals' => array(
            'name' => 'Other4 Residuals',
            'slider_min' => -2,
            'slider_max' => 5,
            'default_low' => -2,
            'default_high' => 5
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'vpl362B_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'add_counts_Avg_log10_Expr_all',
        'default-y' => 'norm_counts_Avg_log10_Expr_C5HT',
        'selection' => array(
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg log10 Expr all'
            ),
            'norm_counts_Avg_log10_Expr_C5HT' => array(
                'name' => 's Avg log10 Expr C5HT'
            ),
            'contrast_A_logFC_bulkRNASeq_vpl367_PE_SOX10_vs_PE_neg' => array(
                'name' => 'logFC bulkRNASeq vpl367 PE SOX10 vs PE neg'
            ),
            'contrast_1_logFC_DGE_sn_mouse_Regev_Neuron_vs_Glia' => array(
                'name' => 'logFC DGE sn mouse Regev Neuron vs Glia'
            ),
            'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
                'name' => 'logFC Expressed in N Percent Cells'
            ),
            'contrast_1_logFC_DGE_Neuron_vs_Glia' => array(
                'name' => 'logFC DGE Neuron vs Glia'
            ),
            'contrast_2_logFC_DGE_NeuronsChAT_vs_NeuronsOther' => array(
                'name' => 'logFC DGE NeuronsChAT vs NeuronsOther'
            ),
            'contrast_3_logFC_DGE_Neurons_Nos_vs_Neurons_Other' => array(
                'name' => 'logFC DGE Neurons Nos vs Neurons Other'
            ),
            'contrast_4_logFC_DGE_Neurons_5HT_vs_Neurons_Other' => array(
                'name' => 'logFC DGE Neurons 5HT vs Neurons Other'
            ),
            'contrast_5_logFC_DGE_Neurons_Chat1_vs_Neurons_ChAT_Other' => array(
                'name' => 'logFC DGE Neurons Chat1 vs Neurons ChAT Other'
            ),
            'contrast_6_logFC_DGE_NeuronChat2_vs_Neuron_ChAT_Other' => array(
                'name' => 'logFC DGE NeuronChat2 vs Neuron ChAT Other'
            ),
            'contrast_7_logFC_DGE_NeuronChat3_vs_Neuron_ChAT_Other' => array(
                'name' => 'logFC DGE NeuronChat3 vs Neuron ChAT Other'
            ),
            'contrast_8_logFC_DGE_NeuronNos1_vs_Neuron_Nos_Other' => array(
                'name' => 'logFC DGE NeuronNos1 vs Neuron Nos Other'
            ),
            'contrast_9_logFC_DGE_NeuronNos2_vs_Neuron_Nos_Other' => array(
                'name' => 'logFC DGE NeuronNos2 vs Neuron Nos Other'
            ),
            'contrast_10_logFC_DGE_NeuronNos3_vs_Neuron_Nos_Other' => array(
                'name' => '0 logFC DGE NeuronNos3 vs Neuron Nos Other'
            ),
            'contrast_11_logFC_DGE_NeuronsNOSChat_vs_ChatOther' => array(
                'name' => '1 logFC DGE NeuronsNOSChat vs ChatOther'
            ),
            'contrast_12_logFC_DGE_NeuronsNOSChat_vs_NeuronsNosOthers' => array(
                'name' => '2 logFC DGE NeuronsNOSChat vs NeuronsNosOthers'
            ),
            'contrast_13_logFC_DGE_Neurons5HT_vs_NeuronsNos' => array(
                'name' => '3 logFC DGE Neurons5HT vs NeuronsNos'
            ),
            'contrast_14_logFC_DGE_Neurons5HT_vs_NeuronsChat' => array(
                'name' => '4 logFC DGE Neurons5HT vs NeuronsChat'
            ),
            'contrast_15_logFC_DGE_Chat1_vs_OtherUMAPChAT' => array(
                'name' => '5 logFC DGE Chat1 vs OtherUMAPChAT'
            ),
            'contrast_16_logFC_DGE_Chat2_vs_OtherUMAPChAT' => array(
                'name' => '6 logFC DGE Chat2 vs OtherUMAPChAT'
            ),
            'contrast_17_logFC_DGE_Chat3_vs_OtherUMAPChAT' => array(
                'name' => '7 logFC DGE Chat3 vs OtherUMAPChAT'
            ),
            'contrast_18_logFC_DGE_NOS1_vs_OtherUMAPNOS' => array(
                'name' => '8 logFC DGE NOS1 vs OtherUMAPNOS'
            ),
            'contrast_19_logFC_DGE_NOS2_vs_OtherUMAPNOS' => array(
                'name' => '9 logFC DGE NOS2 vs OtherUMAPNOS'
            ),
            'contrast_20_logFC_DGE_NOS3_vs_OtherUMAPNOS' => array(
                'name' => '0 logFC DGE NOS3 vs OtherUMAPNOS'
            ),
            'contrast_21_logFC_DGE_C5HT_vs_UMAPNOS' => array(
                'name' => '1 logFC DGE C5HT vs UMAPNOS'
            ),
            'contrast_22_logFC_DGE_C5HT_vs_UMAPChAT' => array(
                'name' => '2 logFC DGE C5HT vs UMAPChAT'
            ),
            'contrast_23_logFC_DGE_Other1_vs_UMAPChAT' => array(
                'name' => '3 logFC DGE Other1 vs UMAPChAT'
            ),
            'contrast_24_logFC_DGE_Other1_vs_ChAT' => array(
                'name' => '4 logFC DGE Other1 vs ChAT'
            ),
            'contrast_25_logFC_DGE_Other1_vs_ NeuronsNOS' => array(
                'name' => '5 logFC DGE Other1 vs  NeuronsNOS'
            ),
            'contrast_26_logFC_DGE_Other1_vs_ UMAPNOS' => array(
                'name' => '6 logFC DGE Other1 vs  UMAPNOS'
            ),
            'contrast_27_logFC_DGE_Other1_vs_Neurons5HT' => array(
                'name' => '7 logFC DGE Other1 vs Neurons5HT'
            ),
            'contrast_28_logFC_DGE_Other1_vs_Glia' => array(
                'name' => '8 logFC DGE Other1 vs Glia'
            ),
            'contrast_29_logFC_DGE_Other1_vs_Neuron' => array(
                'name' => '9 logFC DGE Other1 vs Neuron'
            ),
            'contrast_30_logFC_DGE_Other1_vs_Chat3' => array(
                'name' => '0 logFC DGE Other1 vs Chat3'
            ),
            'contrast_A_lg10p_bulkRNASeq_vpl367_PE_SOX10_vs_PE_neg' => array(
                'name' => 'lg10p bulkRNASeq vpl367 PE SOX10 vs PE neg'
            ),
            'contrast_1_lg10p_DGE_sn_mouse_Regev_Neuron_vs_Glia' => array(
                'name' => 'lg10p DGE sn mouse Regev Neuron vs Glia'
            ),
            'contrast_1_lg10p_DGE_Neuron_vs_Glia' => array(
                'name' => 'lg10p DGE Neuron vs Glia'
            ),
            'contrast_2_lg10p_DGE_NeuronsChAT_vs_NeuronsOther' => array(
                'name' => 'lg10p DGE NeuronsChAT vs NeuronsOther'
            ),
            'contrast_3_lg10p_DGE_Neurons_Nos_vs_Neurons_Other' => array(
                'name' => 'lg10p DGE Neurons Nos vs Neurons Other'
            ),
            'contrast_4_lg10p_DGE_Neurons_5HT_vs_Neurons_Other' => array(
                'name' => 'lg10p DGE Neurons 5HT vs Neurons Other'
            ),
            'contrast_5_lg10p_DGE_Neurons_Chat1_vs_Neurons_ChAT_Other' => array(
                'name' => 'lg10p DGE Neurons Chat1 vs Neurons ChAT Other'
            ),
            'contrast_6_lg10p_DGE_NeuronChat2_vs_Neuron_ChAT_Other' => array(
                'name' => 'lg10p DGE NeuronChat2 vs Neuron ChAT Other'
            ),
            'contrast_7_lg10p_DGE_NeuronChat3_vs_Neuron_ChAT_Other' => array(
                'name' => 'lg10p DGE NeuronChat3 vs Neuron ChAT Other'
            ),
            'contrast_8_lg10p_DGE_NeuronNos1_vs_Neuron_Nos_Other' => array(
                'name' => 'lg10p DGE NeuronNos1 vs Neuron Nos Other'
            ),
            'contrast_9_lg10p_DGE_NeuronNos2_vs_Neuron_Nos_Other' => array(
                'name' => 'lg10p DGE NeuronNos2 vs Neuron Nos Other'
            ),
            'contrast_10_lg10p_DGE_NeuronNos3_vs_Neuron_Nos_Other' => array(
                'name' => '0 lg10p DGE NeuronNos3 vs Neuron Nos Other'
            ),
            'contrast_11_lg10p_DGE_NeuronsNOSChat_vs_ChatOther' => array(
                'name' => '1 lg10p DGE NeuronsNOSChat vs ChatOther'
            ),
            'contrast_12_lg10p_DGE_NeuronsNOSChat_vs_NeuronsNosOthers' => array(
                'name' => '2 lg10p DGE NeuronsNOSChat vs NeuronsNosOthers'
            ),
            'contrast_13_lg10p_DGE_Neurons5HT_vs_NeuronsNos' => array(
                'name' => '3 lg10p DGE Neurons5HT vs NeuronsNos'
            ),
            'contrast_14_lg10p_DGE_Neurons5HT_vs_NeuronsChat' => array(
                'name' => '4 lg10p DGE Neurons5HT vs NeuronsChat'
            ),
            'contrast_15_lg10p_DGE_Chat1_vs_OtherUMAPChAT' => array(
                'name' => '5 lg10p DGE Chat1 vs OtherUMAPChAT'
            ),
            'contrast_16_lg10p_DGE_Chat2_vs_OtherUMAPChAT' => array(
                'name' => '6 lg10p DGE Chat2 vs OtherUMAPChAT'
            ),
            'contrast_17_lg10p_DGE_Chat3_vs_OtherUMAPChAT' => array(
                'name' => '7 lg10p DGE Chat3 vs OtherUMAPChAT'
            ),
            'contrast_18_lg10p_DGE_NOS1_vs_OtherUMAPNOS' => array(
                'name' => '8 lg10p DGE NOS1 vs OtherUMAPNOS'
            ),
            'contrast_19_lg10p_DGE_NOS2_vs_OtherUMAPNOS' => array(
                'name' => '9 lg10p DGE NOS2 vs OtherUMAPNOS'
            ),
            'contrast_20_lg10p_DGE_NOS3_vs_OtherUMAPNOS' => array(
                'name' => '0 lg10p DGE NOS3 vs OtherUMAPNOS'
            ),
            'contrast_21_lg10p_DGE_C5HT_vs_UMAPNOS' => array(
                'name' => '1 lg10p DGE C5HT vs UMAPNOS'
            ),
            'contrast_22_lg10p_DGE_C5HT_vs_UMAPChAT' => array(
                'name' => '2 lg10p DGE C5HT vs UMAPChAT'
            ),
            'contrast_23_lg10p_DGE_Other1_vs_UMAPChAT' => array(
                'name' => '3 lg10p DGE Other1 vs UMAPChAT'
            ),
            'contrast_24_lg10p_DGE_Other1_vs_ChAT' => array(
                'name' => '4 lg10p DGE Other1 vs ChAT'
            ),
            'contrast_25_lg10p_DGE_Other1_vs_ NeuronsNOS' => array(
                'name' => '5 lg10p DGE Other1 vs  NeuronsNOS'
            ),
            'contrast_26_lg10p_DGE_Other1_vs_ UMAPNOS' => array(
                'name' => '6 lg10p DGE Other1 vs  UMAPNOS'
            ),
            'contrast_27_lg10p_DGE_Other1_vs_Neurons5HT' => array(
                'name' => '7 lg10p DGE Other1 vs Neurons5HT'
            ),
            'contrast_28_lg10p_DGE_Other1_vs_Glia' => array(
                'name' => '8 lg10p DGE Other1 vs Glia'
            ),
            'contrast_29_lg10p_DGE_Other1_vs_Neuron' => array(
                'name' => '9 lg10p DGE Other1 vs Neuron'
            ),
            'contrast_30_lg10p_DGE_Other1_vs_Chat3' => array(
                'name' => '0 lg10p DGE Other1 vs Chat3'
            ),
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg log10 Expr all'
            ),
            'add_counts_Avg_log10_Expr_Enteric' => array(
                'name' => 'Avg log10 Expr Enteric'
            ),
            'norm_counts_Avg_log10_Expr_C5HT' => array(
                'name' => 's Avg log10 Expr C5HT'
            ),
            'norm_counts_Avg_log10_Expr_ChAT1' => array(
                'name' => 's Avg log10 Expr ChAT1'
            ),
            'norm_counts_Avg_log10_Expr_ChAT2' => array(
                'name' => 's Avg log10 Expr ChAT2'
            ),
            'norm_counts_Avg_log10_Expr_ChAT3' => array(
                'name' => 's Avg log10 Expr ChAT3'
            ),
            'norm_counts_Avg_log10_Expr_Glia' => array(
                'name' => 's Avg log10 Expr Glia'
            ),
            'norm_counts_Avg_log10_Expr_NOS1' => array(
                'name' => 's Avg log10 Expr NOS1'
            ),
            'norm_counts_Avg_log10_Expr_NOS2' => array(
                'name' => 's Avg log10 Expr NOS2'
            ),
            'norm_counts_Avg_log10_Expr_NOS3' => array(
                'name' => 's Avg log10 Expr NOS3'
            ),
            'norm_counts_Avg_log10_Expr_NOSChAT' => array(
                'name' => 's Avg log10 Expr NOSChAT'
            ),
            'norm_counts_Avg_log10_Expr_Other1' => array(
                'name' => 's Avg log10 Expr Other1'
            ),
            'norm_counts_Avg_log10_Expr_Other2' => array(
                'name' => 's Avg log10 Expr Other2'
            ),
            'norm_counts_Avg_log10_Expr_Other3' => array(
                'name' => 's Avg log10 Expr Other3'
            ),
            'norm_counts_Avg_log10_Expr_Other4' => array(
                'name' => 's Avg log10 Expr Other4'
            ),
            'add_counts_PCA_Dim_10_Loadings' => array(
                'name' => 'PCA Dim 10 Loadings'
            ),
            'add_counts_PCA_Dim_11_Loadings' => array(
                'name' => 'PCA Dim 11 Loadings'
            ),
            'add_counts_PCA_Dim_12_Loadings' => array(
                'name' => 'PCA Dim 12 Loadings'
            ),
            'add_counts_PCA_Dim_13_Loadings' => array(
                'name' => 'PCA Dim 13 Loadings'
            ),
            'add_counts_PCA_Dim_14_Loadings' => array(
                'name' => 'PCA Dim 14 Loadings'
            ),
            'add_counts_PCA_Dim_15_Loadings' => array(
                'name' => 'PCA Dim 15 Loadings'
            ),
            'add_counts_PCA_Dim_16_Loadings' => array(
                'name' => 'PCA Dim 16 Loadings'
            ),
            'add_counts_PCA_Dim_17_Loadings' => array(
                'name' => 'PCA Dim 17 Loadings'
            ),
            'add_counts_PCA_Dim_18_Loadings' => array(
                'name' => 'PCA Dim 18 Loadings'
            ),
            'add_counts_PCA_Dim_19_Loadings' => array(
                'name' => 'PCA Dim 19 Loadings'
            ),
            'add_counts_PCA_Dim_1_Loadings' => array(
                'name' => 'PCA Dim 1 Loadings'
            ),
            'add_counts_PCA_Dim_20_Loadings' => array(
                'name' => 'PCA Dim 20 Loadings'
            ),
            'add_counts_PCA_Dim_2_Loadings' => array(
                'name' => 'PCA Dim 2 Loadings'
            ),
            'add_counts_PCA_Dim_3_Loadings' => array(
                'name' => 'PCA Dim 3 Loadings'
            ),
            'add_counts_PCA_Dim_4_Loadings' => array(
                'name' => 'PCA Dim 4 Loadings'
            ),
            'add_counts_PCA_Dim_5_Loadings' => array(
                'name' => 'PCA Dim 5 Loadings'
            ),
            'add_counts_PCA_Dim_6_Loadings' => array(
                'name' => 'PCA Dim 6 Loadings'
            ),
            'add_counts_PCA_Dim_7_Loadings' => array(
                'name' => 'PCA Dim 7 Loadings'
            ),
            'add_counts_PCA_Dim_8_Loadings' => array(
                'name' => 'PCA Dim 8 Loadings'
            ),
            'add_counts_PCA_Dim_9_Loadings' => array(
                'name' => 'PCA Dim 9 Loadings'
            ),
            'add_MA_cts_MA_Avg_DGE_Neuron_vs_Glia' => array(
                'name' => 'MA Avg DGE Neuron vs Glia'
            ),
            'add_MA_cts_MA_Avg_DGE_NeuronsChAT_vs_NeuronsOther' => array(
                'name' => 'MA Avg DGE NeuronsChAT vs NeuronsOther'
            ),
            'add_MA_cts_MA_Avg_DGE_Neurons_Nos_vs_Neurons_Other' => array(
                'name' => 'MA Avg DGE Neurons Nos vs Neurons Other'
            ),
            'add_MA_cts_MA_Avg_DGE_Neurons_5HT_vs_Neurons_Other' => array(
                'name' => 'MA Avg DGE Neurons 5HT vs Neurons Other'
            ),
            'add_MA_cts_MA_Avg_DGE_Neurons_Chat1_vs_Neurons_ChAT_Other' => array(
                'name' => 'MA Avg DGE Neurons Chat1 vs Neurons ChAT Other'
            ),
            'add_MA_cts_MA_Avg_DGE_NeuronChat2_vs_Neuron_ChAT_Other' => array(
                'name' => 'MA Avg DGE NeuronChat2 vs Neuron ChAT Other'
            ),
            'add_MA_cts_MA_Avg_DGE_NeuronChat3_vs_Neuron_ChAT_Other' => array(
                'name' => 'MA Avg DGE NeuronChat3 vs Neuron ChAT Other'
            ),
            'add_MA_cts_MA_Avg_DGE_NeuronNos1_vs_Neuron_Nos_Other' => array(
                'name' => 'MA Avg DGE NeuronNos1 vs Neuron Nos Other'
            ),
            'add_MA_cts_MA_Avg_DGE_NeuronNos2_vs_Neuron_Nos_Other' => array(
                'name' => 'MA Avg DGE NeuronNos2 vs Neuron Nos Other'
            ),
            'add_MA_cts_MA_Avg_DGE_NeuronNos3_vs_Neuron_Nos_Other' => array(
                'name' => 'MA Avg DGE NeuronNos3 vs Neuron Nos Other'
            ),
            'add_MA_cts_MA_Avg_DGE_NeuronsNOSChat_vs_ChatOther' => array(
                'name' => 'MA Avg DGE NeuronsNOSChat vs ChatOther'
            ),
            'add_MA_cts_MA_Avg_DGE_NeuronsNOSChat_vs_NeuronsNosOthers' => array(
                'name' => 'MA Avg DGE NeuronsNOSChat vs NeuronsNosOthers'
            ),
            'add_MA_cts_MA_Avg_DGE_Neurons5HT_vs_NeuronsNos' => array(
                'name' => 'MA Avg DGE Neurons5HT vs NeuronsNos'
            ),
            'add_MA_cts_MA_Avg_DGE_Neurons5HT_vs_NeuronsChat' => array(
                'name' => 'MA Avg DGE Neurons5HT vs NeuronsChat'
            ),
            'add_MA_cts_MA_Avg_DGE_Chat1_vs_OtherUMAPChAT' => array(
                'name' => 'MA Avg DGE Chat1 vs OtherUMAPChAT'
            ),
            'add_MA_cts_MA_Avg_DGE_Chat2_vs_OtherUMAPChAT' => array(
                'name' => 'MA Avg DGE Chat2 vs OtherUMAPChAT'
            ),
            'add_MA_cts_MA_Avg_DGE_Chat3_vs_OtherUMAPChAT' => array(
                'name' => 'MA Avg DGE Chat3 vs OtherUMAPChAT'
            ),
            'add_MA_cts_MA_Avg_DGE_NOS1_vs_OtherUMAPNOS' => array(
                'name' => 'MA Avg DGE NOS1 vs OtherUMAPNOS'
            ),
            'add_MA_cts_MA_Avg_DGE_NOS2_vs_OtherUMAPNOS' => array(
                'name' => 'MA Avg DGE NOS2 vs OtherUMAPNOS'
            ),
            'add_MA_cts_MA_Avg_DGE_NOS3_vs_OtherUMAPNOS' => array(
                'name' => 'MA Avg DGE NOS3 vs OtherUMAPNOS'
            ),
            'add_MA_cts_MA_Avg_DGE_C5HT_vs_UMAPNOS' => array(
                'name' => 'MA Avg DGE C5HT vs UMAPNOS'
            ),
            'add_MA_cts_MA_Avg_DGE_C5HT_vs_UMAPChAT' => array(
                'name' => 'MA Avg DGE C5HT vs UMAPChAT'
            ),
            'add_MA_cts_MA_Avg_DGE_Other1_vs_UMAPChAT' => array(
                'name' => 'MA Avg DGE Other1 vs UMAPChAT'
            ),
            'add_MA_cts_MA_Avg_DGE_Other1_vs_ChAT' => array(
                'name' => 'MA Avg DGE Other1 vs ChAT'
            ),
            'add_MA_cts_MA_Avg_DGE_Other1_vs_ NeuronsNOS' => array(
                'name' => 'MA Avg DGE Other1 vs  NeuronsNOS'
            ),
            'add_MA_cts_MA_Avg_DGE_Other1_vs_ UMAPNOS' => array(
                'name' => 'MA Avg DGE Other1 vs  UMAPNOS'
            ),
            'add_MA_cts_MA_Avg_DGE_Other1_vs_Neurons5HT' => array(
                'name' => 'MA Avg DGE Other1 vs Neurons5HT'
            ),
            'add_MA_cts_MA_Avg_DGE_Other1_vs_Glia' => array(
                'name' => 'MA Avg DGE Other1 vs Glia'
            ),
            'add_MA_cts_MA_Avg_DGE_Other1_vs_Neurons5HT' => array(
                'name' => 'MA Avg DGE Other1 vs Neurons5HT'
            ),
            'add_MA_cts_MA_Avg_DGE_Other1_vs_Neuron' => array(
                'name' => 'MA Avg DGE Other1 vs Neuron'
            ),
            'add_MA_cts_MA_Avg_DGE_Other1_vs_Chat3' => array(
                'name' => 'MA Avg DGE Other1 vs Chat3'
            ),
            'add_counts_C5HT_Residuals' => array(
                'name' => 'C5HT Residuals'
            ),
            'add_counts_ChAT1_Residuals' => array(
                'name' => 'ChAT1 Residuals'
            ),
            'add_counts_ChAT2_Residuals' => array(
                'name' => 'ChAT2 Residuals'
            ),
            'add_counts_ChAT3_Residuals' => array(
                'name' => 'ChAT3 Residuals'
            ),
            'add_counts_Glia_Residuals' => array(
                'name' => 'Glia Residuals'
            ),
            'add_counts_NOS1_Residuals' => array(
                'name' => 'NOS1 Residuals'
            ),
            'add_counts_NOS2_Residuals' => array(
                'name' => 'NOS2 Residuals'
            ),
            'add_counts_NOS3_Residuals' => array(
                'name' => 'NOS3 Residuals'
            ),
            'add_counts_NOSChAT_Residuals' => array(
                'name' => 'NOSChAT Residuals'
            ),
            'add_counts_Other1_Residuals' => array(
                'name' => 'Other1 Residuals'
            ),
            'add_counts_Other2_Residuals' => array(
                'name' => 'Other2 Residuals'
            ),
            'add_counts_Other3_Residuals' => array(
                'name' => 'Other3 Residuals'
            ),
            'add_counts_Other4_Residuals' => array(
                'name' => 'Other4 Residuals'
            )
        )
    )
//End scatterplot
);
