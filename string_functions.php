<?php
echo "<h2>String Functions</h2>";
$text = "welcome to call center";
echo "length: ".strlen($text)."<br>";

echo "word count: ".str_word_count($text)."<br>";

echo "reverse:".strrev($text)."<br>";

echo "upper case:".strtoupper($text)."<br>";

echo "lower case:".strtolower($text)."<br>";

echo "ucfirst: ".ucfirst(trim($text))."<br>";

echo "ucwords: ".ucwords(trim($text))."<br>";

echo "position of call: ".strpos($text,"call")."<br>";

echo "replace: ".str_replace("call center","support center",$text)."<br>";

echo "substring: ".substr($text,0,7)."<br>";

echo "trim: ".trim($text)."<br>";
echo "ltrim: ".ltrim($text)."<br>";
echo "rtrim: ".rtrim($text)."<br>";

echo "compare: ".strcmp("hello","Hello")."<br>";
echo "compare ignore case: ".strcasecmp("Hello","hello")."<br>";

echo "html special chars: ".htmlspecialchars("<h1>Hello</h1>")."<br>";
echo "add slashes:".addslashes("i'm call center")."<br>";

?>