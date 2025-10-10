<!doctype html>
<html lang="sv">

<head>
	<meta charset="utf-8">
	<title>Länka in sidor med PHP</title>
	<link href="css/styleSheet.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="wrapper">
		<header>
			<?php include("inc/header.php") ?>
		</header>
		<!-- header -->

		<section id="leftColumn">
			<nav>
				<?php include("inc/nav.php"); ?>
			</nav>
			<aside>
				<?php include("inc/aside.php"); ?>
			</aside>
			<?php include("inc/count.php"); ?>
		</section>
		<!-- End leftColumn -->

		<main role="main">
			<section>
				<?php
				$page = "start";
				if (isset($_GET['page']))
					$page = $_GET['page'];

				switch ($page) {
					case 'blogg':
						include('pages/blogg.php');
						break;
					case 'bilder':
						include('pages/bilder.php');
						break;
					case 'kontakt':
						include('pages/kontakt.php');
						break;
					case 'login':
						include('pages/login.php');
						break;
					default:
						include('pages/start.php');
				}
				?>

			</section>
		</main>
		<!-- End main -->

		<footer>
			<?php include("inc/footer.php"); ?>
		</footer>
		<!-- End footer -->
	</div>
	<!-- End wrapper -->
</body>

</html>