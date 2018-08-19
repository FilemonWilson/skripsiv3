<?php
session_start() ;
	include "koneksi.php";
?>
<?php
	if(isset($_POST['submit'])){
				$username = $_SESSION['srv1']['username'];
				$nilai = $_POST['nilai'];
				$Eval1 = $_POST['Eval1'] ;
				$Eval2 = $_POST['Eval2'] ;
				$Eval3 = $_POST['Eval3'] ;
				$Eval4 = $_POST['Eval4'] ;
				$Eval5 = $_POST['Eval5'] ;

		$update = mysqli_query($koneksi, "UPDATE srv1 SET nilai = '$nilai', Eval1='$Eval1' , Eval2='$Eval2', Eval3= '$Eval3', Eval4 = '$Eval4', Eval5 = '$Eval5'   WHERE username='$username'") or die(mysqli_error());
		

			if($update){
			
							echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Nilai Berhasil Di Simpan.</div> ';
                            echo "<script>alert('Data Berhasil di Simpan!'); window.location = 'rekomendasi2.php'</script>";

						}else{
							echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ups, Nilai Gagal Di simpan !</div>';
							echo "<script>alert('Data Gagal di Simpan!'); window.location = 'strategi.php'</script>";
						}
			
	}

?>