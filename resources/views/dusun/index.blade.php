@extends ('layouts.app')

@section('content')
<div class="container">
<h2 style="text-align: center; align-items: center; font-family: serif;">Dusun</h2>

<a href="{{ url('dusun/create') }}">
    <button class="btn-sm mb-3" style="box-shadow: 12px 12px 5px rgba(0, 0, 255, .2);">Tambah Dusun</button>
</a>

<table class="table table-bordered" style="box-shadow: 12px 12px 5px rgba(0, 0, 255, .2); border: solid 2px black;">
    <tr style="text-align:center; background-color: pink; color: white;">
        <th>ID Dusun</th>
        <th>Nama Dusun</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>

    @foreach ($dusun as $row) <!-- Use $dusun instead of $rows -->
    <tr style="background-color: pink; color: black; text-align: center;">
        <td>{{ $row->id_dusun }}</td>
        <td>{{ $row->nama_dusun }}</td>
        <td>
        <a href="{{ url('dusun/' . $row->id_dusun . '/edit') }}">
         <button style="background-color: pink; color: white; border: none; padding: 5px 10px; border-radius: 5px;">Edit</button>
         </a>
         </td>

         <td>
         <form action="{{ url('dusun/' . $row->id_dusun) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
</div>
@endsection
