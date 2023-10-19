@extends('layouts.app')

@section('main-content')
<div class="container my-5">

  <a href="{{route('comics.index')}}" class="btn btn-success mb-4">List</a>
  <a href="{{route('comics.show', $comic)}}" class="btn btn-success mb-4">Show details</a>

  <h2 class="mb-3">Edit comic</h2>

  <form action="{{route('comics.update', $comic)}}" method="POST">

    @csrf
    @method('PUT')

    <div class="row g-3">

      <div class="col-12">
        <label for="title" class="form-label">Title</label>
        <input type="text" id="title" name="title" class="form-control" value="{{$comic->title}}">
      </div>

      <div class="col-12">   
        <label for="series" class="form-label">Series</label>
        <input type="text" id="series" name="series" class="form-control" value="{{$comic->series}}">
      </div>

      <div class="col-12">
        <label for="type" class="form-label">Type</label>
        <input type="text" id="type" name="type" class="form-control" value="{{$comic->type}}">
      </div>

      <div class="col-12">
        <label for="sale_date" class="form-label">Sale date</label>
        <input type="text" id="sale_date" name="sale_date" class="form-control" value="{{$comic->sale_date}}">
      </div>

      <div class="col-12">
        <label for="price" class="form-label">Price</label>
        <input type="text" id="price" name="price" class="form-control" value="{{$comic->price}}">
      </div>

      <div class="col-12">
        <label for="thumb" class="form-label">Image url</label>
        <input type="url" id="thumb" name="thumb" class="form-control" value="{{$comic->thumb}}">
      </div>

      <div class="col-12">
        <label for="description" class="form-label">Description</label>
        <textarea id="description" name="description" class="form-control" value="{{$comic->description}}"></textarea>
      </div>

      <div class="col-12">
       <button class="btn btn-primary">Save</button>
      </div>

    </div>
  </form>

</div>
@endsection