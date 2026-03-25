<?php

function alertMessage($message)
{
    $alertMessage = "<script>alert('" . $message . "');</script>";
    echo $alertMessage;
}