<?php

$conn = mysqli_connect('localhost','root','','wen');

if(!$conn){
    echo 'error' . mysqli_connect_error();
}
 