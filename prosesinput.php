<?php
session_start() ;
	include "koneksi.php";
?>
<?php
	if(isset($_POST['input'])){
				$username = $_SESSION['srv1']['username'];
				$MAI1 = $_POST['MAI1'];
				$MAI2 = $_POST['MAI2'];
				$MAI3 = $_POST['MAI3'];	
				$MAI4 = $_POST['MAI4'];
				$MAI5 = $_POST['MAI5'];

		$update = mysqli_query($koneksi, "UPDATE srv1 SET MAI1='$MAI1',MAI2='$MAI2',MAI3='$MAI3',MAI4='$MAI4',MAI5='$MAI5' WHERE username='$username'") or die(mysqli_error());

			if($update){
			
							echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Berhasil Di Simpan.</div> ';
                            echo "<script>alert('Data Berhasil di Simpan!'); window.location = 'materi.php'</script>";

						}else{
							echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ups, Data Gagal Di simpan !</div>';
							echo "<script>alert('Data Gagal di Simpan!'); window.location = 'index.php'</script>";
						}
			
	}

?>