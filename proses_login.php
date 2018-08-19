<?php 
session_start() ;
include "koneksi.php";
 
$username = $_POST['username'];
$password = $_POST['password'];



$sql = "SELECT * FROM srv1  WHERE username= '$username' and password = '$password'";
$query = mysqli_query($koneksi,$sql);
$cek = mysqli_num_rows($query);
if($cek==1){
	$row = $query->fetch_assoc();
	$_SESSION['srv1']['username'] = $row['username'];
?>
<script>
	window.location="mai.php";
</script>
<?php
unset($_SESSION['refresh']);
}
else{ //jika pass salah
?><script>
    alert ('Username atau password salah');
    window.location="index.php";
    </script>
<?php
		}
?>

