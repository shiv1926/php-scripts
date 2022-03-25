<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Dropzone</title>
	<link rel="stylesheet" href="">
	<script src="jquery.min.js"></script>
	<script src="dropzone.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$("#uploadfiles").dropzone({ 
			url: 'upload.php',
			autoProcessQueue: true,
			complete: function(file) {
				alert('sdfsdaf');
			},
			success: function(file,response) {
				console.log(file+" , "+response);
			}

		});
	});
	</script>
	<style type="text/css">
		.dz-preview
		{
			display: none;
		}
	</style>
</head>
<body>
	<div id="uploadfiles" style="height: 100px; width: 100%; border: 1px solid red;">
		
	</div>
</body>
</html>