<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN MG</title>
    <link rel="shortcut icon" href="{{asset('img/magna.jpeg')}}" type="image/jpeg">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="{{asset('js/jquery-3.5.1.js')}}" ></script>
    <link rel="stylesheet" href="{{asset('fonts/style.css')}}">
    <link rel="stylesheet" href="{{url('plugins/fontawesome-free/css/all.min.css')}}">
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
    <script src="{{asset('css/bootstrap.min.js')}}" ></script>
    
 <style>
   .flotar{
     margin-left: 620px;
   }
 </style>
</head>
<body>
   <div class="container-fluid ">
    <nav  class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top ">
      <a class="navbar-brand" href="#"><img src="{{asset('img/magna.jpeg')}}" class="mr-2" style="height: 30px; width: 30px; border-radius: 50%;" alt="">MAGNA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
         
          <li class="nav-item active ml-3">
            <a class="nav-link" href="{{url('index')}}">Bienvenida</a>
          </li>
          <li class="nav-item active ml-3">
            <a class="nav-link" href="{{url('normas')}}">Normas</a>
          </li>
          <li class="nav-item active ml-3">
            <a class="nav-link" href="{{route('noticia_cliente.index')}}">Noticias</a>
          </li>
         
          <li class="nav-item active ml-3">
            <a class="nav-link" href="{{route('alicuota_cliente.index')}}">Alicuotas</a>
          </li>
        
         
          <li class="nav-item dropdown ml-3">
            <a class="nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Reservas</a>
            <div class="dropdown-menu  bg-dark"> 
            <a class="dropdown-item" href=""><i class="fas fa-swimmer"></i>  Piscinas</a>
              <a class="dropdown-item " href=""><i class="fas fa-gift"></i> Salon de eventos</a>
              <a class="dropdown-item " href=""><i class="fas fa-futbol"></i> Canchas</a>
            </div>
          </li>
        
         <li class="flotar nav-item dropdown  active">
          <a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->email}}</a>
          <div class="dropdown-menu bg-dark"> 
            <a class="dropdown-item " href="{{route('user_cliente.show',Crypt::encrypt(Auth::user()->id))}}"><i class="fas fa-futbol"></i>Perfil</a>
            <form class="nav-link" method="POST" action="{{ route('logout') }}">
              @csrf
  
              <x-jet-responsive-nav-link class="text-white" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                          this.closest('form').submit();">
                  {{ __('Cerrar Sesion') }}
              </x-jet-responsive-nav-link>
          </form>
          </div>
        </li>
        </ul>
       
      </div>
     
    </nav>
   </div>
      <section class="content mt-5">
      @yield('content')
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