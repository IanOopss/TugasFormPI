<?php include('backend.php') ;?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style.css">
            <title>Tugas Pemrograman Integratif</title>
        </head>
    <body>
        <div class="container">
		<h1> Form Sederhana </h1>
		<form id="contact" method="post" action="index.php">

				<div class="line">
						<label for="nama">Nama: </label>
						<input type="text" name="nama">
				</div>

				<div class="line">
						<label for="email">Email: </label>
						<input type="email" name="email">
				</div>

				<div class="line">
						<label for="pesan">Pesan: </label>
						<textarea name="pesan" rows="3" cols="10"></textarea>
				</div>

				<div class="line">
						<input type="submit" name="submit" value="Submit" class="button">
				</

		</form>
</div>
    </body>
</html>
