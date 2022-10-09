extract($row);

                    echo "test:norm_counts_KLF17_D0_2_TPM:::";
                    echo "NC ".$norm_counts_KLF17_D0_2_TPM;


                    $samples = setting('samples');
                    $ts_chart_data = [];
                    
                    $i = 0;
                    if(count($plot_results) > 0) { // this could later be replaced by a loop over returned rows if needed
                        foreach ($samples as $sample_key => $sample) {
                            $h3 = floatval($plot_results[0]->{$sample_key})
                            
                            array_push($ts_chart_data, [
                                'x' => $i,
                                'y' => floatval($plot_results[0]->{$sample_key}),
                                'color' => $sample['color']
                            ]);
                            array_push($bar_chart_categories, $sample['name']);
                            $i++;
                        }
                    }

                    $j = 0;
                    echo "<br><br>Row: ";
                    var_dump($row);

                    $datasets = array_keys($tsVarArray);
                    echo "<br> Datasets";
                    var_dump($datasets);
                    echo "<br><br><br>";
                    foreach( $tsVarArray as $key => $ts ){
                        $dataset_color = $ts['color'];
                       
                        echo "<br><br><br>Col: ";
                        var_dump($dataset_color);

                        $sampleKeys = array_keys($ts['sample_group']);

                        
                        foreach ($sampleKeys as $sampleID){
                            echo "sampleID:".$sampleID."<br>";
                            $valCol = $ts['sample_group'][$sampleID]['sampleDbCols'];
                            echo "<br>ValCol:"; var_dump($valCol);

                            $value_array = array();
                            foreach ($valCol as $valSample){
                                $value_array[] = ${$valSample};
                            }

                            echo "<br><br><br>Value array:".$sampleID.":";
                            var_dump($value_array);
                        }

                        
                        

                        echo "<br><br><br>Sample Keys:";
                        var_dump($sampleKeys);

                        

                        echo "<br><br><br>Sample Group:";
                        
                        $sampleGroup = $ts['sample_group'];
                        var_dump($sampleGroup);

                        echo "<br><br><br>Sample Group Values:";
                        $sampleGroupValues = ${$sampleGroup};
                        var_dump($sampleGroupValues);

                        $value_array = array();
                        foreach ($sampleKeys as $sample){
                            $value_array[] = ${$sample};
                        }
                        $name = $dataset."_median_array".$l;
                        ${$name}[] = calculate_median($value_array);

                         
                        # Done calculate medians for replicates
                        ###############################################################################

                        echo "Key:".$key."<br>";
                        echo "ts:<br>";
                        var_dump($ts);
                        
                    }