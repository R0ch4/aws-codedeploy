<?php defined('SYSPATH') or die('No direct script access.'); ?>

     <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Cadastro de Veículos</h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="<?php echo URL::site('modelo/', null, false); ?>">Veículo</a></li>
                    <li class="active">Cadastro de Veículo</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">

                    <div class="form-cadastro">
                        <!-- general form elements -->
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Cadastro de Veículo</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form role="form" method="post">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="mod_modelo">Veículo</label>
                                        <?php echo isset($errors["mod_modelo"]) ? "<span>".$errors["mod_modelo"]."</span>" : ""; ?>
                                        <input class="form-control" type="text" name="mod_modelo" value="<?php echo isset($modelo->mod_modelo) ? $modelo->mod_modelo : ""; ?>" placeholder="Digite o modelo do veículo"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="mod_marca">Marca</label>
                                        <?php echo isset($errors["mod_marca"]) ? "<span>".$errors["mod_marca"]."</span>" :"";?>
                                        <input class="form-control" type="text" name="mod_marca" id="mod_marca" value="<?php echo isset($modelo->mod_marca) ? $modelo->mod_marca : ""; ?>" placeholder="Digite a marca do veículo">
                                    </div>
                                    <div class="form-group">
                                        <label for="mod_ano">Ano</label>
                                        <?php echo isset($errors["mod_ano"]) ? "<span>".$errors["mod_ano"]."</span>" :"";?>
                                        <input class="form-control" type="date" name="mod_ano" id="mod_ano" value="<?php echo isset($modelo->mod_ano) ? $modelo->mod_ano : ""; ?>" placeholder="Digite o ano do veículo">
                                    </div>
                                    <div class="form-group">
                                        <label for="mod_placa">Placa</label>
                                        <?php echo isset($errors["mod_placa"]) ? "<span>".$errors["mod_placa"]."</span>" : "";?>
                                        <input class="form-control" type="text" name="mod_placa" id="mod_placa" value="<?php echo isset($modelo->mod_placa) ? $modelo->mod_placa : ""; ?>" placeholder="Digite o número da placa">
                                    </div>
                                    <div class="form-group">
                                        <label for="mod_chassi">Chassi</label>
                                        <?php echo isset($errors["mod_chassi"]) ? "<span>".$errors["mod_chassi"]."</span>" : "";?>
                                        <input class="form-control" type="text" name="mod_chassi" id="mod_chassi" value="<?php echo isset($modelo->mod_chassi) ? $modelo->mod_chassi : ""; ?>" placeholder="Digite o numero do chassis">
                                    </div>
                                    <div class="form-group">
                                        <label for="mod_observacao">Observação</label>
                                        <?php echo isset($errors["mod_observacao"]) ? "<span>".$errors["mod_observacao"]."</span>" : "";?>
                                        <input class="form-control" type="text" name="mod_observacao" id="mod_observacao" value="<?php echo isset($modelo->mod_observacao) ? $modelo->mod_observacao : ""; ?>" placeholder="Digite uma Observação">
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
