<script>
    var path = window.location.origin.replace(window.location.protocol, '') + ':8080' + window.location.pathname.replace(/index.php.*$/, ''),
        host = "ws://" + path + "/socket.php",
        socket;
    try {
      socket = new WebSocket(host);
      console.log('WebSocket - status ' + socket.readyState);
      socket.onopen    = function(msg){ console.log("Welcome - status " + this.readyState); };
      socket.onmessage = function(msg){ console.log("Received: " + msg.data); };
      socket.onclose   = function(msg){ console.log("Disconnected - status " + this.readyState); };
    }
    catch(ex){ console.log(ex); }
</script>
<?php

echo 'INDEX';
