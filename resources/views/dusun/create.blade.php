@extends('layouts.app')

@section('content')
<div class="container">
    <h2 style="text-align: center; align-items: center; font-family: serif;">Tambah Dusun</h2>

    <!-- Form to create a new Dusun -->
    <form action="{{ url('dusun') }}" method="POST">
        @csrf <!-- CSRF protection for form submission -->
        <div class="form-group">
            <label for="nama_dusun">Nama Dusun</label>
            <input type="text" class="form-control" id="nama_dusun" name="nama_dusun" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3" style="box-shadow: 12px 12px 5px rgba(0, 0, 255, .2);">
            Simpan Dusun
        </button>
    </form>

    <!-- Button to go back to the list -->
    <a href="{{ url('dusun') }}" class="btn btn-secondary mt-3" style="box-shadow: 12px 12px 5px rgba(0, 0, 255, .2);">
        Kembali ke Daftar
    </a>
</div>
@endsection
