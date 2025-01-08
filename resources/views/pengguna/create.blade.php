@extends('layouts.app')

@section('content')
<div class="container">
    <h2 style="text-align: center; font-family: serif;">Tambah Pengguna</h2>

    <!-- Form for creating a new Pengguna -->
    <form action="{{ url('/pengguna.store') }}" method="POST">
        @csrf
        
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <div class="form-group">
            <label for="role">Role:</label>
            <select class="form-control" id="role" name="role">
                <option value="admin">Admin</option>
                <option value="operator" selected>Operator</option>
            </select>
        </div>

        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary mt-3">Tambah Pengguna</button>
        </div>
    </form>
</div>
@endsection
