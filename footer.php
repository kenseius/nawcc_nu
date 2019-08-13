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
<!--
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
-->


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">

	$(function(){
	var $ppc = $('.progress-pie-chart-0'),
		percent = parseInt($ppc.data('percent')),
		deg = 360*percent/100;
	if (percent > 50) {
		$ppc.addClass('gt-50');
	}
	$('.ppc-progress-fill-0').css('transform','rotate('+ deg +'deg)');
	$('.ppc-percents-0 span').html(percent+'%');
	});

  $(function(){
	var $ppc = $('.progress-pie-chart-1'),
		percent = parseInt($ppc.data('percent')),
		deg = 360*percent/100;
	if (percent > 50) {
		$ppc.addClass('gt-50');
	}
	$('.ppc-progress-fill-1').css('transform','rotate('+ deg +'deg)');
	$('.ppc-percents-1 span').html(percent+'%');
	});

    $(function(){
	var $ppc = $('.progress-pie-chart-2'),
		percent = parseInt($ppc.data('percent')),
		deg = 360*percent/100;
	if (percent > 50) {
		$ppc.addClass('gt-50');
	}
	$('.ppc-progress-fill-2').css('transform','rotate('+ deg +'deg)');
	$('.ppc-percents-2 span').html(percent+'%');
	});

    $(function(){
	var $ppc = $('.progress-pie-chart-3'),
		percent = parseInt($ppc.data('percent')),
		deg = 360*percent/100;
	if (percent > 50) {
		$ppc.addClass('gt-50');
	}
	$('.ppc-progress-fill-3').css('transform','rotate('+ deg +'deg)');
	$('.ppc-percents-3 span').html(percent+'%');
	});

    $(function(){
	var $ppc = $('.progress-pie-chart-4'),
		percent = parseInt($ppc.data('percent')),
		deg = 360*percent/100;
	if (percent > 50) {
		$ppc.addClass('gt-50');
	}
	$('.ppc-progress-fill-4').css('transform','rotate('+ deg +'deg)');
	$('.ppc-percents-4 span').html(percent+'%');
	});

    $(function(){
	var $ppc = $('.progress-pie-chart-5'),
		percent = parseInt($ppc.data('percent')),
		deg = 360*percent/100;
	if (percent > 50) {
		$ppc.addClass('gt-50');
	}
	$('.ppc-progress-fill-5').css('transform','rotate('+ deg +'deg)');
	$('.ppc-percents-5 span').html(percent+'%');
	});

    $(function(){
	var $ppc = $('.progress-pie-chart-6'),
		percent = parseInt($ppc.data('percent')),
		deg = 360*percent/100;
	if (percent > 50) {
		$ppc.addClass('gt-50');
	}
	$('.ppc-progress-fill-6').css('transform','rotate('+ deg +'deg)');
	$('.ppc-percents-6 span').html(percent+'%');
	});

</script>

</body>
</html>
