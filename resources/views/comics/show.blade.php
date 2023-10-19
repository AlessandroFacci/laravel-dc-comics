@extends('layouts.app')

@section('main-content')
<div class="container my-5 ">
  <div class="row g-3">
    <h1 class="text-white">{{$comic->title}}</h1>
    <div class="col-6">
      <div class="row g-3">
        <div class="col-12">
          <img src="{{$comic->thumb}}" alt="img-{{$comic->id}}" width="100%">
        </div>
      </div>
    </div>
    <div class="col-6">
      <div class="row g-3">
        <div class="col-12">
          <strong>Id: {{$comic->id}}</strong>
        </div>
        <div class="col-12">
          <strong>Series: {{$comic->series}}</strong>
        </div>
        <div class="col-12">
          <strong>Type: {{$comic->type}}</strong>
        </div>
        <div class="col-12">
          <strong>Sale date: {{$comic->sale_date}}</strong>
        </div>
        <div class="col-12">
          <strong>Price: {{$comic->price}}</strong>
        </div>
        <div class="col-12">
          <strong>Created date: {{$comic->created_at}}</strong>
        </div>
        <div class="col-12">
          <strong>Updated date: {{$comic->updated_at}}</strong>
        </div>
        <div class="col-12">
          <strong>Description: {{$comic->description}}</strong>
        </div>
      </div>
    </div>




    
  </div>

</div>
@endsection