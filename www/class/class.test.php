<?php

class Article
{
    public $title;
    public $text;

    public function __construct( $title, $text = '' )
    {
        $this->title = $title;
        $this->text = $text;
    }

    public function view()
    {
        echo '<h1>'.$this->title.'</h1>';
        echo '<div>'.$this->text.'</div>';
    }
}