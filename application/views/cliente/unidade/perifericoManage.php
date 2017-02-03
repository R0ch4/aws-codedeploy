<?php defined('SYSPATH') or die('No direct script access.'); ?>

     <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Cadastro de Periféricos
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="#">Periféricos</a></li>
                    <li class="active">Cadastro de Periféricos</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">

                    <div class="form-cadastro">
                        <!-- general form elements -->
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Cadastro de Periféricos</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form role="form">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="per_nome">Nome</label>
                                        <?php echo isset($errors["per_nome"]) ? "<span>".$errors["per_nome"]."</span>" : "";?>
                                        <input class="form-control" type="text" name="per_nome" id="per_nome" placeholder="Digite o Nome do Periférico">
                                    </div>
                                    <div class="form-group">
                                        <label for="per_numero_serie">Número de Série</label>
                                        <?php echo isset($errors["per_numero_serie"]) ? "<span>".$errors["per_numero_serie"]."</span>" : "";?>
                                        <input class="form-control" type="text" name="per_numero_serie" id="per_numero_serie" placeholder="Digite o Número de Série">
                                    </div>
                                    <div class="form-group">
                                        <label for="per_status">Status</label>
                                        <?php echo isset($errors["per_status"]) ? "<span>".$errors["per_status"]."</span>" : "";?> 
                                        <input class="form-control" type="text" name="per_status" id="per_status" placeholder="Digite o Status">
                                    </div>
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