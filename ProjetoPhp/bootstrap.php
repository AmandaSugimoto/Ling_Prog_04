<?php

require_once __DIR__.'/vendor/autoload.php';

//Aqui a gente recupera o que o usuário digitou e qual 
//método HTTP ele utilizou
$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['PATH_INFO'];

//Instanciar classe Router
$router = new Router($method, $path);

//ADICIONAR AS ROTAS VÁLIDAS ABAIXO

$router->get('/ola-mundo', function(){
    return "Olá Mundo!";
});

$router->get('/exemplo', 'Aluno\Aula0405\Controller\ExercicioController::exibir');

$router->post('/exemplo-resultado', 'Aluno\Aula0405\Controller\ExercicioController::exibirResultado');

$router->get('/cliente/novo', 'Aluno\Aula0405\Controller\ClientesController::abrirFormularioInserir');

$router->post('/cliente/inserir', 'Aluno\Aula0405\Controller\ClientesController::inserirCliente');

$router->get('/clientes', 'Aluno\Aula0405\Controller\ClientesController::abrirListaClientes');

$router->get('/cliente/alterar/{id}', 'Aluno\Aula0405\Controller\ClientesController::abrirFormularioAlterar');

$router->post('/cliente/editar/{id}', 'Aluno\Aula0405\Controller\ClientesController::editarCliente');

$router->get('/cliente/excluir/{id}', 'Aluno\Aula0405\Controller\ClientesController::excluirCliente');

//ADICIONAR AS ROTAS VÁLIDAS ACIMA

$result = $router->handler();

if (!$result){
    http_response_code(404);
    echo "Página não encontrada";
    die();
}

echo $result($router->getParams());