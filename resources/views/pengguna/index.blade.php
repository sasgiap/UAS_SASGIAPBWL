@extends('layouts.app')

@section('content')
<div class="container">
    <h2 style="text-align: center; font-family: serif;">Pengguna</h2>
    <a href="{{ url('pengguna/create') }}">
        <button class="btn-sm mb-3" style="box-shadow: 12px 12px 5px rgba(0, 0, 255, .2);">Tambah Pengguna</button>
    </a>
    <table class="table table-bordered" style="box-shadow: 12px 12px 5px rgba(0, 0, 255, .2); border: solid 2px black;">
        <thead>
            <tr style="text-align:center; background-color: pink; color: white;">
                <th>ID Pengguna</th>
                <th>Email</th>
                <th>Role</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengguna as $row)
            <tr style="background-color: pink; color: black; text-align: center;">
                <td>{{ $row->id_pengguna }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ ucfirst($row->role) }}</td> <!-- Capitalizes the first letter of role -->
                <td>
                    <a href="{{ url('pengguna/' . $row->id_pengguna . '/edit') }}">
                        <button style="background-color: pink; color: white; border: none; padding: 5px 10px; border-radius: 5px;">Edit</button>
                    </a>
                </td>
                <td>
                    <form action="{{ url('pengguna/' . $row->id_pengguna) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button onclick="return confirm('Apakah anda yakin?')" style="background-color: pink; color: white; border: none; padding: 5px 10px; border-radius: 5px;">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
