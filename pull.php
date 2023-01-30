<?php 

$shellExec = shell_exec( 'cd C:\inetpub\wwwroot && git reset --hard HEAD && git pull' ); 

var_dump($shellExec);


?>