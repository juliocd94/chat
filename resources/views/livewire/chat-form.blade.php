
<div class="m-5">
    <div class="m-5">
        <!-- CHAT -->
        <!-- <p class="inline">{{ auth()->user()->name }}</p> -->
        
        <!-- <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" wire:model="nombre">
            @error("nombre") <small>{{$message}}</small>@enderror
        </div> -->
        @livewire("chat-list")

        <div class="form-group mt-5">
            <label for="message">Message</label>
            <input type="text" class="form-control" id="message" wire:model="message">
            <!-- <p>Aquí: {{$message}}</p> -->
        </div>

        <!-- BOTON ENVIAR -->
        <button class="btn btn-primary" wire:click="enviarMensaje">Enviar</button>

        
        @livewireScripts
    </div>
</div>



