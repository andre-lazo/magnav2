@extends('navbar_user')
<style>
    body{
      font-family:'Titillium Web', sans-serif;
      font-weight: bold;
      
    }
    #dato:hover{
      background-color:gray;
      color: white;
      font-size: 17px;
    }
    #r:hover{
      background-color: orange;
      color: white;
      font-size: 17px;
    }
  </style>
@section('content')
    <section class="mt-5 ">
      <div class="ml-4 pt-5 " >
        <h1 >Reporte de alicuotas del Usuario: {{$alicuota->nombre}} {{$alicuota->apellido}}</h1>
      </div>
    <div class="row">
      
      <div class="col-xs-12 col-lg-6 mt-5">
        
        <img src="img/businessman-3213659_1920.jpg" class="mx-auto"  width="100%" height="100%"></div>
      <div class="col-xs-12 col-lg-3 mt-5 ">
        <label class="text-center card   p-1" style="border-color: orange;" id="r" >ULTIMA ACTUALIZACION - -> </label>
      
         <label class="text-center card   p-1" style="border-color: orange;" id="r" >ID VILLA - -> </label>
         <label class="text-center card   p-1" style="border-color: orange;" id="r" >PROPIETARIO - -> </label>
         <label class="text-center card   p-1" style="border-color: orange;" id="r" >CEDULA - -> </label>
         <label class="text-center card   p-1" style="border-color: orange;" id="r" >FECHA INICIO - -> </label>
         <label class="text-center card   p-1" style="border-color: orange;" id="r" >FECHA_FINAL  - -> </label>
         <label class="text-center card   p-1" style="border-color: orange;" id="r" >CUOTAS TOTALES - -> </label>
         <label class="text-center card   p-1" style="border-color: orange;" id="r" >VALOR TOTAL - -> </label>
         <label class="text-center card   p-1" style="border-color: orange;" id="r" >CUOTAS PAGADAS - -> </label>
         <label class="text-center card   p-1" style="border-color: orange;" id="r" >VALOR PAGADO - -> </label>
         <label class="text-center card   p-1" style="border-color: orange;" id="r" >CUOTAS ADEUDADAS - -> </label>
         <label class="text-center card   p-1" style="border-color: orange;" id="r" >VALOR ADEUDADO - -> </label>
       
      </div>
      <div class="col-xs-12 col-lg-3 mt-5">
        <label class="text-center card p-1" id="dato">{{$alicuota->updated_at}}</label>

          <label class="text-center card p-1" id="dato">{{$alicuota->cod_MnzV}}</label>
          <label class="text-center card p-1" id="dato">{{$alicuota->nombre}} {{$alicuota->apellido}}</label>
          <label class="text-center card p-1" id="dato">{{$alicuota->cedula}}</label>
          <label class="text-center card p-1" id="dato">{{$alicuota->fecha_inicio}}</label>
          <label class="text-center card p-1" id="dato">{{$alicuota->fecha_final}}</label>
          <label class="text-center card p-1" id="dato">{{$alicuota->cuotas_totales}}</label>
          <label class="text-center card p-1" id="dato">{{$alicuota->valor_total}}</label>
          <label class="text-center card p-1" id="dato">{{$alicuota->cuotas_pagadas}}</label>
          <label class="text-center card p-1" id="dato">{{$alicuota->valor_pagado}}</label>
          <label class="text-center card p-1" id="dato">{{$alicuota->cuotas_adeudadas}}</label>
          <label class="text-center card p-1" id="dato">{{$alicuota->valor_adeudado}}</label>

      
       </div>
    </div>
   
  
@endsection