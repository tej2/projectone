<html>
<head>
<title>Process Uploaded File</title>
</head>
<body>
<?php
$GET ["filetoupload"];
$GET ["yourfilename"];
?>
      </body>
       </html>
       
<?php
  // This results in an error.
  // The output above is before the header() call
  header('Location: index.php?page=filetoupload&filename=yourfilename');
exit;			   ?>
