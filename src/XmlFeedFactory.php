<?php

require_once("Feed.php");
require_once("Article.php");

class XmlFeedFactory
{
    private $object;

    public function __construct($xml)
    {
        $this->object = new SimpleXMLElement($xml);
    }

    public function constructArticle($entry)
    {
        $t = $entry->title;
        $d = $entry->description;
        $l = $entry->link;
        $p = substr($entry->pubDate, 5, -6);
        $c = $entry->children('dc', true)->creator;

        return new Article($t, $d, $l, $p, $c);
    }

    public function constructFeed()
    {
        $labels = ["title", "description", "link", "pubDate", "creator"];
        $feed = new Feed($labels);
        foreach ($this->object->channel->item as $entry)
        {
            $feed->pushArticle($this->constructArticle($entry));
        }

        return $feed;
    }
}
