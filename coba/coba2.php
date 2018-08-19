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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    sudah <span id="amb"></span> detik sejak terakhir kamu berada di halaman ini.
</head>

<?php
    session_start();
    include "koneksi.php" ;

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

            <script>
            var h=0; var d; var htgon=0;
            function wktNtmbh() {
                document.getElementById('amb').innerHTML=h; 
                h++; 
                d=setTimeout("wktNtmbh()",1000);}
            function mUlai() {
                if(!htgon) {htgon=1; wktNtmbh();}}
            window.onload=mUlai;

            </script>
            
            <?php
            $h = $_POST['h'];

            echo '$h';


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