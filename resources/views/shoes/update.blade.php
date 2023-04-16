@extends('layouts.app')

<div class="card">
    <div class="card-body">
        <form action="{{ route('shoes.update') }}" method="POST">
            @method('PUT') @csrf
        
            <label for="brand" class="form-label">Brand</label>
            <input
                type="text"
                class="form-control"
                id="brand"
                name="brand"
                value="{{ $shoe->brand }}"
            />
        
            <label for="model" class="form-label">Model</label>
            <input
                type="text"
                class="form-control"
                id="model"
                name="model"
                value="{{ $shoe->model }}"
            />
        
            <label for="size" class="form-label">Size</label>
            <input
            type="text"
            class="form-control"
            id="size"
            name="size"
            value="{{ $shoe->size }}"
        />
        
            <label for="price_buy" class="form-label">Price Buy</label>
            <input
                type="number"
                class="form-control"
                id="price_buy"
                name="price_buy"
                value="{{ $shoe->price_buy }}"
            />
        
            <label for="price_resell" class="form-label">Price Resell</label>
            <input
            type="number"
            class="form-control"
            id="price_resell"
            name="price_resell"
            value="{{ $shoe->price_resell }}"
        />
            <label for="discount" class="form-label">Discount</label>
            <input
            type="number"
            class="form-control"
            id="discount"
            name="discount"
            value="{{ $shoe->discount }}"
        />
        
            <button type="submit" class="btn btn-primary">Salva</button>
        </form>
    </div>
</div>