@extends('layouts.app')

@section('title', 'Register - Inventory App')

@section('content')
    <h1>Form Registrasi</h1>

    @if (session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif

    <form method="POST" action="{{ route('register.process') }}">
        @csrf

        <p>First name: <input type="text" name="first_name" value="{{ old('first_name') }}" required></p>
        <p>Last name: <input type="text" name="last_name" value="{{ old('last_name') }}" required></p>

        <button type="submit">Submit & Lanjut</button>
    </form>

    <p><a href="{{ route('home') }}">Kembali ke Home</a></p>
@endsection