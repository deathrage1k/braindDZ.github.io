<?php
$articleLink = 'https://www.php.net/manual/ru/intro-whatcando.php';
$articleText = file_get_contents('article.txt'); //������ ������ �� �����
$arpt = preg_replace('/[\x00-\x1F\x7F]/u', '', $articleText);// �������� ��������� ������� ��� ����, ����� ������� �������� ��������� ������� �� ������
$articlePreview = mb_substr($arpt, 0, 200, 'UTF-8').'...'; // ���������� ������������� ������ � ��������� � ���
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
// ���� ��������� �������� � ��������� ��-�� ����� ������� ��������� ��������, ��� �� ��������� �������������
// ����� ���������� � �������� ������������ ���������.
 ?>
 