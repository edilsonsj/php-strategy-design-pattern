<?php

require_once 'ComissaoStrategy.php';
require_once 'AtendenteComissao.php';
require_once 'VendedorComissao.php';
require_once 'GerenteComissao.php';
require_once 'VendaFuncionario.php';

use Strategies\AtendenteComissao;
use Strategies\VendedorComissao;
use Strategies\GerenteComissao;

$venda = new VendaFuncionario();

$venda->setComissaoStrategy(new AtendenteComissao());
$venda->pagamento(1000); // Pagamento com comissão de atendente

$venda->setComissaoStrategy(new VendedorComissao());
$venda->pagamento(1500); // Pagamento com comissão de vendedor

$venda->setComissaoStrategy(new GerenteComissao());
$venda->pagamento(2000); // Pagamento com comissão de gerente
