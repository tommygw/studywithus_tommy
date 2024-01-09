@extends('layouts.app')

@section('title', 'Index User')

@section('contents')
    <h1 class="mb-1">Tambah Data User</h1>
    <hr />

    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" placeholder="Masukkan nama user" class="form-control">
            </div>
            <div class="col">
                <input type="email" name="email" placeholder="Masukkan email user" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-6">
                <input type="password" name="password" placeholder="Masukkan password" class="form-control">
            </div>
            <div class="col">
                <label for="level" class="form-label"><strong>Roles</strong></label>
                <select name="level" id="level" class="form-select">
                    <option value="Admin">Admin</option>
                    <option value="User">User</option>
                </select>
            </div>
        </div>
        
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
@endsection
