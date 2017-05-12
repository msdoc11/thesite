<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?=$title?></title>
		<!-- Bootstrap -->
		<link href="/assets/css/bootstrap.css" rel="stylesheet">
		<link href="/assets/css/bootstrap-theme.css" rel="stylesheet">
		<link href="/assets/css/font-awesome.css" rel="stylesheet">
		<link href="/assets/css/style.css" rel="stylesheet">
		<!--[if lt IE 9]>
		 <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		 <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src="/assets/js/jquery-2.1.4.min.js"></script>
	</head>
	<body>
		<section class="container">
			<?php include_once(ROOT.'/sys/templates/'.$tpl.'.tpl.php'); ?>
		</section>
		<footer>
			<p><small>&copy; 2016</small></p>
		</footer>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="/assets/js/bootstrap.js"></script>
	</body>
</html>