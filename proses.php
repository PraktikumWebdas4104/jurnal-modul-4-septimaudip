<h1> FORM PENDAFTARAN </h1>
	
	<form action="" method="POST" enctype="multipart/form-data">
		Gambar : <input type="file" name="gambar"><br>
		Hobbi : <br><input type="checkbox" name="hobi[]" value="Bersepeda">Otomotif<br>
			 	<input type="checkbox" name="hobi[]" value="Olahraga">Olahraga<br>
			 	<input type="checkbox" name="hobi[]" value="Menggambar">Seni<br>
			 	<input type="checkbox" name="hobi[]" value="Ngoding">Ngoding<br><br>	 
	
			<input type="submit" name="submit" value="Kirim"> </td>
	</form>
	
	
<?php
	 if (isset($_POST['submit'])) {
		  $hobi = $_POST['hobi'];
		  echo "Hobbi &nbsp; : ";
		  foreach ($hobi as $nilai) {
		  	echo "$nilai, ";
		  	# code...
		  }
		  echo "<br>Gambar : <br>";
		  echo "<img src= >";
	 }

?>
