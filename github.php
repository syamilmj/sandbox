<?php

$dir = '/domains/sandbox.aquagraphite.com/html';
exec("cd $dir && git pull git@github.com:sy4mil/sandbox.git");
echo 'Done.';