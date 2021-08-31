<?php
/*
* sll_299 settings file
*/
return array(
    'lab' => array(
        'name' => 'Reference'
    ),
    /*
     * Experiment settings
     */
    'data_db_name' => 'sll_data',
    'data_db' => array(
        'cat_table_name' => 'sll299_cat_reference_db_table'
    ),
    'primary_gene_symbol' => "hgnc_symbol",
    'rnaseq_db_table' => "p299_rna_seq_table",
    'ptm_display_column' => '',
    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => "Heatmap: Row-averaged TPM",
        'pointer' => "lg2(Row-avg TPM)"
    ),
    'samples' => array(
        'norm_counts_SkinNormal_Unt_10' => array('color' => '#8DD3C7', 'name' => 'SkinNormal_Unt_10'),
        'norm_counts_SkinNormal_Unt_103' => array('color' => '#8DD3C7', 'name' => 'SkinNormal_Unt_103'),
        'norm_counts_SkinNormal_Unt_108' => array('color' => '#8DD3C7', 'name' => 'SkinNormal_Unt_108'),
        'norm_counts_SkinNormal_Unt_11' => array('color' => '#8DD3C7', 'name' => 'SkinNormal_Unt_11'),
        'norm_counts_SkinNormal_Unt_12' => array('color' => '#8DD3C7', 'name' => 'SkinNormal_Unt_12'),
        'norm_counts_SkinNormal_Unt_13' => array('color' => '#8DD3C7', 'name' => 'SkinNormal_Unt_13'),
        'norm_counts_SkinNormal_Unt_15' => array('color' => '#8DD3C7', 'name' => 'SkinNormal_Unt_15'),
        'norm_counts_SkinNormal_Unt_2' => array('color' => '#8DD3C7', 'name' => 'SkinNormal_Unt_2'),
        'norm_counts_SkinNormal_Unt_3' => array('color' => '#8DD3C7', 'name' => 'SkinNormal_Unt_3'),
        'norm_counts_SkinNormal_Unt_32' => array('color' => '#8DD3C7', 'name' => 'SkinNormal_Unt_32'),
        'norm_counts_SkinNormal_Unt_4' => array('color' => '#8DD3C7', 'name' => 'SkinNormal_Unt_4'),
        'norm_counts_SkinNormal_Unt_5' => array('color' => '#8DD3C7', 'name' => 'SkinNormal_Unt_5'),
        'norm_counts_SkinNormal_Unt_6' => array('color' => '#8DD3C7', 'name' => 'SkinNormal_Unt_6'),
        'norm_counts_SkinNormal_Unt_8' => array('color' => '#8DD3C7', 'name' => 'SkinNormal_Unt_8'),
        'norm_counts_SkinNormal_Unt_9' => array('color' => '#8DD3C7', 'name' => 'SkinNormal_Unt_9'),
        'norm_counts_SkinPsoriasis_adalimuMab_1' => array('color' => '#F0D1E1', 'name' => 'SkinPsoriasis_adalimuMab_1'),
        'norm_counts_SkinPsoriasis_adalimuMab_14' => array('color' => '#F0D1E1', 'name' => 'SkinPsoriasis_adalimuMab_14'),
        'norm_counts_SkinPsoriasis_adalimuMab_15' => array('color' => '#F0D1E1', 'name' => 'SkinPsoriasis_adalimuMab_15'),
        'norm_counts_SkinPsoriasis_adalimuMab_17' => array('color' => '#F0D1E1', 'name' => 'SkinPsoriasis_adalimuMab_17'),
        'norm_counts_SkinPsoriasis_adalimuMab_18' => array('color' => '#F0D1E1', 'name' => 'SkinPsoriasis_adalimuMab_18'),
        'norm_counts_SkinPsoriasis_adalimuMab_19' => array('color' => '#F0D1E1', 'name' => 'SkinPsoriasis_adalimuMab_19'),
        'norm_counts_SkinPsoriasis_adalimuMab_2' => array('color' => '#F0D1E1', 'name' => 'SkinPsoriasis_adalimuMab_2'),
        'norm_counts_SkinPsoriasis_adalimuMab_20' => array('color' => '#F0D1E1', 'name' => 'SkinPsoriasis_adalimuMab_20'),
        'norm_counts_SkinPsoriasis_adalimuMab_22' => array('color' => '#F0D1E1', 'name' => 'SkinPsoriasis_adalimuMab_22'),
        'norm_counts_SkinPsoriasis_adalimuMab_24' => array('color' => '#F0D1E1', 'name' => 'SkinPsoriasis_adalimuMab_24'),
        'norm_counts_SkinPsoriasis_adalimuMab_25' => array('color' => '#F0D1E1', 'name' => 'SkinPsoriasis_adalimuMab_25'),
        'norm_counts_SkinPsoriasis_adalimuMab_26' => array('color' => '#F0D1E1', 'name' => 'SkinPsoriasis_adalimuMab_26'),
        'norm_counts_SkinPsoriasis_adalimuMab_30' => array('color' => '#F0D1E1', 'name' => 'SkinPsoriasis_adalimuMab_30'),
        'norm_counts_SkinPsoriasis_adalimuMab_4' => array('color' => '#F0D1E1', 'name' => 'SkinPsoriasis_adalimuMab_4'),
        'norm_counts_SkinPsoriasis_adalimuMab_5' => array('color' => '#F0D1E1', 'name' => 'SkinPsoriasis_adalimuMab_5'),
        'norm_counts_SkinPsoriasis_adalimuMab_6' => array('color' => '#F0D1E1', 'name' => 'SkinPsoriasis_adalimuMab_6'),
        'norm_counts_SkinPsoriasis_adalimuMab_8' => array('color' => '#F0D1E1', 'name' => 'SkinPsoriasis_adalimuMab_8'),
        'norm_counts_SkinPsoriasis_adalimuMab_9' => array('color' => '#F0D1E1', 'name' => 'SkinPsoriasis_adalimuMab_9'),
        'norm_counts_SkinPsoriasis_Unt_1' => array('color' => '#FFED6F', 'name' => 'SkinPsoriasis_Unt_1'),
        'norm_counts_SkinPsoriasis_Unt_14' => array('color' => '#FFED6F', 'name' => 'SkinPsoriasis_Unt_14'),
        'norm_counts_SkinPsoriasis_Unt_15' => array('color' => '#FFED6F', 'name' => 'SkinPsoriasis_Unt_15'),
        'norm_counts_SkinPsoriasis_Unt_17' => array('color' => '#FFED6F', 'name' => 'SkinPsoriasis_Unt_17'),
        'norm_counts_SkinPsoriasis_Unt_18' => array('color' => '#FFED6F', 'name' => 'SkinPsoriasis_Unt_18'),
        'norm_counts_SkinPsoriasis_Unt_19' => array('color' => '#FFED6F', 'name' => 'SkinPsoriasis_Unt_19'),
        'norm_counts_SkinPsoriasis_Unt_2' => array('color' => '#FFED6F', 'name' => 'SkinPsoriasis_Unt_2'),
        'norm_counts_SkinPsoriasis_Unt_20' => array('color' => '#FFED6F', 'name' => 'SkinPsoriasis_Unt_20'),
        'norm_counts_SkinPsoriasis_Unt_22' => array('color' => '#FFED6F', 'name' => 'SkinPsoriasis_Unt_22'),
        'norm_counts_SkinPsoriasis_Unt_24' => array('color' => '#FFED6F', 'name' => 'SkinPsoriasis_Unt_24'),
        'norm_counts_SkinPsoriasis_Unt_25' => array('color' => '#FFED6F', 'name' => 'SkinPsoriasis_Unt_25'),
        'norm_counts_SkinPsoriasis_Unt_26' => array('color' => '#FFED6F', 'name' => 'SkinPsoriasis_Unt_26'),
        'norm_counts_SkinPsoriasis_Unt_30' => array('color' => '#FFED6F', 'name' => 'SkinPsoriasis_Unt_30'),
        'norm_counts_SkinPsoriasis_Unt_4' => array('color' => '#FFED6F', 'name' => 'SkinPsoriasis_Unt_4'),
        'norm_counts_SkinPsoriasis_Unt_5' => array('color' => '#FFED6F', 'name' => 'SkinPsoriasis_Unt_5'),
        'norm_counts_SkinPsoriasis_Unt_6' => array('color' => '#FFED6F', 'name' => 'SkinPsoriasis_Unt_6'),
        'norm_counts_SkinPsoriasis_Unt_8' => array('color' => '#FFED6F', 'name' => 'SkinPsoriasis_Unt_8'),
        'norm_counts_SkinPsoriasis_Unt_9' => array('color' => '#FFED6F', 'name' => 'SkinPsoriasis_Unt_9')
    ),
    // bar chart
    'count_table' => array(
        'headline' => "TPM Values for all Samples",
        'sidelabel' => "TPM"
    ),
    'venn' => array(
        'experiments' => array('lg2_avg_SkinPsoriasis_Unt_22','lg2_avg_SkinPsoriasis_adalimuMab_5','lg2_avg_SkinPsoriasis_adalimuMab_17','lg2_avg_SkinPsoriasis_adalimuMab_2','lg2_avg_SkinPsoriasis_adalimuMab_22','lg2_avg_SkinPsoriasis_adalimuMab_4','lg2_avg_SkinPsoriasis_adalimuMab_26','lg2_avg_SkinPsoriasis_adalimuMab_6','lg2_avg_SkinNormal_Unt_2','lg2_avg_SkinPsoriasis_adalimuMab_14','lg2_avg_SkinPsoriasis_adalimuMab_1','lg2_avg_SkinPsoriasis_adalimuMab_9','lg2_avg_SkinPsoriasis_Unt_24','lg2_avg_SkinPsoriasis_adalimuMab_19','lg2_avg_SkinPsoriasis_adalimuMab_15','lg2_avg_SkinNormal_Unt_32','lg2_avg_SkinNormal_Unt_103','lg2_avg_SkinPsoriasis_Unt_15','lg2_avg_SkinPsoriasis_adalimuMab_8','lg2_avg_SkinPsoriasis_adalimuMab_30','lg2_avg_SkinPsoriasis_Unt_8','lg2_avg_SkinPsoriasis_Unt_30','lg2_avg_SkinPsoriasis_adalimuMab_20','lg2_avg_SkinPsoriasis_Unt_20','lg2_avg_SkinPsoriasis_Unt_4','lg2_avg_SkinPsoriasis_Unt_18','lg2_avg_SkinPsoriasis_adalimuMab_18','lg2_avg_SkinPsoriasis_adalimuMab_24','lg2_avg_SkinPsoriasis_Unt_14','lg2_avg_SkinPsoriasis_adalimuMab_25','lg2_avg_SkinPsoriasis_Unt_9','lg2_avg_SkinPsoriasis_Unt_1','lg2_avg_SkinPsoriasis_Unt_26','lg2_avg_SkinPsoriasis_Unt_19','lg2_avg_SkinPsoriasis_Unt_17','lg2_avg_SkinPsoriasis_Unt_25','lg2_avg_SkinPsoriasis_Unt_2','lg2_avg_SkinPsoriasis_Unt_5','lg2_avg_SkinPsoriasis_Unt_6','lg2_avg_SkinNormal_Unt_8','lg2_avg_SkinNormal_Unt_15','lg2_avg_SkinNormal_Unt_108','lg2_avg_SkinNormal_Unt_3','lg2_avg_SkinNormal_Unt_12','lg2_avg_SkinNormal_Unt_11','lg2_avg_SkinNormal_Unt_6','lg2_avg_SkinNormal_Unt_5','lg2_avg_SkinNormal_Unt_13','lg2_avg_SkinNormal_Unt_9','lg2_avg_SkinNormal_Unt_10','lg2_avg_SkinNormal_Unt_4'),
        'table' => array(
            'col_name_start' => 11,
            'low_highlight' => -1,
            'high_highlight' => 1
        ),
        'selection' => array(
            'contrast_1_logFC_SkinPsoriasis_Unt_vs_SkinNormal_Unt' => array('name' => 'logFC_SkinPsoriasis_Unt_vs_SkinNormal_Unt','slider_min' => -8,'slider_max' => 7,'default_low' => -8,'default_high' => 7),
            'contrast_2_logFC_SkinPsoriasis_adalimuMab_vs_SkinPsoriasis_Unt' => array('name' => 'logFC_SkinPsoriasis_adalimuMab_vs_SkinPsoriasis_Unt','slider_min' => -3,'slider_max' => 3,'default_low' => -3,'default_high' => 3),
            'contrast_3_logFC_SkinPsoriasis_adalimuMab_vs_SkinNormal_Unt' => array('name' => 'logFC_SkinPsoriasis_adalimuMab_vs_SkinNormal_Unt','slider_min' => -6,'slider_max' => 5,'default_low' => -6,'default_high' => 5),
            'contrast_P1_logFC_CARD14E138A_0hr_vs_CARD14WT_0hr' => array('name' => '_logFC_CARD14E138A_0hr_vs_CARD14WT_0hr','slider_min' => -5,'slider_max' => 5,'default_low' => -5,'default_high' => 5),
            'contrast_P2_logFC_CARD14E138A_3hr_vs_CARD14WT_3hr' => array('name' => '_logFC_CARD14E138A_3hr_vs_CARD14WT_3hr','slider_min' => -6,'slider_max' => 10,'default_low' => -6,'default_high' => 10),
            'contrast_P3_logFC_CARD14E138A_6hr_vs_CARD14WT_6hr' => array('name' => '_logFC_CARD14E138A_6hr_vs_CARD14WT_6hr','slider_min' => -7,'slider_max' => 11,'default_low' => -7,'default_high' => 11),
            'contrast_P4_logFC_CARD14E138A_9hr_vs_CARD14WT_9hr' => array('name' => '_logFC_CARD14E138A_9hr_vs_CARD14WT_9hr','slider_min' => -7,'slider_max' => 11,'default_low' => -7,'default_high' => 11),
            'contrast_J1_logFC_Skin_Card14KI_vs_Skin_WT' => array('name' => '_logFC_Skin_Card14KI_vs_Skin_WT','slider_min' => -7,'slider_max' => 10,'default_low' => -7,'default_high' => 10),
            'contrast_1_padj_SkinPsoriasis_Unt_vs_SkinNormal_Unt' => array('name' => 'padj_SkinPsoriasis_Unt_vs_SkinNormal_Unt','slider_min' => 0,'slider_max' => 1,'default_low' => 0,'default_high' => 1),
            'contrast_2_padj_SkinPsoriasis_adalimuMab_vs_SkinPsoriasis_Unt' => array('name' => 'padj_SkinPsoriasis_adalimuMab_vs_SkinPsoriasis_Unt','slider_min' => 0,'slider_max' => 1,'default_low' => 0,'default_high' => 1),
            'contrast_3_padj_SkinPsoriasis_adalimuMab_vs_SkinNormal_Unt' => array('name' => 'padj_SkinPsoriasis_adalimuMab_vs_SkinNormal_Unt','slider_min' => 0,'slider_max' => 1,'default_low' => 0,'default_high' => 1),
            'contrast_J1_padj_Skin_Card14KI_vs_Skin_WT' => array('name' => '_padj_Skin_Card14KI_vs_Skin_WT','slider_min' => 0,'slider_max' => 1,'default_low' => 0,'default_high' => 1),
            'contrast_P1_padj_CARD14E138A_0hr_vs_CARD14WT_0hr' => array('name' => '_padj_CARD14E138A_0hr_vs_CARD14WT_0hr','slider_min' => 0,'slider_max' => 1,'default_low' => 0,'default_high' => 1),
            'contrast_P2_padj_CARD14E138A_3hr_vs_CARD14WT_3hr' => array('name' => '_padj_CARD14E138A_3hr_vs_CARD14WT_3hr','slider_min' => 0,'slider_max' => 1,'default_low' => 0,'default_high' => 1),
            'contrast_P3_padj_CARD14E138A_6hr_vs_CARD14WT_6hr' => array('name' => '_padj_CARD14E138A_6hr_vs_CARD14WT_6hr','slider_min' => 0,'slider_max' => 1,'default_low' => 0,'default_high' => 1),
            'contrast_P4_padj_CARD14E138A_9hr_vs_CARD14WT_9hr' => array('name' => '_padj_CARD14E138A_9hr_vs_CARD14WT_9hr','slider_min' => 0,'slider_max' => 1,'default_low' => 0,'default_high' => 1),
            'contrast_D_lg10p_LRT_Disease_Status' => array('name' => 'lg10p_LRT_Disease_Status','slider_min' => -1,'slider_max' => 78,'default_low' => -1,'default_high' => 78)
        )
    ),
    'scatterplot' => array(
        'selection' => array(
            'contrast_1_logFC_SkinPsoriasis_Unt_vs_SkinNormal_Unt' => array('name' => 'logFC_SkinPsoriasis_Unt_vs_SkinNormal_Unt'),
            'contrast_2_logFC_SkinPsoriasis_adalimuMab_vs_SkinPsoriasis_Unt' => array('name' => 'logFC_SkinPsoriasis_adalimuMab_vs_SkinPsoriasis_Unt'),
            'contrast_3_logFC_SkinPsoriasis_adalimuMab_vs_SkinNormal_Unt' => array('name' => 'logFC_SkinPsoriasis_adalimuMab_vs_SkinNormal_Unt'),
            'contrast_P1_logFC_CARD14E138A_0hr_vs_CARD14WT_0hr' => array('name' => '_logFC_CARD14E138A_0hr_vs_CARD14WT_0hr'),
            'contrast_P2_logFC_CARD14E138A_3hr_vs_CARD14WT_3hr' => array('name' => '_logFC_CARD14E138A_3hr_vs_CARD14WT_3hr'),
            'contrast_P3_logFC_CARD14E138A_6hr_vs_CARD14WT_6hr' => array('name' => '_logFC_CARD14E138A_6hr_vs_CARD14WT_6hr'),
            'contrast_P4_logFC_CARD14E138A_9hr_vs_CARD14WT_9hr' => array('name' => '_logFC_CARD14E138A_9hr_vs_CARD14WT_9hr'),
            'contrast_J1_logFC_Skin_Card14KI_vs_Skin_WT' => array('name' => '_logFC_Skin_Card14KI_vs_Skin_WT'),
            'contrast_P_PCA_estimatePCA1' => array('name' => 'PCA_estimatePCA1'),
            'contrast_P_PCA_estimatePCA2' => array('name' => 'PCA_estimatePCA2'),
            'contrast_P_PCA_estimatePCA3' => array('name' => 'PCA_estimatePCA3'),
            'contrast_P_PCA_estimatePCA4' => array('name' => 'PCA_estimatePCA4'),
            'contrast_P_PCA_estimatePCA5' => array('name' => 'PCA_estimatePCA5'),
            'contrast_P1_lg10p_CARD14E138A_0hr_vs_CARD14WT_0hr' => array('name' => '_lg10p_CARD14E138A_0hr_vs_CARD14WT_0hr'),
            'contrast_P2_lg10p_CARD14E138A_3hr_vs_CARD14WT_3hr' => array('name' => '_lg10p_CARD14E138A_3hr_vs_CARD14WT_3hr'),
            'contrast_P3_lg10p_CARD14E138A_6hr_vs_CARD14WT_6hr' => array('name' => '_lg10p_CARD14E138A_6hr_vs_CARD14WT_6hr'),
            'contrast_P4_lg10p_CARD14E138A_9hr_vs_CARD14WT_9hr' => array('name' => '_lg10p_CARD14E138A_9hr_vs_CARD14WT_9hr'),
            'contrast_1_lg10p_SkinPsoriasis_Unt_vs_SkinNormal_Unt' => array('name' => 'lg10p_SkinPsoriasis_Unt_vs_SkinNormal_Unt'),
            'contrast_2_lg10p_SkinPsoriasis_adalimuMab_vs_SkinPsoriasis_Unt' => array('name' => 'lg10p_SkinPsoriasis_adalimuMab_vs_SkinPsoriasis_Unt'),
            'contrast_3_lg10p_SkinPsoriasis_adalimuMab_vs_SkinNormal_Unt' => array('name' => 'lg10p_SkinPsoriasis_adalimuMab_vs_SkinNormal_Unt'),
            'contrast_G_lg10p_Sample_Group' => array('name' => 'lg10p_Sample_Group'),'contrast_D_lg10p_LRT_Disease_Status' => array('name' => 'lg10p_LRT_Disease_Status'),
            'contrast_P_lg10p_PCA1' => array('name' => 'lg10p_PCA1'),'contrast_P_lg10p_PCA2' => array('name' => 'lg10p_PCA2'),
            'contrast_P_lg10p_PCA3' => array('name' => 'lg10p_PCA3'),'contrast_P_lg10p_PCA4' => array('name' => 'lg10p_PCA4'),
            'contrast_P_lg10p_PCA5' => array('name' => 'lg10p_PCA5'),'contrast_J1_lg10p_Skin_Card14KI_vs_Skin_WT' => array('name' => '_lg10p_Skin_Card14KI_vs_Skin_WT'),
            'contrast_P_padj_PCA1' => array('name' => 'padj_PCA1'),'contrast_P_padj_PCA2' => array('name' => 'padj_PCA2'),
            'contrast_P_padj_PCA3' => array('name' => 'padj_PCA3'),'contrast_P_padj_PCA4' => array('name' => 'padj_PCA4'),
            'contrast_P_padj_PCA5' => array('name' => 'padj_PCA5')
        ),
        'default-x' => 'contrast_1_logFC_SkinPsoriasis_Unt_vs_SkinNormal_Unt',
        'default-y' => 'contrast_1_lg10p_SkinPsoriasis_Unt_vs_SkinNormal_Unt'
    )
);
