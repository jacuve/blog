@extends('layouts.plantilla')

@section('title', 'Cursos create')

@section('content')
    <h1>En esta pagina podra crear un curso</h1>
    <form action="{{route('cursos.store')}}" method="post">

        @csrf

        <label for="">
            Nombre:<br/>
            <input type="text" name="name" value="{{old('name')}}"/>
        </label>
        @error('name')
            <br />
            <small>*{{$message}}</small>
            <br />
        @enderror

        <br />
        <label for="">
            Descripcion:<br/>
            <textarea type="text" name="descripcion" rows="5">{{old('descripcion')}}</textarea>
        </label>
        @error('descripcion')
            <br />
            <small>*{{$message}}</small>
            <br />
        @enderror

        <br />

        <label for="">
            Categoria:<br/>
            <input type="text" name="categoria" value="{{old('categoria')}}"/>
        </label>
        @error('categoria')
            <br />
            <small>*{{$message}}</small>
            <br />
        @enderror

        <br/>
        <button type="submit">Enviar Formulario</button>
    </form>
@endsection
 