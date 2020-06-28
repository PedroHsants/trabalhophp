<?php

function consultabanco ($sql) {
$MySQL = array(
        'servidor' => 'localhost',    // Endereco do servidor
        'usuario' => 'root',            // Usuario
        'senha' => '',                         // Senha
        'banco' => 'test'            // Nome do banco de dados
);

$MySQLi = new MySQLi($MySQL['servidor'], $MySQL['usuario'], $MySQL['senha'], $MySQL['banco']);

// Verifica se ocorreu um erro e exibe a mensagem de erro
if (mysqli_connect_errno())
    trigger_error(mysqli_connect_error(), E_USER_ERROR);

 // Executa a consulta OU mostra uma mensagem de erro
$resultado = $MySQLi->query($sql) OR trigger_error($MySQLi->error, E_USER_ERROR);

return $resultado;

} 