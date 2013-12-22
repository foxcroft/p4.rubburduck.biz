<?php

$_POST['created']  = Time::now();

DB::instance(DB_NAME)->insert('games',$_POST);

echo "Your post was added";