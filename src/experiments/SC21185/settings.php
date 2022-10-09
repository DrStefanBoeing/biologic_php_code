<?php

return array(
    'public_access' => FALSE,
    'lab' => array(
        'name' => 'Hill DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'chl_data',
    'data_db' => array(
            'cat_table_name' => 'SC21185_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'SC21185_sc_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged Expr',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_Avg_log10_Expr_B_cells_anti_Act_A_B_R1' => array(
            'color' => '#F8766D',
            'name' => 'Avg log10 Expr B cells anti Act A B R1'
        ),
        'norm_counts_Avg_log10_Expr_B_cells_anti_Act_A_B_R2' => array(
            'color' => '#F77867',
            'name' => 'Avg log10 Expr B cells anti Act A B R2'
        ),
        'norm_counts_Avg_log10_Expr_B_cells_anti_Act_A_B_R3' => array(
            'color' => '#F57961',
            'name' => 'Avg log10 Expr B cells anti Act A B R3'
        ),
        'norm_counts_Avg_log10_Expr_B_cells_anti_Act_A_R1' => array(
            'color' => '#F47B5B',
            'name' => 'Avg log10 Expr B cells anti Act A R1'
        ),
        'norm_counts_Avg_log10_Expr_B_cells_anti_Act_A_R2' => array(
            'color' => '#F27C55',
            'name' => 'Avg log10 Expr B cells anti Act A R2'
        ),
        'norm_counts_Avg_log10_Expr_B_cells_anti_Act_A_R3' => array(
            'color' => '#F07E4E',
            'name' => 'Avg log10 Expr B cells anti Act A R3'
        ),
        'norm_counts_Avg_log10_Expr_B_cells_Control_R1' => array(
            'color' => '#EF7F46',
            'name' => 'Avg log10 Expr B cells Control R1'
        ),
        'norm_counts_Avg_log10_Expr_B_cells_Control_R2' => array(
            'color' => '#EF7F46',
            'name' => 'Avg log10 Expr B cells Control R2'
        ),
        'norm_counts_Avg_log10_Expr_B_cells_Control_R3' => array(
            'color' => '#EF7F46',
            'name' => 'Avg log10 Expr B cells Control R3'
        ),
        'norm_counts_Avg_log10_Expr_Cancer_Cells_1_anti_Act_A_B_R1' => array(
            'color' => '#ED813E',
            'name' => 'Avg log10 Expr Cancer Cells 1 anti Act A B R1'
        ),
        'norm_counts_Avg_log10_Expr_Cancer_Cells_1_anti_Act_A_B_R2' => array(
            'color' => '#EB8335',
            'name' => 'Avg log10 Expr Cancer Cells 1 anti Act A B R2'
        ),
        'norm_counts_Avg_log10_Expr_Cancer_Cells_1_anti_Act_A_B_R3' => array(
            'color' => '#E9842A',
            'name' => 'Avg log10 Expr Cancer Cells 1 anti Act A B R3'
        ),
        'norm_counts_Avg_log10_Expr_Cancer_Cells_1_anti_Act_A_R1' => array(
            'color' => '#E7861D',
            'name' => 'Avg log10 Expr Cancer Cells 1 anti Act A R1'
        ),
        'norm_counts_Avg_log10_Expr_Cancer_Cells_1_anti_Act_A_R2' => array(
            'color' => '#E58703',
            'name' => 'Avg log10 Expr Cancer Cells 1 anti Act A R2'
        ),
        'norm_counts_Avg_log10_Expr_Cancer_Cells_1_anti_Act_A_R3' => array(
            'color' => '#E38900',
            'name' => 'Avg log10 Expr Cancer Cells 1 anti Act A R3'
        ),
        'norm_counts_Avg_log10_Expr_Cancer_Cells_1_Control_R1' => array(
            'color' => '#E18A00',
            'name' => 'Avg log10 Expr Cancer Cells 1 Control R1'
        ),
        'norm_counts_Avg_log10_Expr_Cancer_Cells_1_Control_R2' => array(
            'color' => '#E18A00',
            'name' => 'Avg log10 Expr Cancer Cells 1 Control R2'
        ),
        'norm_counts_Avg_log10_Expr_Cancer_Cells_1_Control_R3' => array(
            'color' => '#E18A00',
            'name' => 'Avg log10 Expr Cancer Cells 1 Control R3'
        ),
        'norm_counts_Avg_log10_Expr_Cancer_Cells_2_anti_Act_A_B_R1' => array(
            'color' => '#DE8C00',
            'name' => 'Avg log10 Expr Cancer Cells 2 anti Act A B R1'
        ),
        'norm_counts_Avg_log10_Expr_Cancer_Cells_2_anti_Act_A_B_R2' => array(
            'color' => '#DC8D00',
            'name' => 'Avg log10 Expr Cancer Cells 2 anti Act A B R2'
        ),
        'norm_counts_Avg_log10_Expr_Cancer_Cells_2_anti_Act_A_B_R3' => array(
            'color' => '#DA8F00',
            'name' => 'Avg log10 Expr Cancer Cells 2 anti Act A B R3'
        ),
        'norm_counts_Avg_log10_Expr_Cancer_Cells_2_anti_Act_A_R1' => array(
            'color' => '#D79000',
            'name' => 'Avg log10 Expr Cancer Cells 2 anti Act A R1'
        ),
        'norm_counts_Avg_log10_Expr_Cancer_Cells_2_anti_Act_A_R2' => array(
            'color' => '#D59100',
            'name' => 'Avg log10 Expr Cancer Cells 2 anti Act A R2'
        ),
        'norm_counts_Avg_log10_Expr_Cancer_Cells_2_anti_Act_A_R3' => array(
            'color' => '#D29300',
            'name' => 'Avg log10 Expr Cancer Cells 2 anti Act A R3'
        ),
        'norm_counts_Avg_log10_Expr_Cancer_Cells_2_Control_R1' => array(
            'color' => '#CF9400',
            'name' => 'Avg log10 Expr Cancer Cells 2 Control R1'
        ),
        'norm_counts_Avg_log10_Expr_Cancer_Cells_2_Control_R2' => array(
            'color' => '#CF9400',
            'name' => 'Avg log10 Expr Cancer Cells 2 Control R2'
        ),
        'norm_counts_Avg_log10_Expr_Cancer_Cells_2_Control_R3' => array(
            'color' => '#CF9400',
            'name' => 'Avg log10 Expr Cancer Cells 2 Control R3'
        ),
        'norm_counts_Avg_log10_Expr_Cancer_Cells_3_anti_Act_A_B_R1' => array(
            'color' => '#CD9600',
            'name' => 'Avg log10 Expr Cancer Cells 3 anti Act A B R1'
        ),
        'norm_counts_Avg_log10_Expr_Cancer_Cells_3_anti_Act_A_B_R2' => array(
            'color' => '#CA9700',
            'name' => 'Avg log10 Expr Cancer Cells 3 anti Act A B R2'
        ),
        'norm_counts_Avg_log10_Expr_Cancer_Cells_3_anti_Act_A_B_R3' => array(
            'color' => '#C79800',
            'name' => 'Avg log10 Expr Cancer Cells 3 anti Act A B R3'
        ),
        'norm_counts_Avg_log10_Expr_Cancer_Cells_3_anti_Act_A_R1' => array(
            'color' => '#C49A00',
            'name' => 'Avg log10 Expr Cancer Cells 3 anti Act A R1'
        ),
        'norm_counts_Avg_log10_Expr_Cancer_Cells_3_anti_Act_A_R2' => array(
            'color' => '#C19B00',
            'name' => 'Avg log10 Expr Cancer Cells 3 anti Act A R2'
        ),
        'norm_counts_Avg_log10_Expr_Cancer_Cells_3_anti_Act_A_R3' => array(
            'color' => '#BE9C00',
            'name' => 'Avg log10 Expr Cancer Cells 3 anti Act A R3'
        ),
        'norm_counts_Avg_log10_Expr_Cancer_Cells_3_Control_R1' => array(
            'color' => '#BB9E00',
            'name' => 'Avg log10 Expr Cancer Cells 3 Control R1'
        ),
        'norm_counts_Avg_log10_Expr_Cancer_Cells_3_Control_R2' => array(
            'color' => '#BB9E00',
            'name' => 'Avg log10 Expr Cancer Cells 3 Control R2'
        ),
        'norm_counts_Avg_log10_Expr_Cancer_Cells_3_Control_R3' => array(
            'color' => '#BB9E00',
            'name' => 'Avg log10 Expr Cancer Cells 3 Control R3'
        ),
        'norm_counts_Avg_log10_Expr_CD4_T_cells_anti_Act_A_B_R1' => array(
            'color' => '#B79F00',
            'name' => 'Avg log10 Expr CD4 T cells anti Act A B R1'
        ),
        'norm_counts_Avg_log10_Expr_CD4_T_cells_anti_Act_A_B_R2' => array(
            'color' => '#B4A000',
            'name' => 'Avg log10 Expr CD4 T cells anti Act A B R2'
        ),
        'norm_counts_Avg_log10_Expr_CD4_T_cells_anti_Act_A_B_R3' => array(
            'color' => '#B0A100',
            'name' => 'Avg log10 Expr CD4 T cells anti Act A B R3'
        ),
        'norm_counts_Avg_log10_Expr_CD4_T_cells_anti_Act_A_R1' => array(
            'color' => '#ADA200',
            'name' => 'Avg log10 Expr CD4 T cells anti Act A R1'
        ),
        'norm_counts_Avg_log10_Expr_CD4_T_cells_anti_Act_A_R2' => array(
            'color' => '#A9A400',
            'name' => 'Avg log10 Expr CD4 T cells anti Act A R2'
        ),
        'norm_counts_Avg_log10_Expr_CD4_T_cells_anti_Act_A_R3' => array(
            'color' => '#A5A500',
            'name' => 'Avg log10 Expr CD4 T cells anti Act A R3'
        ),
        'norm_counts_Avg_log10_Expr_CD4_T_cells_Control_R1' => array(
            'color' => '#A1A600',
            'name' => 'Avg log10 Expr CD4 T cells Control R1'
        ),
        'norm_counts_Avg_log10_Expr_CD4_T_cells_Control_R2' => array(
            'color' => '#A1A600',
            'name' => 'Avg log10 Expr CD4 T cells Control R2'
        ),
        'norm_counts_Avg_log10_Expr_CD4_Th_cells_anti_Act_A_B_R1' => array(
            'color' => '#9DA700',
            'name' => 'Avg log10 Expr CD4 Th cells anti Act A B R1'
        ),
        'norm_counts_Avg_log10_Expr_CD4_Th_cells_anti_Act_A_B_R2' => array(
            'color' => '#99A800',
            'name' => 'Avg log10 Expr CD4 Th cells anti Act A B R2'
        ),
        'norm_counts_Avg_log10_Expr_CD4_Th_cells_anti_Act_A_B_R3' => array(
            'color' => '#94A900',
            'name' => 'Avg log10 Expr CD4 Th cells anti Act A B R3'
        ),
        'norm_counts_Avg_log10_Expr_CD4_Th_cells_anti_Act_A_R1' => array(
            'color' => '#90AA00',
            'name' => 'Avg log10 Expr CD4 Th cells anti Act A R1'
        ),
        'norm_counts_Avg_log10_Expr_CD4_Th_cells_anti_Act_A_R2' => array(
            'color' => '#8BAB00',
            'name' => 'Avg log10 Expr CD4 Th cells anti Act A R2'
        ),
        'norm_counts_Avg_log10_Expr_CD4_Th_cells_anti_Act_A_R3' => array(
            'color' => '#86AC00',
            'name' => 'Avg log10 Expr CD4 Th cells anti Act A R3'
        ),
        'norm_counts_Avg_log10_Expr_CD4_Th_cells_Control_R1' => array(
            'color' => '#81AD00',
            'name' => 'Avg log10 Expr CD4 Th cells Control R1'
        ),
        'norm_counts_Avg_log10_Expr_CD4_Th_cells_Control_R2' => array(
            'color' => '#81AD00',
            'name' => 'Avg log10 Expr CD4 Th cells Control R2'
        ),
        'norm_counts_Avg_log10_Expr_CD4_Th_cells_Control_R3' => array(
            'color' => '#81AD00',
            'name' => 'Avg log10 Expr CD4 Th cells Control R3'
        ),
        'norm_counts_Avg_log10_Expr_CD4_Treg_cells_anti_Act_A_B_R1' => array(
            'color' => '#7CAE00',
            'name' => 'Avg log10 Expr CD4 Treg cells anti Act A B R1'
        ),
        'norm_counts_Avg_log10_Expr_CD4_Treg_cells_anti_Act_A_B_R2' => array(
            'color' => '#76AF00',
            'name' => 'Avg log10 Expr CD4 Treg cells anti Act A B R2'
        ),
        'norm_counts_Avg_log10_Expr_CD4_Treg_cells_anti_Act_A_B_R3' => array(
            'color' => '#70B000',
            'name' => 'Avg log10 Expr CD4 Treg cells anti Act A B R3'
        ),
        'norm_counts_Avg_log10_Expr_CD4_Treg_cells_anti_Act_A_R1' => array(
            'color' => '#69B100',
            'name' => 'Avg log10 Expr CD4 Treg cells anti Act A R1'
        ),
        'norm_counts_Avg_log10_Expr_CD4_Treg_cells_anti_Act_A_R2' => array(
            'color' => '#63B200',
            'name' => 'Avg log10 Expr CD4 Treg cells anti Act A R2'
        ),
        'norm_counts_Avg_log10_Expr_CD4_Treg_cells_anti_Act_A_R3' => array(
            'color' => '#5BB300',
            'name' => 'Avg log10 Expr CD4 Treg cells anti Act A R3'
        ),
        'norm_counts_Avg_log10_Expr_CD4_Treg_cells_Control_R1' => array(
            'color' => '#53B400',
            'name' => 'Avg log10 Expr CD4 Treg cells Control R1'
        ),
        'norm_counts_Avg_log10_Expr_CD4_Treg_cells_Control_R2' => array(
            'color' => '#53B400',
            'name' => 'Avg log10 Expr CD4 Treg cells Control R2'
        ),
        'norm_counts_Avg_log10_Expr_CD4_Treg_cells_Control_R3' => array(
            'color' => '#53B400',
            'name' => 'Avg log10 Expr CD4 Treg cells Control R3'
        ),
        'norm_counts_Avg_log10_Expr_CD8_T_cells_anti_Act_A_B_R1' => array(
            'color' => '#49B500',
            'name' => 'Avg log10 Expr CD8 T cells anti Act A B R1'
        ),
        'norm_counts_Avg_log10_Expr_CD8_T_cells_anti_Act_A_B_R2' => array(
            'color' => '#3EB500',
            'name' => 'Avg log10 Expr CD8 T cells anti Act A B R2'
        ),
        'norm_counts_Avg_log10_Expr_CD8_T_cells_anti_Act_A_B_R3' => array(
            'color' => '#31B600',
            'name' => 'Avg log10 Expr CD8 T cells anti Act A B R3'
        ),
        'norm_counts_Avg_log10_Expr_CD8_T_cells_anti_Act_A_R1' => array(
            'color' => '#1DB700',
            'name' => 'Avg log10 Expr CD8 T cells anti Act A R1'
        ),
        'norm_counts_Avg_log10_Expr_CD8_T_cells_anti_Act_A_R2' => array(
            'color' => '#00B812',
            'name' => 'Avg log10 Expr CD8 T cells anti Act A R2'
        ),
        'norm_counts_Avg_log10_Expr_CD8_T_cells_anti_Act_A_R3' => array(
            'color' => '#00B823',
            'name' => 'Avg log10 Expr CD8 T cells anti Act A R3'
        ),
        'norm_counts_Avg_log10_Expr_CD8_T_cells_Control_R1' => array(
            'color' => '#00B92F',
            'name' => 'Avg log10 Expr CD8 T cells Control R1'
        ),
        'norm_counts_Avg_log10_Expr_CD8_T_cells_Control_R2' => array(
            'color' => '#00B92F',
            'name' => 'Avg log10 Expr CD8 T cells Control R2'
        ),
        'norm_counts_Avg_log10_Expr_CD8_T_cells_Control_R3' => array(
            'color' => '#00B92F',
            'name' => 'Avg log10 Expr CD8 T cells Control R3'
        ),
        'norm_counts_Avg_log10_Expr_Cluster_0_anti_Act_A_B_R1' => array(
            'color' => '#00BA38',
            'name' => 'Avg log10 Expr Cluster 0 anti Act A B R1'
        ),
        'norm_counts_Avg_log10_Expr_Cluster_0_anti_Act_A_B_R2' => array(
            'color' => '#00BA41',
            'name' => 'Avg log10 Expr Cluster 0 anti Act A B R2'
        ),
        'norm_counts_Avg_log10_Expr_Cluster_0_anti_Act_A_B_R3' => array(
            'color' => '#00BB48',
            'name' => 'Avg log10 Expr Cluster 0 anti Act A B R3'
        ),
        'norm_counts_Avg_log10_Expr_Cluster_0_anti_Act_A_R1' => array(
            'color' => '#00BC4F',
            'name' => 'Avg log10 Expr Cluster 0 anti Act A R1'
        ),
        'norm_counts_Avg_log10_Expr_Cluster_0_anti_Act_A_R2' => array(
            'color' => '#00BC56',
            'name' => 'Avg log10 Expr Cluster 0 anti Act A R2'
        ),
        'norm_counts_Avg_log10_Expr_Cluster_0_anti_Act_A_R3' => array(
            'color' => '#00BD5C',
            'name' => 'Avg log10 Expr Cluster 0 anti Act A R3'
        ),
        'norm_counts_Avg_log10_Expr_Cluster_0_Control_R1' => array(
            'color' => '#00BD62',
            'name' => 'Avg log10 Expr Cluster 0 Control R1'
        ),
        'norm_counts_Avg_log10_Expr_Cluster_0_Control_R2' => array(
            'color' => '#00BD62',
            'name' => 'Avg log10 Expr Cluster 0 Control R2'
        ),
        'norm_counts_Avg_log10_Expr_Cluster_0_Control_R3' => array(
            'color' => '#00BD62',
            'name' => 'Avg log10 Expr Cluster 0 Control R3'
        ),
        'norm_counts_Avg_log10_Expr_Cluster_1_anti_Act_A_B_R1' => array(
            'color' => '#00BE67',
            'name' => 'Avg log10 Expr Cluster 1 anti Act A B R1'
        ),
        'norm_counts_Avg_log10_Expr_Cluster_1_anti_Act_A_B_R2' => array(
            'color' => '#00BE6D',
            'name' => 'Avg log10 Expr Cluster 1 anti Act A B R2'
        ),
        'norm_counts_Avg_log10_Expr_Cluster_1_anti_Act_A_B_R3' => array(
            'color' => '#00BE72',
            'name' => 'Avg log10 Expr Cluster 1 anti Act A B R3'
        ),
        'norm_counts_Avg_log10_Expr_Cluster_1_anti_Act_A_R1' => array(
            'color' => '#00BF77',
            'name' => 'Avg log10 Expr Cluster 1 anti Act A R1'
        ),
        'norm_counts_Avg_log10_Expr_Cluster_1_anti_Act_A_R2' => array(
            'color' => '#00BF7C',
            'name' => 'Avg log10 Expr Cluster 1 anti Act A R2'
        ),
        'norm_counts_Avg_log10_Expr_Cluster_1_anti_Act_A_R3' => array(
            'color' => '#00BF81',
            'name' => 'Avg log10 Expr Cluster 1 anti Act A R3'
        ),
        'norm_counts_Avg_log10_Expr_Cluster_1_Control_R1' => array(
            'color' => '#00C086',
            'name' => 'Avg log10 Expr Cluster 1 Control R1'
        ),
        'norm_counts_Avg_log10_Expr_Cluster_1_Control_R2' => array(
            'color' => '#00C086',
            'name' => 'Avg log10 Expr Cluster 1 Control R2'
        ),
        'norm_counts_Avg_log10_Expr_Cluster_1_Control_R3' => array(
            'color' => '#00C086',
            'name' => 'Avg log10 Expr Cluster 1 Control R3'
        ),
        'norm_counts_Avg_log10_Expr_Cluster_10_anti_Act_A_B_R1' => array(
            'color' => '#00C086',
            'name' => 'Avg log10 Expr Cluster 10 anti Act A B R1'
        ),
        'norm_counts_Avg_log10_Expr_Cluster_10_anti_Act_A_B_R2' => array(
            'color' => '#00C086',
            'name' => 'Avg log10 Expr Cluster 10 anti Act A B R2'
        ),
        'norm_counts_Avg_log10_Expr_Cluster_10_anti_Act_A_B_R3' => array(
            'color' => '#00C086',
            'name' => 'Avg log10 Expr Cluster 10 anti Act A B R3'
        ),
        'norm_counts_Avg_log10_Expr_Cluster_10_anti_Act_A_R1' => array(
            'color' => '#00C086',
            'name' => 'Avg log10 Expr Cluster 10 anti Act A R1'
        ),
        'norm_counts_Avg_log10_Expr_Cluster_10_anti_Act_A_R2' => array(
            'color' => '#00C086',
            'name' => 'Avg log10 Expr Cluster 10 anti Act A R2'
        ),
        'norm_counts_Avg_log10_Expr_Cluster_10_anti_Act_A_R3' => array(
            'color' => '#00C086',
            'name' => 'Avg log10 Expr Cluster 10 anti Act A R3'
        ),
        'norm_counts_Avg_log10_Expr_Cluster_10_Control_R1' => array(
            'color' => '#00C086',
            'name' => 'Avg log10 Expr Cluster 10 Control R1'
        ),
        'norm_counts_Avg_log10_Expr_Cluster_10_Control_R2' => array(
            'color' => '#00C086',
            'name' => 'Avg log10 Expr Cluster 10 Control R2'
        ),
        'norm_counts_Avg_log10_Expr_Cluster_10_Control_R3' => array(
            'color' => '#00C086',
            'name' => 'Avg log10 Expr Cluster 10 Control R3'
        ),
        'norm_counts_Avg_log10_Expr_Cluster_18_anti_Act_A_B_R1' => array(
            'color' => '#00C086',
            'name' => 'Avg log10 Expr Cluster 18 anti Act A B R1'
        ),
        'norm_counts_Avg_log10_Expr_Cluster_18_anti_Act_A_B_R2' => array(
            'color' => '#00C086',
            'name' => 'Avg log10 Expr Cluster 18 anti Act A B R2'
        ),
        'norm_counts_Avg_log10_Expr_Cluster_18_anti_Act_A_B_R3' => array(
            'color' => '#00C086',
            'name' => 'Avg log10 Expr Cluster 18 anti Act A B R3'
        ),
        'norm_counts_Avg_log10_Expr_Cluster_18_anti_Act_A_R1' => array(
            'color' => '#00C086',
            'name' => 'Avg log10 Expr Cluster 18 anti Act A R1'
        ),
        'norm_counts_Avg_log10_Expr_Cluster_18_anti_Act_A_R2' => array(
            'color' => '#00C086',
            'name' => 'Avg log10 Expr Cluster 18 anti Act A R2'
        ),
        'norm_counts_Avg_log10_Expr_Cluster_18_anti_Act_A_R3' => array(
            'color' => '#00C086',
            'name' => 'Avg log10 Expr Cluster 18 anti Act A R3'
        ),
        'norm_counts_Avg_log10_Expr_Cluster_18_Control_R1' => array(
            'color' => '#00C086',
            'name' => 'Avg log10 Expr Cluster 18 Control R1'
        ),
        'norm_counts_Avg_log10_Expr_Cluster_18_Control_R2' => array(
            'color' => '#00C086',
            'name' => 'Avg log10 Expr Cluster 18 Control R2'
        ),
        'norm_counts_Avg_log10_Expr_Cluster_18_Control_R3' => array(
            'color' => '#00C086',
            'name' => 'Avg log10 Expr Cluster 18 Control R3'
        ),
        'norm_counts_Avg_log10_Expr_Cluster_2_anti_Act_A_B_R1' => array(
            'color' => '#00BFC4',
            'name' => 'Avg log10 Expr Cluster 2 anti Act A B R1'
        ),
        'norm_counts_Avg_log10_Expr_Cluster_2_anti_Act_A_B_R2' => array(
            'color' => '#00BFC8',
            'name' => 'Avg log10 Expr Cluster 2 anti Act A B R2'
        ),
        'norm_counts_Avg_log10_Expr_Cluster_2_anti_Act_A_B_R3' => array(
            'color' => '#00BECC',
            'name' => 'Avg log10 Expr Cluster 2 anti Act A B R3'
        ),
        'norm_counts_Avg_log10_Expr_Cluster_2_anti_Act_A_R1' => array(
            'color' => '#00BECF',
            'name' => 'Avg log10 Expr Cluster 2 anti Act A R1'
        ),
        'norm_counts_Avg_log10_Expr_Cluster_2_anti_Act_A_R2' => array(
            'color' => '#00BDD2',
            'name' => 'Avg log10 Expr Cluster 2 anti Act A R2'
        ),
        'norm_counts_Avg_log10_Expr_Cluster_2_anti_Act_A_R3' => array(
            'color' => '#00BCD6',
            'name' => 'Avg log10 Expr Cluster 2 anti Act A R3'
        ),
        'norm_counts_Avg_log10_Expr_Cluster_2_Control_R1' => array(
            'color' => '#00BCD9',
            'name' => 'Avg log10 Expr Cluster 2 Control R1'
        ),
        'norm_counts_Avg_log10_Expr_Cluster_2_Control_R2' => array(
            'color' => '#00BCD9',
            'name' => 'Avg log10 Expr Cluster 2 Control R2'
        ),
        'norm_counts_Avg_log10_Expr_Cluster_2_Control_R3' => array(
            'color' => '#00BCD9',
            'name' => 'Avg log10 Expr Cluster 2 Control R3'
        ),
        'norm_counts_Avg_log10_Expr_Cluster_23_anti_Act_A_B_R3' => array(
            'color' => '#00BCD9',
            'name' => 'Avg log10 Expr Cluster 23 anti Act A B R3'
        ),
        'norm_counts_Avg_log10_Expr_ECs_anti_Act_A_B_R1' => array(
            'color' => '#00BADF',
            'name' => 'Avg log10 Expr ECs anti Act A B R1'
        ),
        'norm_counts_Avg_log10_Expr_ECs_anti_Act_A_B_R2' => array(
            'color' => '#00B9E2',
            'name' => 'Avg log10 Expr ECs anti Act A B R2'
        ),
        'norm_counts_Avg_log10_Expr_ECs_anti_Act_A_B_R3' => array(
            'color' => '#00B8E5',
            'name' => 'Avg log10 Expr ECs anti Act A B R3'
        ),
        'norm_counts_Avg_log10_Expr_ECs_anti_Act_A_R1' => array(
            'color' => '#00B7E8',
            'name' => 'Avg log10 Expr ECs anti Act A R1'
        ),
        'norm_counts_Avg_log10_Expr_ECs_anti_Act_A_R2' => array(
            'color' => '#00B6EB',
            'name' => 'Avg log10 Expr ECs anti Act A R2'
        ),
        'norm_counts_Avg_log10_Expr_ECs_anti_Act_A_R3' => array(
            'color' => '#00B5ED',
            'name' => 'Avg log10 Expr ECs anti Act A R3'
        ),
        'norm_counts_Avg_log10_Expr_ECs_Control_R1' => array(
            'color' => '#00B4F0',
            'name' => 'Avg log10 Expr ECs Control R1'
        ),
        'norm_counts_Avg_log10_Expr_ECs_Control_R2' => array(
            'color' => '#00B4F0',
            'name' => 'Avg log10 Expr ECs Control R2'
        ),
        'norm_counts_Avg_log10_Expr_ECs_Control_R3' => array(
            'color' => '#00B4F0',
            'name' => 'Avg log10 Expr ECs Control R3'
        ),
        'norm_counts_Avg_log10_Expr_EP_anti_Act_A_B_R1' => array(
            'color' => '#00B2F2',
            'name' => 'Avg log10 Expr EP anti Act A B R1'
        ),
        'norm_counts_Avg_log10_Expr_EP_anti_Act_A_B_R2' => array(
            'color' => '#00B1F5',
            'name' => 'Avg log10 Expr EP anti Act A B R2'
        ),
        'norm_counts_Avg_log10_Expr_EP_anti_Act_A_B_R3' => array(
            'color' => '#00B0F7',
            'name' => 'Avg log10 Expr EP anti Act A B R3'
        ),
        'norm_counts_Avg_log10_Expr_EP_anti_Act_A_R1' => array(
            'color' => '#00AEF9',
            'name' => 'Avg log10 Expr EP anti Act A R1'
        ),
        'norm_counts_Avg_log10_Expr_EP_anti_Act_A_R3' => array(
            'color' => '#00ADFB',
            'name' => 'Avg log10 Expr EP anti Act A R3'
        ),
        'norm_counts_Avg_log10_Expr_EP_Control_R1' => array(
            'color' => '#00ABFD',
            'name' => 'Avg log10 Expr EP Control R1'
        ),
        'norm_counts_Avg_log10_Expr_EP_Control_R2' => array(
            'color' => '#00ABFD',
            'name' => 'Avg log10 Expr EP Control R2'
        ),
        'norm_counts_Avg_log10_Expr_FB_anti_Act_A_B_R1' => array(
            'color' => '#00A9FF',
            'name' => 'Avg log10 Expr FB anti Act A B R1'
        ),
        'norm_counts_Avg_log10_Expr_FB_anti_Act_A_B_R2' => array(
            'color' => '#00A8FF',
            'name' => 'Avg log10 Expr FB anti Act A B R2'
        ),
        'norm_counts_Avg_log10_Expr_FB_anti_Act_A_B_R3' => array(
            'color' => '#00A6FF',
            'name' => 'Avg log10 Expr FB anti Act A B R3'
        ),
        'norm_counts_Avg_log10_Expr_FB_anti_Act_A_R1' => array(
            'color' => '#06A4FF',
            'name' => 'Avg log10 Expr FB anti Act A R1'
        ),
        'norm_counts_Avg_log10_Expr_FB_anti_Act_A_R2' => array(
            'color' => '#30A2FF',
            'name' => 'Avg log10 Expr FB anti Act A R2'
        ),
        'norm_counts_Avg_log10_Expr_FB_anti_Act_A_R3' => array(
            'color' => '#45A0FF',
            'name' => 'Avg log10 Expr FB anti Act A R3'
        ),
        'norm_counts_Avg_log10_Expr_FB_Control_R1' => array(
            'color' => '#549EFF',
            'name' => 'Avg log10 Expr FB Control R1'
        ),
        'norm_counts_Avg_log10_Expr_FB_Control_R2' => array(
            'color' => '#549EFF',
            'name' => 'Avg log10 Expr FB Control R2'
        ),
        'norm_counts_Avg_log10_Expr_FB_Control_R3' => array(
            'color' => '#549EFF',
            'name' => 'Avg log10 Expr FB Control R3'
        ),
        'norm_counts_Avg_log10_Expr_LECs_anti_Act_A_B_R1' => array(
            'color' => '#619CFF',
            'name' => 'Avg log10 Expr LECs anti Act A B R1'
        ),
        'norm_counts_Avg_log10_Expr_LECs_anti_Act_A_B_R2' => array(
            'color' => '#6C9AFF',
            'name' => 'Avg log10 Expr LECs anti Act A B R2'
        ),
        'norm_counts_Avg_log10_Expr_LECs_anti_Act_A_B_R3' => array(
            'color' => '#7698FF',
            'name' => 'Avg log10 Expr LECs anti Act A B R3'
        ),
        'norm_counts_Avg_log10_Expr_LECs_anti_Act_A_R1' => array(
            'color' => '#8095FF',
            'name' => 'Avg log10 Expr LECs anti Act A R1'
        ),
        'norm_counts_Avg_log10_Expr_LECs_anti_Act_A_R2' => array(
            'color' => '#8893FF',
            'name' => 'Avg log10 Expr LECs anti Act A R2'
        ),
        'norm_counts_Avg_log10_Expr_LECs_anti_Act_A_R3' => array(
            'color' => '#9091FF',
            'name' => 'Avg log10 Expr LECs anti Act A R3'
        ),
        'norm_counts_Avg_log10_Expr_LECs_Control_R1' => array(
            'color' => '#988FFF',
            'name' => 'Avg log10 Expr LECs Control R1'
        ),
        'norm_counts_Avg_log10_Expr_LECs_Control_R2' => array(
            'color' => '#988FFF',
            'name' => 'Avg log10 Expr LECs Control R2'
        ),
        'norm_counts_Avg_log10_Expr_LECs_Control_R3' => array(
            'color' => '#988FFF',
            'name' => 'Avg log10 Expr LECs Control R3'
        ),
        'norm_counts_Avg_log10_Expr_MDSCs_NEUT_anti_Act_A_B_R1' => array(
            'color' => '#9F8CFF',
            'name' => 'Avg log10 Expr MDSCs NEUT anti Act A B R1'
        ),
        'norm_counts_Avg_log10_Expr_MDSCs_NEUT_anti_Act_A_B_R2' => array(
            'color' => '#A58AFF',
            'name' => 'Avg log10 Expr MDSCs NEUT anti Act A B R2'
        ),
        'norm_counts_Avg_log10_Expr_MDSCs_NEUT_anti_Act_A_B_R3' => array(
            'color' => '#AC88FF',
            'name' => 'Avg log10 Expr MDSCs NEUT anti Act A B R3'
        ),
        'norm_counts_Avg_log10_Expr_MDSCs_NEUT_anti_Act_A_R1' => array(
            'color' => '#B285FF',
            'name' => 'Avg log10 Expr MDSCs NEUT anti Act A R1'
        ),
        'norm_counts_Avg_log10_Expr_MDSCs_NEUT_anti_Act_A_R2' => array(
            'color' => '#B883FF',
            'name' => 'Avg log10 Expr MDSCs NEUT anti Act A R2'
        ),
        'norm_counts_Avg_log10_Expr_MDSCs_NEUT_anti_Act_A_R3' => array(
            'color' => '#BD81FF',
            'name' => 'Avg log10 Expr MDSCs NEUT anti Act A R3'
        ),
        'norm_counts_Avg_log10_Expr_MDSCs_NEUT_Control_R1' => array(
            'color' => '#C27EFF',
            'name' => 'Avg log10 Expr MDSCs NEUT Control R1'
        ),
        'norm_counts_Avg_log10_Expr_MDSCs_NEUT_Control_R2' => array(
            'color' => '#C27EFF',
            'name' => 'Avg log10 Expr MDSCs NEUT Control R2'
        ),
        'norm_counts_Avg_log10_Expr_MDSCs_NEUT_Control_R3' => array(
            'color' => '#C27EFF',
            'name' => 'Avg log10 Expr MDSCs NEUT Control R3'
        ),
        'norm_counts_Avg_log10_Expr_MO_1_anti_Act_A_B_R1' => array(
            'color' => '#C77CFF',
            'name' => 'Avg log10 Expr MO 1 anti Act A B R1'
        ),
        'norm_counts_Avg_log10_Expr_MO_1_anti_Act_A_B_R2' => array(
            'color' => '#CC7AFF',
            'name' => 'Avg log10 Expr MO 1 anti Act A B R2'
        ),
        'norm_counts_Avg_log10_Expr_MO_1_anti_Act_A_B_R3' => array(
            'color' => '#D078FF',
            'name' => 'Avg log10 Expr MO 1 anti Act A B R3'
        ),
        'norm_counts_Avg_log10_Expr_MO_1_anti_Act_A_R1' => array(
            'color' => '#D476FE',
            'name' => 'Avg log10 Expr MO 1 anti Act A R1'
        ),
        'norm_counts_Avg_log10_Expr_MO_1_anti_Act_A_R2' => array(
            'color' => '#D873FC',
            'name' => 'Avg log10 Expr MO 1 anti Act A R2'
        ),
        'norm_counts_Avg_log10_Expr_MO_1_anti_Act_A_R3' => array(
            'color' => '#DC71FA',
            'name' => 'Avg log10 Expr MO 1 anti Act A R3'
        ),
        'norm_counts_Avg_log10_Expr_MO_1_Control_R1' => array(
            'color' => '#DF70F8',
            'name' => 'Avg log10 Expr MO 1 Control R1'
        ),
        'norm_counts_Avg_log10_Expr_MO_1_Control_R2' => array(
            'color' => '#DF70F8',
            'name' => 'Avg log10 Expr MO 1 Control R2'
        ),
        'norm_counts_Avg_log10_Expr_MO_1_Control_R3' => array(
            'color' => '#DF70F8',
            'name' => 'Avg log10 Expr MO 1 Control R3'
        ),
        'norm_counts_Avg_log10_Expr_MQ_2_anti_Act_A_B_R1' => array(
            'color' => '#E36EF6',
            'name' => 'Avg log10 Expr MQ 2 anti Act A B R1'
        ),
        'norm_counts_Avg_log10_Expr_MQ_2_anti_Act_A_B_R2' => array(
            'color' => '#E66CF4',
            'name' => 'Avg log10 Expr MQ 2 anti Act A B R2'
        ),
        'norm_counts_Avg_log10_Expr_MQ_2_anti_Act_A_B_R3' => array(
            'color' => '#E96AF1',
            'name' => 'Avg log10 Expr MQ 2 anti Act A B R3'
        ),
        'norm_counts_Avg_log10_Expr_MQ_2_anti_Act_A_R1' => array(
            'color' => '#EC69EF',
            'name' => 'Avg log10 Expr MQ 2 anti Act A R1'
        ),
        'norm_counts_Avg_log10_Expr_MQ_2_anti_Act_A_R2' => array(
            'color' => '#EE67EC',
            'name' => 'Avg log10 Expr MQ 2 anti Act A R2'
        ),
        'norm_counts_Avg_log10_Expr_MQ_2_anti_Act_A_R3' => array(
            'color' => '#F166E9',
            'name' => 'Avg log10 Expr MQ 2 anti Act A R3'
        ),
        'norm_counts_Avg_log10_Expr_MQ_2_Control_R1' => array(
            'color' => '#F365E6',
            'name' => 'Avg log10 Expr MQ 2 Control R1'
        ),
        'norm_counts_Avg_log10_Expr_MQ_2_Control_R2' => array(
            'color' => '#F365E6',
            'name' => 'Avg log10 Expr MQ 2 Control R2'
        ),
        'norm_counts_Avg_log10_Expr_MQ_2_Control_R3' => array(
            'color' => '#F365E6',
            'name' => 'Avg log10 Expr MQ 2 Control R3'
        ),
        'norm_counts_Avg_log10_Expr_MQ_3_anti_Act_A_B_R1' => array(
            'color' => '#F564E3',
            'name' => 'Avg log10 Expr MQ 3 anti Act A B R1'
        ),
        'norm_counts_Avg_log10_Expr_MQ_3_anti_Act_A_B_R2' => array(
            'color' => '#F763E0',
            'name' => 'Avg log10 Expr MQ 3 anti Act A B R2'
        ),
        'norm_counts_Avg_log10_Expr_MQ_3_anti_Act_A_B_R3' => array(
            'color' => '#F862DD',
            'name' => 'Avg log10 Expr MQ 3 anti Act A B R3'
        ),
        'norm_counts_Avg_log10_Expr_MQ_3_anti_Act_A_R1' => array(
            'color' => '#FA62DA',
            'name' => 'Avg log10 Expr MQ 3 anti Act A R1'
        ),
        'norm_counts_Avg_log10_Expr_MQ_3_anti_Act_A_R2' => array(
            'color' => '#FB61D7',
            'name' => 'Avg log10 Expr MQ 3 anti Act A R2'
        ),
        'norm_counts_Avg_log10_Expr_MQ_3_anti_Act_A_R3' => array(
            'color' => '#FD61D3',
            'name' => 'Avg log10 Expr MQ 3 anti Act A R3'
        ),
        'norm_counts_Avg_log10_Expr_MQ_3_Control_R1' => array(
            'color' => '#FE61D0',
            'name' => 'Avg log10 Expr MQ 3 Control R1'
        ),
        'norm_counts_Avg_log10_Expr_MQ_3_Control_R2' => array(
            'color' => '#FE61D0',
            'name' => 'Avg log10 Expr MQ 3 Control R2'
        ),
        'norm_counts_Avg_log10_Expr_MQ_3_Control_R3' => array(
            'color' => '#FE61D0',
            'name' => 'Avg log10 Expr MQ 3 Control R3'
        ),
        'norm_counts_Avg_log10_Expr_MQ_4_anti_Act_A_B_R1' => array(
            'color' => '#FF61CC',
            'name' => 'Avg log10 Expr MQ 4 anti Act A B R1'
        ),
        'norm_counts_Avg_log10_Expr_MQ_4_anti_Act_A_B_R2' => array(
            'color' => '#FF61C8',
            'name' => 'Avg log10 Expr MQ 4 anti Act A B R2'
        ),
        'norm_counts_Avg_log10_Expr_MQ_4_anti_Act_A_B_R3' => array(
            'color' => '#FF61C4',
            'name' => 'Avg log10 Expr MQ 4 anti Act A B R3'
        ),
        'norm_counts_Avg_log10_Expr_MQ_4_anti_Act_A_R1' => array(
            'color' => '#FF62C1',
            'name' => 'Avg log10 Expr MQ 4 anti Act A R1'
        ),
        'norm_counts_Avg_log10_Expr_MQ_4_anti_Act_A_R2' => array(
            'color' => '#FF62BD',
            'name' => 'Avg log10 Expr MQ 4 anti Act A R2'
        ),
        'norm_counts_Avg_log10_Expr_MQ_4_anti_Act_A_R3' => array(
            'color' => '#FF63B9',
            'name' => 'Avg log10 Expr MQ 4 anti Act A R3'
        ),
        'norm_counts_Avg_log10_Expr_MQ_4_Control_R1' => array(
            'color' => '#FF63B4',
            'name' => 'Avg log10 Expr MQ 4 Control R1'
        ),
        'norm_counts_Avg_log10_Expr_MQ_4_Control_R2' => array(
            'color' => '#FF63B4',
            'name' => 'Avg log10 Expr MQ 4 Control R2'
        ),
        'norm_counts_Avg_log10_Expr_MQ_4_Control_R3' => array(
            'color' => '#FF63B4',
            'name' => 'Avg log10 Expr MQ 4 Control R3'
        ),
        'norm_counts_Avg_log10_Expr_NK_cells_anti_Act_A_B_R1' => array(
            'color' => '#FF64B0',
            'name' => 'Avg log10 Expr NK cells anti Act A B R1'
        ),
        'norm_counts_Avg_log10_Expr_NK_cells_anti_Act_A_B_R2' => array(
            'color' => '#FF65AC',
            'name' => 'Avg log10 Expr NK cells anti Act A B R2'
        ),
        'norm_counts_Avg_log10_Expr_NK_cells_anti_Act_A_B_R3' => array(
            'color' => '#FF66A8',
            'name' => 'Avg log10 Expr NK cells anti Act A B R3'
        ),
        'norm_counts_Avg_log10_Expr_NK_cells_anti_Act_A_R1' => array(
            'color' => '#FF67A3',
            'name' => 'Avg log10 Expr NK cells anti Act A R1'
        ),
        'norm_counts_Avg_log10_Expr_NK_cells_anti_Act_A_R2' => array(
            'color' => '#FF689F',
            'name' => 'Avg log10 Expr NK cells anti Act A R2'
        ),
        'norm_counts_Avg_log10_Expr_NK_cells_anti_Act_A_R3' => array(
            'color' => '#FF699A',
            'name' => 'Avg log10 Expr NK cells anti Act A R3'
        ),
        'norm_counts_Avg_log10_Expr_NK_cells_Control_R1' => array(
            'color' => '#FF6B96',
            'name' => 'Avg log10 Expr NK cells Control R1'
        ),
        'norm_counts_Avg_log10_Expr_NK_cells_Control_R2' => array(
            'color' => '#FF6B96',
            'name' => 'Avg log10 Expr NK cells Control R2'
        ),
        'norm_counts_Avg_log10_Expr_NK_cells_Control_R3' => array(
            'color' => '#FF6B96',
            'name' => 'Avg log10 Expr NK cells Control R3'
        ),
        'norm_counts_Avg_log10_Expr_Stroma_Cells_anti_Act_A_B_R1' => array(
            'color' => '#FF6C91',
            'name' => 'Avg log10 Expr Stroma Cells anti Act A B R1'
        ),
        'norm_counts_Avg_log10_Expr_Stroma_Cells_anti_Act_A_B_R2' => array(
            'color' => '#FF6C91',
            'name' => 'Avg log10 Expr Stroma Cells anti Act A B R2'
        ),
        'norm_counts_Avg_log10_Expr_Stroma_Cells_anti_Act_A_B_R3' => array(
            'color' => '#FF6C91',
            'name' => 'Avg log10 Expr Stroma Cells anti Act A B R3'
        ),
        'norm_counts_Avg_log10_Expr_Stroma_Cells_anti_Act_A_R1' => array(
            'color' => '#FF6C91',
            'name' => 'Avg log10 Expr Stroma Cells anti Act A R1'
        ),
        'norm_counts_Avg_log10_Expr_Stroma_Cells_anti_Act_A_R2' => array(
            'color' => '#FF6C91',
            'name' => 'Avg log10 Expr Stroma Cells anti Act A R2'
        ),
        'norm_counts_Avg_log10_Expr_Stroma_Cells_anti_Act_A_R3' => array(
            'color' => '#FF6C91',
            'name' => 'Avg log10 Expr Stroma Cells anti Act A R3'
        ),
        'norm_counts_Avg_log10_Expr_Stroma_Cells_Control_R1' => array(
            'color' => '#FF6C91',
            'name' => 'Avg log10 Expr Stroma Cells Control R1'
        ),
        'norm_counts_Avg_log10_Expr_Stroma_Cells_Control_R2' => array(
            'color' => '#FF6C91',
            'name' => 'Avg log10 Expr Stroma Cells Control R2'
        ),
        'norm_counts_Avg_log10_Expr_Stroma_Cells_Control_R3' => array(
            'color' => '#FF6C91',
            'name' => 'Avg log10 Expr Stroma Cells Control R3'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'lg10 Expr for all Samples',
        'sidelabel' => 'lg10 Expr'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_Avg_log10_Expr_Sc_B_cells_anti_Act_A_B_R1','lg2_avg_Avg_log10_Expr_Sc_B_cells_anti_Act_A_B_R2','lg2_avg_Avg_log10_Expr_Sc_B_cells_anti_Act_A_B_R3','lg2_avg_Avg_log10_Expr_Sc_B_cells_anti_Act_A_R1','lg2_avg_Avg_log10_Expr_Sc_B_cells_anti_Act_A_R2','lg2_avg_Avg_log10_Expr_Sc_B_cells_anti_Act_A_R3','lg2_avg_Avg_log10_Expr_Sc_B_cells_Control_R1','lg2_avg_Avg_log10_Expr_Sc_B_cells_Control_R2','lg2_avg_Avg_log10_Expr_Sc_B_cells_Control_R3','lg2_avg_Avg_log10_Expr_Sc_Cancer_Cells_1_anti_Act_A_B_R1','lg2_avg_Avg_log10_Expr_Sc_Cancer_Cells_1_anti_Act_A_B_R2','lg2_avg_Avg_log10_Expr_Sc_Cancer_Cells_1_anti_Act_A_B_R3','lg2_avg_Avg_log10_Expr_Sc_Cancer_Cells_1_anti_Act_A_R1','lg2_avg_Avg_log10_Expr_Sc_Cancer_Cells_1_anti_Act_A_R2','lg2_avg_Avg_log10_Expr_Sc_Cancer_Cells_1_anti_Act_A_R3','lg2_avg_Avg_log10_Expr_Sc_Cancer_Cells_1_Control_R1','lg2_avg_Avg_log10_Expr_Sc_Cancer_Cells_1_Control_R2','lg2_avg_Avg_log10_Expr_Sc_Cancer_Cells_1_Control_R3','lg2_avg_Avg_log10_Expr_Sc_Cancer_Cells_2_anti_Act_A_B_R1','lg2_avg_Avg_log10_Expr_Sc_Cancer_Cells_2_anti_Act_A_B_R2','lg2_avg_Avg_log10_Expr_Sc_Cancer_Cells_2_anti_Act_A_B_R3','lg2_avg_Avg_log10_Expr_Sc_Cancer_Cells_2_anti_Act_A_R1','lg2_avg_Avg_log10_Expr_Sc_Cancer_Cells_2_anti_Act_A_R2','lg2_avg_Avg_log10_Expr_Sc_Cancer_Cells_2_anti_Act_A_R3','lg2_avg_Avg_log10_Expr_Sc_Cancer_Cells_2_Control_R1','lg2_avg_Avg_log10_Expr_Sc_Cancer_Cells_2_Control_R2','lg2_avg_Avg_log10_Expr_Sc_Cancer_Cells_2_Control_R3','lg2_avg_Avg_log10_Expr_Sc_Cancer_Cells_3_anti_Act_A_B_R1','lg2_avg_Avg_log10_Expr_Sc_Cancer_Cells_3_anti_Act_A_B_R2','lg2_avg_Avg_log10_Expr_Sc_Cancer_Cells_3_anti_Act_A_B_R3','lg2_avg_Avg_log10_Expr_Sc_Cancer_Cells_3_anti_Act_A_R1','lg2_avg_Avg_log10_Expr_Sc_Cancer_Cells_3_anti_Act_A_R2','lg2_avg_Avg_log10_Expr_Sc_Cancer_Cells_3_anti_Act_A_R3','lg2_avg_Avg_log10_Expr_Sc_Cancer_Cells_3_Control_R1','lg2_avg_Avg_log10_Expr_Sc_Cancer_Cells_3_Control_R2','lg2_avg_Avg_log10_Expr_Sc_Cancer_Cells_3_Control_R3','lg2_avg_Avg_log10_Expr_Sc_CD4_T_cells_anti_Act_A_B_R1','lg2_avg_Avg_log10_Expr_Sc_CD4_T_cells_anti_Act_A_B_R2','lg2_avg_Avg_log10_Expr_Sc_CD4_T_cells_anti_Act_A_B_R3','lg2_avg_Avg_log10_Expr_Sc_CD4_T_cells_anti_Act_A_R1','lg2_avg_Avg_log10_Expr_Sc_CD4_T_cells_anti_Act_A_R2','lg2_avg_Avg_log10_Expr_Sc_CD4_T_cells_anti_Act_A_R3','lg2_avg_Avg_log10_Expr_Sc_CD4_T_cells_Control_R1','lg2_avg_Avg_log10_Expr_Sc_CD4_T_cells_Control_R2','lg2_avg_Avg_log10_Expr_Sc_CD4_Th_cells_anti_Act_A_B_R1','lg2_avg_Avg_log10_Expr_Sc_CD4_Th_cells_anti_Act_A_B_R2','lg2_avg_Avg_log10_Expr_Sc_CD4_Th_cells_anti_Act_A_B_R3','lg2_avg_Avg_log10_Expr_Sc_CD4_Th_cells_anti_Act_A_R1','lg2_avg_Avg_log10_Expr_Sc_CD4_Th_cells_anti_Act_A_R2','lg2_avg_Avg_log10_Expr_Sc_CD4_Th_cells_anti_Act_A_R3','lg2_avg_Avg_log10_Expr_Sc_CD4_Th_cells_Control_R1','lg2_avg_Avg_log10_Expr_Sc_CD4_Th_cells_Control_R2','lg2_avg_Avg_log10_Expr_Sc_CD4_Th_cells_Control_R3','lg2_avg_Avg_log10_Expr_Sc_CD4_Treg_cells_anti_Act_A_B_R1','lg2_avg_Avg_log10_Expr_Sc_CD4_Treg_cells_anti_Act_A_B_R2','lg2_avg_Avg_log10_Expr_Sc_CD4_Treg_cells_anti_Act_A_B_R3','lg2_avg_Avg_log10_Expr_Sc_CD4_Treg_cells_anti_Act_A_R1','lg2_avg_Avg_log10_Expr_Sc_CD4_Treg_cells_anti_Act_A_R2','lg2_avg_Avg_log10_Expr_Sc_CD4_Treg_cells_anti_Act_A_R3','lg2_avg_Avg_log10_Expr_Sc_CD4_Treg_cells_Control_R1','lg2_avg_Avg_log10_Expr_Sc_CD4_Treg_cells_Control_R2','lg2_avg_Avg_log10_Expr_Sc_CD4_Treg_cells_Control_R3','lg2_avg_Avg_log10_Expr_Sc_CD8_T_cells_anti_Act_A_B_R1','lg2_avg_Avg_log10_Expr_Sc_CD8_T_cells_anti_Act_A_B_R2','lg2_avg_Avg_log10_Expr_Sc_CD8_T_cells_anti_Act_A_B_R3','lg2_avg_Avg_log10_Expr_Sc_CD8_T_cells_anti_Act_A_R1','lg2_avg_Avg_log10_Expr_Sc_CD8_T_cells_anti_Act_A_R2','lg2_avg_Avg_log10_Expr_Sc_CD8_T_cells_anti_Act_A_R3','lg2_avg_Avg_log10_Expr_Sc_CD8_T_cells_Control_R1','lg2_avg_Avg_log10_Expr_Sc_CD8_T_cells_Control_R2','lg2_avg_Avg_log10_Expr_Sc_CD8_T_cells_Control_R3','lg2_avg_Avg_log10_Expr_Sc_Cluster_0_anti_Act_A_B_R1','lg2_avg_Avg_log10_Expr_Sc_Cluster_0_anti_Act_A_B_R2','lg2_avg_Avg_log10_Expr_Sc_Cluster_0_anti_Act_A_B_R3','lg2_avg_Avg_log10_Expr_Sc_Cluster_0_anti_Act_A_R1','lg2_avg_Avg_log10_Expr_Sc_Cluster_0_anti_Act_A_R2','lg2_avg_Avg_log10_Expr_Sc_Cluster_0_anti_Act_A_R3','lg2_avg_Avg_log10_Expr_Sc_Cluster_0_Control_R1','lg2_avg_Avg_log10_Expr_Sc_Cluster_0_Control_R2','lg2_avg_Avg_log10_Expr_Sc_Cluster_0_Control_R3','lg2_avg_Avg_log10_Expr_Sc_Cluster_1_anti_Act_A_B_R1','lg2_avg_Avg_log10_Expr_Sc_Cluster_1_anti_Act_A_B_R2','lg2_avg_Avg_log10_Expr_Sc_Cluster_1_anti_Act_A_B_R3','lg2_avg_Avg_log10_Expr_Sc_Cluster_1_anti_Act_A_R1','lg2_avg_Avg_log10_Expr_Sc_Cluster_1_anti_Act_A_R2','lg2_avg_Avg_log10_Expr_Sc_Cluster_1_anti_Act_A_R3','lg2_avg_Avg_log10_Expr_Sc_Cluster_1_Control_R1','lg2_avg_Avg_log10_Expr_Sc_Cluster_1_Control_R2','lg2_avg_Avg_log10_Expr_Sc_Cluster_1_Control_R3','lg2_avg_Avg_log10_Expr_Sc_Cluster_10_anti_Act_A_B_R1','lg2_avg_Avg_log10_Expr_Sc_Cluster_10_anti_Act_A_B_R2','lg2_avg_Avg_log10_Expr_Sc_Cluster_10_anti_Act_A_B_R3','lg2_avg_Avg_log10_Expr_Sc_Cluster_10_anti_Act_A_R1','lg2_avg_Avg_log10_Expr_Sc_Cluster_10_anti_Act_A_R2','lg2_avg_Avg_log10_Expr_Sc_Cluster_10_anti_Act_A_R3','lg2_avg_Avg_log10_Expr_Sc_Cluster_10_Control_R1','lg2_avg_Avg_log10_Expr_Sc_Cluster_10_Control_R2','lg2_avg_Avg_log10_Expr_Sc_Cluster_10_Control_R3','lg2_avg_Avg_log10_Expr_Sc_Cluster_18_anti_Act_A_B_R1','lg2_avg_Avg_log10_Expr_Sc_Cluster_18_anti_Act_A_B_R2','lg2_avg_Avg_log10_Expr_Sc_Cluster_18_anti_Act_A_B_R3','lg2_avg_Avg_log10_Expr_Sc_Cluster_18_anti_Act_A_R1','lg2_avg_Avg_log10_Expr_Sc_Cluster_18_anti_Act_A_R2','lg2_avg_Avg_log10_Expr_Sc_Cluster_18_anti_Act_A_R3','lg2_avg_Avg_log10_Expr_Sc_Cluster_18_Control_R1','lg2_avg_Avg_log10_Expr_Sc_Cluster_18_Control_R2','lg2_avg_Avg_log10_Expr_Sc_Cluster_18_Control_R3','lg2_avg_Avg_log10_Expr_Sc_Cluster_2_anti_Act_A_B_R1','lg2_avg_Avg_log10_Expr_Sc_Cluster_2_anti_Act_A_B_R2','lg2_avg_Avg_log10_Expr_Sc_Cluster_2_anti_Act_A_B_R3','lg2_avg_Avg_log10_Expr_Sc_Cluster_2_anti_Act_A_R1','lg2_avg_Avg_log10_Expr_Sc_Cluster_2_anti_Act_A_R2','lg2_avg_Avg_log10_Expr_Sc_Cluster_2_anti_Act_A_R3','lg2_avg_Avg_log10_Expr_Sc_Cluster_2_Control_R1','lg2_avg_Avg_log10_Expr_Sc_Cluster_2_Control_R2','lg2_avg_Avg_log10_Expr_Sc_Cluster_2_Control_R3','lg2_avg_Avg_log10_Expr_Sc_Cluster_23_anti_Act_A_B_R3','lg2_avg_Avg_log10_Expr_Sc_ECs_anti_Act_A_B_R1','lg2_avg_Avg_log10_Expr_Sc_ECs_anti_Act_A_B_R2','lg2_avg_Avg_log10_Expr_Sc_ECs_anti_Act_A_B_R3','lg2_avg_Avg_log10_Expr_Sc_ECs_anti_Act_A_R1','lg2_avg_Avg_log10_Expr_Sc_ECs_anti_Act_A_R2','lg2_avg_Avg_log10_Expr_Sc_ECs_anti_Act_A_R3','lg2_avg_Avg_log10_Expr_Sc_ECs_Control_R1','lg2_avg_Avg_log10_Expr_Sc_ECs_Control_R2','lg2_avg_Avg_log10_Expr_Sc_ECs_Control_R3','lg2_avg_Avg_log10_Expr_Sc_EP_anti_Act_A_B_R1','lg2_avg_Avg_log10_Expr_Sc_EP_anti_Act_A_B_R2','lg2_avg_Avg_log10_Expr_Sc_EP_anti_Act_A_B_R3','lg2_avg_Avg_log10_Expr_Sc_EP_anti_Act_A_R1','lg2_avg_Avg_log10_Expr_Sc_EP_anti_Act_A_R3','lg2_avg_Avg_log10_Expr_Sc_EP_Control_R1','lg2_avg_Avg_log10_Expr_Sc_EP_Control_R2','lg2_avg_Avg_log10_Expr_Sc_FB_anti_Act_A_B_R1','lg2_avg_Avg_log10_Expr_Sc_FB_anti_Act_A_B_R2','lg2_avg_Avg_log10_Expr_Sc_FB_anti_Act_A_B_R3','lg2_avg_Avg_log10_Expr_Sc_FB_anti_Act_A_R1','lg2_avg_Avg_log10_Expr_Sc_FB_anti_Act_A_R2','lg2_avg_Avg_log10_Expr_Sc_FB_anti_Act_A_R3','lg2_avg_Avg_log10_Expr_Sc_FB_Control_R1','lg2_avg_Avg_log10_Expr_Sc_FB_Control_R2','lg2_avg_Avg_log10_Expr_Sc_FB_Control_R3','lg2_avg_Avg_log10_Expr_Sc_LECs_anti_Act_A_B_R1','lg2_avg_Avg_log10_Expr_Sc_LECs_anti_Act_A_B_R2','lg2_avg_Avg_log10_Expr_Sc_LECs_anti_Act_A_B_R3','lg2_avg_Avg_log10_Expr_Sc_LECs_anti_Act_A_R1','lg2_avg_Avg_log10_Expr_Sc_LECs_anti_Act_A_R2','lg2_avg_Avg_log10_Expr_Sc_LECs_anti_Act_A_R3','lg2_avg_Avg_log10_Expr_Sc_LECs_Control_R1','lg2_avg_Avg_log10_Expr_Sc_LECs_Control_R2','lg2_avg_Avg_log10_Expr_Sc_LECs_Control_R3','lg2_avg_Avg_log10_Expr_Sc_MDSCs_NEUT_anti_Act_A_B_R1','lg2_avg_Avg_log10_Expr_Sc_MDSCs_NEUT_anti_Act_A_B_R2','lg2_avg_Avg_log10_Expr_Sc_MDSCs_NEUT_anti_Act_A_B_R3','lg2_avg_Avg_log10_Expr_Sc_MDSCs_NEUT_anti_Act_A_R1','lg2_avg_Avg_log10_Expr_Sc_MDSCs_NEUT_anti_Act_A_R2','lg2_avg_Avg_log10_Expr_Sc_MDSCs_NEUT_anti_Act_A_R3','lg2_avg_Avg_log10_Expr_Sc_MDSCs_NEUT_Control_R1','lg2_avg_Avg_log10_Expr_Sc_MDSCs_NEUT_Control_R2','lg2_avg_Avg_log10_Expr_Sc_MDSCs_NEUT_Control_R3','lg2_avg_Avg_log10_Expr_Sc_MO_1_anti_Act_A_B_R1','lg2_avg_Avg_log10_Expr_Sc_MO_1_anti_Act_A_B_R2','lg2_avg_Avg_log10_Expr_Sc_MO_1_anti_Act_A_B_R3','lg2_avg_Avg_log10_Expr_Sc_MO_1_anti_Act_A_R1','lg2_avg_Avg_log10_Expr_Sc_MO_1_anti_Act_A_R2','lg2_avg_Avg_log10_Expr_Sc_MO_1_anti_Act_A_R3','lg2_avg_Avg_log10_Expr_Sc_MO_1_Control_R1','lg2_avg_Avg_log10_Expr_Sc_MO_1_Control_R2','lg2_avg_Avg_log10_Expr_Sc_MO_1_Control_R3','lg2_avg_Avg_log10_Expr_Sc_MQ_2_anti_Act_A_B_R1','lg2_avg_Avg_log10_Expr_Sc_MQ_2_anti_Act_A_B_R2','lg2_avg_Avg_log10_Expr_Sc_MQ_2_anti_Act_A_B_R3','lg2_avg_Avg_log10_Expr_Sc_MQ_2_anti_Act_A_R1','lg2_avg_Avg_log10_Expr_Sc_MQ_2_anti_Act_A_R2','lg2_avg_Avg_log10_Expr_Sc_MQ_2_anti_Act_A_R3','lg2_avg_Avg_log10_Expr_Sc_MQ_2_Control_R1','lg2_avg_Avg_log10_Expr_Sc_MQ_2_Control_R2','lg2_avg_Avg_log10_Expr_Sc_MQ_2_Control_R3','lg2_avg_Avg_log10_Expr_Sc_MQ_3_anti_Act_A_B_R1','lg2_avg_Avg_log10_Expr_Sc_MQ_3_anti_Act_A_B_R2','lg2_avg_Avg_log10_Expr_Sc_MQ_3_anti_Act_A_B_R3','lg2_avg_Avg_log10_Expr_Sc_MQ_3_anti_Act_A_R1','lg2_avg_Avg_log10_Expr_Sc_MQ_3_anti_Act_A_R2','lg2_avg_Avg_log10_Expr_Sc_MQ_3_anti_Act_A_R3','lg2_avg_Avg_log10_Expr_Sc_MQ_3_Control_R1','lg2_avg_Avg_log10_Expr_Sc_MQ_3_Control_R2','lg2_avg_Avg_log10_Expr_Sc_MQ_3_Control_R3','lg2_avg_Avg_log10_Expr_Sc_MQ_4_anti_Act_A_B_R1','lg2_avg_Avg_log10_Expr_Sc_MQ_4_anti_Act_A_B_R2','lg2_avg_Avg_log10_Expr_Sc_MQ_4_anti_Act_A_B_R3','lg2_avg_Avg_log10_Expr_Sc_MQ_4_anti_Act_A_R1','lg2_avg_Avg_log10_Expr_Sc_MQ_4_anti_Act_A_R2','lg2_avg_Avg_log10_Expr_Sc_MQ_4_anti_Act_A_R3','lg2_avg_Avg_log10_Expr_Sc_MQ_4_Control_R1','lg2_avg_Avg_log10_Expr_Sc_MQ_4_Control_R2','lg2_avg_Avg_log10_Expr_Sc_MQ_4_Control_R3','lg2_avg_Avg_log10_Expr_Sc_NK_cells_anti_Act_A_B_R1','lg2_avg_Avg_log10_Expr_Sc_NK_cells_anti_Act_A_B_R2','lg2_avg_Avg_log10_Expr_Sc_NK_cells_anti_Act_A_B_R3','lg2_avg_Avg_log10_Expr_Sc_NK_cells_anti_Act_A_R1','lg2_avg_Avg_log10_Expr_Sc_NK_cells_anti_Act_A_R2','lg2_avg_Avg_log10_Expr_Sc_NK_cells_anti_Act_A_R3','lg2_avg_Avg_log10_Expr_Sc_NK_cells_Control_R1','lg2_avg_Avg_log10_Expr_Sc_NK_cells_Control_R2','lg2_avg_Avg_log10_Expr_Sc_NK_cells_Control_R3','lg2_avg_Avg_log10_Expr_Sc_Stroma_Cells_anti_Act_A_B_R1','lg2_avg_Avg_log10_Expr_Sc_Stroma_Cells_anti_Act_A_B_R2','lg2_avg_Avg_log10_Expr_Sc_Stroma_Cells_anti_Act_A_B_R3','lg2_avg_Avg_log10_Expr_Sc_Stroma_Cells_anti_Act_A_R1','lg2_avg_Avg_log10_Expr_Sc_Stroma_Cells_anti_Act_A_R2','lg2_avg_Avg_log10_Expr_Sc_Stroma_Cells_anti_Act_A_R3','lg2_avg_Avg_log10_Expr_Sc_Stroma_Cells_Control_R1','lg2_avg_Avg_log10_Expr_Sc_Stroma_Cells_Control_R2','lg2_avg_Avg_log10_Expr_Sc_Stroma_Cells_Control_R3'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_A_logFC_bulkRNA_Seq_SS_Inhba_Inhba_KO_vs_WT' => array(
            'name' => 'logFC bulkRNA Seq SS Inhba Inhba KO vs WT',
            'slider_min' => -18,
            'slider_max' => 17,
            'default_low' => -18,
            'default_high' => 17
        ),
        'contrast_A_padj_bulkRNA_Seq_SS_Inhba_Inhba_KO_vs_WT' => array(
            'name' => 'padj bulkRNA Seq SS Inhba Inhba KO vs WT',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_C_Inhba_Correlation_Coef' => array(
            'name' => 'Inhba Correlation Coef',
            'slider_min' => -1,
            'slider_max' => 1,
            'default_low' => -1,
            'default_high' => 1
        ),
        'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
            'name' => 'logFC Expressed in N Percent Cells',
            'slider_min' => 0,
            'slider_max' => 100,
            'default_low' => 0,
            'default_high' => 100
        ),
        'contrast_1_logFC_DGE_C8_Regeneron_vs_C8_Ctrl' => array(
            'name' => 'logFC DGE C8 Regeneron vs C8 Ctrl',
            'slider_min' => -4,
            'slider_max' => 4,
            'default_low' => -4,
            'default_high' => 4
        ),
        'contrast_2_logFC_DGE_C8_MatB52_vs_C8_Ctrl' => array(
            'name' => 'logFC DGE C8 MatB52 vs C8 Ctrl',
            'slider_min' => -8,
            'slider_max' => 3,
            'default_low' => -8,
            'default_high' => 3
        ),
        'contrast_3_logFC_DGE_C14_Regeneron_vs_C14_Ctrl' => array(
            'name' => 'logFC DGE C14 Regeneron vs C14 Ctrl',
            'slider_min' => -4,
            'slider_max' => 7,
            'default_low' => -4,
            'default_high' => 7
        ),
        'contrast_4_logFC_DGE_C14_MatB52_vs_C14_Ctrl' => array(
            'name' => 'logFC DGE C14 MatB52 vs C14 Ctrl',
            'slider_min' => -7,
            'slider_max' => 4,
            'default_low' => -7,
            'default_high' => 4
        ),
        'contrast_5_logFC_DGE_C7_Regeneron_vs_C7_Ctrl' => array(
            'name' => 'logFC DGE C7 Regeneron vs C7 Ctrl',
            'slider_min' => -5,
            'slider_max' => 4,
            'default_low' => -5,
            'default_high' => 4
        ),
        'contrast_6_logFC_DGE_C7_MatB52_vs_C7_Ctrl' => array(
            'name' => 'logFC DGE C7 MatB52 vs C7 Ctrl',
            'slider_min' => -7,
            'slider_max' => 4,
            'default_low' => -7,
            'default_high' => 4
        ),
        'contrast_7_logFC_DGE_C17_Regeneron_vs_C17_Ctrl' => array(
            'name' => 'logFC DGE C17 Regeneron vs C17 Ctrl',
            'slider_min' => -5,
            'slider_max' => 5,
            'default_low' => -5,
            'default_high' => 5
        ),
        'contrast_8_logFC_DGE_C17_MatB52_vs_C17_Ctrl' => array(
            'name' => 'logFC DGE C17 MatB52 vs C17 Ctrl',
            'slider_min' => -8,
            'slider_max' => 4,
            'default_low' => -8,
            'default_high' => 4
        ),
        'contrast_9_logFC_DGE_C4_Regeneron_vs_C4_Ctrl' => array(
            'name' => 'logFC DGE C4 Regeneron vs C4 Ctrl',
            'slider_min' => -6,
            'slider_max' => 6,
            'default_low' => -6,
            'default_high' => 6
        ),
        'contrast_10_logFC_DGE_C4_MatB52_vs_C4_Ctrl' => array(
            'name' => '0 logFC DGE C4 MatB52 vs C4 Ctrl',
            'slider_min' => -6,
            'slider_max' => 4,
            'default_low' => -6,
            'default_high' => 4
        ),
        'contrast_11_logFC_DGE_C5_Regeneron_vs_C5_Ctrl' => array(
            'name' => '1 logFC DGE C5 Regeneron vs C5 Ctrl',
            'slider_min' => -5,
            'slider_max' => 7,
            'default_low' => -5,
            'default_high' => 7
        ),
        'contrast_12_logFC_DGE_C5_MatB52_vs_C5_Ctrl' => array(
            'name' => '2 logFC DGE C5 MatB52 vs C5 Ctrl',
            'slider_min' => -5,
            'slider_max' => 8,
            'default_low' => -5,
            'default_high' => 8
        ),
        'contrast_13_logFC_DGE_C6_Regeneron_vs_C6_Ctrl' => array(
            'name' => '3 logFC DGE C6 Regeneron vs C6 Ctrl',
            'slider_min' => -7,
            'slider_max' => 6,
            'default_low' => -7,
            'default_high' => 6
        ),
        'contrast_14_logFC_DGE_C6_MatB52_vs_C6_Ctrl' => array(
            'name' => '4 logFC DGE C6 MatB52 vs C6 Ctrl',
            'slider_min' => -9,
            'slider_max' => 6,
            'default_low' => -9,
            'default_high' => 6
        ),
        'contrast_15_logFC_DGE_C21_Fib_MatB52_vs_Fib_Ctrl' => array(
            'name' => '5 logFC DGE C21 Fib MatB52 vs Fib Ctrl',
            'slider_min' => -6,
            'slider_max' => 6,
            'default_low' => -6,
            'default_high' => 6
        ),
        'contrast_16_logFC_DGE_Fib_C21_Regeneron_vs_Ctrl' => array(
            'name' => '6 logFC DGE Fib C21 Regeneron vs Ctrl',
            'slider_min' => -6,
            'slider_max' => 8,
            'default_low' => -6,
            'default_high' => 8
        ),
        'contrast_17_logFC_DGE_Fib_C21_Regeneron_vs_MatB52' => array(
            'name' => '7 logFC DGE Fib C21 Regeneron vs MatB52',
            'slider_min' => -6,
            'slider_max' => 6,
            'default_low' => -6,
            'default_high' => 6
        ),
        'add_counts_CD4_Th_cells_Residuals' => array(
            'name' => 'CD4 Th cells Residuals',
            'slider_min' => -4,
            'slider_max' => 2,
            'default_low' => -4,
            'default_high' => 2
        ),
        'add_counts_CD8_T_cells_Residuals' => array(
            'name' => 'CD8 T cells Residuals',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'add_counts_CD4_Treg_cells_Residuals' => array(
            'name' => 'CD4 Treg cells Residuals',
            'slider_min' => -4,
            'slider_max' => 3,
            'default_low' => -4,
            'default_high' => 3
        ),
        'add_counts_CD4_T_cells_Residuals' => array(
            'name' => 'CD4 T cells Residuals',
            'slider_min' => -3,
            'slider_max' => 4,
            'default_low' => -3,
            'default_high' => 4
        ),
        'add_counts_Cluster_23_Residuals' => array(
            'name' => 'Cluster 23 Residuals',
            'slider_min' => -4,
            'slider_max' => 2,
            'default_low' => -4,
            'default_high' => 2
        ),
        'add_counts_NK_cells_Residuals' => array(
            'name' => 'NK cells Residuals',
            'slider_min' => -4,
            'slider_max' => 4,
            'default_low' => -4,
            'default_high' => 4
        ),
        'add_counts_B_cells_Residuals' => array(
            'name' => 'B cells Residuals',
            'slider_min' => -4,
            'slider_max' => 3,
            'default_low' => -4,
            'default_high' => 3
        ),
        'add_counts_MO_1_Residuals' => array(
            'name' => 'MO 1 Residuals',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'add_counts_MQ_2_Residuals' => array(
            'name' => 'MQ 2 Residuals',
            'slider_min' => -4,
            'slider_max' => 3,
            'default_low' => -4,
            'default_high' => 3
        ),
        'add_counts_MQ_4_Residuals' => array(
            'name' => 'MQ 4 Residuals',
            'slider_min' => -4,
            'slider_max' => 2,
            'default_low' => -4,
            'default_high' => 2
        ),
        'add_counts_MQ_3_Residuals' => array(
            'name' => 'MQ 3 Residuals',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'add_counts_MDSCs_NEUT_Residuals' => array(
            'name' => 'MDSCs NEUT Residuals',
            'slider_min' => -2,
            'slider_max' => 4,
            'default_low' => -2,
            'default_high' => 4
        ),
        'add_counts_Cluster_18_Residuals' => array(
            'name' => 'Cluster 18 Residuals',
            'slider_min' => -4,
            'slider_max' => 3,
            'default_low' => -4,
            'default_high' => 3
        ),
        'add_counts_Cancer_Cells_3_Residuals' => array(
            'name' => 'Cancer Cells 3 Residuals',
            'slider_min' => -4,
            'slider_max' => 1,
            'default_low' => -4,
            'default_high' => 1
        ),
        'add_counts_Cancer_Cells_2_Residuals' => array(
            'name' => 'Cancer Cells 2 Residuals',
            'slider_min' => -4,
            'slider_max' => 2,
            'default_low' => -4,
            'default_high' => 2
        ),
        'add_counts_Cancer_Cells_1_Residuals' => array(
            'name' => 'Cancer Cells 1 Residuals',
            'slider_min' => -4,
            'slider_max' => 2,
            'default_low' => -4,
            'default_high' => 2
        ),
        'add_counts_EP_Residuals' => array(
            'name' => 'EP Residuals',
            'slider_min' => -3,
            'slider_max' => 4,
            'default_low' => -3,
            'default_high' => 4
        ),
        'add_counts_FB_Residuals' => array(
            'name' => 'FB Residuals',
            'slider_min' => -4,
            'slider_max' => 5,
            'default_low' => -4,
            'default_high' => 5
        ),
        'add_counts_Stroma_Cells_Residuals' => array(
            'name' => 'Stroma Cells Residuals',
            'slider_min' => -3,
            'slider_max' => 4,
            'default_low' => -3,
            'default_high' => 4
        ),
        'add_counts_LECs_Residuals' => array(
            'name' => 'LECs Residuals',
            'slider_min' => -4,
            'slider_max' => 4,
            'default_low' => -4,
            'default_high' => 4
        ),
        'add_counts_ECs_Residuals' => array(
            'name' => 'ECs Residuals',
            'slider_min' => -4,
            'slider_max' => 4,
            'default_low' => -4,
            'default_high' => 4
        ),
        'add_counts_Cluster_0_Residuals' => array(
            'name' => 'Cluster 0 Residuals',
            'slider_min' => -4,
            'slider_max' => 2,
            'default_low' => -4,
            'default_high' => 2
        ),
        'add_counts_Cluster_1_Residuals' => array(
            'name' => 'Cluster 1 Residuals',
            'slider_min' => -4,
            'slider_max' => 2,
            'default_low' => -4,
            'default_high' => 2
        ),
        'add_counts_Cluster_2_Residuals' => array(
            'name' => 'Cluster 2 Residuals',
            'slider_min' => -4,
            'slider_max' => 2,
            'default_low' => -4,
            'default_high' => 2
        ),
        'add_counts_Cluster_10_Residuals' => array(
            'name' => 'Cluster 10 Residuals',
            'slider_min' => -4,
            'slider_max' => 2,
            'default_low' => -4,
            'default_high' => 2
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'SC21185_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'add_counts_Avg_log10_Expr_all',
        'default-y' => 'norm_counts_Avg_log10_Expr_B_cells_anti_Act_A_B_R1',
        'selection' => array(
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg log10 Expr all'
            ),
            'norm_counts_Avg_log10_Expr_B_cells_anti_Act_A_B_R1' => array(
                'name' => 's Avg log10 Expr B cells anti Act A B R1'
            ),
            'contrast_A_logFC_bulkRNA_Seq_SS_Inhba_Inhba_KO_vs_WT' => array(
                'name' => 'logFC bulkRNA Seq SS Inhba Inhba KO vs WT'
            ),
            'contrast_X_logFC_Expressed_in_N_Percent_Cells' => array(
                'name' => 'logFC Expressed in N Percent Cells'
            ),
            'contrast_1_logFC_DGE_C8_Regeneron_vs_C8_Ctrl' => array(
                'name' => 'logFC DGE C8 Regeneron vs C8 Ctrl'
            ),
            'contrast_2_logFC_DGE_C8_MatB52_vs_C8_Ctrl' => array(
                'name' => 'logFC DGE C8 MatB52 vs C8 Ctrl'
            ),
            'contrast_3_logFC_DGE_C14_Regeneron_vs_C14_Ctrl' => array(
                'name' => 'logFC DGE C14 Regeneron vs C14 Ctrl'
            ),
            'contrast_4_logFC_DGE_C14_MatB52_vs_C14_Ctrl' => array(
                'name' => 'logFC DGE C14 MatB52 vs C14 Ctrl'
            ),
            'contrast_5_logFC_DGE_C7_Regeneron_vs_C7_Ctrl' => array(
                'name' => 'logFC DGE C7 Regeneron vs C7 Ctrl'
            ),
            'contrast_6_logFC_DGE_C7_MatB52_vs_C7_Ctrl' => array(
                'name' => 'logFC DGE C7 MatB52 vs C7 Ctrl'
            ),
            'contrast_7_logFC_DGE_C17_Regeneron_vs_C17_Ctrl' => array(
                'name' => 'logFC DGE C17 Regeneron vs C17 Ctrl'
            ),
            'contrast_8_logFC_DGE_C17_MatB52_vs_C17_Ctrl' => array(
                'name' => 'logFC DGE C17 MatB52 vs C17 Ctrl'
            ),
            'contrast_9_logFC_DGE_C4_Regeneron_vs_C4_Ctrl' => array(
                'name' => 'logFC DGE C4 Regeneron vs C4 Ctrl'
            ),
            'contrast_10_logFC_DGE_C4_MatB52_vs_C4_Ctrl' => array(
                'name' => '0 logFC DGE C4 MatB52 vs C4 Ctrl'
            ),
            'contrast_11_logFC_DGE_C5_Regeneron_vs_C5_Ctrl' => array(
                'name' => '1 logFC DGE C5 Regeneron vs C5 Ctrl'
            ),
            'contrast_12_logFC_DGE_C5_MatB52_vs_C5_Ctrl' => array(
                'name' => '2 logFC DGE C5 MatB52 vs C5 Ctrl'
            ),
            'contrast_13_logFC_DGE_C6_Regeneron_vs_C6_Ctrl' => array(
                'name' => '3 logFC DGE C6 Regeneron vs C6 Ctrl'
            ),
            'contrast_14_logFC_DGE_C6_MatB52_vs_C6_Ctrl' => array(
                'name' => '4 logFC DGE C6 MatB52 vs C6 Ctrl'
            ),
            'contrast_15_logFC_DGE_C21_Fib_MatB52_vs_Fib_Ctrl' => array(
                'name' => '5 logFC DGE C21 Fib MatB52 vs Fib Ctrl'
            ),
            'contrast_16_logFC_DGE_Fib_C21_Regeneron_vs_Ctrl' => array(
                'name' => '6 logFC DGE Fib C21 Regeneron vs Ctrl'
            ),
            'contrast_17_logFC_DGE_Fib_C21_Regeneron_vs_MatB52' => array(
                'name' => '7 logFC DGE Fib C21 Regeneron vs MatB52'
            ),
            'contrast_A_lg10p_bulkRNA_Seq_SS_Inhba_Inhba_KO_vs_WT' => array(
                'name' => 'lg10p bulkRNA Seq SS Inhba Inhba KO vs WT'
            ),
            'contrast_1_lg10p_DGE_C8_Regeneron_vs_C8_Ctrl' => array(
                'name' => 'lg10p DGE C8 Regeneron vs C8 Ctrl'
            ),
            'contrast_2_lg10p_DGE_C8_MatB52_vs_C8_Ctrl' => array(
                'name' => 'lg10p DGE C8 MatB52 vs C8 Ctrl'
            ),
            'contrast_3_lg10p_DGE_C14_Regeneron_vs_C14_Ctrl' => array(
                'name' => 'lg10p DGE C14 Regeneron vs C14 Ctrl'
            ),
            'contrast_4_lg10p_DGE_C14_MatB52_vs_C14_Ctrl' => array(
                'name' => 'lg10p DGE C14 MatB52 vs C14 Ctrl'
            ),
            'contrast_5_lg10p_DGE_C7_Regeneron_vs_C7_Ctrl' => array(
                'name' => 'lg10p DGE C7 Regeneron vs C7 Ctrl'
            ),
            'contrast_6_lg10p_DGE_C7_MatB52_vs_C7_Ctrl' => array(
                'name' => 'lg10p DGE C7 MatB52 vs C7 Ctrl'
            ),
            'contrast_7_lg10p_DGE_C17_Regeneron_vs_C17_Ctrl' => array(
                'name' => 'lg10p DGE C17 Regeneron vs C17 Ctrl'
            ),
            'contrast_8_lg10p_DGE_C17_MatB52_vs_C17_Ctrl' => array(
                'name' => 'lg10p DGE C17 MatB52 vs C17 Ctrl'
            ),
            'contrast_9_lg10p_DGE_C4_Regeneron_vs_C4_Ctrl' => array(
                'name' => 'lg10p DGE C4 Regeneron vs C4 Ctrl'
            ),
            'contrast_10_lg10p_DGE_C4_MatB52_vs_C4_Ctrl' => array(
                'name' => '0 lg10p DGE C4 MatB52 vs C4 Ctrl'
            ),
            'contrast_11_lg10p_DGE_C5_Regeneron_vs_C5_Ctrl' => array(
                'name' => '1 lg10p DGE C5 Regeneron vs C5 Ctrl'
            ),
            'contrast_12_lg10p_DGE_C5_MatB52_vs_C5_Ctrl' => array(
                'name' => '2 lg10p DGE C5 MatB52 vs C5 Ctrl'
            ),
            'contrast_13_lg10p_DGE_C6_Regeneron_vs_C6_Ctrl' => array(
                'name' => '3 lg10p DGE C6 Regeneron vs C6 Ctrl'
            ),
            'contrast_14_lg10p_DGE_C6_MatB52_vs_C6_Ctrl' => array(
                'name' => '4 lg10p DGE C6 MatB52 vs C6 Ctrl'
            ),
            'contrast_15_lg10p_DGE_C21_Fib_MatB52_vs_Fib_Ctrl' => array(
                'name' => '5 lg10p DGE C21 Fib MatB52 vs Fib Ctrl'
            ),
            'contrast_16_lg10p_DGE_Fib_C21_Regeneron_vs_Ctrl' => array(
                'name' => '6 lg10p DGE Fib C21 Regeneron vs Ctrl'
            ),
            'contrast_17_lg10p_DGE_Fib_C21_Regeneron_vs_MatB52' => array(
                'name' => '7 lg10p DGE Fib C21 Regeneron vs MatB52'
            ),
            'contrast_C_Inhba_Correlation_Coef' => array(
                'name' => 'Inhba Correlation Coef'
            ),
            'add_counts_Avg_log10_Expr_all' => array(
                'name' => 'Avg log10 Expr all'
            ),
            'add_counts_Avg_log10_Expr_anti_Act_A_B_R1' => array(
                'name' => 'Avg log10 Expr anti Act A B R1'
            ),
            'add_counts_Avg_log10_Expr_anti_Act_A_B_R2' => array(
                'name' => 'Avg log10 Expr anti Act A B R2'
            ),
            'add_counts_Avg_log10_Expr_anti_Act_A_B_R3' => array(
                'name' => 'Avg log10 Expr anti Act A B R3'
            ),
            'add_counts_Avg_log10_Expr_anti_Act_A_R1' => array(
                'name' => 'Avg log10 Expr anti Act A R1'
            ),
            'add_counts_Avg_log10_Expr_anti_Act_A_R2' => array(
                'name' => 'Avg log10 Expr anti Act A R2'
            ),
            'add_counts_Avg_log10_Expr_anti_Act_A_R3' => array(
                'name' => 'Avg log10 Expr anti Act A R3'
            ),
            'add_counts_Avg_log10_Expr_B_cells' => array(
                'name' => 'Avg log10 Expr B cells'
            ),
            'add_counts_Avg_log10_Expr_Cancer_Cells_1' => array(
                'name' => 'Avg log10 Expr Cancer Cells 1'
            ),
            'add_counts_Avg_log10_Expr_Cancer_Cells_2' => array(
                'name' => 'Avg log10 Expr Cancer Cells 2'
            ),
            'add_counts_Avg_log10_Expr_Cancer_Cells_3' => array(
                'name' => 'Avg log10 Expr Cancer Cells 3'
            ),
            'add_counts_Avg_log10_Expr_CD4_T_cells' => array(
                'name' => 'Avg log10 Expr CD4 T cells'
            ),
            'add_counts_Avg_log10_Expr_CD4_Th_cells' => array(
                'name' => 'Avg log10 Expr CD4 Th cells'
            ),
            'add_counts_Avg_log10_Expr_CD4_Treg_cells' => array(
                'name' => 'Avg log10 Expr CD4 Treg cells'
            ),
            'add_counts_Avg_log10_Expr_CD8_T_cells' => array(
                'name' => 'Avg log10 Expr CD8 T cells'
            ),
            'add_counts_Avg_log10_Expr_Cluster_0' => array(
                'name' => 'Avg log10 Expr Cluster 0'
            ),
            'add_counts_Avg_log10_Expr_Cluster_1' => array(
                'name' => 'Avg log10 Expr Cluster 1'
            ),
            'add_counts_Avg_log10_Expr_Cluster_10' => array(
                'name' => 'Avg log10 Expr Cluster 10'
            ),
            'add_counts_Avg_log10_Expr_Cluster_18' => array(
                'name' => 'Avg log10 Expr Cluster 18'
            ),
            'add_counts_Avg_log10_Expr_Cluster_10' => array(
                'name' => 'Avg log10 Expr Cluster 10'
            ),
            'add_counts_Avg_log10_Expr_Cluster_18' => array(
                'name' => 'Avg log10 Expr Cluster 18'
            ),
            'add_counts_Avg_log10_Expr_Cluster_2' => array(
                'name' => 'Avg log10 Expr Cluster 2'
            ),
            'add_counts_Avg_log10_Expr_Cluster_23' => array(
                'name' => 'Avg log10 Expr Cluster 23'
            ),
            'add_counts_Avg_log10_Expr_Cluster_23' => array(
                'name' => 'Avg log10 Expr Cluster 23'
            ),
            'add_counts_Avg_log10_Expr_Control_R1' => array(
                'name' => 'Avg log10 Expr Control R1'
            ),
            'add_counts_Avg_log10_Expr_Control_R2' => array(
                'name' => 'Avg log10 Expr Control R2'
            ),
            'add_counts_Avg_log10_Expr_Control_R3' => array(
                'name' => 'Avg log10 Expr Control R3'
            ),
            'add_counts_Avg_log10_Expr_ECs' => array(
                'name' => 'Avg log10 Expr ECs'
            ),
            'add_counts_Avg_log10_Expr_EP' => array(
                'name' => 'Avg log10 Expr EP'
            ),
            'add_counts_Avg_log10_Expr_FB' => array(
                'name' => 'Avg log10 Expr FB'
            ),
            'add_counts_Avg_log10_Expr_LECs' => array(
                'name' => 'Avg log10 Expr LECs'
            ),
            'add_counts_Avg_log10_Expr_MDSCs_NEUT' => array(
                'name' => 'Avg log10 Expr MDSCs NEUT'
            ),
            'add_counts_Avg_log10_Expr_MO_1' => array(
                'name' => 'Avg log10 Expr MO 1'
            ),
            'add_counts_Avg_log10_Expr_MQ_2' => array(
                'name' => 'Avg log10 Expr MQ 2'
            ),
            'add_counts_Avg_log10_Expr_MQ_3' => array(
                'name' => 'Avg log10 Expr MQ 3'
            ),
            'add_counts_Avg_log10_Expr_MQ_4' => array(
                'name' => 'Avg log10 Expr MQ 4'
            ),
            'add_counts_Avg_log10_Expr_NK_cells' => array(
                'name' => 'Avg log10 Expr NK cells'
            ),
            'add_counts_Avg_log10_Expr_Stroma_Cells' => array(
                'name' => 'Avg log10 Expr Stroma Cells'
            ),
            'norm_counts_Avg_log10_Expr_B_cells_anti_Act_A_B_R1' => array(
                'name' => 's Avg log10 Expr B cells anti Act A B R1'
            ),
            'norm_counts_Avg_log10_Expr_B_cells_anti_Act_A_B_R2' => array(
                'name' => 's Avg log10 Expr B cells anti Act A B R2'
            ),
            'norm_counts_Avg_log10_Expr_B_cells_anti_Act_A_B_R3' => array(
                'name' => 's Avg log10 Expr B cells anti Act A B R3'
            ),
            'norm_counts_Avg_log10_Expr_B_cells_anti_Act_A_R1' => array(
                'name' => 's Avg log10 Expr B cells anti Act A R1'
            ),
            'norm_counts_Avg_log10_Expr_B_cells_anti_Act_A_R2' => array(
                'name' => 's Avg log10 Expr B cells anti Act A R2'
            ),
            'norm_counts_Avg_log10_Expr_B_cells_anti_Act_A_R3' => array(
                'name' => 's Avg log10 Expr B cells anti Act A R3'
            ),
            'norm_counts_Avg_log10_Expr_B_cells_Control_R1' => array(
                'name' => 's Avg log10 Expr B cells Control R1'
            ),
            'norm_counts_Avg_log10_Expr_B_cells_Control_R2' => array(
                'name' => 's Avg log10 Expr B cells Control R2'
            ),
            'norm_counts_Avg_log10_Expr_B_cells_Control_R3' => array(
                'name' => 's Avg log10 Expr B cells Control R3'
            ),
            'norm_counts_Avg_log10_Expr_Cancer_Cells_1_anti_Act_A_B_R1' => array(
                'name' => 's Avg log10 Expr Cancer Cells 1 anti Act A B R1'
            ),
            'norm_counts_Avg_log10_Expr_Cancer_Cells_1_anti_Act_A_B_R2' => array(
                'name' => 's Avg log10 Expr Cancer Cells 1 anti Act A B R2'
            ),
            'norm_counts_Avg_log10_Expr_Cancer_Cells_1_anti_Act_A_B_R3' => array(
                'name' => 's Avg log10 Expr Cancer Cells 1 anti Act A B R3'
            ),
            'norm_counts_Avg_log10_Expr_Cancer_Cells_1_anti_Act_A_R1' => array(
                'name' => 's Avg log10 Expr Cancer Cells 1 anti Act A R1'
            ),
            'norm_counts_Avg_log10_Expr_Cancer_Cells_1_anti_Act_A_R2' => array(
                'name' => 's Avg log10 Expr Cancer Cells 1 anti Act A R2'
            ),
            'norm_counts_Avg_log10_Expr_Cancer_Cells_1_anti_Act_A_R3' => array(
                'name' => 's Avg log10 Expr Cancer Cells 1 anti Act A R3'
            ),
            'norm_counts_Avg_log10_Expr_Cancer_Cells_1_Control_R1' => array(
                'name' => 's Avg log10 Expr Cancer Cells 1 Control R1'
            ),
            'norm_counts_Avg_log10_Expr_Cancer_Cells_1_Control_R2' => array(
                'name' => 's Avg log10 Expr Cancer Cells 1 Control R2'
            ),
            'norm_counts_Avg_log10_Expr_Cancer_Cells_1_Control_R3' => array(
                'name' => 's Avg log10 Expr Cancer Cells 1 Control R3'
            ),
            'norm_counts_Avg_log10_Expr_Cancer_Cells_2_anti_Act_A_B_R1' => array(
                'name' => 's Avg log10 Expr Cancer Cells 2 anti Act A B R1'
            ),
            'norm_counts_Avg_log10_Expr_Cancer_Cells_2_anti_Act_A_B_R2' => array(
                'name' => 's Avg log10 Expr Cancer Cells 2 anti Act A B R2'
            ),
            'norm_counts_Avg_log10_Expr_Cancer_Cells_2_anti_Act_A_B_R3' => array(
                'name' => 's Avg log10 Expr Cancer Cells 2 anti Act A B R3'
            ),
            'norm_counts_Avg_log10_Expr_Cancer_Cells_2_anti_Act_A_R1' => array(
                'name' => 's Avg log10 Expr Cancer Cells 2 anti Act A R1'
            ),
            'norm_counts_Avg_log10_Expr_Cancer_Cells_2_anti_Act_A_R2' => array(
                'name' => 's Avg log10 Expr Cancer Cells 2 anti Act A R2'
            ),
            'norm_counts_Avg_log10_Expr_Cancer_Cells_2_anti_Act_A_R3' => array(
                'name' => 's Avg log10 Expr Cancer Cells 2 anti Act A R3'
            ),
            'norm_counts_Avg_log10_Expr_Cancer_Cells_2_Control_R1' => array(
                'name' => 's Avg log10 Expr Cancer Cells 2 Control R1'
            ),
            'norm_counts_Avg_log10_Expr_Cancer_Cells_2_Control_R2' => array(
                'name' => 's Avg log10 Expr Cancer Cells 2 Control R2'
            ),
            'norm_counts_Avg_log10_Expr_Cancer_Cells_2_Control_R3' => array(
                'name' => 's Avg log10 Expr Cancer Cells 2 Control R3'
            ),
            'norm_counts_Avg_log10_Expr_Cancer_Cells_3_anti_Act_A_B_R1' => array(
                'name' => 's Avg log10 Expr Cancer Cells 3 anti Act A B R1'
            ),
            'norm_counts_Avg_log10_Expr_Cancer_Cells_3_anti_Act_A_B_R2' => array(
                'name' => 's Avg log10 Expr Cancer Cells 3 anti Act A B R2'
            ),
            'norm_counts_Avg_log10_Expr_Cancer_Cells_3_anti_Act_A_B_R3' => array(
                'name' => 's Avg log10 Expr Cancer Cells 3 anti Act A B R3'
            ),
            'norm_counts_Avg_log10_Expr_Cancer_Cells_3_anti_Act_A_R1' => array(
                'name' => 's Avg log10 Expr Cancer Cells 3 anti Act A R1'
            ),
            'norm_counts_Avg_log10_Expr_Cancer_Cells_3_anti_Act_A_R2' => array(
                'name' => 's Avg log10 Expr Cancer Cells 3 anti Act A R2'
            ),
            'norm_counts_Avg_log10_Expr_Cancer_Cells_3_anti_Act_A_R3' => array(
                'name' => 's Avg log10 Expr Cancer Cells 3 anti Act A R3'
            ),
            'norm_counts_Avg_log10_Expr_Cancer_Cells_3_Control_R1' => array(
                'name' => 's Avg log10 Expr Cancer Cells 3 Control R1'
            ),
            'norm_counts_Avg_log10_Expr_Cancer_Cells_3_Control_R2' => array(
                'name' => 's Avg log10 Expr Cancer Cells 3 Control R2'
            ),
            'norm_counts_Avg_log10_Expr_Cancer_Cells_3_Control_R3' => array(
                'name' => 's Avg log10 Expr Cancer Cells 3 Control R3'
            ),
            'norm_counts_Avg_log10_Expr_CD4_T_cells_anti_Act_A_B_R1' => array(
                'name' => 's Avg log10 Expr CD4 T cells anti Act A B R1'
            ),
            'norm_counts_Avg_log10_Expr_CD4_T_cells_anti_Act_A_B_R2' => array(
                'name' => 's Avg log10 Expr CD4 T cells anti Act A B R2'
            ),
            'norm_counts_Avg_log10_Expr_CD4_T_cells_anti_Act_A_B_R3' => array(
                'name' => 's Avg log10 Expr CD4 T cells anti Act A B R3'
            ),
            'norm_counts_Avg_log10_Expr_CD4_T_cells_anti_Act_A_R1' => array(
                'name' => 's Avg log10 Expr CD4 T cells anti Act A R1'
            ),
            'norm_counts_Avg_log10_Expr_CD4_T_cells_anti_Act_A_R2' => array(
                'name' => 's Avg log10 Expr CD4 T cells anti Act A R2'
            ),
            'norm_counts_Avg_log10_Expr_CD4_T_cells_anti_Act_A_R3' => array(
                'name' => 's Avg log10 Expr CD4 T cells anti Act A R3'
            ),
            'norm_counts_Avg_log10_Expr_CD4_T_cells_Control_R1' => array(
                'name' => 's Avg log10 Expr CD4 T cells Control R1'
            ),
            'norm_counts_Avg_log10_Expr_CD4_T_cells_Control_R2' => array(
                'name' => 's Avg log10 Expr CD4 T cells Control R2'
            ),
            'norm_counts_Avg_log10_Expr_CD4_Th_cells_anti_Act_A_B_R1' => array(
                'name' => 's Avg log10 Expr CD4 Th cells anti Act A B R1'
            ),
            'norm_counts_Avg_log10_Expr_CD4_Th_cells_anti_Act_A_B_R2' => array(
                'name' => 's Avg log10 Expr CD4 Th cells anti Act A B R2'
            ),
            'norm_counts_Avg_log10_Expr_CD4_Th_cells_anti_Act_A_B_R3' => array(
                'name' => 's Avg log10 Expr CD4 Th cells anti Act A B R3'
            ),
            'norm_counts_Avg_log10_Expr_CD4_Th_cells_anti_Act_A_R1' => array(
                'name' => 's Avg log10 Expr CD4 Th cells anti Act A R1'
            ),
            'norm_counts_Avg_log10_Expr_CD4_Th_cells_anti_Act_A_R2' => array(
                'name' => 's Avg log10 Expr CD4 Th cells anti Act A R2'
            ),
            'norm_counts_Avg_log10_Expr_CD4_Th_cells_anti_Act_A_R3' => array(
                'name' => 's Avg log10 Expr CD4 Th cells anti Act A R3'
            ),
            'norm_counts_Avg_log10_Expr_CD4_Th_cells_Control_R1' => array(
                'name' => 's Avg log10 Expr CD4 Th cells Control R1'
            ),
            'norm_counts_Avg_log10_Expr_CD4_Th_cells_Control_R2' => array(
                'name' => 's Avg log10 Expr CD4 Th cells Control R2'
            ),
            'norm_counts_Avg_log10_Expr_CD4_Th_cells_Control_R3' => array(
                'name' => 's Avg log10 Expr CD4 Th cells Control R3'
            ),
            'norm_counts_Avg_log10_Expr_CD4_Treg_cells_anti_Act_A_B_R1' => array(
                'name' => 's Avg log10 Expr CD4 Treg cells anti Act A B R1'
            ),
            'norm_counts_Avg_log10_Expr_CD4_Treg_cells_anti_Act_A_B_R2' => array(
                'name' => 's Avg log10 Expr CD4 Treg cells anti Act A B R2'
            ),
            'norm_counts_Avg_log10_Expr_CD4_Treg_cells_anti_Act_A_B_R3' => array(
                'name' => 's Avg log10 Expr CD4 Treg cells anti Act A B R3'
            ),
            'norm_counts_Avg_log10_Expr_CD4_Treg_cells_anti_Act_A_R1' => array(
                'name' => 's Avg log10 Expr CD4 Treg cells anti Act A R1'
            ),
            'norm_counts_Avg_log10_Expr_CD4_Treg_cells_anti_Act_A_R2' => array(
                'name' => 's Avg log10 Expr CD4 Treg cells anti Act A R2'
            ),
            'norm_counts_Avg_log10_Expr_CD4_Treg_cells_anti_Act_A_R3' => array(
                'name' => 's Avg log10 Expr CD4 Treg cells anti Act A R3'
            ),
            'norm_counts_Avg_log10_Expr_CD4_Treg_cells_Control_R1' => array(
                'name' => 's Avg log10 Expr CD4 Treg cells Control R1'
            ),
            'norm_counts_Avg_log10_Expr_CD4_Treg_cells_Control_R2' => array(
                'name' => 's Avg log10 Expr CD4 Treg cells Control R2'
            ),
            'norm_counts_Avg_log10_Expr_CD4_Treg_cells_Control_R3' => array(
                'name' => 's Avg log10 Expr CD4 Treg cells Control R3'
            ),
            'norm_counts_Avg_log10_Expr_CD8_T_cells_anti_Act_A_B_R1' => array(
                'name' => 's Avg log10 Expr CD8 T cells anti Act A B R1'
            ),
            'norm_counts_Avg_log10_Expr_CD8_T_cells_anti_Act_A_B_R2' => array(
                'name' => 's Avg log10 Expr CD8 T cells anti Act A B R2'
            ),
            'norm_counts_Avg_log10_Expr_CD8_T_cells_anti_Act_A_B_R3' => array(
                'name' => 's Avg log10 Expr CD8 T cells anti Act A B R3'
            ),
            'norm_counts_Avg_log10_Expr_CD8_T_cells_anti_Act_A_R1' => array(
                'name' => 's Avg log10 Expr CD8 T cells anti Act A R1'
            ),
            'norm_counts_Avg_log10_Expr_CD8_T_cells_anti_Act_A_R2' => array(
                'name' => 's Avg log10 Expr CD8 T cells anti Act A R2'
            ),
            'norm_counts_Avg_log10_Expr_CD8_T_cells_anti_Act_A_R3' => array(
                'name' => 's Avg log10 Expr CD8 T cells anti Act A R3'
            ),
            'norm_counts_Avg_log10_Expr_CD8_T_cells_Control_R1' => array(
                'name' => 's Avg log10 Expr CD8 T cells Control R1'
            ),
            'norm_counts_Avg_log10_Expr_CD8_T_cells_Control_R2' => array(
                'name' => 's Avg log10 Expr CD8 T cells Control R2'
            ),
            'norm_counts_Avg_log10_Expr_CD8_T_cells_Control_R3' => array(
                'name' => 's Avg log10 Expr CD8 T cells Control R3'
            ),
            'norm_counts_Avg_log10_Expr_Cluster_0_anti_Act_A_B_R1' => array(
                'name' => 's Avg log10 Expr Cluster 0 anti Act A B R1'
            ),
            'norm_counts_Avg_log10_Expr_Cluster_0_anti_Act_A_B_R2' => array(
                'name' => 's Avg log10 Expr Cluster 0 anti Act A B R2'
            ),
            'norm_counts_Avg_log10_Expr_Cluster_0_anti_Act_A_B_R3' => array(
                'name' => 's Avg log10 Expr Cluster 0 anti Act A B R3'
            ),
            'norm_counts_Avg_log10_Expr_Cluster_0_anti_Act_A_R1' => array(
                'name' => 's Avg log10 Expr Cluster 0 anti Act A R1'
            ),
            'norm_counts_Avg_log10_Expr_Cluster_0_anti_Act_A_R2' => array(
                'name' => 's Avg log10 Expr Cluster 0 anti Act A R2'
            ),
            'norm_counts_Avg_log10_Expr_Cluster_0_anti_Act_A_R3' => array(
                'name' => 's Avg log10 Expr Cluster 0 anti Act A R3'
            ),
            'norm_counts_Avg_log10_Expr_Cluster_0_Control_R1' => array(
                'name' => 's Avg log10 Expr Cluster 0 Control R1'
            ),
            'norm_counts_Avg_log10_Expr_Cluster_0_Control_R2' => array(
                'name' => 's Avg log10 Expr Cluster 0 Control R2'
            ),
            'norm_counts_Avg_log10_Expr_Cluster_0_Control_R3' => array(
                'name' => 's Avg log10 Expr Cluster 0 Control R3'
            ),
            'norm_counts_Avg_log10_Expr_Cluster_1_anti_Act_A_B_R1' => array(
                'name' => 's Avg log10 Expr Cluster 1 anti Act A B R1'
            ),
            'norm_counts_Avg_log10_Expr_Cluster_1_anti_Act_A_B_R2' => array(
                'name' => 's Avg log10 Expr Cluster 1 anti Act A B R2'
            ),
            'norm_counts_Avg_log10_Expr_Cluster_1_anti_Act_A_B_R3' => array(
                'name' => 's Avg log10 Expr Cluster 1 anti Act A B R3'
            ),
            'norm_counts_Avg_log10_Expr_Cluster_1_anti_Act_A_R1' => array(
                'name' => 's Avg log10 Expr Cluster 1 anti Act A R1'
            ),
            'norm_counts_Avg_log10_Expr_Cluster_1_anti_Act_A_R2' => array(
                'name' => 's Avg log10 Expr Cluster 1 anti Act A R2'
            ),
            'norm_counts_Avg_log10_Expr_Cluster_1_anti_Act_A_R3' => array(
                'name' => 's Avg log10 Expr Cluster 1 anti Act A R3'
            ),
            'norm_counts_Avg_log10_Expr_Cluster_1_Control_R1' => array(
                'name' => 's Avg log10 Expr Cluster 1 Control R1'
            ),
            'norm_counts_Avg_log10_Expr_Cluster_1_Control_R2' => array(
                'name' => 's Avg log10 Expr Cluster 1 Control R2'
            ),
            'norm_counts_Avg_log10_Expr_Cluster_1_Control_R3' => array(
                'name' => 's Avg log10 Expr Cluster 1 Control R3'
            ),
            'norm_counts_Avg_log10_Expr_Cluster_10_anti_Act_A_B_R1' => array(
                'name' => 's Avg log10 Expr Cluster 10 anti Act A B R1'
            ),
            'norm_counts_Avg_log10_Expr_Cluster_10_anti_Act_A_B_R2' => array(
                'name' => 's Avg log10 Expr Cluster 10 anti Act A B R2'
            ),
            'norm_counts_Avg_log10_Expr_Cluster_10_anti_Act_A_B_R3' => array(
                'name' => 's Avg log10 Expr Cluster 10 anti Act A B R3'
            ),
            'norm_counts_Avg_log10_Expr_Cluster_10_anti_Act_A_R1' => array(
                'name' => 's Avg log10 Expr Cluster 10 anti Act A R1'
            ),
            'norm_counts_Avg_log10_Expr_Cluster_10_anti_Act_A_R2' => array(
                'name' => 's Avg log10 Expr Cluster 10 anti Act A R2'
            ),
            'norm_counts_Avg_log10_Expr_Cluster_10_anti_Act_A_R3' => array(
                'name' => 's Avg log10 Expr Cluster 10 anti Act A R3'
            ),
            'norm_counts_Avg_log10_Expr_Cluster_10_Control_R1' => array(
                'name' => 's Avg log10 Expr Cluster 10 Control R1'
            ),
            'norm_counts_Avg_log10_Expr_Cluster_10_Control_R2' => array(
                'name' => 's Avg log10 Expr Cluster 10 Control R2'
            ),
            'norm_counts_Avg_log10_Expr_Cluster_10_Control_R3' => array(
                'name' => 's Avg log10 Expr Cluster 10 Control R3'
            ),
            'norm_counts_Avg_log10_Expr_Cluster_18_anti_Act_A_B_R1' => array(
                'name' => 's Avg log10 Expr Cluster 18 anti Act A B R1'
            ),
            'norm_counts_Avg_log10_Expr_Cluster_18_anti_Act_A_B_R2' => array(
                'name' => 's Avg log10 Expr Cluster 18 anti Act A B R2'
            ),
            'norm_counts_Avg_log10_Expr_Cluster_18_anti_Act_A_B_R3' => array(
                'name' => 's Avg log10 Expr Cluster 18 anti Act A B R3'
            ),
            'norm_counts_Avg_log10_Expr_Cluster_18_anti_Act_A_R1' => array(
                'name' => 's Avg log10 Expr Cluster 18 anti Act A R1'
            ),
            'norm_counts_Avg_log10_Expr_Cluster_18_anti_Act_A_R2' => array(
                'name' => 's Avg log10 Expr Cluster 18 anti Act A R2'
            ),
            'norm_counts_Avg_log10_Expr_Cluster_18_anti_Act_A_R3' => array(
                'name' => 's Avg log10 Expr Cluster 18 anti Act A R3'
            ),
            'norm_counts_Avg_log10_Expr_Cluster_18_Control_R1' => array(
                'name' => 's Avg log10 Expr Cluster 18 Control R1'
            ),
            'norm_counts_Avg_log10_Expr_Cluster_18_Control_R2' => array(
                'name' => 's Avg log10 Expr Cluster 18 Control R2'
            ),
            'norm_counts_Avg_log10_Expr_Cluster_18_Control_R3' => array(
                'name' => 's Avg log10 Expr Cluster 18 Control R3'
            ),
            'norm_counts_Avg_log10_Expr_Cluster_2_anti_Act_A_B_R1' => array(
                'name' => 's Avg log10 Expr Cluster 2 anti Act A B R1'
            ),
            'norm_counts_Avg_log10_Expr_Cluster_2_anti_Act_A_B_R2' => array(
                'name' => 's Avg log10 Expr Cluster 2 anti Act A B R2'
            ),
            'norm_counts_Avg_log10_Expr_Cluster_2_anti_Act_A_B_R3' => array(
                'name' => 's Avg log10 Expr Cluster 2 anti Act A B R3'
            ),
            'norm_counts_Avg_log10_Expr_Cluster_2_anti_Act_A_R1' => array(
                'name' => 's Avg log10 Expr Cluster 2 anti Act A R1'
            ),
            'norm_counts_Avg_log10_Expr_Cluster_2_anti_Act_A_R2' => array(
                'name' => 's Avg log10 Expr Cluster 2 anti Act A R2'
            ),
            'norm_counts_Avg_log10_Expr_Cluster_2_anti_Act_A_R3' => array(
                'name' => 's Avg log10 Expr Cluster 2 anti Act A R3'
            ),
            'norm_counts_Avg_log10_Expr_Cluster_2_Control_R1' => array(
                'name' => 's Avg log10 Expr Cluster 2 Control R1'
            ),
            'norm_counts_Avg_log10_Expr_Cluster_2_Control_R2' => array(
                'name' => 's Avg log10 Expr Cluster 2 Control R2'
            ),
            'norm_counts_Avg_log10_Expr_Cluster_2_Control_R3' => array(
                'name' => 's Avg log10 Expr Cluster 2 Control R3'
            ),
            'norm_counts_Avg_log10_Expr_Cluster_23_anti_Act_A_B_R3' => array(
                'name' => 's Avg log10 Expr Cluster 23 anti Act A B R3'
            ),
            'norm_counts_Avg_log10_Expr_ECs_anti_Act_A_B_R1' => array(
                'name' => 's Avg log10 Expr ECs anti Act A B R1'
            ),
            'norm_counts_Avg_log10_Expr_ECs_anti_Act_A_B_R2' => array(
                'name' => 's Avg log10 Expr ECs anti Act A B R2'
            ),
            'norm_counts_Avg_log10_Expr_ECs_anti_Act_A_B_R3' => array(
                'name' => 's Avg log10 Expr ECs anti Act A B R3'
            ),
            'norm_counts_Avg_log10_Expr_ECs_anti_Act_A_R1' => array(
                'name' => 's Avg log10 Expr ECs anti Act A R1'
            ),
            'norm_counts_Avg_log10_Expr_ECs_anti_Act_A_R2' => array(
                'name' => 's Avg log10 Expr ECs anti Act A R2'
            ),
            'norm_counts_Avg_log10_Expr_ECs_anti_Act_A_R3' => array(
                'name' => 's Avg log10 Expr ECs anti Act A R3'
            ),
            'norm_counts_Avg_log10_Expr_ECs_Control_R1' => array(
                'name' => 's Avg log10 Expr ECs Control R1'
            ),
            'norm_counts_Avg_log10_Expr_ECs_Control_R2' => array(
                'name' => 's Avg log10 Expr ECs Control R2'
            ),
            'norm_counts_Avg_log10_Expr_ECs_Control_R3' => array(
                'name' => 's Avg log10 Expr ECs Control R3'
            ),
            'norm_counts_Avg_log10_Expr_EP_anti_Act_A_B_R1' => array(
                'name' => 's Avg log10 Expr EP anti Act A B R1'
            ),
            'norm_counts_Avg_log10_Expr_EP_anti_Act_A_B_R2' => array(
                'name' => 's Avg log10 Expr EP anti Act A B R2'
            ),
            'norm_counts_Avg_log10_Expr_EP_anti_Act_A_B_R3' => array(
                'name' => 's Avg log10 Expr EP anti Act A B R3'
            ),
            'norm_counts_Avg_log10_Expr_EP_anti_Act_A_R1' => array(
                'name' => 's Avg log10 Expr EP anti Act A R1'
            ),
            'norm_counts_Avg_log10_Expr_EP_anti_Act_A_R3' => array(
                'name' => 's Avg log10 Expr EP anti Act A R3'
            ),
            'norm_counts_Avg_log10_Expr_EP_Control_R1' => array(
                'name' => 's Avg log10 Expr EP Control R1'
            ),
            'norm_counts_Avg_log10_Expr_EP_Control_R2' => array(
                'name' => 's Avg log10 Expr EP Control R2'
            ),
            'norm_counts_Avg_log10_Expr_FB_anti_Act_A_B_R1' => array(
                'name' => 's Avg log10 Expr FB anti Act A B R1'
            ),
            'norm_counts_Avg_log10_Expr_FB_anti_Act_A_B_R2' => array(
                'name' => 's Avg log10 Expr FB anti Act A B R2'
            ),
            'norm_counts_Avg_log10_Expr_FB_anti_Act_A_B_R3' => array(
                'name' => 's Avg log10 Expr FB anti Act A B R3'
            ),
            'norm_counts_Avg_log10_Expr_FB_anti_Act_A_R1' => array(
                'name' => 's Avg log10 Expr FB anti Act A R1'
            ),
            'norm_counts_Avg_log10_Expr_FB_anti_Act_A_R2' => array(
                'name' => 's Avg log10 Expr FB anti Act A R2'
            ),
            'norm_counts_Avg_log10_Expr_FB_anti_Act_A_R3' => array(
                'name' => 's Avg log10 Expr FB anti Act A R3'
            ),
            'norm_counts_Avg_log10_Expr_FB_Control_R1' => array(
                'name' => 's Avg log10 Expr FB Control R1'
            ),
            'norm_counts_Avg_log10_Expr_FB_Control_R2' => array(
                'name' => 's Avg log10 Expr FB Control R2'
            ),
            'norm_counts_Avg_log10_Expr_FB_Control_R3' => array(
                'name' => 's Avg log10 Expr FB Control R3'
            ),
            'norm_counts_Avg_log10_Expr_LECs_anti_Act_A_B_R1' => array(
                'name' => 's Avg log10 Expr LECs anti Act A B R1'
            ),
            'norm_counts_Avg_log10_Expr_LECs_anti_Act_A_B_R2' => array(
                'name' => 's Avg log10 Expr LECs anti Act A B R2'
            ),
            'norm_counts_Avg_log10_Expr_LECs_anti_Act_A_B_R3' => array(
                'name' => 's Avg log10 Expr LECs anti Act A B R3'
            ),
            'norm_counts_Avg_log10_Expr_LECs_anti_Act_A_R1' => array(
                'name' => 's Avg log10 Expr LECs anti Act A R1'
            ),
            'norm_counts_Avg_log10_Expr_LECs_anti_Act_A_R2' => array(
                'name' => 's Avg log10 Expr LECs anti Act A R2'
            ),
            'norm_counts_Avg_log10_Expr_LECs_anti_Act_A_R3' => array(
                'name' => 's Avg log10 Expr LECs anti Act A R3'
            ),
            'norm_counts_Avg_log10_Expr_LECs_Control_R1' => array(
                'name' => 's Avg log10 Expr LECs Control R1'
            ),
            'norm_counts_Avg_log10_Expr_LECs_Control_R2' => array(
                'name' => 's Avg log10 Expr LECs Control R2'
            ),
            'norm_counts_Avg_log10_Expr_LECs_Control_R3' => array(
                'name' => 's Avg log10 Expr LECs Control R3'
            ),
            'norm_counts_Avg_log10_Expr_MDSCs_NEUT_anti_Act_A_B_R1' => array(
                'name' => 's Avg log10 Expr MDSCs NEUT anti Act A B R1'
            ),
            'norm_counts_Avg_log10_Expr_MDSCs_NEUT_anti_Act_A_B_R2' => array(
                'name' => 's Avg log10 Expr MDSCs NEUT anti Act A B R2'
            ),
            'norm_counts_Avg_log10_Expr_MDSCs_NEUT_anti_Act_A_B_R3' => array(
                'name' => 's Avg log10 Expr MDSCs NEUT anti Act A B R3'
            ),
            'norm_counts_Avg_log10_Expr_MDSCs_NEUT_anti_Act_A_R1' => array(
                'name' => 's Avg log10 Expr MDSCs NEUT anti Act A R1'
            ),
            'norm_counts_Avg_log10_Expr_MDSCs_NEUT_anti_Act_A_R2' => array(
                'name' => 's Avg log10 Expr MDSCs NEUT anti Act A R2'
            ),
            'norm_counts_Avg_log10_Expr_MDSCs_NEUT_anti_Act_A_R3' => array(
                'name' => 's Avg log10 Expr MDSCs NEUT anti Act A R3'
            ),
            'norm_counts_Avg_log10_Expr_MDSCs_NEUT_Control_R1' => array(
                'name' => 's Avg log10 Expr MDSCs NEUT Control R1'
            ),
            'norm_counts_Avg_log10_Expr_MDSCs_NEUT_Control_R2' => array(
                'name' => 's Avg log10 Expr MDSCs NEUT Control R2'
            ),
            'norm_counts_Avg_log10_Expr_MDSCs_NEUT_Control_R3' => array(
                'name' => 's Avg log10 Expr MDSCs NEUT Control R3'
            ),
            'norm_counts_Avg_log10_Expr_MO_1_anti_Act_A_B_R1' => array(
                'name' => 's Avg log10 Expr MO 1 anti Act A B R1'
            ),
            'norm_counts_Avg_log10_Expr_MO_1_anti_Act_A_B_R2' => array(
                'name' => 's Avg log10 Expr MO 1 anti Act A B R2'
            ),
            'norm_counts_Avg_log10_Expr_MO_1_anti_Act_A_B_R3' => array(
                'name' => 's Avg log10 Expr MO 1 anti Act A B R3'
            ),
            'norm_counts_Avg_log10_Expr_MO_1_anti_Act_A_R1' => array(
                'name' => 's Avg log10 Expr MO 1 anti Act A R1'
            ),
            'norm_counts_Avg_log10_Expr_MO_1_anti_Act_A_R2' => array(
                'name' => 's Avg log10 Expr MO 1 anti Act A R2'
            ),
            'norm_counts_Avg_log10_Expr_MO_1_anti_Act_A_R3' => array(
                'name' => 's Avg log10 Expr MO 1 anti Act A R3'
            ),
            'norm_counts_Avg_log10_Expr_MO_1_Control_R1' => array(
                'name' => 's Avg log10 Expr MO 1 Control R1'
            ),
            'norm_counts_Avg_log10_Expr_MO_1_Control_R2' => array(
                'name' => 's Avg log10 Expr MO 1 Control R2'
            ),
            'norm_counts_Avg_log10_Expr_MO_1_Control_R3' => array(
                'name' => 's Avg log10 Expr MO 1 Control R3'
            ),
            'norm_counts_Avg_log10_Expr_MQ_2_anti_Act_A_B_R1' => array(
                'name' => 's Avg log10 Expr MQ 2 anti Act A B R1'
            ),
            'norm_counts_Avg_log10_Expr_MQ_2_anti_Act_A_B_R2' => array(
                'name' => 's Avg log10 Expr MQ 2 anti Act A B R2'
            ),
            'norm_counts_Avg_log10_Expr_MQ_2_anti_Act_A_B_R3' => array(
                'name' => 's Avg log10 Expr MQ 2 anti Act A B R3'
            ),
            'norm_counts_Avg_log10_Expr_MQ_2_anti_Act_A_R1' => array(
                'name' => 's Avg log10 Expr MQ 2 anti Act A R1'
            ),
            'norm_counts_Avg_log10_Expr_MQ_2_anti_Act_A_R2' => array(
                'name' => 's Avg log10 Expr MQ 2 anti Act A R2'
            ),
            'norm_counts_Avg_log10_Expr_MQ_2_anti_Act_A_R3' => array(
                'name' => 's Avg log10 Expr MQ 2 anti Act A R3'
            ),
            'norm_counts_Avg_log10_Expr_MQ_2_Control_R1' => array(
                'name' => 's Avg log10 Expr MQ 2 Control R1'
            ),
            'norm_counts_Avg_log10_Expr_MQ_2_Control_R2' => array(
                'name' => 's Avg log10 Expr MQ 2 Control R2'
            ),
            'norm_counts_Avg_log10_Expr_MQ_2_Control_R3' => array(
                'name' => 's Avg log10 Expr MQ 2 Control R3'
            ),
            'norm_counts_Avg_log10_Expr_MQ_3_anti_Act_A_B_R1' => array(
                'name' => 's Avg log10 Expr MQ 3 anti Act A B R1'
            ),
            'norm_counts_Avg_log10_Expr_MQ_3_anti_Act_A_B_R2' => array(
                'name' => 's Avg log10 Expr MQ 3 anti Act A B R2'
            ),
            'norm_counts_Avg_log10_Expr_MQ_3_anti_Act_A_B_R3' => array(
                'name' => 's Avg log10 Expr MQ 3 anti Act A B R3'
            ),
            'norm_counts_Avg_log10_Expr_MQ_3_anti_Act_A_R1' => array(
                'name' => 's Avg log10 Expr MQ 3 anti Act A R1'
            ),
            'norm_counts_Avg_log10_Expr_MQ_3_anti_Act_A_R2' => array(
                'name' => 's Avg log10 Expr MQ 3 anti Act A R2'
            ),
            'norm_counts_Avg_log10_Expr_MQ_3_anti_Act_A_R3' => array(
                'name' => 's Avg log10 Expr MQ 3 anti Act A R3'
            ),
            'norm_counts_Avg_log10_Expr_MQ_3_Control_R1' => array(
                'name' => 's Avg log10 Expr MQ 3 Control R1'
            ),
            'norm_counts_Avg_log10_Expr_MQ_3_Control_R2' => array(
                'name' => 's Avg log10 Expr MQ 3 Control R2'
            ),
            'norm_counts_Avg_log10_Expr_MQ_3_Control_R3' => array(
                'name' => 's Avg log10 Expr MQ 3 Control R3'
            ),
            'norm_counts_Avg_log10_Expr_MQ_4_anti_Act_A_B_R1' => array(
                'name' => 's Avg log10 Expr MQ 4 anti Act A B R1'
            ),
            'norm_counts_Avg_log10_Expr_MQ_4_anti_Act_A_B_R2' => array(
                'name' => 's Avg log10 Expr MQ 4 anti Act A B R2'
            ),
            'norm_counts_Avg_log10_Expr_MQ_4_anti_Act_A_B_R3' => array(
                'name' => 's Avg log10 Expr MQ 4 anti Act A B R3'
            ),
            'norm_counts_Avg_log10_Expr_MQ_4_anti_Act_A_R1' => array(
                'name' => 's Avg log10 Expr MQ 4 anti Act A R1'
            ),
            'norm_counts_Avg_log10_Expr_MQ_4_anti_Act_A_R2' => array(
                'name' => 's Avg log10 Expr MQ 4 anti Act A R2'
            ),
            'norm_counts_Avg_log10_Expr_MQ_4_anti_Act_A_R3' => array(
                'name' => 's Avg log10 Expr MQ 4 anti Act A R3'
            ),
            'norm_counts_Avg_log10_Expr_MQ_4_Control_R1' => array(
                'name' => 's Avg log10 Expr MQ 4 Control R1'
            ),
            'norm_counts_Avg_log10_Expr_MQ_4_Control_R2' => array(
                'name' => 's Avg log10 Expr MQ 4 Control R2'
            ),
            'norm_counts_Avg_log10_Expr_MQ_4_Control_R3' => array(
                'name' => 's Avg log10 Expr MQ 4 Control R3'
            ),
            'norm_counts_Avg_log10_Expr_NK_cells_anti_Act_A_B_R1' => array(
                'name' => 's Avg log10 Expr NK cells anti Act A B R1'
            ),
            'norm_counts_Avg_log10_Expr_NK_cells_anti_Act_A_B_R2' => array(
                'name' => 's Avg log10 Expr NK cells anti Act A B R2'
            ),
            'norm_counts_Avg_log10_Expr_NK_cells_anti_Act_A_B_R3' => array(
                'name' => 's Avg log10 Expr NK cells anti Act A B R3'
            ),
            'norm_counts_Avg_log10_Expr_NK_cells_anti_Act_A_R1' => array(
                'name' => 's Avg log10 Expr NK cells anti Act A R1'
            ),
            'norm_counts_Avg_log10_Expr_NK_cells_anti_Act_A_R2' => array(
                'name' => 's Avg log10 Expr NK cells anti Act A R2'
            ),
            'norm_counts_Avg_log10_Expr_NK_cells_anti_Act_A_R3' => array(
                'name' => 's Avg log10 Expr NK cells anti Act A R3'
            ),
            'norm_counts_Avg_log10_Expr_NK_cells_Control_R1' => array(
                'name' => 's Avg log10 Expr NK cells Control R1'
            ),
            'norm_counts_Avg_log10_Expr_NK_cells_Control_R2' => array(
                'name' => 's Avg log10 Expr NK cells Control R2'
            ),
            'norm_counts_Avg_log10_Expr_NK_cells_Control_R3' => array(
                'name' => 's Avg log10 Expr NK cells Control R3'
            ),
            'norm_counts_Avg_log10_Expr_Stroma_Cells_anti_Act_A_B_R1' => array(
                'name' => 's Avg log10 Expr Stroma Cells anti Act A B R1'
            ),
            'norm_counts_Avg_log10_Expr_Stroma_Cells_anti_Act_A_B_R2' => array(
                'name' => 's Avg log10 Expr Stroma Cells anti Act A B R2'
            ),
            'norm_counts_Avg_log10_Expr_Stroma_Cells_anti_Act_A_B_R3' => array(
                'name' => 's Avg log10 Expr Stroma Cells anti Act A B R3'
            ),
            'norm_counts_Avg_log10_Expr_Stroma_Cells_anti_Act_A_R1' => array(
                'name' => 's Avg log10 Expr Stroma Cells anti Act A R1'
            ),
            'norm_counts_Avg_log10_Expr_Stroma_Cells_anti_Act_A_R2' => array(
                'name' => 's Avg log10 Expr Stroma Cells anti Act A R2'
            ),
            'norm_counts_Avg_log10_Expr_Stroma_Cells_anti_Act_A_R3' => array(
                'name' => 's Avg log10 Expr Stroma Cells anti Act A R3'
            ),
            'norm_counts_Avg_log10_Expr_Stroma_Cells_Control_R1' => array(
                'name' => 's Avg log10 Expr Stroma Cells Control R1'
            ),
            'norm_counts_Avg_log10_Expr_Stroma_Cells_Control_R2' => array(
                'name' => 's Avg log10 Expr Stroma Cells Control R2'
            ),
            'norm_counts_Avg_log10_Expr_Stroma_Cells_Control_R3' => array(
                'name' => 's Avg log10 Expr Stroma Cells Control R3'
            ),
            'add_counts_PCA_Dim_1_Loadings' => array(
                'name' => 'PCA Dim 1 Loadings'
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
            'add_counts_PCA_Dim_2_Loadings' => array(
                'name' => 'PCA Dim 2 Loadings'
            ),
            'add_counts_PCA_Dim_20_Loadings' => array(
                'name' => 'PCA Dim 20 Loadings'
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
            'add_counts_CD4_Th_cells_Residuals' => array(
                'name' => 'CD4 Th cells Residuals'
            ),
            'add_counts_CD8_T_cells_Residuals' => array(
                'name' => 'CD8 T cells Residuals'
            ),
            'add_counts_CD4_Treg_cells_Residuals' => array(
                'name' => 'CD4 Treg cells Residuals'
            ),
            'add_counts_CD4_T_cells_Residuals' => array(
                'name' => 'CD4 T cells Residuals'
            ),
            'add_counts_Cluster_23_Residuals' => array(
                'name' => 'Cluster 23 Residuals'
            ),
            'add_counts_NK_cells_Residuals' => array(
                'name' => 'NK cells Residuals'
            ),
            'add_counts_B_cells_Residuals' => array(
                'name' => 'B cells Residuals'
            ),
            'add_counts_MO_1_Residuals' => array(
                'name' => 'MO 1 Residuals'
            ),
            'add_counts_MQ_2_Residuals' => array(
                'name' => 'MQ 2 Residuals'
            ),
            'add_counts_MQ_4_Residuals' => array(
                'name' => 'MQ 4 Residuals'
            ),
            'add_counts_MQ_3_Residuals' => array(
                'name' => 'MQ 3 Residuals'
            ),
            'add_counts_MDSCs_NEUT_Residuals' => array(
                'name' => 'MDSCs NEUT Residuals'
            ),
            'add_counts_Cluster_18_Residuals' => array(
                'name' => 'Cluster 18 Residuals'
            ),
            'add_counts_Cancer_Cells_3_Residuals' => array(
                'name' => 'Cancer Cells 3 Residuals'
            ),
            'add_counts_Cancer_Cells_2_Residuals' => array(
                'name' => 'Cancer Cells 2 Residuals'
            ),
            'add_counts_Cancer_Cells_1_Residuals' => array(
                'name' => 'Cancer Cells 1 Residuals'
            ),
            'add_counts_EP_Residuals' => array(
                'name' => 'EP Residuals'
            ),
            'add_counts_FB_Residuals' => array(
                'name' => 'FB Residuals'
            ),
            'add_counts_Stroma_Cells_Residuals' => array(
                'name' => 'Stroma Cells Residuals'
            ),
            'add_counts_LECs_Residuals' => array(
                'name' => 'LECs Residuals'
            ),
            'add_counts_ECs_Residuals' => array(
                'name' => 'ECs Residuals'
            ),
            'add_counts_Cluster_0_Residuals' => array(
                'name' => 'Cluster 0 Residuals'
            ),
            'add_counts_Cluster_1_Residuals' => array(
                'name' => 'Cluster 1 Residuals'
            ),
            'add_counts_Cluster_2_Residuals' => array(
                'name' => 'Cluster 2 Residuals'
            ),
            'add_counts_Cluster_10_Residuals' => array(
                'name' => 'Cluster 10 Residuals'
            )
        )
    )
//End scatterplot
);
