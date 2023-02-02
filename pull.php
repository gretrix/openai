<?php 

echo shell_exec('cd C:\inetpub\wwwroot && git config --global --add safe.directory C:/inetpub/wwwroot && git status 2>&1');

?>