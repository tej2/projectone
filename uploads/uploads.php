
       
<?php
  $GET ["filetoupload"];
  $GET ["yourfilename"];
  // This results in an error.
  // The output above is before the header() call
  header('Location index.php?page=filetoupload&filename=yourfilename');
exit;			   ?>

