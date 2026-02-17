<!DOCTYPE html>
<html>
<head>
    <title>Detail Category</title>
</head>
<body>
    <h1>Detail Category</h1>

    <p><strong>Nama:</strong> {{ $category->name }}</p>
    <p><strong>Deskripsi:</strong> {{ $category->description }}</p>

    <a href="/categories">Kembali</a>
</body>
</html>