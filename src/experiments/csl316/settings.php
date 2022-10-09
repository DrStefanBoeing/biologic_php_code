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
            'cat_table_name' => 'csl316_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'p316_rna_seq_table',
    'primary_gene_symbol' => 'hgnc_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'gene_cat_suggestion' => array(
        'dbname' => 'reference_categories',
        'dbtable' => 'cs_lab_categories',
    ),

    'samples' => array(
        'norm_counts_bcells_N_LTX893_TPM' => array(
            'color' => '#F8766D',
            'name' => 'bcells N LTX893 TPM'
        ),
        'norm_counts_bcells_T_LTX893_TPM' => array(
            'color' => '#EF7F46',
            'name' => 'bcells T LTX893 TPM'
        ),
        'norm_counts_bcells_T_LTX896_TPM' => array(
            'color' => '#EF7F46',
            'name' => 'bcells T LTX896 TPM'
        ),
        'norm_counts_bcells_N_LTX902_TPM' => array(
            'color' => '#F8766D',
            'name' => 'bcells N LTX902 TPM'
        ),
        'norm_counts_bcells_T_LTX903_TPM' => array(
            'color' => '#EF7F46',
            'name' => 'bcells T LTX903 TPM'
        ),
        'norm_counts_bcells_T_LTX918_TPM' => array(
            'color' => '#EF7F46',
            'name' => 'bcells T LTX918 TPM'
        ),
        'norm_counts_bcells_N_LTX920_TPM' => array(
            'color' => '#F8766D',
            'name' => 'bcells N LTX920 TPM'
        ),
        'norm_counts_bcells_T_LTX920_TPM' => array(
            'color' => '#EF7F46',
            'name' => 'bcells T LTX920 TPM'
        ),
        'norm_counts_bcells_N_LTX927_TPM' => array(
            'color' => '#F8766D',
            'name' => 'bcells N LTX927 TPM'
        ),
        'norm_counts_bcells_T_LTX927_TPM' => array(
            'color' => '#EF7F46',
            'name' => 'bcells T LTX927 TPM'
        ),
        'norm_counts_bcells_N_LTX933_TPM' => array(
            'color' => '#F8766D',
            'name' => 'bcells N LTX933 TPM'
        ),
        'norm_counts_bcells_T_LTX933_TPM' => array(
            'color' => '#EF7F46',
            'name' => 'bcells T LTX933 TPM'
        ),
        'norm_counts_bcells_T_LTX949_TPM' => array(
            'color' => '#EF7F46',
            'name' => 'bcells T LTX949 TPM'
        ),
        'norm_counts_cd4_N_LTX893_TPM' => array(
            'color' => '#E38900',
            'name' => 'cd4 N LTX893 TPM'
        ),
        'norm_counts_cd4_T_LTX893_TPM' => array(
            'color' => '#D59100',
            'name' => 'cd4 T LTX893 TPM'
        ),
        'norm_counts_cd4_N_LTX896_TPM' => array(
            'color' => '#E38900',
            'name' => 'cd4 N LTX896 TPM'
        ),
        'norm_counts_cd4_T_LTX896_TPM' => array(
            'color' => '#D59100',
            'name' => 'cd4 T LTX896 TPM'
        ),
        'norm_counts_cd4_N_LTX902_TPM' => array(
            'color' => '#E38900',
            'name' => 'cd4 N LTX902 TPM'
        ),
        'norm_counts_cd4_T_LTX902_TPM' => array(
            'color' => '#D59100',
            'name' => 'cd4 T LTX902 TPM'
        ),
        'norm_counts_cd4_N_LTX903_TPM' => array(
            'color' => '#E38900',
            'name' => 'cd4 N LTX903 TPM'
        ),
        'norm_counts_cd4_T_LTX903_TPM' => array(
            'color' => '#D59100',
            'name' => 'cd4 T LTX903 TPM'
        ),
        'norm_counts_cd4_N_LTX917_TPM' => array(
            'color' => '#E38900',
            'name' => 'cd4 N LTX917 TPM'
        ),
        'norm_counts_cd4_T_LTX917_TPM' => array(
            'color' => '#D59100',
            'name' => 'cd4 T LTX917 TPM'
        ),
        'norm_counts_cd4_N_LTX918_TPM' => array(
            'color' => '#E38900',
            'name' => 'cd4 N LTX918 TPM'
        ),
        'norm_counts_cd4_T_LTX918_TPM' => array(
            'color' => '#D59100',
            'name' => 'cd4 T LTX918 TPM'
        ),
        'norm_counts_cd4_N_LTX920_TPM' => array(
            'color' => '#E38900',
            'name' => 'cd4 N LTX920 TPM'
        ),
        'norm_counts_cd4_T_LTX920_TPM' => array(
            'color' => '#D59100',
            'name' => 'cd4 T LTX920 TPM'
        ),
        'norm_counts_cd4_N_LTX927_TPM' => array(
            'color' => '#E38900',
            'name' => 'cd4 N LTX927 TPM'
        ),
        'norm_counts_cd4_T_LTX927_TPM' => array(
            'color' => '#D59100',
            'name' => 'cd4 T LTX927 TPM'
        ),
        'norm_counts_cd4_N_LTX933_TPM' => array(
            'color' => '#E38900',
            'name' => 'cd4 N LTX933 TPM'
        ),
        'norm_counts_cd4_T_LTX933_TPM' => array(
            'color' => '#D59100',
            'name' => 'cd4 T LTX933 TPM'
        ),
        'norm_counts_cd4_N_LTX949_TPM' => array(
            'color' => '#E38900',
            'name' => 'cd4 N LTX949 TPM'
        ),
        'norm_counts_cd4_T_LTX949_TPM' => array(
            'color' => '#D59100',
            'name' => 'cd4 T LTX949 TPM'
        ),
        'norm_counts_cd45_N_LTX893_TPM' => array(
            'color' => '#C49A00',
            'name' => 'cd45 N LTX893 TPM'
        ),
        'norm_counts_cd45_T_LTX893_TPM' => array(
            'color' => '#B0A100',
            'name' => 'cd45 T LTX893 TPM'
        ),
        'norm_counts_cd45_N_LTX896_TPM' => array(
            'color' => '#C49A00',
            'name' => 'cd45 N LTX896 TPM'
        ),
        'norm_counts_cd45_T_LTX896_TPM' => array(
            'color' => '#B0A100',
            'name' => 'cd45 T LTX896 TPM'
        ),
        'norm_counts_cd45_N_LTX902_TPM' => array(
            'color' => '#C49A00',
            'name' => 'cd45 N LTX902 TPM'
        ),
        'norm_counts_cd45_T_LTX902_TPM' => array(
            'color' => '#B0A100',
            'name' => 'cd45 T LTX902 TPM'
        ),
        'norm_counts_cd45_N_LTX903_TPM' => array(
            'color' => '#C49A00',
            'name' => 'cd45 N LTX903 TPM'
        ),
        'norm_counts_cd45_T_LTX903_TPM' => array(
            'color' => '#B0A100',
            'name' => 'cd45 T LTX903 TPM'
        ),
        'norm_counts_cd45_N_LTX917_TPM' => array(
            'color' => '#C49A00',
            'name' => 'cd45 N LTX917 TPM'
        ),
        'norm_counts_cd45_T_LTX917_TPM' => array(
            'color' => '#B0A100',
            'name' => 'cd45 T LTX917 TPM'
        ),
        'norm_counts_cd45_N_LTX918_TPM' => array(
            'color' => '#C49A00',
            'name' => 'cd45 N LTX918 TPM'
        ),
        'norm_counts_cd45_T_LTX918_TPM' => array(
            'color' => '#B0A100',
            'name' => 'cd45 T LTX918 TPM'
        ),
        'norm_counts_cd45_N_LTX920_TPM' => array(
            'color' => '#C49A00',
            'name' => 'cd45 N LTX920 TPM'
        ),
        'norm_counts_cd45_T_LTX920_TPM' => array(
            'color' => '#B0A100',
            'name' => 'cd45 T LTX920 TPM'
        ),
        'norm_counts_cd45_N_LTX927_TPM' => array(
            'color' => '#C49A00',
            'name' => 'cd45 N LTX927 TPM'
        ),
        'norm_counts_cd45_T_LTX927_TPM' => array(
            'color' => '#B0A100',
            'name' => 'cd45 T LTX927 TPM'
        ),
        'norm_counts_cd45_N_LTX933_TPM' => array(
            'color' => '#C49A00',
            'name' => 'cd45 N LTX933 TPM'
        ),
        'norm_counts_cd45_T_LTX933_TPM' => array(
            'color' => '#B0A100',
            'name' => 'cd45 T LTX933 TPM'
        ),
        'norm_counts_cd45_N_LTX949_TPM' => array(
            'color' => '#C49A00',
            'name' => 'cd45 N LTX949 TPM'
        ),
        'norm_counts_cd45_T_LTX949_TPM' => array(
            'color' => '#B0A100',
            'name' => 'cd45 T LTX949 TPM'
        ),
        'norm_counts_cd8_N_LTX893_TPM' => array(
            'color' => '#99A800',
            'name' => 'cd8 N LTX893 TPM'
        ),
        'norm_counts_cd8_T_LTX893_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'cd8 T LTX893 TPM'
        ),
        'norm_counts_cd8_N_LTX896_TPM' => array(
            'color' => '#99A800',
            'name' => 'cd8 N LTX896 TPM'
        ),
        'norm_counts_cd8_T_LTX896_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'cd8 T LTX896 TPM'
        ),
        'norm_counts_cd8_N_LTX902_TPM' => array(
            'color' => '#99A800',
            'name' => 'cd8 N LTX902 TPM'
        ),
        'norm_counts_cd8_T_LTX902_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'cd8 T LTX902 TPM'
        ),
        'norm_counts_cd8_N_LTX903_TPM' => array(
            'color' => '#99A800',
            'name' => 'cd8 N LTX903 TPM'
        ),
        'norm_counts_cd8_T_LTX903_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'cd8 T LTX903 TPM'
        ),
        'norm_counts_cd8_T_LTX917_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'cd8 T LTX917 TPM'
        ),
        'norm_counts_cd8_N_LTX918_TPM' => array(
            'color' => '#99A800',
            'name' => 'cd8 N LTX918 TPM'
        ),
        'norm_counts_cd8_T_LTX918_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'cd8 T LTX918 TPM'
        ),
        'norm_counts_cd8_N_LTX920_TPM' => array(
            'color' => '#99A800',
            'name' => 'cd8 N LTX920 TPM'
        ),
        'norm_counts_cd8_T_LTX920_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'cd8 T LTX920 TPM'
        ),
        'norm_counts_cd8_N_LTX927_TPM' => array(
            'color' => '#99A800',
            'name' => 'cd8 N LTX927 TPM'
        ),
        'norm_counts_cd8_T_LTX927_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'cd8 T LTX927 TPM'
        ),
        'norm_counts_cd8_N_LTX933_TPM' => array(
            'color' => '#99A800',
            'name' => 'cd8 N LTX933 TPM'
        ),
        'norm_counts_cd8_T_LTX933_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'cd8 T LTX933 TPM'
        ),
        'norm_counts_cd8_N_LTX949_TPM' => array(
            'color' => '#99A800',
            'name' => 'cd8 N LTX949 TPM'
        ),
        'norm_counts_cd8_T_LTX949_TPM' => array(
            'color' => '#7CAE00',
            'name' => 'cd8 T LTX949 TPM'
        ),
        'norm_counts_dc_T_LTX896_TPM' => array(
            'color' => '#53B400',
            'name' => 'dc T LTX896 TPM'
        ),
        'norm_counts_dc_N_LTX903_TPM' => array(
            'color' => '#00B823',
            'name' => 'dc N LTX903 TPM'
        ),
        'norm_counts_dc_T_LTX903_TPM' => array(
            'color' => '#53B400',
            'name' => 'dc T LTX903 TPM'
        ),
        'norm_counts_dc_N_LTX918_TPM' => array(
            'color' => '#00B823',
            'name' => 'dc N LTX918 TPM'
        ),
        'norm_counts_dc_T_LTX918_TPM' => array(
            'color' => '#53B400',
            'name' => 'dc T LTX918 TPM'
        ),
        'norm_counts_dc_N_LTX920_TPM' => array(
            'color' => '#00B823',
            'name' => 'dc N LTX920 TPM'
        ),
        'norm_counts_dc_T_LTX920_TPM' => array(
            'color' => '#53B400',
            'name' => 'dc T LTX920 TPM'
        ),
        'norm_counts_dc_T_LTX927_TPM' => array(
            'color' => '#53B400',
            'name' => 'dc T LTX927 TPM'
        ),
        'norm_counts_dc_T_LTX949_TPM' => array(
            'color' => '#53B400',
            'name' => 'dc T LTX949 TPM'
        ),
        'norm_counts_monocytes_T_LTX893_TPM' => array(
            'color' => '#00BC56',
            'name' => 'monocytes T LTX893 TPM'
        ),
        'norm_counts_monocytes_T_LTX896_TPM' => array(
            'color' => '#00BC56',
            'name' => 'monocytes T LTX896 TPM'
        ),
        'norm_counts_monocytes_N_LTX903_TPM' => array(
            'color' => '#00BF77',
            'name' => 'monocytes N LTX903 TPM'
        ),
        'norm_counts_monocytes_T_LTX903_TPM' => array(
            'color' => '#00BC56',
            'name' => 'monocytes T LTX903 TPM'
        ),
        'norm_counts_monocytes_N_LTX918_TPM' => array(
            'color' => '#00BF77',
            'name' => 'monocytes N LTX918 TPM'
        ),
        'norm_counts_monocytes_T_LTX918_TPM' => array(
            'color' => '#00BC56',
            'name' => 'monocytes T LTX918 TPM'
        ),
        'norm_counts_monocytes_N_LTX920_TPM' => array(
            'color' => '#00BF77',
            'name' => 'monocytes N LTX920 TPM'
        ),
        'norm_counts_monocytes_T_LTX920_TPM' => array(
            'color' => '#00BC56',
            'name' => 'monocytes T LTX920 TPM'
        ),
        'norm_counts_monocytes_T_LTX927_TPM' => array(
            'color' => '#00BC56',
            'name' => 'monocytes T LTX927 TPM'
        ),
        'norm_counts_monocytes_N_LTX933_TPM' => array(
            'color' => '#00BF77',
            'name' => 'monocytes N LTX933 TPM'
        ),
        'norm_counts_monocytes_N_LTX949_TPM' => array(
            'color' => '#00BF77',
            'name' => 'monocytes N LTX949 TPM'
        ),
        'norm_counts_monocytes_T_LTX949_TPM' => array(
            'color' => '#00BC56',
            'name' => 'monocytes T LTX949 TPM'
        ),
        'norm_counts_nkcells_N_LTX893_TPM' => array(
            'color' => '#00C094',
            'name' => 'nkcells N LTX893 TPM'
        ),
        'norm_counts_nkcells_T_LTX893_TPM' => array(
            'color' => '#00C1AD',
            'name' => 'nkcells T LTX893 TPM'
        ),
        'norm_counts_nkcells_N_LTX896_TPM' => array(
            'color' => '#00C094',
            'name' => 'nkcells N LTX896 TPM'
        ),
        'norm_counts_nkcells_T_LTX896_TPM' => array(
            'color' => '#00C1AD',
            'name' => 'nkcells T LTX896 TPM'
        ),
        'norm_counts_nkcells_N_LTX902_TPM' => array(
            'color' => '#00C094',
            'name' => 'nkcells N LTX902 TPM'
        ),
        'norm_counts_nkcells_N_LTX903_TPM' => array(
            'color' => '#00C094',
            'name' => 'nkcells N LTX903 TPM'
        ),
        'norm_counts_nkcells_T_LTX903_TPM' => array(
            'color' => '#00C1AD',
            'name' => 'nkcells T LTX903 TPM'
        ),
        'norm_counts_nkcells_N_LTX918_TPM' => array(
            'color' => '#00C094',
            'name' => 'nkcells N LTX918 TPM'
        ),
        'norm_counts_nkcells_T_LTX918_TPM' => array(
            'color' => '#00C1AD',
            'name' => 'nkcells T LTX918 TPM'
        ),
        'norm_counts_nkcells_N_LTX920_TPM' => array(
            'color' => '#00C094',
            'name' => 'nkcells N LTX920 TPM'
        ),
        'norm_counts_nkcells_T_LTX920_TPM' => array(
            'color' => '#00C1AD',
            'name' => 'nkcells T LTX920 TPM'
        ),
        'norm_counts_nkcells_N_LTX927_TPM' => array(
            'color' => '#00C094',
            'name' => 'nkcells N LTX927 TPM'
        ),
        'norm_counts_nkcells_T_LTX927_TPM' => array(
            'color' => '#00C1AD',
            'name' => 'nkcells T LTX927 TPM'
        ),
        'norm_counts_nkcells_N_LTX933_TPM' => array(
            'color' => '#00C094',
            'name' => 'nkcells N LTX933 TPM'
        ),
        'norm_counts_nkcells_T_LTX933_TPM' => array(
            'color' => '#00C1AD',
            'name' => 'nkcells T LTX933 TPM'
        ),
        'norm_counts_nkcells_N_LTX949_TPM' => array(
            'color' => '#00C094',
            'name' => 'nkcells N LTX949 TPM'
        ),
        'norm_counts_nkcells_T_LTX949_TPM' => array(
            'color' => '#00C1AD',
            'name' => 'nkcells T LTX949 TPM'
        ),
        'norm_counts_RoneVd1_T_LTX142_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'RoneVd1 T LTX142 TPM'
        ),
        'norm_counts_RoneVd1_T_LTX310_TPM' => array(
            'color' => '#00BFC4',
            'name' => 'RoneVd1 T LTX310 TPM'
        ),
        'norm_counts_RoneVd2_T_LTX310_TPM' => array(
            'color' => '#00BCD9',
            'name' => 'RoneVd2 T LTX310 TPM'
        ),
        'norm_counts_RthreeVd1_T_LTX567_TPM' => array(
            'color' => '#00B6EB',
            'name' => 'RthreeVd1 T LTX567 TPM'
        ),
        'norm_counts_RthreeVd2_T_LTX567_TPM' => array(
            'color' => '#00AEF9',
            'name' => 'RthreeVd2 T LTX567 TPM'
        ),
        'norm_counts_RtwoVd1_T_LTX159_TPM' => array(
            'color' => '#06A4FF',
            'name' => 'RtwoVd1 T LTX159 TPM'
        ),
        'norm_counts_RtwoVd1_T_LTX293_TPM' => array(
            'color' => '#06A4FF',
            'name' => 'RtwoVd1 T LTX293 TPM'
        ),
        'norm_counts_RtwoVd1_T_LTX638_TPM' => array(
            'color' => '#06A4FF',
            'name' => 'RtwoVd1 T LTX638 TPM'
        ),
        'norm_counts_RtwoVd2_T_LTX159_TPM' => array(
            'color' => '#7698FF',
            'name' => 'RtwoVd2 T LTX159 TPM'
        ),
        'norm_counts_teff_T_LTX893_TPM' => array(
            'color' => '#A58AFF',
            'name' => 'teff T LTX893 TPM'
        ),
        'norm_counts_teff_N_LTX896_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'teff N LTX896 TPM'
        ),
        'norm_counts_teff_T_LTX896_TPM' => array(
            'color' => '#A58AFF',
            'name' => 'teff T LTX896 TPM'
        ),
        'norm_counts_teff_N_LTX902_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'teff N LTX902 TPM'
        ),
        'norm_counts_teff_N_LTX903_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'teff N LTX903 TPM'
        ),
        'norm_counts_teff_T_LTX903_TPM' => array(
            'color' => '#A58AFF',
            'name' => 'teff T LTX903 TPM'
        ),
        'norm_counts_teff_T_LTX917_TPM' => array(
            'color' => '#A58AFF',
            'name' => 'teff T LTX917 TPM'
        ),
        'norm_counts_teff_N_LTX927_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'teff N LTX927 TPM'
        ),
        'norm_counts_teff_T_LTX927_TPM' => array(
            'color' => '#A58AFF',
            'name' => 'teff T LTX927 TPM'
        ),
        'norm_counts_teff_N_LTX933_TPM' => array(
            'color' => '#C77CFF',
            'name' => 'teff N LTX933 TPM'
        ),
        'norm_counts_teff_T_LTX933_TPM' => array(
            'color' => '#A58AFF',
            'name' => 'teff T LTX933 TPM'
        ),
        'norm_counts_tex_T_LTX893_TPM' => array(
            'color' => '#DF70F8',
            'name' => 'tex T LTX893 TPM'
        ),
        'norm_counts_tex_T_LTX896_TPM' => array(
            'color' => '#DF70F8',
            'name' => 'tex T LTX896 TPM'
        ),
        'norm_counts_tex_N_LTX902_TPM' => array(
            'color' => '#F166E9',
            'name' => 'tex N LTX902 TPM'
        ),
        'norm_counts_tex_T_LTX903_TPM' => array(
            'color' => '#DF70F8',
            'name' => 'tex T LTX903 TPM'
        ),
        'norm_counts_tex_T_LTX918_TPM' => array(
            'color' => '#DF70F8',
            'name' => 'tex T LTX918 TPM'
        ),
        'norm_counts_tex_T_LTX920_TPM' => array(
            'color' => '#DF70F8',
            'name' => 'tex T LTX920 TPM'
        ),
        'norm_counts_tex_T_LTX927_TPM' => array(
            'color' => '#DF70F8',
            'name' => 'tex T LTX927 TPM'
        ),
        'norm_counts_tex_N_LTX933_TPM' => array(
            'color' => '#F166E9',
            'name' => 'tex N LTX933 TPM'
        ),
        'norm_counts_tex_T_LTX933_TPM' => array(
            'color' => '#DF70F8',
            'name' => 'tex T LTX933 TPM'
        ),
        'norm_counts_treg_T_LTX893_TPM' => array(
            'color' => '#FB61D7',
            'name' => 'treg T LTX893 TPM'
        ),
        'norm_counts_treg_T_LTX896_TPM' => array(
            'color' => '#FB61D7',
            'name' => 'treg T LTX896 TPM'
        ),
        'norm_counts_treg_N_LTX902_TPM' => array(
            'color' => '#FF62C1',
            'name' => 'treg N LTX902 TPM'
        ),
        'norm_counts_treg_T_LTX903_TPM' => array(
            'color' => '#FB61D7',
            'name' => 'treg T LTX903 TPM'
        ),
        'norm_counts_treg_T_LTX917_TPM' => array(
            'color' => '#FB61D7',
            'name' => 'treg T LTX917 TPM'
        ),
        'norm_counts_treg_T_LTX920_TPM' => array(
            'color' => '#FB61D7',
            'name' => 'treg T LTX920 TPM'
        ),
        'norm_counts_treg_T_LTX927_TPM' => array(
            'color' => '#FB61D7',
            'name' => 'treg T LTX927 TPM'
        ),
        'norm_counts_treg_N_LTX933_TPM' => array(
            'color' => '#FF62C1',
            'name' => 'treg N LTX933 TPM'
        ),
        'norm_counts_treg_T_LTX933_TPM' => array(
            'color' => '#FB61D7',
            'name' => 'treg T LTX933 TPM'
        ),
        'norm_counts_Vd1_N_LTX142_TPM' => array(
            'color' => '#FF66A8',
            'name' => 'Vd1 N LTX142 TPM'
        ),
        'norm_counts_Vd1_N_LTX159_TPM' => array(
            'color' => '#FF66A8',
            'name' => 'Vd1 N LTX159 TPM'
        ),
        'norm_counts_Vd1_N_LTX176_TPM' => array(
            'color' => '#FF66A8',
            'name' => 'Vd1 N LTX176 TPM'
        ),
        'norm_counts_Vd1_N_LTX284_TPM' => array(
            'color' => '#FF66A8',
            'name' => 'Vd1 N LTX284 TPM'
        ),
        'norm_counts_Vd1_N_LTX293_TPM' => array(
            'color' => '#FF66A8',
            'name' => 'Vd1 N LTX293 TPM'
        ),
        'norm_counts_Vd1_N_LTX310_TPM' => array(
            'color' => '#FF66A8',
            'name' => 'Vd1 N LTX310 TPM'
        ),
        'norm_counts_Vd1_N_LTX638_TPM' => array(
            'color' => '#FF66A8',
            'name' => 'Vd1 N LTX638 TPM'
        ),
        'norm_counts_Vd1_N_LTX871_TPM' => array(
            'color' => '#FF66A8',
            'name' => 'Vd1 N LTX871 TPM'
        ),
        'norm_counts_Vd2_N_LTX176_TPM' => array(
            'color' => '#FE6D8C',
            'name' => 'Vd2 N LTX176 TPM'
        ),
        'norm_counts_Vd2_N_LTX284_TPM' => array(
            'color' => '#FE6D8C',
            'name' => 'Vd2 N LTX284 TPM'
        ),
        'norm_counts_Vd2_N_LTX310_TPM' => array(
            'color' => '#FE6D8C',
            'name' => 'Vd2 N LTX310 TPM'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_cd8_T_LTX893_TPM','lg2_avg_teff_T_LTX927_TPM','lg2_avg_cd8_T_LTX918_TPM','lg2_avg_cd4_T_LTX949_TPM','lg2_avg_nkcells_T_LTX918_TPM','lg2_avg_cd8_T_LTX927_TPM','lg2_avg_cd4_T_LTX927_TPM','lg2_avg_nkcells_T_LTX927_TPM','lg2_avg_cd45_T_LTX927_TPM','lg2_avg_cd8_N_LTX918_TPM','lg2_avg_cd8_T_LTX920_TPM','lg2_avg_tex_N_LTX933_TPM','lg2_avg_tex_T_LTX893_TPM','lg2_avg_teff_T_LTX893_TPM','lg2_avg_cd8_T_LTX896_TPM','lg2_avg_RtwoVd1_T_LTX293_TPM','lg2_avg_cd8_N_LTX933_TPM','lg2_avg_cd4_N_LTX949_TPM','lg2_avg_cd4_T_LTX893_TPM','lg2_avg_nkcells_N_LTX918_TPM','lg2_avg_nkcells_N_LTX920_TPM','lg2_avg_cd8_N_LTX920_TPM','lg2_avg_cd8_N_LTX902_TPM','lg2_avg_nkcells_T_LTX893_TPM','lg2_avg_cd8_N_LTX893_TPM','lg2_avg_cd8_T_LTX902_TPM','lg2_avg_teff_N_LTX933_TPM','lg2_avg_cd8_N_LTX949_TPM','lg2_avg_nkcells_N_LTX893_TPM','lg2_avg_cd8_N_LTX896_TPM','lg2_avg_nkcells_N_LTX949_TPM','lg2_avg_nkcells_T_LTX949_TPM','lg2_avg_nkcells_N_LTX902_TPM','lg2_avg_nkcells_N_LTX927_TPM','lg2_avg_cd45_T_LTX949_TPM','lg2_avg_cd4_T_LTX896_TPM','lg2_avg_tex_T_LTX896_TPM','lg2_avg_cd4_T_LTX918_TPM','lg2_avg_dc_T_LTX918_TPM','lg2_avg_bcells_T_LTX933_TPM','lg2_avg_dc_T_LTX949_TPM','lg2_avg_dc_T_LTX927_TPM','lg2_avg_monocytes_T_LTX949_TPM','lg2_avg_RthreeVd1_T_LTX567_TPM','lg2_avg_cd4_N_LTX902_TPM','lg2_avg_cd4_T_LTX902_TPM','lg2_avg_nkcells_N_LTX933_TPM','lg2_avg_nkcells_T_LTX933_TPM','lg2_avg_teff_T_LTX933_TPM','lg2_avg_bcells_T_LTX896_TPM','lg2_avg_bcells_N_LTX933_TPM','lg2_avg_bcells_T_LTX893_TPM','lg2_avg_treg_T_LTX893_TPM','lg2_avg_treg_N_LTX902_TPM','lg2_avg_treg_T_LTX927_TPM','lg2_avg_treg_T_LTX896_TPM','lg2_avg_cd8_T_LTX949_TPM','lg2_avg_nkcells_T_LTX920_TPM','lg2_avg_treg_T_LTX920_TPM','lg2_avg_tex_N_LTX902_TPM','lg2_avg_dc_N_LTX920_TPM','lg2_avg_dc_T_LTX920_TPM','lg2_avg_bcells_N_LTX920_TPM','lg2_avg_bcells_N_LTX902_TPM','lg2_avg_tex_T_LTX920_TPM','lg2_avg_treg_T_LTX917_TPM','lg2_avg_cd4_N_LTX896_TPM','lg2_avg_teff_N_LTX902_TPM','lg2_avg_nkcells_T_LTX896_TPM','lg2_avg_cd4_T_LTX920_TPM','lg2_avg_dc_T_LTX896_TPM','lg2_avg_nkcells_N_LTX896_TPM','lg2_avg_cd4_N_LTX917_TPM','lg2_avg_teff_N_LTX896_TPM','lg2_avg_bcells_T_LTX949_TPM','lg2_avg_bcells_N_LTX893_TPM','lg2_avg_bcells_T_LTX918_TPM','lg2_avg_teff_T_LTX917_TPM','lg2_avg_tex_T_LTX918_TPM','lg2_avg_bcells_T_LTX927_TPM','lg2_avg_bcells_N_LTX927_TPM','lg2_avg_cd4_T_LTX933_TPM','lg2_avg_cd4_N_LTX918_TPM','lg2_avg_cd45_T_LTX902_TPM','lg2_avg_cd45_T_LTX918_TPM','lg2_avg_bcells_T_LTX920_TPM','lg2_avg_RthreeVd2_T_LTX567_TPM','lg2_avg_treg_T_LTX933_TPM','lg2_avg_cd4_N_LTX933_TPM','lg2_avg_RtwoVd1_T_LTX638_TPM','lg2_avg_monocytes_T_LTX920_TPM','lg2_avg_monocytes_N_LTX933_TPM','lg2_avg_monocytes_T_LTX927_TPM','lg2_avg_cd4_N_LTX893_TPM','lg2_avg_monocytes_N_LTX949_TPM','lg2_avg_RoneVd1_T_LTX310_TPM','lg2_avg_RoneVd2_T_LTX310_TPM','lg2_avg_tex_T_LTX927_TPM','lg2_avg_Vd2_N_LTX310_TPM','lg2_avg_Vd1_N_LTX293_TPM','lg2_avg_cd45_N_LTX949_TPM','lg2_avg_cd45_T_LTX893_TPM','lg2_avg_cd45_T_LTX896_TPM','lg2_avg_cd8_T_LTX933_TPM','lg2_avg_cd45_T_LTX920_TPM','lg2_avg_RtwoVd1_T_LTX159_TPM','lg2_avg_cd45_N_LTX933_TPM','lg2_avg_cd45_T_LTX933_TPM','lg2_avg_teff_N_LTX927_TPM','lg2_avg_Vd1_N_LTX284_TPM','lg2_avg_cd4_T_LTX917_TPM','lg2_avg_monocytes_T_LTX896_TPM','lg2_avg_cd45_N_LTX920_TPM','lg2_avg_Vd1_N_LTX159_TPM','lg2_avg_Vd2_N_LTX176_TPM','lg2_avg_Vd2_N_LTX284_TPM','lg2_avg_monocytes_T_LTX893_TPM','lg2_avg_cd8_T_LTX917_TPM','lg2_avg_monocytes_T_LTX918_TPM','lg2_avg_treg_N_LTX933_TPM','lg2_avg_cd4_N_LTX927_TPM','lg2_avg_cd45_N_LTX893_TPM','lg2_avg_dc_N_LTX918_TPM','lg2_avg_tex_T_LTX933_TPM','lg2_avg_cd45_N_LTX902_TPM','lg2_avg_monocytes_N_LTX920_TPM','lg2_avg_cd45_N_LTX896_TPM','lg2_avg_cd4_N_LTX920_TPM','lg2_avg_Vd1_N_LTX871_TPM','lg2_avg_cd8_N_LTX927_TPM','lg2_avg_RoneVd1_T_LTX142_TPM','lg2_avg_monocytes_N_LTX903_TPM','lg2_avg_teff_T_LTX896_TPM','lg2_avg_Vd1_N_LTX176_TPM','lg2_avg_cd45_N_LTX927_TPM','lg2_avg_cd8_T_LTX903_TPM','lg2_avg_cd8_N_LTX903_TPM','lg2_avg_cd4_N_LTX903_TPM','lg2_avg_nkcells_N_LTX903_TPM','lg2_avg_nkcells_T_LTX903_TPM','lg2_avg_teff_T_LTX903_TPM','lg2_avg_cd4_T_LTX903_TPM','lg2_avg_dc_N_LTX903_TPM','lg2_avg_cd45_N_LTX903_TPM','lg2_avg_cd45_T_LTX903_TPM','lg2_avg_bcells_T_LTX903_TPM','lg2_avg_dc_T_LTX903_TPM','lg2_avg_monocytes_T_LTX903_TPM','lg2_avg_treg_T_LTX903_TPM','lg2_avg_tex_T_LTX903_TPM','lg2_avg_teff_N_LTX903_TPM','lg2_avg_Vd1_N_LTX142_TPM','lg2_avg_cd45_N_LTX917_TPM','lg2_avg_Vd1_N_LTX310_TPM','lg2_avg_cd45_T_LTX917_TPM','lg2_avg_cd45_N_LTX918_TPM','lg2_avg_monocytes_N_LTX918_TPM','lg2_avg_RtwoVd2_T_LTX159_TPM','lg2_avg_Vd1_N_LTX638_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_1_logFC_bcells_T_vs_bcells_N' => array(
            'name' => 'logFC bcells T vs bcells N',
            'slider_min' => -4,
            'slider_max' => 4,
            'default_low' => -4,
            'default_high' => 4
        ),
        'contrast_2_logFC_cd4_T_vs_cd4_N' => array(
            'name' => 'logFC cd4 T vs cd4 N',
            'slider_min' => -4,
            'slider_max' => 5,
            'default_low' => -4,
            'default_high' => 5
        ),
        'contrast_3_logFC_cd45_T_vs_cd45_N' => array(
            'name' => 'logFC cd45 T vs cd45 N',
            'slider_min' => -5,
            'slider_max' => 5,
            'default_low' => -5,
            'default_high' => 5
        ),
        'contrast_4_logFC_cd8_T_vs_cd8_N' => array(
            'name' => 'logFC cd8 T vs cd8 N',
            'slider_min' => -3,
            'slider_max' => 2,
            'default_low' => -3,
            'default_high' => 2
        ),
        'contrast_5_logFC_dc_T_vs_dc_N' => array(
            'name' => 'logFC dc T vs dc N',
            'slider_min' => -3,
            'slider_max' => 4,
            'default_low' => -3,
            'default_high' => 4
        ),
        'contrast_6_logFC_monocytes_T_vs_monocytes_N' => array(
            'name' => 'logFC monocytes T vs monocytes N',
            'slider_min' => -10,
            'slider_max' => 7,
            'default_low' => -10,
            'default_high' => 7
        ),
        'contrast_7_logFC_nkcells_T_vs_nkcells_N' => array(
            'name' => 'logFC nkcells T vs nkcells N',
            'slider_min' => -3,
            'slider_max' => 3,
            'default_low' => -3,
            'default_high' => 3
        ),
        'contrast_8_logFC_Vd1_T_vs_Vd1_N' => array(
            'name' => 'logFC Vd1 T vs Vd1 N',
            'slider_min' => -10,
            'slider_max' => 8,
            'default_low' => -10,
            'default_high' => 8
        ),
        'contrast_9_logFC_Vd2_T_vs_Vd2_N' => array(
            'name' => 'logFC Vd2 T vs Vd2 N',
            'slider_min' => -7,
            'slider_max' => 8,
            'default_low' => -7,
            'default_high' => 8
        ),
        'contrast_10_logFC_teff_T_vs_teff_N' => array(
            'name' => '0 logFC teff T vs teff N',
            'slider_min' => -5,
            'slider_max' => 7,
            'default_low' => -5,
            'default_high' => 7
        ),
        'contrast_11_logFC_tex_T_vs_tex_N' => array(
            'name' => '1 logFC tex T vs tex N',
            'slider_min' => -9,
            'slider_max' => 9,
            'default_low' => -9,
            'default_high' => 9
        ),
        'contrast_12_logFC_treg_T_vs_treg_N' => array(
            'name' => '2 logFC treg T vs treg N',
            'slider_min' => -15,
            'slider_max' => 8,
            'default_low' => -15,
            'default_high' => 8
        ),
        'contrast_10_padj_teff_T_vs_teff_N' => array(
            'name' => '0 padj teff T vs teff N',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_1_padj_bcells_T_vs_bcells_N' => array(
            'name' => 'padj bcells T vs bcells N',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_11_padj_tex_T_vs_tex_N' => array(
            'name' => '1 padj tex T vs tex N',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_2_padj_cd4_T_vs_cd4_N' => array(
            'name' => 'padj cd4 T vs cd4 N',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_12_padj_treg_T_vs_treg_N' => array(
            'name' => '2 padj treg T vs treg N',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_3_padj_cd45_T_vs_cd45_N' => array(
            'name' => 'padj cd45 T vs cd45 N',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_4_padj_cd8_T_vs_cd8_N' => array(
            'name' => 'padj cd8 T vs cd8 N',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_5_padj_dc_T_vs_dc_N' => array(
            'name' => 'padj dc T vs dc N',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_6_padj_monocytes_T_vs_monocytes_N' => array(
            'name' => 'padj monocytes T vs monocytes N',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_7_padj_nkcells_T_vs_nkcells_N' => array(
            'name' => 'padj nkcells T vs nkcells N',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_8_padj_Vd1_T_vs_Vd1_N' => array(
            'name' => 'padj Vd1 T vs Vd1 N',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        ),
        'contrast_9_padj_Vd2_T_vs_Vd2_N' => array(
            'name' => 'padj Vd2 T vs Vd2 N',
            'slider_min' => 0,
            'slider_max' => 1,
            'default_low' => 0,
            'default_high' => 1
        )
    )
    ),
    // Scatterplot Parameters
'pca' => 'p316_PCA',
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'contrast_1_logFC_bcells_T_vs_bcells_N',
        'default-y' => 'contrast_2_logFC_cd4_T_vs_cd4_N',
        'selection' => array(
            'contrast_1_logFC_bcells_T_vs_bcells_N' => array(
                'name' => 'logFC bcells T vs bcells N'
            ),
            'contrast_2_logFC_cd4_T_vs_cd4_N' => array(
                'name' => 'logFC cd4 T vs cd4 N'
            ),
            'contrast_3_logFC_cd45_T_vs_cd45_N' => array(
                'name' => 'logFC cd45 T vs cd45 N'
            ),
            'contrast_4_logFC_cd8_T_vs_cd8_N' => array(
                'name' => 'logFC cd8 T vs cd8 N'
            ),
            'contrast_5_logFC_dc_T_vs_dc_N' => array(
                'name' => 'logFC dc T vs dc N'
            ),
            'contrast_6_logFC_monocytes_T_vs_monocytes_N' => array(
                'name' => 'logFC monocytes T vs monocytes N'
            ),
            'contrast_7_logFC_nkcells_T_vs_nkcells_N' => array(
                'name' => 'logFC nkcells T vs nkcells N'
            ),
            'contrast_8_logFC_Vd1_T_vs_Vd1_N' => array(
                'name' => 'logFC Vd1 T vs Vd1 N'
            ),
            'contrast_9_logFC_Vd2_T_vs_Vd2_N' => array(
                'name' => 'logFC Vd2 T vs Vd2 N'
            ),
            'contrast_10_logFC_teff_T_vs_teff_N' => array(
                'name' => '0 logFC teff T vs teff N'
            ),
            'contrast_11_logFC_tex_T_vs_tex_N' => array(
                'name' => '1 logFC tex T vs tex N'
            ),
            'contrast_12_logFC_treg_T_vs_treg_N' => array(
                'name' => '2 logFC treg T vs treg N'
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
            'contrast_P_PCA_estimatePCA6' => array(
                'name' => 'PCA estimatePCA6'
            ),
            'contrast_P_PCA_estimatePCA7' => array(
                'name' => 'PCA estimatePCA7'
            ),
            'contrast_P_PCA_estimatePCA8' => array(
                'name' => 'PCA estimatePCA8'
            ),
            'contrast_P_PCA_estimatePCA9' => array(
                'name' => 'PCA estimatePCA9'
            ),
            'contrast_P_PCA_estimatePCA10' => array(
                'name' => 'PCA estimatePCA10'
            ),
            'contrast_1_lg10p_bcells_T_vs_bcells_N' => array(
                'name' => 'lg10p bcells T vs bcells N'
            ),
            'contrast_2_lg10p_cd4_T_vs_cd4_N' => array(
                'name' => 'lg10p cd4 T vs cd4 N'
            ),
            'contrast_3_lg10p_cd45_T_vs_cd45_N' => array(
                'name' => 'lg10p cd45 T vs cd45 N'
            ),
            'contrast_4_lg10p_cd8_T_vs_cd8_N' => array(
                'name' => 'lg10p cd8 T vs cd8 N'
            ),
            'contrast_5_lg10p_dc_T_vs_dc_N' => array(
                'name' => 'lg10p dc T vs dc N'
            ),
            'contrast_6_lg10p_monocytes_T_vs_monocytes_N' => array(
                'name' => 'lg10p monocytes T vs monocytes N'
            ),
            'contrast_7_lg10p_nkcells_T_vs_nkcells_N' => array(
                'name' => 'lg10p nkcells T vs nkcells N'
            ),
            'contrast_8_lg10p_Vd1_T_vs_Vd1_N' => array(
                'name' => 'lg10p Vd1 T vs Vd1 N'
            ),
            'contrast_9_lg10p_Vd2_T_vs_Vd2_N' => array(
                'name' => 'lg10p Vd2 T vs Vd2 N'
            ),
            'contrast_10_lg10p_teff_T_vs_teff_N' => array(
                'name' => '0 lg10p teff T vs teff N'
            ),
            'contrast_11_lg10p_tex_T_vs_tex_N' => array(
                'name' => '1 lg10p tex T vs tex N'
            ),
            'contrast_12_lg10p_treg_T_vs_treg_N' => array(
                'name' => '2 lg10p treg T vs treg N'
            ),
            'contrast_L_lg10p_LRT_Tumor_vs_Normal' => array(
                'name' => 'lg10p LRT Tumor vs Normal'
            ),
            'contrast_L_lg10p_LRT_interpatient_difference' => array(
                'name' => 'lg10p LRT interpatient difference'
            ),
            'contrast_L_lg10p_LRT_cell_scource' => array(
                'name' => 'lg10p LRT cell scource'
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
            'contrast_P_lg10p_PCA6' => array(
                'name' => 'lg10p PCA6'
            ),
            'contrast_P_lg10p_PCA7' => array(
                'name' => 'lg10p PCA7'
            ),
            'contrast_P_lg10p_PCA8' => array(
                'name' => 'lg10p PCA8'
            ),
            'contrast_P_lg10p_PCA9' => array(
                'name' => 'lg10p PCA9'
            ),
            'contrast_P_lg10p_PCA10' => array(
                'name' => 'lg10p PCA10'
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
            'contrast_P_PCA_estimatePCA6' => array(
                'name' => 'PCA estimatePCA6'
            ),
            'contrast_P_PCA_estimatePCA7' => array(
                'name' => 'PCA estimatePCA7'
            ),
            'contrast_P_PCA_estimatePCA8' => array(
                'name' => 'PCA estimatePCA8'
            ),
            'contrast_P_PCA_estimatePCA9' => array(
                'name' => 'PCA estimatePCA9'
            ),
            'contrast_P_PCA_estimatePCA10' => array(
                'name' => 'PCA estimatePCA10'
            ),
            'contrast_1_lg2BaseMean_bcells_T_vs_bcells_N' => array(
                'name' => 'lg2BaseMean bcells T vs bcells N'
            ),
            'contrast_2_lg2BaseMean_cd4_T_vs_cd4_N' => array(
                'name' => 'lg2BaseMean cd4 T vs cd4 N'
            ),
            'contrast_3_lg2BaseMean_cd45_T_vs_cd45_N' => array(
                'name' => 'lg2BaseMean cd45 T vs cd45 N'
            ),
            'contrast_4_lg2BaseMean_cd8_T_vs_cd8_N' => array(
                'name' => 'lg2BaseMean cd8 T vs cd8 N'
            ),
            'contrast_5_lg2BaseMean_dc_T_vs_dc_N' => array(
                'name' => 'lg2BaseMean dc T vs dc N'
            ),
            'contrast_6_lg2BaseMean_monocytes_T_vs_monocytes_N' => array(
                'name' => 'lg2BaseMean monocytes T vs monocytes N'
            ),
            'contrast_7_lg2BaseMean_nkcells_T_vs_nkcells_N' => array(
                'name' => 'lg2BaseMean nkcells T vs nkcells N'
            ),
            'contrast_8_lg2BaseMean_Vd1_T_vs_Vd1_N' => array(
                'name' => 'lg2BaseMean Vd1 T vs Vd1 N'
            ),
            'contrast_9_lg2BaseMean_Vd2_T_vs_Vd2_N' => array(
                'name' => 'lg2BaseMean Vd2 T vs Vd2 N'
            ),
            'contrast_10_lg2BaseMean_teff_T_vs_teff_N' => array(
                'name' => '0 lg2BaseMean teff T vs teff N'
            ),
            'contrast_11_lg2BaseMean_tex_T_vs_tex_N' => array(
                'name' => '1 lg2BaseMean tex T vs tex N'
            ),
            'contrast_12_lg2BaseMean_treg_T_vs_treg_N' => array(
                'name' => '2 lg2BaseMean treg T vs treg N'
            ),
            'contrast_L_lg2BaseMean_LRT_Tumor_vs_Normal' => array(
                'name' => 'lg2BaseMean LRT Tumor vs Normal'
            ),
            'contrast_L_lg2BaseMean_LRT_interpatient_difference' => array(
                'name' => 'lg2BaseMean LRT interpatient difference'
            ),
            'contrast_L_lg2BaseMean_LRT_cell_scource' => array(
                'name' => 'lg2BaseMean LRT cell scource'
            )
        )
    )
//End scatterplot
);
