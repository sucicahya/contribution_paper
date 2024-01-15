<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\IOFactory;

class Csvreader {

    public function read_csv($file_path) {
        $spreadsheet = IOFactory::load($file_path);
        $worksheet = $spreadsheet->getActiveSheet();
        $data = $worksheet->toArray();

        return $data;
    }

    public function get_column($file_path, $columnIndex) {
        $data = $this->read_csv($file_path);

        $columnData = array();
        foreach ($data as $row) {
            if (isset($row[$columnIndex])) {
                $columnData[] = $row[$columnIndex];
            }
        }

        return $columnData;
    }
}