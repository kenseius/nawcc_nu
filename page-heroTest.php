<?php /* Template Name: Hero Test */ ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hackathon</title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/assets/strapless/styles/strapless.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
</head>
<body id="particles" class="heroTest">

	<main class="code4pa_saveTheDate"> 

        <!--<img src="<?php echo get_template_directory_uri(); ?>/dist/assets/strapless/images/huhu_GradClass_1.jpg">-->
        <!--<img src="http://localhost:8888/Hackathon_Local/wp-content/uploads/2017/05/hu_GradClass_1.jpg">-->

	</main>

<!-- LOOKIT DIS CRAZY JS OMG! -->
<script src="<?php echo get_template_directory_uri(); ?>/dist/assets/strapless/scripts/strapless.js"></script>
<script type="text/javascript">
	document.addEventListener("DOMContentLoaded", function(event) {
		Strapless.init();
	});
</script>

<!-- particleground -->
<!-- <script src="http://jnicol.github.io/particleground/js/jquery.particleground.js"></script> -->
<!-- <script src="./src/assets/hackathon/scripts/jquery.particleground.js"></script> -->
<script type="text/javascript">
	document.addEventListener('DOMContentLoaded', function () {
		particleground(document.getElementById('particles'), {
		dotColor: '#1B75BC',
		lineColor: '#1B75BC',
		density: 20000
		});
		var intro = document.getElementById('intro');
		intro.style.marginTop = - intro.offsetHeight / 2 + 'px';
	}, false);
</script>
</body>
</html>


