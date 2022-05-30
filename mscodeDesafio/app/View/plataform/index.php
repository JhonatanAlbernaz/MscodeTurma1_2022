<?php
session_start(); // Inicia a sessão.
require __DIR__ . '/../../../vendor/autoload.php';

use App\Model\{Middleware, Inscrito, Admin};

Middleware::verificaSeLogou(); // Verifica se o administrador está logado e autenticado.

$inscitosModel = new Inscrito(); // Instância de Inscrito.
$adminModel = new Admin(); // Instância de Admin.
$inscritosCrescentes = $inscitosModel->buscarOrdenadaPorDataCriacaoCrescente();
$inscritosDecrecente = $inscitosModel->buscarOrdenadaPorDataCriacaoDecrescente();

$idades = array(); // Cria um array vazio de idades dos inscritos para manipulações.
$datas = array(); // Cria um array vazio de data de inscrições dos inscritos para manipulações.
$admins = array(); // Cria um array vazio de admins que cadastraram inscritos para manipulações.

foreach ($inscritosCrescentes as $inscrito) { // Percorre o array de inscritos.

    if (!isset($idades[date_diff(date_create($inscrito['data_nascimento']), date_create('now'))->y])) { // Verifica se não existe o índice referenciado no array de idades.

        $idades[date_diff(date_create($inscrito['data_nascimento']), date_create('now'))->y] = 1; // Define o índice igual a 1.

    } else { // Caso exista o índice...

        $idades[date_diff(date_create($inscrito['data_nascimento']), date_create('now'))->y] += 1; // Soma mais um no valor do índice.
    }

    if (!isset($datas[date('d/m/y', strtotime($inscrito['criado_em']))])) { // Verifica se não existe o índice referenciado no array de datas de inscriçãp.

        $datas[date('d/m/y', strtotime($inscrito['criado_em']))] = 1; // Define o índice igual a 1.

    } else { // Caso exista o índice...

        $datas[date('d/m/y', strtotime($inscrito['criado_em']))] += 1; // Soma mais um no valor do índice.
    }

    if($inscrito['cadastrado_por'] != null){ // Verifica se o inscrito foi cadastrado por um administrador.

        if (!isset($admins[$adminModel->buscarPorId($inscrito['cadastrado_por'])['nome']])) { // Verifica se não existe o índeie referenciado no array de admins que cadastraram inscritos.

            $admins[$adminModel->buscarPorId($inscrito['cadastrado_por'])['nome']] = 1; // Define o índice igual a 1.

        } else { // Caso exista o índice...

            $admins[$adminModel->buscarPorId($inscrito['cadastrado_por'])['nome']] += 1; // Soma mais um no valor do índice.
        }
    }
}


ksort($idades); // Ordena o array de idades por ordem numérica

$arrayIdades = array_keys($idades); // Recupera somente o array de idades.
$arrayQuantidadePorIdades = array_values($idades); // Recupera somente o array de quantidades de inscritos cadastrados por idades.

$arrayDatas = array_keys($datas); // Recupera somente o array das datas de inscrições.
$arrayQuantidadesPorDatas = array_values($datas); // Recupera somente o array de quantidades de inscritos cadastrados por datas.

$arrayAdmins = array_keys($admins); // Recupera somente o array de amins que cadastraram inscritos.
$arrayQuantidadesPorAdmins = array_values($admins); // Recupera somente o array de quantidades por admins que cadastraram inscritos.

$arrayIdades  = array_map(function($e){ // Faz um mapeamento do array de idades dos inscritos.
    return "{$e} anos"; // Concatena cada idade com a string " anos".
}, $arrayIdades); // Retorna o array já modificado.


/**
 * Faz a codificação dos arrays abaixo para formato de json, assim sendo possível realizar a leitura com o JavaScript.
 */
$idades = json_encode($arrayIdades);
$quantidadesPorIdade = json_encode($arrayQuantidadePorIdades);
$datas = json_encode($arrayDatas);
$quantidadesPorData = json_encode($arrayQuantidadesPorDatas);
$admins = json_encode($arrayAdmins);
$quantidadesPorAdmins = json_encode($arrayQuantidadesPorAdmins);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MS Code - Administrativo</title>

    <link rel="icon" href="../assets/img/favicon.ico" type="image/png">

    <!-- Custom fonts for this template-->
    <link href="../assets/vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php require __DIR__ . '/components/sidebar.php' ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php require __DIR__ . '/components/topbar.php' ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <?php include('../erros/alerts.php') ?>

                    <div class="row">
                        <div class="col-xl-8 col-12">
                            <div class="row">
                                <!-- Gráfico de linha - Inscrições por datas -->
                                <div class="col-xl-6 col-12 mb-3">
                                    <!-- Bar Chart -->
                                    <div class="card shadow">
                                        <div class="card-body d-flex align-items-center">
                                            <canvas class="data_inscricoes"
                                                    data-datas='<?=$datas?>'
                                                    data-quantidades_por_datas='<?=$quantidadesPorData?>'
                                            >
                                            </canvas>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6  col-12 mb-3">
                                    <div class="card shadow h-100">
                                        <div class="card-body d-flex align-items-center">
                                            <canvas class="inscritos_por_admins"
                                                    data-admins='<?=$admins?>'
                                                    data-quantidades_por_admins='<?=$quantidadesPorAdmins?>'
                                            >

                                            </canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 mb-3 ">
                                    <!-- Area Chart -->
                                    <div class="card shadow">
                                        <div class="card-body d-flex align-items-center">
                                            <canvas class="idades_inscritos"
                                                    data-idades='<?= "$idades" ?>'
                                                    data-quantidades_por_idades='<?= "$quantidadesPorIdade" ?>'
                                            >
                                            </canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-12 mb-3">
                            <div class="card shadow h-100">
                                <div class="card-header">
                                    <h6 class="text-uppercase">Últimos inscritos</h6>
                                </div>
                                <div class="card-body p-0 bg-white">
                                    <table class="table table-borderless p-0">
                                        <tbody class="p-0">
                                        <?php
                                        $rank = (count($inscritosDecrecente) > 8) ? 8 : count($inscritosDecrecente);
                                            if($inscritosDecrecente) {
                                                for ($i=0; $i < $rank; $i++){?>
                                                <tr>
                                                    <th style="vertical-align: middle"><img src="../../Storage/perfil/<?= $inscritosDecrecente[$i]['foto'] ?>"
                                                             class="img-inscrito-lista"
                                                             style="
                                                                object-fit: cover;
                                                                height: 40px;
                                                                width: 40px;
                                                                border: 2px solid #ddd;
                                                                border-radius: 50%;  /* Rounded border */
                                                                "></th>
                                                    <th style="vertical-align: middle"><?=$inscritosDecrecente[$i]['nome']?></th>
                                                    </tr>
                                        <?php }} ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php require __DIR__ . '/components/footer.php' ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Bootstrap core JavaScript-->
    <script src="../assets/vendor/jquery/jquery.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/vendor/jquery-easing/jquery.easing.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin-2.js"></script>

    <!-- Page level plugins -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>

    <script>
        let cores = [
            "#39c0b3", "#2ab0c5", "#227FB0",  "#274389", "#5c4399", "#6c2a6a",
            "#b32E37", "#eb403b", "#e98931", "#fbb735"
        ]
    </script>

    <!-- Scripts dos gráficos -->
    <script src="../assets/js/graficos/inscritos_por_idade.js"></script>
    <script src="../assets/js/graficos/inscricoes_por_data.js"></script>
    <script src="../assets/js/graficos/inscritos_por_admins.js"></script>

</body>

</html>