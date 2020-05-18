@extends('layouts.app')

<style>
    body {
        margin: 25%;
    }
    .my-container {
        border: 2em;
        flex-direction: column;
        justify-content: center;
    }
    .my-rowheader {
        margin-bottom: 1em;
        background-color: gray;
        color: whitesmoke;
        font-weight: bold;
    }
    .my-row {
        padding: .3%;
    }
    .my-row:nth-child(even){
        background: lightgray;
    }
    .my-card {
        background-color: gray;
        padding: 4px;
    }
    
</style>

@section('content')
<div>
    <div class="container my-container">
        <div class="card-header">
            <h2>Lista de habitaciones <a href="{{Route('room.create')}}" class="btn btn-primary">Añadir una habitación</a>
                <a href="{{Route('client.index')}}" class="btn btn-secondary">Administrador de reservas</a>
            </h2>
            <div class="row my-rowheader">
                <div class="col-4">Nombre de la habitación</div>
                <div class="col-2">Precio habitación</div>
                <div class="col-2">Precio desayuno</div>
                <div class="col-2">Precio mascota</div>
                <div class="col-2">Acción</div>
            </div>   
                @foreach($rooms as $room)
                <div class="row my-row">
                <div class="col-4">
                    {{$room->room_name}} 
                </div>
                <div class="col-2">
                    {{$room->room_price}}
                </div>
                <div class="col-2">
                    {{$room->breakfast_price}}
                </div>
                <div class="col-2">
                    {{$room->pet_price}}
                </div>
                <div class="col-1">
                    <form action="{{route('room.update',$room->id)}}" method="POST">
                        @csrf
                        @method('update')
                        <a href="{{route('room.edit',$room->id)}}" class="btn btn-xs btn-secondary">Editar</a>
                    </form>
                </div>
                <div class="col-1">
                    <form action="{{route('room.destroy',$room->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" class="btn btn-xs btn-danger">
                    </form>
                </div>
            </div>
                @endforeach
            
        </div>
    </div>
</div>
@endsection