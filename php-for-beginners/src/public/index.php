<?php

$heading = "Home";

function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

require "functions.php";
require "views/index.view.php";
