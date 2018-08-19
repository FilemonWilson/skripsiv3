<!DOCTYPE html>
<!-- Template by Quackit.com -->
<html lang="en">

<?php
    session_start() ;
	include "head.php" ;
	include "navigation.php";
?>
<body>
<?php
	include "left.php" ;
?> 
		<!-- Center Column -->
		<div class="col-sm-6">
			<h2>Rekomendasi Strategi</h2>
			<hr>
        <div class="col-sm-12" align="center">
        <a href="savedraw.php"><img src="image/draw.png" align="center"></a>
        <p>Draw</p>
        
        <a href="savesumm.php"><img src="image/summ.png" align="center"></a>
        <p>Summarization</p>
        
        <a href="savevideo.php"><img src="image/video.png" align="center"></a>
        <p>Video</p>

    <?php
        include "koneksi.php" ;
        $username = $_SESSION['srv1']['username'];
        $sql = "SELECT MAI4 FROM srv1 WHERE username='$username'" ;
        $hasil = mysqli_query($koneksi,$sql) ;
        $row = mysqli_fetch_array($hasil) ;
        
        echo "Menurut MAI, Anda telah memilih " ;
        echo $row ['MAI4'];

    ?>

        <div class="form-group">
        <div class="controls">
            <br>
            <a href="materi.php" class="btn btn-sm btn-danger">Kembali</a>
            </div>
        </div>
        </div>
		</div><!--/Center Column-->




<?php
	include "rightfoot.php";
?>
    <!-- jQuery -->
    <script src="js/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
	<!-- IE10 viewport bug workaround -->
	<script src="js/ie10-viewport-bug-workaround.js"></script>
	
	<!-- Placeholder Images -->
	<script src="js/holder.min.js"></script>
	
</body>

</html>
