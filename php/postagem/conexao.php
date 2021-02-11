<?php
function getConexao() {
    $hostname = 'localhost';
    $database = 'topet_banco';
    $username = 'root';
    $password = '';
    return mysqli_connect("$hostname", "$username", "$password", "$database");
}
?>