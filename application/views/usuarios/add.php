

        <?php $this->load->view('layout/sidebar'); ?>

        
<!-- Main Content -->
<div id="content">

    <?php $this->load->view('layout/navbar');  ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('usuarios'); ?>">Usuários</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
            </ol>
        </nav>

       


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
               <a title="Voltar" href="<?php echo base_url('usuarios') ?>" class="btn btn-success btn-sm float-right"><i class="fas fa-arrow-circle-left"></i>&nbsp; Voltar</a>
            </div>
            <div class="card-body">
                <form method="post" name="form_add">
                    <!-- Primeira linha-->
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label>Nome</label>
                            <input type="text" name="first_name" placeholder="Seu nome" class="form-control" value="<?php echo set_value('first_name'); ?>">
                            <?php echo form_error('first_name', '<small class="form-text text-danger">','</small>'); ?>
                        
                        </div>
                   
                        <div class="col-md-4">
                            <label>Sobrenome</label>
                            <input type="text" name="last_name" placeholder="Seu sobrenome" class="form-control" value="<?php echo set_value('last_name');  ?>">
                            <?php echo form_error('last_name', '<small class="form-text text-danger">','</small>'); ?>

                        </div>
                        <div class="col-md-4">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Seu email" class="form-control" value="<?php echo set_value('email'); ?>">
                            <?php echo form_error('email', '<small class="form-text text-danger">','</small>'); ?>

                        
                        </div>
                    </div>

                    <!-- Segunda linha-->
                   <div class="form-group row">

                        <div class="col-md-4">
                            <label>Usuario</label>
                            <input type="text" name="username" placeholder="Usuario" class="form-control" value="<?php echo set_value('username') ;?>">
                            <?php echo form_error('username', '<small class="form-text text-danger">','</small>'); ?>

                        </div>
                        <div class="col-md-4">
                            <label>Ativo</label>       
                            <select name="active" class="form-control" id="">
                                <option value="0" >Não</option>
                                <option value="1" >Sim</option>        
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label>Perfil de acesso</label>         
                            <select name="perfil_usuario" class="form-control" id="">
                                <option value="2">Vendedor</option>
                                <option value="1">Administrador</option>        
                            </select>
                        </div>
                   </div>
                    
                   <!-- Terça linha-->

                    <div class="form-group row">
                        <div class="col-md-6">
                            <label>Senha</label>
                            <input type="password" name="password" placeholder="Sua senha" class="form-control" value="">
                            <?php echo form_error('password', '<small class="form-text text-danger">','</small>'); ?>
                        </div>
                        <div class="col-md-6">
                            <label>Confirma senha</label>
                            <input type="password" name="confirm_password" placeholder="Confirma sua senha" class="form-control" value="">
                            <?php echo form_error('confirm_password', '<small class="form-text text-danger">','</small>'); ?>

                        </div>

                    </div>


                    <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                </form>
            </div>
        </div>
        
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
