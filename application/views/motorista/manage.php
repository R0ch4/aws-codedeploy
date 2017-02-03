<?php defined('SYSPATH') or die('No direct script access.'); ?>

     <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Cadastro de Motoristas</h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="<?php echo URL::site('motorista/', null, false); ?>">Motorista</a></li>
                    <li class="active">Cadastro de Motorista</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">

                    <div class="form-cadastro">
                        <!-- general form elements -->
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Cadastro de Motorista</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form role="form" method="post">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="mot_nome">Nome</label>
                                        <?php echo isset($errors["mot_nome"]) ? "<span>".$errors["mot_nome"]."</span>" : ""; ?>
                                        <input class="form-control" type="text" name="mot_nome" value="<?php echo isset($motorista->mot_nome) ? $motorista->mot_nome : ""; ?>" placeholder="Digite o nome do motorista"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="mot_status">Status</label>
                                        <?php echo isset($errors["mot_status"]) ? "<span>".$errors["mot_status"]."</span>" : ""; ?>
                                        <input class="form-control" type="text" name="mot_status" value="<?php echo isset($motorista->mot_status) ? $motorista->mot_status : ""; ?>" placeholder="Digite o status atual do motorista"/>
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
