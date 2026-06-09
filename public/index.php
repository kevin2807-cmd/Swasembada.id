<?php
if( !session_id() ) {
    session_start();
}

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../app/core/App.php';
require_once __DIR__ . '/../app/core/Controller.php';

$app = new App();