<?php 

//echo shell_exec('whoami 2>&1');


//echo shell_exec('git config --global --add safe.directory C:/inetpub/wwwroot 2>&1');


echo shell_exec('cd C:\inetpub\wwwroot && git config --global --add safe.directory C:/inetpub/wwwroot && git status 2>&1');

?>