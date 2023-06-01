<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<?php include("./includes/brand-info.php"); ?>
	<title>Home | <?php echo "$brandName";?></title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<?php include("./includes/style.php"); ?>
</head>

<body>
	<!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
	<?php include("./includes/header.php"); ?>
	
	<section>
		<div class="iframe-wrap">
		<iframe src="https://www.youtube.com/embed/t9Zq-o-ZRYI?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
		</div>
	</section>

	<section>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3">
					<div class="box-wrap">
						<div class="box-text">
							<h4>Vehicle Rentals</h4>
						</div>
						<div class="box-img">
							<img src="./assets/img/mix/vehicle-rental.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include("./includes/footer.php"); ?>
	<?php include("./includes/scripts.php"); ?>
</body>
</html>