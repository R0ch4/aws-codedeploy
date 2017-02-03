<?php defined('SYSPATH') or die('No direct script access.'); ?>

     <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Cadastro de Dispositivos</h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="<?php echo URL::site('dispositivo/', null, false); ?>">Dispositivo</a></li>
                    <li class="active">Cadastro de Dispositivo</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">

                    <div class="form-cadastro">
                        <!-- general form elements -->
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Cadastro de Dispositivo</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form role="form" method="post">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="dis_macaddress">MAC Address</label>
                                        <?php echo isset($errors["dis_macaddress"]) ? "<span>".$errors["dis_macaddress"]."</span>" : ""; ?>
                                        <input class="form-control" type="text" name="dis_macaddress" value="<?php echo isset($dispositivo->dis_macaddress) ? $dispositivo->dis_macaddress : ""; ?>" placeholder="Digite o MAC Address"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="dis_senha">Senha</label>
                                        <?php echo isset($errors["dis_senha"]) ? "<span>".$errors["dis_senha"]."</span>" : ""; ?>
                                        <input class="form-control" type="text" name="dis_senha" value="<?php echo isset($dispositivo->dis_senha) ? $dispositivo->dis_senha : ""; ?>" placeholder="Digite a senha"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="dis_numero_serie">Nº Série</label>
                                        <?php echo isset($errors["dis_numero_serie"]) ? "<span>".$errors["dis_numero_serie"]."</span>" :"";?>
                                        <input class="form-control" type="text" name="dis_numero_serie" id="dis_numero_serie" value="<?php echo isset($dispositivo->dis_numero_serie) ? $dispositivo->dis_numero_serie : ""; ?>" placeholder="Digite o número de série">
                                    </div>
                                    <div class="form-group">
                                        <label for="dis_lote">Lote</label>
                                        <?php echo isset($errors["dis_lote"]) ? "<span>".$errors["dis_lote"]."</span>" :"";?>
                                        <input class="form-control" type="text" name="dis_lote" id="dis_lote" value="<?php echo isset($dispositivo->dis_lote) ? $dispositivo->dis_lote : ""; ?>" placeholder="Digite o Lote">
                                    </div>
                                    <div class="form-group">
                                        <label for="dis_status">Status</label>
                                        <?php echo isset($errors["dis_status"]) ? "<span>".$errors["dis_status"]."</span>" : "";?>
                                        <input class="form-control" type="text" name="dis_status" id="dis_status" value="<?php echo isset($dispositivo->dis_status) ? $dispositivo->dis_status : ""; ?>" placeholder="Digite o Status">
                                    </div>
                                </div>
                                <!-- /.box-body -->

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                </div>
                            </form>
                        </div>



                    </div>

                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>

</div>
