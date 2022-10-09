<?php

return array(
    'lab' => array(
        'name' => 'Swanton DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'csl_data',
    'data_db' => array(
            'cat_table_name' => 'csl361_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'p361_rna_seq_table',
    'primary_gene_symbol' => 'hgnc_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_B_BCD3pos_65_TPM' => array(
            'color' => '#F8766D',
            'name' => 'B BCD3pos 65 TPM'
        ),
        'norm_counts_B_BCD3pos_71_TPM' => array(
            'color' => '#F8766D',
            'name' => 'B BCD3pos 71 TPM'
        ),
        'norm_counts_B_BCD3pos_80_TPM' => array(
            'color' => '#F8766D',
            'name' => 'B BCD3pos 80 TPM'
        ),
        'norm_counts_B_BCD3pos_83_TPM' => array(
            'color' => '#F8766D',
            'name' => 'B BCD3pos 83 TPM'
        ),
        'norm_counts_B_BCD3pos_85_TPM' => array(
            'color' => '#F8766D',
            'name' => 'B BCD3pos 85 TPM'
        ),
        'norm_counts_B_BNeuts_65_TPM' => array(
            'color' => '#E88526',
            'name' => 'B BNeuts 65 TPM'
        ),
        'norm_counts_B_BNeuts_71_TPM' => array(
            'color' => '#E88526',
            'name' => 'B BNeuts 71 TPM'
        ),
        'norm_counts_B_BNeuts_81_TPM' => array(
            'color' => '#E88526',
            'name' => 'B BNeuts 81 TPM'
        ),
        'norm_counts_B_BNeuts_83_TPM' => array(
            'color' => '#E88526',
            'name' => 'B BNeuts 83 TPM'
        ),
        'norm_counts_B_BNeuts_85_TPM' => array(
            'color' => '#E88526',
            'name' => 'B BNeuts 85 TPM'
        ),
        'norm_counts_C_CAF_65_TPM' => array(
            'color' => '#D39200',
            'name' => 'C CAF 65 TPM'
        ),
        'norm_counts_C_CAF_71_TPM' => array(
            'color' => '#D39200',
            'name' => 'C CAF 71 TPM'
        ),
        'norm_counts_C_CAF_81_TPM' => array(
            'color' => '#D39200',
            'name' => 'C CAF 81 TPM'
        ),
        'norm_counts_N_NCD31pos_65_TPM' => array(
            'color' => '#B79F00',
            'name' => 'N NCD31pos 65 TPM'
        ),
        'norm_counts_N_NCD31pos_71_TPM' => array(
            'color' => '#B79F00',
            'name' => 'N NCD31pos 71 TPM'
        ),
        'norm_counts_N_NCD31pos_81_TPM' => array(
            'color' => '#B79F00',
            'name' => 'N NCD31pos 81 TPM'
        ),
        'norm_counts_N_NCD31pos_83_TPM' => array(
            'color' => '#B79F00',
            'name' => 'N NCD31pos 83 TPM'
        ),
        'norm_counts_N_NCD31pos_85_TPM' => array(
            'color' => '#B79F00',
            'name' => 'N NCD31pos 85 TPM'
        ),
        'norm_counts_N_NCD3pos_65_TPM' => array(
            'color' => '#93AA00',
            'name' => 'N NCD3pos 65 TPM'
        ),
        'norm_counts_N_NCD3pos_71_TPM' => array(
            'color' => '#93AA00',
            'name' => 'N NCD3pos 71 TPM'
        ),
        'norm_counts_N_NCD3pos_81_TPM' => array(
            'color' => '#93AA00',
            'name' => 'N NCD3pos 81 TPM'
        ),
        'norm_counts_N_NCD3pos_83_TPM' => array(
            'color' => '#93AA00',
            'name' => 'N NCD3pos 83 TPM'
        ),
        'norm_counts_N_NCD3pos_85_TPM' => array(
            'color' => '#93AA00',
            'name' => 'N NCD3pos 85 TPM'
        ),
        'norm_counts_N_NCD45neg_65_TPM' => array(
            'color' => '#5EB300',
            'name' => 'N NCD45neg 65 TPM'
        ),
        'norm_counts_N_NCD45neg_71_TPM' => array(
            'color' => '#5EB300',
            'name' => 'N NCD45neg 71 TPM'
        ),
        'norm_counts_N_NCD45neg_81_TPM' => array(
            'color' => '#5EB300',
            'name' => 'N NCD45neg 81 TPM'
        ),
        'norm_counts_N_NCD45neg_83_TPM' => array(
            'color' => '#5EB300',
            'name' => 'N NCD45neg 83 TPM'
        ),
        'norm_counts_N_NCD45neg_85_TPM' => array(
            'color' => '#5EB300',
            'name' => 'N NCD45neg 85 TPM'
        ),
        'norm_counts_N_NCD45pos_65_TPM' => array(
            'color' => '#00BA38',
            'name' => 'N NCD45pos 65 TPM'
        ),
        'norm_counts_N_NCD45pos_71_TPM' => array(
            'color' => '#00BA38',
            'name' => 'N NCD45pos 71 TPM'
        ),
        'norm_counts_N_NCD45pos_81_TPM' => array(
            'color' => '#00BA38',
            'name' => 'N NCD45pos 81 TPM'
        ),
        'norm_counts_N_NCD45pos_83_TPM' => array(
            'color' => '#00BA38',
            'name' => 'N NCD45pos 83 TPM'
        ),
        'norm_counts_N_NCD45pos_85_TPM' => array(
            'color' => '#00BA38',
            'name' => 'N NCD45pos 85 TPM'
        ),
        'norm_counts_N_NCD90pos_65_TPM' => array(
            'color' => '#00BF74',
            'name' => 'N NCD90pos 65 TPM'
        ),
        'norm_counts_N_NCD90pos_71_TPM' => array(
            'color' => '#00BF74',
            'name' => 'N NCD90pos 71 TPM'
        ),
        'norm_counts_N_NCD90pos_81_TPM' => array(
            'color' => '#00BF74',
            'name' => 'N NCD90pos 81 TPM'
        ),
        'norm_counts_N_NCD90pos_83_TPM' => array(
            'color' => '#00BF74',
            'name' => 'N NCD90pos 83 TPM'
        ),
        'norm_counts_N_NCD90pos_85_TPM' => array(
            'color' => '#00BF74',
            'name' => 'N NCD90pos 85 TPM'
        ),
        'norm_counts_N_NF_65_TPM' => array(
            'color' => '#00C19F',
            'name' => 'N NF 65 TPM'
        ),
        'norm_counts_N_NF_71_TPM' => array(
            'color' => '#00C19F',
            'name' => 'N NF 71 TPM'
        ),
        'norm_counts_N_NF_81_TPM' => array(
            'color' => '#00C19F',
            'name' => 'N NF 81 TPM'
        ),
        'norm_counts_N_NMacs_65_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'N NMacs 65 TPM'
        ),
        'norm_counts_N_NMacs_71_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'N NMacs 71 TPM'
        ),
        'norm_counts_N_NMacs_81_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'N NMacs 81 TPM'
        ),
        'norm_counts_N_NMacs_83_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'N NMacs 83 TPM'
        ),
        'norm_counts_N_NMacs_85_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'N NMacs 85 TPM'
        ),
        'norm_counts_N_NNeuts_65_TPM' => array(
            'color' => '#00B9E3',
            'name' => 'N NNeuts 65 TPM'
        ),
        'norm_counts_N_NNeuts_71_TPM' => array(
            'color' => '#00B9E3',
            'name' => 'N NNeuts 71 TPM'
        ),
        'norm_counts_N_NNeuts_81_TPM' => array(
            'color' => '#00B9E3',
            'name' => 'N NNeuts 81 TPM'
        ),
        'norm_counts_N_NNeuts_83_TPM' => array(
            'color' => '#00B9E3',
            'name' => 'N NNeuts 83 TPM'
        ),
        'norm_counts_N_NNeuts_85_TPM' => array(
            'color' => '#00B9E3',
            'name' => 'N NNeuts 85 TPM'
        ),
        'norm_counts_T_TCD31pos_65_TPM' => array(
            'color' => '#00ADFA',
            'name' => 'T TCD31pos 65 TPM'
        ),
        'norm_counts_T_TCD31pos_71_TPM' => array(
            'color' => '#00ADFA',
            'name' => 'T TCD31pos 71 TPM'
        ),
        'norm_counts_T_TCD31pos_81_TPM' => array(
            'color' => '#00ADFA',
            'name' => 'T TCD31pos 81 TPM'
        ),
        'norm_counts_T_TCD31pos_83_TPM' => array(
            'color' => '#00ADFA',
            'name' => 'T TCD31pos 83 TPM'
        ),
        'norm_counts_T_TCD31pos_85_TPM' => array(
            'color' => '#00ADFA',
            'name' => 'T TCD31pos 85 TPM'
        ),
        'norm_counts_T_TCD3pos_65_TPM' => array(
            'color' => '#619CFF',
            'name' => 'T TCD3pos 65 TPM'
        ),
        'norm_counts_T_TCD3pos_71_TPM' => array(
            'color' => '#619CFF',
            'name' => 'T TCD3pos 71 TPM'
        ),
        'norm_counts_T_TCD3pos_81_TPM' => array(
            'color' => '#619CFF',
            'name' => 'T TCD3pos 81 TPM'
        ),
        'norm_counts_T_TCD3pos_83_TPM' => array(
            'color' => '#619CFF',
            'name' => 'T TCD3pos 83 TPM'
        ),
        'norm_counts_T_TCD3pos_85_TPM' => array(
            'color' => '#619CFF',
            'name' => 'T TCD3pos 85 TPM'
        ),
        'norm_counts_T_TCD45neg_65_TPM' => array(
            'color' => '#AE87FF',
            'name' => 'T TCD45neg 65 TPM'
        ),
        'norm_counts_T_TCD45neg_71_TPM' => array(
            'color' => '#AE87FF',
            'name' => 'T TCD45neg 71 TPM'
        ),
        'norm_counts_T_TCD45neg_81_TPM' => array(
            'color' => '#AE87FF',
            'name' => 'T TCD45neg 81 TPM'
        ),
        'norm_counts_T_TCD45neg_83_TPM' => array(
            'color' => '#AE87FF',
            'name' => 'T TCD45neg 83 TPM'
        ),
        'norm_counts_T_TCD45neg_85_TPM' => array(
            'color' => '#AE87FF',
            'name' => 'T TCD45neg 85 TPM'
        ),
        'norm_counts_T_TCD45pos_65_TPM' => array(
            'color' => '#DB72FB',
            'name' => 'T TCD45pos 65 TPM'
        ),
        'norm_counts_T_TCD45pos_71_TPM' => array(
            'color' => '#DB72FB',
            'name' => 'T TCD45pos 71 TPM'
        ),
        'norm_counts_T_TCD45pos_81_TPM' => array(
            'color' => '#DB72FB',
            'name' => 'T TCD45pos 81 TPM'
        ),
        'norm_counts_T_TCD45pos_83_TPM' => array(
            'color' => '#DB72FB',
            'name' => 'T TCD45pos 83 TPM'
        ),
        'norm_counts_T_TCD45pos_85_TPM' => array(
            'color' => '#DB72FB',
            'name' => 'T TCD45pos 85 TPM'
        ),
        'norm_counts_T_TCD90pos_65_TPM' => array(
            'color' => '#F564E3',
            'name' => 'T TCD90pos 65 TPM'
        ),
        'norm_counts_T_TCD90pos_71_TPM' => array(
            'color' => '#F564E3',
            'name' => 'T TCD90pos 71 TPM'
        ),
        'norm_counts_T_TCD90pos_81_TPM' => array(
            'color' => '#F564E3',
            'name' => 'T TCD90pos 81 TPM'
        ),
        'norm_counts_T_TCD90pos_83_TPM' => array(
            'color' => '#F564E3',
            'name' => 'T TCD90pos 83 TPM'
        ),
        'norm_counts_T_TCD90pos_85_TPM' => array(
            'color' => '#F564E3',
            'name' => 'T TCD90pos 85 TPM'
        ),
        'norm_counts_T_TMacs_65_TPM' => array(
            'color' => '#FF61C3',
            'name' => 'T TMacs 65 TPM'
        ),
        'norm_counts_T_TMacs_71_TPM' => array(
            'color' => '#FF61C3',
            'name' => 'T TMacs 71 TPM'
        ),
        'norm_counts_T_TMacs_81_TPM' => array(
            'color' => '#FF61C3',
            'name' => 'T TMacs 81 TPM'
        ),
        'norm_counts_T_TMacs_83_TPM' => array(
            'color' => '#FF61C3',
            'name' => 'T TMacs 83 TPM'
        ),
        'norm_counts_T_TMacs_85_TPM' => array(
            'color' => '#FF61C3',
            'name' => 'T TMacs 85 TPM'
        ),
        'norm_counts_T_TNeuts_65_TPM' => array(
            'color' => '#FF699C',
            'name' => 'T TNeuts 65 TPM'
        ),
        'norm_counts_T_TNeuts_71_TPM' => array(
            'color' => '#FF699C',
            'name' => 'T TNeuts 71 TPM'
        ),
        'norm_counts_T_TNeuts_81_TPM' => array(
            'color' => '#FF699C',
            'name' => 'T TNeuts 81 TPM'
        ),
        'norm_counts_T_TNeuts_83_TPM' => array(
            'color' => '#FF699C',
            'name' => 'T TNeuts 83 TPM'
        ),
        'norm_counts_T_TNeuts_85_TPM' => array(
            'color' => '#FF699C',
            'name' => 'T TNeuts 85 TPM'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_B_BCD3pos_65_TPM','lg2_avg_B_BCD3pos_71_TPM','lg2_avg_B_BCD3pos_80_TPM','lg2_avg_B_BCD3pos_83_TPM','lg2_avg_B_BCD3pos_85_TPM','lg2_avg_B_BNeuts_65_TPM','lg2_avg_B_BNeuts_71_TPM','lg2_avg_B_BNeuts_81_TPM','lg2_avg_B_BNeuts_83_TPM','lg2_avg_B_BNeuts_85_TPM','lg2_avg_C_CAF_65_TPM','lg2_avg_C_CAF_71_TPM','lg2_avg_C_CAF_81_TPM','lg2_avg_N_NCD31pos_65_TPM','lg2_avg_N_NCD31pos_71_TPM','lg2_avg_N_NCD31pos_81_TPM','lg2_avg_N_NCD31pos_83_TPM','lg2_avg_N_NCD31pos_85_TPM','lg2_avg_N_NCD3pos_65_TPM','lg2_avg_N_NCD3pos_71_TPM','lg2_avg_N_NCD3pos_81_TPM','lg2_avg_N_NCD3pos_83_TPM','lg2_avg_N_NCD3pos_85_TPM','lg2_avg_N_NCD45neg_65_TPM','lg2_avg_N_NCD45neg_71_TPM','lg2_avg_N_NCD45neg_81_TPM','lg2_avg_N_NCD45neg_83_TPM','lg2_avg_N_NCD45neg_85_TPM','lg2_avg_N_NCD45pos_65_TPM','lg2_avg_N_NCD45pos_71_TPM','lg2_avg_N_NCD45pos_81_TPM','lg2_avg_N_NCD45pos_83_TPM','lg2_avg_N_NCD45pos_85_TPM','lg2_avg_N_NCD90pos_65_TPM','lg2_avg_N_NCD90pos_71_TPM','lg2_avg_N_NCD90pos_81_TPM','lg2_avg_N_NCD90pos_83_TPM','lg2_avg_N_NCD90pos_85_TPM','lg2_avg_N_NF_65_TPM','lg2_avg_N_NF_71_TPM','lg2_avg_N_NF_81_TPM','lg2_avg_N_NMacs_65_TPM','lg2_avg_N_NMacs_71_TPM','lg2_avg_N_NMacs_81_TPM','lg2_avg_N_NMacs_83_TPM','lg2_avg_N_NMacs_85_TPM','lg2_avg_N_NNeuts_65_TPM','lg2_avg_N_NNeuts_71_TPM','lg2_avg_N_NNeuts_81_TPM','lg2_avg_N_NNeuts_83_TPM','lg2_avg_N_NNeuts_85_TPM','lg2_avg_T_TCD31pos_65_TPM','lg2_avg_T_TCD31pos_71_TPM','lg2_avg_T_TCD31pos_81_TPM','lg2_avg_T_TCD31pos_83_TPM','lg2_avg_T_TCD31pos_85_TPM','lg2_avg_T_TCD3pos_65_TPM','lg2_avg_T_TCD3pos_71_TPM','lg2_avg_T_TCD3pos_81_TPM','lg2_avg_T_TCD3pos_83_TPM','lg2_avg_T_TCD3pos_85_TPM','lg2_avg_T_TCD45neg_65_TPM','lg2_avg_T_TCD45neg_71_TPM','lg2_avg_T_TCD45neg_81_TPM','lg2_avg_T_TCD45neg_83_TPM','lg2_avg_T_TCD45neg_85_TPM','lg2_avg_T_TCD45pos_65_TPM','lg2_avg_T_TCD45pos_71_TPM','lg2_avg_T_TCD45pos_81_TPM','lg2_avg_T_TCD45pos_83_TPM','lg2_avg_T_TCD45pos_85_TPM','lg2_avg_T_TCD90pos_65_TPM','lg2_avg_T_TCD90pos_71_TPM','lg2_avg_T_TCD90pos_81_TPM','lg2_avg_T_TCD90pos_83_TPM','lg2_avg_T_TCD90pos_85_TPM','lg2_avg_T_TMacs_65_TPM','lg2_avg_T_TMacs_71_TPM','lg2_avg_T_TMacs_81_TPM','lg2_avg_T_TMacs_83_TPM','lg2_avg_T_TMacs_85_TPM','lg2_avg_T_TNeuts_65_TPM','lg2_avg_T_TNeuts_71_TPM','lg2_avg_T_TNeuts_81_TPM','lg2_avg_T_TNeuts_83_TPM','lg2_avg_T_TNeuts_85_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_T_TCD45pos_vs_N_NCD45pos' => array(
            'name' => 'logFC T TCD45pos vs N NCD45pos',
            'slider_min' => -6,
            'slider_max' => 6,
            'default_low' => -6,
            'default_high' => 6
        ),
        'contrast_1_padj_T_TCD45pos_vs_N_NCD45pos' => array(
            'name' => 'padj T TCD45pos vs N NCD45pos',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_logFC_T_TCD45neg_vs_N_NCD45neg' => array(
            'name' => 'logFC T TCD45neg vs N NCD45neg',
            'slider_min' => -9,
            'slider_max' => 8,
            'default_low' => -9,
            'default_high' => 8
        ),
        'contrast_2_padj_T_TCD45neg_vs_N_NCD45neg' => array(
            'name' => 'padj T TCD45neg vs N NCD45neg',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_logFC_T_TCD90pos_vs_N_NCD90pos' => array(
            'name' => 'logFC T TCD90pos vs N NCD90pos',
            'slider_min' => -9,
            'slider_max' => 9,
            'default_low' => -9,
            'default_high' => 9
        ),
        'contrast_3_padj_T_TCD90pos_vs_N_NCD90pos' => array(
            'name' => 'padj T TCD90pos vs N NCD90pos',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_logFC_T_TNeuts_vs_N_NNeuts' => array(
            'name' => 'logFC T TNeuts vs N NNeuts',
            'slider_min' => -7,
            'slider_max' => 5,
            'default_low' => -7,
            'default_high' => 5
        ),
        'contrast_4_padj_T_TNeuts_vs_N_NNeuts' => array(
            'name' => 'padj T TNeuts vs N NNeuts',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_5_logFC_T_TMacs_vs_N_NMacs' => array(
            'name' => 'logFC T TMacs vs N NMacs',
            'slider_min' => -6,
            'slider_max' => 7,
            'default_low' => -6,
            'default_high' => 7
        ),
        'contrast_5_padj_T_TMacs_vs_N_NMacs' => array(
            'name' => 'padj T TMacs vs N NMacs',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_6_logFC_T_TCD45neg_vs_N_NCD45neg' => array(
            'name' => 'logFC T TCD45neg vs N NCD45neg',
            'slider_min' => -9,
            'slider_max' => 8,
            'default_low' => -9,
            'default_high' => 8
        ),
        'contrast_6_padj_T_TCD45neg_vs_N_NCD45neg' => array(
            'name' => 'padj T TCD45neg vs N NCD45neg',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_L_lg10p_LRT_overall_T_vs_N' => array(
            'name' => 'lg10p LRT overall T vs N',
            'slider_min' => 0,
            'slider_max' => 5,
            'default_low' => 0,
            'default_high' => 5
        ),
        'contrast_L_lg10p_LRT_patient' => array(
            'name' => 'lg10p LRT patient',
            'slider_min' => 0,
            'slider_max' => 17,
            'default_low' => 0,
            'default_high' => 17
        ),
        'contrast_L_lg10p_LRT_Cell_Type' => array(
            'name' => 'lg10p LRT Cell Type',
            'slider_min' => 0,
            'slider_max' => 56,
            'default_low' => 0,
            'default_high' => 56
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'p361_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_T_TCD45pos_vs_N_NCD45pos',
        'default-y' => 'contrast_1_lg10p_T_TCD45pos_vs_N_NCD45pos',
        'selection' => array(
            'contrast_1_logFC_T_TCD45pos_vs_N_NCD45pos' => array(
                'name' => 'logFC T TCD45pos vs N NCD45pos'
            ),
            'contrast_2_logFC_T_TCD45neg_vs_N_NCD45neg' => array(
                'name' => 'logFC T TCD45neg vs N NCD45neg'
            ),
            'contrast_3_logFC_T_TCD90pos_vs_N_NCD90pos' => array(
                'name' => 'logFC T TCD90pos vs N NCD90pos'
            ),
            'contrast_4_logFC_T_TNeuts_vs_N_NNeuts' => array(
                'name' => 'logFC T TNeuts vs N NNeuts'
            ),
            'contrast_5_logFC_T_TMacs_vs_N_NMacs' => array(
                'name' => 'logFC T TMacs vs N NMacs'
            ),
            'contrast_6_logFC_T_TCD45neg_vs_N_NCD45neg' => array(
                'name' => 'logFC T TCD45neg vs N NCD45neg'
            ),
            'contrast_1_lg10p_T_TCD45pos_vs_N_NCD45pos' => array(
                'name' => 'lg10p T TCD45pos vs N NCD45pos'
            ),
            'contrast_2_lg10p_T_TCD45neg_vs_N_NCD45neg' => array(
                'name' => 'lg10p T TCD45neg vs N NCD45neg'
            ),
            'contrast_3_lg10p_T_TCD90pos_vs_N_NCD90pos' => array(
                'name' => 'lg10p T TCD90pos vs N NCD90pos'
            ),
            'contrast_4_lg10p_T_TNeuts_vs_N_NNeuts' => array(
                'name' => 'lg10p T TNeuts vs N NNeuts'
            ),
            'contrast_5_lg10p_T_TMacs_vs_N_NMacs' => array(
                'name' => 'lg10p T TMacs vs N NMacs'
            ),
            'contrast_6_lg10p_T_TCD45neg_vs_N_NCD45neg' => array(
                'name' => 'lg10p T TCD45neg vs N NCD45neg'
            ),
            'contrast_L_lg10p_LRT_overall_T_vs_N' => array(
                'name' => 'lg10p LRT overall T vs N'
            ),
            'contrast_L_lg10p_LRT_patient' => array(
                'name' => 'lg10p LRT patient'
            ),
            'contrast_L_lg10p_LRT_Cell_Type' => array(
                'name' => 'lg10p LRT Cell Type'
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
            'contrast_1_lg2BaseMean_T_TCD45pos_vs_N_NCD45pos' => array(
                'name' => 'lg2BaseMean T TCD45pos vs N NCD45pos'
            ),
            'contrast_2_lg2BaseMean_T_TCD45neg_vs_N_NCD45neg' => array(
                'name' => 'lg2BaseMean T TCD45neg vs N NCD45neg'
            ),
            'contrast_3_lg2BaseMean_T_TCD90pos_vs_N_NCD90pos' => array(
                'name' => 'lg2BaseMean T TCD90pos vs N NCD90pos'
            ),
            'contrast_4_lg2BaseMean_T_TNeuts_vs_N_NNeuts' => array(
                'name' => 'lg2BaseMean T TNeuts vs N NNeuts'
            ),
            'contrast_5_lg2BaseMean_T_TMacs_vs_N_NMacs' => array(
                'name' => 'lg2BaseMean T TMacs vs N NMacs'
            ),
            'contrast_6_lg2BaseMean_T_TCD45neg_vs_N_NCD45neg' => array(
                'name' => 'lg2BaseMean T TCD45neg vs N NCD45neg'
            ),
            'contrast_L_lg2BaseMean_LRT_overall_T_vs_N' => array(
                'name' => 'lg2BaseMean LRT overall T vs N'
            ),
            'contrast_L_lg2BaseMean_LRT_patient' => array(
                'name' => 'lg2BaseMean LRT patient'
            ),
            'contrast_L_lg2BaseMean_LRT_Cell_Type' => array(
                'name' => 'lg2BaseMean LRT Cell Type'
            )
        )
    )
//End scatterplot
);
