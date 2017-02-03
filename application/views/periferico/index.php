<?php defined('SYSPATH') or die('No direct script access.'); ?>
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Lista de Perifericos
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="/modelo">Periférico</a></li>
                <li class="active">Lista de Periféricos</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <a href="<?php echo URL::site('periferico/add/', null, false); ?>">Novo Periférico</a>
            <!-- /.row -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Lista de Periféricos do Sistema</h3>

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
                                    <th>Nome do Periférico</th>
                                    <th>Número de Série</th>
                                    <th>Status</th>
                                    <th colspan="2"></th>
                                </tr>
                                <?php
                                  foreach ($perifericos as $periferico) {
                                    echo "<tr>";
                                    echo "<td>".$periferico->per_id."</td>";
                                    echo "<td>".$periferico->per_nome."</td>";
                                    echo "<td>".$periferico->per_numero_serie."</td>";
                                    echo "<td>".$periferico->per_status."</td>";
                                    echo "<td><a href=\"".URL::site('periferico/edit/'.$periferico->per_id, null, false)."\">Editar</a></td>";
                                    echo "<td><a href=\"".URL::site('periferico/delete/'.$periferico->per_id, null, false)."\">Excluir</a></td>";
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
