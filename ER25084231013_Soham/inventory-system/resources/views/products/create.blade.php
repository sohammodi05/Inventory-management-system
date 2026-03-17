@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header bg-primary text-white">
        Add Product
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route('products.store') }}">
            @csrf

            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter product name">
            </div>

            <div class="mb-3">
                <label>Quantity</label>
                <input type="number" name="quantity" class="form-control">
            </div>

            <div class="mb-3">
                <label>Price</label>
                <input type="text" name="price" class="form-control">
            </div>

            <button class="btn btn-success">Save</button>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
</div>

@endsection