@extends('layouts.app')


@section('content')
    
<a class="btn btn-primary my-5" href="{{ route('shoes.create') }}">Nuova scarpa</a>

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">brand</th>
            <th scope="col">model</th>
            <th scope="col">size</th>
            <th scope="col">price_buy</th>
            <th scope="col">price_resell</th>
            <th scope="col">discount</th>
           
            <th scope="col">actions</th>
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
                <i class="bi bi-box-arrow-up-right"></i>
                dettaglio
             </a>
            
            <a href="{{ route('shoes.edit', $shoe) }}">
                <i class="bi bi-pencil"></i>
                modifica
            </a>  
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $shoes->links('pagination::bootstrap-5') }}
@endsection
