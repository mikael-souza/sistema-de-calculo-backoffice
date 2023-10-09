<?php
/*var_dump($_POST);*/
error_reporting(E_ALL | E_STRICT);
/*var_dump($_POST);*/
$total = 0;
$total_contabilidade = 0;
$total_tributario = 0;
$total_dp = 0;
$personalizar = false;
$compraeVendaFora = $_POST["compraeVendaForaEscolhido"];
/**die();*/
if (!empty($_POST["tributoEscolhido_contabil"]) && !empty($_POST["tributoEscolhido_contabil"])) {

  //Contabilidade
    switch ($_POST["tributoEscolhido_contabil"]) {
    case "Simples Nacional/Demais":

    $servico            = 50;
    $comercio           = 80;
    $industria          = 100;
    $Terceiro_setor     = 100;
    $comercio_e_serv    = 100;
    $construtora        = 100;

    $ate50k = 50;
    $ate100k = 70;
    $ate500k = 120;
    $ate1000k = 200;
    $acima1000k = "Personalizar";

    $total = 0;

    //Atividade
    if ($_POST["atividadeEscolhida_contabil"] == "Comércio") {
        $total += $comercio;
    }
    if ($_POST["atividadeEscolhida_contabil"] == "Serviço") {
        $total += $servico;
    }
    if ($_POST["atividadeEscolhida_contabil"] == "Comércio e Serviço") {
        $total += $comercio_e_serv;
    }
    if ($_POST["atividadeEscolhida_contabil"] == "ONGs") {
        $total += $Terceiro_setor;
    }
    if ($_POST["atividadeEscolhida_contabil"] == "Industrias") {
        $total += $industria;
    }
    if ($_POST["atividadeEscolhida_contabil"] == "Construtora") {
        $total += $construtora;
    }
    //Faturamento
    if ($_POST["faturamentoEscolhido_contabil"] == "0 a 50 MIL") {
        $total += $ate50k;
    }
    if ($_POST["faturamentoEscolhido_contabil"] == "50 a 100 MIL") {
        $total += $ate100k;
    }
    if ($_POST["faturamentoEscolhido_contabil"] == "100 a 500 MIL") {
        $total += $ate500k;
    }
    if ($_POST["faturamentoEscolhido_contabil"] == "500 a 1.000.000 MIL") {
        $total += $ate1000k;
    }
    if ($_POST["faturamentoEscolhido_contabil"] == "ACIMA DE 1.000.000 MIL") {
        //$total = $acima1000k;
        $total = 0;
        $personalizar = true;
    }
    $subtotal = $total;
    //30
    //Outras Observações
    if ($_POST["licitacaoEscolhido_contabil"] == "SIM") {
        $p = $subtotal*0.2;
        $total = $total+$p;
    }
    if ($_POST["entidade_govEscolhido_contabil"] == "SIM") {
        $p = $subtotal*0.2;
        $total = $total+$p;
    }
    if ($_POST["atendimento_cliEscolhido_contabil"] == "SIM") {
        $p = $subtotal*0.5;
        $total = $total+$p;
    }
    if ($_POST["reunioes_clienteEscolhido_contabil"] == "SIM") {
        $particularidades = "Disponibilidade e orçamento a analisar";
    }
    if ($_POST["dashboardBIEscolhido_contabil"] == "SIM") {
        $p = $subtotal*0.2;
        $total = $total+$p;
    }
    if ($_POST["prazoEntregaEscolhido_contabil"] == "SIM") {
        $p = $subtotal*0.2;
        $total = $total+$p;
    }
    break;

    case "Lucro Real":

    $servico            = 100;
    $comercio           = 200;
    $industria          = 200;
    $Terceiro_setor     = 200;
    $comercio_e_serv    = 200;
    $construtora        = 200;

    $ate50k = 80;
    $ate100k = 130;
    $ate500k = 200;
    $ate1000k = 300;
    $acima1000k = "Personalizar";

    $total = 0;

    //Atividade
    if ($_POST["atividadeEscolhida_contabil"] == "Comércio") {
        $total += $comercio;
    }
    if ($_POST["atividadeEscolhida_contabil"] == "Serviço") {
        $total += $servico;
    }
    if ($_POST["atividadeEscolhida_contabil"] == "Comércio e Serviço") {
        $total += $comercio_e_serv;
    }
    if ($_POST["atividadeEscolhida_contabil"] == "ONGs") {
        $total += $Terceiro_setor;
    }
    if ($_POST["atividadeEscolhida_contabil"] == "Industrias") {
        $total += $industria;
    }
    if ($_POST["atividadeEscolhida_contabil"] == "Construtora") {
        $total += $construtora;
    }
    //Faturamento
    if ($_POST["faturamentoEscolhido_contabil"] == "0 a 50 MIL") {
        $total += $ate50k;
    }
    if ($_POST["faturamentoEscolhido_contabil"] == "50 a 100 MIL") {
        $total += $ate100k;
    }
    if ($_POST["faturamentoEscolhido_contabil"] == "100 a 500 MIL") {
        $total += $ate500k;
    }
    if ($_POST["faturamentoEscolhido_contabil"] == "500 a 1.000.000 MIL") {
        $total += $ate1000k;
    }
    if ($_POST["faturamentoEscolhido_contabil"] == "ACIMA DE 1.000.000 MIL") {
        //$total = $acima1000k;
        $total = 0;
        $personalizar = true;
    }
    $subtotal = $total;
    //30
    //Outras Observações
    if ($_POST["licitacaoEscolhido_contabil"] == "SIM") {
        /*$p = $subtotal*0.2;
        $total = $total+$p;*/
    }
    if ($_POST["entidade_govEscolhido_contabil"] == "SIM") {
        //var_dump($p);
        //var_dump($subtotal);
        //die();
        $p = $subtotal*0.2;
        $total = $total+$p;
    }
    if ($_POST["atendimento_cliEscolhido_contabil"] == "SIM") {
        $p = $subtotal*0.5;
        $total = $total+$p;
    }
    if ($_POST["reunioes_clienteEscolhido_contabil"] == "SIM") {
        $particularidades = "Disponibilidade e orçamento a analisar";
    }
    if ($_POST["dashboardBIEscolhido_contabil"] == "SIM") {
        $p = $subtotal*0.2;
        $total = $total+$p;
    }
    if ($_POST["prazoEntregaEscolhido_contabil"] == "SIM") {
        $particularidades .= "<br />Não é permitido alterar o prazo de entrega para o LR";
    }

    break;
    case "Lucro Presumido":

    $servico            = 100;
    $comercio           = 150;
    $industria          = 150;
    $Terceiro_setor     = 150;
    $comercio_e_serv    = 150;
    $construtora        = 150;

    $ate50k = 60;
    $ate100k = 100;
    $ate500k = 180;
    $ate1000k = 200;
    $acima1000k = "Personalizar";

    $total = 0;

    //Atividade
    if ($_POST["atividadeEscolhida_contabil"] == "Comércio") {
        $total += $comercio;
    }
    if ($_POST["atividadeEscolhida_contabil"] == "Serviço") {
        $total += $servico;
    }
    if ($_POST["atividadeEscolhida_contabil"] == "Comércio e Serviço") {
        $total += $comercio_e_serv;
    }
    if ($_POST["atividadeEscolhida_contabil"] == "ONGs") {
        $total += $Terceiro_setor;
    }
    if ($_POST["atividadeEscolhida_contabil"] == "Industrias") {
        $total += $industria;
    }
    if ($_POST["atividadeEscolhida_contabil"] == "Construtora") {
        $total += $construtora;
    }
    //Faturamento
    if ($_POST["faturamentoEscolhido_contabil"] == "0 a 50 MIL") {
        $total += $ate50k;
    }
    if ($_POST["faturamentoEscolhido_contabil"] == "50 a 100 MIL") {
        $total += $ate100k;
    }
    if ($_POST["faturamentoEscolhido_contabil"] == "100 a 500 MIL") {
        $total += $ate500k;
    }
    if ($_POST["faturamentoEscolhido_contabil"] == "500 a 1.000.000 MIL") {
        $total += $ate1000k;
    }
    if ($_POST["faturamentoEscolhido_contabil"] == "ACIMA DE 1.000.000 MIL") {
        //$total = $acima1000k;
        $total = 0;
        $personalizar = true;
    }
    $subtotal = $total;
    //30
    //Outras Observações
    if ($_POST["licitacaoEscolhido_contabil"] == "SIM") {
        $p = $subtotal*0.2;
        $total = $total+$p;
    }
    if ($_POST["entidade_govEscolhido_contabil"] == "SIM") {
        $p = $subtotal*0.2;
        $total = $total+$p;
    }
    if ($_POST["atendimento_cliEscolhido_contabil"] == "SIM") {
        $p = $subtotal*0.5;
        $total = $total+$p;
    }
    if ($_POST["reunioes_clienteEscolhido_contabil"] == "SIM") {
        $particularidades = "Disponibilidade e orçamento a analisar";
    }
    if ($_POST["dashboardBIEscolhido_contabil"] == "SIM") {
        $p = $subtotal*0.2;
        $total = $total+$p;
    }
    if ($_POST["prazoEntregaEscolhido_contabil"] == "SIM") {
        $p = $subtotal*0.2;
        $total = $total+$p;
    }
    break;
  }
    $total_contabilidade = $total+$total*0.3042;
}

//Tributario
if (!empty($_POST["tributoEscolhido_tribut"]) && !empty($_POST["tributoEscolhido_tribut"])) {

  //Tributário
    switch ($_POST["tributoEscolhido_tribut"]) {
    case "Simples Nacional/Demais":
    $servico            = 50;
    $comercio           = 80;
    $industria          = 100;
    $Terceiro_setor     = 100;
    $comercio_e_serv    = 100;
    $construtora        = 100;

    $ate50k = 1;
    $ate100k = 1.5;
    $ate500k = 2.5;
    $ate1000k = 3.1;
    $acima1000k = "Personalizar";

    $total = 0;

    //Atividade
    if ($_POST["atividadeEscolhida_trib"] == "Comércio") {
        $total += $comercio;
    }
    if ($_POST["atividadeEscolhida_trib"] == "Serviço") {
        $total += $servico;
    }
    if ($_POST["atividadeEscolhida_trib"] == "Comércio e Serviço") {
        $total += $comercio_e_serv;
    }
    if ($_POST["atividadeEscolhida_trib"] == "ONGs") {
        $total += $Terceiro_setor;
    }
    if ($_POST["atividadeEscolhida_trib"] == "Industrias") {
        $total += $industria;
    }
    if ($_POST["atividadeEscolhida_trib"] == "Construtora") {
        $total += $construtora;
    }
    //Faturamento
    if ($_POST["faturamentoEscolhido_trib"] == "0 a 50 MIL") {
        $total = $total*$ate50k;
    }
    if ($_POST["faturamentoEscolhido_trib"] == "50 a 100 MIL") {
        $total = $total*$ate100k;
    }
    if ($_POST["faturamentoEscolhido_trib"] == "100 a 500 MIL") {
        $total = $total*$ate500k;
    }
    if ($_POST["faturamentoEscolhido_trib"] == "500 a 1.000.000 MIL") {
        $total = $total*$ate1000k;
    }
    if ($_POST["faturamentoEscolhido_trib"] == "ACIMA DE 1.000.000 MIL") {
        $total = $total*$acima1000k;
    }
    $subtotal = $total;
    //30
    //Outras Observações
    if ($_POST["prazodeentrega_trib"] == "SIM") {
        $p = $subtotal*0.2;
        $total = $total+$p;
    }
    if ($_POST["planejamentotribut_escolhido"] == "SIM") {
        $particularidades = "Personalizar";
    }
    if ($_POST["analise_ncm_escolhido"] == "SIM") {
        $particularidades .= "Personalizar";
    }
    if ($_POST["atendimento_cliente_tribut"] == "SIM") {
        $p = $subtotal*0.5;
        $total = $total+$p;
    }
    if ($_POST["fatorR_escolhido"] == "SIM") {
        $p = 40;
        $total = $total+$p;
    }
    if ($_POST["tributSimplesCardEscolhido"] == "SIM") {
        $p = 40;
        $total = $total+$p;
    }
    break;

    case "Lucro Real":
    $servico            = 150;
    $comercio           = 300;
    $industria          = 400;
    $Terceiro_setor     = 400;
    $comercio_e_serv    = 400;
    $construtora        = 400;


    $ate50k = 1;
    $ate100k = 1;
    $ate500k = 1.5;
    $ate1000k = 2;
    $acima1000k = "Personalizar";

    $total = 0;

    //Atividade
    if ($_POST["atividadeEscolhida_trib"] == "Comércio") {
        $total += $comercio;
    }
    if ($_POST["atividadeEscolhida_trib"] == "Serviço") {
        $total += $servico;
    }
    if ($_POST["atividadeEscolhida_trib"] == "Comércio e Serviço") {
        $total += $comercio_e_serv;
    }
    if ($_POST["atividadeEscolhida_trib"] == "ONGs") {
        $total += $Terceiro_setor;
    }
    if ($_POST["atividadeEscolhida_trib"] == "Industrias") {
        $total += $industria;
    }
    if ($_POST["atividadeEscolhida_trib"] == "Industrias") {
        $total += $construtora;
    }
    //Faturamento
    if ($_POST["faturamentoEscolhido_trib"] == "0 a 50 MIL") {
        $total = $total*$ate50k;
    }
    if ($_POST["faturamentoEscolhido_trib"] == "50 a 100 MIL") {
        $total = $total*$ate100k;
    }
    if ($_POST["faturamentoEscolhido_trib"] == "100 a 500 MIL") {
        $total = $total*$ate500k;
    }
    if ($_POST["faturamentoEscolhido_trib"] == "500 a 1.000.000 MIL") {
        $total = $total*$ate1000k;
    }
    if ($_POST["faturamentoEscolhido_trib"] == "ACIMA DE 1.000.000 MIL") {
        $total = $total*$acima1000k;
    }
    $subtotal = $total;
    //30
    //Outras Observações
    if ($_POST["prazodeentrega_trib"] == "SIM") {
        $p = $subtotal*0.2;
        $total = $total+$p;
    }
    if ($_POST["planejamentotribut_escolhido"] == "SIM") {
        $particularidades = "Personalizar";
    }
    if ($_POST["analise_ncm_escolhido"] == "SIM") {
        $particularidades .= "Personalizar";
    }
    if ($_POST["atendimento_cliente_tribut"] == "SIM") {
        $p = $subtotal*0.5;
        $total = $total+$p;
    }
    if ($_POST["fatorR_escolhido"] == "SIM") {
        $p = 40;
        $total = $total+$p;
    }
    if ($_POST["tributSimplesCardEscolhido"] == "SIM") {
        $p = 40;
        $total = $total+$p;
    }
    break;
    case "Lucro Presumido":
    $servico            = 100;
    $comercio           = 200;
    $industria          = 300;
    $Terceiro_setor     = 300;
    $comercio_e_serv    = 300;
    $construtora        = 300;

    $ate50k = 1;
    $ate100k = 1;
    $ate500k = 1.5;
    $ate1000k = 2;
    $acima1000k = "Personalizar";

    $total = 0;

    //Atividade
    if ($_POST["atividadeEscolhida_trib"] == "Comércio") {
        $total += $comercio;
    }
    if ($_POST["atividadeEscolhida_trib"] == "Serviço") {
        $total += $servico;
    }
    if ($_POST["atividadeEscolhida_trib"] == "Comércio e Serviço") {
        $total += $comercio_e_serv;
    }
    if ($_POST["atividadeEscolhida_trib"] == "ONGs") {
        $total += $Terceiro_setor;
    }
    if ($_POST["atividadeEscolhida_trib"] == "Industrias") {
        $total += $industria;
    }
    if ($_POST["atividadeEscolhida_trib"] == "Construtora") {
        $total += $construtora;
    }
    //Faturamento
    if ($_POST["faturamentoEscolhido_trib"] == "0 a 50 MIL") {
        $total = $total*$ate50k;
    }
    if ($_POST["faturamentoEscolhido_trib"] == "50 a 100 MIL") {
        $total = $total*$ate100k;
    }
    if ($_POST["faturamentoEscolhido_trib"] == "100 a 500 MIL") {
        $total = $total*$ate500k;
    }
    if ($_POST["faturamentoEscolhido_trib"] == "500 a 1.000.000 MIL") {
        $total = $total*$ate1000k;
    }
    if ($_POST["faturamentoEscolhido_trib"] == "ACIMA DE 1.000.000 MIL") {
        $total = $total*$acima1000k;
    }
    $subtotal = $total;
    //30
    //Outras Observações
    if ($_POST["prazodeentrega_trib"] == "SIM") {
        $p = $subtotal*0.2;
        $total = $total+$p;
    }
    if ($_POST["planejamentotribut_escolhido"] == "SIM") {
        $particularidades = "Personalizar";
    }
    if ($_POST["analise_ncm_escolhido"] == "SIM") {
        $particularidades .= "Personalizar";
    }
    if ($_POST["atendimento_cliente_tribut"] == "SIM") {
        $p = $subtotal*0.5;
        $total = $total+$p;
    }
    if ($_POST["fatorR_escolhido"] == "SIM") {
        $p = 40;
        $total = $total+$p;
    }
    if ($_POST["tributSimplesCardEscolhido"] == "SIM") {
        $p = 40;
        $total = $total+$p;
    }
    break;
  }
    $total_tributario = $total+$total*0.32;
    $total_tributario = ($compraeVendaFora == "sim" or $compraeVendaFora == "Sim") ? $total_tributario+$total_tributario*0.3 : $total_tributario;
}


$total_dp = 0;
$total = 0;
//Atividade
/*Horista 35 */
switch ($_POST["modalidade_folhaEscolhido"]) {
  case 'Sem Movimento':
  $total = 20;
  break;

  case 'Eventos Fixos':

  if (1 <= $_POST['qtd_funcionarioEscolhido']) {
      $total += $_POST['qtd_funcionarioEscolhido'] * 20;
  } else {
      $total = 20;
  }

  break;

  case 'Eventos Variáveis':
  if (1 <= $_POST['qtd_funcionarioEscolhido']) {
      $total += $_POST['qtd_funcionarioEscolhido'] * 25;
  } else {
      $total = 20;
  }
  break;

  case 'Horista':
  if (1 <= $_POST['qtd_funcionarioEscolhido']) {
      $total += $_POST['qtd_funcionarioEscolhido'] * 35;
  } else {
      $total = 20;
  }
  break;

  default:
  $total = 0;
  // code...
  break;
}

if ($_POST["atendimento_backofficeEscolhido"] == "SIM") {
    $p = 30;
    $x = $_POST['qtd_funcionarioEscolhido']*7 + $p;
    $total = $total+$x;
}
if ($_POST["controle_feriasEscolhido"] == "SIM") {
    $p = 10;
    $x = $_POST['qtd_funcionarioEscolhido']*3 + $p;
    $total = $total+$x;
}
if ($_POST["controle_afastamentosEscolhido"] == "SIM") {
    $p = 10;
    $x = $_POST['qtd_funcionarioEscolhido']*3 + $p;
    $total = $total+$x;
}
if ($_POST["controle_beneficiosEscolhido"] == "SIM") {
    $p = 10;
    $x = $_POST['qtd_funcionarioEscolhido']*$p;
    $total = $total+$x;
}
if ($_POST["contrato_foradopadraoEscolhido"] == "SIM") {
    $p = 1000;
    $total = $total+$p;
}
if ($_POST["controle_bancodehorasEscolhido"] == "SIM") {
    $p = 10;
    $x = $_POST['qtd_funcionarioEscolhido']*$p;
    $total = $total+$x;
}
if ($_POST["acordo_de_trabalhoEscolhido"] == "SIM") {
    $p = 100;
    $total = $total+$p;
}
if ($_POST["descricao_de_cargosetrabalhosEscolhido"] == "SIM") {
    $p = 400;
    $total = $total+$p;
}
$total_dp = $total*0.60;
var_dump(total_dp);

$total_backo = $total_contabilidade+$total_tributario+$total_dp;

//$total_backo = ($compraeVendaFora == "sim" or $compraeVendaFora == "Sim") ? $total_backoffice+$total_backoffice*0.3 : $total_backoffice;

if ($personalizar == true) {
    echo "<div class='card mb-4'><div class='card-body '><h5>Total da Contabilidade:</h5><h1>Personalizar</h1></div></div>";
    echo "<div class='card mb-4'><div class='card-body '><h5>Total do Fiscal:</h5><h1>Personalizar</h1></div></div>";
    echo "<div class='card mb-4'><div class='card-body '><h5>Total do Departamento Pessoal:</h5><h1>R$: ".number_format($total_dp, 2, ',', '.')."</h1></div></div>";
    echo "<div class='card mb-4'><div class='card-body '><h5>Total do Backoffice:</h5><h1>R$: ".number_format($total_dp, 2, ',', '.')."</h1></div></div>";
    echo "<input type='hidden' id='total_bckoff' value='".number_format($total_dp, 2, ',', '.')."'</input>";
} else {
    echo "<div class='card mb-4'><div class='card-body '><h5>Total da Contabilidade:</h5><h1>R$: ".number_format($total_contabilidade, 2, ',', '.')."</h1></div></div>";
    echo "<div class='card mb-4'><div class='card-body '><h5>Total do Fiscal:</h5><h1>R$: ".number_format($total_tributario, 2, ',', '.')."</h1></div></div>";
    echo "<div class='card mb-4'><div class='card-body '><h5>Total do Departamento Pessoal:</h5><h1>R$: ".number_format($total_dp, 2, ',', '.')."</h1></div></div>";

    echo "<div class='card mb-4'><div class='card-body '><h5>Total do Backoffice:</h5><h1>R$: ".number_format($total_backo, 2, ',', '.')."</h1></div></div>";
    echo "<input type='hidden' id='total_bckoff' value='".number_format($total_backo, 2, ',', '.')."'</input>";
}
