<?php error_reporting(-1);?>
<html>
<head>
	<title></title>
</head>
<body>
	Welcome <?php echo $_GET['fname'] . $_GET['lname']; ?><br>
	Your email adress is: <?php echo $_GET["email"]; ?>

	<?php			
		$csvFile = "myCSV.csv";
		$fh = fopen($csvFile, 'a',) or die("can't open file");
		$stringData = $_GET['fname'] .','. $_GET['lname']. ',' .$_GET['email'];
		fwrite($fh, $stringData);
		fclose($csvFile);
	?>
</body>
</html>