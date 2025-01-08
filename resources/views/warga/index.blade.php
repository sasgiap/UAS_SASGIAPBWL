@extends('layouts.app')

@section('content')
<div class="container">
    <h2 style="text-align: center; font-family: serif;">Warga</h2>
    <<a href="{{ url('warga/create') }}">
    <button class="btn-sm mb-3" style="box-shadow: 12px 12px 5px rgba(0, 0, 255, .2);">Tambah Warga</button>
</a>

<table class="table table-bordered" style="box-shadow: 12px 12px 5px rgba(0, 0, 255, .2); border: solid 2px black;">
    <thead>
        <tr style="text-align:center; background-color: pink; color: white;">
            <th>ID Warga</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Dusun</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rows as $item)
        <tr style="background-color: pink; color: black; text-align: center;">
            <td>{{ $item->id_warga }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
            <td>{{ $item->dusun->nama_dusun }}</td>
            <td>
                <a href="{{ url('warga/' . $item->id_warga . '/edit') }}">
                    <button style="background-color: pink; color: white; border: none; padding: 5px 10px; border-radius: 5px;">Edit</button>
                </a>
            </td>
            <td>
                <form action="{{ url('warga/' . $item->id_warga) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button style="background-color: red; color: white; border: none; padding: 5px 10px; border-radius: 5px;" onclick="return confirm('Apakah Anda yakin ingin menghapus warga ini?');">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
