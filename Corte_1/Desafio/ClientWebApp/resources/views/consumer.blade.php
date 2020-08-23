@extends('layout')
@section('content')
<h2>Página {{$rows->current_page}} de {{$rows->last_page}}</h2>
<br>
<div class="btn-group" role="group" aria-label="Basic example">
    <a 
    @if ($rows->current_page <= 1)
        class="btn btn-light disabled"
    @else
        class="btn btn-light"
    @endif
    href="{{route('route.index', ['route'=>$rows->first_page_url])}}">Primera página</a>
    <a 
    @if ($rows->prev_page_url == null)
        class="btn btn-warning disabled" href="#"
    @else
        class="btn btn-warning" href="{{route('route.index', ['route' => $rows->prev_page_url])}}"
    @endif
    >Anterior</a>
    <a 
    @if ($rows->current_page == $rows->last_page)
        class="btn btn-primary disabled"
    @else
        class="btn btn-primary"
    @endif 
    href="{{route('route.index', ['route' => $rows->next_page_url])}}">Siguiente página</a>
    <a 
    @if ($rows->current_page == $rows->last_page)
        class="btn btn-danger disabled"
    @else
        class="btn btn-danger"
    @endif 
    
    href="{{route('route.index', ['route' => $rows->last_page_url])}}">Última página</a>
    <a href="{{route('route.csv')}}">Obtener CSV</a>
</div>
<br>
    <table class="table">
        <thead class="bg-danger">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Optional String</td>
                <td>Email</td>
                <td>Fecha 1</td>
                <td>Fecha 2</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($rows->data as $row)
                <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->name}}</td>
                    <td>{{$row->optional_string}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->created_at}}</td>
                    <td>{{$row->updated_at}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
@endsection