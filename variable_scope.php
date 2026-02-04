<?php
echo "<h2>PHP variables & scope</h2>";

//datatypes
$string = "call center";
$integer = 24;
$float=10.5;
$boolean=true;
$array=array("support","sales","helpdesk");

echo "string:$string <br>";
echo "integer:$integer <br>";
echo "float:$float <br>";
echo "bolean:$boolean <br>";
echo "array:";
print_r($array);

//local scope
function localscope(){
    $localvar = "I am local";
    echo "<br>Local scope:$localvar";
}
localscope();

//global scope
$globalvar="i am global";
function globalscope(){
    global $globalvar;
    echo "<br>global scope:$globalvar";
}
globalscope();

//static scope
function staticscope(){
    static $count=0;
    $count++;
    echo "<br>static count:$count";
}
staticscope();
staticscope();

?>