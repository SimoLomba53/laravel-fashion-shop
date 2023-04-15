

@vite(['resources/js/app.js'])

<div class="container">

    <form action="{{ route('shoes.store') }}" method="POST">
        @csrf

        <label for="brand" class="form-label">Brand</label>
        <input type="text" class="form-control" id="brand" name="brand" />

        <label for="model" class="form-label">Model</label>
        <input type="text" class="form-control" id="model" name="model" />

        <label for="size" class="form-label">Size</label>
        <input type="text" class="form-control" id="size" name="size" />
    
        <label for="price_buy" class="form-label">Price Buy</label>
        <input type="text" class="form-control" id="price_buy" name="price_buy" />

        <label for="price_resell" class="form-label">Price Resell</label>
        <input type="text" class="form-control" id="price_resell" name="price_resell" />

        <label for="discount" class="form-label">Discount</label>
        <input type="text" class="form-control" id="discount" name="discount" />

    
        
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
</div>
