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

        <h1>Ceritanya disini Mencoba Count </h1>

        <hr>

<?php
        include 'koneksi.php';

        $username = $_SESSION['srv1']['username'];

        $sql = "SELECT Eval1,Eval2,Eval3,Eval4,Eval5 FROM srv1 WHERE username='$username'";
        $query  = mysqli_query($koneksi, $sql) ;
        $row = mysqli_fetch_array($query);
        $count = ($row['Eval1']+$row['Eval2']+$row ['Eval3']+$row['Eval4']+$row['Eval5']) ;
        $sum = SUM($row['Eval1']) ;


        echo "Jumlah data adalah : $count";
        echo "Jumlah data adalah: $sum <br/>"

?>


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
