@extends('layouts.app')

@section('content')
<div class="container">
    <h2 style="text-align: center; align-items: center; font-family: serif;">Edit Dusun</h2>

    <!-- Form to edit the Dusun -->
    <form action="{{ url('dusun.update' . $row->id_dusun) }}" method="POST">
        @method('PUT') <!-- HTTP method for update -->
        @csrf
        <div class="form-group">
            <label for="nama_dusun">Nama Dusun</label>
            <input type="text" class="form-control" id="nama_dusun" name="nama_dusun" value="{{ $row->nama_dusun }}" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3" style="box-shadow: 12px 12px 5px rgba(0, 0, 255, .2);">
            Update Dusun
        </button>
    </form>

    <!-- Button to go back to the list -->
    <a href="{{ url('dusun') }}" class="btn btn-secondary mt-3" style="box-shadow: 12px 12px 5px rgba(0, 0, 255, .2);">
        Back to List
    </a>
</div>
@endsection
