@extends('layouts.app')

@section('header')
<div class="container">
  <h2>Products</h2>
</div>
@endsection

@section('content')
<div class="container">
  <h2>List of Products</h2>
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Description</th>
          <th>Unit Price</th>
        </tr>
      </thead>

      <tbody>
        @if (count($products)<1)
          <tr>
            <td colspan="4"><h3 class="text-danger">No record found</h3></td>
          </tr>
        @else
          @foreach ($products as $product)
            <tr>
              <td>{{ $product->id }}</td>
              <td>{{ $product->name }}</td>
              <td>{{ $product->description }}</td>
              <td>{{ $product->unit_price }}</td>
            </tr>
          @endforeach
        @endif
      </tbody>
    </table>
  </div>
</div>
@endsection