<?php

if (!session_id()) session_start();
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/core/App.php';
require_once __DIR__ . '/core/Controller.php';
require_once __DIR__ . '/core/Database.php';