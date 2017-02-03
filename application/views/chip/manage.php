<?php defined('SYSPATH') or die('No direct script access.'); ?>

     <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Cadastro de Chips</h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="<?php echo URL::site('chip/', null, false); ?>">Chip</a></li>
                    <li class="active">Cadastro de Chip</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">

                    <div class="form-cadastro">
                        <!-- general form elements -->
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Cadastro de Chip</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form role="form" method="post">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="chi_codigo">Código</label>
                                        <?php echo isset($errors["chi_codigo"]) ? "<span>".$errors["chi_codigo"]."</span>" : ""; ?>
                                        <input class="form-control" type="text" name="chi_codigo" value="<?php echo isset($chip->chi_codigo) ? $chip->chi_codigo : ""; ?>" placeholder="Digite o códgio"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="chi_status">Status</label>
                                        <?php echo isset($errors["chi_status"]) ? "<span>".$errors["chi_status"]."</span>" : ""; ?>
                                        <input class="form-control" type="text" name="chi_status" value="<?php echo isset($chip->chi_status) ? $chip->chi_status : ""; ?>" placeholder="Digite o status do chip"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="chi_pin">PIN</label>
                                        <?php echo isset($errors["chi_pin"]) ? "<span>".$errors["chi_pin"]."</span>" :"";?>
                                        <input class="form-control" type="text" name="chi_pin" id="chi_pin" value="<?php echo isset($chip->chi_pin) ? $chip->chi_pin : ""; ?>" placeholder="Digite o número do PIN">
                                    </div>
                                    <div class="form-group">
                                        <label for="dev_id">Device</label>
                                        <?php echo isset($errors["dev_id"]) ? "<span>".$errors["dev_id"]."</span>" :"";?>
                                        <select class="form-control" name="dev_id" id="dev_id">
                                          <?php foreach ($devices as $device) { ?>
                                            <option value="<?php echo $device->dev_id; ?>" <?php echo isset($chip->dev_id) && $device->dev_id==$chip->dev_id ? 'selected' : ''; ?> ><?php echo $device->dev_modelo; ?></option>
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
