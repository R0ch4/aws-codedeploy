<?php defined('SYSPATH') or die('No direct script access.'); ?>

     <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Cadastro de Módulos MTC
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="#">Módulos MTC</a></li>
                    <li class="active">Cadastro de Módulos MTC</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">

                    <div class="form-cadastro">
                        <!-- general form elements -->
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Cadastro de Módulos MTC</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form role="form">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="dev_imei">IMEI</label>
                                        <?php echo isset($errors["dev_imei"]) ? "<span>".$errors["dev_imei"]."</span>" : "";?>
                                        <input class="form-control" type="text" name="dev_imei" id="dev_imei" placeholder="Digite o IMEI">
                                    </div>
                                    <div class="form-group">
                                        <label for="dev_modelo">Modelo</label>
                                        <?php echo isset($errors["dev_modelo"]) ? "<span>".$errors["dev_modelo"]."</span>" : "";?>
                                        <input class="form-control" type="text" name="dev_modelo" id="dev_modelo" placeholder="Digite o Modelo">
                                    </div>
                                    <div class="form-group">
                                        <label for="dev_nota_fiscal">Nota Fiscal</label>
                                        <?php echo isset($errors["dev_nota_fiscal"]) ? "<span>".$errors["dev_nota_fiscal"]."</span>" : "";?>
                                        <input class="form-control" type="text" name="dev_nota_fiscal" id="dev_nota_fiscal" placeholder="Digite o número da Nota Fiscal">
                                    </div>
                                    <div class="form-group">
                                        <label for="dev_xml_nf">XML da Nota Fiscal</label>
                                        <?php echo isset($errors["dev_xml_nf"]) ? "<span>".$errors["dev_xml_nf"]."</span>" :"";?>
                                        <input class="form-control" type="text" name="dev_xml_nf" id="dev_xml_nf" placeholder="Digite a XML da Nota Fiscal">
                                    </div>
                                    <div class="form-group">
                                        <label for="dev_status">Status</label>
                                        <?php echo isset($errors["dev_status"]) ? "<span>".$errors["dev_status"]."</span>" : "";?> 
                                        <input class="form-control" type="text" name="dev_status" id="dev_status" placeholder="Digite o Status">
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