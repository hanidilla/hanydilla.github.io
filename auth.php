<?php

session_start();
if(!isset($_SESSION['login'])){ ?>
   <script>
        window.location.href = "login.php",true;
      </script> 
<?php }
?>