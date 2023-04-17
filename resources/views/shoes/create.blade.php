@extends('layouts.app')

@vite(['resources/js/app.js'])

@section('title', 'aggiungi una scarpa')

@section('actions')
<a class="btn btn-primary my-5" href="{{ route('shoes.index') }}">Torna alla lista</a>
@endsection

@section('content')


<div class="card">
  <div class="card-body">
    <form action="{{ route('shoes.store') }}" method="POST" class="row g-4">
        @csrf

        <div class="col-4"> 
          <label for="brand" class="form-label">Brand</label>
          <input type="text" class="form-control" id="brand" name="brand" value="{{ old('Brand') }}" />
        </div>
    
        <div class="col-4">
          <label for="model" class="form-label">Model</label>
          <input type="text" class="form-control" id="model" name="model" value="{{ old('Model') }}"/>
        </div>
    
        <div class="col-4">
          <label for="size" class="form-label">Size</label>
          <input type="text" class="form-control" id="size" name="size" value="{{ old('Size') }}"/>
        </div>
    
        <div class="col-4">
          <label for="price_buy" class="form-label">Price Buy</label>
          <input type="text" class="form-control" id="price_buy" name="price_buy" value="{{ old('Price_Buy') }}"/>
        </div>
    
        <div class="col-4">
          <label for="price_resell" class="form-label">Price Resell</label>
          <input type="text" class="form-control" id="price_resell" name="price_resell" value="{{ old('Price_Resell') }}"/>
        </div>
    
        <div class="col-4">
          <label for="discount" class="form-label">Discount</label>
          <input type="text" class="form-control" id="discount" name="discount" value="{{ old('Discount') }}"/>
        </div>

        <div class="col-4">
          <label for="image" class="form-label">Image</label>
          <input type="text" class="form-control" id="image" name="image" value="{{ old('image') }}"/>
        </div>
    
        <div class="col-4">
          <button type="submit" class="btn btn-primary my-3">Salva</button>
        </div>
    
      </form>
  </div>
</div>

@endsection
