<?php

namespace Strategies;

class AtendenteComissao implements ComissaoStrategy
{
    public function calcular($venda)
    {
        return $venda * 0.05;
    }
}
