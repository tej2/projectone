<?php
   if( $_GET["filetoupload"] || $_GET["yourfilename"] ) {
                              exit();
			                                    }
							                                  ?>
											  <html>
											  <body>

											  <form
	 action="https://web.njit.edu/~tej2/project1/uploads/uploads.php"
											  method="post"										  enctype="multipart/form-data">
										 Select file to upload:
 <input type="file" name="filetoupload" id="filetoupload">
 <input type="submit" value="Upload File" name="yourfilename">										                          </form>									 </body>
 </html>
