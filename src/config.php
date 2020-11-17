<?php
    require('rcon.php');
    require('settings/setting.php');

    $host = $rhost;
    $port = $rport;
    $pass = $rpass;
    $tOut = 5;

    $rcon = new Rcon($host, $port, $pass, $tOut);

    if(isset($_POST['mcStart'])){
        echo "Server starting...";
        exec("src/run.sh", $var);
        echo "<pre>".$rcon->getResponse()."</pre>";
    }

    if(!$rcon->connect()){
        echo "Server is offline.";
    }else{
        $rcon->sendCommand($_POST['cmd']);
        echo "<pre>".preg_replace("/§./", "", $rcon->getResponse())."</pre>";
    }
?>