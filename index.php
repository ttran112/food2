<?php
/**
 * create a food order form
 */

//turn on error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

//require the autoload file
require_once ('vendor/autoload.php');

//create an instance of th Base class
$f3 = Base::instance();
//turn on Fat-Free error reporting
$f3 -> set('DEBUG',3);

//default root (home page)
$f3 -> route('GET /', function ()
{
    echo "home page";
    //$view = new Template();
    //echo $view -> render('views/home.html');
});

//define order route
$f3 -> route('GET /order', function ()
{
//    $view = new Template();
//    echo $view -> render('views/home.html');
    echo "order 1";
});

//define order2
$f3 -> route('GET /order2', function ()
{
    echo "order 2";
//    $view = new Template();
//    echo $view -> render('views/home.html');
});

//define summary route
$f3 -> route('GET /summary', function ()
{
    echo "summary";
//    $view = new Template();
//    echo $view -> render('views/home.html');
});

//run fat free
$f3 -> run();

