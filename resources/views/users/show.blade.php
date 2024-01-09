@extends('layouts.app')

@section('title', 'Show User')

@section('contents')

    <h1 class="mb-1">Lihat Data User</h1>
     <hr />

        <div class="row mb-3">
            <div class="col">
            <label for=""> nama</label>
                <input readonly type="text" name="title" value="{{ $user->name}}" class="form-control">
            </div>
            <div class="col">
            <label for=""> email</label>
                <input readonly type="text" name="sku" value="{{$user->email}}" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
            <label for=""> level</label>
                <input readonly type="text" name="price" value="{{ $user->level}}" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
            <label for=""> Created_at</label>
                <input readonly type="text" name="price" value="{{ $user->created_at}}" class="form-control">
            </div>
            <div class="col">
                <label for=""> Updated_at</label>
                <input readonly type="text" name="description" value="{{ $user->updated_at}}" class="form-control">
            </div>
        </div>
@endsection