@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('main-content')
  <section class="container my-5">

    <a href="{{route('comics.create')}}" class="btn btn-success mb-4">Create new comic</a>

    <h1 class="text-white mb-3">{{ $title }}</h1> 

    <table class="table table-striped">

      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Title</th>
          <th scope="col">Series</th>
          <th scope="col">Type</th>
          <th scope="col">Created date</th>
          <th scope="col">Updated date</th>
          <th scope="col"></th>
        </tr>
      </thead>

      <tbody>
       @foreach ($comics as $comic)
       <tr>
         <th scope="row">{{$comic->id}}</th>
         <td scope="col">{{$comic->title}}</td>
         <td scope="col">{{$comic->series}}</td>
         <td scope="col">{{$comic->type}}</td>
         <td scope="col">{{$comic->created_at}}</td>
         <td scope="col">{{$comic->updated_at}}</td>
         <td scope="col" class="d-flex">

          <a href="{{route('comics.show', $comic)}}" class="mx-1">
            <i class="fa-solid fa-eye"></i>
          </a>

          <a href="{{route('comics.edit', $comic)}}" class="mx-1">
            <i class="fa-solid fa-pencil"></i>
          </a>

          <a href="#" data-bs-toggle="modal" data-bs-target="#delete-modal-{{$comic->id}}" class="mx-1">
            <i class="fa-solid fa-trash text-danger"></i>
          </a>

          <div class="modal fade" id="delete-modal-{{$comic->id}}" tabindex="-1" aria-labelledby="delete-modal-{{$comic->id}}" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">Delete item</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">                
                  Are you want to delete {{$comic->title}}?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <form action="{{route('comics.destroy', $comic)}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger">Delete</button> 
                </form>
                </div>
              </div>
            </div>
          </div>
          
        </td>
       </tr>
       @endforeach
      </tbody>
      
    </table>

    {{$comics ->links('pagination::bootstrap-5')}}

  </section>
@endsection