<?php
	list($width, $height) = getimagesize("logo.png");

	// SETTING
	$title = "ม้ากระโดด : Magradod";
	$url = "https://magradod.com";

	$bg_color = "#553E7E";
	$font_color = "#FFF";
?>

<style type="text/css">
	body{
		background: <? echo $bg_color; ?>;
		color: <? echo $font_color; ?>;
	}
	.center{
		width: <? echo $width; ?>px;
		height: <? echo $height; ?>px;

		position: absolute;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		margin: auto;

		-webkit-transition: all 1s ease;
		-moz-transition: all 1s ease;
		-o-transition: all 1s ease;
		-ms-transition: all 1s ease;
		transition: all 1s ease;
	}
</style>
<head>
	<title><? echo $title; ?></title>
</head>
<body>
	<div class='center'>
		<? if($url): ?>
			<a href='<? echo $url; ?>' target='_blank' title='<? echo $url; ?>'>
				<img src="logo.png">
			</a>
		<? else: ?>
			<img src="logo.png">
		<? endif; ?>
	</div>
</body>