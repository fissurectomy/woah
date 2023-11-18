<?php

$userAgent = $_SERVER['HTTP_USER_AGENT'];

if ($userAgent === 'Roblox/WinInet') {
    echo 'test';
} else {
    echo 'test 2';
}

?>
