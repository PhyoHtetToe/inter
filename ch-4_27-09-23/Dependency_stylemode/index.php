<?php
require_once "vendor/autoload.php";

use app\Author\Author;
use app\Posts\Post;

class index
{
    public function __construct()
    {
        $fname = "Kuro";
        $lname = "Kenta";
        $content = "This is the ice-cool,Micheal Fight for the white goat";

        $author = new Author($fname, $lname);
        $post = new Post($author, $content);
        $this->answerOut($post);
    }
    public function answerOut(Post $post)
    {
        $author = $post->getAuthor();
        echo $author->getFirstN();
    }
}
new index;
