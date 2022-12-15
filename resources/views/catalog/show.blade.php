@extends('layouts.master')

@section('menu')
    @parent
    <p>Otro elemento del menú</p>
@endsection

@section('content')

    <div class="row">

        <div class="col-sm-4">

            <a href="{{ url('/catalog/show/' . $id ) }}">
                <img src="{{$pelicula['poster']}}" style="height:200px"/>
            </a>

        </div>
        <div class="col-sm-8">

            <h4>{{$pelicula['title']}}</h4>
            <h6>A&ntilde;o: {{$pelicula['year']}}</h6>
            <h6>Director: {{$pelicula['director']}}</h6>
            <p><strong>Resumen:</strong> {{$pelicula['synopsis']}}</p>
            <p><strong>Estado: </strong>
                @if($pelicula['rented'])
                    Pel&iacute;cula actualmente alquilada.
                @else
                    Pel&iacute;cula en stock.
                @endif
            </p>

            @if($pelicula['rented'])
                <a class="btn btn-danger" href="#">Devolver pel&iacute;cula</a>
            @else
                <a class="btn btn-primary" href="#">Alquilar pel&iacute;cula</a>
            @endif
            <a class="btn btn-warning" href="{{ url('/catalog/edit/' . $id ) }}">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                Editar pel&iacute;cula</a>
            <a class="btn btn-outline-info" href="{{ action('App\Http\Controllers\CatallogController@getIndex') }}">Volver al listado</a>

        </div>
</div>

@endsection