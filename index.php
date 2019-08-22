<?php

/*
    FATAL ERROR: erro que interrompe a aplicação
*/

use ItemVenda\ItemVenda;
use Venda\Venda;
use VendaException\VendaException;

require_once "Venda.php";
require_once "ItemVenda.php";
require_once "VendaException.php";

    try{
        $camisa = new ItemVenda();
        $camisa->setDescricao("Camisa Polo");
        $camisa->setPreco(12.0);

        $bone   = new ItemVenda();
        $bone->setDescricao("Boné Infantil");
        $bone->setPreco(11.0);

        $Venda = new Venda();
        $Venda->adicionar(null);
        $Venda->adicionar($bone);

        print "Total da venda: ".$Venda->getTotal();

    } catch (VendaException $e){
        print "VendaException: ".$e->getMessage()." - Código: ".$e->getCodigo();
    } catch (\InvalidArgumentException $e){
        print "Um erro ocorreu: ".$e->getMessage();
    } catch (\LogicException $e){
        print "Erro: ".$e->getMessage();
    } catch (\Error $e){
        print "Um erro desconhecido ocorreu: ".$e->getMessage();
    } finally {
        print "<br/>Processamento encerrado.";
    }