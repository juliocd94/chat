<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
  </head>
  <body>
  <x-app-layout>
    <x-slot name="header">
      <a class="font-semibold text-xl text-gray-800 leading-tight" href="/search">Buscador</a>
      <a class="font-semibold text-xl text-gray-800 leading-tight active" href="/chat">Chat</a>
       
    </x-slot>
        
        <div class="container">
          <div class="mt-2">

          <!-- SEARCH -->
          <form action="{{ route('dashboard.index') }}" method="get">
              <input class="form-control" type="text" name="texto">
              <button class="btn btn-primary mt-2">Buscar</button>
          </form>

          <h2 class="mt-5 mb-4"><b>RESULTADO DE LA BUSQUEDA:</b> </h2>

          <ul>
            <li><b>Nombre: </b>{{ $user[0]->name }}</li>
            <li><b>Profesión: </b>{{ $user[0]->name }}</li>
          </ul>

          <!-- <a href="">

            <button class="btn btn-primary mt-2">Iniciar chat con {{$user[0]->name }}</button>
          </a> -->
          <button class='btn btn-primary' 
          onclick ="window.location.href='{{ Route('chat', $user[0]->id) }}'">Iniciar chat con {{$user[0]->name }}
          </button>
          



          </div>
            
        </div>
        
    </div>
    

    
    </x-app-layout>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>