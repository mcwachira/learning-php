<?php
class Article{
    public  $title;
    public $content;
    private $published = false;

    public function __construct($title, $content) {
        $this->title = $title;
        $this->content = $content;
    }

    public function publish(){
        $this->published = true;
}

    public function isPublished(){
        echo $this->published;
    }

}


$article1 = new Article("Why NestJs", 'Why Nest js is the best server side Framework ');
$article2 = new Article("Jane Doe", 'janedoe@gmail.com');
var_dump($article2);
var_dump($article1);

$article2 ->publish("true");

$article1 ->isPublished();
$article2 ->isPublished();