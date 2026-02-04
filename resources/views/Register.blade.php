<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register - Inventory App</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>

    @if (session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif

    <form method="POST" action="{{ route('register.process') }}">
        @csrf

        <p>First name: <input type="text" name="first_name" value="{{ old('first_name') }}" required></p>
        <p>Last name: <input type="text" name="last_name" value="{{ old('last_name') }}" required></p>

        <!-- Gender -->
        <p>Gender: 
            <input type="radio" name="gender" value="Male"> Male
            <input type="radio" name="gender" value="Female"> Female
            <input type="radio" name="gender" value="Other"> Other
        </p>

        <!-- Nationality -->
        <p>Nationality: <select name="nationality">
            <option value="Indonesia">Indonesia</option>
            <option value="Other">Other</option>
        </select></p>

        <!-- Language -->
        <p>Language Spoken: 
            <input type="checkbox" name="language[]" value="Bahasa Indonesia"> Bahasa Indonesia
            <input type="checkbox" name="language[]" value="English"> English
            <input type="checkbox" name="language[]" value="Other"> Other
        </p>

        <!-- Bio -->
        <p>Bio: <textarea name="bio" rows="4" cols="50"></textarea></p>

        <button type="submit">Submit & Lanjut</button>
    </form>

    <p><a href="{{ route('home') }}">Kembali ke Home</a></p>
</body>
</html>