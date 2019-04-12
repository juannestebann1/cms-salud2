<html>
<head>
  <meta charset="utf-8">
	<title><?php echo $title; ?></title>
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<style>
  		.alert {
  			margin-top: 50px;
  			text-align: center;
  			padding-bottom: 50px;
  		}

  		h1 {
			font-weight: 900;
  		}
  	</style>
</head>
<body>
	<div class="container">
		<div class="alert alert-danger">
			<h1><?php echo $title; ?></h1>
			<p><?php echo $error; ?></p>
		</div>
	</div>
</body>
</html>