<!DOCTYPE html>
<html>
<head>
    <title>Edit Category</title>
</head>
<body>
    <h1>Edit Category</h1>

    <form action="/categories/{{ $category->id }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama</label><br>
        <input type="text" name="name" value="{{ $category->name }}"><br><br>

        <label>Deskripsi</label><br>
        <textarea name="description">{{ $category->description }}</textarea><br><br>

        <button type="submit">Update</button>
    </form>

    <br>
    <a href="/categories">Kembali</a>
</body>
</html>