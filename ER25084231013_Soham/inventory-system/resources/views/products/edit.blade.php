@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header bg-warning">
        Edit Product
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route('products.update', $product->id) }}">
            @csrf @method('PUT')

            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" value="{{ $product->name }}" class="form-control">
            </div>

            <div class="mb-3">
                <label>Quantity</label>
                <input type="number" name="quantity" value="{{ $product->quantity }}" class="form-control">
            </div>

            <div class="mb-3">
                <label>Price</label>
                <input type="text" name="price" value="{{ $product->price }}" class="form-control">
            </div>

            <button class="btn btn-success">Update</button>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
</div>

@endsection