<?php

class Article
{
    private $title, $description, $link, $pubDate, $creator;

    public function __construct($title, $description, $link, $pubDate, $creator)
    {
        $this->set($title, $description, $link, $pubDate, $creator);
    }

    public function set($title, $description, $link, $pubDate, $creator)
    {
        $this->title = $title;
        $this->description = $description;
        $this->link = $link;
        $this->pubDate = $pubDate;
        $this->creator = $creator;
    }

    public function getArray()
    {
        $array[] = $this->title;
        $array[] = $this->description;
        $array[] = $this->link;
        $array[] = $this->pubDate;
        $array[] = $this->creator;

        return $array;
    }
}
