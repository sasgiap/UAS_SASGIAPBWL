@extends('layouts.app')

@section('content')
<div class="container">
    <h2 style="text-align: center; font-family: serif;">Edit Warga</h2>

    <!-- Form for editing an existing Warga -->
    <form action="{{ url('warga.update' . $warga->id_warga) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $warga->nama }}" required>
        </div>

        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                <option value="L" {{ $warga->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
                <option value="P" {{ $warga->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>

        <div class="form-group">
            <label for="dusun_id">Dusun:</label>
            <select class="form-control" id="dusun_id" name="dusun_id">
                @foreach ($dusuns as $dusun)
                    <option value="{{ $dusun->id_dusun }}" {{ $warga->dusun_id == $dusun->id_dusun ? 'selected' : '' }}>
                        {{ $dusun->nama_dusun }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary mt-3">Update Warga</button>
        </div>
    </form>
</div>
@endsection
