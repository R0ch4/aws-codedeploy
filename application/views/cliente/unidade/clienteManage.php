<?php defined('SYSPATH') or die('No direct script access.'); ?>

     <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Cadastro de Usuários
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="#">Usuário</a></li>
                    <li class="active">Cadastro de Usuário</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">

                    <div class="form-cadastro">
                        <!-- general form elements -->
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Cadastro de Usuários</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form role="form">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="name">Nome</label>
                                        <?php echo isset($errors["name"]) ? "<span>".$errors["name"]."</span>" : ""; ?>
                                        <input class="form-control" type="text" name="name" value="<?php echo isset($user->name) ? $user->name : ""; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label for="email1">Email</label>
                                        <?php echo isset($errors["email"]) ? "<span>".$errors["email"]."</span>" : ""; ?>
                                        <input class="form-control" type="text" name="email" value="<?php echo isset($user->email) ? $user->email : ""; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label for="cargo">Cargo</label>
                                        <?php echo isset($errors["cargo"]) ? "<span>".$errors["cargo"]."</span>" : "";?>
                                        <input class="form-control" type="text" name="cargo" id="cargo" placeholder="Digite o cargo">
                                    </div>
                                    <div class="form-group">
                                        <label for="telefone">Telefone</label>
                                        <?php echo isset($errors["telefone"]) ? "<span>".$errors["telefone"]."</span>" :"";?>
                                        <input class="form-control" type="text" name="telefone" id="telefone" placeholder="Digite o numero do Telefone">
                                    </div>
                                    <div class="form-group">
                                        <label for="matricula">Numero da matrícula</label>
                                        <?php echo isset($errors["matricula"]) ? "<span>".$errors["matricula"]."</span>" : "";?> 
                                        <input class="form-control" type="text" name="matricula" id="matricula" placeholder="Digite o numero da matrícula">
                                    </div>
                                    <div class="form-group">
                                        <label for="cpf">CPF</label>
                                        <?php echo isset($errors["cpf"]) ? "<span>".$errors["cpf"]."</span>" : ""; ?>
                                        <input class="form-control" type="text" name="cpf" id="cpf" placeholder="Digite o CPF">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <?php echo isset($errors["password"]) ? "<span>".$errors["password"]."</span>" : ""; ?>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="foto">File input</label>
                                        <input type="file" name="foto" id="foto">

                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Check me out
                                        </label>
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