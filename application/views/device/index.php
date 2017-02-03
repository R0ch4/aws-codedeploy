<?php defined('SYSPATH') or die('No direct script access.'); ?>
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Lista de Devices
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="/device">Device</a></li>
                <li class="active">Lista de Devices</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <a href="<?php echo URL::site('device/add/', null, false); ?>">Novo Device</a>
            <!-- /.row -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Lista de Devices do Sistema</h3>

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
                                    <th>IMEI</th>
                                    <th>Modelo</th>
                                    <th>Nota fiscal</th>
                                    <th>XML</th>
                                    <th>Status</th>
                                    <th colspan="2"></th>
                                </tr>
                                <?php
                                  foreach ($devices as $device) {
                                    echo "<tr>";
                                    echo "<td>".$device->dev_id."</td>";
                                    echo "<td>".$device->dev_imei."</td>";
                                    echo "<td>".$device->dev_modelo."</td>";
                                    echo "<td>".$device->dev_nota_fiscal."</td>";
                                    echo "<td>".$device->dev_xml_nf."</td>";
                                    echo "<td>".$device->dev_status."</td>";
                                    echo "<td><a href=\"".URL::site('device/edit/'.$device->dev_id, null, false)."\">Editar</a></td>";
                                    echo "<td><a href=\"".URL::site('device/delete/'.$device->dev_id, null, false)."\">Excluir</a></td>";
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
