<!-- LOOKIT DIS CRAZY JS OMG! -->

<script src="<?php echo get_template_directory_uri(); ?>/dist/assets/fabricator/scripts/f.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/dist/assets/strapless/default/scripts/strapless.js"></script>
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
