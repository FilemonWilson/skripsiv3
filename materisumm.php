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
			<h2>Summarization</h2>
			<hr>
		<div class="col-sm-12" align="center">
        <a href="summ.php"><img src="image/data.png" align="center"></a>
        <p>Binary Sort</p>
        
        <a href="summ.php"><img src="image/stack.png" align="center"></a>
        <p>Radix Sort</p>
        
        <a href="summ.php"><img src="image/stack.png" align="center"></a>
        <p>Quick Sort</p>
        
        <a href="summ.php"><img src="image/stack.png" align="center"></a>
        <p>Heap Sort</p>

        <div class="form-group">
		<div class="controls">
			<br>
            <a href="rekomendasi.php" class="btn btn-sm btn-danger">Kembali</a>
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