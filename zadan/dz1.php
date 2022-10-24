<?php
$articleLink = 'https://www.php.net/manual/ru/intro-whatcando.php';
$articleText = file_get_contents('article.txt'); //читаем статью из файла
$arpt = preg_replace('/[\x00-\x1F\x7F]/u', '', $articleText);// Заменяем невидимые символы для того, чтобы подсчёт символов корректно работал на сайтах
$articlePreview = mb_substr($arpt, 0, 200, 'UTF-8').'...'; // Желательно предоставлять статью и кодировку к ней
$words = explode(' ',$articlePreview);
    $co = count($words);

    foreach ($words as $key => $word) {
	
    if($key == $co-3)
    echo '<a href="'.$articleLink.'">';

    if($key == $co-1)
    echo $word;
    else
    echo $word.' ';
	
    if($key == $co-1)
    echo '<a>';
    }
// Есть множество символов и кодировок из-за этого имеются некоторые проблемы, так же множество пользователей
// плохо отзываются о комманде определяющей кодировку.
 ?>
 