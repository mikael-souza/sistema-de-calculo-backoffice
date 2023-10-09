<!DOCTYPE html>
<html lang="en">
<?php include_once("inc/head.php") ?>
<body id="app-container" class="menu-default show-spinner">
  <?php include_once("inc/nav.php"); ?>
  <?php include_once("inc/menu.php"); ?>
  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <h1>Sistema de Cálculo do Backoffice</h1>
          <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
            <!--<ol class="breadcrumb pt-0">
              <li class="breadcrumb-item">
                <a href="#">Back Office</a>
              </li>
            </ol>-->
          </nav>
          <div class="separator mb-5"></div>
        </div>
      </div>
    </div>
    <div class="row sortable">
    </div>
  </div>
</div>
<div class="row">
  <div class="col-12 col-xl-8 mb-8">
    <div class="card h-100">
      <div class="card-body">
        <h5 class="mb-4">Orçamento</h5>
        <div id="smartWizardValidation">
          <ul class="card-header">
            <li><a href="#step-0">Passo 1<br /><small>Contabilidade</small></a></li>
            <li><a href="#step-1">Passo 2<br /><small>Fiscal</small></a></li>
            <li><a href="#step-2">Passo 3<br /><small>Departamento Pessoal</small></a></li>
          </ul>
          <div class="card-body">
            <div id="step-0">
              <form id="form-step-0" class="tooltip-label-right" novalidate>

                <div class="form-group position-relative error-l-50">
                  <label>
                    Qual o regime de tributação ?
                  </label>
                  <select id="Tributo" class="custom-select">
                    <option value=""></option>
                    <option value="simples">Simples Nacional</option>
                    <option value="real">Lucro Real</option>
                    <option value="presumido">Lucro Presumido</option>
                  </select>
                </div>
                <div class="form-group position-relative error-l-50">
                  <label>
                    Qual é a atividade do cliente ?
                  </label>
                  <select id="atividade" class="custom-select">
                    <option value=""></option>
                    <option value="1">Comércio</option>
                    <option value="2">Serviço</option>
                    <option value="2">Comércio e Serviço</option>
                    <option value="2">ONGs</option>
                    <option value="3">Industrias</option>
                    <option value="3">Construtora</option>
                  </select>
                </div>
                <div class="form-group position-relative error-l-50">
                  <label>
                    Qual é a média de faturamento ?
                  </label>
                  <select id="faturamento" class="custom-select">
                    <option value=""></option>
                    <option value="1">0 a 50 MIL</option>
                    <option value="2">50 a 100 MIL</option>
                    <option value="2">100 a 500 MIL</option>
                    <option value="3">500 a 1.000.000 MIL</option>
                    <option value="3">ACIMA DE 1.000.000 MIL</option>
                  </select>
                </div>
                <!--
				<div class="form-group position-relative error-l-50">
                  <label>
                    O Cliente Participa de Licitação?
                    <small>Não fazemos ECD para Lucro / SN</small>
                  </label>
                  <select id="licitacao" class="custom-select">
                    <option value=""></option>
                    <option value="1">SIM</option>
                    <option value="2">NÃO</option>
                  </select>
                </div>
				
                <div class="form-group position-relative error-l-50">
                  <label>
                    O Cliente Presta Contas com entidades Governamentais?
                    <small>(SICAP, SICAF, IBGE - CADASTRO ANUAL PARA PREST SERVIÇOS AO GOVERNO)</small>
                  </label>
                  <select id="entidade_gov" class="custom-select">
                    <option value=""></option>
                    <option value="1">SIM</option>
                    <option value="2">NÃO</option>
                  </select>
                </div>
				-->
                <div class="form-group position-relative error-l-50">
                  <label>
                    O Atendimento ao Cliente Será Pelo Back Office?
                  </label>
                  <select id="atendimento_cli" class="custom-select">
                    <option value=""></option>
                    <option value="1">SIM</option>
                    <option value="2">NÃO</option>
                  </select>
                </div>
                <!--<div class="form-group position-relative error-l-50">
                  <label>
                    Faremos reuniões mensais com o cliente ?
                  </label>
                  <small>Disponibilidade a analisar</small>
                  <select id="reunioes_cliente" class="custom-select">
                    <option value=""></option>
                    <option value="1">SIM</option>
                    <option value="2">NÃO</option>
                  </select>
                </div>
                <div class="form-group position-relative error-l-50">
                  <label>
                    Faremos o DASHBOARD BI para o Cliente?
                  </label>
                  <small>Disponibilidade a analisar</small>
                  <select id="dashboardBI" class="custom-select">
                    <option value=""></option>
                    <option value="1">SIM</option>
                    <option value="2">NÃO</option>
                  </select>
                </div>
                <div class="form-group position-relative error-l-50">
                  <label>
                    O Prazo de Entrega Será Alterado?
                  </label>
                  <small>(Não aplicável para lucro real)</small>
                  <select id="prazoEntrega" class="custom-select">
                    <option value=""></option>
                    <option value="1">SIM</option>
                    <option value="2">NÃO</option>
                  </select>
                </div>
				-->
              </form>
            </div>
            <div id="step-1">
              <form id="form-step-1" class="tooltip-label-right" novalidate>
                <div class="form-group position-relative error-l-50">
                  <label>
                    Qual o regime de tributação ?
                  </label>
                  <select id="regimetribut_trib" class="custom-select">
                    <option value=""></option>
                    <option value="simples">Simples Nacional</option>
                    <option value="real">Lucro Real</option>
                    <option value="presumido">Lucro Presumido</option>
                  </select>
                </div>

                <div class="form-group position-relative error-l-50">
                  <label>
                    Qual é a atividade do cliente ?
                  </label>
                  <select id="atividade_trib" class="custom-select">
                    <option value=""></option>
                    <option value="1">Comércio</option>
                    <option value="2">Serviço</option>
                    <option value="2">Comércio e Serviço</option>
                    <option value="2">ONGs</option>
                    <option value="3">Industrias</option>
                  </select>
                </div>
                <div class="form-group position-relative error-l-50">
                  <label>
                    Qual é a média de faturamento ?
                  </label>
                  <select id="faturamento_tribut" class="custom-select">
                    <option value=""></option>
                    <option value="1">0 a 50 MIL</option>
                    <option value="2">50 a 100 MIL</option>
                    <option value="2">100 a 500 MIL</option>
                    <option value="3">500 a 1.000.000 MIL</option>
                    <option value="3">ACIMA DE 1.000.000 MIL</option>
                  </select>
                </div>
                <div class="form-group position-relative error-l-50">
                  <label>
                    Faz compra e venda fora do estado ?
                  </label>
                  <select id="compraeVendaFora" class="custom-select">
                    <option value=""></option>
                    <option value="sim">Sim</option>
                    <option value="não">Não</option>
                  </select>
                </div>
				<!--
                <div class="form-group position-relative error-l-50">
                  <label>
                    O Prazo de entrega é <strong>superior</strong> a 05 dias antes ao vencimento
                  </label>
                  <select id="prazodeentrega" class="custom-select">
                    <option value=""></option>
                    <option value="1">SIM</option>
                    <option value="2">NÃO</option>
                  </select>
                </div>
				-->
                <!--<div class="form-group position-relative error-l-50">
                  <label>
                    É necessário que seja feito algum tipo de planejamento tributário ?
                    <small>Disponibilidade e orçamento a analisar</small>
                  </label>
                  <select id="planejamentotribut" class="custom-select">
                    <option value=""></option>
                    <option value="1">SIM</option>
                    <option value="2">NÃO</option>
                  </select>
                </div>
                <div class="form-group position-relative error-l-50">
                  <label>
                    É necessário que seja feito alguma análise NCM ?
                    <small>Disponibilidade e orçamento a analisar</small>
                  </label>
                  <select id="analise_ncm" class="custom-select">
                    <option value=""></option>
                    <option value="1">SIM</option>
                    <option value="2">NÃO</option>
                  </select>
                </div>-->
                <div class="form-group position-relative error-l-50">
                  <label>
                    O Atendimento ao Cliente Será Pelo Back Office?
                  </label>
                  <small>Disponibilidade a analisar</small>
                  <select id="atendimento_cliente_tribut" class="custom-select">
                    <option value=""></option>
                    <option value="1">SIM</option>
                    <option value="2">NÃO</option>
                  </select>
                </div>
                <div class="form-group position-relative error-l-50">
                  <label>
                    O Cliente é sujeito ao fator R ?
                  </label>
                  <small>Somente em caso de simples nacional e demais servíços</small>
                  <select id="fatorR" class="custom-select">
                    <option value=""></option>
                    <option value="1">SIM</option>
                    <option value="2">NÃO</option>
                  </select>
                </div>
				<!--
                <div class="form-group position-relative error-l-50">
                  <label>
                    O Cliente pretende tributar o simples pelo cartão?
                  </label>
                  <small>(Não aplicável para lucro real)</small>
                  <select id="tributSimplesCard" class="custom-select">
                    <option value=""></option>
                    <option value="1">SIM</option>
                    <option value="2">NÃO</option>
                  </select>
                </div>
				-->
              </form>
            </div>
            <div id="step-2">
              <form id="form-step-2" class="tooltip-label-right" novalidate>
                <div class="form-group position-relative error-l-50">
                  <label>
                    Qual a modalidade da folha de pagamento ?
                  </label>
                  <select id="modalidade_folha" class="custom-select">
                    <option value=""></option>
                    <option value="1">Sem Movimento</option>
                    <option value="2">Eventos Fixos</option>
                    <option value="2">Eventos Variáveis</option>
                    <option value="2">Horista</option>
                  </select>
                </div>
                <div class="form-group position-relative error-l-50">
                  <label>
                    Quantos funcionários possui ?
                  </label>
                  <select id="qtd_funcionario" class="custom-select">
                    <option value=""></option>
                    <?php
                    for ($i=0; $i < 198; $i++) {
                        ?>
                      <option value="<?= $i*10 ?>"><?= $i ?></option>
                    <?php
                    } ?>
                  </select>
                </div>
                <div class="form-group position-relative error-l-50">
                  <label>
                    O Atendimento sera feito pelo Backoffice ?
                  </label>
                  <select id="atendimento_backoffice" class="custom-select">
                    <option value=""></option>
                    <option value="1">SIM</option>
                    <option value="2">NÃO</option>
                  </select>
                </div>
				<!--
                <div class="form-group position-relative error-l-50">
                  <label>
                    Gostaria de ter controle de férias e vencimentos ?
                  </label>
                  <select id="controle_ferias" class="custom-select">
                    <option value=""></option>
                    <option value="1">SIM</option>
                    <option value="2">NÃO</option>
                  </select>
                </div>
                <div class="form-group position-relative error-l-50">
                  <label>
                    Gostaria de ter controle de afastamentos ?
                  </label>
                  <select id="controle_afastamentos" class="custom-select">
                    <option value=""></option>
                    <option value="1">SIM</option>
                    <option value="2">NÃO</option>
                  </select>
                </div>
				--
                <div class="form-group position-relative error-l-50">
                  <label>
                    O Calculo dos benefícios será feito pelo backoffice ?
                  </label>
                  <select id="controle_beneficios" class="custom-select">
                    <option value=""></option>
                    <option value="1">SIM</option>
                    <option value="2">NÃO</option>
                  </select>
                </div>
				<!--
                <div class="form-group position-relative error-l-50">
                  <label>
                    Deseja realizar algum tipo de contrato de trabalho fora do padrão ?
                  </label>
                  <select id="contrato_foradopadrao" class="custom-select">
                    <option value=""></option>
                    <option value="1">SIM</option>
                    <option value="2">NÃO</option>
                  </select>
                </div>
                <div class="form-group position-relative error-l-50">
                  <label>
                    O Controle do banco de horas será feito pelo backoffice ?
                  </label>
                  <select id="controle_bancodehoras" class="custom-select">
                    <option value=""></option>
                    <option value="1">SIM</option>
                    <option value="2">NÃO</option>
                  </select>
                </div>
                <div class="form-group position-relative error-l-50">
                  <label>
                    Terá acordo de trabalho ?
                  </label>
                  <select id="acordo_de_trabalho" class="custom-select">
                    <option value=""></option>
                    <option value="1">SIM</option>
                    <option value="2">NÃO</option>
                  </select>
                </div>
                <!--<div class="form-group position-relative error-l-50">
                  <label>
                    Será feita descrição de cargos e salários ?
                  </label>
                  <select id="descricao_de_cargosetrabalhos" class="custom-select">
                    <option value=""></option>
                    <option value="1">SIM</option>
                    <option value="2">NÃO</option>
                  </select>
                </div>-->

              </form>
            </div>
            <div id="step-3">
              <form id="form-step-3" class="tooltip-label-right" novalidate>
                Resumo
              </form>
            </div>
          </div>
          <div class="btn-toolbar custom-toolbar text-center card-body pt-0" style="margin-top:50em;">
            <button class="btn btn-secondary prev-btn" type="button">Anterior</button>
            <button class="btn btn-secondary next-btn" type="button">Próximo</button>
          </div>
        </div>
      </div>
    </div>
  </div><!-- end:col-12 -->

  <div class="col-12 col-xl-4 mb-4">
    <h5 class="mb-4">Resumo</h5>
    <div class="mb-4">
      <div class='card mb-4'>
        <div class='card-body '>
          <h5>Qual o valor o franqueado cobrará de honorários ?</h5>
          <div class="form-group position-relative error-l-50">
            <label class="form-group has-float-label">
              <input id='valor_honorario' class="form-control">
              </button>
              <br />
                <button class="btn btn-secondary next-btn" type="button">Calcular
              </button>
              <span>Colocar somente números</span>
            </label>
          </div>

        </div>
      </div>
      <div class='card mb-2'>
        <div class='card-body '>
          <h5>Percentual do Franqueado:</h5>
          <h1><span id='percent_cf'>0</span>%</h1>
        </div>
      </div>
      <div class='card mb-2'>
        <div class='card-body '>
          <h5>Percentual do Back-office:</h5>
          <h1><span id='percent_franqueado'>0</span>%</h1>
        </div>
      </div>
<!--
      <div class='card mb-2'>
        <div class='card-body '>
          <h5>Royalties de 12,5%:</h5>
          <h1 style="Color:red">R$: <span id='Royalties'>0</span></h1>
        </div>
      </div>
-->
      <form method="post" action="processa.php" id="resumeForm">
      <button type="submit" class="btn btn-primary mb-0">Calcular</button>
        <!-- Contábil -->
        <input type="hidden" class="form-control" name="tributoEscolhido_contabil"   id="tributoEscolhido" >
        <input type="hidden" class="form-control" name="atividadeEscolhida_contabil" id="atividadeEscolhida">
        <input type="hidden" class="form-control" name="faturamentoEscolhido_contabil" id="faturamentoEscolhido">
        <input type="hidden" class="form-control" name="licitacaoEscolhido_contabil" id="licitacaoEscolhido">
        <input type="hidden" class="form-control" name="entidade_govEscolhido_contabil" id="entidade_govEscolhido">
        <input type="hidden" class="form-control" name="atendimento_cliEscolhido_contabil" id="atendimento_cliEscolhido">
        <input type="hidden" class="form-control" name="reunioes_clienteEscolhido_contabil" id="reunioes_clienteEscolhido">
        <input type="hidden" class="form-control" name="dashboardBIEscolhido_contabil" id="dashboardBIEscolhido">
        <input type="hidden" class="form-control" name="prazoEntregaEscolhido_contabil" id="prazoEntregaEscolhido">
        <!-- Tributario -->
        <input type="hidden" class="form-control"   name="tributoEscolhido_tribut"   id="tributoEscolhido_trib" >
        <input type="hidden" class="form-control" name="atividadeEscolhida_trib" id="atividadeEscolhida_trib">
        <input type="hidden" class="form-control" name="faturamentoEscolhido_trib" id="faturamentoEscolhido_tribut">
        <input type="hidden" class="form-control" name="prazodeentrega_trib" id="prazodeentrega_escolhido">
        <input type="hidden" class="form-control" name="planejamentotribut_escolhido" id="planejamentotribut_escolhido">
        <input type="hidden" class="form-control" name="analise_ncm_escolhido" id="analise_ncm_escolhido">
        <input type="hidden" class="form-control" name="atendimento_cliente_tribut" id="atendimento_cliente_tribut_esolhido">
        <input type="hidden" class="form-control" name="fatorR_escolhido" id="fatorR_escolhido">
        <input type="hidden" class="form-control" name="tributSimplesCardEscolhido" id="tributSimplesCardEscolhido">
        <!-- Departamento Pessoal -->
        <input type="hidden" class="form-control" name="modalidade_folhaEscolhido"  id="modalidade_folhaEscolhido" >
        <input type="hidden" class="form-control" name="qtd_funcionarioEscolhido"  id="qtd_funcionarioEscolhido" >
        <input type="hidden" class="form-control" name="atendimento_backofficeEscolhido"  id="atendimento_backofficeEscolhido" >
        <input type="hidden" class="form-control" name="controle_feriasEscolhido"  id="controle_feriasEscolhido" >
        <input type="hidden" class="form-control" name="controle_afastamentosEscolhido"  id="controle_afastamentosEscolhido" >
        <input type="hidden" class="form-control" name="controle_beneficiosEscolhido"  id="controle_beneficiosEscolhido" >
        <input type="hidden" class="form-control" name="contrato_foradopadraoEscolhido"  id="contrato_foradopadraoEscolhido" >
        <input type="hidden" class="form-control" name="controle_bancodehorasEscolhido"  id="controle_bancodehorasEscolhido" >
        <input type="hidden" class="form-control" name="acordo_de_trabalhoEscolhido"  id="acordo_de_trabalhoEscolhido" >
        <input type="hidden" class="form-control" name="descricao_de_cargosetrabalhosEscolhido"  id="descricao_de_cargosetrabalhosEscolhido" >
        <input type="hidden" class="form-control" name="compraeVendaForaEscolhido" id="compraeVendaForaEscolhido">
        <input type="hidden" id="valor_vendedor"></div>
        <div class="response"></div>
      </form>
    </div>
  </div>
</div>
<span id="output"></span>
</div>
</div><!-- end:row -->
</main>
<?php include_once("inc/footer.php") ?>
</body>
</html>
