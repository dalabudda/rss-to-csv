<?php

class CsvWriter
{
    private $fp;

    public function __construct($path, $mode)
    {
        $this->fp = fopen($path, $mode);
    }

    function __destruct() {
        fclose($this->fp);
    }

    public function writeFields($fields)
    {
        fputcsv($this->fp, $fields);
    }
}
