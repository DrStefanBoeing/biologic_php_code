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
            'cat_table_name' => 'vpl238_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'p238_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'log2 Row-averaged TPM Values',
        'pointer' => 'Value '
    ),

    'samples' => array(
        'norm_counts_GF_ColNeg_1' => array(
            'color' => '#8DD3C7',
            'name' => 'GF ColNeg 1'
        ),
        'norm_counts_GF_ColNeg_2' => array(
            'color' => '#8DD3C7',
            'name' => 'GF ColNeg 2'
        ),
        'norm_counts_GF_ColNeg_3' => array(
            'color' => '#8DD3C7',
            'name' => 'GF ColNeg 3'
        ),
        'norm_counts_GF_ColPos_1' => array(
            'color' => '#D9D7C9',
            'name' => 'GF ColPos 1'
        ),
        'norm_counts_GF_ColPos_2' => array(
            'color' => '#D9D7C9',
            'name' => 'GF ColPos 2'
        ),
        'norm_counts_GF_ColPos_3' => array(
            'color' => '#D9D7C9',
            'name' => 'GF ColPos 3'
        ),
        'norm_counts_GF_SiNeg_1' => array(
            'color' => '#E9877F',
            'name' => 'GF SiNeg 1'
        ),
        'norm_counts_GF_SiNeg_2' => array(
            'color' => '#E9877F',
            'name' => 'GF SiNeg 2'
        ),
        'norm_counts_GF_SiNeg_3' => array(
            'color' => '#E9877F',
            'name' => 'GF SiNeg 3'
        ),
        'norm_counts_GF_SiPos_1' => array(
            'color' => '#D9B382',
            'name' => 'GF SiPos 1'
        ),
        'norm_counts_GF_SiPos_2' => array(
            'color' => '#D9B382',
            'name' => 'GF SiPos 2'
        ),
        'norm_counts_GF_SiPos_3' => array(
            'color' => '#D9B382',
            'name' => 'GF SiPos 3'
        ),
        'norm_counts_SPF_ColNeg_1' => array(
            'color' => '#C7D98C',
            'name' => 'SPF ColNeg 1'
        ),
        'norm_counts_SPF_ColNeg_2' => array(
            'color' => '#C7D98C',
            'name' => 'SPF ColNeg 2'
        ),
        'norm_counts_SPF_ColNeg_3' => array(
            'color' => '#C7D98C',
            'name' => 'SPF ColNeg 3'
        ),
        'norm_counts_SPF_ColNeg_4' => array(
            'color' => '#C7D98C',
            'name' => 'SPF ColNeg 4'
        ),
        'norm_counts_SPF_ColPos_1' => array(
            'color' => '#DED7DA',
            'name' => 'SPF ColPos 1'
        ),
        'norm_counts_SPF_ColPos_2' => array(
            'color' => '#DED7DA',
            'name' => 'SPF ColPos 2'
        ),
        'norm_counts_SPF_ColPos_3' => array(
            'color' => '#DED7DA',
            'name' => 'SPF ColPos 3'
        ),
        'norm_counts_SPF_ColPos_4' => array(
            'color' => '#DED7DA',
            'name' => 'SPF ColPos 4'
        ),
        'norm_counts_SPF_SiNeg_1' => array(
            'color' => '#C2ADC0',
            'name' => 'SPF SiNeg 1'
        ),
        'norm_counts_SPF_SiNeg_2' => array(
            'color' => '#C2ADC0',
            'name' => 'SPF SiNeg 2'
        ),
        'norm_counts_SPF_SiNeg_3' => array(
            'color' => '#C2ADC0',
            'name' => 'SPF SiNeg 3'
        ),
        'norm_counts_SPF_SiNeg_4' => array(
            'color' => '#C2ADC0',
            'name' => 'SPF SiNeg 4'
        ),
        'norm_counts_SPF_SiPos_1' => array(
            'color' => '#FFED6F',
            'name' => 'SPF SiPos 1'
        ),
        'norm_counts_SPF_SiPos_2' => array(
            'color' => '#FFED6F',
            'name' => 'SPF SiPos 2'
        ),
        'norm_counts_SPF_SiPos_3' => array(
            'color' => '#FFED6F',
            'name' => 'SPF SiPos 3'
        ),
        'norm_counts_SPF_SiPos_4' => array(
            'color' => '#FFED6F',
            'name' => 'SPF SiPos 4'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'Values for all Samples',
        'sidelabel' => 'Counts'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_GF_SiPos_2','lg2_avg_SPF_SiPos_2','lg2_avg_SPF_SiPos_3','lg2_avg_GF_SiPos_3','lg2_avg_GF_SiPos_1','lg2_avg_SPF_SiPos_1','lg2_avg_SPF_SiPos_4','lg2_avg_GF_ColPos_3','lg2_avg_SPF_ColPos_2','lg2_avg_SPF_ColPos_4','lg2_avg_GF_ColPos_1','lg2_avg_SPF_ColPos_3','lg2_avg_SPF_ColPos_1','lg2_avg_GF_ColPos_2','lg2_avg_GF_SiNeg_2','lg2_avg_SPF_SiNeg_1','lg2_avg_SPF_SiNeg_3','lg2_avg_SPF_SiNeg_4','lg2_avg_SPF_SiNeg_2','lg2_avg_GF_SiNeg_1','lg2_avg_GF_SiNeg_3','lg2_avg_GF_ColNeg_1','lg2_avg_GF_ColNeg_2','lg2_avg_SPF_ColNeg_3','lg2_avg_SPF_ColNeg_4','lg2_avg_SPF_ColNeg_1','lg2_avg_SPF_ColNeg_2','lg2_avg_GF_ColNeg_3'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_GF_SiPos_vs_SPF_SiPos' => array(
            'name' => 'logFC GF SiPos vs SPF SiPos',
            'slider_min' => -4,
            'slider_max' => 3,
            'default_low' => -4,
            'default_high' => 3
        ),
        'contrast_2_logFC_SPF_ColPos_vs_GF_ColPos' => array(
            'name' => 'logFC SPF ColPos vs GF ColPos',
            'slider_min' => -5,
            'slider_max' => 5,
            'default_low' => -5,
            'default_high' => 5
        ),
        'contrast_3_logFC_SPF_SiPos_vs_SPF_SiNeg' => array(
            'name' => 'logFC SPF SiPos vs SPF SiNeg',
            'slider_min' => -9,
            'slider_max' => 10,
            'default_low' => -9,
            'default_high' => 10
        ),
        'contrast_4_logFC_GF_SiPos_vs_GF_SiNeg' => array(
            'name' => 'logFC GF SiPos vs GF SiNeg',
            'slider_min' => -12,
            'slider_max' => 10,
            'default_low' => -12,
            'default_high' => 10
        ),
        'contrast_5_logFC_SPF_ColPos_vs_SPF_ColNeg' => array(
            'name' => 'logFC SPF ColPos vs SPF ColNeg',
            'slider_min' => -11,
            'slider_max' => 8,
            'default_low' => -11,
            'default_high' => 8
        ),
        'contrast_6_logFC_GF_ColPos_vs_GF_ColNeg' => array(
            'name' => 'logFC GF ColPos vs GF ColNeg',
            'slider_min' => -12,
            'slider_max' => 9,
            'default_low' => -12,
            'default_high' => 9
        ),
        'contrast_7_logFC_SPF_ColPos_vs_SPF_SiPos' => array(
            'name' => 'logFC SPF ColPos vs SPF SiPos',
            'slider_min' => -7,
            'slider_max' => 10,
            'default_low' => -7,
            'default_high' => 10
        ),
        'contrast_8_logFC_GF_ColPos_vs_GF_SiPos' => array(
            'name' => 'logFC GF ColPos vs GF SiPos',
            'slider_min' => -8,
            'slider_max' => 6,
            'default_low' => -8,
            'default_high' => 6
        ),
        'contrast_1_padj_GF_SiPos_vs_SPF_SiPos' => array(
            'name' => 'padj GF SiPos vs SPF SiPos',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_padj_SPF_ColPos_vs_GF_ColPos' => array(
            'name' => 'padj SPF ColPos vs GF ColPos',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_padj_SPF_SiPos_vs_SPF_SiNeg' => array(
            'name' => 'padj SPF SiPos vs SPF SiNeg',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_padj_GF_SiPos_vs_GF_SiNeg' => array(
            'name' => 'padj GF SiPos vs GF SiNeg',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_5_padj_SPF_ColPos_vs_SPF_ColNeg' => array(
            'name' => 'padj SPF ColPos vs SPF ColNeg',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_6_padj_GF_ColPos_vs_GF_ColNeg' => array(
            'name' => 'padj GF ColPos vs GF ColNeg',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_7_padj_SPF_ColPos_vs_SPF_SiPos' => array(
            'name' => 'padj SPF ColPos vs SPF SiPos',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_8_padj_GF_ColPos_vs_GF_SiPos' => array(
            'name' => 'padj GF ColPos vs GF SiPos',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_G_padj_LRTsampleGroup' => array(
            'name' => 'padj LRTsampleGroup',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_D_padj_LRTdataseries' => array(
            'name' => 'padj LRTdataseries',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        )
    )
    ),
    // Scatterplot Parameters
    'scatterplot' => array(
            'default-x' => 'contrast_1_logFC_GF_SiPos_vs_SPF_SiPos',
            'default-y' => 'contrast_2_logFC_SPF_ColPos_vs_GF_ColPos',
        'selection' => array(
            'contrast_1_logFC_GF_SiPos_vs_SPF_SiPos' => array(
                'name' => 'logFC GF SiPos vs SPF SiPos'
            ),
            'contrast_2_logFC_SPF_ColPos_vs_GF_ColPos' => array(
                'name' => 'logFC SPF ColPos vs GF ColPos'
            ),
            'contrast_3_logFC_SPF_SiPos_vs_SPF_SiNeg' => array(
                'name' => 'logFC SPF SiPos vs SPF SiNeg'
            ),
            'contrast_4_logFC_GF_SiPos_vs_GF_SiNeg' => array(
                'name' => 'logFC GF SiPos vs GF SiNeg'
            ),
            'contrast_5_logFC_SPF_ColPos_vs_SPF_ColNeg' => array(
                'name' => 'logFC SPF ColPos vs SPF ColNeg'
            ),
            'contrast_6_logFC_GF_ColPos_vs_GF_ColNeg' => array(
                'name' => 'logFC GF ColPos vs GF ColNeg'
            ),
            'contrast_7_logFC_SPF_ColPos_vs_SPF_SiPos' => array(
                'name' => 'logFC SPF ColPos vs SPF SiPos'
            ),
            'contrast_8_logFC_GF_ColPos_vs_GF_SiPos' => array(
                'name' => 'logFC GF ColPos vs GF SiPos'
            ),
            'contrast_1_lg10p_GF_SiPos_vs_SPF_SiPos' => array(
                'name' => 'lg10p GF SiPos vs SPF SiPos'
            ),
            'contrast_2_lg10p_SPF_ColPos_vs_GF_ColPos' => array(
                'name' => 'lg10p SPF ColPos vs GF ColPos'
            ),
            'contrast_3_lg10p_SPF_SiPos_vs_SPF_SiNeg' => array(
                'name' => 'lg10p SPF SiPos vs SPF SiNeg'
            ),
            'contrast_4_lg10p_GF_SiPos_vs_GF_SiNeg' => array(
                'name' => 'lg10p GF SiPos vs GF SiNeg'
            ),
            'contrast_5_lg10p_SPF_ColPos_vs_SPF_ColNeg' => array(
                'name' => 'lg10p SPF ColPos vs SPF ColNeg'
            ),
            'contrast_6_lg10p_GF_ColPos_vs_GF_ColNeg' => array(
                'name' => 'lg10p GF ColPos vs GF ColNeg'
            ),
            'contrast_7_lg10p_SPF_ColPos_vs_SPF_SiPos' => array(
                'name' => 'lg10p SPF ColPos vs SPF SiPos'
            ),
            'contrast_8_lg10p_GF_ColPos_vs_GF_SiPos' => array(
                'name' => 'lg10p GF ColPos vs GF SiPos'
            ),
            'contrast_G_lg10p_LRTsampleGroup' => array(
                'name' => 'lg10p LRTsampleGroup'
            ),
            'contrast_D_lg10p_LRTdataseries' => array(
                'name' => 'lg10p LRTdataseries'
            )
        )
    )
//End scatterplot
);