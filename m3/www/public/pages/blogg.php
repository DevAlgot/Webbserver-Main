<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
?>
<hgroup>
	<h1>Min blogg Nu</h1>
	<h2>I dag gör vi mallar</h2>
</hgroup>
<p>
	<?php
	if (isset($_SESSION["inloggad"])) {
		echo "<b>Lorem ipsum id duo autem qualisque, cu laoreet eleifend cum. Eu sea
	vidit altera civibus, harum deserunt argumentum ne vim. Eu paulo
	corpora appareat pro, brute everti iuvaret ne vis. Diam incorrupte
	voluptatibus cu vel, nam congue soluta praesent at.</b>";
	} else {
		echo "Lorem ipsum id duo autem qualisque, cu laoreet eleifend cum. Eu sea
	vidit altera civibus, harum deserunt argumentum ne vim. Eu paulo
	corpora appareat pro, brute everti iuvaret ne vis. Diam incorrupte
	voluptatibus cu vel, nam congue soluta praesent at.";
	}
	?>

</p>

<!-- End main -->