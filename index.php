<!DOCTYPE HTML>
<html>
<head>
	<title>UCLA VC Fund</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.dropotron.min.js"></script>
	<script src="js/jquery.scrollgress.min.js"></script>
	<script src="js/skel.min.js"></script>
	<script src="js/skel-layers.min.js"></script>
	<script src="js/init.js"></script>
	<noscript>
		<link rel="stylesheet" href="css/skel.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/style-wide.css" />
	</noscript>
	<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
</head>

<body class="landing">

	<!-- Banner -->
		<section id="banner">
			<h2>UCLA Tech Industry Alumni</h2>
			<p>Database</p>
		</section>

	<!-- Main -->
		<section id="main" class="container">
	
			<section class="box special">
				<header class="major">
					<h2>Alumni Information</h2>
					<p>
						<table border="1" style="width:100%">
							<tr>
								<td>ID</td>
								<td>Picture</td>
								<td>Url</td>
								<td>Name</td>
								<td>Type</td>
							</tr>
<?php
	$user = 'cs143';
	$password = '';
	$host = 'localhost';
	$database = 'TEST';
	$db_connection = mysql_connect($host, $user, $password);
	if (!$db_connection) {
		die('Could not connect: ' . mysql_error());
	}

	mysql_select_db($database,$db_connection);

	$query = "SELECT id, pic, url, name, type FROM Users";
	$information = mysql_query($query, $db_connection);
	while ($alumniInfo = mysql_fetch_row($information)) {
		echo "<tr>
				<td>$alumniInfo[0]</td>
				<td>$alumniInfo[1]</td>
				<td>$alumniInfo[2]</td>
				<td>$alumniInfo[3]</td>
				<td>$alumniInfo[4]</td>
			 </tr>";
	}

	mysql_close($db_connection);
?>

						</table>
					</p>
				</header>
				<span class="image featured"><img src="http://cironline.org/sites/default/files/styles/inline-large/public/6291479824_197fdd1283_z.jpg?itok=kxv3Fesz" alt="" /></span>
			</section>

		</section>
		
	<!-- Footer -->
		<footer id="footer">
			<ul class="icons">
				<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
				<li><a href="https://www.github.com/jeffreytai" class="icon fa-github"><span class="label">Github</span></a></li>
				<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
				<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
			</ul>
		</footer>

</body>
</html>
