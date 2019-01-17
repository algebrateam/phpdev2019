<!doctype html> 
<html>
    <form method="POST" name="upload" action="#" enctype="multipart/form-data">
        <input type="file" name="datoteka">
        <input type="submit" name="uploadaj">

    </form>
</html>



<?php
if (isset($_POST['uploadaj'])) {
    echo '<br>Vaša datoteka je uploadana<br>';
    $upload_dir = __DIR__ . '\upload';
    $upload_file = basename($_FILES['datoteka']['name']);

    echo $upload_file . '<br>';
    echo $upload_dir . '<br>';

    if (move_uploaded_file($_FILES['datoteka']['tmp_name'], $upload_dir . '/' . $upload_file)) {
        echo 'File je uploadan';
    }
    var_dump($_FILES);
}

