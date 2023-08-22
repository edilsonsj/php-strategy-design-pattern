<?php

namespace Strategies;

class VendedorComissao implements ComissaoStrategy
{
    public function calcular($venda)
    {
        return $venda * 0.15;
    }
}
