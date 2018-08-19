<?php require_once("master.php");?>
<?php
  $mas = new master();
  $mas->continous($_REQUEST['clicks'],$_REQUEST['time']);//mengirimkan ke master untuk dikirim jumlah klik dan durasi
 ?>
