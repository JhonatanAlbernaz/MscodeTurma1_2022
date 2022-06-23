<?php
session_start(); // Inicia a sessão.
require __DIR__ . '/../../../vendor/autoload.php';

use App\Model\{Admin, Endereco, Inscrito, Middleware};

Middleware::verificaSeLogou(); // Verifica se o administrador está logado e autenticado.

$inscritoModel = new Inscrito(); // Instância de Inscrito.
$inscritos = $inscritoModel->buscarOrdenadaPorDataCriacaoDecrescente(); // Busca todos os inscritos do banco de dados.
$adminModel = new Admin(); // Instância de Admin.
$enderecoModel = new Endereco(); // Instância de Endereco.
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- Custom fonts for this template-->
    <link href="../assets/vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">

    <style>

        .img-inscrito-lista, .img-inscrito-modal {
            -moz-transition: all 0.5s;
            -webkit-transition: all 0.5s;
            transition: all 0.5s;
        }

        .img-inscrito-lista:hover {
            -moz-transform: scale(1.2);
            -webkit-transform: scale(1.2);
            transform: scale(1.3);
        }

        .img-inscrito-modal:hover {
            -moz-transform: scale(1.2);
            -webkit-transform: scale(1.2);
            transform: scale(1.35);
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php require __DIR__ . '/components/sidebar.php' ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php require __DIR__ . '/components/topbar.php' ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="row mb-3">
                        <div class="
                        col-lg-2 offset-lg-10
                        col-md-3 offset-md-9
                        col-sm-4 offset-sm-8
                        col-8 offset-4">
                            <button class="btn btn-dark w-100 d-flex justify-content-between" data-bs-toggle="modal" data-bs-target="#modal_inscrever" >Inscrever <i class="fa fa-user-plus"></i></button>
                        </div>
                    </div>
                    <?php include('../erros/alerts.php') ?>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Lista de Inscritos</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover" id="listaInscritos">
                                    <thead>
                                        <tr>
                                            <th data-orderable="false">Foto</th>
                                            <th>Nome</th>
                                            <th>E-mail</th>
                                            <th>Nascimento</th>
                                            <th>CPF</th>
                                            <th>Inscrito Por</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($inscritos as $inscrito) { ?> <!-- Percorre o array de inscritos. -->
                                            <tr class="text-center">
                                                <td style="vertical-align: middle; ">
                                                    <img src="../../Storage/perfil/<?= $inscrito['foto'] ?>"
                                                         class="img-inscrito-lista"
                                                         style="
                                                            object-fit: cover;
                                                            height: 70px;
                                                            width: 70px;
                                                            border: 2px solid #ddd;
                                                            border-radius: 50%;  /* Rounded border */
                                                            ">
                                                </td>
                                                <td style="vertical-align: middle"><?= $inscrito['nome'] ?></td>
                                                <td style="vertical-align: middle"><?= $inscrito['email'] ?></td>
                                                <td style="vertical-align: middle"><?= date('d/m/Y', strtotime($inscrito['data_nascimento'])) ?></td>
                                                <td style="vertical-align: middle"><?= $inscrito['cpf'] ?></td>
                                                <td style="vertical-align: middle">
                                                    <span class="badge badge-pill bg-gradient-dark text-white py-2 px-3"><?= $inscrito['cadastrado_por'] ? $adminModel->buscarPorId($inscrito['cadastrado_por'])['nome'] : "onepage" ?></span>
                                                </td>
                                                <td style="vertical-align: middle">
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <?php $endereco = $enderecoModel->buscarPorId($inscrito['enderecos_id']); ?>
                                                        <button type="button" class="btn btn-sm btn-dark btn-detalhes" data-inscrito='<?= json_encode($inscrito) ?>' data-admin='<?= $inscrito['cadastrado_por'] ? json_encode($adminModel->buscarPorId($inscrito['cadastrado_por'])) : false ?>' data-endereco='<?= json_encode($endereco) ?>'>Detalhes</button>
                                                        <button type="button" class="btn btn-sm btn-danger btn-editar"
                                                                data-inscrito='<?= json_encode($inscrito) ?>'
                                                                data-admin='<?= $inscrito['cadastrado_por'] ? json_encode($adminModel->buscarPorId($inscrito['cadastrado_por'])) : false ?>'
                                                                data-endereco='<?= json_encode($endereco) ?>'>
                                                            Editar
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
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

    <!-- Modal -->
    <div class="modal fade" id="modal_inscrever" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><b class="text-gray-700 ml-2">Inscrição</b></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="../../Action/inscrito/cadastrar.php" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">

                        <div class="col-12 mb-3">
                            <div class="card">
                                <div class="card-header">
                                    <b class="text-gray-700">Dados Pessoais</b>
                                </div>
                                <div class="card-body">
                                    <div class="row g-3 d-flex align-items-center">
                                        <div class="col-lg-2 d-flex align-items-center justify-content-center">
                                            <img
                                                id="inscrever_foto_view"
                                                src="https://i1.wp.com/www.hotbook.com.br/wp-content/uploads/2019/09/plural-de-perfil.png?resize=150%2C147&ssl=1"
                                                class="img-inscrito-lista"
                                                style="
                                                    object-fit: cover;
                                                    height: 100px;
                                                    width: 100px;
                                                    border: 2px solid #ddd; /* Gray border */
                                                ">
                                        </div>

                                        <div class="col-lg-10">

                                            <div class="row g-3">

                                                <div class="col-lg-6">
                                                    <label for="foto" class="form-label">Foto</label>
                                                    <input class="form-control form-control-sm" id="inscrever_foto" name="foto" type="file" required>
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="editar_nome" class="form-label">Nome Completo</label>
                                                    <input type="text" class="form-control form-control-sm" id="inscrever_nome" name="nome" value="" required>
                                                </div>

                                                <div class="col-md-5">
                                                    <label for="editar_email" class="form-label">E-mail</label>
                                                    <input type="email" class="form-control form-control-sm" id="inscrever_email" name="email" value="" required>
                                                </div>

                                                <div class="col-lg-4 col-md-6">
                                                    <label for="editar_data_nascimento" class="form-label">Nascimento</label>
                                                    <input
                                                            type="date"
                                                            class="form-control form-control-sm"
                                                            id="inscrever_data_nascimento"
                                                            name="data_nascimento"
                                                            max="<?= date('Y-m-d', strtotime('-14 years' ))?>" min="<?= date('Y-m-d', strtotime('-24 years' ))?>"
                                                            required>
                                                </div>

                                                <div class="col-lg-3 col-md-6">
                                                    <label for="editar_cpf" class="form-label">CPF</label>
                                                    <input type="text" class="form-control form-control-sm cpf" id="inscrever_cpf" name="cpf" value="" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <b class="text-gray-700">Endereço</b>
                                </div>

                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-md-4 col-lg">
                                            <label for="editar_cep" class="form-label">CEP</label>
                                            <input type="text" class="form-control form-control-sm cep cep" id="inscrever_cep" name="cep" value="" required>
                                        </div>
                                        <div class="col-md-8 col-lg">
                                            <label for="editar_rua" class="form-label">Rua</label>
                                            <input type="text" class="form-control form-control-sm rua" id="inscrever_rua" name="rua" value="" required>
                                        </div>
                                        <div class="col-md-4 col-lg-2">
                                            <label for="editar_numero" class="form-label">Número</label>
                                            <input type="text" class="form-control form-control-sm numero" id="inscrever_numero" name="numero" value="" required>
                                        </div>
                                        <div class="col-md-8 col-lg">
                                            <label for="editar_bairro" class="form-label">Bairro</label>
                                            <input type="text" class="form-control form-control-sm bairro" id="inscrever_bairro" name="bairro" value="" required>
                                        </div>
                                    </div>

                                    <div class="row g-3">
                                        <div class="col-md">
                                            <label for="editar_cidade" class="form-label">Cidade</label>
                                            <input type="text" class="form-control form-control-sm cidade" id="inscrever_cidade" name="cidade" value="" required>
                                        </div>

                                        <div class="col-md">
                                            <label for="editar_complemento" class="form-label">Complemento</label>
                                            <input type="text" class="form-control form-control-sm complemento" id="inscrever_complemento" name="complemento" value="">
                                        </div>

                                        <div class="col-md">
                                            <label for="editar_estado" class="form-label">Estado (UF)</label>
                                            <input type="text" class="form-control form-control-sm estado" id="inscrever_estado" name="estado" value="" maxlength="2" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <input type="hidden"
                               name="cadastrado_por"
                               id="inscrever_cadastrado_por"
                               value="<?= $_SESSION['autenticado']['id']?>">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Sair</button>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal_editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Editar: <span id="editar_title"></span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="../../Action/inscrito/editar.php" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">

                        <div class="col-12 mb-3">
                            <div class="card">
                                <div class="card-header">
                                    <b class="text-gray-700">Dados Pessoais</b>
                                </div>
                                <div class="card-body">
                                    <div class="row g-3 d-flex align-items-center">
                                        <div class="col-lg-2 d-flex align-items-center justify-content-center">

                                            <img
                                                class="img-fluid img-thumbnail img-inscrito-modal"
                                                id="editar_foto_view"
                                                src=""
                                                style="
                                                    object-fit: cover;
                                                    height: 100px;
                                                    width: 100px;
                                                    border: 2px solid #ddd; /* Gray border */
                                                ">
                                        </div>

                                        <div class="col-lg-10">

                                            <div class="row g-3">

                                                <div class="col-lg-6">
                                                    <label for="foto" class="form-label">Alterar Foto</label>
                                                    <input id="editar_foto" class="form-control form-control-sm" id="foto" name="foto" type="file">
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="editar_nome" class="form-label">Nome Completo</label>
                                                    <input type="text" class="form-control form-control-sm" id="editar_nome" name="nome" value="">
                                                </div>

                                                <div class="col-md-5">
                                                    <label for="editar_email" class="form-label">E-mail</label>
                                                    <input type="email" class="form-control form-control-sm" id="editar_email" name="email" value="">
                                                </div>

                                                <div class="col-lg-4 col-md-6">
                                                    <label for="editar_data_nascimento" class="form-label">Nascimento</label>
                                                    <input type="date" class="form-control form-control-sm" id="editar_data_nascimento" name="data_nascimento" value="">
                                                </div>

                                                <div class="col-lg-3 col-md-6">
                                                    <label for="editar_cpf" class="form-label">CPF</label>
                                                    <input type="text" class="form-control form-control-sm cpf" id="editar_cpf" name="cpf" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <b class="text-gray-700">Endereço</b>
                                </div>

                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-md-4 col-lg">
                                            <label for="editar_cep" class="form-label">CEP</label>
                                            <input type="text" class="form-control form-control-sm cep cep" id="editar_cep" name="cep" value="">
                                        </div>
                                        <div class="col-md-8 col-lg">
                                            <label for="editar_rua" class="form-label">Rua</label>
                                            <input type="text" class="form-control form-control-sm rua" id="editar_rua" name="rua" value="">
                                        </div>
                                        <div class="col-md-4 col-lg-2">
                                            <label for="editar_numero" class="form-label">Número</label>
                                            <input type="text" class="form-control form-control-sm numero" id="editar_numero" name="numero" value="">
                                        </div>
                                        <div class="col-md-8 col-lg">
                                            <label for="editar_bairro" class="form-label">Bairro</label>
                                            <input type="text" class="form-control form-control-sm bairro" id="editar_bairro" name="bairro" value="">
                                        </div>
                                    </div>

                                    <div class="row g-3">
                                        <div class="col-md">
                                            <label for="editar_cidade" class="form-label">Cidade</label>
                                            <input type="text" class="form-control form-control-sm cidade" id="editar_cidade" name="cidade" value="">
                                        </div>

                                        <div class="col-md">
                                            <label for="editar_complemento" class="form-label">Complemento</label>
                                            <input type="text" class="form-control form-control-sm complemento" id="editar_complemento" name="complemento" value="">
                                        </div>

                                        <div class="col-md">
                                            <label for="editar_estado" class="form-label">Estado (UF)</label>
                                            <input type="text" class="form-control form-control-sm estado" id="editar_estado" name="estado" value="" maxlength="2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <input type="hidden" name="id" id="editar_id" value="">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Sair</button>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal_detalhes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b class="text-gray-700">Detalhes: <span id="detalhes_title" </b></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-12 mb-3">
                            <div class="card">
                                <div class="card-header">
                                    <b class="text-gray-700">Dados Pessoais</b>
                                </div>
                                <div class="card-body">
                                    <div class="row g-3 d-flex align-items-center">
                                        <div class="col-lg-2 d-flex align-items-center justify-content-center">


                                                <img
                                                    class="img-fluid img-thumbnail img-inscrito-modal"
                                                    id="detalhes_foto"
                                                    src=""
                                                    style="
                                                    object-fit: cover;
                                                    height: 100px;
                                                    width: 100px;
                                                    border: 2px solid #ddd; /* Gray border */
                                                ">

                                        </div>
                                        <div class="col-lg-10">
                                            <div class="row g-3">
                                                <div class="col-md-6"><b class="text-gray-700">Nome:</b> <span id="detalhes_nome"></span></div>
                                                <div class="col-md-6"><b class="text-gray-700">CPF:</b> <span id="detalhes_cpf"></span></div>
                                                <div class="col-md-6"><b class="text-gray-700">E-mail:</b> <span id="detalhes_email"></span></div>
                                                <div class="col-md-6"><b class="text-gray-700">Nascimento:</b> <span id="detalhes_data_nascimento"></span></div>
                                                <div class="col-md-6"><b class="text-gray-700">Inscrito Por:</b> <span id="detalhes_cadastrado_por"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <b class="text-gray-700">Endereço</b>
                                </div>

                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-md-4"><b class="text-gray-700">CEP:</b> <span id="detalhes_cep"></span></div>
                                        <div class="col-md-4"><b class="text-gray-700">Rua:</b> <span id="detalhes_rua"></span></div>
                                        <div class="col-md-4"><b class="text-gray-700">Número:</b> <span id="detalhes_numero"></span></div>
                                        <div class="col-md-4"><b class="text-gray-700">Bairro:</b> <span id="detalhes_bairro"></span></div>
                                        <div class="col-md-4"><b class="text-gray-700">Cidade:</b> <span id="detalhes_cidade"></span></div>
                                        <div class="col-md-4"><b class="text-gray-700">Complemento:</b> <span id="detalhes_complemento"></span></div>
                                        <div class="col-md-4"><b class="text-gray-700">Estado:</b> <span id="detalhes_estado"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Sair</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="../assets/vendor/jquery/jquery.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin-2.js"></script>

    <!-- Page level plugins -->
    <script src="../assets/vendor/datatables/jquery.dataTables.js"></script>
    <script src="../assets/vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Page level custom scripts -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.1.60/inputmask/jquery.inputmask.js"></script>

    <script src="../../../assets/js/mascara.js"></script>
    <script src="../assets/js/editar.js"></script>
    <script src="../assets/js/detalhes.js"></script>
    <script src="../assets/js/inscrever.js"></script>
    <script src="../assets/js/traducaoDataTables.js"></script>
    <script src="../../../assets/js/autoCompleteCEP.js"></script>

</body>

</html>