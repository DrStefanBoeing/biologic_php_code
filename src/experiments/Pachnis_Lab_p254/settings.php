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
            'cat_table_name' => 'vpl254_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'p254_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'log2 Row-averaged TPM Values',
        'pointer' => 'Value '
    ),

    'samples' => array(
        'norm_counts_Bern_ColNeg_1' => array(
            'color' => '#8DD3C7',
            'name' => 'Bern ColNeg 1'
        ),
        'norm_counts_Bern_ColNeg_2' => array(
            'color' => '#8DD3C7',
            'name' => 'Bern ColNeg 2'
        ),
        'norm_counts_Bern_ColNeg_3' => array(
            'color' => '#8DD3C7',
            'name' => 'Bern ColNeg 3'
        ),
        'norm_counts_Bern_ColNeg_4' => array(
            'color' => '#8DD3C7',
            'name' => 'Bern ColNeg 4'
        ),
        'norm_counts_Bern_ColPos_1' => array(
            'color' => '#D9D7C9',
            'name' => 'Bern ColPos 1'
        ),
        'norm_counts_Bern_ColPos_2' => array(
            'color' => '#D9D7C9',
            'name' => 'Bern ColPos 2'
        ),
        'norm_counts_Bern_ColPos_3' => array(
            'color' => '#D9D7C9',
            'name' => 'Bern ColPos 3'
        ),
        'norm_counts_Bern_ColPos_4' => array(
            'color' => '#D9D7C9',
            'name' => 'Bern ColPos 4'
        ),
        'norm_counts_Bern_SiNeg_1' => array(
            'color' => '#E9877F',
            'name' => 'Bern SiNeg 1'
        ),
        'norm_counts_Bern_SiNeg_2' => array(
            'color' => '#E9877F',
            'name' => 'Bern SiNeg 2'
        ),
        'norm_counts_Bern_SiNeg_3' => array(
            'color' => '#E9877F',
            'name' => 'Bern SiNeg 3'
        ),
        'norm_counts_Bern_SiNeg_4' => array(
            'color' => '#E9877F',
            'name' => 'Bern SiNeg 4'
        ),
        'norm_counts_Bern_SiPos_1' => array(
            'color' => '#D9B382',
            'name' => 'Bern SiPos 1'
        ),
        'norm_counts_Bern_SiPos_2' => array(
            'color' => '#D9B382',
            'name' => 'Bern SiPos 2'
        ),
        'norm_counts_Bern_SiPos_3' => array(
            'color' => '#D9B382',
            'name' => 'Bern SiPos 3'
        ),
        'norm_counts_Bern_SiPos_4' => array(
            'color' => '#D9B382',
            'name' => 'Bern SiPos 4'
        ),
        'norm_counts_Crick_ColNeg_1' => array(
            'color' => '#C7D98C',
            'name' => 'Crick ColNeg 1'
        ),
        'norm_counts_Crick_ColNeg_2' => array(
            'color' => '#C7D98C',
            'name' => 'Crick ColNeg 2'
        ),
        'norm_counts_Crick_ColNeg_3' => array(
            'color' => '#C7D98C',
            'name' => 'Crick ColNeg 3'
        ),
        'norm_counts_Crick_ColNeg_4' => array(
            'color' => '#C7D98C',
            'name' => 'Crick ColNeg 4'
        ),
        'norm_counts_Crick_ColPos_1' => array(
            'color' => '#DED7DA',
            'name' => 'Crick ColPos 1'
        ),
        'norm_counts_Crick_ColPos_2' => array(
            'color' => '#DED7DA',
            'name' => 'Crick ColPos 2'
        ),
        'norm_counts_Crick_ColPos_3' => array(
            'color' => '#DED7DA',
            'name' => 'Crick ColPos 3'
        ),
        'norm_counts_Crick_ColPos_4' => array(
            'color' => '#DED7DA',
            'name' => 'Crick ColPos 4'
        ),
        'norm_counts_Crick_SiNeg_1' => array(
            'color' => '#C2ADC0',
            'name' => 'Crick SiNeg 1'
        ),
        'norm_counts_Crick_SiNeg_2' => array(
            'color' => '#C2ADC0',
            'name' => 'Crick SiNeg 2'
        ),
        'norm_counts_Crick_SiNeg_3' => array(
            'color' => '#C2ADC0',
            'name' => 'Crick SiNeg 3'
        ),
        'norm_counts_Crick_SiNeg_4' => array(
            'color' => '#C2ADC0',
            'name' => 'Crick SiNeg 4'
        ),
        'norm_counts_Crick_SiPos_1' => array(
            'color' => '#FFED6F',
            'name' => 'Crick SiPos 1'
        ),
        'norm_counts_Crick_SiPos_2' => array(
            'color' => '#FFED6F',
            'name' => 'Crick SiPos 2'
        ),
        'norm_counts_Crick_SiPos_3' => array(
            'color' => '#FFED6F',
            'name' => 'Crick SiPos 3'
        ),
        'norm_counts_Crick_SiPos_4' => array(
            'color' => '#FFED6F',
            'name' => 'Crick SiPos 4'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'Values for all Samples',
        'sidelabel' => 'Counts'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Crick_SiNeg_1','lg2_avg_Crick_SiNeg_3','lg2_avg_Crick_SiNeg_4','lg2_avg_Crick_SiNeg_2','lg2_avg_Crick_ColNeg_2','lg2_avg_Crick_ColNeg_1','lg2_avg_Crick_ColNeg_3','lg2_avg_Crick_ColNeg_4','lg2_avg_Bern_SiNeg_3','lg2_avg_Bern_SiNeg_1','lg2_avg_Bern_SiNeg_4','lg2_avg_Bern_SiNeg_2','lg2_avg_Bern_ColNeg_4','lg2_avg_Bern_ColNeg_3','lg2_avg_Bern_ColNeg_1','lg2_avg_Bern_ColNeg_2','lg2_avg_Crick_SiPos_1','lg2_avg_Crick_SiPos_3','lg2_avg_Crick_SiPos_4','lg2_avg_Bern_SiPos_2','lg2_avg_Bern_SiPos_3','lg2_avg_Bern_SiPos_4','lg2_avg_Bern_SiPos_1','lg2_avg_Crick_SiPos_2','lg2_avg_Crick_ColPos_1','lg2_avg_Crick_ColPos_2','lg2_avg_Crick_ColPos_3','lg2_avg_Crick_ColPos_4','lg2_avg_Bern_ColPos_1','lg2_avg_Bern_ColPos_3','lg2_avg_Bern_ColPos_2','lg2_avg_Bern_ColPos_4'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_ColPos_vs_ColNeg' => array(
            'name' => 'logFC ColPos vs ColNeg',
            'slider_min' => -10,
            'slider_max' => 8,
            'default_low' => -10,
            'default_high' => 8
        ),
        'contrast_2_logFC_SiPos_vs_SiNeg' => array(
            'name' => 'logFC SiPos vs SiNeg',
            'slider_min' => -9,
            'slider_max' => 8,
            'default_low' => -9,
            'default_high' => 8
        ),
        'contrast_3_logFC_ColPos_vs_SiPos' => array(
            'name' => 'logFC ColPos vs SiPos',
            'slider_min' => -7,
            'slider_max' => 7,
            'default_low' => -7,
            'default_high' => 7
        ),
        'contrast_4_logFC_Bern_ColPos_vs_Crick_ColPos' => array(
            'name' => 'logFC Bern ColPos vs Crick ColPos',
            'slider_min' => -7,
            'slider_max' => 10,
            'default_low' => -7,
            'default_high' => 10
        ),
        'contrast_5_logFC_Bern_SiPos_vs_Crick_SiPos' => array(
            'name' => 'logFC Bern SiPos vs Crick SiPos',
            'slider_min' => -7,
            'slider_max' => 5,
            'default_low' => -7,
            'default_high' => 5
        ),
        'contrast_6_logFC_Bern_ColNeg_vs_Crick_ColNeg' => array(
            'name' => 'logFC Bern ColNeg vs Crick ColNeg',
            'slider_min' => -8,
            'slider_max' => 15,
            'default_low' => -8,
            'default_high' => 15
        ),
        'contrast_7_logFC_Bern_SiNeg_vs_Crick_SiNeg' => array(
            'name' => 'logFC Bern SiNeg vs Crick SiNeg',
            'slider_min' => -8,
            'slider_max' => 8,
            'default_low' => -8,
            'default_high' => 8
        ),
        'contrast_8_logFC_Crick_ColPos_vs_Crick_ColNeg' => array(
            'name' => 'logFC Crick ColPos vs Crick ColNeg',
            'slider_min' => -9,
            'slider_max' => 7,
            'default_low' => -9,
            'default_high' => 7
        ),
        'contrast_9_logFC_Bern_ColPos_vs_Bern_ColNeg' => array(
            'name' => 'logFC Bern ColPos vs Bern ColNeg',
            'slider_min' => -11,
            'slider_max' => 8,
            'default_low' => -11,
            'default_high' => 8
        ),
        'contrast_10_logFC_Crick_SiPos_vs_Crick_SiNeg' => array(
            'name' => '0 logFC Crick SiPos vs Crick SiNeg',
            'slider_min' => -8,
            'slider_max' => 8,
            'default_low' => -8,
            'default_high' => 8
        ),
        'contrast_11_logFC_Bern_SiPos_vs_Bern_SiNeg' => array(
            'name' => '1 logFC Bern SiPos vs Bern SiNeg',
            'slider_min' => -9,
            'slider_max' => 10,
            'default_low' => -9,
            'default_high' => 10
        ),
        'contrast_1_padj_ColPos_vs_ColNeg' => array(
            'name' => 'padj ColPos vs ColNeg',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_padj_SiPos_vs_SiNeg' => array(
            'name' => 'padj SiPos vs SiNeg',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_padj_ColPos_vs_SiPos' => array(
            'name' => 'padj ColPos vs SiPos',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_padj_Bern_ColPos_vs_Crick_ColPos' => array(
            'name' => 'padj Bern ColPos vs Crick ColPos',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_5_padj_Bern_SiPos_vs_Crick_SiPos' => array(
            'name' => 'padj Bern SiPos vs Crick SiPos',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_6_padj_Bern_ColNeg_vs_Crick_ColNeg' => array(
            'name' => 'padj Bern ColNeg vs Crick ColNeg',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_7_padj_Bern_SiNeg_vs_Crick_SiNeg' => array(
            'name' => 'padj Bern SiNeg vs Crick SiNeg',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_8_padj_Crick_ColPos_vs_Crick_ColNeg' => array(
            'name' => 'padj Crick ColPos vs Crick ColNeg',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_9_padj_Bern_ColPos_vs_Bern_ColNeg' => array(
            'name' => 'padj Bern ColPos vs Bern ColNeg',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_10_padj_Crick_SiPos_vs_Crick_SiNeg' => array(
            'name' => '0 padj Crick SiPos vs Crick SiNeg',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_11_padj_Bern_SiPos_vs_Bern_SiNeg' => array(
            'name' => '1 padj Bern SiPos vs Bern SiNeg',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_G_padj_LRT_TissueCondition' => array(
            'name' => 'padj LRT TissueCondition',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_D_padj_LRT_Bern_Crick' => array(
            'name' => 'padj LRT Bern Crick',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        )
    )
    ),
    // Scatterplot Parameters
    'scatterplot' => array(
            'default-x' => 'contrast_1_logFC_ColPos_vs_ColNeg',
            'default-y' => 'contrast_2_logFC_SiPos_vs_SiNeg',
        'selection' => array(
            'contrast_1_logFC_ColPos_vs_ColNeg' => array(
                'name' => 'logFC ColPos vs ColNeg'
            ),
            'contrast_2_logFC_SiPos_vs_SiNeg' => array(
                'name' => 'logFC SiPos vs SiNeg'
            ),
            'contrast_3_logFC_ColPos_vs_SiPos' => array(
                'name' => 'logFC ColPos vs SiPos'
            ),
            'contrast_4_logFC_Bern_ColPos_vs_Crick_ColPos' => array(
                'name' => 'logFC Bern ColPos vs Crick ColPos'
            ),
            'contrast_5_logFC_Bern_SiPos_vs_Crick_SiPos' => array(
                'name' => 'logFC Bern SiPos vs Crick SiPos'
            ),
            'contrast_6_logFC_Bern_ColNeg_vs_Crick_ColNeg' => array(
                'name' => 'logFC Bern ColNeg vs Crick ColNeg'
            ),
            'contrast_7_logFC_Bern_SiNeg_vs_Crick_SiNeg' => array(
                'name' => 'logFC Bern SiNeg vs Crick SiNeg'
            ),
            'contrast_8_logFC_Crick_ColPos_vs_Crick_ColNeg' => array(
                'name' => 'logFC Crick ColPos vs Crick ColNeg'
            ),
            'contrast_9_logFC_Bern_ColPos_vs_Bern_ColNeg' => array(
                'name' => 'logFC Bern ColPos vs Bern ColNeg'
            ),
            'contrast_10_logFC_Crick_SiPos_vs_Crick_SiNeg' => array(
                'name' => '0 logFC Crick SiPos vs Crick SiNeg'
            ),
            'contrast_11_logFC_Bern_SiPos_vs_Bern_SiNeg' => array(
                'name' => '1 logFC Bern SiPos vs Bern SiNeg'
            ),
            'contrast_1_lg10p_ColPos_vs_ColNeg' => array(
                'name' => 'lg10p ColPos vs ColNeg'
            ),
            'contrast_2_lg10p_SiPos_vs_SiNeg' => array(
                'name' => 'lg10p SiPos vs SiNeg'
            ),
            'contrast_3_lg10p_ColPos_vs_SiPos' => array(
                'name' => 'lg10p ColPos vs SiPos'
            ),
            'contrast_4_lg10p_Bern_ColPos_vs_Crick_ColPos' => array(
                'name' => 'lg10p Bern ColPos vs Crick ColPos'
            ),
            'contrast_5_lg10p_Bern_SiPos_vs_Crick_SiPos' => array(
                'name' => 'lg10p Bern SiPos vs Crick SiPos'
            ),
            'contrast_6_lg10p_Bern_ColNeg_vs_Crick_ColNeg' => array(
                'name' => 'lg10p Bern ColNeg vs Crick ColNeg'
            ),
            'contrast_7_lg10p_Bern_SiNeg_vs_Crick_SiNeg' => array(
                'name' => 'lg10p Bern SiNeg vs Crick SiNeg'
            ),
            'contrast_8_lg10p_Crick_ColPos_vs_Crick_ColNeg' => array(
                'name' => 'lg10p Crick ColPos vs Crick ColNeg'
            ),
            'contrast_9_lg10p_Bern_ColPos_vs_Bern_ColNeg' => array(
                'name' => 'lg10p Bern ColPos vs Bern ColNeg'
            ),
            'contrast_10_lg10p_Crick_SiPos_vs_Crick_SiNeg' => array(
                'name' => '0 lg10p Crick SiPos vs Crick SiNeg'
            ),
            'contrast_11_lg10p_Bern_SiPos_vs_Bern_SiNeg' => array(
                'name' => '1 lg10p Bern SiPos vs Bern SiNeg'
            ),
            'contrast_G_lg10p_LRT_TissueCondition' => array(
                'name' => 'lg10p LRT TissueCondition'
            ),
            'contrast_D_lg10p_LRT_Bern_Crick' => array(
                'name' => 'lg10p LRT Bern Crick'
            )
        )
    )
//End scatterplot
);