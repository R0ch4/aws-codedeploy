<?php defined('SYSPATH') or die('No direct script access.'); ?>
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Lista de Dispositivos
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="/dispositivo">Dispositivo</a></li>
                <li class="active">Lista de Dispositivos</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <a href="<?php echo URL::site('dispositivo/add/', null, false); ?>">Novo Dispositivo</a>
            <!-- /.row -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Lista de Dispositivos do Sistema</h3>

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
                                    <th>MAC Address</th>
                                    <th>Senha</th>
                                    <th>Nº Série</th>
                                    <th>Lote</th>
                                    <th>Status</th>
                                    <th colspan="2"></th>
                                </tr>
                                <?php
                                  foreach ($dispositivos as $dispositivo) {
                                    echo "<tr>";
                                    echo "<td>".$dispositivo->dis_id."</td>";
                                    echo "<td>".$dispositivo->dis_macaddress."</td>";
                                    echo "<td>".$dispositivo->dis_senha."</td>";
                                    echo "<td>".$dispositivo->dis_numero_serie."</td>";
                                    echo "<td>".$dispositivo->dis_lote."</td>";
                                    echo "<td>".$dispositivo->dis_status."</td>";
                                    echo "<td><a href=\"".URL::site('dispositivo/edit/'.$dispositivo->dis_id, null, false)."\">Editar</a></td>";
                                    echo "<td><a href=\"".URL::site('dispositivo/delete/'.$dispositivo->dis_id, null, false)."\">Excluir</a></td>";
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
