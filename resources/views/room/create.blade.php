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
            <form action="{{Route('room.store')}}" method="POST">
                @csrf
                    <div class="card-header">
                    <strong>Escriba el nombre de la nueva habitación</strong><a
                        href="{{Route('room.create')}}"></a>
                    </div>
                    <div class="card-body form-group">                    
                        <label>Nombre</label>
                        <input type="text" name="room_name" class="form-control" />
                    </div>
                    <div class="card-header">
                        <strong>Escriba los precios correspondientes</strong>
                    </div>                  
                    <div class="card-body form-group">
                        <label>Precio de la nueva habitación</label>
                        <input type="text" name="room_price" class="form-control" />
                        <label>Precio del desayuno</label>
                        <input type="text" name="breakfast_price" class="form-control" />
                        <label>Precio por mascota</label>
                        <input type="text" name="pet_price" class="form-control" />
                    </div>
                    
                    <div class="card-footer">
                        <input type="submit" value="Crear" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection