@extends('layouts.app')

@section('title', 'Home - Inventory App')

@section('content')
    <div class="row row-cards">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="h1 text-center mb-4">Social Media Developer Santai Berkualitas</h1>
                    <p class="lead text-center mb-5">Belajar dan Berbagi agar hidup ini semakin santai berkualitas</p>

                    <h2 class="h2 mt-5 mb-3">Benefit Join di SanberBookBook</h2>
                    <ul class="list-unstyled">
                        <li>Mendapat motivasi dari sesama developer</li>
                        <li>Sharing knowledge dari para mastah Sanber</li>
                        <li>Dibuat oleh calon web developer terbaik</li>
                    </ul>

                    <h2 class="h2 mt-5 mb-3">Cara Bergabung ke SanberBookBook</h2>
                    <ol>
                        <li>Mengunjungi Website ini</li>
                        <li>Mendaftar di <a href="{{ route('register.form') }}" class="text-primary">Form Sign Up</a></li>
                        <li>Selesai</li>
                    </ol>

                    <div class="text-center mt-5">
                        <a href="{{ route('register.form') }}" class="btn btn-primary btn-lg">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection