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

<?php
    session_start() ;
  include "head.php" ;
  include "navigation.php";
?>
<body onload="countDown();">
  
<?php
  include "left.php" ;
?>

    <!-- Center Column -->
    <div class="col-sm-6">
      <h2>Summarization</h2>
      <hr>
    <div class="col-sm-12" align="center">
      <iframe width=100% height= 600px style="border: none" src="http://draw.io/?splash=0"></iframe>


        </div>
    </div><!--/Center Column-->

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
