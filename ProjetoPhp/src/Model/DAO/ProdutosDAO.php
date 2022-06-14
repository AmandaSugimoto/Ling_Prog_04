<?php

namespace Aluno\Aula0405\Model\Entity\Produtos;

use Aluno\Aula0405\Controller\ProdutosController;

class ProdutosDAO{
    public function inserir(Produtos $p){
        try{
            $sql = "INSERT INTO `produtos`(`nome`, `descricao`, `valor`) VALUES (:nome, :descricao, :valor)";
        } catch(\Exception $e){
            return false;
        }
    }
    public function alterar(Produtos $p){
        try{
            $sql = "UPDATE `produtos` SET `nome`=:nome, `descricao`=:descricao, `valor`=:valor WHERE id = :id";
        } catch(\Exception $e){
            return false;
        }
    }
    public function excluir($id){
        try{
            $sql = "DELETE FROM `produtos` WHERE id = :id";
        } 
        catch(\Exception $e){
            return false;
        }
    }
    public function consultar(){
        try{
            $sql = "SELECT * from produtos";
        } 
        catch(\Exception $e){
            return false;
        }
    }
    public function consultarPorId($id){
        try{
            $sql = "SELECT * from produtos WHERE id = :id";
        } catch(\Exception $e){
            return false;
        }
    }
}