<?php

function dd($array_name)
{
    echo '<pre>';
    die(var_dump($array_name));

    echo '</pre>';
}


function check_age($age)
{
    if ($age >= 21) {
        dd('allowed');
    } else {
        dd('not allowed');
    }
}
