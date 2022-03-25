<?php
if (isset($_GET['url_type'])) {
	$url_type = strtolower(trim($_GET['url_type']));
} else {
	$url_type = "local";
}
if (isset($_GET['image_url'])) {
	$image_url = trim($_GET['image_url']);
} else {
	echo("参数错误！请访问 https://gitlab.soraharu.com/XiaoXi/Web-VR-Panorama-API 查看解决方案。");
	exit();
}

if ($url_type == "http" || $url_type == "https") {
	//$image_url = "//" . $image_url;
} else if ($url_type == "local") {
	$image_url = "./images/" . $image_url . ".jpg";
} else {
	echo("参数错误！请访问 https://gitlab.soraharu.com/XiaoXi/Web-VR-Panorama-API 查看解决方案。");
	exit();
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>基于 A-Frame 的 VR 全景网页视图 API</title>
		<script src="./assets/js/aframe.min.js"></script>
		<script src="./assets/js/aframe-animation-component.min.js"></script>
		<script src="./assets/js/aframe-event-set-component.min.js"></script>
		<script src="./assets/js/aframe-layout-component.min.js"></script>
		<script src="./assets/js/aframe-template-component.min.js"></script>
		<script src="./components/set-image.js"></script>
	</head>
	<body>
		<a-scene>
			<a-assets>
				<img id="Panorama" crossorigin="anonymous" src="<?php echo $image_url; ?>" />

				<script id="link" type="text/html">
					<a-entity class="link" set-image="target: #image-360; src: ${src}"></a-entity>
				</script>
			</a-assets>

			<a-sky id="image-360" radius="10" src="#Panorama"></a-sky>
		</a-scene>
	</body>
</html>
