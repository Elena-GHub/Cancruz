@extends('layouts.app')

@section('content')
<style>
    h1{
        margin-top: 50px;
    }
    .invalid-feedback{
        color: red;
    }
</style>
<div class="banner agileits w3layouts">
    <img src="images/banner.jpg" alt="Agileits W3layouts">
    <h1 class="wow agileits w3layouts fadeInDown">¿TIENES UNA DUDA?</h1>
</div>
<div>
    <h1>CONTACTANOS</h1>
</div>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @if(Session::has('flash_message'))
                    <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
                @endif
                <form method="post" action="{{route('Contactanos.store')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input type="text" class="form-control" name="name">
                        @if ($errors->has('name'))
                            <small class="form-text invalid-feedback">{{$errors->first('name')}}</small>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="text" class="form-control" name="email">
                        @if ($errors->has('email'))
                            <small class="form-text invalid-feedback">{{$errors->first('email')}}</small>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Consulta:</label>
                        <textarea name="message" class="form-control"></textarea>
                        @if ($errors->has('message'))
                            <small class="form-text invalid-feedback">{{$errors->first('message')}}</small>
                        @endif

                        <button class="btn btn-info">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>




@endsection
