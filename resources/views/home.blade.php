@extends('layouts.app')

@section('title', 'Home - Inventory App')

@section('content')
    <h1>Selamat Datang di Inventory App!</h1>
    <p>Kelola stok barangmu dengan mudah</p>
    <a href="{{ route('register.form') }}">Daftar Sekarang</a>
@endsection