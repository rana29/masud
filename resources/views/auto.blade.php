<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>auto</title>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css"></script>

</head>
<body>
	<p>select</p>

	<input type="text" name="name" id="country">

	<script>
		
		$(function(){


			var count=[


			"dhaka",
			"dhk",
			"daka",
			"dhaa",
			"aa",
			"ba",
			"ca",

			];

			$("#country").autocomplete({

				source:count
			});
		});
	</script>
	
</body>
</html>