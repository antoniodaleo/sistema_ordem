
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5" style="margin-top: 20em !important;" >
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row ">

                            

                            <div class="col-lg-12">

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

                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Sistema de Ordem</h1>
                                    </div>
                                    <form class="user" name="form_index" method="post">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                            placeholder="Seu email..."  name="email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                            placeholder="Senha" name="password">
                                        </div>
                                        
                                       <button type="submit" class="btn btn-primary btn-user btn-block"> Entrar </button>
                                                                           
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

   

   