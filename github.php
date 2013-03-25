<?php
$github_ips = array('207.97.227.253', '50.57.128.197', '108.171.174.178');
 
if(in_array($_SERVER['REMOTE_ADDR'], $github_ips)) {
    $dir = '/domains/sandbox.aquagraphite.com/html';
    exec("cd $dir && git pull git@github.com:sy4mil/sandbox.git");
    echo 'Done.';
}
else {
    header('HTTP/1.1 404 Not Found');
    echo '404 Not Found.';
    exit;
}