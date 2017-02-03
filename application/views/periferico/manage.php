<?php defined('SYSPATH') or die('No direct script access.'); ?>

     <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Cadastro de Periféricos</h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="<?php echo URL::site('periferico/', null, false); ?>">Periférico</a></li>
                    <li class="active">Cadastro de Periférico</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">

                    <div class="form-cadastro">
                        <!-- general form elements -->
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Cadastro de Periférico</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form role="form" method="post">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="per_nome">Nome do Periférico</label>
                                        <?php echo isset($errors["per_nome"]) ? "<span>".$errors["per_nome"]."</span>" : ""; ?>
                                        <input class="form-control" type="text" name="per_nome" value="<?php echo isset($periferico->per_nome) ? $periferico->per_nome : ""; ?>" placeholder="Digite o nome do Periférico"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="per_numero_serie">Número de Série</label>
                                        <?php echo isset($errors["per_numero_serie"]) ? "<span>".$errors["per_numero_serie"]."</span>" :"";?>
                                        <input class="form-control" type="text" name="per_numero_serie" id="per_numero_serie" value="<?php echo isset($periferico->per_numero_serie) ? $periferico->per_numero_serie : ""; ?>" placeholder="Digite o número de série">
                                    </div>
                                    <div class="form-group">
                                        <label for="per_status">Status</label>
                                        <?php echo isset($errors["per_status"]) ? "<span>".$errors["per_status"]."</span>" :"";?>
                                        <input class="form-control" name="per_status" id="per_status" value="<?php echo isset($periferico->per_status) ? $periferico->per_status : ""; ?>" placeholder="Digite o Status do Periférico">
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
