@extends('layouts.plantilla')

@section('title', 'Cursos edit')

@section('content')
    <h1>En esta pagina podra editar un curso</h1>
    <form action="{{route('cursos.update', $curso)}}" method="post">

        @csrf
        @method('put')

        <label for="">
            Nombre:<br/>
            <input type="text" name="name" value="{{old('name',$curso->name)}}"/>
        </label>
        @error('name')
        <br />
        <small>*{{$message}}</small>
        <br />
        @enderror
        <br />

        <label for="">
            Descripcion:<br/>
            <textarea type="text" name="descripcion" rows="5">{{old('descripcion',$curso->descripcion)}}</textarea>
        </label>
        @error('descripcion')
        <br />
        <small>*{{$message}}</small>
        <br />
        @enderror
        <br />
        <label for="">
            Categoria:<br/>
            <input type="text" name="categoria" value="{{old('categoria', $curso->categoria)}}"/>
        </label>
        @error('categoria')
        <br />
        <small>*{{$message}}</small>
        <br />
    @enderror
        <br/>
        <button type="submit">Actualizar Formulario</button>
    </form>
@endsection
