<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="/css/bootstrap.min.css" rel="stylesheet">
	<title>File Upload</title>
</head>
<body>

	<div class="container mt-3">
		<h2>File Upload</h2>
		<hr>

		<form action="{{ url('/file-upload') }}" method="POST"
		enctype="multipart/form-data">
		@csrf

		<div class="mb-2">
			<label for="berkas" class="form-label ">Gambar Profile</label>
			<input type="file" name="berkas" id="berkas" class="form-control">
			@error('berkas')
			<div class="text-danger">{{$message}}</div>
			@enderror
		</div>

		<button type="submit" class="btn btn-primary my-2">Upload</button>
	</form>
</div>

</body>
</html>