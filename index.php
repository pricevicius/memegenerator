<?php
	$dir = $_SERVER['DOCUMENT_ROOT']."/memegenerator/images/"; 
	$dh = opendir($dir); 
	$x=0;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>Meme Generator</title>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
  </head>
  <body>
	
	<div class="container">
		<form>
		  <div class="form-group">
		    <label for="exampleSelect1">Example select</label>
		    <select class="form-control" id="exampleSelect1">
				<?php
					while (false !== ($filename = readdir($dh))) { 
						if($filename != '.' && $filename != '..'){
							echo '<option value="'.$filename.'"><img src="'.$_SERVER['DOCUMENT_ROOT'].'/memegenerator/images/'.$filename.'" /></option>';
						}
					}
				?>
		    </select>
		  </div>
		  <div class="form-group">
		    <label for="exampleTextarea">Texto do Meme</label>
		    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
  </body>
</html>