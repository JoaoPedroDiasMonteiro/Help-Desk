<?php
// escrevendo texto
$texto = '***TÍTULO***: ' . $_POST['titulo'] . ' ***CATEGORIA***: ' . $_POST['categoria'] . ' ***DESCRIÇÃO***: ' . $_POST['descricao'] . PHP_EOL;

// abrindo o arquivo
$arquivo = fopen('arquivo.txt', 'a');

// escrevendo o texto no arquivo
fwrite($arquivo, $texto);
// fechando o arquivo
fclose($arquivo);

header('Location: abrir_chamado.php');

