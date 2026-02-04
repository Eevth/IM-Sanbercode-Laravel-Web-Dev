<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Welcome - Inventory App</title>
</head>
<body>
    <h1>Selamat Datang, {{ $firstName }} {{ $lastName }}!</h1>
    <p>Terima kasih sudah mendaftar di Inventory App</p>
    <p><a href="{{ route('home') }}">Kembali ke Home</a></p>
</body>
</html>