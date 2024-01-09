@extends('layouts.app')

@section('title', 'Index Product')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Produk</h1>
        <a href="{{ route('products.create') }}" class="btn btn-success">Tambah Produk</a>
    </div>
    <hr />
    <!-- Untuk Message Success -->
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif

    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>SKU</th>
                <th>Price</th>
                <th>Description</th>
                <th>Image</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if($product->count() > 0)
                @foreach($product as $rs)
                <tr>
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $rs->title }}</td>
                    <td class="align-middle">{{ $rs->sku }}</td>
                    <td class="align-middle">{{ $rs->price }}</td>
                    <td class="align-middle">{{ $rs->description }}</td>
                    <td class="align-middle"><img src="{{ asset($rs->image_uri) }}" style="width:150px; height: 150px;" alt="{{ $rs->image_uri }}"></td>
                    <td class="align-middle">
                        <div class="btn-group text-center">
                            <a href="{{ route('products.show', $rs->id) }}" type="button" class="btn btn-primary btn-sm">Show</a>
                            <a href="{{ route('products.edit', $rs->id) }}" type="button" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('products.destroy', $rs->id) }}" method="POST" type="button" onsubmit="return confirm('Delete?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Produk tidak ditemukan</td>
                </tr>
            @endif
        </tbody>
    </table>

@endsection
