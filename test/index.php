<?php

if(isset($_POST['submit']))
{
	$filenmae = $_FILES['img']['name'];
	$tmp = $_FILES['img']['tmp_name'];
	$size = $_FILES['img']['size'];
	var_dump($_POST);
	echo "<br>";
	$data = $_FILES['img'];
	$source = "upload/".$filenmae;
	move_uploaded_file($tmp,$source);
	foreach($data as $item =>$value)
	{
		echo $item."------------>".$value."<br>";
	}

}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Image UPload</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>
	<body>
		<img src="" alt="">

			<div class="container">
				<div class="border shadow m-5 p-5">
							<h3>Image uploader</h3>
						<form action="index.php" method="post" enctype="multipart/form-data">
							<input type="text" name="text" value="">
							<input type="file" id="img"  name="img" class="form-contorl" />
							<input type="submit" name="submit" value="Upload" class="btn btn-success">

						</form>
			</div>
			</div>

	</body>
</html>
