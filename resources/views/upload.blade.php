<!DOCTYPE html>
<html>
<head>
    <title>Upload Image</title>
</head>
<body>
    <h1>Upload Image</h1>
    <p>This is the Upload Image page content.</p>

<form action="{{ route('upload.image') }}" method="POST" enctype="multipart/form-data">
    <!-- @csrf -->
    <input type="file" name="image">
    <button type="submit">Upload Image</button>
</form>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('image'))
    <p>Uploaded Image: {{ session('image') }}</p>
    <img src="{{ asset('images/example.jpg') }}" alt="Example Image">
    <img src="{{ asset('images/' . session('image')) }}" alt="Uploaded Image">
@endif

</body>
</html>