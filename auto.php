<!DOCTYPE html>
<!-- Template by Quackit.com -->
<html lang="en">
<script src="assets/js/timeme.js"></script>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript">

  TimeMe.initialize({
    currentPageName: "my-home-page",
    idleTimeoutInSeconds: 30
  });
  </script>

<!-- include libraries(jQuery, bootstrap) -->
<!-- <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> -->


<?php
    session_start() ;
?>
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

    <!-- include summernote css/js -->
    <link href="css/summernote.css" rel="stylesheet">
    <script src="css/summernote.js"></script>
    <link href="css/summernote-bs4.css" rel="stylesheet">
    <script src="css/summernote.min.js"></script>
    <link href="css/summernote-lite.css" rel="stylesheet">
    <script src="css/summernote-bs4.js"></script>
    <script src="css/summernote-bs4.min.js"></script>
    <script src="css/summernote-lite.js"></script>
</head>
<?php

	include "navigation.php";
?>
<body onload="countDown();">
<?php
	include "left.php" ;
?>

		<!-- Center Column -->
		<div class="col-sm-6">
    <form method="post">
    <textarea id="summernote" name="editordata"></textarea>
    </form>
    </div>
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
      $(document).ready(function() {
      $('#summernote').summernote({
          height: 300,                 // set editor height
          minHeight: null,             // set minimum height of editor
          maxHeight: null,             // set maximum height of editor
          focus: true                  // set focus to editable area after initializing summernote
      });
      });

    </script>

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
