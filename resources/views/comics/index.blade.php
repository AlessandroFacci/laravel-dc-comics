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
         <td scope="col">
          <a href="{{route('comics.show', $comic)}}">
            <i class="fa-solid fa-eye"></i>
          </a>
          <a href="{{route('comics.edit', $comic)}}">
            <i class="fa-solid fa-pencil"></i>
          </a>
        </td>
       </tr>
       @endforeach
      </tbody>
      
    </table>

  </section>
@endsection