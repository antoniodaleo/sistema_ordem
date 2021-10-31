

<?php $this->load->view('layout/sidebar'); ?>

        
<!-- Main Content -->
<div id="content">

    <?php $this->load->view('layout/navbar');  ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('clientes'); ?>">Clientes</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
            </ol>
        </nav>

       


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
               <a title="Cadstrar" href="<?php echo base_url('clientes') ?>" class="btn btn-success btn-sm float-right"><i class="fas fa-arrow-circle-left"></i>&nbsp; Voltar</a>
            </div>
            <div class="card-body">
                <form method="post" name="form_edit" class="user">
                    <!-- Primeira linha-->
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label>Nome </label>
                            <input type="text" name="cliente_nome" placeholder="Nome do cliente" class="form-control form-control-user" value="<?php echo $cliente->cliente_nome; ?>">
                            <?php echo form_error('cliente_nome', '<small class="form-text text-danger">','</small>'); ?>
                        </div>        
                        <div class="col-md-3">
                            <label>Sobrenome</label>
                            <input type="text" name="cliente_sobrenome" placeholder="Sobrenome do cliente" class="form-control form-control-user" value="<?php echo $cliente->cliente_sobrenome; ?>">
                            <?php echo form_error('cliente_sobrenome', '<small class="form-text text-danger">','</small>'); ?>
                        </div>
                        <div class="col-md-3">
                            <label>CPF ou CNPJ</label>
                            <input type="text" name="cliente_cpf_cnpj" placeholder="CPF | CNPJ" class="form-control form-control-user cnpj" value="<?php echo $cliente->cliente_cpf_cnpj; ?>">
                            <?php echo form_error('cliente_cpf_cnpj', '<small class="form-text text-danger">','</small>'); ?>
                        </div>
                        <div class="col-md-3">
                            <label>RG ou I.E.</label>
                            <input type="text" name="cliente_rg_ie" placeholder="RG ie" class="form-control form-control-user" value="<?php echo $cliente->cliente_rg_ie; ?>">
                            <?php echo form_error('cliente_rg_ie', '<small class="form-text text-danger">','</small>'); ?>
                        </div>
                        
                    </div>
                    
                    <!-- Segunda linha-->
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label>Email</label>
                            <input type="text" name="cliente_email" placeholder="Email" class="form-control form-control-user" value="<?php echo $cliente->cliente_email; ?>">
                            <?php echo form_error('cliente_email', '<small class="form-text text-danger">','</small>'); ?>
                        </div>        
                        <div class="col-md-2">
                            <label>Telefone</label>
                            <input type="text" name="cliente_telefone" placeholder="Telefone" class="form-control form-control-user sp_celphones" value="<?php echo $cliente->cliente_telefone; ?>">
                            <?php echo form_error('cliente_telefone', '<small class="form-text text-danger">','</small>'); ?>
                        </div>
                        <div class="col-md-3">
                            <label>Celular</label>
                            <input type="text" name="cliente_celular" placeholder="Celular" class="form-control form-control-user sp_celphones" value="<?php echo $cliente->cliente_celular; ?>">
                            <?php echo form_error('cliente_celular', '<small class="form-text text-danger">','</small>'); ?>
                        </div>   
                        <div class="col-md-3">
                            <label>Data de Nascimento</label>
                            <input type="date" name="cliente_data_nascimento" class="form-control form-control-user" value="<?php echo $cliente->cliente_data_nascimento; ?>">
                            <?php echo form_error('cliente_data_nascimento', '<small class="form-text text-danger">','</small>'); ?>
                        </div>   
                    </div>

                    <!-- Terca linha-->
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label>CEP</label>
                            <input type="text" name="cliente_cep" placeholder="Cep" class="form-control form-control-user cep" value="<?php echo $cliente->cliente_cep; ?>">
                            <?php echo form_error('cliente_cep', '<small class="form-text text-danger">','</small>'); ?>
                        </div>        
                        
                        <div class="col-md-4">
                            <label>Endereço</label>
                            <input type="text" name="cliente_endereco" placeholder="Endereço" class="form-control form-control-user" value="<?php echo $cliente->cliente_endereco; ?>">
                            <?php echo form_error('cliente_endereco', '<small class="form-text text-danger">','</small>'); ?>
                        </div>     
                        <div class="col-md-2">
                            <label>Num.</label>
                            <input type="text" name="cliente_numero_endereco" placeholder="Num." class="form-control form-control-user" value="<?php echo $cliente->cliente_numero_endereco; ?>">
                            <?php echo form_error('cliente_numero_endereco', '<small class="form-text text-danger">','</small>'); ?>
                        </div>  
                        <div class="col-md-4">
                            <label>Bairro</label>
                            <input type="text" name="cliente_bairro" placeholder="Bairro" class="form-control form-control-user" value="<?php echo $cliente->cliente_bairro; ?>">
                            <?php echo form_error('cliente_bairro', '<small class="form-text text-danger">','</small>'); ?>
                        </div>  


                    </div>

                    <!-- Quarta linha-->
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label>Complemento</label>
                            <input type="text" name="cliente_complemento" placeholder="" class="form-control form-control-user" value="<?php echo $cliente->cliente_complemento; ?>">
                            <?php echo form_error('cliente_complemento', '<small class="form-text text-danger">','</small>'); ?>
                        </div>        
                        
                        <div class="col-md-4">
                            <label>Cidade</label>
                            <input type="text" name="cliente_cidade" placeholder="" class="form-control form-control-user" value="<?php echo $cliente->cliente_cidade; ?>">
                            <?php echo form_error('cliente_cidade', '<small class="form-text text-danger">','</small>'); ?>
                        </div>     
                        <div class="col-md-2">
                            <label>Estado</label>
                            <input type="text" name="cliente_estado" placeholder="" class="form-control form-control-user uf" value="<?php echo $cliente->cliente_estado; ?>">
                            <?php echo form_error('cliente_estado', '<small class="form-text text-danger">','</small>'); ?>
                        </div>  
                        <div class="col-md-4">
                            <label>Observação</label>
                            <textarea name="cliente_obs" class="form-control form-control-user"><?php echo $cliente->cliente_obs; ?></textarea>                            
                            
                            
                            <?php echo form_error('cliente_obs', '<small class="form-text text-danger">','</small>'); ?>
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
