<?php defined('SYSPATH') or die('No direct script access.'); ?>

     <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Cadastro de Placas</h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="<?php echo URL::site('placa/', null, false); ?>">Placa</a></li>
                    <li class="active">Cadastro de Placa</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">

                    <div class="form-cadastro">
                        <!-- general form elements -->
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Cadastro de Placa</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form role="form" method="post">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="pla_placa">Placa</label>
                                        <?php echo isset($errors["pla_placa"]) ? "<span>".$errors["pla_placa"]."</span>" : ""; ?>
                                        <input class="form-control" type="text" name="pla_placa" value="<?php echo isset($placa->pla_placa) ? $placa->pla_placa : ""; ?>" placeholder="Digite a Placa do veículo"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="pla_status">Status</label>
                                        <?php echo isset($errors["pla_status"]) ? "<span>".$errors["pla_status"]."</span>" : ""; ?>
                                        <input class="form-control" type="text" name="pla_status" value="<?php echo isset($placa->pla_status) ? $placa->pla_status : ""; ?>" placeholder="Digite o status do veículo"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="mod_id">Modelo</label>
                                        <?php echo isset($errors["mod_id"]) ? "<span>".$errors["mod_id"]."</span>" :"";?>
                                        <select class="form-control" name="mod_id" id="mod_id">
                                          <?php foreach ($modelos as $modelo) { ?>
                                            <option value="<?php echo $modelo->mod_id; ?>" <?php echo isset($placa->mod_id) && $modelo->mod_id==$placa->mod_id ? 'selected' : ''; ?> ><?php echo $modelo->mod_modelo; ?></option>
                                          <?php } ?>
                                        </select>
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
