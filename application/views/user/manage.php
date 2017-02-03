<?php defined('SYSPATH') or die('No direct script access.'); ?>

     <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Cadastro de Usuário
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="<?php echo URL::site('user/', null, false); ?>">Usuário</a></li>
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

                            <form role="form" method="post">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="name">Nome</label>
                                        <span class="error_form" id="name_error_message"></span>
                                        <input class="form-control" id="name" type="text" name="name" placeholder="Digite o nome completo" value="<?php echo isset($user->name) ? $user->name : ""; ?>" >
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <span class="error_form" id="email_error_message"></span>
                                        <input class="form-control" id="email" type="text" name="email" placeholder="Digite o seu@email.com" value="<?php echo isset($user->email) ? $user->email : ""; ?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <span class="error_form" id="password_error_message"></span>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo isset($user->password) ? $user->password : ""; ?>">
                                    </div>
                                    <!-- <div class="form-group">
                                        <label for="cargo">Cargo</label>
                                        <?php /* echo isset($errors["cargo"]) ? "<span>".$errors["cargo"]."</span>" : ""; */?>
                                        <input class="form-control" type="text" name="cargo" id="cargo" placeholder="Digite o cargo">
                                    </div> -->
                                    <div class="form-group">
                                        <label for="use_login">Login</label>
                                        <span class="error_form" id="login_error_message"></span>
                                        <input class="form-control" type="text" name="use_login" id="use_login"  placeholder="Digite o login com mais de 4 caracteres" value="<?php echo isset($user->use_login) ? $user->use_login : ""; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="use_matricula">Numero da matrícula</label>
                                        <span class="error_form" id="matricula_error_message"></span>
                                        <input class="form-control" type="text" name="use_matricula" id="use_matricula" placeholder="Digite o numero da matrícula" value="<?php echo isset($user->use_matricula) ? $user->use_matricula : ""; ?>" >
                                    </div>
                                    <div class="form-group">
                                        <label for="use_cpf">CPF</label>
                                        <span class="error_form" id="cpf_error_message"></span>
                                        <input class="form-control" maxlength="14" type="text" name="use_cpf" id="use_cpf"  placeholder="Digite o CPF" onkeypress="formatar('###.###.###-##', this)" value="<?php echo isset($user->use_cpf) ? $user->use_cpf : ""; ?>" >
                                    </div>
                                    <div class="form-group">
                                        <label for="use_telefone">Telefone</label>
                                        <span class="error_form" id="telefone_error_message"></span>
                                        <input class="" type="text" name="use_telefone" id="use_telefone" value="<?php echo isset($user->use_telefone) ? $user->use_telefone : ""; ?>" />
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="use_data_reg_user">Data de admissão</label>
                                        <span class="error_form" id="data_error_message"></span>
                                        <input class="form-control" type="date" data-date="" data-date-format="DD MMMM YYYY" name="use_data_reg_user" id="use_data_reg" value="<?php echo isset($user->use_data_reg_user) ? $user->use_data_reg_user : ""; ?>" >
                                        <date-util format="dd/MM/yyyy"></date-util>
                                    </div>

                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>

                                    <!-- <div class="form-group">
                                        <label for="foto">File input</label>
                                        <input type="file" name="foto" id="foto">

                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Check me out
                                        </label>
                                    </div> -->
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
