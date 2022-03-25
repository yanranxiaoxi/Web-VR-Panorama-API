<?php
$rand = rand(1, 9);
header("Location: https://vrpanoramaapi.soraharu.com/api.php?url_type=http&image_url=https://downloadserver.soraharu.com:7000/Web%20VR%20Panorama%20API/images/snow" . $rand . ".jpg");
exit();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>等待跳转中...</title>
		<meta charset="utf-8" />
		<style>
			html{
				margin:0;
				height:100%;
			}
			h1{
				font:120px/400px '\5FAE\8F6F\96C5\9ED1';
				width:960px;
				color:#AAA;
				text-shadow:0 0 1px;
				text-align:center;
				position:absolute;
				top:50%;
				left:50%;
				margin:-230px 0 0 -480px;
			}
		</style>
	</head>
	<body>
		<h1>等待跳转中...</h1>
	</body>
</html>