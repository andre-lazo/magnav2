<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN MG</title>
    <link rel="shortcut icon" href="{{asset('img/magna.jpeg')}}" type="image/jpeg">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="{{asset('js/jquery-3.5.1.js')}}" ></script>
    <link rel="stylesheet" href="{{asset('fonts/style.css')}}">
    <link rel="stylesheet" href="{{url('plugins/fontawesome-free/css/all.min.css')}}">
    <script src="{{asset('css/bootstrap.min.js')}}" ></script>
    
    @yield('scripts')
 <style>
   .flotar{
     margin-left: 620px;
   }
   .content{
     margin-top: 120px;
   }
 </style>
 
</head>
<body>
   <div class="container-fluid">
    <nav  class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top ">
      <a class="navbar-brand" href="#"><img src="{{asset('img/magna.jpeg')}}" class="mr-2" style="height: 30px; width: 30px; border-radius: 50%;" alt="">MAGNA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
         
          <li class="nav-item active ml-3">
            <a class="nav-link" href="{{route('user.index')}}">Administracion de Usuarios</a>
          </li>
          <li class="nav-item active ml-3">
            <a class="nav-link" href="{{route('noticia.index')}}">Noticias</a>
          </li>
          <li class="nav-item active ml-3">
            <a class="nav-link" href="{{route('alicuota.index')}}">Alicuotas</a>
          </li>
          <li class="nav-item active ml-3">
            <a class="nav-link" href="{{route('reserva.index')}}">Reservas</a>
          </li>
         <li class="flotar nav-item active" >
          <form class="nav-link" method="POST" action="{{ route('logout') }}">
            @csrf

            <x-jet-responsive-nav-link class="text-white" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                {{ __('Cerrar Sesion') }}
            </x-jet-responsive-nav-link>
        </form>
         </li>
        </ul>
       
      </div>
     
    </nav>
   </div>

  

      <section class="content">
      <div class="container">
      @yield('content')
      </div>
      </section>
      <center>
        <footer class="lead bg-dark text-white mt-5 p-5" width="100%" >
         Correo electrónico: aso.magnavillaclub@gmail.com <br> 
         Teléfono administración Magna:‎ +593 4-275-3351. <br>
         Teléfono Garita Magna: +593 4-275-3361. <br>
         Celular Garita Magna: +593 99 989 6250.  
       </footer></center>
</body>
</html>