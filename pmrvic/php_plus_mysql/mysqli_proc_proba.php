<?php
include './mysqli_connection_proc.php';

$query='SELECT * FROM stud LIMIT 10';

// FETCH ASSOC
if($result=mysqli_query($link, $query)){
  while ($row = mysqli_fetch_assoc($result)) {
    echo $row['mbrStud'].' '.$row['imeStud'].' '.$row['prezStud'];
  }
  echo "<br>";
  echo 'broj redova:'.mysqli_num_rows($result);
}
else{
  echo 'Upit nije izvršen';
  echo mysqli_error($link);
}

  echo "<hr>";
// FETCH ROW
if($result=mysqli_query($link, $query)){
  while ($row = mysqli_fetch_row($result)) {
    echo $row[0].' '.$row[1].' '.$row[2];
  }
  echo "<br>";
  echo 'broj redova:'.mysqli_num_rows($result);
}
else{
  echo 'Upit nije izvršen';
  echo mysqli_error($link);
}



