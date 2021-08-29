<?php
session_start();

include("DB/connection.php");
include("DB/functions.php");

$user_data = check_login($con);

?>

<!-- ================================================== -->


<?php
include 'inc/header.php';
?>
<!-- ================================================== -->
<?php
include 'inc/navigation.php';
?>

<body>

	<?php
	include 'inc/hero.php';
	?>

	<!-- ================================================== -->

	<?php
	include 'inc/whoWeAre.php';
	?>

	<!-- ================================================== -->

	<?php
	include 'inc/guitar-guide.php';
	?>

	<!-- ================================================== -->

	<?php
	include 'inc/about.php';
	?>

	<!-- ================================================== -->

	<?php
	include 'inc/guitar-gallery.php';
	?>

	<!-- ================================================== -->

	<?php
	include 'inc/services.php';
	?>

	<!-- ================================================== -->

	<?php
	include 'inc/teachers.php';
	?>

	<!-- ================================================== -->

	<?php
	include 'inc/form.php'
	?>

	<!-- ================================================== -->

	<?php
	include 'inc/map.php';
	?>

	<!-- ================================================== -->

	<?php
	include 'inc/footer.php';
	?>




	<script src="main.js"></script>
</body>

</html>