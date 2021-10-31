<?php 

defined('BASEPATH') OR exit('Ação não permitida');

class Sistema extends CI_Controller{
    public function __construct(){
        parent::__construct(); 

        //Se não tiver logado ridereciona para o login
        if(!$this->ion_auth->logged_in()){
            $this->session->set_flashdata('info', 'Sua sessão expirou'); 
            redirect('login');
        }
    
    }


    public function index(){

        $data = array(
            'titulo' => 'Editar informações do sistema', 

            'scripts' => array(
                'vendor/mask/jquery.mask.min.js',
                'vendor/mask/app.js',
            ), 

            'sistema'=> $this->core_model->get_by_id('sistema',array('sistema_id' =>1)),

        ); 

        $this->form_validation->set_rules('sistema_razao_social','Razão social','required|min_length[10]|max_length[145]'); 
        $this->form_validation->set_rules('sistema_nome_fantasia','Nome fantasia','required|min_length[10]|max_length[145]');
        $this->form_validation->set_rules('sistema_cnpj','CNPJ','required|exact_length[18]'); //18 caracteres
        $this->form_validation->set_rules('sistema_ie','','max_length[25]');
        $this->form_validation->set_rules('sistema_telefone_fixo','','required|max_length[25]');
        $this->form_validation->set_rules('sistema_telefone_movel','','required|max_length[25]');
        $this->form_validation->set_rules('sistema_email','','required|valid_email|max_length[100]');
        $this->form_validation->set_rules('sistema_site_url','URL do site','required|valid_url|max_length[100]');
        $this->form_validation->set_rules('sistema_cep','Cep','required|max_length[9]');
        $this->form_validation->set_rules('sistema_endereco','Endereço','required|max_length[100]');
        $this->form_validation->set_rules('sistema_numero','Numero','max_length[25]');
        $this->form_validation->set_rules('sistema_cidade','Cidade','required|max_length[45]');
        $this->form_validation->set_rules('sistema_estado','UF','required|max_length[2]');
        $this->form_validation->set_rules('sistema_txt_ordem_servico','Texto da ordem de serviço e venda','required');



        if($this->form_validation->run()){

            $data = elements(
                array(
                    'sistema_razao_social',
                    'sistema_nome_fantasia',
                    'sistema_cnpj',
                    'sistema_ie',
                    'sistema_telefone_fixo',
                    'sistema_telefone_movel',
                    'sistema_email',
                    'sistema_site_url',
                    'sistema_cep',
                    'sistema_endereco',
                    'sistema_numero',
                    'sistema_cidade',
                    'sistema_estado',
                    'sistema_txt_ordem_servico',
                ), $this->input->post()
            );

            $data = html_escape($data);

            $this->core_model->update('sistema', $data, array('sistema_id' => 1));

            redirect('sistema');

        }else{

            $this->load->view('layout/header',$data);
            $this->load->view('sistema/index'); 
            $this->load->view('layout/footer');
        }

        
    }


}


/*
    [sistema_id] => 1
    [sistema_razao_social] => concentrix
    [sistema_nome_fantasia] => concentrix
    [sistema_cnpj] => 06.160.654/0001-69
    [sistema_ie] => 
    [sistema_telefone_fixo] => 
    [sistema_telefone_movel] => 
    [sistema_email] => cnx@concentrix.com
    [sistema_site_url] => www.concentrix.com
    [sistema_cep] => 88950-854
    [sistema_endereco] => rua araujo torreao 
    [sistema_numero] => 567
    [sistema_cidade] => fortaleza
    [sistema_estado] => ce
    [sistema_txt_ordem_servico] => 
    [sistema_data_alteracao] => 2021-10-31 06:09:52


*/