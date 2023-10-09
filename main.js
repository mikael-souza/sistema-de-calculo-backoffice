//Formulário Contabilidade
$('#Tributo').on('change', function() {
  var values = $(this).find('option:selected').map(function() {
      return this.text;
  }).get().join(', ');
  $('#tributoEscolhido').val(values);
});
$('#atividade').on('change', function() {
  var values = $(this).find('option:selected').map(function() {
      return this.text;
  }).get().join(', ');
  $('#atividadeEscolhida').val(values);
});
$('#faturamento').on('change', function() {
  var values = $(this).find('option:selected').map(function() {
      return this.text;
  }).get().join(', ');
  $('#faturamentoEscolhido').val(values);
});
$('#licitacao').on('change', function() {
  var values = $(this).find('option:selected').map(function() {
      return this.text;
  }).get().join(', ');
  $('#licitacaoEscolhido').val(values);
});
$('#entidade_gov').on('change', function() {
  var values = $(this).find('option:selected').map(function() {
      return this.text;
  }).get().join(', ');
  $('#entidade_govEscolhido').val(values);
});
$('#atendimento_cli').on('change', function() {
  var values = $(this).find('option:selected').map(function() {
      return this.text;
  }).get().join(', ');
  $('#atendimento_cliEscolhido').val(values);
});
$('#reunioes_cliente').on('change', function() {
  var values = $(this).find('option:selected').map(function() {
      return this.text;
  }).get().join(', ');
  $('#reunioes_clienteEscolhido').val(values);
});
$('#dashboardBI').on('change', function() {
  var values = $(this).find('option:selected').map(function() {
      return this.text;
  }).get().join(', ');
  $('#dashboardBIEscolhido').val(values);
});
$('#prazoEntrega').on('change', function() {
  var values = $(this).find('option:selected').map(function() {
      return this.text;
  }).get().join(', ');
  $('#prazoEntregaEscolhido').val(values);
});

//Formulário Tributário
$('#regimetribut_trib').on('change', function() {
  var values = $(this).find('option:selected').map(function() {
      return this.text;
  }).get().join(', ');
  $('#tributoEscolhido_trib').val(values);
});
$('#atividade_trib').on('change', function() {
  var values = $(this).find('option:selected').map(function() {
      return this.text;
  }).get().join(', ');
  $('#atividadeEscolhida_trib').val(values);
});
$('#faturamento_tribut').on('change', function() {
  var values = $(this).find('option:selected').map(function() {
      return this.text;
  }).get().join(', ');
  $('#faturamentoEscolhido_tribut').val(values);
});
$('#prazodeentrega').on('change', function() {
  var values = $(this).find('option:selected').map(function() {
      return this.text;
  }).get().join(', ');
  $('#prazodeentrega_escolhido').val(values);
});
$('#planejamentotribut').on('change', function() {
  var values = $(this).find('option:selected').map(function() {
      return this.text;
  }).get().join(', ');
  $('#planejamentotribut_escolhido').val(values);
});
$('#analise_ncm').on('change', function() {
  var values = $(this).find('option:selected').map(function() {
      return this.text;
  }).get().join(', ');
  $('#analise_ncm_escolhido').val(values);
});
$('#atendimento_cliente_tribut').on('change', function() {
  var values = $(this).find('option:selected').map(function() {
      return this.text;
  }).get().join(', ');
  $('#atendimento_cliente_tribut_esolhido').val(values);
});
$('#fatorR').on('change', function() {
  var values = $(this).find('option:selected').map(function() {
      return this.text;
  }).get().join(', ');
  $('#fatorR_escolhido').val(values);
});
$('#tributSimplesCard').on('change', function() {
  var values = $(this).find('option:selected').map(function() {
      return this.text;
  }).get().join(', ');
  $('#tributSimplesCardEscolhido').val(values);
});
//Formulário de DP
$('#modalidade_folha').on('change', function() {
  var values = $(this).find('option:selected').map(function() {
      return this.text;
  }).get().join(', ');
  $('#modalidade_folhaEscolhido').val(values);
});
$('#qtd_funcionario').on('change', function() {
  var values = $(this).find('option:selected').map(function() {
      return this.text;
  }).get().join(', ');
  $('#qtd_funcionarioEscolhido').val(values);
});
$('#atendimento_backoffice').on('change', function() {
  var values = $(this).find('option:selected').map(function() {
      return this.text;
  }).get().join(', ');
  $('#atendimento_backofficeEscolhido').val(values);
});
$('#controle_ferias').on('change', function() {
  var values = $(this).find('option:selected').map(function() {
      return this.text;
  }).get().join(', ');
  $('#controle_feriasEscolhido').val(values);
});
$('#controle_afastamentos').on('change', function() {
  var values = $(this).find('option:selected').map(function() {
      return this.text;
  }).get().join(', ');
  $('#controle_afastamentosEscolhido').val(values);
});
$('#controle_beneficios').on('change', function() {
  var values = $(this).find('option:selected').map(function() {
      return this.text;
  }).get().join(', ');
  $('#controle_beneficiosEscolhido').val(values);
});
$('#contrato_foradopadrao').on('change', function() {
  var values = $(this).find('option:selected').map(function() {
      return this.text;
  }).get().join(', ');
  $('#contrato_foradopadraoEscolhido').val(values);
});
$('#controle_bancodehoras').on('change', function() {
  var values = $(this).find('option:selected').map(function() {
      return this.text;
  }).get().join(', ');
  $('#controle_bancodehorasEscolhido').val(values);
});
$('#acordo_de_trabalho').on('change', function() {
  var values = $(this).find('option:selected').map(function() {
      return this.text;
  }).get().join(', ');
  $('#acordo_de_trabalhoEscolhido').val(values);
});
$('#descricao_de_cargosetrabalhos').on('change', function() {
  var values = $(this).find('option:selected').map(function() {
      return this.text;
  }).get().join(', ');
  $('#descricao_de_cargosetrabalhosEscolhido').val(values);
});
$('#compraeVendaFora').on('change', function() {
  var values = $(this).val();
  $('#compraeVendaForaEscolhido').val(values);
});


$('#resumeForm').each(function() {
    $(this).validate({
      submitHandler: function(form) {
        var $form = $(form),
        str = $form.serialize(),
        loading = "<i class='fa fa-spinner fa-pulse fa-3x fa-fw'></i>";
        //mostrando icone de loadind
        $.ajax({
          type: "POST",
          url: $form.attr('action'),
          data: str,
          beforeSend: function() {
            $("#status").html("<i class='fa fa-spinner fa-pulse fa-3x fa-fw'></i> Enviando...");
          },
          success: function(responseText, statusText, xhr, $form) {
            jQuery(".response").html(responseText).hide().slideDown("Slow");
          }
      });
    }
  });
}); // each contactform

$('#valor_honorario').on('change', function() {

    var total_bckoff = parseFloat($('#total_bckoff').val()) || 0;
    var valor_honorario = parseFloat($('#valor_honorario').val()) || 0;
    var percent_franqueado = parseFloat($('#percent_franqueado').val()) || 0;
    var percent_cf = parseFloat($('#percent_cf').val()) || 0;
    var royalties = valor_honorario*0.12;

    var percent_franqueado = (total_bckoff / valor_honorario)*100;
    var percent_cf = 100 - percent_franqueado;

    $('#percent_cf').html(percent_cf.toFixed(2));
    $('#percent_franqueado').html(percent_franqueado.toFixed(2));
    $('#Royalties').html(royalties.toFixed(2));

    console.log(total_bckoff);
    console.log(percent_franqueado);
    console.log(percent_cf);
    console.log(royalties);
  });
