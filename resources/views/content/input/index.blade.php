<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data</title>
	<style>
		form {
			max-width: 500px;
			margin: 0 auto;
			padding: 40px;
			border: 1px solid #ddd;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			background-color: #f5f5f5;
		}
		input[type="text"], textarea {
			display: block;
			margin-bottom: 20px;
			width: 100%;
			padding: 10px;
			border-radius: 5px;
			border: 1px solid #ccc;
			font-size: 16px;
			font-family: Arial, sans-serif;
		}
		label {
			font-weight: bold;
			display: block;
			margin-bottom: 10px;
		}
		input[type="file"] {
			margin-bottom: 20px;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
			font-family: Arial, sans-serif;
		}
		input[type="submit"]:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<body>
    <form action="#" method="POST" enctype="multipart/form-data">
		<label for="judul">Judul:</label>
		<input type="text" id="name" name="name" required>

        <label for="judul">Role:</label>
		<input type="text" id="role" name="role" required>

        <label for="judul">Url App:</label>
		<input type="text" id="url" name="url" required>

		<label for="gambar">Gambar:</label>
		<input type="file" id="picture_path" name="picture_path" accept="image/*" required>

		<label for="deskripsi">Deskripsi:</label>
		<textarea id="description" name="description" rows="8" required></textarea>

		<input type="submit" value="Submit">
	</form>
</body>
</html>