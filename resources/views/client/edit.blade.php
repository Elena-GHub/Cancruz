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
                                <label class="my-secondItem">Nº de huéspedes:</label>
                                <input type="text" name="guests" class="form-control" value="{{$client->guests}}" />
                            </div>
                            </div>
                        </div>

                        <div class="card-columns">
                            <div class="card-body form-group">
                                <div class="card my-card bg-secondary">
                                    <div class="book-pag wow agileits w3layouts slideInLeft">
                                        <label>Estancia:</label><br>
                                        <div class="book-pag-frm1 agileits w3layouts wow slideInLeft">
                                            <label>Fecha de entrada</label>
                                            <input class="date agileits w3layouts" id="datepicker1" type="date" name="check_in_date"  value="Entrada" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
                                        </div>
                                        <div class="book-pag-frm2 wow agileits w3layouts slideInLeft">
                                            <label>Fecha de salida</label>
                                            <input class="date agileits w3layouts" id="datepicker2" type="date" name="check_out_date"  value="Salida" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body form-group">
                                <div class="card my-card bg-secondary">
                                    <label>Extras:</label><br>
                                    <input type="hidden" name="pet" value="0" />
                                    <input type="checkbox" name="pet" value="1" <?php if($client->pet == "Sí") echo "checked"; ?>/>
                                    <label class="w3-validate">Mascota</label><br>
                                    <input type="hidden" name="breakfast" value="0" />
                                    <input type="checkbox" name="breakfast" value="1" <?php if($client->breakfast == "Sí") echo "checked"; ?>/>
                                    <label class="w3-validate">Desayuno</label>
                                </div>
                            </div>
                            <div class="card-body form-group">
                                <div class="card my-card bg-secondary">
                                    <label>Comentarios:</label>
                                <input type="text" name="comments" class="form-control" value="{{$client->comments}}" />
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