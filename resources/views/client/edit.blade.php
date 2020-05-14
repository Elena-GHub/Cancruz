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
                                <input type="text" name="first_name" class="form-control" value="{{$client->first_name}}" /><br>
                                <label>Apellido(s):</label>
                                <input type="text" name="last_name" class="form-control" value="{{$client->last_name}}" />
                            </div>
                        </div>
                        <div class="card-body form-group">
                            <div class="card my-card bg-secondary">
                                <label>Correo electrónico:</label>
                                <input type="text" name="email" class="form-control" value="{{$client->email}}" /><br>
                                <label>Teléfono:</label>
                                <input type="text" name="phone_number" class="form-control" value="{{$client->phone_number}}" />
                            </div>
                        </div>
                        <div class="card-body form-group">
                            <div class="card my-card bg-secondary">
                                <label>Habitación:</label>
                                <input type="text" name="room_id" class="form-control" value="{{$client->room_id}}" /><br>
                                <label>Comentarios:</label>
                                <input type="text" name="comments" class="form-control" value="{{$client->comments}}" />
                            </div>
                        </div>
                        <div class="card-body form-group">
                            <div class="card my-card bg-secondary">
                                <label>Extras:</label>
                                <div class="radio-btns agileits w3layouts">
                                    <input type="checkbox" name="pet" value="1" <?php echo ($client->pet == 1) ? 'checked="checked"' : ''; ?>/>
                                    <label class="w3-validate">Mascota</label>
                                    <input type="checkbox" name="breakfast" value="1" <?php echo ($client->breakfast == 1) ? 'checked="checked"' : ''; ?>/>
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