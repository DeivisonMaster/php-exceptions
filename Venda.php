<?php

namespace Venda;
use VendaException\VendaException;

class Venda{

    private $itens = [];

    public function adicionar($ItemVenda){
        if($ItemVenda == null){
            throw new VendaException(500, "Item não pode ser nulo");
        }
        array_push($this->itens, $ItemVenda);
    }

    public function getTotal(){
        $total = 0;

        if(!count($this->itens)){
            throw new \LogicException("Quantidade de itens deve ser maior que 0");
        }

        foreach ($this->itens as $item){
            $total += $item->getPreco();
        }

        return $total;
    }

}