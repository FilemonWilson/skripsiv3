<?php

session_start();
session_destroy();
?>
<script>
    window.location="index.php";
    alert ('Anda telah berhasil logout');
</script>
<?php
exit;

?>
