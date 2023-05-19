<?php
require dirname(__DIR__) . "/core/" . "config.php";

spl_autoload_register(function ($classname) {

	require $filename = "../app/models/" . ucfirst($classname) . ".php";
});

require dirname(__DIR__) . "/core/" . 'functions.php';
require dirname(__DIR__) . "/core/" . 'Database.php';
require dirname(__DIR__) . "/core/" . 'Model.php';
require dirname(__DIR__) . "/core/" . 'Controller.php';
require dirname(__DIR__) . "/core/" . 'App.php';
