<html>
	<head>
		<title>Latihan 4</title>
	</head>
	<body>
		<form method="post" action="">
			Umur <input type="text" name="umur"> <br /><br />
			<input type="submit" name="submit" value="Submit">
		</form>


		<?php
			
			$umur = "";
			extract($_POST);
			if ($umur >=0 && $umur <=5 )
			{
			echo "usia = ".$umur." => Balita";
			}
			else if ($umur >= 6 && $umur <=16 )
			{
			echo "usia = ".$umur." => Anak-anak";
			}
			else if ($umur >=17 && $umur <= 50)
			{
			echo "usia = ".$umur." => Dewasa";
			}
			else if ($umur > 50)
			{
			echo "usia = ".$umur." => Tua";
			}
		?>
	</body>
</html>
		