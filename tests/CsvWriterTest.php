<?php

use PHPUnit\Framework\TestCase;

class CsvWriterTest extends TestCase
{
    public function testConstructor(): void
    {
        $path = "file.csv";
        $mode = "w";
        $csvWriter = new CsvWriter($path, $mode);
        $this->assertFileExists($path);
    }
}