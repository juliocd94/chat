<div class="mt-3">
    <h3>Lista de mensajes:</h3>
    
    @foreach($messages as $message)
        <li>1{{$message["nombre"]}} - {{$message["message"]}}</li>
    @endforeach

    <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('edb5d677de46a53ca9e1', {
    cluster: 'us2'
    });

    var channel = pusher.subscribe('for-zebra-602');
    channel.bind('chat-event', function(data) {
    alert(JSON.stringify(data));
    });
    </script>
</div>
