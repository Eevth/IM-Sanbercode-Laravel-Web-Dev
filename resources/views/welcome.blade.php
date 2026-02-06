@extends('layouts.app')

@section('title', 'Welcome - Inventory App')

@section('content')
    <h1>Selamat Datang, {{ $firstName }} {{ $lastName }}!</h1>
    <p>Terima kasih sudah mendaftar di Inventory App</p>
    <p><a href="{{ route('home') }}">Kembali ke Home</a></p>
@endsection