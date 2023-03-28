<?php
$conn = new mysqli('localhost','root','','task');

// checking connection
if(!$conn){
    echo 'Connection error';
}