<?php

class Feed
{
    private $labels;
    private $articles;

    public function __construct($labels)
    {
        $this->labels = $labels;
    }

    public function pushArticle($article)
    {
        $this->articles[] = $article;
    }

    public function getArray()
    {
        $array[] = $this->labels;
        foreach ($this->articles as $article)
        {
            $array[] = $article->getArray();
        }

        return $array;
    }
}
