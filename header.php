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
<body <?php if ( is_front_page() && is_home() ) { ?> id="particles"<?php } elseif ( is_page_template( 'page-thankyou.php' ) ) { ?> id="particles"<?php } else { ?> style="margin-top:0;padding-top: 0;" <?php } ?> >
