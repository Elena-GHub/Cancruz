@extends('admin.adminnav')

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
    <div class="container">
        <div class="card">
            <form action="{{Route('room.update',$room->id)}}" method="POST">
                @csrf
                @method('put')
                    <div class="card-header">
                        <strong>Escriba el nuevo nombre de la habitación</strong>
                    </div>
                    <div class="card-body form-group">
                        <label>Nuevo nombre</label>
                        <input type="text" name="room_name" class="form-control" value="{{$room->room_name}}" />
                    </div>
                    <div class="card-header">
                        <strong>Actualice los precios pertinentes</strong>
                    </div>
                    <div class="card-body form-group">
                        <label>Precio de la habitación</label>
                        <input type="text" name="room_price" class="form-control" value="{{$room->room_price}}" />
                    </div> 
                    <div class="card-body form-group">
                        <label>Precio del desayuno por persona</label>
                        <input type="text" name="breakfast_price" class="form-control" value="{{$room->breakfast_price}}" />
                    </div>                   
                    <div class="card-body form-group">
                        <label>Precio por mascota</label>
                        <input type="text" name="pet_price" class="form-control" value="{{$room->pet_price}}" />
                    </div>
                    <div class="card-footer">
                        <input type="submit" value="Actualizar" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection