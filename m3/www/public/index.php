<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}

?>

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

				if (isset($_SESSION["inloggad"])) {
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
							include('pages/loggout.php');
							break;
						case 'klotter':
							include('pages/klotter.php');
							break;
						default:
							include('pages/start.php');
					}
				} else {
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