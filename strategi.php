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
            <h2>Evaluasi Belajar</h2>
            <hr>

        <h1>Ceritanya disini itu sudah menjalankan strategi belajar </h1>

        <hr>

        <form action="prosesnilai.php" method="POST">
                    Apakah strategi belajar tersebut memberikan informasi berupa teks, gambar atau video yang dapat dimengerti dengan mudah?:  <br>      
        <input name="Eval1" id="1" type="radio" value="2" /> Ya 
        <input name="Eval1" id="0" type="radio" value="0" /> Tidak
        <hr>
                    Apakah kamu dapat merasa fokus ketika menggunakan strategi belajar tersebut?  <br>      
        <input name="Eval2" id="2" type="radio" value="1" /> Ya 
        <input name="Eval2" id="0" type="radio" value="0" /> Tidak
        <hr>
                    Apakah kamu terdorong menggunakan strategi belajar tersebut lagi?  <br>      
        <input name="Eval3" id="5" type="radio" value="5" /> Ya 
        <input name="Eval3" id="0" type="radio" value="0" /> Tidak
        <hr>
                    Apakah kamu terinovasi belajar lebih banyak ketika menggunakan strategi belajar tersebut?  <br>      
        <input name="Eval4" id="1" type="radio" value="1" /> Ya 
        <input name="Eval4" id="0" type="radio" value="0" /> Tidak
        <hr>
                    Apakah kamu dapat menyimpulkan materi belajar yang dipelajari dari strategi belajar tersebut?  <br>      
        <input name="Eval5" id="1" type="radio" value="1" /> Ya 
        <input name="Eval5" id="0" type="radio" value="0" /> Tidak
        <hr>

                    Berdasarkan pengerjaan dengan strategi belajar ini, mahasiswa mendapatkan nilai :  <br>      
        <input name="nilai" id="30" type="radio" value="30" /> 30 
        <input name="nilai" id="40" type="radio" value="40" /> 40 
        <input name="nilai" id="60" type="radio" value="60" /> 60
        <input name="nilai" id="70" type="radio" value="70" /> 70
        <input name="nilai" id="80" type="radio" value="80" /> 80
        <hr>




        <br><button type="submit" name="submit" id="submit" class="btn btns">Submit</button>
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
