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
?>
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0"/>
    <title>Dummy Scripsheep</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/css/froala_editor.css">
    <link rel="stylesheet" href="../../assets/css/froala_style.css">
    <link rel="stylesheet" href="../../assets/css/plugins/code_view.css">
    <link rel="stylesheet" href="../../assets/css/plugins/image_manager.css">
    <link rel="stylesheet" href="../../assets/css/plugins/image.css">
    <link rel="stylesheet" href="../../assets/css/plugins/table.css">
    <link rel="stylesheet" href="../../assets/css/plugins/video.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">
    
 


  <style>
    body {
      text-align: center;
    }

    div#editor {
      width: 81%;
      margin: auto;
      text-align: left;
    }
  </style>


</head>


<?php
	include "navigation.php";
?>
<body onload="countDown();">
<?php
	include "left.php" ;
?>

		<!-- Center Column -->
		<div id="editor">
    <form>
      <textarea id='edit' style="margin-top: 30px;" placeholder="Type some text">
        <h1>Textarea</h1>
        <p>The editor can also be initialized on a textarea.</p>
      </textarea>

      <input type="submit">
    </form>
  </div>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
  <script type="text/javascript" src="../../assets/js/froala_editor.min.js"></script>
  <script type="text/javascript" src="../../assets/js/plugins/align.min.js"></script>
  <script type="text/javascript" src="../../assets/js/plugins/code_beautifier.min.js"></script>
  <script type="text/javascript" src="../../assets/js/plugins/code_view.min.js"></script>
  <script type="text/javascript" src="../../assets/js/plugins/draggable.min.js"></script>
  <script type="text/javascript" src="../../assets/js/plugins/image.min.js"></script>
  <script type="text/javascript" src="../../assets/js/plugins/image_manager.min.js"></script>
  <script type="text/javascript" src="../../assets/js/plugins/link.min.js"></script>
  <script type="text/javascript" src="../../assets/js/plugins/lists.min.js"></script>
  <script type="text/javascript" src="../../assets/js/plugins/paragraph_format.min.js"></script>
  <script type="text/javascript" src="../../assets/js/plugins/paragraph_style.min.js"></script>
  <script type="text/javascript" src="../../assets/js/plugins/table.min.js"></script>
  <script type="text/javascript" src="../../assets/js/plugins/video.min.js"></script>
  <script type="text/javascript" src="../../assets/js/plugins/url.min.js"></script>
  <script type="text/javascript" src="../../assets/js/plugins/entities.min.js"></script>

  <script>
      $(function(){
        $('#edit')
          .on('froalaEditor.initialized', function (e, editor) {
            $('#edit').parents('form').on('submit', function () {
              console.log($('#edit').val());
              return false;
            })
          })
          .froalaEditor({enter: $.FroalaEditor.ENTER_P, placeholderText: null})
      });
  </script>

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
