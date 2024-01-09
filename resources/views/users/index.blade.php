@extends('layouts.app')

@section('title', 'Index User')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List User</h1>
        @if (auth()->user()->level=='Admin')
            <a href="{{route ('users.create') }}">Tambah User</a>
        @endif
        
    </div>
    <hr />
<!-- Untuk Message Success -->
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{Session::get('success')}}
    </div>
    @endif

    <table class="table table-hover" >
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Level</th>
                @if (auth()->user()->level=='Admin')
                <th>Aksi</th>
                @endif
            </tr>
        </thead>
        <tbody>+
            @if($user->count() > 0)
                @foreach($user as $rs)
                <tr>
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $rs->name }}</td>
                    <td class="align-middle">{{ $rs->email }}</td>
                    <td class="align-middle">{{ $rs->level }}</td>
                    <td class="align-middle">
                        @if (auth()->user()->level=='Admin')
                        <div class="btn-group text-center">
                            <a href="{{ route('users.show', $rs->id) }}" type="button" class="btn btn-primary btn-sm">Show</a>
                            <a href="{{ route('users.edit', $rs->id) }}" type="button" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('users.destroy', $rs->id) }}" method="POST" type="button" onsubmit="return confirm('Delete?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                        </div>
                        @endif
                    </td>
                </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">User tidak ditemukan</td>
                </tr>
            @endif
        </tbody>
    </table>

@endsection