<?php

session_start();

// unset() remove indices do array não da erro se não existir

// session_destroy() destroi tudo

session_destroy();
header('Location: index.php');