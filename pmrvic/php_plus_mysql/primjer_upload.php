<!DOCTYPE html>
<html>
  <head>
    <title>TODO supply a title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div>
      <form method="POST" name="upload" action="#" enctype="multipart/form-data">
        <input type="file" name="datoteka">
        <input type="submit" name="uploadaj">
        
      </form>
      
      
    </div>
  </body>
</html>
<?php

if(isset($_POST['uploadaj'])){
  echo '<br>Vaša datoteka je uploadana:<br>';
  
  $upload_dir=__DIR__.'\upload';
  $upload_file= basename($_FILES['datoteka']['name']);
  
  echo $upload_dir.'<br>';
  echo $upload_file.'<br>';
  
  if(move_uploaded_file($_FILES['datoteka']['tmp_name'], $upload_dir.'/'.$upload_file)){
    echo 'file je uploadan: ';
    echo '<a href="upload/'.$upload_file.'">file</a>';
  }
  var_dump($_FILES);
}

