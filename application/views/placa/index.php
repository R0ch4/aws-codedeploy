<?php defined('SYSPATH') or die('No direct script access.'); ?>
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Lista de Placas
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="/placa">Placa</a></li>
                <li class="active">Lista de Placas</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <a href="<?php echo URL::site('placa/add/', null, false); ?>">Novo Placa</a>
            <!-- /.row -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Lista de Placas do Sistema</h3>

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
                                    <th>Placa</th>
                                    <th>Status</th>
                                    <th>Modelo</th>
                                    <th colspan="2"></th>
                                </tr>
                                <?php
                                  foreach ($placas as $placa) {
                                    echo "<tr>";
                                    echo "<td>".$placa->pla_id."</td>";
                                    echo "<td>".$placa->pla_placa."</td>";
                                    echo "<td>".$placa->pla_status."</td>";
                                    echo "<td>".$placa->modelo->mod_modelo."</td>";
                                    echo "<td><a href=\"".URL::site('placa/edit/'.$placa->pla_id, null, false)."\">Editar</a></td>";
                                    echo "<td><a href=\"".URL::site('placa/delete/'.$placa->pla_id, null, false)."\">Excluir</a></td>";
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
