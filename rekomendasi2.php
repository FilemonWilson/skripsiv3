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



                    echo "$string" ; //menampilkan jumlah kata
                    if ($row ['nilai'] >= '80') {
                    	echo "Selamat Anda Mendapatkan Nilai A yang berarti Amat Baik <br>";

                        if(preg_match("/Ambil data pertama dan tempatkan sebagai root/i", $row ['summ']) || preg_match("/plagiat/i", $row ['summ'])) {
                              echo "Anda sepertinya melakukan plagirasisasi <br>";
                            }

                        if ($string <= '20') {
                            echo "Jumlah Kata pada Ringkasan Anda terlalu sedikit <br>";
                        }

                    if ($row ['Eval1'] == '0' && $row ['Eval2'] == '0' && $row['Eval3'] == '0' && $row ['Eval4'] == '0' && $row ['Eval5'] == '0' || $row['Eval3'] =='0' || $row['Eval1']+$row['Eval2']+$row ['Eval3']+$row['Eval4']+$row['Eval5'] <= '4' ) {

                        echo "Berdasarkan Pertanyaan Evaluasi, Anda mendapatkan nilai baik, namun Anda sepertinya tidak cocok dengan Strategi Belajar Anda ";
                        echo "Anda dapat memilih Strategi sebelumnya atau anda dapat memilih strategi yang lebih sesuai dengan keinginan anda <br>";
                        ?>
                    <a href="draw.php"><img src="image/draw.png" align="center"></a>
                    <p>Draw</p>
                    <a href="summ.php"><img src="image/summ.png" align="center"></a>
                    <p>Summarization</p>
                    <a href="video.php"><img src="image/video.png" align="center"></a>
                    <p>Video</p>
                    <?php
                    }
                    else {
                       echo "Selamat Anda Lulus, Anda dapat melanjutkan Materi Pembelajaran Algortima dan Struktur Data Selanjutnya" ;
                    }
                    }



                   	if ($row ['nilai'] >= '70' && $row['nilai'] <= ' 79') {
                   		echo "Selamat Anda mendapatkan Nilai B yang berarti Baik <br>";

                        if(preg_match("/Ambil data pertama dan tempatkan sebagai root/i", $row ['summ'])) {
                              echo "Anda sepertinya melakukan plagirasisasi <br>";
                            }

                            if ($string <= '20') {
                            echo "Jumlah Kata pada Ringkasan Anda terlalu sedikit <br>";
                        }

                    if ($row ['Eval1'] == '0' && $row ['Eval2'] == '0' && $row['Eval3'] == '0' && $row ['Eval4'] == '0' && $row ['Eval5'] == '0' || $row['Eval3'] == '0' || $row['Eval1']+$row['Eval2']+$row ['Eval3']+$row['Eval4']+$row['Eval5'] <= '4'  ) {
                        echo "Berdasarkan Pertanyaan Evaluasi, Anda mendapatkan nilai baik, namun Anda sepertinya tidak cocok dengan Strategi Belajar Anda ";
                        echo "Anda dapat memilih Strategi sebelumnya atau anda dapat memilih strategi yang lebih sesuai dengan keinginan anda <br>";
                        ?>
                    <a href="draw.php"><img src="image/draw.png" align="center"></a>
                    <p>Draw</p>
                    <a href="summ.php"><img src="image/summ.png" align="center"></a>
                    <p>Summarization</p>
                    <a href="video.php"><img src="image/video.png" align="center"></a>
                    <p>Video</p>
                    <?php
                    }
                    else {
                       echo "Selamat Anda Lulus, Anda dapat melanjutkan Materi Pembelajaran Algortima dan Struktur Data Selanjutnya" ;
                    }
                    }



                    if ($row ['nilai'] >= '60' && $row['nilai'] <= '69') {
                    	echo "Kamu mendapatkan nilai C yang berarti Cukup <br>";

                        if(preg_match("/Ambil data pertama dan tempatkan sebagai root/i", $row ['summ'])) {
                              echo "Anda sepertinya melakukan plagirasisasi <br>";
                            }

                            if ($string <= '20') {
                            echo "Jumlah Kata pada Ringkasan Anda terlalu sedikit <br>";
                        }

                    if ($row ['Eval1'] == '1' && $row ['Eval2'] == '2' && $row['Eval3'] == '5' && $row ['Eval4'] == '1' && $row ['Eval5'] == '1' || $row['Eval3'] == '5' || $row['Eval1']+$row['Eval2']+$row ['Eval3']+$row['Eval4']+$row['Eval5'] >= '5'  ) {
                        echo "Berdasarkan Pertanyaan Evaluasi, Anda mendapatkan nilai yang kurang baik, namun Anda mampu untuk menggunakan Strategi Belajar Anda ";
                        echo "Anda dapat memilih Strategi sebelumnya atau anda dapat memilih strategi yang lebih sesuai dengan keinginan anda <br>";
                        ?>
                    <a href="draw.php"><img src="image/draw.png" align="center"></a>
                    <p>Draw</p>
                    <a href="summ.php"><img src="image/summ.png" align="center"></a>
                    <p>Summarization</p>
                    <a href="video.php"><img src="image/video.png" align="center"></a>
                    <p>Video</p>
                    <?php
                    }
                    else {
                    if ($row ['MAI4'] == "Video") {
                    echo "Mohon Maaf Anda Tidak Lulus dalam Materi ini, Anda dapat memilih Strategi Belajar yang Lebih Cocok Untuk Anda " ;
                    ?>

                        <a href="draw.php"><img src="image/draw.png" align="center"></a>
                        <p>Draw</p>

                        <a href="summ.php"><img src="image/summ.png" align="center"></a>
                        <p>Summarization</p>

                        <?php
                    }
                    if ($row ['MAI4'] == "Draw") {
                    echo "Mohon Maaf Anda Tidak Lulus dalam Materi ini, Anda dapat memilih Strategi Belajar yang Lebih Cocok Untuk Anda " ;
                    ?>

                    <a href="summ.php"><img src="image/summ.png" align="center"></a>
                    <p>Summarization</p>

                    <a href="video.php"><img src="image/video.png" align="center"></a>
                    <p>Video</p>

                        <?php
                    }
                    if ($row ['MAI4'] == "Summarization") {
                    echo "Mohon Maaf Anda Tidak Lulus dalam Materi ini, Anda dapat memilih Strategi Belajar yang Lebih Cocok Untuk Anda " ;
                    ?>

                    <a href="draw.php"><img src="image/draw.png" align="center"></a>
                    <p>Draw</p>

                    <a href="video.php"><img src="image/video.png" align="center"></a>
                    <p>Video</p>

                        <?php
                    }

                    }
                    }



                    if ($row ['nilai'] >= '40' && $row['nilai'] <= '59') {
                    	echo "Kamu mendapatkan nilai D yang berarti Kurang <br>";

                        if(preg_match("/Ambil data pertama dan tempatkan sebagai root/i", $row ['summ'])) {
                              echo "Anda sepertinya melakukan plagirasisasi <br>";
                            }

                            if ($string <= '20') {
                            echo "Jumlah Kata pada Ringkasan Anda terlalu sedikit <br>";
                        }

                    if ($row ['Eval1'] == '1' && $row ['Eval2'] == '2' && $row['Eval3'] == '5' && $row ['Eval4'] == '1' && $row ['Eval5'] == '1' || $row['Eval3'] == '5' || $row['Eval1']+$row['Eval2']+$row ['Eval3']+$row['Eval4']+$row['Eval5'] >= '5' ) {
                        echo "Berdasarkan Pertanyaan Evaluasi, Anda mendapatkan nilai yang kurang baik, namun Anda mampu untuk menggunakan Strategi Belajar Anda ";
                        echo "Anda dapat memilih Strategi sebelumnya atau anda dapat memilih strategi yang lebih sesuai dengan keinginan anda <br>";
                        ?>
                    <a href="draw.php"><img src="image/draw.png" align="center"></a>
                    <p>Draw</p>
                    <a href="summ.php"><img src="image/summ.png" align="center"></a>
                    <p>Summarization</p>
                    <a href="video.php"><img src="image/video.png" align="center"></a>
                    <p>Video</p>
                    <?php
                    }
                    else {
                    if ($row ['MAI4'] == "Video") {
                    echo "Mohon Maaf Anda Tidak Lulus dalam Materi ini, Anda dapat memilih Strategi Belajar yang Lebih Cocok Untuk Anda " ;
                    ?>

                        <a href="draw.php"><img src="image/draw.png" align="center"></a>
                        <p>Draw</p>

                        <a href="summ.php"><img src="image/summ.png" align="center"></a>
                        <p>Summarization</p>

                        <?php
                    }
                    if ($row ['MAI4'] == "Draw") {
                    echo "Mohon Maaf Anda Tidak Lulus dalam Materi ini, Anda dapat memilih Strategi Belajar yang Lebih Cocok Untuk Anda " ;
                    ?>

                    <a href="summ.php"><img src="image/summ.png" align="center"></a>
                    <p>Summarization</p>

                    <a href="video.php"><img src="image/video.png" align="center"></a>
                    <p>Video</p>

                        <?php
                    }
                    if ($row ['MAI4'] == "Summarization") {
                    echo "Mohon Maaf Anda Tidak Lulus dalam Materi ini, Anda dapat memilih Strategi Belajar yang Lebih Cocok Untuk Anda " ;
                    ?>

                    <a href="draw.php"><img src="image/draw.png" align="center"></a>
                    <p>Draw</p>

                    <a href="video.php"><img src="image/video.png" align="center"></a>
                    <p>Video</p>

                        <?php
                    }

                    }
                    }


                    if ($row ['nilai'] <= '39') {
                    	echo "Kamu mendapatkan nilai E yang berarti Jelek <br>";

                        if(preg_match("/Ambil data pertama dan tempatkan sebagai root/i", $row ['summ'])) {
                              echo "Anda sepertinya melakukan plagirasisasi <br>";
                            }

                            if ($string <= '20') {
                            echo "Jumlah Kata pada Ringkasan Anda terlalu sedikit <br>";
                        }

                    if ($row ['Eval1'] == '1' && $row ['Eval2'] == '2' && $row['Eval3'] == '5' && $row ['Eval4'] == '1' && $row ['Eval5'] == '1' || $row['Eval3'] == '5' || $row['Eval1']+$row['Eval2']+$row ['Eval3']+$row['Eval4']+$row['Eval5'] >= '5' ) {
                        echo "Berdasarkan Pertanyaan Evaluasi, Anda mendapatkan nilai yang kurang baik, namun Anda mampu untuk menggunakan Strategi Belajar Anda ";
                        echo "Anda dapat memilih Strategi sebelumnya atau anda dapat memilih strategi yang lebih sesuai dengan keinginan anda <br>";
                        ?>
                    <a href="draw.php"><img src="image/draw.png" align="center"></a>
                    <p>Draw</p>
                    <a href="summ.php"><img src="image/summ.png" align="center"></a>
                    <p>Summarization</p>
                    <a href="video.php"><img src="image/video.png" align="center"></a>
                    <p>Video</p>
                    <?php
                    }
                    else {
                    if ($row ['MAI4'] == "Video") {
                    echo "Mohon Maaf Anda Tidak Lulus dalam Materi ini, Anda dapat memilih Strategi Belajar yang Lebih Cocok Untuk Anda " ;
                    ?>

                        <a href="draw.php"><img src="image/draw.png" align="center"></a>
                        <p>Draw</p>

                        <a href="summ.php"><img src="image/summ.png" align="center"></a>
                        <p>Summarization</p>

                        <?php
                    }
                    if ($row ['MAI4'] == "Draw") {
                    echo "Mohon Maaf Anda Tidak Lulus dalam Materi ini, Anda dapat memilih Strategi Belajar yang Lebih Cocok Untuk Anda " ;
                    ?>

                    <a href="summ.php"><img src="image/summ.png" align="center"></a>
                    <p>Summarization</p>

                    <a href="video.php"><img src="image/video.png" align="center"></a>
                    <p>Video</p>

                        <?php
                    }
                    if ($row ['MAI4'] == "Summarization") {
                    echo "Mohon Maaf Anda Tidak Lulus dalam Materi ini, Anda dapat memilih Strategi Belajar yang Lebih Cocok Untuk Anda " ;
                    ?>

                    <a href="Draw.php"><img src="image/draw.png" align="center"></a>
                    <p>Draw</p>

                    <a href="video.php"><img src="image/video.png" align="center"></a>
                    <p>Video</p>

                        <?php
                    }

                    }
                    }


                ?>
		</div><!--/Center Column-->
    <!-- jQuery -->
    <script src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript">
$(document).ready( function() {
  $('a').click( function(e) {e.preventDefault();
      $.post("process/new.php");
      var url=$(this).attr('href');
      window.location=url;
    return false; } );
    });
</script>
        <?php
    include "rightfoot.php";
?>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- IE10 viewport bug workaround -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    <!-- Placeholder Images -->
    <script src="js/holder.min.js"></script>

</body>

</html>
