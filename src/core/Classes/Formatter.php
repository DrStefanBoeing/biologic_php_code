<?php

namespace Biologic\Core\Classes;

use Exception;

class Formatter
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * @param $format
     * @return string
     * @throws Exception
     */
    public function convert($format)
    {
        switch($format) {
            case 'csv':
                return $this->toCSV();
            case 'json':
                return json_encode($this->data);
            default:
                throw new Exception('Invalid format: '. $format);
        }
    }

    public function toCSV()
    {
        $csv_data = '';

        $keys_set = false;
        foreach($this->data as $row) {
            if($keys_set === false) {
                $csv_data .= implode(',', array_keys((array)$row));
                $csv_data .= "\n";

                $keys_set = true;
            }

            foreach($row as $entry) {
                $_entry = str_replace(',', ';', $entry);
                $csv_data .= $_entry.',';
            }
            $csv_data .= "\n";
        }

        return $csv_data;
    }
}

