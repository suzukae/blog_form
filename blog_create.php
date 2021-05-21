<?php
require_once('htdocs/blog/blog.php');
$blogs = $_POST;

$blog = new Blog();
$blog->blogValidate($blogs);
$blog->blogCreate($blogs);




?>
<p><a href="/">戻る</a></p>