<?php
session_start() ;
	include "koneksi.php";

?>
<?php
				$username = $_SESSION['srv1']['username'];
				$videosumm = $_POST['videosumm'];


		$update = mysqli_query($koneksi, "UPDATE srv1 SET videosumm='$videosumm' WHERE username='$username'") or die(mysqli_error());

			if($update){
			
							echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Berhasil Di Simpan.</div> ';
                            echo "<script>alert('Data Berhasil di Simpan!'); window.location = 'strategi.php'</script>";

						}else{
							echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ups, Data Gagal Di simpan !</div>';
							echo "<script>alert('Data Gagal di Simpan!'); window.location = 'summ.php'</script>";
						}
			

?>