<?php
$github_ips = array('207.97.227.253, 50.57.128.197, 108.171.174.178, 50.57.231.61, 204.232.175.64, 192.30.252.0');

if(in_array($_SERVER['REMOTE_ADDR'], $github_ips)) {
    `git pull`;
    echo 'Done.';
} else {
    header('HTTP/1.1 404 Not Found');
    echo '404 Not Found.';
    exit;
}
