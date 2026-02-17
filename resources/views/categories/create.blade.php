<!DOCTYPE html>
<html>
<head>
    <title>Tambah Category</title>
</head>
<body>
    <h1>Tambah Category</h1>

    <form action="/categories" method="POST">
        @csrf

        <label>Nama</label><br>
        <input type="text" name="name"><br><br>

        <label>Deskripsi</label><br>
        <textarea name="description"></textarea><br><br>

        <button type="submit">Simpan</button>
    </form>

    <br>
    <a href="/categories">Kembali</a>
</body>
</html>