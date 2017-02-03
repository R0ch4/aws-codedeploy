<?php defined('SYSPATH') or die('No direct script access.'); ?>

     <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Cadastro de Dispositivos
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="#">Dispositivos</a></li>
                    <li class="active">Cadastro de Dispositos</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">

                    <div class="form-cadastro">
                        <!-- general form elements -->
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Cadastro de Dispositivos</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form role="form">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="dis_macaddress">Mac Andress</label>
                                        <?php echo isset($errors["dis_macaddress"]) ? "<span>".$errors["dis_macaddress"]."</span>" : "";?>
                                        <input class="form-control" type="text" name="dis_macaddress" id="dis_macaddress" placeholder="Digite o Mac Andress">
                                    </div>
                                    <div class="form-group">
                                        <label for="dis_senha">Senha</label>
                                        <?php echo isset($errors["dis_senha"]) ? "<span>".$errors["dis_senha"]."</span>" : ""; ?>
                                        <input type="text" class="form-control" name="dis_senha" id="dis_senha" placeholder="Digite a Senha">
                                    </div>
                                    <div class="form-group">
                                        <label for="dis_numero_serie">Número de Série</label>
                                        <?php echo isset($errors["dis_numero_serie"]) ? "<span>".$errors["dis_numero_serie"]."</span>" : "";?>
                                        <input class="form-control" type="text" name="dis_numero_serie" id="dis_numero_serie" placeholder="Digite o Número de Série">
                                    </div>
                                    <div class="form-group">
                                        <label for="dis_lote">Lote</label>
                                        <?php echo isset($errors["dis_lote"]) ? "<span>".$errors["dis_lote"]."</span>" :"";?>
                                        <input class="form-control" type="text" name="dis_lote" id="dis_lote" placeholder="Digite o numero do Lote">
                                    </div>
                                    <div class="form-group">
                                        <label for="dis_status">Status</label>
                                        <?php echo isset($errors["dis_status"]) ? "<span>".$errors["dis_status"]."</span>" : "";?> 
                                        <input class="form-control" type="text" name="dis_status" id="dis_status" placeholder="Digite o Status">
                                    </div>
                                <!-- /.box-body -->

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Registrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>

</div>