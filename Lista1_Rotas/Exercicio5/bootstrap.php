<?php

require_once __DIR__.'/vendor/autoload.php';

    //Aqui a gente recupera o que o usuário digitou e qual método HTTP ele utilizou

    $method = $_SERVER['REQUEST_METHOD'];
    $path = $_SERVER['PATH_INFO'];

    //Instanciar classe Router
    $router = new \Aluno\Aula0405\Router($method, $path);

    //Adicionar as rotas válidas abaixo

    $router->get('/ola-mundo', function(){
        return "Olá mundo!";
    });

    $router->get('/exemplo', 'Aluno\Aula0405\Controller\Lista1RotasController::exibir');

    $router->post('/exer5-resultado', 'Aluno\Aula0405\Controller\Lista1RotasController::exibirResultado');


    //Adicionar as rotas válidas acima

    $result = $router->handler();

    if (!$result){
        http_response_code(404);
        echo "Página não encontrada";
        die();
    }

    echo $result($router->getParams());