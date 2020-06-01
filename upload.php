<?php
		require_once("connection.php");

		if(isset($_POST['submitform']))
		{
			$dir="upload/";
			$image=$_FILES['uploadfile']['name'];
			$temp_name=$_FILES['uploadfile']['tmp_name'];

			if($image!="")
			{
				if(file_exists($dir.$image))
				{
					$image= time().'_'.$image;
				}

				$fdir= $dir.$image;
				move_uploaded_file($temp_name, $fdir);
			}

				$query="insert IGNORE into `image` (`id`,`file`) values ('','$image')";
				mysqli_query($con,$query) or die(mysqli_error($con));
				


		}

?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>

			<div>


						<form action="" method="post" enctype="multipart/form-data">

							Upload Images/File : <input type="file" name="uploadfile">

						   </br>

						    <button type="submit" name="submitform">Upload</button>
						</form>
			</div>



</body>
</html>