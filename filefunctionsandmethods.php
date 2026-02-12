<?php
echo "<h2>Php file functions  demonstration</h2>";
$filename="sample.txt";
//file write
file_put_contents($filename,"hello tulasi\n this is php file handling task.\n");

echo "<h3>file created and written successfully</h3>";

//read file
echo "<h3>file contents</h3>";
$content=file_get_contents($filename);
echo nl2br($content);

//file information
if(file_exists($filename)){
    echo "<h3>file info</h3>";
    echo "file exists<br>";
    echo "file size:".filesize($filename)."bytes<br>";
    echo "file type:".filetype($filename)."<br>";
    echo "last access time:".date("Y-m-d H:i:s",fileatime($filename))."<br>";
    echo "last modified time:".date("Y-m-d H:i:s",filemtime($filename))."<br>";
    echo "permissions:".substr(sprintf('%o',fileperms($filename)),-4)."<br>";
}

//file management
echo "<h3>file management:</h3>";

copy($filename,"copy_sample.txt");
echo "file copied successfully<br>";

rename("copy_sample.txt","renamed_sample.txt");
echo "file renamed successfully <br>";

//directory management
echo "<h3>directory management:</h3>";

if(!is_dir("testfolder")){
    mkdir("testfolder");
    echo "folder created<br>";

}
echo "current directory:".getcwd()."<br>";
echo "<h4>files in current directory:</h4>";
$files=scandir(getcwd());

foreach($files as $file){
    echo $file."<br>";
}

//file locking
echo "<h3>File Locking:</h3>";

$fp = fopen($filename, "a");

if(flock($fp, LOCK_EX)) {
    fwrite($fp, "Adding new line with lock.\n");
    flock($fp, LOCK_UN);
    echo "File Locked and Written Successfully<br>";
}

fclose($fp);


/* Create file if not exists */

if(!file_exists($filename)) {
    file_put_contents($filename, "Testing file owner, group and inode.");
}

echo "<h2>File Owner, Group and Inode Information</h2>";

if(file_exists($filename)) {

    echo "File Name: " . $filename . "<br><br>";

    // File Owner
    echo "File Owner ID: " . fileowner($filename) . "<br>";

    // File Group
    echo "File Group ID: " . filegroup($filename) . "<br>";

    // File Inode
    echo "File Inode Number: " . fileinode($filename) . "<br>";

} else {
    echo "File does not exist.";
}


//delete file

unlink("renamed_sample.txt");
echo"<h3>renamed file deleted</h3>"
?>