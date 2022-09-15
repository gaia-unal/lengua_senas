<?php

class glosariocategoria extends CI_Controller{
    public function __construct() {
        parent::__construct();
        /*$this->load->model('alfabeto_model');*/
    }
    
    public function index(){
        $id=$_GET['id'];

        if($id==1){
          $content = array(
                'title=' > 'Glosario Alfabeto: LSC',
                'main' => 'glosarioalf_view'
            );
            $this->load->view('include/main_template', $content);
        } else if($id==2){
            $content = array(
                'title=' > 'Glosario Alimentos : LSC',
                'main' => 'glosarioali_view'
            );
            $this->load->view('include/main_template', $content);

        } else if($id==3){
            $content = array(
                'title=' > 'Glosario Animales : LSC',
                'main' => 'glosarioani_view'
            );
            $this->load->view('include/main_template', $content);
        } else if($id==4){
            $content = array(
                'title=' > 'Glosario Colores : LSC',
                'main' => 'glosariocol_view'
            );
            $this->load->view('include/main_template', $content);

        } else if($id==5){
            $content = array(
                'title=' > 'Glosario CuerpoHumano : LSC',
                'main' => 'glosariocue_view'
            );
            $this->load->view('include/main_template', $content);

        } else if($id==6){
            $content = array(
                'title=' > 'Glosario Deportes : LSC',
                'main' => 'glosariodep_view'
            );
            $this->load->view('include/main_template', $content);

        } else if($id==7){
            $content = array(
                'title=' > 'Glosario Dias : LSC',
                'main' => 'glosariodia_view'
            );
            $this->load->view('include/main_template', $content);

        } else if($id==8){
            $content = array(
                'title=' > 'Glosario Duda : LSC',
                'main' => 'glosariodud_view'
            );
            $this->load->view('include/main_template', $content);
        } else if($id==9){
            $content = array(
                'title=' > 'Glosario Elementos : LSC',
                'main' => 'glosarioele_view'
            );
            $this->load->view('include/main_template', $content);

        } else if($id==10){
            $content = array(
                'title=' > 'Glosario Familia : LSC',
                'main' => 'glosariofam_view'
            );
            $this->load->view('include/main_template', $content);

        } else if($id==11){
            $content = array(
                'title=' > 'Glosario Lugares : LSC',
                'main' => 'glosariolug_view'
            );
            $this->load->view('include/main_template', $content);
        } else if($id==12){
            $content = array(
                'title=' > 'Glosario Meses : LSC',
                'main' => 'glosariomes_view'
            );
            $this->load->view('include/main_template', $content);

        } else if($id==13){
            $content = array(
                'title=' > 'Glosario Numeros : LSC',
                'main' => 'glosarionum_view'
            );
            $this->load->view('include/main_template', $content);

        } else if($id==14){
            $content = array(
                'title=' > 'Glosario Paises : LSC',
                'main' => 'glosariopai_view'
            );
            $this->load->view('include/main_template', $content);

        } else if($id==15){
            $content = array(
                'title=' > 'Glosario Preguntas : LSC',
                'main' => 'glosariopre_view'
            );
            $this->load->view('include/main_template', $content);
        } else if($id==16){
            $content = array(
                'title=' > 'Glosario Profesiones : LSC',
                'main' => 'glosariopro_view'
            );
            $this->load->view('include/main_template', $content);

        } else if($id==17){
            $content = array(
                'title=' > 'Glosario SaludosyAgradecimientos : LSC',
                'main' => 'glosariosal_view'
            );
            $this->load->view('include/main_template', $content);

        } else if($id==18){
            $content = array(
                'title=' > 'Glosario Verbos : LSC',
                'main' => 'glosariover_view'
            );
            $this->load->view('include/main_template', $content);

        } else if($id==19){
            $content = array(
                'title=' > 'Glosario Vestidos : LSC',
                'main' => 'glosarioves_view'
            );
            $this->load->view('include/main_template', $content);

        }         
        
        }
    }
?>