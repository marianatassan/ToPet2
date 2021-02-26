<?php

function getConexao() {
    $hostname = 'localhost';
    $database = 'bd_topet';
    $username = 'postgres';
    $password = 'mariana';
    $connstring = "host=$hostname dbname=$database user=$username password=$password";
    return pg_connect($connstring);
}

?>