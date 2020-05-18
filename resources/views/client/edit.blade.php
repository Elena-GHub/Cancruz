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
        padding: 4px;
        color: white;
    }
    .my-secondItem {
        margin-top: 2em;
    }
    
</style>

@section('content')
<div>
    <div class="container">
        <div class="card">
            <form action="{{Route('client.update',$client->id)}}" method="POST">
                @csrf
                @method('put')
                    <div class="card-header col-12 bg-primary my-card">
                        <strong>Actualice los campos pertinentes</strong>
                    </div>
                    <div class="card-columns">
                        <div class="card-body form-group">
                            <div class="card my-card bg-secondary">
                                <label>Nombre:</label>
                                <input type="text" name="first_name" class="form-control" value="{{$client->first_name}}" />
                                <label class="my-secondItem">Apellido(s):</label>
                                <input type="text" name="last_name" class="form-control" value="{{$client->last_name}}" />
                            </div>
                        </div>
                        <div class="card-body form-group">
                            <div class="card my-card bg-secondary">
                                <label>Correo electrónico:</label>
                                <input type="text" name="email" class="form-control" value="{{$client->email}}" />
                                <label class="my-secondItem">Teléfono:</label>
                                <input type="text" name="phone_number" class="form-control" value="{{$client->phone_number}}" />
                            </div>
                        </div>
                        <div class="card-body form-group">
                            <div class="card my-card bg-secondary">
                                <label>Habitación:</label>
                                    <select name="room_id" class="form-control" />
                                    <optgroup label="actual: {{$client->room->room_name}}">
                                        @foreach ($rooms as $room)
                                        <option value="{{ $room['id'] }}">{{ $room['room_name'] }}</option>
                                        @endforeach
                                    </select>
                                <label class="my-secondItem">Comentarios:</label>
                                <input type="text" name="comments" class="form-control" value="{{$client->comments}}" />
                            </div>
                            </div>
                        </div>
                        <div class="card-body form-group">
                            <div class="card my-card bg-secondary">
                                <label>Extras:</label>
                                <div>
                                    <input type="checkbox" name="pet" value="{{$client->pet}}" <?php if($client->pet == "Sí") echo "checked"; ?>/>
                                    <label class="w3-validate">Mascota</label>
                                    <input type="checkbox" name="breakfast" value="{{$client->breakfast}}" <?php if($client->breakfast == "Sí") echo "checked"; ?>/>
                                    <label class="w3-validate">Desayuno</label>
                                </div>
                                
                            </div>
                        </div>                    
                              
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