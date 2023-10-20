@extends('layouts.app')

@section('main-content')
<div class="container my-5">

  <a href="{{route('comics.index')}}" class="btn btn-success mb-4">List</a>

  <h2 class="mb-3">Create comic</h2>

  @if ($errors->any())
    <div class="alert alert-danger">
      <h4>Correct the errors:</h4>
      <ul>
        @foreach ($errors->all() as $error)
          <li>
            {{$error}}
          </li>  
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{route('comics.store')}}" method="POST">

    @csrf
      
      <div class="row g-3">

        <div class="col-12">
          <label for="title" class="form-label">Title</label>
          <input type="text" id="title" name="title" 
          class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}">
          @error('title')
            <div class="invalid-feedback">
              {{$message}}
            </div>
          @enderror
        </div>
  
        <div class="col-12">
          <label for="series" class="form-label">Series</label>
          <input type="text" id="series" name="series" 
          class="form-control @error('series') is-invalid @enderror" value="{{old('series')}}">
          @error('series')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>
  
        <div class="col-12">
          <label for="type" class="form-label">Type</label>
          <input type="text" id="type" name="type" 
          class="form-control @error('type') is-invalid @enderror" value="{{old('type')}}">
          @error('type')
          <div class="invalid-feedback">
            {{$message}}
          </div>
         @enderror
        </div>
  
        <div class="col-12">
          <label for="sale_date" class="form-label">Sale date</label>
          <input type="text" id="sale_date" name="sale_date" 
          class="form-control @error('type') is-invalid @enderror" value="{{old('sale_date')}}">
          @error('sale_date')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>
  
        <div class="col-12">
          <label for="price" class="form-label">Price</label>
          <input type="text" id="price" name="price" 
          class="form-control @error('price') is-invalid @enderror" value="{{old('price')}}">
          @error('price')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>
  
        <div class="col-12">
          <label for="thumb" class="form-label">Image url</label>
          <input type="url" id="thumb" name="thumb" 
          class="form-control @error('price') is-invalid @enderror" value="{{old('thumb')}}">
          @error('thumb')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>
  
        <div class="col-12">
          <label for="description" class="form-label">Description</label>
          <textarea id="description" name="description" 
          class="form-control @error('price') is-invalid @enderror">{{old('description')}}</textarea>
          @error('description')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror 
        </div>
  
        <div class="col-12">
         <button class="btn btn-primary">Save</button>
        </div>
  
      </div>
       
  </form>

</div>
@endsection