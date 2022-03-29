<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Week4.9 • Array 09</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://avatars.githubusercontent.com/u/92729204?v=4">
</head>
<body>
	<h1 class="text-start translate-middle position-absolute top-50 start-50 text-nowrap">
	<?php 
		$transport = array('foot', 'bike', 'car', 'plane'); 
		echo "<pre>"; 
		print_r ($transport); 
		echo "</pre>"; 
		$mode = current($transport); 
		echo $mode."<br>"; // $mode = 'foot'; 
		$mode = next($transport); 
		echo $mode."<br>"; // $mode = 'bike'; 
		$mode = current($transport); 
		echo $mode."<br>"; // $mode = 'bike'; 
		$mode = prev($transport); 
		echo $mode."<br>"; // $mode = 'foot'; 
		$mode = end($transport); 
		echo $mode."<br>"; // $mode = 'plane'; 
		$mode = current($transport); 
		echo $mode."<br>"; // $mode = 'plane';
	?>
	</h1>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>