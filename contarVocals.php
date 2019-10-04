<?php
$text = "Hola que tal";
$caracters = strlen($text);
$vocals = substr_count($text, 'a')+substr_count($text, 'e')+substr_count($text, 'i')+
substr_count($text, 'o')+substr_count($text, 'u')+substr_count($text, 'A')+
substr_count($text, 'E')+substr_count($text, 'I')+substr_count($text, 'O')+
substr_count($text, 'U');

echo "Frase: $text<br>";
echo "La frase conté $vocals vocals";
