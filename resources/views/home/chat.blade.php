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
    </x-slot>
        
        <div class="container mt-5">

        <p class="mb-3">Chat en vivo con: <b>{{$user_contact[0]->name}}</b></p>

        <p class="m-3">Listado de mesnsajes:</p>
        <ul>
            @foreach($messages as $message)
              <li> - {{$message["message"]}}</li>
            @endforeach
        </ul>
           
        <div class="form-group mt-5">
            <label for="message">Message</label>
            <input type="text" class="form-control m-3" id="message" wire:model="message">
            
        </div>

        <!-- BOTON ENVIAR -->
        <button class="btn btn-primary m-3" onclick ="window.location.href='{{ Route('create-mensaje', $user_contact[0]->id)}}'">Enviar</button>
        
        </div>
    

    
    </x-app-layout>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>