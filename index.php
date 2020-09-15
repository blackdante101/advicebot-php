<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>AdviceBot</title>
 
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" media="screen" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>



<!-- particles.js container -->
<div id="particles-js">
	<div style="color:#192a56;width:400px;" class="container p-5 bg-white my-5 rounded">

		<div class="row p-2">


			&nbsp;&nbsp;&nbsp; <img src="img/bot.png" width="35" height="35" alt="">
		<h3 class="text-center">&nbsp;AdviceBot</h3><br />
		
		</div>
		

		
		<hr class="py-2">
		<?php 
		$json = file_get_contents('https://api.adviceslip.com/advice');
		$result = json_decode($json,true);
		echo "<p style='font-size:18px;'>".$result['slip']['advice']."</p>";


		?>
		<button onclick="location.reload();" class="btn btn-primary my-2"><i class="fa fa-refresh"></i> Refresh</button>
		<br><br>
		<small class="text-center font-weight-bold">
			Developed By BlackDante101 
			&nbsp;<a href="http://github.com/blackdante101"> <i class="fa fa-github" aria-hidden="true"></i></a>
			&nbsp;<a href="https://https://web.facebook.com/abukari.einus2"><i class="fa fa-facebook-official" aria-hidden="true"></i></a> 
			&nbsp;<a href="https://www.instagram.com/blackdante101/"><i class="fa fa-instagram"></i></a> 

</small>

	</div>

</div>

<script src="js/particles.js"></script>
<script src="js/app.js"></script>



</body>
</html>