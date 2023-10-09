<?php
/*var_dump($_POST);*/
error_reporting(E_ALL | E_STRICT);
/*var_dump($_POST);*/
$total = 0;
$total_contabilidade = 0;
$total_tributario = 0;
$total_dp = 0;
/**die();*/
if(!empty($_POST["tributoEscolhido_contabil"]) && !empty($_POST["tributoEscolhido_contabil"])){

  //Contabilidade
  switch ($_POST["tributoEscolhido_contabil"]) {
    case "Simples Nacional/Demais":

    $servico            = 30;
    $comercio           = 45;
    $industria          = 60;
    $Terceiro_setor     = 30;
    $comercio_e_serv    = 45;

    $ate50k = 0;
    $ate100k = 0;
    $ate500k = 60;
    $ate1000k = 60;
    $acima1000k = "personalizar";

    $total = 0;

    //Atividade
    if($_POST["atividadeEscolhida_contabil"] == "Comércio"){
      $total += $comercio;
    }
    if($_POST["atividadeEscolhida_contabil"] == "Serviço"){
      $total += $servico;
    }
    if($_POST["atividadeEscolhida_contabil"] == "Comércio e Serviço"){
      $total += $comercio_e_serv;
    }
    if($_POST["atividadeEscolhida_contabil"] == "ONGs"){
      $total += $Terceiro_setor;
    }
    if($_POST["atividadeEscolhida_contabil"] == "Industrias"){
      $total += $industria;
    }
    //Faturamento
    if($_POST["faturamentoEscolhido_contabil"] == "0 a 50 MIL"){
      $total += $ate50k;
    }
    if($_POST["faturamentoEscolhido_contabil"] == "50 a 100 MIL"){
      $total += $ate100k;
    }
    if($_POST["faturamentoEscolhido_contabil"] == "100 a 500 MIL"){
      $total += $ate500k;
    }
    if($_POST["faturamentoEscolhido_contabil"] == "500 a 1.000.000 MIL"){
      $total += $ate1000k;
    }
    if($_POST["faturamentoEscolhido_contabil"] == "ACIMA DE 1.000.000 MIL"){
      $total = $acima1000k;
    }
    $subtotal = $total;
    //30
    //Outras Observações
    if($_POST["licitacaoEscolhido_contabil"] == "SIM"){
      $p = $subtotal*0.2;
      $total = $total+$p;
    }
    if($_POST["entidade_govEscolhido_contabil"] == "SIM"){
      $p = $subtotal*0.2;
      $total = $total+$p;
    }
    if($_POST["atendimento_cliEscolhido_contabil"] == "SIM"){
      $p = $subtotal*0.5;
      $total = $total+$p;
    }
    if($_POST["reunioes_clienteEscolhido_contabil"] == "SIM"){
      $particularidades = "Disponibilidade e orçamento a analisar";
    }
    if($_POST["dashboardBIEscolhido_contabil"] == "SIM"){
      $p = $subtotal*0.2;
      $total = $total+$p;
    }
    if($_POST["prazoEntregaEscolhido_contabil"] == "SIM"){
      $p = $subtotal*0.2;
      $total = $total+$p;
    }
    break;

    case "Lucro Real":

    $servico            = 60;
    $comercio           = 90;
    $industria          = 120;
    $Terceiro_setor     = 0;
    $comercio_e_serv    = 90;

    $ate50k = 0;
    $ate100k = 60;
    $ate500k = 90;
    $ate1000k = 90;
    $acima1000k = "personalizar";

    $total = 0;

    //Atividade
    if($_POST["atividadeEscolhida_contabil"] == "Comércio"){
      $total += $comercio;
    }
    if($_POST["atividadeEscolhida_contabil"] == "Serviço"){
      $total += $servico;
    }
    if($_POST["atividadeEscolhida_contabil"] == "Comércio e Serviço"){
      $total += $comercio_e_serv;
    }
    if($_POST["atividadeEscolhida_contabil"] == "ONGs"){
      $total += $Terceiro_setor;
    }
    if($_POST["atividadeEscolhida_contabil"] == "Industrias"){
      $total += $industria;
    }
    //Faturamento
    if($_POST["faturamentoEscolhido_contabil"] == "0 a 50 MIL"){
      $total += $ate50k;
    }
    if($_POST["faturamentoEscolhido_contabil"] == "50 a 100 MIL"){
      $total += $ate100k;
    }
    if($_POST["faturamentoEscolhido_contabil"] == "100 a 500 MIL"){
      $total += $ate500k;
    }
    if($_POST["faturamentoEscolhido_contabil"] == "500 a 1.000.000 MIL"){
      $total += $ate1000k;
    }
    if($_POST["faturamentoEscolhido_contabil"] == "ACIMA DE 1.000.000 MIL"){
      $total = $acima1000k;
    }
    $subtotal = $total;
    //30
    //Outras Observações
    if($_POST["licitacaoEscolhido_contabil"] == "SIM"){
      /*$p = $subtotal*0.2;
      $total = $total+$p;*/
    }
    if($_POST["entidade_govEscolhido_contabil"] == "SIM"){
      $p = $subtotal*0.2;
      $total = $total+$p;
    }
    if($_POST["atendimento_cliEscolhido_contabil"] == "SIM"){
      $p = $subtotal*0.5;
      $total = $total+$p;
    }
    if($_POST["reunioes_clienteEscolhido_contabil"] == "SIM"){
      $particularidades = "Disponibilidade e orçamento a analisar";
    }
    if($_POST["dashboardBIEscolhido_contabil"] == "SIM"){
      $p = $subtotal*0.2;
      $total = $total+$p;
    }
    if($_POST["prazoEntregaEscolhido_contabil"] == "SIM"){
      $particularidades .= "<br />Não é permitido alterar o prazo de entrega para o LR";
    }

    break;
    case "Lucro Presumido":

    $servico            = 30;
    $comercio           = 67.5;
    $industria          = 90;
    $Terceiro_setor     = 0;
    $comercio_e_serv    = 67.5;

    $ate50k = 0;
    $ate100k = 67.5;
    $ate500k = 67.5;
    $ate1000k = 90;
    $acima1000k = "personalizar";

    $total = 0;

    //Atividade
    if($_POST["atividadeEscolhida_contabil"] == "Comércio"){
      $total += $comercio;
    }
    if($_POST["atividadeEscolhida_contabil"] == "Serviço"){
      $total += $servico;
    }
    if($_POST["atividadeEscolhida_contabil"] == "Comércio e Serviço"){
      $total += $comercio_e_serv;
    }
    if($_POST["atividadeEscolhida_contabil"] == "ONGs"){
      $total += $Terceiro_setor;
    }
    if($_POST["atividadeEscolhida_contabil"] == "Industrias"){
      $total += $industria;
    }
    //Faturamento
    if($_POST["faturamentoEscolhido_contabil"] == "0 a 50 MIL"){
      $total += $ate50k;
    }
    if($_POST["faturamentoEscolhido_contabil"] == "50 a 100 MIL"){
      $total += $ate100k;
    }
    if($_POST["faturamentoEscolhido_contabil"] == "100 a 500 MIL"){
      $total += $ate500k;
    }
    if($_POST["faturamentoEscolhido_contabil"] == "500 a 1.000.000 MIL"){
      $total += $ate1000k;
    }
    if($_POST["faturamentoEscolhido_contabil"] == "ACIMA DE 1.000.000 MIL"){
      $total = $acima1000k;
    }
    $subtotal = $total;
    //30
    //Outras Observações
    if($_POST["licitacaoEscolhido_contabil"] == "SIM"){
      $p = $subtotal*0.2;
      $total = $total+$p;
    }
    if($_POST["entidade_govEscolhido_contabil"] == "SIM"){
      $p = $subtotal*0.2;
      $total = $total+$p;
    }
    if($_POST["atendimento_cliEscolhido_contabil"] == "SIM"){
      $p = $subtotal*0.5;
      $total = $total+$p;
    }
    if($_POST["reunioes_clienteEscolhido_contabil"] == "SIM"){
      $particularidades = "Disponibilidade e orçamento a analisar";
    }
    if($_POST["dashboardBIEscolhido_contabil"] == "SIM"){
      $p = $subtotal*0.2;
      $total = $total+$p;
    }
    if($_POST["prazoEntregaEscolhido_contabil"] == "SIM"){
      $p = $subtotal*0.2;
      $total = $total+$p;
    }
    break;
  }
  $total_contabilidade = $total;
}

if(!empty($_POST["tributoEscolhido_tribut"]) && !empty($_POST["tributoEscolhido_tribut"])){

  //Tributário
  switch ($_POST["tributoEscolhido_tribut"]) {
    case "Simples Nacional/Demais":
    $servico            = 20;
    $comercio           = 30;
    $industria          = 20;
    $Terceiro_setor     = 0;
    $comercio_e_serv    = 30;

    $ate50k = 1;
    $ate100k = 1;
    $ate500k = 2;
    $ate1000k = 1;
    $acima1000k = 1;

    $total = 0;

    //Atividade
    if($_POST["atividadeEscolhida_trib"] == "Comércio"){
      $total += $comercio;
    }
    if($_POST["atividadeEscolhida_trib"] == "Serviço"){
      $total += $servico;
    }
    if($_POST["atividadeEscolhida_trib"] == "Comércio e Serviço"){
      $total += $comercio_e_serv;
    }
    if($_POST["atividadeEscolhida_trib"] == "ONGs"){
      $total += $Terceiro_setor;
    }
    if($_POST["atividadeEscolhida_trib"] == "Industrias"){
      $total += $industria;
    }
    //Faturamento
    if($_POST["faturamentoEscolhido_trib"] == "0 a 50 MIL"){
      $total = $total*$ate50k;
    }
    if($_POST["faturamentoEscolhido_trib"] == "50 a 100 MIL"){
      $total = $total*$ate100k;
    }
    if($_POST["faturamentoEscolhido_trib"] == "100 a 500 MIL"){
      $total = $total*$ate500k;
    }
    if($_POST["faturamentoEscolhido_trib"] == "500 a 1.000.000 MIL"){
      $total = $total*$ate1000k;
    }
    if($_POST["faturamentoEscolhido_trib"] == "ACIMA DE 1.000.000 MIL"){
      $total = $total*$acima1000k;
    }
    $subtotal = $total;
    //30
    //Outras Observações
    if($_POST["prazodeentrega_trib"] == "SIM"){
      $p = $subtotal*0.2;
      $total = $total+$p;
    }
    if($_POST["planejamentotribut_escolhido"] == "SIM"){
      $particularidades = "Personalizar";
    }
    if($_POST["analise_ncm_escolhido"] == "SIM"){
      $particularidades .= "Personalizar";
    }
    if($_POST["atendimento_cliente_tribut"] == "SIM"){
      $p = $subtotal*0.5;
      $total = $total+$p;
    }
    if($_POST["fatorR_escolhido"] == "SIM"){
      $p = 40;
      $total = $total+$p;
    }
    if($_POST["tributSimplesCardEscolhido"] == "SIM"){
      $p = 40;
      $total = $total+$p;
    }
    break;
    case "Lucro Real":
    $servico            = 75;
    $comercio           = 300;
    $industria          = 450;
    $Terceiro_setor     = 100;
    $comercio_e_serv    = 300;

    $ate50k = 1;
    $ate100k = 1;
    $ate500k = 1.5;
    $ate1000k = 2;
    $acima1000k = 2;

    $total = 0;

    //Atividade
    if($_POST["atividadeEscolhida_trib"] == "Comércio"){
      $total += $comercio;
    }
    if($_POST["atividadeEscolhida_trib"] == "Serviço"){
      $total += $servico;
    }
    if($_POST["atividadeEscolhida_trib"] == "Comércio e Serviço"){
      $total += $comercio_e_serv;
    }
    if($_POST["atividadeEscolhida_trib"] == "ONGs"){
      $total += $Terceiro_setor;
    }
    if($_POST["atividadeEscolhida_trib"] == "Industrias"){
      $total += $industria;
    }
    //Faturamento
    if($_POST["faturamentoEscolhido_trib"] == "0 a 50 MIL"){
      $total = $total*$ate50k;
    }
    if($_POST["faturamentoEscolhido_trib"] == "50 a 100 MIL"){
      $total = $total*$ate100k;
    }
    if($_POST["faturamentoEscolhido_trib"] == "100 a 500 MIL"){
      $total = $total*$ate500k;
    }
    if($_POST["faturamentoEscolhido_trib"] == "500 a 1.000.000 MIL"){
      $total = $total*$ate1000k;
    }
    if($_POST["faturamentoEscolhido_trib"] == "ACIMA DE 1.000.000 MIL"){
      $total = $total*$acima1000k;
    }
    $subtotal = $total;
    //30
    //Outras Observações
    if($_POST["prazodeentrega_trib"] == "SIM"){
      $p = $subtotal*0.2;
      $total = $total+$p;
    }
    if($_POST["planejamentotribut_escolhido"] == "SIM"){
      $particularidades = "Personalizar";
    }
    if($_POST["analise_ncm_escolhido"] == "SIM"){
      $particularidades .= "Personalizar";
    }
    if($_POST["atendimento_cliente_tribut"] == "SIM"){
      $p = $subtotal*0.5;
      $total = $total+$p;
    }
    if($_POST["fatorR_escolhido"] == "SIM"){
      $p = 40;
      $total = $total+$p;
    }
    if($_POST["tributSimplesCardEscolhido"] == "SIM"){
      $p = 40;
      $total = $total+$p;
    }
    break;
    case "Lucro Presumido":
    $servico            = 75;
    $comercio           = 150;
    $industria          = 200;
    $Terceiro_setor     = 100;
    $comercio_e_serv    = 150;

    $ate50k = 1;
    $ate100k = 1;
    $ate500k = 1.5;
    $ate1000k = 2;
    $acima1000k = 2;

    $total = 0;

    //Atividade
    if($_POST["atividadeEscolhida_trib"] == "Comércio"){
      $total += $comercio;
    }
    if($_POST["atividadeEscolhida_trib"] == "Serviço"){
      $total += $servico;
    }
    if($_POST["atividadeEscolhida_trib"] == "Comércio e Serviço"){
      $total += $comercio_e_serv;
    }
    if($_POST["atividadeEscolhida_trib"] == "ONGs"){
      $total += $Terceiro_setor;
    }
    if($_POST["atividadeEscolhida_trib"] == "Industrias"){
      $total += $industria;
    }
    //Faturamento
    if($_POST["faturamentoEscolhido_trib"] == "0 a 50 MIL"){
      $total = $total*$ate50k;
    }
    if($_POST["faturamentoEscolhido_trib"] == "50 a 100 MIL"){
      $total = $total*$ate100k;
    }
    if($_POST["faturamentoEscolhido_trib"] == "100 a 500 MIL"){
      $total = $total*$ate500k;
    }
    if($_POST["faturamentoEscolhido_trib"] == "500 a 1.000.000 MIL"){
      $total = $total*$ate1000k;
    }
    if($_POST["faturamentoEscolhido_trib"] == "ACIMA DE 1.000.000 MIL"){
      $total = $total*$acima1000k;
    }
    $subtotal = $total;
    //30
    //Outras Observações
    if($_POST["prazodeentrega_trib"] == "SIM"){
      $p = $subtotal*0.2;
      $total = $total+$p;
    }
    if($_POST["planejamentotribut_escolhido"] == "SIM"){
      $particularidades = "Personalizar";
    }
    if($_POST["analise_ncm_escolhido"] == "SIM"){
      $particularidades .= "Personalizar";
    }
    if($_POST["atendimento_cliente_tribut"] == "SIM"){
      $p = $subtotal*0.5;
      $total = $total+$p;
    }
    if($_POST["fatorR_escolhido"] == "SIM"){
      $p = 40;
      $total = $total+$p;
    }
    if($_POST["tributSimplesCardEscolhido"] == "SIM"){
      $p = 40;
      $total = $total+$p;
    }
    break;
  }
  $total_tributario = $total;
}


  $total_dp = 0;
  $total = 0;
  //Atividade
   if (!empty($_POST['qtd_funcionarioEscolhido'])) {
     if($_POST['qtd_funcionarioEscolhido'] == 0 ){
       $total = 30;
     }elseif($_POST["modalidade_folhaEscolhido"] == "Eventos Variáveis"){
       $total += $_POST['qtd_funcionarioEscolhido'] * 10 + 15;
     }else{
        $total += $_POST['qtd_funcionarioEscolhido'] * 10;
     }
  }
  if($_POST["atendimento_backofficeEscolhido"] == "SIM"){
    $p = 30;
    $x = $_POST['qtd_funcionarioEscolhido']*5 + $p;
    $total = $total+$x;
  }
  if($_POST["controle_feriasEscolhido"] == "SIM"){
    $p = 10;
    $x = $_POST['qtd_funcionarioEscolhido']*3 + $p;
    $total = $total+$x;
  }
  if($_POST["controle_afastamentosEscolhido"] == "SIM"){
    $p = 10;
    $x = $_POST['qtd_funcionarioEscolhido']*3 + $p;
    $total = $total+$x;
  }
  if($_POST["controle_beneficiosEscolhido"] == "SIM"){
    $p = 10;
    $x = $_POST['qtd_funcionarioEscolhido']*$p;
    $total = $total+$x;
  }
  if($_POST["contrato_foradopadraoEscolhido"] == "SIM"){
    $p = 1000;
    $total = $total+$p;
  }
  if($_POST["controle_bancodehorasEscolhido"] == "SIM"){
    $p = 10;
    $x = $_POST['qtd_funcionarioEscolhido']*$p;
    $total = $total+$x;
  }
  if($_POST["acordo_de_trabalhoEscolhido"] == "SIM"){
    $p = 100;
    $total = $total+$p;
  }
  if($_POST["descricao_de_cargosetrabalhosEscolhido"] == "SIM"){
    $p = 400;
    $total = $total+$p;
  }
  $total_dp = $total;
echo "<div class='card mb-4'><div class='card-body '><h5>Total da Contabilidade:</h5><h1>R$: ".number_format($total_contabilidade, 2, ',','.')."</h1></div></div>";
echo "<div class='card mb-4'><div class='card-body '><h5>Total da Tributário / Fiscal:</h5><h1>R$: ".number_format($total_tributario, 2, ',','.')."</h1></div></div>";
echo "<div class='card mb-4'><div class='card-body '><h5>Total da Departamento Pessoal:</h5><h1>R$: ".number_format($total_dp, 2, ',','.')."</h1></div></div>";
echo "<div class='card mb-4'><div class='card-body '><h5>Total do Backoffice:</h5><h1>R$: ".number_format($total_contabilidade+$total_tributario+$total_dp, 2, ',','.')."</h1></div></div>";
echo "<input id='total_bckoff' type='text' value='".number_format($total_contabilidade+$total_tributario+$total_dp, 2, ',','.')."' />";
/*var_dump($_POST);*/
?>
