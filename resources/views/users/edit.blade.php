@extends('navbar')

@section('content')
<div class="row" >
    <div class="col-xs-12 col-lg-6" >
        <img src="{{asset('img/magna.jpeg')}}" width="100%" alt="">
    </div>
    <div class="col-xs-12 col-lg-6"> 
      
        <center><h2 class="mt-3">Usuario: {{$user->name}}</h2></center>
        <h1 class=" text-center mb-5 mt-2">FORMULARIO DE ACTUALIZACION</h1>
        
 
    <form action="{{ route('user.update', $user->id) }}" method="POST" class="mx-auto" enctype="multipart/form-data" style="max-width: 20rem">
        @method('PATCH')
        @csrf
  
          <div class="form-group">
           <center> <label for="exampleInputEmail1"><i class="far fa-user"></i> NOMBRE</label></center>
            <input  type="text" class="form-control" value="{{$user->name}}" name="name" placeholder="ingrese su nombre">
            <center> <label for="exampleInputEmail1" class="mt-2"><i class="far fa-user"></i> APELLIDO</label></center>
            <input  type="text" class="form-control" value="{{$user->apellido}}" name="apellido" placeholder="ingrese su nombre">

          </div>
         
          <div class="form-group">
           <center> <label for="email"><i class="far fa-envelope"></i> Email </label></center>
            <input type="email" class="form-control" value="{{$user->email}}" name="email" placeholder="ingrese su email" >
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <center> <label ><i class="fas fa-id-card"></i> Cedula </label></center>
             <input maxlength="10" value="{{$user->cedula}}" type="text" class="form-control" name="cedula" placeholder="ingrese numero de cedula" >
           </div>
           <div class="form-group">
            <center> <label ><i class="fas fa-house-user"></i> Codigo de Residencia </label></center>
             <select name="residencia"  class="form-control">
              <option value="{{$user->residencia_id}}">{{$user->residencia_id}}</option>
               @foreach ($residencias as $residencia)
               <option value="{{$residencia->residencia_id}}">{{$residencia->residencia_id}}</option>
               @endforeach
             </select>
           </div>
          <div class="form-group">
           <center> <label for="password"><i class="fas fa-unlock-alt"></i> Password</label></center>
            <input type="password" class="form-control" name="password">
          </div>
          <div class="form-group">
          <center>  <label for="password"><i class="fas fa-unlock-alt"></i> Confirme Password</label></center>
            <input type="password" class="form-control" name="password_confirmation">
          </div>
          
         
          <button type="submit" class="btn btn-primary"><i class="fas fa-save"> Guardar</i></button>
          <button type="reset" class="btn btn-danger"><i class="fas fa-window-close"> Cancelar</i> </button>
  
        </form>
      
    </div>
</div>

@endsection