<?php
//jika tidak ada session, maka jalankan session
if( !session_id()) session_start();
//boostraping
require_once '../app/init.php';

$app = new App;