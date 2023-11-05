<?php
$conn  = mysqli_connect('localhost', 'root', 'root', 'win');

if(!$conn)
{
    echo 'Error' . mysqli_connect_error;
}