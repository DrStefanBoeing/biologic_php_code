<?php

return array(
    'lab' => array(
        'name' => 'Tolar DB'
    ),

    /*
    * Experiment settings
    */
    'data_db_name' => 'ptl_data',
    'data_db' => array(
            'cat_table_name' => 'ptl350_cat_reference_db_table'
    ),

    'rnaseq_db_table' => 'p350_rna_seq_table',
    'primary_gene_symbol' => 'mgi_symbol',
    'ptm_display_column' => '',

    'heatmap' => array(
        'upper_limit' => 3,
        'lower_limit' => -3,
        'headline' => 'Heatmap: Row-averaged TPM',
        'pointer' => 'Gene Symbol:'
    ),

    'samples' => array(
        'norm_counts_FDC_24hICposit_2_TPM' => array(
            'color' => '#00BA38',
            'name' => 'FDC 24hICposit 2 TPM'
        ),
        'norm_counts_FDC_nonImmunised_1_TPM' => array(
            'color' => '#619CFF',
            'name' => 'FDC nonImmunised 1 TPM'
        )
    ), // End samples array
    // bar chart
    'count_table' => array(
        'headline' => 'TPM Values for all Samples',
        'sidelabel' => 'TPM'
    ),
    // Venn Diagram Parameters
    'venn' => array(
        'experiments' => array('lg2_avg_FDC_24hICposit_2_TPM','lg2_avg_FDC_nonImmunised_1_TPM'),

    'table' => array(
        'col_name_start' => 11,
        'low_highlight' => -1,
        'high_highlight' => 1
    ),

    'selection' => array(
        'contrast_X_FDC_24hICposit_2_TPM' => array(
            'name' => 'FDC 24hICposit 2 TPM',
            'slider_min' => 0,
            'slider_max' => 24754,
            'default_low' => 0,
            'default_high' => 24754
        ),
        'contrast_X_FDC_nonImmunised_1_TPM' => array(
            'name' => 'FDC nonImmunised 1 TPM',
            'slider_min' => 0,
            'slider_max' => 19387,
            'default_low' => 0,
            'default_high' => 19387
        )
    )
    ),
    // Scatterplot Parameters
    'scatterplot' => array(
        'default-x' => 'norm_counts_FDC_24hICposit_2_TPM',
        'default-y' => 'norm_counts_FDC_nonImmunised_1_TPM',
        'selection' => array(
            'norm_counts_FDC_24hICposit_2_TPM' => array(
                'name' => 's FDC 24hICposit 2 TPM'
            ),
            'norm_counts_FDC_nonImmunised_1_TPM' => array(
                'name' => 's FDC nonImmunised 1 TPM'
            )
        )
    )
//End scatterplot
);
