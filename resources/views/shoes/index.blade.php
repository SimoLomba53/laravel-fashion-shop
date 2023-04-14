@extends('layouts.app')


@section('content')
    

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
            
            <td> <a href="{{ route('shoes.show', $shoe) }}"> Dettaglio </a>
            <a href="{{ route('shoes.create') }}">Nuova scarpa</a>   
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

{{ $shoes->links('pagination::bootstrap-5') }}