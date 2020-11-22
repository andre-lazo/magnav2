@extends('navbar')

@section('content')
<div class="row" >
    <div class="col-xs-12 col-lg-6 pt-5 mt-5" >
        <img src="{{asset('img/magna.jpeg')}}" width="100%" alt="">
    </div>
    <div class="col-xs-12 col-lg-6"> 
      <div>
        @if($errors->any())
        <div class="alert alert-danger font-weight-bold">
           
            <h4>Errores al Editar Usuario</h4>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                <ul>
                  @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                  @endforeach
                </ul>
        </div>
      @endif
    </div>
        <center><h2 class="mt-3">Usuario: {{$alicuota->nombre}}</h2></center>
        <h1 class=" text-center mb-5 mt-2">FORMULARIO DE ACTUALIZACION</h1>
        
 
        <form action="{{ route('alicuota.update', $alicuota->id) }}" method="POST" class="mx-auto" enctype="multipart/form-data" style="max-width: 20rem">
            @method('PATCH')
            @csrf
      
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Residencia:</label>
                <select name="residencia" class="form-control">
                  <option value="{{$alicuota->cod_MnzV}}">{{$alicuota->cod_MnzV}}</option>
                  @foreach ($residencias as $residencia)
                  <option value="{{$residencia->residencia_id}}">{{$residencia->residencia_id}}</option>
                  @endforeach
                </select>
              
             
                <label for="message-text" class="col-form-label">Propietario:</label>
                <select name="propietario" class="form-control">
                  <option value="{{$alicuota->nombre}}-{{$alicuota->apellido}}-{{$alicuota->cedula}}">{{$alicuota->nombre}}-{{$alicuota->apellido}}-{{$alicuota->cedula}}</option>
                  @foreach ($usuarios as $usuario)
                  <option value="{{$usuario->name}}-{{$usuario->apellido}}-{{$usuario->cedula}}">{{$usuario->name}}-{{$usuario->apellido}}-{{$usuario->cedula}}</option>
                  @endforeach
                </select>
                <label for="message-text" class="col-form-label">Fecha inicio:</label>
                <input type="date" value="{{$alicuota->fecha_inicio}}" name="fecha_inicio" class="form-control" id="recipient-name">
                <label for="message-text"  class="col-form-label">Fecha fin:</label>
                <input type="date" value="{{$alicuota->fecha_final}}"  name="fecha_fin" class="form-control" id="recipient-name">
                <label for="message-text"  class="col-form-label">Cuotas totales:</label>
                <input type="text" value="{{$alicuota->cuotas_totales}}" name="cuotas_totales" class="form-control" id="recipient-name">
                <label for="message-text" class="col-form-label">Valor total:</label>
                <input type="text" value="{{$alicuota->valor_total}}"  name="valor_total"  class="form-control" id="recipient-name">
                <label for="message-text" class="col-form-label">Cuotas pagadas:</label>
                <input type="text" value="{{$alicuota->cuotas_pagadas}}" name="cuotas_pagadas"  class="form-control" id="recipient-name">
                <label for="message-text" class="col-form-label">Valor pagado:</label>
                <input type="text" value="{{$alicuota->valor_pagado}}" name="valor_pagado"  class="form-control" id="recipient-name">
                <label for="message-text" class="col-form-label">Cuotas adeudadas:</label>
                <input type="text" value="{{$alicuota->cuotas_adeudadas}}" name="cuotas_adeudadas"  class="form-control" id="recipient-name">
                <label for="message-text" class="col-form-label">Valor Adeudado:</label>
                <input type="text" value="{{$alicuota->valor_adeudado}}" name="valor_adeudado"  class="form-control" id="recipient-name">
              </div>
             
              <button type="submit" class="btn btn-primary"><i class="fas fa-save"> Guardar</i></button>
              <button type="reset" class="btn btn-danger"><i class="fas fa-window-close"> Cancelar</i> </button>
      
            </form>
      
    </div>
</div>

@endsection