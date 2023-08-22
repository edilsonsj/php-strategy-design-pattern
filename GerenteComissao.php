<?php

namespace Strategies;

class GerenteComissao implements ComissaoStrategy
{
    public function calcular($venda)
    {
        return $venda * 0.1;
    }
}
