@extends('layouts.app')

@section('content')
<div class="container">
    <h2 style="text-align: center; font-family: serif;">Edit Pengguna</h2>

    <!-- Form for editing an existing Pengguna -->
    <form action="{{ url('/pengguna.update/' . $pengguna->id_pengguna) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $pengguna->email }}" required>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
            <small class="form-text text-muted">Leave blank if you don't want to change the password.</small>
        </div>

        <div class="form-group">
            <label for="role">Role:</label>
            <select class="form-control" id="role" name="role">
                <option value="admin" {{ $pengguna->role == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="operator" {{ $pengguna->role == 'operator' ? 'selected' : '' }}>Operator</option>
            </select>
        </div>

        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary mt-3">Update Pengguna</button>
        </div>
    </form>
</div>
@endsection
