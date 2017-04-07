<?php

require_once __DIR__.'/class/class.test.php';

$art = new Article();
$art->title = 'Важная новость';
$art->text = 'Текст важной новости';
$art->view();

?>