<?php
$message = "";
$downloadLink = "";

if (isset($_POST['upload'])) {

    $filename = $_FILES['myfile']['name'];
    $tempname = $_FILES['myfile']['tmp_name'];
    $folder = "uploads/" . $filename;

    // Check if file selected
    if (!empty($filename)) {

        if (move_uploaded_file($tempname, $folder)) {
            $message = "File uploaded successfully!";
            $downloadLink = "download.php?file=" . urlencode($filename);
        } else {
            $message = "Failed to upload file.";
        }

    } else {
        $message = "Please select a file.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>File Upload System</title>
</head>
<body>

<h2>Upload File</h2>

<form action="" method="POST" enctype="multipart/form-data">
    Select file:
    <input type="file" name="myfile" required>
    <br><br>
    <button type="submit" name="upload">Upload</button>
</form>

<br>

<?php if ($message != ""): ?>
    <p style="color: green;"><?php echo $message; ?></p>
<?php endif; ?>

<?php if ($downloadLink != ""): ?>
    <a href="<?php echo $downloadLink; ?>">Download Uploaded File</a>
<?php endif; ?>

</body>
</html>