<?php

namespace app\Author;

class Author
{
    private $fname, $lname;
    public function __construct($fname, $lname)
    {
        $this->fname = $fname;
        $this->lname = $lname;
    }
    public function getFirstN()
    {
        return $this->fname;
    }
    public function getLastN()
    {
        return $this->lname;
    }
}
