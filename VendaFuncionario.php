<?php

use Strategies\ComissaoStrategy;

class VendaFuncionario
{
    private $comissaoStrategy;

    public function setComissaoStrategy(ComissaoStrategy $comissaoStrategy)
    {
        $this->comissaoStrategy = $comissaoStrategy;
    }

    public function pagamento($valorVenda)
    {
        $comissao = $this->comissaoStrategy->calcular($valorVenda);
        echo "Pagamento realizado com comissao de: $comissao\n";
    }
}
