@extends('layouts.app')

@section('main-content')
<div class="container my-5">

  <a href="{{route('comics.index')}}" class="btn btn-success mb-4">Back</a>

  <h2 class="mb-3">Create comic</h2>

  <form action="{{route('comics.store')}}" method="POST">
    <div class="row g-3">

      <div class="col-12">
        <label for="title" class="form-label">Title</label>
        <input type="text" id="title" name="title" class="form-control">
      </div>

      <div class="col-12">
        <label for="serie" class="form-label">Series</label>
        <input type="text" id="serie" name="serie" class="form-control">
      </div>

      <div class="col-12">
        <label for="type" class="form-label">Type</label>
        <input type="text" id="type" name="type" class="form-control">
      </div>

      <div class="col-12">
        <label for="sale-date" class="form-label">Sale date</label>
        <input type="text" id="sale-date" name="sale-date" class="form-control">
      </div>

      <div class="col-12">
        <label for="price" class="form-label">Price</label>
        <input type="text" id="price" name="price" class="form-control">
      </div>

      <div class="col-12">
        <label for="image" class="form-label">Image url</label>
        <input type="url" id="image" name="image" class="form-control">
      </div>

      <div class="col-12">
        <label for="descriptio" class="form-label">Description</label>
        <textarea id="descriptio" name="descriptio" class="form-control"></textarea>
      </div>

      <div class="col-12">
       <button class="btn btn-primary">Save</button>
      </div>

    </div>
  </form>

</div>
@endsection