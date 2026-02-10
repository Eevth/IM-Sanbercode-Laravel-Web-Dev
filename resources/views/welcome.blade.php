@extends('layouts.app')

@section('title', 'Welcome - Inventory App')

@section('content')
    <div class="row row-cards">
        <div class="col-12">
            <div class="card">
                <div class="card-body text-center">
                    <h1 class="h1 mb-4">Selamat Datang, {{ $firstName }} {{ $lastName }}!</h1>
                    <p class="lead mb-5">Terima kasih sudah bergabung di SanberBookBook. Social Media kita bersama!</p>

                    <p class="mb-4">Data kamu sudah tersimpan dengan aman.</p>

                    <div class="mt-5">
                        <a href="{{ route('home') }}" class="btn btn-primary btn-lg">Kembali ke Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection