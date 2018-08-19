<!DOCTYPE html>
<html>
  <head>
   <title>Membuat Countdown dengan JavaScript</title>
   <script type="text/javascript">
    var waktu = 10;
    function countDown()
    {
        if(waktu >= 0)
        {
            document.getElementById("timer").innerHTML = waktu;
        }
        else
        {
            download();
            return;
        }
        waktu -= 1; 

        var waktu2 = setTimeout("countDown()",1000);
        return;
    }
    function download()
    {
        document.getElementById("link").innerHTML = "<a href='http://tujuanlinkdownload'>Download</a>";
    }
   </script>
 </head>

<body onload="countDown();">
<h1>Download File</h1><br />
<h3>Link download akan muncul dalam <span id="timer"></span> detik.
</h3> 

<span id="link"></span>

</body>
</html>