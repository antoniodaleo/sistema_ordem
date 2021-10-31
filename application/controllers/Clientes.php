<?php 

defined('BASEPATH') OR exit('Ação não permitida'); 

class Clientes extends CI_Controller{
    public function __construct(){

        parent::__construct(); 
        if(!$this->ion_auth->logged_in()){
            $this->session->set_flashdata('info', 'Sua sessão expirou'); 
            redirect('login');
        }
        
    }


    public function index(){

        $data = array(
            'titulo' => 'Clientes cadastrados', 

            'styles' => array(
                'vendor/datatables/dataTables.bootstrap4.min.css',
            ),

            'scripts' => array(
                'vendor/datatables/jquery.dataTables.min.js',
                'vendor/datatables/dataTables.bootstrap4.min.js',
                'vendor/datatables/app.js',
            ),

            'clientes' => $this->core_model->get_all('clientes'), 
        );


       

        $this->load->view('layout/header', $data);
        $this->load->view('clientes/index'); 
        $this->load->view('layout/footer'); 
    }

    public function edit($cliente_id = null){
        if(!$cliente_id || !$this->core_model->get_by_id('clientes', array('cliente_id', $cliente_id))){
            $this->session->set_flashdata('error', 'Cliente não encontrado'); 
            redirect('clientes'); 
        }else{

            $this->form_validation->set_rules('cliente_nome','','trim|required|mint_length[4]|max_length[45]');
            $this->form_validation->set_rules('cliente_sobrenome','','trim|required|mint_length[4]|max_length[45]');
            $this->form_validation->set_rules('cliente_data_nascimento','','required');
            $this->form_validation->set_rules('cliente_cpf_cnpj','','trim|required|exact_length[18]');
            $this->form_validation->set_rules('cliente_rg_ie','','trim|required|exact_length[20]');

            $this->form_validation->set_rules('cliente_email','','trim|required|valid_email|max_length[50]');
            $this->form_validation->set_rules('cliente_telefone','','trim|max_length[14]');
            $this->form_validation->set_rules('cliente_celular','','trim|max_length[15]');

            $this->form_validation->set_rules('cliente_cep','','trim|required|exact_length[9]');
            $this->form_validation->set_rules('cliente_endereco','','trim|required|max_length[155]');
            $this->form_validation->set_rules('cliente_numero_endereco','','trim|max_length[20]');

            $this->form_validation->set_rules('cliente_bairro','','trim|required|max_length[40]');
            $this->form_validation->set_rules('cliente_complemento','','trim|max_length[145]');
            $this->form_validation->set_rules('cliente_cidade','','trim|required|max_length[50]');

            $this->form_validation->set_rules('cliente_estado','','trim|required|exact_length[2]');
            $this->form_validation->set_rules('cliente_obs','','trim|max_length[500]');

            if($this->form_validation->run()){
                

                exit('Validado'); 

            }else{

                $data = array(
                    'titulo' => 'Atualizar cliente', 
        
                    'scripts' => array(
                        'vendor/mask/jquery.mask.min.js',
                        'vendor/mask/app.js',
                    ), 
        
                    'cliente'=> $this->core_model->get_by_id('clientes',array('cliente_id' =>$cliente_id)),
                );
                
                /*
                echo '<pre>'; 
                print_r($data['cliente']); 
                exit(); 
                */
        
                $this->load->view('layout/header', $data);
                $this->load->view('clientes/edit'); 
                $this->load->view('layout/footer');  
            }

        }
    }


    /*
    
            [cliente_id] => 1
            [cliente_data_cadastro] => 2021-10-31 08:43:56
            [cliente_tipo] => 
            [cliente_nome] => antonio 
            [cliente_sobrenome] => daleo
            [cliente_data_nascimento] => 2021-10-13
            [cliente_cpf_cnpj] => 618.263.273-98
            [cliente_rg_ie] => 
            [cliente_email] => antoniodaleo@outlook.com
            [cliente_telefone] => 85988601287
            [cliente_celular] => 85988601287
            [cliente_cep] => 
            [cliente_endereco] => 
            [cliente_numero_endereco] => 
            [cliente_bairro] => 
            [cliente_complemento] => 
            [cliente_cidade] => 
            [cliente_estado] => 
            [cliente_ativo] => 0
            [cliente_obs] => 
            [cliente_data_alteracao] => 2021-10-31 08:43:56
    
    */


}