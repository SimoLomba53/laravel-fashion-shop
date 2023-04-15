@extends('layouts.app')

@section('page-name,'. $shoe->brand)

@section('content')

<strong>Brand:</strong> {{ $shoe->brand }} <br />
<strong>Model:</strong> {{ $shoe->model }} <br />
<strong>Size:</strong> {{ $shoe->size }} <br />
<strong>Price buy:</strong> {{ $shoe->price_buy }} <br />
<strong>Price resell:</strong> {{ $shoe->price_resell }} <br />
<strong>Discount:</strong> {{ $shoe->discount }} <br />
<strong>Image</strong> <img src="{{ $shoe->image }}" alt=""> <br />

@endsection
