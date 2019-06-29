<?php

$title = 'Блог - все записи';

$posts = R::find('posts', 'ORDER BY id DESC');

ob_start();
include ROOT . '\views\pages\blog\blog-all-posts.tpl';
$content = ob_get_contents();
ob_end_clean();

include ROOT . '\views\parts\head.tpl';
include ROOT . '\views\parts\header.tpl';
include ROOT . '\views\template.tpl';
include ROOT . '\views\parts\footer.tpl';
include ROOT . '\views\parts\foot.tpl';

?>
