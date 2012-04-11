<?php
//vivek vaish
$path = "uploads/";

	$valid_formats = array("jpg", "png", "gif", "bmp", "JPG", "jpeg", "JPEG");
	if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
		{
			$name = $_FILES['photoimg']['name'];
			$size = $_FILES['photoimg']['size'];
			
			if(strlen($name))
				{
					list($txt, $ext) = explode(".", $name);
					if(in_array($ext,$valid_formats))
					{
					if($size<(2048*2048))
						{
							$actual_image_name = time().substr(str_replace(" ", "_", $txt), 5).".".$ext;
							$actual_image_name = "profileid" . $actual_image_name ;
							
							$tmp = $_FILES['photoimg']['tmp_name'];
							if(move_uploaded_file($tmp, $path.$actual_image_name))
								{
									echo "<img src='uploads/".$actual_image_name."'  class='preview'>";
									echo "</br>"."Successfully sent to Server. Select another image." ."</br>". $actual_image_name;							
									echo "<SCRIPT LANGUAGE='javascript'> testfun('$actual_image_name');</SCRIPT>";						
									
								}
							else
								echo "failed";
						}
						else
						echo "Image file size max 4 MB";					
						}
						else
						echo "Invalid file format..";	
				}
				
			else
				echo "Please select image..!";
				
			exit;
		}
	?>