    <?php session_start();?>
    <div style="float:left">

    <img id="receiver" style="width:320px;height:240px"/>
        <input type="text" id="gua">
        <input type="button" id="sub" value="送">
    <script type="text/javascript" charset="utf-8">
        var receiver_socket = new WebSocket("ws://127.0.0.1:8008");
        var id = document.getElementById('id');
        var image = document.getElementById('receiver');
        receiver_socket.onmessage = function(data)
        {
            image.src=data.data;
            image.val=data.id;
        }

    </script>
        <script src="/zb/frontend/web/assets/3f5180dd/jquery-1.8.3.min.js"></script>
        <script>
            var id = $('#gua').val();
           $(document).on('click','#sub',function () {

             id.onmessage = function (data){
                 image.val=data.id;
             }


           })
        </script>

    