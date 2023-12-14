@extends('layouts.app')

@section('header')
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Products</a></li>
  <li class="breadcrumb-item active">New Product</li>
</ol>
@endsection

@section('content')
<div class="container ">
  <div class="row justify-content-center ">
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
      @endif
    <div class="col-md-8 col-lg-6 container_border">
      
      <form action="{{ route('product.store') }}" method="POST" onkeydown="return event.key != 'Enter' ">
        @csrf
        <div class="form-group mb-3">
          <label for="name" class="form-label">Name:</label>
          <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required autofocus>
          @error('name')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label for="description" class="form-label">Description:</label>
          <input type="text" name="description" id="description" class="form-control" value="{{ old('description') }}">
        </div>
        <div class="form-group mb-3">
          <label for="stock" class="form-label">QtyInStock:</label>
          <input type="number" name="stock" id="stock" class="form-control" value="{{ old('stock') }}">
          @error('in_stock')
          <div class="alert alert-danger mt-2">{{ $message }}</div>
         @enderror
        </div>
        <div class="form-group mb-3">
          <label for="unit_cost" class="form-label">Unit Cost:</label>
          <input type="text" name="unit_cost" id="unit_cost" class="form-control" value="{{ old('unit_cost') }}">
          @error('unit_cost')
          <div class="alert alert-danger mt-2">{{ $message }}</div>
         @enderror
        </div>
        <div class="form-group mb-3">
          <label for="unit_price" class="form-label">Unit Price:</label>
          <input type="text" name="unit_price" id="unit_price" class="form-control" value="{{ old('unit_price') }}">
          @error('unit_price')
          <div class="alert alert-danger mt-2">{{ $message }}</div>
         @enderror
        </div>
        <button class="btn btn-primary">Save</button>
      </form>
    </div>
  </div>
</div>
@endsection