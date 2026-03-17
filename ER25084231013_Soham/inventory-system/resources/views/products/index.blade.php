@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h2>📦 Product List</h2>
    <a href="{{ route('products.create') }}" class="btn btn-primary">+ Add Product</a>
</div>
<div class="row mb-4">
    <div class="col-md-4">
        <div class="card bg-primary text-white p-3">
            <h5>Total Products</h5>
            <h3>{{ count($products) }}</h3>
        </div>
    </div>
</div>
<table class="table table-bordered table-hover">
    <thead class="table-dark">
        <tr>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Status</th>
            <th width="180">Action</th>
        </tr>
    </thead>
    <tbody>

    @foreach($products as $product)
    <tr>
        <td>{{ $product->name }}</td>
        <td>{{ $product->quantity }}</td>
        <td>₹{{ $product->price }}</td>

        <td>
            @if($product->quantity < 5)
                <span class="badge bg-danger">Low Stock</span>
            @else
                <span class="badge bg-success">In Stock</span>
            @endif
        </td>

        <td>
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>

            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button class="btn btn-danger btn-sm">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach

    </tbody>
</table>

@endsection