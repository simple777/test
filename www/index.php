<?php

require_once __DIR__.'/class/class.test.php';

$art = new Article( 'Важная новость', 'Текст важной новости' );
$art->view();

?>