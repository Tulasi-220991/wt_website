<?php

echo "<h2>Task 3: File Operation Modes</h2>";

$filename = "sample.txt";

/* -----------------------------------
   1. w MODE (Write - erase old data)
----------------------------------- */
echo "<h3>w Mode (Write - erase old data)</h3>";
$fp = fopen($filename, "w");
fwrite($fp, "This is written using w mode.\n");
fclose($fp);
echo "File written using w mode.<br>";

/* -----------------------------------
   2. r MODE (Read only)
----------------------------------- */
echo "<h3>r Mode (Read Only)</h3>";
$fp = fopen($filename, "r");
echo nl2br(fread($fp, filesize($filename)));
fclose($fp);

/* -----------------------------------
   3. a MODE (Append)
----------------------------------- */
echo "<h3>a Mode (Append)</h3>";
$fp = fopen($filename, "a");
fwrite($fp, "This line added using a mode.\n");
fclose($fp);
echo "Data appended.<br>";

/* -----------------------------------
   4. r+ MODE (Read & Write)
----------------------------------- */
echo "<h3>r+ Mode (Read & Write)</h3>";
$fp = fopen($filename, "r+");
fwrite($fp, "R+ mode start.\n");
rewind($fp);
echo nl2br(fread($fp, filesize($filename)));
fclose($fp);

/* -----------------------------------
   5. w+ MODE (Read & Write - erase)
----------------------------------- */
echo "<h3>w+ Mode (Read & Write - erase)</h3>";
$fp = fopen($filename, "w+");
fwrite($fp, "W+ mode erased old data.\n");
rewind($fp);
echo nl2br(fread($fp, filesize($filename)));
fclose($fp);

/* -----------------------------------
   6. a+ MODE (Read & Append)
----------------------------------- */
echo "<h3>a+ Mode (Read & Append)</h3>";
$fp = fopen($filename, "a+");
fwrite($fp, "A+ adds new line.\n");
rewind($fp);
echo nl2br(fread($fp, filesize($filename)));
fclose($fp);

/* -----------------------------------
   7. x MODE (Create new file - fail if exists)
----------------------------------- */
echo "<h3>x Mode (Create New File Only)</h3>";
$newfile = "newfile.txt";

if(!file_exists($newfile)) {
    $fp = fopen($newfile, "x");
    fwrite($fp, "Created using x mode.");
    fclose($fp);
    echo "New file created using x mode.<br>";
} else {
    echo "File already exists. x mode failed.<br>";
}

/* -----------------------------------
   8. x+ MODE (Create & Read/Write)
----------------------------------- */
echo "<h3>x+ Mode (Create New & Read/Write)</h3>";
$newfile2 = "newfile2.txt";

if(!file_exists($newfile2)) {
    $fp = fopen($newfile2, "x+");
    fwrite($fp, "Created using x+ mode.");
    rewind($fp);
    echo nl2br(fread($fp, filesize($newfile2)));
    fclose($fp);
} else {
    echo "File already exists. x+ mode failed.<br>";
}

?>