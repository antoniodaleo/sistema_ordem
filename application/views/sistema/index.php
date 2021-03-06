

<?php $this->load->view('layout/sidebar'); ?>

        
<!-- Main Content -->
<div id="content">

    <?php $this->load->view('layout/navbar');  ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
            </ol>
        </nav>
        
        <?php if($message = $this->session->flashdata('sucesso')): ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><i class="fas fa-exclamation-triangle"></i> &nbsp; <?php echo $message;  ?></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
            
        <?php endif; ?>
       
        <?php if($message = $this->session->flashdata('error')): ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong><i class="fas fa-exclamation-triangle"></i> &nbsp; <?php echo $message;  ?></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
            
        <?php endif; ?>
       

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            
            <div class="card-body">
                <form class="user" method="post" name="form_edit">
                    <!-- Primeira linha-->
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label>Raz??o social</label>
                            <input type="text" name="sistema_razao_social" placeholder="Raz??o Social" class="form-control form-control-user" value="<?php echo $sistema->sistema_razao_social; ?>">
                            <?php echo form_error('sistema_razao_social', '<small class="form-text text-danger">','</small>'); ?>                  
                        </div>
                        <div class="col-md-3">
                            <label>Nome fantasia</label>
                            <input type="text" name="sistema_nome_fantasia" placeholder="Nome fantasia" class="form-control form-control-user" value="<?php echo $sistema->sistema_nome_fantasia; ?>">
                            <?php echo form_error('sistema_nome_fantasia', '<small class="form-text text-danger">','</small>'); ?>
                        </div>
                        <div class="col-md-3">
                            <label>CNPJ</label>
                            <input type="text" name="sistema_cnpj " placeholder="CNPJ" class="form-control form-control-user cnpj" value="<?php echo $sistema->sistema_cnpj; ?>">
                            <?php echo form_error('sistema_cnpj', '<small class="form-text text-danger">','</small>'); ?>
                        </div>
                        <div class="col-md-3">
                            <label>Inscri????o estadual</label>
                            <input type="text" name="sistema_ie" placeholder="IE" class="form-control form-control-user" value="<?php echo $sistema->sistema_ie; ?>">
                            <?php echo form_error('sistema_ie', '<small class="form-text text-danger">','</small>'); ?>
                        </div>
                    </div>

                    <!-- Segunda linha-->
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label>Telefone fixo</label>
                            <input type="text" name="sistema_telefone_fixo" placeholder="Telefone fixo" class="form-control form-control-user sp_celphones" value="<?php echo $sistema->sistema_telefone_fixo; ?>">
                            <?php echo form_error('sistema_telefone_fixo', '<small class="form-text text-danger">','</small>'); ?>                  
                        </div>
                        <div class="col-md-3">
                            <label>Telefone movel</label>
                            <input type="text" name="sistema_telefone_movel" placeholder="Telefone movel" class="form-control form-control-user sp_celphones" value="<?php echo $sistema->sistema_telefone_movel; ?>">
                            <?php echo form_error('sistema_telefone_movel', '<small class="form-text text-danger">','</small>'); ?>
                        </div>
                        <div class="col-md-3">
                            <label>Email</label>
                            <input type="text" name="sistema_email" placeholder="Email" class="form-control form-control-user" value="<?php echo $sistema->sistema_email; ?>">
                            <?php echo form_error('sistema_email', '<small class="form-text text-danger">','</small>'); ?>
                        </div>
                        <div class="col-md-3">
                            <label>Site Web</label>
                            <input type="text" name="sistema_site_url" placeholder="Site Web" class="form-control form-control-user" value="<?php echo $sistema->sistema_site_url; ?>">
                            <?php echo form_error('sistema_site_url', '<small class="form-text text-danger">','</small>'); ?>
                        </div>
                    </div>

                    <!-- Ter??a linha-->
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label>Endere??o</label>
                            <input type="text" name="sistema_endereco" placeholder="Ender??o" class="form-control form-control-user" value="<?php echo $sistema->sistema_endereco; ?>">
                            <?php echo form_error('sistema_endereco', '<small class="form-text text-danger">','</small>'); ?>                  
                        </div>
                        <div class="col-md-2">
                            <label>CEP</label>
                            <input type="text" name="sistema_cep" placeholder="CEP" class="form-control form-control-user" value="<?php echo $sistema->sistema_cep; ?>">
                            <?php echo form_error('sistema_cep', '<small class="form-text text-danger">','</small>'); ?>                  
                        </div>
                        <div class="col-md-2">
                            <label>Numero</label>
                            <input type="text" name="sistema_numero" placeholder="Num." class="form-control form-control-user" value="<?php echo $sistema->sistema_numero; ?>">
                            <?php echo form_error('sistema_numero', '<small class="form-text text-danger">','</small>'); ?>
                        </div>
                        <div class="col-md-2">
                            <label>Cidade</label>
                            <input type="text" name="sistema_cidade" placeholder="Cidade" class="form-control form-control-user" value="<?php echo $sistema->sistema_cidade; ?>">
                            <?php echo form_error('sistema_cidade', '<small class="form-text text-danger">','</small>'); ?>
                        </div>
                        <div class="col-md-2">
                            <label>UF</label>
                            <input type="text" name="sistema_estado" placeholder="UF" class="form-control  form-control-user uf" value="<?php echo $sistema->sistema_estado; ?>">
                            <?php echo form_error('sistema_estado', '<small class="form-text text-danger">','</small>'); ?>
                        </div>
                    </div>

                    <!-- Quarta linha-->
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label>Texto da ordem de servi??o e venda</label>
                            <textarea class="form-control form-control-user" name="sistema_txt_ordem_servico" placeholder="Texto da ordem">  
                                <?php echo $sistema->sistema_txt_ordem_servico ?>
                            </textarea>
                            
                            <?php echo form_error('sistema_txt_ordem_servico', '<small class="form-text text-danger">','</small>'); ?>                  
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
