<?php
$name='batman.txt';
if(isset($_POST['edit_file'])){
$file = fopen($name, 'w+');
fwrite($file, $_POST["tekst"]);
fclose($file);
}

$file = fopen($name,'r');
$text = fread($file, filesize($name));
fclose($file);
?>
<html>
<body>

<form method="post" action="zadaca3b.php" id="edit_form">

  <textarea name="tekst" cols="80" rows="8"><?=$text ?></textarea>
 <input type="submit" value="Edit File" name="edit_file">
</form>

</body>
</html>

