<?php 
if(isset($_POST['download'])){
   if(empty($_POST['file']))
   {
    header("location: RawFile.php?message=Please Provide File Address");
    exit();
   }
  $file_name= basename($_POST['file']);
  $path=$_POST['file'];


 header("Cache-Control: public");
  header("Content-Description: File Transfer");
  header("Content-Disposition: attachment; filename=$file_name");
  header("Content-Transfer-Encoding: binary");
  readfile($path);
  exit();

}
