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

		<!-- Center Column -->
        <div class="col-sm-1">
        </div>
        <div class="col-sm-8" align="center">
		  <h2>Draw</h2>
			<hr>
		<iframe width=120% height= 700px style="border: none" src="http://draw.io/?splash=0"></iframe>
        <br>
        <hr>
        <a class="btn btn-primary" href="strategi.php"> Submit</a>
        <br>
        <br>
        <br>
        <!--/Center Column-->


		    <script type="text/javascript">
		      var clicks=0;
		      document.addEventListener("click",function(){
		        clicks++;
		      });
		      window.onbeforeunload = Exitpage;
		      function Exitpage()
		      {
            $.post( "process/continous.php", { clicks: clicks, time: TimeMe.getTimeOnCurrentPageInSeconds() });//data akan dimasukkan ke database apabila user meninggalkan page
		      }
		    </script>
                    
            </div>
		</div><!--/Center Column-->
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
