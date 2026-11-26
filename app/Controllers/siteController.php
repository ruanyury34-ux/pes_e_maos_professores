PHP
<?php

class siteController
{
    // Exibe a PÁGINA HOME (inicial)
    public function home()
    {
        // 1- O Controller pede ao Model as informações do site
        $dados = Site::obterDados();

        // 2- Chamar a View
        require __DIR__ . '/../Views/home.php';
    }

    public function contato()
    {
        $dados = Site::obterDados();
        require __DIR__ . '/../Views/contato.php';
    }

    public function naoEncontrada()
    {
        http_response_code(404);
        $dados = Site::obterDados();
        require __DIR__ . '/../Views/404.php'; // ajusta o nome do ficheiro se for outro
    }
}