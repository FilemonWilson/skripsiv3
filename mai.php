<!DOCTYPE html>
<!-- Template by Quackit.com -->
<html lang="en">

<?php
    session_start();
    include "koneksi.php" ;
    include "head.php" ;
    include "navigation.php";
?>
<body>
<?php
    include "left.php" ;
?> 
<?php
//    $username = $_SESSION['srv1']['username'];
//    $sql = "SELECT MAI1 FROM srv1  WHERE username= '$username'";
//    $query = mysqli_query($koneksi,$sql);
//    $cek = mysqli_num_rows($query);
//    if($cek==1){
//        $row = $query->fetch_assoc();
//?>
    <script>
//    window.location="rekomendasi.php";
//</script>   
<?php
//    }
 //   else{
//    ?><script>
//        window.location="mai.php";
    </script>
    <?php

//    }
?>
<!-- Center Column -->
		<div class="col-sm-6">
			<h2>Angket Evaluasi Diri (MAI)</h2>
			<hr>
			<form action="prosesinput.php" method="POST">
			Saya bertanya kepada diri sendiri, ”Apakah saya sudah mencapai tujuan saya?”, ketika sedang berupaya mencapai tujuan secara intensif. <br>		
        <input name="MAI1" id="SL" type="radio" value="SL" /> SL 
        <input name="MAI1" id="SS" type="radio" value="SS" /> SS 
        <input name="MAI1" id="KD" type="radio" value="KD" /> KD 
        <input name="MAI1" id ="JR" type="radio" value="JR" /> JR 
        <input name="MAI1" id="TP" type="radio" value="TP" /> TP
			<hr>
			Saya mempertimbangkan berbagai pilihan sebelum saya menyelesaikan sebuah permasalahan.<br>
        <input name="MAI2" id="SL" type="radio" value="SL" /> SL 
        <input name="MAI2" id="SS" type="radio" value="SS" /> SS 
        <input name="MAI2" id="KD" type="radio" value="KD" /> KD 
        <input name="MAI2" id ="JR"  type="radio" value="JR" /> JR 
        <input name="MAI2" id="TP" type="radio" value="TP" /> TP
     	
     	<hr>
			Saya coba menggunakan cara-cara yang pernah saya pakai sebelumnya<br>
        <input name="MAI3" id="SL" type="radio" value="SL" /> SL 
        <input name="MAI3" id="SS" type="radio" value="SS" /> SS 
        <input name="MAI3" id="KD" type="radio" value="KD" /> KD 
        <input name="MAI3" id ="JR" type="radio" value="JR" /> JR 
        <input name="MAI3" id="TP" type="radio" value="TP" /> TP
     	
     	<hr>
			Saya lebih menyukai menggunakan strategi belajar : <br>
        <input name="MAI4" id="SL" type="radio" value="Draw" /> Draw 
        <input name="MAI4" id="SS" type="radio" value="Video" /> Video 
        <input name="MAI4" id="KD" type="radio" value="Summarization" /> Summarization
     	
     	<hr>
			Saya memahami kekuatan dan kelemahan kecerdasan saya. <br>
        <input name="MAI5" id="SL" type="radio" value="SL" /> SL 
        <input name="MAI5" id="SS" type="radio" value="SS" /> SS 
        <input name="MAI5" id="KD" type="radio" value="KD" /> KD 
        <input name="MAI5" id ="JR" type="radio" value="JR" /> JR 
        <input name="MAI5" id="TP" type="radio" value="TP" /> TP
     	
     	<br><button type="submit" name="input" id="input" class="btn btns">Submit</button>

     	</form>
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