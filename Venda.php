<?php

namespace Venda;

class Venda{

    private $itens = [];

    public function adicionar($ItemVenda){
        try{
            array_push($this->itens, $ItemVenda);
            
        } catch (\Error $e){
            print "Erro ao adicionar item a lista de itens ".$e->getMessage();
        }
    }

    public function getTotal(){
        $total = 0;

        foreach ($this->itens as $item){
            $total += $item->getPreco();
        }

        return $total;
    }

}