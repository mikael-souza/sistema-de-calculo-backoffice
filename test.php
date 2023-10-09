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
                    <h1>Planilhas de Calculo</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="#">Back Office</a>
                            </li>
                        </ol>
                    </nav>
                    <div class="separator mb-5"></div>
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
                                <li><a href="#step-1">Passo 2<br /><small>Tributário / Fiscal</small></a></li>
                                <li><a href="#step-2">Passo 3<br /><small>Departamento Pessoal</small></a></li>
                            </ul>
                            <div class="card-body">
                                <div id="step-0">
                                    <form id="form-step-0" class="tooltip-label-right" novalidate>

                                        

                                        <div class="form-group position-relative error-l-50">
                                            <label>
                                            Qual é a atividade do cliente ?
                                            </label>
                                            <select id="atividade" class="custom-select" required>
                                                <option value=""></option>
                                                <option value="1">Comércio</option>
                                                <option value="2">Serviço</option>
                                                <option value="2">Comércio e Serviço</option>
                                                <option value="2">ONG`s</option>
                                                <option value="3">Industrias</option>
                                            </select>
                                        </div>
                                        <div class="form-group position-relative error-l-50">
                                            <label>
                                                Qual é a média de faturamento ?
                                            </label>
                                            <select id="faturamento" class="custom-select" required>
                                                <option value=""></option>
                                                <option value="1">0 a 50 MIL</option>
                                                <option value="2">50 a 100 MIL</option>
                                                <option value="2">100 a 500 MIL</option>
                                                <option value="3">500 a 1.000.000 MIL</option>
                                                <option value="3">ACIMA DE 1.000.000 MIL</option>
                                            </select>
                                        </div>


                                    </form>
                                </div>
                                <div id="step-1">
                                    <form id="form-step-1" class="tooltip-label-right" novalidate>
                                        teste
                                    </form>
                                </div>
                                <div id="step-2">
                                    <form id="form-step-2" class="tooltip-label-right" novalidate>
                                        teste
                                    </form>
                                </div>                                
                            </div>
                            <div class="btn-toolbar custom-toolbar text-center card-body pt-0" style="margin-top:5em;">
                                <button class="btn btn-secondary prev-btn" type="button">Previous</button>
                                <button class="btn btn-secondary next-btn" type="button">Next</button>
                                <button class="btn btn-secondary finish-btn" type="submit">Finish</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end:col-12 -->

            <div class="col-12 col-xl-4 mb-4">
                teste
            </div>
        
        </div><!-- end:row -->

        <div class="form-group position-relative error-l-50">
                                            <label>
                                                Qual o regime de tributação ?
                                            </label>
                                            <select id="tributo" class="custom-select" required>
                                                <option value=""></option>
                                                <option value="simples">Simples Nacional/Demais</option>
                                                <option value="real">Lucro Real</option>
                                                <option value="presumido">Lucro Presumido</option>
                                            </select>
                                        </div>
    </main>
    

    <?php include_once("inc/footer.php") ?>
</body>

</html>
