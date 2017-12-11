    <?php session_start();?>
    <div style="float:left">
    <img id="receiver" style="width:320px;height:240px"/>
    <script type="text/javascript" charset="utf-8">
        var receiver_socket = new WebSocket("ws://127.0.0.1:8008");
        var image = document.getElementById('receiver');
        receiver_socket.onmessage = function(data)
        {
            image.src=data.data;
        }
    </script>