@extends('templates.template')

@section('content')
    <h1 class="text-center mb-4">Visualizar</h1>

    <div class="jumbotron col-8 m-auto">
        @php
            $user = $book->find($book->id)->relUsers;
        @endphp

        <b>Título:</b> {{$book->title}}<br>
        <b>Páginas:</b> {{$book->pages}}<br>
        <b>Preço:</b> R${{$book->price}}<br>
        <b>Autor:</b> {{$user->name}}<br>
        <b>E-mail do Autor:</b> {{$user->email}}<br>
    </div>
@endsection
