@extends('layouts.app')

@section('title', 'Sneakers')

@section('actions')
<a class="btn btn-primary my-5" href="{{ route('shoes.create') }}">Nuova Scarpa</a>
@endsection


@section('content')
<div class="card my-4">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Model</th>
                    <th scope="col">Size</th>
                    <th scope="col">Price Buy</th>
                    <th scope="col">Price Resell</th>
                    <th scope="col">Discount</th>
                   
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($shoes as $shoe)
                <tr>
                    <th scope="row">{{ $shoe->id }}</th>
                    <td>{{ $shoe->brand }}</td>
                    <td>{{ $shoe->model }}</td>
                    <td>{{ $shoe->size }}</td>
                    <td>{{ $shoe->price_buy }}</td>
                    <td>{{ $shoe->price_resell }}</td>
                    <td>{{ $shoe->discount }}</td>
                    
                    <td> <a href="{{ route('shoes.show', $shoe) }}"> 
                        <i class="bi bi-eye-fill"></i>   
                     </a>
                    
                    <a href="{{ route('shoes.edit', $shoe) }}">
                        <i class="bi bi-pencil-fill ms-3"></i>
                    </a>  
                    <a type="button" class="text-danger" data-bs-toggle="modal" data-bs-target="#delete-modal-{{ $shoe->id }}">
                        <i class="bi bi-trash ms-3"></i>              
                    </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@foreach ($shoes as $shoe)
  <!-- Modal -->
  <div class="modal fade" id="delete-modal-{{ $shoe->id }}" tabindex="-1" aria-labelledby="delete-modal-{{ $shoe->id }}-label"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="delete-modal-{{ $shoe->id }}-label">Conferma eliminazione</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-start">
          Sei sicuro di voler eliminare la scarpa {{ $shoe->model }} con ID
          {{ $shoe->id }}? <br>
          L'operazione non è reversibile
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>

          <form action="{{ route('shoes.destroy', $shoe) }}" method="POST" class="">
            @method('DELETE')
            @csrf

            <button type="submit" class="btn btn-danger">Elimina</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endforeach
{{ $shoes->links('pagination::bootstrap-5') }}
@endsection
