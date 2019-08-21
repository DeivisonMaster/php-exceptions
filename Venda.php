<?php

namespace Venda;

class Venda{

    private $itens = [];

    public function adicionar($ItemVenda){
        if($ItemVenda == null){
            throw new \InvalidArgumentException("Item não pode ser nulo");
        }
        array_push($this->itens, $ItemVenda);
    }

    public function getTotal(){
        $total = 0;

        foreach ($this->itens as $item){
            $total += $item->getPreco();
        }

        return $total;
    }

}