@extends('layouts.app')

@section('title', 'Register - Inventory App')

@section('content')
    <div class="row row-cards justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h1 class="h1 text-center mb-4">Form Registrasi</h1>

                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('register.process') }}">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Nama Depan</label>
                            <input type="text" name="first_name" value="{{ old('first_name') }}" class="form-control" placeholder="Nama Depan" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nama Belakang</label>
                            <input type="text" name="last_name" value="{{ old('last_name') }}" class="form-control" placeholder="Nama Belakang" required>
                        </div>

                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary w-100">Submit & Lanjut</button>
                        </div>
                    </form>

                    <div class="text-center mt-3">
                        <a href="{{ route('home') }}" class="text-muted">Kembali ke Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection