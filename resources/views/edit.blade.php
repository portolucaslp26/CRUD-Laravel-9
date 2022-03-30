@extends('templates.template')

@section('content')
    <h1 class="text-center mb-4">Editar</h1>

    <div class="col-8 m-auto">
        @if(isset($errors) && count($errors) > 0)
            <div class="text-center my-4 p-2 alert-danger">
                @foreach ($errors->all() as $erro)
                    {{$erro}}<br>
                @endforeach
            </div>
        @endif
        <form name="formCad" id="formEdit" method="POST" action="{{url("books/$book->id")}}">
            @method('PUT')
            @csrf
            <input type="text" class="form-control mb-2" id="title" name="title"
            placeholder="Título" value="{{$book->title ?? ''}}" required>
            <select class="form-control mb-2" name="id_user" id="id_user" required>
                <option value="{{$book->relUsers->id ?? ''}}">{{$book->relUsers->name ?? 'Autor'}}</option>
                @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
            <input type="number" class="form-control mb-2" id="pages" name="pages"
            placeholder="Páginas" value="{{$book->pages ?? ''}}" required>
            <input type="number" step="0.01" class="form-control mb-2"
            id="price" name="price" placeholder="Preço" value="{{$book->price ?? ''}}" required>

            <div class="text-center">
                <input type="submit" class="btn btn-success mt-3 mb-4" value="Salvar">
            </div>
        </form>
    </div>
@endsection
