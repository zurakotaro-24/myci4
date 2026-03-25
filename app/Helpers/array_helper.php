<?php 

function getRandom(array $array)
{
    shuffle($array);
    return $array;
}

function randomString()
{
    return substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'), 0, 10);
}