<?php
// trocando os textos
str_replace('***:', '***', $_POST['titulo']);
str_replace('***:', '***', $_POST['categoria']);
str_replace('***:', '***', $_POST['descricao']);
// escrevendo texto
$texto = $_POST['titulo'] . ' ***: ' . $_POST['categoria'] . ' ***: ' . $_POST['descricao'] . PHP_EOL;

// abrindo o arquivo
$arquivo = fopen('arquivo.txt', 'a');

// escrevendo o texto no arquivo
fwrite($arquivo, $texto);
// fechando o arquivo
fclose($arquivo);

header('Location: abrir_chamado.php');

