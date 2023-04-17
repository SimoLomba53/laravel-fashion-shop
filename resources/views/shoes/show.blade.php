@extends('layouts.app')

@section('title', $shoe->brand)
@section('actions')
<a href="{{ route('shoes.index') }}" class=" btn btn-primary float-end my-5">Torna alla lista</a>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-4">
                <strong>Brand:</strong> {{ $shoe->brand }} <br />
            </div>
            <div class="col-4">
                <strong>Model:</strong> {{ $shoe->model }} <br />
            </div>
            <div class="col-4">
                <strong>Size:</strong> {{ $shoe->size }} <br />
            </div>
            <div class="col-4 my-4">
                <strong>Price buy:</strong> {{ $shoe->price_buy }} <br />
            </div>
            <div class="col-4 my-4">
                <strong>Price resell:</strong> {{ $shoe->price_resell }} <br />
            </div>
            <div class="col-4 my-4">
                <strong>Discount:</strong> {{ $shoe->discount }} <br />
            </div>
            <div class="offset-4 col-4">
                <strong>Image:</strong> <img src="{{ $shoe->image }}" alt="" style="width:300px;height:250px"> <br />
            </div>
        </div>
    </div>
</div>



@endsection
