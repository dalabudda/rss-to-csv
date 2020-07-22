<?php 

require_once("commands.php");

if ($argc < 2)
{
    echo "Invalid command. ".
    "Try \"php [this_script_path] [command] <rss_url> <csv_output_path>\".\n".
    "Commands:\n".
    "\tcsv:simple - save to new csv file\n".
    "\tcsv:extended - save to end of csv file";
    return;
}

if ($argv[1] == "csv:simple")
{
    $mode = "simple";
}
else if ($argv[1] == "csv:extended")
{
    $mode = "extended";
}
else
{
    echo "There is no such command as \"" . $argv[1] . "\". Try \"csv:simple\" or \"csv:extended\".";
    return;
}

if ($argc < 3)
{
    $url = "https://blog.nationalgeographic.org/rss";
    $path = "output.csv";
}
else if ($argc < 4)
{
    $url = $argv[2];
    $path = "output.csv";
}
else
{
    $url = $argv[2];
    $path = $argv[3] . ".csv";
}

csv($mode, $url, $path);