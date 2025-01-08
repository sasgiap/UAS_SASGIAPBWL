@extends('layouts.app')

@section('content')
<div class="container">
    <h2 style="text-align: center; font-family: serif;">Tambah Warga</h2>

    <!-- Form for creating a new Warga -->
    <form action="{{ url('warga.store') }}" method="POST">
        @csrf
        
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Warga" required>
        </div>

        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>

        <div class="form-group">
            <label for="warga_id">pilih dusun:</label>
            <select class="form-control" id="warga_id" name="dusun_id" required>
                <option value="1">bandar lama</option>
                <option value="9">aek kanopan</option>
                @foreach ($warga as $warga)
                    <option value="{{ $warga->id_warga }}">{{ $warga->nama_warga }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary mt-3">Simpan Warga</button>
        </div>
    </form>
</div>
@endsection
