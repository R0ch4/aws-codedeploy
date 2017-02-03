<?php defined('SYSPATH') or die('No direct script access.'); ?>
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Lista de Usuários
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="/user">Usuário</a></li>
                <li class="active">Lista de Usuário</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <a href="<?php echo URL::site('user/add/', null, false); ?>">Novo Usuário</a>
            <!-- /.row -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Lista de Usuários do Sistema</h3>

                            <div class="box-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Nº Matricula</th>
                                    <th>CPF</th>
                                    <th>Telefone</th>
                                    <!-- <th>Status</th> -->
                                    <th>Data de Admissão</th>
                                    <th colspan="2"></th>
                                </tr>
                                <?php
                                  foreach ($users as $user) {
                                    echo "<tr>";
                                    echo "<td>".$user->id."</td>";
                                    echo "<td>".$user->name."</td>";
                                    echo "<td>".$user->email."</td>";
                                    echo "<td>".$user->use_matricula."</td>";
                                    echo "<td>".$user->use_cpf."</td>";
                                    echo "<td>".$user->use_telefone."</td>";
                                    echo "<td>".date('d/m/Y', strtotime($user->use_data_reg_user))."</td>";
                                    echo "<td><a href=\"".URL::site('user/edit/'.$user->id, null, false)."\">Editar</a></td>";
                                    echo "<td><a href=\"".URL::site('user/delete/'.$user->id, null, false)."\">Excluir</a></td>";
                                    echo "</tr>\r\n";
                                  }
                                ?>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
