<?php defined('SYSPATH') or die('No direct script access.'); ?>
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Lista de Veículo
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="/modelo">Veículos</a></li>
                <li class="active">Lista de Veículos</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <a href="<?php echo URL::site('modelo/add/', null, false); ?>">Novo Veículo</a>
            <!-- /.row -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Lista de veículos do Sistema</h3>

                            <div class="box-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tr>
                                    <th>ID</th>
                                    <th>Modelo</th>
                                    <th>Marca</th>
                                    <th>Ano</th>
                                    <th>Placa</th>
                                    <th>Chassi</th>
                                    <th>Observação</th>
                                    <th colspan="2"></th>
                                </tr>
                                <?php
                                  foreach ($modelos as $modelo) {
                                    echo "<tr>";
                                    echo "<td>".$modelo->mod_id."</td>";
                                    echo "<td>".$modelo->mod_modelo."</td>";
                                    echo "<td>".$modelo->mod_marca."</td>";
                                    echo "<td>".date('Y', strtotime($modelo->mod_ano))."</td>";
                                    echo "<td>".$modelo->mod_placa."</td>";
                                    echo "<td>".$modelo->mod_chassi."</td>";
                                    echo "<td>".$modelo->mod_observacao."</td>";
                                    echo "<td><a href=\"".URL::site('modelo/edit/'.$modelo->mod_id, null, false)."\">Editar</a></td>";
                                    echo "<td><a href=\"".URL::site('modelo/delete/'.$modelo->mod_id, null, false)."\">Excluir</a></td>";
                                    echo "</tr>\r\n";
                                  }
                                ?>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
