<?php
	

	//Handle the upload and stuff
	
	if(isset($_POST) && sizeof($_POST) > 0){
		header('Content-type: application/json');
		$data = array();
		//if()
		$data['action'] = $_POST['action']; //just send back what was the action
		$data['url'] = "http://2.bp.blogspot.com/_reDb6Ye5nBU/TUcXL_5AMAI/AAAAAAAAAKY/OaOGCJ67qBc/s1600/vc-quer-saber-que-tipo-de-cabelo-mais-combina-com-vc-entao-veja-algumas-dicas.jpg"; //this is the url for the image upladed
		
		echo json_encode($data);
		die;
	}

	//END
?>
<html>
	<head>
		<title>ITS - Example</title>
		<script src="../bower_components/jquery/dist/jquery.js"></script>
		<script src="../bower_components/jquery-form/jquery.form.js"></script>
		<script src="../its.js"></script>
		<script src="../translations/PT_BR.js"></script>

		<!--<link rel="stylesheet" type="text/css" href="../its.css">-->

		<style>
			div {
				float: left;
			}
		</style>
	</head>
	<body>
		<div id="image_1" style="width: 250px; height: 250px;"></div>
		<div class="multiple" style="width: 280px; height: 280px;"></div>
		<div class="multiple" style="width: 300px; height: 300px;"></div>
		<script>
			$(document).ready(function () {
				$("#image_1").ITS({});
				$(".multiple").ITS({});
			});
		</script>
	</body>
</html>