<?php 

require_once("CsvWriter.php");
require_once("XmlFeedFactory.php");
require_once("Feed.php");

function csv($mode, $url, $path)
{
    if ($mode == "simple")
    {
        $wmode = "w";
    }
    else if ($mode = "extended")
    {
        $wmode = "a";
    }
    else
    {
        echo "Invalid parameter to command csv.";
        return;
    }

    $csvWriter = new CsvWriter($path, $wmode);
    $xml = file_get_contents($url);
    $xmlFeedFactory = new XmlFeedFactory($xml);
    $feed = $xmlFeedFactory->constructFeed();
    $array  = $feed->getArray();
    foreach ($array as $fields)
    {
        $csvWriter->writeFields($fields);
    }
}
