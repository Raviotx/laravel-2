<?php
// router.php - roteador para o servidor embutido do PHP

$requestPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (file_exists(__DIR__ . '/public' . $requestPath)) {
    return false; // serve arquivos estáticos diretamente
}

require __DIR__ . '/public/index.php';
