@extends('templates.template')

@section('content')
    <h1 class="text-center mb-4">CRUD</h1>

    <div class="col-8 m-auto">
        @csrf
        <table class="table text-center">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Título</th>
                <th scope="col">Autor</th>
                <th scope="col">Preço</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($books as $book)
                @php
                    $user = $book->find($book->id)->relUsers;
                @endphp
            <tr>
                <th scope="row">{{$book->id}}</th>
                <td>{{$book->title}}</td>
                <td>{{$user->name}}</td>
                <td>{{$book->price}}</td>
                <td>
                    <a href="{{url("books/$book->id")}}">
                      <button class="btn btn-primary">Visualizar</button>
                    </a>
                    <a href="{{url("books/$book->id/edit")}}">
                        <button class="btn btn-warning">Editar</button>
                    </a>
                    <a href="{{url("books/$book->id")}}" class="delete-btn">
                        <button class="btn btn-danger">Deletar</button>
                    </a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <div class="text-center">
            <a href="{{url("books/create")}}">
                <button class="btn btn-success mt-3 mb-4">Cadastrar</button>
            </a>
        </div>
    </div>
@endsection
