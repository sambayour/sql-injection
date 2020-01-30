<?php 
session_start();
session_destroy();
// die();
 echo "<script type=\"text/javascript\">
      window.alert('Bye! 😊');
window.location.href='index.php';
            </script>";

?>