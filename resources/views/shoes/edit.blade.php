@extends('layouts.app')

@section('title',  'modifica' . $shoe->brand)


@section('actions')
<a href="{{ route('shoes.index')}}" class="btn btn-primary my-5">Torna alla lista</a>
@endsection

@section('content')

<div class="card">
  <div class="card-body">
    <form action="{{ route('shoes.update', $shoe) }}" method="POST" class="row g-4">
      @csrf
      @method('PUT')
    
      <div class="col-4"> 
        <label for="brand" class="form-label">Brand</label>
        <input type="text" class="form-control" id="brand" name="brand" value="{{ old('brand') ?? $shoe->brand }}" />
      </div>
    
      <div class="col-4">
        <label for="model" class="form-label">Model</label>
        <input type="text" class="form-control" id="model" name="model" value="{{ old('model') ?? $shoe->model}}"/>
      </div>
    
      <div class="col-4">
        <label for="size" class="form-label">Size</label>
        <input type="text" class="form-control" id="size" name="size" value="{{ old('size') ?? $shoe->size}}"/>
      </div>
    
      <div class="col-4">
        <label for="price_buy" class="form-label">Price Buy</label>
        <input type="text" class="form-control" id="price_buy" name="price_buy" value="{{ old('price_buy') ?? $shoe->price_buy}}"/>
      </div>
    
      <div class="col-4">
        <label for="price_resell" class="form-label">Price Resell</label>
        <input type="text" class="form-control" id="price_resell" name="price_resell" value="{{ old('price_resell') ?? $shoe->price_resell}}"/>
      </div>
    
      <div class="col-4">
        <label for="discount" class="form-label">Discount</label>
        <input type="text" class="form-control" id="discount" name="discount" value="{{ old('discount') ?? $shoe->discount}}"/>
      </div>

       <div class="col-4">
          <label for="image" class="form-label">Image</label>
          <input type="text" class="form-control " id="image" name="image" value="{{ old('image') ?? $shoe->image}}"/>
        </div>
    
      <div class="col-12">
        <button type="submit" class="btn btn-primary my-3">Salva</button>
      </div>
    
    </form>
  </div>
</div>


@endsection