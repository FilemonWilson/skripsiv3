<!DOCTYPE html>
<!-- Template by Quackit.com -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Dummy Scripsheep</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="css/custom.css" rel="stylesheet">

    <script src="assets/js/timeme.js"></script>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
    	TimeMe.initialize({
    		currentPageName: "my-home-page",
    		idleTimeoutInSeconds: 30
    	});
      </script>
  </head>

<?php
    session_start() ;

	include "navigation.php";
?>


<body>
<?php
	include "left.php" ;
?>

		<!-- Center Column -->
		      <div class="col-sm-6">
            <h2>Sistem Rekomendasi</h2>
            <hr>
                <?php
                    include "koneksi.php" ;
                    $username = $_SESSION['srv1']['username'];
                    $sql = "SELECT * FROM srv1 WHERE username='$username'" ;
                    $hasil = mysqli_query($koneksi,$sql) ;
                    $row = mysqli_fetch_array($hasil) ;
                    $string = str_word_count($row['summ']) ;

                    $ratingnilai = $row['nilai'] * '0.6';
                    $ratingevaluasi = $row['Eval1']+$row['Eval2']+$row ['Eval3']+$row['Eval4']+$row['Eval5'] ;
                    $ratingclick = $row['numberofclicks'] ;
                    $ratingkata = $string / '10' ; 
                    $ratingwaktu = $row['pageduration'] / '60' ; 

                    $normalisasinilai = $ratingnilai / '60';
                    $normalisasievaluasi = $ratingevaluasi / '10' ;
                    $normalisasiclick = $ratingclick / '10' ;
                    $normalisasikata = $ratingkata / '10' ;
                    $normalisasiwaktu = $ratingwaktu / '10' ;


                    echo "$normalisasinilai";
                    $totalnormalisasi = ('0.6' * $normalisasinilai ) ;
                        echo "Normalisasi = $normalisasinilai , Total Perhitungan Ranking Normalisasi = $totalnormalisasi";

                    if ($row ['MAI4'] == "Draw") {
                        $totalnormalisasi = ('0.6' * $normalisasinilai ) + ('0.2' * $normalisasievaluasi) + ('0.1' * $normalisasiclick) + ('0.1' * $normalisasiwaktu) ;
                        echo "Total Perhitungan Ranking Normalisasi = $totalnormalisasi";
                    }
                    
                    if ($row ['MAI4'] == "Summarization") {
                        $totalnormalisasi = ('0.6' * $normalisasinilai ) + ('0.2' * $normalisasievaluasi) + ('0.1' * $normalisasikata) + ('0.1' * $normalisasiwaktu) ;
                        echo "Total Perhitungan Ranking Normalisasi = $totalnormalisasi";
                    }
                    if ($row ['MAI4'] == "Video") {
                        $totalnormalisasi = ('0.6' * $normalisasinilai ) + ('0.2' * $normalisasievaluasi) + ('0.1' * $normalisasiclick) + ('0.1' * $normalisasiwaktu) ;
                        echo "Total Perhitungan Ranking Normalisasi = $totalnormalisasi";
                    }
             




                ?>
		</div><!--/Center Column-->

 

<?php
	include "rightfoot.php";
?>
    <!-- jQuery -->
    <!-- <script src="js/jquery-1.11.3.min.js"></script> -->

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

	<!-- IE10 viewport bug workaround -->
	<script src="js/ie10-viewport-bug-workaround.js"></script>

	<!-- Placeholder Images -->
	<script src="js/holder.min.js"></script>

</body>

</html>
