@extends('layouts.app')

@section('title', 'Edit User')

@section('contents')
    <h1 class="mb-1">Edit Data User</h1>
    <hr />

    <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" value="{{ $user->name }}" class="form-control">
            </div>
            <div class="col">
                <input type="email" name="email" value="{{ $user->email }}" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="level" class="form-label">Level</label>
                <select name="level" id="level" class="form-select">
                    <option value="Admin" {{ $user->level == 'Admin' ? 'selected' : '' }}>Admin</option>
                    <option value="User" {{ $user->level == 'User' ? 'selected' : '' }}>User</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
@endsection
